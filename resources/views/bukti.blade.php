<html>
 <head>
  <title>
   Beautiful Butterfly Skincare
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #d3e4cd;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            width: 200px;
            background-color: #b5c99a;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar img {
            display: block;
            margin: 0 auto;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
            text-align: center;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: black;
            display: block;
        }
        .sidebar ul li a:hover {
            background-color: #a3b18a;
        }
        .header {
            background-color: #b5c99a;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            margin-left: 200px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header .admin {
            background-color: #d3e4cd;
            padding: 10px 20px;
            border-radius: 20px;
        }
        .content {
            margin-left: 200px;
            padding: 20px;
        }
        .payment-proof {
            background-color: #a3b18a;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
        }
        .payment-proof h2 {
            margin-top: 0;
        }
        .payment-method {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 10px;
            margin: 10px 0;
            cursor: pointer;
        }
        .payment-method:hover {
            background-color: #d3e4cd;
        }
        .upload-button {
            background-color: #d3e4cd;
            padding: 10px 20px;
            border-radius: 20px;
            margin: 20px 0;
            display: inline-block;
            cursor: pointer;
        }
        .upload-button:hover {
            background-color: #b5c99a;
        }
        .upload-area {
            background-color: #f0f0f0;
            width: 200px;
            height: 200px;
            margin: 0 auto;
            border-radius: 10px;
        }
  </style>
 </head>
 <body>
  <div class="sidebar">
   <img
          alt="Beautiful Butterfly Skincare Logo"
          height="200"
          src="assets/Logo-removebg-preview.png"
          width=""
        />
   <ul>
        <li><a href="/admin" ><i href="" class="fas fa-th-large"> Dashboard</i></a>

        </li>
        <li>
          <a href="kelola.html"><i class="fas fa-box"> Kelola Produk</i></a>

        </li>
        <li >
          <a href="transaksi.html"><i class="fas fa-exchange-alt"> transaksi </i></a>


        </li>
        <li>
          <a href="loginadmin.html"><i class="fas fa-times"> keluar</i></a>
        </li>
      </ul>
  </div>
  <div class="header">
   <h1>
    Beautiful Butterfly Skincare
   </h1>
   <div class="admin">
    ADMIN
   </div>
  </div>
  <div class="content">
   <div class="payment-proof">
    <h2>
     BUKTI PEMBAYARAN
    </h2>
    <button class="payment-method">
     Transfer Bank
    </button>
    <button class="payment-method">
     COD
    </button>
    <div class="upload-area">
    </div>
    <div class="upload-button">
     UPLOAD BUKTI
    </div>
   </div>
  </div>
 </body>
</html>
