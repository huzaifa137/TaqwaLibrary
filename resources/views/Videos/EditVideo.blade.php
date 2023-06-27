@extends('layouts.header_footer_navbar')
@section('content')
@include('include.message')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
    @if (Session::get('success'))
        <div class="alert alert-primary">
            {{Session::get('success')}}
        </div>
    @endif
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Video</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Video</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Video</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-video')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Sheikh Name</label>
                                        <input type="text" name="sheikh_name" class="form-control" value="{{$data->sheikh_name}}">
                                         <span style="color: red">@error('sheikh_name'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Topic </label>
                                        <input type="text" name="topic" class="form-control" value="{{$data->topic}}">
                                        <span style="color: red"> @error('topic'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Link for Video</label>
                                        <input type="text" name="video_link" class="form-control" value="{{$data->video_link}}">
                                         <span style="color: red">@error('video_link'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Catagory</label>
                                        <select class="form-control" name="Catagory" value="{{$data->Catagory}}">
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
                                        <span style="color: red"> @error('Catagory'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Summary</label>
                                        <input type="text" name="Summary" class="form-control" value="{{$data->Summary}}">
                                         <span style="color: red">@error('Summary'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection