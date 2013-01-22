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

/* THANKS BEEEEES! */

@-moz-keyframes phase {
	0% { opacity: 1; }
	100% { opacity: 0.6; }
}
@-webkit-keyframes phase {
	0% { opacity: 1; }
	100% { opacity: 0.6; }
}
@-o-keyframes phase {
	0% { opacity: 1; }
	100% { opacity: 0.6; }
}
@-ms-keyframes phase {
	0% { opacity: 1; }
	100% { opacity: 0.6; }
}
@keyframes phase {
	0% { opacity: 1; }
	100% { opacity: 0.6; }
}

iframe {
	-moz-animation: phase 2s infinite linear;
	-webkit-animation: phase 2s infinite linear;
	-o-animation: phase 2s infinite linear;
	-ms-animation: phase 2s infinite linear;
	animation: phase 2s infinite linear;
}

</style>
</head>
<body><iframe src="<?php echo $url ?>" class="drunkview"></iframe></body>
</html>