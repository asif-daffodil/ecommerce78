<div id="msg"></div>
<ul class="nav nav-pills nav-fill" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
    </li>
</ul>
<div class="tab-content" id="tab-content-5">
    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
        <form id="mollaSignIn">
            <div class="form-group">
                <label for="singin-email">Email address *</label>
                <input type="text" class="form-control" id="singin-email" name="singin-email" value="<?= isset($_COOKIE['logEmailCookie']) ? $_COOKIE['logEmailCookie'] : null ?>">
                <div id="errSingInEmail" class="text-danger"></div>
            </div><!-- End .form-group -->

            <div class="form-group">
                <label for="singin-password">Password *</label>
                <input type="password" class="form-control" id="singin-password" name="singin-password" value="<?= isset($_COOKIE['logPassCookie']) ? $_COOKIE['logPassCookie'] : null ?>">
                <div id="errSingInPassword" class="text-danger"></div>
            </div><!-- End .form-group -->

            <div class="form-footer">
                <button type="submit" class="btn btn-outline-primary-2">
                    <span>LOG IN</span>
                    <i class="icon-long-arrow-right"></i>
                </button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                    <label class="custom-control-label" for="signin-remember">Remember Me</label>
                </div><!-- End .custom-checkbox -->
            </div><!-- End .form-footer -->
        </form>
    </div><!-- .End .tab-pane -->
    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
        <form id="mollaReg">
            <div class="form-group">
                <label for="register-name">Your name *</label>
                <input type="text" class="form-control" id="register-name" name="register-name">
                <div id="errName" class="text-danger"></div>
            </div><!-- End .form-group -->

            <div class="form-group">
                <label for="register-email">Your email address *</label>
                <input type="text" class="form-control" id="register-email" name="register-email">
                <div id="errEmail" class="text-danger"></div>
            </div><!-- End .form-group -->

            <div class="form-group">
                <label for="register-mobile">Your Mobile Number *</label>
                <input type="text" class="form-control" id="register-mobile" name="register-mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="11">
                <div id="errMobile" class="text-danger"></div>
            </div><!-- End .form-group -->

            <div class="form-group">
                <label for="register-password">Password *</label>
                <input type="password" class="form-control" id="register-password" name="register-password">
                <div id="errPass" class="text-danger"></div>
            </div><!-- End .form-group -->

            <div class="form-footer">
                <button type="submit" class="btn btn-outline-primary-2">
                    <span>SIGN UP</span>
                    <i class="icon-long-arrow-right"></i>
                </button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="register-policy">
                    <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                    <div id="errAgree" class="text-danger"></div>
                </div><!-- End .custom-checkbox -->
            </div><!-- End .form-footer -->
        </form>
    </div>
</div>
<script>
    const mollaReg = document.getElementById("mollaReg");
    const mollaSignIn = document.getElementById("mollaSignIn");

    mollaReg.addEventListener("submit", (e) => {
        e.preventDefault();

        const registerName = document.getElementById("register-name");;
        const errName = document.getElementById("errName");
        const registerEmail = document.getElementById("register-email");
        const errEmail = document.getElementById("errEmail");
        const registerMobile = document.getElementById("register-mobile");
        const errMobile = document.getElementById("errMobile");
        const registerPassword = document.getElementById("register-password");
        const errPass = document.getElementById("errPass");
        const msg = document.getElementById("msg");


        if (!document.getElementById("register-policy").checked) {
            document.getElementById("errAgree").innerHTML = "<small>Pleace check this button!</small>";
        } else {
            document.getElementById("errAgree").innerHTML = null;

            const url = "./classes/loginValidation.php";

            const data = {
                name: registerName.value,
                email: registerEmail.value,
                mobile: registerMobile.value,
                pass: registerPassword.value,
            };

            const options = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            };

            fetch(url, options)
                .then(response => response.json())
                .then(res => {

                    console.log(res);

                    if (!res.success) {
                        if (res.errName) {
                            errName.innerHTML = "<small>" + res.errName + "</small>";
                        } else {
                            errName.innerHTML = null;
                        }
                        if (res.errEmail) {
                            errEmail.innerHTML = "<small>" + res.errEmail + "</small>";
                        } else {
                            errEmail.innerHTML = null;
                        }

                        if (res.errMobile) {
                            errMobile.innerHTML = "<small>" + res.errMobile + "</small>";
                        } else {
                            errMobile.innerHTML = null;
                        }

                        if (res.errPass) {
                            errPass.innerHTML = "<small>" + res.errPass + "</small>";
                        } else {
                            errPass.innerHTML = null;
                        }
                    } else {
                        errName.innerHTML = errEmail.innerHTML = errMobile.innerHTML = errPass.innerHTML = "";
                        msg.innerHTML = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert">Registration successfull
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        `;
                        setTimeout(() => {
                            location.href = `./classes/session.php?user=ASDfgh123&name=${data.name}&mobile=${data.mobile}&email=${data.email}`
                        }, 2000);
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });

        }

    });

    mollaSignIn.addEventListener("submit", (e) => {
        e.preventDefault();
        const singin_email = document.getElementById("singin-email")
        const err_singin_email = document.getElementById("errSingInEmail");
        const singin_pass = document.getElementById("singin-password");
        const err_singin_pass = document.getElementById("errSingInPassword");
        const signInRememberMe = document.getElementById("signin-remember").checked;

        const url = "./classes/loginValidation.php";

        const data = {
            singin_email: singin_email.value,
            singin_pass: singin_pass.value,
            signInRememberMe: signInRememberMe,
            signin: 'ASDfgh123'
        };

        var options = {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        };

        fetch(url, options)
            .then(response => response.json())
            .then(res => {
                console.log(res);
                if (res.err_logInEmail) {
                    err_singin_email.innerHTML = "<small>" + res.err_logInEmail + "</small>";
                } else {
                    err_singin_email.innerHTML = null;
                }

                if (res.err_logInPass) {
                    err_singin_pass.innerHTML = "<small>" + res.err_logInPass + "</small>";
                } else {
                    err_singin_pass.innerHTML = null;
                }

                if (res.err_log) {
                    msg.innerHTML = `
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">${res.err_log}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        `;
                } else if (res.success) {
                    msg.innerHTML = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert">${res.success}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        `;
                    setTimeout(() => {
                        location.href = `./classes/session.php?user=ASDfgh123&name=${res.name}&mobile=${res.mobile}&email=${res.email}`
                    }, 2000);
                }

            })
            .catch(error => {
                console.error("Error:", error);
            });

    });
</script>