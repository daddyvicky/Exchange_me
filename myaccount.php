
<?php 
require_once 'php/utils.php';
    // if (!isset($_SESSION['loggedin'])) {
        if ($_SESSION['loggedin'] !== true) {
            header("Location: ./login");
        exit;
        } 
    // }

	$user = [];	
	$C = connect();
	if($C) {
		$res = sqlSelect($C, 'SELECT * FROM users WHERE id='.$_SESSION['userID'].'');
		if($res && $res->num_rows === 1) {
			$user = $res->fetch_assoc();
		}
		else {
			exit;
		}
	}
	else {
		exit;
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <base href="<?php echo dirname($_SERVER['PHP_SELF']); ?>/" /> -->
	<meta charset="UTF-8">
	<meta name="csrf_token" content="<?php echo createToken(); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <title>Exchangeme Username</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="admin/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="admin/plugins/apexcharts-bundle/dist/apexcharts.css">
    <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>
    <header class="header--mobile">
        <div class="header__left">
            <button class="ps-drawer-toggle"><i class="icon icon-menu"></i></button><img src="" alt="">
        </div>
        <div class="header__center"><a class="ps-logo" href="#"><img src="img/logo.png" alt=""></a></div>
        <div class="header__right"><a class="header__site-link" href="./"><i class="icon-home4" style="font-size:20px;"></i></a></div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header">
            <h4> Menu</h4>
            <button class="ps-drawer__close"><i class="icon icon-cross"></i></button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li><a class="active" href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                <li><a href="exchange-req.html"><i class="icon-users2"></i>Exchange Req</a></li>
                <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                <li><a  onclick="logout();"><i class="icon-exit"></i>Logout</a></li>
            </ul>
        </div>
    </aside>
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left"><img src="img/user/admin.jpg" alt="" /></div>
                        <div class="ps-block__right">
                            <p>Hello,<a href="#"><?php echo $user['name']?></a></p>
                        </div>
                    </div>
                    <div class="ps-block--earning-count"><small>Earning</small>
                        <h3>₹12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a class="active" href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                            <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                            <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                            <li><a href="exchange-req.html"><i class="icon-users2"></i>Exchange Req</a></li>
                            <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                            <li><a  onclick="logout();"><i class="icon-exit"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="img/logo.png" alt="">
                            <p>&copy;2020 Exchangeme marketplace. <br/> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                </div>
                <div class="header__center">
                    <div class="header__left">
                        <h3  style="display: inline;">Dashboard</h3>
                        <p  style="display: inline;">Everything here</p>
                    </div>
                    <!-- <form class="ps-form--search-bar" action="index.html" method="get">
                        <input class="form-control" type="text" placeholder="Search something">
                        <button><i class="icon-magnifier"></i></button>
                    </form> -->
                </div>
                <div class="header__right"><a class="header__site-link" href="./"><span>View your store</span><i class="icon-exit-right"></i></a></div>
            </header>
            <section class="ps-dashboard">
                <div class="ps-section__left">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="ps-card ps-card--statics" style="justify-self: center;">
                                <div class="ps-card__header">
                                    <h4>Statics</h4>
                                    <div class="ps-card__sortby"><i class="icon-calendar-empty"></i>
                                        <div class="form-group--select">
                                            <select class="form-control">
                                                <option value="1">Last 30 days</option>
                                                <option value="2">Last 90 days</option>
                                                <option value="3">Last 180 days</option>
                                            </select><i class="icon-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-card__content">
                                    <div class="ps-block--stat yellow">
                                        <div class="ps-block__left"><span><i class="icon-cart"></i></span></div>
                                        <div class="ps-block__content">
                                            <p>Orders</p>
                                            <h4>254<small class="asc"><i class="icon-arrow-up"></i><span>12,5%</span></small></h4>
                                        </div>
                                    </div>
                                    <div class="ps-block--stat pink">
                                        <div class="ps-block__left"><span><i class="icon-cart"></i></span></div>
                                        <div class="ps-block__content">
                                            <p>Revenue</p>
                                            <h4>₹6,260<small class="asc"><i class="icon-arrow-up"></i><span>7.1%</span></small></h4>
                                        </div>
                                    </div>
                                    <div class="ps-block--stat green">
                                        <div class="ps-block__left"><span><i class="icon-cart"></i></span></div>
                                        <div class="ps-block__content">
                                            <p>Revenue</p>
                                            <h4>₹2,567<small class="desc"><i class="icon-arrow-down"></i><span>0.32%</span></small></h4>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <div class="ps-card ps-card--earning">
                                <div class="ps-card__header">
                                    <h4>Earnings</h4>
                                </div>
                                <div class="ps-card__content">
                                    <div class="ps-card__chart">
                                        <div id="donut-chart"></div>
                                        <div class="ps-card__information"><i class="icon icon-wallet"></i><strong>₹12,560</strong><small>Balance</small></div>
                                    </div>
                                    <div class="ps-card__status">
                                        <p class="yellow"><strong> ₹20,199</strong><span>Income</span></p>
                                        <p class="red"><strong> ₹1,021</strong><span>Taxes</span></p>
                                        <p class="green"><strong> ₹992.00</strong><span>Fees</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-card">
                        <div class="ps-card__header">
                            <h4>Recent Orders</h4>
                        </div>
                        <div class="ps-card__content">
                            <div class="table-responsive">
                                <table class="table ps-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>Payment</th>
                                            <th>Fullfillment</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#A580</td>
                                            <td><strong> Aug, 15, 2020</strong></td>
                                            <td><a href="order-detail.html"><strong>Unero Black Military</strong></a></td>
                                            <td><span class="ps-badge success">Paid</span>
                                            </td>
                                            <td><span class="ps-fullfillment success">delivered</span>
                                            </td>
                                            <td><strong>₹56.00</strong></td>
                                            <td>
                                                <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#B260</td>
                                            <td><strong> Aug, 15, 2020</strong></td>
                                            <td><a href="order-detail.html"><strong>Marsh Speaker</strong></a></td>
                                            <td><span class="ps-badge gray">Unpaid</span>
                                            </td>
                                            <td><span class="ps-fullfillment success">delivered</span>
                                            </td>
                                            <td><strong>₹56.00</strong></td>
                                            <td>
                                                <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#A583</td>
                                            <td><strong> Aug, 15, 2020</strong></td>
                                            <td><a href="order-detail.html"><strong>Lined Blend T-Shirt</strong></a></td>
                                            <td><span class="ps-badge success">Paid</span>
                                            </td>
                                            <td><span class="ps-fullfillment warning">In Progress</span>
                                            </td>
                                            <td><strong>₹516.00</strong></td>
                                            <td>
                                                <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#A583</td>
                                            <td><strong> Aug, 15, 2020</strong></td>
                                            <td><a href="order-detail.html"><strong>DJI MAcvic Quadcopter</strong></a></td>
                                            <td><span class="ps-badge gray">Unpaid</span>
                                            </td>
                                            <td><span class="ps-fullfillment success">delivered</span>
                                            </td>
                                            <td><strong>₹112.00</strong></td>
                                            <td>
                                                <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#A112</td>
                                            <td><strong> Aug, 15, 2020</strong></td>
                                            <td><a href="order-detail.html"><strong>Black T-Shirt</strong></a></td>
                                            <td><span class="ps-badge success">Paid</span>
                                            </td>
                                            <td><span class="ps-fullfillment danger">Cancel</span>
                                            </td>
                                            <td><strong>₹30.00</strong></td>
                                            <td>
                                                <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ps-card__footer"><a class="ps-card__morelink" href="orders.htmls">View Full Orders<i class="icon icon-chevron-right"></i></a></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="script.js"></script>
    <script src="admin/plugins/jquery.min.js"></script>
    <script src="admin/plugins/popper.min.js"></script>
    <script src="admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/plugins/jquery.matchHeight-min.js"></script>
    <script src="admin/plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="admin/plugins/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <script src="admin/js/chart.js"></script>
    <!-- custom code-->
    <script src="admin/js/main.js"></script>
</body>

</html>