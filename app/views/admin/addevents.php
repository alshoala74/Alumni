<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Events</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <!-- Main content -->
   <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Events Database</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    


  <div class="card-body">
          <form role="form" action="<?=PATH;?>admin/postaddevents" method="post" enctype="multipart/form-data">

                <!-- text input -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Event Name</label>
                        <input name="eventname"type="text" class="form-control" placeholder="Enter Event Name">
                      </div>
                    </div>
                  </div>


                  <!-- textarea -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Place</label>
                        <textarea name="place" type="text" class="form-control" rows="3" placeholder="Enter Place"></textarea>
                      </div>
                    </div>
                  </div>

                 <!-- textarea -->
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Disc</label>
                        <textarea name="disc" type="text" class="form-control" rows="3" placeholder="Enter Disc..."></textarea>
                      </div>
                    </div>
                  </div>


                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">  
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label>Time Start:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="time" name="timestart" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">  
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label>Time End:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="time" name="timeend" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">  
                        </div>
                    </div>
                </div>




                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>



                 
          </form>






          
    </div>












  </div>
  <!-- /.card-body -->

  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <?php require('footer.php'); ?>