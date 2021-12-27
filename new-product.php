<?php
require_once 'php/utils.php';
confirmLogin();
$user = [];
$C = connect();
if ($C) {
    $res = sqlSelect($C, 'SELECT * FROM users WHERE id=' . $_SESSION['userID'] . '');
    if ($res && $res->num_rows === 1) {
        $user = $res->fetch_assoc();
    } else {
        exit;
    }
} else {
    exit;
}

$catquery = "select * from category";
$categories = Query($catquery);
$categoriesexchange = Query($catquery);

$check = 0;
if (isset($_POST['id']) && ($_POST['id']) == $_SESSION["requestid"]) {
    $name =  mysqli_real_escape_string($con, $_POST['name']);
    $brand =  mysqli_real_escape_string($con, $_POST['brand']);
    $category =  mysqli_real_escape_string($con, $_POST['category']);
    $isold =  mysqli_real_escape_string($con, $_POST['isold']);
    $datefield =  mysqli_real_escape_string($con, $_POST['datefield']);
    $summary =  mysqli_real_escape_string($con, $_POST['summary']);
    $rprice =  mysqli_real_escape_string($con, $_POST['rprice']);
    $sprice =  mysqli_real_escape_string($con, $_POST['sprice']);
    $quant =  mysqli_real_escape_string($con, $_POST['quant']);
    $disc = mysqli_real_escape_string($con, $_POST['disc']);
    $isexchange =  mysqli_real_escape_string($con, $_POST['isexchange']);
    $icategory =  mysqli_real_escape_string($con, $_POST['icategory']);
    if ($isexchange == "0") {
        $icategory = "";
    }
    $errors = array();
    $extensions = array("jpeg", "jpg", "png", "webp");

    // check imgs
    $file_size = $_FILES['img1']['size'];
    @$file_ext = strtolower(end(explode('.', $_FILES['img1']['name'])));
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "image 1 extension not allowed, please choose a JPEG or PNG file.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'image 1 File size must be Less than 2 MB';
    }

    if ($_FILES['img2']['name'] != "") {
        $file_size = $_FILES['img2']['size'];
        @$file_ext = strtolower(end(explode('.', $_FILES['img2']['name'])));
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "image 2 extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'image 1 File size must be Less than 2 MB';
        }
    } else if ($_FILES['img3']['name'] != "") {
        $file_size = $_FILES['img3']['size'];
        @$file_ext = strtolower(end(explode('.', $_FILES['img3']['name'])));
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "image 3 extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'image 3 File size must be Less than 2 MB';
        }
    }

    if (empty($errors) == true) {
        /* img1*/
        $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION); // jpg
        $basename1   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
        $source       = $_FILES["img1"]["tmp_name"];
        $destination  = "./products/{$basename1}";
        move_uploaded_file($source, $destination);
        //img2
        if ($_FILES['img2']['name'] != "") {
            $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
            $extension  = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION); // jpg
            $basename2   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
            $source       = $_FILES["img2"]["tmp_name"];
            $destination  = "./products/{$basename2}";
            move_uploaded_file($source, $destination);
        } else {
            $basename2 = "";
        }
        // img3
        if ($_FILES['img2']['name'] != "") {
            $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
            $extension  = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION); // jpg
            $basename3   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
            $source       = $_FILES["img3"]["tmp_name"];
            $destination  = "./products/{$basename3}";
            move_uploaded_file($source, $destination);
        } else {
            $basename3 = "";
        }

        /* move the file */
        date_default_timezone_set("Asia/Calcutta");
        $time = time();
        $dateTime = strftime('%Y-%m-%d %H:%M:%S ', $time);
        $display = 1;
        $sql = "INSERT INTO products (date, uid, name,category,brand,isold,pdate,summary,rprice,sprice,quant,disc,isexchange,icategory,img1,img2,img3,display) VALUES('$dateTime', '$_SESSION[userID]', '$name','$category','$brand','$isold','$datefield','$summary','$rprice','$sprice','$quant','$disc','$isexchange','$icategory','$basename1','$basename2','$basename3','$display')";
        $exec = Query($sql);
        if ($exec) {
            $check = 1;
        }
    } else {
        $check = -1;
    }
}
$_SESSION["requestid"] = substr(sha1(rand()), 0, 15);
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
    <title>Exchangeme - New product</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="admin/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="admin/plugins/apexcharts-bundle/dist/apexcharts.css">
    <link rel="stylesheet" href="admin/css/style.css">
    <style>
        .fileUpload {
            position: relative;
            overflow: hidden;
        }

        .fileUpload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .toggle-div {
            display: none;
        }
    </style>
</head>

