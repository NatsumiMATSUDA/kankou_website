<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>漢口商会</title>
  </head>

  <body>

    <div class="wrapper">

      <?php include('./header.php'); ?>

      <div class="main-visual">
        <div class="main-visual_content">
          <h2>ブルーの王冠</br>アラジンブルーフレーム</h2>

          <a class="btn btn-primary" href="tel:048-822-4890" role="button">修理依頼をする</br>048-822-4890</a>
        </div>
      </div>

      <div class="container about" id="about">
        <div class="about__content">
          <h2>会社概要</h2>
          <p>xxx年創業以来、アラジンブルーフレームの販売</br>および修理を行っております。</p>
          <p>アラジンブルーフレーム認定代理店として、メーカーから</br>直接取引を行っているので安心してご利用いただけます。</p>
        </div>
      </div>

      <div class="container repair" id="repair">
        <div class="repair__content">
          <h2>修理依頼</h2>
          <h3>末長くアラジンブルーフレームを</br>お使いいただくために</h3>
          <p>熟練した技術で迅速な修理を致します。</br>お気軽にご相談ください。</p>
          <h4>埼玉県内唯一のアラジンブルーフレーム認定代理店です。</h4>
        </div>
      </div>

      <div class="container area" id="area">
        <h2>出張範囲</h2>
        <!-- 画像入れる-->
        <div class="area__flex">
          <div class="area__image">
            <img src="images/saitama.gif" alt="出張範囲">
          </div>
          <div class="area__text">
            <h3>さいたま市10区・蕨市</br>・川口市・上尾市</h3>
            <p>その他の地域への出張修理につきましてはご相談ください。</p>

            <a class="btn btn-primary" href="tel:048-822-4890" role="button">修理依頼をする</br>048-822-4890</a>
          </div>
        </div>
      </div>

      <div class="container products" id="products">
        <h2>アラジンブルーフレーム販売</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src='images/stoves.jpeg' class="d-block w-100" alt="アラジンストーブ1">
            </div>
            <div class="carousel-item">
              <img src='images/secondimage.jpeg' class="d-block w-100" alt="アラジンストーブ2">
            </div>
            <div class="carousel-item">
              <img src='images/thirdimage.jpeg' class="d-block w-100" alt="アラジンストーブ3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>

      <div class="container access" id="access">
        <h2>アクセス</h2>
        <div class="access__content">
          <!-- Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.5124702056623!2d139.65215631499336!3d35.86095632770206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ea81e1082757%3A0xe684399917e9505b!2z77yI5pyJ77yJ5ryi5Y-j5ZWG5LyaIOaaluaIv-apn-WZqOS_rueQhumDqA!5e0!3m2!1sja!2sjp!4v1619706827927!5m2!1sja!2sjp" width="500" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>




  <!--
      <a href="#" class="phone_buttom">
        <h3>修理依頼をする</br>
        048-822-4890</h3>
      </a>
  -->

      <?php include('./footer.php'); ?>


    </div>

<!--
    <div class="hero">
      <div class="hero__image">
        <h2>青い王冠、ブルーフレーム</h2>
        <p>アラジンブルーフレームヒーターの修理致します</p>
      </div>
    </div>

    <div class="main">
    </div>

    <div class="footer">
    </div>
-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>


</html>
