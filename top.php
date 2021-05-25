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

      <header>
        <h1>
          <a href="top.php">漢口商会</a>
        </h1>
        <nav>
          <ul>
            <li><a href="#">会社概要</a></li>
            <li><a href="#">修理依頼</a></li>
            <li><a href="#">出張範囲</a></li>
            <li><a href="#">製品販売</a></li>
            <li><a href="#">アクセス</a></li>
            <li><a href="contact/contact.php">お問い合わせ</a></li>
          </ul>
        </nav>
      </header>

      <div class="main-visual">
        <div class="main-visual_content">
          <h2>ブルーの王冠</br>アラジンブルーフレーム</h2>

          <a class="btn btn-primary" href="tel:048-822-4890" role="button">修理依頼をする</br>048-822-4890</a>
        </div>
      </div>

      <div class="container about">
        <div class="about_content">
          <h2>会社概要</h2>
        </div>
      </div>

      <div class="container repair">
        <div class="repair__content">
          <h2>修理依頼</h2>
          <h3>末長くアラジンブルーフレームを</br>お使いいただくために</h3>
          <p>熟練した技術で迅速な修理を致します。</br>お気軽にご相談ください。</p>
          <h4>埼玉県内唯一のアラジンブルーフレーム認定代理店です。</h4>
        </div>
      </div>

      <div class="container area">
        <h2>出張範囲</h2>
        <!-- 画像入れる-->
        <img src="images/saitama.gif" alt="出張範囲">
        <h3>さいたま市10区・蕨市・川口市・上尾市</h3>
        <h4>その他の地域への出張修理</br>につきましては、ご相談ください。</h4>

        <a class="btn btn-primary" href="tel:048-822-4890" role="button">修理依頼をする</br>048-822-4890</a>

      </div>

      <div class="container products">
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

      <div class="container access">
        <h2>アクセス</h2>
        <div class="access__content">
          <!-- Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.5124702056623!2d139.65215631499336!3d35.86095632770206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ea81e1082757%3A0xe684399917e9505b!2z77yI5pyJ77yJ5ryi5Y-j5ZWG5LyaIOaaluaIv-apn-WZqOS_rueQhumDqA!5e0!3m2!1sja!2sjp!4v1619706827927!5m2!1sja!2sjp" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <p>浦和駅より徒歩6分</p>
        </div>

      </div>

      <div class="container contact">
        <h2>お問い合わせ</h2>
        <!-- お問い合わせフォーム -->
        <form class="contact__form" action="index.html" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">メールアドレス</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="メールアドレス">
            <small id="emailHelp" class="form-text text-muted">メールアドレスが第三者に提供されることはありません</small>
          </div>
          <div class="form-group">
            <label for="inputAddress">お名前</label>
            <input type="text" class="form-control" id="InputName" placeholder="漢口 太郎">
          </div>
          <div class="form-group">
            <label for="inputAddress">電話番号</label>
            <input type="text" class="form-control" id="InputPhoneNumber" placeholder="123-4567-8900">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">お問い合わせカテゴリ</label>
            <select id="inputState" class="form-control">
              <option selected>選択してください</option>
              <option value="form_repair">修理に関するお問い合わせ</option>
              <option value="form_stove">ストーブ購入に関するお問い合わせ</option>
              <option value="form_core">ストーブ芯の購入に関するお問い合わせ</option>
              <option value="form_other">その他のお問い合わせ</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">お問い合わせ内容</label>
            <textarea class="form-control" id="InputContent" rows="3"></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name="button">送信</button>

          <p>後ほどXXX@gmail.comからご指定のメールにご連絡します。</p>

        </form>
      </div>


  <!--
      <a href="#" class="phone_buttom">
        <h3>修理依頼をする</br>
        048-822-4890</h3>
      </a>
  -->
      <footer>
        <h3>有限会社 漢口商会</h3>
        <p>埼玉県さいたま市浦和区仲町1-9-13カンコウビル1階</br>
          電話番号: 048-822-4890
        </p>
        <div class="">

        </div>

      </footer>


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
