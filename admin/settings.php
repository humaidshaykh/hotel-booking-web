<?php
require ("inc/essentials.php");
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require ("inc/links.php") ?>
</head>

<body class="bg-light">
    <?php require ("inc/header.php") ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>
                <!-- General setting section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title text-body-secondary m-0">General Setting</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                <i class="ri-file-edit-line me-2"></i>Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-2 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General setting modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About Us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none"
                                            rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        onclick="site_title.value = general_data.site_title , site_about.value = general_data.site_about">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- shutdown section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title text-body-secondary m-0">Shutdown Website</h5>
                            <div class="form-check form-switch shadow-none">
                                <input class="form-check-input shadow-none" type="checkbox" role="switch"
                                    onchange="upd_shutdown(this.value)" id="shutdown-toggle">
                            </div>
                        </div>
                        <p class="card-text">
                            No costumer will be allow to book hotel room, when shutdown mode is turned on.
                        </p>
                    </div>
                </div>

                <!-- contact details section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title text-body-secondary m-0">Contact Setting</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="ri-file-edit-line me-2"></i>Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="ri-phone-line"></i>
                                        <span id="ph1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="ri-phone-line"></i>
                                        <span id="ph2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">E-mail</h6>
                                    <p class="card-text">
                                        <i class="ri-mail-send-line"></i>
                                        <span id="email"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="ri-facebook-circle-line"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="ri-instagram-line"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="ri-pinterest-line"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">iFrame</h6>
                                    <iframe src="" id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contacts details modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="conatacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" name="address" id="address_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Numbers (with country
                                                        code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="ri-phone-line"></i></span>
                                                        <input type="text" name="ph1" id="ph1_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="ri-phone-line"></i></span>
                                                        <input type="text" name="ph2" id="ph2_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" name="email" id="email_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="ri-facebook-circle-line"></i></span>
                                                        <input type="text" name="fb" id="fb_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="ri-instagram-line"></i></span>
                                                        <input type="text" name="insta" id="insta_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="ri-pinterest-line"></i></span>
                                                        <input type="text" name="tw" id="tw_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">iFrame</label>
                                                    <input type="text" name="iframe" id="iframe_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        onclick="contacts_inp(contacts_data)">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Management team section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title text-body-secondary m-0">Management Team</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#team-s">
                                <i class="ri-add-box-line me-2"></i>Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Management team modal -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Team Member</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="member_name" id="member_name_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Picture</label>
                                        <input type="file" name="member_picture" id="member_picture_inp"
                                            accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        onclick="">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <?php require ("inc/scripts.php") ?>

    <script>
        let general_data, contacts_data;
        let general_s_form = document.getElementById("general_s_form");
        let site_title_inp = document.getElementById("site_title_inp");
        let site_about_inp = document.getElementById("site_about_inp");

        let conatacts_s_form = document.getElementById("conatacts_s_form");

        let team_s_form = document.getElementById("team_s_form");
        let member_name_inp = document.getElementById("member_name_inp");
        let member_picture_inp = document.getElementById("member_picture_inp");

        function get_general() {
            let site_title = document.getElementById("site_title");
            let site_about = document.getElementById("site_about");

            let shutdown_toggle = document.getElementById("shutdown-toggle");

            let xhr = new XMLHttpRequest;

            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                general_data = JSON.parse(this.responseText);
                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data["site_title"];
                site_about_inp.value = general_data["site_about"];

                if (general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }

            xhr.send('get_general');
        }

        general_s_form.addEventListener("submit", function (e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        })

        function upd_general(site_title_val, site_about_value) {
            let xhr = new XMLHttpRequest;

            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                var myModal = document.getElementById("general-s");
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert("success", "Changes saved!");
                    get_general();
                } else {
                    alert("Error", "No Changes made!");
                }
            }

            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_value + '&upd_general');
        }

        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest;

            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                if (this.responseText == 1 && general_data.shutdown == 0) {
                    alert("success", "site has been shutdown!");
                } else {
                    alert("success", "shutdown mode off!");
                }
                get_general();
            }

            xhr.send('upd_shutdown=' + val);
        }

        function get_contacts() {

            let contact_p_id = ['address', 'gmap', 'ph1', 'ph2', 'email', 'fb', 'insta', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest;

            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                contacts_data = JSON.parse(this.responseText);
                // console.log(contacts_data);
                contacts_data = Object.values(contacts_data);
                // console.log(contacts_data);

                for (let i = 0; i < contact_p_id.length; i++) {
                    document.getElementById(contact_p_id[i]).innerText = contacts_data[i + 1];
                }

                iframe.src = contacts_data[9];

                contacts_inp(contacts_data);

            }
            xhr.send('get_contacts');
        }

        function contacts_inp(data) {
            let contact_inp_id = ['address_inp', 'gmap_inp', 'ph1_inp', 'ph2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

            for (let i = 0; i < contact_inp_id.length; i++) {
                document.getElementById(contact_inp_id[i]).value = data[i + 1];

            }
        }

        conatacts_s_form.addEventListener("submit", function (e) {
            e.preventDefault();
            upd_contacts();
        })

        function upd_contacts() {

            let index = ['address', 'gmap', 'ph1', 'ph2', 'email', 'fb', 'insta', 'tw', 'iframe'];
            let contact_inp_id = ['address_inp', 'gmap_inp', 'ph1_inp', 'ph2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

            let data_str = "";

            for (let i = 0; i < index.length; i++) {
                data_str += index[i] + "=" + document.getElementById(contact_inp_id[i]).value + "&";
            }


            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest;
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                var myModal_contacts = document.getElementById("contacts-s");
                var modal_contacts = bootstrap.Modal.getInstance(myModal_contacts);
                modal_contacts.hide();

                if (this.responseText == 1) {
                    alert("success", "Changes saved!");
                    get_contacts();
                } else {
                    alert("Error", "No Changes made!");
                }
            }

            xhr.send(data_str);
        }

        team_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_member();
        })

        function add_member(){
            const data = new FormData();
            data.append('name', member_name_inp.value);
            data.append('picture', member_picture_inp.files[0]);
            data.append('add_member', '');

            let xhr = new XMLHttpRequest;
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                // var myModal = document.getElementById("team-s");
                // var modal = bootstrap.Modal.getInstance(myModal);
                // modal.hide();

                // if (this.responseText == 1) {
                //     alert("success", "Changes saved!");
                //     get_general();
                // } else {
                //     alert("Error", "No Changes made!");
                // }
            }

            xhr.send(data);
            
        }

        window.onload = function () {
            get_general();
            get_contacts();

        }
    </script>
</body>

</html>