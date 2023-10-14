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
    <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet" >
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
        <div class="row speaker-div team-tab-content pe-0">
                                    <div class="col-md-9 border-right">
                                        <div class="speaker-header">
                                            <div class="speaker-btns">
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#add-attandee">
                                                                    <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>Add Attendee
                                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small"  data-bs-toggle="modal" data-bs-target="#export-modal">
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
                                                           <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail"><button type="button"
                                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small snd-mail"
                                                                data-bs-toggle="modal" data-bs-target="#alert-msg"><i class="bx bx-mail-send"></i></button></a> 
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
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Header background color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default" value="#50a5f1">
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Header font color</label>
                                <input type="text" class="form-control colorpicker-default" id="colorpicker-default" value="#222222">
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-grp visible-field">
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
                    <a href="#" data-bs-target="#print-export" data-bs-toggle="modal"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md">Export</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
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
                                <button class="btn btn-primary text-uppercase br-50 badge-issue1" data-bs-dismiss="modal">Badge Issued</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="modal-footer footer-btns1">
                    <button type="button" class="btn btn-primary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Print</button>
                    <button type="button" class="btn btn-secondary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Preview Badge</button>
                    <button type="button" class="btn btn-outline-secondary badge-not text-uppercase br-50 btn-md" data-bs-dismiss="modal">Badge not Issued</button>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail" class="send-mail"><i class="bx bx-mail-send"></i></a> 
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
                        <div class="col-md-12">
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
                                                <th>Field</th>
                                                <th style="width: 30px;"></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </td>
                                                <td> <a href="#" class="remove-tr"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td>
                                                    <div class="select-inp">
                                                        <select class="form-control">
                                                                        
                                                            <option value="AK">English</option>
                                                            <option value="HI">Arabic</option>                          
                                                            <option value="CA">Spanish</option>
                                                            <option value="NV">Hindi</option>                        
                                                    </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
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
                    <button data-bs-dismiss="modal" type="button" class="btn btn-primary text-uppercase br-50 btn-md">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal" data-bs-target="#import-upload" data-bs-toggle="modal">Back</button>
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
<script>
    $(".field-tbl").on('click', '.remove-tr', function () {
        $(this).closest('tr').remove();
    });
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


</body>

</html>