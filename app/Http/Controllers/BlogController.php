<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sosial;
use App\Blogcategory;
use App\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogcategories = Blogcategory::take(12)->latest()->get();
        $blog = Blog::take(12)->latest()->get();
        return view('pages.blog',[
            'blogcategories' => $blogcategories,
            'blog' => $blog
        ]);
    }

    // public function cari(Request $request)
    // {
    //     $cari = $request->cari;

    //     $blog = Blog::with(['blogcategory'])
    //                 ->where('name', 'like', "%".$cari."%")
    //                 ->latest()
    //                 ->get();

    //     $sosials = Sosial::all();
    //     $categories = Category::take(6)->get();
    //     $blogcategories = Blogcategory::take(12)->latest()->get();

    //     return view('pages.blog',[
    //         'categories' => $categories,
    //         'blogcategories' => $blogcategories,
    //         'medsos' => $sosials,
    //         'blog' => $blog
    //     ]);
    // }

    public function detail(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();$blogs = Blog::take(4)
                ->orderBy('id', 'desc')
                ->get();


        return view('pages.blog-detail',[
            'blog' => $blog,
            'blogs' => $blogs
        ]);
    }
}
