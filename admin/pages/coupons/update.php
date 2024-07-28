<?php
    require '../../includes/init.php';

    $Id = $_POST['CouponId'];
    $coupons = selectOne("SELECT * FROM coupons WHERE CouponId = '$Id'");

    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
    include pathOf('includes/sidebar.php');
?>
    

    <body class="page-sidebar-collapsed">
      
        <div class="page-container">
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Insert Role</h5>
                                    <input type="text" id="CouponId" value="<?= $coupons['CouponId'] ?>">
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Code</label>
                                          <input type="text" class="form-control" id="Code" name="Code" autofocus value="<?= $coupons['Code'] ?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Discount</label>
                                          <input type="number" class="form-control" id="Discount" name="Discount" value="<?= $coupons['Discount'] ?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Expires At</label>
                                          <input type="time" class="form-control" id="Expires" name="Expires" value="<?= $coupons['Expires'] ?>">
                                        </div>
                                        <button type="submit" class="btn btn-outline-success" onclick="insertData()">Submit</button>
                                </div>
                            </div>
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
    function insertData() {
        var CouponId = $('#CouponId').val();
        var Code = $('#Code').val();
        var Discount = $('#Discount').val();
        var Expires = $('#Expires').val();

        $.ajax({
            url: '../../api/coupons/update.php',
            type: 'POST',
            data: {
                CouponId: CouponId,
                Code: Code,
                Discount: Discount,
                Expires: Expires
            },
            success: function(response) {
                console.log(response.success);
                alert("Coupon Updated");
                window.location.href = './index.php';
            }
        });
    }
</script>
<?php
    include pathOf('includes/pageend.php');
?>