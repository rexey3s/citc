<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A Little Help</title>

<?php $this->loadStyle('homePageMain')?>
<?php $this->loadStyle('forms')?>
</head>

<body>
	<div id="main-container">
    	<?php 
			$this->show("header");
		?>
        <div class="form-container">
        	<?php 
				if (isset($successSignup) && $successSignup)
				{
					echo "Register successfully";
				}
				else
				{
			?>
            <h2>Register form</h2>
            	<?php
                	if (isset($successSignup) && !$successSignup)
					{
						echo "<h3 style='margin-top:50px'>Register fail! Please try again!</h3>";					
					}
				?>
            <table class="form-register">
           		<form action="<?php echo __SITE_LINK.'register'?>" method="post">
            	<tr>
                	<td>Name (Personal/Organization)</td>
                	<td><input type="text" name="name"/></td>
                </tr>
            	<tr>
                	<td>Email:</td>
                	<td><input type="email" name="email" /></td>
                </tr>
            	<tr>
                	<td>Confirm email:</td>
                	<td><input type="email" name="emailconfirm" /></td>
                </tr>
            	<tr>
                	<td>Password</td>
                	<td><input type="password" name="pass" /></td>
                </tr>
            	<tr>
                	<td>Confirm password</td>
                	<td><input type="password" name="passconfirm" /></td>
                </tr>
                <tr>
                	<td>Some description:</td>
                	<td><textarea name="description" style="width:200px"></textarea></td>
                </tr>
                <tr>
                	<td>You are:</td>
                	<td>
                    	<label><input type="radio" name="userType" value="person" style="margin-right:8px" checked="checked"/>A person</label>
                    	<label><input type="radio" name="userType" value="organization" style="margin-right:8px;margin-left:18px" />A organization</label>
                    </td>
                </tr>
                
                <tr>
                	<td colspan="2"><input type="submit" name="signup" value="Đăng ký" style="margin-top:20px"/></td>
                </tr>
                </form>
            </table>
            <?PHP }?>
        </div>
     </div>	
</body>
</html>