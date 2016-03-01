@extends('layout.layout')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div class="col-md-6">
        <div class="box">
            <h1>Forgot Password</h1>

            <h5>Reset password code will be sent to your gmail account</h5>
            <hr>

            <form action="/email_reset_password" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>Reset Password</button>
                </div>

            </form>
        </div>
    </div>

@stop



