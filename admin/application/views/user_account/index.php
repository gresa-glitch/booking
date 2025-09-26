                    <div class="container-xxl flex-grow-1 container-p-y">

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Account</li>
                            </ol>
                        </nav>

                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('success') ?>
                            </div>
                        <?php else: echo ''; ?>
                        <?php endif ?>

                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">
                                <a class="btn btn-sm btn-primary" href="<?= base_url('user_account/add') ?>">Add User</a>
                            </h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php $num = 1;
                                        foreach ($fetchuser as $row) : ?>
                                            <tr>
                                                <td><?= $num++; ?></td>
                                                <td><?= $row->name; ?></td>
                                                <td><?= $row->user_role; ?></td>
                                                <td>
                                                    <a class="text-primary" href="<?= base_url('user_account/edit/' . $row->id) ?>"><i class='bx  bx-pencil'></i></a>
                                                    &nbsp;
                                                    <a class="text-danger" href="<?= base_url('user_account/delete/' . $row->id) ?>"><i class='bx  bx-trash'></i></a>
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