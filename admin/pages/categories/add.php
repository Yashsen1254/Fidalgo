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
                                    <h5 class="card-title">Insert Categories</h5>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Name</label>
                                          <input type="text" class="form-control" id="Name" name="Name" autofocus>
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
        var Name = $('#Name').val();

        $.ajax({
            url: '../../api/categories/insert.php',
            type: 'POST',
            data: {
                Name: Name
            },
            success: function(response) {
                console.log(response.success);
                alert("Categorie Added");
                window.location.href = './index.php';
            }
        });
    }
</script>
<?php
    include pathOf('includes/pageend.php');
?>