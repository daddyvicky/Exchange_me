<?php
require_once 'php/utils.php';
require_once "./includes/g-config.php";
?>
<?php
include("includes/html.php");
include("includes/header.php");

$loginURL = $gClient->createAuthUrl();
?>
<div class="ps-my-account">
    <div class="container">
        <form class="ps-form--account ps-tab-root" id="registerForm">
            <div class="ps-tabs">
                <div class="ps-tab" style="display: block;">
                    <div class="ps-form__content">
                        <h5>Register An Account</h5> 
                        <div id="errs" style="color:red"></div>
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" autocomplete="name" placeholder="Enter your name" onkeydown="if(event.key === 'Enter'){event.preventDefault();register();}" >
                            </div>
                            <div class="form-group">
                                <input  class="form-control"  id="email" name="email" type="email" autocomplete="email" placeholder="Enter your email" onkeydown="if(event.key === 'Enter'){event.preventDefault();register();}" />
                            </div>
                            <div class="form-group">
                                <input  class="form-control" id="password" name="password" type="password" autocomplete="new-password" placeholder="Enter your password" onkeydown="if(event.key === 'Enter'){event.preventDefault();register();}" />
                            </div>
                            <div class="form-group">
                                <input  class="form-control" id="confirm-password" name="confirm-password" type="password" autocomplete="new-password" placeholder="Confirm your password" onkeydown="if(event.key === 'Enter'){event.preventDefault();register();}" />
                            </div>
                            <div class="form-group submit">
                                <div class="ps-btn ps-btn--fullwidth" onclick="register();">Signup</div>
                            </div>
                            Already have an account? <a href="./login" style="color: #2874f0;">Log In</a>
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

<?php
include("includes/footer.php");
// include("includes/subscribe-popup.php");
include("includes/scripts.php");


?>
<script src="script.js"></script> 