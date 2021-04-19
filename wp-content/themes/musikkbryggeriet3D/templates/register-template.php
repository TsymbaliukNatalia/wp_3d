<!-- <div class="popup-bg"> -->
    <form class="popup sing-up" method="post"><span class="close"> </span>
        <p class="popup-title">SIGN UP</p>
        <p class="mini-inputs input-line"><label for="first-name"><span>First name</span><input id="first-name" type="text" name="first-name" required/></label><label for="last-name"><span>Last name</span><input id="last-name" type="text" name="last-name" required /></label></p>
        <p class="input-line"> <label for="username"><span>Username</span><input id="username" type="text" name="username" required /></label></p>
        <p class="input-line"><label for="email-sing-up"><span>E-mail</span><input id="email-sing-up" type="email" name="email" required /></label></p>
        <p class="input-line"> <label for="password"><span>Pasword</span><input id="password-sing-up" type="password" name="password" required /></label></p>
        <p class="have-account"> <a class="sing-in-button" href="#">Already have an account?
                <span>Join</span></a></p>
        <p class="sing-up-errors"></p>
        <p class="input-line"> <input class="button" id="sing-up" type="submit" value="SIGN UP" /><label for="sing-up"></label></p>
    </form>
    <form class="popup sing-in" method="post"><span class="close"> </span>
        <p class="popup-title">SIGN IN</p>
        <p class="input-line"><label for="email"><span>E-mail</span><input id="email-sing-in" type="email" name="email" required /></label></p>
        <p class="input-line"> <label class="password-label" for="password"><span>Pasword</span><a class="forgot-password-button" href="#">Forgot your password?</a><input id="password-sing-in" type="password" name="password" required /></label></p>
        <p class="have-account"> <a class="sing-up-button" href="#">Dont have a account? <span> Join </span></a>
        </p>
        <p class="login-errors"></p>
        <p class="input-line"> <input class="button" id="sing-in" type="submit" value="SIGN IN" /><label for="sing-up"></label></p>
    </form>
    <form class="popup forgot-password" action="index.php"><span class="close"> </span>
        <p class="popup-title">FORGOT YOUR PASSWORD?</p>
        <p class="input-line"><label for="email-forgot-password"><span>E-mail</span><input id="email-forgot-password" type="email" name="email-forgot-password" required /></label></p>
        <p class="forgot-password-errors"></p>
        <p class="input-line"> <input class="button" id="send-password" type="submit" value="SEND PASSWORD" /><label for="send-password"></label></p>
    </form>
<!-- </div> -->