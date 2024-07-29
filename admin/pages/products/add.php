<?php
    require '../../includes/init.php';

    $categories = select("SELECT * FROM categories");

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
                                        <select class="form-select" id="CategoryId" >
                                            <?php foreach($categories as $category): ?>
                                                <option value="<?= $category['CategoryId'] ?>"> <?= $category['Name'] ?> </option>
                                            <?php endforeach;?>
                                        </select>
                                      </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Name</label>
                                          <input type="text" class="form-control" id="Name" name="Name" autofocus>
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Description</label>
                                          <input type="text" class="form-control" id="Description" name="Description" >
                                        </div>
                                        <div class="mb-3">
                                          <label  class="form-label">Price</label>
                                          <input type="number" class="form-control" id="Price" name="Price" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Main Image</label>
                                            <input class="form-control" type="file" id="Image">
                                        </div>
                                        <!-- <div class="mb-3">
                                            <label for="formFile" class="form-label">Second Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Third Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div> -->
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
        var form = new FormData();
        form.append('CategoryId', $('#CategoryId').val());
        form.append('Name', $('#Name').val());
        form.append('Description', $('#Description').val());
        form.append('Price', $('#Price').val());
        form.append('Image', $('#Image')[0].files[0]);

        $.ajax({
            url: '../../api/products/insert.php',
            method: 'POST',
            data: form,
            processData: false,
            contentType: false,
            success: function (response) {
                alert("Product Added");
                window.location.href = './index.php';
            }
        })
    }
</script>
<?php
    include pathOf('includes/pageend.php');
?>