@extends('layouts.main')

@section('description')
    <meta name="description" content="GuildGather adalah dunia virtual yang memberikan wadah bagi guild-guild gamer di Indonesia untuk berkumpul, berinteraksi dan bersaing dengan cara-cara yang unik dan seru.">
@endsection

@section('title')
    GuildGather | Through Honor We Thrive
@endsection

@section('content')
<section id="homepage">
    <div class="container-fluid">
        <div class="homepage-slide">
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ asset('/assets/images/background/homepage-slide.png') }}" alt="Homepage Slide">
                    {!! Form::open(['url' => '/subscribe/store']) !!}
                    {!! Form::label('email', 'Register your guild and compete with others in an amazing virtual world') !!}
                    @if (session('status'))
                        <div class="alert alert-warning">
                        {{ session('status') }}
                        </div>
                    @endif
                    <input type="text" name="email" class="form-control" placeholder="&#xf2b7 &nbsp Subscribe your email here!">
                    {!! Form::submit('Subscribe', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                    <a href="#homepage-feature" class="hidden-xs"><i class="fa fa-hand-o-down"></i></a>
                </div> <!-- /col-sm-12 -->
            </div> <!-- /row -->
        </div> <!-- /homepage-slide -->

        <div id="homepage-feature">
            <div class="row">
                <div class="col-sm-6 col-xs-12 text-center">
                    <img src="{{ asset('/assets/images/icon/homepage-feature.png') }}" alt="Guild Banner">
                </div> <!-- /col-sm-6 -->

                <div class="col-sm-6 col-xs-12">
                    <h1>Raise your guild banner</h1>
                    <h4><span>01</span> Build your own gaming community</h4>
                    <p>Organize your own guild with excellent tools we provided.</p>
                    <h4><span>02</span> Keep track with guild member across games and platforms</h4>
                    <p>Connect with your guild members through an amazing virtual world.</p>
                    <h4><span>03</span> Compete with other guilds</h4>
                    <p>Show off your guild strength and compete with other guilds.</p>
                    <h4><span>04</span> Show off your guild achievements</h4>
                    <p>Hunt down every achievement we created to show off your guild strength.</p>
                </div> <!-- /col-sm-6 -->
            </div> <!-- /row -->
        </div> <!-- /homepage-feature -->
    </div> <!-- /container-fluid -->
</section> <!-- /homepage -->

<section id="homepage-content">
    <div class="container-fluid">
        <div id="homepage-register">
            <div class="row">
                <div class="col-sm-12">
                    <div class="homepage-register-content">
                        <h2>Join our Guild Community</h2>
                        <p>People are waiting for you to take parts in battle!</p>
                        <a href="{{ url('/register') }}">Register</a>
                    </div> <!-- /homepage-register-content -->
                </div> <!-- /col-sm-12 -->
            </div> <!-- /row -->
        </div> <!-- /homepage-register -->
    </div> <!-- /container-fluid -->
</section> <!-- /homepage-content -->

<!--
<section id="recent-article-section">
    <div class="container-fluid">
        <div class="row">
            <h2>Recent Article</h2>

            <!-- Recent Article -->
            <!--<a href="#">
            <div class="col-sm-3">
                <div class="article-box">
                    <img src="http://placehold.it/1366x600">
                    <h3>Hello This is World</h3>
                    <p>Yes this is the excerpt of the article</p>
                </div> <!-- /article-box -->
            <!-- </div>
            </a>

            <a href="#">
            <div class="col-sm-3">
                <div class="article-box">
                    <img src="http://placehold.it/1366x600">
                    <h3>Hello This is World</h3>
                    <p>Yes this is the excerpt of the article</p>
                </div> <!-- /article-box -->
            <!-- </div>

            <a href="#">
            <div class="col-sm-3">
                <div class="article-box">
                    <img src="http://placehold.it/1366x600">
                    <h3>Hello This is World</h3>
                    <p>Yes this is the excerpt of the article</p>
                </div> <!-- /article-box -->
            <!-- </div>

            <a href="#">
            <div class="col-sm-3">
                <div class="article-box">
                    <img src="http://placehold.it/1366x600">
                    <h3>Hello This is World</h3>
                    <p>Yes this is the excerpt of the article</p>
                </div> <!-- /article-box -->
            <!-- </div>

        </div> <!-- /row -->
    <!-- </div> <!-- /container -->
<!-- </section> <!-- /recent-article-section -->
@endsection