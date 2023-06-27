<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Audio;
use App\Models\Adhkar;
use App\Models\contact;
use App\Models\Admin;
use App\Models\Book;
use App\Models\video;
use Carbon\Carbon;


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
                return redirect('AllBooks')->with('success','Book has been Added successfully');
            }
        }

        public function show()
        {
            $data = Book::all();

            return view('Adminpages.AllBooks',compact(['data']));
        }

        public function delete($id)
        {
            $data = Book::find($id);
            $data->delete();

            return redirect()->back();
        }

        public function updateRecord($id,Request $request)
        {
              $info = Book::find($id);

             return view('Adminpages.EditBook',compact(['info']));
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
                'Book_pdf'=>'required|mimes:pdf,zip'
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

            $save=$post->save();

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
                return redirect('AllBooks')->with('success','Book has been Updated successfully');
            }
            
        }

        public function home()
        {
            
            $new_release = DB::table('books')->orderByDesc('id')->paginate(8);
            return view('pages.home',compact(['new_release']));
        }

        public function AllBooksHome()
        {
             $data = Book::paginate(9);
             return view('gridviews.Books',compact(['data']));
        }

        // Arabic , Luganda, English books collection.

        public function ArabicBooks()
        {
            $data = Book::where('Language','اللغة العربية')->paginate(9);
            return view('gridviews.ArabicBooks',compact(['data']));
        }

        public function EnglishBooks()
        {
            $data = Book::where('Language','English')->paginate(9);
            return view('gridviews.EnglishBooks',compact(['data']));
        }

        public function LugandaBooks()
        {
            $data = Book::where('Language','Luganda')->paginate(9);
            return view('gridviews.EnglishBooks',compact(['data']));
        }

        //Last , final page ---> view, download, find similar books.

        public function lastPage($id)
        {
            $data = Book::find($id);
            return view('pages.book_details',compact(['data']));
        }

        public function search_lastpage($id)
        {
            $data = Book::find($id);
            return view('pages.book_details',compact(['data']));
        }

        public function about_us()
        {
            $data = Book::paginate(4);
            return view('gridviews.about',compact(['data']));
        }

        public function download(Request $request,$Book_pdf)
        {
            return response()->download(public_path('assets_7/'.$Book_pdf));
        }


        public function view($id)
        {
            $data = Book::find($id);
            return view('pages.ViewBook',compact(['data']));
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

            $all = DB::table('books')->count();
            $luganda = Book::where('Language','luganda')->count();
            $arabic = Book::where('Language','اللغة العربية')->count();
            $english = Book::where('Language','english')->count();

            return view('Adminpages.Dashboard',compact(['data','all','arabic','luganda','english']));
        }

        public function contact_info()
        {
             $info = DB::table('contacts')->orderByDesc('id')->get();
             return view('Adminpages.info_contact',compact(['info']));
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

        public function fetchRecords($value)
        {
             return redirect('search/'.$value);
        }

        public function SearchBar(Request $request)
        {
             $keyword =$request->keyword;
             $catagory1 =$request->Catagory1;
             $catagory2 =$request->Catagory2;

            if($keyword != null && $catagory1 == null && $catagory2 == null)
            {   
                
                $data = Book::paginate(3);

                $finalresult =  DB::table('books')->where('Catagory', 'like', '%'.$keyword.'%')
                                                  ->orWhere('Author_Name', 'like', '%'.$keyword.'%')
                                                  ->orWhere('Book_Name', 'like', '%'.$keyword.'%')
                                                  ->paginate(150);
              
               return view('gridviews.result',compact(['finalresult','data']));
            }
            else if($keyword == null && $catagory1 != null && $catagory2 == null)
            {
                $value = $catagory1;
                return $this->fetchRecords($value);
            }

            else if($keyword == null && $catagory1 == null && $catagory2 != null)
            {
                $value = $catagory2;
                return $this->fetchRecords($value);
            }
            else if($keyword == null && $catagory1 == null && $catagory2 == null){
                
                
                $data = Book::paginate(3);
                $finalresult= DB::table('books')->where('Catagory', '')->get();
                return view('gridviews.result1',compact(['finalresult','data']));
            }

            else if($keyword == null && $catagory1 != null && $catagory2 != null){
                
                if($catagory1 === $catagory2)
                {
                    $value = $catagory2;
                    return $this->fetchRecords($value);
                }
                
                $data = Book::paginate(3);
                $catagory1 = collect(DB::table('books')->where('Catagory',$catagory1)->get());
                $catagory2 = collect(DB::table('books')->where('Catagory',$catagory2)->get());
                
                $result=$catagory1->merge($catagory2);
                $finalresult = $result->all();

                return view('gridviews.result1',compact(['finalresult','data']));
            }
            else{

                if($catagory1 === $catagory2)
                {
                    $keyword = collect(DB::table('books')->where('Catagory', 'like', '%'.$keyword.'%')
                                ->orWhere('Author_Name', 'like', '%'.$keyword.'%')
                                ->orWhere('Book_Name', 'like', '%'.$keyword.'%')->get());      

                    $catagory1 = collect(DB::table('books')->where('Catagory',$catagory1)->get());

                    $data = Book::paginate(3);
                    $result=$keyword->merge($catagory1);
                    $finalresult = $result->all();

                    return view('gridviews.result1',compact(['finalresult','data']));
                }
   
                $keyword = collect(DB::table('books')->where('Catagory', 'like', '%'.$keyword.'%')
                                ->orWhere('Author_Name', 'like', '%'.$keyword.'%')
                                ->orWhere('Book_Name', 'like', '%'.$keyword.'%')->get());      

                 $catagory1 = collect(DB::table('books')->where('Catagory',$catagory1)->get());
                 $catagory2 = collect(DB::table('books')->where('Catagory',$catagory2)->get());
                
               
                $data = Book::paginate(3);
                
                $all=$keyword->merge($catagory1);
                $result=$all->merge($catagory2);

                 $finalresult = $result->all();
     
                return view('gridviews.result1',compact(['finalresult','data']));

            }
    
        }
       
        public function searchInfo($keyword)
        {
            $data = Book::paginate(3);
            $finalresult = Book::where('Catagory',$keyword)->paginate(9);
            return view('gridviews.result',compact(['finalresult','data']));
        }

        public function search_Scholar($keyword)
        {
    
            $data = Book::paginate(3);
            $finalresult = Book::where('Author_Name',$keyword)->paginate(9);
            return view('gridviews.result',compact(['finalresult','data']));
        }

        // DUA AND ADHKAR SECTION

        public function add_post(Request $request)
        {
            $request->validate([
                'dua_name'=>'required',
                'dua_catagory'=>'required',
                'number_in_words'=>'required',
                'number_in_figures'=>'required',
                'para_1'=>'required',
                'para_2'=>'required',
                'para_3'=>'required',
                'para_4'=>'required',
                'para_5'=>'required',
                'para_6'=>'required',
                'para_7'=>'required',
                'Adhkar_image'=>'required|mimes:jpeg,jpg,png,bmp'
            ]);

            $post = new Adhkar();
            $post->dua_name=$request->dua_name;
            $post->dua_catagory=$request->dua_catagory;
            $post->number_in_words=$request->number_in_words;
            $post->number_in_figures=$request->number_in_figures;
            $post->para_1=$request->para_1;
            $post->para_2=$request->para_2;
            $post->para_3=$request->para_3;
            $post->para_4=$request->para_4;
            $post->para_5=$request->para_5;
            $post->para_6=$request->para_6;
            $post->para_7=$request->para_7;

            if($request->file('Adhkar_image'))
             {
            $file=$request->file('Adhkar_image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Adhkar_image'),$filename);
            $post['Adhkar_image']=$filename;
            }

            $save=$post->save();

            if($save)
            {   
                return redirect('AllAdhkar')->with('success','Adhkar has been Added successfully');
            }
        }

        public function morning_adhkar()
        {

            $data = Adhkar::where('dua_catagory','MORNING')->get();
            return view('Adhkar.morning',compact(['data']));
        }

        public function evening_adhkar()
        {
            $data = Adhkar::where('dua_catagory','EVENING')->get();
            return view('Adhkar.evening',compact(['data']));
        }

        public function Adhkar_After_Swalah()
        {
            $data = Adhkar::where('dua_catagory','Adhkar After Swalah')->get();
            return view('Adhkar.AdhkarAfterSwalah',compact(['data']));
        }

        public function Famous_Duas_from_the_Quran()
        {
            $data = Adhkar::where('dua_catagory','Famous Duas From Quran')->get();
            return view('Adhkar.FamousQuranicDuas',compact(['data']));
        }

        public function Other_Duas()
        {
            $data = Adhkar::where('dua_catagory','Other Duas')->get();
            return view('Adhkar.Other_Duas',compact(['data']));
        }

        public function adhkarDetails($id)
        {
            $data = Adhkar::find($id);
            return view('Adhkar.adhkarDetails',compact(['data']));
        }

        public function ShowAllAdhkar()
        {
            $data = Adhkar::all();
            return view('Adhkar.AllAdhkar',compact(['data']));
        }

        public function deleteAdhkar($id)
        {
             $data = Adhkar::find($id);
             $data->delete();

             return redirect('AllAdhkar')->with('success','Adhkar has been deleted successfully');
        }


        public function EditAdhkar($id)
        {
            $data =  Adhkar::find($id);

            return view('Adhkar.EditAdhkar',compact(['data']));
        }

        public function updateAdhkar(Request $request)
        {
             $post = Adhkar::find($request->id);

            $request->validate([
                'dua_name'=>'required',
                'dua_catagory'=>'required',
                'number_in_words'=>'required',
                'number_in_figures'=>'required',
                'para_1'=>'required',
                'para_2'=>'required',
                'para_3'=>'required',
                'para_4'=>'required',
                'para_5'=>'required',
                'para_6'=>'required',
                'para_7'=>'required',
                'Adhkar_image'=>'required|mimes:jpeg,jpg,png,bmp'
            ]);

       
            $post->dua_name=$request->dua_name;
            $post->dua_catagory=$request->dua_catagory;
            $post->number_in_words=$request->number_in_words;
            $post->number_in_figures=$request->number_in_figures;
            $post->para_1=$request->para_1;
            $post->para_2=$request->para_2;
            $post->para_3=$request->para_3;
            $post->para_4=$request->para_4;
            $post->para_5=$request->para_5;
            $post->para_6=$request->para_6;
            $post->para_7=$request->para_7;

            if($request->file('Adhkar_image'))
             {
            $file=$request->file('Adhkar_image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Adhkar_image'),$filename);
            $post['Adhkar_image']=$filename;
            }

            $save=$post->save();

            if($save)
            {   
                return redirect('AllAdhkar')->with('success','Adhkar has been Updated successfully');
            }
        }

        // AUDIO PAGE 

        public function AudioPage(){

            $UgandanSheikhs = Audio::select('First_name','sheikh_name')->distinct()->get();

            return view('Audio.UgandanAudios',compact(['UgandanSheikhs']));
        }


        public function IndividualSheikh(){

            return view('Audio.IndvidualSheikh');
        }


        public function AudioUpload(){
            return view('Audio.UploadAudio');
        }


        public function UploadAudio(Request $request){

            $request->validate([
                'First_name'=>'required',
                'sheikh_name'=>'required',
                'topic'=>"required",
                'audio'=>'required|file|mimes:mp3,ogg',
            ]);

         
        $post = new Audio();
        
        $post->First_name=$request->First_name;
        $post->sheikh_name=$request->sheikh_name;
        $post->topic=$request->topic;

        //Storing an Audio
        $file=$request->audio;
        $filename=date('YmdHi').'.'.$file->getClientOriginalExtension();
		$file->move('audioz',$filename);
        $post['audio']=$filename;

        $save=$post->save();

        if($save)
        {   
            return redirect()->back()->with('success','Audio has been Added successfully');
            
        }
     }

     public function SheikhLectures($name){

        $SheikhAudios = Audio::where('First_name',$name)->get();

        return view('Audio.IndvidualSheikh')->with('name',$name)->with('SheikhAudios',$SheikhAudios);
     }

     public function downloadAudio(Request $request,$audio){
            return response()->download(public_path('audioz/'.$audio));
    }

    public function AllAudios(){

        $data = Audio::all();
        return view('Audio.AllAudio',compact(['data']));
    }

    public function EditAudio(Request $request)
    {
        $data = Audio::find($request->id);
        return view('Audio.EditAudio',compact(['data']));
    }

    public function UpdateAudio(Request $request)
    {
        $request->validate([
            'First_name'=>'required',
            'sheikh_name'=>'required',
            'topic'=>"required",
            'audio'=>'required|file|mimes:mp3,ogg',
        ]);

     
    $post = Audio::find($request->id);
    
    $post->First_name=$request->First_name;
    $post->sheikh_name=$request->sheikh_name;
    $post->topic=$request->topic;

    //Storing an Audio
    $file=$request->audio;
    $filename=date('YmdHi').'.'.$file->getClientOriginalExtension();
    $file->move('audioz',$filename);
    $post['audio']=$filename;

    $save=$post->save();

    if($save)
    {   
        return redirect()->back()->with('success','Audio has been Updated successfully');
        
    }
    }

    public function deleteAudio($id)
    {
        $data = Audio::find($id);
        $data->delete();
        return redirect('All-Audio')->with('success','Audio has been deleted successfully');
    }

