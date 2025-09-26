                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('user_account'); ?>">User Account</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add User Account</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <!-- Basic -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Please fill out the form below</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="<?= base_url('user_account/save') ?>" method="post">

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
                                                <span class="input-group-text" id="basic-addon11">@</span>
                                                <input
                                                    type="text"
                                                    class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>"
                                                    placeholder="Username"
                                                    name="username"
                                                    aria-label="Username"
                                                    aria-describedby="basic-addon11" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('username') ?>
                                                </div>
                                            </div>

                                            <div class="form-password-toggle">
                                                <label class="form-label" for="basic-default-password12">Password</label>
                                                <div class="input-group">
                                                    <input
                                                        type="password"
                                                        class="form-control"
                                                        name="password"
                                                        id="basic-default-password12"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="basic-default-password2" />
                                                    <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                </div>
                                            </div>

                                            <div class="input-group mt-3 mb-3">
                                                <label class="form-label" for="address">Address</label>
                                                <div class="input-group">
                                                    <textarea name="address" id="address" class="form-control <?php echo form_error('address') ? 'is-invalid' : '' ?>" rows="3"></textarea>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('address') ?>
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

                                            <div class="input-group mt-3">
                                                <label class="form-label" for="access_role">Role Access</label>
                                                <div class="input-group">
                                                    <select name="user_role" id="access_role" class="form-control <?php echo form_error('user_role') ? 'is-invalid' : '' ?>">
                                                        <option selected disabled>Choose</option>
                                                        <option value="Administrator">Administrator</option>
                                                        <option value="Staf">Staf</option>
                                                        <option value="SPV">SPV</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('user_role') ?>
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