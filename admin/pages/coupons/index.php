<?php
    require '../../includes/init.php';

    $index = 0;
    $coupons = select("SELECT * FROM coupons");

    include pathOf('includes/header.php');
    include pathOf('includes/sidebar.php');
    include pathOf('includes/navbar.php');
?>
    <body class="page-sidebar-collapsed">
        

        <div class="page-container">
            <div class="page-content">
                <div class="main-wrapper">
                  
                  <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Coupons</h5>
                                <a href="add.php" class="btn btn-outline-light">Add</a>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Code</th>
                                            <th>Discount</th>
                                            <th>Expires At</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($coupons as $coupon) {?>
                                        <tr>
                                            <td><?= $index += 1 ?></td>
                                            <td><?= $coupon['Code'] ?></td>
                                            <td><?= $coupon['Discount'] ?></td>
                                            <td><?= $coupon['Expires'] ?></td>
                                            <form action="./update.php" method="post">
                                                <td>
                                                    <input type="hidden" value="<?= $coupon['CouponId'] ?>" id="CouponId" name="CouponId">
                                                    <button type="submit" class="btn btn-outline-success">Update</button>
                                                </td>
                                            </form>
                                            <td>
                                              <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $coupon['CouponId'] ?>)">Delete</button>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Code</th>
                                            <th>Discount</th>
                                            <th>Expires At</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
<?php
    include pathOf('includes/scripts.php');
    ?>
    <script>
      function deleteData(Id) {
        if(confirm("Are you sure you want to delete this coupone?")) {
            $.ajax({
                url: '../../api/coupons/delete.php',
                type: 'POST',
                data: {
                    Id: Id
                },
                success: function(response) {
                  if(response == response.success) {
                    alert("Coupon deleted successfully");
                    location.reload();
                  } else {
                    alert("Coupon not deleted");
                  }
                }
            });
        }
      }
    </script>
    <?php
    include pathOf('includes/pageend.php');
?>