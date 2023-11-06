<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo">
                            <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="">
                                </span>
                        </a>
                    </div>


                </div>

                <?php include 'options-buttons.php'; ?>
            </div>
        </header>




        <div class="page-content">
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="empty-event">
                                    <img src="assets/images/event/create-event.png" alt="">
                                    <h2>Create New Event</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <a href="event.php"><button type="button" class="btn btn-primary waves-effect waves-light btn-md br-50">
                                                  Create New Event
                                                </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="empty-event">
                                    <img src="assets/images/event/create-event.png" alt="">
                                    <h2>No attendee data yet</h2>
                                    <p>Attendees profiles can be managed here when they register to your event.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>




    </div>






    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>