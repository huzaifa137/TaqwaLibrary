@extends('layouts.adhkar_header') 
@section('about_us_information')

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Adhkar Details</h2>
                    <span class="underline center"></span>
                    <p id="ayat-header">ٱلَّذِينَ ءَامَنُوا۟ وَتَطْمَئِنُّ قُلُوبُهُم بِذِكْرِ ٱللَّهِ ۗ أَلَا بِذِكْرِ ٱللَّهِ تَطْمَئِنُّ ٱلْقُلُوبُ ۱۳:۲۸</p>
                    
                    <?php 

                     use Carbon\Carbon;
                     $dt = Carbon::now();
                     $dt->addDays(1);
                    echo "<p style='color:#0088ff;'>" . $dt->toHijri()->isoFormat('LL') . " A.H.". "</p>" ;
                    ?>
                
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a >Details</a></li>
                        <li>{{$data->dua_name}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Blog Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-detail-main">
                        <div class="container">
                            <div class="row">
                                <div class="blog-page">
                                    <div class="blog-section">
                                        <article>
                                            <div class="blog-detail">
                                                <header class="entry-header">
                                                    <div class="blog_meta_category">
                                                        <a  rel="category tag">{{$data->dua_catagory}}</a>, 
                                                        Adhkar
                                                    </div>
                                                    <h2 class="entry-title">Adhkar Name : {{$data->dua_name}}</h2>
                                                    <div class="entry-meta">
                                                        <span><i class="fa fa-book"></i> <a style="font-weight: bold;color: #3686ff;">Recite {{$data->number_in_words}}</a></span>x{{$data->number_in_figures}}                                                    </div>
                                                </header>
                                                <div class="post-thumbnail">
                                                    
                                                    <figure>
                                                        <img id="img_id" id="img_id" alt="blog" src="{{url('public/Adhkar_image/'.$data->Adhkar_image)}}" />
                                                    </figure>
                                                </div>
                                                <div class="post-detail">
                                                  
                                                    <div class="entry-content">
                                                        <p>{{$data->para_1}} </p>
                                                        <p>{{$data->para_2}} </p>
                                                        <p>{{$data->para_3}} </p>
                                                        <p>{{$data->para_4}} </p>
                                                        <p>{{$data->para_5}} </p>
                                                        <p>{{$data->para_6}} </p>
                                                        <p>{{$data->para_7}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Blog Section -->

        <!-- Start: Social Network -->
        <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Follow Us</h2>
                    <span class="underline center"></span>
                    <p class="lead">We upload islamic content on the most popular social media platforms, follow us to access them freely.</p>
                </div>
                <ul>
                    <li>
                        <a class="linkedin" href="https://www.facebook.com/TaqwaLibrary123" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="youtube" href="https://www.tiktok.com/@taqwa_library" target="_blank">
                            <span>
                                <i class="fa-brands fa-tiktok"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="linkedin" href="https://www.youtube.com/channel/UCbBl171lNYsem6LpWtWjHbw" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="https://www.instagram.com/taqwa_library_official/" target="_blank">
                            <span>
                                <i class="fa fa-instagram"></i>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a class="linkedin" href="javascript:void()">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a class="youtube" href="javascript:void()">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End: Social Network -->

        


@endsection