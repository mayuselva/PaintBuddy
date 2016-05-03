<?php $__env->startSection('ArtContent'); ?>

    <!-- jQuery Version 1.11 required for FullCalendar to function properly -->
    <script src="js/jquery.1.11.min.js"></script>

<br/>
    <div class="container">
        <div class="modal fade modal-info" id="asDateModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Assign Date</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo Form::open(array( 'url' => '/asDDate','class' => 'form','novalidate' => 'novalidate','files' => true)); ?>

                            <div class="form-group">
                                <label for="ordID">Order ID</label>
                                <input type="text" class="form-control" id="ordID" name="ordID" readonly>
                            </div>

                            <div class="form-group">
                                <label for="ordDate">Ordered Date</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="ordDate" name="ordDate" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dDate">Due Date</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="dDate" name="dDate" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ddDate">Deadline</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" id="ddMask" name="ddMask">
                                </div><!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger send-btn center-block" id ="asnBtn" disabled = "" style="align-self: center">Assign Date</button>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="asClBtn" data-dismiss="modal">Close</button>
                        <div id = "getOrdDetsBtn" class="pull-left" ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Deadline Calendar</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="calendar">
                            <?php echo $calendar->calendar(); ?>

                            <?php echo $calendar->script(); ?>

                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>


            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Deadline table</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="table" class="dTab">
                            <table  class="table table-condensed table-hover table-bordered" id="asDateTab">
                                <thead>
                                <tr>
                                    <th class="col-md-2 text-center">
                                        Order ID
                                    </th>
                                    <th class="col-md-2 text-center">
                                        Ordered Date
                                    </th>
                                    <th class="col-md-2 text-center">
                                        Due Date
                                    </th>
                                    <th class="col-md-2 text-center">
                                        Deadline
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach($order as $ord): ?>
                                    <tr class = "info">
                                        <td class="col-md-2 text-center">
                                            <?php echo $ord['ordID']; ?>

                                        </td>
                                        <td class="col-md-2 text-center">
                                            <?php echo $ord['ordDate']; ?>

                                        </td>
                                        <td class="col-md-2 text-center">
                                            <?php echo $ord['DueDate']; ?>

                                        </td>
                                        <td class="col-md-2 text-center">
                                            <?php echo $ord['DLineDate']; ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Colour Definition</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <button type="button" class="btn btn-default col-sm-12" style="background-color: #00a65a; color: #d6d6d6; font-family:'sans-serif';">Completed</button></br>
                        <button type="button" class="btn btn-default col-sm-12" style="background-color: #f39c12; color: #d6d6d6; font-family:'sans-serif';">Passed delivery Date</button></br>
                        <button type="button" class="btn btn-default col-sm-12" style="background-color: #f56954; color: #d6d6d6; font-family:'sans-serif';">Close to due date</button></br>
                        <button type="button" class="btn btn-default col-sm-12" style="background-color: #00c0ef; color: #d6d6d6; font-family:'sans-serif';">Ongoing</button>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.Artist.artMainTemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>