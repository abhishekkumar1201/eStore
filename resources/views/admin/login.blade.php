<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
            <h1>Welcome Back!</h1>
            <span>Please enter your detail</span>
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

              <div class="cstmFormgroup_Box mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <div class="position-relative">
                  <input type="password" class="form-control" placeholder="Password">
                  <i class="fa-solid fa-lock passwordIcon"></i>
                  <i class="fa-solid fa-eye EyeIcon"></i>
                </div>
              </div>

              <div class="d-flex align-items-center justify-content-between">
                <div class="form-check cstmFormCheck_Box">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                  </label>
                </div>

                <a href="{{ url('/admin/forget-password') }}" class="forgotPasswordLink">Forgot Password?</a>
              </div>

              <div class="loginBtnBox mt-5">
                <a href="{{ url('/admin/dashboard') }}" class="signInBTN">Sign In</a>
              </div>

              <div class="robot">
                <img src="{{asset('assets/admin/images/google-captcha.png') }}">
              </div>

              <div class="account mt-4">
                <h2><span style="color: #000000b3;">Don't have an account?&nbsp;</span><a href="javascript:void(0)"
                    style="text-decoration: none; color: #923a97;">Sign Up</a></h2>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="loginImgBox bg-img">&nbsp;</div>
    </div>

  </section>

  <!--Js File-->
  <script src="{{asset('assets/admin/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('assets/admin/js/custom.js') }}"></script>

</body>

</html>