<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novozatra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/Defaul.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-wrapp d-flex justify-content-between align-items-center">
                    <div class="header-left">
                        <p>Welcome to Novozatra</p>
                    </div>
                    <div class="header-right d-flex">
                        <div class="myAcounts">
                            <ul class="d-flex">
                                <li><span></span><a href="Myaccount.php">my acounts</a></li>
                            </ul>
                        </div>
                        <div class="login-acounts">
                            <ul class="d-flex">
                                <li><span><i class="far fa-user"></i></span></li>
                                <li><a href="login.php">sign in</a></li>
                                <li><span>/</span></li>
                                <li><a href="signUp.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header-middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-wrapp d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo/logo.png" class="img-fluid" alt=""></a>
                            </div>
                            <div class="header-search border rounded">
                                <form action="" class="d-flex justify-content-between align-items-center">
                                    <div class="form-group w-25">
                                        <select name="" id="" class="form-control border-0">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="5">Furniture</option>
                                            <option value="6">Shoes</option>
                                            <option value="7">Sports</option>
                                            <option value="8">Games</option>
                                            <option value="9">Computers</option>
                                            <option value="10">Electronics</option>
                                            <option value="11">Kitchen</option>
                                            <option value="12">Clothing</option>
                                        </select>
                                    </div>
                                    <div class="form-group w-85">
                                        <input type="text" class="w-100 form-control border-0" placeholder="Search here..." required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="header-cart-wrapp d-flex justify-content-end text-center">
                                <div class="single-cart-items">
                                    <a href="wishlist.php">
                                        <span><i class="far fa-heart"></i></span>
                                        <p>Wishlist</p>
                                    </a>
                                </div>
                                <div class="single-cart-items">
                                    <a href="compare.php">
                                        <span><i class="fa fa-sync"></i></span>
                                        <p>Compare</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cart-items -->
        <div class="offcanvas offcanvas-end primary-shadow w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
            <div class="offcanvas-header">
                <h3 class="header-title">Shopping Cart</h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id='cart-img'>
               <div class="shopping-cart-wrapp d-flex justify-content-between">
                   <div class="shopping-cart-content">
                       <a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                        <h4><span>1 x</span> $25.68</h4>
                   </div>
                   <div class="shopping-cart-removed" data-background="images/banner/bg1.jpg">
                        <span class="primary-shadow">x</span>
                   </div>
               </div>
               <div class="shopping-cart-wrapp d-flex justify-content-between">
                   <div class="shopping-cart-content">
                       <a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                        <h4><span>1 x</span> $25.68</h4>
                   </div>
                   <div class="shopping-cart-removed" data-background="images/banner/bg1.jpg">
                        <span class="primary-shadow">x</span>
                   </div>
               </div>
               <div class="total-cart-cost">
                   <div class="cost-content">
                       <h4>subtotal: <span class="float-right">$51.07</span></h4>
                   </div>
                   <div class="cart-action d-flex justify-content-between">
                       <a href="cart.php" class="btn btn-primary btn-custom">View Cart</a>
                       <a href="checkout.php" class="btn btn-primary btn-custom">Check Out</a>
                   </div>
               </div>
            </div>
        </div>
        <!-- main menu -->
        <header>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner-header d-flex justify-content-between align-items-center">
                                <div class="header-left-item d-flex align-items-center">
                                <a class="btn btn-primary mobile-menu-bar" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                   <img src="images/logo/menu.png" alt="">
                                    </a>
                                    <h4 class='categories-title-bar'> <span><i class="fas fa-list-ul"></i></span> Browse Categories <span class='down-right'><i class="fas fa-chevron-down"></i></span></h4>
                                    <div class="mobile-menu-logo">
                                        <a href="index.php"><img src="images/logo/logo.png" alt=""></a>
                                    </div>
                                    <div class="primary-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">about</a></li>
                                                <li><a href="shop.php">Shop</a></li>
                                                <li><a href="product-details.php">Product</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="header-right-item">
                                    <div class="single-cart-items">
                                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
                                            <span><i class="fas fa-shopping-bag" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i></span>
                                            <p class='position-relative'>Cart <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark cart-count">
                                                2
                                                <span class="visually-hidden">unread messages</span>
                                            </span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="mobile-menu-canvas">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="images/logo/logo.png" class='img-fluid w-20' alt=""></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="mobile-menu-search">
                        <form action="" class='row d-flex'>
                            <div class="col-lg-9 form-group">
                                <input type="search" placeholder='Search here...'>
                            </div>
                            <div class="col-lg-9 form-group">
                                <button type="submit" class='btn btn-primary btn-custom'><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="mobile-menu-tabs">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Main Menu</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Categories</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="mobile-menu-categroies">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="product-details.php">Product</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="compare.php">Compare</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="product-categories">
                                    <ul>
                                        <li><span><i class="fa fa-user"></i></span><a href="">Fashion <span><i class="fas fa-chevron-right"></i></span></a>
                                            <ul class='mega-menu d-flex'>
                                                <div class="cr">
                                                    <h4>Women</h4>
                                                    <ul>
                                                        <li><a href="#">New Arrivals</a></li>
                                                        <li><a href="#">Best Sellers</a>
                                                        </li>
                                                        <li><a href="#">Trending</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cr">
                                                    <h4>Men</h4>
                                                    <ul>
                                                        <li><a href="#">New Arrivals</a></li>
                                                        <li><a href="#">Best Sellers</a>
                                                        </li>
                                                        <li><a href="#">Trending</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </ul>
                                        </li>
                                        <li><span><i class="fas fa-home"></i></span><a href="">Home & Garden<span><i class="fas fa-chevron-right"></i></span></a>
                                            <ul class='mega-menu d-flex'>
                                                <div class="cr">
                                                    <h4>Women</h4>
                                                    <ul>
                                                        <li><a href="#">New Arrivals</a></li>
                                                        <li><a href="#">Best Sellers</a>
                                                        </li>
                                                        <li><a href="#">Trending</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cr">
                                                    <h4>Men</h4>
                                                    <ul>
                                                        <li><a href="#">New Arrivals</a></li>
                                                        <li><a href="#">Best Sellers</a>
                                                        </li>
                                                        <li><a href="#">Trending</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </ul>
                                        </li>
                                        <li><span><i class="fas fa-desktop"></i></span><a href="">Electronics<span><i class="fas fa-chevron-right"></i></span></a>
                                            <ul class='mega-menu d-flex'>
                                                <div class="cr">
                                                    <h4>Women</h4>
                                                    <ul>
                                                        <li><a href="#">New Arrivals</a></li>
                                                        <li><a href="#">Best Sellers</a>
                                                        </li>
                                                        <li><a href="#">Trending</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cr">
                                                    <h4>Men</h4>
                                                    <ul>
                                                        <li><a href="#">New Arrivals</a></li>
                                                        <li><a href="#">Best Sellers</a>
                                                        </li>
                                                        <li><a href="#">Trending</a></li>
                                                        <li><a href="#">Clothing</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </ul>
                                        </li>
                                        <li><span><i class="fa fa-user"></i></span><a href="">Furniture</a></li>
                                        <li><span><i class="fas fa-heartbeat"></i></span><a href="">Health & Beauty</a></li>
                                        <li><span><i class="fas fa-gift"></i></span><a href="">Gift Ideas</a></li>
                                        <li><span><i class="fas fa-gamepad"></i></span><a href="">Toy & Games</a></li>
                                        <li><span><i class="fa fa-user"></i></span><a href="">Cooking</a></li>
                                        <li><span><i class="fas fa-mobile-alt"></i></span><a href="">Smart Phone</a></li>
                                        <li><span><i class="fas fa-gift"></i></span><a href="">Camera & Phone</a></li>
                                        <li><span><i class="fas fa-gamepad"></i></span><a href="">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>