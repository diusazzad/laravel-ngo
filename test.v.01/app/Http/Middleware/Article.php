<?php

namespace App\Http\Middleware;

use App\Models\Article as ModelsArticle;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Article
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$article): Response
    {
        $article = ModelsArticle::find($article);

        if ($article->author_id !== auth()->user()->id) {
            abort(403);
        }

        return $next($request);
    }
}
