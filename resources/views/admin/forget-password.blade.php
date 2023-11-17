<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!--Css File-->
    <link href="{{asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/Site.css') }}" rel="stylesheet" />
    <style>

    </style>
</head>

<body>


    <section class="page forgotPassword_Sec">
        <div class="loginBox">
            <div class="loginFormfieldBox">
                <div class="loginWrapper_Box">
                    <div class="loginHeadBox text-center">
                        <a href="javascript:void(0)" class="Logo">
                            <img src="{{asset('assets/admin/images/MultiShop.png') }}" style="width:max-content;">
                        </a>
                        <h1>Forgot Password</h1>
                        <p>Enter the email you used to create your account so we can send you a link for reseting your password</span>
                    </div>

                    <div class="formFieldBox mt-5">
                        <form>
                            <div class="cstmFormgroup_Box mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <div class="position-relative">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <i class="fa-solid fa-envelope mailIcon"></i>
                                </div>
                            </div>

                            <div class="loginBtnBox mt-5">
                                <a href="javascript:void(0)" class="signInBTN">Send</a>
                            </div>

                              <div class="account mt-4">
                                <h2><span style="color: #000000b3;">Don't have an account?&nbsp;</span><a href="{{ url('/admin/login') }}"
                                    style="text-decoration: none; color: #923a97;">Sign In</a></h2>
                              </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="loginImgBox">
                <img src="{{asset('assets/admin/images/loginBanner.jpg') }}" >
            </div>
        </div>
    </section>

    <!--Js File-->
    <script src="{{asset('assets/admin/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/admin/js/custom.js') }}"></script>

</body>

</html>