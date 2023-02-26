@extends('layouts.adhkar_header') 
@section('about_us_information')

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Other-Duas</h2>
                    <span class="underline center"></span>
                    <<p id="ayat-header">ٱلَّذِينَ ءَامَنُوا۟ وَتَطْمَئِنُّ قُلُوبُهُم بِذِكْرِ ٱللَّهِ ۗ أَلَا بِذِكْرِ ٱللَّهِ تَطْمَئِنُّ ٱلْقُلُوبُ ۱۳:۲۸</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Other-Duas</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        
        <!-- Start: Blog Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-main-list">
                        <div class="container">
                            <div class="row">
                                <div class="blog-page grid">

                                    @foreach ($data as $info)
                                    
                                    <article>
                                        <div class="grid-item blog-item">
                                            <div class="post-thumbnail">
                                                <a href="{{'adhkar-details/'.$info->id}}"><img alt="blog" id="pic_bd" src="{{url('public/Adhkar_image/'.$info->Adhkar_image)}}" /></a>
                                            </div>
                                            <div class="post-detail">
                                                <header class="entry-header">
                                                    <div class="blog_meta_category">
                                                        <span class="arrow-right"></span>
                                                        {{$info->dua_catagory}}, 
                                                        Adhkar
                                                    </div>
                                                    <h3 class="entry-title"><a href="{{'adhkar-details/'.$info->id}}">{{$info->dua_name}}</a></h3>
                                                    <div class="entry-meta">
                                                        <span><i class="fa fa-book"></i> <a href="javascript:void(0)" style="color: #3686ff">Recite {{$info->number_in_words}}</a></span>x{{$info->number_in_figures}}
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <p >{{$info->para_1}}</p>
                                                </div>
                                                <footer class="entry-footer">
                                                    <a class="btn btn-default" href="{{'adhkar-details/'.$info->id}}">Read More</a>
                                                </footer>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    @endforeach
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