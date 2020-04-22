<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attributes['body']
        ]);

        return redirect('/home');
    }
}
