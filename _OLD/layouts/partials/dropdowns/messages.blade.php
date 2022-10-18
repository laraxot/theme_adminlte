<li class="dropdown messages-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success">4</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">{{ trans('adm_theme::message.tabmessages') }}</li>
						<li>
							<!-- inner menu: contains the messages -->
							<ul class="menu">
								<li><!-- start message -->
									<a href="#">
										<div class="pull-left">
											<!-- User Image -->
											<img src="{{ Auth::user()->gravatar }}" class="img-circle" alt="User Image"/>
										</div>
										<!-- Message title and timestamp -->
										<h4>
											{{ trans('adm_theme::message.supteam') }}
											<small><i class="fa fa-clock-o"></i> 5 mins</small>
										</h4>
										<!-- The message -->
										<p>{{ trans('adm_theme::message.awesometheme') }}</p>
									</a>
								</li><!-- end message -->
							</ul><!-- /.menu -->
						</li>
						<li class="footer"><a href="#">c</a></li>
					</ul>
				</li><!-- /.messages-menu -->