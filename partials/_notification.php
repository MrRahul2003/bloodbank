<?php
    include '../partials/_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

    .dropdown-list-image {
        position: relative;
        height: 2.5rem;
        width: 2.5rem;
    }

    .dropdown-list-image img {
        height: 2.5rem;
        width: 2.5rem;
    }

    </style>
</head>

<body>
    <?php
    include '../nav/_nav_bloodbank.php';
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-9 right">
                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">All</h6>
                    </div>
                    <div class="box-body p-0">


                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                    src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" /></div>
                            <div class="font-weight-bold ml-4">
                                <div class="text-truncate">Admin portal | DoctorX</div>
                                <div class="small">Checkout Now! More Doctors added...</div>
                            </div>
                        </div>


                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                    alt="" />
                            </div>
                            <div class="font-weight-bold ml-4">
                                <div>
                                    <span class="font-weight-normal">Congratulate User
                                        (iamgurdeeposahan)</span> You have attended all your appointments, your got a cashback.Please Checkout!
                                    <div class="small text-success"><i class="fa fa-check-circle"></i> You sent User
                                        a message</div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div
                                class="dropdown-list-image mr-3 d-flex align-items-center bg-success justify-content-center rounded-circle text-white">
                                M</div>
                            <div class="font-weight-bold ml-4">
                                <div class="text-truncate">Long Time no See...</div>
                                <div class="small">You had not check out website from long period.Check it out right now!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>