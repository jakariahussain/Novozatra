<?php include 'Inc/header.php' ?>
<!-- Cart-breadcurb -->
<section class="cart-breadcurb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="cart.php">Shopping Cart</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="checkout.php">Checkout</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="order.php">Order Complete</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- order-success -->
<section class="order-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="order-success-wrapp text-center p-5 border rounded">
                    <div class="order-success-content">
                        <h3 class='fw-bold'> <span><i class="fas fa-check"></i></span> Thank you. Your order has been
                            received.</h3>
                    </div>
                </div>
                <div class="order-view-status">
                    <ul class='d-flex justify-content-between align-items-center'>
                        <li>Order number <strong>945</strong></li>
                        <li>Status <strong>On hold</strong></li>
                        <li>Date<strong>April 27, 2021 </strong></li>
                        <li>Total <strong>$10.945</strong></li>
                        <li>Payment Methods<strong>Direct Bank Transfor</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- order-details-area -->
<section class="order-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="order-details-wrapp">
                    <h3 class='cart-title fw-bold text-uppercase'>Order Details</h3>
                    <div class="order-details-content border rounded p-4 mt-3 mb-3">
                        <h4 class='heading-title border-bottom pb-3'>product</h4>
                        <ul>
                            <li>Palm Print Jacket x 1 <span>$40.00</span></li>
                            <li>Brown Backpack x 1 <span>$60.00</span></li>
                        </ul>
                        <div class="order-details-lists">
                            <h4>Subtotal: <span>$100.00</span></h4>
                            <h4>Shipping: <span>Flat rate</span></h4>
                            <h4>Payment method: <span>Direct bank transfor</span></h4>
                            <h4>Total: <span>$100.00</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- sub-order-section -->
<section class="sub-order-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sub-order-wrapp">
                    <h4 class='heading-title'>sub order</h4>
                    <div class="sub-order-alert rounded p-4">
                        <i class="fa fa-exclamation"></i>
                        <strong>Note: </strong>
                        This order has products from multiple vendors. So we divided this order into multiple vendor
                        orders. Each order will be handled by their respective vendor independently.
                    </div>
                    <div class="sub-orderTable">
                        <table class="subOrder-table w-100 table-responsive">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>950</td>
                                    <td>April 27,2021</td>
                                    <td>On hold </td>
                                    <td>$40.00 for 1 items</td>
                                    <td><a href="" class="btn btn-primary btn-custom">View</a></td>
                                </tr>
                                <tr>
                                    <td>950</td>
                                    <td>April 27,2021</td>
                                    <td>On hold </td>
                                    <td>$40.00 for 1 items</td>
                                    <td><a href="" class="btn btn-primary btn-custom">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="billing-address d-flex">
                        <div class="billing-address-content w-100">
                            <h3>Billing Address</h3>
                            <ul>
                                <li>John Doe</li>
                                <li>Conia</li>
                                <li>Wall Street</li>
                                <li>California</li>
                                <li>United States (US)</li>
                                <li>92020</li>
                                <li>1112223334</li>
                                <li>nicework125@gmail.com</li>
                            </ul>
                        </div>
                        <div class="billing-address-content w-100">
                            <h3>Shipping Address</h3>
                            <ul>
                                <li>John Doe</li>
                                <li>Conia</li>
                                <li>Wall Street</li>
                                <li>California</li>
                                <li>United States (US)</li>
                                <li>92020</li>
                                <li>1112223334</li>
                                <li>nicework125@gmail.com</li>
                            </ul>
                        </div>
                    </div>
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