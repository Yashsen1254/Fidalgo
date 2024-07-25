<?php
    require 'includes/init.php';
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
                      <h5>Dashboard</h5>
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
                            <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3<div class="spinner-grow text-danger" role="status">
                              <span class="visually-hidden">Loading...</span>
                            </div></a>
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
                  <div class="col-lg-6">
                    <div class="card main-chart-card">
                        <div class="card-body">
                          <div id="apex3"></div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card stats-card">
                          <div class="card-body">
                            <div class="stats-info">
                              <h5 class="card-title">$30K<span class="stats-change stats-change-danger">-8%</span></h5>
                              <p class="stats-text">Total revenue</p>
                            </div>
                            <div class="stats-icon change-danger">
                              <i class="material-icons">trending_down</i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card stats-card">
                          <div class="card-body">
                            <div class="stats-info">
                              <h5 class="card-title">$21K<span class="stats-change stats-change-danger">-8%</span></h5>
                              <p class="stats-text">Total revenue</p>
                            </div>
                            <div class="stats-icon change-danger">
                              <i class="material-icons">trending_down</i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card stats-card">
                          <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">1681<span class="stats-change stats-change-success">+16%</span></h5>
                                <p class="stats-text">Unique visitors</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">trending_up</i>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card stats-card">
                          <div class="card-body">
                            <div class="stats-info">
                                <h5 class="card-title">4743<span class="stats-change stats-change-success">+12%</span></h5>
                                <p class="stats-text">Total investments</p>
                            </div>
                            <div class="stats-icon change-success">
                                <i class="material-icons">trending_up</i>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                      <div class="card card-bg">
                        <div class="card-body">
                          <h5 class="card-title">Transactions</h5>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-primary text-white">
                                  <i data-feather="thumbs-up"></i>
                                </div>
                                <div class="tr-text">
                                  <h4 class="text-white">Facebook</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-success">+$24</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-success text-white">
                                  <i data-feather="credit-card"></i>
                                </div>
                                <div class="tr-text">
                                  <h4 class="text-white">Visa</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-success">+$300</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-danger text-white">
                                  <i data-feather="tv"></i>
                                </div>
                                <div class="tr-text">
                                  <h4 class="text-white">Netflix</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-danger">-$17</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-warning text-white">
                                  <i data-feather="shopping-cart"></i>
                                </div>
                                <div class="tr-text">
                                  <h4 class="text-white">Themeforest</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-danger">-$220</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="transactions-list">
                            <div class="tr-item">
                              <div class="tr-company-name">
                                <div class="tr-icon tr-card-icon tr-card-bg-info text-white">
                                  <i data-feather="dollar-sign"></i>
                                </div>
                                <div class="tr-text">
                                  <h4 class="text-white">PayPal</h4>
                                  <p>02 March</p>
                                </div>
                              </div>
                              <div class="tr-rate">
                                <p><span class="text-success">+20%</span></p>
                              </div>
                            </div>
                          </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card widget widget-info card-bg">
                      <div class="card-body">
                        <div class="widget-info-container">
                            <div class="widget-info-image" style="background: url('http://polygons.space/neo/theme/assets/images/premium.svg')"></div>
                            <h5 class="widget-info-title text-white">Advanced Security</h5>
                            <p class="widget-info-text">Lorem ipsum dolor sit amet. Nunc cursus tempor sapien, et mattis libero dapibus ut. Ut a ante sit amet arcu imperdiet ipsum ante</p>
                            <a href="#" class="btn btn-primary widget-info-action">Try Premium for free</a>
                        </div>
                    </div>
                  </div>
                  </div>
                <div class="col-lg-4">
                  <div class="card stat-widget card-bg">
                    <div class="card-body">
                      <h5 class="card-title">Top Authors</h5>
                      <div class="transactions-list">
                        <div class="tr-item">
                          <div class="tr-company-name">
                            <div class="tr-img tr-card-img">
                              <img src="../../assets/images/avatars/avatar1.jpg" alt="...">
                            </div>
                            <div class="tr-text">
                              <h4 class="text-white">John Doe</h4>
                              <p>23 items sold</p>
                            </div>
                          </div>
                          <div class="tr-rate">
                            <p><span>$300</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="transactions-list">
                        <div class="tr-item">
                          <div class="tr-company-name">
                            <div class="tr-img tr-card-img">
                              <img src="../../assets/images/avatars/avatar2.jpg" alt="...">
                            </div>
                            <div class="tr-text">
                              <h4 class="text-white">Ann Doe</h4>
                              <p>19 items sold</p>
                            </div>
                          </div>
                          <div class="tr-rate">
                            <p><span>$270</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="transactions-list">
                        <div class="tr-item">
                          <div class="tr-company-name">
                            <div class="tr-img tr-card-img">
                              <img src="../../assets/images/avatars/avatar3.jpg" alt="...">
                            </div>
                            <div class="tr-text">
                              <h4 class="text-white">Lisa Doe</h4>
                              <p>14 items sold</p>
                            </div>
                          </div>
                          <div class="tr-rate">
                            <p><span>$404</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="transactions-list">
                        <div class="tr-item">
                          <div class="tr-company-name">
                            <div class="tr-img tr-card-img">
                              <img src="../../assets/images/avatars/avatar4.jpg" alt="...">
                            </div>
                            <div class="tr-text">
                              <h4 class="text-white">John Doe</h4>
                              <p>10 items sold</p>
                            </div>
                          </div>
                          <div class="tr-rate">
                            <p><span>$500</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="transactions-list">
                        <div class="tr-item">
                          <div class="tr-company-name">
                            <div class="tr-img tr-card-img">
                              <img src="../../assets/images/avatars/avatar5.jpg" alt="...">
                            </div>
                            <div class="tr-text">
                              <h4 class="text-white">Ann Doe</h4>
                              <p>8 items sold</p>
                            </div>
                          </div>
                          <div class="tr-rate">
                            <p><span>$299</span></p>
                          </div>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
                  
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="card card-bg">
                    <div class="card-body">
                      <h5 class="card-title">Sales</h5>
                      <div id="sparkline1"></div>

                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-bg">
                    <div class="card-body">
                      <h5 class="card-title">Visitors</h5>
                      <div id="sparkline2"></div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-bg">
                    <div class="card-body">
                      <h5 class="card-title">Projects</h5>
                      <div id="sparkline3"></div>
                  </div>
                </div>
                </div>
              </div>
              
              </div>
              <div class="page-footer">
                
                <a href="crypto.html" class="page-footer-item page-footer-item-right">Crypto<i data-feather="arrow-right" class="footer-right"></i></a>
              </div>
            </div>
        </div>

        <div class="activity-sidebar-overlay"></div>
        <div class="activity-sidebar">
          <a href="#" id="activity-sidebar-close"><i class="material-icons">close</i></a>
          <div class="activity-header">
            <h5>Activity Logs</h5>
          </div>
          <div class="activity-body">
            <ul class="activity-list list-unstyled">
              <li class="activity-item">
                  <div class="activity-icon"><i class="material-icons">add</i></div>
                  <div class="activity-text">Ann Green uploaded new item
                      <span>This item has to be reviewed, moderators will check it soon.</span>
                  </div>
                  <div class="activity-helper">45min ago</div>
              </li>
              <li class="activity-item activity-info">
                  <div class="activity-icon"><i class="material-icons">code</i></div>
                  <div class="activity-text">John Doe made changes to create-invoice.js
                      <span>57 lines of code added, 0 removals, 0 errors, 6 warnings</span>
                  </div>
                  <div class="activity-helper">3h ago</div>
              </li>
              <li class="activity-item activity-danger">
                  <div class="activity-icon"><i class="material-icons">error_outline</i></div>
                  <div class="activity-text">Can't retrieve data from server
                      <span>Server is not responding, please contact provider</span>
                  </div>
                  <div class="activity-helper">6h ago</div>
              </li>
              <li class="activity-item">
                <div class="activity-icon"><i class="material-icons">done</i></div>
                <div class="activity-text">Files Uploaded
                    <span>2 new files uploaded</span>
                    <div class="mail-attachment-files">
                      <div class="card">
                        <img src="../../assets/images/card2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">image.jpg</h5>
                          <p class="card-text text-secondary">305 KB</p>
                        </div>
                      </div>
                      <div class="card">
                        <img src="../../assets/images/card1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">image2.jpg</h5>
                          <p class="card-text text-secondary">400 KB</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="activity-helper">8h ago</div>
            </li>
          </ul>
          </div> 
        </div>
        
        <div class="search-results">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="search-results-header">
                          <h5>Search Results</h5>
                          <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <ul class="search-result-list user-search">
                          <li>
                              <img src="../../assets/images/avatars/avatar2.jpg" alt="">
                              <p>John Doe<br>(Works at <span class="search-input-value">hj</span>)</p>
                          </li>
                          <li>
                              <img src="../../assets/images/avatars/avatar3.jpg" alt="">
                              <p>Anna doe<br>(Lives in <span class="search-input-value">hj</span>)</p>
                          </li>
                          <li>
                              <img src="../../assets/images/avatars/avatar4.jpg" alt="">
                              <p>People near:<br><span class="search-input-value">hj</span></p>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="search-result-list social-search">
                          <li>
                              <div class="social-search-icon facebook-icon-bg">
                                  <i class="fab fa-facebook-f"></i>
                              </div>
                              <div class="social-search-text">
                                  <p><span class="search-input-value">hj</span> on Facebook</p>
                              </div>
                          </li>
                          <li>
                              <div class="social-search-icon twitter-icon-bg">
                                  <i class="fab fa-twitter"></i>
                              </div>
                              <div class="social-search-text">
                                  <p><span class="search-input-value">hj</span> on Twitter</p>
                              </div>
                          </li>
                          <li>
                              <div class="social-search-icon google-icon-bg">
                                  <i class="fab fa-google"></i>
                              </div>
                              <div class="social-search-text">
                                  <p><span class="search-input-value">hj</span> on Google</p>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <ul class="search-result-list article-search">
                          <li>
                              <p>Lorem ipsum dolor sit amet, consectetur <span class="search-input-value">hj</span> adipiscing elit, sunt in culpa quifdaasd quis.</p>
                              <span class="search-article-date">06 Jul, 2021</span>
                          </li>
                          <li>
                              <p>Duis non semper sapien. Morbi imperdiet velit in <span class="search-input-value">hj</span> bibendum lobortis. Integer arcu urna, elementum in pellentesque nec, finibus at nisi.</p>
                              <span class="search-article-date">19 Mar, 2017</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
<?php
    include pathOf('includes/scripts.php');
?>