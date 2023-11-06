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
    <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
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
                                    <img src="assets/images/logo.png" alt="">
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
                    <div class="col-12">
                        <div class="top-bar event-detail-header d-flex justify-content-between align-items-center">
                            <div class="event-details-top-left">
                                <h4>Conference for architects</h4>
                                <h6><svg width="18" height="18" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.27998 1.75V4.375M14.56 1.75V4.375M3.18498 7.95375H18.655M19.11 7.4375V14.875C19.11 17.5 17.745 19.25 14.56 19.25H7.27998C4.09498 19.25 2.72998 17.5 2.72998 14.875V7.4375C2.72998 4.8125 4.09498 3.0625 7.27998 3.0625H14.56C17.745 3.0625 19.11 4.8125 19.11 7.4375Z" stroke="#969696" stroke-width="1.176" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.2824 11.9875H14.2906M14.2824 14.6125H14.2906M10.9154 11.9875H10.9245M10.9154 14.6125H10.9245M7.54749 11.9875H7.55659M7.54749 14.6125H7.55659" stroke="#969696" stroke-width="1.176" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg> Wed Aug 23, 2023 - 08:00 AM (IST) / DAY 1</h6>
                            </div>
                            <div class="d-flex flex-wrap gap-3 event-btns ">
                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary bg-1"><i class="bx bx-bar-chart-alt-2 clr1"></i>Registration statistics</button>
                                    <button type="button" class="btn btn-outline-primary bg-2"><i class="bx bx-user clr2"></i>Attendees 1</button>
                                    <button type="button" class="btn btn-outline-primary bg-3"><i class="bx bx-mobile-alt clr3"></i>Registration Desk</button>
 
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-primary bg-4 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i>More</button>
                                                   
                                        <div class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton" style="">
                                        <a class="dropdown-item" href="#"><i class="bx bxs-store me-2 clr4"></i>Booths 1</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="bx bxs-microphone me-2 clr5"></i>Tracks 1</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="bx bxs-user me-2 clr6"></i>Sponsors 1</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="bx bxs-home me-2 clr7"></i>Rooms 1</a>
                                        </div>
                                    </div>
                                  
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
                            <div class="right-prev-btns">
                                <a href="#"><button type="button" class="btn btn-outline-secondary waves-effect waves-light btn-md  small" style="border-bottom:none !important; border-right:none !important;">
                                    <svg width="18" height="18" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.70349 2.02734C1.58368 2.02734 0.675903 2.93513 0.675903 4.05493V14.8687C0.675903 15.9885 1.58368 16.8963 2.70349 16.8963H9.0397L8.87073 18.248H6.0828C5.70953 18.248 5.40694 18.5506 5.40694 18.9239C5.40694 19.2972 5.70953 19.5998 6.0828 19.5998H15.5449C15.9181 19.5998 16.2207 19.2972 16.2207 18.9239C16.2207 18.5506 15.9181 18.248 15.5449 18.248H12.7569L12.588 16.8963H18.9242C20.044 16.8963 20.9518 15.9885 20.9518 14.8687V4.05493C20.9518 2.93513 20.044 2.02734 18.9242 2.02734H2.70349ZM2.02763 4.05493C2.02763 3.68166 2.33022 3.37907 2.70349 3.37907H18.9242C19.2974 3.37907 19.6 3.68166 19.6 4.05493V12.8411H2.02763V4.05493ZM10.8138 15.5446C10.9931 15.5446 11.165 15.4734 11.2917 15.3466C11.4185 15.2199 11.4897 15.048 11.4897 14.8687C11.4897 14.735 11.4501 14.6044 11.3758 14.4932C11.3015 14.3821 11.196 14.2955 11.0725 14.2443C10.949 14.1932 10.8131 14.1798 10.682 14.2058C10.5509 14.2319 10.4304 14.2963 10.3359 14.3908C10.2414 14.4853 10.177 14.6058 10.151 14.7369C10.1249 14.868 10.1383 15.0039 10.1894 15.1274C10.2406 15.2509 10.3272 15.3564 10.4383 15.4307C10.5495 15.5049 10.6802 15.5446 10.8138 15.5446Z" fill="#263238"></path>
                                        </svg>Preview
                                    </button></a>
                                    <a href="#"><button type="button" class="btn btn-outline-secondary waves-effect waves-light btn-md  small view-micro" style="border-bottom:none !important;">
                                        <svg width="17" height="17" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.9375 1C5.00168 1 1 5.00168 1 9.9375C1 14.8733 5.00168 18.875 9.9375 18.875C14.8733 18.875 18.875 14.8733 18.875 9.9375C18.875 5.00168 14.8733 1 9.9375 1Z" stroke="#29343A" stroke-miterlimit="10"/>
                                            <path d="M9.93748 1C7.44229 1 5.09619 5.00168 5.09619 9.9375C5.09619 14.8733 7.44229 18.875 9.93748 18.875C12.4327 18.875 14.7788 14.8733 14.7788 9.9375C14.7788 5.00168 12.4327 1 9.93748 1Z" stroke="#29343A" stroke-miterlimit="10"/>
                                            <path d="M3.979 4.15088C5.62213 5.31748 7.69064 6.01314 9.93748 6.01314C12.1843 6.01314 14.2528 5.31748 15.896 4.15088M15.896 15.7241C14.2528 14.5575 12.1843 13.8618 9.93748 13.8618C7.69064 13.8618 5.62213 14.5575 3.979 15.7241" stroke="#29343A" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.9375 1V18.875M18.875 9.9375H1" stroke="#29343A" stroke-miterlimit="10"/>
                                            </svg>
                                            View Microsite
                                        </button></a>
                            </div>
                      
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
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                                                        <span><i class="far fa-clock me-2"></i>Activities</span>
                                                    </a>
                                                </li> -->

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
                                        <div class="overview-tab-boxes">
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
                                                    <a href="#">
                                                    <div class="evt-box-bottom">
                                                            <img src="assets/images/right-arrow.svg">
                                                    </div>
                                                    </a>
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
                                                    <a href="attandees.php">
                                                    <div class="evt-box-bottom">
                                                  
                                                            <img src="assets/images/right-arrow.svg">
                                                     
                                                    </div>
                                                    </a>
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
                                                    <a href="speaker-single.php">
                                                    <div class="evt-box-bottom">
                                                   
                                                            <img src="assets/images/right-arrow.svg">
                                                    
                                                    </div>
                                                    </a>
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
                                                    <a href="#">
                                                    <div class="evt-box-bottom">
                                                    
                                                            <img src="assets/images/right-arrow.svg">
                                                   
                                                    </div>
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
                                                        <button type="button" class="btn btn-primary btn-publish waves-effect waves-light btn-sm px-4 br-50 small">Send</button>
                                                    </div>
                                               
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="log-note" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea id="" cols="30" rows="5" class="form-control txtarea" placeholder="Log an internal note"></textarea>
                                                        <button type="button" class="btn btn-primary btn-publish waves-effect waves-light btn-sm px-4 br-50 small">Send</button>
                                                    </div>
                                              
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                        <div class="msg-snd">
                                                            <h6 class="send-date">Today</h6>
                                                            <div class="snd-msgs">
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
                                            <!-- <div class="tab-pane" id="activities" role="tabpanel">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="evnt-tab2" role="tabpanel">
                                <div class="row speaker-div team-tab-content">
                                    <div class="col-md-9 border-right">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                                    data-bs-toggle="modal" data-bs-target="#add-attandee">Add Attendee
                                                </button>
                                                <div class="dropdown event-sett1">
                                                    <div class="event-settings dropdown-toggle" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-cog"></i>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#import-upload"><i class="fas fa-download me-2"></i>Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#export-modal"><i class="fas fa-upload me-2"></i>Export</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"
                                                                data-bs-toggle="modal" data-bs-target="#alert-msg"></i>Send Mail</a>
                                                    </div>
                                                </div>
                    
                                            </div>
                                            <!-- <div class="page-count">                                              
                                                                        <select class="form-select">
                                                                            <option>10</option>
                                                                            <option>20</option>
                                                                            <option>50</option>
                                                                            <option>100</option>
                                                                        </select>
                                                                    </div> -->
                                            <div class="d-flex rightside-btns">
                                                <div class="row-selected" style="display: none;">
                                                    <button type="button" class="btn btn-light selected-num me-1" fdprocessedid="6xsncw">
                                                        <span>8</span>Selected<i class="bx bx-x"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="p8hcnm"><i
                                                                class="fas fa-cog me-1" aria-hidden="true"></i>Actions</button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                                    aria-hidden="true"></i>Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                                    aria-hidden="true"></i>Archive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                                    aria-hidden="true"></i>Unarchive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-trash-alt me-2"
                                                                    aria-hidden="true"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group search-inpt">
                                                    <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                                    </div>
                                                    <input type="text" class="form-control border-start-0 ps-0"
                                                        id="inlineFormInputGroupUsername" placeholder="Search this list "
                                                        fdprocessedid="8pxgmh">
                                                    <div class="dropdown drpdwn-fg">
                                                        <button type="button" style="margin-right:8px;"
                                                            class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                            id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                            data-mdb-auto-close="outside" fdprocessedid="w62w8i">
                                                            <i class="bx bx-filter-alt"></i>
                    
                                                        </button>
                    
                                                        <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                            aria-labelledby="dropdownMenuButton" data-popper-placement="bottom-end"
                                                            data-mdb-popper="null"
                                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                            <div class="dropdown-row">
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming/Running</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Published</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Stage <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Live
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Drafts
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Past
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Cancelled
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    All
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Trash
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
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
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Archived</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Filter <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <input type="text" class="form-control-sm"
                                                                                            placeholder="Type here">
                    
                                                                                    </div>
                    
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>
                    
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                    
                    
                                                                </div>
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Responsible</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Template</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Stage</span></a>
                                                                    </li>
                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
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
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Group <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Company
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Country
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created by
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created on
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                                <div class="col-md-4 px-0">
                                                                    <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Save current search <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                    
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox"
                                                                                            id="formCheck1">
                                                                                        <label class="form-check-label" for="formCheck1">
                                                                                            Default filter
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox"
                                                                                            id="formCheck1">
                                                                                        <label class="form-check-label" for="formCheck1">
                                                                                            Shared
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                                </a>
                                                                            </li>
                    
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                            </div>
                    
                                                        </ul>
                                                    </div>
                                                </div>
                    
                                                <ul class="nav nav-pills event-tab-nav" role="tablist">
                    
                                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#attendee-list-tab" role="tab"
                                                            aria-selected="true">
                                                            <button type="button" class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="List"
                                                                fdprocessedid="zf5u4">
                                                                <svg width="16" height="16" viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 6H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M8.5 12H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M8.5 18H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 6H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 12H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 18H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                    
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#attendee-grid-tab" role="tab"
                                                            aria-selected="false" tabindex="-1">
                                                            <button type="button" class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Grid"
                                                                fdprocessedid="thdk6">
                                                                <svg width="14" height="14" viewBox="0 0 21 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z" stroke="black"
                                                                        stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z" stroke="black"
                                                                        stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z" stroke="black"
                                                                        stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z" stroke="black"
                                                                        stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                    
                                                            </button>
                                                        </a>
                                                    </li>
                    
                                                </ul>
                    
                                            </div>
                    
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="attendee-list-tab" role="tabpanel">
                                                <div class="response-tbl">
                                                    <div class="attnd-overflow">
                                                        <table id="event-table" class="table table-resizable attendee-tbl">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input " type="checkbox"
                                                                            name="Main_Checkbox" id="selectAll"><span class="resize"></span>
                                                                    </th>
                                                                    <th>First Name<span class="resize"></span></th>
                                                                    <th width="100px">Last Name<span class="resize"></span></th>
                                                                    <th>Email<span class="resize"></span></th>
                                                                    <th>Mobile<span class="resize"></span></th>
                                                                    <th>Ticket Type<span class="resize"></span></th>
                                                                    <th>Company Name<span class="resize"></span></th>
                                                                    <th width="220px"><span class="resize"></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox"
                                                                            id="formCheck1"><span class="resize"></span></td>
                                                                    <td>AmarNath<span class="resize"></span></td>
                                                                    <td>M<span class="resize"></span></td>
                                                                    <td>amarNath@gmail.com<span class="resize"></span></td>
                                                                    <td>9874563210<span class="resize"></span></td>
                                                                    <td>0<span class="resize"></span></td>
                                                                    <td>Veuz Concepts<span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-end">
                                                                            <button type="button"
                                                                                class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Confirm</button>
                                                                            <button type="button"
                                                                                class="btn btn-soft-secondary waves-effect waves-light attandee-cncl-btn">Cancel</button>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox"
                                                                            id="formCheck2"><span class="resize"></span></td>
                                                                    <td>AmarNath<span class="resize"></span></td>
                                                                    <td>M<span class="resize"></span></td>
                                                                    <td>amarNath@gmail.com<span class="resize"></span></td>
                                                                    <td>9874563210<span class="resize"></span></td>
                                                                    <td>0<span class="resize"></span></td>
                                                                    <td>Veuz Concepts<span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-end">
                                                                            <button type="button"
                                                                                class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Confirm</button>
                                                                            <button type="button"
                                                                                class="btn btn-soft-secondary waves-effect waves-light attandee-cncl-btn">Cancel</button>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox"
                                                                            id="formCheck3"><span class="resize"></span></td>
                                                                    <td>AmarNath<span class="resize"></span></td>
                                                                    <td>M<span class="resize"></span></td>
                                                                    <td>amarNath@gmail.com<span class="resize"></span></td>
                                                                    <td>9874563210<span class="resize"></span></td>
                                                                    <td>0<span class="resize"></span></td>
                                                                    <td>Veuz Concepts<span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="d-flex justify-content-end">
                                                                            <button type="button"
                                                                                class="btn btn-soft-primary waves-effect waves-light attandee-crfrm-btn">Confirm</button>
                                                                            <button type="button"
                                                                                class="btn btn-soft-secondary waves-effect waves-light attandee-cncl-btn">Cancel</button>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                    
                    
                    
                    
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="bootom-nav">
                                                    <div class="total-count">
                                                        <h6>Total Count : <span>10</span></h6>
                                                        <ul>
                                                            <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                            <li class="active"><a href="#"><span>1</span></a></li>
                                                            <li><a href="#"><span>2</span></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="attendee-grid-tab" role="tabpanel">
                                               <div class="attendee-grid">
                                                <div class="row">
                                                    <div class="col-md-3 margin-box-this">
                                                        <div class="attendee-box h-100">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-lg-12 data-box">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="data-box-contnt">
                                                                        <h2>Barney Lonny</h2>
                                                                        <h3>barneylonny@gmail.com</h3>
                                                                        <h3>91 9874563210</h3>
                                                                        <h4>Badge Issued : <span class="no"> No<span></h4>
                                                                    </div>
                                                                    <div class="dropdown print-mail-dropdwn">
                                                                        <div class="event-settings dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fas fa-cog"></i>
                                                                        </div>
                                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add-attandee"><i class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"></i>Send Mail</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i>Print</a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="border-class"></div>
                                                                </div>
                                                                <div class="col-lg-12 attended-text d-flex align-items-center">
                                                                <button type="button" class="tick-box me-1" fdprocessedid="ktksnm">Confirm</button>
                                                                    <button type="button" class="block-box me-1" fdprocessedid="6ldr2n">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div class="col-md-3 margin-box-this">
                                                        <div class="attendee-box h-100">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-lg-12 data-box">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="data-box-contnt">
                                                                        <h2>Barney Lonny</h2>
                                                                        <h3>barneylonny@gmail.com</h3>
                                                                        <h3>91 9874563210</h3>
                                                                        <h4>Badge Issued : <span class="yes"> Yes<span></h4>
                                                                    </div>
                                                                    <div class="dropdown print-mail-dropdwn">
                                                                        <div class="event-settings dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fas fa-cog"></i>
                                                                        </div>
                                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add-attandee"><i class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"></i>Send Mail</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i>Print</a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="border-class"></div>
                                                                </div>
                                                                <div class="col-lg-12 attended-text d-flex align-items-center justify-content-between">
                                                                   
                                                                    <h4>Confirmed</h4>
                                                                    <button type="button" class="block-box" fdprocessedid="6ldr2n">Cancel</button>
                                                                </div>
                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 margin-box-this">
                                                        <div class="attendee-box h-100">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-lg-12 data-box">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="data-box-contnt">
                                                                        <h2>Barney Lonny</h2>
                                                                        <h3>barneylonny@gmail.com</h3>
                                                                        <h3>91 9874563210</h3>
                                                                        <h4>Badge Issued : <span class="no"> No<span></h4>
                                                                    </div>
                                                                    <div class="dropdown print-mail-dropdwn">
                                                                        <div class="event-settings dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fas fa-cog"></i>
                                                                        </div>
                                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add-attandee"><i class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"></i>Send Mail</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i>Print</a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="border-class"></div>
                                                                </div>
                                                                <div class="col-lg-12 attended-text d-flex align-items-center justify-content-between">
                                                                    <h4 class="cancelled">Cancelled</h4>
                                                                    <button type="button" class="tick-box" fdprocessedid="ktksnm">Confirm</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div class="col-md-3 margin-box-this">
                                                        <div class="attendee-box h-100">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-lg-12 data-box">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    <div class="data-box-contnt">
                                                                        <h2>Barney Lonny</h2>
                                                                        <h3>barneylonny@gmail.com</h3>
                                                                        <h3>91 9874563210</h3>
                                                                        <h4>Badge Issued : <span class="yes"> Yes<span></h4>
                                                                    </div>
                                                                    <div class="dropdown print-mail-dropdwn">
                                                                        <div class="event-settings dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fas fa-cog"></i>
                                                                        </div>
                                                                        <div class="dropdown-menu dropdown-menu-sm"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add-attandee"><i class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-envelope me-2"></i>Send Mail</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i>Print</a>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="border-class"></div>
                                                                </div>
                                                                <div class="col-lg-12 attended-text d-flex align-items-center">
                                                                    <button type="button" class="tick-box me-1" fdprocessedid="ktksnm">Confirm</button>
                                                                    <button type="button" class="block-box me-1" fdprocessedid="6ldr2n">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    
                                                   
                                    
                                                </div>
                                               </div>
                                               <div class="bootom-nav">
                                                <div class="total-count">
                                                    <h6>Total Count : <span>10</span></h6>
                                                    <ul>
                                                        <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                        <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                        <li class="active"><a href="#"><span>1</span></a></li>
                                                        <li><a href="#"><span>2</span></a></li>
                                                        <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                        <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </div>
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
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#attendees-table" role="tab"
                                                            aria-selected="true">
                                                            <button type="button" class="btn btn-kanlist waves-effect waves-light">
                                                                <svg width="16" height="16" viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 6H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.5 12H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.5 18H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M3.5 6H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M3.5 12H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M3.5 18H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#attendees-chart" role="tab"
                                                            aria-selected="false" tabindex="-1">
                                                            <button type="button" class="btn btn-kanlist ml-15 waves-effect waves-light">
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
                                                    <div class="attend-today-tbl">
                                                        <table id="event-table"
                                                            class="table table-resizable attendee-today-tbl table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="150px">Day<span class="resize"></span></th>
                                                                    <th>Total Attendees<span class="resize"></span></th>
                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#">
                                                                            <h5>Day 1</h5>
                                                                            <h6>24/09/23</h6>
                                                                        </a>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>20
                                                                        <span
                                                                            class="badge badge-pill badge-soft-success font-size-13 ms-3">10
                                                                            Check In</span>
                                                                        <span
                                                                            class="badge badge-pill badge-soft-danger font-size-13 ms-2">10
                                                                            Checkout</span>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#">
                                                                            <h5>Day 2</h5>
                                                                            <h6>24/09/23</h6>
                                                                        </a>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>20
                                                                        <span
                                                                            class="badge badge-pill badge-soft-success font-size-13 ms-3">10
                                                                            Check In</span>
                                                                        <span
                                                                            class="badge badge-pill badge-soft-danger font-size-13 ms-2">10
                                                                            Checkout</span>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#">
                                                                            <h5>Day 3</h5>
                                                                            <h6>24/09/23</h6>
                                                                        </a>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>20
                                                                        <span
                                                                            class="badge badge-pill badge-soft-success font-size-13 ms-3">10
                                                                            Check In</span>
                                                                        <span
                                                                            class="badge badge-pill badge-soft-danger font-size-13 ms-2">10
                                                                            Checkout</span>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                    
                    
                    
                    
                                                            </tbody>
                                                        </table>
                                                    </div>
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
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small" data-bs-toggle="modal" data-bs-target="#invite-members">
                                                                   Add Members
                                                                </button>
                                                                <div class="dropdown event-sett1">
                                                                    <div class="event-settings dropdown-toggle" type="button"
                                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="fas fa-cog"></i>
                                                                    </div>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-download me-2"></i>Import</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-upload me-2"></i>Export</a>
                                                                    </div>
                                                                </div>
                                            </div>
                                            <div class="d-flex rightside-btns">
                                                <div class="row-selected" style="display: none;">
                                                    <button type="button" class="btn btn-light selected-num me-1"
                                                        fdprocessedid="6xsncw">
                                                        <span>8</span>Selected<i class="bx bx-x"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            fdprocessedid="p8hcnm"><i class="fas fa-cog me-1"
                                                                aria-hidden="true"></i>Actions</button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                                    aria-hidden="true"></i>Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                                    aria-hidden="true"></i>Archive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                                    aria-hidden="true"></i>Unarchive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-trash-alt me-2"
                                                                    aria-hidden="true"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group search-inpt">
                                                    <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                                    </div>
                                                    <input type="text" class="form-control border-start-0 ps-0"
                                                        id="inlineFormInputGroupUsername" placeholder="Search this list "
                                                        fdprocessedid="8pxgmh">
                                                    <div class="dropdown drpdwn-fg">
                                                        <button type="button" style="margin-right:8px;"
                                                            class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                            id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                                            aria-expanded="false" data-mdb-auto-close="outside"
                                                            fdprocessedid="w62w8i">
                                                            <i class="bx bx-filter-alt"></i>
                    
                                                        </button>
                    
                                                        <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                            aria-labelledby="dropdownMenuButton"
                                                            data-popper-placement="bottom-end" data-mdb-popper="null"
                                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                            <div class="dropdown-row">
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming/Running</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Published</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Stage <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Live
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Drafts
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Past
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Cancelled
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    All
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Trash
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <label for="">Date</label>
                                                                                        <input type="date"
                                                                                            class="form-control-sm">
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Archived</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Filter <i
                                                                                class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <input type="text"
                                                                                            class="form-control-sm"
                                                                                            placeholder="Type here">
                    
                                                                                    </div>
                    
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>
                    
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                    
                    
                                                                </div>
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Responsible</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Template</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Stage</span></a>
                                                                    </li>
                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <label for="">Date</label>
                                                                                        <input type="date"
                                                                                            class="form-control-sm">
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Group <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Company
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Country
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created by
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created on
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                                <div class="col-md-4 px-0">
                                                                    <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Save current search <i
                                                                                class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                    
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox" id="formCheck1">
                                                                                        <label class="form-check-label"
                                                                                            for="formCheck1">
                                                                                            Default filter
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox" id="formCheck1">
                                                                                        <label class="form-check-label"
                                                                                            for="formCheck1">
                                                                                            Shared
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                                </a>
                                                                            </li>
                    
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                            </div>
                    
                                                        </ul>
                                                    </div>
                                                </div>
                    
                                                <ul class="nav nav-pills event-tab-nav" role="tablist">
                    
                                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#team-list-tab"
                                                            role="tab" aria-selected="true">
                                                            <button type="button"
                                                                class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                aria-label="List" fdprocessedid="zf5u4">
                                                                <svg width="16" height="16" viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 6H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M8.5 12H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M8.5 18H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 6H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 12H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 18H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                    
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#team-grid-tab"
                                                            role="tab" aria-selected="false" tabindex="-1">
                                                            <button type="button"
                                                                class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                aria-label="Grid" fdprocessedid="thdk6">
                                                                <svg width="14" height="14" viewBox="0 0 21 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                    
                                                            </button>
                                                        </a>
                                                    </li>
                    
                                                </ul>
                    
                                            </div>

                                        </div>
                                        <div class="tab-content text-muted tbl-list-tabs">
                                            <div class="tab-pane active show" id="team-list-tab" role="tabpanel">
                                                <div class="team-overflow speaker-table tm-tbl">
                                                    <div class="attnd-overflow">
                                                        <table id="event-table" class="table table-resizable table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input " type="checkbox" name="Main_Checkbox"
                                                                        id="selectAll"><span class="resize"></span></th>
                                                                    <th>Name<span class="resize"></span></th>
                                                                    <th>Email<span class="resize"></span></th>
                                                                    <th>Role<span class="resize"></span></th>
                                                                    <th>Status<span class="resize"></span></th>
                                                                    <th>Profile Status<span class="resize"></span></th>
                                                                    <th><span class="resize"></span></th>
        
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="responsible">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                            <div class="speaker-name-email">
                                                                                <h6>James Fernandas</h6>
                                                                            </div>
        
                                                                        </div><span class="resize"></span>
                                                                    </td>
                                                                    <td>
                                                                        jamesfernand@gmail.com
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                                                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M7.4967 6.31747C7.43072 6.31087 7.35154 6.31087 7.27896 6.31747C6.52161 6.29176 5.80402 5.97228 5.27813 5.42668C4.75224 4.88109 4.45936 4.15223 4.46151 3.39445C4.46151 1.77788 5.76796 0.464832 7.39113 0.464832C8.16724 0.450832 8.91712 0.745714 9.47581 1.28461C10.0345 1.8235 10.3562 2.56226 10.3702 3.33837C10.3842 4.11447 10.0894 4.86436 9.55046 5.42305C9.01157 5.98174 8.27281 6.30347 7.4967 6.31747ZM4.19758 8.75222C2.60081 9.82114 2.60081 11.5631 4.19758 12.6254C6.0121 13.8395 8.9879 13.8395 10.8024 12.6254C12.3992 11.5565 12.3992 9.81454 10.8024 8.75222C8.9945 7.54474 6.01869 7.54474 4.19758 8.75222Z" stroke="#263238" stroke-width="0.848345" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                            </svg>Event Owner
                                                                                    </button><span class="resize"></span>
                                                                    </td>
                                                                    <td class="status">
                                                                        <h6>Joined - 20 minutes ago</h6><span class="resize"></span>
                                                                    </td>
        
                                                                    <td>
                                                                        <div class="profile-status">
                                                                            <div class="progress animated-progess">
                                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <h6>50%</h6>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#delete-alert"><i class="bx bx-trash"></i></a>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                                <td>
                                                                        <div class="responsible">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                            <div class="speaker-name-email">
                                                                                <h6>James Fernandas</h6>
                                                                            </div>
        
                                                                        </div><span class="resize"></span>
                                                                    </td>
                                                                    <td>
                                                                        jamesfernand@gmail.com
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                                                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M7.4967 6.31747C7.43072 6.31087 7.35154 6.31087 7.27896 6.31747C6.52161 6.29176 5.80402 5.97228 5.27813 5.42668C4.75224 4.88109 4.45936 4.15223 4.46151 3.39445C4.46151 1.77788 5.76796 0.464832 7.39113 0.464832C8.16724 0.450832 8.91712 0.745714 9.47581 1.28461C10.0345 1.8235 10.3562 2.56226 10.3702 3.33837C10.3842 4.11447 10.0894 4.86436 9.55046 5.42305C9.01157 5.98174 8.27281 6.30347 7.4967 6.31747ZM4.19758 8.75222C2.60081 9.82114 2.60081 11.5631 4.19758 12.6254C6.0121 13.8395 8.9879 13.8395 10.8024 12.6254C12.3992 11.5565 12.3992 9.81454 10.8024 8.75222C8.9945 7.54474 6.01869 7.54474 4.19758 8.75222Z" stroke="#263238" stroke-width="0.848345" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                            </svg>Event Staff
                                                                                    </button><span class="resize"></span>
                                                                    </td>
                                                                    <td class="status">
                                                                        <h6>Invited - 20 minutes ago</h6>
                                                                        <span class="resize"></span>
                                                                    </td>
        
                                                                    <td>
                                                                        <div class="profile-status">
                                                                            <div class="progress animated-progess">
                                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <h6>50%</h6>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#delete-alert"><i class="bx bx-trash"></i></a>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="7" class="portal-memb">
                                                                        <h4>Portal members</h4>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="responsible">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                            <div class="speaker-name-email">
                                                                                <h6>James Fernandas</h6>
                                                                            </div>
        
                                                                        </div><span class="resize"></span>
                                                                    </td>
                                                                    <td>
                                                                        jamesfernand@gmail.com
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                                                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M7.4967 6.31747C7.43072 6.31087 7.35154 6.31087 7.27896 6.31747C6.52161 6.29176 5.80402 5.97228 5.27813 5.42668C4.75224 4.88109 4.45936 4.15223 4.46151 3.39445C4.46151 1.77788 5.76796 0.464832 7.39113 0.464832C8.16724 0.450832 8.91712 0.745714 9.47581 1.28461C10.0345 1.8235 10.3562 2.56226 10.3702 3.33837C10.3842 4.11447 10.0894 4.86436 9.55046 5.42305C9.01157 5.98174 8.27281 6.30347 7.4967 6.31747ZM4.19758 8.75222C2.60081 9.82114 2.60081 11.5631 4.19758 12.6254C6.0121 13.8395 8.9879 13.8395 10.8024 12.6254C12.3992 11.5565 12.3992 9.81454 10.8024 8.75222C8.9945 7.54474 6.01869 7.54474 4.19758 8.75222Z" stroke="#263238" stroke-width="0.848345" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                            </svg>Portal Owner
                                                                                    </button><span class="resize"></span>
                                                                    </td>
                                                                    <td class="status">
                                                                        <h6>Joined - 12 days ago</h6>
                                                                        <span class="resize"></span>
                                                                    </td>
        
                                                                    <td>
                                                                        <div class="profile-status">
                                                                            <div class="progress animated-progess">
                                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                            <h6>50%</h6>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#" class="delete-member" data-bs-toggle="modal" data-bs-target="#delete-alert"><i class="bx bx-trash"></i></a>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
        
        
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="bootom-nav">
                                                    <div class="total-count">
                                                        <h6>Total Count : <span>10</span></h6>
                                                        <ul>
                                                            <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                            <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                                            <li><a href="#"><span>2</span></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="team-grid-tab" role="tabpanel">
                                                <div class="team-grid">
                                                    <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lgg-4 row-cols-xl-6">
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Owner</span></h3>
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>                                                                      
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Staff</span></h3>
                                                                            
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Portal Owner</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Staff</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Staff</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Staff</span></h3>
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Staff</span></h3>
                                                                            
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>jamesfernand@gmail.com</h3>
                                                                            <h3>Role: <span class="sponser-type tick-box">Event Staff</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                

                                                    </div>
                                                </div>
                                                <div class="bootom-nav">
                                                    <div class="total-count">
                                                        <h6>Total Count : <span>10</span></h6>
                                                        <ul>
                                                            <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                            <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                                            <li><a href="#"><span>2</span></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
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
                                        
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small">
                                                    <i class="bx bx-cog font-size-16 align-middle me-1"></i>Session settings
                                                </button>
                                                <a href="attandees.php"><button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm br-50 small">
                                                <i class="bx bx-list-ul font-size-17 align-middle me-1"></i>  Session attendee list
                                                </button></a> 
                                                <div class="dropdown event-sett1">
                                                    <div class="event-settings dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-cog"></i>
                                                    </div>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-download me-2"></i>Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-upload me-2"></i>Export</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex rightside-btns">
                                                <div class="row-selected" style="display: none;">
                                                    <button type="button" class="btn btn-light selected-num me-1" fdprocessedid="6xsncw">
                                                        <span>8</span>Selected<i class="bx bx-x"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="p8hcnm"><i
                                                                class="fas fa-cog me-1" aria-hidden="true"></i>Actions</button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                                    aria-hidden="true"></i>Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                                    aria-hidden="true"></i>Archive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                                    aria-hidden="true"></i>Unarchive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-trash-alt me-2"
                                                                    aria-hidden="true"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group search-inpt">
                                                    <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                                    </div>
                                                    <input type="text" class="form-control border-start-0 ps-0"
                                                        id="inlineFormInputGroupUsername" placeholder="Search this list "
                                                        fdprocessedid="8pxgmh">
                                                    <div class="dropdown drpdwn-fg">
                                                        <button type="button"
                                                            class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                            id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                                                            data-mdb-auto-close="outside" fdprocessedid="w62w8i">
                                                            <i class="bx bx-filter-alt"></i>
                    
                                                        </button>
                    
                                                        <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                            aria-labelledby="dropdownMenuButton" data-popper-placement="bottom-end"
                                                            data-mdb-popper="null"
                                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                            <div class="dropdown-row">
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming/Running</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Published</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Stage <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Live
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Drafts
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Past
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Cancelled
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    All
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Trash
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
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
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Archived</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Filter <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <input type="text" class="form-control-sm"
                                                                                            placeholder="Type here">
                    
                                                                                    </div>
                    
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>
                    
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                    
                    
                                                                </div>
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Responsible</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Template</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Stage</span></a>
                                                                    </li>
                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
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
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Group <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Company
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Country
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created by
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created on
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                                <div class="col-md-4 px-0">
                                                                    <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Save current search <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                    
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox"
                                                                                            id="formCheck1">
                                                                                        <label class="form-check-label" for="formCheck1">
                                                                                            Default filter
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox"
                                                                                            id="formCheck1">
                                                                                        <label class="form-check-label" for="formCheck1">
                                                                                            Shared
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                                </a>
                                                                            </li>
                    
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                            </div>
                    
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
                                                        <div class="attendees-members d-flex align-items-center mt-2">
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="attendees d-flex" style="margin-right: 0px !important; border:none !important; cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Attendees IN</span>
                                                                    <h6>29</h6>
                                                                </div>
                                                            </a>

                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Attendees Out</span>
                                                                    <h6>10</h6>
                                                                </div>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="margin-left:17px" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Total</span>
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
                                                                    <span>Attendees IN</span>
                                                                    <h6>29</h6>
                                                                </div>
                                                            </a>

                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Attendees Out</span>
                                                                    <h6>10</h6>
                                                                </div>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="margin-left:17px" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Total</span>
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
                                                                    <span>Attendees IN</span>
                                                                    <h6>29</h6>
                                                                </div>
                                                            </a>

                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Attendees Out</span>
                                                                    <h6>10</h6>
                                                                </div>
                                                            </a>
                                                            <a data-bs-toggle="modal" data-bs-target="#attendees-in">
                                                                <div class="member d-flex" style="margin-left:17px" style="cursor: pointer;">
                                                                    <img src="assets/images/attendee.svg" alt="">
                                                                    <span>Total</span>
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
                                                <div class="dropdown">
                                                    <div class="event-settings m-0 dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-cog"></i>
                                                    </div>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-download me-2"></i>Import</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fas fa-upload me-2"></i>Export</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex rightside-btns">
                                                <div class="row-selected" style="display: none;">
                                                    <button type="button" class="btn btn-light selected-num me-1"
                                                        fdprocessedid="6xsncw">
                                                        <span>8</span>Selected<i class="bx bx-x"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            fdprocessedid="p8hcnm"><i class="fas fa-cog me-1"
                                                                aria-hidden="true"></i>Actions</button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                                    aria-hidden="true"></i>Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                                    aria-hidden="true"></i>Archive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                                    aria-hidden="true"></i>Unarchive</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i class="bx bxs-trash-alt me-2"
                                                                    aria-hidden="true"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group search-inpt">
                                                    <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                                    </div>
                                                    <input type="text" class="form-control border-start-0 ps-0"
                                                        id="inlineFormInputGroupUsername" placeholder="Search this list "
                                                        fdprocessedid="8pxgmh">
                                                    <div class="dropdown drpdwn-fg">
                                                        <button type="button" style="margin-right:8px;"
                                                            class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                            id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                                            aria-expanded="false" data-mdb-auto-close="outside"
                                                            fdprocessedid="w62w8i">
                                                            <i class="bx bx-filter-alt"></i>
                    
                                                        </button>
                    
                                                        <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                            aria-labelledby="dropdownMenuButton"
                                                            data-popper-placement="bottom-end" data-mdb-popper="null"
                                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                            <div class="dropdown-row">
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming/Running</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Published</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Stage <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Live
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Drafts
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Past
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Cancelled
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    All
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Trash
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <label for="">Date</label>
                                                                                        <input type="date"
                                                                                            class="form-control-sm">
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Archived</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Filter <i
                                                                                class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <input type="text"
                                                                                            class="form-control-sm"
                                                                                            placeholder="Type here">
                    
                                                                                    </div>
                    
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>
                    
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                    
                    
                                                                </div>
                                                                <div class="col-md-4 border-right px-0">
                                                                    <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Responsible</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Template</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Stage</span></a>
                                                                    </li>
                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Start Date <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="reg-date w-100">
                                                                                        <label for="">Date</label>
                                                                                        <input type="date"
                                                                                            class="form-control-sm">
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Add Custom Group <i class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Company
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Country
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created by
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Created on
                                                                                </a>
                                                                            </li>
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                                <div class="col-md-4 px-0">
                                                                    <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>My
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"><span><i
                                                                                    class="fas fa-check me-2"
                                                                                    aria-hidden="true"></i>Upcoming
                                                                                Events</span></a>
                                                                    </li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li>
                                                                        <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                            Save current search <i
                                                                                class="fas fa-angle-right arrow"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                    
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox" id="formCheck1">
                                                                                        <label class="form-check-label"
                                                                                            for="formCheck1">
                                                                                            Default filter
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox" id="formCheck1">
                                                                                        <label class="form-check-label"
                                                                                            for="formCheck1">
                                                                                            Shared
                                                                                        </label>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                                </a>
                                                                            </li>
                    
                    
                                                                        </ul>
                                                                    </li>
                                                                </div>
                                                            </div>
                    
                                                        </ul>
                                                    </div>
                                                </div>
                    
                                                <ul class="nav nav-pills event-tab-nav" role="tablist">
                    
                                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#response-list-tab"
                                                            role="tab" aria-selected="true">
                                                            <button type="button"
                                                                class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                aria-label="List" fdprocessedid="zf5u4">
                                                                <svg width="16" height="16" viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 6H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M8.5 12H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M8.5 18H21.5" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 6H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 12H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M3.5 18H3.51" stroke="black" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                    
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#response-grid-tab"
                                                            role="tab" aria-selected="false" tabindex="-1">
                                                            <button type="button"
                                                                class="btn btn-kanlist ml-15 waves-effect waves-light"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                aria-label="Grid" fdprocessedid="thdk6">
                                                                <svg width="14" height="14" viewBox="0 0 21 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.5 1.05225H1.5V8.05225H8.5V1.05225Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M19.5 1.05225H12.5V8.05225H19.5V1.05225Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M19.5 12.0522H12.5V19.0522H19.5V12.0522Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M8.5 12.0522H1.5V19.0522H8.5V12.0522Z"
                                                                        stroke="black" stroke-width="1.4" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                    
                                                            </button>
                                                        </a>
                                                    </li>
                    
                                                </ul>
                    
                                            </div>

                                        </div>
                                        <div class="tab-content text-muted tbl-list-tabs">
                                            <div class="tab-pane active show" id="response-list-tab" role="tabpanel">
                                                <div class="event-table speaker-table response-tbl">
                                                    <div class="attnd-overflow">
                                                        <table id="event-table" class="table table-resizable table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="46px"><input class="form-check-input " type="checkbox" name="Main_Checkbox"
                                                                        id="selectAll"><span class="resize"></span></th>
                                                                    <th>Form name<span class="resize"></span></th>
                                                                    <th width="30%">Created By<span class="resize"></span></th>
                                                                    <th>Last modified time<span class="resize"></span></th>
                                                                    <th>Responses<span class="resize"></span></th>
                                                                    <th><span class="resize"></span></th>
        
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                                    <td>Getintouch<span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="responsible">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                                            <div class="speaker-name-email">
                                                                                <h6>James Fernandas</h6>
                                                                            </div>
        
                                                                        </div><span class="resize"></span>
                                                                    </td>
                                                                    <td class="status">
                                                                        <h6>Joined - 20 minutes ago</h6>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>0<span class="resize"></span></td>
                                                                    <td class="text-end td-overflow">
                                                                        <div class="btn-group">
                                                                        <button type="button" class="btn btn-light1 text-uppercase px-2">Edit</button>
                                                                            <button type="button" class="btn btn-light1 px-1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                                        </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">Delete</a>
                                                                                <a class="dropdown-item" href="#">View</a>
        
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                                    <td>Getintouch<span class="resize"></span></td>
                                                                    <td>
                                                                        <div class="responsible">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                                            <div class="speaker-name-email">
                                                                                <h6>James Fernandas</h6>
                                                                            </div>
        
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td class="status">
                                                                        <h6>Invited - 20 minutes ago</h6>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                    <td>0<span class="resize"></span></td>
        
                                                                    <td class="text-end td-overflow">
                                                                        <div class="btn-group">
                                                                        <button type="button" class="btn btn-light1 text-uppercase px-2">Edit</button>
                                                                            <button type="button" class="btn btn-light1 px-1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                                        </button>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#">Delete</a>
                                                                                <a class="dropdown-item" href="#">View</a>
        
                                                                            </div>
                                                                        </div>
                                                                        <span class="resize"></span>
                                                                    </td>
                                                                </tr>
        
        
        
        
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="bootom-nav">
                                                    <div class="total-count">
                                                        <h6>Total Count : <span>10</span></h6>
                                                        <ul>
                                                            <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                            <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                                            <li><a href="#"><span>2</span></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="response-grid-tab" role="tabpanel">
                                                <div class="team-grid">
                                                    <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lgg-4 row-cols-xl-6">
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>                                                                      
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                            
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                            
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col margin-box-this">
                                                            <div class="attendee-box h-100">
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-lg-12 data-box">
                                                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                            class="avatar-sm rounded-circle">
                                                                        <div class="data-box-contnt">
                                                                            <h2>James Fernandas</h2>
                                                                            <h3>Form Name: <span class="sponser-type dark-content">Getintouch</span></h3>
                                                                            <h3>Responses: <span class="sponser-type dark-content">0</span></h3>
                                                                        
                                                                        </div>
                                                                        <div class="dropdown print-mail-dropdwn">
                                                                            <div class="event-settings dropdown-toggle"
                                                                                type="button" id="dropdownMenuButton"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-cog"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-sm"
                                                                                aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#add-attandee"><i
                                                                                        class="fas fa-pencil-alt me-2"></i>Edit</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i
                                                                                        class="fas fa-envelope me-2"></i>Send
                                                                                    Mail</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                

                                                    </div>
                                                </div>
                                                <div class="bootom-nav">
                                                    <div class="total-count">
                                                        <h6>Total Count : <span>10</span></h6>
                                                        <ul>
                                                            <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                                            <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                                            <li><a href="#"><span>2</span></a></li>
                                                            <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                                            <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
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
                                                        <button type="button" class="btn btn-light br-50 btn-sm" data-bs-toggle="modal" data-bs-target="#add-logo">Configure</button>
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
                                                    <button type="button" class="btn btn-light br-50 btn-sm mt-2" data-bs-dismiss="modal"><i class="far fa-eye me-1"></i>View portal event-listing page</button>
                                                </div>
                                                <div class="col-md-5">
                                                    <img src="assets/images/thumbnail.png" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="evnt-bttm-settings">
                                                        <button type="button" class="btn btn-light br-50 btn-sm" data-bs-dismiss="modal">Change</button>
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
                                                        <button type="button" class="btn btn-light br-50 btn-sm" data-bs-dismiss="modal">Upload</button>
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
                                                    <h5>Registration Form</h5>
                                                    <div class="reg-form">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h6>Input Fields</h6>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="Name">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check1">
                                                                            <label class="form-check-label" for="check1">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check2">
                                                                            <label class="form-check-label" for="check2">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="email" placeholder="Email">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check3">
                                                                            <label class="form-check-label" for="check3">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check4">
                                                                            <label class="form-check-label" for="check4">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="Phone">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check1">
                                                                            <label class="form-check-label" for="check1">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check2">
                                                                            <label class="form-check-label" for="check2">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="Company">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check3">
                                                                            <label class="form-check-label" for="check3">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check4">
                                                                            <label class="form-check-label" for="check4">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="City">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check1">
                                                                            <label class="form-check-label" for="check1">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check2">
                                                                            <label class="form-check-label" for="check2">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="Category">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check3">
                                                                            <label class="form-check-label" for="check3">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check4">
                                                                            <label class="form-check-label" for="check4">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="Department">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check1">
                                                                            <label class="form-check-label" for="check1">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check2">
                                                                            <label class="form-check-label" for="check2">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-grp">
                                                                    <input class="form-control" type="text" placeholder="Country">
                                                                    <div class="unque-mand">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check3">
                                                                            <label class="form-check-label" for="check3">
                                                                                Unique
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="check4">
                                                                            <label class="form-check-label" for="check4">
                                                                                Mandatory
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-light br-50 btn-sm mt-2" data-bs-dismiss="modal">Change</button>
                                                </div>

                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Primary Contact</h5>
                                                    <p class="primary-contct">All emails will have <a href="#"> <input class="form-control w-60 Email1" value="noreplay@website.com" type="email" placeholder="example@website.com"  id="primary_contact" name="primary_contact"></a> as the sender</p>
                                                  
                                                    <button type="button" class="btn btn-light br-50 btn-sm mt-2" data-bs-dismiss="modal">Change Primary Contact</button>
                                                </div>

                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Terms and Policies</h5>
                                                    <p>Link the terms and Policies to your events </p>
                                                    <button type="button" class="btn btn-light br-50 btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#add-terms">Add</button>
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
                    <div class="row">
                        <div class="col-md-12">
                        <!-- <div class="empty-bx">
                            <img src="assets/images/empty.gif" alt="">
                        </div> -->
                         
                            <div class="tm-member-div">
                                
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/default.png" alt="" class="avatar-md border-1 rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-member-bx d-flex rounded">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded me-3">
                                    <div class="flex-grow-1">
                                        <h5>Stephen Hadley</h5>
                                        <p><i class="bx bx-envelope align-middle"></i> stephen@gmail.com</p>
                                        <p class="mb-0"><i class="bx bx-phone-call align-middle"></i> 966 22334455</p>
                                    </div>
                                    <div class="tm-membr-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary  br-50 btn-md">Add</button>
                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-logo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Add Logo</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
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
                    </div>
                  
                    
                </div>
                <div class="modal-footer">
                 
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary br-50 btn-md">Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-terms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Terms and Policies</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-grp term-condition mb-0">
                                <textarea id="summernote" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary  br-50 btn-md">Add</button>
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
                    <a href="conference.php"><button type="button" class="btn btn-primary  br-50 btn-md">Create</button></a>
                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="add-attandee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Attendee</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" placeholder="Enter Name">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio1">
                                    <label class="form-check-label" for="formRadio1">
                                    Don't clear this field
                                    </label>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Enter Email">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio2">
                                    <label class="form-check-label" for="formRadio2">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Mobile No</label>
                                <input class="form-control" type="text" placeholder="Enter mobile number">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio3">
                                    <label class="form-check-label" for="formRadio3">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Comapany Name</label>
                                <input class="form-control" type="text" placeholder="Enter company name">
                                <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio4">
                                    <label class="form-check-label" for="formRadio4">
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
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5">
                                    <label class="form-check-label" for="formRadio5">
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
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio6">
                                    <label class="form-check-label" for="formRadio6">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-grp">
                                <label class="form-label">Ticket Type</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Premium</option>
                                    <option value="HI">Gold</option>                          
                                    <option value="CA">Platinium</option>
                                    <option value="NV">Silver</option>  
                                  </select>
                                  <div class="form-check form-radio-outline form-radio-danger evnt-radio mt-1">
                                    <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio7">
                                    <label class="form-check-label" for="formRadio7">
                                    Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                   
                   
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex">
                    <a href="#"><button type="button" class="btn btn-primary br-50 btn-md">Save and Close</button></a>
                    <a href="#"><button type="button" class="btn btn-primary br-50 btn-md ms-1">Save and New</button></a>
                    </div>
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
                <div class="modal-footer justify-content-end">
                    <a href="#"><button  data-bs-target="#upload-inpt" data-bs-toggle="modal" data-bs-dismiss="modal" type="button" class="btn btn-primary  br-50 btn-md">Next</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="export-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <div class="col-lg-4">
                            <div class="form-grp">
                                <label class="form-label">Header background color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default" value="#50a5f1">
                               
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-grp">
                                <label class="form-label">Header font color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default" value="#222222">
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-grp visible-field mb-0">
                                <label class="form-label">Visible Fields</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Name
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                            <label class="form-check-label" for="formCheck2">
                                                Email
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck3">
                                            <label class="form-check-label" for="formCheck3">
                                                Mobile
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck4">
                                            <label class="form-check-label" for="formCheck4">
                                                Company Name
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck5">
                                            <label class="form-check-label" for="formCheck5">
                                                Register Type
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck6">
                                            <label class="form-check-label" for="formCheck6">
                                                Ticket Id
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" id="formCheck7">
                                            <label class="form-check-label" for="formCheck7">
                                                Badge Issue Status
                                            </label>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <a href="#" data-bs-target="#print-export" data-bs-toggle="modal"><button type="button" class="btn btn-primary br-50 btn-md">Export</button></a>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="print-export" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="col-md-12">
                            <div class="badge-btns1">
                                <img src="assets/images/logo.png" alt="">
                                <button class="btn btn-primary br-50 badge-issue1" data-bs-dismiss="modal">Badge Issued</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="modal-footer footer-btns1">
                    <button type="button" class="btn btn-primary br-50 btn-md me-1" data-bs-dismiss="modal">Print</button>
                    <button type="button" class="btn btn-secondary br-50 btn-md me-1" data-bs-dismiss="modal">Preview Badge</button>
                    <button type="button" class="btn btn-outline-secondary badge-not br-50 btn-md me-1" data-bs-dismiss="modal">Badge not Issued</button>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail" class="send-mail"><i class="bx bx-mail-send"></i></a> 
                </div>

            </div>
        </div>
    </div>

    <div id="alert-msg" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box red">
                        <i class="mdi mdi-alert"></i>
                    </div>				
                </div>
                <div class="modal-body">
                    <p class="text-center">Are you sure you want to send mail ?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn yes-btn successful-btn" data-bs-dismiss="modal">Yes</button>
                    <button class="btn cancel-button" data-bs-dismiss="modal">No</button>

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
                        <div class="col-md-12">
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger alert-dismissible fade show" role="alert">
                                     <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                              
                             </div>
                            <div class="field-btns">
                                <button type="button"class="btn btn-secondary waves-effect waves-light btn-sm text-uppercase br-50 small">
                                    <i class="bx bx-upload font-size-16 align-middle me-1"></i>Upload</button>

                                    <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                       Test
                                    </button>
                            </div>
                            <div class="event-table attendee-in response-tbl">
                                <div class="table-responsive">
                                    <table id="event-table" class="table table-striped attendee-today-tbl field-tbl">
                                        <thead>
                                            <tr>
                                                <th>Excel Field</th>
                                                <th style="width: 400px;">Field</th>
                                                <th style="width: 30px;"></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <select class="limitedNumbChosen" multiple="true">
                                                        <option value="1">Monday</option>
                                                        <option value="2">Tuesday</option>
                                                        <option value="3">Wednesday</option>
                                                        <option value="4">Thursday</option>
                                                        <option value="5">Friday</option>
                                                        <option value="6">Saturday</option>
                                                        <option value="7">Sunday</option>
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                  
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal" data-bs-target="#import-upload" data-bs-toggle="modal">Back</button>
                    <button data-bs-dismiss="modal" type="button" class="btn btn-primary br-50 btn-md">Save</button>
                </div>

            </div>
        </div>
    </div>

    
    <div id="delete-alert" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box red">
                        <i class="mdi mdi-alert"></i>
                    </div>				
                </div>
                <div class="modal-body">
                    <p class="text-center">Are you sure you want to Delete ?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn yes-btn successful-btn" data-bs-dismiss="modal">Yes</button>
                    <button class="btn cancel-button" data-bs-dismiss="modal">No</button>

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
        <script src="assets/libs/select2/js/chosen.jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <!-- <script src="assets/js/pages/jquery.slim.min.js"></script> -->
        <script src="assets/js/pages/popper.min.js"></script>
        <script src="assets/js/pages/bootstrap.min.js"></script>

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
        <script src="assets/js/summernote-bs4.js"></script>
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
    $(".drpdwn-menu-btn").click(function () {
        $(this).parent().children(".dropdown-menu").toggleClass("show");
    });
    $(".drpdwn-fg .dropdown-item").click(function () {
        $(this).toggleClass("check");
    });

