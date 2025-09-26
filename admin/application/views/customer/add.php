                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('customer'); ?>">Customer</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Customer</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <!-- Basic -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Please fill out the form below</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="<?= base_url('customer/save') ?>" method="post">

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="fullname">Full Name</label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>"
                                                        id="fullname"
                                                        name="name"
                                                        placeholder="Full Name"
                                                        aria-describedby="full-name" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('name') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="emailaddress">Email</label>
                                                <div class="input-group">
                                                    <input
                                                        type="email"
                                                        class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>"
                                                        id="emailaddress"
                                                        name="email"
                                                        placeholder="Email address"
                                                        aria-describedby="email" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('email') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="phone">Phone</label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control <?php echo form_error('phone') ? 'is-invalid' : '' ?>"
                                                        id="phone"
                                                        name="phone"
                                                        placeholder="Phone number"
                                                        aria-describedby="phone number" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('phone') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mt-3 mb-2">
                                                <button class="btn btn-primary btn-md" type="submit">Save</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>