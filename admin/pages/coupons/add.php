<?php
    require '../../includes/init.php';
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
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Code</label>
                                          <input type="text" class="form-control" id="Code" name="Code" autofocus>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Discount</label>
                                          <input type="number" class="form-control" id="Discount" name="Discount" autofocus>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Expires At</label>
                                          <input type="time" class="form-control" id="Expires" name="Expires" autofocus>
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
        var Code = $('#Code').val();
        var Discount = $('#Discount').val();
        var Expires = $('#Expires').val();

        $.ajax({
            url: '../../api/coupons/insert.php',
            type: 'POST',
            data: {
                Code: Code,
                Discount: Discount,
                Expires: Expires
            },
            success: function(response) {
                console.log(response.success);
                alert("Coupon Added");
                window.location.href = './index.php';
            }
        });
    }
</script>
<?php
    include pathOf('includes/pageend.php');
?>