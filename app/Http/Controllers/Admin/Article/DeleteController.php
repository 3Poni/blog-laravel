<?php

namespace App\Http\Controllers\Admin\Article;

use App\Models\Articles;
use Illuminate\Support\Facades\Storage;


class DeleteController extends BaseController
{

    public function __invoke(Articles $article)
    {
         Storage::disk('public')->delete($article['image']);
         $article->delete();
         return redirect()->route('admin.article.index');
    }
}
