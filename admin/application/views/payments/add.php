                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('payment'); ?>">Booking</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Payments</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <!-- Basic -->
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <?php if (isset($error_upload)) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= $error_upload; ?>
                                            </div>
                                        <?php endif; ?>
                                        <form action="<?= base_url('payments/save') ?>" method="post" enctype="multipart/form-data">

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="datepayment">Payment Date</label>
                                                <div class="input-group">
                                                    <input
                                                        type="date"
                                                        class="form-control <?php echo form_error('payment_date') ? 'is-invalid' : '' ?>"
                                                        id="datepayment"
                                                        name="payment_date"
                                                        placeholder="Booking date"
                                                        aria-describedby="payment_date" required />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('payment_date') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="id_book">ID Booking</label>
                                                <div class="input-group">
                                                    <select name="booking_id" id="id_book" class="form-control" required>
                                                        <option selected disabled>Choose</option>
                                                        <?php
                                                        foreach ($fetchbooking as $row) : ?>
                                                            <option value="<?= $row->idbook; ?>" data-name="<?= $row->name; ?>" data-duration="<?= $row->booking_duration; ?>" data-package="<?= $row->item; ?>" data-price="<?= $row->price ?>"><?= $row->idbook; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('booking_id') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-4 mt-4 bg-primary p-3" id="col-detail-order">
                                                <label class="form-label text-white" for="detail_booking_order">Detail Booking Order</label>

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-white">Customer</th>
                                                            <th class="text-white">Package</th>
                                                            <th class="text-white">Duration</th>
                                                            <th class="text-white">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-white">
                                                            <td id="customer"></td>
                                                            <td id="package"></td>
                                                            <td id="duration"></td>
                                                            <td id="price"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="payment_total">Total Payment</label>
                                                <div class="input-group">
                                                    <input
                                                        type="text"
                                                        class="form-control bg-white <?php echo form_error('total_payment') ? 'is-invalid' : '' ?>"
                                                        id="payment_total"
                                                        name="total_payment"
                                                        aria-describedby="paymenttotal" required />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('total_payment') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="payment_rec">Payment Receipt</label>
                                                <div class="input-group">
                                                    <input type="file" id="payment_rec" name="payment_receipt" class="form-control" accept="image/*" required>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('payment_receipt') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="">Preview</label>
                                                <div class="input-group">
                                                    <img src="" alt="" id="file_reload" class="form-control" style="max-width: 100%;">
                                                </div>
                                            </div>

                                            <div class="input-group mt-3 mb-2">
                                                <button class="btn btn-primary btn-md" type="submit">Pay now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>