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

    </head>

    <body>

    <div id="layout-wrapper">

            
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-center">
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo">
                            <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="23">
                          </span>
                        </a>
                    </div>
                    <h2 class="main-heading">Events</h2>

                </div>
                <?php include 'options-buttons.php'; ?>

            </div>
        </header>


          

        <div class="page-content">
            <div class="container-fluid px-0">

                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row">
                            <div class="col-12 px-md-0">
                                <div class="top-bar d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#event-create">
                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Create event
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small mx-2">
                                            <svg class="me-1" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            class="btn btn-outline-secondary waves-effect btn-export waves-light btn-sm text-uppercase br-50 small">
                                            <svg class="me-1" width="17" height="15" viewBox="0 0 17 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                                    stroke="#263238" stroke-width="1.36" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>Import
                                        </button>
                                    </div>
                                    
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#live" role="tab" aria-selected="true">
                                                
                                                <span>Live</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#drafts" role="tab" aria-selected="false" tabindex="-1">
                                                
                                                <span>Drafts</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#past" role="tab" aria-selected="false" tabindex="-1">
                                                
                                                <span>Past</span>   
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#cancelled" role="tab" aria-selected="false" tabindex="-1">
                                                
                                                <span>Cancelled</span>    
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab" aria-selected="false" tabindex="-1">
                                                
                                                <span>All</span>   
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#trash" role="tab" aria-selected="false" tabindex="-1">
                                                
                                                <span>Trash</span>    
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="d-flex rightside-btns">
                                        <div class="input-group search-inpt">
                                            <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>
                                            <input type="text" class="form-control border-start-0 ps-0" id="inlineFormInputGroupUsername" placeholder="Search this list ">
                                            <div class="input-group-text input-group-text-right"><i class="bx bx-chevron-down"></i></div>
                                        </div>
                                        <a href="event.php">
                                            <button type="button" class="btn btn-kanlist ml-15 waves-effect waves-light">
                                                <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 5.5H2V4H0V5.5ZM0 9.5H2V8H0V9.5ZM0 1.5H2V0H0V1.5ZM4 5.5H18V4H4V5.5ZM4 9.5H18V8H4V9.5ZM4 0V1.5H18V0H4Z" fill="black"/>
                                                </svg>                                                
                                            </button>
                                        </a>
                                        <a href="event-list.php">
                                            <button type="button" class="btn btn-kanlist ml-15 active waves-effect waves-light">                                             
                                                <svg width="20" height="20" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.625 3.5625H2.375C2.21753 3.5625 2.06651 3.62506 1.95516 3.73641C1.84381 3.84776 1.78125 3.99878 1.78125 4.15625V14.25C1.78125 14.5649 1.90636 14.867 2.12906 15.0897C2.35176 15.3124 2.65381 15.4375 2.96875 15.4375H16.0312C16.3462 15.4375 16.6482 15.3124 16.8709 15.0897C17.0936 14.867 17.2188 14.5649 17.2188 14.25V4.15625C17.2188 3.99878 17.1562 3.84776 17.0448 3.73641C16.9335 3.62506 16.7825 3.5625 16.625 3.5625ZM2.96875 8.3125H5.9375V10.6875H2.96875V8.3125ZM7.125 8.3125H16.0312V10.6875H7.125V8.3125ZM2.96875 11.875H5.9375V14.25H2.96875V11.875ZM16.0312 14.25H7.125V11.875H16.0312V14.25Z" fill="black"/>
                                                </svg>                                                
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="live" role="tabpanel">
                                <div class="event-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Responsible</th>
                                                <th>Company</th>
                                                <th>Website</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Attendees</th>
                                                <th>Stage</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                                <td>
                                                    <div class="dropdown common-drpdwn float-right">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#trash-popup">Trash</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">OpenWood Collection Online</a></td>
                                                <td>Angeles Convention Center</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                                <td>
                                                    <div class="dropdown common-drpdwn float-right">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#trash-popup">Trash</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                                <td>
                                                    <div class="dropdown common-drpdwn float-right">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#trash-popup">Trash</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">OpenWood Collection Online</a></td>
                                                <td>Angeles Convention Center</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                                <td>
                                                    <div class="dropdown common-drpdwn float-right">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-ellipsis-v dots"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                            <a class="dropdown-item" href="conference.php">Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#trash-popup">Trash</a>
                                                        </div>
                                                    </div>
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
                                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#"><span>1 - 2</span></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-right"></i></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="drafts" role="tabpanel">
                                <div class="event-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Responsible</th>
                                                <th>Company</th>
                                                <th>Website</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Attendees</th>
                                                <th>Stage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            
                                            
                                            
                                            
                                            </tbody>
                                        </table>
                                    </div>       
                                </div>
                                <div class="bootom-nav">
                                    <div class="total-count">
                                        <h6>Total Count : <span>10</span></h6>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#"><span>1 - 2</span></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-right"></i></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="past" role="tabpanel">
                                <div class="event-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Responsible</th>
                                                <th>Company</th>
                                                <th>Website</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Attendees</th>
                                                <th>Stage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">OpenWood Collection Online</a></td>
                                                <td>Angeles Convention Center</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            
                                            
                                            
                                            
                                            </tbody>
                                        </table>
                                    </div>       
                                </div>
                                <div class="bootom-nav">
                                    <div class="total-count">
                                        <h6>Total Count : <span>10</span></h6>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#"><span>1 - 2</span></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-right"></i></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="cancelled" role="tabpanel">
                                <div class="event-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Responsible</th>
                                                <th>Company</th>
                                                <th>Website</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Attendees</th>
                                                <th>Stage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            
                                            
                                            
                                            </tbody>
                                        </table>
                                    </div>       
                                </div>
                                <div class="bootom-nav">
                                    <div class="total-count">
                                        <h6>Total Count : <span>10</span></h6>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#"><span>1 - 2</span></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-right"></i></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="all" role="tabpanel">
                                <div class="event-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Responsible</th>
                                                <th>Company</th>
                                                <th>Website</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Attendees</th>
                                                <th>Stage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">OpenWood Collection Online</a></td>
                                                <td>Angeles Convention Center</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">OpenWood Collection Online</a></td>
                                                <td>Angeles Convention Center</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            
                                            
                                            </tbody>
                                        </table>
                                    </div>       
                                </div>
                                <div class="bootom-nav">
                                    <div class="total-count">
                                        <h6>Total Count : <span>10</span></h6>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#"><span>1 - 2</span></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-right"></i></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="trash" role="tabpanel">
                                <div class="event-table">
                                    <div class="table-responsive">
                                        <table id="event-table" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                                <th>Event</th>
                                                <th>Venue</th>
                                                <th>Responsible</th>
                                                <th>Company</th>
                                                <th>Website</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Attendees</th>
                                                <th>Stage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                                <td><a href="#">Business workshops</a></td>
                                                <td>Business workshops</td>
                                                <td>
                                                    <div class="responsible">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                        <span>James Fernandas</span>
                                                    </div>
                                                </td>
                                                <td>My Company (San Francisco)</td>
                                                <td><a href="#">www.website.com</a></td>
                                                <td><span>07/30/2023</span><span>23:30:00</span></td>
                                                <td><span>07/30/2023</span><span>04:00:00</span></td>
                                                <td>04</td>
                                                <td>Ended</td>
                                            </tr>
                                            
                                            
                                            </tbody>
                                        </table>
                                    </div>       
                                </div>
                                <div class="bootom-nav">
                                    <div class="total-count">
                                        <h6>Total Count : <span>10</span></h6>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li><a href="#"><span>1 - 2</span></a></li>
                                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            <li><a href="#"><i class="fas fa-angle-right"></i></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                            

                    
                    </div>


                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="col-12 px-md-0">
                                <div class="top-bar event-detail-header d-flex justify-content-between align-items-center">
                                    <div class="event-details-top-left">
                                        <h4>Attendees</h4>
                                        <h6><svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.27998 1.75V4.375M14.56 1.75V4.375M3.18498 7.95375H18.655M19.11 7.4375V14.875C19.11 17.5 17.745 19.25 14.56 19.25H7.27998C4.09498 19.25 2.72998 17.5 2.72998 14.875V7.4375C2.72998 4.8125 4.09498 3.0625 7.27998 3.0625H14.56C17.745 3.0625 19.11 4.8125 19.11 7.4375Z" stroke="#969696" stroke-width="1.176" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.2824 11.9875H14.2906M14.2824 14.6125H14.2906M10.9154 11.9875H10.9245M10.9154 14.6125H10.9245M7.54749 11.9875H7.55659M7.54749 14.6125H7.55659" stroke="#969696" stroke-width="1.176" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Wed Aug 23, 2023 - 08:00 AM (IST)</h6>
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-content evnt-tab-content">
                            <div class="tab-pane active" id="manage" role="tabpanel">
                                <div class="nav-evnt-top">
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#dashboard" role="tab">
                                                <span>Dashboard</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#attendee" role="tab">
                                                <span>Attendees</span> 
                                            </a>
                                        </li>
                                        
                                        
                                    </ul>
                                    
                                </div>
                                
                                <hr class="nav-bottom-hr">
                                <div class="tab-content evnt-tabcontent">

                                    <div class="tab-pane active" id="dashboard" role="tabpanel">
                                        <div class="row speaker-div team-tab-content">
                                            <div class="attendee-tab-content">
                                                <div class="col-md-9 mx-auto">
                                                    <div class="dropdown alltime-drpdwn">
                                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">All Time <i class="mdi mdi-chevron-down"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="col-md-9 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="box-border topboxes">
                                                                <div class="box-left">
                                                                    <img src="assets/images/users.svg" alt="">
                                                                    <h4>Total Attendees<i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Total Attendees"></i></h4>
                                                                </div>

                                                                <h3>1</h3>
                                                            </div>
                                                            <div class="box-border bottomboxes">
                                                                <h3>By Event Location</h3>
                                                                <hr>
                                                                <div id="radialchart-11" data-colors='["#3862EC"]' class="apex-charts"></div>
                                                                <h4>Total Attendees</h4>
                                                                
                                                                <div class="bttm-bx row">
                                                                    <div class="location-div col-md-6">
                                                                        <img src="assets/images/location.svg" alt="" class="me-1">
                                                                        <span>No Location</span>
                                                                    </div>
                                                                    <div class="btm-btn col-md-6">
                                                                        
                                                                        <span>1 (100.00%)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="box-border topboxes">
                                                                <div class="box-left">
                                                                    <img src="assets/images/users.svg" alt="">
                                                                    <h4>Repeated Attendees<i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Repeated Attendees"></i></h4>
                                                                </div>

                                                                <h3>24</h3>
                                                            </div>
                                                            <div class="box-border bottomboxes">
                                                                <h3>By Event Type</h3>
                                                                <hr>
                                                                <div id="radialchart-12" data-colors='["#3862EC"]' class="apex-charts"></div>
                                                                <h4>Total Attendees</h4>
                                                                
                                                                <div class="bttm-bx row">
                                                                    <div class="location-div col-md-6">
                                                                        <img src="assets/images/location.svg" alt="" class="me-1">
                                                                        <span>On Location</span>
                                                                    </div>
                                                                    <div class="btm-btn col-md-6">
                                                                        
                                                                        <span>1 (100.00%)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="attendee" role="tabpanel">
                                        <div class="row speaker-div team-tab-content">
                                            <div class="col-md-12">
                                                
                                                <div class="event-table speaker-table">
                                                    <div class="table-responsive">
                                                        <table id="event-table" class="table table-striped">
                                                            <thead>
                                                            <tr>
                                                                
                                                                <th width="30%">Name &amp; Email</th>
                                                                <th>Company Name</th>
                                                                <th>Mobile</th>
                                                                <th>Events</th>
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
                                                                    Company
                                                                </td>
                                                                <td>
                                                                    987456123
                                                                </td>
                                                                
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td class="text-end">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">View</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td>
                                                                    <div class="responsible">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                                        <div class="speaker-name-email">
                                                                            <h6>James Fernandas</h6>
                                                                            <span>jamesfernand@gmail.com</span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Company
                                                                </td>
                                                                <td>
                                                                    987456123
                                                                </td>
                                                                
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td class="text-end">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">View</button>
                                                                </td>
                                                            </tr>
                                            
                                                            <tr>
                                                                
                                                                <td>
                                                                    <div class="responsible">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                                        <div class="speaker-name-email">
                                                                            <h6>James Fernandas</h6>
                                                                            <span>jamesfernand@gmail.com</span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    Company
                                                                </td>
                                                                <td>
                                                                    987456123
                                                                </td>
                                                                
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td class="text-end">
                                                                    <button type="button" class="btn btn-light1 text-uppercase px-3">View</button>
                                                                </td>
                                                            </tr>
                                                        
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                    
                                    
                                </div>
                            </div>
                            
                        
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary waves-effect waves-light btn-md text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#alerts-modal">
                                       alert
                                        </button>
                    
                </div>
                
                
                
            </div> 
        </div>

       
    </div>
        

    
    
    
    <!-- Event create Modal -->
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
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="01 Sep, 2023"
                                        data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                        data-date-autoclose="true">
        
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
                                    <input type="text" class="form-control" placeholder="dd M, yyyy" value="05 Sep, 2023"
                                        data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                        data-date-autoclose="true">
        
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

    <div class="modal fade" id="alerts-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><span>Alerts</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert-grp">
                        <div class="form-grp">
                            <div class="alrt-bx alert alert-danger">
                                 <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                            </div>
                         </div>
                         <div class="form-grp">
                             <div class="alrt-bx alert alert-danger">
                                 <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                            </div>
                         </div>
                         <div class="form-grp">
                             <div class="alrt-bx alert alert-danger">
                                 <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                            </div>
                         </div>
                         <div class="form-grp">
                             <div class="alrt-bx alert alert-danger">
                                 <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                            </div>
                         </div>
                         <div class="form-grp">
                             <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                             <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                             <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                          <div class="form-grp">
                              <div class="alrt-bx alert alert-danger">
                                  <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                             </div>
                          </div>
                    </div>
                    
                </div>
   
            </div>
        </div>
    </div>

    <div class="alert alert-success alert-dismissible succ-alert" role="alert">
        <img src="assets/images/gif-success.gif"> Your are successfully checked in.
        <button type="button" class="alert-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
    </div>

    <div class="alert alert-danger alert-dismissible dang-alert" role="alert">
        <img src="assets/images/gif-error.gif"> Your are successfully checked in.
        <button type="button" class="alert-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
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

        <script src="assets/js/app.js"></script>

        <script>
            var $radioButtons = $('.radio-check-function input[type="radio"]');
            $radioButtons.click(function() {
                $radioButtons.each(function() {
                    $(this).parent().toggleClass('active', this.checked);
                });
            });
        </script>

<script>
    $(function () {
        $(".alert-close").click(function () {
            $(".alert-dismissible").css("display", "none").delay(1000).fadeOut(400);
        });
    });
</script>

    </body>
</html>
