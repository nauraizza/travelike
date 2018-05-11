<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" class="form-control" name="fullname" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<label>Level</label>
				<select name="level" class="form-controls">
					<option value="admin">Admin</option>
					<option value="user">User</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
		<div class="col-md-4"></div>
	</div>
<?php echo form_close(); ?>
