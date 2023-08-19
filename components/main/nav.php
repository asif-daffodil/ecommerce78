<?php
$pagename = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>


<header class="header header-14">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div>

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul class="menus">
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">Eur</a></li>
                                            <li><a href="#">Usd</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">Engligh</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <?php if (!isset($_SESSION['user'])) { ?>
                                <li class="login">
                                    <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#"><?= $_SESSION['user']['first_name'] ?></a>
                                        <div class="header-menu">
                                            <style>
                                                .active {
                                                    color: #fcb941 !important;
                                                }
                                            </style>
                                            <ul>
                                                <li><a class="<?= $pagename == "profileUpdate" ? "active" : null ?>" href="./profileUpdate">Profile Update</a></li>
                                                <li><a class="<?= $pagename == "changePass" ? "active" : null ?>" href="./changePass">Change Password</a></li>
                                                <li><a class="<?= $pagename == "orderstatus" ? "active" : null ?>" href="#">Order Status</a></li>
                                                <?php if ($_SESSION['user']['role'] == "admin") { ?>
                                                    <li><a href="./admin">Admin</a></li>
                                                <?php } ?>
                                                <li><a href="./logout">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                    <a href="./" class="logo">
                        <img src="assets/images/demos/demo-14/logo.png" alt="Molla Logo" width="105" height="25">
                    </a>
                </div>

                <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                    <div class="row">
                        <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                            <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">

                                        <div class="select-custom">
                                            <select id="cat" name="cat">
                                                <option value="">All Departments</option>
                                                <option value="1">Fashion</option>
                                                <option value="2">- Women</option>
                                                <option value="3">- Men</option>
                                                <option value="4">- Jewellery</option>
                                                <option value="5">- Kids Fashion</option>
                                                <option value="6">Electronics</option>
                                                <option value="7">- Smart TVs</option>
                                                <option value="8">- Cameras</option>
                                                <option value="9">- Games</option>
                                                <option value="10">Home &amp; Garden</option>
                                                <option value="11">Motors</option>
                                                <option value="12">- Cars and Trucks</option>
                                                <option value="15">- Boats</option>
                                                <option value="16">- Auto Tools &amp; Supplies</option>
                                            </select>
                                        </div>
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>

                                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                            <div class="header-dropdown-link">
                                <div class="dropdown compare-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                        <i class="icon-random"></i>
                                        <span class="compare-txt">Compare</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="compare-products">
                                            <li class="compare-product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                            </li>
                                            <li class="compare-product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                            </li>
                                        </ul>

                                        <div class="compare-actions">
                                            <a href="#" class="action-link">Clear All</a>
                                            <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <a href="wishlist" class="wishlist-link">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count">3</span>
                                    <span class="wishlist-txt">Wishlist</span>
                                </a>

                                <div class="dropdown cart-dropdown">
                                    <a href="cart" class="dropdown-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-count" id="cartCount">0</span>
                                        <span class="cart-txt">Cart</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-cart-products" id="dcp">

                                        </div>

                                        <div class="dropdown-cart-total">
                                            <span>Total</span>

                                            <span class="cart-total-price">0</span>
                                        </div>

                                        <div class="dropdown-cart-action">
                                            <a href="cart" class="btn btn-primary">View Cart</a>
                                            <a href="checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const cartFunc = () => {
            const cartCount = document.getElementById("cartCount");
            const dProCart = document.getElementById("dcp");
            dProCart.innerHTML = null;
            const cartTotalPrice = document.querySelectorAll(".cart-total-price")[0];
            let proCount = 0;
            let totalPrice = 0;
            let sessionData;
            if (sessionStorage.getItem("cartInfo")) {
                sessionData = JSON.parse(sessionStorage.getItem("cartInfo"));
                sessionData.map(proData => {
                    proCount += +proData.proCount;
                    totalPrice += (proData.proPrice * proData.proCount);
                    const div = document.createElement("div");
                    div.classList.add("product");
                    div.innerHTML = `
                <div class="product-cart-details">
                    <h4 class="product-title">
                        <a href="product.php">
                        ${proData.proTitle}
                        </a>
                    </h4>

                    <span class="cart-product-info">
                        <span class="cart-product-qty">
                        ${proData.proCount}
                        </span>
                        x $${proData.proPrice}
                    </span>
                </div>
                <figure class="product-image-container">
                        <a href="product.php" class="product-image">
                            <img src="${proData.proImg}" alt="product">
                        </a>
                </figure>
                <button class="btn-remove" title="Remove Product"><i class="icon-close" onclick="delCartItem(${proData.proId})"></i></button>
            `;
                    dProCart.appendChild(div);
                });
                cartCount.textContent = proCount;
                cartTotalPrice.textContent = `$${totalPrice}`;
            } else {
                cartCount.textContent = proCount;
                cartTotalPrice.textContent = `$${totalPrice}`;
            }
        }

        cartFunc();

        const delCartItem = (proId) => {
            let sessionData;
            sessionData = JSON.parse(sessionStorage.getItem("cartInfo"));
            let newSesData = sessionData.filter(proData => proData.proId != proId);
            let cartObj = JSON.stringify(newSesData);
            sessionStorage.setItem("cartInfo", cartObj);
            cartFunc();
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Product has been deleted',
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>

    <div class="header-bottom sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
                    <div class="dropdown category-dropdown show is-on" data-visible="true">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                            Browse Categories
                        </a>

                        <div class="dropdown-menu show">
                            <nav class="side-nav">
                                <ul class="menu-vertical sf-arrows">
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i class="icon-laptop"></i>Electronics</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Laptops & Computers</div>
                                                                <ul>
                                                                    <li><a href="#">Desktop Computers</a></li>
                                                                    <li><a href="#">Monitors</a></li>
                                                                    <li><a href="#">Laptops</a></li>
                                                                    <li><a href="#">iPad & Tablets</a></li>
                                                                    <li><a href="#">Hard Drives & Storage</a></li>
                                                                    <li><a href="#">Printers & Supplies</a></li>
                                                                    <li><a href="#">Computer Accessories</a></li>
                                                                </ul>

                                                                <div class="menu-title">TV & Video</div>
                                                                <ul>
                                                                    <li><a href="#">TVs</a></li>
                                                                    <li><a href="#">Home Audio Speakers</a></li>
                                                                    <li><a href="#">Projectors</a></li>
                                                                    <li><a href="#">Media Streaming Devices</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Cell Phones</div>
                                                                <ul>
                                                                    <li><a href="#">Carrier Phones</a></li>
                                                                    <li><a href="#">Unlocked Phones</a></li>
                                                                    <li><a href="#">Phone & Cellphone Cases</a></li>
                                                                    <li><a href="#">Cellphone Chargers </a></li>
                                                                </ul>

                                                                <div class="menu-title">Digital Cameras</div>
                                                                <ul>
                                                                    <li><a href="#">Digital SLR Cameras</a></li>
                                                                    <li><a href="#">Sports & Action Cameras</a></li>
                                                                    <li><a href="#">Camcorders</a></li>
                                                                    <li><a href="#">Camera Lenses</a></li>
                                                                    <li><a href="#">Photo Printer</a></li>
                                                                    <li><a href="#">Digital Memory Cards</a></li>
                                                                    <li><a href="#">Camera Bags, Backpacks & Cases</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category" class="banner banner-menu">
                                                            <img src="assets/images/demos/demo-13/menu/banner-1.jpg" alt="Banner">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i class="icon-couch"></i>Furniture</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Bedroom</div>
                                                                <ul>
                                                                    <li><a href="#">Beds, Frames & Bases</a></li>
                                                                    <li><a href="#">Dressers</a></li>
                                                                    <li><a href="#">Nightstands</a></li>
                                                                    <li><a href="#">Kids' Beds & Headboards</a></li>
                                                                    <li><a href="#">Armoires</a></li>
                                                                </ul>

                                                                <div class="menu-title">Living Room</div>
                                                                <ul>
                                                                    <li><a href="#">Coffee Tables</a></li>
                                                                    <li><a href="#">Chairs</a></li>
                                                                    <li><a href="#">Tables</a></li>
                                                                    <li><a href="#">Futons & Sofa Beds</a></li>
                                                                    <li><a href="#">Cabinets & Chests</a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Office</div>
                                                                <ul>
                                                                    <li><a href="#">Office Chairs</a></li>
                                                                    <li><a href="#">Desks</a></li>
                                                                    <li><a href="#">Bookcases</a></li>
                                                                    <li><a href="#">File Cabinets</a></li>
                                                                    <li><a href="#">Breakroom Tables</a></li>
                                                                </ul>

                                                                <div class="menu-title">Kitchen & Dining</div>
                                                                <ul>
                                                                    <li><a href="#">Dining Sets</a></li>
                                                                    <li><a href="#">Kitchen Storage Cabinets</a></li>
                                                                    <li><a href="#">Bakers Racks</a></li>
                                                                    <li><a href="#">Dining Chairs</a></li>
                                                                    <li><a href="#">Dining Room Tables</a></li>
                                                                    <li><a href="#">Bar Stools</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category" class="banner banner-menu">
                                                            <img src="assets/images/demos/demo-13/menu/banner-2.jpg" alt="Banner">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i class="icon-concierge-bell"></i>Cooking</a>

                                        <div class="megamenu">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="menu-title">Cookware</div>
                                                        <ul>
                                                            <li><a href="#">Cookware Sets</a></li>
                                                            <li><a href="#">Pans, Griddles & Woks</a></li>
                                                            <li><a href="#">Pots</a></li>
                                                            <li><a href="#">Skillets & Grill Pans</a></li>
                                                            <li><a href="#">Kettles</a></li>
                                                            <li><a href="#">Soup & Stockpots</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="menu-title">Dinnerware & Tabletop</div>
                                                        <ul>
                                                            <li><a href="#">Plates</a></li>
                                                            <li><a href="#">Cups & Mugs</a></li>
                                                            <li><a href="#">Trays & Platters</a></li>
                                                            <li><a href="#">Coffee & Tea Serving</a></li>
                                                            <li><a href="#">Salt & Pepper Shaker</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="menu-title">Cooking Appliances</div>
                                                        <ul>
                                                            <li><a href="#">Microwaves</a></li>
                                                            <li><a href="#">Coffee Makers</a></li>
                                                            <li><a href="#">Mixers & Attachments</a></li>
                                                            <li><a href="#">Slow Cookers</a></li>
                                                            <li><a href="#">Air Fryers</a></li>
                                                            <li><a href="#">Toasters & Ovens</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row menu-banners">
                                                    <div class="col-md-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="assets/images/demos/demo-13/menu/1.jpg" alt="image">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="assets/images/demos/demo-13/menu/2.jpg" alt="image">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="assets/images/demos/demo-13/menu/3.jpg" alt="image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i class="icon-tshirt"></i>Clothing</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Women</div>
                                                                <ul>
                                                                    <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                    <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                    <li><a href="#"><strong>Trending</strong></a></li>
                                                                    <li><a href="#">Clothing</a></li>
                                                                    <li><a href="#">Shoes</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                                    <li><a href="#"><strong>Sale</strong></a></li>
                                                                </ul>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Men</div>
                                                                <ul>
                                                                    <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                    <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                    <li><a href="#"><strong>Trending</strong></a></li>
                                                                    <li><a href="#">Clothing</a></li>
                                                                    <li><a href="#">Shoes</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html" class="banner banner-menu">
                                                            <img src="assets/images/demos/demo-13/menu/banner-3.jpg" alt="Banner">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li><a href="#"><i class="icon-blender"></i>Home Appliances</a></li>
                                    <li><a href="#"><i class="icon-heartbeat"></i>Healthy & Beauty</a></li>
                                    <li><a href="#"><i class="icon-shoe-prints"></i>Shoes & Boots</a></li>
                                    <li><a href="#"><i class="icon-map-signs"></i>Travel & Outdoor</a></li>
                                    <li><a href="#"><i class="icon-mobile-alt"></i>Smart Phones</a></li>
                                    <li><a href="#"><i class="icon-tv"></i>TV & Audio</a></li>
                                    <li><a href="#"><i class="icon-shopping-bag"></i>Backpack & Bag</a></li>
                                    <li><a href="#"><i class="icon-music"></i>Musical Instruments</a></li>
                                    <li><a href="#"><i class="icon-gift"></i>Gift Ideas</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="<?= $pagename == "index" ? "active" : null ?>">
                                <a href="./" style="padding-left: 11px;">Home</a>
                            </li>
                            <li class="<?= $pagename == "category" ? "active" : null ?>">
                                <a href="category" style="padding-left: 11px;">Shop</a>
                            </li>
                            <li class="<?= $pagename == "blog-listing" ? "active" : null ?>">
                                <a href="blog-listing" style="padding-left: 11px;">Blogs</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                    <i class="la la-lightbulb-o"></i>
                    <p>Clearance Up to 30% Off</span></p>
                </div>
            </div>
        </div>
    </div>
</header>