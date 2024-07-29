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
                                    <h5 class="card-title">Insert Products</h5>
                                    <label for="exampleInputEmail1" class="form-label">Category</label>
                                    <div class="mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                      </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Name</label>
                                          <input type="text" class="form-control" id="Name" name="Name" autofocus>
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Description</label>
                                          <input type="text" class="form-control" id="Description" name="Description" autofocus>
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Price</label>
                                          <input type="number" class="form-control" id="Price" name="Price" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Main Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Second Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Third Image</label>
                                            <input class="form-control" type="file" id="formFile">
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
            url: '../../api/roles/insert.php',
            type: 'POST',
            data: {
                Name: Name
            },
            success: function(response) {
                console.log(response.success);
                alert("Role Added");
                window.location.href = './index.php';
            }
        });
    }
</script>
<?php
    include pathOf('includes/pageend.php');
?>