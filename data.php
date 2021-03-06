<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $major, $minor, $about, $website, $image, $error, $formTitle) { ?>
<?php $customCSS = "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css'> <link rel='stylesheet' href='css/data.css'>";
include "inc/html-top.php"; ?>
<section class="hero is-fullheight">
	<h2 class="title is-1"><?php echo $formTitle; ?> Student Data Entry</h2>
	<div class="box">
		<p class="required has-text-white">*required</p>
		<?php // if there are any errors, display them
		if ($error != '') { echo '<div class="notification is-danger">'.$error.'</div>'; }?>
		<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" class="data-entry" enctype="multipart/form-data">
			<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
			<div class="field">
				<label class="label" for="firstname">First Name: *</label>
				<div class="control">
					<input class="input" type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" required>
				</div>
			</div>
			<div class="field">
				<label class="label" for="lastname">Last Name: *</label>
				<div class="control">
					<input class="input" type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" required>
				</div>
			</div>
			<div class="field">
				<label class="label" for="major">Major: *</label>
				<div class="control"><input class="input" type="text" name="major" id="major" value="<?php echo $major; ?>" required></div>
			</div>
			<div class="field">
				<label class="label" for="minor">Minor: </label>
				<div class="control">
					<input class="input" type="text" name="minor" id="minor" value="<?php echo $minor; ?>">
				</div>
			</div>
			<div class="field intro">
				<label class="label" for="intro">Introduction: *</label>
				<div class="control">
					<textarea class="textarea is-small" rows="5" name="intro" id="intro" required><?php echo $about; ?></textarea>
				</div>
			</div>
			<div class="field fullwidth">
				<label class="label" for="website">Website: *</label>
				<div class="control">
					<input class="input" type="text" name="website" id="website" value="<?php echo $website; ?>" required>
				</div>
			</div>
			<div class="field fullwidth">
				<?php if($formTitle == "Update") { ?>
				<div class="control">
					<input type="checkbox" name="photo-change" class="photo-change" value="1" id="photo-change"><label class="has-text-white" for="photo-change">I want to replace the current photo.</label>
				</div>
				<?php } ?>
					<label class="label" for="image" id="image-label">Upload an image*</label>
				<div id="control">
					<input type="file" name="image" id="image" class="has-background-white" required>
				</div>
			</div>
			<!-- TODO: Need to remove the inline style -->
			<div class="level fullwidth">
				<div class="level-left">
					<a class="button" href="studentlist.php">Cancel</a>
				</div>
				<div class="field level-right">
					<div class="control">
						<input class="button create" type="submit" name="submit">
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
</body>
</html>
<?php } ?>