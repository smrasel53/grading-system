<!DOCTYPE html>
<html lang="en">
<head>
	<title>Grading System</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper clear">
		<header class="headeropt clear">
			<h2>Grading System</h2>
		</header>
		<section class="content clear">
			<div class="element">
				<?php 
					if (isset($_POST['submit'])) {
						$stu_id   = $_POST['stu_id'];
						$stu_name = $_POST['stu_name'];
						$bangla   = $_POST['bangla'];
						$english  = $_POST['english'];
						$arabia   = $_POST['arabia'];

						if ($stu_id == "" || $stu_name == "" || $bangla == "" || $english == "" || $arabia == "") {
							echo "<p style='color:red'>Field must not be empty !</p>";
						} else {
							?>
								<table class="tblone">
									<tr>
										<td>Student Id:</td>
										<td><b><?php echo $stu_id; ?></b></td>
									</tr>
									<tr>
										<td>Student Name: </td>
										<td><b><?php echo $stu_name; ?></b></td>
									</tr>
									<tr>
										<td>Grade: </td>
										<td>
											<?php 
											if ($bangla >= 101 || $english >= 101 || $arabia >= 101) {
												echo "<p style='color:red'>Score couldn't greater than 100 !</p>"; 
											} elseif (($bangla >= 0 && $bangla <= 39 )|| ($english >= 0 && $english <= 39 ) || ($arabia >= 0 && $arabia <= 39 )) {
												echo "<p style='color:red'>You couldn't pass any subject !</p>"; 
											} else {
												$result = ceil(($bangla + $english + $arabia) / 3);
												if ($result >= 101) {
													echo "<b style='color:red'>Invalid</b>";
												} elseif ($result >= 80 && $result <= 100) {
													echo "<b style='color:green'>A+</b>";
												} elseif ($result >= 75 && $result <= 79) {
													echo "<b style='color:green'>A</b>";
												} elseif ($result >= 70 && $result <= 74) {
													echo "<b style='color:green'>A-</b>";
												} elseif ($result >= 65 && $result <= 69) {
													echo "<b style='color:green'>B+</b>";
												}  elseif ($result >= 60 && $result <= 64) {
													echo "<b style='color:green'>B</b>";
												}  elseif ($result >= 55 && $result <= 59) {
													echo "<b style='color:green'>B-</b>";
												}  elseif ($result >= 50 && $result <= 54) {
													echo "<b style='color:green'>C+</b>";
												}  elseif ($result >= 45 && $result <= 49) {
													echo "<b style='color:green'>C</b>";
												}  elseif ($result >= 40 && $result <= 44) {
													echo "<b style='color:green'>D</b>";
												} elseif ($result >= 40 && $result <= 44) {
													echo "<b style='color:green'>D</b>";
												} elseif ($result >= 0 && $result <= 39) {
													echo "<b style='color:red'>Fail</b>";
												} else {
													echo "<b style='color:red'>Invalid</b>";
												}
											}
											 ?>
										</td>
									</tr>
								</table>
							<?php
						}
					}
				 ?>
				 <h2>Student Information</h2>
				<form action="" method="post">
					<table>
						<tr>
							<td>Student Id: </td>
							<td><input type="text" name="stu_id" placeholder="Please enter student Id"></td>
						</tr>
						<tr>
							<td>Student Name: </td>
							<td><input type="text" name="stu_name" placeholder="Please enter student name"></td>
						</tr>
						<tr>
							<td>Bangla: </td>
							<td><input type="number" name="bangla" placeholder="Please type bangla score"></td>
						</tr>
						<tr>
							<td>English: </td>
							<td><input type="number" name="english" placeholder="Please type english score"></td>
						</tr>
						<tr>
							<td>Arabia: </td>
							<td><input type="number" name="arabia" placeholder="Please type arabia score"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<footer class="footeropt clear">
			<p>&copy; Copyright Grading System | Developed By <a href="www.facebook.com/smrasel53" target="_blank">Abu Sofian Rasel</a></p>
		</footer>
	</div>	
</body>
</html>