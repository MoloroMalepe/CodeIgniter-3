<!--<h2>Login Page</h2>

<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>codeigniter3 | <?php echo $title;?></title>

	
<Link rel="stylesheet" href="// maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class ="container">
		<br /><br /><br />
		<form method ="post" action="<?php echo base_url(); ?>User/login_validation">
		<div class= "form-group">
			<label>Enter username</label>
			<input type="text" name="username" class="form-control" />
			<span class="text-danger"><?php echo form_error('username');?></span>
		</div>

		<div class= "form-group">
			<label>Enter Password</label>
			<input type="password" name="password" class="form-control" />
			<span class="text-danger"><?php echo form_error('password');?></span>
		</div>

		<div class= "form-group">
			<input type="submit" name="insert" value="Login" class="btn btn-info "/>
			<?php
			//echo $this->session->flashdat
			?>
		</div>
	</div>
	
</body>
</html>





























