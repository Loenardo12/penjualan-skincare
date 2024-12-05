<!DOCTYPE html>
<html>

<head>
    <title>Beautiful Butterfly Skincare - Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .container {
            text-align: center;
            position: relative;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px;
        }

        .input-container {
            margin-bottom: 15px;
            position: relative;
        }

        .input-container input {
            width: 300px;
            padding: 10px;
            border: 1px solid #e0d7d7;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f8f1e7;
        }

        .input-container i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .login-button {
            background-color: #a5b68d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .footer {
            background-color: #d8b4d2;
            color: white;
            padding: 10px 0;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0;
        }

        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .back-icon {
            position: absolute;
            top: 20px;
            font-size: 24px;
            cursor: pointer;
        }

        .back-icon {
            left: 20px;
        }
    </style>
</head>

<body>
    <!-- <div class="back-icon">
      <a href="dashboard.html">
        <i class="fas fa-arrow-left"></i>
      </a>
    </div> -->
    <div class="container">
        <div class="logo">
            <img alt="Beautiful Butterfly Skincare Logo" src="assets/Logo-removebg-preview.png" style="width: 300px" />
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="input-container">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="input-container">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="login-button">Log In as admin</button>
            <hr>
            {{-- <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p> --}}
        </form>



</body>

</html>
