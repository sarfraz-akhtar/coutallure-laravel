<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Landing Page</title>
    <link href="{{ asset('/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landing.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/verify.notify-min.js') }}"></script>
    <script src="{{ asset('/js/notify-custom.min.js') }}"></script>
</head>
<body>
<div id="overlay"></div>
<div id="landingPage">
    <!-- 			<div id="coutAllureLogo"></div> -->
    <div id="fashionWay">
        <h2>We are making fashion designing simple for you.</h2>
        <h4>Enter your email and we'll let you know when we're live!</h4>
        <div id="enterEmail">
            <?php print html_entity_decode(View::make('forms.email-form'));?>
        </div>
    </div>

</div>
</body>
</html>
