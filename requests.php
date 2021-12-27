<?php
include("includes/html.php");
include("includes/header.php");

?>
    <main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Notifications</li>
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
                                        <li><a href="#"><i class="icon-user"></i> Account Information</a></li>
                                        <li class="active"><a href="#"><i class="icon-alarm-ringing"></i> Requests</a></li>
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
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Notitfications</h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                        <table class="table ps-table ps-table--notification">
                                            <thead>
                                                <tr>
                                                    <th>Sno.</th>
                                                    <th>Date</th>
                                                    <th>My product</th>
                                                    <th>Requested Product</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>20-1-2020</td>
                                                    <td>Lorem ipsum dolor sit amet, conse</td>
                                                    <td>sum dolor sit amet, consectetuer adipisci</td>
                                                    <td><span style="color: rgb(6, 202, 6);">active</span></td>
                                                    <td><span class="badge badge-success" style="display: inline;">Chat</span><span class="badge badge-primary" style="display: inline;margin-left: 10px;">Close</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>20-1-2020</td>
                                                    <td>Lorem ipsum dolor sit amet, conse</td>
                                                    <td>sum dolor sit amet, consectetuer adipisci</td>
                                                    <td><span style="color: rgb(6, 202, 6);">active</span></td>
                                                    <td><span class="badge badge-success" style="display: inline;">Chat</span><span class="badge badge-primary" style="display: inline;margin-left: 10px;">Close</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>20-1-2020</td>
                                                    <td>Lorem ipsum dolor sit amet, conse</td>
                                                    <td>sum dolor sit amet, consectetuer adipisci</td>
                                                    <td><span style="color: rgb(6, 202, 6);">active</span></td>
                                                    <td><span class="badge badge-success" style="display: inline;">Chat</span><span class="badge badge-primary" style="display: inline;margin-left: 10px;">Close</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>20-1-2020</td>
                                                    <td>Lorem ipsum dolor sit amet, conse</td>
                                                    <td>sum dolor sit amet, consectetuer adipisci</td>
                                                    <td><span style="color: rgb(6, 202, 6);">active</span></td>
                                                    <td><span class="badge badge-success" style="display: inline;">Chat</span><span class="badge badge-primary" style="display: inline;margin-left: 10px;">Close</span></td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>20-1-2020</td>
                                                    <td>Lorem ipsum dolor sit amet, conse</td>
                                                    <td>sum dolor sit amet, consectetuer adipisci</td>
                                                    <td><span style="color: rgb(6, 202, 6);">active</span></td>
                                                    <td><span class="badge badge-success" style="display: inline;">Chat</span><span class="badge badge-primary" style="display: inline;margin-left: 10px;">Close</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include("includes/footer.php");
include("includes/scripts.php");

?>