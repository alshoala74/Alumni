<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Users</h1>
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
    <h3 class="card-title">Users Database</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    


  <div class="card-body">
          <form role="form" action="<?=PATH;?>admin/postupdateusers" method="post" enctype="multipart/form-data">

                <!-- text input -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>User Name</label>
                        <input name="username"type="text" class="form-control" value="<?= $data->username; ?>" placeholder="Enter User Name" >
                      </div>
                    </div>
                  </div>
                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input name="name"type="text" class="form-control" value="<?= $data->name; ?>" placeholder="Enter Name" >
                      </div>
                    </div>
                  </div>

                  
                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input name="email"type="email" class="form-control" value="<?= $data->email; ?>" placeholder="Enter Email" >
                      </div>
                    </div>
                  </div>

                  <!-- text input -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>major</label>
                        <input name="major"type="text" class="form-control" value="<?= $data->major; ?>" placeholder="Enter Major" >
                      </div>
                    </div>
                  </div>


                
                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input name="password"type="password" class="form-control" value="<?= $data->password; ?>" placeholder="Enter Password" >
                      </div>
                    </div>
                  </div>

                <!-- text input -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Number</label>
                        <input name="id_num"type="text" class="form-control" value="<?= $data->id_num; ?>" placeholder="Enter Student ID" >
                      </div>
                    </div>
                  </div>




                  <!-- imge input -->
                  <div class="form-group">
                    <img src="<?= PATH; ?>front/img/<?= $data->pfp; ?>" width="150px" height="100px">
                    <label for="exampleInputFile">img input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input value="<?= $data->date; ?>" name="pfp" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose img</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>

                <input name="user_id" type="hidden" value="<?= $data->user_id; ?>" >
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
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