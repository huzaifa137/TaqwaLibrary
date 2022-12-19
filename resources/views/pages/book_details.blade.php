@extends('layouts.Books_header_and_footer')
@section('Book_Information')

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container">
                        <div class="booksmedia-detail-box">
                            <div class="detailed-box">
                                <div class="col-xs-12 col-sm-5 col-md-3">
                                    <div class="post-thumbnail">
                                        <img class="image-format" src="{{'/public/BookImage/'.$data->Book_Image}}" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-6">
                                    <div class="post-center-content">
                                        <h2>{{$data->Book_Name}}</h2>
                                        <p><strong>Author:</strong> {{$data->Author_Name}}</p>
                                        <p><strong>ISBN:</strong> 9781581573268, 9780062419385</p>
                                        <p><strong>Rating:</strong> 5 </p>
                                        <p><strong>Edition:</strong> Latest edition</p>
                                        <p><strong>Publisher:</strong> New York : Shaye Areheart Books, c2008</p>
                                        <p><strong>Length:</strong> {{$data->pages}}</p>
                                        <p><strong>Format:</strong> {{$data->Format}}</p>
                                        <p><strong>Language :</strong> {{$data->Language}}</p>
                                        <p><strong>Catagory :</strong> {{$data->Catagory}}</p>
                                        <p><strong>Topics:</strong> Friendship, Bullies, Pranks, School</p>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Add To Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Like">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Mail">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                        <i class="fa fa-print"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                        <i class="fa fa-share-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 ">
                                    <div class="post-right-content"> 
                                        <a href="{{url('/view',$data->id)}}" class="btn btn-dark-gray">View Book</a> 
                                        <a href="{{url('/download',$data->Book_pdf)}}" class="btn btn-dark-gray">Download Book</a> 
                                        <a href="{{url('search/'.$data->Catagory)}}" class="btn btn-dark-gray">Find Similar Books like this</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Follow Us</h2>
                <span class="underline center"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="javascript:void()" >
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="javascript:void()" >
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="google" href="javascript:void()" >
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="javascript:void()" >
                        <span>
                            <i class="fa fa-rss"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="javascript:void()" >
                        <span>
                            <i class="fa fa-linkedin"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="javascript:void()" >
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->
@endsection

       