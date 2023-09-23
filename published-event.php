<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Event Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/aos.css" rel="stylesheet">

</head>

<body class="ovrflw">
    <style>
        .team-tab-content{
            overflow: auto;
        }
    </style>

    <?php include 'loader.php';?>

    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo">
                            <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="" height="23">
                                </span>
                        </a>
                    </div>


                </div>

                <?php include 'options-buttons.php'; ?>
            </div>
        </header>




        <div class="page-content">
            <div class="container-fluid px-0">



                <div class="row">
                    <div class="col-12 px-md-0">
                        <div class="top-bar event-detail-header d-flex justify-content-between align-items-center">
                            <div class="event-details-top-left">
                                <h4>Conference for architects</h4>
                                <h6><svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.27998 1.75V4.375M14.56 1.75V4.375M3.18498 7.95375H18.655M19.11 7.4375V14.875C19.11 17.5 17.745 19.25 14.56 19.25H7.27998C4.09498 19.25 2.72998 17.5 2.72998 14.875V7.4375C2.72998 4.8125 4.09498 3.0625 7.27998 3.0625H14.56C17.745 3.0625 19.11 4.8125 19.11 7.4375Z" stroke="#969696" stroke-width="1.176" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.2824 11.9875H14.2906M14.2824 14.6125H14.2906M10.9154 11.9875H10.9245M10.9154 14.6125H10.9245M7.54749 11.9875H7.55659M7.54749 14.6125H7.55659" stroke="#969696" stroke-width="1.176" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg> Wed Aug 23, 2023 - 08:00 AM (IST)</h6>
                            </div>
                            <div class="d-flex flex-wrap gap-3 event-btns">
                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bx-bar-chart-alt-2"></i>Registration statistics</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bx-user"></i>Attendees 1</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bx-mobile-alt"></i>Registration Desk</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bxs-bank"></i>Booths 1</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bx-microphone"></i>Tracks 1</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bx-user-pin"></i>Sponsors 1</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="bx bx-chat"></i>Rooms 1</button>
                                </div>
                            </div>
                            <div class="d-flex rightside-btns">
                                <ul class="nav nav-pills" role="tablist" style="display: none;">
                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#manage" role="tab" aria-selected="true">

                                            <span>Manage</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#conduct" role="tab" aria-selected="false" tabindex="-1">

                                            <span>Conduct</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-evnt-edit">Edit</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-content evnt-tab-content">
                    <div class="tab-pane active" id="manage" role="tabpanel">
                        <div class="nav-evnt-top">
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#evnt-tab1" role="tab">
                                        <span>Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab2" role="tab">
                                        <span>Attendees</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab3" role="tab">
                                        <span>Team</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab4" role="tab">
                                        <span>Session</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab5" role="tab">
                                        <span>From Responses</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#evnt-tab6" role="tab">
                                        <span>Settings</span>
                                    </a>
                                </li>

                            </ul>
                            <a href="#"><button type="button" class="btn btn-outline-secondary waves-effect waves-light btn-md text-uppercase small">
                                                <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.70349 2.02734C1.58368 2.02734 0.675903 2.93513 0.675903 4.05493V14.8687C0.675903 15.9885 1.58368 16.8963 2.70349 16.8963H9.0397L8.87073 18.248H6.0828C5.70953 18.248 5.40694 18.5506 5.40694 18.9239C5.40694 19.2972 5.70953 19.5998 6.0828 19.5998H15.5449C15.9181 19.5998 16.2207 19.2972 16.2207 18.9239C16.2207 18.5506 15.9181 18.248 15.5449 18.248H12.7569L12.588 16.8963H18.9242C20.044 16.8963 20.9518 15.9885 20.9518 14.8687V4.05493C20.9518 2.93513 20.044 2.02734 18.9242 2.02734H2.70349ZM2.02763 4.05493C2.02763 3.68166 2.33022 3.37907 2.70349 3.37907H18.9242C19.2974 3.37907 19.6 3.68166 19.6 4.05493V12.8411H2.02763V4.05493ZM10.8138 15.5446C10.9931 15.5446 11.165 15.4734 11.2917 15.3466C11.4185 15.2199 11.4897 15.048 11.4897 14.8687C11.4897 14.735 11.4501 14.6044 11.3758 14.4932C11.3015 14.3821 11.196 14.2955 11.0725 14.2443C10.949 14.1932 10.8131 14.1798 10.682 14.2058C10.5509 14.2319 10.4304 14.2963 10.3359 14.3908C10.2414 14.4853 10.177 14.6058 10.151 14.7369C10.1249 14.868 10.1383 15.0039 10.1894 15.1274C10.2406 15.2509 10.3272 15.3564 10.4383 15.4307C10.5495 15.5049 10.6802 15.5446 10.8138 15.5446Z" fill="#263238"></path>
                                                    </svg>Preview
                                                </button></a>
                        </div>

                        <hr class="nav-bottom-hr">
                        <div class="tab-content evnt-tabcontent">
                            <div class="tab-pane active" id="evnt-tab1" role="tabpanel">
                                <div class="row overview-tabs">
                                    <div class="col-md-8 border-right">
                                        <div class="status-tag">
                                            <div class="s-tag first-tag">
                                                <h6>New</h6>
                                                <svg width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>

                                            </div>
                                            <div class="s-tag">
                                                <svg class="frst-arrow-svg" width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                <h6>Booked</h6>
                                                <svg width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                            </div>
                                            <div class="s-tag active">
                                                <svg class="frst-arrow-svg" width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                <h6>Announced</h6>
                                                <svg width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                            </div>
                                            <div class="s-tag">
                                                <svg class="frst-arrow-svg" width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                <h6>Ended</h6>
                                                <svg width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                            </div>
                                            <div class="s-tag">
                                                <svg class="frst-arrow-svg" width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                <h6>Cancelled</h6>
                                                <svg width="21" height="35" viewBox="0 0 21 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L20 20L1 39L1" stroke="#EBEBEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ps-md-0 d-none d-sm-block">
                                        <div class="right-side-nav">
                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#send-msg" role="tab">
                                                        <span>Send message</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#log-note" role="tab">
                                                        <span>Log note</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                                                        <span><i class="far fa-clock me-2"></i>Activities</span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="followng">
                                                <a href="#">Following</a>
                                                <div class="followers">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.6238 2.83333C12.998 2.83333 14.103 3.94541 14.103 5.3125C14.103 6.65125 13.0405 7.74208 11.7159 7.79166C11.6547 7.78458 11.5929 7.78458 11.5318 7.79166M12.9909 14.1667C13.5009 14.0604 13.9826 13.855 14.3793 13.5504C15.4843 12.7217 15.4843 11.3546 14.3793 10.5258C13.9897 10.2283 13.5151 10.03 13.0122 9.91666M6.48842 7.69958C6.41759 7.6925 6.33259 7.6925 6.25467 7.69958C5.44165 7.67198 4.6713 7.32901 4.10675 6.7433C3.54219 6.1576 3.22778 5.37515 3.23009 4.56166C3.23009 2.82625 4.63259 1.41666 6.37509 1.41666C7.20826 1.40164 8.01327 1.7182 8.61303 2.29671C9.2128 2.87522 9.55819 3.66829 9.57322 4.50146C9.58824 5.33462 9.27168 6.13964 8.69317 6.7394C8.11466 7.33916 7.32159 7.68455 6.48842 7.69958ZM2.94676 10.3133C1.23259 11.4608 1.23259 13.3308 2.94676 14.4712C4.89467 15.7746 8.08926 15.7746 10.0372 14.4712C11.7513 13.3237 11.7513 11.4537 10.0372 10.3133C8.09634 9.01708 4.90176 9.01708 2.94676 10.3133Z" stroke="#626262" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>3

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr class="nav-bottom-hr">
                                <div class="row overview-tab">
                                    <div class="col-md-8 col-lap-8 border-right">
                                        <div class="row">
                                            <div class="col-md-4 margin-box" data-aos="fade-up">
                                                <div class="evt-box bg-color-1 h-100">
                                                    <div class="qr-code-box">
                                                        <img src="assets/images/qrcode.jpg" class="img-fluid">
                                                    </div>

                                                    <button type="button" class="btn btn-share-qr" data-bs-toggle="modal" data-bs-target="#share-qr">
                                                                Share QR
                                                            </button>
                                                </div>

                                            </div>
                                            <div class="col-md-4 margin-box" data-aos="fade-up" data-aos-delay="300">
                                                <div class="evt-box bg-color-3 event-live h-100">
                                                    <div>
                                                        <h4>Event Live URL</h4>

                                                        <div class="input-group link-a">
                                                            <input type="text" class="form-control" value="https://gadrgdra.zohobackstage.com/EnglishClass">

                                                            <span class="input-group-text"><i class="fas fa-copy"></i></span>
                                                        </div>

                                                        <p>Your event is live. You may still make changes and republish your event.</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-4 margin-box" data-aos="fade-up" data-aos-delay="500">
                                                <div class="evt-box bg-color-2 h-100">
                                                    <div id="donut_chart" data-colors='["#F14E4E","#3D67EF"]' class="apex-charts" dir="ltr"></div>
                                                    <h4>Tickets (100)</h4>
                                                    <div class="seats-tckt">
                                                        <h6 class="sold-seat">Sold seats (30)</h6>
                                                        <h6>Available seats (70)</h6>
                                                    </div>
                                                    <div class="evt-box-bottom">
                                                        <a href="#">
                                                            <img src="assets/images/right-arrow.svg">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 margin-box" data-aos="fade-up" data-aos-delay="500">
                                                <div class="evt-box  bg-color-4 h-100">
                                                    <h4>Attendees</h4>
                                                    <div class="number-boxes">
                                                        <div class="nmbr-bx">
                                                            <h5>200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="evt-box-bottom">
                                                        <a href="attandees.php">
                                                            <img src="assets/images/right-arrow.svg">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-4 margin-box" data-aos="fade-up" data-aos-delay="300">
                                                <div class="evt-box bg-color-6 event-live h-100">
                                                    <h4>Speakers</h4>
                                                    <div class="number-boxes">
                                                        <div class="nmbr-bx">
                                                            <h5>0</h5>
                                                            <h6>Total requests</h6>
                                                        </div>
                                                    </div>
                                                    <div class="evt-box-bottom">
                                                        <a href="#">
                                                            <img src="assets/images/right-arrow.svg">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-4 margin-box" data-aos="fade-up" data-aos-delay="300">
                                                <div class="evt-box bg-color-5 event-live h-100">
                                                    <h4>Event members</h4>
                                                    <div class="number-boxes">
                                                        <div class="nmbr-bx">
                                                            <h5>10</h5>
                                                            <h6>Staff</h6>
                                                        </div>
                                                        <div class="nmbr-bx">
                                                            <h5>09</h5>
                                                            <h6>Organizers</h6>
                                                        </div>
                                                    </div>
                                                    <div class="evt-box-bottom">
                                                        <a href="#">
                                                            <img src="assets/images/right-arrow.svg">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>






                                        </div>
                                    </div>

                                    <div class="col-md-4 col-lap-4" data-aos="fade-up">
                                        <div class="right-side-nav d-md-none msg-box-mob">
                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#send-msg" role="tab">
                                                        <span>Send message</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#log-note" role="tab">
                                                        <span>Log note</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                                                        <span><i class="far fa-clock me-2"></i>Activities</span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="followng">
                                                <a href="#">Following</a>
                                                <div class="followers">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.6238 2.83333C12.998 2.83333 14.103 3.94541 14.103 5.3125C14.103 6.65125 13.0405 7.74208 11.7159 7.79166C11.6547 7.78458 11.5929 7.78458 11.5318 7.79166M12.9909 14.1667C13.5009 14.0604 13.9826 13.855 14.3793 13.5504C15.4843 12.7217 15.4843 11.3546 14.3793 10.5258C13.9897 10.2283 13.5151 10.03 13.0122 9.91666M6.48842 7.69958C6.41759 7.6925 6.33259 7.6925 6.25467 7.69958C5.44165 7.67198 4.6713 7.32901 4.10675 6.7433C3.54219 6.1576 3.22778 5.37515 3.23009 4.56166C3.23009 2.82625 4.63259 1.41666 6.37509 1.41666C7.20826 1.40164 8.01327 1.7182 8.61303 2.29671C9.2128 2.87522 9.55819 3.66829 9.57322 4.50146C9.58824 5.33462 9.27168 6.13964 8.69317 6.7394C8.11466 7.33916 7.32159 7.68455 6.48842 7.69958ZM2.94676 10.3133C1.23259 11.4608 1.23259 13.3308 2.94676 14.4712C4.89467 15.7746 8.08926 15.7746 10.0372 14.4712C11.7513 13.3237 11.7513 11.4537 10.0372 10.3133C8.09634 9.01708 4.90176 9.01708 2.94676 10.3133Z" stroke="#626262" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>3

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="send-msg" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="Send message to followers"></textarea>
                                                        <button type="button" class="btn btn-primary btn-publish waves-effect waves-light btn-sm px-4 text-uppercase br-50 small">Send</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="msg-snd">
                                                            <h6 class="send-date">Today</h6>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>Booked</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>Announced</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>New</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>Booked</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>Booked</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>New</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>New</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>Booked</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx msg-bx1">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Odoo Bot <span>- 6 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h4>Event Created</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="log-note" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="Log an internal note"></textarea>
                                                        <button type="button" class="btn btn-primary btn-publish waves-effect waves-light btn-sm px-4 text-uppercase br-50 small">Send</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="msg-snd">
                                                            <h6 class="send-date">Today</h6>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>Booked</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>Announced</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>New</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>Booked</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>Booked</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>New</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Mitchell Admin <span>- 5 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h5>New</h5> <i class="fas fa-long-arrow-alt-right"></i>
                                                                        <h6>Booked</h6> <span>(Stage)</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="msg-bx msg-bx1">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                <div class="msg-details">
                                                                    <h6>Odoo Bot <span>- 6 hours ago</span></h6>
                                                                    <div class="msgs">
                                                                        <h4>Event Created</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="activities" role="tabpanel">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="evnt-tab2" role="tabpanel">
                                <div class="row speaker-div team-tab-content pe-0">
                                    <div class="col-md-9 border-right">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#add-attandee">
                                                                    <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Add Attendee
                                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_1_2621)">
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_1_2621">
                                                                        <rect width="16.3125" height="16.3125" fill="white" transform="translate(0.821289 0.290039)"></rect>
                                                                        </clipPath>
                                                                        </defs>
                                                                        </svg>Export
                                                                </button>
                                                                <button type="button"
                                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#import-upload">
                                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                                                        stroke="#263238" stroke-width="1.36" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>Import
                                                            </button>
                                            </div>
                                            <div class="team-right-btns">
                                                <div class="page-count">
                                                    <!-- <input type="number" class="form-control" value="10"> -->
                                                    <select class="form-select">
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>50</option>
                                                        <option>100</option>
                                                    </select>
                                                </div>
                                                <div class="input-group search-inpt me-2">

                                                    <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search Members">
                                                    <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                                </div>

                                                <div class="filter-groupby">
                                                   <div class="dropdown drpdwn-fg">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                        id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                        data-mdb-auto-close="outside">
                                                        <svg width="18" height="18" viewBox="0 0 18 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.7397 14.3026C10.7397 14.7601 10.4397 15.3601 10.0572 15.5926L8.99968 16.2751C8.01718 16.8826 6.65218 16.2001 6.65218 14.9851V10.9726C6.65218 10.4401 6.35218 9.75757 6.04468 9.38257L3.16468 6.35257C2.78218 5.97007 2.48218 5.29507 2.48218 4.83757V3.09757C2.48218 2.19007 3.16468 1.50757 3.99718 1.50757H14.0022C14.8347 1.50757 15.5172 2.19007 15.5172 3.02257V4.68757C15.5172 5.29507 15.1347 6.05257 14.7597 6.42757"
                                                                stroke="#5F5F5F" stroke-width="1.125"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M14.9026 12.84L14.1526 12.09M12.0526 12.39C12.6891 12.39 13.2996 12.1371 13.7496 11.687C14.1997 11.2369 14.4526 10.6265 14.4526 9.98997C14.4526 9.35345 14.1997 8.743 13.7496 8.29291C13.2996 7.84282 12.6891 7.58997 12.0526 7.58997C11.4161 7.58997 10.8056 7.84282 10.3555 8.29291C9.90544 8.743 9.65259 9.35345 9.65259 9.98997C9.65259 10.6265 9.90544 11.2369 10.3555 11.687C10.8056 12.1371 11.4161 12.39 12.0526 12.39Z"
                                                                stroke="#5F5F5F" stroke-width="1.125"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>

                                                    </button>
                                                 
                                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                           <li><a class="dropdown-item" href="#"><span><i
                                                                           class="fas fa-check me-2"></i>Expected</a></span></li>
                                                           <div class="dropdown-divider"></div>
                                                           <li>
                                                               <a class="dropdown-item" href="#"><span><i
                                                                           class="fas fa-check me-2"></i>Unconfirmed</span></a>
                                                           </li>
                                                           <li>
                                                               <a class="dropdown-item" href="#"><span><i
                                                                           class="fas fa-check me-2"></i>Confirmed</span></a>
                                                           </li>
                                                           <li>
                                                               <a class="dropdown-item" href="#"><span><i
                                                                           class="fas fa-check me-2"></i>Attended</span></a>
                                                           </li>
                                                           <div class="dropdown-divider"></div>
                                                           <li>
                                                               <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                   Registration Date <i class="fas fa-angle-right arrow"></i>
                                                               </a>
                                                               <ul class="dropdown-menu dropdown-submenu">
                                                                   <li>
                                                                       <a class="dropdown-item" href="#">
                                                                           <div class="reg-date w-100">
                                                                               <label for="">Date</label>
                                                                               <input type="date" class="form-control-sm">
                                                                           </div>
                                                                       </a>
                                                                   </li>
                                   
                                                               </ul>
                                                           </li>
                                                           <li>
                                                               <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                   Event Start Date <i class="fas fa-angle-right arrow"></i>
                                                               </a>
                                                               <ul class="dropdown-menu dropdown-submenu">
                                                                   <li>
                                                                       <a class="dropdown-item" href="#">
                                                                           <div class="reg-date w-100">
                                                                               <label for="">Date</label>
                                                                               <input type="date" class="form-control-sm">
                                                                           </div>
                                                                       </a>
                                                                   </li>
                                   
                                                               </ul>
                                                           </li>
                                                           <li>
                                                               <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                   Attended Date <i class="fas fa-angle-right arrow"></i>
                                                               </a>
                                                               <ul class="dropdown-menu dropdown-submenu">
                                                                   <li>
                                                                       <a class="dropdown-item" href="#">
                                                                           <div class="reg-date w-100">
                                                                               <label for="">Date</label>
                                                                               <input type="date" class="form-control-sm">
                                                                           </div>
                                                                       </a>
                                                                   </li>
                                   
                                                               </ul>
                                                           </li>
                                                           <div class="dropdown-divider"></div>
                                                           <li>
                                                               <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"></i>Last 30
                                                                       days</span></a>
                                                           </li>
                                                           <li>
                                                               <a class="dropdown-item" href="#"><span><i
                                                                           class="fas fa-check me-2"></i>Archived</span></a>
                                                           </li>
                                                       </ul>
                                                   </div>
                                            
                                   
                                               </div>
                                               
                                             
                                            </div>

                                        </div>
                                        <div class="event-table speaker-table response-tbl">
                                            <div class="table-responsive">
                                                <table id="event-table" class="table table-striped attendee-tbl">
                                                    <thead>
                                                        <tr>
                                                            <th width="40px"><input class="form-check-input" type="checkbox" id="selectAll"></th>
                                                            <th width="20%">First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Ticket Type</th>
                                                            <th>Company Name</th>
                                                            <th width="5%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                            <td>AmarNath</td>
                                                            <td>M</td>
                                                            <td>amarNath@gmail.com</td>
                                                            <td>9874563210</td>
                                                            <td>0</td>
                                                            <td>Veuz Concepts</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Confirm</button>
                                                                    <button type="button" class="btn btn-soft-secondary waves-effect waves-light attandee-cncl-btn">Cancel</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="formCheck2"></td>
                                                            <td>AmarNath</td>
                                                            <td>M</td>
                                                            <td>amarNath@gmail.com</td>
                                                            <td>9874563210</td>
                                                            <td>0</td>
                                                            <td>Veuz Concepts</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Confirm</button>
                                                                    <button type="button" class="btn btn-soft-secondary waves-effect waves-light attandee-cncl-btn">Cancel</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="formCheck3"></td>
                                                            <td>AmarNath</td>
                                                            <td>M</td>
                                                            <td>amarNath@gmail.com</td>
                                                            <td>9874563210</td>
                                                            <td>0</td>
                                                            <td>Veuz Concepts</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button type="button" class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Confirm</button>
                                                                    <button type="button" class="btn btn-soft-secondary waves-effect waves-light attandee-cncl-btn">Cancel</button>
                                                                </div>
                                                            </td>
                                                        </tr>




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="pagination d-flex justify-content-end">
                                            <a href="#"> <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                            <a href="#">1</a>
                                            <a class="active" href="#">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 attendees-tbl-graph">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="todays-attendees">
                                                                   Todays attendees <span class="badge badge-soft-success font-size-12"> 10 </span>
                                                </button>
                                               
                                            </div>
                                            <div class="team-right-btns">
                                               
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#attendees-table" role="tab" aria-selected="true">
                                                            <button type="button" class="btn btn-kanlist waves-effect waves-light">
                                                                <svg width="18" height="18" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M16.625 3.5625H2.375C2.21753 3.5625 2.06651 3.62506 1.95516 3.73641C1.84381 3.84776 1.78125 3.99878 1.78125 4.15625V14.25C1.78125 14.5649 1.90636 14.867 2.12906 15.0897C2.35176 15.3124 2.65381 15.4375 2.96875 15.4375H16.0312C16.3462 15.4375 16.6482 15.3124 16.8709 15.0897C17.0936 14.867 17.2188 14.5649 17.2188 14.25V4.15625C17.2188 3.99878 17.1562 3.84776 17.0448 3.73641C16.9335 3.62506 16.7825 3.5625 16.625 3.5625ZM2.96875 8.3125H5.9375V10.6875H2.96875V8.3125ZM7.125 8.3125H16.0312V10.6875H7.125V8.3125ZM2.96875 11.875H5.9375V14.25H2.96875V11.875ZM16.0312 14.25H7.125V11.875H16.0312V14.25Z" fill="black"></path>
                                                                </svg>                                               
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#attendees-chart" role="tab" aria-selected="false" tabindex="-1">
                                                            <button type="button" class="btn btn-kanlist ms-2 waves-effect waves-light">                                             
                                                                <i class="bx bx-pie-chart"></i>                                           
                                                            </button>
                                                        </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="tab-content text-muted">
                                            <div class="tab-pane active show" id="attendees-table" role="tabpanel">
                                                <div class="event-table speaker-table response-tbl">
                                                    <div class="table-responsive">
                                                        <table id="event-table" class="table table-striped attendee-today-tbl">
                                                            <thead>
                                                                <tr>
                                                                    <th>Day</th>
                                                                    <th>Total Attendees</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#"><h5>Day 1</h5>
                                                                        <h6>24/09/23</h6></a>
                                                                    </td>
                                                                    <td>20 
                                                                        <span class="badge badge-pill badge-soft-success font-size-13 ms-3">10 Check In</span>
                                                                        <span class="badge badge-pill badge-soft-danger font-size-13 ms-2">10 Checkout</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#"><h5>Day 2</h5>
                                                                        <h6>24/09/23</h6></a> 
                                                                    </td>
                                                                    <td>20
                                                                        <span class="badge badge-pill badge-soft-success font-size-13 ms-3">10 Check In</span>
                                                                        <span class="badge badge-pill badge-soft-danger font-size-13 ms-2">10 Checkout</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#"><h5>Day 3</h5>
                                                                        <h6>24/09/23</h6></a> 
                                                                    </td>
                                                                    <td>20
                                                                        <span class="badge badge-pill badge-soft-success font-size-13 ms-3">10 Check In</span>
                                                                        <span class="badge badge-pill badge-soft-danger font-size-13 ms-2">10 Checkout</span>
                                                                    </td>
                                                                </tr>
        
        
        
        
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="pagination d-flex justify-content-end">
                                                    <a href="#"> <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                                    <a href="#">1</a>
                                                    <a class="active" href="#">2</a>
                                                    <a href="#">3</a>
                                                    <a href="#">
                                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="attendees-chart" role="tabpanel">
                                                <div id="donutchart" style="width: 300px; height: 500px;"></div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="evnt-tab3" role="tabpanel">
                                <div class="row speaker-div team-tab-content">
                                    <div class="col-md-12">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#invite-members">
                                                                    <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Add Members
                                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_1_2621)">
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_1_2621">
                                                                        <rect width="16.3125" height="16.3125" fill="white" transform="translate(0.821289 0.290039)"></rect>
                                                                        </clipPath>
                                                                        </defs>
                                                                        </svg>Export
                                                                </button>
                                                                <button type="button"
                                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                                                        stroke="#263238" stroke-width="1.36" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>Import
                                                            </button>
                                            </div>
                                            <div class="team-right-btns">
                                                <div class="input-group search-inpt me-2">

                                                    <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search Members">
                                                    <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                                </div>
                                                <div class="filter-groupby">
                                                    <div class="dropdown drpdwn-fg">
                                                     <button type="button"
                                                         class="btn btn-outline-secondary btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                         id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                         data-mdb-auto-close="outside">
                                                         <svg width="18" height="18" viewBox="0 0 18 18"
                                                             fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                             <path
                                                                 d="M10.7397 14.3026C10.7397 14.7601 10.4397 15.3601 10.0572 15.5926L8.99968 16.2751C8.01718 16.8826 6.65218 16.2001 6.65218 14.9851V10.9726C6.65218 10.4401 6.35218 9.75757 6.04468 9.38257L3.16468 6.35257C2.78218 5.97007 2.48218 5.29507 2.48218 4.83757V3.09757C2.48218 2.19007 3.16468 1.50757 3.99718 1.50757H14.0022C14.8347 1.50757 15.5172 2.19007 15.5172 3.02257V4.68757C15.5172 5.29507 15.1347 6.05257 14.7597 6.42757"
                                                                 stroke="#5F5F5F" stroke-width="1.125"
                                                                 stroke-miterlimit="10"
                                                                 stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                             <path
                                                                 d="M14.9026 12.84L14.1526 12.09M12.0526 12.39C12.6891 12.39 13.2996 12.1371 13.7496 11.687C14.1997 11.2369 14.4526 10.6265 14.4526 9.98997C14.4526 9.35345 14.1997 8.743 13.7496 8.29291C13.2996 7.84282 12.6891 7.58997 12.0526 7.58997C11.4161 7.58997 10.8056 7.84282 10.3555 8.29291C9.90544 8.743 9.65259 9.35345 9.65259 9.98997C9.65259 10.6265 9.90544 11.2369 10.3555 11.687C10.8056 12.1371 11.4161 12.39 12.0526 12.39Z"
                                                                 stroke="#5F5F5F" stroke-width="1.125"
                                                                 stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                         </svg>
 
                                                     </button>
                                                  
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Expected</a></span></li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Unconfirmed</span></a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Confirmed</span></a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Attended</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Registration Date <i class="fas fa-angle-right arrow"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date" class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                    
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Event Start Date <i class="fas fa-angle-right arrow"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date" class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                    
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Attended Date <i class="fas fa-angle-right arrow"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date" class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                    
                                                                </ul>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"></i>Last 30
                                                                        days</span></a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Archived</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                             
                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="event-table speaker-table tm-tbl">
                                            <div class="table-responsive">
                                                <table id="event-table" class="table table-striped">
                                                    <thead>
                                                        <tr>

                                                            <th width="30%">Name &amp; Email</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                            <th>Profile Status</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td>
                                                                <div class="responsible">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="speaker-name-email">
                                                                        <h6>James Fernandas</h6>
                                                                        <span>jamesfernand@gmail.com</span>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M7.4967 6.31747C7.43072 6.31087 7.35154 6.31087 7.27896 6.31747C6.52161 6.29176 5.80402 5.97228 5.27813 5.42668C4.75224 4.88109 4.45936 4.15223 4.46151 3.39445C4.46151 1.77788 5.76796 0.464832 7.39113 0.464832C8.16724 0.450832 8.91712 0.745714 9.47581 1.28461C10.0345 1.8235 10.3562 2.56226 10.3702 3.33837C10.3842 4.11447 10.0894 4.86436 9.55046 5.42305C9.01157 5.98174 8.27281 6.30347 7.4967 6.31747ZM4.19758 8.75222C2.60081 9.82114 2.60081 11.5631 4.19758 12.6254C6.0121 13.8395 8.9879 13.8395 10.8024 12.6254C12.3992 11.5565 12.3992 9.81454 10.8024 8.75222C8.9945 7.54474 6.01869 7.54474 4.19758 8.75222Z" stroke="#263238" stroke-width="0.848345" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                    </svg>Event Owner
                                                                            </button>
                                                            </td>
                                                            <td class="status">
                                                                <h6>Joined - 20 minutes ago</h6>
                                                            </td>

                                                            <td>
                                                                <div class="profile-status">
                                                                    <div class="progress animated-progess">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <h6>50%</h6>
                                                                </div>

                                                            </td>
                                                            <td class="text-end">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                    <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                                </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item" href="#">View</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td>
                                                                <div class="responsible">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="speaker-name-email">
                                                                        <h6>James Fernandas</h6>
                                                                        <span>jamesfernand@gmail.com</span>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M7.4967 6.31747C7.43072 6.31087 7.35154 6.31087 7.27896 6.31747C6.52161 6.29176 5.80402 5.97228 5.27813 5.42668C4.75224 4.88109 4.45936 4.15223 4.46151 3.39445C4.46151 1.77788 5.76796 0.464832 7.39113 0.464832C8.16724 0.450832 8.91712 0.745714 9.47581 1.28461C10.0345 1.8235 10.3562 2.56226 10.3702 3.33837C10.3842 4.11447 10.0894 4.86436 9.55046 5.42305C9.01157 5.98174 8.27281 6.30347 7.4967 6.31747ZM4.19758 8.75222C2.60081 9.82114 2.60081 11.5631 4.19758 12.6254C6.0121 13.8395 8.9879 13.8395 10.8024 12.6254C12.3992 11.5565 12.3992 9.81454 10.8024 8.75222C8.9945 7.54474 6.01869 7.54474 4.19758 8.75222Z" stroke="#263238" stroke-width="0.848345" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                    </svg>Event Staff
                                                                            </button>
                                                            </td>
                                                            <td class="status">
                                                                <h6>Invited - 20 minutes ago</h6>
                                                            </td>

                                                            <td>
                                                                <div class="profile-status">
                                                                    <div class="progress animated-progess">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <h6>50%</h6>
                                                                </div>

                                                            </td>
                                                            <td class="text-end">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                    <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                                </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item" href="#">View</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="portal-memb">
                                                                <h4>Portal members</h4>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td>
                                                                <div class="responsible">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="speaker-name-email">
                                                                        <h6>James Fernandas</h6>
                                                                        <span>jamesfernand@gmail.com</span>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M7.4967 6.31747C7.43072 6.31087 7.35154 6.31087 7.27896 6.31747C6.52161 6.29176 5.80402 5.97228 5.27813 5.42668C4.75224 4.88109 4.45936 4.15223 4.46151 3.39445C4.46151 1.77788 5.76796 0.464832 7.39113 0.464832C8.16724 0.450832 8.91712 0.745714 9.47581 1.28461C10.0345 1.8235 10.3562 2.56226 10.3702 3.33837C10.3842 4.11447 10.0894 4.86436 9.55046 5.42305C9.01157 5.98174 8.27281 6.30347 7.4967 6.31747ZM4.19758 8.75222C2.60081 9.82114 2.60081 11.5631 4.19758 12.6254C6.0121 13.8395 8.9879 13.8395 10.8024 12.6254C12.3992 11.5565 12.3992 9.81454 10.8024 8.75222C8.9945 7.54474 6.01869 7.54474 4.19758 8.75222Z" stroke="#263238" stroke-width="0.848345" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                    </svg>Portal Owner
                                                                            </button>
                                                            </td>
                                                            <td class="status">
                                                                <h6>Joined - 12 days ago</h6>

                                                            </td>

                                                            <td>
                                                                <div class="profile-status">
                                                                    <div class="progress animated-progess">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <h6>50%</h6>
                                                                </div>

                                                            </td>
                                                            <td class="text-end">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                    <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                                </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item" href="#">View</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="evnt-tab4" role="tabpanel">
                                <div class="row speaker-div team-tab-content">
                                    <div class="col-md-12">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="btn btn-outline-secondary btn-settings waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9 11.25C9.59674 11.25 10.169 11.0129 10.591 10.591C11.0129 10.169 11.25 9.59674 11.25 9C11.25 8.40326 11.0129 7.83097 10.591 7.40901C10.169 6.98705 9.59674 6.75 9 6.75C8.40326 6.75 7.83097 6.98705 7.40901 7.40901C6.98705 7.83097 6.75 8.40326 6.75 9C6.75 9.59674 6.98705 10.169 7.40901 10.591C7.83097 11.0129 8.40326 11.25 9 11.25Z" stroke="#263238" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        <path d="M1.5 9.65995V8.33995C1.5 7.55995 2.1375 6.91495 2.925 6.91495C4.2825 6.91495 4.8375 5.95495 4.155 4.77745C3.765 4.10245 3.9975 3.22495 4.68 2.83495L5.9775 2.09245C6.57 1.73995 7.335 1.94995 7.6875 2.54245L7.77 2.68495C8.445 3.86245 9.555 3.86245 10.2375 2.68495L10.32 2.54245C10.6725 1.94995 11.4375 1.73995 12.03 2.09245L13.3275 2.83495C14.01 3.22495 14.2425 4.10245 13.8525 4.77745C13.17 5.95495 13.725 6.91495 15.0825 6.91495C15.8625 6.91495 16.5075 7.55245 16.5075 8.33995V9.65995C16.5075 10.44 15.87 11.085 15.0825 11.085C13.725 11.085 13.17 12.045 13.8525 13.2225C14.2425 13.905 14.01 14.775 13.3275 15.165L12.03 15.9075C11.4375 16.26 10.6725 16.05 10.32 15.4575L10.2375 15.315C9.5625 14.1375 8.4525 14.1375 7.77 15.315L7.6875 15.4575C7.335 16.05 6.57 16.26 5.9775 15.9075L4.68 15.165C4.35307 14.9767 4.11419 14.6665 4.01576 14.3023C3.91733 13.9381 3.96741 13.5497 4.155 13.2225C4.8375 12.045 4.2825 11.085 2.925 11.085C2.1375 11.085 1.5 10.44 1.5 9.65995Z" stroke="#263238" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </svg>Session settings
                                                                </button>
                                            </div>
                                            <div class="team-right-btns">
                                                <div class="input-group search-inpt me-2">

                                                    <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search Members">
                                                    <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                                </div>
                                                <div class="filter-groupby">
                                                    <div class="dropdown drpdwn-fg">
                                                     <button type="button"
                                                         class="btn btn-outline-secondary btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                         id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                         data-mdb-auto-close="outside">
                                                         <svg width="18" height="18" viewBox="0 0 18 18"
                                                             fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                             <path
                                                                 d="M10.7397 14.3026C10.7397 14.7601 10.4397 15.3601 10.0572 15.5926L8.99968 16.2751C8.01718 16.8826 6.65218 16.2001 6.65218 14.9851V10.9726C6.65218 10.4401 6.35218 9.75757 6.04468 9.38257L3.16468 6.35257C2.78218 5.97007 2.48218 5.29507 2.48218 4.83757V3.09757C2.48218 2.19007 3.16468 1.50757 3.99718 1.50757H14.0022C14.8347 1.50757 15.5172 2.19007 15.5172 3.02257V4.68757C15.5172 5.29507 15.1347 6.05257 14.7597 6.42757"
                                                                 stroke="#5F5F5F" stroke-width="1.125"
                                                                 stroke-miterlimit="10"
                                                                 stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                             <path
                                                                 d="M14.9026 12.84L14.1526 12.09M12.0526 12.39C12.6891 12.39 13.2996 12.1371 13.7496 11.687C14.1997 11.2369 14.4526 10.6265 14.4526 9.98997C14.4526 9.35345 14.1997 8.743 13.7496 8.29291C13.2996 7.84282 12.6891 7.58997 12.0526 7.58997C11.4161 7.58997 10.8056 7.84282 10.3555 8.29291C9.90544 8.743 9.65259 9.35345 9.65259 9.98997C9.65259 10.6265 9.90544 11.2369 10.3555 11.687C10.8056 12.1371 11.4161 12.39 12.0526 12.39Z"
                                                                 stroke="#5F5F5F" stroke-width="1.125"
                                                                 stroke-linecap="round"
                                                                 stroke-linejoin="round" />
                                                         </svg>
 
                                                     </button>
                                                  
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Expected</a></span></li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Unconfirmed</span></a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Confirmed</span></a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Attended</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Registration Date <i class="fas fa-angle-right arrow"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date" class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                    
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Event Start Date <i class="fas fa-angle-right arrow"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date" class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                    
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Attended Date <i class="fas fa-angle-right arrow"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date" class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                    
                                                                </ul>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"></i>Last 30
                                                                        days</span></a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"></i>Archived</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                             
                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="session-tabs">
                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-session" role="tab">
                                                        <span>All (2)</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#upcoming-session" role="tab">
                                                        <span>Upcoming (2)</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#completed-session" role="tab">
                                                        <span>Completed (0)</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="session-tab-content tab-content">
                                            <div class="tab-pane active" id="all-session" role="tabpanel">
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>

                                                        </div>
                                                        <div class="attendees-members d-flex align-items-center mt-3">
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="attendees d-flex" style="margin-right: 0px !important; border:none !important; cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Attendees IN</span>
                                                                    <h6 style="margin-left: 7px !important;">29</h6>
                                                                </div>
                                                            </a>

                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Attendees Out</span>
                                                                    <h6>10</h6>
                                                                </div>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="margin-left:17px" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Total</span>
                                                                    <h6 style="background-color: #3B65EF;">29</h6>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>
                                                        </div>
                                                        <div class="attendees-members d-flex align-items-center mt-3">
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="attendees d-flex" style="margin-right: 0px !important; border:none !important; cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Attendees IN</span>
                                                                    <h6 style="margin-left: 7px !important;">29</h6>
                                                                </div>
                                                            </a>

                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Attendees Out</span>
                                                                    <h6>10</h6>
                                                                </div>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="margin-left:17px" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Total</span>
                                                                    <h6 style="background-color: #3B65EF;">29</h6>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>
                                                        </div>
                                                        <div class="attendees-members d-flex align-items-center mt-3">
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="attendees d-flex" style="margin-right: 0px !important; border:none !important; cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Attendees IN</span>
                                                                    <h6 style="margin-left: 7px !important;">29</h6>
                                                                </div>
                                                            </a>

                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Attendees Out</span>
                                                                    <h6>10</h6>
                                                                </div>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="margin-left:17px" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span style="font-size: 14px;">&ensp;Total</span>
                                                                    <h6 style="background-color: #3B65EF;">29</h6>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="upcoming-session" role="tabpanel">
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="completed-session" role="tabpanel">
                                                <div class="session-bx">
                                                    <div class="frst-box">
                                                        <h4>Speaking about the politics of the nation related topics </h4>
                                                        <div class="session-tymdate">
                                                            <div class="session-date">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                <span>Aug 23 to 25, 2023</span>
                                                            </div>
                                                            <div class="session-tym">
                                                                <i class="fas fa-clock"></i>
                                                                <span>09:00 - 10:30</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scnd-box">
                                                        <div class="second-frst-bx">
                                                            <h6 class="mb-0"><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                            <div class="session-tags">
                                                                <span class="session-tag1">Tag 1</span>
                                                                <span class="session-tag2">Tag 2</span>
                                                                <span class="session-tag3">Tag 3</span>
                                                            </div>
                                                        </div>
                                                        <div class="second-scnd-bx">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="evnt-tab5" role="tabpanel">
                                <div class="row speaker-div team-tab-content">
                                    <div class="col-md-12">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small" fdprocessedid="4onmdw">
                                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_1_2621)">
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </g>
                                                                        <defs>
                                                                        <clipPath id="clip0_1_2621">
                                                                        <rect width="16.3125" height="16.3125" fill="white" transform="translate(0.821289 0.290039)"></rect>
                                                                        </clipPath>
                                                                        </defs>
                                                                        </svg>Export
                                                                </button>
                                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small" fdprocessedid="7fnzcj">
                                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009" stroke="#263238" stroke-width="1.36" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>Import
                                                            </button>
                                            </div>
                                            <div class="team-right-btns">
                                                <div class="input-group search-inpt me-2">

                                                    <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search Members" fdprocessedid="c99ylk">
                                                    <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                                </div>

                                            </div>

                                        </div>
                               
                                        <div class="event-table speaker-table response-tbl">
                                            <div class="table-responsive">
                                                <table id="event-table" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Form name</th>
                                                            <th width="30%">Created By</th>
                                                            <th>Last modified time</th>
                                                            <th>Responses</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Getintouch</td>
                                                            <td>
                                                                <div class="responsible">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                                    <div class="speaker-name-email">
                                                                        <h6>James Fernandas</h6>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td class="status">
                                                                <h6>Joined - 20 minutes ago</h6>
                                                            </td>
                                                            <td>0</td>
                                                            <td class="text-end">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                    <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                                </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item" href="#">View</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Getintouch</td>
                                                            <td>
                                                                <div class="responsible">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                                    <div class="speaker-name-email">
                                                                        <h6>James Fernandas</h6>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                            <td class="status">
                                                                <h6>Invited - 20 minutes ago</h6>
                                                            </td>
                                                            <td>0</td>

                                                            <td class="text-end">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                    <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                                </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item" href="#">View</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="evnt-tab6" role="tabpanel">
                                <div class="row speaker-div team-tab-content">
                                    <div class="col-md-6 col-lap-6">
                                        <div class="evnt-settings">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5>Add Logo</h5>
                                                    <p>This Logo will be used in your rebranded event page</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <img src="assets/images/evnt-logo.png" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="evnt-bttm-settings">
                                                        <button type="button" class="btn btn-light br-50 btn-sm px-4" data-bs-dismiss="modal">Configure</button>
                                                        <div class="evnt-bttm-span">
                                                            <span>File Size: Up to 1MB</span>
                                                            <span>Optimal Dimensions: 120x40px</span>
                                                            <span>Supported File Size: JPG, JPEG, PNG, GIF, WEBP</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5>Event thumbnail in portal event-listing page</h5>
                                                    <p>This Logo will be used in your rebranded event page</p>
                                                    <button type="button" class="btn btn-light br-50 btn-sm px-4 mt-2" data-bs-dismiss="modal"><i class="far fa-eye me-1"></i>View portal event-listing page</button>
                                                </div>
                                                <div class="col-md-5">
                                                    <img src="assets/images/thumbnail.png" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="evnt-bttm-settings">
                                                        <button type="button" class="btn btn-light br-50 btn-sm px-4" data-bs-dismiss="modal">Change</button>
                                                        <div class="evnt-bttm-span">
                                                            <span>File Size: Up to 5MB</span>
                                                            <span>Optimal Dimensions: 120x40px</span>
                                                            <span>Supported File Size: JPG, JPEG, PNG, GIF, WEBP</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5>Update Favicon</h5>
                                                    <p>This is the default favicon that will used in your event Microsite</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <img src="assets/images/fav.png" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="evnt-bttm-settings">
                                                        <button type="button" class="btn btn-light br-50 btn-sm px-4" data-bs-dismiss="modal">Upload</button>
                                                        <div class="evnt-bttm-span">
                                                            <span>File Size: Up to 5MB</span>
                                                            <span>Optimal Dimensions: 120x40px</span>
                                                            <span>Supported File Size: JPG, JPEG, PNG, GIF, WEBP</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lap-6">
                                        <div class="evnt-settings">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Primary Contact</h5>
                                                    <p>All emails will have <a href="#">noreplay@website.com</a> as the sender</p>
                                                    <button type="button" class="btn btn-light br-50 btn-sm px-4 mt-2" data-bs-dismiss="modal">Change Primary Contact</button>
                                                </div>

                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Terms and Policies</h5>
                                                    <p>Link the terms and Policies to your events </p>
                                                    <button type="button" class="btn btn-light br-50 btn-sm px-4 mt-2" data-bs-dismiss="modal">Add</button>
                                                </div>

                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Hide default branding message</h5>
                                                    <p>Remove Powered by Backstage from anywhere on the event microsite pages, emails and tickets</p>
                                                    <div class="form-check form-switch form-switch-md mt-2">
                                                        <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>





            </div>
        </div>


    </div>
    <div class="modal fade" id="share-qr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Share QR</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="field">
                        <i class="url-icon uil uil-link"></i>
                        <input type="text" class="copy-box" readonly value="example.com/share-link">
                        <button class="copy-box-button">Copy</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="attendees-in" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Attendees IN</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Mohammed Shefin</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Amarnath</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Muzafar</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Bisharu</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Nasim P</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Mohammed Arshad</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                        <hr class="bottom-line">
                        <div class="col-lg-12 attendee-img-box d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/avatar-1.jpg">
                                <h6>Anirudh</h6>
                            </div>
                            <h4>Ticket Type: Premium</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="invite-members" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Member</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview" style="background-color:#f5f5f5">
                                <div id="imagePreview" style="background-image: url('assets/images/user-profile.avif'); background-size: contain;">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="form-grp">
                        <label class="form-label">Name</label>
                        <div class="mb-1">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-grp">
                            <label class="form-label">Email</label>
                            <div class="mb-1">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-grp">
                            <label class="form-label">Role Permission</label>


                            <table class="table mt-2">
                                <!-- <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead> -->
                                <tbody style="border: 1px solid #ebebeb;">
                                    <tr>
                                        <td style="background-color: #f5f5f5;"><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;Manager</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="form-label">Category</label>&ensp;
                                                <div class="select-inp w-100">
                                                    <select class="form-control">
                                                <option value="AK">Event</option>
                                                <option value="HI">Agenda</option>
                                            </select>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex">

                                                <div class="select-inp w-100">
                                                    <select class="form-control">
                                            <option value="AK">Music Show</option>
                                            <option value="HI">Dance Show</option>
                                        </select>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>

                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #f5f5f5;"><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;Agenda</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="form-label">Assign to</label>&ensp;
                                                <div class="select-inp w-100">
                                                    <select class="form-control">
                                                <option value="AK">Event</option>
                                                <option value="HI">Agenda</option>
                                            </select>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>

                                            </div>
                                        </td>
                                        <td><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;IN</td>
                                        <td><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;OUT</td>


                                    </tr>
                                    <tr>
                                        <td style="background-color: #f5f5f5;"><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;Event</td>
                                        <td></td>
                                        <td><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;IN</td>
                                        <td><input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">&ensp;OUT</td>

                                    </tr>

                                </tbody>
                            </table>


                        </div>




                    </div>
                    <div class="modal-footer">
                        <a href="speaker.php"><button type="button"
            class="btn btn-primary text-uppercase br-50 btn-md">Done</button></a>
                        <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="event-create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/calendar-modal.svg" alt=""><span>Create your Event</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Event name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Enter here">
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Select Language</label>
                        <div class="select-inp">
                            <select class="form-control">
                                        
                            <option value="AK">English</option>
                            <option value="HI">Arabic</option>                          
                            <option value="CA">Spanish</option>
                            <option value="NV">Hindi</option>                        
                    </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>

                    </div>
                    <div class="form-grp">
                        <label class="form-label">Event Type</label>
                        <div class="row event-type radio-check-function">
                            <div class="col-md-4">
                                <div class="form-check active">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                    <label class="form-check-label" for="formRadios1">
                                    Location Based
                                </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                    Online Event
                                </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                    Hybrid Event
                                </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-grp">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Start Date</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="01 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                    <span class="input-group-text"><img src="assets/images/input-cal.svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Start Time</label>
                                <div class="input-group" id="timepicker-input-group1">
                                    <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                    <span class="input-group-text"><img src="assets/images/input-time.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">End Date</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="05 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true">

                                    <span class="input-group-text"><img src="assets/images/input-cal.svg" alt=""></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">End Time</label>
                                <div class="input-group" id="timepicker-input-group1">
                                    <input id="timepicker2" type="text" class="form-control" data-provide="timepicker">
                                    <span class="input-group-text"><img src="assets/images/input-time.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="conference.php"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md">Create</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="add-attandee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <div class="header-logo-img">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <div class="modal-header-info">
                        <h2>Cyber park event</h2>
                        <h6><i class="bx bx-calendar"></i> Aug 03-05, 2023</h6>
                    </div>
             
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" placeholder="Enter Name">
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Enter Email">
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck2">
                                    <label class="form-check-label" for="formCheck2">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Mobile No</label>
                                <input class="form-control" type="text" placeholder="Enter mobile number">
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck3">
                                    <label class="form-check-label" for="formCheck3">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Comapany Name</label>
                                <input class="form-control" type="text" placeholder="Enter company name">
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck4">
                                    <label class="form-check-label" for="formCheck4">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Event</label>


                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Event2</option>
                                    <option value="AK">Event1</option>
                                    <option value="HI">Event2</option>                          
                                    <option value="CA">Event3</option>
                                    <option value="NV">Event4</option>  
                                  </select>
                                  <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck5">
                                    <label class="form-check-label" for="formCheck5">
                                        Don't clear this field
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Booked by</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Navab</option>
                                    <option value="HI">Amar</option>                          
                                    <option value="CA">Nasim</option>
                                    <option value="NV">Bishru</option>  
                                  </select>
                                  <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck6">
                                    <label class="form-check-label" for="formCheck6">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-grp">
                                <label class="form-label">Ticket Type</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Premium</option>
                                    <option value="HI">Gold</option>                          
                                    <option value="CA">Platinium</option>
                                    <option value="NV">Silver</option>  
                                  </select>
                                  <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" id="formCheck7">
                                    <label class="form-check-label" for="formCheck7">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md">Save and Close</button></a>
                    <a href="#"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md">Save and New</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="import-upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <div class="header-logo-img">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <div class="modal-header-info">
                        <h2>Cyber park event</h2>
                        <h6><i class="bx bx-calendar"></i> Aug 03-05, 2023</h6>
                    </div>
             
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="uploadArea" class="upload-area">
                        <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                            <span class="drop-zoon__icon">
                                <i class='bx bxs-file-image'></i>
                            </span>
                            <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                            <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                            <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image"
                                draggable="false">
                            <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
                        </div>

                        <div id="fileDetails" class="upload-area__file-details file-details">
                            <h3 class="file-details__title">Uploaded File</h3>

                            <div id="uploadedFile" class="uploaded-file">
                                <div class="uploaded-file__icon-container">
                                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                    <span class="uploaded-file__icon-text"></span>
                                </div>

                                <div id="uploadedFileInfo" class="uploaded-file__info">
                                    <span class="uploaded-file__name">Proejct 1</span>
                                    <span class="uploaded-file__counter">0%</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#"><button  data-bs-target="#upload-inpt" data-bs-toggle="modal" data-bs-dismiss="modal" type="button" class="btn btn-primary text-uppercase br-50 btn-md">Next</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="upload-inpt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Attendees IN</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Name<span>*</span></label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Select</label>
                                <div class="select-inp">
                                    <select class="form-control">
                                                    
                                        <option value="AK">English</option>
                                        <option value="HI">Arabic</option>                          
                                        <option value="CA">Spanish</option>
                                        <option value="NV">Hindi</option>                        
                                </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Name<span>*</span></label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Select</label>
                                <div class="select-inp">
                                    <select class="form-control">
                                                    
                                        <option value="AK">English</option>
                                        <option value="HI">Arabic</option>                          
                                        <option value="CA">Spanish</option>
                                        <option value="NV">Hindi</option>                        
                                </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-bs-dismiss="modal" type="button" class="btn btn-primary text-uppercase br-50 btn-md">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal" data-bs-target="#import-upload" data-bs-toggle="modal">Back</button>
                </div>

            </div>
        </div>
    </div>


        <script>
            const viewBtn = document.querySelector(".view-modal"),
                popup = document.querySelector(".popup"),
                close = popup.querySelector(".close"),
                field = popup.querySelector(".field"),
                input = field.querySelector("input"),
                copy = field.querySelector("button");

            viewBtn.onclick = () => {
                popup.classList.toggle("show");
            }
            close.onclick = () => {
                viewBtn.click();
            }

            copy.onclick = () => {
                input.select(); //select input value
                if (document.execCommand("copy")) { //if the selected text copy
                    field.classList.add("active");
                    copy.innerText = "Copied";
                    setTimeout(() => {
                        window.getSelection().removeAllRanges(); //remove selection from document
                        field.classList.remove("active");
                        copy.innerText = "Copy";
                    }, 3000);
                }
            }
        </script>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/datepicker/datepicker.min.js"></script>
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/saas-dashboard.init.js"></script>
        <script src="assets/js/pages/apexcharts.init.js"></script>
        <script src="assets/js/pages/echarts.init.js"></script>
        <script src="assets/js/pages/mdb.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/aos.js"></script>

        <script>
            AOS.init();
        </script>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Day', 'Total number of Attendees'],
        ['Day 1',  20],
        ['Day 2',  20],
        ['Day 3',  20]
      ]);

      var options = {
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>

        <script>
            var $radioButtons = $('.radio-check-function input[type="radio"]');
            $radioButtons.click(function() {
                $radioButtons.each(function() {
                    $(this).parent().toggleClass('active', this.checked);
                });
            });
        </script>

        <!-- profile image upload js -->
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload ").change(function() {
                readURL(this);
            });
        </script>
        <script>
            $(function() {
                setTimeout(function() {
                    // $('.loader-mask').delay(350).fadeOut('slow')
                    $(".loader-mask").hide();
                }, 1000)

            })
        </script>

