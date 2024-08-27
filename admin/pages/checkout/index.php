<?php
    require '../../includes/init.php';

    $index = 0;
    $checkouts = select("SELECT * FROM checkout");

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
                                <h5 class="card-title">Checkout</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($checkouts as $checkout): ?>
                                        <tr>
                                            <td><?= $index += 1 ?></td>
                                            <td><?= $checkout['FirstName'] ?></td>
                                            <td><?= $checkout['Address'] ?></td>
                                            <td><?= $checkout['City'] ?></td>
                                            <td><?= $checkout['Phone'] ?></td>
                                            <td><?= $checkout['Email'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Phone</th>
                                            <th>Email</th>
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
    include pathOf('includes/pageend.php');
?>