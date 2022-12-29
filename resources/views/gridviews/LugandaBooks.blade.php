@extends('layouts.Books_header_and_footer')
@section('Book_Information')
</div>
<div class="row">
    <div class="col-md-9 col-md-push-3">
        <div class="books-gird">
            <ul>
                  @foreach ($data as $info)
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
                                    <li><a href="javascript:void()" ><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void()" ><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void()" ><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:void()" ><i class="fa fa-rss"></i></a></li>
                                    <li><a href="javascript:void()" ><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="optional-links">
                                <ul>
                                    <li>
                                        <a href="javascript:void()"  data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()"  data-toggle="blog-tags" data-placement="top" title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()"  data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()"  data-toggle="blog-tags" data-placement="top" title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()"  data-toggle="blog-tags" data-placement="top" title="Print">
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
                <a class="prev page-numbers" href="javascript:void()."><i class="fa fa-long-arrow-left"></i> Previous</a>
                <a class="page-numbers current" href="javascript:void().">1</a>
                <span class="page-numbers ">2</span>
                <a class="page-numbers" href="javascript:void().">3</a>
                <a class="page-numbers" href="javascript:void().">4</a>
                <a class="next page-numbers" href="javascript:void().">Next <i class="fa fa-long-arrow-right"></i></a>
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
                                <li><a href="{{url('search/Aqeedah')}}">AQEEDAH <span>(02)</span></a></li>
                                <li><a href="{{url('search/Shirk')}}">SHIRK <span>(11)</span></a></li>
                                <li><a href="{{url('search/Quran')}}">QURAN<span>(25)</span></a></li>
                                <li><a href="{{url('search/Hadith')}}">HADITH<span>(09)</span></a></li>
                                <li><a href="{{url('search/Prophets')}}">PROPHETS <span>(02)</span></a></li>
                                <li><a href="{{url('search/Tafsir')}}">TAFSIR<span>(11)</span></a></li>
                                <li><a href="{{url('search/Tawheed')}}">TAWHEED<span>(25)</span></a></li>
                                <li><a href="{{url('search/Allah')}}">ALLAH<span>(09)</span></a></li>
                                <li><a href="{{url('search/Angels')}}">ANGELS <span>(02)</span></a></li>
                                <li><a href="{{url('search/Dua-zikr')}}">DUA-ZIKR <span>(11)</span></a></li>
                                <li><a href="{{url('search/Jiin')}}">JINN<span>(25)</span></a></li>
                                <li><a href="{{url('search/Sunnah')}}">SUNNAH<span>(09)</span></a></li>
                                <li><a href="{{url('search/Bidah')}}">BIDAH<span>(02)</span></a></li>
                                <li><a href="{{url('search/Biographies')}}">BIOGRAPHIES<span>(11)</span></a></li>
                                <li><a href="{{url('search/Death-grave')}}">DEATH-GRAVE<span>(25)</span></a></li>
                                <li><a href="{{url('search/Fiqh')}}">FIQH<span>(09)</span></a></li>
                                <li><a href="{{url('search/New muslims')}}">NEW MUSLIMS<span>(02)</span></a></li>
                                <li><a href="{{url('search/Non-Muslims')}}">Non-Muslims<span>(11)</span></a></li>
                                <li><a href="{{url('search/Healing')}}">HEALING<span>(25)</span></a></li>
                                <li><a href="{{url('search/Heart')}}">HEART<span>(09)</span></a></li>
                                <li><a href="{{url('search/Kufar-Celebrations')}}">KUFAR-Celebrations<span>(02)</span></a></li>
                                <li><a href="{{url('search/Qayamat-Hereafter')}}">Qayamat-HEREAFTER<span>(11)</span></a></li>
                                <li><a href="{{url('search/Ramadhan')}}">RAMADHAN<span>(25)</span></a></li>
                                <li><a href="{{url('search/Ruqya')}}">RUQYA <span>(02)</span></a></li>
                                <li><a href="{{url('search/Salaf')}}">SALAF <span>(11)</span></a></li>
                                <li><a href="{{url('search/Sins')}}">SINS<span>(25)</span></a></li>
                                <li><a href="{{url('search/Islam-4-kids')}}">ISLAM-4-KIDs<span>(09)</span></a></li>
                                <li><a href="{{url('search/Islam-sharia-will')}}">ISLAMI-SHARIA-WILL <span>(02)</span></a></li>
                                <li><a href="{{url('search/Prophet-saws')}}">PROPHET-SAWS<span>(11)</span></a></li>
                                <li><a href="{{url('search/Sacred-months')}}">SACRED-MONTHS<span>(25)</span></a></li>
                                <li><a href="{{url('search/Advice')}}">ADVICE<span>(09)</span></a></li>
                                <li><a href="{{url('search/Awliyah-Allah')}}">AWLIYAH-ALLAH <span>(02)</span></a></li>
                                <li><a href="{{url('search/Benefits')}}">BENEFITS<span>(11)</span></a></li>
                                <li><a href="{{url('search/Calamities')}}">CALAMITIES<span>(25)</span></a></li>
                                <li><a href="{{url('search/Children-youth')}}">CHILDREN-YOUTH<span>(09)</span></a></li>
                                <li><a href="{{url('search/Current-affairs')}}">CURRENT-AFFAIRS<span>(02)</span></a></li>
                                <li><a href="{{url('search/Dajjal')}}">DAJJAL<span>(11)</span></a></li>
                                <li><a href="{{url('search/Dawah')}}">DAWAH<span>(25)</span></a></li>
                                <li><a href="{{url('search/Desires')}}">DESIRES<span>(09)</span></a></li>
                                <li><a href="{{url('search/Envy')}}">ENVY<span>(02)</span></a></li>
                                <li><a href="{{url('search/Ethics-manner')}}">ETHICS-MANNERS<span>(11)</span></a></li>
                                <li><a href="{{url('search/Evil')}}">EVIL<span>(25)</span></a></li>
                                <li><a href="{{url('search/Fatawa')}}">FATAWA<span>(09)</span></a></li>
                                <li><a href="{{url('search/Fitnah')}}">FITNAH<span>(02)</span></a></li>
                                <li><a href="{{url('search/Hajj-Umrah')}}">HAJJ-UMRAH<span>(11)</span></a></li>
                                <li><a href="{{url('search/Halal-o-Haram')}}">HALAL-o-HARAM<span>(25)</span></a></li>
                                <li><a href="{{url('search/Harram-Khutabhs')}}">HARRAM-KHUTABHs<span>(25)</span></a></li>
                                <li><a href="{{url('search/Hijab')}}">HIJAB<span>(09)</span></a></li>
                                <li><a href="{{url('search/History')}}">HISTORY <span>(02)</span></a></li>
                                <li><a href="{{url('search/Ilm-Ulama')}}">ILM-ULAMA<span>(11)</span></a></li>
                                <li><a href="{{url('search/Islam')}}">ISLAM<span>(25)</span></a></li>
                                <li><a href="{{url('search/Islamic History')}}">ISLAMIC HISTORY<span>(09)</span></a></li>
                                <li><a href="{{url('search/Janazah')}}">JANAZAH<span>(02)</span></a></li>
                                <li><a href="{{url('search/Kufr')}}">KUFR<span>(11)</span></a></li>
                                <li><a href="{{url('search/Modesty')}}">MODESTY<span>(25)</span></a></li>
                                <li><a href="{{url('search/Marriage-divorce')}}">MARRIAGE-DIVORCE<span>(09)</span></a></li>
                                <li><a href="{{url('search/Morals')}}">MORALS<span>(02)</span></a></li>
                                <li><a href="{{url('search/Parents')}}">PARENTS<span>(11)</span></a></li>
                                <li><a href="{{url('search/Prayers')}}">PRAYERS<span>(25)</span></a></li>
                                <li><a href="{{url('search/Prophet\'S-family')}}">PROPHET'S-FAMILY<span>(09)</span></a></li>
                                <li><a href="{{url('search/racism-injustice')}}">RACISM-INJUSTICE<span>(02)</span></a></li>
                                <li><a href="{{url('search/Relations')}}">RELATIONS<span>(11)</span></a></li>
                                <li><a href="{{url('search/Religions')}}">RELIGIONS<span>(25)</span></a></li>
                                <li><a href="{{url('search/Repentance')}}">REPENTANCE<span>(09)</span></a></li>
                                <li><a href="{{url('search/Rights')}}">RIGHTS<span>(02)</span></a></li>
                                <li><a href="{{url('search/Zakat-sadaq')}}">ZAKAT-SADAQAH<span>(25)</span></a></li>
                                <li><a href="{{url('search/Sahabah')}}">SAHABAH<span>(25)</span></a></li>
                                <li><a href="{{url('search/sects')}}">SECTS<span>(09)</span></a></li>
                                <li><a href="{{url('search/Seerah')}}">SEERAH<span>(02)</span></a></li>
                                <li><a href="{{url('search/Sharia')}}">SHARIA<span>(11)</span></a></li>
                                <li><a href="{{url('search/Shaytaan')}}">SHAYTAAN<span>(25)</span></a></li>
                                <li><a href="{{url('search/Sisters')}}">SISTERS<span>(09)</span></a></li>
                                <li><a href="{{url('search/Soul')}}">SOUL<span>(02)</span></a></li>
                                <li><a href="{{url('search/Sufism')}}">SUFISM<span>(11)</span></a></li>
                                <li><a href="{{url('search/Terrorism')}}">TERRORISM<span>(25)</span></a></li>
                                <li><a href="{{url('search/Warnings')}}">WARNINGS<span>(09)</span></a></li>
                                <li><a href="{{url('search/Waseela')}}">WASEELA<span>(02)</span></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Authors</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="javascript:void()">Love stories <span>(18)</span></a></li>
                                <li><a href="javascript:void()">Texas <span>(04)</span></a></li>
                                <li><a href="javascript:void()">Rich people <span>(03)</span></a></li>
                                <li><a href="javascript:void()">Humorous stories <span>(02)</span></a></li>
                                <li><a href="javascript:void()">Widows <span>(02)</span></a></li>
                                <li><a href="javascript:void()">Women <span>(11)</span></a></li>
                                <li><a href="javascript:void()">Babysitters <span>(25)</span></a></li>
                                <li><a href="javascript:void()">Law firms <span>(09)</span></a></li>
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

@include('include.staff_picks')
</div>
</main>
</div>
</div>
<!-- End: Products Section -->

@endsection

                           