<script>
    // upload image
    const uploadArea = document.querySelector('#uploadArea')
    const dropZoon = document.querySelector('#dropZoon');
    const loadingText = document.querySelector('#loadingText');
    const fileInput = document.querySelector('#fileInput');
    const previewImage = document.querySelector('#previewImage');
    const fileDetails = document.querySelector('#fileDetails');
    const uploadedFile = document.querySelector('#uploadedFile');
    const uploadedFileInfo = document.querySelector('#uploadedFileInfo');
    const uploadedFileName = document.querySelector('.uploaded-file__name');
    const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');
    const uploadedFileCounter = document.querySelector('.uploaded-file__counter');
    const imagesTypes = [
        "jpeg",
        "png",
        "svg",
        "gif"
    ];

    dropZoon.addEventListener('dragover', function (event) {
        event.preventDefault();
        dropZoon.classList.add('drop-zoon--over');
    });

    dropZoon.addEventListener('dragleave', function (event) {
        dropZoon.classList.remove('drop-zoon--over');
    });

    dropZoon.addEventListener('drop', function (event) {
        event.preventDefault();
        dropZoon.classList.remove('drop-zoon--over');
        const file = event.dataTransfer.files[0];
        uploadFile(file);
    });

    dropZoon.addEventListener('click', function (event) {
        fileInput.click();
    });


    fileInput.addEventListener('change', function (event) {

        const file = event.target.files[0];
        uploadFile(file);
    });

    function uploadFile(file) {
        const fileReader = new FileReader();
        const fileType = file.type;
        const fileSize = file.size;

        if (fileValidate(fileType, fileSize)) {
            dropZoon.classList.add('drop-zoon--Uploaded');
            loadingText.style.display = "block";
            previewImage.style.display = 'none';
            uploadedFile.classList.remove('uploaded-file--open');
            uploadedFileInfo.classList.remove('uploaded-file__info--active');

            fileReader.addEventListener('load', function () {
                setTimeout(function () {
                    uploadArea.classList.add('upload-area--open');
                    loadingText.style.display = "none";
                    previewImage.style.display = 'block';
                    fileDetails.classList.add('file-details--open');
                    uploadedFile.classList.add('uploaded-file--open');
                    uploadedFileInfo.classList.add('uploaded-file__info--active');
                }, 500);

                previewImage.setAttribute('src', fileReader.result);
                uploadedFileName.innerHTML = file.name;

                progressMove();
            });

            fileReader.readAsDataURL(file);
        } else {

            this;

        };
    };


    function progressMove() {
        let counter = 0;
        setTimeout(() => {
            let counterIncrease = setInterval(() => {
                if (counter === 100) {
                    clearInterval(counterIncrease);
                } else {
                    counter = counter + 10;
                    uploadedFileCounter.innerHTML = `${counter}%`
                }
            }, 100);
        }, 600);
    };

    function fileValidate(fileType, fileSize) {
        let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);
        if (isImage[0] === 'jpeg') {
            uploadedFileIconText.innerHTML = 'jpg';
        } else {
            uploadedFileIconText.innerHTML = isImage[0];
        };

        if (isImage.length !== 0) {
            if (fileSize <= 2000000) {
                return true;
            } else {
                return alert('Please Your File Should be 2 Megabytes or Less');
            };
        } else {
            return alert('Please make sure to upload An Image File Type');
        };
    };
</script>
<script>
    $('#selectAll').click(function (e) {
        $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
    });
</script>
<script>
    $(".drpdwn-menu-btn").click(function () {
        $(this).parent().children(".dropdown-menu").toggleClass("show");
    });
    $(".drpdwn-fg .dropdown-item").click(function () {
        $(this).toggleClass("check");
    });

</script>
</body>

</html>