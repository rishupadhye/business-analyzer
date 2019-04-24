<div class="container">
	
	<div class="card card-default mt-5">
		<div class="card-header">
			Login to Existing account
		</div>

		<div class="card-body">
			<form method="POST">

				<?php if($error != '') { ?>

					<div class="alert alert-danger">
						<p><?=  $error  ?></p>
					</div>

				<?php } ?>

				<div class="form-group">
					<label>E-mail Address</label>
					<input type="email" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<button class="btn btn-success">Login</button>
				</div>
			</form>
		</div>	
	</div>

</div>