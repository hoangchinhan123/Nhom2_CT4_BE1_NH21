<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Id
                      </th>
                      <th style="width: 5%">
                          Name
                      </th>
                      <th style="width: 10%">
                           Image
                      </th>
                      <th>
                           Price
                      </th>
                      <th style="width: 1%" class="text-center">
                          Manufacture
                      </th>
                      <th style="width: 1%" class="text-center">
                          Protypes
                      </th>
                      <th style="width: 100%" class="text-center">
                          Description
                      </th>
                      <th style="width: 8%" class="text-center">
                          Feature
                      </th>
                      <th style="width: 8%" class="text-center">
                          Created_a
                      </th>
                      <th style="width: 20%">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                if(isset($_GET['manu_id'])):
                  $manu_id = $_GET['manu_id'];
                $getProductByMaNU_Id = $product->getProductByMaNU_Id($manu_id);
                foreach($getProductByMaNU_Id as $value):
                ?>
                  <tr>
                      <td>
                          <?php echo $value['id'] ?>
                      </td>
                      <td>
                      <?php echo $value['name'] ?>
                      </td>
                      <td>
                        <img src="../img/<?php echo $value['image'] ?>" alt="" style="width: 124px;">
                      </td>
                      <td class="project_progress">
                         <?php echo number_format($value['price'])?>VND
                      </td>
                      <td class="project-state">
                      <?php echo $value['manu_id']?> 
                      </td>
                      <td class="project-state">
                      <?php echo $value['type_id'] ?>
                      </td>
                      <td class="project-state">
                       <?php echo substr($value['description'], 0, 201). "..."  ?>
                      </td>
                      <td class="project-state">
                       <?php echo $value['feature'] ?>
                      </td>
                      <td class="project-state">
                       <?php echo $value['created_a'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="update_products.php?id=<?php echo $value['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="deleteproducts.php?id=<?php echo $value['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="store-filter clearfix" style="display: block;">
					<ul class="store-pagination">
            <?php 
							$getMenu = $Manufacture->getAllManu();
							foreach($getMenu as $value):
						?>
								<li><a href="products1.php?manu_id=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_id'] ?></a></li>
						  <?php endforeach; ?>
							<li><a href="products.php"><i class="fa fa-angle-right"></i></a></li>
					  </ul>
			</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php" ?>