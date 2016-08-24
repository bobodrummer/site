<html>
<head>
	<title>Test ajax</title>
	<script src="jquery-3.1.0.min.js"></script>
</head>
<body>
<script>
	function functionBefore() {
		$("#information").text("Wait please, data is loading");
	}
	function functionSuccess(data) {
		$("#information").text(data);
	}


	$(document).ready(function () {
		$("#load").bind("click", function () {
			var admin="Admin";
			$.ajax ({
				url: "content.php",
				type: "POST",
				data: ({name: admin, number: 5}),
				dataType: "html",
				beforeSend: functionBefore,
				success: functionSuccess
			})
		})
	})

</script>
<p id="load" style="cursor:pointer">Load data</p>
<div id="information"></div>
</body>
</html>