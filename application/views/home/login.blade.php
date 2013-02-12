@layout('layouts/main')

@section('navigation')
<!-- @parent -->
<li><a href="home">Home</a></li>
<li class="active"><a href="login">Login</a></li>
<li><a href="about">About</a></li>
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
        <h1>Login</h1>
        <form class="well" method="POST" action="user/authenticate">
            <label for="email">Email</label>
            <input type="email" placeholder="Your Email Address" name="email" id="email" />
            <label for="password">Password</label>
            <input type="password" placeholder="Your Password" name="password" id="password" />
            <label class="checkbox" for="new_user">
                <input type="checkbox" name="new_user" id="new_user" checked="checked"> I am a new user
            </label>
            <br />
            <button type="submit" class="btn btn-success">Login or Register</button>
        </form>
    </div>
</div>
@endsection