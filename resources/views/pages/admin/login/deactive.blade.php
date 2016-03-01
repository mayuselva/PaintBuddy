@extends('layout.layout')
@section('content')


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Deactive Account</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li >
                                    <a href="/myorders"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li class="active">
                                    <a href="/deactive"><i class="fa fa-heart"></i> Deactive Account</a>
                                </li>
                                <li>

                                    <a href="/myaccount"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li >

                                    <a href="/item_list"><i class="fa fa-user"></i> Items</a>
                                </li>
                                <li>
                                    <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-8">
                    <div class="box">

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

                        <?php if(isset($message)){?>
                        <div class="alert-success" > <?php echo $message;?></div>
                        <?php } ?>

                            <?php if(isset($status)){ ?>
                            <div class="alert alert-danger">
                                {{ $status }}
                            </div>

                            <?php } ?>

                        <h1>Deactive Account</h1>

                        <h5>your account status will be sent to your gmail account.
                            Please confirm your password to continue</h5>
                        <hr>

                        <form action="/email_deactive" method="post">
                            <input type="hidden" name="login_id" value="<?php  if(Auth::check()){echo Auth::user()->id;}?>">
                            <input name="_token" hidden value="{!! csrf_token() !!}" />
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" >
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>Deactivate</button>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

    </div>


@stop