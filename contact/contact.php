<?php
//エスケープ処理やデータチェックを行う関数ファイルの読み込み
require '../libs/functions.php';

//POSTされたデータがあれば変数に格納、なければNULL(変数の初期化)
$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
$subject = isset($_POST['subject']) ? $_POST['subject'] : NULL;
$body = isset($_POST['body']) ? $_POST['body'] : NULL;

//送信ボタンが押された場合の処理
if (isset($_POST['submitted'])) {

  //POSTされたデータに不正なあたいがないかを別途定義した checkInput() 関数で検証
  $_POST = checkInput($_POST);

  //filter_var を使って値をフィルタリング
  if(isset($_POST['name'])) {
    //スクリプトタグがあれば除去
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  }

  if(isset($_POST['email'])) {
    //全ての開業文字を削除
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
    //E-mailの形式にフィルタ
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  }
  if(isset($_POST['tel'])) {
    //数式の形式にフィルタ(数字、+、- 記号以外を除去)
    $tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
  }

  if(isset($_POST['subject'])) {
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  }

  if(isset($_POST['body'])) {
    $body = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
  }

  //POST でのリクエストの場合
  if ($_SERVER['REQUEST_METHOD']==='POST') {

    //メールアドレス等を記述したファイルの読み込み
    require '../libs/mailvars.php';

    //メール本文の組み立て。値は h() でエスケープ処理
    $mail_body = 'コンタクトページからのお問い合わせ' . "\n\n";
    $mail_body .= "お名前: " .h($name) . "\n";
    $mail_body .= "Email: " .h($email) . "\n";
    $mail_body .= "お電話番号: " .h($tel) . h($body);

    //---------- sendmailを使ったメールの送信処理 ----------

    //メールの宛先(名前<メールアドレス>の形式)。値は mailvars.php に記載
    $mailTo = mb_encode_mimeheader(MAIL_TO_NAME) . "<" . MAIL_TO. ">";

    //Return-Pathに指定するアドレス
    $returnMail = MAIL_RETURN_PATH;
    //mbstringの日本語設定
    mb_language('ja');
    mb_internal_ecoding('UTF-8');

    //送信者情報(Ftom ヘッダー)の設定
    $header = "From: " . mb_encode_mimeheader($name) ."<" . $email . ">\n";
    $header .= "Cc: " . mb_encode_mimeheader($MAIL_CC_NAME) ."<" . MAIL_CC . ">\n";
    $header .= "Bcc: <" . MAIL_BCC.">";

    //メールの送信結果を変数に代入
    if(ini_get('safe_mode')) {
      //セーフモードがOnの場合は第5引数が使えない
      $result = mb_send_mail($mailTo, $subject. $mail_body, $header);
    } else {
      $result = mb_send_mail($mailTo, $subject, $mail_body, $header, -f . $returnMail);
    }
    //メールが送信された場合の処理
    if($result) {
      //空の配列を代入し、全てのPOST変数を消去
      $_POST = array();

      //変数の値も初期化
      $name = '';
      $email = '';
      $tel = '';
      $subject = '';
      $body = '';

      //再読み込みによる二重送信の防止
      $params = '?result='. $result;

      //サーバー変数 $_SERVER['HTTPS']が取得できない環境用
      if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and
      $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
        $_SERVER['HTTPS'] = 'on';
      }
      $url = (empty($_SERVER['HTTPS']) ? 'http://' :
      'https://').$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
      header('Location:' . $url . $params);
      exit;
    }
  }
}
?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheet.css">
    <title>漢口商会 お問い合わせ</title>
  </head>

  <body>

    <a class="to-top" href="../top.php">トップページへ戻る</a>

    <div class="container contact">
      <h2>お問い合わせ</h2>
      <?php if(isset($_GET['result']) && $_GET['result']): //送信が成功した場合 ?>
      <h4>送信完了</h4>
      <p>2~3営業日以内に連絡致します。</p>
      <hr>
      <?php elseif(isset($result) && !$result): //送信が失敗した場合 ?>
      <h4>送信失敗</h4>
      <p>送信に失敗しました。</br>しばらくして再度お試しいただくか、メールにてご連絡ください。</p>
      <p>メール:<a href="sirosirochloegg@gmail.com">Contact</a></p>
      <hr>
      <?php endif; ?>

      <form id="form" class="contact__form" method="post" novalidate><!-- novalidateはrequiredをストップさせるために使う。サーバー側でバリデーションの動作確認をしてから、novalidateを消してブラウザ側のバリデーションをオンにする。 -->
        <div class="form-group">
          <label for="name">お名前</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="漢口 太郎" required value="<?php echo h($name) ?>">
        </div>
        <div class="form-group">
          <label for="email">メールアドレス</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレス" required value="<?php echo h($email) ?>">
          <small id="emailHelp" class="form-text text-muted">メールアドレスが第三者に提供されることはありません</small>
        </div>
        <div class="form-group">
          <label for="tel">電話番号(半角英数字でご入力ください)</label>
          <input type="tel" class="form-control" id="tel" name="tel" placeholder="123-4567-8900" required>
        </div>
        <div class="form-group col-md-4">
          <label for="subject">お問い合わせカテゴリ</label>
          <select id="subject" class="form-control" required>
            <option selected>選択してください</option>
            <option value="form_repair">修理に関するお問い合わせ</option>
            <option value="form_stove">ストーブ購入に関するお問い合わせ</option>
            <option value="form_core">ストーブ芯の購入に関するお問い合わせ</option>
            <option value="form_others">その他のお問い合わせ</option>
          </select>
        </div>
        <div class="form-group">
          <label for="body">お問い合わせ内容</label>
          <textarea class="form-control" id="body" name="body" placeholder="お問い合わせ内容をご入力ください" rows="3"></textarea>
        </div>

        <button class="btn btn-primary" type="submit"　name="submitted">送信</button>
        <p>後ほどXXX@gmail.comからご指定のメールにご連絡致します。</p>
      </form>
  </div>

  <?php include_once (dirname(__FILE__).'/../footer.php'); ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>


</html>
