<?php
require_once "controller/db.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Randi Studio - Payment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/my.css">
</head>

<body>

    <div class="container">
        <div class="row mt-3 d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Konfirmasi Pembayaran</h6>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <input type="hidden" value="">
                            <div class="mb-3">
                                <label for="bkuti_pembayaran" class="form-label">Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="bkuti_pembayaran" name="payment_receive" placeholder="">
                            </div>
                            <div class="d-grid gap-2 col-md mx-auto">
                                <button class="btn btn-primary" type="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>