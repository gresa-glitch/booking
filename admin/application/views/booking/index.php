                    <div class="container-xxl flex-grow-1 container-p-y">

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Booking</li>
                            </ol>
                        </nav>

                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-primary" role="alert">
                                    <?= $this->session->flashdata('success') ?>
                                </div>
                            <?php else: echo ''; ?>
                            <?php endif ?>
                            <h5 class="card-header">
                                <a class="btn btn-sm btn-primary" href="<?= base_url('booking/add') ?>">Add Booking</a>
                            </h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Booking ID</th>
                                            <th>Booking Date</th>
                                            <th>Package Name</th>
                                            <th>Customer Name</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php $num = 1;
                                        foreach ($fetchbooking as $row) : ?>
                                            <tr>
                                                <td><?= $num++; ?></td>
                                                <td><?= $row->idbook; ?></td>
                                                <td><?= date('d-m-Y', strtotime($row->booking_date)); ?></td>
                                                <td><?= $row->item; ?></td>
                                                <td><?= $row->name; ?></td>
                                                <td>
                                                    <?php
                                                    if ($row->total_payment !== null) {
                                                        echo "Rp" . number_format($row->total_payment);
                                                    } else {
                                                        echo 'Rp0'; // Or handle the null case as appropriate
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($row->booking_status === "Settlement") { ?>
                                                        <a href="<?= base_url('home'); ?>">Detail Order</a>
                                                    <?php } else { ?>
                                                        <a class="text-primary" href="<?= base_url('booking/edit/' . $row->idbook) ?>"><i class='bx  bx-pencil'></i></a>
                                                        &nbsp;
                                                        <a class="text-danger" href="<?= base_url('booking/delete/' . $row->idbook) ?>"><i class='bx  bx-trash'></i></a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Basic Bootstrap Table -->
                    </div>
                    <!-- / Content -->