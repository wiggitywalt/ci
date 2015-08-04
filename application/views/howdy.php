<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CI</title>

</head>
<body>

<div id="container">
	<h1>Greetings!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter. Walter created this template. OMGLOL</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

	</div>
	<div>

<!-- 		<?php
			if($dataSet){
				foreach($dataSet as $dataItem){
					echo "&nbsp;&nbsp;&nbsp;" . $dataItem->fname . " " . $dataItem->lname . " ". $dataItem->email .  "<br />";
				}
			}
		?> -->

	</div>
	<!--
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	-->
</div>

</body>
</html>