// Video Configurations.

    public function AllVideos(){
        
        $data = video::all();
        return view('Videos.AllVideos',compact(['data']));
    }

    public function AdminVideos(){

        $data = Video::all();
        return view('Videos.AllAdminVideos',compact(['data']));
    }


    public function VideoDetails(){
        return view('Videos.VideoDetails');
    }

    public function AddVideo(){
        return view('Videos.AddVideo');
    }

    public function EditVideo(Request $request)
    {
        $data = Video::find($request->id);
        return view('Videos.EditVideo',compact(['data']));
    }

    
    public function deleteVideo($id){
        $data = Video::find($id);
        $data->delete();

        return redirect()->back()->with('success','Video has been Deleted successfully');
    }

    public function UpdateVideo(Request $request){

        $request->validate([
            'sheikh_name'=>'required',
            'topic'=>'required',
            'Summary'=>'required',
            'video_link'=>'required',
            'Catagory'=>'required',
        ]);

        $post = Video::find($request->id);

        $post->sheikh_name = $request->sheikh_name;
        $post->topic = $request->topic;
        $post->Summary = $request->Summary;
        $post->video_link = $request->video_link;
        $post->Catagory=$request->Catagory;
        $post->save();

        return redirect()->back()->with('success','Video has been Updated successfully');
    }


    public function uploadVideo(Request $request){

        $request->validate([
            'sheikh_name'=>'required',
            'topic'=>'required',
            'Summary'=>'required',
            'video_link'=>'required',
            'Catagory'=>'required',
        ]);

        $post = new video();

        $post->sheikh_name = $request->sheikh_name;
        $post->topic = $request->topic;
        $post->Summary = $request->Summary;
        $post->video_link = $request->video_link;
        $post->Catagory=$request->Catagory;
        $post->save();

        return redirect()->back()->with('success','Video has been uploaded successfully');
    }


    public function SearchSubject($keyword)
    {
        $finalresult = video::where('Catagory',$keyword)->get();
        return view('Videos.CatagoryResult',compact(['finalresult']));
    }

    public function SearchSheikh($keyword){

        $finalresult =  DB::table('videos')->where('sheikh_name', 'like', '%'.$keyword.'%')->get();
        return view('Videos.CatagoryResult2',compact(['finalresult']));
    }


    public function WatchVideo($id)
    {
        $data = video::find($id);
        return view('Videos.VideoDetails',compact(['data']));
    }


    public function SearchBarVideo(Request $request)
    {
             $keyword =$request->keyword;
             $catagory1 =$request->Catagory1;
             $catagory2 =$request->Catagory2;

            if($keyword != null && $catagory1 == null && $catagory2 == null)
            {   
                
                $data = video::paginate(3);

                $finalresult =  DB::table('videos')->where('Catagory', 'like', '%'.$keyword.'%')
                                                  ->orWhere('sheikh_name', 'like', '%'.$keyword.'%')
                                                  ->paginate(500);
              
               return view('Videos.CatagoryResult',compact(['finalresult']));
            }
            else if($keyword == null && $catagory1 != null && $catagory2 == null)
            {
                $value = $catagory1;
                return $this->fetchRecordsVideo($value);
            }

            else if($keyword == null && $catagory1 == null && $catagory2 != null)
            {
                $value = $catagory2;
                return $this->fetchRecordsVideo($value);
            }
            else if($keyword == null && $catagory1 == null && $catagory2 == null){
                
                $finalresult= DB::table('videos')->get();
                return view('Videos.CatagoryResult',compact(['finalresult']));
            }

            else if($keyword == null && $catagory1 != null && $catagory2 != null){
                
                if($catagory1 === $catagory2)
                {
                     $value = $catagory2;
                    return $this->fetchRecordsVideo($value);
                }
                
                $catagory1 = collect(DB::table('videos')->where('Catagory',$catagory1)->get());
                $catagory2 = collect(DB::table('videos')->where('Catagory',$catagory2)->get());
                
                $result=$catagory1->merge($catagory2);
                $finalresult = $result->all();

                return view('Videos.CatagoryResult',compact(['finalresult']));
            }
            else{

                if($catagory1 === $catagory2)
                {
                    $keyword = collect(DB::table('videos')->where('Catagory', 'like', '%'.$keyword.'%')
                                ->orWhere('sheikh_name', 'like', '%'.$keyword.'%')->get());      

                    $catagory1 = collect(DB::table('videos')->where('Catagory',$catagory1)->get());

                    $result=$keyword->merge($catagory1);
                    $finalresult = $result->all();

                    return view('Videos.CatagoryResult',compact(['finalresult']));
                }
   
                $keyword = collect(DB::table('videos')->where('Catagory', 'like', '%'.$keyword.'%')
                                ->orWhere('sheikh_name', 'like', '%'.$keyword.'%')->get());      

                 $catagory1 = collect(DB::table('videos')->where('Catagory',$catagory1)->get());
                 $catagory2 = collect(DB::table('videos')->where('Catagory',$catagory2)->get());
                
                $all=$keyword->merge($catagory1);
                $result=$all->merge($catagory2);

                 $finalresult = $result->all();
     
                 return view('Videos.CatagoryResult',compact(['finalresult']));

            }
        }

        public function fetchRecordsVideo($value)
        {
             return redirect('search/subject/'.$value);
        }

        public function carbonDate(){

            $dt = Carbon::now();
            echo $dt->toHijri()->isoFormat('LL');
        }
    
        //Implementation of Quran

        public function QuranAudio(){
            return view('Quran.QuranAudio');
        }
}