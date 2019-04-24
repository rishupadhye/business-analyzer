<div class="container">
	
	<div class="card card-default mt-5">
		<div class="card-header">
			Create new account
		</div>

		<div class="card-body">
			<form method="POST">
				
				<?php if($error != '') { ?>

					<div class="alert alert-danger">
						<p><?=  $error  ?></p>
					</div>

				<?php } ?>

				<div class="form-group">
					<label>Full name *</label>
					<input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" class="form-control">
				</div>

				<div class="form-group">
					<label>E-mail Address *</label>
					<input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" class="form-control">
				</div>

				<div class="form-group">
					<label>Password *</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<label>Confirm Password *</label>
					<input type="password" name="password_confirmation" class="form-control">
				</div>

				<div class="form-group">
					<button class="btn btn-success">Register</button>
				</div>
			</form>
		</div>	
	</div>

</div>