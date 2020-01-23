
<!DOCTYPE html>
<html>
<head>
	<title>Compress on the go</title>
	<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
</head>
<body>
	<h2>Compress on the go</h2>
	<img src="loader/loader.gif" id="<?php echo(rand()) ?>" custom="https://result.maxfemcollege.com.ng/images/IMG_20200120_133610_6.jpg" onload="compressor('https://result.maxfemcollege.com.ng/images/IMG_20200120_133610_6.jpg', this.id)" height="200">

	<img id="<?php echo(rand()) ?>" onload="compressor('https://result.maxfemcollege.com.ng/images/IMG_20200117_023557_494.jpg', this.id)" src="loader/loader.gif" height="200">
<!-- 	<img onload="compressor('https://result.maxfemcollege.com.ng/images/IMG_20191212_084409.jpg')" src="loader/loader.gif" id="newimage" custom="https://result.maxfemcollege.com.ng/images/IMG_20191212_084409.jpg" height="200">
	<img onload="compressor('https://result.maxfemcollege.com.ng/images/IMG_20200121_033008_943.jpg')" src="loader/loader.gif" id="newimage" custom="https://result.maxfemcollege.com.ng/images/IMG_20200121_033008_943.jpg" height="200">
	<img onload="compressor('https://result.maxfemcollege.com.ng/images/IMG_20200106_115938_506.jpg')" src="loader/loader.gif" id="newimage" custom="https://result.maxfemcollege.com.ng/images/IMG_20200106_115938_506.jpg" height="200"> -->
	<!-- <img src="https://result.maxfemcollege.com.ng/images/IMG_20200106_111344_978.jpg" height="200">
	<img src="https://result.maxfemcollege.com.ng/images/IMG_20200121_033008_943.jpg" height="200"> -->


	<script type="text/javascript">
		function compressor(imageurl, uniqueid) {
				$(document).ready(function () {
					
					$.ajax({
						type : "GET",
						url : "ajaxcompress.php",
						data : {
							"imageurl" : imageurl
						},
						success : function (result) {
							$("#"+uniqueid).attr("src", result);
							console.log("Successfully compressed "+uniqueid);
							
						}

					})
					console.log("Compressing.... "+uniqueid);
			});  
		}
			
		
	</script>
</body>
</html>