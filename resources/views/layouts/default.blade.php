<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<!--- page header -------->

@include('includes.header')
@yield('content')
{{--<!--- page footer -------->--}}
@include('includes.footer')
        <!-- Scripts -->

{{--<script type="text/javascript" src="{{@asset('/js/angular.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{@asset('/js/app.js')}}"></script>--}}
</body>
</html>
