@extends('layouts.contact_header_and_footer')
@section('Book_Information')
<script>
    var $msg ='{{Session::get('success')}}';
    var $verify ='{{Session::has('success')}}';

    if($verify)
    {
      alert($msg);
    }
</script>
        <!-- Start: Contact Us Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="contact-main">
                        <div class="contact-us">
                            <div class="container">
                                <div class="contact-location">
                                    <div class="flipcard">
                                        <div class="front">
                                            <div class="top-info">
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                            </div>
                                            <div class="bottom-info">
                                                <span class="top-arrow"></span>
                                                <ul>
                                                    <li>121 King Street, Melbourne </li>
                                                    <li>Victoria 3000 Australia</li>
                                                    <li>PO Box 16122</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="back">
                                            <div class="bottom-info orange-bg">
                                                <span class="bottom-arrow"></span>
                                                <ul>
                                                    <li>121 King Street, Melbourne </li>
                                                    <li>Victoria 3000 Australia</li>
                                                    <li>PO Box 16122</li>
                                                </ul>
                                            </div>
                                            <div class="top-info dark-bg">
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="flipcard">
                                        <div class="front">
                                            <div class="top-info">
                                                <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                            </div>
                                            <div class="bottom-info">
                                                <span class="top-arrow"></span>
                                                <ul>
                                                    <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                    <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                    <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="back">
                                            <div class="bottom-info orange-bg">
                                                <span class="bottom-arrow"></span>
                                                <ul>
                                                    <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                    <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                    <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                                </ul>
                                            </div>
                                            <div class="top-info dark-bg">
                                                <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="flipcard">
                                        <div class="front">
                                            <div class="top-info">
                                                <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                            </div>
                                            <div class="bottom-info">
                                                <span class="top-arrow"></span>
                                                <ul>
                                                    <li>www.libraria.com</li>
                                                    <li>support@libraria.com</li>
                                                    <li>info@libraria.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="back">
                                            <div class="bottom-info orange-bg">
                                                <span class="bottom-arrow"></span>
                                                <ul>
                                                    <li><a href="http://www.libraria.com/">www.libraria.com </a></li>
                                                    <li><a href="mailto:support@libraria.com">support@libraria.com</a></li>
                                                    <li><a href="mailto:info@libraria.com">info@libraria.com</a></li>
                                                </ul>
                                            </div>
                                            <div class="top-info dark-bg">
                                                <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    <div class="contact-area">
                                        <div class="container">
                                            <div class="col-md-10 col-md-offset-1 border-gray-left">
                                               
                                            <div class="col-md-12 border-gray-right">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="contact-form bg-light ">
                                                            <h2>Send us a message</h2>
                                                            <span class="underline left"></span>
                                                            <div class="contact-fields">
                                                                <form action="{{route('send-message')}}" method="post" >
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text" placeholder="First Name" name="firstname" id="first-name" size="30" value="" aria-required="true" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text" placeholder="Last Name" name="lastname" id="last-name" size="30" value="" aria-required="true" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" name="email"  size="30" value="" aria-required="true" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text" placeholder="Phone Number" name="phonenumber" id="phone" size="30" value="" aria-required="true" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" placeholder="Your message" name="message" aria-required="true" required></textarea>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-submit">
                                                                                <input class="btn btn-default"  type="submit"  value="Send Message"/>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </form> 
                                                            </div>                                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Contact Us Section -->

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