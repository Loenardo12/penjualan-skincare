<!DOCTYPE html>
<html>
  <head>
    <title>Beautiful Butterfly Skincare - Login</title>
    <link rel="stylesheet" href="CSS/user.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="back-icon">
      <a href="/loginuser" class="login-button"
        ><i class="fas fa-arrow-left"></i
      ></a>
    </div>
    <div class="container">
      <div class="logo">
        <img
          alt="Beautiful Butterfly Skincare Logo"

          src="assets/Logo-removebg-preview.png"

        />
      </div>
      <!-- Bungkus setiap input dalam div form-group -->
      <form action=" {{ route('registrasi.submit') }} " method="POST">

         @csrf
      <div class="form-group">
        <input name="email" placeholder="Email" type="email" />
      </div>
      <div class="form-group">
        <input name="name" placeholder="Username" type="text" />
      </div>
      <div class="form-group">
        <input name="nohp" placeholder="No Handphone" type="text" />
      </div>
      <div class="form-group">
        <input name ="password" placeholder="Password" type="password" />
      </div>

      <button  class="login-button">submit</button>
    </form>

</div>

  </body>
</html>
