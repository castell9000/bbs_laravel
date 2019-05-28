@extends('layouts.app')

@section('content')
    <div class="container" style="position: absolute; top: 10%; left: 20%;">
        <div class="col-md-8">
            <h1>Login</h1>
            <hr/>
            <div class="card-body" >
                <form action="" method="POST">
                    @csrf
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input type="email" name="email" class="form-control" placeholder="example@exam.com" value="{{ old('email') }}" autofocus/>
                        {!! $errors->first('email', '<span class="form-error">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input type="password" name="password" class="form-control" placeholder="password">
                        {!! $errors->first('password', '<span class="form-error">:message</span>')!!}
                    </div>

                    <div class="form-group row mb-0">
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            <button class="btb btn-success btn-lg btn-block" type="button" onclick="location.href='/register';">SignUp</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
