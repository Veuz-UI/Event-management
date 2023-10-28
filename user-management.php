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
    <link href='assets/css/font-awsome.min.css' rel='stylesheet'>
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">


</head>

<body class="ovrflw">
    
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
</style>

    <div id="layout-wrapper">
        <header class="top-header">
            <div class="header-div">
                <a href="settings.php">
                    <div class="backtohome">
                        <i class="bx bx-arrow-back back-arrow"></i>
                    </div>
                </a>
                <div class="header-title">
                    <h4>User Management</h4>
                    <ul>
                        <li><a href="home.php">Home</a> /</li>
                        <li>User Management</li>
                    </ul>
                </div>
            </div>
            <div class="header-right-btns">
                <?php include 'options-buttons.php'; ?>
            </div>
        </header>
        <div class="container-fluid px-0">
            <div class="col-lg-12">
                <div class="box-table">
                    <div class="speaker-header space-user-head user-pad">
                        <div class="speaker-btns">
                            <button type="button" class="btn btn-primary waves-effect waves-light btn-sm br-50 small" data-bs-toggle="modal" data-bs-target="#new-user">New</button>
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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#user-list-tab"
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
                                    <a class="nav-link" data-bs-toggle="tab" href="#user-grid-tab"
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
                        <div class="tab-pane active" id="user-list-tab" role="tabpanel">
                            <div class="user-tbl-overflow">
                                <table id="event-table" class="table table-striped table-resizable mb-0">
                                    <thead>
                                        <tr>
                                            <th width="46px"><input class="form-check-input " type="checkbox" name="Main_Checkbox"
                                            id="selectAll"><span class="resize"></span></th>
                                            <th>S/NO<span class="resize"></span></th>
                                            <th>User Image<span class="resize"></span></th>
                                            <th>Name<span class="resize"></span></th>
                                            <th>Username<span class="resize"></span></th>
                                            <th>Phone<span class="resize"></span></th>
                                            <th>Email<span class="resize"></span></th>
                                            <th>User Type<span class="resize"></span></th>
                                            <th class="text-end">Action<span class="resize"></span></th>

                                        </tr>
                                    </thead>
                                    <tbody class="table-content">
                                        <tr>
                                            <td><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                            <td>
                                                <h6>1</h6><span class="resize"></span>
                                            </td>
                                            <td>
                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle"><span class="resize"></span>
                                            </td>
                                            <td>
                                                <h6>James Fernandas</h6><span class="resize"></span>
                                            </td>

                                            <td>
                                                <h6>James</h6><span class="resize"></span>
                                            </td>

                                            <td>
                                                <h6>1234567890</h6><span class="resize"></span>
                                            </td>
                                            <td>
                                                <h6>demo@gmail.com</h6><span class="resize"></span>
                                            </td>
                                            <td>
                                                <h6>Manager</h6><span class="resize"></span>
                                            </td>
                                            <td class="text-end">
                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-user">
                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                </button>
                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#">
                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                </button>
                                                <span class="resize"></span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                            <td>
                                                <h6>1</h6><span class="resize"></span>
                                            </td>
                                            <td>
                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle"><span class="resize"></span>
                                            </td>
                                            <td>
                                                <h6>James Fernandas</h6><span class="resize"></span>
                                            </td>

                                            <td>
                                                <h6>James</h6><span class="resize"></span>
                                            </td>

                                            <td>
                                                <h6>1234567890</h6><span class="resize"></span>
                                            </td>
                                            <td>
                                                <h6>demo@gmail.com</h6><span class="resize"></span>
                                            </td>
                                            <td>
                                                <h6>Manager</h6><span class="resize"></span>
                                            </td>
                                            <td class="text-end">
                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-user">
                                                <i class="bx bxs-pencil cursor-pntr"></i>
                                                </button>
                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#">
                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                </button>
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
                        <div class="tab-pane" id="user-grid-tab" role="tabpanel">
                            <div class="user-gridview">
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



    <div class="modal fade" id="new-user" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body user-sqr">
               
                        <div class="row">
                            <div class="col-md-10 mt-2">
                                <a style="display: none;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail"><i
                                    class="bx bx-mail-send"></i></a>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Name<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">User Name<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>     
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Phone<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Email<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="img-upload-form">
                                    <img src="assets/images/users/default.png" id="upld-image">
                                        <i class="bx bxs-pencil" onclick="makeimg()" ;></i>
                                    <input type="file" oninput="previewFile()" accept="image/*" id="imgfile" />

                                </div>
                            
                            </div>
                                            
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-12">
                                       <label class="form-label">Password Option<span>*</span></label>
                                        <div class="d-flex mb-2">
                                            <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                                <input class="form-check-input" type="radio" name="formRadio6" id="formRadio5">
                                                <label class="form-check-label" for="formRadio5">
                                                       Manual
                                                    </label>
                                            </div>
                                            <div class="form-check form-radio-outline form-radio-danger evnt-radio ms-3">
                                                <input class="form-check-input" type="radio" name="formRadio6" id="formRadio6">
                                                <label class="form-check-label" for="formRadio6">
                                                        Automatic
                                                    </label>
                                            </div>
                                        </div>
                                        <input class="form-control sm-frm-cntrl" type="password" value="111">
                                    </div>
                                   
                                    <!-- <div class="col-md-6">
                                        <div class="d-flex">
                                            <input class="form-check-input" type="checkbox" name="front-desk-access" id="front-desk-access">
                                            <label class="form-label ms-2" for="front-desk-access">Front Desk Access<span>*</span></label>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                                                <input class="form-check-input" type="checkbox" name="formRadio6"
                                                    id="formRadio5">
                                                <label class="form-check-label" for="formRadio6">
                                                    Check In
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-radio-outline form-radio-danger evnt-radio ms-3">
                                                <input class="form-check-input" type="checkbox" name="formRadio6"
                                                    id="formRadio5">
                                                <label class="form-check-label" for="formRadio6">
                                                    Check Out
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                               
                            </div>
                            <div class="col-lg-7">
                                <label class="form-label">Access Event<span>*</span></label>
                                <div class="select-inp">


                                    <select class="form-control" id="choices-multiple-remove-button" placeholder="Select" multiple>
                                            <option value="Author" onclick="filterSelection('Author')">Django Event
                                            </option>
                                            <option value="MSelect">Php Event</option>
                                            <option value="Accordions">UI Event</option>
                                        </select>


                                </div>
                            </div>
                        </div>

                       
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label class="form-label">Add Permision</label>
                            <div class="ovrflow-sm">
                            <table id="datatable" class="table dt-responsive table-bordered nowrap usertype-tbl mt-2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <tr>
                                    <th class="th_btnpand" style="width: 40px;">
                                        <div class="appnd_user_btn append_btn" style="cursor: pointer;">+</div>
                                    </th>
                                    <th class="th_user_role">Role</th>
                                    <th class="th_user_decrptn">Description</th>
                                    <th class="th_user_strtdate">Start Date</th>
                                    <th class="th_user_enddate">End Date</th>
                                </tr>
                                <tbody class="apenduser">
                                    <tr>
                                        <td class="th_btnpand">
                                            <div class="appnd_user_minus_btn appnd_minus_btn" style="cursor: pointer;">-</div>
                                        </td>
                                        <td class="th_user_role">
                                          <div class="role-select-mdl">
                                            <div class="select-inp">
                                                <select class="form-control" name="role_id[]">                                                              
                                                    <option value="{{role.id}}">Role-1</option>   
                                                    <option value="{{role.id}}">Role-2</option>                                                                    
                                                </select>
                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#add-role" class="edt-pencl"><i class="bx bxs-pencil"></i></a>
                                          </div>
                                           
                                        </td>
                                        <td class="th_user_decrptn">
                                            <input name="role_description[]" class="form-control">
                                        </td>
                                        <td class="th_user_strtdate">
                                            <div class="input-group date">
                                                <input  name="role_start_dt[]" value="{{today_date|safe}}" min="{{today_date}}" type="date" class="input form-control" >
                                            </div>
                                        </td>
                                        <td class="th_user_enddate">
                                            <div class="input-group date">
                                                <input  name="role_end_dt[]" type="date" min="role-1" class="input form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                <div class="d-flex mt-2">
                                    <input class="form-check-input" type="checkbox" name="front-desk-access" id="front-desk-access">
                                    <label class="form-label ms-2">Agenda Access<span>*</span></label>
                                </div>
                              
                                <div class="ovrflow-sm">
                                <table id="datatable" class="table dt-responsive table-bordered nowrap usertype-tbl mt-2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <th class="th_btnpand" style="width: 40px;">
                                            <div class="appnd_user_btn append_btn" style="cursor: pointer;">+</div>
                                        </th>
                                        <th class="th_user_role">Agenda</th>
                                        <th class="th_user_decrptn">Check In</th>
                                        <th class="th_user_strtdate">Check Out</th>
                                    </tr>
                                    <tbody class="apenduser">
                                        <tr>
                                            <td class="th_btnpand">
                                                <div class="appnd_user_minus_btn appnd_minus_btn" style="cursor: pointer;">-</div>
                                            </td>
                                            <td class="th_user_role">
                                                <input name="" class="form-control" type="text" value="Agenda 1">
                                            </td>
                                            <td class="th_user_decrptn">
                                                <input class="form-check-input" type="checkbox" name="check-in" id="check-in">
                                            </td>
                                            <td class="th_user_strtdate">
                                                <input class="form-check-input" type="checkbox" name="check-out" id="check-out">
                                            </td>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-role" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Name<span>*</span></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-grp">
                                    <label class="form-label">Description<span>*</span></label>
                                    <textarea class="form-control" type="text" placeholder="Description" ></textarea>
                                </div>
                            </div>                      
                        </div>
                        <div class="table-responsive mb-2 role-modal-table">
                            <table class="table mb-0">
    
                                <thead>
                                    <tr class="table-navs">
                                        <th>Nav Name</th>
                                        <th>Read</th>
                                        <th>Write</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>View All</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Lead</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contacts</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Opportunity</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Forecasts</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Quotation</th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input role-chkbox" type="checkbox" id="formCheck1">
                                            </div>
                                        </td>
                                    </tr>
    
                                </tbody>
                            </table>
                        </div>


                
                </div>
                <div class="modal-footer">
                 
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#new-user" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#new-user" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
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
    <script src="assets/libs/multiselect/choices.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/saas-dashboard.init.js"></script>
    <script src="assets/js/pages/apexcharts.init.js"></script>
    <script src="assets/js/pages/mdb.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/aos.js"></script>



    <script>
        AOS.init();
    </script>
