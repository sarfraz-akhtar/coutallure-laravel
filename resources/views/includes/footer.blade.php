
    <div class="col-md-9">
        <div id="botnavLinks" class="nav pull-right">
            <a href="aboutus">ABOUT US</a>
            <a href="../blog">BLOGS</a>
            <a href="forum">FORUM</a>
            @unless (Auth::check())
            <a href="auth/login">LOG IN</a>
                @endunless
        </div>
    </div>
    <div id="coutAllureltd" class="col-md-3">
        &copy;2015CoutAllure LTD
    </div>
    {{--Scripts--}}
    <script src="{{@asset('/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{@asset('/js/home.js')}}"></script>
    <script>
        function a() {
            var lis = document.getElementById("navLinks") || document.getElementById("unique");
            if (lis.id === 'navLinks') {
                lis.removeAttribute("id");
                lis.setAttribute("id", "unique");
            }
            else
                lis.setAttribute("id", "navLinks");
        }
    </script>
