<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-dark navbar-theme-primary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-dark common" src="{{asset('img/backend-logo.jpg')}}" height="35" alt="Logo light">
                <img class="navbar-brand-light common" src="{{asset('img/backend-logo.jpg')}}" height="35" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="{{asset('img/backend-logo.jpg')}}" height="35" alt="Logo Impact">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover justify-content-center">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <span class="fas fa-home mr-2"></span> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.posts.index') }}" class="nav-link">
                            <span class="fas fa-file-alt mr-1"></span> Posts
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                            <span class="nav-link-inner-text">
                                <span class="fas fa-file-image mr-1"></span>
                                Pages
                            </span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu" id="pages_submenu">
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.posts.index') }}">
                                    <span class="fas fa-file-alt mr-1"></span> Posts
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.categories.index') }}">
                                    <span class="fas fa-sitemap mr-1"></span> Categories
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.tags.index') }}">
                                    <span class="fas fa-tags mr-1"></span> Tags
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
            <div class="d-none d-lg-block">
                @can('view_backend')
                <a href="{{ route('backend.dashboard') }}" class="btn btn-white animate-up-2 mr-3"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
                @endcan

        </div>
    </nav>
</header>
