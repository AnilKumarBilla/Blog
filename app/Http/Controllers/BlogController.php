<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Blog;

class BlogController extends Controller
{
    public function createBlog()
    {
        return view('create_blog');
    }

    public function saveBlog(Request $request)
    {
        $validateDate = $request->validate([
          'title' => 'required|min:10',
          'content' => 'required|min:10'
        ]);

        $blog = new Blog();
        $blog->title = $request['title'];
        $blog->content = $request['content'];
        $blog->slug = Str::slug($request['title'], '-');
        $blog->user_id = 4;
        $blog->save();

        return redirect(route('viewBlog', [ $blog['id'], $blog['slug'] ] ));
    }

    public function viewBlog($id, $slug)
    {

        $blog = Blog::where('id', $id)->where('slug', $slug)->firstOrFail();

        $blog['views'] = $blog['views'] + 1;

        $blog->save();

        return view('blog', compact('blog'));

    }
}
