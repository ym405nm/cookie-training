<!doctype html>
<html>
<head><title>セッション</title><meta charsert="utf-8">
<body>
<h1>ユーザ情報</h1>
<?php
session_start();
if($_SERVER["HTTP_USER_AGENT"] === "hacker" && isset($_SESSION["name"])):
echo "FLAG : ";
echo file_get_contents("/flag");?>
<p>名前 : <?php echo htmlspecialchars($_SESSION["name"], ENT_QUOTES, "utf-8"); ?></p>
<p>メール : <?php echo htmlspecialchars($_SESSION["email"], ENT_QUOTES, "utf-8"); ?></p>
<?php endif; ?>
<hr>
<p>登録・更新</p>
<form action="sample5-post.php" method="post">
名前：<input type="text" name="name" value=""><br>
メール：<input type="text" name="email" value=""><br>
<input type="submit" value="送信">
</form>
</body>
</html>
