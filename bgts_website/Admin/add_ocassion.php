<?php include"Admin_Partials/Header.php"; ?>

<section class="ocassions">
	<div class="container">
		<div class="occasions_div">
			<a href="add_ocassion.php" style="background-color:skyblue; color: black; ">Add Occasions</a>
		</div>
	<div class="occasions_div">
	  <form action="" method="post" enctype="multipart/form-data">
		    <label for="name">Ocassion Name:</label>
		    <input type="text"  name="name" placeholder="Enter Ocassions Name..">

		    <label for="sdate">Start Date:</label>
		    <input type="date"  name="sdate" placeholder="Enter Start Date...">
		    <br> <br>
		    <label for="edate">End Date:</label>
		    <input type="date"  name="edate" placeholder="Enter End Date...">
		    <br> <br>
		    <label for="main">Main:</label>
		    <input type="date"  name="main" placeholder="Enter Main Date...">
		    <br> <br>
		    <label for="name">Occ Photo:</label>
		    <input type="file"  name="image" >
		     <br> <br>
		    <label for="name">Location:</label>
		    <input type="text"  name="location" placeholder="Enter Main Location...">
		    

		    <input type="submit" value="Submit">
	  </form>
		</div>
	</div>
</section>

<?php include"Admin_Partials/Footer.php"; ?>