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
                    <h4>Attandees</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li>Attandees</li>
                    </ul>
                </div>
            </div>
            <div class="header-right-btns">
                <?php
                include 'options-buttons.php';
            ?>
            </div>
        </header>
        <div class="container-fluid attandees-padding">
            <div class="row speaker-div team-tab-content">
                <div class="col-md-9 border-right">
                    <div class="speaker-header">
                        <div class="speaker-btns">
                            <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small"
                                data-bs-toggle="modal" data-bs-target="#add-attandee">Add Attendee
                            </button>
                            <div class="dropdown event-sett">
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
                                                    <ul class="dropdown-menu dropdown-submenu"
                                                        style="margin-top: 40px;left: auto;width: 100%;">
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
                            <div class="attendee-single-tbl-overflow">
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
                        <div class="tab-pane" id="attendee-grid-tab" role="tabpanel">
                            <div class="attendee-single-grid-overflow">
                                <div class="row gx-3">
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

    </div>




    <!-- Modal -->
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
                   
                   
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex">
                    <a href="#"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md">Save and Close</button></a>
                    <a href="#"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md ms-1">Save and New</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="export-modal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default"
                                    value="#50a5f1">

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-grp">
                                <label class="form-label">Header font color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default"
                                    value="#222222">

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
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md"
                        data-bs-dismiss="modal">Close</button>
                    <a href="#" data-bs-target="#print-export" data-bs-toggle="modal"><button type="button"
                            class="btn btn-primary text-uppercase br-50 btn-md">Export</button></a>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="print-export" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <button class="btn btn-primary br-50 badge-issue1"
                                    data-bs-dismiss="modal">Badge Issued</button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer footer-btns1">
                    <button type="button" class="btn btn-primary br-50 btn-md me-1"
                        data-bs-dismiss="modal">Print</button>
                    <button type="button" class="btn btn-secondary br-50 btn-md me-1"
                        data-bs-dismiss="modal">Preview Badge</button>
                    <button type="button" class="btn btn-outline-secondary badge-not br-50 btn-md me-1"
                        data-bs-dismiss="modal">Badge not Issued</button>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail"
                        class="send-mail"><i class="bx bx-mail-send"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="modal common-modal fade" id="import-upload" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <a href="#"><button data-bs-target="#upload-inpt" data-bs-toggle="modal" data-bs-dismiss="modal"
                            type="button" class="btn btn-primary text-uppercase br-50 btn-md">Next</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="upload-inpt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/users.svg"
                            alt=""><span>Attendees IN</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger alert-dismissible fade show" role="alert">
                                    <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>

                            </div>
                            <div class="field-btns">
                                <button type="button"
                                    class="btn btn-secondary waves-effect waves-light btn-sm text-uppercase br-50 small">
                                    <i class="bx bx-upload font-size-16 align-middle me-1"></i>Upload</button>

                                <button type="button"
                                    class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
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

                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal"
                        data-bs-target="#import-upload" data-bs-toggle="modal">Back</button>
                    <button data-bs-dismiss="modal" type="button"
                        class="btn btn-primary text-uppercase br-50 btn-md">Save</button>
                </div>

            </div>
        </div>
    </div>

    <div id="alert-msg" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true"
        style="display: none;">
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
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Day', 'Total number of Attendees'],
                ['Day 1', 20],
                ['Day 2', 20],
                ['Day 3', 20]
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
        $radioButtons.click(function () {
            $radioButtons.each(function () {
                $(this).parent().toggleClass('active', this.checked);
            });
        });
    </script>

    <!-- profile image upload js -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload ").change(function () {
            readURL(this);
        });
    </script>
    <script>
        $(function () {
            setTimeout(function () {
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
    <!-- <script>
    $('#selectAll').click(function (e) {
        $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
    });
</script> -->
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

    <script>
        var startX, startWidth, $handle, $table, pressed = false;

        // mousedown
        $('.table-resizable .resize').on('mousedown', function (event) {
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
        $('.table-resizable th, .table-resizable td').on('mousemove', function (event) {
            if (pressed) {
                $handle.width(startWidth + (event.pageX - startX));
            }
        });

        // mouseup
        $('.table-resizable th, .table-resizable td').on('mouseup', function () {
            if (pressed) {
                $table.removeClass('resizing');
                pressed = false;
            }
        });

        // reset column width
        $('.table-resizable thead').on('dblclick', function () {
            // Reset column sizes on double click
            $(this).find('th').css('width', '');
        });
    </script>
    <script>
        $('.selected-num i').on('click', function () {
            $(this).closest(".selected-num").remove();
        });

        $(function () {
            $(".attandees-padding").on("click", function () {
                $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
            })
            $('input[name="Main_Checkbox"]').on("click", function () {
                $('.check-input').prop('checked', this.checked);
            });
        });
    </script>
</body>

</html>