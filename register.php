<?php 
    $title = 'Register';
	require_once('./includes/header.php'); 
?>

<div class="user-reg">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="user_name">Name: </label>
            <input type="text" name="user_name">
        </div>
        <div class="form-group">
            <label for="user_email">Email: </label>
            <input type="email" name="user_email">
        </div>
        <div class="form-group">
            <label for="user_pwd">Password: </label>
            <input type="password" name="user_pwd">
        </div>
        <div class="form-group">
            <label for="user_pwd_conf">Confirm Password: </label>
            <input type="password" name="user_pwd_conf">
        </div>
        <button type="submit" name="regNewUser">Register</button>
    </form>
</div>

<?php require_once('./includes/footer.php'); ?>