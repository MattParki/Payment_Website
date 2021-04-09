<?php
require_once '../src/setup.php';
require_once '../src/Scripts.php';
require_once 'PaymentPHP.php';

?>
<script>
    $(document).ready(function()) {

        $("input").keyup(function() {
            var name = $("input").val();
            $.post("paymentPHP.php", {

            })
        })
    }

</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'Margins/Header.php'; ?>
    <title>Payment Page</title>
</head>
<br>
<body class="p-4">
<div class="container">
    <div class="jumbotron">
        <?php include 'Nav_Bar/Nav-Bar.php'; ?>
        <div class="container d-flex justify-content-center align-items-center">

        </div>

</div>


<?php include 'Margins/Footer.php' ?>
</body>
</html>

