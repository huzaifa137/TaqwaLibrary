@extends('layouts.Books_header_and_footer')
@section('Book_Information')
</div>
<div class="row">
    <div class="col-md-9 col-md-push-3">
        <div class="filter-options margin-list">
            <div class="row">                                            
                <div class="col-md-4 col-sm-4">
                    <select name="orderby">
                        <option selected="selected">Default sorting</option>
                        <option>Sort by popularity</option>
                        <option>Sort by rating</option>
                        <option>Sort by newness</option>
                        <option>Sort by price</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="filter-result">Showing items 1 to 9 of 19 total</div>
                </div>
            </div>
        </div>
        <div class="books-gird">
          
            <ul>
                  @foreach ($finalresult as $info)
                <li>
                    <figure>
                        <img class="image-size" src="{{'public/BookImage/'.$info->Book_Image}}" alt="Book">
                        <figcaption>
                            <p><strong>The Great Gatsby</strong></p>
                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                        </figcaption>
                    </figure> 
                    <div class="book-list-icon yellow-icon"></div>
                    <div class="single-book-box">
                        <div class="post-detail">
                            <div class="books-social-sharing">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="optional-links">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <header class="entry-header">
                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                <ul>
                                    <li><strong>Author:</strong> F. Scott Fitzgerald</li>
                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                </ul>
                            </header>
                            <div class="entry-content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                            <footer class="entry-footer">
                                <a class="btn btn-primary" href="{{'final-page/'.$info->id}}">Read More</a>                 </footer>
                        </div>
                    </div>                                       
                </li>
                @endforeach
            </ul>
           
        </div>
        <nav class="navigation pagination text-center">
            <h2 class="screen-reader-text">Posts navigation</h2>
            <div class="nav-links">
                <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Previous</a>
                <a class="page-numbers" href="#.">1</a>
                <span class="page-numbers current">2</span>
                <a class="page-numbers" href="#.">3</a>
                <a class="page-numbers" href="#.">4</a>
                <a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </nav>
    </div>
    <div class="col-md-3 col-md-pull-9">
        <aside id="secondary" class="sidebar widget-area" data-accordion-group>
            <div class="widget widget_related_search open" data-accordion>
                <h4 class="widget-title" data-control>Related Searches</h4>
                <div data-content>
                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Subject</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="#">Love stories <span>(18)</span></a></li>
                                <li><a href="#">Texas <span>(04)</span></a></li>
                                <li><a href="#">Rich people <span>(03)</span></a></li>
                                <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                <li><a href="#">Widows <span>(02)</span></a></li>
                                <li><a href="#">Women <span>(11)</span></a></li>
                                <li><a href="#">Babysitters <span>(25)</span></a></li>
                                <li><a href="#">Law firms <span>(09)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Authors</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="#">Love stories <span>(18)</span></a></li>
                                <li><a href="#">Texas <span>(04)</span></a></li>
                                <li><a href="#">Rich people <span>(03)</span></a></li>
                                <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                <li><a href="#">Widows <span>(02)</span></a></li>
                                <li><a href="#">Women <span>(11)</span></a></li>
                                <li><a href="#">Babysitters <span>(25)</span></a></li>
                                <li><a href="#">Law firms <span>(09)</span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Series</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="#">Love stories <span>(18)</span></a></li>
                                <li><a href="#">Texas <span>(04)</span></a></li>
                                <li><a href="#">Rich people <span>(03)</span></a></li>
                                <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                <li><a href="#">Widows <span>(02)</span></a></li>
                                <li><a href="#">Women <span>(11)</span></a></li>
                                <li><a href="#">Babysitters <span>(25)</span></a></li>
                                <li><a href="#">Law firms <span>(09)</span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Other Searches</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="#">Love stories <span>(18)</span></a></li>
                                <li><a href="#">Texas <span>(04)</span></a></li>
                                <li><a href="#">Rich people <span>(03)</span></a></li>
                                <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                <li><a href="#">Widows <span>(02)</span></a></li>
                                <li><a href="#">Women <span>(11)</span></a></li>
                                <li><a href="#">Babysitters <span>(25)</span></a></li>
                                <li><a href="#">Law firms <span>(09)</span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </aside>
    </div>
</div>
</div>

<!-- Start: Staff Picks -->
<section class="team staff-picks">
<div class="container">
    <div class="center-content">
        <h2 class="section-title">Staff Picks</h2>
        <span class="underline center"></span>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="team-list">
        <div class="team-member">
            <figure>
                <img src="/assets/images/books-media/staff-pick/staff-picks-01.jpg" alt="Staff Pick" />
            </figure>
            <div class="content-block">
                <div class="member-info">
                    <div class="member-thumb">
                        <img src="/assets/images/books-media/staff-pick/gail.jpg" alt="Katherine">
                    </div>
                    <div class="member-content">
                        <span class="designation">Downtown & Business</span>
                        <h4>The Collector</h4>
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <figure>
                <img src="/assets/images/books-media/staff-pick/staff-picks-02.jpg" alt="Staff Pick" />
            </figure>
            <div class="content-block">
                <div class="member-info">
                    <div class="member-thumb">
                        <img src="/assets/images/books-media/staff-pick/katherine.jpg" alt="Katherine">
                    </div>
                    <div class="member-content">
                        <span class="designation">Katherine, West End</span>
                        <h4>Mongolia</h4>
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="team-member">
            <figure>
                <img src="/assets/images/books-media/staff-pick/staff-picks-03.jpg" alt="Staff Pick" />
            </figure>
            <div class="content-block">
                <div class="member-info">
                    <div class="member-thumb">
                        <img src="/assets/images/books-media/staff-pick/chris.jpg" alt="Katherine">
                    </div>
                    <div class="member-content">
                        <span class="designation">Chris, East Liberty</span>
                        <h4>The Revolution</h4>
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End: Staff Picks -->
</div>
</main>
</div>
</div>
<!-- End: Products Section -->

@endsection

                           