<?php include 'Inc/header.php' ?>

<!-- Cart-breadcurb -->
<section class="cart-breadcurb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item active"><a href="cart.php">Shopping Cart</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="checkout.php">Checkout</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="order.php">Order Complete</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Cart-area  -->
<section class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-wrapp">
                    <div class="cart-shop-table  d-flex align-items-center">
                        <table class="table align-middle w-100">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody class='text-center' id='shop-table-cart'>
                                <tr>
                                    <th>
                                        <div class="shopping-cart-wrapp mb-0 d-flex align-items-center">
                                            <div class="shopping-cart-removed pr-3"
                                                data-background="images/banner/bg1.jpg">
                                                <span class="primary-shadow">x</span>
                                            </div>
                                            <a href="">Classic simple backpack</a>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="cart-pricing-table d-flex align-items-center">
                                            <h4>$40.00</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="quantity-wrapp">
                                            <div
                                                class="quantity-count w-auto d-flex align-items-center justify-content-between">
                                                <div id="deIncrement"><button>-</button></div>
                                                <div id="counting">1</div>
                                                <div id="Increment"><button>+</button></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$40.00</td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="shopping-cart-wrapp mb-0 d-flex align-items-center">
                                            <div class="shopping-cart-removed pr-3"
                                                data-background="images/banner/bg1.jpg">
                                                <span class="primary-shadow">x</span>
                                            </div>
                                            <a href="">Classic simple backpack</a>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="cart-pricing-table d-flex align-items-center">
                                            <h4>$40.00</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="quantity-wrapp">
                                            <div
                                                class="quantity-count w-auto d-flex align-items-center justify-content-between">
                                                <div id="deIncrement"><button>-</button></div>
                                                <div id="counting">1</div>
                                                <div id="Increment"><button>+</button></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$40.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cart-cost border-0 mt-0 d-flex justify-content-between" id='cart-shopping-view'>
                        <div class="cart-action mt-0 d-flex">
                            <a href="cart.php" class="btn btn-primary btn-custom bg-dark text-white"> <i
                                    class="fa fa-arrow-left"></i> Continue shoppin</a>
                        </div>
                        <div class="cart-action mt-0 d-flex">
                            <a href="cart.php" class="btn btn-primary btn-custom">Clear Cart</a>
                            <a href="" class="btn btn-primary btn-custom disabled">Update Cart</a>
                        </div>
                    </div>
                    <div class="discount-cupon-cart">
                        <form class="coupon">
                            <h5 class="title coupon-title font-weight-bold text-uppercase">Coupon Discount</h5>
                            <input type="text" class="form-control mb-4" placeholder="Enter coupon code here..."
                                required="">
                            <button class="btn btn-primary btn-custom btn-rounded">Apply Coupon</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-total-summary border rounded p-3">
                    <h3 class='cart-title'>Cart totals</h3>
                    <div class="cart-subtotal d-flex justify-content-between align-items-center">
                        <h6>Subtotal</h6>
                        <h6>$80.00</h6>
                    </div>
                    <div class="cart-shipping-methods">
                        <h3 class="cart-title">shipping</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Fresh shipping
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Local Pickup
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Flat rate: $5.00
                            </label>
                        </div>
                    </div>
                    <p class='shipping-destination'> shipping to <strong>CA</strong></p>
                    <div class="shipping-calculators-form">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <select id="" class="form-control w-100">
                                    <option value="">United State</option>
                                    <option value="">United Kingdom</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <select id="" class="form-control w-100">
                                    <option value="">Calfornia</option>
                                    <option value="">Manchester</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="" placeholder='Town / city'>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="" placeholder='ZIP'>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-custom">Update Totals</button>
                            </div>
                        </form>
                    </div>
                    <div class="order-total d-flex justify-content-between align-items-center">
                        <label>Total</label>
                        <span class="ls-50">$100.00</span>
                    </div>
                    <a href="checkout.php"
                        class="btn btn-primary btn-custom bg-dark d-grid text-white proceedCheckOut">Proceed to
                        checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- subscibe-area -->
<section class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="subscribe-wrapp d-flex align-items-center">
                    <div class="subscribe-thumb">
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="subscribe-content">
                        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                        <article>
                            <p>Get all the latest information on Events, Sales and Offers. </p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="subscribe-form">
                    <form action="" class="row">
                        <div class="col-lg-9 form-group">
                            <input type="text" class="form-control w-100" placeholder="Your E-mail Address" required>
                        </div>
                        <div class="col-lg-3 form-group">
                            <button class="btn btn-primary border-0 rounded">Subscribe →</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'Inc/footer.php' ?>