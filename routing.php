<?php
//ここで全てのページを管理。
//・ ロジックの操作を行える（＝「~完了画面」を作らなくて済む！）
//・ get/postによって動作を変える分岐ができる。

include_once dirname(__FILE__)."controllers/top.html";

Route::add('/', function() {

})

?>
