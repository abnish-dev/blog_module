<?php

namespace App\Http\Controllers;
use App\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('id','DESC')->get();       //  through Eloquent ORM
        return view('list')-> with(compact('blog'));
    
    }

    public function createBlog()
    {
        return view('add');
    }
    public function storeBlog(Request $request)
    {
      $validator = Validator::make($request->all(),[

          'name' => 'required|max:255',
          'description'=> 'required',
          'image' => 'required'

        ]);
 
          if($validator->passes())
          {
              $blog = new Blog;
              $blog->name = $request->name;
              $blog->description = $request->description;
              
              if ($request->hasfile('image'))
              {
                foreach($request->file('image') as $val){
                   $file = $val;
                   $extension = $file->getClientOriginalExtension();      // getting image extension
                   $filename = time().time().'.'.$file->getClientOriginalExtension();
                   $file->move('uploads/blog/', $filename);
                  
                 }
              }
              else
              {
                   //$blog->image = '';
              }
                $blog->save();
                $request -> session() -> flash('msg','Blog saved successfully');

                return redirect('/home/blog');
              }
           

          else
          {
              // error 
              return redirect('/home/blog/add')->withErrors($validator)->withInput();
          }


      // dd($request-> all());


        return redirect('/home/blog');
    }
    public function showBlog()
    {
        return redirect('/home/blog');
    }
    public function editBlog()
    {
        return redirect('/home/blog');
    }
    public function updateBlog()
    {
        return redirect('/home/blog');
    }
    public function deleteBlog()
    {
        return redirect('/home/blog');
    }

}
