<?php
require ("inc/essentials.php");
require ("inc/db_config.php");

session_start();
    if((isset($_SESSION["adminLogin"]) && ($_SESSION["adminLogin"] == true))){
        redirect('dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require ("inc/links.php") ?>
</head>
<style>
    .login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
    }
</style>

<body class="bg-light">

    <div class="login-form rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="mx-auto text-center bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input name="admin_name" type="text" class="form-control shadow-none" required>
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input name="admin_pass" type="password" class="form-control shadow-none" required>
                </div>
                <button type="submit" name="login" class="btn text-white w-100 custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST["login"])) {

        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name` =? AND `admin_pass` =?";

        $value = [$frm_data["admin_name"], $frm_data["admin_pass"]];
        $res = select($query, $value, "ss");
        // print_r($res);
        if ($res->num_rows == 1) {
            alert('success', ' Login success -Valid Credentials');
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');
        } else {
            alert('error', ' Login failed - Invalid Credentials');
        }
    }
    ?>

    <?php require ("inc/scripts.php") ?>
</body>

</html>