@extends('layouts.main')

@section('description')
    <meta name="description" content="Register your username in GuildGather.">
@endsection

@section('title')
    Register | GuildGather
@endsection

@section('content')
<section id="register-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="register-box">
                    <h2>Get Ready for the Battle!</h2>
                    @if (session('status'))
                        <div class="alert alert-warning">
                        {{ session('status') }}
                        </div> <!-- /alert -->
                    @endif
                    {!! Form::open(['url' => '/register']) !!}
                    <div class="form-group{{ $errors->has('username') ? 'has-error' : '' }}">
                        {!! Form::label('username', 'Username') !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username has to be unique']) !!}
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span> <!-- /help-block -->
                        @endif
                    </div> <!-- /form-group -->
                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name', 'Display Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name for your character']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span> <!-- /help-block -->
                        @endif
                    </div> <!-- /form-group -->
                    <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Type in your password']) !!}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> <!-- /help-block -->
                        @endif
                    </div> <!-- /form-group -->
                    <div class="form-group{{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        {!! Form::label('password_confirmation', 'Confirm Password') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'your password again']) !!}
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span> <!-- /help-block -->
                        @endif
                    </div> <!-- /form-group -->
                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'input the valid email']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> <!-- /help-block -->
                        @endif
                    </div> <!-- /form-group -->
                    <div class="form-group">
                        {!! Form::submit('Register', ['class' => 'btn btn-default']) !!}
                    </div> <!-- /form-group -->
                    {!! Form::close() !!}
                </div> <!-- /register-box -->
            </div> <!-- /col-sm-12 -->
        </div> <!-- /row -->
    </div> <!-- /container-fluid -->
</section> <!-- /register-page -->
@endsection