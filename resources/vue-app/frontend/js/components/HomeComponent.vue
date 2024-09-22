<template>
    <div>
        <div id="preloader" class="preloader-container">
            <div class="book">
                <div class="inner">
                    <div class="left"></div>
                    <div class="middle"></div>
                    <div class="right"></div>
                </div>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>

        <div class="search-popup">
            <div class="search-popup-container">

                <form role="search" method="get" class="search-form" action="">
                    <input type="search" id="search-form" class="search-field" placeholder="Type and press enter"
                           value=""
                           name="s"/>
                    <button type="submit" class="search-submit">
                        <svg class="search">
                            <use xlink:href="#search"></use>
                        </svg>
                    </button>
                </form>

                <h5 class="cat-list-title">Browse Categories</h5>

                <ul class="cat-list">
                    <li class="cat-list-item">
                        <a href="#" title="Romance">Romance</a>
                    </li>
                    <li class="cat-list-item">
                        <a href="#" title="Thriller">Thriller</a>
                    </li>
                    <li class="cat-list-item">
                        <a href="#" title="Sci-fi">Sci-fi</a>
                    </li>
                    <li class="cat-list-item">
                        <a href="#" title="Cooking">Cooking</a>
                    </li>
                    <li class="cat-list-item">
                        <a href="#" title="Health">Health</a>
                    </li>
                    <li class="cat-list-item">
                        <a href="#" title="Lifestyle">Lifestyle</a>
                    </li>
                    <li class="cat-list-item">
                        <a href="#" title="Fiction">Fiction</a>
                    </li>
                </ul>

            </div>
        </div>

        <header id="header" class="site-header">

            <div class="top-info border-bottom d-none d-md-block ">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <p class="fs-6 my-2 text-center">Need any help? Call us <a href="#">112233344455</a></p>
                        </div>
                        <div class="col-md-4 border-start border-end">
                            <p class="fs-6 my-2 text-center">Summer sale discount off 60% off! <a
                                    class="text-decoration-underline"
                                    href="index.html">Shop Now</a></p>
                        </div>
                        <div class="col-md-4">
                            <p class="fs-6 my-2 text-center">2-3 business days delivery & free returns</p>
                        </div>
                    </div>
                </div>
            </div>

            <nav id="header-nav" class="navbar navbar-expand-lg py-3">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img :src="baseUrl + '/frontend/images/main-logo.png'" class="logo">
                    </a>
                    <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <svg class="navbar-icon">
                            <use xlink:href="#navbar-icon"></use>
                        </svg>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar"
                         aria-labelledby="bdNavbarOffcanvasLabel">
                        <div class="offcanvas-header px-4 pb-0">
                            <a class="navbar-brand" href="index.html">
                                <img :src="baseUrl + '/frontend/images/main-logo.png'" class="logo">
                            </a>
                            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                                    aria-label="Close"
                                    data-bs-target="#bdNavbar"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul id="navbar"
                                class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
                                <li class="nav-item">
                                    <a class="nav-link me-4 active" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="index.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="index.html">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="index.html">Blogs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                       role="button"
                                       aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu animate slide border">
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">About</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Shop</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Single Product</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Cart</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Blog</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Single Post</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item fw-light">Contact</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-4" href="index.html">Contact</a>
                                </li>
                            </ul>
                            <div class="user-items d-flex">
                                <ul class="d-flex justify-content-end list-unstyled mb-0">
                                    <li class="search-item pe-3">
                                        <a href="#" class="search-button">
                                            <svg class="search">
                                                <use xlink:href="#search"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="pe-3">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg class="user">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                             aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-0">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="tabs-listing">
                                                            <nav>
                                                                <div class="nav nav-tabs d-flex justify-content-center"
                                                                     id="nav-tab" role="tablist">
                                                                    <button class="nav-link text-capitalize active"
                                                                            id="nav-sign-in-tab" data-bs-toggle="tab"
                                                                            data-bs-target="#nav-sign-in" type="button"
                                                                            role="tab" aria-controls="nav-sign-in"
                                                                            aria-selected="true">Sign In
                                                                    </button>
                                                                    <button class="nav-link text-capitalize"
                                                                            id="nav-register-tab" data-bs-toggle="tab"
                                                                            data-bs-target="#nav-register" type="button"
                                                                            role="tab" aria-controls="nav-register"
                                                                            aria-selected="false">Register
                                                                    </button>
                                                                </div>
                                                            </nav>
                                                            <div class="tab-content" id="nav-tabContent">
                                                                <div class="tab-pane fade active show" id="nav-sign-in"
                                                                     role="tabpanel"
                                                                     aria-labelledby="nav-sign-in-tab">
                                                                    <div class="form-group py-3">
                                                                        <label class="mb-2">Username or email address
                                                                            *</label>
                                                                        <input type="text" minlength="2" name="username"
                                                                               placeholder="Your Username"
                                                                               class="form-control w-100 rounded-3 p-3"
                                                                               required>
                                                                    </div>
                                                                    <div class="form-group pb-3">
                                                                        <label class="mb-2">Password *</label>
                                                                        <input type="password" minlength="2"
                                                                               name="password"
                                                                               placeholder="Your Password"
                                                                               class="form-control w-100 rounded-3 p-3"
                                                                               required>
                                                                    </div>
                                                                    <label class="py-3">
                                                                        <input type="checkbox" required=""
                                                                               class="d-inline">
                                                                        <span class="label-body">Remember me</span>
                                                                        <span class="label-body"><a href="#"
                                                                                                    class="fw-bold">Forgot Password</a></span>
                                                                    </label>
                                                                    <button type="submit" name="submit"
                                                                            class="btn btn-dark w-100 my-3">Login
                                                                    </button>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-register"
                                                                     role="tabpanel"
                                                                     aria-labelledby="nav-register-tab">
                                                                    <div class="form-group py-3">
                                                                        <label class="mb-2">Your email address *</label>
                                                                        <input type="text" minlength="2" name="username"
                                                                               placeholder="Your Email Address"
                                                                               class="form-control w-100 rounded-3 p-3"
                                                                               required>
                                                                    </div>
                                                                    <div class="form-group pb-3">
                                                                        <label class="mb-2">Password *</label>
                                                                        <input type="password" minlength="2"
                                                                               name="password"
                                                                               placeholder="Your Password"
                                                                               class="form-control w-100 rounded-3 p-3"
                                                                               required>
                                                                    </div>
                                                                    <label class="py-3">
                                                                        <input type="checkbox" required=""
                                                                               class="d-inline">
                                                                        <span class="label-body">I agree to the
                                                                            <a href="#"
                                                                               class="fw-bold">Privacy Policy</a>
                                                                        </span>
                                                                    </label>
                                                                    <button type="submit" name="submit"
                                                                            class="btn btn-dark w-100 my-3">Register
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wishlist-dropdown dropdown pe-3">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                           aria-expanded="false">
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-primary">Your wishlist</span>
                                                <span class="badge bg-primary rounded-pill">2</span>
                                            </h4>
                                            <ul class="list-group mb-3">
                                                <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                    <div>
                                                        <h5>
                                                            <a href="index.html">The Emerald Crown</a>
                                                        </h5>
                                                        <small>Special discounted price.</small>
                                                        <a href="#" class="d-block fw-medium text-capitalize mt-2">Add
                                                            to cart</a>
                                                    </div>
                                                    <span class="text-primary">$2000</span>
                                                </li>
                                                <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                    <div>
                                                        <h5>
                                                            <a href="index.html">The Last Enchantment</a>
                                                        </h5>
                                                        <small>Perfect for enlightened people.</small>
                                                        <a href="#" class="d-block fw-medium text-capitalize mt-2">Add
                                                            to cart</a>
                                                    </div>
                                                    <span class="text-primary">$400</span>
                                                </li>
                                                <li class="list-group-item bg-transparent d-flex justify-content-between">
                                                    <span class="text-capitalize"><b>Total (USD)</b></span>
                                                    <strong>$1470</strong>
                                                </li>
                                            </ul>
                                            <div class="d-flex flex-wrap justify-content-center">
                                                <a href="#" class="w-100 btn btn-dark mb-1" type="submit">Add all to
                                                    cart</a>
                                                <a href="index.html" class="w-100 btn btn-primary" type="submit">View
                                                    cart</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-dropdown dropdown">
                                        <a href="index.html" class="dropdown-toggle" data-bs-toggle="dropdown"
                                           role="button"
                                           aria-expanded="false">
                                            <svg class="cart">
                                                <use xlink:href="#cart"></use>
                                            </svg>
                                            <span class="fs-6 fw-light">(02)</span>
                                        </a>
                                        <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-primary">Your cart</span>
                                                <span class="badge bg-primary rounded-pill">2</span>
                                            </h4>
                                            <ul class="list-group mb-3">
                                                <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                    <div>
                                                        <h5>
                                                            <a href="index.html">Secrets of the Alchemist</a>
                                                        </h5>
                                                        <small>High quality in good price.</small>
                                                    </div>
                                                    <span class="text-primary">$870</span>
                                                </li>
                                                <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                    <div>
                                                        <h5>
                                                            <a href="index.html">Quest for the Lost City</a>
                                                        </h5>
                                                        <small>Professional Quest for the Lost City.</small>
                                                    </div>
                                                    <span class="text-primary">$600</span>
                                                </li>
                                                <li class="list-group-item bg-transparent d-flex justify-content-between">
                                                    <span class="text-capitalize"><b>Total (USD)</b></span>
                                                    <strong>$1470</strong>
                                                </li>
                                            </ul>
                                            <div class="d-flex flex-wrap justify-content-center">
                                                <a href="index.html" class="w-100 btn btn-dark mb-1" type="submit">View
                                                    Cart</a>
                                                <a href="index.html" class="w-100 btn btn-primary" type="submit">Go to
                                                    checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
                 :style="{
           backgroundImage: 'url(' + baseUrl + '/frontend/images/banner-image-bg.jpg)',
           backgroundSize: 'cover',
           backgroundRepeat: 'no-repeat',
           backgroundPosition: 'center',
           height: '800px'
         }">
            <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
                <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80"
                     height="80">
                    <use xlink:href="#alt-arrow-right-outline"></use>
                </svg>
            </div>
            <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
                <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80"
                     height="80">
                    <use xlink:href="#alt-arrow-left-outline"></use>
                </svg>
            </div>
            <div class="swiper main-swiper">
                <div class="swiper-wrapper d-flex align-items-center">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                    <div class="banner-content">
                                        <h2>The Fine Print Book Collection</h2>
                                        <p>Best Offer Save 30%. Grab it now!</p>
                                        <a href="index.html" class="btn mt-3">Shop Collection</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="image-holder">
                                        <img :src="baseUrl + '/frontend/images/banner-image2.png'" class="img-fluid"
                                             alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                    <div class="banner-content">
                                        <h2>How Innovation works</h2>
                                        <p>Discount available. Grab it now!</p>
                                        <a href="index.html" class="btn mt-3">Shop Product</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="image-holder">
                                        <img :src="baseUrl + '/frontend/images/banner-image1.png'" class="img-fluid"
                                             alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                                    <div class="banner-content">
                                        <h2>Your Heart is the Sea</h2>
                                        <p>Limited stocks available. Grab it now!</p>
                                        <a href="index.html" class="btn mt-3">Shop Collection</a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="image-holder">
                                        <img :src="baseUrl + '/frontend/images/banner-image.png'" class="img-fluid"
                                             alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="company-services" class="padding-large pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="cart-outline">
                                    <use xlink:href="#cart-outline"/>
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Free delivery</h4>
                                <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="quality">
                                    <use xlink:href="#quality"/>
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Quality guarantee</h4>
                                <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="price-tag">
                                    <use xlink:href="#price-tag"/>
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">Daily offers</h4>
                                <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
                        <div class="icon-box d-flex">
                            <div class="icon-box-icon pe-3 pb-3">
                                <svg class="shield-plus">
                                    <use xlink:href="#shield-plus"/>
                                </svg>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title mb-1 text-capitalize text-dark">100% secure payment</h4>
                                <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="best-selling-items" class="position-relative padding-large ">
            <div class="container">
                <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                    <h3 class="d-flex align-items-center">Best selling items</h3>
                    <a href="index.html" class="btn">View All</a>
                </div>
                <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
                    <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80"
                         height="80">
                        <use xlink:href="#alt-arrow-right-outline"></use>
                    </svg>
                </div>
                <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
                    <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80"
                         height="80">
                        <use xlink:href="#alt-arrow-left-outline"></use>
                    </svg>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <div class="position-absolute">
                                    <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
                                </div>
                                <img :src="baseUrl + '/frontend/images/product-item1.png'" class="img-fluid shadow-sm"
                                     alt="product item">
                                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">House of Sky Breath</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>
                                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="Tooltip on top">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </button>
                                    <a href="#" class="btn btn-dark">
                              <span>
                                <svg class="wishlist">
                                  <use xlink:href="#heart"></use>
                                </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <img :src="baseUrl + '/frontend/images/product-item2.png'" class="img-fluid shadow-sm"
                                     alt="product item">
                                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heartland Stars</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="Tooltip on top">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </button>
                                    <a href="#" class="btn btn-dark">
                              <span>
                                <svg class="wishlist">
                                  <use xlink:href="#heart"></use>
                                </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <img :src="baseUrl + '/frontend/images/product-item3.png'" class="img-fluid shadow-sm"
                                     alt="product item">
                                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heavenly Bodies</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="Tooltip on top">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </button>
                                    <a href="#" class="btn btn-dark">
                              <span>
                                <svg class="wishlist">
                                  <use xlink:href="#heart"></use>
                                </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <div class="position-absolute">
                                    <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
                                </div>
                                <img :src="baseUrl + '/frontend/images/product-item4.png'" class="img-fluid shadow-sm"
                                     alt="product item">
                                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">His Saving Grace</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="Tooltip on top">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </button>
                                    <a href="#" class="btn btn-dark">
                              <span>
                                <svg class="wishlist">
                                  <use xlink:href="#heart"></use>
                                </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <img :src="baseUrl + '/frontend/images/product-item5.png'" class="img-fluid shadow-sm"
                                     alt="product item">
                                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">My Dearest Darkest</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="Tooltip on top">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </button>
                                    <a href="#" class="btn btn-dark">
                              <span>
                                <svg class="wishlist">
                                  <use xlink:href="#heart"></use>
                                </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                <img :src="baseUrl + '/frontend/images/product-item6.png'" class="img-fluid shadow-sm"
                                     alt="product item">
                                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">The Story of Success</a></h6>
                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                    <div class="rating text-warning d-flex align-items-center">
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star star-fill">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>

                                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="Tooltip on top">
                                        <svg class="cart">
                                            <use xlink:href="#cart"></use>
                                        </svg>
                                    </button>
                                    <a href="#" class="btn btn-dark">
                              <span>
                                <svg class="wishlist">
                                  <use xlink:href="#heart"></use>
                                </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="limited-offer" class="padding-large"
                 :style="{
           backgroundImage: 'url(' + baseUrl + '/frontend/images/banner-image-bg-1.jpg)',
           backgroundSize: 'cover',
           backgroundRepeat: 'no-repeat',
           backgroundPosition: 'center',
           height: '800px'
        }">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 text-center">
                        <div class="image-holder">
                            <img :src="baseUrl + '/frontend/images/banner-image3.png'" class="img-fluid" alt="banner">
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                        <h2>30% Discount on all items. Hurry Up !!!</h2>
                        <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
                            <div class="time d-grid pe-3">
                                <span class="days fs-1 fw-normal"></span>
                                <small>Days</small>
                            </div>
                            <span class="fs-1 text-primary">:</span>
                            <div class="time d-grid pe-3 ps-3">
                                <span class="hours fs-1 fw-normal"></span>
                                <small>Hrs</small>
                            </div>
                            <span class="fs-1 text-primary">:</span>
                            <div class="time d-grid pe-3 ps-3">
                                <span class="minutes fs-1 fw-normal"></span>
                                <small>Min</small>
                            </div>
                            <span class="fs-1 text-primary">:</span>
                            <div class="time d-grid ps-3">
                                <span class="seconds fs-1 fw-normal"></span>
                                <small>Sec</small>
                            </div>
                        </div>
                        <a href="index.html" class="btn mt-3">Shop Collection</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="items-listing" class="padding-large">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="featured border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Featured</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item2.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Echoes of the Ancients</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item1.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">The Midnight Garden</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item3.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Shadow of the Serpent</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="latest-items border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Latest items</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item4.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Whispering Winds</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item5.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">The Forgotten Realm</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item6.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Moonlit Secrets</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="best-reviewed border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item7.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">The Crystal Key</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item8.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Starlight Sonata</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item9.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Tales of the Enchanted Forest</a>
                                        </h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="on-sale border rounded-3 p-4">
                            <div class="section-title overflow-hidden mb-5 mt-2">
                                <h3 class="d-flex flex-column mb-0">On sale</h3>
                            </div>
                            <div class="items-lists">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item10.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">The Phoenix Chronicles</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$1666</s>
                                $999</span>
                                    </div>
                                </div>
                                <hr class="gray-400">
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item11.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Dreams of Avalon</a></h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5"><s
                                                class="text-black-50">$500</s>
                                $410</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="item d-flex">
                                    <img :src="baseUrl + '/frontend/images/product-item12.png'"
                                         class="img-fluid shadow-sm" alt="product item">
                                    <div class="item-content ms-3">
                                        <h6 class="mb-0 fw-bold"><a href="index.html">Legends of the Dragon Isles</a>
                                        </h6>
                                        <div class="review-content d-flex">
                                            <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                                            <div class="rating text-warning d-flex align-items-center">
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                                <svg class="star star-fill">
                                                    <use xlink:href="#star-fill"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="price text-primary fw-bold mb-2 fs-5"><s
                                                class="text-black-50">$600</s>
                                $500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories" class="padding-large pt-0">
            <div class="container">
                <div class="section-title overflow-hidden mb-4">
                    <h3 class="d-flex align-items-center">Categories</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 border-0 rounded-3 position-relative">
                            <a href="index.html">
                                <img :src="baseUrl + '/frontend/images/category1.jpg'" class="img-fluid rounded-3"
                                     alt="cart item">
                                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a
                                        href="index.html"
                                        class="text-white">Romance</a></h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mb-4 border-0 rounded-3">
                            <a href="index.html">
                                <img :src="baseUrl + '/frontend/images/category2.jpg'" class="img-fluid rounded-3"
                                     alt="cart item">
                                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a
                                        href="index.html"
                                        class="text-white">Lifestyle</a></h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mb-4 border-0 rounded-3">
                            <a href="index.html">
                                <img :src="baseUrl + '/frontend/images/category3.jpg'" class="img-fluid rounded-3"
                                     alt="cart item">
                                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a
                                        href="index.html"
                                        class="text-white">Recipe</a></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="customers-reviews" class="position-relative padding-large"
                 :style="{
                        backgroundImage: 'url(' + baseUrl + '/frontend/images/banner-image-bg.jpg)',
                        backgroundSize: 'cover',
                        backgroundRepeat: 'no-repeat',
                        backgroundPosition: 'center',
                        height: '600px'
                     }">
            <div class="container offset-md-3 col-md-6 ">
                <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next testimonial-button-next">
                    <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80"
                         height="80">
                        <use xlink:href="#alt-arrow-right-outline"></use>
                    </svg>
                </div>
                <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev testimonial-button-prev">
                    <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80"
                         height="80">
                        <use xlink:href="#alt-arrow-left-outline"></use>
                    </svg>
                </div>
                <div class="section-title mb-4 text-center">
                    <h3 class="mb-4">Customers reviews</h3>
                </div>
                <div class="swiper testimonial-swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>"I stumbled upon this bookstore while visiting the city, and it instantly
                                    became my favorite spot. The cozy atmosphere, friendly staff, and wide selection of
                                    books make every visit a delight!"
                                </blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Emma Chamberlin</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>"As an avid reader, I'm always on the lookout for new releases, and this
                                    bookstore never disappoints. They always have the latest titles, and their
                                    recommendations have introduced me to some incredible reads!"
                                </blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Thomas John</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>"I ordered a few books online from this store, and I was impressed by the
                                    quick delivery and careful packaging. It's clear that they prioritize customer
                                    satisfaction, and I'll definitely be shopping here again!"
                                </blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Kevin Bryan</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>“I stumbled upon this tech store while searching for a new laptop, and I
                                    couldn't be happier
                                    with my experience! The staff was incredibly knowledgeable and guided me through the
                                    process of choosing
                                    the perfect device for my needs. Highly recommended!”
                                </blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Stevin</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card position-relative text-left p-5 border rounded-3">
                                <blockquote>“I stumbled upon this tech store while searching for a new laptop, and I
                                    couldn't be happier
                                    with my experience! The staff was incredibly knowledgeable and guided me through the
                                    process of choosing
                                    the perfect device for my needs. Highly recommended!”
                                </blockquote>
                                <div class="rating text-warning d-flex align-items-center">
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                </div>
                                <h5 class="mt-1 fw-normal">Roman</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="latest-posts" class="padding-large">
            <div class="container">
                <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
                    <h3 class="d-flex align-items-center">Latest posts</h3>
                    <a href="index.html" class="btn">View All</a>
                </div>
                <div class="row">
                    <div class="col-md-3 posts mb-4">
                        <img :src="baseUrl + '/frontend/images/post-item1.jpg'" alt="post image"
                             class="img-fluid rounded-3">
                        <a href="blog.html" class="fs-6 text-primary">Books</a>
                        <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">10 Must-Read Books of
                            the Year: Our Top Picks!</a></h4>
                        <p class="mb-2">Dive into the world of cutting-edge technology with our latest blog post, where
                            we highlight
                            five essential gadge. <span><a class="text-decoration-underline text-black-50"
                                                           href="index.html">Read More</a></span>
                        </p>
                    </div>
                    <div class="col-md-3 posts mb-4">
                        <img :src="baseUrl + '/frontend/images/post-item2.jpg'" alt="post image"
                             class="img-fluid rounded-3">
                        <a href="blog.html" class="fs-6 text-primary">Books</a>
                        <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">The Fascinating Realm
                            of Science Fiction</a></h4>
                        <p class="mb-2">Explore the intersection of technology and sustainability in our latest blog
                            post. Learn about
                            the innovative <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
                        </p>
                    </div>
                    <div class="col-md-3 posts mb-4">
                        <img :src="baseUrl + '/frontend/images/post-item3.jpg'" alt="post image"
                             class="img-fluid rounded-3">
                        <a href="blog.html" class="fs-6 text-primary">Books</a>
                        <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Finding Love in the
                            Pages of a Book</a></h4>
                        <p class="mb-2">Stay ahead of the curve with our insightful look into the rapidly evolving
                            landscape of
                            wearable technology. <span><a class="text-decoration-underline text-black-50"
                                                          href="index.html">Read More</a></span>
                        </p>
                    </div>
                    <div class="col-md-3 posts mb-4">
                        <img :src="baseUrl + '/frontend/images/post-item4.jpg'" alt="post image"
                             class="img-fluid rounded-3">
                        <a href="blog.html" class="fs-6 text-primary">Books</a>
                        <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Reading for Mental
                            Health: How Books Can Heal and Inspire</a></h4>
                        <p class="mb-2">In today's remote work environment, productivity is key. Discover the top apps
                            and tools that
                            can help you stay <span><a class="text-decoration-underline text-black-50"
                                                       href="index.html">Read More</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="instagram">
            <div class="container">
                <div class="text-center mb-4">
                    <h3>Instagram</h3>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <figure class="instagram-item position-relative rounded-3">
                            <a href="https://templatesjungle.com/" class="image-link position-relative">
                                <div class="icon-overlay position-absolute d-flex justify-content-center">
                                    <svg class="instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </div>
                                <img :src="baseUrl + '/frontend/images/insta-item1.jpg'" alt="instagram"
                                     class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="instagram-item position-relative rounded-3">
                            <a href="https://templatesjungle.com/" class="image-link position-relative">
                                <div class="icon-overlay position-absolute d-flex justify-content-center">
                                    <svg class="instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </div>
                                <img :src="baseUrl + '/frontend/images/insta-item2.jpg'" alt="instagram"
                                     class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="instagram-item position-relative rounded-3">
                            <a href="https://templatesjungle.com/" class="image-link position-relative">
                                <div class="icon-overlay position-absolute d-flex justify-content-center">
                                    <svg class="instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </div>
                                <img :src="baseUrl + '/frontend/images/insta-item3.jpg'" alt="instagram"
                                     class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="instagram-item position-relative rounded-3">
                            <a href="https://templatesjungle.com/" class="image-link position-relative">
                                <div class="icon-overlay position-absolute d-flex justify-content-center">
                                    <svg class="instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </div>
                                <img :src="baseUrl + '/frontend/images/insta-item4.jpg'" alt="instagram"
                                     class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="instagram-item position-relative rounded-3">
                            <a href="https://templatesjungle.com/" class="image-link position-relative">
                                <div class="icon-overlay position-absolute d-flex justify-content-center">
                                    <svg class="instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </div>
                                <img :src="baseUrl + '/frontend/images/insta-item5.jpg'" alt="instagram"
                                     class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-2">
                        <figure class="instagram-item position-relative rounded-3">
                            <a href="https://templatesjungle.com/" class="image-link position-relative">
                                <div class="icon-overlay position-absolute d-flex justify-content-center">
                                    <svg class="instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </div>
                                <img :src="baseUrl + '/frontend/images/insta-item6.jpg'" alt="instagram"
                                     class="img-fluid rounded-3 insta-image">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="padding-large">
            <div class="container">
                <div class="row">
                    <div class="footer-top-area">
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu">
                                    <img :src="baseUrl + '/frontend/images/main-logo.png'" alt="logo"
                                         class="img-fluid mb-2">
                                    <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa
                                        volutpat aenean odio
                                        erat nullam fringilla.</p>
                                    <div class="social-links">
                                        <ul class="d-flex list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <svg class="facebook">
                                                        <use xlink:href="#facebook"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="instagram">
                                                        <use xlink:href="#instagram"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="twitter">
                                                        <use xlink:href="#twitter"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="linkedin">
                                                        <use xlink:href="#linkedin"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="youtube">
                                                        <use xlink:href="#youtube"/>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 pb-3">
                                <div class="footer-menu text-capitalize">
                                    <h5 class="widget-title pb-2">Quick Links</h5>
                                    <ul class="menu-list list-unstyled text-capitalize">
                                        <li class="menu-item mb-1">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">About</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Shop</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Blogs</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu text-capitalize">
                                    <h5 class="widget-title pb-2">Help & Info Help</h5>
                                    <ul class="menu-list list-unstyled">
                                        <li class="menu-item mb-1">
                                            <a href="#">Track Your Order</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Returns Policies</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Shipping + Delivery</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Contact Us</a>
                                        </li>
                                        <li class="menu-item mb-1">
                                            <a href="#">Faqs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu contact-item">
                                    <h5 class="widget-title text-capitalize pb-2">Contact Us</h5>
                                    <p>Do you have any queries or suggestions? <a href="mailto:"
                                                                                  class="text-decoration-underline">yourinfo@gmail.com</a>
                                    </p>
                                    <p>If you need support? Just give us a call. <a href="#"
                                                                                    class="text-decoration-underline">+55
                                        111 222
                                        333 44</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <hr>
        <div id="footer-bottom" class="mb-2">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
                        <div class="shipping d-flex">
                            <p>We ship with:</p>
                            <div class="card-wrap ps-2">
                                <img :src="baseUrl + '/frontend/images/dhl.png'" alt="visa">
                                <img :src="baseUrl + '/frontend/images/shippingcard.png'" alt="mastercard">
                            </div>
                        </div>
                        <div class="payment-method d-flex">
                            <p>Payment options:</p>
                            <div class="card-wrap ps-2">
                                <img :src="baseUrl + '/frontend/images/visa.jpg'" alt="visa">
                                <img :src="baseUrl + '/frontend/images/mastercard.jpg'" alt="mastercard">
                                <img :src="baseUrl + '/frontend/images/paypal.jpg'" alt="paypal">
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© Copyright 2024 Bookly. HTML Template by <a href="https://templatesjungle.com/"
                                                                        target="_blank">TemplatesJungle</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HomeComponent"
    }
</script>

<style scoped>

</style>