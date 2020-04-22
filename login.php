<?php 
    $title = 'Log In';
	require_once('./includes/header.php'); 
?>

<div class="user-reg">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="user_email">Email: </label>
            <input type="email" name="user_email" id="loginInput">
        </div>
        <div class="form-group">
            <label for="user_pwd">Password: </label>
            <input type="password" name="user_pwd" id="loginInput">
        </div>
        <button type="submit" name="loginUser">Log In</button>
    </form>
</div>

<?php require_once('./includes/footer.php'); ?>