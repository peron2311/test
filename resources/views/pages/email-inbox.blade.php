@extends('layouts.default', ['appContentFullHeight' => true, 'appContentClass' => 'p-0'])

@section('title', 'Email - Inbox')

@push('scripts')
	<script src="/assets/js/demo/email-inbox.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN mailbox -->
	<div class="mailbox">
		<!-- BEGIN mailbox-sidebar -->
		<div class="mailbox-sidebar">
			<div class="mailbox-sidebar-header d-flex justify-content-center">
				<a href="#emailNav" data-bs-toggle="collapse" class="btn btn-dark btn-sm me-auto d-block d-lg-none">
					<i class="fa fa-cog"></i>
				</a>
				<a href="/email/compose" class="btn btn-dark ps-40px pe-40px btn-sm">
					Compose
				</a>
			</div>
			<div class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
				<!-- BEGIN scrollbar -->
				<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
					<div class="nav-title"><b>FOLDERS</b></div>
					<ul class="nav nav-inbox">
						<li class="active"><a href="/email/inbox"><i class="fa fa-hdd fa-lg fa-fw me-2"></i> Inbox <span class="badge bg-gray-600 fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span></a></li>
						<li><a href="/email/inbox"><i class="fa fa-flag fa-lg fa-fw me-2"></i> Important</a></li>
						<li><a href="/email/inbox"><i class="fa fa-envelope fa-lg fa-fw me-2"></i> Sent</a></li>
						<li><a href="/email/inbox"><i class="fa fa-save fa-lg fa-fw me-2"></i> Drafts</a></li>
						<li><a href="/email/inbox"><i class="fa fa-trash-alt fa-lg fa-fw me-2"></i> Trash</a></li>
					</ul>
					<div class="nav-title"><b>LABEL</b></div>
					<ul class="nav nav-inbox">
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-dark"></i> Admin</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-blue"></i> Designer & Employer</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-success"></i> Staff</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-warning"></i> Sponsorer</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-danger"></i> Client</a></li>
					</ul>
				</div>
				<!-- END scrollbar -->
			</div>
		</div>
		<!-- END mailbox-sidebar -->
		<!-- BEGIN mailbox-content -->
		<div class="mailbox-content">
			<div class="mailbox-content-header">
				<!-- BEGIN btn-toolbar -->
				<div class="btn-toolbar align-items-center">
					<div class="form-check me-2">
						<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailSelectAll" data-change="email-select-all" />
						<label class="form-check-label" for="emailSelectAll"></label>
					</div>
					<div class="dropdown me-2">
						<button class="btn btn-white btn-sm" data-bs-toggle="dropdown">
							View All <span class="caret ms-3px"></span>
						</button>
						<div class="dropdown-menu">
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2"></i> All</a>
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2 text-muted"></i> Unread</a>
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2 text-blue"></i> Contacts</a>
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2 text-success"></i> Groups</a>
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2 text-warning"></i> Newsletters</a>
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2 text-danger"></i> Social updates</a>
							<a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2 text-indigo"></i> Everything else</a>
						</div>
					</div>
					<button class="btn btn-sm btn-white me-2"><i class="fa fa-redo"></i></button>
					<div class="w-100 d-sm-none d-block mb-2 hide" data-email-action="divider"></div>
					<!-- BEGIN btn-group -->
					<div class="btn-group">
						<button class="btn btn-sm btn-white hide" data-email-action="delete"><i class="fa fa-times me-1"></i> <span class="hidden-xs">Delete</span></button>
						<button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-folder me-1"></i> <span class="hidden-xs">Archive</span></button>
						<button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-trash me-1"></i> <span class="hidden-xs">Junk</span></button>
					</div>
					<!-- END btn-group -->
					<!-- BEGIN btn-group -->
					<div class="btn-group ms-auto">
						<button class="btn btn-white btn-sm">
							<i class="fa fa-chevron-left"></i>
						</button>
						<button class="btn btn-white btn-sm">
							<i class="fa fa-chevron-right"></i>
						</button>
					</div>
					<!-- END btn-group -->
				</div>
				<!-- END btn-toolbar -->
			</div>
			<div class="mailbox-content-body">
				<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
					<!-- BEGIN list-email -->
					<ul class="list-group list-group-lg no-radius list-email">
						<li class="list-group-item unread">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox1">
									<label class="form-check-label" for="emailCheckbox1"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-blue">
								<span class="text-white">F</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Facebook Blueprint</span>
									<span class="email-title">Newly released courses, holiday marketing tips, how-to video, and more!</span>
									<span class="email-desc">Sed scelerisque dui lacus, quis pellentesque lorem tincidunt rhoncus. Nulla accumsan elit pharetra, lacinia turpis nec, varius erat.</span>
									<span class="email-time">Today</span>
								</a>
							</div>
						</li>
						<li class="list-group-item unread">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox2">
									<label class="form-check-label" for="emailCheckbox2"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-indigo">
								<span class="text-white">C</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Color Admin</span>
									<span class="email-title">Color Admin dashboard v2 is ready for live</span>
									<span class="email-desc">Proin interdum aliquam urna, quis lobortis magna tincidunt ac. Integer sed pulvinar neque...</span>
									<span class="email-time">Today</span>
								</a>
							</div>
						</li>
						<li class="list-group-item unread">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox3">
									<label class="form-check-label" for="emailCheckbox3"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<span class="text-white">W</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">support@wrapbootstrap.com</span>
									<span class="email-title">Bootstrap v5.0 is coming soon</span>
									<span class="email-desc">Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...</span>
									<span class="email-time">Today</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox4">
									<label class="form-check-label" for="emailCheckbox4"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<i class="fab fa-github-alt text-white"></i>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Github</span>
									<span class="email-title">Sidebar animation bugfix</span>
									<span class="email-desc">Nam sit amet lacinia massa, sit amet blandit urna. Duis pharetra ex id ipsum posuere...</span>
									<span class="email-time">2 days ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox5">
									<label class="form-check-label" for="emailCheckbox5"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<span class="text-white">W</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Wrapbootstrap</span>
									<span class="email-title">Bootstrap Framework is awesome</span>
									<span class="email-desc">Etiam enim ipsum, malesuada in consectetur interdum, malesuada et lacus. Aenean faucibus turpis lorem...</span>
									<span class="email-time">1 week ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox6">
									<label class="form-check-label" for="emailCheckbox6"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-12.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Gerald Huff</span>
									<span class="email-title">Handlebars help you to build semantic template </span>
									<span class="email-desc">Proin consectetur accumsan rhoncus. Nulla porta orci ultricies lectus consequat fringilla. Vestibulum ante ipsum primis in faucibus...</span>
									<span class="email-time">2 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox7">
									<label class="form-check-label" for="emailCheckbox7"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-1.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Rick	Hopkins</span>
									<span class="email-title">jQuery 2++ no longer compatibility with the old browser</span>
									<span class="email-desc">Suspendisse ut urna orci. Vivamus ac diam sollicitudin, consequat mauris id, facilisis ipsum. Nam feugiat nisl a justo...</span>
									<span class="email-time">2 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox8">
									<label class="form-check-label" for="emailCheckbox8"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-13.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Jan Scott</span>
									<span class="email-title">LESS & SASS, which one is good?</span>
									<span class="email-desc">Nam vulputate cursus imperdiet. Sed sodales urna vitae ipsum iaculis, at fermentum...</span>
									<span class="email-time">2 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox9">
									<label class="form-check-label" for="emailCheckbox9"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-14.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Nadine Barnes</span>
									<span class="email-title">Simple Line Icons is available on Color Admin v5.0</span>
									<span class="email-desc">Maecenas auctor dui sit amet tristique congue. Pellentesque lobortis nulla quam. Etiam in vulputate magna...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox10">
									<label class="form-check-label" for="emailCheckbox10"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<span class="text-white">E</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Ellen Underwood</span>
									<span class="email-title">Font Awesome 5 is available now</span>
									<span class="email-desc">Proin consectetur accumsan rhoncus. Nulla porta orci ultricies lectus consequat fringilla. Vestibulum ante ipsum primis in faucibus...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox11">
									<label class="form-check-label" for="emailCheckbox11"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<span class="text-white">W</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">newsletter@wrapbootstrap.com</span>
									<span class="email-title">Cyber week sale! Save up to 45%</span>
									<span class="email-desc">Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox12">
									<label class="form-check-label" for="emailCheckbox12"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<span class="text-white">S</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Starbucks</span>
									<span class="email-title">Get your favorite Grande handcrafted beverage at $13</span>
									<span class="email-desc">Nam vulputate cursus imperdiet. Sed sodales urna vitae ipsum iaculis, at fermentum...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox13">
									<label class="form-check-label" for="emailCheckbox13"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<i class="fab fa-github-alt text-white"></i>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Github</span>
									<span class="email-title">Sidebar animation bugfix</span>
									<span class="email-desc">Nam sit amet lacinia massa, sit amet blandit urna. Duis pharetra ex id ipsum posuere...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox14">
									<label class="form-check-label" for="emailCheckbox14"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user bg-grey">
								<span class="text-white">W</span>
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Wrapbootstrap</span>
									<span class="email-title">Bootstrap Framework is awesome</span>
									<span class="email-desc">Etiam enim ipsum, malesuada in consectetur interdum, malesuada et lacus. Aenean faucibus turpis lorem...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox15">
									<label class="form-check-label" for="emailCheckbox15"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-2.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Gerald Huff</span>
									<span class="email-title">Handlebars help you to build semantic template </span>
									<span class="email-desc">Proin consectetur accumsan rhoncus. Nulla porta orci ultricies lectus consequat fringilla. Vestibulum ante ipsum primis in faucibus...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox16">
									<label class="form-check-label" for="emailCheckbox16"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-3.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Rick	Hopkins</span>
									<span class="email-title">jQuery 2++ no longer compatibility with the old browser</span>
									<span class="email-desc">Suspendisse ut urna orci. Vivamus ac diam sollicitudin, consequat mauris id, facilisis ipsum. Nam feugiat nisl a justo...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox17">
									<label class="form-check-label" for="emailCheckbox17"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-4.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Jan Scott</span>
									<span class="email-title">LESS & SASS, which one is good?</span>
									<span class="email-desc">Nam vulputate cursus imperdiet. Sed sodales urna vitae ipsum iaculis, at fermentum...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
						<li class="list-group-item">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox18">
									<label class="form-check-label" for="emailCheckbox18"></label>
								</div>
							</div>
							<a href="/email/detail" class="email-user">
								<img src="/assets/img/user/user-5.jpg" alt="" />
							</a>
							<div class="email-info">
								<a href="/email/detail">
									<span class="email-sender">Nadine Barnes</span>
									<span class="email-title">Simple Line Icons is available on Color Admin v5.0</span>
									<span class="email-desc">Maecenas auctor dui sit amet tristique congue. Pellentesque lobortis nulla quam. Etiam in vulputate magna...</span>
									<span class="email-time">3 months ago</span>
								</a>
							</div>
						</li>
					</ul>
					<!-- END list-email -->
				</div>
			</div>
			<div class="mailbox-content-footer d-flex align-items-center">
				<div class="text-dark fw-bold">1,232 messages</div>
				<div class="btn-group ms-auto">
					<button class="btn btn-white btn-sm">
						<i class="fa fa-fw fa-chevron-left"></i>
					</button>
					<button class="btn btn-white btn-sm">
						<i class="fa fa-fw fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</div>
		<!-- END mailbox-content -->
	</div>
	<!-- END mailbox -->

@endsection