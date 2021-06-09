<?php

    require "phpMailer.php";

    // if (isset($_GET['data'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);

        if (isset($name, $email)) {
            $sql = "INSERT INTO landing_page(full_name, email) VALUES('$name', '$email')";
            mysqli_query($db, $sql);
            echo json_encode("Thanks for signing up...");
            $emailVer->sendMailer($email,$name);
        }
        // else {
        //     echo json_encode("Name or Email can not be empty");
        // }
    // }

?>