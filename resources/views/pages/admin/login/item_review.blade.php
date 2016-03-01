@extends('layout.layout')
@section('content')


<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>My orders</li>
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
                            <li class="active">
                                <a href="/myorders"><i class="fa fa-list"></i> My orders</a>
                            </li>
                            <li>
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

            <div class="col-md-9" id="customer-orders">
                <div class="box">
                    <h1>Items</h1>


                    
                   

                        <div class="table-responsive">
  <form action="/review_add" method="post" accept-charset="UTF-8">
                            <table class="table table-hover">

                                <tbody>
                                    <tr>

                                        <td colspan="2">
                                            <div class="col-xs-3">

                                                <img src="/images/{!! $results->image !!}" class="img-responsive">
                                                    

                                                <input type="text" readonly="" name="item_id" value="<?= $results->id ?>">
                                            </div>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td>Price</td> <td><?= $results->price ?> LKR</td>
                                    </tr>
                                     <tr>
                                        <td>Name</td> <td> <?= $results->itName ?></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td> <td> <?= $results->itDescrip ?></td>
                                    </tr>
                                     <tr>
                                          <td colspan="2"><h3> Add Reviews</h3></td>
                                    </tr>
                                     <tr>
                                          <td colspan="2">Email</td>
                                    </tr>
                                     <tr>
                                         <td colspan="2">
                                             <input name="_token" hidden value="{!! csrf_token() !!}" />
                                             <input type="email" name="email" class="form-control"></td>
                                    </tr>
                                     <tr>
                                          <td colspan="2">Comment</td>
                                    </tr>
                                     <tr>
                                         <td colspan="2"><textarea name="comment" class="form-control"></textarea> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <button  type="submit"  class="btn btn-success">Submit</button></td>
                                    </tr>
                                      <tr>
                                          <td colspan="2"><h3>Reviews</h3></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td colspan="2">
                                                    @if (is_array($reviews))

                                    @foreach ($reviews as $result)
                                     <div class="col-xs-7">
     
                                         <u>   <?=$result->email ?> </u>  <br>
             <b>  <?=$result->comment ?> </b>   
      
    </div>
                                    
                                
                                    @endforeach


                                @endif
                                     
                                            
                                            
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
  </form>
                        </div>
                   
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->

</div>


@stop