<div class="site__body">
    <div class="holder" style="display: none;">
        <div class="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <title>Đăng nhập - Tạp hóa MMO</title>

    <script type="text/javascript">
        function doValidator() {
            $("#msgSignup").html("");

            $('#err_username').html('');
            $('#err_password').html('');
            $('#err_confirmPassword').html('');
            $('#err_email').html('');
            $('#err_rule').html('');
            $.ajax({
                url: "/public/singup/error.json",
                type: "POST",
                data: $("#formSignup").serialize(),
                async: false,
                success: function(response) {
                    if (response.hasError) {
                        var len = $.map(response.lstErr, function(n, i) {
                            return i;
                        }).length;
                        for (var i = 0; i < len; i++) {
                            $('#err_' + response.lstErr[i].propertyName).html(
                                response.lstErr[i].message);
                        }
                    } else {
                        signupUser();
                    }
                }
            })
        }

        function signupUser() {
            $("#msgSignup").html("");

            const formData = $('#formSignup').serialize();
            $.post("/singup.html", formData, function(data) {
                    if (data.message == "success") {
                        $("#msgSignup").html("\u0110\u0103ng k\u00FD th\u00E0nh c\u00F4ng");
                        swal("Đăng ký thành công!", "Vui lòng đăng nhập.", "success");
                        $("#login_email").val($("#signup_email").val());
                    }
                })
                .fail(function(data) {
                    $("#msgSignup").html("\u0110\u0103ng k\u00FD th\u1EA5t b\u1EA1i. Vui l\u00F2ng t\u1EA3i l\u1EA1i trang v\u00E0 th\u1EED l\u1EA1i");
                });


            // if (typeof grecaptcha !== 'undefined') {
            // 	var siteKey = "6LdlMFIcAAAAALDBHMRWYQXmpfU34Kgz11OmxTku";
            // 	grecaptcha.execute(siteKey, {action: "register"}).then(function(response) {
            // 		$('#response').val(response);
            // 		var formData= $('#formSignup').serialize();
            //
            //         $.post("/singup.html", formData,function(data){
            //             if(data.message == "success"){
            //                 $("#msgSignup").html("\u0110\u0103ng k\u00FD th\u00E0nh c\u00F4ng");
            //                 swal("Đăng ký thành công!", "Vui lòng đăng nhập.", "success");
            //                 $("#login_email").val( $("#signup_email").val());
            //             }
            //         })
            //         .fail(function(data) {
            //         	$("#msgSignup").html("\u0110\u0103ng k\u00FD th\u1EA5t b\u1EA1i. Vui l\u00F2ng t\u1EA3i l\u1EA1i trang v\u00E0 th\u1EED l\u1EA1i");
            //         });
            //     });
            // }
        }

        function beforeLogin() {
            $('#formLogin').submit();

            // if (typeof grecaptcha !== 'undefined') {
            // 	var siteKey = "6LdlMFIcAAAAALDBHMRWYQXmpfU34Kgz11OmxTku";
            // 	grecaptcha.execute(siteKey, {action: "register"}).then(function(response) {
            // 		$('#response2').val(response);
            // 		$('#formLogin').submit();
            // 	});
            // }
        }
    </script>

    <div>&nbsp;</div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex flex-column">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">Đăng nhập</h3>

                            <hr>
                            <form id="formLogin" action="https://taphoammo.net/login-validator" method="post"><input type="hidden" name="_csrf" value="a9e690c8-55d6-4b77-8903-132bab5f304d">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="login_email" name="email" class="form-control text-lowercase" fdprocessedid="4lywlx">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input id="login_password" type="password" name="password" class="form-control" fdprocessedid="9b4gd">
                                    <small class="form-text text-muted">
                                        <a href="https://taphoammo.net/forgetPassword.html">Quên mật khẩu</a>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <input id="rem" type="checkbox" checked="" name="remember-me">
                                    <label for="rem">Ghi nhớ đăng nhập</label>
                                </div>

                                <input type="hidden" id="response2" name="response2" value="">
                                <button id="loginButton" onclick="beforeLogin();" type="button" class="btn btn-primary mt-4" fdprocessedid="0pgdyn">Đăng nhập</button>
                            </form>
                            <br>
                            <h6>Or</h6>
                            <div style="padding-left: 10px;" class="row">

                                <svg version="1.1" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                </svg>
                                <div style="padding: 0px;" class="col-10">
                                    <a class="oauth-container btn darken-4 white black-text" href="https://taphoammo.net/login-with-google" style="text-transform:none;background-color: #4285f4; color: white;">
                                        Login with Google
                                    </a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-8 d-flex flex-column mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Đăng ký</h3>
                            <p class="text-danger" id="msgSignup">

                                <span class="text-success">Chú ý: Nếu bạn sử dụng các chương trình</span> <span class="text-danger">Bypass Captcha </span> <span class="text-success">có thể không đăng ký tài khoản được.</span>
                            </p>
                            <hr>
                            <form id="formSignup" action="https://taphoammo.net/singup.html" method="post" enctype="utf8"><input type="hidden" name="_csrf" value="a9e690c8-55d6-4b77-8903-132bab5f304d">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Tài khoản</label>
                                        <input type="text" class="form-control" id="user.username" name="user.username" value="" fdprocessedid="mjgr3">
                                        <label id="err_username" class="text-danger"></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input id="signup_email" type="email" class="form-control text-lowercase" name="user.email" value="" fdprocessedid="dotzw">
                                        <label id="err_email" class="text-danger"></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="form-control" id="user.password" name="user.password" value="" fdprocessedid="s75uqm">
                                        <label id="err_password" class="text-danger"></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="" fdprocessedid="8sieuf">
                                        <label id="err_confirmPassword" class="text-danger"></label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="form-check col-md-12">
                                            <input class="form-check-input" type="checkbox" id="isRule" checked="checked" required="" name="rule" value="true"><input type="hidden" name="_rule" value="on">
                                            <label class="form-check-label" for="isRule">Tôi đã đọc và đồng ý với</label>
                                            <a href="https://taphoammo.net/quy-dinh.html" target="_blank">Điều khoản sử dụng Tạp Hóa MMO</a>
                                        </div>
                                        <label id="err_rule" class="text-danger"></label>
                                    </div>
                                    <input type="hidden" id="response" value="" name="response">
                                </div>
                                <button type="button" onclick="doValidator()" class="btn btn-primary mt-4" fdprocessedid="uzdg9p">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>