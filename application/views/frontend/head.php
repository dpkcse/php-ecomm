<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description"
        content="Online Shopping in Bangladesh for Mobiles & Electronics - akt-shopbd.com
Trusted online shop in Bangladesh for mobiles, computers, fashion, electronics & appliances. Quality Product. Happy Online Shopping.">
    <meta name="author" content="">
    <meta property="og:site_name" content="Akt-Shop">
    <meta name="keywords" content="Bangladeshi eCommerce">
    <meta name="robots" content="all">
    <title>AKT-Shop</title>
    <link rel="icon" href="<?php echo base_url()?>assets/admin/img/favicons/akt_icon.ico" />
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/blue.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/rateit.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/simplePagination.css">

    <script src="<?php echo base_url()?>assets/frontend/js/jquery-1.11.1.min.js"></script>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">

                            <li><a href="<?php echo base_url()?>shopping-cart"><i
                                        class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                            <li><a href="<?php echo base_url()?>shopping-cart"><i
                                        class="icon fa fa-check"></i>Checkout</a></li>
                            <?php $akt_customar_id = $this->session->userdata('customer_id'); if ($akt_customar_id == NULL ) { ?>
                            <li><a href="<?php echo base_url()?>sign-in"><i class="icon fa fa-lock"></i>Login</a></li>
                            <?php }else{ ?>
                            <li id="userStatus" data-id="<?php echo $akt_customar_id ?>"
                                data-name="<?php echo $this->session->userdata('customer_name')?>"><a href="#"><i
                                        class="icon fa fa-user"></i><?php echo $this->session->userdata('customer_name')?></a>
                            </li>
                            <li><a href="<?php echo base_url()?>wish-list"><i class="icon fa fa-heart"></i>My
                                    Wishlist</a></li>
                            <li><a href="<?php echo base_url()?>sign-out"><i class="icon fa fa-unlock"></i>Logout</a>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- /.cnt-account -->

                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo"> <a href="<?php echo base_url()?>"> <img
                                    src="<?php echo base_url()?>assets/frontend/images/akt_shop.png" alt="logo"
                                    style="width: 100%;height: 85px;margin-top: -20px;"> </a> </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form action="<?php echo base_url()?>search" method="POST">
                                <div class="control-group">
                                    <!-- <ul class="categories-filter animate-dropdown">
                                          <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu" >
                                            <?php
                                                foreach($all_category_info as $v_cate){ if($v_cate->publication_status == 1){?>
                                                  <li role="presentation"><a role="menuitem" tabindex="<?php echo $v_cate->category_id; ?>" value="<?php echo $v_cate->category_id; ?>" href="#"></a><?php echo $v_cate->category_name; ?></li>
                                              <?php } }?>
                                            </ul>
                                          </li>
                                        </ul> -->
                                    <?php if($title == 'search page'){?>
                                    <input class="search-field" name="search_value" value="<?php echo $search_value ?>"
                                        placeholder="Search here..." />
                                    <?php }else { ?>
                                    <input class="search-field" name="search_value" placeholder="Search here..." />
                                    <?php }?>
                                    <button class="search-button" type="submit"></button> </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row" style="text-align:center;">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                        <div class="dropdown dropdown-cart" style="float:unset;"> <a href="#"
                                class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                    <div class="basket-item-count"><span class="count cartItemCount">0</span></div>
                                    <div class="total-price-basket"> <span class="lbl">cart -</span> <span
                                            class="total-price"> <span class="sign">Tk. </span><span class="value "
                                                id="totalAmountOfcart">0</span> </span> </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="cart-item product-summary" id="cartItemListmini">

                                    </div>
                                    <!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="clearfix cart-total">
                                        <div class="pull-right"> <span class="text">Sub Total :</span><span
                                                class='price'>Tk. <span class="totalAmountOfcart"
                                                    id="dropdownTotalmini">0</span></span> </div>
                                        <div class="clearfix"></div>
                                        <a href="<?php echo base_url()?>shopping-cart"
                                            class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                    </div>
                                    <!-- /.cart-total-->

                                </li>
                            </ul>
                            <!-- /.dropdown-menu-->
                        </div>
                        <!-- /.dropdown-cart -->

                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div>
                    <!-- /.top-cart-row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.main-header -->

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="<?php if($title == "index"){ echo 'active'; }?> dropdown yamm-fw"><a
                                            href="<?php echo base_url()?>"> <i class="glyphicon glyphicon-home"></i>
                                            Home</a> </li>
                                    <?php foreach($total_menu as $vmenu){if($vmenu->status == 1){ ?>
                                    <li class="dropdown yamm-fw"> <a href="#" data-hover="dropdown"
                                            class="dropdown-toggle"
                                            data-toggle="dropdown"><?php echo $vmenu->item_name; ?></a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">
                                                        <?php foreach($all_category_info as $v_cate){if($v_cate->menu_id == $vmenu->id && $v_cate->publication_status == 1){ ?>
                                                        <div class="col-xs-12 col-sm-6 col-md-3 col-menu">
                                                            <h2 class="title" style="margin:2px 0px"><a
                                                                    href="<?php echo base_url()?>category-view/<?php echo $v_cate->category_id ?>"
                                                                    style="padding:0px;"><?php echo $v_cate->category_name;?></a>
                                                            </h2>
                                                            <ul class="links">
                                                                <?php foreach($all_manufacture_info as $v_scate){if($v_scate->category_id == $v_cate->category_id && $v_scate->publication_status == 1){ ?>
                                                                <li><a
                                                                        href="<?php echo base_url()?>manufacture-view/<?php echo $v_scate->manufacture_id ?>"><?php  echo $v_scate->manufacture_name; ?></a>
                                                                </li>
                                                                <?php }}?>
                                                            </ul>
                                                        </div>
                                                        <?php }}?>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php }} ?>
                                    <li class="<?php if($title == 'Contact'){echo 'active '; } ?>dropdown yamm-fw"><a
                                            href="<?php echo base_url()?>contact">Contact Us</a> </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->

    </header>
    <script>
    var myAllProducts = <?php echo json_encode($all_product_info); ?>;
    var baseUrl = '<?php echo base_url()?>';
    var pageTitle = '<?php echo $title?>';
    </script>
    <!-- ============================================== HEADER : END ============================================== -->