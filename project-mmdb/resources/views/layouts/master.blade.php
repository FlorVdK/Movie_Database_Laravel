<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="oldie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="oldie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="oldie ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8" />
    <meta http-equiv="cleartype" content="on" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" media="screen" href="{{ asset('/css/app.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('/css/style.css') }}" />

    @yield('CSS')

</head>
<body>

<div id="container">

    <div class="header">
        <div class="header_inner">
            <div class="title">
                <a href="{{ url('/') }}/" title="MMDB">MMDB</a>
            </div>
            <div class="nav">
                <a href="{{ url('/') }}/" class="selected" title="Watch Movies">Movies</a>
                <a href="{{ url('/') }}/actors" class="" title="Watch Actors">Actors</a>
                @if(Auth::guest())
                <a href="{{ url('/') }}/login" class="" title="Login/Register">Login/Register</a>
                @else
                <a href="{{ url('/') }}/logout" class="" title="logout">logout</a>
                @endif
            </div>
            <div class="search">
                {!! Form::open(array('url' => 'movie/search', 'method' => 'GET')) !!}
                {!! Form::text('search', '', array('class' => 'search_term', 'placeholder'=>'What are you looking for?')) !!}
                <input type="hidden" value="1" name="search_section">
                {!! Form::submit('search', array('class' => 'search_button')) !!}

                {!! Form::close() !!}
            </div>
        <div class="clear"></div>
        </div> 
    </div>

    <!-- content -->
    <div class="body">
        

        @yield('content')

    </div>

</div>

<div class='footer' >&copy; 2016 &mdash; Ikdoeict.be</div>

</body>
</html>