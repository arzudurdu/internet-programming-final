<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <title>Toyzz Shop</title>
  </head>
  <body>
    <!--header section start-->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/arzu.png" alt="logo" height="100" />
        </a> 
        <nav class="navbar">
            <a href="index.html" class="active">Anasayfa</a>
            <a href="about.html">Hakkımızda</a>
            <a href="urunler.html">Ürünler</a>
            <a href="iletisim.html">İletişim</a>
        </nav>
        <div class="buttons">
            <button id="search-btn">
                <i class="fas fa-search"></i>
            </button>
            
                <a href="login/giris.php">giriş yap</a>
            <button id="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="search-form">
            <input 
            type="text" 
            class="search-input" 
            id="search-box"
            placeholder="Ara"
            />
            <i class="fas fa-search"></i>
        </div>
    </header>
    <!--header section end-->

    <!--home section start-->
    <section class="home" id="home">
        <div class="content">
            <h3>OYUNCAK</h3>
            <p>
                Aralık Ayına Özel Süper İndirimler !
            </p>
            <a href="#"  class="btn">İNCELE</a>
        </div>
    </section>
    <!--home section end-->


    <!--menu section start -->
    <section class="menu" id="menu">
      <h1 class="heading">En Çok <span>Satanlar</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="box-head">
            <img src="images/Hot_Wheels.jpg" alt="menu" />
            <span class="menu-category">ARABA</span>
            <h3>HOT WHEELS ARABALARI</h3>
            <div class="price">249.99TL <span>199.99TL</span></div>
          </div>
          <div class="bot-bottom">
            <a href="#" class="btn">Sepete Ekle</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/EgiticiTablet_.jpg" alt="menu" />
            <span class="menu-category">TABLET</span>
            <h3>FİSHER PRİCE EĞİTİCİ TABLET</h3>
            <div class="price">299.99TL <span>199.99TL</span></div>
          </div>
          <div class="bot-bottom">
            <a href="#" class="btn">Sepete Ekle</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/barbiev.jpg" alt="menu" />
            <span class="menu-category">BEBEK EVİ</span>
            <h3>BARBİE'NİN PORTATİF EVİ</h3>
            <div class="price">649.99TL <span>599.99TL</span></div>
          </div>
          <div class="bot-bottom">
            <a href="#" class="btn">Sepete Ekle</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="images/AlishaMutfak_Seti.jpg" alt="menu" />
            <span class="menu-category">SARISIN ALISHA</span>
            <h3>ALİSHA MUTFAK SETİ</h3>
            <div class="price">199.99TL <span>99.99TL</span></div>
          </div>
          <div class="bot-bottom">
            <a href="#" class="btn">Sepete Ekle</a>
          </div>
        </div>
      </div>
    </section>
    <!--menu section end -->

    <!--products section start -->
    <section class="products" id="products">
        <h1 class="heading">FIRSAT<span>ÜRÜNLERİ</span><h1>
            <div class="box-container">
                <div class="box">
                    <div class="box-head">
                        <span class="title">MUTLU YILLAR BARBİE</span>
                        <a href="#" class="name">Barbie 2022 Mutlu Yıllar Bebeği</a>
                    </div>
                    <div class="image">
                        <img src="images/myb.jpg" alt="" />
                    </div>
                    <div class="box-bottom">
                        <div class="info">
                            <b class="price">499.99TL</b>
                            <span class="amount">İnternete Özel Fiyat</span>
                        </div>
                        <div class="product-btn">
                            <a href="#">
                                <i class="fas fa-plus"></i> <!--artı ekledim--> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-head">
                        <span class="title">DİNO BALON</span>
                        <a href="#" class="name">Squeakee İnteraktif Dino Balon</a>
                    </div>
                    <div class="image">
                        <img src="images/bln.jpg" alt="" />
                    </div>
                    <div class="box-bottom">
                        <div class="info">
                            <b class="price">2.249,99TL</b>
                            <span class="amount">İnternete Özel Fiyat</span>
                        </div>
                        <div class="product-btn">
                            <a href="#">
                                <i class="fas fa-plus"></i> <!--artı ekledim--> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-head">
                        <span class="title">ROBOT RAMPASI</span>
                        <a href="#" class="name">Robogo Action Time Robot Rampası</a>
                    </div>
                    <div class="image">
                        <img src="images/rbg.jpg" alt="" />
                    </div>
                    <div class="box-bottom">
                        <div class="info">
                            <b class="price">149.99TL</b>
                            <span class="amount">İnternete Özel Fiyat</span>
                        </div>
                        <div class="product-btn">
                            <a href="#">
                                <i class="fas fa-plus"></i> <!--artı ekledim--> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-head">
                        <span class="title">EĞİTİCİ KÖPEKÇİK </span>
                        <a href="#" class="name">Fisher Price Eğitici Köpekçik </a>
                    </div>
                    <div class="image">
                        <img src="images/fpe.jpg" alt="" />
                    </div>
                    <div class="box-bottom">
                        <div class="info">
                            <b class="price">449.99TL</b>
                            <span class="amount">İnternete Özel Fiyat</span>
                        </div>
                        <div class="product-btn">
                            <a href="#">
                                <i class="fas fa-plus"></i> <!--artı ekledim--> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--products section end -->

    <!--about section start -->
    <section class="about">
        <h1 class="heading">Toyzz Shop<span>Oyuncak Kategorisi Ürünleri</span></h1>
        <div class="row">
            <div class="image"> <!--sol tarafta -->
                <img src="images/ay.jpg" alt="about">
            </div>
            <div class="content">
                <h3>Toyzz Shop’a hoş geldiniz</h3>
                <p>Zengin oyuncak çeşidi ile herkes için eğlence dolu bir alışveriş deneyimi sunmak için buradayız.</p>
                <p>Çocuğunuzun oynarken öğrenebileceği, gelişimine katkı sağlayabilecek tüm oyuncakları;Eğitici Oyuncaklar,
                    Oyuncak Bebekler ve Oyuncak Arabalar,Bisiklet ve Akülü Araçlar bölümlerimizde bulabilirsiniz.</p>
                <p>Peluş oyuncaklar büyük küçük her yaştan oyuncak severin beğenisi kazanmıştır,en sevdiğiniz çizgi film 
                    karakterini evinizde ağırlamaya ne dersiniz?.
                    Bizde keşfetmek serbest.</p>
                <a href="#" class="btn">Şimdi İncele</a>
            </div> 
        </div>
    </section>
    <!--about section end -->

    <!--contact section start -->
        <h1 class="heading"><span>İletişim</span></h1>
        <iframe 
        class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12037.852231349814!2d28.
        985091699999998!3d41.03700175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7650656bd63%3A0
        x8ca058b28c20b6c3!2zVGFrc2ltIE1leWRhbsSxLCBHw7xtw7zFn3N1eXUsIDM0NDM1IEJleW_En2x1
        L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1672808093724!5m2!1str!2str"  
        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <section class="iletişim">
            <div class="form">
                <div class="row"> <!--kapsayıcı-->
                    <div class="col25">
                        <label for=""> Adınız </label>
                    </div>
                    <div class="col75">
                        <input type="text" placeholder="İsminizi Giriniz">
                    </div>

                    <div class="col25">
                        <label for=""> Soyadınız </label>
                    </div>
                    <div class="col75">
                        <input type="text" placeholder="Soyadınız Giriniz">
                    </div>

                    <div class="col25">
                        <label for=""> Mesaj </label>
                    </div>
                    <div class="col75">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row">
                        <input type="submit" value="GÖNDER">

                    </div>
                       
                    </form>
                </div>
            </div>
        </section>

    <!--contact section end -->

    <!--footer section start -->
    <section class="footer ">
        <div class="search">
            <input type="text" 
            class="search-input"
            placeholder="search"/>
            <button class="btn btn-primary">Arama</button>
        </div>
    </seciton>
    <!--contact section end -->



    <script src="js/script.js"></script> <!--import ettim-->
  </body>
</html>
