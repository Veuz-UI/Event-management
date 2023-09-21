<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Event Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="Event Management" name="description" />
  <meta content="Event Management" name="author" />
  <link rel="shortcut icon" href="assets/images/favicon.svg" />
  <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link href="assets/css/form.css" rel="stylesheet" />
</head>

<body class="ovrflw body-gray">
  <?php include 'loader.php';?>

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
            <li>Tickets</li>
          </ul>
        </div>
      </div>
      <div class="header-right-btns">
        <a href="#"><button type="button"
            class="btn btn-outline-secondary waves-effect waves-light btn-md text-uppercase br-50 small">
            <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M2.70349 2.02734C1.58368 2.02734 0.675903 2.93513 0.675903 4.05493V14.8687C0.675903 15.9885 1.58368 16.8963 2.70349 16.8963H9.0397L8.87073 18.248H6.0828C5.70953 18.248 5.40694 18.5506 5.40694 18.9239C5.40694 19.2972 5.70953 19.5998 6.0828 19.5998H15.5449C15.9181 19.5998 16.2207 19.2972 16.2207 18.9239C16.2207 18.5506 15.9181 18.248 15.5449 18.248H12.7569L12.588 16.8963H18.9242C20.044 16.8963 20.9518 15.9885 20.9518 14.8687V4.05493C20.9518 2.93513 20.044 2.02734 18.9242 2.02734H2.70349ZM2.02763 4.05493C2.02763 3.68166 2.33022 3.37907 2.70349 3.37907H18.9242C19.2974 3.37907 19.6 3.68166 19.6 4.05493V12.8411H2.02763V4.05493ZM10.8138 15.5446C10.9931 15.5446 11.165 15.4734 11.2917 15.3466C11.4185 15.2199 11.4897 15.048 11.4897 14.8687C11.4897 14.735 11.4501 14.6044 11.3758 14.4932C11.3015 14.3821 11.196 14.2955 11.0725 14.2443C10.949 14.1932 10.8131 14.1798 10.682 14.2058C10.5509 14.2319 10.4304 14.2963 10.3359 14.3908C10.2414 14.4853 10.177 14.6058 10.151 14.7369C10.1249 14.868 10.1383 15.0039 10.1894 15.1274C10.2406 15.2509 10.3272 15.3564 10.4383 15.4307C10.5495 15.5049 10.6802 15.5446 10.8138 15.5446Z"
                fill="#263238" />
            </svg>
            Preview
          </button>
        </a>
        <a href="published-event.php"><button type="button"
            class="btn btn-primary btn-publish waves-effect waves-light btn-md text-uppercase br-50 small">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.99996 1.6665C5.39996 1.6665 1.66663 5.39984 1.66663 9.99984C1.66663 14.5998 5.39996 18.3332 9.99996 18.3332C14.6 18.3332 18.3333 14.5998 18.3333 9.99984"
                stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M10.8334 9.1665L17.6667 2.33317M18.3334 5.6915V1.6665H14.3084" stroke="white" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Publish
          </button></a>
      </div>
    </header>

    <div class="main-content-div">
      <div class="leftside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="conference.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 6H21" stroke="#94949E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8 12H21" stroke="#94949E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8 18H21" stroke="#94949E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 6H3.01" stroke="#94949E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 12H3.01" stroke="#94949E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 18H3.01" stroke="#94949E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

              <span>Event details</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="conference.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                  stroke="#94949E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16 2V6" stroke="#94949E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8 2V6" stroke="#94949E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 10H21" stroke="#94949E" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

              <span>Agenda</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link a" href="conference.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 1C11.2044 1 10.4413 1.31607 9.87868 1.87868C9.31607 2.44129 9 3.20435 9 4V12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12V4C15 3.20435 14.6839 2.44129 14.1213 1.87868C13.5587 1.31607 12.7956 1 12 1Z"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M19 10V12C19 13.8565 18.2625 15.637 16.9497 16.9497C15.637 18.2625 13.8565 19 12 19C10.1435 19 8.36301 18.2625 7.05025 16.9497C5.7375 15.637 5 13.8565 5 12V10"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 19V23" stroke="#94949E" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M8 23H16" stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

              <span>Speakers</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link active" href="conference.php">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9 14.75L15 8.75M19.5 12.5C19.5 11.837 19.7634 11.2011 20.2322 10.7322C20.7011 10.2634 21.337 10 22 10V9C22 5 21 4 17 4H7C3 4 2 5 2 9V9.5C2.66304 9.5 3.29893 9.76339 3.76777 10.2322C4.23661 10.7011 4.5 11.337 4.5 12C4.5 12.663 4.23661 13.2989 3.76777 13.7678C3.29893 14.2366 2.66304 14.5 2 14.5V15C2 19 3 20 7 20H17C21 20 22 19 22 15C21.337 15 20.7011 14.7366 20.2322 14.2678C19.7634 13.7989 19.5 13.163 19.5 12.5Z"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M14.995 14.75H15.004M8.995 9.25H9.003" stroke="#94949E" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <span>Tickets</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="conference.php">
              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17 21.5V19.5C17 18.4391 16.5786 17.4217 15.8284 16.6716C15.0783 15.9214 14.0609 15.5 13 15.5H5C3.93913 15.5 2.92172 15.9214 2.17157 16.6716C1.42143 17.4217 1 18.4391 1 19.5V21.5"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M9 11.5C11.2091 11.5 13 9.70914 13 7.5C13 5.29086 11.2091 3.5 9 3.5C6.79086 3.5 5 5.29086 5 7.5C5 9.70914 6.79086 11.5 9 11.5Z"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M23 21.4999V19.4999C22.9993 18.6136 22.7044 17.7527 22.1614 17.0522C21.6184 16.3517 20.8581 15.8515 20 15.6299"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M16 3.62988C16.8604 3.85018 17.623 4.35058 18.1676 5.05219C18.7122 5.7538 19.0078 6.61671 19.0078 7.50488C19.0078 8.39305 18.7122 9.25596 18.1676 9.95757C17.623 10.6592 16.8604 11.1596 16 11.3799"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

              <span>Sponsors</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="conference.php">
              <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.625 6.78947V11.5263M19.375 6.78947V11.5263M21.266 5.65263V5.65263C21.7215 5.37828 22 4.88541 22 4.35371V3.69036C22 2.20451 20.7955 1 19.3096 1H3.69C2.20435 1 1 2.20435 1 3.69V4.35326C1 4.88522 1.27871 5.37829 1.73448 5.65263V5.65263C2.30557 5.99609 2.95903 6.17751 3.625 6.17751C4.29097 6.17751 4.94443 5.99609 5.51552 5.65263V5.65263C5.96714 5.38079 6.53242 5.38065 6.98395 5.65263V5.65263C7.55517 5.99629 8.20882 6.17783 8.875 6.17783C9.54118 6.17783 10.1948 5.99629 10.766 5.65263V5.65263C11.2176 5.38065 11.7829 5.38079 12.2345 5.65263V5.65263C12.8056 5.99619 13.4592 6.17767 14.1253 6.17767C14.7913 6.17767 15.4449 5.99619 16.016 5.65263V5.65263C16.4676 5.38065 17.0329 5.38079 17.4845 5.65263V5.65263C18.0556 5.99619 18.7092 6.17767 19.3753 6.17767C20.0413 6.17767 20.6949 5.99619 21.266 5.65263ZM17.325 11.5263H5.675C3.67297 11.5263 2.05 13.1493 2.05 15.1513V17.375C2.05 19.377 3.67297 21 5.675 21H17.325C19.327 21 20.95 19.377 20.95 17.375V15.1513C20.95 13.1493 19.327 11.5263 17.325 11.5263Z"
                  stroke="#94949E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs" />
              </a>
            </div>
            <div class="avatar-group-item">
              <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs" />
              </a>
            </div>
            <div class="avatar-group-item">
              <a href="javascript: void(0);" class="d-inline-block" value="member-6">
                <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xs" />
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
              <a href="javascript: void(0);" class="d-inline-block">
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
            <div class="tab-content py-3">
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
  </div>

  <!-- Modal -->
  <div class="modal fade" id="add-ticket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            <img src="assets/images/ticket.svg" alt="" /><span>Add ticket class</span>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-grp">
                <label class="form-label">Ticket Name<span>*</span></label>
                <input class="form-control" type="text" placeholder="Gold" />
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
                <input class="form-control" type="text" value="100" />
              </div>
              <div class="form-grp">
                <label class="form-label price-label">Price
                  <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Price"></i></label>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-check form-radio-outline form-radio-danger price-radio">
                      <input class="form-check-input" type="radio" name="formRadio5" id="formRadio5" />
                      <label class="form-check-label" for="formRadio5"> </label>
                      <div class="input-group">
                        <select class="form-select light-btn" style="min-width: 30x !important">
                          <option value="BT" selected="">$</option>
                          <option value="ET">₹</option>
                          <option value="LT">AED</option>
                          <option value="LT">SAR</option>
                        </select>

                        <input type="text" class="form-control" aria-label="" id="dropdown-on-both" value="100" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-radio-outline form-radio-danger price-radio">
                      <input class="form-check-input" type="radio" name="formRadio5" id="formRadio5" checked="" />
                      <label class="form-check-label" for="formRadio5"> Free </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-grp">
                <div class="row">
                  <div class="col-md-6 mb-2 mb-md-0">
                    <label class="form-label">Minimum Buying Limit</label>
                    <input class="form-control" type="text" value="1" />
                  </div>
                  <div class="col-md-6 mb-2 mb-md-0">
                    <label class="form-label">Maximum Buying Limit</label>
                    <input class="form-control" type="text" value="10" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-grp">
                <div class="row">
                  <div class="col-md-6 mb-2 mb-md-0">
                    <label class="form-label">Sales Starts Date</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control" placeholder="dd M, yyyy" value="01 Sep, 2023"
                        data-date-format="dd M, yyyy" data-date-container="#datepicker2" data-provide="datepicker"
                        data-date-autoclose="true" />

                      <span class="input-group-text"><img src="assets/images/input-cal.svg" alt="" /></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Time</label>
                    <div class="input-group" id="timepicker-input-group1">
                      <input id="timepicker" type="text" class="form-control" data-provide="timepicker" />
                      <span class="input-group-text"><img src="assets/images/input-time.svg" alt="" /></span>
                    </div>
                  </div>
                  <div class="col-md-12 mt-2 mb-1">
                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                      <input class="form-check-input" type="checkbox" name="formRadio6" id="formRadio5" />
                      <label class="form-check-label" for="formRadio6"> Now </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-grp">
                <div class="row">
                  <div class="col-md-6 mb-2 mb-md-0">
                    <label class="form-label">Sales End Date</label>
                    <div class="input-group" id="datepicker2">
                      <input type="text" class="form-control" placeholder="dd M, yyyy" value="05 Sep, 2023"
                        data-date-format="dd M, yyyy" data-date-container="#datepicker2" data-provide="datepicker"
                        data-date-autoclose="true" />

                      <span class="input-group-text"><img src="assets/images/input-cal.svg" alt="" /></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Time</label>
                    <div class="input-group" id="timepicker-input-group2">
                      <input id="timepicker2" type="text" class="form-control" data-provide="timepicker" />
                      <span class="input-group-text"><img src="assets/images/input-time.svg" alt="" /></span>
                    </div>
                  </div>
                  <div class="col-md-12 mt-2 mb-1">
                    <div class="form-check form-radio-outline form-radio-danger evnt-radio">
                      <input class="form-check-input" type="checkbox" name="formRadio7" id="formRadio5" />
                      <label class="form-check-label" for="formRadio7"> Event End Date </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-grp">
                <label class="form-label">Ticket Description</label>
                <div class="editor1"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="ticket.php">
            <button type="button" class="btn btn-primary text-uppercase br-50 btn-md">
              Done
            </button>
          </a>
          <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">
            Close
          </button>
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
  <script src="assets/libs/ckediter/ckeditor.js"></script>
  <script src="assets/js/pages/bootstrap-taginput.js"></script>
  <script>
    ClassicEditor.create(document.querySelector('.editor1')).catch((error) => {
      console.error(error);
    });
  </script>
  <script>
    $('#inputTag').tagsinput('items');
  </script>
  <script>
    $(function () {
      setTimeout(function () {
        // $('.loader-mask').delay(350).fadeOut('slow')
        $('.loader-mask').hide();
      }, 1000);
    });
  </script>
</body>

</html>
