
<!DOCTYPE html>
<html lang="en">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: Taqwa Library ::..</title>

        <!-- Favicon -->
        <link href="/assets/images/libraria-logo-v3.png" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="/assets/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="/assets/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script /assets/="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="layout-v3">
        
        <!-- Start: Header Section -->
        <header id="header" class="navbar-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="menu-wrap">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="{{route('home')}}">
                                            <img src="/assets/images/libraria-logo-v3.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <!-- Navigation -->
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('home')}}">Home</a>
                                       
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('all')}}">Books</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('all')}}">All Books</a></li>
                                            <li><a href="{{route('All_Arabic_Books')}}">Arabic Books</a></li>
                                            <li><a href="{{route('All_English_Books')}}">English Books</a></li>
                                            <li><a href="{{route('All_Luganda_Books')}}">Luganda Books</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                </ul>
                                
                            </div>
                            <div class="header-socialbar hidden-sm hidden-xs">
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                                <ul class="share-links">
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <i class="fa fa-share"></i>
                                        </a>
                                        <div class="dropdown-menu social-dropdown">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-md hidden-lg">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
        
                                    </li>
                                    <li>
                                        <a href="#">Books</a>
                                        <ul>
                                            <li><a href="{{route('all')}}">All Books</a></li>
                                            <li><a href="{{route('All_Arabic_Books')}}">Arabic Books</a></li>
                                            <li><a href="{{route('All_English_Books')}}">English Books</a></li>
                                            <li><a href="{{route('All_Luganda_Books')}}">Luganda Books</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                    {{-- <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="/assets/images/header-slider/home-v3/header-slide.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>What’s all the Taqwa Library?</h2>
                            <p>Libraria gives you access to <strong>Audiobooks,</strong> <strong>eBooks,</strong> <strong>Music,</strong> <strong>Movies and Comics.</strong></p>
                            <div class="filter-box">
                                <form action="{{route('search-bar')}}" class="banner-filter-box" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                        <input class="form-control" placeholder="Search by Keyword" name="keyword" >
                                    </div>
                                    <div class="form-group">
                                        <select class="form-controll" name="Catagory1" value="{{old('Catagory')}}">
                                            <option value="#">CATAGORY</option>
                                            <option value="AQEEDAH">AQEEDAH</option>
                                            <option value="SHIRK">SHIRK</option>
                                            <option value="QURAN">QURAN</option>
                                            <option value="HADITH">HADITH</option>
                                            <option value="PROPHETS">PROPHETS</option>
                                            <option value="TAFSIR">TAFSIR</option>
                                            <option value="TAWHEED">TAWHEED</option>
                                            <option value="ALLAH">ALLAH</option>
                                            <option value="ANGELS">ANGELS</option>
                                            <option value="DUA-ZIKR">DUA-ZIKR</option>
                                            <option value="JINN">JINN</option>
                                            <option value="SUNNAH">SUNNAH</option>
                                            <option value="BIDAH">BIDAH</option>
                                            <option value="BIOGRAPHIES">BIOGRAPHIES</option>
                                            <option value="DEATH-GRAVE">DEATH-GRAVE</option>
                                            <option value="FIQH">FIQH</option>
                                            <option value="NEW-MUSLIMS">NEW MUSLIMS</option>
                                            <option value="Non-Muslims">Non-Muslims</option>
                                            <option value="HEALING">HEALING</option>                           
                                            <option value="HEART">HEART</option>                               
                                            <option value="KUFAR-Celebrations">KUFAR-Celebrations</option>     
                                            <option value="Qayamat-HEREAFTER">Qayamat-HEREAFTER</option>       
                                            <option value="RAMADHAN">RAMADHAN</option>                    
                                            <option value="RUQYA">RUQYA</option>                            
                                            <option value="SALAF">SALAF</option>                            
                                            <option value="SINS">SINS</option>
                                            <option value="ISLAM-4-KIDs">ISLAM-4-KIDs</option>
                                            <option value="ISLAMI-SHARIA-WILL">ISLAMI-SHARIA-WILL</option>
                                            <option value="PROPHET-SAWS">PROPHETSAWS</option>
                                            <option value="SACRED-MONTHS">SACRED MONTHS</option>
                                            <option value="ADVICE">ADVICE</option>  
                                            <option value="AWLIYAH-ALLAH">AWLIYAH-ALLAH</option>
                                            <option value="BENEFITS">BENEFITS</option>
                                            <option value="CALAMITIES">CALAMITIES</option>
                                            <option value="CHILDREN-YOUTH">CHILDREN-YOUTH</option>
                                            <option value="CURRENT-AFFAIRS">CURRENT AFFAIRS</option>
                                            <option value="DAJJAL">DAJJAL</option>
                                            <option value="DAWAH">DAWAH</option>
                                            <option value="DESIRES">DESIRES</option>
                                            <option value="ENVY">ENVY</option>
                                            <option value="ETHICS-MANNERS">ETHICS-MANNERS</option>
                                            <option value="EVIL">EVIL</option>
                                            <option value="FATAWA">FATAWA</option> 
                                            <option value="FITNAH">FITNAH</option>
                                            <option value="HAJJ-UMRAH">HAJJ-UMRAH</option>
                                            <option value="HALAL-o-HARAM">HALAL-o-HARAM</option>
                                            <option value="HARRAM-KHUTABHs">HARRAM KHUTABHs</option>
                                            <option value="HIJAB">HIJAB</option>
                                            <option value="HISTORY">HISTORY</option>
                                            <option value="ILM-ULAMA">ILM-ULAMA</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="ISLAMIC HISTORY">ISLAMIC HISTORY</option>
                                            <option value="JANAZAH">JANAZAH</option>
                                            <option value="KUFR">KUFR</option>
                                            <option value="MODESTY">MODESTY</option>
                                            <option value="MARRIAGE-DIVORCE">MARRIAGE-DIVORCE</option>
                                            <option value="MORALS">MORALS</option>                                           
                                            <option value="PARENTS">PARENTS</option>
                                            <option value="PRAYERS">PRAYERS</option>
                                            <option value="PROPHET'S-FAMILY">PROPHET'S FAMILY</option>                                            
                                            <option value="RACISM-INJUSTICE">RACISM - INJUSTICE</option>
                                            <option value="RELATIONS">RELATIONS</option>
                                            <option value="RELIGIONS">RELIGIONS</option>
                                            <option value="REPENTANCE">REPENTANCE</option>
                                            <option value="RIGHTS">RIGHTS</option>
                                            <option value="SAHABAH">SAHABAH</option>
                                            <option value="SECTS">SECTS</option>
                                            <option value="SEERAH">SEERAH</option>
                                            <option value="SHARIA">SHARIA</option>
                                            <option value="SHAYTAAN">SHAYTAAN</option>
                                            <option value="SISTERS">SISTERS</option>
                                            <option value="SOUL">SOUL</option>
                                            <option value="SUFISM">SUFISM</option>
                                            <option value="TERRORISM">TERRORISM</option>
                                            <option value="WARNINGS">WARNINGS</option>
                                            <option value="WASEELA">WASEELA</option>
                                            <option value="ZAKAT-SADAQAH">ZAKAT-SADAQAH</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="Catagory2" value="{{old('Catagory')}}">
                                            <option value="#">CATAGORY</option>
                                            <option value="AQEEDAH">AQEEDAH</option>
                                            <option value="SHIRK">SHIRK</option>
                                            <option value="QURAN">QURAN</option>
                                            <option value="HADITH">HADITH</option>
                                            <option value="PROPHETS">PROPHETS</option>
                                            <option value="TAFSIR">TAFSIR</option>
                                            <option value="TAWHEED">TAWHEED</option>
                                            <option value="ALLAH">ALLAH</option>
                                            <option value="ANGELS">ANGELS</option>
                                            <option value="DUA-ZIKR">DUA-ZIKR</option>
                                            <option value="JINN">JINN</option>
                                            <option value="SUNNAH">SUNNAH</option>
                                            <option value="BIDAH">BIDAH</option>
                                            <option value="BIOGRAPHIES">BIOGRAPHIES</option>
                                            <option value="DEATH-GRAVE">DEATH-GRAVE</option>
                                            <option value="FIQH">FIQH</option>
                                            <option value="NEW-MUSLIMS">NEW MUSLIMS</option>
                                            <option value="Non-Muslims">Non-Muslims</option>
                                            <option value="HEALING">HEALING</option>                           
                                            <option value="HEART">HEART</option>                               
                                            <option value="KUFAR-Celebrations">KUFAR-Celebrations</option>     
                                            <option value="Qayamat-HEREAFTER">Qayamat-HEREAFTER</option>       
                                            <option value="RAMADHAN">RAMADHAN</option>                    
                                            <option value="RUQYA">RUQYA</option>                            
                                            <option value="SALAF">SALAF</option>                            
                                            <option value="SINS">SINS</option>
                                            <option value="ISLAM-4-KIDs">ISLAM-4-KIDs</option>
                                            <option value="ISLAMI-SHARIA-WILL">ISLAMI-SHARIA-WILL</option>
                                            <option value="PROPHET-SAWS">PROPHETSAWS</option>
                                            <option value="SACRED-MONTHS">SACRED MONTHS</option>
                                            <option value="ADVICE">ADVICE</option>  
                                            <option value="AWLIYAH-ALLAH">AWLIYAH-ALLAH</option>
                                            <option value="BENEFITS">BENEFITS</option>
                                            <option value="CALAMITIES">CALAMITIES</option>
                                            <option value="CHILDREN-YOUTH">CHILDREN-YOUTH</option>
                                            <option value="CURRENT-AFFAIRS">CURRENT AFFAIRS</option>
                                            <option value="DAJJAL">DAJJAL</option>
                                            <option value="DAWAH">DAWAH</option>
                                            <option value="DESIRES">DESIRES</option>
                                            <option value="ENVY">ENVY</option>
                                            <option value="ETHICS-MANNERS">ETHICS-MANNERS</option>
                                            <option value="EVIL">EVIL</option>
                                            <option value="FATAWA">FATAWA</option> 
                                            <option value="FITNAH">FITNAH</option>
                                            <option value="HAJJ-UMRAH">HAJJ-UMRAH</option>
                                            <option value="HALAL-o-HARAM">HALAL-o-HARAM</option>
                                            <option value="HARRAM-KHUTABHs">HARRAM KHUTABHs</option>
                                            <option value="HIJAB">HIJAB</option>
                                            <option value="HISTORY">HISTORY</option>
                                            <option value="ILM-ULAMA">ILM-ULAMA</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="ISLAMIC HISTORY">ISLAMIC HISTORY</option>
                                            <option value="JANAZAH">JANAZAH</option>
                                            <option value="KUFR">KUFR</option>
                                            <option value="MODESTY">MODESTY</option>
                                            <option value="MARRIAGE-DIVORCE">MARRIAGE-DIVORCE</option>
                                            <option value="MORALS">MORALS</option>                                           
                                            <option value="PARENTS">PARENTS</option>
                                            <option value="PRAYERS">PRAYERS</option>
                                            <option value="PROPHET'S-FAMILY">PROPHET'S FAMILY</option>                                            
                                            <option value="RACISM-INJUSTICE">RACISM - INJUSTICE</option>
                                            <option value="RELATIONS">RELATIONS</option>
                                            <option value="RELIGIONS">RELIGIONS</option>
                                            <option value="REPENTANCE">REPENTANCE</option>
                                            <option value="RIGHTS">RIGHTS</option>
                                            <option value="SAHABAH">SAHABAH</option>
                                            <option value="SECTS">SECTS</option>
                                            <option value="SEERAH">SEERAH</option>
                                            <option value="SHARIA">SHARIA</option>
                                            <option value="SHAYTAAN">SHAYTAAN</option>
                                            <option value="SISTERS">SISTERS</option>
                                            <option value="SOUL">SOUL</option>
                                            <option value="SUFISM">SUFISM</option>
                                            <option value="TERRORISM">TERRORISM</option>
                                            <option value="WARNINGS">WARNINGS</option>
                                            <option value="WASEELA">WASEELA</option>
                                            <option value="ZAKAT-SADAQAH">ZAKAT-SADAQAH</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input class="form-control" type="submit" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Slider Section -->

        <!-- Start: Features -->
        <section class="features">
            <div class="container-fluid">
                <div class="row">
                    <ul>
                        <li class="bg-yellow">
                            <div class="feature-box">
                                <i class="yellow"></i>
                                <h3>Books</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id.</p>
            
                            </div>
                        </li>
                        <li class="bg-light-green">
                            <div class="feature-box">
                                <i class="light-green"></i>
                                <h3>eBooks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id.</p>
                               
                            </div>
                        </li>
                        <li class="bg-blue">
                            <div class="feature-box">
                                <i class="blue"></i>
                                <h3>DVDs</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id.</p>
                                
                            </div>
                        </li>
                        <li class="bg-red">
                            <div class="feature-box">
                                <i class="red"></i>
                                <h3>Magazines</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id.</p>
                               
                            </div>
                        </li>
                        <li class="bg-violet">
                            <div class="feature-box">
                                <i class="violet"></i>
                                <h3>Audio</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id.</p>
                                
                            </div>
                        </li>
                        <li class="bg-green">
                            <div class="feature-box">
                                <i class="green"></i>
                                <h3>eAudio</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id.</p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Features -->

        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                              <h2 class="section-title"  >Welcome to the libraria</h2>
                                <span class="underline left"></span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor,  or randomized words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, <br> <br> making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.  The generated Lorem Ipsum is therefore always free from repetition, injected humor, or non-characteristic words etc. <br> <br> making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.  The generated Lorem Ipsum is therefore always free from repetition</p>
                                <a class="btn btn-dark-gray" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->

        <!-- Start: Newsletter -->
        <section class="newsletter section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="center-content">
                            <h2 class="section-title">Subscribe to our Newsletters</h2>
                            <span class="underline center"></span>
                            <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email">
                            <input class="form-control" value="Subscribe" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Newsletter -->

       <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Check Out The New Releases</h2>
                    <span class="underline center"></span>
                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                </div>
                {{-- <div class="filter-buttons">
                    <div class="filter btn" data-filter="all">All Releases</div>
                    <div class="filter btn" data-filter=".adults">Adults</div>
                    <div class="filter btn" data-filter=".kids-teens">Kids &amp; Teens</div>
                    <div class="filter btn" data-filter=".video">Video</div>
                    <div class="filter btn" data-filter=".audio">Audio</div>
                    <div class="filter btn" data-filter=".books">Books</div>
                    <div class="filter btn" data-filter=".magazines">Magazines</div>
                </div> --}}
            </div>

            
            <div id="category-filter">
                <ul class="category-list">
                    @foreach ($data as $info)  
                    <li class="category-item adults">
                        <figure>
                            <img class="image-size" src="{{url('public/BookImage/'.$info->Book_Image)}}"  alt="New Releaase" />
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4>The Great Gatsby</h4>
                                    <span class="author"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="{{'final-page/'.$info->id}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>

           
            <div class="container">
                <!-- Start: Facts Counter -->
                <div class="fun-stuff">
                    <div class="facts-counter">
                        <ul>
                            <li class="col-sm-3">
                                <div class="fact-item icon-ebooks">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-ebooks.png" alt="" />
                                    </div>
                                    <span>eBooks<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fact-item icon-eaudio">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-eaudio.png" alt="" />
                                    </div>
                                    <span>eAudio<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fact-item icon-magazine">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-magazine.png" alt="" />
                                    </div>
                                    <span>Magazine<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fact-item icon-videos">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-videos.png" alt="" />
                                    </div>
                                    <span>Videos<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End: Facts Counter -->
            </div>
        </section>
        <!-- Start: Category Filter -->

        <!-- Start: Our Community Section -->
        <section class="community-testimonial">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title">Words From our Community</h2>
                    <span class="underline center"></span>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="owl-carousel">
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/home-testimonial.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="#">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="#" class="author">
                                Maria B (<small>Student )</small>
                            </a>
                            <div class="social-share-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/home-testimonial-01.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="#">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="#" class="author">
                                Adrey Pachai (<small>Student )</small>
                            </a>
                            <div class="social-share-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/home-testimonial-01.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="#">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="#" class="author">
                                Adrey Pachai (<small>Student )</small>
                            </a>
                            <div class="social-share-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Our Community Section -->

        <p class="mt-5"></p>
        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Libraria</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>21 King Street, Melbourne, Victoria 3000 Australia</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li><a href="#">Library News</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Meet Our Staff</a></li>
                                        <li><a href="#">Board of Trustees</a></li>
                                        <li><a href="#">Budget</a></li>
                                        <li><a href="#">Annual Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="text-4" class="widget widget_text">
                                <h3 class="footer-widget-title">Timing</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                    <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                    <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                    <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                    <ul>
                                        <li><a href="#">Closings</a></li>
                                        <li><a href="#">Branches</a></li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title">Latest Tweets</h3>
                                <span class="underline left"></span>
                                <div id="twitter-feed">
                                    <ul>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div>                
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-3">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="col-md-9 pull-right">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('all')}}">BOOKS</a></li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                                {{-- <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                                <li><a href="#">Kids &amp; Teens</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="/assets/js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="/assets/js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="/assets/js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="/assets/js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="/assets/js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="/assets/js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="/assets/js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="/assets/js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="/assets/js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="/assets/js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="/assets/js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="/assets/js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="/assets/js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="/assets/js/main.js"></script>

    </body>


</html>