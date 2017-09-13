<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel/Test</title>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/autocomplete_ajax.js"></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/test.css">
</head>
<body>
	<div class="container">
		<div class="flex-center position-ref full-height">

			<div class="content">
				<div class="title m-b-md">
					Test
				</div>
				<form action="" method="GET">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label class="col-form-label">Origin</label>
							<input type="text" class="city form-control" placeholder="Origin" name="origin">
						</div>
						<div class="form-group col-md-4">
							<label class="col-form-label">Destination</label>
							<input type="text" class="city form-control" placeholder="Destination" name="destination" >
						</div>
						<div class="form-group col-md-2">
							<label class="col-form-label">departure_date </label>
							<input type="date" class="form-control" name="departure_date" >
						</div>
						<div class="form-group col-md-2">
							<label class="col-form-label">return_date </label>
							<input type="date" class="form-control" name="return_date">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-1">
							<label class="col-form-label">Adults</label>
							<select class="form-control">Choose</select>
						</div>
						<div class="form-group col-md-1">
							<label class="col-form-label">Children</label>
							<select class="form-control">Choose</select>
						</div>
						<div class="form-group col-md-1">
							<label class="col-form-label">Infants</label>
							<select class="form-control">Choose</select>
						</div>
						<div class="form-group col-md-2">
							<label class="col-form-label">travel_class</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group col-md-1">
							<label class="col-form-label">Currency</label>
							<select class="form-control">Choose</select>
						</div>
						<div class="form-group col-md-2">
							<label class="col-form-label">Max price</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox"> Nonstop
							</label>
						</div>
					</div>
					<button type="submit" class="target btn btn-primary"><a href="/LaravelTest/public/response">Submit</a></button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="links ft-cus">
			<a href="https://laravel.com/docs">Documentation</a>
			<a href="https://laracasts.com">Laracasts</a>
			<a href="https://laravel-news.com">News</a>
			<a href="https://forge.laravel.com">Forge</a>
			<a href="https://github.com/laravel/laravel">GitHub</a>
		</div>
	</footer>

</body>
</html>
