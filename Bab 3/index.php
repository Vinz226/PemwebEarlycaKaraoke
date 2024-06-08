<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEVIN</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="atas">
    <header id="navbar">
        <div class="container">
          <h1 class="logo">Earlyca Karaoke</h1>
          <input type="checkbox" id="menu-toggle" class="menu-toggle">
          <label for="menu-toggle" class="menu-icon">&#9776;</label>
          <nav>
            <ul type="square">
              <li class="tu"><a href="#">Catalog</a></li>
              <li><a href="#">Apps</a></li>
              <li><a href="#">Features</a></li>
              <li class="sub"><a href="#">Subscribe</a></li>
              <li class="wa"><a href="#">Help</a></li>
            </ul>
            <a class="login" href="login.php">Login</a>
          </nav>
        </div>
    </header>
    <section class="satu">
        <div class="satu1">
            <h2>All you need is karaoke</h2>
            <p>Take your karaoke party to the next <br>level with exclusive features!</p>
        </div>
        <div class="dalem">
            <div class="atasnya">
                <div class="dua">
                    <img class="gmr" src="#" alt="">
                </div>
                <div class="dua">
                    <img class="ikon" src="assets/1.png" alt="">
                </div>
                <div class="isi">
                    <h1 class="judul4">Show Your Voice Freely</h1>
                    <p>Lebih dari 10.000 lagu yang kamu sukai bisa kamu coba di sini.</p>
                    <div class="tombol">
                    <button id="openPopupBtn" onclick="openPopup()">Get Started</button>
                    </div>
                    <div id="popupForm" class="popup">
                    <form id="myForm" class="popup-content" action="member.php" method="POST">
                    <span class="close" id="closePopupBtn">&times;</span>
           <h2>Pre-register</h2>
            <div class="input-container">
            <label for="nama">Nama:</label>
            <input type="text" placeholder="" name="nama">
          </div>
        <div class="input-container">
        <label for="email">Email:</label>
        <input type="email" placeholder="" name="email">
        </div>
        <div class="input-container">
        <label for="pw">Password:</label>
        <input type="password" placeholder="" name="pw">
        </div>
        <button type="submit">Kirim</button>
        </form>
        </div>
                </div>
            </div>
            <div class="satu4">
                <img class="ikon2" src="assets/2.png" alt="">
                <h1>Features</h1>
                <div class="lima">
                    <img src="assets/Apapun Itu.png" alt="">
                    <h1 class="judul2">Find your vocal range and sing your best songs!</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, libero. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quod. <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, ea aperiam.</p>
                </div>
            </div>
            <div class="satu5">
                <img class="ikon3" src="assets/3.png" alt="">
                <h1 class="judul3">Earlyca Karaoke</h1>
                <div class="nam">
                    <ul class="two-columns">
                        <li>
                            <img src="assets/3.png" alt="">
                            <div>
                                <h3>Bar & Kantin</h3>
                                <p>Karaoke kami memiliki fasilitas bar dan kantin yang sangat luas dan bersih. <br>Harga mulai 10.000 - 50.0000.</p>
                            </div> 
                        </li>
                        <li>
                            <img src="assets/3.png" alt="">
                            <div>
                                <h3>Standart Room</h3>
                                <p>Karaoke kami memiliki standart room. <br>Harga mulai 150.000 per jam.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/3.png" alt="">
                            <div>
                                <h3>VIP Room</h3>
                                <p>Karaoke kami memiliki Vip room. <br>Harga mulai 175.000 per jam.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/3.png" alt="">
                            <div>
                                <h3>Deluxe Room</h3>
                                <p>Karaoke kami memiliki Deluxe room. <br> Harga mulai 200.000 per jam.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/3.png" alt="">
                            <div>
                                <h3>Heaven Room</h3>
                                <p>Karaoke kami memiliki Heaven room. <br>Harga mulai 225.000 per jam.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/3.png" alt="">
                            <div>
                                <h3>VVIP Room</h3>
                                <p>Karaoke kami memiliki VVIP room. <br>Harga mulai 250.000 per jam.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="carousel-container">
                    <div class="carousel-slide">
                      <img src="assets/c1.png" alt="Image 1">
                      <img src="assets/c2.png" alt="Image 2">
                      <img src="assets/c3.png" alt="Image 3">
                    </div>
                    <div class="carousel-dots"></div>
                  </div>                  
            </div>
        </div>
    </section>
    <div class="bawah">
        <table class="table">
            <thead>
              <tr>
                <th>Earlyca</th>
                <th>Information</th>
                <th>Help</th>
                <th>Comunity</th>
                <th>Content</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Guided Tour</td>
                <td>About us</td>
                <td>Help Center</td>
                <td>Professionals</td>
                <td>Blog</td>
              </tr>
              <tr>
                <td>Offers</td>
                <td>Join us</td>
                <td>Sevice status</td>
                <td>Developers</td>
                <td>Press</td>
              </tr>
              <tr>
                <td>Gift Card</td>
                <td>Copyright</td>
                <td>Contact us</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Catalog</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Suggest a song</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        <div class="garis2"></div>
        <div class="garis">
            <p>Hak Cipta © 2024 Earlyca. Semua Hak Cipta Dilindungi.</p>
        </div>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>