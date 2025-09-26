                    <div class="container-xxl flex-grow-1 container-p-y">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('booking'); ?>">Booking</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Booking</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <!-- Basic -->
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="" method="post">

                                            <input type="hidden" name="id" value="<?= $bookingParsing->id; ?>">

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="id_pakcage">Package Name</label>
                                                <div class="input-group">
                                                    <select name="id_pakcage" id="id_pakcage" class="form-control" required>
                                                        <option selected disabled>Choose</option>
                                                        <?php
                                                        foreach ($fetchPackage as $row) : ?>
                                                            <option value="<?= $row->id; ?>"><?= $row->item; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('id_pakcage') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="datebook">Booking Duration</label>
                                                <div class="input-group">
                                                    <input
                                                        type="number"
                                                        class="form-control <?php echo form_error('booking_duration') ? 'is-invalid' : '' ?>"
                                                        id="datebook"
                                                        name="booking_duration"
                                                        placeholder="Booking duration"
                                                        value="<?= $bookingParsing->booking_duration; ?>"
                                                        aria-describedby="booking_date" required />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('booking_duration') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="datebook">Booking Date</label>
                                                <div class="input-group">
                                                    <input
                                                        type="date"
                                                        class="form-control <?php echo form_error('booking_date') ? 'is-invalid' : '' ?>"
                                                        id="datebook"
                                                        name="booking_date"
                                                        placeholder="Booking date"
                                                        value="<?= $bookingParsing->booking_date; ?>"
                                                        aria-describedby="booking_date" required />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('booking_date') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="form-label" for="phototime">Photo Time</label>
                                                <div class="input-group">
                                                    <input
                                                        type="time"
                                                        class="form-control <?php echo form_error('photo_time') ? 'is-invalid' : '' ?>"
                                                        id="phototime"
                                                        name="photo_time"
                                                        placeholder="Photo time"
                                                        value="<?= $bookingParsing->photo_time; ?>"
                                                        aria-describedby="photo_time" required />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('photo_time') ?>
                                                    </div>
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