</script>
<script>
    $(".field-tbl").on('click', '.remove-tr', function () {
        $(this).closest('tr').remove();
    });
</script>


<!-- import select -->
<script>
    $(document).ready(function(){
  $(".limitedNumbChosen").chosen({
		max_selected_options: 1,
    placeholder_text_multiple: "Search here"
	})
	.bind("chosen:maxselected", function (){
		// window.alert("You reached your limited number of selections which is 2 selections!");
	})

});
</script>
<script>
    $('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
</script>
<script>
  
  var startX, startWidth, $handle, $table, pressed = false;
  
  // mousedown
  $('.table-resizable .resize').on('mousedown', function(event) {
          // find index of 'td' in 'tr'
          let index = $(this).parent().index();
          // find 'th' according to the index value
          $handle = $(this).parents('table').find('th').eq(index);
          pressed = true;
          startX = event.pageX;
          startWidth = $handle.width();
          $table = $handle.closest('.table-resizable').addClass('resizing');
    });
  
  // mousemove
  $('.table-resizable th, .table-resizable td').on('mousemove', function(event) {
        if (pressed) {
          $handle.width(startWidth + (event.pageX - startX));
        }
    });
    
  // mouseup
  $('.table-resizable th, .table-resizable td').on('mouseup', function() {
        if (pressed) {
          $table.removeClass('resizing');
          pressed = false;
        }
    });
  
  // reset column width
  $('.table-resizable thead').on('dblclick', function() {
      // Reset column sizes on double click
      $(this).find('th').css('width', '');
    });
</script>
<script>
    $('.selected-num i').on('click', function () {
        $(this).closest(".selected-num").remove();
    });

    $(function () {

        $("#evnt-tab2").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $("#evnt-tab3").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $("#evnt-tab5").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
    });
</script>

</body>

</html>