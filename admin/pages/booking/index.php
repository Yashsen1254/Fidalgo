<?php
    require '../../includes/init.php';
    $index = 0;
    $bookings = select("SELECT * FROM booking");

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
                                <h5 class="card-title">Booking Table</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Total Person</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($bookings as $booking): ?>
                                        <tr>
                                            <td><?= $index += 1 ?></td>
                                            <td><?= $booking['TotalPerson'] ?></td>
                                            <td><?= $booking['Date'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Total Person</th>
                                            <th>Date</th>
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
        if(confirm("Are you sure you want to delete this role?")) {
            $.ajax({
                url: '../../api/roles/delete.php',
                type: 'POST',
                data: {
                    Id: Id
                },
                success: function(response) {
                  if(response == response.success) {
                    alert("Role deleted successfully");
                    location.reload();
                  } else {
                    alert("Role not deleted");
                  }
                }
            });
        }
      }
    </script>
    <?php
    include pathOf('includes/pageend.php');
?>