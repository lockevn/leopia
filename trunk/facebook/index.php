<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="expires" content="0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GURUCORE.com - information and communication technology, online service, hi tech, software design, web</title>

<!-- Framework CSS -->
<link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
<!--[if IE]>
	<link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen, projection" />
<![endif]-->
<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery/plugin/jquery.blockUI.js"></script>
<script type="text/javascript" >
var QAPI_URL = "http://smartlms.dyndns.org";
</script>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" language="javascript" src="/js/lib/jtpl.js" ></script>
</head>
<body>
<div class="container">
	<div class="span-24 aqua last">
		php echo $this->ZONE_TopBar
	</div>
	<hr />
	<div id="logobar" class="span-24 aqua last">
		<div class="span-5"><a href="/dashboard"><img src="/image/logo.jpg" alt="Logo" /></a></div>
		<div class="span-19 last">php echo $this->ZONE_Top</div>
	</div>
	<hr />
	<div id="SuperTopBanner" class="span-24 last">
		php echo $this->ZONE_TopInfo 
	</div>
	<div class="span-5" id="leftsidebar">
		php echo $this->ZONE_Left 
		&nbsp;
	</div>

	<div class="span-15" id="content">		
		<?
		require_once './Lib/External/Facebook/facebook.php';

		$appapikey = 'cd8d12f1b8a691b82190e07eb5d26dd2';
		$appsecret = 'd7caaad562384dd872a1359e28b4b0f2';
		$facebook = new Facebook($appapikey, $appsecret);
		$user_id = $facebook->require_login();

		$AUuser = $facebook->get_loggedin_user();

		// Greet the currently logged-in user!
		echo "<p>Hello, $AUuser!</p>";

		// Print out at most 25 of the logged-in user's friends,
		// using the friends.get API method
		echo "<p>Friends:";
		$friends = $facebook->api_client->friends_get();
		$friends = array_slice($friends, 0, 5);

		foreach ($friends as $friend) {
		  echo "<br>$friend";
		}
		echo "</p>";
		?>
		&nbsp;
	</div>

	<div class="span-4 last" id="rightsidebar">
		php echo $this->ZONE_Right
	</div>
	<div id="bottom" class="span-24 green last">
		<p>=$this->ZONE_Bottom </p>
	</div>
	<hr />
	<div id="footer" class="span-24 last">
		<p id="powerby" class="hide">
		Power by GURUCORE Inc (<a href="http://gurucore.com">http://gurucore.com</a>)
		</p>
	</div>
</div>

<!-- prettyPhoto -->
<link rel="stylesheet" href="/js/jquery/plugin/photo/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="/js/jquery/plugin/photo/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!-- prettyPhoto -->


<script language="javascript">
$(document).ready(function(){
	$('#powerby').fadeIn(3000);
});
</script>
</body>
</html>