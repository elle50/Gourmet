<?php

//include '../../../Gourmet/classes/Gourmet_user.php';
$user_obj = new Gourmet_user;

if(isset($_SESSION['account'])){
    $account = $user_obj->authCheck($_SESSION['account']['username'], $_SESSION['account']['password']);
  if(isset($account)){
    // ログインフラグをtrueにする
    $login = true;
    // セッションにユーザー情報を格納
    $_SESSION['account'] = $account;
  } else {
    // ログインフラグをfalseにする
    $login = false;
    // セッションを破棄
    unset($_SESSION['account']);
  }
// セッションにアカウント情報がない場合
} else {
  // ログインフラグをfalseにする
  $login = false;
}
?>