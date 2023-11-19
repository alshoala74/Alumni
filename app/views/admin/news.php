<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News</h1>
            
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
    <h3 class="card-title">News Database</h3>
    <a href="<?=PATH;?>admin/addnews" class="btn btn-success ml-3">Add</a>
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
                      <th style="width: 10px">Title</th>
                      <th style="width:270px;">Disc</th>
                      <th>pic</th>
                      <th style="width: 40px">Date</th>
                      <th style="width: 40px">Update</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($data as $n): ?> 
                    <tr>
                      <td><?= $n['title']?></td>
                      <td style="font-size:15px;"><?= $n['disc']?></td>
                      <td img style="width:80px;"><img style="width:80px;" src="<?= PATH; ?>front/img/<?= $n['pic']?>"></td>
                      <td><?= $n['date']?></td>
                      <td><a href="<?=PATH;?>admin/updatenews/<?= $n['id']?>" class="btn btn-info">update</a></td>
                      <td><a href="<?=PATH;?>admin/deletenews/<?= $n['id']?>" class="btn btn-danger">delete</a></td>
                      
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