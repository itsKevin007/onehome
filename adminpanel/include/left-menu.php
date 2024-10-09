<?php
if (!defined('WEB_ROOT')) {
	header('Location: index.php');
	exit;
}

?>	
	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<div>
				<img src="<?php echo WEB_ROOT; ?>images/icons/silverlogoh.png" style="width: 90% !important;" class="logo-icon" alt="logo icon">
			</div>
			<div>
				<h4 class="logo-text"></h4>
			</div>
			<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
			</div>
		</div>
		<!--navigation-->
		<ul class="metismenu" id="menu">

			
			<li>
				<a href="<?php echo ADM_ROOT; ?>">
					<div class="parent-icon"><i class='bx bx-home-alt'></i>
					</div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>

			<li>
				<a href="<?php echo ADM_ROOT; ?>user/">
					<div class="parent-icon"><i class="lni lni-user"></i>
					</div>
					<div class="menu-title">User</div>
				</a>
			</li>

			<li>
				<a href="<?php echo ADM_ROOT; ?>client/">
					<div class="parent-icon"><i class="lni lni-users"></i>
					</div>
					<div class="menu-title">Client</div>
				</a>
			</li>

			<li>
				<a href="<?php echo ADM_ROOT; ?>service-provider/">
					<div class="parent-icon"><i class="lni lni-construction-hammer"></i>
					</div>
					<div class="menu-title">Service Provider</div>
				</a>
			</li>

		</ul>
		<!--end navigation-->
	</div>
	<!--end sidebar wrapper -->