<!--========== SCROLL TOP ==========-->
<a href="#" class="scrolltop" id="scroll-top">
    <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
</a>

<!--========== HEADER ==========-->
<header class="l-header" id="header">
    <nav class="nav bd-container">
        <a href="#" class="nav__logo">Virtual Clinique</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                @if (auth()->user())
                    @if (auth()->user()->isDoctor())
                
                        <li class="nav__item"><a href="{{ url('/') }}" class="nav__link">Doctor</a></li>
                        <li class="nav__item"><a href="{{ route('calendar') }}" class="nav__link">Calendar</a></li>
                        <li class="nav__item"><a href="{{ route('get_appointements') }}" class="nav__link">rendez-vous non-confirmés</a></li>
                        <li class="nav__item"><a href="{{ route('get_appointements_patient') }}" class="nav__link">rendez-vous(Autant que patient)</a></li>
                        <li class="nav__item"><a href="{{ route('unreaded_notifications') }}" class="nav__link">Notification</a></li>                            
                        <li class="nav__item"><a href="{{ route('doctors_list') }}" class="nav__link">find doctor</a></li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="newbuttonlogout" type="submit" class="nav__link">Logout</button>
                        </form>
                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    @elseif (auth()->user()->isAdmin())
                        <li class="nav__item"><a href="{{ route('admin') }}" class="nav__link">Espace admin</a></li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="newbuttonlogout" type="submit" class="nav__link clksajls">Logout</button>
                        </form>
                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    
                    @else
                    
                        <li class="nav__item"><a href="{{ url('/') }}" class="nav__link">Patient</a></li>
                        <li class="nav__item"><a href="{{ route('get_appointements_patient') }}" class="nav__link">Mes rendez-vous</a></li>
                        <li class="nav__item"><a href="{{ route('unreaded_notifications') }}" class="nav__link">Notification</a></li>
                        <li class="nav__item"><a href="{{ route('doctors_list') }}" class="nav__link">find doctor</a></li>
                        <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="newbuttonlogout" type="submit" class="nav__link clksajls">Logout</button>
                        </form>
                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                        

                    @endif
                    
                @else
                    
                    <li class="nav__item"><a href="{{ url('/') }}" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="{{ route('login') }}" class="nav__link">Login</a></li>
                    <li class="nav__item"><a href="{{ route('register') }}" class="nav__link">Registre</a></li>
                    <li class="nav__item"><a href="{{ route('doctors_list') }}" class="nav__link">find doctor</a></li>
                    <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    
                @endif   
                   
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-grid-alt'></i>
        </div>
    </nav>
</header>