<?php
include("includes/html.php");
include("includes/header.php");

?>
   <main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>User Information</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header"><img src="img/users/3.jpg" alt="">
                                    <figure>
                                        <figcaption>Hello</figcaption>
                                        <p><a href="#">username@gmail.com</a></p>
                                    </figure>
                                </div>
                                <div class="ps-widget__content">
                                    <ul>
                                        <li class="active"><a href="#"><i class="icon-user"></i> Account Information</a></li>
                                        <li><a href="#"><i class="icon-alarm-ringing"></i> Notifications</a></li>
                                        <li><a href="#"><i class="icon-papers"></i> Invoices</a></li>
                                        <li><a href="#"><i class="icon-map-marker"></i> Address</a></li>
                                        <li><a href="#"><i class="icon-store"></i> Recent Viewed Product</a></li>
                                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                        <li><a href="#"><i class="icon-power-switch"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right">
                            <form class="ps-form--account-setting" action="index.html" method="get">
                                <div class="ps-form__header">
                                    <h3> User Information</h3>
                                </div>
                                <div class="ps-form__content">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="Please enter your name...">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" placeholder="Please enter phone number...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" placeholder="Please enter your email...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input class="form-control" type="text" placeholder="Please enter your birthday...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group submit">
                                    <button class="ps-btn">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include("includes/footer.php");
include("includes/scripts.php");

?>