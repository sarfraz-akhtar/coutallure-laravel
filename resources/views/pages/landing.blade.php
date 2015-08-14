<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CoutAllure - Home</title>
	<link href="{{ asset('/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/landing.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="landingPage">
    <div id="coutAllureLogo">
        <img alt="" src="{{ asset('/images/logo.png') }}">
    </div>
    <div id="fashionWay">
        <h2> We're reinventing the  way fashion is being designed</h2>
        <h4>Enter your email and we'll let you know when we're live!</h4>
        <?php print html_entity_decode(View::make('forms.email-form'));?>
    </div>

</div>



</body>
</html>
