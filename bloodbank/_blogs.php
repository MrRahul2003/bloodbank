<?php
include '../partials/_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .card {
        margin-bottom: 24px;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: initial;
        border: 0 solid transparent;
        border-radius: .25rem;
    }

    .card-header {
        padding: 1rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 0 solid transparent;
    }
    </style>
</head>

<body>
    <?php
     include '../nav/_nav_bloodbank.php';
    ?>
    <?php
        $response1 = file_get_contents("https://www.healthit.gov/data/open-api?source=policy-levers-activities-catalog.csv");
        $response2 = file_get_contents("https://www.healthit.gov/data/open-api?source=state-health-it-privacy-consent-law-policies.csv");
        $NewsData1 = json_decode($response1,true);
        $NewsData2 = json_decode($response2,true);
        // print_r($NewsData);
    ?>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <?php 
                for ($i=1; $i < 20 ; $i++) { 
                    $News1 = $NewsData1[$i];
                    $News2 = $NewsData2[$i];
            ?>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <img class="card-img-top"
                        src="https://source.unsplash.com/random/500×300/?<?= $News2['state'] ?>,bloodbank-$News['state'] ?>"
                        ,health width="50" height="180"  alt="">

                    <div class="card-header px-4 pt-4">
                        <div class="badge bg-warning my-2"><?= $News2['state'] ?></div>
                        <h5 class="card-title mb-0"><?= $News1['policy_lever'] ?></h5>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>
                            <?php 
                            $news = $News1['activity_description'];
                            $blog = substr($news,0,100);
                            echo $blog . " ..."; 
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php 
                if ($i == 8) {
                    break;
                }
                }
            ?>

        </div>
    </div>
</body>

</html>