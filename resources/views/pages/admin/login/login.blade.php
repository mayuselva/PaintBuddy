@extends('layout.layout')
@section('content')

    <?php
    ini_set('xdebug.max_nesting_level', 200);
    if(isset($errors)){ ?>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <?php } ?>
    <?php if(isset($status)){ ?>
    <div class="alert alert-danger">
        {{ $status }}
    </div>

    <?php } ?>



    <div class="col-md-8">
        <div class="box">


            <h1>Login</h1>



            <hr>

            <form action="violate" method="post">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="UserName">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="PassWord">
                </div>
                <input name="_token" hidden value="{!! csrf_token() !!}" />
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                </div>
                <div><a href="/ResetPassword">Forget Password</a> </div>
            </form>
        </div>
    </div>

@stop