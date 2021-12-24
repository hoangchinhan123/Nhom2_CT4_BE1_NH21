<?php include "header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <?php
              $getcountProducts = $product->getcountProducts();
              foreach( $getcountProducts as $value):
              ?>
              <div class="inner">
                <h3><?php echo $value['COUNT(id)'] ?></h3>

                <p>Product</p>
              </div>
              <?php endforeach; ?>
              <div class="icon">
                <i class="ion ion-bag"><i class="fas fa-motorcycle"></i></i>
              </div>
              <a href="products.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <?php
              $getcountProtypes = $protypes->getcountProtypes();
              foreach( $getcountProtypes as $value):
              ?>
              <div class="inner">
                <h3><?php echo $value['COUNT(type_id)'] ?></h3>

                <p>Protypes</p>
                
              </div>
              <?php endforeach; ?>
              <div class="icon">
              <i class="fas fa-motorcycle"></i>
              </div>
              <a href="Protypes.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <?php
              $getcountManufacture = $Manufacture->getcountManufacture();
              foreach( $getcountManufacture as $value):
              ?>
              <div class="inner">
                <h3><?php echo $value['COUNT(manu_id)'] ?></h3>

                <p>Manufacture</p>
              </div>
              <?php endforeach; ?>
              <div class="icon">
              <i class="fas fa-caravan"></i>
              </div>
              <a href="manufactures.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php" ?>
