<?php require('header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Survey Responses</h1>
            
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
    <h3 class="card-title">Survey Responses Database</h3>
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
            <th style="width: 20px">Q1</th>
            <th style="width: 20px">Q2</th>
            <th style="width: 20px">Q3</th>
            <th style="width: 20px">Q4</th>
            <th style="width: 20px">Q5</th>
            <th style="width: 20px">Q6</th>
            <th style="width: 40px">Q7</th>
            <th style="width: 40px">Q8</th>
            <th style="width: 270px;">Q9</th>
            <th style="width: 270px;">Q10</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $n): ?>
            <tr>
                <td ><?= $n['q1'] ?></td>
                <td><?= $n['q2'] ?></td>
                <td><?= $n['q3'] ?></td>
                <td><?= $n['q4'] ?></td>
                <td><?= $n['q5'] ?></td>
                <td><?= $n['q6'] ?></td>
                <td><?= $n['q7'] ?></td>
                <td><?= $n['q8'] ?></td>
                <td style="font-size: 15px;"><?= $n['q9'] ?></td>
                <td style="font-size: 15px;"><?= $n['q10'] ?></td>
                <td><a href="<?=PATH;?>admin/deleteresponses/<?= $n['response_id']?>" class="btn btn-danger">Delete </a></td>                      
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