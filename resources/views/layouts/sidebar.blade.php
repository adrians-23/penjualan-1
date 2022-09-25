<aside class="left-panel col-12 col-md-2 p-3 bg-dark flex-shrink-1" style="min-height : 100vh; overflow-x: hidden; top: 0; left: 0; width: 200px;">
    <nav class="navbar navbar-expand navbar-default navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">

        <div class="navbar-header">
            <a class="navbar-brand" href="/"><h2>SEKOLAH</h2></a>
        </div>
        
        <div class="main-menu collapse navbar-collapse">
            <ul class="nav flex-md-column flex-row navbar-nav w-100 justify-content-between">
                
                <hr style="color: white; width: 155px;">

                {{-- <li class="nav-item h1">
                    <a class="nav-link font-monospace fw-semibold pl-0" href="/">SEKOLAH</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link pl-0" href="/"> <span class="d-none d-md-inline"><i class="fa-solid fa-gauge-simple mx-1"></i>Dashboard</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pl-0" href="/kelas"> <span class="d-none d-md-inline"><i class="fa-solid fa-house-user mx-1"></i> Kelas</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pl-0" href="/siswa"> <span class="d-none d-md-inline"><i class="fa-solid fa-users mx-1"></i> Siswa</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pl-0" href="/mapel"> <span class="d-none d-md-inline"><i class="fa-solid fa-book mx-1"></i> Mapel</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pl-0" href="/guru"> <span class="d-none d-md-inline"><i class="fa-solid fa-user-graduate mx-1"></i> Guru</span></a>
                </li>
                
            </ul>
        </div>
    </nav>
</aside>

{{-- Template --}}

<!-- Left Panel -->

{{-- <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default flex-md-column">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">Sekolah</a>
            <a class="navbar-brand hidden" href="/">S</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li>
                    <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Kelas </a>
                </li>

                <li>
                    <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Siswa </a>
                </li>

                <li>
                    <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Mapel </a>
                </li>

                <li>
                    <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Guru </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>

 <!-- Header-->
 <header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="count bg-danger">5</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="notification">
                    <p class="red">You have 3 Notification</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                        <i class="fa fa-check"></i>
                        <p>Server #1 overloaded.</p>
                    </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                        <i class="fa fa-info"></i>
                        <p>Server #2 overloaded.</p>
                    </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                        <i class="fa fa-warning"></i>
                        <p>Server #3 overloaded.</p>
                    </a>
                  </div>
                </div>

                <div class="dropdown for-message">
                  <button class="btn btn-secondary dropdown-toggle" type="button"
                        id="message"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-email"></i>
                    <span class="count bg-primary">9</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="message">
                    <p class="red">You have 4 Mails</p>
                    <a class="dropdown-item media bg-flat-color-1" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Jonathan Smith</span>
                            <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                        </span>
                    </a>
                    <a class="dropdown-item media bg-flat-color-4" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Jack Sanders</span>
                            <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </span>
                    </a>
                    <a class="dropdown-item media bg-flat-color-5" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Cheryl Wheeler</span>
                            <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                        </span>
                    </a>
                    <a class="dropdown-item media bg-flat-color-3" href="#">
                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                        <span class="message media-body">
                            <span class="name float-left">Rachel Santos</span>
                            <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </span>
                    </a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                    <i class="flag-icon flag-icon-us"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="language" >
                    <div class="dropdown-item">
                        <span class="flag-icon flag-icon-fr"></span>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-es"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-us"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-it"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</header><!-- /header --> --}}