<!DOCTYPE html>
<html>
	<head>
		<title>Weather Scraper</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	</head>
<body>

	<div class="container">
		<div class="row">

			<div class="col-md-6 col-md-offset-3">
				
				<h1>Weather Predictor</h2>
				<p class="lead">Enter your city below to get a forecast of the weather.</p>

				<form>
					
					<div class="form-group">
						<input class="form-control" type="text" name="city" id="city" placeholder="Enter your city name"
						 />

					</div><!-- form-group -->

					<button class="btn btn-success btn-lg" id="findMyWeather" value="Check Weather">Check the Weather</button>

						
				</form>

				<div id="success" class="alert alert-success">Success!</div>

				<div id="fail" class="alert alert-danger">Could not find weather data
				for that city. Please try again.</div>

				<div id="noCity" class="alert alert-danger">Please enter a city.</div>

			</div><!-- end col -->
			
		</div><!-- row -->
	</div><!-- container -->
	<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

	
	<script>

	$("#findMyWeather").click(function() {

		event.preventDefault();

		$(".alert").hide();

		if ($("#city").val()!="") {

			$.get('scraper.php?city='+$("#city").val(), function(data) {

				if (data == "") {
					$("#fail").fadeIn();
				} else {
					$("#success").html(data).fadeIn();
				}

			});

		} else {
			$("#noCity").fadeIn();
		}
		
		

	})

	</script>
</body>
</html>