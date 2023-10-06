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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet" />
</head>

<body class="ovrflw body-gray">
    
<?php include 'loader.php';?>

    <!-- Multi select box -->
    <style>
        .choices__inner {
            display: inline-block;
            vertical-align: top;
            width: 100%;
            background-color: #fff;
            padding: 0.5px 7.5px 0px;
            border: 1px solid #ebebeb;
            border-radius: 2.5px;
            font-size: 14px;
            min-height: 19px;
        }
        
        .choices {
            position: relative;
            margin-bottom: 0px;
        }
        
        .choices__input {
            display: inline-block;
            vertical-align: baseline;
            background-color: #fff;
            font-size: 14px;
            margin-bottom: 5px;
            border: 0;
            border-radius: 0;
            width: auto !important;
            padding: 6px 0px 2px 5px;
        }
        
        .choices__list--multiple .choices__item {
            display: inline-block;
            vertical-align: middle;
            border-radius: 39px;
            padding: 3px 9px;
            font-size: 11px;
            font-weight: 500;
            margin-right: 3.75px;
            margin-bottom: 3.75px;
            background-color: #3b65ef;
            border: 1px solid #3b65ef;
            color: #fff;
            word-break: break-all;
        }
        
        .choices[data-type*=select-multiple] .choices__button,
        .choices[data-type*=text] .choices__button {
            position: relative;
            display: inline-block;
            margin: 0 -4px 0 8px;
            padding-left: 16px;
            border-left: 1px solid #6e8ef9;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
            background-size: 8px;
            width: 8px;
            line-height: 1;
            opacity: .75;
            border-radius: 0;
        }
        /* .ticket-div .ticket-tab-pane .tab-pane{
            padding: 20px 0px;
        }
        .ticket-div .ticket-tab-pane .speaker-table {
            margin: 0px;
        } */
    </style>

    <div id="layout-wrapper">


        <header class="top-header">
            <div class="header-div">
                <a href="event.php">
                <div class="backtohome">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.99999 14.9916V12.4916M7.51666 2.36664L3.02499 5.86664C2.27499 6.44997 1.66666 7.69164 1.66666 8.63331V14.8083C1.66666 16.7416 3.24166 18.325 5.17499 18.325H14.825C16.7583 18.325 18.3333 16.7416 18.3333 14.8166V8.74997C18.3333 7.74164 17.6583 6.44997 16.8333 5.87497L11.6833 2.26664C10.5167 1.44997 8.64166 1.49164 7.51666 2.36664Z"
                                stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                </div>
                </a>
                <div class="header-title">
                    <h4>Conference for architects</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li><a href="event.php">Events</a> /</li>
                        <li>Event details</li>
                    </ul>
                </div>
            </div>
            <div class="header-right-btns">
                <a href="#"><button type="button"
                            class="btn btn-outline-secondary waves-effect waves-light btn-md text-uppercase br-50 small">
                            <svg width="20" height="20" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.70349 2.02734C1.58368 2.02734 0.675903 2.93513 0.675903 4.05493V14.8687C0.675903 15.9885 1.58368 16.8963 2.70349 16.8963H9.0397L8.87073 18.248H6.0828C5.70953 18.248 5.40694 18.5506 5.40694 18.9239C5.40694 19.2972 5.70953 19.5998 6.0828 19.5998H15.5449C15.9181 19.5998 16.2207 19.2972 16.2207 18.9239C16.2207 18.5506 15.9181 18.248 15.5449 18.248H12.7569L12.588 16.8963H18.9242C20.044 16.8963 20.9518 15.9885 20.9518 14.8687V4.05493C20.9518 2.93513 20.044 2.02734 18.9242 2.02734H2.70349ZM2.02763 4.05493C2.02763 3.68166 2.33022 3.37907 2.70349 3.37907H18.9242C19.2974 3.37907 19.6 3.68166 19.6 4.05493V12.8411H2.02763V4.05493ZM10.8138 15.5446C10.9931 15.5446 11.165 15.4734 11.2917 15.3466C11.4185 15.2199 11.4897 15.048 11.4897 14.8687C11.4897 14.735 11.4501 14.6044 11.3758 14.4932C11.3015 14.3821 11.196 14.2955 11.0725 14.2443C10.949 14.1932 10.8131 14.1798 10.682 14.2058C10.5509 14.2319 10.4304 14.2963 10.3359 14.3908C10.2414 14.4853 10.177 14.6058 10.151 14.7369C10.1249 14.868 10.1383 15.0039 10.1894 15.1274C10.2406 15.2509 10.3272 15.3564 10.4383 15.4307C10.5495 15.5049 10.6802 15.5446 10.8138 15.5446Z"
                                    fill="#263238" />
                            </svg>Preview
                        </button></a>
                <a href="published-event.php"><button type="button"
                            class="btn btn-primary btn-publish waves-effect waves-light btn-md text-uppercase br-50 small">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99996 1.6665C5.39996 1.6665 1.66663 5.39984 1.66663 9.99984C1.66663 14.5998 5.39996 18.3332 9.99996 18.3332C14.6 18.3332 18.3333 14.5998 18.3333 9.99984"
                                    stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.8334 9.1665L17.6667 2.33317M18.3334 5.6915V1.6665H14.3084" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Publish
                        </button></a>
            </div>
        </header>



        <div class="main-content-div">
            <div class="leftside-menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#nav1" role="tab" aria-selected="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 6H21" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 12H21" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 18H21" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 6H3.01" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 12H3.01" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 18H3.01" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            <span>Event details</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav2" role="tab" aria-selected="false" tabindex="-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                        stroke="#94949E" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 2V6" stroke="#94949E" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2V6" stroke="#94949E" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 10H21" stroke="#94949E" stroke-width="1.3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            <span>Agenda</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav3" role="tab" aria-selected="false" tabindex="-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 1C11.2044 1 10.4413 1.31607 9.87868 1.87868C9.31607 2.44129 9 3.20435 9 4V12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12V4C15 3.20435 14.6839 2.44129 14.1213 1.87868C13.5587 1.31607 12.7956 1 12 1Z"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M19 10V12C19 13.8565 18.2625 15.637 16.9497 16.9497C15.637 18.2625 13.8565 19 12 19C10.1435 19 8.36301 18.2625 7.05025 16.9497C5.7375 15.637 5 13.8565 5 12V10"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 19V23" stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 23H16" stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            <span>Speakers</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav4" role="tab" aria-selected="false" tabindex="-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 14.75L15 8.75M19.5 12.5C19.5 11.837 19.7634 11.2011 20.2322 10.7322C20.7011 10.2634 21.337 10 22 10V9C22 5 21 4 17 4H7C3 4 2 5 2 9V9.5C2.66304 9.5 3.29893 9.76339 3.76777 10.2322C4.23661 10.7011 4.5 11.337 4.5 12C4.5 12.663 4.23661 13.2989 3.76777 13.7678C3.29893 14.2366 2.66304 14.5 2 14.5V15C2 19 3 20 7 20H17C21 20 22 19 22 15C21.337 15 20.7011 14.7366 20.2322 14.2678C19.7634 13.7989 19.5 13.163 19.5 12.5Z"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M14.995 14.75H15.004M8.995 9.25H9.003" stroke="#94949E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            <span>Tickets</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav5" role="tab" aria-selected="false" tabindex="-1">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 21.5V19.5C17 18.4391 16.5786 17.4217 15.8284 16.6716C15.0783 15.9214 14.0609 15.5 13 15.5H5C3.93913 15.5 2.92172 15.9214 2.17157 16.6716C1.42143 17.4217 1 18.4391 1 19.5V21.5"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M9 11.5C11.2091 11.5 13 9.70914 13 7.5C13 5.29086 11.2091 3.5 9 3.5C6.79086 3.5 5 5.29086 5 7.5C5 9.70914 6.79086 11.5 9 11.5Z"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M23 21.4999V19.4999C22.9993 18.6136 22.7044 17.7527 22.1614 17.0522C21.6184 16.3517 20.8581 15.8515 20 15.6299"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16 3.62988C16.8604 3.85018 17.623 4.35058 18.1676 5.05219C18.7122 5.7538 19.0078 6.61671 19.0078 7.50488C19.0078 8.39305 18.7122 9.25596 18.1676 9.95757C17.623 10.6592 16.8604 11.1596 16 11.3799"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            <span>Sponsors</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav6" role="tab" aria-selected="false" tabindex="-1">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.625 6.78947V11.5263M19.375 6.78947V11.5263M21.266 5.65263V5.65263C21.7215 5.37828 22 4.88541 22 4.35371V3.69036C22 2.20451 20.7955 1 19.3096 1H3.69C2.20435 1 1 2.20435 1 3.69V4.35326C1 4.88522 1.27871 5.37829 1.73448 5.65263V5.65263C2.30557 5.99609 2.95903 6.17751 3.625 6.17751C4.29097 6.17751 4.94443 5.99609 5.51552 5.65263V5.65263C5.96714 5.38079 6.53242 5.38065 6.98395 5.65263V5.65263C7.55517 5.99629 8.20882 6.17783 8.875 6.17783C9.54118 6.17783 10.1948 5.99629 10.766 5.65263V5.65263C11.2176 5.38065 11.7829 5.38079 12.2345 5.65263V5.65263C12.8056 5.99619 13.4592 6.17767 14.1253 6.17767C14.7913 6.17767 15.4449 5.99619 16.016 5.65263V5.65263C16.4676 5.38065 17.0329 5.38079 17.4845 5.65263V5.65263C18.0556 5.99619 18.7092 6.17767 19.3753 6.17767C20.0413 6.17767 20.6949 5.99619 21.266 5.65263ZM17.325 11.5263H5.675C3.67297 11.5263 2.05 13.1493 2.05 15.1513V17.375C2.05 19.377 3.67297 21 5.675 21H17.325C19.327 21 20.95 19.377 20.95 17.375V15.1513C20.95 13.1493 19.327 11.5263 17.325 11.5263Z"
                                        stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            <span>Exhibitors</span>
                        </a>
                    </li>

                </ul>
                <div class="members-div">
                    <h5>Members</h5>
                    <div class="avatar-group float-start task-assigne">
                        <div class="avatar-group-item">
                            <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                            </a>
                        </div>
                        <div class="avatar-group-item">
                            <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                            </a>
                        </div>
                        <div class="avatar-group-item">
                            <a href="javascript: void(0);" class="d-inline-block" value="member-6">
                                <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xs">
                            </a>
                        </div>
                        <div class="avatar-group-item">
                            <a href="javascript: void(0);" class="d-inline-block">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-lightgray text-primary font-size-12">
                                            15+
                                        </span>
                                </div>
                            </a>
                        </div>

                        <div class="avatar-group-item ms-2">
                            <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#invite-members">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-lightgray text-black font-size-17">
                                            +
                                        </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



            </div>


            <div class="rightside-menu">
                <div class="tab-content">
                    <div class="tab-pane active" id="nav1" role="tabpanel">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-grp">
                                    <label class="form-label">Event name</label>
                                    <input class="form-control" type="text" placeholder="Enter here" value="English learning class tutorials 2023 ">
                                </div>
                           
                                <div class="form-grp">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Date & Time</label>
                                        <div class="form-check hr-format">
                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                    24-hour format <i class="bx bx-info-circle" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="24-hour format"></i>
                                                </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <div class="input-group" id="datepicker3">
                                                <input type="text" class="form-control" placeholder="dd M, yyyy" value="01 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                <span class="input-group-text"><img
                                                            src="assets/images/input-cal.svg" alt=""></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="input-group" id="timepicker-input-group1">
                                                <input id="timepicker" type="text" class="form-control" data-provide="timepicker">
                                                <span class="input-group-text"><img
                                                            src="assets/images/input-time.svg" alt=""></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="input-group" id="datepicker3">
                                                <input type="text" class="form-control" placeholder="dd M, yyyy" value="05 Sep, 2023" data-date-format="dd M, yyyy" data-date-container='#datepicker3' data-provide="datepicker" data-date-autoclose="true">

                                                <span class="input-group-text"><img
                                                            src="assets/images/input-cal.svg" alt=""></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="input-group" id="timepicker-input-group2">
                                                <input id="timepicker2" type="text" class="form-control" data-provide="timepicker">
                                                <span class="input-group-text"><img
                                                            src="assets/images/input-time.svg" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <label class="form-label">Summery</label>
                                    <textarea id="formmessage" class="form-control" rows="3" placeholder="Use relevant keywords in your summary that'll help your event site be quickly found online"></textarea>

                                </div>
                                <div class="form-grp">
                                    <label class="form-label">Description</label>
                                    <textarea id="summernote" class="form-control"></textarea>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Category</label>
                                            <div class="select-inp">
                                                <select class="form-control">
        
                                                        <option value="AK">Others</option>
                                                        <option value="HI">Category1</option>
                                                        <option value="CA">Category2</option>
                                                        <option value="NV">Category3</option>
                                                    </select>
                                                <i class="fas fa-chevron-down"></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Support Email</label>

                                            <input type="text" value="" class="form-control">



                                        </div>
                                    </div>
                                </div>



                                <div class="form-grp">
                                    <label class="form-label">Tags</label>
                                    <div class="bs-example form-control mb-1">
                                        <input type="text" id="#inputTag" value="" data-role="tagsinput">
                                    </div>
                                    <span>Use keywords or phrases that describe your event to help everyone find it
                                            easily.</span>

                                </div>
                                <div class="form-grp social-inputgrp">
                                    <label class="form-label">Social media</label>

                                    <div class="input-group">

                                        <select class="form-select light-btn">
                                                <option value="BT" selected="">Twitter</option>
                                                <option value="ET">Facebook</option>
                                                <option value="LT">Instagram</option>
                                            </select>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" id="dropdown-on-both" placeholder="https://www.twitter.com/xyz">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">ADD</button>
                                        </div>
                                    </div>
                                    <div class="social-media-out my-2">
                                        <div class="input-group">
                                            <div class="input-group-text bg-primary text-white font-size-15"><i class="bx bxl-facebook"></i></div>
                                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                                placeholder="https://www.facebook.com/xyz">
                                                <button class="bx bx-trash delete-icn"></button>
                                        </div>
                                        <div class="input-group my-2">
                                            <div class="input-group-text bg-pink text-white font-size-15"><i class="bx bxl-instagram"></i></div>
                                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                                placeholder="https://www.instagram.com/xyz">
                                                <button class="bx bx-trash delete-icn"></button>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-text bg-info text-white font-size-15"><i class="bx bxl-twitter"></i></div>
                                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                                placeholder="https://www.twitter.com/xyz">
                                                <button class="bx bx-trash delete-icn"></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-5 location-map">

                                <label class="form-label">Location</label>
                                <div class="loc-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250534.83887162295!2d75.65630090912454!3d11.142629584499371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65938563d4747%3A0x32150641ca32ecab!2sKozhikode%2C%20Kerala!5e0!3m2!1sen!2sin!4v1692187009371!5m2!1sen!2sin"
                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <div class="input-group search-inpt">

                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Please enter the event location">
                                        <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nav2" role="tabpanel">
                        <div class="row agenda-div">
                            <div class="col-md-12">
                                <div class="agenda-header">
                                    <h4>Agenda</h4>
                                    <div class="d-flex align-items-center">
                                        <button type="button"
                                            class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1_2621)">
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                        stroke="#263238" stroke-width="1.35937" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8.97803 8.44629V14.5635" stroke="#263238"
                                                        stroke-width="1.35937" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369"
                                                        stroke="#263238" stroke-width="1.35937" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                        stroke="#263238" stroke-width="1.35937" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1_2621">
                                                        <rect width="16.3125" height="16.3125" fill="white"
                                                            transform="translate(0.821289 0.290039)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>Export
                                        </button>
                                        <button type="button"
                                            class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small mx-2">
                                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                                    stroke="#263238" stroke-width="1.36" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>Import
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#add-session">
                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Add
                                            Session
                                        </button>
                                    </div>
                                </div>
                           
                                    <hr class="agenda-bottom-hr">
                                    <div class="agenda-calendar">
                                        <div data-simplebar>
                                            <ul class="verti-timeline list-unstyled">
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">

                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="agenda-days">
                                                            <h5>Day 1</h5>
                                                        </div>
                                                        <div class="event-agenda">
                                                            <div class="agenda-box">
                                                                <div class="agenda-first">
                                                                    <div>
                                                                        <h5>Wed</h5>
                                                                        <h4>28</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-second">
                                                                    <div>
                                                                        <h6><i class="fas fa-clock"></i>09:00 - 10:30
                                                                        </h6>
                                                                        <h6 class="mb-0"><i
                                                                                class="fas fa-map-marker-alt"></i>Aishwarya
                                                                            Banquet Hall,calicut</h6>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-third">
                                                                    <h4>Project Welcome note </h4>
                                                                </div>
                                                                <div class="agenda-action">
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-light1 text-uppercase px-3"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-session">Edit</button>
                                                                        <button type="button"
                                                                            class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                        </button>


                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="agenda-box">
                                                                <div class="agenda-first">
                                                                    <div>
                                                                        <h5>Wed</h5>
                                                                        <h4>28</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-second">
                                                                    <div>
                                                                        <h6><i class="fas fa-clock"></i>09:00 - 10:30
                                                                        </h6>
                                                                        <h6 class="mb-0"><i
                                                                                class="fas fa-map-marker-alt"></i>Aishwarya
                                                                            Banquet Hall,calicut</h6>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-third">
                                                                    <h4>Speaking about the politics of the nation
                                                                        related topics </h4>
                                                                </div>
                                                                <div class="agenda-action">
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-light1 text-uppercase px-3"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-session">Edit</button>
                                                                        <button type="button"
                                                                            class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                        </button>


                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="agenda-box">
                                                                <div class="agenda-first">
                                                                    <div>
                                                                        <h5>Wed</h5>
                                                                        <h4>28</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-second">
                                                                    <div>
                                                                        <h6><i class="fas fa-clock"></i>10:30 - 12:00
                                                                        </h6>
                                                                        <h6 class="mb-0"><i
                                                                                class="fas fa-map-marker-alt"></i>Aishwarya
                                                                            Banquet Hall,calicut</h6>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-third">
                                                                    <h4>Debate about sports </h4>
                                                                </div>
                                                                <div class="agenda-action">
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-light1 text-uppercase px-3"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-session">Edit</button>
                                                                        <button type="button"
                                                                            class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                        </button>


                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="agenda-box">
                                                                <div class="agenda-first">
                                                                    <div>
                                                                        <h5>Wed</h5>
                                                                        <h4>28</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-second">
                                                                    <div>
                                                                        <h6><i class="fas fa-clock"></i>12:00 - 01:00
                                                                        </h6>
                                                                        <h6 class="mb-0"><i
                                                                                class="fas fa-map-marker-alt"></i>Aishwarya
                                                                            Banquet Hall,calicut</h6>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-third">
                                                                    <h4>Lunch Break</h4>
                                                                </div>
                                                                <div class="agenda-action">
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-light1 text-uppercase px-3"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-session">Edit</button>
                                                                        <button type="button"
                                                                            class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                        </button>


                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">

                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="agenda-days">
                                                            <h5>Day 2</h5>
                                                        </div>
                                                        <div class="event-agenda">
                                                            <div class="agenda-box">
                                                                <div class="agenda-first">
                                                                    <div>
                                                                        <h5>Thu</h5>
                                                                        <h4>29</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-second">
                                                                    <div>
                                                                        <h6><i class="fas fa-clock"></i>09:00 - 10:30
                                                                        </h6>
                                                                        <h6 class="mb-0"><i
                                                                                class="fas fa-map-marker-alt"></i>Aishwarya
                                                                            Banquet Hall,calicut</h6>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-third">
                                                                    <h4>Project Welcome note </h4>
                                                                </div>
                                                                <div class="agenda-action">
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                        <button type="button"
                                                                            class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                            <a class="dropdown-item" href="#">View</a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="agenda-box">
                                                                <div class="agenda-first">
                                                                    <div>
                                                                        <h5>Thu</h5>
                                                                        <h4>29</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-second">
                                                                    <div>
                                                                        <h6><i class="fas fa-clock"></i>10:30 - 12:00
                                                                        </h6>
                                                                        <h6 class="mb-0"><i
                                                                                class="fas fa-map-marker-alt"></i>Aishwarya
                                                                            Banquet Hall,calicut</h6>
                                                                    </div>

                                                                </div>
                                                                <div class="agenda-third">
                                                                    <h4>Speaking about the politics of the nation
                                                                        related topics </h4>
                                                                </div>
                                                                <div class="agenda-action">
                                                                    <div class="btn-group">
                                                                        <button type="button"
                                                                            class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                        <button type="button"
                                                                            class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-chevron-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                            <a class="dropdown-item" href="#">View</a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nav3" role="tabpanel">
                        <div class="row speaker-div">
                            <div class="col-md-12">
                                <div class="empty-event">
                                    <img src="assets/images/speaker.gif" alt="">
                                    <h2>Invite Speakers</h2>
                                    <p>Get exciting speakers on board. Fill out their bio so that microsite visitors can learn about them.</p>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50" data-bs-toggle="modal" data-bs-target="#invite-speaker">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>INVITE
                                                            SPEAKERS
                                                        </button>
                                </div>
                            </div>
                        </div>
                        <div class="row speaker-div">
                            <div class="col-md-12">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#invite-speaker">
                                                <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD SPEAKERS
                                            </button>
                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1_2621)">
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_1_2621">
                                                    <rect width="16.3125" height="16.3125" fill="white" transform="translate(0.821289 0.290039)"/>
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
                                    <div class="input-group search-inpt">

                                        <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search speakers">
                                        <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                    </div>
                                </div>
                                <div class="event-table speaker-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                    <th width="30%">Name & Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Profile Status</th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
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
                                                                <path d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>Speaker
                                                        </button>
                                                    </td>
                                                    <td class="status">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
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
                                                            <button type="button" class="btn btn-light1 text-uppercase px-3" data-bs-toggle="modal" data-bs-target="#invite-speaker">Edit</button>
                                                            <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Delete</a>


                                                            </div>
                                                        </div>
                                                    </td>


                                                </tr>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
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
                                                                <path d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>Speaker
                                                        </button>
                                                    </td>
                                                    <td class="status">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
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
                                                            <button type="button" class="btn btn-light1 text-uppercase px-3" data-bs-toggle="modal" data-bs-target="#invite-speaker">Edit</button>
                                                            <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Delete</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
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
                                                                <path d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>Speaker
                                                        </button>
                                                    </td>
                                                    <td class="status">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
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
                                                            <button type="button" class="btn btn-light1 text-uppercase px-3" data-bs-toggle="modal" data-bs-target="#invite-speaker">Edit</button>
                                                            <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Delete</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
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
                                                                <path d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749" stroke="#263238" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>Speaker
                                                        </button>
                                                    </td>
                                                    <td class="status">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
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
                                                            <button type="button" class="btn btn-light1 text-uppercase px-3" data-bs-toggle="modal" data-bs-target="#invite-speaker">Edit</button>
                                                            <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Delete</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
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
                    </div>
                    <div class="tab-pane" id="nav4" role="tabpanel">
                        <div class="row ticket-div">
                            <div class="col-md-12">
                                <div class="empty-event">
                                    <img src="assets/images/ticket.gif" alt="">
                                    <h2>Add ticket</h2>
                                    <p>Quickly add a ticket class with a name, price and quantity.</p>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50" data-bs-toggle="modal" data-bs-target="#add-ticket">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                            TICKET
                                                            CLASS
                                                        </button>
                                </div>
                            </div>
                        </div>
                        <div class="row ticket-div">
                            <div class="tab-content">
                                <div class="tab-pane active ticket-tab-pane" id="nav4" role="tabpanel">
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#ticket-tab1" role="tab">
                                        <span>Ticket Classes</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ticket-tab2" role="tab">
                                        <span>Payments</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ticket-tab3" role="tab">
                                        <span>Promotional code</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ticket-tab4" role="tab">
                                        <span>Cancellation policy</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ticket-tab5" role="tab">
                                        <span>Registration form</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ticket-tab6" role="tab">
                                        <span>Advanced Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ticket-tab7" role="tab">
                                        <span>Settings</span>
                                        </a>
                                    </li>
                                    </ul>
                                    <hr class="nav-bottom-hr" />
                                    <div class="tab-content pb-3">
                                    <div class="tab-pane active" id="ticket-tab1" role="tabpanel">
                                        <div class="row ticket-div">
                                        <div class="col-md-12">
                                            <div class="agenda-header">
                                            <h4>Ticket Classes (1)</h4>
                                            <div class="ticket-rightside">
                                                <h6>
                                                Preapprove Registrations
                                                <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Preapprove Registrations"></i>
                                                </h6>
                                                <div class="form-check form-switch form-switch-md">
                                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd" />
                                                </div>
                                                <button type="button"
                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small me-2">
                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1_2621)">
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238"
                                                        stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369"
                                                        stroke="#263238" stroke-width="1.35937" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238"
                                                        stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_1_2621">
                                                        <rect width="16.3125" height="16.3125" fill="white"
                                                        transform="translate(0.821289 0.290039)" />
                                                    </clipPath>
                                                    </defs>
                                                </svg>Export
                                                </button>
                                                <button type="button"
                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small me-2">
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                                    stroke="#263238" stroke-width="1.36" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>Import
                                                </button>
                                                <button type="button"
                                                class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small"
                                                data-bs-toggle="modal" data-bs-target="#add-ticket">
                                                <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Add
                                                Ticket class
                                                </button>

                                            </div>
                                            </div>
                                            <div class="event-table speaker-table">
                                            <div class="table-responsive">
                                                <table id="event-table" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Sales</th>
                                                    <th>End Date</th>
                                                    <th>Last Modify by</th>
                                                    <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td class="ticket-name">
                                                        <h6>
                                                        Premium <span><i class="fas fa-circle"></i>Open</span>
                                                        </h6>
                                                    </td>
                                                    <td class="ticket-price">
                                                        <span>$100.00</span>
                                                    </td>
                                                    <td>0/100</td>
                                                    <td>Aug 23, 2023</td>
                                                    <td>
                                                        <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle" />
                                                        <div class="speaker-name-email">
                                                            <h6>James Fernandas</h6>
                                                            <span>jamesfernand@gmail.com</span>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                        <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                            data-bs-toggle="modal" data-bs-target="#add-ticket">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td class="ticket-name">
                                                        <h6>
                                                        Premium <span><i class="fas fa-circle"></i>Open</span>
                                                        </h6>
                                                    </td>
                                                    <td class="ticket-price">
                                                        <span>$100.00</span>
                                                    </td>
                                                    <td>0/100</td>
                                                    <td>Aug 23, 2023</td>
                                                    <td>
                                                        <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle" />
                                                        <div class="speaker-name-email">
                                                            <h6>James Fernandas</h6>
                                                            <span>jamesfernand@gmail.com</span>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                        <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                            data-bs-toggle="modal" data-bs-target="#add-ticket">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td class="ticket-name">
                                                        <h6>
                                                        Premium <span><i class="fas fa-circle"></i>Open</span>
                                                        </h6>
                                                    </td>
                                                    <td class="ticket-price">
                                                        <span>$100.00</span>
                                                    </td>
                                                    <td>0/100</td>
                                                    <td>Aug 23, 2023</td>
                                                    <td>
                                                        <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle" />
                                                        <div class="speaker-name-email">
                                                            <h6>James Fernandas</h6>
                                                            <span>jamesfernand@gmail.com</span>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                        <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                            data-bs-toggle="modal" data-bs-target="#add-ticket">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td class="ticket-name">
                                                        <h6>
                                                        Premium <span><i class="fas fa-circle"></i>Open</span>
                                                        </h6>
                                                    </td>
                                                    <td class="ticket-price">
                                                        <span>$100.00</span>
                                                    </td>
                                                    <td>0/100</td>
                                                    <td>Aug 23, 2023</td>
                                                    <td>
                                                        <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle" />
                                                        <div class="speaker-name-email">
                                                            <h6>James Fernandas</h6>
                                                            <span>jamesfernand@gmail.com</span>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                        <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                            data-bs-toggle="modal" data-bs-target="#add-ticket">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
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
                                    </div>
                                    <div class="tab-pane" id="ticket-tab2" role="tabpanel"></div>
                                    <div class="tab-pane" id="ticket-tab3" role="tabpanel"></div>
                                    <div class="tab-pane" id="ticket-tab4" role="tabpanel"></div>
                                    <div class="tab-pane" id="ticket-tab5" role="tabpanel">
                                        <div class="editformbtn">
                                        <a href="form-build.html"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                            <span>edit form</span>
                                        </a>
                                        </div>
                                        <section id="DYNAMICFORMVIEW">
                                        <div class="form">
                                            <div class="title">Ticket Information</div>
                                            <div class="formbuilder">
                                            <div class="ticketnumber">
                                                <div id="TICKETNUMBER">Ticket#{{ticketNumber}}</div>
                                            </div>
                                            <div class="formdroppable">
                                                <div class="form-control">
                                                <label for="">First name</label><small class="required">*</small>
                                                <input type="text" placeholder="Enter your first name" name="" required />
                                                </div>
                                                <div class="form-control">
                                                <label for="">Last name</label><small class="required">*</small>
                                                <input type="text" placeholder="Enter your last name" name="" required />
                                                </div>
                                                <div class="form-control widthfull">
                                                <label for="">Email</label><small class="required">*</small>
                                                <input type="email" placeholder="Enter your email address" name="" required />
                                                </div>
                                                <div class="form-control widthfull">
                                                <label for="">Company name</label><small class="required">*</small>
                                                <input type="text" placeholder="Enter your company name" name="" required />
                                                </div>
                                                <div class="form-control">
                                                <label for="">Designation</label><small class="required">*</small>
                                                <input type="text" placeholder="Enter your designation" name="" required />
                                                </div>
                                                <div class="form-control">
                                                <label for="">Mobile</label><small class="required">*</small>
                                                <input type="text" placeholder="Enter your mobile number" name="" required />
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </section>
                                    </div>
                                    <div class="tab-pane" id="ticket-tab6" role="tabpanel"></div>
                                    <div class="tab-pane" id="ticket-tab7" role="tabpanel"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nav5" role="tabpanel">
                        <div class="row sponser-div">
                            <div class="col-md-12">
                                <div class="empty-event">
                                    <img src="assets/images/sponser.gif" alt="">
                                    <h2>No sponsors yet</h2>
                                    <p>Add a sponsor manually, if available, or set up sponsorship categories and related benefits to be displayed on the event microsite.</p>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50" data-bs-toggle="modal" data-bs-target="#add-sponser">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                            SPONSOR
                                                        </button>
                                </div>
                            </div>
                        </div>
                        <div class="row sponser-div">
                            <div class="col-md-12">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#add-sponser">
                                                <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Add Sponsor
                                            </button>
                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1_2621)">
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238" stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_1_2621">
                                                    <rect width="16.3125" height="16.3125" fill="white" transform="translate(0.821289 0.290039)"/>
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
                                    <div class="input-group search-inpt">

                                        <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search speakers">
                                        <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                                    </div>
                                </div>
                                <div class="event-table speaker-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                    <th>Sponsor</th>
                                                    <th>Name & Email</th>
                                                    <th>Sponsor Type</th>
                                                    <th>Amount</th>
                                                    <th>Website</th>
                                                    <th>Description</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                    <td>
                                                        <div class="responsible">
                                                            <img src="assets/images/sponsor-logo.svg" alt="" class="spo-logo">


                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="responsible">
                                                            <div class="speaker-name-email">
                                                                <h6>Company Name</h6>
                                                                <span>jamesfernand@gmail.com</span>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                            Basic
                                                        </button>
                                                    </td>
                                                    <td>₹2,000.00</td>

                                                    <td>
                                                        www.website.com
                                                    </td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                    <td>
                                                        <div class="responsible">
                                                            <img src="assets/images/sponsor-logo.svg" alt="" class="spo-logo">


                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="responsible">
                                                            <div class="speaker-name-email">
                                                                <h6>Company Name</h6>
                                                                <span>jamesfernand@gmail.com</span>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                            Basic
                                                        </button>
                                                    </td>
                                                    <td>₹2,000.00</td>

                                                    <td>
                                                        www.website.com
                                                    </td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                    <td>
                                                        <div class="responsible">
                                                            <img src="assets/images/sponsor-logo.svg" alt="" class="spo-logo">


                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="responsible">
                                                            <div class="speaker-name-email">
                                                                <h6>Company Name</h6>
                                                                <span>jamesfernand@gmail.com</span>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                            Basic
                                                        </button>
                                                    </td>
                                                    <td>₹2,000.00</td>

                                                    <td>
                                                        www.website.com
                                                    </td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
                                                </tr>
                                                <tr>
                                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                    <td>
                                                        <div class="responsible">
                                                            <img src="assets/images/sponsor-logo.svg" alt="" class="spo-logo">


                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="responsible">
                                                            <div class="speaker-name-email">
                                                                <h6>Company Name</h6>
                                                                <span>jamesfernand@gmail.com</span>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small">
                                                            Basic
                                                        </button>
                                                    </td>
                                                    <td>₹2,000.00</td>

                                                    <td>
                                                        www.website.com
                                                    </td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
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
                        </div>
                    </div>
                    <div class="tab-pane" id="nav6" role="tabpanel">
                        <div class="row booth-div">
                            <div class="col-md-12">
                                <div class="empty-event">
                                    <img src="assets/images/booth.gif" alt="">
                                    <h2>Set up booth categories</h2>
                                    <p>Create categories for booths with different facilities.</p>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50" data-bs-toggle="modal" data-bs-target="#add-booth-cat">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD BOOTH
                                                            CATEGORY
                                                        </button>
                                </div>
                            </div>
                        </div>
                        <div class="row booth-div">
                            <div class="tab-content">

                                <div class="tab-pane active ticket-tab-pane" id="nav6" role="tabpanel">
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#exhibitor-tab1" role="tab">
                                                <span>Booth Category</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#exhibitor-tab2" role="tab">
                                                <span>Booths</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#exhibitor-tab3" role="tab">
                                                <span>Exhibitors</span>
                                            </a>
                                        </li>

                                    </ul>
                                    <hr class="nav-bottom-hr" />
                                    <div class="tab-content pb-3">
                                        <div class="tab-pane active" id="exhibitor-tab1" role="tabpanel">
                                            <div class="row booth-div">
                                                <div class="col-md-12">
                                                    <div class="speaker-header">
                                                        <div class="speaker-btns">
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small"
                                                                data-bs-toggle="modal" data-bs-target="#add-booth-cat">
                                                                <i
                                                                    class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                                BOOTH CATEGORY
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1_2621)">
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238"
                                                                            stroke-width="1.35937" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1_2621">
                                                                            <rect width="16.3125" height="16.3125" fill="white"
                                                                                transform="translate(0.821289 0.290039)" />
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
                                                        <div class="input-group search-inpt">

                                                            <input type="text" class="form-control ps-3"
                                                                id="inlineFormInputGroupUsername" placeholder="Search speakers">
                                                            <div class="input-group-text bg-white"><img
                                                                    src="assets/images/search.svg" alt=""></div>

                                                        </div>
                                                    </div>
                                                    <div class="event-table speaker-table">
                                                        <div class="table-responsive">
                                                            <table id="event-table" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="40px"><input class="form-check-input"
                                                                                type="checkbox" id="formCheck1"></th>
                                                                        <th>Name</th>
                                                                        <th>Price</th>
                                                                        <th>Booked Count</th>
                                                                        <th>Dimensions</th>
                                                                        <th>Facilities</th>
                                                                        <th></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                        <td>Expo Booth</td>
                                                                        <td>Free</td>
                                                                        <td>0</td>
                                                                        <td>100 ft x 100 ft</td>
                                                                        <td>2 Exhibitor passes, 2 Videos, 2 Collateral, Lead list
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                        <td>Expo Booth</td>
                                                                        <td>Free</td>
                                                                        <td>0</td>
                                                                        <td>100 ft x 100 ft</td>
                                                                        <td>2 Exhibitor passes, 2 Videos, 2 Collateral, Lead list
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                        <td>Expo Booth</td>
                                                                        <td>Free</td>
                                                                        <td>0</td>
                                                                        <td>100 ft x 100 ft</td>
                                                                        <td>2 Exhibitor passes, 2 Videos, 2 Collateral, Lead list
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                        <td>Expo Booth</td>
                                                                        <td>Free</td>
                                                                        <td>0</td>
                                                                        <td>100 ft x 100 ft</td>
                                                                        <td>2 Exhibitor passes, 2 Videos, 2 Collateral, Lead list
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                        </div>
                                        <div class="tab-pane" id="exhibitor-tab2" role="tabpanel">
                                            <div class="row booth-div booth-content-hide">
                                                <div class="col-md-12">
                                                    <div class="empty-event">
                                                        <img src="assets/images/booth.gif" alt="">
                                                        <h2>Exhibitor booths</h2>
                                                        <p>Create booths for exhibitors and manage available and assigned booths
                                                            here.</p>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50"
                                                            data-bs-toggle="modal" data-bs-target="#add-booth">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                            BOOTH

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row booth-div booth-content-show" style="display:none">
                                                <div class="col-md-12">
                                                    <div class="speaker-header">
                                                        <div class="speaker-btns">
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small"
                                                                data-bs-toggle="modal" data-bs-target="#add-booth">
                                                                <i
                                                                    class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                                BOOTH
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1_2621)">
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238"
                                                                            stroke-width="1.35937" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1_2621">
                                                                            <rect width="16.3125" height="16.3125" fill="white"
                                                                                transform="translate(0.821289 0.290039)" />
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
                                                        <div class="input-group search-inpt">

                                                            <input type="text" class="form-control ps-3"
                                                                id="inlineFormInputGroupUsername" placeholder="Search speakers">
                                                            <div class="input-group-text bg-white"><img
                                                                    src="assets/images/search.svg" alt=""></div>

                                                        </div>
                                                    </div>
                                                    <div class="event-table speaker-table">
                                                        <div class="table-responsive">
                                                            <table id="event-table" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="40px"><input class="form-check-input"
                                                                                type="checkbox" id="formCheck1"></th>
                                                                        <th>Booth Id</th>
                                                                        <th>Category</th>
                                                                        <th>Exhibitor</th>
                                                                        <th>Status</th>
                                                                        <th>Credit Status</th>
                                                                        <th></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                        <td>123</td>
                                                                        <td>category</td>
                                                                        <td><div class="exhibitor-name">
                                                                            <i class="bx bx-store-alt"></i> Exhibitor
                                                                        </div></td>
                                                                        <td><span class="booth-status"><i class="fas fa-circle"></i>Available</span></td>
                                                                        <td><span class="booth-status booth-creditstatus"><i class="fas fa-circle"></i>Applied</span></td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                            id="formCheck1"></td>
                                                                    <td>123</td>
                                                                    <td>category</td>
                                                                    <td><div class="exhibitor-name">
                                                                        <i class="bx bx-store-alt"></i> Exhibitor
                                                                    </div></td>
                                                                    <td><span class="booth-status"><i class="fas fa-circle"></i>Available</span></td>
                                                                    <td><span class="booth-status booth-creditstatus"><i class="fas fa-circle"></i>Applied</span></td>
                                                                    <td class="text-end">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                            <button type="button"
                                                                                class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                            id="formCheck1"></td>
                                                                    <td>123</td>
                                                                    <td>category</td>
                                                                    <td><div class="exhibitor-name">
                                                                        <i class="bx bx-store-alt"></i> Exhibitor
                                                                    </div></td>
                                                                    <td><span class="booth-status"><i class="fas fa-circle"></i>Available</span></td>
                                                                    <td><span class="booth-status booth-creditstatus"><i class="fas fa-circle"></i>Applied</span></td>
                                                                    <td class="text-end">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                            <button type="button"
                                                                                class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                            id="formCheck1"></td>
                                                                    <td>123</td>
                                                                    <td>category</td>
                                                                    <td><div class="no-exhibitor">
                                                                        <button type="button" class="btn btn-primary btn-ex waves-effect waves-light btn-sm small" data-bs-toggle="modal" data-bs-target="#add-exhibitor">
                                                                            <i class="bx bx-plus-circle me-1"></i> Add Exhibitor
                                                                        </button>
                                                                    
                                                                    </div></td>
                                                                    <td><span class="booth-status"><i class="fas fa-circle"></i>Available</span></td>
                                                                    <td><span class="booth-status booth-creditstatus"><i class="fas fa-circle"></i>Applied</span></td>
                                                                    <td class="text-end">
                                                                        <div class="btn-group">
                                                                            <button type="button"
                                                                                class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                            <button type="button"
                                                                                class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                        </div>
                                        <div class="tab-pane" id="exhibitor-tab3" role="tabpanel">
                                            <div class="row booth-div exhibitor-content-hide">
                                                <div class="col-md-12">
                                                    <div class="empty-event">
                                                        <img src="assets/images/booth.gif" alt="">
                                                        <h2>Add Exhibitor</h2>
                                                        <p>Add exhibitors to the event to list them in the event microsite.</p>
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50"
                                                            data-bs-toggle="modal" data-bs-target="#add-exhibitor">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                            Exhibitor

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row booth-div exhibitor-content-show" style="display:none">
                                                <div class="col-md-12">
                                                    <div class="speaker-header">
                                                        <div class="speaker-btns">
                                                            <button type="button"
                                                                class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small"
                                                                data-bs-toggle="modal" data-bs-target="#add-exhibitor">
                                                                <i
                                                                    class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD
                                                                EXHIBITOR
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_1_2621)">
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238"
                                                                            stroke-width="1.35937" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165"
                                                                            stroke="#263238" stroke-width="1.35937"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1_2621">
                                                                            <rect width="16.3125" height="16.3125" fill="white"
                                                                                transform="translate(0.821289 0.290039)" />
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
                                                        <div class="input-group search-inpt">

                                                            <input type="text" class="form-control ps-3"
                                                                id="inlineFormInputGroupUsername" placeholder="Search speakers">
                                                            <div class="input-group-text bg-white"><img
                                                                    src="assets/images/search.svg" alt=""></div>

                                                        </div>
                                                    </div>
                                                    <div class="event-table speaker-table">
                                                        <div class="table-responsive">
                                                            <table id="event-table" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="40px"><input class="form-check-input"
                                                                                type="checkbox" id="formCheck1"></th>
                                                                        <th>Exhibitor</th>
                                                                        <th>Category</th>
                                                                        <th>Booth</th>
                                                                        <th>Booth Members</th>
                                                                        <th>Booth Owner</th>
                                                                        <th></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                                <td><div class="exhibitor-name">
                                                                                    <i class="bx bx-store-alt"></i> Exhibitor
                                                                                </div></td>
                                                                        <td>
                                                                            <div class="exhibitor-cat">
                                                                                <h5>category</h5><span>Free</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>Booth1</td>
                                                                        <td>1/2</td>
                                                                        <td>
                                                                            <div class="responsible">
                                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                <div class="speaker-name-email">
                                                                                    <h6>James Fernandas</h6>
                                                                                    <span>jamesfernand@gmail.com</span>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                                <td><div class="exhibitor-name">
                                                                                    <i class="bx bx-store-alt"></i> Exhibitor
                                                                                </div></td>
                                                                        <td>
                                                                            <div class="exhibitor-cat">
                                                                                <h5>category</h5><span>Free</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>Booth1</td>
                                                                        <td>1/2</td>
                                                                        <td>
                                                                            <div class="responsible">
                                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                <div class="speaker-name-email">
                                                                                    <h6>James Fernandas</h6>
                                                                                    <span>jamesfernand@gmail.com</span>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                                <td><div class="exhibitor-name">
                                                                                    <i class="bx bx-store-alt"></i> Exhibitor
                                                                                </div></td>
                                                                        <td>
                                                                            <div class="exhibitor-cat">
                                                                                <h5>category</h5><span>Free</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>Booth1</td>
                                                                        <td>1/2</td>
                                                                        <td>
                                                                            <div class="responsible">
                                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                <div class="speaker-name-email">
                                                                                    <h6>James Fernandas</h6>
                                                                                    <span>jamesfernand@gmail.com</span>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <td><input class="form-check-input" type="checkbox"
                                                                                id="formCheck1"></td>
                                                                                <td><div class="exhibitor-name">
                                                                                    <i class="bx bx-store-alt"></i> Exhibitor
                                                                                </div></td>
                                                                        <td>
                                                                            <div class="exhibitor-cat">
                                                                                <h5>category</h5><span>Free</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>Booth1</td>
                                                                        <td>1/2</td>
                                                                        <td>
                                                                            <div class="responsible">
                                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                <div class="speaker-name-email">
                                                                                    <h6>James Fernandas</h6>
                                                                                    <span>jamesfernand@gmail.com</span>
                                                                                </div>

                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="btn btn-light1 text-uppercase px-3">Edit</button>
                                                                                <button type="button"
                                                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                                                    data-bs-toggle="dropdown" aria-expanded="false">
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



    <!-- Modal -->

    <div class="modal fade" id="invite-speaker" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Speakers</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body user-sqr">
                   <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp mb-1">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp mb-1">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Feature this speaker
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label class="form-label">Country</label>
                                    <div class="select-inp">
                                        <select class="form-control">
            
                                                <option value="AK">India</option>
                                                <option value="HI">Usa</option>
            
                                            </select>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
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
                    <div class="col-md-4">
                        <div class="form-grp">
                            <label class="form-label">Role</label>
                            <div class="select-inp">
                                <select class="form-control">
    
                                        <option value="AK">Speaker</option>
                                        <option value="HI">Guest Speaker</option>
    
                                    </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-grp">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-grp">
                            <label class="form-label">Organization</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-grp">
                            <label class="form-label">Skills</label>
                            <div class="bs-example form-control mb-1">
                                <input type="text" id="#inputTag" value="" data-role="tagsinput">
                            </div>
                            <span>Use space to separate multiple skills</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-grp">
                            <label class="form-label">Speaker Description</label>
                            <textarea id="summernote" class="form-control"></textarea>
                        </div>
                    </div>
                    
                   </div>
                   <div class="row">
                     

                       <div class="col-md-6">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-grp">
                                       <label class="form-label">Telephone No</label>
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-grp">
                                       <label class="form-label">Alternate Telephone No</label>
                                       <input type="text" class="form-control">
                                   </div>
                               </div>
                           </div>

                       </div>
                       <div class="col-md-6">
                        <div class="form-grp social-inputgrp">
                            <label class="form-label">Social Pages / Handles</label>

                            <div class="input-group">

                                <select class="form-select light-btn">
                                    <option value="BT" selected="">Twitter</option>
                                    <option value="ET">Facebook</option>
                                    <option value="LT">Instagram</option>
                                </select>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    id="dropdown-on-both" placeholder="https://www.twitter.com/xyz">
                                <div class="input-group-append">
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light text-uppercase">ADD</button>
                                </div>
                            </div>
                            <div class="social-media-out social-media-overflw my-2">
                                <div class="input-group">
                                    <div class="input-group-text bg-primary text-white font-size-15"><i
                                            class="bx bxl-facebook"></i></div>
                                    <input type="text" class="form-control" id="autoSizingInputGroup"
                                        placeholder="https://www.facebook.com/xyz">
                                        <button class="bx bx-trash delete-icn"></button>
                                </div>
                                <div class="input-group my-2">
                                    <div class="input-group-text bg-pink text-white font-size-15"><i
                                            class="bx bxl-instagram"></i></div>
                                    <input type="text" class="form-control" id="autoSizingInputGroup"
                                        placeholder="https://www.instagram.com/xyz">
                                        <button class="bx bx-trash delete-icn"></button>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-text bg-info text-white font-size-15"><i
                                            class="bx bxl-twitter"></i></div>
                                    <input type="text" class="form-control" id="autoSizingInputGroup"
                                        placeholder="https://www.twitter.com/xyz">
                                        <button class="bx bx-trash delete-icn"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                       <div class="col-md-12">
                           <div class="form-grp">
                               <label class="form-label">Address</label>
                               <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                           </div>
                       </div>
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



    <div class="modal fade" id="add-session" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/calendar.svg" alt=""><span>Add Session</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Session Type</label>
                                <div class="select-inp">
                                    <select class="form-control">

                                            <option value="AK">keynote</option>
                                            <option value="HI">Closed</option>

                                        </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                            </div>




                            <div class="form-grp">
                                <label class="form-label">Date</label>
                                <div class="input-group">
                                    <input type="date" class="form-control">
                                </div>

                            </div>

                            <div class="form-grp">
                                <label class="form-label">Event Type</label>
                                <div class="select-inp">
                                    <select class="form-control">

                                            <option value="AK">keynote</option>
                                            <option value="HI">Closed</option>

                                        </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                            </div>
                            <div class="form-grp">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label">Hall</label>
                                    <a href="#" data-bs-target="#add-hall-modal" data-bs-toggle="modal" data-bs-dismiss="modal"> <i class="fas fa-plus-circle"></i></a>

                                </div>

                                <div class="select-inp">
                                    <select class="form-control">

                                            <option value="AK">Hall 1</option>
                                            <option value="HI">Hall 2</option>
                                            <option value="AK">Hall 3</option>
                                            <option value="HI">Hall 4</option>

                                        </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="col-md-12 mt-2 mb-1">
                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" checked="">
                                        <label class="form-check-label" for="formRadio6">
                                                To be Announced
                                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label">Track</label>
                                    <a href="#" data-bs-target="#add-track-modal" data-bs-toggle="modal" data-bs-dismiss="modal"> <i class="fas fa-plus-circle"></i></a>

                                </div>

                                <div class="select-inp">
                                    <select class="form-control">

                                            <option value="AK">Track 1</option>
                                            <option value="HI">Track 2</option>
                                            <option value="AK">Track 3</option>
                                            <option value="HI">Track 4</option>

                                        </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="col-md-12 mt-2 mb-1">
                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" checked="">
                                        <label class="form-check-label" for="formRadio6">
                                                To be Announced
                                            </label>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <label class="form-label">Attendee Limits</label>
                                    <input class="form-control" type="number" placeholder="keynote">
                                </div>

                                <div class="form-grp">
                                    <label class="form-label">Tags</label>
                                    <div class="bs-example form-control mb-1">
                                        <input type="text" id="#inputTag" value="" data-role="tagsinput">
                                    </div>


                                </div>

                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Title<span>*</span></label>
                                <input class="form-control" type="text" placeholder="keynote">
                            </div>
                            <div class="form-grp">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Start Time</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" value="9:00 AM">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">End Time</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" value="9:00 AM">

                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-2 mb-1">
                                        <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                            <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5">
                                            <label class="form-check-label" for="formRadio6">
                                                    To be Announced
                                                </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-grp">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label">Speakers</label>
                                    <a href="#" data-bs-target="#add-speaker-modal" data-bs-toggle="modal" data-bs-dismiss="modal"> <i class="fas fa-plus-circle"></i></a>

                                </div>

                                <div class="select-inp">


                                    <select class="form-control" id="choices-multiple-remove-button" placeholder="Select Speaker" multiple>
                                            <option value="Author" onclick="filterSelection('Author')">arshad@gmail.com
                                            </option>
                                            <option value="MSelect">nabeel@gmail.com</option>
                                            <option value="Accordions">arshad@gmail.com</option>
                                        </select>


                                </div>
                                <div class="col-md-12 mt-2 mb-1">
                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" checked="">
                                        <label class="form-check-label" for="formRadio6">
                                                To be Announced
                                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label">Guest</label>
                                    <a href="#" data-bs-target="#add-guest-modal" data-bs-toggle="modal" data-bs-dismiss="modal"> <i class="fas fa-plus-circle"></i></a>

                                </div>

                                <div class="select-inp">


                                    <select class="form-control" id="choices-multiple-remove-button" placeholder="Add guest" multiple>
                                            <option value="Author" onclick="filterSelection('Author')">arshad@gmail.com
                                            </option>
                                            <option value="MSelect">nabeel@gmail.com</option>
                                            <option value="Accordions">arshad@gmail.com</option>
                                        </select>


                                </div>
                                <div class="col-md-12 mt-2 mb-1">
                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" checked="">
                                        <label class="form-check-label" for="formRadio6">
                                                To be Announced
                                            </label>
                                    </div>
                                </div>
                            </div>




                            <div class="row d-flex align-items-center">

                                <label class="form-label">Access Type</label>
                                <div class="col-lg-8">
                                    <div class="select-inp">


                                        <select class="form-control" id="choices-multiple-remove-button" placeholder="Select Ticket" multiple>
                                                <option value="Author" onclick="filterSelection('Author')">Premium
                                                </option>
                                                <option value="MSelect">Gold</option>
                                                <option value="Accordions">Premium</option>
                                            </select>


                                    </div>
                                </div>

                                <div class="col-lg-4">

                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" checked="">
                                        <label class="form-check-label" for="formRadio6">
                        All Ticket
                    </label>
                                    </div>

                                </div>


                            </div>
                            <div class="form-grp mt-2">
                                <label class="form-label">Registration Limit</label>
                                <input class="form-control" type="number" placeholder="">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#"><button type="button"
                                class="btn btn-primary text-uppercase br-50 btn-md">Done</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-track-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Track</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" placeholder="Track 1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal"><i
                                class="fas fa-arrow-left me-2"></i>Back</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="add-hall-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Hall</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Track 1">
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Capacity</label>
                        <input class="form-control" type="number" placeholder="0">
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Address</label>
                        <textarea id="formmessage" class="form-control" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal"><i
                                class="fas fa-arrow-left me-2"></i>Back</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-speaker-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Speaker</h5>
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
                        <div class="bs-example form-control mb-1">
                            <input type="text" id="#inputTag" value="" data-role="tagsinput">
                        </div>
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Email</label>
                        <div class="bs-example form-control mb-1">
                            <input type="text" id="#inputTag" value="" data-role="tagsinput">
                        </div>
                    </div>
                    <div class="form-grp">
                        <label class="form-label">About Speaker</label>
                        <div class="bs-example form-control mb-1">
                            <input type="text" id="#inputTag" value="" data-role="tagsinput">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal"><i
                                class="fas fa-arrow-left me-2"></i>Back</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="add-guest-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Guest</h5>
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
                        <div class="bs-example form-control mb-1">
                            <input type="text" id="#inputTag" value="" data-role="tagsinput">
                        </div>
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Email</label>
                        <div class="bs-example form-control mb-1">
                            <input type="text" id="#inputTag" value="" data-role="tagsinput">
                        </div>
                    </div>
                    <div class="form-grp">
                        <label class="form-label">About Speaker</label>
                        <div class="bs-example form-control mb-1">
                            <input type="text" id="#inputTag" value="" data-role="tagsinput">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal"><i
                                class="fas fa-arrow-left me-2"></i>Back</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="add-ticket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/ticket.svg" alt=""><span>Add ticket class</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Ticket Name<span>*</span></label>
                                <input class="form-control" type="text" placeholder="Gold">
                            </div>
                            <div class="form-grp">
                                <label class="form-label">Status</label>
                                <div class="select-inp">
                                    <select class="form-control">

                                            <option value="AK">Open</option>
                                            <option value="HI">Closed</option>

                                        </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                            </div>
                            <div class="form-grp">
                                <label class="form-label">Quantity</label>
                                <input class="form-control" type="text" value="100">
                            </div>
                            <div class="form-grp">
                                <label class="form-label price-label">Price <i class="bx bx-info-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Price"></i></label>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-check form-radio-outline form-radio-danger price-radio">
                                            <input class="form-check-input" type="radio" name="formRadio5" id="formRadio5">
                                            <label class="form-check-label" for="formRadio5">

                                                </label>
                                            <div class="input-group">

                                                <select class="form-select light-btn" style="min-width: 30x !important;">
                                                        <option value="BT" selected="">$</option>
                                                        <option value="ET">₹</option>
                                                        <option value="LT">AED</option>
                                                        <option value="LT">SAR</option>

                                                    </select>



                                                <input type="text" class="form-control" aria-label="" id="dropdown-on-both" value="100">

                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-check form-radio-outline form-radio-danger price-radio">
                                            <input class="form-check-input" type="radio" name="formRadio5" id="formRadio5" checked="">
                                            <label class="form-check-label" for="formRadio5">
                                                    Free
                                                </label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <div class="row">
                                    <div class="col-md-6 mb-2 mb-md-0">
                                        <label class="form-label">Minimum Buying Limit</label>
                                        <input class="form-control" type="text" value="1">
                                    </div>
                                    <div class="col-md-6 mb-2 mb-md-0">
                                        <label class="form-label">Maximum Buying Limit</label>
                                        <input class="form-control" type="text" value="10">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <div class="row">
                                    <div class="col-md-6 mb-2 mb-md-0">
                                        <label class="form-label">Sales Starts Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Time</label>

                                        <div class="input-group date">
                                            <input type="time" class="form-control" value="deljgndkjrfgbjk">
                                        </div>

                                    </div>


                                    <div class="col-md-12 mt-2 mb-1">
                                        <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                            <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5">
                                            <label class="form-check-label" for="formRadio6">
                                                    Now
                                                </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-grp">
                                <div class="row">
                                    <div class="col-md-6 mb-2 mb-md-0">
                                        <label class="form-label">Sales End Date</label>

                                        <div class="input-group">
                                            <input type="date" class="form-control">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Time</label>

                                        <div class="input-group date">
                                            <input type="time" class="form-control">
                                        </div>

                                    </div>
                                    <div class="col-md-12 mt-2 mb-1">
                                        <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                            <input class="form-check-input" type="checkbox" name="formRadio7" id="formRadio5">
                                            <label class="form-check-label" for="formRadio7">
                                                    Event End Date
                                                </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-grp">
                                <label class="form-label">Ticket Description</label>
                                <div class="editor">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="ticket.php"><button type="button"
                                class="btn btn-primary text-uppercase br-50 btn-md">Done</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-sponser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg" alt=""><span>Add Sponsor</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-grp mt-2">
                                <label class="form-label">Company Name<span>*</span></label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-grp">
                                <label class="form-label">Website URL</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-3 user-sqr">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
    
    
                                <div class="avatar-preview" style="background-color:#f5f5f5">
                                    <div id="imagePreview" style="background-image: url('assets/images/logo.png'); background-size: contain;">
                                    </div>
                                </div>
                            </div>
    
    
                        </div>
                    </div>

               

                   
                    <div class="form-grp">
                        <label class="form-label">Email Address</label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                    <div class="form-grp amount-div">
                        <label class="form-label">Amount</label>
                        <div class="input-group">



                            <select class="form-select light-btn" style="width: 20% !important; font-size: 13px; background: #fff !important;">
                                    <option value=" BT " selected=" ">$</option>
                                    <option value="ET ">₹</option>
                                    <option value="LT ">AED</option>
                                    <option value="LT ">SAR</option>

                                </select>

                            <input type="text " class="form-control " aria-label=" " value="100 " placeholder="Please Enter The Sponser " style="width: 80% !important; ">

                        </div>
                        <div class="mt-2 pb-1 ">
                            <div class="form-check form-radio-outline form-radio-danger evnt-radio ">
                                <input class="form-check-input " type="radio " name="formRadio6 " id="formRadio5 ">
                                <label class="form-check-label " for="formRadio6 ">
                                        Add Sponsor Contact Details
                                    </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-grp ">
                        <label class="form-label ">Description</label>
                        <div class="editor1 ">

                        </div>
                    </div>
                    <div class="mb-2 ">
                        <div class="select-inp ">
                            <select class="form-control ">

                                    <option value="AK ">Show Custom Fields</option>
                                    <option value="HI ">Field1</option>
                                    <option value="CA ">Field2</option>
                                    <option value="NV ">Field3</option>
                                </select>
                            <i class="fas fa-chevron-down "></i>
                        </div>

                    </div>

                </div>
                <div class="modal-footer ">
                    <a href="sponsor.php "><button type="button "
                                class="btn btn-primary text-uppercase br-50 btn-md ">Done</button></a>
                    <button type="button " class="btn btn-light text-uppercase br-50 btn-md " data-bs-dismiss="modal">Close</button>
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
                        <div class="bs-example form-control mb-1">
                            <input type="text" value="" data-role="tagsinput">
                        </div>
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Email</label>
                        <div class="bs-example form-control mb-1">
                            <input type="text" value="" data-role="tagsinput">
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

    <div class="modal fade" id="add-booth-cat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/booth.svg"
                            alt=""><span>Add Booth Category</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Booth Category Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Please Enter Category Name">
                    </div>
                    <div class="form-grp boothprice-labels">
                        <label class="form-label">Price</label>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check form-radio-outline form-radio-danger">
                                    <input class="form-check-input" type="radio" name="formRadio7" id="formRadio5">
                                    <label class="form-check-label" for="formRadio6">
                                        Free
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-radio-outline form-radio-danger">
                                    <input class="form-check-input" type="radio" name="formRadio7" id="formRadio5"
                                        checked="">
                                    <label class="form-check-label" for="formRadio6">
                                        Paid
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp booth-dimension">
                        <h5>Booth Dimensions (FT) <a href="#"><i class="bx bx-transfer-alt"></i><span>Change
                                    Unit</span></a></h5>
                    </div>
                    <div class="form-grp">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Length<span>*</span></label>
                                <input class="form-control" type="text" value="0">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Breadth<span>*</span></label>
                                <input class="form-control" type="text" value="0">
                            </div>
                        </div>

                    </div>
                    <div class="form-grp">
                        <label class="form-label label-md">Booth Dimensions (FT)</label>
                        <div class="row radio-check-function booth-facilities">
                            <div class="col-md-12 mb-2">
                                <div class="form-check active">
                                    <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1"
                                        checked="">
                                    <label class="form-check-label" for="formRadios1">
                                        <div class="booth-group-div">
                                            <div>Exhibitor Passes <span>Default</span></div>
                                            <div class="counter">
                                                <i class="down fas fa-minus" onClick='decreaseCount(event, this)'></i>
                                                <input type="text" value="1">
                                                <i class="up fas fa-plus" onClick='increaseCount(event, this)'></i>
                                            </div>
                                        </div>

                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                        <div class="booth-group-div">
                                            <div>Videos</div>
                                            <div class="counter">
                                                <i class="down fas fa-minus" onClick='decreaseCount(event, this)'></i>
                                                <input type="text" value="1">
                                                <i class="up fas fa-plus" onClick='increaseCount(event, this)'></i>
                                            </div>
                                        </div>

                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                        <div class="booth-group-div">
                                            <div>Collateral</div>
                                            <div class="counter">
                                                <i class="down fas fa-minus" onClick='decreaseCount(event, this)'></i>
                                                <input type="text" value="1">
                                                <i class="up fas fa-plus" onClick='increaseCount(event, this)'></i>
                                            </div>
                                        </div>

                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                        Lead List
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios1" id="formRadios1">
                                    <label class="form-check-label" for="formRadios1">
                                        Reserve this Booth for a Sponsor Category
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                  <button type="button"
                            class="btn btn-primary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-booth" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/booth.svg"
                            alt=""><span>Add Booth</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp">
                        <label class="form-label">Booth Category<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Please Enter Category Name">
                    </div>
                    <div class="form-grp">
                        <div class="booth-facility">
                            <h5>Booth Facilities</h5>
                            <h6>2 Exhibitor passes</h6>
                        </div>
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Booth Label<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Please Enter Booth Label">
                    </div>
                    <div class="form-grp">
                        <label class="form-label">Booth Number<span>*</span></label>
                        <input class="form-control" type="number" placeholder="">
                    </div>

                </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-primary text-uppercase br-50 btn-md add-booth-btn" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-exhibitor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/booth.svg"
                            alt=""><span>Add Exhibitor</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Booth</label>
                                <div class="select-inp">
                                    <select class="form-control">

                                            <option value="AK">Booth 1</option>
                                            <option value="HI">Booth 2</option>
                                            <option value="CA">Booth 3</option>
                                        </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <div class="booth-facility">
                                    <h5>Booth Facilities</h5>
                                    <h6>2 Exhibitor passes</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Company Name<span>*</span></label>
                                <input class="form-control" type="text" placeholder="Please Enter Company Name">
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Company Website URL</label>
                                <input class="form-control" type="text" placeholder="Please Enter Company Website URL">
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Company Slogan</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Description</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">First Name<span>*</span></label>
                                <input class="form-control" type="text" placeholder="First Name">
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" placeholder="Last Name">
                            </div>
                        
                        </div>

                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Phone Number</label>
                                <input class="form-control" type="text" placeholder="Please Enter Phone Number">
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Alternate Phone Number</label>
                                <input class="form-control" type="text" placeholder="Please Enter Phone Number">
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label class="form-label">Email<span>*</span></label>
                                <input class="form-control" type="text" placeholder="Please Enter Email id">
                            </div>

                        </div>
                    </div>
                    

                </div>
                <div class="modal-footer">
                <button type="button"
                            class="btn btn-primary text-uppercase br-50 btn-md add-exhibitor-btn" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/multiselect/choices.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/pages/jquery.slim.min.js"></script>
    <script src="assets/js/pages/popper.min.js"></script>
    <script src="assets/js/pages/bootstrap.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/ckediter/ckeditor.js"></script>
    <script src="assets/js/pages/bootstrap-taginput.js"></script>
    <script src="assets/js/summernote-bs4.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('.editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('.editor1'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $("#inputTag").tagsinput('items');
    </script>
    <script>
        var $radioButtons = $('.radio-check-function input[type="checkbox"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
                $(this).parent().toggleClass('active', this.checked);
            });
        });
    </script>
    <script>
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
        }
    </script>
    <script>
        $(".hh").blur(function() {
            if ($(this).val() >= 24)
                $(this).val($(this).val() % 24);

            if ($(this).val() == "")
                $(this).val("");
            else
            if ($(this).val() < 10)
                $(this).val("0" + parseInt($(this).val()));
            validateTime(x);
        });
        $(".mm").blur(function() {
            if ($(this).val() >= 60)
                $(this).val($(this).val() % 60);

            if ($(this).val() == "")
                $(this).val("");
            else
            if ($(this).val() < 10)
                $(this).val("0" + parseInt($(this).val()));

            var x = $(this).parent().attr("class").split(" ")[1];
            validateTime(x);
        });

        $(".hh").on("input", function() {
            $(this).parent().removeClass("invalid").removeClass("valid");
            if ($(this).val().length == 2)
                $(this).siblings(".mm").focus().select();
        });
        $(".mm").on("input", function() {
            $(this).parent().removeClass("invalid").removeClass("valid");
            if ($(this).val().length == 2)
                $(this).blur();
        });
        $(".hh").on("focus", function() {
            $(this).parent().removeClass("invalid").removeClass("valid");
        });
        $(".mm").on("focus", function() {
            $(this).parent().removeClass("invalid").removeClass("valid");
        });


        $("html").on('input', ".N", function() {
            $(this).val($(this).val().replace(/[^0-9.]/g, ""));
        });
    </script>

    <!-- multiple select-box -->

    <script>
        $(document).ready(function() {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 400,
                searchResultLimit: 5,
                renderChoiceLimit: 5
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
    $(document).ready(function () {
        $(".add-booth-btn").click(function () {
            $(".booth-content-hide").hide();
            $(".booth-content-show").show();   
        });
        $(".add-exhibitor-btn").click(function () {
            $(".exhibitor-content-hide").hide();
            $(".exhibitor-content-show").show();   
        });
    });
    </script>

</body>

</html>
