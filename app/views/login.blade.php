@extends('layout')
@section('content')
    @if( Session::has( 'message' ) )
        <div class="row">
            <div class="col-md-6 col-md-offset-2 alert alert-danger">There are session messages</div>
            <div class="col-md-6 col-md-offset-2 alert alert-success">{{ Session::get( 'message' ) }}</div>
        </div>
    @endif
    @if( isset( $err ) )
			<div class="col-md-6 col-md-offset-2 alert alert-success">{{ $err }}</div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">
            <h2>Log in.</h2>
            <p>
                {{ $errors->first('email') }}
                {{ $errors->first('password') }}
            </p>
            {{Form::open(array('url' => 'login',
            'class'=>'form-horizontal',
            'id'=>'crf_form',
            'data-parsley-validate'=>'',
            'role'=>'form'
            )) }}
                {{Form::label('user_login', 'Username', array('for' => 'user_login','class' => "col-sm-5 control-label")) }}
                {{Form::text('user_login')}} <br />
                {{Form::label('user_password', 'Password', array('class' => "col-sm-5 control-label")) }}
                {{Form::password('user_password')}} <br />
                {{Form::submit('Log In',['type' => 'submit', 'class' => 'btn btn-primary col-md-offset-5 col-sm-2', 'name' => 'submit'])}}
            {{Form::close()}}
        </div>
    </div>
@stop