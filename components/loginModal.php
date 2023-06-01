<div class="tab-content" id="tab-content-5">
    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
        <form action="#">
            <div class="form-group">
                <label for="singin-email">Username or email address *</label>
                <input type="text" class="form-control" id="singin-email" name="singin-email" required>
            </div><!-- End .form-group -->

            <div class="form-group">
                <label for="singin-password">Password *</label>
                <input type="password" class="form-control" id="singin-password" name="singin-password" required>
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

                <a href="#" class="forgot-link">Forgot Your Password?</a>
            </div><!-- End .form-footer -->
        </form>
    </div><!-- .End .tab-pane -->
    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
        <form action="#" id="mollaReg">
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
                <input type="text" class="form-control" id="register-mobile" name="register-mobile">
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
    mollaReg.addEventListener("submit", (e) => {
        e.preventDefault();
        const registerName = document.getElementById("register-name");
        const errName = document.getElementById("errName");
        const registerEmail = document.getElementById("register-email");
        const errEmail = document.getElementById("errEmail");
        const registerMobile = document.getElementById("register-mobile");
        const errMobile = document.getElementById("errMobile");
        const registerPassword = document.getElementById("register-password");
        const errPass = document.getElementById("errPass");

        if (!document.getElementById("register-policy").checked) {
            document.getElementById("errAgree").innerHTML = "<small>Pleace check this button!</small>";
        } else {
            document.getElementById("errAgree").innerHTML = null;

            var url = "./classes/loginValidation.php";
            var data = {
                name: registerName.value,
                email: registerEmail.value,
                mobile: registerMobile.value,
                pass: registerPassword.value
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
                    if (res.errName) {
                        errName.innerHTML = "<small>" + res.errName + "</small>";
                    } else {
                        errName.innerHTML = "";
                    }
                    if (res.errEmail) {
                        errEmail.innerHTML = "<small>" + res.errEmail + "</small>";
                    } else {
                        errEmail.innerHTML = "";
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });

        }

    })
</script>