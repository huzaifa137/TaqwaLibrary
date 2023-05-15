@extends('layouts.VideoHeader_and_Footer')
@section('Video_Information')
<div class="row">
    <div class="col-md-9 col-md-push-3">
        <div class="news-list-detail">
            <div class="news-list-box">
                <div class="single-news-list">
                    
                    <div class="content-block">
                        <div class="member-info">
                            <div class="content_meta_category">
                                <span class="arrow-right"></span>
                                <a href="#." rel="category tag">Topic</a>
                            </div>
                            <ul class="news-event-info">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fa fa-calendar"></i>
                                        July 25, 2016
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fa fa-clock-o"></i>
                                        10:15 AM - 10:15 PM 
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fa fa-map-marker"></i>
                                        New York, USA
                                    </a>
                                </li>
                            </ul>
                            
                            <iframe width="100%" height="397" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" ></iframe>

                            <h2>Curabitur leo elit, interdum nec pretium eu, convallis ut erat. Curabitur sagittis feugiat tortor eget vehicula.</h2>
                            <p>Proin tincidunt molestie urna, non fringilla est pretium et. Proin dignissim porttitor quam, eget gravida ante accumsan et. Cras quis commodo massa. Nullam id mauris vel arcu ultricies hendrerit. Praesent hendrerit posuere risus, quis iaculis erat auctor non. Fusce bibendum in lorem ac pharetra. Mauris bibendum placerat massa non pellentesque. Maecenas interdum, nisl quis molestie gravida, sapien dui dictum urna, at pretium odio massa ut nibh. Nam sit amet eros ultricies leo ultrices sodales nec vel dui. Mauris imperdiet turpis sit amet lobortis efficitur. Mauris commodo nunc non risus auctor finibus. Ut egestas urna quis elit egestas, ac bibendum orci maximus. Maecenas risus magna, mollis et purus sit amet, pellentesque tempor lacus. Quisque dictum tortor ac est auctor, ut dapibus risus rutrum. Quisque porttitor turpis in sagittis porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean egestas consequat porttitor. </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            
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
                                <li><a href="{{url('search/Aqeedah')}}">AQEEDAH </span></a></li>
                                <li><a href="{{url('search/Shirk')}}">SHIRK </span></a></li>
                                <li><a href="{{url('search/Quran')}}">QURAN</span></a></li>
                                <li><a href="{{url('search/Hadith')}}">HADITH</a></li>
                                <li><a href="{{url('search/Prophets')}}">PROPHETS </span></a></li>
                                <li><a href="{{url('search/Tafsir')}}">TAFSIR</span></a></li>
                                <li><a href="{{url('search/Tawheed')}}">TAWHEED</span></a></li>
                                <li><a href="{{url('search/Allah')}}">ALLAH</a></li>
                                <li><a href="{{url('search/Angels')}}">ANGELS </span></a></li>
                                <li><a href="{{url('search/Dua-zikr')}}">DUA-ZIKR </span></a></li>
                                <li><a href="{{url('search/Jiin')}}">JINN</span></a></li>
                                <li><a href="{{url('search/Sunnah')}}">SUNNAH</a></li>
                                <li><a href="{{url('search/Bidah')}}">BIDAH</span></a></li>
                                <li><a href="{{url('search/Biographies')}}">BIOGRAPHIES</span></a></li>
                                <li><a href="{{url('search/Death-grave')}}">DEATH-GRAVE</span></a></li>
                                <li><a href="{{url('search/Fiqh')}}">FIQH</a></li>
                                <li><a href="{{url('search/New muslims')}}">NEW MUSLIMS</span></a></li>
                                <li><a href="{{url('search/Non-Muslims')}}">Non-Muslims</span></a></li>
                                <li><a href="{{url('search/Healing')}}">HEALING</span></a></li>
                                <li><a href="{{url('search/Heart')}}">HEART</a></li>
                                <li><a href="{{url('search/Kufar-Celebrations')}}">KUFAR-Celebrations</span></a></li>
                                <li><a href="{{url('search/Qayamat-Hereafter')}}">Qayamat-HEREAFTER</span></a></li>
                                <li><a href="{{url('search/Ramadhan')}}">RAMADHAN</span></a></li>
                                <li><a href="{{url('search/Ruqya')}}">RUQYA </span></a></li>
                                <li><a href="{{url('search/Salaf')}}">SALAF </span></a></li>
                                <li><a href="{{url('search/Sins')}}">SINS</span></a></li>
                                <li><a href="{{url('search/Islam-4-kids')}}">ISLAM-4-KIDs</a></li>
                                <li><a href="{{url('search/Islam-sharia-will')}}">ISLAMI-SHARIA-WILL </span></a></li>
                                <li><a href="{{url('search/Prophet-saws')}}">PROPHET-SAWS</span></a></li>
                                <li><a href="{{url('search/Sacred-months')}}">SACRED-MONTHS</span></a></li>
                                <li><a href="{{url('search/Advice')}}">ADVICE</a></li>
                                <li><a href="{{url('search/Awliyah-Allah')}}">AWLIYAH-ALLAH </span></a></li>
                                <li><a href="{{url('search/Benefits')}}">BENEFITS</span></a></li>
                                <li><a href="{{url('search/Calamities')}}">CALAMITIES</span></a></li>
                                <li><a href="{{url('search/Children-youth')}}">CHILDREN-YOUTH</a></li>
                                <li><a href="{{url('search/Current-affairs')}}">CURRENT-AFFAIRS</span></a></li>
                                <li><a href="{{url('search/Dajjal')}}">DAJJAL</span></a></li>
                                <li><a href="{{url('search/Dawah')}}">DAWAH</span></a></li>
                                <li><a href="{{url('search/Desires')}}">DESIRES</a></li>
                                <li><a href="{{url('search/Envy')}}">ENVY</span></a></li>
                                <li><a href="{{url('search/Ethics-manner')}}">ETHICS-MANNERS</span></a></li>
                                <li><a href="{{url('search/Evil')}}">EVIL</span></a></li>
                                <li><a href="{{url('search/Fatawa')}}">FATAWA</a></li>
                                <li><a href="{{url('search/Fitnah')}}">FITNAH</span></a></li>
                                <li><a href="{{url('search/Hajj-Umrah')}}">HAJJ-UMRAH</span></a></li>
                                <li><a href="{{url('search/Halal-o-Haram')}}">HALAL-o-HARAM</span></a></li>
                                <li><a href="{{url('search/Harram-Khutabhs')}}">HARRAM-KHUTABHs</span></a></li>
                                <li><a href="{{url('search/Hijab')}}">HIJAB</a></li>
                                <li><a href="{{url('search/History')}}">HISTORY </span></a></li>
                                <li><a href="{{url('search/Ilm-Ulama')}}">ILM-ULAMA</span></a></li>
                                <li><a href="{{url('search/Islam')}}">ISLAM</span></a></li>
                                <li><a href="{{url('search/Islamic History')}}">ISLAMIC HISTORY</a></li>
                                <li><a href="{{url('search/Janazah')}}">JANAZAH</span></a></li>
                                <li><a href="{{url('search/Kufr')}}">KUFR</span></a></li>
                                <li><a href="{{url('search/Modesty')}}">MODESTY</span></a></li>
                                <li><a href="{{url('search/Marriage-divorce')}}">MARRIAGE-DIVORCE</a></li>
                                <li><a href="{{url('search/Morals')}}">MORALS</span></a></li>
                                <li><a href="{{url('search/Parents')}}">PARENTS</span></a></li>
                                <li><a href="{{url('search/Prayers')}}">PRAYERS</span></a></li>
                                <li><a href="{{url('search/Prophet\'S-family')}}">PROPHET'S-FAMILY</a></li>
                                <li><a href="{{url('search/racism-injustice')}}">RACISM-INJUSTICE</span></a></li>
                                <li><a href="{{url('search/Relations')}}">RELATIONS</span></a></li>
                                <li><a href="{{url('search/Religions')}}">RELIGIONS</span></a></li>
                                <li><a href="{{url('search/Repentance')}}">REPENTANCE</a></li>
                                <li><a href="{{url('search/Rights')}}">RIGHTS</span></a></li>
                                <li><a href="{{url('search/Zakat-sadaq')}}">ZAKAT-SADAQAH</span></a></li>
                                <li><a href="{{url('search/Sahabah')}}">SAHABAH</span></a></li>
                                <li><a href="{{url('search/sects')}}">SECTS</a></li>
                                <li><a href="{{url('search/Seerah')}}">SEERAH</span></a></li>
                                <li><a href="{{url('search/Sharia')}}">SHARIA</span></a></li>
                                <li><a href="{{url('search/Shaytaan')}}">SHAYTAAN</span></a></li>
                                <li><a href="{{url('search/Sisters')}}">SISTERS</a></li>
                                <li><a href="{{url('search/Soul')}}">SOUL</span></a></li>
                                <li><a href="{{url('search/Sufism')}}">SUFISM</span></a></li>
                                <li><a href="{{url('search/Terrorism')}}">TERRORISM</span></a></li>
                                <li><a href="{{url('search/Warnings')}}">WARNINGS</a></li>
                                <li><a href="{{url('search/Waseela')}}">WASEELA</span></a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div data-accordion>
                        <h5 class="widget-sub-title" data-control>Sheikhs</h5>
                        <div class="widget_categories" data-content>
                            <ul>
                                <li><a href="{{url('search-ulaamah/sheikh Quraish Mazinga')}}">sheikh Quraish Mazinga</span></a></li>
                            </ul>
                        </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </aside>
    </div>
</div>

@endsection
