<?php
include 'partials/_connect.php';
?>
<?php

// collecting data from form and storing in the variables
if (isset($_POST['donation_register'])) {
    $donor_name = $_POST['donor_name'];
    $donor_email = $_POST['donor_email'];
    $donor_state = $_POST['donor_state'];
    $donor_city = $_POST['donor_city'];
    $donor_bgroup = $_POST['donor_bgroup'];
    $donor_comment = $_POST['donor_comment'];
    
    $sql = "INSERT INTO `bloodbank_donate`(`login_user_id`, `donor_name`, `donor_email`, `donor_state`, `donor_city`, `donor_comment`, `donation_date_time`)
     VALUES (1,'$donor_name','$donor_email','$donor_state','$donor_city','$donor_comment',current_timestamp())";
    $result = mysqli_query($conn,$sql) or Die("insertion in bloodbank_donate query failed");
    
    
    
    if ($result) {
        $sql = "SELECT * FROM `hospitals` WHERE hospital_state LIKE '%$donor_state%' AND (hospital_location LIKE '%$donor_city%' OR hospital_sublocation LIKE '%$donor_city%')";
        $result = mysqli_query($conn,$sql) or Die("sql query failed");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $donation_hospital_index = $row['hospital_index'];
            $donation_hospital_state = $row['hospital_state'];
            $donation_hospital_location = $row['hospital_location'];
            $donation_hospital_sublocation = $row['hospital_sublocation'];
            $donation_hospital_phone = $row['hospital_phone'];
            $donation_hospital_name = $row['hospital_name'];
            $donation_hospital_address = $row['hospital_address'];
    
            $sql = "INSERT INTO `appointments_bloodbank`(`login_user_id`,`donation_hospital_id`, `donor_name`, `donor_email`, `donation_state`, `donation_location`, `donation_sublocation`, `donation_hospital`, `donation_phone`, `donation_address`) 
            VALUES (1,'$donation_hospital_index','$donor_name','$donor_email','$donation_hospital_state','$donation_hospital_location','$donation_hospital_sublocation','$donation_hospital_name','$donation_hospital_phone','$donation_hospital_address')";
            $result = mysqli_query($conn,$sql) or Die("sql query failed2");
    
            echo
            "<script>
                window.location.assign('bloodbank/_appointment_successful.php');
            </script>";
        } else {
            echo "No hospital found Try another Location";
        }
    }
    else {
        echo "Appointment cannot be set!";
    }
    
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        background-color: #25274d;
    }

    .contact {
        padding: 4%;
        height: 400px;
    }

    .col-md-3 {
        background: #ff9b00;
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }

    .contact-info h2 {
        margin-bottom: 10%;
    }

    .col-md-9 {
        background: #fff;
        padding: 3%;
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
    }

    .contact-form label {
        font-weight: 600;
    }

    .contact-form button {
        background: #25274d;
        color: #fff;
        font-weight: 600;
        width: 25%;
    }
    </style>
</head>

<body>
    <div class="container col-lg-9 mt-4 mb-0">
        <div class="section-title">
            <h2>Book an Appointment Now!</h2>
        </div>
    </div>
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                    <h2>Donate Now!</h2>
                    <h4>We would love to appoint your slot !</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST'">
                        <div class=" form-group">
                        <label class="control-label col-sm-2" for="name"></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="donor_name"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email"></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="donor_email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="state"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="state" placeholder="State"
                                    name="donor_state" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" placeholder="City" name="donor_city"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="bgroup"></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bgroup" placeholder="Blood Group"
                                    name="donor_bgroup" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="comment"></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Your Comment"
                                    name="donor_comment"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 mt-2">
                                <button type="submit" name="donation_register" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>

</html>