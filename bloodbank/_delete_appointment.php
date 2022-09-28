<?php
    include '../partials/_connect.php';
?>
<?php
    $hospital_id = $_GET['hospital_id'];
    echo $hospital_id;

    // deleting data in db
    $sql = "DELETE FROM `appointments_bloodbank` WHERE donation_hospital_id='$hospital_id'";
    $result = mysqli_query($conn,$sql);

    // checking insertion condition
    if (!$result) {
        echo "cannot be deleted";
    } else {
        echo
        "<script>
            window.location.assign('_all_appointments.php');
        </script>";
    }
?>