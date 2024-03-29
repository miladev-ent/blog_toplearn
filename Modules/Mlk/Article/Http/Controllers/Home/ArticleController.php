<?php

namespace Mlk\Article\Http\Controllers\Home;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Mlk\Advertising\Models\Advertising;
use Mlk\Advertising\Repositories\AdvertisingRepo;
use Mlk\Article\Repositories\ArticleRepo;
use Mlk\Comment\Repositories\CommentRepo;
use Mlk\Home\Repositories\HomeRepo;
use Mlk\Share\Http\Controllers\Controller;
use Mlk\Share\Repositories\ShareRepo;

class ArticleController extends Controller
{
    public ArticleRepo $repo;

    public function __construct(ArticleRepo $articleRepo)
    {
        $this->repo = $articleRepo;
    }

    public function home(CommentRepo $commentRepo)
    {
        $articles = $this->repo->home()->paginate(6);
        $viewsArticles = $this->repo->getArticlesByViews()->latest()->limit(5)->get();
        $latestComments = $commentRepo->getLatestComments()->limit(3)->get();

        return view('Article::Home.home', compact(['articles', 'viewsArticles', 'latestComments']));
    }

    public function details($slug, HomeRepo $homeRepo, CommentRepo $commentRepo, AdvertisingRepo $advertisingRepo)
    {
        $article = $this->repo->findBySlug($slug);

        if (is_null($article)) abort(404);

        $relatedArticles = $this->repo->relatedArticles($article->category_id, $article->id)->limit(3)->get();
        $latestComments = $commentRepo->getLatestComments()->limit(3)->get();
        $adv = $advertisingRepo->getAdvByLocation(Advertising::LOCATION_DETAIL_ARTICLES)->latest()->first();

        views($article)->unique()->record();

        return view('Article::Home.details', compact([
            'article', 'relatedArticles', 'homeRepo', 'latestComments', 'adv'
        ]));
    }

    /**
     * Check like user with action like.
     *
     * @param  Request $request
     * @param  int $id
     * @return RedirectResponse
     */
    public function like(Request $request, int $id)
    {
        $article = $this->repo->findById($id);
        $user = $request->user();

        $user->hasLiked($article) ? $user->unlike($article) : $user->like($article);
        $likeText = $user->hasLiked($article) ? 'لایک' : 'آن لایک';

        ShareRepo::successMessage("با موفقیت این مقاله $likeText شد");
        return back();
    }
}