<script type="text/javascript">
    $(document).ready(function() {
    $(".appnd_user_btn").click(function() {

        $(".apenduser").append("<tr>\n" +
            "                                    <td class=\"th_btnpand\">\n" +
            "                                        <div style=\"cursor: pointer;\" class=\"appnd_user_minus_btn appnd_minus_btn\">-</div>\n" +
            "                                    </td>\n" +
            "                                    <td class=\"th_user_role\">\n" +
            "                                        <select name=\"role_id[]\" class=\"form-control\">\n" +
            "                                            {% for role in  role_data %}\n" +
            "                                           <option value=\"{{role.id}}\">{{role.role_name}}</option>\n" +
            "                                           {% endfor %}\n" +
            "                                        </select>\n" +
            "                                    </td>\n" +
            "                                    <td class=\"th_user_decrptn\">\n" +
            "                                        <input name=\"role_description[]\" class=\"form-control\">\n" +
            "                                    </td>\n" +
            "                                 <td class=\"th_user_strtdate\">\n" +
            "                                        <div class=\"input-group date\">\n" +
            "                                            <input name=\"role_start_dt[]\"  min=\"{{today_date}}\" value=\"{{today_date|safe}}\" type=\"date\" class=\"input form-control\" id=\"datetimepicker\"> \n" +
            "                                        </div>\n" +
            "                                    </td>\n" +
            "                                    <td class=\"th_user_enddate\">\n" +
            "                                        <div class=\"input-group date\">\n" +
            "                                            <input name=\"role_end_dt[]\" type=\"date\"  min=\"{{today_date}}\"  class=\"input form-control\" id=\"datetimepicker\"> \n" +
            "                                        </div>\n" +
            "                                    </td>\n" +

            "                                </tr>");
        $(".appnd_user_minus_btn").click(function() {
            $(this).parent().parent().remove();
        });
    });
    });
    $(".appnd_user_minus_btn").click(function() {
            $(this).parent().parent().remove();
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

    <script>
        var $radioButtons = $('.radio-check-function input[type="radio"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
                $(this).parent().toggleClass('active', this.checked);
            });
        });
    </script>

    <!-- profile image upload js -->
    <!-- <script>
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
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script> -->
        <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 1000)

        })
    </script>
        <script>
            $(document).ready(function () {

                var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                    removeItemButton: true,
                    maxItemCount: 400,
                    searchResultLimit: 5,
                    renderChoiceLimit: 5
                });


            });
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
        $(".box-table").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
    });
</script>

</body>

</html>