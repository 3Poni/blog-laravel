<?php

namespace App\Http\Controllers\Personal\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{

    public function __invoke(Articles $article)
    {
        Storage::disk('public')->delete($article['image']);
        $article->delete();
        return redirect()->route('personal.articles.index');
    }
}
