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
					<h4>All Adhkar</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">Adhkar</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">All Adhkar</a></li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row tab-content">
					<div id="list-view" class="tab-pane fade active show col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">All Adhkar  </h4>
								<a href="{{route('AddAdhkar')}}" class="btn btn-primary">+ Add Adkar</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>Adkar Image</th>
												<th>Dua Name</th>
												<th>Dua Catagory</th>
												<th>Number in figures</th>
												<th>Number in words</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data as $info)
											<tr>
												<div class="profile-photo">
													<td><img src="{{url('public/Adhkar_image/'.$info->Adhkar_image)}}"  class="img-fluid rounded-circle"  alt="" width="60px"></td>
												</div>
												<td>{{$info->dua_name}}</td>
												<td>{{$info->dua_catagory}}</td>
												<td>{{$info->number_in_figures}}</td>
												<td>{{$info->number_in_words}}</td>
												<td>
													<a href="{{'Edit-Adhkar/'.$info->id}}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure you want to edit this Adhkar ?')"><i class="la la-pencil"></i></a>
													<a href="{{'delete-Adhkar/'.$info->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Adhkar ?')"><i class="la la-trash-o"></i></a>
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