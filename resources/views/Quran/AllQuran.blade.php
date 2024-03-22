@extends('layouts.header_footer_navbar')
@section('content')
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
					<h4>Quran Database</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
					<li class="breadcrumb-item active"><a >Quran</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">All Quran</a></li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row tab-content">
					<div id="list-view" class="tab-pane fade active show col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">All Quran  </h4>
								<a href="{{route('Add-Quran')}}" class="btn btn-primary">+ Add Quran</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
                                                <th>Id</th>
                                                <th>SurahName</th>
												<th>ScholarName</th>
												<th>QuranAudio</th>
                                                <th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data as $info)
											<tr>
                                                <td>{{$info->id}}</td>
												<td>{{$info->SurahName}}</td>
												<td>{{$info->ScholarName}}</td>
												<td>{{$info->QuranAudio}}</td>
												<td>
													<a href="{{'Edit-Audio/'.$info->id}}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to edit this Audio ?')"><i class="la la-pencil"></i></a>
													<a href="{{'delete-Audio/'.$info->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Audio ?')"><i class="la la-trash-o"></i></a>
												</td>												
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
</div>

@endsection