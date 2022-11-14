
<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="/assets/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Accordion Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/assets/css/jquery.accordion.css">
        
        <!-- Stylesheet -->
        <link href="/assets/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="{{route('home')}}">
                                                <img src="/assets/images/libraria-logo-v3.png" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                                <span>/</span>
                                                <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
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
                                        {{-- <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="news-events-list-view.html">News &amp; Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                                <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="signin.html">Signin/Register</a></li>
                                                <li><a href="404.html">404/Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog.html">Blog Grid View</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
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
                                    <li><a href="contact.html">Contact</a></li> --}}
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Books & Media Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Books & Media</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-media-gird">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                            <form action="#" method="post">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                                        <input class="form-control" placeholder="Search by Keyword" name="keyword" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select class="form-control" name="Catagory" value="{{old('Catagory')}}">
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
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>All Categories</option>
                                                            <option>Category 01</option>
                                                            <option>Category 02</option>
                                                            <option>Category 03</option>
                                                            <option>Category 04</option>
                                                            <option>Category 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="Search">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
              <!-- End: Search Section -->

                     @yield('Book_Information')

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
                                <li><a href="/">Home</a></li>
                                <li><a href="{{route('all')}}">BOOKS</a></li>
                                <li><a href="{{route('contact')}}">CONTACT</a></li>
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