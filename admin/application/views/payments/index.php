                    <div class="container-xxl flex-grow-1 container-p-y">

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payments</li>
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
                                <a class="btn btn-sm btn-primary" href="<?= base_url('payments/add') ?>">Add Payments</a>
                            </h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Payment Date</th>
                                            <th>Total Payment</th>
                                            <th>Payment Receipt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php $num = 1;
                                        foreach ($fetchpayment as $row) : ?>
                                            <tr>
                                                <td><?= $num++; ?></td>
                                                <td><?= $row->payment_date  == null ? "Waiting" : date('d-m-Y', strtotime($row->payment_date)); ?></td>
                                                <td><?= "Rp " . number_format($row->total_payment); ?></td>
                                                <td>
                                                    <img src="<?= base_url('upload/payments/' . $row->payment_receipt); ?>" alt="<?= $row->payment_receipt; ?>" width="100px">
                                                </td>
                                                <td>
                                                    <a class="text-danger" href="<?= base_url('payments/delete/' . $row->idpay) ?>"><i class='bx  bx-trash'></i></a>
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