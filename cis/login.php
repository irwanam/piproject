<?php
	if(isset($_POST['SubmitLogin'])){
	if($_POST['SubmitLogin'])static_login($_POST['EmailLogin'],$_POST['PasswordLogin']);
	}
?>
<div class="container">
	<div class="row clearfix">
		<div class="row">
			<div class="col-md-3">
				<form role="form" method="post">
					<div class="form-group">
						<label for="InputEmailLogin">Email address</label>
						<input type="email" class="form-control" id="InputEmailLogin" name="EmailLogin" placeholder="Enter email" required />
					</div>
					<div class="form-group">
						<label for="InputPasswordLogin">Password</label>
						<input type="password" class="form-control" id="InputPasswordLogin" name="PasswordLogin" placeholder="Password" required />
					</div>
					<input name="SubmitLogin" type="submit" class="btn btn-default pull-right" value="Login" />
				</form>
			</div>
		</div>		
	</div>
</div>