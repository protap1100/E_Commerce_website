<?php include"Admin_Partials/Header.php"; ?>

<section class="ocassions">
	<div class="container">
		<div class="occasions_div">
			<a href="add_member.php" style="background-color:skyblue; color: black; ">Add Occasions</a>
		</div>
		<div>
			<?php
			 if (isset($_SESSION['login'])) {
				echo $_SESSION['login'];
				unset($_SESSION['login']);
		   }
		   ?>
		   <?php
			 if (isset($_SESSION['error'])) {
				echo $_SESSION['error'];
				unset($_SESSION['error']);
		   }
			?>
		</div>
	<div class="occasions_div">
	  <form action="" method="post" enctype="multipart/form-data">
		    <label for="name">Member Name:</label>
		    <input type="text"  name="name" placeholder="Enter Member Name.." require autocomplete="off">
		    <label for="fname">Father Name:</label>
		    <input type="text"  name="fname" placeholder="Enter Member Father Name.." require autocomplete="off">
		    <label for="age">Member Age:</label>
		    <input type="text"  name="age" placeholder="Enter Member Age.." require autocomplete="off">
		    <label for="nid">Member NID/Birth::</label>
		    <input type="text"  name="nid" placeholder="Enter Member NID/Birth:.." require autocomplete="off">
		    <label for="profession">Member Profession:</label>
		    <input type="text"  name="profession" placeholder="Enter Member Profession.." require autocomplete="off">
		    <label for="blood">Member Blood Group:</label>
		    <input type="text"  name="blood" placeholder="Enter Member Blood Group.." require autocomplete="off">
		    <label for="phone">Member Phone:</label>
		    <input type="text"  name="phone" placeholder="Enter Member Phone.." require autocomplete="off">
		    <label for="image">Member Image:</label>
		    <input type="file"  name="image" require autocomplete="off"> 
		    <label for="current_address">Current Address:</label>
		    <input type="text"  name="current_address" placeholder="Enter Member Current Address.." require autocomplete="off">
		    <label for="permanent_address">Permanent Address:</label>
		    <input type="text"  name="permanent_address" placeholder="Enter Member Permanent Address:.." require autocomplete="off">
		    <label for="education">Education:</label>
		    <input type="text"  name="education" placeholder="Enter Member Education.." require autocomplete="off">
		    <label for="social">Social:</label>
		    <input type="text"  name="social" placeholder="Enter Member Social link..." require autocomplete="off">

		    <input type="submit" value="Submit" name="add_member">
	  </form>
		</div>
	</div>
</section>
<?php include"Admin_Partials/Footer.php"; ?>

<?php 

if(isset($_POST['add_member'])){
	$name      = $_POST['name'];
	$fname     = $_POST['fname'];
	$age       = $_POST['age'];
	$nid       = $_POST['nid'];
	$blood     = $_POST['blood'];
	$profession = $_POST['profession'];
	$phone     = $_POST['phone'];
	$current_address   = $_POST['current_address'];
	$permanent_address = $_POST['permanent_address'];
	$education         = $_POST['education'];
	$social            = $_POST['social'];

	if (isset($_FILES['image']['name'])) {
		//get the details of the selected image e
	$image_name = $_FILES['image']['name'];
	if ($image_name!="") {
		//image is selected
		//rename the image 
		//get the extension 
		$ext = end(explode('.', $image_name));
		$image_name = "Member-Name-".rand(0000,9999).".".$ext; // new image name like image-name-90 
		//reupload the image 
		$src = $_FILES['image']['tmp_name'];

		$dst = "../Media/Images/member".$image_name;

		//now upload image 
		$upload = move_uploaded_file($src, $dst);
		//checke whether image uploaded or not
		if ($upload==false) {
			//failed to upload image 
			//redirect to add food page with error message 
			$_SESSION['upload'] = "<div class='error'>Failed to upload the image </div>";
			header('location:'.SITEURL.'admin/add_member.php');
			//stop the process
			die();	
		}
			}
		}else{
			$image_name = ""; //we will selected default value as blank
		}

		//Uploading this to database


		$sql = "INSERT INTO member (`name`, `image`, `father_name`, `age`, `nid`, `profession`, `blood`,`phone`, `current_address`,`permanent_address`,`education`, `social`) VALUES('$name','$image_name','$fname','$age','$nid','$profession','$blood','$phone','$current_address','$permanent_address','$education','$social')";

		$res = mysqli_query($con,$sql);
		if ($res==TRUE) {
			//DATA Inserted successfully
			$_SESSION['add'] = "<div class='success'>Member Added successfully </div>";
			header('location:'.SITEURL.'admin/member.php');
		}else{
			//data not inserted successfully
			$_SESSION['error'] = "<div class='error'>Failed to add Member  </div>";
		}




	
}



?>