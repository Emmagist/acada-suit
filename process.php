<?php

    require "phpMailer.php";

    if (isset($_GET['contData'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);

        if (isset($name, $email)) {
            $sql = "INSERT INTO landing_page(full_name, email) VALUES('$name', '$email')";
            mysqli_query($db, $sql);
            echo json_encode("Thanks for signing up...");
            $emailVer->sendMailer($email,$name);
        }
    }

    if (isset($_GET['regData'])) {
        $name = mysqli_real_escape_string($db, $_POST['reg_name']);
        $email = mysqli_real_escape_string($db, $_POST['reg_email']);

        if (isset($name, $email)) {
            $sql = "INSERT INTO landing_page(full_name, email) VALUES('$name', '$email')";
            mysqli_query($db, $sql);
            echo json_encode("Thanks for signing up...");
            $emailVer->sendMailer($email,$name);
        }
    }

?>