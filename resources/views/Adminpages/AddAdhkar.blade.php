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
                    <h4>Add Adhkar</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void()">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Adhkar</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Adhkar</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{route('add-post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Dua Name</label>
                                        <input type="text" name="dua_name" class="form-control" value="{{old('dua_name')}}">
                                         <span style="color: red">@error('dua_name'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Dua Catagory</label>
                                        <select class="form-control" name="dua_catagory" value="{{old('dua_catagory')}}">
                                            <option value="MORNING">MORNING</option>
                                            <option value="EVENING">EVENING</option>
                                            <option value="Adhkar After Swalah">Adhkar After Swalah</option>
                                            <option value="Famous Duas From Quran">Famous Duas from the Quran</option>
                                            <option value="Other Duas">Other Dua's</option>
                                        </select>
                                        <span style="color: red"> @error('dua_catagory'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Number of times in words</label>
                                        <select class="form-control" name="number_in_words" value="{{old('number_in_words')}}">
                                            <option value="ONCE">ONCE</option>
                                            <option value="TWICE">TWICE</option>
                                            <option value="THREE TIMES">THREE TIMES</option>
                                            <option value="FOUR TIMES">FOUR TIMES</option>
                                            <option value="SEVEN TIMES">SEVEN TIMES</option>
                                            <option value="TEN TIMES">TEN TIMES</option>
                                            <option value="HUNDREN TIMES">HUNDREN TIMES</option>
                                        </select>
                                        <span style="color: red"> @error('number_in_words'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Number of times in Figures</label>
                                        <select class="form-control" name="number_in_figures" value="{{old('number_in_figures')}}">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="7">7</option>
                                            <option value="10">10</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span style="color: red"> @error('number_in_figures'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 1</label>
                                        <input type="text" name="para_1" class="form-control" value="{{old('para_1')}}" maxlength="381">
                                         <span style="color: red">@error('para_1'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 2</label>
                                        <input type="text" name="para_2" class="form-control" value="{{old('para_2')}}">
                                         <span style="color: red">@error('para_2'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 3</label>
                                        <input type="text" name="para_3" class="form-control" value="{{old('para_3')}}">
                                         <span style="color: red">@error('para_3'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 4</label>
                                        <input type="text" name="para_4" class="form-control" value="{{old('para_4')}}" maxlength="381">
                                         <span style="color: red">@error('para_4'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 5</label>
                                        <input type="text" name="para_5" class="form-control" value="{{old('para_5')}}">
                                         <span style="color: red">@error('para_5'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 6</label>
                                        <input type="text" name="para_6" class="form-control" value="{{old('para_6')}}">
                                         <span style="color: red">@error('para_6'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph 7</label>
                                        <input type="text" name="para_7" class="form-control" value="{{old('para_7')}}">
                                         <span style="color: red">@error('para_7'){{$message}}@enderror</span>
                                    </div>
                                </div>

				                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                     <strong>Upload Adhkar Image :</strong>  <input type="file" name="Adhkar_image" class="dropify" data-default-file="" value="{{old('Adhkar_image')}}">
                                     <span style="color: red">@error('Adhkar_image'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cancel</button>
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