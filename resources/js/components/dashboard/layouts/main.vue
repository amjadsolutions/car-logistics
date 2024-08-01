<template>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-widget="pushmenu"
                        href="#"
                        role="button"
                        ><i class="fas fa-bars"></i
                    ></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-widget="navbar-search"
                        href="#"
                        role="button"
                    >
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input
                                    class="form-control form-control-navbar"
                                    type="search"
                                    placeholder="Search"
                                    aria-label="Search"
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn btn-navbar"
                                        type="submit"
                                    >
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button
                                        class="btn btn-navbar"
                                        type="button"
                                        data-widget="navbar-search"
                                    >
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                    >
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img
                                    src="http://127.0.0.1:8000/img/user1-128x128.jpg"
                                    alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle"
                                />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span
                                            class="float-right text-sm text-danger"
                                            ><i class="fas fa-star"></i
                                        ></span>
                                    </h3>
                                    <p class="text-sm">
                                        Call me whenever you can...
                                    </p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4
                                        Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img
                                    src="http://127.0.0.1:8000/img/user8-128x128.jpg"
                                    alt="User Avatar"
                                    class="img-size-50 img-circle mr-3"
                                />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span
                                            class="float-right text-sm text-muted"
                                            ><i class="fas fa-star"></i
                                        ></span>
                                    </h3>
                                    <p class="text-sm">
                                        I got your message bro
                                    </p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4
                                        Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img
                                    src="http://127.0.0.1:8000/img/user3-128x128.jpg"
                                    alt="User Avatar"
                                    class="img-size-50 img-circle mr-3"
                                />
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span
                                            class="float-right text-sm text-warning"
                                            ><i class="fas fa-star"></i
                                        ></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i> 4
                                        Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer"
                            >See All Messages</a
                        >
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                    >
                        <span class="dropdown-item dropdown-header"
                            >15 Notifications</span
                        >
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm"
                                >3 mins</span
                            >
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm"
                                >12 hours</span
                            >
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm"
                                >2 days</span
                            >
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer"
                            >See All Notifications</a
                        >
                    </div>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-widget="fullscreen"
                        href="#"
                        role="button"
                    >
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-widget="control-sidebar"
                        data-slide="true"
                        href="#"
                        role="button"
                    >
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside
            class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4"
        >
            <a href="../../index3.html" class="brand-link">
                <img
                    src="http://127.0.0.1:8000/img/AdminLTELogo.png"
                    alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: 0.8"
                />
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div
                class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"
            >
                <div class="os-resize-observer-host observed">
                    <div
                        class="os-resize-observer"
                        style="left: 0px; right: auto"
                    ></div>
                </div>
                <div
                    class="os-size-auto-observer observed"
                    style="height: calc(100% + 1px); float: left"
                >
                    <div class="os-resize-observer"></div>
                </div>

                <div class="os-padding">
                    <div
                        class="os-viewport os-viewport-native-scrollbars-invisible"
                        style="overflow-y: scroll"
                    >
                        <div
                            class="os-content"
                            style="padding: 0px 8px; height: 100%; width: 100%"
                        >
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img
                                        src="http://127.0.0.1:8000/img/user2-160x160.jpg"
                                        class="img-circle elevation-2"
                                        alt="User Image"
                                    />
                                </div>
                                <div class="info">
                                    <a href="#" class="d-block"
                                        >Alexander Pierce</a
                                    >
                                </div>
                            </div>

                            <div class="form-inline">
                                <div
                                    class="input-group"
                                    data-widget="sidebar-search"
                                >
                                    <input
                                        class="form-control form-control-sidebar"
                                        type="search"
                                        placeholder="Search"
                                        aria-label="Search"
                                    />
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <nav class="mt-2">
                                <ul
                                    class="nav nav-pills nav-sidebar flex-column"
                                    data-widget="treeview"
                                    role="menu"
                                    data-accordion="false"
                                >
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="nav-icon fas fa-tachometer-alt"
                                            ></i>
                                            <p>
                                                Dashboard
                                                <i
                                                    class="right fas fa-angle-left"
                                                ></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a
                                                    href="../../index.html"
                                                    class="nav-link"
                                                >
                                                    <i
                                                        class="far fa-circle nav-icon"
                                                    ></i>
                                                    <p>Dashboard v1</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    href="../../index2.html"
                                                    class="nav-link"
                                                >
                                                    <i
                                                        class="far fa-circle nav-icon"
                                                    ></i>
                                                    <p>Dashboard v2</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    href="../../index3.html"
                                                    class="nav-link"
                                                >
                                                    <i
                                                        class="far fa-circle nav-icon"
                                                    ></i>
                                                    <p>Dashboard v3</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="../widgets.html"
                                            class="nav-link"
                                        >
                                            <i class="nav-icon fas fa-th"></i>
                                            <p>
                                                Widgets
                                                <span
                                                    class="right badge badge-danger"
                                                    >New</span
                                                >
                                            </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="fas fa-circle nav-icon"
                                            ></i>
                                            <p>Level 1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="nav-icon fas fa-circle"
                                            ></i>
                                            <p>
                                                Level 1
                                                <i
                                                    class="right fas fa-angle-left"
                                                ></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i
                                                        class="far fa-circle nav-icon"
                                                    ></i>
                                                    <p>Level 2</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i
                                                        class="far fa-circle nav-icon"
                                                    ></i>
                                                    <p>
                                                        Level 2
                                                        <i
                                                            class="right fas fa-angle-left"
                                                        ></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a
                                                            href="#"
                                                            class="nav-link"
                                                        >
                                                            <i
                                                                class="far fa-dot-circle nav-icon"
                                                            ></i>
                                                            <p>Level 3</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a
                                                            href="#"
                                                            class="nav-link"
                                                        >
                                                            <i
                                                                class="far fa-dot-circle nav-icon"
                                                            ></i>
                                                            <p>Level 3</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a
                                                            href="#"
                                                            class="nav-link"
                                                        >
                                                            <i
                                                                class="far fa-dot-circle nav-icon"
                                                            ></i>
                                                            <p>Level 3</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i
                                                        class="far fa-circle nav-icon"
                                                    ></i>
                                                    <p>Level 2</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="fas fa-circle nav-icon"
                                            ></i>
                                            <p>Level 1</p>
                                        </a>
                                    </li>
                                    <li class="nav-header">LABELS</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle text-danger"
                                            ></i>
                                            <p class="text">Important</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle text-warning"
                                            ></i>
                                            <p>Warning</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle text-info"
                                            ></i>
                                            <p>Informational</p>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div
                    class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"
                >
                    <div class="os-scrollbar-track">
                        <div
                            class="os-scrollbar-handle"
                            style="width: 100%; transform: translate(0px, 0px)"
                        ></div>
                    </div>
                </div>
                <div
                    class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"
                >
                    <div class="os-scrollbar-track">
                        <div
                            class="os-scrollbar-handle"
                            style="
                                height: 16.3175%;
                                transform: translate(0px, 0px);
                            "
                        ></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Fixed Layout</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Layout</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Fixed Layout
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <slot></slot>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong
                >Copyright © 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong
            >
            All rights reserved.
        </footer>

        <div id="sidebar-overlay"></div>
    </div>
</template>

<script>
export default {
    name: "main",
};
</script>

<style scoped>
/* Scoped styles for the Main layout */
header,
aside,
main,
footer {
    padding: 1rem;
}
</style>
