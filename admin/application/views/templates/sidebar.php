        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
                            <g fill="none">
                                <path fill="url(#fluentColorCamera240)" d="M2 8.25A3.25 3.25 0 0 1 5.25 5H7l1.332-1.998A2.25 2.25 0 0 1 10.204 2h3.592a2.25 2.25 0 0 1 1.872 1.002L17 5h1.75A3.25 3.25 0 0 1 22 8.25v9.5A3.25 3.25 0 0 1 18.75 21H5.25A3.25 3.25 0 0 1 2 17.75z" />
                                <path fill="url(#fluentColorCamera241)" fill-opacity=".5" d="M2 8.25A3.25 3.25 0 0 1 5.25 5H7l1.332-1.998A2.25 2.25 0 0 1 10.204 2h3.592a2.25 2.25 0 0 1 1.872 1.002L17 5h1.75A3.25 3.25 0 0 1 22 8.25v9.5A3.25 3.25 0 0 1 18.75 21H5.25A3.25 3.25 0 0 1 2 17.75z" />
                                <path fill="url(#fluentColorCamera243)" fill-rule="evenodd" d="M12 17a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9" clip-rule="evenodd" />
                                <path fill="url(#fluentColorCamera242)" d="M15 12.5a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
                                <path fill="url(#fluentColorCamera244)" d="M18.5 10a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3" />
                                <defs>
                                    <radialGradient id="fluentColorCamera240" cx="0" cy="0" r="1" gradientTransform="rotate(41.108 -4.919 .133)scale(29.8616 62.1235)" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F08AF4" />
                                        <stop offset=".535" stop-color="#9C6CFE" />
                                        <stop offset="1" stop-color="#4E44DB" />
                                    </radialGradient>
                                    <radialGradient id="fluentColorCamera241" cx="0" cy="0" r="1" gradientTransform="matrix(.5 6.9091 -7.19332 .52057 14.5 14.09)" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#312A9A" />
                                        <stop offset="1" stop-color="#312A9A" stop-opacity="0" />
                                    </radialGradient>
                                    <radialGradient id="fluentColorCamera242" cx="0" cy="0" r="1" gradientTransform="matrix(5.5 6.5 -6.5 5.5 8 8)" gradientUnits="userSpaceOnUse">
                                        <stop offset=".243" stop-color="#3BD5FF" />
                                        <stop offset="1" stop-color="#2052CB" />
                                    </radialGradient>
                                    <linearGradient id="fluentColorCamera243" x1="9.193" x2="13.693" y1="8" y2="18.688" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fff" />
                                        <stop offset="1" stop-color="#DECBFF" />
                                    </linearGradient>
                                    <linearGradient id="fluentColorCamera244" x1="17" x2="20" y1="7.75" y2="10" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F08AF4" />
                                        <stop offset="1" stop-color="#F462AB" />
                                    </linearGradient>
                                </defs>
                            </g>
                        </svg>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">Studio</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item <?php echo ($menu == "home" ? "active" : "-") ?>">
                    <a href="<?= base_url('home') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>
                <!-- customer -->
                <li class="menu-item <?php echo ($menu == "customer" ? "active" : "-") ?>">
                    <a href="<?= base_url('customer') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="customer">Customer</div>
                    </a>
                </li>
                <!-- Booking -->
                <li class="menu-item <?php echo ($menu == "booking" ? "active" : "-") ?>">
                    <a href="<?= base_url('booking') ?>" class="menu-link">
                        <i class='menu-icon tf-icons bx  bx-cart'></i>
                        <div data-i18n="Booking">Booking</div>
                    </a>
                </li>
                <!-- Payment -->
                <li class="menu-item <?php echo ($menu == "payment" ? "active" : "-") ?>">
                    <a href="<?= base_url('payments') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-wallet-alt"></i>
                        <div data-i18n="Payment">Payment</div>
                    </a>
                </li>
                <!-- Package -->
                <li class="menu-item <?php echo ($menu == "package" ? "active" : "-") ?>">
                    <a href="<?= base_url('package') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-package"></i>
                        <div data-i18n="package">Package</div>
                    </a>
                </li>
                <!-- User Management -->
                <li class="menu-item <?php echo ($menu == "administrator" ? "active" : "-") ?>">
                    <a href="<?= base_url('user_account') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="user_account">User Account</div>
                    </a>
                </li>
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="<?= base_url('auth/logout') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-power-off"></i>
                        <div data-i18n="Logout">Logout</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="<?= base_url('_assets/') ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="<?= base_url('_assets/') ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block"><?= $this->session->userdata('name'); ?></span>
                                                <small class="text-muted"><?= $this->session->userdata('role'); ?></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="d-flex align-items-center align-middle">
                                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                            <span class="flex-grow-1 align-middle">Billing</span>
                                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->