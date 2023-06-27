@extends('layouts.VideoHeader_and_Footer')
@section('Video_Information')
<div class="row">
    <div class="col-md-9 col-md-push-3">
        <div class="books-gird">
            <ul>

                @foreach ($data as $info)
    
                <li>
                    <figure>
                        <iframe width="100%" height="397" src="{{$info->video_link}}" frameborder="0" ></iframe>
                        
                        <figcaption>
                            <p><strong>Sheikh: {{$info->sheikh_name}}</strong></p>
                        </figcaption>
                    </figure> 
                    <div class="book-list-icon blue-icon"></div>
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
                                <h3 class="entry-title"><a href="books-media-detail-v1.html">{{$info->topic}}</a></h3>
                                <ul>
                                    <li><strong>Sheikh : </strong>{{$info->sheikh_name}}</li>
                                </ul>
                            </header>
                            <div class="entry-content">
                               <p>{{$info->Summary}}</p>
                            </div>
                            <footer class="entry-footer">
                                <a class="btn btn-primary" href="{{'watch-video/'.$info->id}}">Read More</a>
                            </footer>
                        </div>
                    </div>                                       
                </li>

                @endforeach
            </ul>
        </div>
        
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
                                <li><a href="{{url('search/subject/Aqeedah')}}">AQEEDAH </span></a></li>
                                <li><a href="{{url('search/subject/Shirk')}}">SHIRK </span></a></li>
                                <li><a href="{{url('search/subject/Quran')}}">QURAN</span></a></li>
                                <li><a href="{{url('search/subject/Hadith')}}">HADITH</a></li>
                                <li><a href="{{url('search/subject/Prophets')}}">PROPHETS </span></a></li>
                                <li><a href="{{url('search/subject/Tafsir')}}">TAFSIR</span></a></li>
                                <li><a href="{{url('search/subject/Tawheed')}}">TAWHEED</span></a></li>
                                <li><a href="{{url('search/subject/Allah')}}">ALLAH</a></li>
                                <li><a href="{{url('search/subject/Angels')}}">ANGELS </span></a></li>
                                <li><a href="{{url('search/subject/Dua-zikr')}}">DUA-ZIKR </span></a></li>
                                <li><a href="{{url('search/subject/Jiin')}}">JINN</span></a></li>
                                <li><a href="{{url('search/subject/Sunnah')}}">SUNNAH</a></li>
                                <li><a href="{{url('search/subject/Bidah')}}">BIDAH</span></a></li>
                                <li><a href="{{url('search/subject/Biographies')}}">BIOGRAPHIES</span></a></li>
                                <li><a href="{{url('search/subject/Death-grave')}}">DEATH-GRAVE</span></a></li>
                                <li><a href="{{url('search/subject/Fiqh')}}">FIQH</a></li>
                                <li><a href="{{url('search/subject/New muslims')}}">NEW MUSLIMS</span></a></li>
                                <li><a href="{{url('search/subject/Non-Muslims')}}">Non-Muslims</span></a></li>
                                <li><a href="{{url('search/subject/Healing')}}">HEALING</span></a></li>
                                <li><a href="{{url('search/subject/Heart')}}">HEART</a></li>
                                <li><a href="{{url('search/subject/Kufar-Celebrations')}}">KUFAR-Celebrations</span></a></li>
                                <li><a href="{{url('search/subject/Qayamat-Hereafter')}}">Qayamat-HEREAFTER</span></a></li>
                                <li><a href="{{url('search/subject/Ramadhan')}}">RAMADHAN</span></a></li>
                                <li><a href="{{url('search/subject/Ruqya')}}">RUQYA </span></a></li>
                                <li><a href="{{url('search/subject/Salaf')}}">SALAF </span></a></li>
                                <li><a href="{{url('search/subject/Sins')}}">SINS</span></a></li>
                                <li><a href="{{url('search/subject/Islam-4-kids')}}">ISLAM-4-KIDs</a></li>
                                <li><a href="{{url('search/subject/Islam-sharia-will')}}">ISLAMI-SHARIA-WILL </span></a></li>
                                <li><a href="{{url('search/subject/Prophet-saws')}}">PROPHET-SAWS</span></a></li>
                                <li><a href="{{url('search/subject/Sacred-months')}}">SACRED-MONTHS</span></a></li>
                                <li><a href="{{url('search/subject/Advice')}}">ADVICE</a></li>
                                <li><a href="{{url('search/subject/Awliyah-Allah')}}">AWLIYAH-ALLAH </span></a></li>
                                <li><a href="{{url('search/subject/Benefits')}}">BENEFITS</span></a></li>
                                <li><a href="{{url('search/subject/Calamities')}}">CALAMITIES</span></a></li>
                                <li><a href="{{url('search/subject/Children-youth')}}">CHILDREN-YOUTH</a></li>
                                <li><a href="{{url('search/subject/Current-affairs')}}">CURRENT-AFFAIRS</span></a></li>
                                <li><a href="{{url('search/subject/Dajjal')}}">DAJJAL</span></a></li>
                                <li><a href="{{url('search/subject/Dawah')}}">DAWAH</span></a></li>
                                <li><a href="{{url('search/subject/Desires')}}">DESIRES</a></li>
                                <li><a href="{{url('search/subject/Envy')}}">ENVY</span></a></li>
                                <li><a href="{{url('search/subject/Ethics-manner')}}">ETHICS-MANNERS</span></a></li>
                                <li><a href="{{url('search/subject/Evil')}}">EVIL</span></a></li>
                                <li><a href="{{url('search/subject/Fatawa')}}">FATAWA</a></li>
                                <li><a href="{{url('search/subject/Fitnah')}}">FITNAH</span></a></li>
                                <li><a href="{{url('search/subject/Hajj-Umrah')}}">HAJJ-UMRAH</span></a></li>
                                <li><a href="{{url('search/subject/Halal-o-Haram')}}">HALAL-o-HARAM</span></a></li>
                                <li><a href="{{url('search/subject/Harram-Khutabhs')}}">HARRAM-KHUTABHs</span></a></li>
                                <li><a href="{{url('search/subject/Hijab')}}">HIJAB</a></li>
                                <li><a href="{{url('search/subject/History')}}">HISTORY </span></a></li>
                                <li><a href="{{url('search/subject/Ilm-Ulama')}}">ILM-ULAMA</span></a></li>
                                <li><a href="{{url('search/subject/Islam')}}">ISLAM</span></a></li>
                                <li><a href="{{url('search/subject/Islamic History')}}">ISLAMIC HISTORY</a></li>
                                <li><a href="{{url('search/subject/Janazah')}}">JANAZAH</span></a></li>
                                <li><a href="{{url('search/subject/Kufr')}}">KUFR</span></a></li>
                                <li><a href="{{url('search/subject/Modesty')}}">MODESTY</span></a></li>
                                <li><a href="{{url('search/subject/Marriage-divorce')}}">MARRIAGE-DIVORCE</a></li>
                                <li><a href="{{url('search/subject/Morals')}}">MORALS</span></a></li>
                                <li><a href="{{url('search/subject/Parents')}}">PARENTS</span></a></li>
                                <li><a href="{{url('search/subject/Prayers')}}">PRAYERS</span></a></li>
                                <li><a href="{{url('search/subject/Prophet\'S-family')}}">PROPHET'S-FAMILY</a></li>
                                <li><a href="{{url('search/subject/racism-injustice')}}">RACISM-INJUSTICE</span></a></li>
                                <li><a href="{{url('search/subject/Relations')}}">RELATIONS</span></a></li>
                                <li><a href="{{url('search/subject/Religions')}}">RELIGIONS</span></a></li>
                                <li><a href="{{url('search/subject/Repentance')}}">REPENTANCE</a></li>
                                <li><a href="{{url('search/subject/Rights')}}">RIGHTS</span></a></li>
                                <li><a href="{{url('search/subject/Zakat-sadaq')}}">ZAKAT-SADAQAH</span></a></li>
                                <li><a href="{{url('search/subject/Sahabah')}}">SAHABAH</span></a></li>
                                <li><a href="{{url('search/subject/sects')}}">SECTS</a></li>
                                <li><a href="{{url('search/subject/Seerah')}}">SEERAH</span></a></li>
                                <li><a href="{{url('search/subject/Sharia')}}">SHARIA</span></a></li>
                                <li><a href="{{url('search/subject/Shaytaan')}}">SHAYTAAN</span></a></li>
                                <li><a href="{{url('search/subject/Sisters')}}">SISTERS</a></li>
                                <li><a href="{{url('search/subject/Soul')}}">SOUL</span></a></li>
                                <li><a href="{{url('search/subject/Sufism')}}">SUFISM</span></a></li>
                                <li><a href="{{url('search/subject/Terrorism')}}">TERRORISM</span></a></li>
                                <li><a href="{{url('search/subject/Warnings')}}">WARNINGS</a></li>
                                <li><a href="{{url('search/subject/Waseela')}}">WASEELA</span></a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Sheikhs</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="{{url('search/sheikh/Saleh al Fawzan')}}">sheikh Saleh al Fawzan</span></a></li>
                            </ul>
                        </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </aside>
    </div>
</div>
<!-- End: Products Section -->

@endsection
