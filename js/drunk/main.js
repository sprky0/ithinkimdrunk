AJBnet.define("Drunk/Main",['vendor/jquery-1.9.0.min.js'],function(){

	// Handle form bindings

	var tests = 0;

	function is_url(test_url) {
		var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
		return re.test(test_url);
	}

	function prefixed_ok(test_url) {
		var re = /^(http[s]?)/;
		return re.test(test_url);
	}

	$(".drunk").bind("submit",function(e){

		var url = $("input[name='url']",this).val();

		if (url.length == 0) {
			e.preventDefault();
			alert("Please enter a URL!");
		} else if (!prefixed_ok(url)) {
			e.preventDefault();
			url = "http://" + url;
			$("input[name='url']",this).val(url)
			alert("Did you mean " + url + "?");
		} else if (!is_url(url)) {
			e.preventDefault();
			switch (true) {
				case tests < 2:
					alert((tests == 0 ? "D" : "Still d") + "oesn't look like a valid URL to me ... try again?");
					break;
				case tests == 2:
					alert("I think you really are drunk.");
					break;
				case tests >= 3:
					alert("Don't know what to do with that one.");
					break;
			}
		}

		tests++;

	});


	// mouse move effects

	var reference = $(".h1-reflection"),
		rangeX = 0, rangeY = 0, combined = 0, shadow, lowrange,
		windowX = $(window).width(), windowY = $(window).height();

	function drunky(e) {

		// console.log(e);

		rangeX = e.pageX / windowX;
		rangeY = e.pageY / windowY;
		lowrange = 50;

		// combined = (rangeX + rangeY) / 2;

		shadow = "0 -{test}px 10px #3f1f5e,0 {test}px 10px #3f1f5e,-{test}px 0 10px #3f1f5e,{test}px 0 10px #3f1f5e"
			.replace(/{test}/g, lowrange * rangeX);

		$(reference).css("text-shadow",shadow);

	}
	
	// Movey H1 thing
	$(document).bind("mousemove", drunky);


});