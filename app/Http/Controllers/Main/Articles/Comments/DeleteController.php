<?php

namespace App\Http\Controllers\Main\Comments;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Comment;

class DeleteController extends Controller
{

    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('article.main.index');
    }
}
