<!-- login form start -->
<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="php_pages/chk.php" method="POST">
        <h3>s'identifier</h3>
        <span>username</span>
        <input type="text" name="username" class="box" placeholder="enter your username" id="username">
        <span>password</span>
        <input type="password" name="password" class="box" placeholder="enter your password" id="password">    
        <div class="checkbox">
            <input type="checkbox" name="remember-me" id="remember-me">
            <label for="remember-me">remember me</label>
            <input type="submit" value="sign in" class="btn">
            <p>forget password ? <a href="#">Click here</a></p>

        </div>
    </form>
</div>

<!-- login form end -->