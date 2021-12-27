<?php
require_once 'php/utils.php';
require_once "./includes/g-config.php";
?>
<?php

include("includes/html.php");
islogin();
include("includes/header.php");
$loginURL = $gClient->createAuthUrl();
?>
<div class="ps-my-account">
    <div class="container">
        <form class="ps-form--account ps-tab-root" id="loginForm">
            <div class="ps-tabs">
                <div class="ps-tab active" id="sign-in">
                    <div class="ps-form__content">
                        <h5>Log In Your Account</h5>
                        <div id="errs" style="color:red"></div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" autocomplete="email" required placeholder="Enter your email" onkeydown="if(event.key === 'Enter'){event.preventDefault();login();}"/>
                            </div>
                            <div class="form-group form-forgot">
                                <input class="form-control" id="password" name="password" type="password" autocomplete="current-password" required placeholder="Enter your password" onkeydown="if(event.key === 'Enter'){event.preventDefault();login();}"/><a href="">Forgot?</a>
                            </div>
                            <div class="form-group submit">
                                <div class="ps-btn ps-btn--fullwidth" onclick="login();">Login</div>
                            </div>
                            Dont have an account? <a href="./register" style="color: #2874f0;">Sign Up</a>
                    </div>
                    <div class="ps-form__footer">
                        <p>Connect with:</p>
                        <ul class="ps-list--social">
                            <div class="google_login" style="background: rgb(255, 255, 255);" onclick="window.location = '<?php echo $loginURL ?>';"><img src="https://static.lottiefiles.com/images/components/auth_google.svg" class="cursor-pointer" style="width: 26px; height: 26px;"> <span class="block text-black pl-4">Continue with Google</span></div>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="script.js"></script>
<?php
include("includes/footer.php");
// include("includes/subscribe-popup.php");
include("includes/scripts.php");

?>