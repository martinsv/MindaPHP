<h1>Register</h1>
<form method="post">
Username<br/>
<input name="username"/><br/>
Password<br/>
<input type="password" name="password"/><br/>
Password (again)<br/>
<input type="password" name="password2"/><br/>
<br/>
<input type="submit"/><br/>
<?php e($error); ?>
<?php csrf_token(); ?>
</form>
