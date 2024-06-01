<div>
    <div class="logo-wrapper"><a href="{{route('index')}}"><img style="width: 146px; height:auto;" class="img-fluid for-light" src="{{asset('assets/images/logo/logo-unhas-dashboard.png')}}"
                alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="fa fa-cog status_toggle middle sidebar-toggle"> </i></div>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="menu-box" style="padding-top:10px !important; padding-bottom:10px !important">
                    <ul>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{Route::is('index') ? 'active' : ""}}"
                                href="{{route("index")}}"><i data-feather="server"> </i><span>Query Logs</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <h6>MongoDB </h6>
                </li>
                <li class="menu-box">
                    <ul>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{Route::is('mongodb.data.*') ? 'active' : ""}}"
                                href="{{route('mongodb.data.index')}}"><i data-feather="database"> </i><span>Data</span></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{Route::is('mongodb.create.*') ? 'active' : ""}}"
                                href="{{route('mongodb.create.form')}}"><i data-feather="clipboard"> </i><span>Create</span></a></li>
                        <!-- <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href=""><i data-feather="upload"> </i><span>Import</span></a></li> -->
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <h6>Elastic Search </h6>
                </li>
                <li class="menu-box">
                <ul>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{Route::is('elasticsearch.data.*') ? 'active' : ""}}"
                                href="{{route('elasticsearch.data.index')}}"><i data-feather="database"> </i><span>Data</span></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href=""><i data-feather="clipboard"> </i><span>Create</span></a></li>
                        <!-- <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href=""><i data-feather="upload"> </i><span>Import</span></a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>