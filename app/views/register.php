<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../../public/css/style.css"/>
</head>
<body>
    <div> 
        <div class="center">
  <h1>Register</h1>
  <form action="../controllers/UserController.php" method="post">
    <div class="txt_field">
        <input type="text" placeholder="Username" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" placeholder="Password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
    <div class="txt_field">
      <input type="email" placeholder="Email" name="email" required>
      <span></span>
      <label>Email</label>
    </div>
    <input type="submit" name="submit" value="Register">
    </div>
  </form>
</div>
  <main>
    <div class="hContainer login-img">
        <div class="kotak-login"></div>
          <nav class="sidebar">
            <img class="user-logo" src="../img/icon-user.png" alt="user-logo">
              <ul class="nav-list">
                  <li class="list-item"><a class="login" href="../views/login.html">Login/Daftar</a></li>
                  <li class="list-item"><a class="fa" href="../views/galeri.html">Galeri</a></li>
                  <li class="list-item"><a class="fa" href="../views/kontak.html">Kontak</a></li>
                  <li class="list-item"><a class="fa" href="../views/pendaftaran.html">Daftar Haji & Umroh</a></li>
                  <li class="list-item"><a class="fa" href="../views/panduan.html">Panduan</a></li>
                  <li class="list-item"><a class="fa tentang-kami" href="../views/tentang-kami.html">Tentang Kami</a></li>
                  <li class="list-item"><a class="logout" href="../controllers/logout.php">Logout</a></li>
              </ul>
          </nav>
             <nav class="wrapper">
                <a href="../../index.html"><img class="img-logo" src="../img/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a> 
                  <button class="hamburger">
                    <div class="bar"></div>
                  </button>
          </nav>
    </div>
  </main>
  <script src="../../public/js/script.js"></script>
</body>
</html>
