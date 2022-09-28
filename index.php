<?php
include 'partials/_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .team-style1 {
        position: relative;
    }

    .gray-bg {
        background-color: #f5f5f5;
    }

    .team-style1 .team-img {
        position: relative;
        border-radius: 0.25rem;
        margin: 0.25rem;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.09);
        text-align: center;
    }

    .team-style1 .team-info {
        position: absolute;
        width: 100%;
        bottom: 0;
        padding: 20px;
        background: grey;
        text-align: center;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .team-style1 .team-info h6 {
        display: block;
        color: #fff;
        text-transform: capitalize;
    }

    .team-style1 .team-info small {
        display: block;
        color: #fff;
    }

    @media screen and (max-width: 575px) {
        .team-style1 .team-social-icon ul li a {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 13px;
        }
    }

    /* ------------------------------ */
    .steps .step .step-icon {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        border: 1px solid #e1e7ec;
        border-radius: 50%;
        background-color: #f5f5f5;
        color: #374250;
        font-size: 38px;
        line-height: 81px;
        z-index: 5
    }

    .steps .step .step-title {
        margin-top: 16px;
        margin-bottom: 0;
        color: #606975;
        font-size: 14px;
        font-weight: 500
    }
    </style>
</head>

<body class="gray-bg">
    <?php
     include 'nav/_nav_index.php';
    ?>

    <div class="container padding-bottom-3x mt-4">
        <div class="col-lg-6">
            <div class="section-title">
                <h2>Donation Process</h2>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div
                    class="steps d-flex flex-wrap flex-sm-nowrap justify-content-around padding-top-2x padding-bottom-1x">
                    <div class="step completed">
                        <img src="svg/bloodbank_svg/svg-registration.svg" width="80" height="80" alt="" />
                        <h4 class="step-title">Registration</h4>
                    </div>
                    <div class="step completed">
                        <img src="svg/bloodbank_svg/svg-screening.svg" width="80" height="80" alt="" />
                        <h4 class="step-title">Screening</h4>
                    </div>
                    <div class="step completed">
                        <img src="svg/bloodbank_svg/svg-donation.svg" width="80" height="80" alt="" />
                        <h4 class="step-title">Donation</h4>
                    </div>
                    <div class="step completed">
                        <img src="svg/bloodbank_svg/svg-refresh.svg" width="80" height="80" alt="" />
                        <h4 class="step-title">Rest & Refresh</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0">
                <div class="team-style1 hoverstyle1">
                    <div class="team-img">
                        <img src="images/bloodbank_images/2.jpg" alt="">
                    </div>

                    <div class="team-info">
                        <h6 class="h5">Healthcare Worker Safety</h6>
                        <small>SURGICAL SERVICES</small>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0">
                <div class="team-style1 hoverstyle1">
                    <div class="team-img">
                        <img src="images/bloodbank_images/3.jpg" alt="">
                    </div>

                    <div class="team-info">
                        <h6 class="h5">Chaplaincy Services</h6>
                        <small>GENERAL</small>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0">
                <div class="team-style1 hoverstyle1">
                    <div class="team-img">
                        <img src="images/bloodbank_images/4.jpg" alt="">
                    </div>

                    <div class="team-info">
                        <h6 class="h5">Pastoral Education</h6>
                        <small>PICK & DROP BY</small>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
     include 'bloodbank/_why_you_donate.php';
     include 'bloodbank/_appointment_form.php';
     ?>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <!-- Banner -->
    <div class="banner my-5" style="background-color: #f8d49d; width: 100%; padding: 2em 0;">
        <div class="container">
            <div class="row style=" align-items:center;"">
                <div class="col-md-12 pb-20 text-center pb-20">
                    <div class="exp-separator center-separator">
                        <div class="exp-separator-inner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     include 'bloodbank/_upper_footer.php';
     include 'partials/_footer.php';
    ?>
</body>

</html>