<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Surveys</h1>
            
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
    <h3 class="card-title">Surveys Database</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
  


                    <table class="table">
                  <thead>
                    <tr>
                      <th style="width:270px;">Name</th>
                      <th>Dis</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($data as $n): ?> 
                    <tr>
                      <td style="font-size:15px;"><?= $n['survey_name']?></td>
                      <td style="font-size:15px;"><?= $n['survey_description']?></td>  
                      <td><a href="<?=PATH;?>admin/viewresponses/<?= $n['survey_id']?>" class="btn btn-defult">View </a></td>                      
                    </tr>
                    <?php endforeach; ?> 
                  </tbody>
                </table>











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