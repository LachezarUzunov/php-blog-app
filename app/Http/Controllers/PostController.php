<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function delete(Post $post) {
        if (auth()->user()->cannot('delete', $post)) {
            return 'You cannot do that';
        }
        $post->delete();

        return redirect('/profile/' . auth()->user()->username)->with('success', 'Post successfully deleted.');
    }

    public function viewSinglePost(Post $post) {
        $post['body'] = strip_tags(Str::markdown($post->body), '<p><ul><ol><li><strong><em>');
        return view('single-post', ['post' => $post]);
    }

    public function storeNewPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newPost = Post::create($incomingFields); 

        return redirect("/post/{$newPost->id}")->with('success', 'New posted created successfully!');
    }

    public function showCreateForm() {
        return view('create-post');
    }
}