                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Summary</h5>
                                                <hr>
                                                <div class="row mt-5 mb-1">
                                                    <hr style="transform: rotate(90deg);margin: 0;width: 120px;position:absolute;left:110px;top:140px">
                                                    <div class="col-sm-2">
                                                        <h4><?= $sumTransaction !== null ?  "Rp" . number_format($sumTransaction) : 0; ?></h4>
                                                        <p class="text-primary">Total Volume</p>
                                                        <p style="margin-top: -20px;"><small><i>Month to Date</i></small></p>
                                                    </div>
                                                    <div class="col-sm">
                                                        <h4 class="text-left"><?= $qtyTransaction; ?></h4>
                                                        <p class="text-primary">Total Transaction</p>
                                                        <p style="margin-top: -20px;"><small><i>Month to Date</i></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <h5 class="card-header">
                                        Current Booking <span class="text-primary">Offline</span>
                                    </h5>
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Booking ID</th>
                                                                <th>Package Name</th>
                                                                <th>Customer Name</th>
                                                                <th>Total</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0">
                                                            <?php
                                                            foreach ($fetchbooking as $row) : ?>
                                                                <tr>
                                                                    <td><?= date('d-m-Y', strtotime($row->booking_date)); ?></td>
                                                                    <td><?= $row->idbook; ?></td>
                                                                    <td><?= $row->item; ?></td>
                                                                    <td><?= $row->name; ?></td>
                                                                    <td><?php
                                                                        if ($row->total_payment !== null) {
                                                                            echo "Rp" . number_format($row->total_payment);
                                                                        } else {
                                                                            echo 'Rp0'; // Or handle the null case as appropriate
                                                                        }
                                                                        ?></td>
                                                                    <td>
                                                                        <?php
                                                                        if ($row->booking_status == "Waiting") { ?>
                                                                            <div class="alert-danger rounded-pill text-center pt-1 pb-1" style="width: 115px;">
                                                                                <i class='bx  bx-radio-circle-marked'></i> <?= $row->booking_status; ?>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="alert-success rounded-pill text-center pt-1 pb-1" style="width: 115px;">
                                                                                <i class='bx  bx-radio-circle-marked'></i> Settlement
                                                                            </div>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <h5 class="card-header">
                                        Current Booking <span class="text-success">Online</span>
                                    </h5>
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Booking ID</th>
                                                                <th>Package Name</th>
                                                                <th>Customer Name</th>
                                                                <th>Total</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0">
                                                            <?php
                                                            foreach ($fetchbookingOnline as $row) : ?>
                                                                <tr>
                                                                    <td><?= date('d-m-Y', strtotime($row->booking_date)); ?></td>
                                                                    <td><?= $row->idbook; ?></td>
                                                                    <td><?= $row->item; ?></td>
                                                                    <td><?= $row->name; ?></td>
                                                                    <td><?php
                                                                        if ($row->total_payment !== null) {
                                                                            echo "Rp" . number_format($row->total_payment);
                                                                        } else {
                                                                            echo 'N/A'; // Or handle the null case as appropriate
                                                                        }
                                                                        ?></td>
                                                                    <td>
                                                                        <?php
                                                                        if ($row->booking_status == "Waiting") { ?>
                                                                            <div class="alert-danger rounded-pill text-center pt-1 pb-1" style="width: 115px;">
                                                                                <i class='bx  bx-radio-circle-marked'></i> <?= $row->booking_status; ?>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="alert-success rounded-pill text-center pt-1 pb-1" style="width: 115px;">
                                                                                <i class='bx  bx-radio-circle-marked'></i> Settlement
                                                                            </div>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>