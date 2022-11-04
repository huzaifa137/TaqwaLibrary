<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Stroage;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
        public function store(Request $request){

            $request->validate([
                'author_name'=>'required',
                'book_name'=>'required',
                'Catagory'=>'required',
                'language'=>'required',
                'format'=>'required',
                'pages'=>'required',
                'translated_by'=>'required',
                'Book_image'=>'required|mimes:jpeg,jpg,png,bmp',
                'Book_pdf'=>'required|mimes:pdf,zip'
            ]);
            
            $post = new Book();            
            
            $post->Author_Name=$request->author_name;
            $post->Book_Name=$request->book_name;
            $post->Catagory=$request->Catagory;
            $post->Language=$request->language;
            $post->Format=$request->format;
            $post->pages=$request->pages;
            $post->Translated_By=$request->translated_by;

            if($request->file('Book_image'))
             {
            $file=$request->file('Book_image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/BookImage'),$filename);
            $post['Book_image']=$filename;
            }

            $file=$request->Book_pdf;
            $filename=date('YmdHi').'.'.$file->getClientOriginalExtension();
		    $file->move('assets_7',$filename);
            $post->Book_pdf=$filename;


            $save=$post->save();

            if($save)
            {   
                return redirect()->back()->with('success','Book has been Added successfully');
            }
        }

        public function show()
        {
            $data = Book::all();

            return view('Adminpages.AllBooks',compact('data',$data));
        }

        public function delete($id)
        {
            $data = Book::find($id);
            $data->delete();

            return redirect()->back();
        }

        public function updateRecord($id)
        {
             $info = Book::find($id);

             return view('Adminpages.EditBook',compact('info',$info));
        }


        public function update(Request $request)
        {
            $post = Book::find($request->id);

            $request->validate([
                'author_name'=>'required',
                'book_name'=>'required',
                'Catagory'=>'required',
                'language'=>'required',
                'format'=>'required',
                'pages'=>'required',
                'translated_by'=>'required',
                'Book_image'=>'required|mimes:jpeg,jpg,png,bmp',
                'Book_pdf'=>'required|mimes:pdf,zip'
            ]);
            
            $post->Author_Name=$request->author_name;
            $post->Book_Name=$request->book_name;
            $post->Catagory=$request->Catagory;
            $post->Language=$request->language;
            $post->Format=$request->format;
            $post->pages=$request->pages;
            $post->Translated_By=$request->translated_by;


            if($request->file('Book_image'))
             {
            $file=$request->file('Book_image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/BookImage'),$filename);
            $post['Book_image']=$filename;
            }
         
            $file=$request->Book_pdf;
            $filename=date('YmdHi').'.'.$file->getClientOriginalExtension();
		    $file->move('assets_7',$filename);
            $post->Book_pdf=$filename;

            $save=$post->save();

            if($save)
            {   
                return redirect()->back()->with('success','Book has been updated successfully');
            }
        }

        public function home()
        {
            $data = Book::paginate(8);
            return view('pages.home',compact('data',$data));
        }

        public function AllBooksHome()
        {
             $data = Book::paginate(9);
             return view('gridviews.Books',compact('data',$data));
        }

        // Arabic , Luganda, English books collection.

        public function ArabicBooks()
        {
            $data = Book::paginate(9);
            return view('gridviews.ArabicBooks',compact('data',$data));
        }

        public function EnglishBooks()
        {
            $data = Book::paginate(9);
            return view('gridviews.EnglishBooks',compact('data',$data));
        }

        public function LugandaBooks()
        {
            $data = Book::paginate(9);
            return view('gridviews.EnglishBooks',compact('data',$data));
        }

        //Last , final page ---> view, download, find similar books.

        public function lastPage($id)
        {
            $data = Book::find($id);
            return view('pages.book_details',compact('data',$data));
        }

        public function download(Request $request,$Book_pdf)
        {
            return response()->download(public_path('assets_7/'.$Book_pdf));
        }


        public function view($id)
        {
            $data = Book::find($id);
            return view('pages.ViewBook',compact('data',$data));
        }
}