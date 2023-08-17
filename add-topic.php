<!DOCTYPE html>

<html data-assets-path="./assets/">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add Topic - ForumX</title>

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

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/quill/editor.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="./assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>


    <!-- text editor -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- dom -->
    <script src="https://cdn.jsdelivr.net/npm/dompurify@2.3.2/dist/purify.min.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container">
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
                                    <div class="dropdown-shortcuts-list scrollable-container">

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

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">


                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-1"></div>
                            <div class="col-10 create-topic">
                                <h4>New Post</h4>
                                <div style="background-color: rgba(0, 0, 0, 0.123);" class="card-body p-4">
                                    <p style="color:rgb(167, 30, 30); font-weight: 600; font-size: 17px;" class="mb-0">
                                        Your content will need to be approved by a moderator</p>
                                </div>

                                <div class="mt-3 card-body bg-white p-2 alert alert-warning alert-dismissible fade show d-flex"
                                    role="alert">
                                    <p style="color:black; font-weight: 500; font-size: 15px;" class="mb-0"><span><img
                                                width="25" height="25"
                                                src="https://img.icons8.com/plumpy/25/fantasy.png"
                                                alt="fantasy" />&nbsp;</span> Forums Forum is a peer-to-peer community
                                        for anyone building their website and online business</p>
                                    <a type="text" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">Got It</span>
                                    </a>
                                </div>
                                <!-- <form method="post" action="view-topic.php">
                                    <div class="card">
                                        <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="card-body">
                                                        <h7 class="header">Title</h7>

                                                        <input type="text" name="title" class="form-control my-3" placeholder="Title" aria-label="title" aria-describedby="basic-addon1">

                                                        <h7 class="header">Tags</h7>

                                                        <input type="text" name="tag" class="form-control my-3" placeholder="Tags" aria-label="Username" aria-describedby="basic-addon1">

                                                        <h7 class="header">Content</h7>

                                                        <div id="full-editor">
                                                            <h6>Type your content here...</h7>
                                                        </div>
                                                      
                                                    </div>                                       
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card mt-5 mx-4 ">
                                                        <div style="background-color: rgb(238, 238, 238);" class="card-header">
                                                            Moderator options
                                                        </div>
                                                        <p class="p-3 mb-0">After Posting...</p>
                                                        <div class="form-check mx-3 mb-3">                                                        
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                            Hide Topic
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between p-4">
                                                    <button style="border: 1px solid lightgray; box-shadow: none;" class="btn btn-outline">Close</button>
                                                    <button style="background-color: dodgerblue; color: white; border: 1px solid dodgerblue;" class="btn btn-primary">Submit Topic</button>
                                                </div>                                       
                                        </div>
                                    </div>
                                </form> -->
                                <!-- <form method="post" action="view-topic.php"> -->
                                <form method="post" action="index.php" onsubmit="return validateForm()">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="card-body">
                                                    <h7 class="header">Title</h7>
                                                    <input type="text" name="title" class="form-control my-3" placeholder="Title" aria-label="title" aria-describedby="basic-addon1" required>

                                                    <h7 class="header">Tags</h7>
                                                    <input type="text" name="tag" class="form-control my-3" placeholder="Tags" aria-label="Username" aria-describedby="basic-addon1" required>

                                                    <h7 class="header">Content</h7>
                                                    <div id="editor-container" required></div>
                                                    <input type="hidden" name="content" id="editor-content" >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card mt-5 mx-4 ">
                                                    <div style="background-color: rgb(238, 238, 238);" class="card-header">
                                                        Moderator options
                                                    </div>
                                                    <p class="p-3 mb-0">After Posting...</p>
                                                    <div class="form-check mx-3 mb-3">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Hide Topic
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between p-4">
                                                <button style="border: 1px solid lightgray; box-shadow: none;" class="btn btn-outline">Close</button>
                                                <button style="background-color: dodgerblue; color: white; border: 1px solid dodgerblue;" class="btn btn-primary">Submit Topic</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
<script>
            var quill = new Quill('#editor-container', {
                theme: 'snow'
            });

            function validateForm() {
        // var editorContent = document.querySelector('.ql-editor').innerHTML;
        var editorContent = document.querySelector('.ql-editor').innerHTML;

        // Remove empty <p><br></p> tags
        var sanitizedContent = editorContent.replace(/<p><br><\/p>/g, '');

        // Sanitize and render the HTML content using DOMPurify
        var sanitizedHTML = DOMPurify.sanitize(sanitizedContent);       
        if (sanitizedHTML === '')
        {
            Swal.fire({
                icon: 'error',
                title: 'Content is required',
                text: 'Please provide content for the topic.',
            });      
            return false; // Prevent form submission
        }
        else if(sanitizedHTML != '')
      {
       
        document.getElementById('editor-content').value = sanitizedHTML;
     
           // Show a success SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Post submitted successfully!',
            timer: 36000, // Timer in milliseconds (3 seconds)
            showConfirmButton: true,
        }).then(() => {
            // After the timer expires, submit the form
            setTimeout(() => {
                document.querySelector('form').submit(); // Submit the form
            }, 5000); // Delay in milliseconds (3 seconds)
        });


    }



    }

    // function getEditorContent() {
    //     var editorHTML = document.querySelector('.ql-editor').innerHTML;
    //     document.getElementById('editor-content').value = editorHTML;
    // }

    // var form = document.querySelector('form');
    // form.addEventListener('submit', getEditorContent);
                                </script>
                               </div>
                            <div class="col-1"></div>
                        </div>
                    </div>


                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
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
    <script src="./assets/vendor/libs/quill/katex.js"></script>
    <script src="./assets/vendor/libs/quill/quill.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/forms-editors.js"></script>
</body>

</html>