<body>
    <?php include('./includes/seller-header.php') ?>
    <div class="ps-main__wrapper">
        <header class="header--dashboard">
            <div class="header__left">
            </div>
            <div class="header__center">
                <div class="header__left">
                    <h3 style="display: inline;">New Products</h3>
                </div>
            </div>
            <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
        </header>
        <section class="ps-new-item">
            <form class="ps-form ps-form--new-product" action="./new-product.php" method="post" id="newproduct">
                <div class="ps-form__content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>General</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Product Name<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter product name..." name="name" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Brand Name<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter product name..." name="brand" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Category<sup>*</sup>
                                        </label>
                                        <select class="ps-select" title="Type" name="category" required>
                                            <?php
                                            while ($category = mysqli_fetch_assoc($categories)) {
                                            ?>
                                                <option value="<?php echo $category['cat_id'] ?>"><?php echo $category['cat_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Old Product<sup>*</sup>
                                        </label><br>
                                        YES: <input type="radio" class="isold" value="1" name="isold" required />&nbsp;&nbsp;&nbsp;&nbsp;
                                        NO: <input type="radio" class="isold" value="0" name="isold" required checked />
                                    </div>
                                    <div class="form-group toggle-div" id="isold">
                                        <label>Date Of Purchase<sup>*</sup>
                                        </label><br>
                                        <input class="form-control" type="date" max='2000-13-13' id="datefield" name="dop" />
                                    </div>
                                    <div class="form-group">
                                        <label>Product Summary<sup>*</sup>
                                        </label>
                                        <textarea class="form-control" rows="5" placeholder="Enter Sort Summary..." name="summary" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Regular Price<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="number" placeholder="" required name="rprice" />
                                    </div>
                                    <div class="form-group">
                                        <label>Sale Price<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="number" placeholder="" required name="sprice" />
                                    </div>
                                    <div class="form-group">
                                        <label>Sale Quantity<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="number" value="1" min="1" placeholder="" required name="quant" />
                                    </div>
                                    <div class="form-group">
                                        <label>Product Description<sup>*</sup></label>
                                        <textarea class="form-control" rows="10" placeholder="Enter Product Description..." required name="disc"></textarea>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>Product Images</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Product Thumbnail</label>
                                        <div class="form-group--nest">
                                            <input class="form-control mb-1" type="text" id="uploadFile1" placeholder="" required>
                                            <div class="fileUpload ps-btn ps-btn--sm">
                                                <span>Upload</span>
                                                <input id="uploadBtn1" type="file" class="upload" name="img1" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Gallery</label>
                                            <div class="form-group--nest">
                                                <input class="form-control mb-1" type="text" id="uploadFile2" placeholder="">
                                                <div class="fileUpload ps-btn ps-btn--sm">
                                                    <span>Upload</span>
                                                    <input id="uploadBtn2" type="file" class="upload" name="img2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-group--nest">
                                            <input class="form-control mb-1" type="text" id="uploadFile3" placeholder="">
                                            <div class="fileUpload ps-btn ps-btn--sm">
                                                <span>Upload</span>
                                                <input id="uploadBtn3" type="file" class="upload" name="img3" />
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                                <label>Video (optional)
                                                </label>
                                                <input class="form-control" type="text" placeholder="Enter video URL" />
                                            </div> -->
                                    </div>
                            </figure>
                            <figure class="ps-block--form-box">
                                <figcaption>Additional</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>For Exchange?<sup>*</sup>
                                        </label><br>
                                        YES: <input class="isexchange" type="radio" value="1" name="isexchange" required />&nbsp;&nbsp;&nbsp;&nbsp;
                                        NO: <input class="isexchange" type="radio" value="0" name="isexchange" required checked />
                                    </div>
                                </div>
                            </figure>
                            <figure class="ps-block--form-box toggle-div " id="isexchangecontent">
                                <figcaption>Info For Exchange</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Interested Category For Exchange<sup>*</sup>
                                        </label>
                                        <select class="ps-select" title="Type" name="icategory" required>
                                            <?php
                                            while ($category = mysqli_fetch_assoc($categoriesexchange)) {
                                            ?>
                                                <option value="<?php echo $category['cat_id'] ?>"><?php echo $category['cat_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-form__bottom">
                    <!-- <a class="ps-btn ps-btn--black" href="products.html">Back</a> -->
                    <input type="hidden" value="<?php echo $_SESSION["requestid"]; ?>" name="id">
                    <a class="ps-btn ps-btn--black" href="./">Cancel</a>
                    <button class="ps-btn" id="submit">submit</button>
                </div>
            </form>
        </section>
    </div>
    </main>
    <?php include('./includes/seller-footer.php') ?>
    <script src="./js/sellerjs.js"></script>
    <script>
        let btn = document.getElementById('submit');
        let form = document.getElementById('newproduct');
        btn.addEventListener("click", function(e) {
            if ($('input[name="isold"]:checked').val() == '1') {
                if ($('input[name="dop"]').val().length == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Please Fill Date Of Purchase.',
                    });
                    document.form.$('input[name="dop"]').focus();
                }
            }
            if ($('input[name="isexchange"]:checked').val() == '1') {
                if ($('input[name="icategory"]').val().length == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Please Select Interested Category.',
                    });
                    document.form.$('input[name="icategory"]').focus();
                }
            }
        });
    </script>
    <?php
    if ($check == 1) {
        echo "<script>Swal.fire({
				icon: 'success',
				title: 'Hurray',
				text: 'Product has been added.',
			});</script>";
    }
    if ($check == -1) {
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'ops',
            html: '";
            while(){

            }
            "',
        });</script>";
    }
    
    ?>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>