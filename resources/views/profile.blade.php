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
        background-color: #f8f8f8;
      }
      .header {
        background-color: #ffffff;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ddd;
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
        border: 1px solid #ddd;
        border-radius: 20px;
      }
      .header .search-bar .fa-search {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
      }
      .header .nav-links {
        display: flex;
        align-items: center;
      }
      .header .nav-links a {
        margin-left: 20px;
        color: #333;
        text-decoration: none;
      }
      .profile-card {
        background-color: #c1cfa1;
        padding: 20px;
        text-align: center;
      }
      .profile-card .card {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        display: inline-block;
        text-align: left;
        position: relative;
        width: 80%;
        max-width: 600px;
      }
      .profile-card .card img {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        display: block;
        margin: 0 auto 10px;
      }
      .profile-card .card h2 {
        margin: 0;
        font-size: 24px;
        text-align: center;
      }
      .profile-card .card p {
        margin: 5px 0;
        font-size: 16px;
      }
      .profile-card .card .edit-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #c1cfa1;
        border-radius: 50%;
        padding: 5px;
        cursor: pointer;
      }
      .profile-card .card .edit-icon i {
        color: #fff;
      }
      .follow-me {
        background-color: #c1cfa1;
        padding: 10px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
      }
      .social-links {
        text-align: center;
        padding: 20px;
      }
      .social-links a {
        margin: 0 10px;
        color: #333;
        font-size: 24px;
        text-decoration: none;
      }
      .footer {
        text-align: center;
        padding: 10px;
        font-size: 14px;
      }
      .editable {
        border: 1px dashed #ccc;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <img
        alt="Beautiful Butterfly Skincare Logo"
        src="assets/Logo-removebg-preview.png"
      />
      <div class="search-bar">
        <input placeholder="Search" type="text" />
        <i class="fas fa-search"> </i>
      </div>
      <div class="nav-links">
        <a href="/mybag"> My Bag(0) </a>
        <a href="#"> My Account </a>
      </div>
    </div>
    <div class="profile-card">
      <div class="card">
        <img
          alt="Profile Picture"
          height="100"
          src="https://storage.googleapis.com/a1aa/image/7PHFD48CtoIeMqcCiptiEaUbVt9vIKLDheyeBJhBWxi5baGnA.jpg"
          width="100"
        />
        <h2 id="name">Roberto James Julio</h2>
        <p>
          Email :
          <span id="email"> robertojamesjulio@gmail.com </span>
        </p>
        <p>
          No.Hp :
          <span id="phone"> 087860123456 </span>
        </p>
        <p>
          Alamat :
          <span id="address"> Malang, Tasik Madu Jawa Timur </span>
        </p>
        <div class="edit-icon" onclick="editProfile()">
          <i class="fas fa-edit"> </i>
        </div>
      </div>
    </div>
    <div class="follow-me">Follow Me</div>
    <div class="social-links">
      <a href="#">
        <i class="fab fa-instagram"> </i>
      </a>
      <a href="#">
        <i class="fab fa-facebook"> </i>
      </a>
      <a href="#">
        <i class="fab fa-twitter"> </i>
      </a>
    </div>
    <div class="footer">Follow for more information</div>
    <script>
      function editProfile() {
        var name = document.getElementById("name");
        var email = document.getElementById("email");
        var phone = document.getElementById("phone");
        var address = document.getElementById("address");

        if (name.isContentEditable) {
          name.contentEditable = "false";
          email.contentEditable = "false";
          phone.contentEditable = "false";
          address.contentEditable = "false";
          name.classList.remove("editable");
          email.classList.remove("editable");
          phone.classList.remove("editable");
          address.classList.remove("editable");
        } else {
          name.contentEditable = "true";
          email.contentEditable = "true";
          phone.contentEditable = "true";
          address.contentEditable = "true";
          name.classList.add("editable");
          email.classList.add("editable");
          phone.classList.add("editable");
          address.classList.add("editable");
        }
      }
    </script>
  </body>
</html>
