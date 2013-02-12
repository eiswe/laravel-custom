@layout('layouts/main')

@section('navigation')
<!-- @parent -->
<li class="active"><a href="home">Home</a></li>
<li><a href="login">Login</a></li>
<li><a href="about">About</a></li>
<li><a href="impressum">Impressum</a></li>
@endsection

@section('content')
<div class="hero-unit">
    <div class="row">
        <div class="span6">
            <h1>Welcome!</h1>
            <br/>
            <p>This site is my first Laravel Project.</p>
            <p>Using Laravel, Bootstrap and jQuery!</p>
            <p><a href="about" class="btn btn-primary btn-large">About me &raquo;</a></p>
        </div>
        
        <div class="span4">
            <img src="img/phones.png" alt="Samsung GT-I9300!" />
        </div>
    </div>
    
    
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="span3">
        &nbsp;
    </div>
</div>
@endsection