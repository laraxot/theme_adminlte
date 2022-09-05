<!-- Notifications Menu -->
				<li class="dropdown notifications-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">{{ trans('adm_theme::message.notifications') }}</li>
						<li>
							<!-- Inner Menu: contains the notifications -->
							<ul class="menu">
								<li><!-- start notification -->
									<a href="#">
										<i class="fa fa-users text-aqua"></i> {{ trans('adm_theme::message.newmembers') }}
									</a>
								</li><!-- end notification -->
							</ul>
						</li>
						<li class="footer"><a href="#">{{ trans('adm_theme::message.viewall') }}</a></li>
					</ul>
				</li>