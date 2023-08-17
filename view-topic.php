<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ForumX - View Topic</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/fluency/20/communication.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="./assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="./assets/vendor/fonts/fontawesome.css" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="./assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />
    <link rel="stylesheet" href="./assets/vendor/css/rtl/core.css" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/pages/cards-statistics.css" />
    <link rel="stylesheet" href="./assets/vendor/css/pages/cards-analytics.css" />
    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <script src="./assets/vendor/js/template-customizer.js"></script>
    <script src="./assets/js/config.js"></script>
</head>

<body>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $title = $_POST["title"];
//     $tag = $_POST["tag"];
//     $content = $_POST["content"]; 
//     echo "Submitted title: " . htmlspecialchars($title) . "<br>";
//     echo "Submitted tag: " . htmlspecialchars($tag) . "<br>";
//     echo "Submitted content: " . html_entity_decode($content) . "<br>";    
// }
?>
   
 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span style="color: var(--bs-primary)">
                                    <img width="35" height="35"
                                        src="https://img.icons8.com/fluency/48/communication.png" alt="communication" />
                                </span>
                            </span>
                            <span class="app-brand-text demo menu-text fw-bold">ForumX</span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="mdi mdi-close align-middle"></i>

                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- pulse  -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/30/pulse.png"
                                        alt="pulse" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <p class="text-body mb-0 me-auto">No New Notification</p>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <!-- pulse -->

                            <!-- Mail Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <img width="25" height="25"
                                        src="https://img.icons8.com/fluency-systems-regular/25/new-post.png"
                                        alt="new-post" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">

                                    <li class="dropdown-menu-footer border-top p-2">
                                        <a href="javascript:void(0);" class="d-flex justify-content-center p-5">
                                            No New Messages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Mail Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="./assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="./assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-account-outline me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-cog-outline me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#" target="_blank">
                                            <i class="mdi mdi-logout me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                        <input type="text" class="form-control search-input border-0" placeholder="Search..."
                            aria-label="Search..." />
                        <i class="mdi mdi-close search-toggler cursor-pointer"></i>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->
            <div class="container">
                <div class="row gy-4 py-5">
                    <div class="col-lg-9">
                        <div class="thread-box p-4 bg-white card">
                            <!-- <h4 class="text-black">Fuel User Engagement with Seriously Powerful In-app Chats</h4> -->
                            <h4 class="text-black"><?php echo htmlspecialchars($_GET["title"]) ?></h4>
                            <ul style="list-style-type: none;" class="author-info d-flex px-0">
                                <li style="color: black;" class="at-name"><img height="25" width="25"
                                        src="./assets/img/avatars/5.png" alt="Avatar"
                                        class="rounded-circle">
                                        <span>&nbsp;James S.Booth</span><br>
                                        <span style="display: block;">&nbsp;<b>Tag:</b> <?php echo htmlspecialchars($_GET["tag"]); ?></span>
                                    
                                </li>
                                <li class="px-3">April 3, 2022</li>
                                <li style="color: black;" class="px-3"><span>0</span>&nbsp;Replies </li>
                                <li class="px-3"><span>10.3 K</span>Views</li>
                            </ul>
                            <hr>
                            <div class="topic-nav d-flex align-middle justify-content-between">
                                <ul style="list-style-type: none;" class="info-bar d-flex m-0 p-0 align-items-center">
                                    <li class="text-dark">Replies: <span style="font-weight: 700;">10</span></li>
                                    <li class="text-dark px-4">Created <span style="font-weight: 700;">1 Year</span> Ago</li>
                                    <li class="text-dark px-4">Last Reply <span style="font-weight: 700;">2 Day</span></li>
                                </ul>
                                <button style="background-color: dodgerblue; color: white;" class="btn btn-primary">Reply To This Topic</button>
                            </div>
                            <hr>
                            <div class="card cs px-4 pt-3">
                                <!-- <p class="text-dark m-0">I am currently facing a difficulty with this endpoint i am developing. I always get a “rest_no_route” error while i have well installed the plugin and everything is live. Can you please tell me what the problem is?</p> -->
                                <p class="text-dark m-0"><?php echo html_entity_decode($_GET["content"]) ?></p>
                                <hr>
                                <div class="mb-3 d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button class="lk-reply"><img width="18" height="18" src="https://img.icons8.com/external-anggara-basic-outline-anggara-putra/20/external-like-ui-anggara-basic-outline-anggara-putra.png" alt="external-like-ui-anggara-basic-outline-anggara-putra"/>&nbsp;<span> 5 </span></button>
                                        <button class="lk-reply mx-3"><img width="18" height="18" src="https://img.icons8.com/small/15/like--v1.png" alt="like--v1"/>&nbsp;<span> 5 </span></button>
                                    </div>
                                    <div class="reply-by">
                                        <a><img height="25" width="25" src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle"><span style="color: black;" class="replier"> James S. Booth </span><span style="font-size: smaller;" class="rep-date">April 3, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="card py-4 px-2">
                            <div class="card-header pb-0">
                                <h3 class="mb-1 card-title">Circle Day: Build your Toolkit</h3>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <h5 class="mb-0 pt-1 text-nowrap">50 Days away</h5>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-6 text-end pe-lg-0 pe-xl-2">
                                        <small class="text-muted">Event Details -></small>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>


            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>

        </div>
</div>
    <!--/ Layout wrapper -->




            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="./assets/vendor/libs/jquery/jquery.js"></script>
            <script src="./assets/vendor/libs/popper/popper.js"></script>
            <script src="./assets/vendor/js/bootstrap.js"></script>
            <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="./assets/vendor/libs/node-waves/node-waves.js"></script>

            <script src="./assets/vendor/libs/hammer/hammer.js"></script>
            <script src="./assets/vendor/libs/i18n/i18n.js"></script>
            <script src="./assets/vendor/libs/typeahead-js/typeahead.js"></script>

            <script src="./assets/vendor/js/menu.js"></script>
            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>
            <script src="./assets/vendor/libs/swiper/swiper.js"></script>

            <!-- Main JS -->
            <script src="./assets/js/main.js"></script>

            <!-- Page JS -->
            <script src="./assets/js/dashboards-analytics.js"></script>
</body>

</html>