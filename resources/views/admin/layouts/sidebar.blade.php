<div class="wrapper" style="background: url(../assets/images/background.png); background-attachment: fixed; background-size: cover; ">
        <div class="iq-sidebar  sidebar-default ">
        <div class="iq-sidebar-logo d-flex align-items-center">
            <a href="index.html" class="header-logo">
                <img src="../assets/images/logo.png" alt="logo">
                <h2 class=" light-logo">GLARE</h2>
            </a>
            <div class="iq-menu-bt-sidebar ml-0">
                <i class="las la-bars wrapper-menu"></i>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
            <nav class="iq-sidebar-menu">
                <h6 class="sidebar-text text-uppercase font-weight-bold">main</h6>
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="active">
                        <a href="index.html" class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            <span class="ml-3">Sales Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="analytics.html" class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Analytics Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <h6 class=" text-uppercase sidebar-text font-weight-bold">Management</h6>
                    </li>
                    <li>
                        <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa-brands fa-product-hunt"></i>
                            <!-- <span class="ml-3">User Details</span> -->
                            <span class="ml-3">Products Management</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="../app/user-profile.html">
                                    <i class="las la-minus"></i><span>Product Listings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../app/user-add.html">
                                    <i class="las la-minus"></i><span>Categories and Subcategories</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../app/user-list.html">
                                    <i class="las la-minus"></i><span>Inventory Management</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../app/user-list.html">
                                    <i class="las la-minus"></i><span>Product Details Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                            </svg>
                            <!-- <span class="ml-3">UI Elements</span> -->
                            <span class="ml-3"> Orders Management</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="ui" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="ui-avatars.html">
                                    <i class="las la-minus"></i><span>Order Listing</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="ui-alerts.html">
                                    <i class="las la-minus"></i><span>Order Details Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                           <i class="fa-solid fa-user-group"></i>
                            <span class="ml-3">Customers Management</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="../app/user-profile.html">
                                    <i class="las la-minus"></i><span>User Listings</span>
                                </a>
                            </li>
                            <!-- <li class="">
                                <a href="../app/user-add.html">
                                    <i class="las la-minus"></i><span>User Add</span>
                                </a>
                            </li> -->
                            <li class="">
                                <a href="../app/user-list.html">
                                    <i class="las la-minus"></i><span>User Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewbox="0 0 20 20" fill="currentColor" width="20" height="20">
                                <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                            </svg> -->

                            <i class="fa-solid fa-pen-fancy"></i>
                            <!-- <span class="ml-3">Forms</span> -->
                            <span class="ml-3">Content Management</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="form-layout.html">
                                    <i class="las la-minus"></i><span class="">Pages</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="form-input-group.html" class="svg-icon">
                                    <i class="las la-minus"></i><span class="">Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h6 class=" text-uppercase sidebar-text font-weight-bold">Marketing and Promotions</h6>
                    </li>

                    <li class="">
                        <a href="#discount" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-tag"></i>
                            <!-- <span class="ml-3">Table</span> -->
                            <span class="ml-3">Discounts / Coupon</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="discount" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="tables-basic.html">
                                    <i class="las la-minus"></i><span>Discounts and Coupon</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#marketing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            <!-- <span class="ml-3">Table</span> -->
                            <span class="ml-3">Marketing</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="marketing" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="table-data.html">
                                    <i class="las la-minus"></i><span>Email Marketing</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="table-data.html">
                                    <i class="las la-minus"></i><span>WhatsApp Marketing</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="table-tree.html">
                                    <i class="las la-minus"></i><span>Affiliate</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <h6 class=" text-uppercase sidebar-text font-weight-bold">Others</h6>
                    </li>
                    <li class="">
                        <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-chart-line"></i>
                            <!-- <span class="ml-3">Table</span> -->
                            <span class="ml-3">Analytics and Reporting</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="table" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="tables-basic.html">
                                    <i class="las la-minus"></i><span>Basic Tables</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="table-data.html">
                                    <i class="las la-minus"></i><span>Data Table</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="table-tree.html">
                                    <i class="las la-minus"></i><span>Table Tree</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewbox="0 0 20 20" fill="currentColor" width="20" height="20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                            </svg> -->

                            <i class="fa-solid fa-gear"></i>
                            <!-- <span class="ml-3">Pricing</span> -->
                            <span class="ml-3">Settings</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="pricing" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="pricing.html">
                                    <i class="las la-minus"></i><span>General Settings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pricing-2.html">
                                    <i class="las la-minus"></i><span>Payment Gateway</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pricing-2.html">
                                    <i class="las la-minus"></i><span>Shipping Options</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pricing-2.html">
                                    <i class="las la-minus"></i><span>Tax Settings</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pricing-2.html">
                                    <i class="las la-minus"></i><span>Security</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pricing-2.html">
                                    <i class="las la-minus"></i><span>Mail Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" width="20" height="20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <!-- <span class="ml-3">Error</span> -->
                            <span class="ml-3">System Tools</span>
                            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                        </a>
                        <ul id="pages-error" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="pages-error.html">
                                    <i class="las la-minus"></i><span>Backup and Restore</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pages-error-500.html">
                                    <i class="las la-minus"></i><span>Updates</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="pages-error-500.html">
                                    <i class="las la-minus"></i><span>Logs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="pt-5 pb-2"></div>
        </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 274px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 132.114px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
    </div>        </div>