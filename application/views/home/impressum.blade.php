@layout('layouts/main')

@section('navigation')
<!-- @parent -->
<li><a href="home">Home</a></li>
<li><a href="login">Login</a></li>
<li><a href="about">About</a></li>
<li class="active"><a href="impressum">Impressum</a></li>
@endsection

@section('content')
<!-- <div class="row">
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
    <div class="hero-unit">
        <div class="span6">
            <table>
                <tr>
                    <td>
                        <h1>Kontakt</h1><br/>
                        <ul class="nav nav-list">
                            <li><h4>David Crimi</h4></li>
                            <li>IT-FachInformatiker</li>
                            <li>für SystemIntegration</li>
                            <li>&nbsp;</li>
                            <li>Weberstr. 3</li>
                            <li>30827 Garbsen</li>
                            <li></li>
                            <li>Deutschland</li>
                        </ul>
                    </td>
                    <td>
                        <img src="img/phonecz.png" alt="Contacts->Me!" />
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
        <div class="span3">
            <h1>News</h1><hr/>
            <p>Here i'll post the actually News!</p>
    </div>
    <div class="span4">
        &nbsp;
    </div>
</div> -->
@endsection