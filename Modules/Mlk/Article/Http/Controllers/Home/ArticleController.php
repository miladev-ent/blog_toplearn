<?php

namespace Mlk\Article\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Mlk\Article\Http\Requests\ArticleRequest;
use Mlk\Article\Models\Article;
use Mlk\Article\Repositories\ArticleRepo;
use Mlk\Article\Services\ArticleService;
use Mlk\Category\Repositories\CategoryRepo;
use Mlk\Home\Repositories\HomeRepo;
use Mlk\Share\Repositories\ShareRepo;

class ArticleController extends Controller
{
    public ArticleRepo $repo;

    public function __construct(ArticleRepo $articleRepo)
    {
        $this->repo = $articleRepo;
    }

//    public function index()
//    {
//        $articles = $this->repo->index()->paginate(10);
//
//        return view('Article::Admin.index', compact('articles'));
//    }

    public function details($slug, HomeRepo $homeRepo)
    {
        $article = $this->repo->findBySlug($slug);

        if (is_null($article)) abort(404);
        $relatedArticles = $this->repo->relatedArticles($article->category_id, $article->id)->limit(3)->get();

        return view('Article::Home.details', compact(['article', 'relatedArticles', 'homeRepo']));
    }
}
