<?php include"Admin_Partials/Header.php"; ?>

<section class="container">
	<div class="occasions_div">
			<a href="add_member.php" >Add Member</a>
	</div>
	<div>
		<?php
			if (isset($_SESSION['add'])) {
				echo $_SESSION['add'];
				unset($_SESSION['add']);
		   }
		?>
		<?php
			if (isset($_SESSION['remove'])) {
				echo $_SESSION['remove'];
				unset($_SESSION['remove']);
		   }
		?>
		<?php
			if (isset($_SESSION['failed'])) {
				echo $_SESSION['failed'];
				unset($_SESSION['failed']);
		   }
		?>
		<?php
			if (isset($_SESSION['error'])) {
				echo $_SESSION['error'];
				unset($_SESSION['error']);
		   }
		?>
	</div>
	

	<div>
		<table class="table">
			  <tr>
			    <th>SN</th>
			    <th>ID</th>
			    <th>Name</th>
			    <th>Father Name</th>
			    <th>Age</th>
			    <th>NID/Birth</th>
			    <th>Professions</th>
			    <th>Blood</th>
			    <th>Image</th>
			    <th>Phone</th>
			    <th>Current Address</th>
			    <th>Permanent Address</th>
			    <th>Education</th>
			    <th>Social</th>
			    <th>Action</th>
			  </tr>
			  <?php 
				$sql = "SELECT * FROM member";
				
				$res = mysqli_query($con,$sql);

				$count = mysqli_num_rows($res);
				$sn=1;

				if ($count>0) {
					while($row=mysqli_fetch_assoc($res)){
						$id = $row['id'];
						$name = $row['name'];
						$fname = $row['father_name'];
						$image_name = $row['image'];
						$age = $row['age'];
						$nid = $row['nid'];
						$profession = $row['profession'];
						$blood = $row['blood'];
						$phone = $row['phone'];
						$current_address = $row['current_address'];
						$permanent_address = $row['permanent_address'];
						$education = $row['education'];
						$social = $row['social'];
					
				?>
			  <tr>
			    <td><?php echo $sn++; ?></td>
			    <td><?php echo $id; ?></td>
			    <td><?php echo $name; ?></td>
			    <td><?php echo $fname; ?></td>
			    <td><?php echo $age; ?></td>
			    <td><?php echo $nid; ?></td>
			    <td><?php echo $profession; ?></td>
			    <td><?php echo $blood; ?></td>
			    <td><?php echo $image_name; ?></td>
			    <td><?php echo $phone; ?></td>
			    <td><?php echo $current_address; ?></td>
			    <td><?php echo $permanent_address; ?></td>
			    <td><?php echo $education; ?></td>
			    <td><a href="<?php echo $social; ?>" style = "color:black;">Facebook </td>
				<td>
					<a href="<?php echo SITEURL;  ?>admin/update_member.php?id=<?php echo $id; ?>" class="btn_secondary">Update</a>
					<a href="<?php echo SITEURL;  ?>admin/delete_member.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn_danger">Delete</a>
				</td>
			  </tr>

			  <?php
				} 
			} 
			 ?>
			</table>
	</div>
	
</section>

<?php include"Admin_Partials/Footer.php"; ?>