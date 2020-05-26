<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}
//$str = date(",");
//$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];
$str = date(",");
//File書き込み
//課題は名前とメールの変数をカンマ区切りの文字列にしてファイルに書き込めるようにしてください
//ブラウザからlocalhost/php01/post.phpから
$file = fopen("data/data.txt","a","name","mail");	// ファイル読み込み
fwrite($file, $str."name\r\n");//yamazaki,test@test.jp
fclose($file);
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<?php echo h($name); ?>
<?php echo h($str); ?>
<?php echo h($mail); ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>