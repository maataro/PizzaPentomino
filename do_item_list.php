<?php
// セッションを開始
session_start();
$user = $_SESSION['user'];
if(strcmp($user, '') == 0) {
    header('Location: login_failed.html');
    exit();
}

if($_POST['itemA'] == 'checked') {
    $_SESSION['itemA']++;
}
else {
    $_SESSION['itemA'] = 0;
}
if($_POST['itemB'] == 'checked') {
    $_SESSION['itemB']++;
}
else {
    $_SESSION['itemB'] = 0;
}
if($_POST['itemC'] == 'checked') {
    $_SESSION['itemC']++;
}
else {
    $_SESSION['itemC'] = 0;
}
if($_POST['itemD'] == 'checked') {
    $_SESSION['itemD']++;
}
else {
    $_SESSION['itemD'] = 0;
}
if($_POST['itemE'] == 'checked') {
    $_SESSION['itemE']++;
}
else {
    $_SESSION['itemE'] = 0;
}

header('Location: item_list.php');
?>
