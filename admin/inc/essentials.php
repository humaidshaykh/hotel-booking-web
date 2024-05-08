<?php

define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/hotelbooking/images/');
define('ABOUT_FOLDER', 'about/');

function adminLogin(){
    session_start();
    if(!(isset($_SESSION["adminLogin"]) && ($_SESSION["adminLogin"] == true))){
        redirect("index.php");
        exit();
    }
    session_regenerate_id();
}



function redirect($url) {
    echo "<script>window.location.href = '$url';</script>";
}


function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
}

function uploadImage($image,$folder){
    $valid_mime = ['image/jpeg','image/png','image/webp'];
    $img_mime = $image['type'];

    if(!in_array($valid_mime,$img_mime)){
        return 'inv_img'; //invalid image mime or format
    }else if{
        
    }
}

?>