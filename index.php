<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ForumX</title>

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

    <script src="./assets/js/config.js"></script>
</head>

<body>
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
                    <div class="header-content">
                        <h4>ForumX Resources</h4>
                        <p>Learn how to make most of your ForumX Forum experience</p>
                    </div>
                    <div class="col-lg-9 col-md-12 col-md-12">

                        <div class="row">
                            <div class="col-sm-8 col-sm-8 col-sm-8 d-flex">
                                <div class="dropdown">SORT BY &nbsp;
                                    <button class="btn btn-outline dropdown-toggle btn-sm" type="button"
                                        id="multiSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Activity
                                    </button>
                                    <ul class="dropdown-menu p-3" aria-labelledby="multiSelectDropdown">
                                        <li>
                                            <label>
                                                <input type="checkbox" value="All">
                                                Title
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" value="Solved" id="start_date">
                                                Start Date
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" value="most_viewed" id="most_viewed">
                                                Most Viewed
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" value="most_replies" id="most_replies">
                                                Most Replies
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown snd">
                                    <button class="btn btn-outline dropdown-toggle btn-sm" type="button"
                                        id="multiSelectDropdown-snd" data-bs-toggle="dropdown" aria-expanded="false">
                                        Status
                                    </button>
                                    <ul class="dropdown-menu p-3" aria-labelledby="multiSelectDropdown">
                                        <li>
                                            <label>
                                                <input type="checkbox" value="All" id="all">
                                                All
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" value="Solved" id="solved">
                                                Solved
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" value="Unsolved" id="unsolved">
                                                Unsolved
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                            </div>


                            <div class="col-sm-4 col-sm-4 strt-dis d-md-flex justify-content-md-end">
                                <a href="add-topic.php" ><button class="btn btn-primary btn-sm py-2 sd">+ Start a Discussion</button></a>
                            </div>
                        </div>

                        <div class="discsn-list">
                            <div class="discsn-list" id="discussion-list">
                                <!-- ... your card elements ... -->
                            <div class="card my-3" id="div-1" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <!-- <h5 class="topic-title mb-0">Fuel User Engagement with Seriously Powerful
                                            In-app Chats</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p> -->
                                        <!-- <h5 class="topic-title mb-0"><a href="view-topic.php" ><?php echo htmlspecialchars($_POST["title"]) ?></a></h5>  -->
                                        <h5 class="topic-title mb-0"><a href="view-topic.php?title=<?php echo urlencode($_POST["title"]); ?>&tag=<?php echo urlencode($_POST["tag"]); ?>&content=<?php echo urlencode($_POST["content"]); ?>"><?php echo htmlspecialchars($_POST["title"]) ?></a></h5>
                                     
                                        <p class="topic-content mb-0 mt-2"><?php echo html_entity_decode($_POST["content"]) ?>.</p>
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
                            </div>

                            <div class="card my-3" id="div-2" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <h5 class="topic-title mb-0">Become User Engagement with Seriously Powerful
                                            In-app Chats</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p>                                  
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
                            </div>

                            <div class="card my-3" id="div-3" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <h5 class="topic-title mb-0">Casual User Engagement with Seriously Powerful
                                            In-app Chats</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p>                                  
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
                            </div>

                            <div class="card my-3" id="div-4" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <h5 class="topic-title mb-0">Doller User Engagement with Seriously Powerful
                                            In-app Chats</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p>                                  
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
                            </div>

                            <div class="card my-3" id="div-5" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <h5 class="topic-title mb-0">Embed System with Seriously Powerful
                                            In-app Chats</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p>                                  
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
                            </div>

                            <div class="card my-3" id="div-6" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <h5 class="topic-title mb-0">FALSE Powerful In-app Chats</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p>                                  
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
                            </div>

                            <div class="card my-3" id="div-7" style="display:block;">
                                <ul style="list-style-type: none;" class="d-flex mb-0 p-3 justify-content-between">
                                    <li class="topic-area1 w-50 px-2 d-flex">
                                        <img width="18" height="18"
                                        src="https://img.icons8.com/ios-glyphs/18/full-stop--v1.png"
                                        alt="full-stop--v1" />
                                        <div class="px-2">
                                        <h5 class="topic-title mb-0">Gravity Force System</h5>
                                          <p class="topic-content mb-0 mt-2"> Public forums are indexed by search engines,
                                            so do not share sensitive details related to passwords, payments.</p>                                  
                                        </div>
                                    </li>
                                    <ul style="list-style-type: none;" class="d-flex p-0">
                                        <li class="topic-an w-10">
                                            <div class="vws-rps">
                                                <small style="color: black;" class="topic-reply mb-0">0 Replies</small><br>
                                                <small class="topic-views mb-0">10.3K Views</small>
                                            </div>
                                        </li>
                                        <li style="margin: auto;" class="avatar mx-2">
                                            <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                        </li>
                                        <li class="author-info py-3">
                                            <div class="nm-jd">
                                                <small class="topic-reply mb-0 text-dark">James S.Booth</small><br>
                                                <small class="topic-views mb-0">April 3, 2022</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <li class="action-items p-0">
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-pin-interface-kiranshastry-lineal-color-kiranshastry-3.png"
                                            alt="external-pin-interface-kiranshastry-lineal-color-kiranshastry-3" />
                                        <img class="mx-2" width="20" height="20"
                                            src="https://img.icons8.com/sf-ultralight-filled/25/737373/star.png"
                                            onclick="this.src='https://img.icons8.com/material-rounded/24/228BE6/star--v1.png'">
                                        <img class="mx-2" width="20" height="20" src="https://img.icons8.com/plumpy/24/ok--v1.png"
                                            onclick="this.src='https://img.icons8.com/fluency/20/ok.png'">

                                    </li>
                                </ul>
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
                                        <h6 class="mb-0 pt-1 text-nowrap">50 Days away</h6>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-6 text-end pe-lg-0 pe-xl-2">
                                        <small style="color: #fff !important;" class="text-muted">Event Details-></small>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="popular-con py-5">
                            <h5>Popular Contributors</h5>

                            <div id="outer">
                                <div class="div">
                                    <img src="./assets/img/avatars/5.png" alt="Avatar" class="rounded-circle avatar">
                                    <a class="con-name">Jamessbooth</a>
                                </div>
                                <div class="div">
                                    <img src="./assets/img/avatars/12.png" alt="Avatar" class="rounded-circle avatar">
                                    <a class="con-name">Sandra1323</a>
                                </div>
                                <div class="div ">
                                    <img src="./assets/img/avatars/9.png" alt="Avatar" class="rounded-circle avatar">
                                    <a class="con-name">Lukebryant</a>
                                </div>
                                <div class="div ">
                                    <img src="./assets/img/avatars/6.png" alt="Avatar" class="rounded-circle avatar">
                                    <a class="con-name">Bills3004</a>
                                </div>
                                <div class="div ">
                                    <img src="./assets/img/avatars/6.png" alt="Avatar" class="rounded-circle avatar">
                                    <a class="con-name">Amelacdonar</a>
                                </div>
                                <div class="div ">
                                    <img src="./assets/img/avatars/14.png" alt="Avatar" class="rounded-circle avatar">
                                    <a class="con-name">Andrew132</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-left">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>


            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>

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

            <script>
                const chBoxes =
                    document.querySelectorAll('.dropdown-menu input[type="checkbox"]');
                const dpBtn =
                    document.getElementById('multiSelectDropdown');
                let mySelectedListItems = [];

                function handleCB() {
                    mySelectedListItems = [];
                    let mySelectedListItemsText = '';

                    chBoxes.forEach((checkbox) => {
                        if (checkbox.checked) {
                            mySelectedListItems.push(checkbox.value);
                            mySelectedListItemsText += checkbox.value + ', ';
                        }
                    });

                    dpBtn.innerText =
                        mySelectedListItems.length > 0
                            ? mySelectedListItemsText.slice(0, -2) : 'Select';
                }

                chBoxes.forEach((checkbox) => {
                    checkbox.addEventListener('change', handleCB);
                });
            </script>

