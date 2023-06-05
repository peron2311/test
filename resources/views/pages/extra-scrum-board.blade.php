@extends('layouts.default')

@section('title', 'Scrum Board')

@section('content')
	<div style="min-height: 100vh; background: url(/assets/img/cover/cover-scrum-board.png) no-repeat fixed; background-size: 360px; background-position: right bottom;">
		<div class="d-flex align-items-center mb-2">
			<!-- BEGIN page-header -->
			<h1 class="page-header mb-0">
				Scrum Board 
			</h1>
			<!-- END page-header -->
		
			<div class="ms-auto">
				<a href="#modalAddTask" data-bs-toggle="modal" class="btn btn-success btn-sm btn-rounded px-3 rounded-pill"><i class="fa fa-plus me-1"></i> Add Task</a>
			</div>
		</div>
	
		<div class="mb-3 d-md-flex fs-13px">
			<div class="dropdown-toggle">
				<a href="#" data-bs-toggle="dropdown" class="text-decoration-none text-dark"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/color-admin <b class="caret text-gray-500"></b></a>
				<div class="dropdown-menu dropdown-menu-start">
					<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/mobile-app-dev</a>
					<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/bootstrap-5</a>
					<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/mvc-version</a>
					<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/ruby-version</a>
				</div>
			</div>
			<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-code-branch fa-fw fa-lg me-1 text-gray-500"></i> 1,392 pull request</div>
			<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-users-cog fa-fw fa-lg me-1 text-gray-500"></i> 52 participant</div>
			<div class="ms-md-4 mt-md-0 mt-2"><i class="far fa-clock fa-fw fa-lg me-1 text-gray-500"></i> 14 day(s)</div>
		</div>
	
		<div class="row">
			<div class="col-xl-4 col-lg-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">To do (5)</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0">
						<div class="list-group-item d-flex border-top-0">
							<div class="me-3 fs-16px">
								<i class="far fa-question-circle text-gray-500 fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">Enable open search</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29949 opened yesterday by Terry</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-blue">docs</span>
									<span class="badge bg-success">feature</span>
								</div>
								<hr class="mb-10px bg-gray-600" />
								<div class="d-flex align-items-center mb-5px">
									<div class="fs-12px me-2 text-dark fw-bold">
										Task (2/3)
									</div>
									<div class="progress h-5px w-100px mb-0 me-2">
										<div class="progress-bar progress-bar-striped" style="width: 66%;"></div>
									</div>
									<div class="fs-10px fw-bold">66%</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-outline-default text-gray-600 btn-xs rounded-pill fs-10px px-2" data-bs-toggle="collapse" data-bs-target="#todoBoard">
											collapse
										</a>
									</div>
								</div>
								<div class="form-group mb-1">
									<div class="collapse show" id="todoBoard">
										<div class="form-check mb-1">
											<input type="checkbox" class="form-check-input" id="customCheck1" checked />
											<label class="form-check-label" for="customCheck1">create ui for autocomplete</label>
										</div>
										<div class="form-check mb-1">
											<input type="checkbox" class="form-check-input" id="customCheck2" checked />
											<label class="form-check-label" for="customCheck2">integrate jquery autocomplete with ui</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="customCheck3" />
											<label class="form-check-label" for="customCheck3">backend search return as json data</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="me-3 fs-16px">
								<i class="far fa-question-circle text-gray-500 fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">Investigate adding markdownlint</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29919 opened 9 days ago by xMediaKron</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-light text-dark">build</span>
									<span class="badge bg-indigo">v5</span>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="me-3 fs-16px">
								<i class="far fa-question-circle text-gray-500 fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">Add a "Submit a Resource" form</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29916 opened 9 days ago by Wasbbok</div>
								</div>
								<div class="mb-1 d-flex align-items-center">
									<div class="me-2"><span class="badge bg-success">enhancement</span></div>
									<div class="d-flex">
										<div class="widget-img widget-img-xs rounded-circle bg-inverse me-n2" style="background-image: url(/assets/img/user/user-1.jpg)">
										</div>
										<div class="widget-img widget-img-xs rounded-circle bg-inverse me-n2" style="background-image: url(/assets/img/user/user-2.jpg)">
										</div>
										<div class="widget-img widget-img-xs rounded-circle bg-inverse me-n2" style="background-image: url(/assets/img/user/user-3.jpg)">
										</div>
										<div class="widget-icon widget-icon-xs rounded-circle bg-muted text-white fs-10px">
											+2
										</div>
									</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="me-3 fs-16px">
								<i class="far fa-question-circle text-gray-500 fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">Custom control border color missing on focus</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29796 opened 29 days ago by mdo</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-pink">docs</span>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item list-group-item-action d-flex">
							<div class="me-3 fs-16px">
								<i class="far fa-question-circle text-gray-500 fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">New design for corporate page</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29919 opened 19 days ago by sean</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-light text-dark">design</span>
									<span class="badge bg-primary">v5</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">In Progress (2)</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0">
						<div class="list-group-item d-flex border-top-0">
							<div class="me-3 fs-16px">
								<i class="fa fa-tools text-gray-500 fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">HTML5 flexbox old browser compatibility</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29982 handled by Sean</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-indigo">enhancement</span>
								</div>
								<hr class="mb-10px bg-gray-600" />
								<div class="d-flex align-items-center mb-5px">
									<div class="fs-12px d-flex align-items-center text-dark fw-bold">
										Task (1/2)
									</div>
									<div class="progress progress-xs w-100px mb-0 mx-2 h-5px">
										<div class="progress-bar progress-bar-striped bg-warning" style="width: 50%;"></div>
									</div>
									<div class="fs-10px">50%</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-outline-default text-gray-600 btn-xs rounded-pill fs-10px px-2" data-bs-toggle="collapse" data-bs-target="#inProgressBoard">
											collapse
										</a>
									</div>
								</div>
								<div class="form-group mb-1">
									<div class="collapse show" id="inProgressBoard">
										<div class="form-check mb-1">
											<input type="checkbox" class="form-check-input" id="customCheck4" checked />
											<label class="form-check-label" for="customCheck4">check all browser compatibility for HTML5 flexbox</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="customCheck5" />
											<label class="form-check-label" for="customCheck5">fallback integration by using other display property</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="list-group-item list-group-item-action d-flex">
							<div class="me-3 fs-16px">
								<i class="fa fa-bug text-danger fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">Mobile app autoclose on iOS</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29953 handled by Ken</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-light text-dark">issue</span>
									<span class="badge bg-danger">bug</span>
								</div>
								<hr class="mb-10px bg-gray-600" />
								<div class="d-flex align-items-center mb-5px">
									<div class="fs-12px d-flex align-items-center text-dark fw-bold">
										Task (0/1)
									</div>
									<div class="progress progress-xs w-100px mb-0 mx-2 h-5px">
										<div class="progress-bar progress-bar-striped bg-danger" style="width: 5%;"></div>
									</div>
									<div class="fs-10px fw-bold">0%</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-outline-default text-gray-600 btn-xs rounded-pill fs-10px px-2" data-bs-toggle="collapse" data-bs-target="#inProgress2Board">
											collapse
										</a>
									</div>
								</div>
								<div class="form-group mb-1">
									<div class="collapse show" id="inProgress2Board">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="customCheck6" />
											<label class="form-check-label" for="customCheck6">debug and fix mobile auto close while using GPS issue</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Done (1)</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0">
						<div class="list-group-item  d-flex border-top-0">
							<div class="me-3 fs-16px">
								<i class="far fa-check-circle text-success fa-fw"></i> 
							</div>
							<div class="flex-fill">
								<div class="fs-14px lh-12 mb-2px fw-bold text-dark">React version missing daterangepicker</div>
								<div class="mb-1 fs-12px">
									<div class="text-gray-600 flex-1">#29930 closed yesterday by Sean</div>
								</div>
								<div class="mb-1">
									<span class="badge bg-light text-dark">build</span>
									<span class="badge bg-success">feature</span>
								</div>
								<hr class="mb-10px bg-gray-600" />
								<div class="d-flex align-items-center mb-5px">
									<div class="fs-12px text-dark fw-bold">
										Task (3/3)
									</div>
									<div class="progress progress-xs w-100px mb-0 mx-2 h-5px">
										<div class="progress-bar progress-bar-striped bg-success" style="width: 100%;"></div>
									</div>
									<div class="fs-10px fw-bold">100%</div>
									<div class="ms-auto">
										<a href="#" class="btn btn-outline-default text-gray-600 btn-xs rounded-pill fs-10px px-2" data-bs-toggle="collapse" data-bs-target="#completedBoard">
											collapse
										</a>
									</div>
								</div>
								<div class="form-group mb-1">
									<div class="collapse show" id="completedBoard">
										<div class="form-check mb-1">
											<input type="checkbox" class="form-check-input" id="customCheck7" checked />
											<label class="form-check-label" for="customCheck7">install react-daterangepicker</label>
										</div>
										<div class="form-check mb-1">
											<input type="checkbox" class="form-check-input" id="customCheck8" checked />
											<label class="form-check-label" for="customCheck8">customize ui with scss</label>
										</div>
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="customCheck9" checked />
											<label class="form-check-label" for="customCheck9">backend integration for data filter with daterange input</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modalAddTask">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Task</h5>
					<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Title</label>
						<input type="text" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Status</label>
						<select class="form-select">
							<option value="">To Do</option>
							<option value="">In Progress</option>
							<option value="">Done</option>
						</select>
					</div>
					<div class="mb-0">
						<label class="form-label">Description</label>
						<textarea class="form-control" rows="10"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
					<button type="button" class="btn btn-primary">Create</button>
				</div>
			</div>
		</div>
	</div>

@endsection
