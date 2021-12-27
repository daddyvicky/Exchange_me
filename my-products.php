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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <title>Exchangeme - My Products</title>
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
<?php include('./includes/seller-header.php') ?>
        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                </div>
                <div class="header__center">
                    <div class="header__left">
                        <h3  style="display: inline;">Products</h3>
                    </div>
                </div>
                <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
            </header>
            <section class="ps-items-listing">
                <div class="ps-section__actions"><a class="ps-btn success" href="new-product.php"><i class="icon icon-plus mr-2"></i>New Product</a></div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Categories</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ABH-0</td>
                                    <td><a href="#"><strong>Herschel Leather Duffle Bag In Brown Color</strong></a></td>
                                    <td>AB123456789-1</td>
                                    <td><span class="ps-badge success">Stock</span>
                                    </td>
                                    <td><strong>₹125.30</strong></td>
                                    <td>
                                        <p class="ps-item-categories"><a href="#">Bags</a><a href="#">Clothing &amp; Apparel</a>
                                        </p>
                                    </td>
                                    <td>2019/11/06</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABH-1</td>
                                    <td><a href="#"><strong>Apple iPhone Retina 6s Plus 64GB</strong></a></td>
                                    <td>CD987654316-1</td>
                                    <td><span class="ps-badge success">Stock</span>
                                    </td>
                                    <td><strong>₹1,249.99</strong></td>
                                    <td>
                                        <p class="ps-item-categories"><a href="#">Computers &amp; Technologies</a><a href="#">Technologies</a>
                                        </p>
                                    </td>
                                    <td>2018/12/11</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABH-2</td>
                                    <td><a href="#"><strong>Marshall Kilburn Portable Wireless Speaker</strong></a></td>
                                    <td>SF1133569600-1</td>
                                    <td><span class="ps-badge success">Stock</span>
                                    </td>
                                    <td><strong>₹36.78</strong></td>
                                    <td>
                                        <p class="ps-item-categories"><a href="#">Babies &amp; Moms</a><a href="#">Refrigerators</a>
                                        </p>
                                    </td>
                                    <td>2018/12/11</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABH-3</td>
                                    <td><a href="#"><strong>Xbox One Wireless Controller Black Color</strong></a></td>
                                    <td>AB123456788</td>
                                    <td><span class="ps-badge gray">Out-of-stock</span>
                                    </td>
                                    <td><strong>₹55.30</strong></td>
                                    <td>
                                        <p class="ps-item-categories"><a href="#">Accessories</a><a href="#">Air Conditioners</a>
                                        </p>
                                    </td>
                                    <td>2018/12/11</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABH-4</td>
                                    <td><a href="#"><strong>Grand Slam Indoor Of Show Jumping Novel</strong></a></td>
                                    <td>AB123456788</td>
                                    <td><span class="ps-badge gray">Out-of-stock</span>
                                    </td>
                                    <td><strong>₹32.39</strong></td>
                                    <td>
                                        <p class="ps-item-categories"><a href="#">Books &amp; Office</a><a href="#">Cars &amp; Motocycles</a>
                                        </p>
                                    </td>
                                    <td>2018/12/11</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABH-5</td>
                                    <td><a href="#"><strong>Rayban Rounded Sunglass Brown Color</strong></a></td>
                                    <td>AB123456783</td>
                                    <td><span class="ps-badge success">Stock</span>
                                    </td>
                                    <td><strong>₹321.39</strong></td>
                                    <td>
                                        <p class="ps-item-categories"><a href="#">Clothing &amp; Apparel</a><a href="#">Cars &amp; Motocycles</a>
                                        </p>
                                    </td>
                                    <td>2018/12/11</td>
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
                <div class="ps-section__footer">
                    <p>Show 10 in 30 items.</p>
                    <ul class="pagination">
                        <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <!-- custom code-->
    <script src="js/main.js"></script>
</body>

</html>