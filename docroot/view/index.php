<?php

$url = isset($_GET['url']) ? $_GET['url'] : "http://www.ithinkimdrunk.com";

?><!DOCTYPE html>
<html>
<head>
<style>

html {
	margin: 0; padding: 0; border: 0;
	width: 100%; height: 100%;
}

body {
	margin: 0; padding: 0; border: 0;
	width: 100%; height: 100%;
}

.drunkview {
	margin: 0; padding: 0; border: 0;
	width: 100%; height: 100%;

	-webkit-transform:rotate(180deg);
	-moz-transform:rotate(180deg);
	-o-transform:rotate(180deg);
	-ms-transform:rotate(180deg);

	display: block;

	/* add blur, etc */

}

</style>
</head>
<body><iframe src="<?php echo $url ?>" class="drunkview"></iframe></body>
</html>