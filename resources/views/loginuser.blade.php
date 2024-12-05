<!DOCTYPE html>
<html>

<head>
    <title>Beautiful Butterfly Skincare - Login</title>
    <link rel="stylesheet" href="CSS/user.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="back-icon">
        <a href="/dashboard" class="login-button"><i class="fas fa-arrow-left"></i></a>
    </div>
    <div class="profile-icon">
        <i class="fas fa-user-circle"></i>
    </div>
    <div class="container">
        <div class="logo">
            <img alt="Beautiful Butterfly Skincare Logo"  src="assets/Logo-removebg-preview.png" style="width: 300px" ></div>
         @if (session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{ session('error') }}
            </div>
        @endif
            <form action=" {{ route('login.submit') }} " method="POST">
        @csrf
      <div class="form-group">
        <input name="email" placeholder="Email" type="email" />
      </div>
          <div class="form-group">
        <input name ="password" placeholder="Password" type="password" />
      </div>

      <button  class="login-button">submit</button>
      <p>
        Have an account?
        {{-- <a href={{ route('/registrasi') }}> Register  </a> --}}
    </p>
    </form>

    </div>
</body>


</html>
