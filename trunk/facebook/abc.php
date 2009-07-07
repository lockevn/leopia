<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
</head>
<body>
<?
require_once './Lib/External/Facebook/facebook.php';

$appapikey = 'cd8d12f1b8a691b82190e07eb5d26dd2';
$appsecret = 'd7caaad562384dd872a1359e28b4b0f2';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

$AUuser = $facebook->get_loggedin_user();

$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 5);
?>
Hello <fb:name uid="<?= $AUuser ?>" ></fb:name>
<fb:profile-pic uid="<?= $AUuser ?>" size="normal" ></fb:profile-pic>
<br />
<br />
Your friend:<br />
<? foreach ((array)($friends) as $friend): ?>
<fb:profile-pic uid="<?= $friend ?>" size="small" ></fb:profile-pic>
<fb:name uid="<?= $friend ?>"></fb:name>
<? endforeach; ?>
</body>
<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>
<script type="text/javascript">FB_RequireFeatures(["XFBML"], function(){ FB.Facebook.init("cd8d12f1b8a691b82190e07eb5d26dd2", "xd_receiver.htm"); }); </script> 
</html>