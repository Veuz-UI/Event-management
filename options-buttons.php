<div class="d-flex">

    <div class="dropdown d-inline-block">
        <a href="settings.php"><button type="button" class="btn header-item noti-icon waves-effect">
            <i class="bx bx-cog bx-spin"></i>
        </button></a>
    </div>



    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-bell bx-tada"></i>
            <span class="badge bg-danger rounded-pill">3</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
            <div class="p-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="m-0" key="t-notifications"> Notifications </h5>
                    </div>
                    <div class="col-auto">
                        <a href="#!" key="t-view-all"> View All</a>
                    </div>
                </div>
            </div>
            <div data-simplebar style="max-height: 230px;">
                <a href="javascript: void(0);" class="text-reset notification-item">
                    <div class="d-flex">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                <i class="bx bx-cart"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1" key="t-your-order">Your order is placed</h5>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                <p class="mb-0 small"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="javascript: void(0);" class="text-reset notification-item">
                    <div class="d-flex">
                        <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">James Lemire</h5>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                <p class="mb-0 small"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="javascript: void(0);" class="text-reset notification-item">
                    <div class="d-flex">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                <i class="bx bx-badge-check"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1" key="t-shipped">Your item is shipped</h5>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                <p class="mb-0 small"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript: void(0);" class="text-reset notification-item">
                    <div class="d-flex">
                        <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Salena Layfield</h5>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                <p class="mb-0 small"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="p-2 border-top d-grid">
                <a class="btn btn-sm btn-link font-size-14 text-center" href="notification.php">
                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                </a>
            </div>
        </div>
    </div>

    <div class="dropdown d-inline-block user-dropdown">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="profile.php"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
            <a class="dropdown-item d-block" href="settings.php"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
        </div>
    </div>



</div>