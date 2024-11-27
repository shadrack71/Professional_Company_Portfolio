<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class portblogController extends Controller
{


     public function indexblog(){
        $blog = Blog::all();
        return view('blog',['blog' => $blog]);
    }

     public function showblog(String $id){
        $latestBlog = Blog::latest()->get();
        $singleBlog = Blog::findorfail($id);
         return view('single-blog',['single_blog' => $singleBlog , 'latest_blog'=> $latestBlog]);
    }

    // managing blog resources

    public function createblog(){
        return view('admin.blog.add-blog');

    }

    public function ViewAllBlog(){
        $blog = Blog::all();
        return view('admin.blog.manage-blog',['blog' => $blog]);
    }

     public function storeblog(Request $request ,Blog $blog ){
         $validateBlog = $request->validate([
            'blog_title' => 'required|string',
            'blog_content' => 'required|string',
            'blog_img' => 'required|mimes:jpg,png',
            'blog_tag' => 'required|string',
        ]);

          if($request->hasfile('blog-img')){
           
            $BlogImage = $request->file('blog_img');
            $BlogImageDir = Storage::disk('public')->put('blog',$BlogImage);
            $blogslug = Str::slug($request->title);
            $validateBlog['blog_img_link'] = $BlogImageDir;
            $validateBlog['slug'] = $blogslug;
            $blog->save($validateBlog);
            //dd($hero);
            
             return redirect(route('add-blog'))->with('msg','Blog added successfully'); 
  
        }



    }
  public function DeleteBlog(string $id){
        $blog = Blog::findorfail($id);
        $blogImageUrl=  $blog->blog_img_link;
           if(Storage::disk('public')->exists($blogImageUrl)){
                Storage::disk('public')->delete($blogImageUrl);
                $blog->delete();
                return redirect(route('ViewAllblog'))->with('msg','Blog deleted successfully'); ;
            }
    }

}