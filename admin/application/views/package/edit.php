                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('package'); ?>">Package</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Package</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <!-- Basic -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Please fill out the form below</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="" method="post">

                                            <input type="hidden" name="id" value="<?= $packageParsing->id; ?>">

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="items">Item</label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control <?php echo form_error('item') ? 'is-invalid' : '' ?>"
                                                        id="items"
                                                        name="item"
                                                        value="<?= $packageParsing->item; ?>"
                                                        placeholder="Item package"
                                                        aria-describedby="item-package" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('item') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="price_all">Price</label>
                                                <div class="input-group">
                                                    <input
                                                        type="number"
                                                        class="form-control <?php echo form_error('price') ? 'is-invalid' : '' ?>"
                                                        id="price_all"
                                                        name="price"
                                                        value="<?= $packageParsing->price; ?>"
                                                        placeholder="Price/item"
                                                        aria-describedby="price" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('price') ?>
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