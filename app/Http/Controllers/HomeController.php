<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function __invoke()
    {
        $follow_posts = Auth::check() ? Post::whereIn('user_id', Auth::user()->followings->pluck('id')->toArray())->latest()->paginate(20) : new LengthAwarePaginator([], 0, 20);

        return view('home', [
            'follow_posts' => $follow_posts
        ]);
    }
}
