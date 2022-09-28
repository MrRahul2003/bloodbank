<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Nav</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-dark bg-primary" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><strong class="text-light">DocterX</strong></a>


    </div>
</nav>
<!-- ---------------------------------------------- -->
<?php
    $sql1 = "SELECT * FROM `appointments_bloodbank`";
    $result1 = mysqli_query($conn, $sql1);
    $no_appointments = mysqli_num_rows($result1);
?>
<!-- ---------------------------------------------- -->

<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>

        <a class="nav-link" href="bloodbank/_blogs.php">Blogs<span
                class="badge text-bg-light rounded-pill align-text-bottom">26</span></a>
        <a class="nav-link" href="bloodbank/_all_appointments.php">Appointments<span
                class="badge text-bg-light rounded-pill align-text-bottom"><?php echo $no_appointments ?></span></a>
        <a class="nav-link" href="partials/_notification.php">Notifications<span
                class="badge text-bg-light rounded-pill align-text-bottom">6</span></a>
        <a class="nav-link" href="partials/_contact_us.php">Contact Us</a>
    </nav>
</div>
</body>

</html>