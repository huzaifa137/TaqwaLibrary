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
                    <h4>Upload Audio</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Audio</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Audio</a></li>
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
                        <form action="{{route('Audio-Upload')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="First_name" class="form-control" value="{{old('First_name')}}">
                                        <span style="color: red"> @error('First_name'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <select class="form-control" name="sheikh_name" value="{{old('sheikh_name')}}" required>
                                            <option value="Muhammad Quraish Mazinga">Muhammad Quraish Mazinga</option>
                                            <option value="Adam Ssenjala">Adam Ssenjala</option>
                                            <option value="Muhsin Burhan Kitti">Muhsin Burhan Kitti</option>
                                            <option value="Ahmad Sulaiman Kyeyune">Ahmad Sulaiman Kyeyune</option>
                                            <option value="NUUHU UTHMAN ABU NAJIIBAH">NUUHU UTHMAN ABU NAJIIBAH</option>
                                            <option value="Adam.S.Waiswa">Adam.S.Waiswa</option>
                                            <option value="AbdulKarim Mugendera">AbdulKarim Mugendera</option>
                                        </select>
                                        <span style="color: red">@error('sheikh_name'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Topic </label>
                                        <input type="text" name="topic" class="form-control" value="{{old('topic')}}" required>
                                        <span style="color: red"> @error('topic'){{$message}} @enderror</span>
                                    </div>
                                </div>
   
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                     <strong>Upload Audio :</strong>  <input type="file" name="audio" class="dropify" data-default-file="" value="{{old('audio')}}">
                                     <span style="color: red">@error('audio'){{$message}} @enderror</span>
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