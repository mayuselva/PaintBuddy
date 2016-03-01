@extends('layout.layout')
@section('content')


    <div id="all" xmlns="http://www.w3.org/1999/html">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>
                <?php
                ini_set('xdebug.max_nesting_level', 200);?>

                <div class="col-md-12">


                    <?php if(isset($status)){ ?>
                    <div class="alert alert-danger">
                        {{ $status }}
                    </div>

                    <?php } ?>

                    <?php if(isset($message)){
                        echo $message;}?>


                </div>

                <div class="col-md-12">
                    <div class="box">

                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="register_store" method="post">


                            <div class="form-group">

                                <label for="name">First Name</label>
                                <input type="text" class="form-control" name="FirstName" >
                                <font color="red">
                                    {{$errors->first('FirstName')}}
                                </font>

                            </div>
                            <div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" name="LastName" >
                                <font color="red">
                                    {{$errors->first('LastName')}}
                                </font>

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                                <font color="red"> {{$errors->first('email')}}</font>
                            </div>

                            <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text" class="form-control" name="Address">
                                <font color="red">{{$errors->first('Address')}}</font>
                            </div>

                            <div class="form-group">
                                <label for="password">Create Password</label>
                                <input type="password" class="form-control" name="Password">
                                <font color="red">{{$errors->first('Password')}}</font>
                            </div>


                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" name="ConfirmPassword">
                                <font color="red">{{$errors->first('ConfirmPassword')}}</font>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container -->
    </div>
    <!-- /#content -->

    </div>
@stop




