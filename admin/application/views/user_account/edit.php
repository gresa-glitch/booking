                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('user_account'); ?>">User Account</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User Account</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <!-- Basic -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Please fill out the form below</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="" method="post">

                                            <input type="hidden" name="id" value="<?= $userParsing->id ?>" />

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="fullname">Full Name</label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="fullname"
                                                        name="name"
                                                        placeholder="Full Name"
                                                        value="<?= $userParsing->name; ?>"
                                                        aria-describedby="full-name" required />
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon11">@</span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Username"
                                                    name="username"
                                                    aria-label="Username"
                                                    value="<?= $userParsing->username; ?>"
                                                    aria-describedby=" basic-addon11" required />
                                            </div>

                                            <div class="form-password-toggle">
                                                <label class="form-label" for="basic-default-password12">Password</label>
                                                <div class="input-group">
                                                    <input
                                                        type="password"
                                                        class="form-control"
                                                        name="password"
                                                        id="basic-default-password12"
                                                        value="<?= $userParsing->password; ?>"
                                                        placeholder=" &#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="basic-default-password2" required />
                                                    <span id="basic-default-password2" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                </div>
                                            </div>

                                            <div class="input-group mt-3 mb-3">
                                                <label class="form-label" for="address">Address</label>
                                                <div class="input-group">
                                                    <textarea name="address" id="address" class="form-control" rows="3" required><?= $userParsing->address; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="phone">Phone</label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="phone"
                                                        name="phone"
                                                        placeholder="Phone number"
                                                        value="<?= $userParsing->phone; ?>"
                                                        aria-describedby="phone number" required />
                                                </div>
                                            </div>

                                            <div class="input-group mt-3">
                                                <label class="form-label" for="access_role">Role Access</label>
                                                <div class="input-group">
                                                    <select name="user_role" id="access_role" class="form-control" required>
                                                        <option selected disabled>Choose</option>
                                                        <option value="Administrator">Administrator</option>
                                                        <option value="Staf">Staf</option>
                                                        <option value="SPV">SPV</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="input-group mt-3 mb-2">
                                                <button class="btn btn-primary btn-md" type="submit">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>