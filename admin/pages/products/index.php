<?php
    require '../../includes/init.php';

    $products = select("SELECT * FROM products");
    include pathOf('includes/header.php');
    include pathOf('includes/sidebar.php');
    include pathOf('includes/navbar.php');
?>
    <body class="page-sidebar-collapsed">

        <div class="page-container">
            <div class="page-content">
                <div class="main-wrapper">
                    <h1 class="card-title">Products</h1>
                    <a href="add.php" class="btn btn-outline-light">Add</a>

                    <div class="row">
                    <?php foreach ($products as $product) { ?>
                    <div class="col-sm-12 col-md-4">
                      <div class="card">
                        <img src="<?= urlOf('assets/images/uploads/') . $product['ImageFileName'] ?>" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title"><?= $product['Name'] ?></h5>
                          <p class="card-text"><?= $product['Description'] ?></p>
                          <p class="card-text"><?= $product['Price'] ?></p>
                          <div class="d-flex justify-content-between align-items-center mt-4">
                            <form action="./update.php" method="post">
                                <input type="hidden" name="ProductId" id="ProductId" value="<?= $product['ProductId'] ?>">
                                <button type="submit" class="btn btn-outline-success  mb-2">
                                    Update
                                </button>
                            </form>
                            <button type="button" class="btn btn-outline-danger  mb-2"
                                onclick="deleteData(<?= $product['ProductId'] ?>)">
                                Delete
                            </button>
                            </div>
                        </div>
                      </div>
                    </div>                    
                    <?php } ?>
                </div>
                </div>
                </div>
              </div>

              <script>
      function deleteData(Id) {
        if(confirm("Are you sure you want to delete this Product ?")) {
            $.ajax({
                url: '../../api/products/delete.php',
                type: 'POST',
                data: {
                    Id: Id
                },
                success: function(response) {
                  if(response == response.success) {
                    alert("Product deleted successfully");
                    location.reload();
                  } else {
                    alert("Product not deleted");
                  }
                }
            });
        }
      }
    </script>
<?php
    include pathOf('includes/scripts.php');
?>