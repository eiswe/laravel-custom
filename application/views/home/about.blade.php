@layout('layouts/main')

@section('navigation')
<!-- @parent -->
<li><a href="home">Home</a></li>
<li><a href="login">Login</a></li>
<li class="active"><a href="about">About</a></li>
<li><a href="impressum">Impressum</a></li>
@endsection

@section('content')
<div class="row">
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Navigation</li>
                @foreach ($sidenav as $sn)
                <li @if ($sn['active']) class="active" @endif>
                    <a href="{{ $sn['url'] }}">{{ $sn['name'] }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="span9">      
       <!-- <div class="row"> -->
            <h1>About Me</h1><hr/>
            <p>I'm David Crimi and this is my first Laravel Project!</p>
            <p>I creatd this site to play with Laravel and search a flexible way to save Informations, or share them!</p>
            <p>I'll show some of my Tinkerforge projects here. <a href="https://github.com/deathpoison">My Github Account</a></p>
        <!-- </div> -->
    </div>
</div>
<div class="row">
    <div class="span3">
        &nbsp;
    </div>
</div>
@endsection