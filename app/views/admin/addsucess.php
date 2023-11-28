<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Sucess</h1>
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
    <h3 class="card-title">Sucess Database</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    


  <div class="card-body">
          <form role="form" action="<?=PATH;?>admin/postaddsucess" method="post" enctype="multipart/form-data">

                <!-- text input -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input name="name"type="text" class="form-control" placeholder="Enter Name">
                      </div>
                    </div>
                  </div>

                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alumni Student ID</label>
                        <input name="id"type="text" class="form-control" placeholder="Enter Student ID of the Alumni">
                      </div>
                    </div>
                  </div>

                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Degree</label>
                        <input name="degree"type="text" class="form-control" placeholder="Enter Degree">
                      </div>
                    </div>
                  </div>

                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Work Place</label>
                        <input name="workplace"type="text" class="form-control" placeholder="Enter Work Place">
                      </div>
                    </div>
                  </div>


                  <!-- textarea -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Story</label>
                        <textarea name="story" type="text" class="form-control" rows="3" placeholder="Enter Story..."></textarea>
                      </div>
                    </div>
                  </div>


                  <!-- imge input -->
                  <div class="form-group">
                    <label for="exampleInputFile">img input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="pic" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose img</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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