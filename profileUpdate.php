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

$email = $_SESSION['user']['email'];
$result = $conn->query("SELECT * FROM users WHERE email = '$email'");

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
}
?>

<style>
    .header-left {
        display: none !important;
    }

    .header-14 .header-bottom .header-center {
        justify-content: flex-start !important;
    }

    .side-nav {
        display: none;
    }

    .form-select {
        width: 100%;
        height: 40px;
        /* padding: 0.85rem 2rem; */
        font-size: 1.4rem;
        line-height: 1.5;
        font-weight: 300;
        color: #777;
        background-color: #fafafa;
        border: 1px solid #ebebeb;
        border-radius: 0;
        /* margin-bottom: 2rem; */
        transition: all 0.3s;
        box-shadow: none;
    }

    .form-select:focus {
        border-color: #fcb941 !important;
    }

    select:focus-visible {
        outline-offset: unset;
        outline: none;
    }

    #up_success {
        position: fixed;
        bottom: 2%;
        right: 2%;
        z-index: 100;
    }

    .alert {
        border-radius: 6px;
        font-size: 18px;
        padding: 1rem 4.5rem !important;
    }
</style>
<div id="up_success">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto py-5">
            <div class="col-md-12 px-0 display-4 mb-3">Update Your Profile</div>
            <form id="updateProfile" class="p-5 rounded shadow">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="upfirst_name" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?? null ?>">
                            <div class="text-danger error_f_name"></div>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="uplast_name" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?? null ?>">
                            <div class="text-danger error_l_name"></div>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="upcompany_name" name="company_name" value="<?= htmlspecialchars($user['company_name']) ?? null ?>">
                        </div>
                        <div class="form-group">
                            <label for="street_address">Street Address</label>
                            <input type="text" class="form-control" id="upstreet_address" name="street_address" value="<?= htmlspecialchars($user['street_address']) ?? null ?>">
                        </div>
                        <div class="form-group">
                            <label for="house">House</label>
                            <input type="text" class="form-control" id="uphouse" name="house" value="<?= htmlspecialchars($user['house']) ?? null ?>">
                        </div>
                        <div class="form-group">
                            <span style="margin: 0 0 1.1rem;display: block;">Country:</span>
                            <select class="form-select upcountry" id="country-select">
                                <option value="" selected>==== Select Country ====</option>

                                <?php
                                $optionData = json_decode(file_get_contents('./country_name.json'), true);

                                foreach ($optionData as $country) {
                                    $countryName = $country['name']['common'];
                                ?>
                                    <option value="<?= $countryName ?>" <?= htmlspecialchars($user['country']) == "$countryName" ? "selected" : null ?>><?= $countryName ?></option>
                                <?php
                                }
                                ?>

                            </select>
                            <div class="text-danger error_Country"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="upcity" name="city" value="<?= htmlspecialchars($user['city']) ?? null ?>">
                            <div class="text-danger error_city"></div>
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="upstate" name="state" value="<?= htmlspecialchars($user['state']) ?? null ?>">
                            <div class="text-danger error_state"></div>
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="upzip" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="zip" value="<?= htmlspecialchars($user['zip']) ?? null ?>">
                            <div class="text-danger error_zip"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="11" id="upphone" name="phone" value="<?= htmlspecialchars($user['phone']) ?? null ?>">
                            <div class="text-danger error_up_phone"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="upemail" name="email" value="<?= htmlspecialchars($user['email']) ?? null ?>">
                            <div class="text-danger error_up_email"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once("./components/main/footer.php")
?>

<!-- <script>
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error("Error:", error);
        });
</script> -->

<script>
    const updateProfile = document.getElementById("updateProfile");
    updateProfile.addEventListener("submit", (e) => {
        e.preventDefault();

        const upfirst_name = document.getElementById("upfirst_name");
        const uplast_name = document.getElementById("uplast_name");
        const upcompany_name = document.getElementById("upcompany_name");
        const upstreet_address = document.getElementById("upstreet_address");
        const uphouse = document.getElementById("uphouse");
        const upcountry = document.getElementById("country-select");
        const upcity = document.getElementById("upcity");
        const upstate = document.getElementById("upstate");
        const upzip = document.getElementById("upzip");
        const upphone = document.getElementById("upphone");
        const upemail = document.getElementById("upemail");
        const up_success = document.getElementById("up_success");

        // error msg 
        const error_f_name = document.getElementsByClassName("error_f_name")[0];
        const error_l_name = document.getElementsByClassName("error_l_name")[0];
        const error_Country = document.getElementsByClassName("error_Country")[0];
        const error_city = document.getElementsByClassName("error_city")[0];
        const error_state = document.getElementsByClassName("error_state")[0];
        const error_zip = document.getElementsByClassName("error_zip")[0];
        const error_up_phone = document.getElementsByClassName("error_up_phone")[0];
        const error_up_email = document.getElementsByClassName("error_up_email")[0];

        const url = "./classes/PUpdate.php";

        const data = {
            upfirst_name: upfirst_name.value,
            uplast_name: uplast_name.value,
            upcompany_name: upcompany_name.value,
            upstreet_address: upstreet_address.value,
            uphouse: uphouse.value,
            upcountry: upcountry.value,
            upcity: upcity.value,
            upstate: upstate.value,
            upzip: upzip.value,
            upphone: upphone.value,
            upemail: upemail.value,
            updateProfile: 'update'
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

                if (!res.update_success) {
                    up_success.innerHTML = null;

                    // first name validation
                    if (res.errorFName) {
                        error_f_name.innerHTML = "<small>" + res.errorFName + "</small>";
                    } else {
                        error_f_name.innerHTML = null;
                    }

                    // last name validation
                    if (res.errorLName) {
                        error_l_name.innerHTML = "<small>" + res.errorLName + "</small>";
                    } else {
                        error_l_name.innerHTML = null;
                    }

                    // country validation
                    if (res.errorCountry) {
                        error_Country.innerHTML = "<small>" + res.errorCountry + "</small>";
                    } else {
                        error_Country.innerHTML = null;
                    }


                    // Phone validation
                    if (res.errorPhone) {
                        error_up_phone.innerHTML = "<small>" + res.errorPhone + "</small>";
                    } else {
                        error_up_phone.innerHTML = null;
                    }

                    // Email validation
                    if (res.errorEmail) {
                        error_up_email.innerHTML = "<small>" + res.errorEmail + "</small>";
                    } else {
                        error_up_email.innerHTML = null;
                    }
                } else {
                    error_f_name.innerHTML = error_l_name.innerHTML = error_Country.innerHTML = error_city.innerHTML = error_state.innerHTML = error_zip.innerHTML = error_up_phone.innerHTML =
                        error_up_email.innerHTML = null;

                    up_success.innerHTML = `<div class="alert alert-success alert-dismissible fade show shadow" role="alert"><strong>Congratulations!</strong> Profile Updated successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="font-size: 22px;">&times;</span></button></div>`;

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