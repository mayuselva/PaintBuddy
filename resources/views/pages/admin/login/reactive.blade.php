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

    <?php if(isset($message)){
        echo $message;}?>

    <div class="col-md-8">
        <div class="box">
            <h1>Ractive Account</h1>
            <h4>You can reactive your account.</h4>



            <hr>

            <form action="email_reactive" method="post">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input name="_token" hidden value="{!! csrf_token() !!}" />

                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Reactive</button>
                </div>

            </form>
        </div>
    </div>

@stop