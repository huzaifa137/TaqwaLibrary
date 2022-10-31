 @extends('layouts.header_footer_navbar')
 @section('content')
         <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row">

                    <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-3">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">3280</h4>
										<span class="badge badge-primary">+3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-3">
										<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Bills</p>
										<h4 class="mb-0">2570</h4>
										<span class="badge badge-warning">+3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-3">
										<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Revenue</p>
										<h4 class="mb-0">364.50K</h4>
										<span class="badge badge-danger">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-3">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">364.50K</h4>
										<span class="badge badge-success">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Students</p>
										<h3 class="text-white">3280</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                        </div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">New Students</p>
										<h3 class="text-white">245</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                        </div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-dark">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Course</p>
										<h3 class="text-white">28</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                        </div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collection</p>
										<h3 class="text-white">25160$</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                        </div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Total Students</h4>
								<h3>3280</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
								</div>
								<small>80% Increase in 20 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">New Students</h4>
								<h3>245</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
								</div>
								<small>50% Increase in 25 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Total Course</h4>
								<h3>28</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
								</div>
								<small>76% Increase in 20 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<h4 class="card-title">Fees Collection</h4>
								<h3>25160$</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
								</div>
								<small>30% Increase in 30 Days</small>
							</div>
						</div>
                    </div>
							

                    <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Students</p>
										<h3 class="text-white">3280</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                        </div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">New Students</p>
										<h3 class="text-white">245</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                        </div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Course</p>
										<h3 class="text-white">28</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                        </div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collection</p>
										<h3 class="text-white">25160$</h3>
										<div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                        </div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    
                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Student List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Assigned Professor</th>
                                                <th scope="col">Date Of Admit</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
												<td>Jack Ronan</td>
                                                <td>Airi Satou</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                                <td>Commerce</td>
                                                <td>120$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02 </td>
                                                <td>Jimmy Morris</td>
                                                <td>Angelica Ramos</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>Mechanical</td>
                                                <td>120$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03 </td>
                                                <td>Nashid Martines</td>
                                                <td>Ashton Cox</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                                <td>Science</td>
                                                <td>520$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Roman Aurora</td>
                                                <td>Cara Stevens</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>Arts</td>
                                                <td>220$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Samantha</td>
                                                <td>Bruno Nash </td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>Maths</td>
                                                <td>130$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
 @endsection
       