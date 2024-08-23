
<div class="search">
    <form>
        <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
    </form>
    <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
</div>
<div class="app-header " >
    <nav class="navbar navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-nav" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                    </li>
                   
                   
                    </li>
                </ul>

            </div>
            <div class="d-flex">
                <ul class="navbar-nav">
                                       <li class="nav-item">
                        <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                    </li>
                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="../../assets/images/flags/us.png" alt=""></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                          
                          </ul>
                            
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
</div>