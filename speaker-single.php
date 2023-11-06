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
    <link href="assets/css/aos.css" rel="stylesheet">

</head>

<body class="ovrflw">
    
    <?php include 'loader.php';?>

    <div id="layout-wrapper">



        <header class="top-header">
            <div class="header-div">
                <a href="published-event.php">
                    <div class="backtohome">
                        <i class="bx bx-arrow-back back-arrow"></i>
                    </div>
                </a>
                <div class="header-title">
                    <h4>Speaker</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li>Speaker</li>
                    </ul>
                </div>
            </div>
            <div class="header-right-btns">
                <?php
                include 'options-buttons.php';
            ?>
            </div>
        </header>
        <div class="container-fluid speaker-padding">
            <div class="row speaker-div">
                <div class="col-md-12">
                    <div class="speaker-header">
                        <div class="speaker-btns">
                            <button type="button"
                                class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                data-bs-toggle="modal" data-bs-target="#invite-speaker" fdprocessedid="c5f7r">Add Speakers
                            </button>
                            <div class="dropdown event-sett">
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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#speaker-list-tab"
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
                                    <a class="nav-link" data-bs-toggle="tab" href="#speaker-grid-tab"
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
                    <div class="tab-content">
                        <div class="tab-pane active" id="speaker-list-tab" role="tabpanel">
                            <div class="event-table speaker-table speaker-single-tbl">
                                <div class="">
                                    <table id="event-table" class="table table-resizable table-striped mb-0">
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
                                                        <img src="assets/images/users/avatar-7.jpg" alt=""
                                                            class="avatar-sm rounded-circle">
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
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small spkr-btn"
                                                        fdprocessedid="7erxri">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path
                                                                d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg>Speaker
                                                    </button><span class="resize"></span>
                                                </td>
                                                <td>
                                                    <div class="status d-flex">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
                                                        <span class="resize"></span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="profile-status">
                                                        <div class="progress animated-progess">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 50%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <h6>50%</h6>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>
                                                <td class="text-end td-overflow">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-light1 text-uppercase px-2"
                                                            data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                            fdprocessedid="gel9d7">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-light1 px-1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="tv1629">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>


                                                        </div>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt=""
                                                            class="avatar-sm rounded-circle">
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
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small spkr-btn"
                                                        fdprocessedid="jkxank">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path
                                                                d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg>Speaker
                                                    </button>
                                                    <span class="resize"></span>
                                                </td>
                                                <td>
                                                    <div class="status d-flex">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
                                                        <span class="resize"></span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="profile-status">
                                                        <div class="progress animated-progess">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 50%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <h6>50%</h6>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>
                                                <td class="text-end td-overflow">
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-light1 text-uppercase px-2"
                                                            data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                            fdprocessedid="gel9d7">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-light1 px-1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="tv1629">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>


                                                        </div>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt=""
                                                            class="avatar-sm rounded-circle">
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
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small spkr-btn"
                                                        fdprocessedid="sd9nll">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path
                                                                d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg>Speaker
                                                    </button>
                                                    <span class="resize"></span>
                                                </td>
                                                <td>
                                                    <div class="status d-flex">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
                                                        <span class="resize"></span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="profile-status">
                                                        <div class="progress animated-progess">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 50%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <h6>50%</h6>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>
                                                <td class="text-end td-overflow">
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-light1 text-uppercase px-2"
                                                            data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                            fdprocessedid="gel9d7">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-light1 px-1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="tv1629">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>


                                                        </div>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input check-input" type="checkbox" id="formCheck4"><span class="resize"></span></td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt=""
                                                            class="avatar-sm rounded-circle">
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
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small spkr-btn"
                                                        fdprocessedid="fuie46">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.99984 9.04175C8.289 9.04175 9.33317 7.99758 9.33317 6.70841V3.50008C9.33317 2.21091 8.289 1.16675 6.99984 1.16675C5.71067 1.16675 4.6665 2.21091 4.6665 3.50008V6.70841C4.6665 7.99758 5.71067 9.04175 6.99984 9.04175Z"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path
                                                                d="M2.5376 5.62915V6.62082C2.5376 9.08249 4.53843 11.0833 7.0001 11.0833M7.0001 11.0833C9.46176 11.0833 11.4626 9.08249 11.4626 6.62082V5.62915M7.0001 11.0833V12.8333M6.18926 3.75082C6.71426 3.55832 7.28593 3.55832 7.81093 3.75082M6.53343 4.98749C6.8426 4.90582 7.16343 4.90582 7.4726 4.98749"
                                                                stroke="#263238" stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg>Speaker
                                                    </button>
                                                    <span class="resize"></span>
                                                </td>
                                                <td>
                                                    <div class="status d-flex">
                                                        <h6>Invited - 20 minutes ago</h6>
                                                        <a href="#">Reinvite</a>
                                                        <span class="resize"></span>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="profile-status">
                                                        <div class="progress animated-progess">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 50%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <h6>50%</h6>
                                                    </div>
                                                    <span class="resize"></span>
                                                </td>
                                                <td class="text-end td-overflow">
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-light1 text-uppercase px-2"
                                                            data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                            fdprocessedid="gel9d7">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-light1 px-1 dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="tv1629">
                                                            <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Delete</a>


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
                                        <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                        <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                        <li><a href="#"><span>2</span></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="speaker-grid-tab" role="tabpanel">
                            <div class="speaker-single-gridview">
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
                                                        <h3>91 7056453497</h3>
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                                        <h3>91 7056453497</h3>
                                                        
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
                                        <li><a href="#"><i class="bx bx-chevrons-left"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-left"></i></a></li>
                                        <li class="active"><a href="#"><span>1</span></a></li>                                                 
                                        <li><a href="#"><span>2</span></a></li>
                                        <li><a href="#"><i class="bx bx-chevron-right"></i></a></li>
                                        <li><a href="#"><i class="bx bx-chevrons-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>

                        


            </div>
        </div>

    </div>




    <!-- Modal -->
    <div class="modal fade" id="invite-speaker" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg"
                            alt=""><span>Add Speakers</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body user-sqr">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grp mb-1">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp mb-1">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp mb-1">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check form-radio-outline form-radio-danger evnt-radio mb-2">
                                        <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" autocompleted="">
                                        <label class="form-check-label" for="formRadio6">
                                            Feature this speaker
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grp">
                                        <label class="form-label">Organization</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="img-upload-form">
                                <img src="assets/images/users/default.png" id="upld-image1">
                                <i class="bx bxs-pencil" onclick="makeimg(1)" ;></i>
                                <input type="file" oninput="previewFile(1)" accept="image/*" id="imgfile1" />

                            </div>
                        </div>



                        <div class="col-md-10">
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
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label class="form-label">Telephone No</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label class="form-label">Alternate Telephone No</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="form-grp">
                                <label class="form-label">Address</label>
                                <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
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
                                            class="btn btn-primary waves-effect waves-light ">ADD</button>
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


                    </div>


                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-light  br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <a href="#"><button type="button" class="btn btn-primary  br-50 btn-md">Done</button></a>
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
    <script src="assets/js/pages/mdb.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>


            <!-- img-upload form -->

            <script>
            function makeimg() {
                document.getElementById("imgfile").click();
            }

            function previewFile() {
                const preview = document.getElementById('upld-image');
                const file = document.getElementById("imgfile").files[0];
                const reader = new FileReader();

                reader.addEventListener("load", function () {
                    preview.src = reader.result;
                }, false);

                if (file) {
                    reader.readAsDataURL(file);
                }
            }
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
<!-- <script>
    $('#selectAll').click(function (e) {
        $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
    });
</script> -->
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
        $(".speaker-padding").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
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