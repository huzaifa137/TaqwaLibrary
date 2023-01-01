<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\Admin;
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
                'Edition'=>'required',
                'Summary'=>'required',
                'Topics'=>'required',
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
            $post->Edition=$request->Edition;
            $post->Summary=$request->Summary;
            $post->Topics=$request->Topics;

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
                'Edition'=>'required',
                'Summary'=>'required',
                'Topics'=>'required',
                'Book_image'=>'required|mimes:jpeg,jpg,png,bmp',
                'Book_pdf'=>'required|mimes:pdf,zip',
                'Summary'=>'required',
            ]);
            
            $post->Author_Name=$request->author_name;
            $post->Book_Name=$request->book_name;
            $post->Catagory=$request->Catagory;
            $post->Language=$request->language;
            $post->Format=$request->format;
            $post->pages=$request->pages;
            $post->Edition=$request->Edition;
            $post->Summary=$request->Summary;
            $post->Topics=$request->Topics;


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
            $data = Book::where('Language','اللغة العربية')->paginate(9);
            return view('gridviews.ArabicBooks',compact('data',$data));
        }

        public function EnglishBooks()
        {
            $data = Book::where('Language','English')->paginate(9);
            return view('gridviews.EnglishBooks',compact('data',$data));
        }

        public function LugandaBooks()
        {
            $data = Book::where('Language','Luganda')->paginate(9);
            return view('gridviews.EnglishBooks',compact('data',$data));
        }

        //Last , final page ---> view, download, find similar books.

        public function lastPage($id)
        {
            $data = Book::find($id);
            return view('pages.book_details',compact('data',$data));
        }

        public function search_lastpage($id)
        {
            $data = Book::find($id);
            return view('pages.book_details',compact('data',$data));
        }

        public function about_us()
        {
            $data = Book::paginate(4);
            return view('gridviews.about',compact('data',$data));
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

        public function login()
        {
            return view('login');
        }

        public function register()
        {
            return view('register');
        }

        public function store1(Request $request)
        {
            $request->validate([
                'fname'=>'required',
                'email'=>'required|unique:admins',
                'phonenumber'=>'required|unique:admins',
                'password'=>'required|min:5',
                'confirm_password'=>'required'
            ]);

        $password1=$request->input('password');
        $password2=$request->input('confirm_password');

        if(strcmp($password1,$password2)!=0)
        {
            return back()->with('fail','Password entered don\'t much');
        }

        $post = new Admin();
        $post->fname = $request->fname;
        $post->email = $request->email;
        $post->phonenumber = $request->phonenumber;
        $post->password =Hash::make($request->password);

        $save = $post->save();

        if($save)
        {
            return back()->with('success','Account created Successfully')
            ->with('fail','Account waiting for Activation');
        }
        else
        {
            return back()->with('fail','Failed to create account');
        }
            
        }

        public function pass(Request $request){

            if($userInfo = Admin::all()
            ->where('phonenumber','=',$request->phonenumber)
            ->where('status','=','invalid')
            ->first())
            {
                return back()->with('fail','Account not activated');    
            } 

            $userInfo = Admin::where('phonenumber','=',$request->phonenumber)->first();
            if(Hash::check($request->password,$userInfo->password))
                    {  
                    $request->session()->put('LoggedUser',$userInfo->id); 
                    return redirect('Adminpages.Dashboard');
                    }
            else     
                    {
                    return back()->with('fail','incorrect email or password'); 
                    }
        }

        public function verify(Request $request)
        {
            $request->validate([
                'phonenumber'=>'required',
                'password'=>'required|min:5',
            ]);

            $userInfo = Admin::where('phonenumber','=',$request->phonenumber)->first();

            if(!$userInfo)
            {
                return back()->with('fail','incorrect phonenumber or password');
            }
            else{
                return $this->pass($request);
            }
        }

        public function logout()
        {
            if(session()->has('LoggedUser'))
            {
                session()->pull('LoggedUser');
                return redirect('auth.login');
            }
        }

        public function dashboard()
        {
            $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
            return view('Adminpages.Dashboard',$data);
        }

        public function SendMessage(Request $request)
        {
            $request->validate([
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required|email',
                'phonenumber'=>'required'
            ]);

            
            $post = new contact();
            $post->FirstName=$request->firstname;
            $post->LastName=$request->lastname;
            $post->Email=$request->email;
            $post->PhoneNumber=$request->phonenumber;
            $post->Message=$request->message;

            $save = $post->save();
            
            if($save)
            {     
                return redirect()->back()->with('success','Information has been delivered');
            }
        }

        public function SearchBar(Request $request)
        {
             $keyword =$request->keyword;
             $catagory1 =$request->Catagory1;
             $catagory2 =$request->Catagory2;

             $keyword= DB::table('books')->where('Catagory',$keyword)->get();
             $catagory1= DB::table('books')->where('Catagory',$catagory1)->get();
             $catagory2= DB::table('books')->where('Catagory',$catagory2)->get();
             
            
             $data = Book::paginate(3);
             $all=$keyword->merge($catagory1);
             $finalresult=$all->merge($catagory2);

            

             return view('gridviews.result',compact('finalresult','data'));
        }

        public function searchInfo($keyword)
        {
            $finalresult= DB::table('books')->where('Catagory',$keyword)->get();
            $data = Book::paginate(3);
            return view('gridviews.result',compact('finalresult','data'));
        }

}