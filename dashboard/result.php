<?php

if (array_key_exists('predict', $_POST)) {
    unset($_POST['predict']);
    $new_customer = json_encode($_POST);
    $command = escapeshellcmd('python3.9 ./app/app.py '.$new_customer.' 2>&1');
    $is_churn = shell_exec($command);
}
else {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <?php
    if ($is_churn == 200) {
    ?>
    <div class='container'>
        <div class='row not-churn-div mt-5'>
            <div class='col-12'>
                <div>
                    <p class='header-emoji'>
                        <img src="./assets/churn.gif" alt="" style='width: 500px;'>
                    </p>
                    <h1 class='header-title mt-5' style='font-size:48px; color:#8B0000'>CHURN</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    else if ($is_churn == 500) {
    ?>
    <div class='container'>
        <div class='row not-churn-div mt-5'>
            <div class='col-12'>
                <div>
                    <p class='header-emoji'>
                        <img src="./assets/not-churn.gif" alt="" style='width: 500px;'>
                    </p>
                    <h1 class='header-title mt-5' style='font-size:48px; color:#00D100'>NOT CHURN</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    else {
    ?>
    <div class='container'>
        <div class='row not-churn-div mt-5'>
            <div class='col-12'>
                <div>
                    <p class='header-emoji'>
                        <img src="./assets/try-again.jpg" alt="" style='width: 500px;'>
                    </p>
                    <h1 class='header-title mt-5' style='font-size:48px; color:#3A003A'>TRY AGAIN</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <?php include 'button.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>