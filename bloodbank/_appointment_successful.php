<?php
include '../partials/_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    body {
        margin-top: 200px;
    }

    .mail-seccess {
        text-align: center;
        background: #fff;
        border-top: 1px solid #eee;
    }

    .mail-seccess .success-inner {
        display: inline-block;
    }
    </style>
</head>
<body>
    <section class="mail-seccess section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <!-- Error Inner -->
                    <div class="success-inner">
                        <h1><object data="../svg/svg-successful.svg" width="220" height="220"> </object></h1>
                        <h2 class="text-success">Appointment successful! </h2>
                        <p>Please go to appointment's panel to check all your appointments!</p>
                        <small>Your Appointment has been Set please come between 10 am to 5 pm -Monday to Friday</small>
                        <br>
                        <a href="_all_appointments.php" class="btn btn-primary btn-lg mt-3">Appointment's</a>
                    </div>
                    <!--/ End Error Inner -->
                </div>
            </div>
        </div>
    </section>
</body>

</html>