<script>
$(document).ready(function() {
    // Select the checkbox input for the "Title" option
    const titleCheckbox = $('[value="All"]');
    
    // Add an event listener to the checkbox
    titleCheckbox.on('change', function() {
        if (this.checked) {

            $('#div-1').show();
            $('#div-2').show();
            $('#div-3').show();
            $('#div-4').show();
            $('#div-5').show();
            $('#div-6').show();
            $('#div-7').show();
            // Get all the cards inside the discussion-list element
            const cards = $('#discussion-list .card');
            
            // Convert the cards to an array and sort them based on their titles
            const sortedCards = Array.from(cards).sort((a, b) => {
                const titleA = $(a).find('.topic-title a').text().toLowerCase();
                const titleB = $(b).find('.topic-title a').text().toLowerCase();
                return titleA.localeCompare(titleB);
            });
            
            // Remove all cards from the discussion-list element
            $('#discussion-list').empty();
            
            // Append the sorted cards back to the discussion-list element
            sortedCards.forEach(card => {
                $('#discussion-list').append(card);
            });
        }
    });
});



</script>

<script>
$(document).ready(function() {
    //"Start Date"
    const startDateCheckbox = $('#start_date');   
    
    startDateCheckbox.on('change', function() {
        if (this.checked) {
            // alert("Start Date checkbox selected");
            $('#div-1').show();
            $('#div-2').hide();
            $('#div-3').hide();
            $('#div-4').hide();
            $('#div-5').hide();
            $('#div-6').hide();
            $('#div-7').show();
            // Call your function or perform actions here
        }
    });

    //"Start Date"
    const most_viewed = $('#most_viewed');   
    
    most_viewed.on('change', function() {
        if (this.checked) {
            // alert("Start Date checkbox selected");
            $('#div-1').hide();
            $('#div-2').show();
            $('#div-3').hide();
            $('#div-4').hide();
            $('#div-5').hide();
            $('#div-6').show();
            $('#div-7').show();
            // Call your function or perform actions here
        }
    });

    // most_replies
    const most_replies = $('#most_replies');   
    
    most_replies.on('change', function() {
        if (this.checked) {
            // alert("Start Date checkbox selected");
            $('#div-1').hide();
            $('#div-2').hide();
            $('#div-3').show();
            $('#div-4').hide();
            $('#div-5').hide();
            $('#div-6').hide();
            $('#div-7').hide();
            // Call your function or perform actions here
        }
    });

    
    // all
    const all = $('#all');   
    
    all.on('change', function() {
        if (this.checked) {
            // alert("Start Date checkbox selected");
            $('#div-1').hide();
            $('#div-2').hide();
            $('#div-3').hide();
            $('#div-4').show();
            $('#div-5').show();
            $('#div-6').hide();
            $('#div-7').show();
            // Call your function or perform actions here
        }
    });

    // solved
    const solved = $('#solved');   
    
    solved.on('change', function() {
        if (this.checked) {
            // alert("Start Date checkbox selected");
            $('#div-1').hide();
            $('#div-2').hide();
            $('#div-3').show();
            $('#div-4').show();
            $('#div-5').show();
            $('#div-6').show();
            $('#div-7').show();
            // Call your function or perform actions here
        }
    });

    // most_replies
    const unsolved = $('#unsolved');   
    
    unsolved.on('change', function() {
        if (this.checked) {
            // alert("Start Date checkbox selected");
            $('#div-1').hide();
            $('#div-2').show();
            $('#div-3').show();
            $('#div-4').hide();
            $('#div-5').hide();
            $('#div-6').show();
            $('#div-7').show();
            // Call your function or perform actions here
        }
    });



});
</script>

</body>

</html>