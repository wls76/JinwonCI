<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/hj">SB Interactive XPBX</a>
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
			<ul class="dropdown-menu dropdown-user">
				<li><?php echo anchor('/auth/changePasswd/', '<i class="fa fa-user fa-fw"></i> 사용자 관리'); ?></li>
				<li class="divider"></li>
				<li><?php echo anchor('/auth/logout/', '<i class="fa fa-sign-out fa-fw"></i> Logout'); ?></li>
			</ul>
		</li>
	</ul>

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li class="sidebar-search">
					<?php
					/**
					<div class="input-group custom-search-form">
						<input type="text" class="form-control" placeholder="단말번호...">
						<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
					</div>
					**/
					?>
				</li> 
				<li><?php echo anchor('/group/groupList', '<i class="fa fa-building fa-fw"></i> 회사 관리'); ?></li>
				<li><?php echo anchor('/prbt/prbtList', '<i class="glyphicon glyphicon-volume-up"></i> 통화 연결음 관리'); ?></li>
				<li><?php echo anchor('/extension/extensionList', '<i class="glyphicon glyphicon-phone-alt"></i> 단말 관리'); ?></li>
				<li><?php echo anchor('/callback/callbackList', '<i class="glyphicon glyphicon-transfer"></i> 콜백 관리'); ?></li>
				<li>
					<a href="#"><i class="glyphicon glyphicon-stats"></i> Report<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><?php echo anchor('/cdr/cdrList', '<i class="glyphicon glyphicon-phone"></i> 통화 내역'); ?></li>
						<li><?php echo anchor('/cdr/secretaryList', '<i class="glyphicon glyphicon-phone-alt"></i> 비서 통화 내역'); ?></li>
						<!--<li><?php echo anchor('/stat/statList', '<i class="fa fa-bar-chart-o fa-fw "></i> 통계'); ?></li>-->
					</ul>
				</li>
				<li>
					<a href="#"><i class="glyphicon glyphicon-calendar"></i> 휴일 설정<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li><?php echo anchor('/time/timeSetting', '<i class="fa fa-clock-o fa-fw"></i> 업무 시간 설정'); ?></li>
						<li><?php echo anchor('/time/holidaySetting', '<i class="fa fa-calendar fa-fw "></i> 휴일 설정'); ?></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>