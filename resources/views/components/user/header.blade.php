

<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index-2.html" class="navbar-brand logo">
                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index-2.html" class="menu-logo">
                        <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                            class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="listings.html">Listings</a></li>
                    {{-- <li class="has-submenu">
                        <a href>Listings <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="listing-grid.html">Listing Grid</a></li>
                            <li><a href="listing-grid-sidebar.html">Listing Grid Sidebar</a></li>
                            <li><a href="listing-list-sidebar.html">Listing List Sidebar</a></li>
                            <li><a href="listingmap-list.html">Listing List Map</a></li>
                            <li><a href="listingmap-grid.html">Listing Grid Map</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="blog.html">Blog</a></li>
                    {{-- <li class="has-submenu">
                        <a href>Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>
                            <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="contact.html">Contact</a></li>
                    <li class="login-link">
                        <a href="signup.html">Sign Up</a>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Sign In</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link add-listing" href="add-listing.html"><span><i
                                class="fa-solid fa-plus"></i></span>Add Listing</a>
                </li>
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle profile-userlink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @php
                        $profileImg = app(\App\Models\UserDetails::class)->where('user_id', Auth::id())->value('profile_img');
                        $profileImg = $profileImg ?? 'assets/img/profile-img.jpg';
                        @endphp
                        <img src="{{$profileImg}}"  alt>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{route('profile')}}">Profile Settings</a>
                        {{-- <a class="dropdown-item" href="login.html">Logout</a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>