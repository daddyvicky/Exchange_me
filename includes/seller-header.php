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
                <li><a class="active" href="./seller-dashboard.php"><i class="icon-home"></i>Dashboard</a></li>
                <li><a href="my-products.php"><i class="icon-database"></i>My Products</a></li>
                <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                <li><a href="exchange-req.html"><i class="icon-users2"></i>Exchange Req</a></li>
                <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                <li><a href="#" onclick="logout();"><i class="icon-exit"></i>Logout</a></li>
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
                            <li><a class="active" href="seller-dashboard.php"><i class="icon-home"></i>Dashboard</a></li>
                            <li><a href="my-products.php"><i class="icon-database"></i>My Products</a></li>
                            <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                            <li><a href="exchange-req.html"><i class="icon-users2"></i>Exchange Req</a></li>
                            <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                            <li><a href="#" onclick="logout();"><i class="icon-exit"></i>Logout</a></li>
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