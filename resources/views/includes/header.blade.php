
<div class="col-md-3" id="coutAllureLogo">

    <div id="coutAllureLogoimg"><img alt="" src="{{ asset('/images/logo.png')}}"></div>
    <h3> CoutAllure</h3>
</div>
<div id="dropdownMenu">
    <img alt="" src="{{ asset('/images/dropdown.png')}}" onclick="a()">

</div>
<div class="col-md-6" id="navLinks">
    <ul>
        <li> <a href="/aboutus">ABOUT US</a></li>
        <li>  <a href="/blog">BLOGS</a> </li>
        <li> <a href="/forum">FORUM</a></li>
        <li>
            @if(Auth::check())
                <a id="auth/logout" href="/logout">LOG OUT</a>
            @else

                <a id="login" href="/auth/login">LOG IN</a>
            @endif
        </li>
    </ul>
</div>
@unless (Auth::check())
    <div class="col-md-3" id="topBarSignUp">
        <a href="/auth/register">SIGN UP FOR FREE</a>

    </div>
@endunless
