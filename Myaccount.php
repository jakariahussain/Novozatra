<?php include 'Inc/header.php' ?>
<!-- section-bredcurb -->
<section class="breadcurb-area d-flex justify-content-center align-items-center"
    data-background="images/banner/bg2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pb-0 section-heading text-center border-0 mb-1">
                    <h2 class="text-white">My Account</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- my-account -->
<section class="myAccount">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-start" id='personalAccount'>
                    <div class="nav justify-content-start flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Dashboard</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Order</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Address</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Account Details</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="account-dashboard">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="account-greeting">
                                            <h5 class='ac-info-title'>John Doe</h5>
                                            <p>From your account dashboard you can view your <a href="">recent
                                                    order</a>, manage your <a href="">Shipping and billing address</a>,
                                                and edit your password and account details </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 col-lg-4">
                                        <div class="single-account-list">
                                            <a href="">
                                                <span><i class="fa fa-user"></i></span>
                                                <h6>Orders</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 col-lg-4">
                                        <div class="single-account-list">
                                            <a href="">
                                                <span><i class="fa fa-user"></i></span>
                                                <h6>Address</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 col-lg-4">
                                        <div class="single-account-list">
                                            <a href="Myaccount.php#ac-info">
                                                <span><i class="fa fa-user"></i></span>
                                                <h6>Account Details</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 col-lg-4">
                                        <div class="single-account-list">
                                            <a href="">
                                                <span><i class="fa fa-user"></i></span>
                                                <h6>Logout</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="account-dashboard">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="account-greeting">
                                            <h5 class='ac-info-title'><span><i class="fa fa-user"></i></span> Order</h5>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-order-table mt-4 text-center">
                                            <table class='w-100 table table-bordered align-middle'>
                                                <thead>
                                                    <tr>
                                                        <th>order</th>
                                                        <th>Date</th>
                                                        <th>status</th>
                                                        <th>total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#20135</td>
                                                        <td>April 20, 2021</td>
                                                        <td>Processing</td>
                                                        <td>$121.00 for 1 item</td>
                                                        <td><a href="" class="btn btn-primary btn-custom">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#20135</td>
                                                        <td>April 20, 2021</td>
                                                        <td>Processing</td>
                                                        <td>$121.00 for 1 item</td>
                                                        <td><a href="" class="btn btn-primary btn-custom">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#20135</td>
                                                        <td>April 20, 2021</td>
                                                        <td>Processing</td>
                                                        <td>$121.00 for 1 item</td>
                                                        <td><a href="" class="btn btn-primary btn-custom">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#20135</td>
                                                        <td>April 20, 2021</td>
                                                        <td>Processing</td>
                                                        <td>$121.00 for 1 item</td>
                                                        <td><a href="" class="btn btn-primary btn-custom">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="account-greeting mb-3">
                                <h5 class='ac-info-title'>Billing Address</h5>
                                <p>The following addresses will be used on the checkout page by default.</p>
                            </div>
                            <div class="accounts-address">
                                <div class="billing-address d-flex w-100">
                                    <div class="billing-address-content w-100">
                                        <h3 class='ac-info-title'>Billing Address</h3>
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
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="account-info" id='ac-info'>
                                <h4 class='ac-info-title'><span><i class="fa fa-user"></i></span> Account Details</h4>
                                <form action="" class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="">First Name</label>
                                        <input type="text" name='' placeholder='John' class='form-control'>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" name='' placeholder='Doe' class='form-control'>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Display Name</label>
                                        <input type="text" name='' placeholder='John Doe' class='form-control'>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Email address</label>
                                        <input type="email" name='' placeholder='Enter Your Email' class='form-control'>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <h3 class='cng-ps'>Change Password</h3>
                                        <label for="">Current Password leave blank to leave unchanged</label>
                                        <input type="password" name='' placeholder='Current password'
                                            class='form-control'>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">New Password leave blank to leave unchanged</label>
                                        <input type="password" name='' placeholder='New Password' class='form-control'>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name='' placeholder='Confirm Password'
                                            class='form-control'>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <button type="submit" class='btn btn-primary btn-custom'>Save Change</button>
                                    </div>
                                </form>
                            </div>
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
                        <div class="col-md-9 col-lg-9 form-group">
                            <input type="text" class="form-control w-100" placeholder="Your E-mail Address" required>
                        </div>
                        <div class="col-md-3 col-lg-3 form-group">
                            <button class="btn btn-primary border-0 rounded">Subscribe →</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'Inc/footer.php' ?>