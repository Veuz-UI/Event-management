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
                                class="btn btn-primary waves-effect waves-light btn-sm text-uppercase br-50 small"
                                data-bs-toggle="modal" data-bs-target="#invite-speaker" fdprocessedid="c5f7r">
                                <i class="bx bx bx-plus-circle font-size-16 align-middle me-1"></i>ADD SPEAKERS
                            </button>
                            <button type="button"
                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small"
                                fdprocessedid="o1w88n">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1_2621)">
                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238"
                                            stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.97803 8.44629V14.5635" stroke="#263238" stroke-width="1.35937"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.6803 12.7895C15.3432 12.4281 15.8669 11.8562 16.1687 11.1641C16.4705 10.472 16.5333 9.69914 16.347 8.96743C16.1608 8.23572 15.7362 7.58686 15.1402 7.12327C14.5443 6.65968 13.8109 6.40776 13.0559 6.40726H12.1994C11.9937 5.61151 11.6103 4.87275 11.0779 4.24653C10.5456 3.62031 9.87821 3.12291 9.12597 2.79174C8.37373 2.46057 7.5562 2.30424 6.73485 2.3345C5.91349 2.36476 5.10968 2.58083 4.38385 2.96646C3.65802 3.35209 3.02906 3.89725 2.54424 4.56095C2.05943 5.22465 1.73139 5.98962 1.58477 6.79835C1.43815 7.60708 1.47679 8.43852 1.69776 9.23017C1.91873 10.0218 2.31629 10.7531 2.86056 11.369"
                                            stroke="#263238" stroke-width="1.35937" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M11.6963 11.165L8.97754 8.44629L6.25879 11.165" stroke="#263238"
                                            stroke-width="1.35937" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1_2621">
                                            <rect width="16.3125" height="16.3125" fill="white"
                                                transform="translate(0.821289 0.290039)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>Export
                            </button>
                            <button type="button"
                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small"
                                fdprocessedid="zaul3e">
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5 10H12.875C14.5938 10 16 9.33719 16 7.6375C16 5.93781 14.3438 5.34156 13 5.275C12.7222 2.61688 10.7812 1 8.5 1C6.34375 1 4.955 2.43094 4.5 3.85C2.625 4.02812 1 4.97125 1 6.925C1 8.87875 2.6875 10 4.75 10H6.5M6.5 12.0031L8.5 14L10.5 12.0031M8.5 6.5V13.5009"
                                        stroke="#263238" stroke-width="1.36" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>Import
                            </button>
                        </div>
                        <div class="input-group search-inpt">

                            <input type="text" class="form-control ps-3" id="inlineFormInputGroupUsername"
                                placeholder="Search speakers" fdprocessedid="ev99pg">
                            <div class="input-group-text bg-white"><img src="assets/images/search.svg" alt=""></div>

                        </div>
                    </div>
                    <div class="event-table speaker-table">
                        <div class="table-responsive">
                            <table id="event-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="40px"><input class="form-check-input" type="checkbox"  id="selectAll">
                                        </th>
                                        <th width="30%">Name &amp; Email</th>
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
                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                    class="avatar-sm rounded-circle">
                                                <div class="speaker-name-email">
                                                    <h6>James Fernandas</h6>
                                                    <span>jamesfernand@gmail.com</span>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small"
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
                                            </button>
                                        </td>
                                        <td class="status">
                                            <h6>Invited - 20 minutes ago</h6>
                                            <a href="#">Reinvite</a>
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

                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                    data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                    fdprocessedid="gel9d7">Edit</button>
                                                <button type="button"
                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="tv1629">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Delete</a>


                                                </div>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" id="formCheck2"></td>
                                        <td>
                                            <div class="responsible">
                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                    class="avatar-sm rounded-circle">
                                                <div class="speaker-name-email">
                                                    <h6>James Fernandas</h6>
                                                    <span>jamesfernand@gmail.com</span>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small"
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
                                        </td>
                                        <td class="status">
                                            <h6>Invited - 20 minutes ago</h6>
                                            <a href="#">Reinvite</a>
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

                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                    data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                    fdprocessedid="36jrws">Edit</button>
                                                <button type="button"
                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="v2rqm">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Delete</a>


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" id="formCheck3"></td>
                                        <td>
                                            <div class="responsible">
                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                    class="avatar-sm rounded-circle">
                                                <div class="speaker-name-email">
                                                    <h6>James Fernandas</h6>
                                                    <span>jamesfernand@gmail.com</span>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small"
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
                                        </td>
                                        <td class="status">
                                            <h6>Invited - 20 minutes ago</h6>
                                            <a href="#">Reinvite</a>
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

                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                    data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                    fdprocessedid="x1vofl">Edit</button>
                                                <button type="button"
                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="yoga0t">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Delete</a>


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" id="formCheck4"></td>
                                        <td>
                                            <div class="responsible">
                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                    class="avatar-sm rounded-circle">
                                                <div class="speaker-name-email">
                                                    <h6>James Fernandas</h6>
                                                    <span>jamesfernand@gmail.com</span>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm small"
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
                                        </td>
                                        <td class="status">
                                            <h6>Invited - 20 minutes ago</h6>
                                            <a href="#">Reinvite</a>
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

                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light1 text-uppercase px-3"
                                                    data-bs-toggle="modal" data-bs-target="#invite-speaker"
                                                    fdprocessedid="k32ooh">Edit</button>
                                                <button type="button"
                                                    class="btn btn-light1 dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false" fdprocessedid="k6tvolm">
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
    <script src="assets/js/aos.js"></script>
    <script>
        AOS.init();
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
        $("#imageUpload").change(function() {
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
    $('#selectAll').click(function (e) {
        $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
    });
</script>

</body>

</html>