<html>
  <head>
    <title>Beautiful Butterfly Skincare</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #C1CFA1;
      }
      .header {
        background-color: #fff;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
      }
      .header img {
        height: 100px;
      }
      .header .search-bar {
        flex-grow: 1;
        margin: 0 20px;
        position: relative;
      }
      .header .search-bar input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 20px;
      }
      .header .search-bar .fa-search {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #ccc;
      }
      .header .icons {
        display: flex;
        align-items: center;
      }
      .header .icons a {
        margin-left: 20px;
        color: #000;
        text-decoration: none;
      }
      .nav {
        display: flex;
        justify-content: center;
        background-color: #f5deb3;
        padding: 10px 0;
      }
      .nav a {
        margin: 0 20px;
        color: #000;
        text-decoration: none;
        font-weight: bold;
      }
      .nav a.active {
        background-color: #A5B68D;
        padding: 10px 20px;
        border-radius: 5px;
      }
      .container {
        padding: 20px;
      }
      .section {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
      }
      .section h2 {
        margin-top: 0;
      }
      .box {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
      }
      .box h2 {
        margin-top: 0;
      }
      .payment-methods {
        display: flex;
        flex-direction: column;
      }
      .payment-methods button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        cursor: pointer;
        font-size: 16px;
      }
      .payment-methods button i {
        font-size: 24px;
      }
      .input-box {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 10px;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <a href="/categories"></a>
      <img
        alt="Beautiful Butterfly Skincare Logo"
        height="50"
        src="assets/Logo-removebg-preview.png"
        width="150"
      />
      <div class="search-bar">
        <input placeholder="Search" type="text" />
        <i class="fas fa-search"></i>
      </div>
      <div class="icons">
        <a href="/mybag"><i class="fas fa-shopping-bag"></i> My Bag(0)</a>
        <a href="/profile"><i class="fas fa-user"></i> My Account</a>
      </div>
    </div>
    <div class="nav">
      <a class="active" href="/mybag">Keranjang Belanja</a>
      <a href="#">Pembayaran</a>
    </div>
    <div class="container">
      <div class="box">
        <h2>Rincian Produk</h2>
        <textarea
          class="input-box"
          rows="4"
          placeholder="Masukkan rincian produk..."
        ></textarea>
      </div>
      <div class="box">
        <h2>Pembayaran</h2>
        <div class="payment-methods">
          <button>
            Transfer bank
            <i class="fas fa-university"></i>
          </button>
          <button>
            COD
            <i class="fas fa-truck"></i>
          </button>
        </div>
      </div>
      <div class="box">
        <h2>Order Anda</h2>
        <textarea
          class="input-box"
          rows="4"
          placeholder="Masukkan rincian order..."
        ></textarea>
      </div>
      <div class="box">
        <h2>Alamat</h2>
        <textarea
          class="input-box"
          rows="4"
          placeholder="Masukkan alamat..."
        ></textarea>
      </div>
    </div>
  </body>
</html>
