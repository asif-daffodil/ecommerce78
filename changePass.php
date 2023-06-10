<?php
include_once("./components/main/header.php");
include_once("./components/main/nav.php");

if (!isset($_SESSION['user'])) {
?>
    <script>
        window.location.href = "./";
    </script>
<?php
} else {
    null;
}
?>
<style>
    <?php
    include_once("./assets/css/main/style.min.css");
    ?>
</style>

<div id="cpass_success">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto py-5">
            <div class="col-md-12 px-0 display-4 mb-3">Change Password</div>
            <form id="cPass" class="p-5 rounded shadow">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="old_pass">Old Password*</label>
                            <input type="password" class="form-control" id="old_pass" name="old_password" value="">
                            <div class="text-danger error_old_pass"></div>
                        </div>
                        <div class="form-group">
                            <label for="new_pass">New Password*</label>
                            <input type="password" class="form-control" id="new_pass" name="new_password" value="">
                            <div class="text-danger error_new_password"></div>
                        </div>
                        <div class="form-group">
                            <label for="conf_pass">Confirm Password*</label>
                            <input type="password" class="form-control" id="conf_pass" name="conf_password" value="">
                            <div class="text-danger error_conf_pass"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once("./components/main/footer.php");
?>

<script>
    const cPass = document.getElementById("cPass");
    const cpass_success = document.getElementById("cpass_success");


    cPass.addEventListener("submit", (e) => {
        e.preventDefault();

        // input constants
        const old_pass = document.getElementById("old_pass");
        const new_pass = document.getElementById("new_pass");
        const conf_pass = document.getElementById("conf_pass");

        // error constants
        const error_old_pass = document.getElementsByClassName("error_old_pass")[0];
        const error_new_password = document.getElementsByClassName("error_new_password")[0];
        const error_conf_pass = document.getElementsByClassName("error_conf_pass")[0];


        const url = "./classes/CPass.php";

        const data = {
            old_pass: old_pass.value,
            new_pass: new_pass.value,
            conf_pass: conf_pass.value,
            updatepass: 'changePassword'
        };

        const option = {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        };

        fetch(url, option)
            .then(response => response.json())
            .then(res => {

                if (!res.change_successfully) {
                    cpass_success.innerHTML = null;

                    // old pass validation
                    if (res.error_opass) {
                        error_old_pass.innerHTML = "<small>" + res.error_opass + "</small>";
                    } else {
                        error_old_pass.innerHTML = null;
                    }

                    // new pass validation
                    if (res.error_npass) {
                        error_new_password.innerHTML = "<small>" + res.error_npass + "</small>";
                    } else {
                        error_new_password.innerHTML = null;
                    }

                    // confirm pass validation
                    if (res.error_confpass) {
                        error_conf_pass.innerHTML = "<small>" + res.error_confpass + "</small>";
                    } else {
                        error_conf_pass.innerHTML = null;
                    }
                } else {
                    error_old_pass.innerHTML = error_new_password.innerHTML = error_conf_pass.innerHTML = null;

                    cpass_success.innerHTML = `<div class="alert alert-success alert-dismissible fade show shadow" role="alert"><strong>Congress!</strong> Password change successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="font-size: 22px;">&times;</span></button></div>`;

                    setInterval(() => {
                        window.location.reload();
                    }, 2000);
                }

            })
            .catch(error => {
                console.error("Error:", error);
            });


    })
</script>