<?php
include '../partials/_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
        integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <style>
    .card {
        margin-bottom: 24px;
        box-shadow: 0 2px 3px #e4e8f0;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #eff0f2;
        border-radius: 1rem;
    }

    .avatar-md {
        height: 4rem;
        width: 4rem;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #f1f3f7;
        border: 1px solid #eff0f2;
        border-radius: 0.75rem;
    }

    .avatar-title {
        align-items: center;
        background-color: #3b76e1;
        color: #fff;
        display: flex;
        font-weight: 500;
        height: 100%;
        justify-content: center;
        width: 100%;
    }

    .bg-soft-primary {
        background-color: rgba(59, 118, 225, .25) !important;
    }

    a {
        text-decoration: none !important;
    }

    .badge-soft-danger {
        color: #f56e6e !important;
        background-color: rgba(245, 110, 110, .1);
    }

    .badge-soft-success {
        color: #63ad6f !important;
        background-color: rgba(99, 173, 111, .1);
    }


    .badge {
        display: inline-block;
        padding: 0.25em 0.6em;
        font-size: 75%;
        font-weight: 500;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.75rem;
    }
    </style>
</head>

<body>
<?php
     include '../nav/_nav_bloodbank.php';
    ?>
    <?php
    $sql = "SELECT * FROM `appointments_bloodbank`";
    $result = mysqli_query($conn, $sql);
    $rowNo = mysqli_num_rows($result);
    ?>

    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">Appointment List <span
                            class="text-danger fw-normal ms-2">(<?php echo $rowNo; ?>)</span></h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                    <div>
                        <a href="../index.php" class="btn btn-primary"><i class="bx bx-plus me-1"></i> Add New</a>
                    </div>

                </div>
            </div>
        </div>

        <!-- fetching the appointment of doctors from appointments_bloodbank database -->
        <div class="row">

            <?php
                if ($rowNo > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                    $profile = $row['donation_hospital'] . '-' . $row['donation_sublocation'] . '-' . $row['donation_location'] . '.jpg';

            ?>

            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <?php
                                echo
                                '<img src="../images/hospital_images/'. $profile .'"  alt=""
                                    class="rounded-rectangle" width="180" />';
                                ?>
                            </div>
                            <div class="flex-1 ms-3">
                                <h3 class="font-size-16 mb-1"><?php echo $row['donation_hospital']?></h3>
                                <span class="badge badge-soft-success mb-0">@ Mon-Fri</span>
                            </div>
                        </div>
                        <div class="mt-3 pt-1">
                            <object data="../svg/svg-phone.svg" width="25" height="25"></object>
                            <spans class="text-muted mb-0 mt-2 mx-3"><?php echo $row['donation_phone']?></span>
                            <?php echo "<br>" ?>

                            <object data="../svg/svg-phone.svg" width="25" height="25"></object>
                            <spans class="text-muted mb-0 mt-2 mx-3">10 am to 5 pm</span>
                            <?php echo "<br>" ?>

                            <object data="../svg/svg-hospital.svg" width="25" height="25"></object>
                            <spans class="text-muted mb-0 mt-2 mx-3">
                            <spans class="text-muted mb-0 mt-2 mx-3">
                            <?php echo $row['donation_address']?></span><?php echo "<br>" ?>

                            <object data="../svg/svg-location.svg" width="25" height="25"></object>
                            <spans class="text-muted mb-0 mt-2 mx-3">
                            <?php echo $row['donation_location'] . '/' . $row['donation_sublocation'] ?></span><?php echo "<br>" ?>
                        </div>
                        <?php
                            echo
                            '<div class="d-flex gap-2 pt-4">
                                <a href="../hospital/_hospital_profile.php?hospital_index='. $row['donation_hospital_id'] .'" class="btn btn-soft-primary btn-sm w-50">Profile</a>
                                <a href="_delete_appointment.php?hospital_id='. $row['donation_hospital_id'].'" class="btn btn-danger btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Cancel</a>
                            </div>';
                        ?>
                    </div>
                </div>
            </div>
            <?php  
                    }
                }
            ?>
        </div>


    </div>

</html>