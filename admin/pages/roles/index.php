<?php
    require '../../includes/init.php';
    include pathOf('includes/header.php');
    include pathOf('includes/sidebar.php');
?>
    <body class="page-sidebar-collapsed">
        

        <div class="page-container">
            <div class="page-content">

                <div class="page-header">
                    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                      <div class="header-title flex-fill">
                        <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
                        <h5>Data Tables</h5>
                      </div>
                        <div class="header-search">
                          <form>
                            <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                            <a href="#" class="close-search"><i data-feather="x"></i></a>
                          </form>
                        </div>
                        <div class="flex-fill" id="headerNav">
                          <ul class="navbar-nav">
                            <li class="nav-item d-md-block d-lg-none">
                              <a class="nav-link" href="#" id="toggle-search"><i data-feather="search"></i></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link activity-trigger" href="#" id="activity-sidebar-toggle"><i data-feather="grid"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3<div class="spinner-grow text-danger" role="status"></div></a>
                              <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                                <h6 class="dropdown-header">Notifications</h6>
                                <a href="#">
                                  <div class="header-notif">
                                    <div class="notif-image">
                                      <span class="notification-badge bg-info text-white">
                                        <i class="fas fa-bullhorn"></i>
                                      </span>
                                    </div>
                                    <div class="notif-text">
                                      <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                      <small>19:00</small>
                                    </div>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="header-notif">
                                    <div class="notif-image">
                                      <span class="notification-badge bg-primary text-white">
                                        <i class="fas fa-bolt"></i>
                                      </span>
                                    </div>
                                    <div class="notif-text">
                                      <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                      <small>18:00</small>
                                    </div>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="header-notif">
                                    <div class="notif-image">
                                      <span class="notification-badge bg-success text-white">
                                        <i class="fas fa-at"></i>
                                      </span>
                                    </div>
                                    <div class="notif-text">
                                      <p>faucibus dolor in commodo lectus mattis</p>
                                      <small>yesterday</small>
                                    </div>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="header-notif">
                                    <div class="notif-image">
                                      <span class="notification-badge">
                                        <img src="../../assets/images/avatars/avatar2.jpg" alt="">
                                      </span>
                                    </div>
                                    <div class="notif-text">
                                      <p>faucibus dolor in commodo lectus mattis</p>
                                      <small>yesterday</small>
                                    </div>
                                  </div>
                                </a>
                                <a href="#">
                                  <div class="header-notif">
                                    <div class="notif-image">
                                      <span class="notification-badge">
                                        <img src="../../assets/images/avatars/avatar5.jpg" alt="">
                                      </span>
                                    </div>
                                    <div class="notif-text">
                                      <p>faucibus dolor in commodo lectus mattis</p>
                                      <small>yesterday</small>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/avatar1.jpg" alt=""></a>
                              <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                                <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                                <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
                              </div>
                            </li>
                          </ul>
                      </div>
                    </nav>
                </div>
                <div class="main-wrapper">
                  
                  <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Zero Configuration</h5>
                                <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.</p>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer">
                    <a href="tables.html" class="page-footer-item page-footer-item-left"><i data-feather="arrow-left" class="footer-left"></i>Basic Tables</a>
                    <a href="charts.html" class="page-footer-item page-footer-item-right">Charts<i data-feather="arrow-right" class="footer-right"></i></a>
                </div>

                </div>
        </div>
<?php
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>