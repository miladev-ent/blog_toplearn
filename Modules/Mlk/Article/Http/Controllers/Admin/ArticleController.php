<?php

namespace Mlk\Article\Http\Controllers\Admin;

use Mlk\Article\Http\Requests\ArticleRequest;
use Mlk\Article\Models\Article;
use Mlk\Article\Repositories\ArticleRepo;
use Mlk\Article\Services\ArticleService;
use Mlk\Category\Repositories\CategoryRepo;
use Mlk\Share\Http\Controllers\Controller;
use Mlk\Share\Repositories\ShareRepo;
use Mlk\Share\Services\ShareService;

class ArticleController extends Controller
{
    private string $class = Article::class;

    public ArticleRepo $repo;
    public ArticleService $service;

    public function __construct(ArticleRepo $articleRepo, ArticleService $articleService)
    {
        $this->repo = $articleRepo;
        $this->service = $articleService;
    }

    public function index()
    {
        $this->authorize('manage', $this->class);
        $articles = $this->repo->index()->paginate(10);

        return view('Article::Admin.index', compact('articles'));
    }

    public function create(CategoryRepo $categoryRepo)
    {
        $this->authorize('manage', $this->class);
        $categories = $categoryRepo->getActiveCategories()->get();

        return view('Article::Admin.create', compact('categories'));
    }

    public function store(ArticleRequest $request)
    {
        $this->authorize('manage', $this->class);

        [$imageName, $imagePath] = ShareService::uploadImage($request->file('image'), 'articles');

        $this->service->store($request, auth()->id(), $imageName, $imagePath);

//        alert()->success(, 'عملیات با موفقیت انجام شد');
        ShareRepo::successMessage('ساخت مقاله');
        return to_route('articles.index');
    }

    public function edit($id, CategoryRepo $categoryRepo)
    {
        $this->authorize('manage', $this->class);
        $article = $this->repo->findById($id);
        $categories = $categoryRepo->getActiveCategories()->get();

        return view('Article::Admin.edit', compact(['article', 'categories']));
    }

    public function update(ArticleRequest $request, $id)
    {
        $this->authorize('manage', $this->class);

        $file = $request->file('image');
        $article = $this->repo->findById($id);

        [$imageName, $imagePath] = $this->uploadImage($file, $article);

        $this->service->update($request, $id, $imageName, $imagePath);

        ShareRepo::successMessage('ویرایش مقاله');
        return to_route('articles.index');
    }

    public function destroy($id)
    {
        $this->authorize('manage', $this->class);

        $article = $this->repo->findById($id);
        $this->service->deleteImage($article);
        $this->repo->delete($id);

        ShareRepo::successMessage('حذف مقاله');
        return to_route('articles.index');
    }

    public function changeStatus($id)
    {
        $article = $this->repo->findById($id);
        $this->service->changeStatus($article);

        ShareRepo::successMessage('تغییر وضعیت مقاله');
        return to_route('articles.index');
    }

    // Private Method
    private function uploadImage($file, $article): array
    {
        if (!is_null($file)) {
            [$imageName, $imagePath] = ShareService::uploadImage($file, 'articles');
        }
        else {
            $imageName = $article->imageName;
            $imagePath = $article->imagePath;
        }

        return array($imageName, $imagePath);
    }
}
