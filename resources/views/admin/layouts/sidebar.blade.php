<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
        {{-- <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="assets/images/avatars/avatar.png">
                <span class="activity-indicator"></span>
                <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
            </a>
        </div> --}}
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Post
            </li>
            <li>
                <a href=""><i  class="material-icons-two-tone">menu</i>Blogs<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('blog')}}">Blogs</a>
                        
                    </li>
                    <li>
                        <a href="{{route('blog/form')}}">Insert</a>
                    </li>
                    <li>
                        <a href="{{route('blog/edit')}}">Update</a>
                    </li>
                                
                </ul>
            </li>
           
            <li class="sidebar-title">
                Transports
            </li>
            <li>
                <a href=""><i  class="material-icons-two-tone">menu</i>Cars<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('car')}}">Index</a>
                        
                    </li>
                    <li>
                        <a href="{{route('car/form')}}">Insert</a>
                    </li>
                    {{-- <li>
                        <a href="{{route('car/edit')}}">Update</a>
                    </li> --}}
                                
                </ul>
            </li>
           
              </ul>
    </div>
</div>