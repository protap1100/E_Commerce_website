<?php include 'Admin_Partials/Header.php'; ?>
	<!-- Main Section Start -->
	<section class="container">
		<div class="text-center wrapper">
			<?php 
			if (isset($_SESSION['login'])) {
			 echo $_SESSION['login'];
			 unset($_SESSION['login']);
		}

			 ?>
		</div>
		<div class="dashboard text-center">
			<div class="box-3" style="background-color: #19d6b9;">
				<h2>Total Member</h2>
				<br>
				<h3>20</h3>
			</div>
			<div class="box-3" style="background-color: #7070e0;">
				<h2>Total Users</h2>
				<h3>23</h3>
			</div>
			<div class="box-3" style="background-color: #e04e4e;">
				<h2>Total Ocassions</h2>
				<h3> 21 </h3>
			</div>
			<div class="box-3" style="background-color: #cae51b;">
				<h2>Upcoming Ocassion</h2>
				<h3>Durga Puja</h3>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
	<!-- Main Section End -->
<?php include 'Admin_Partials/Footer.php'; ?>