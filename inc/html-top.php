<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Osaka | Project 4</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Playfair+Display&family=Zilla+Slab:wght@500&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
		<?php echo $customCSS; ?>
		<?php if(isset($formTitle) && $formTitle == "Update") { ?>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				document.getElementById("image").required = false;
				$("form div div input[type='file']").prop("type", "hidden");
				document.getElementById("image-label").hidden = true;
				document.getElementById("image-label").style = "display:none";
				$(".photo-change").click(function(){
					if($(this).prop("checked") === true){
						$("form div div input[type='hidden']").prop("type", "file");
						document.getElementById("image").required = true
						document.getElementById("image-label").hidden = false;
						document.getElementById("image-label").style = "display:unset";
					}
					else if($(this).prop("checked") === false){
						document.getElementById("image").required = false;
						$("form div div input[type='file']").prop("type", "hidden");
						 document.getElementById("image-label").hidden = true;
						 document.getElementById("image-label").style = "display:none";
					}
				});
			});
		</script>
	<?php } ?>
	</head>
	<body>
		<nav class="banner" id="navbar">
			<a href="index.php"><h1 class="logo" id="logo">OSAKA</h1></a>
			<?php if ($formTitle=="Update") { ?>
				<a href="studentlist.php" id="add-entry">Back to Student List</a>
			<?php } elseif ($formTitle =="Create") { ?>
				<a href="index.php" id="add-entry">Back to Home Page</a>
			<?php } else { ?>
				<a href="new.php" id="add-entry">Add a Student</a>
			<?php } ?>

			<!-- <form id="login">
				<label for="username">Login:</label>
				<input type="text" id="username" name="username" placeholder="Username...">
				<input type="text" id="password" name="password" placeholder="Password...">
			</form> -->
		</nav>
