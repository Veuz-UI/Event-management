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
                <a href="published-event.php">
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
                            <button type="button" class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small" data-bs-toggle="modal" data-bs-target="#new-user">
                                                            <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>New
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
                        <div class="input-group search-inpt">

                            <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername" placeholder="Search speakers">
                            <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="event-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="40px"><input class="form-check-input" type="checkbox" id="formCheck1"></th>
                                    <th>S/NO</th>
                                    <th>User Image</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="table-content">
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                    <td>
                                        <h6>1</h6>
                                    </td>
                                    <td>
                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                    </td>
                                    <td>
                                        <h6>James Fernandas</h6>
                                    </td>

                                    <td>
                                        <h6>James</h6>
                                    </td>

                                    <td>
                                        <h6>1234567890</h6>
                                    </td>
                                    <td>
                                        <h6>demo@gmail.com</h6>
                                    </td>
                                    <td>
                                        <h6>Manager</h6>
                                    </td>
                                    <td>
                                        <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-user">
                                            <i class="bx bxs-pencil cursor-pntr"></i>
                                        </button>
                                        <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="bx bx-trash cursor-pntr"></i>
                                        </button>
                                        
                                    </td>

                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                    <td>
                                        <h6>1</h6>
                                    </td>
                                    <td>
                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                    </td>
                                    <td>
                                        <h6>James Fernandas</h6>
                                    </td>

                                    <td>
                                        <h6>James</h6>
                                    </td>

                                    <td>
                                        <h6>1234567890</h6>
                                    </td>
                                    <td>
                                        <h6>demo@gmail.com</h6>
                                    </td>
                                    <td>
                                        <h6>Manager</h6>
                                    </td>
                                    <td>
                                        <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-user">
                                        <i class="bx bxs-pencil cursor-pntr"></i>
                                        </button>
                                        <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="bx bx-trash cursor-pntr"></i>
                                        </button>
                                        
                                    </td>

                                </tr>


                            </tbody>
                        </table>
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
                            <form class="img-upload-form">
                                <img src="assets/images/users/default.png" id="upld-image">
                                    <i class="bx bxs-pencil" onclick="makeimg()" ;></i>
                                <input type="file" oninput="previewFile()" accept="image/*" id="imgfile" />

                            </form>
                                <!-- <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview" style="background-color:#f5f5f5">
                                        <div id="imagePreview" style="background-image: url('assets/images/user-profile.avif'); background-size: contain;">
                                        </div>
                                    </div>
                                </div> -->
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
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
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
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#new-user" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#new-user" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
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

</body>

</html>