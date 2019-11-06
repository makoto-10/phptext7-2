<?php
if(empty($_COOKIE['test'])){
    $num = 1;
}else{
    $num = $_COOKIE['test'];
}

if(!empty($_POST['id'])){
    $a = 1;
}else{
    $a = 2;
}

if(!empty($_POST['pass'])){
    $b = 1;
}else{
    $b = 2;
}
?>

<form action="" method="post">
    <label>ログインID</label>
        <input type="text" name="id"><br>
    <label>パスワード</label>
        <input type="password" name="pass"><br>
    <input type="submit" name="test" value="送信">
</form>

<input type="button" value="クッキー削除">


<?=(!empty($a) ? ($a == 1 ? 'あなたのログインIDは'. $_POST['id']. 'です' : '') : '')?><br>
<?=(!empty($b) ? ($b == 1 ? 'あなたのログインパスワードは'. $_POST['pass']. 'です' : '') : '')?>