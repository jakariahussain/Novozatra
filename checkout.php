<?php include 'Inc/header.php' ?>

<!-- Cart-breadcurb -->
<section class="cart-breadcurb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="cart.php">Shopping Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="checkout.php">Checkout</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="order.php">Order Complete</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- checkout-area -->
<section class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-place-order">
                    <h4 class='cart-title'>BILLING DETAILS</h4>
                    <div class="checkout-form">
                        <form class="row g-3">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Country / Region *</label>
                                        <select id="" class="form-control w-100">
                                            <option value="">Australia</option>
                                            <option value="">France</option>
                                            <option value="">United Kingdom</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Street address *</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder='House Number or street home'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Town / City *</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">State *</label>
                                        <select id="" class="form-control w-100">
                                            <option value="">Australia</option>
                                            <option value="">France</option>
                                            <option value="">United Kingdom</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">ZIP</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Company Name (optional)</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="shipp-diffrent-address">
                                            <input type='checkbox' class="btn btn-primary" data-bs-toggle="collapse"
                                                href="#collapseExample" role="button" aria-expanded="false"
                                                aria-controls="collapseExample" /> Ship to a different address?
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body border-0">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="" class="form-label">Country / Region *</label>
                                                            <select id="" class="form-control w-100">
                                                                <option value="">Australia</option>
                                                                <option value="">France</option>
                                                                <option value="">United Kingdom</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="" class="form-label">Street address *</label>
                                                            <input type="text" class="form-control" id=""
                                                                placeholder='House Number or street home'>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">Town / City *</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">State *</label>
                                                            <select id="" class="form-control w-100">
                                                                <option value="">Australia</option>
                                                                <option value="">France</option>
                                                                <option value="">United Kingdom</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">ZIP</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="" class="form-label">Phone Number</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="" class="form-label">Company Name
                                                                (optional)</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <label for="" class="form-label">Order notes (optional)</label>
                                        <textarea name="" id="" placeholder='Notes about your order'
                                            class='form-control w-100'></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="col-12">
                                    <div class="order-summary-wrapp  border rounded p-3 mb-3">
                                        <h3 class='cart-title'>YOUR ORDER</h3>
                                        <div class="order-summary">
                                            <h5>Product</h5>
                                            <ul>
                                                <li>Palm Print Jacket x 1 <span>$40.00</span></li>
                                                <li>Palm Print Jacket x 1 <span>$40.00</span></li>
                                            </ul>
                                            <h5 class="cart-subtotal-summary">Subtotal <span>$100.00</span></h5>
                                        </div>
                                        <div class="payment-methods">
                                            <h5 class='cart-title'>Payment Methods</h5>
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Direct Bank Transfor
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <article>
                                                                <p>Make your payment directly into our bank account.
                                                                    Please use your Order ID as the payment reference.
                                                                    Your order will not be shipped until the funds have
                                                                    cleared in our account.</p>
                                                            </article>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Check-Payment
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <article>
                                                                <p>Please send a check to Store Name, Store Street,
                                                                    Store Town, Store State / County, Store Postcode.
                                                                </p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Cash on delivery
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <article>
                                                                <p>Pay with cash upon delivery.</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-custom ml-3">Place Order</button>
                                </div>
                            </div>
                        </form>
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