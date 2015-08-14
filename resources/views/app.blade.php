<!DOCTYPE html>
<html lang="en">
<head>
 @include('includes.head')
	<link href="{{ asset('/css/hp.css') }}" rel="stylesheet">
</head>
<body>
<!--- page header -------->
<header  class="row" id="topBar">
	@include('includes.header')
</header>

@yield('content')
{{--<!--- page footer -------->--}}

<footer id="bottomBar" class="row">
@include('includes.footer')
</footer>
{{--<script type="text/javascript" src="{{@asset('/js/angular.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{@asset('/js/app.js')}}"></script>--}}
</body>
</html>
