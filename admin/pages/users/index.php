<?php
    require '../../includes/init.php';

    $users = select("SELECT * FROM users");
    $index = 0;

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
                                <h5 class="card-title">Users</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $index += 1 ?></td>
                                            <td><?= $user['Username'] ?></td>
                                            <td><?= $user['Email'] ?></td>
                                            <td><?= $user['Password'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>Password</th>
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