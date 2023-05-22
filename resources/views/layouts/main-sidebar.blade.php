<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-primary bg-primary bg-gradient sidebar-left" data-perfect-scrollbar>
            <div class="sidebar-heading sidebar-m-t">Menu</div>
            <ul class="sidebar-menu">

                <li class="sidebar-menu-item active">
                    <a class="sidebar-menu-button" href="{{url('/')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text"> Dashboard</span>
                    </a>
                </li>

                @can('isAdmin')

                {{-- Rooms --}}
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{url('/salles')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text"> Salles</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{route('reservation.index')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text"> Reservations</span>
                    </a>
                </li>

                {{-- <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse"  href="#reservation_menu">
                        <i class="bi bi-calendar-day"></i>
                        <span class="pl-4 sidebar-menu-text">Reservations</span>
                        <span class="ml-auto"><i class="bi bi-caret-down-fill"></i></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="reservation_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="index.html">
                                <i class="bi bi-plus-circle"></i> 
                                <span class="sidebar-menu-text">Ajouter Reservations</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="">
                                <i class="bi bi-eye"></i>
                                <span class="sidebar-menu-text">Voire Reservations</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="">
                                <i class="bi bi-pencil-square"></i>
                                <span class="sidebar-menu-text">Modifier Reservations</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="">
                                <i class="bi bi-trash3"></i>
                                <span class="sidebar-menu-text">Supprimer Reservations</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}


                {{-- Menu SideBar --}}

                
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button"  href="{{route('equipment.index')}}">
                        <i class="bi bi-grid-fill"></i>
                        <span class="pl-4 sidebar-menu-text">Equipments</span>
                    </a>
                </li>
                @endcan

                @can('isResponsible')
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button"  href="{{route('equipment.index')}}">
                        <i class="bi bi-grid-fill"></i>
                        <span class="pl-4 sidebar-menu-text">Equipments</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button"  href="{{route('equipment.create')}}">
                        <i class="bi bi-grid-fill"></i>
                        <span class="pl-4 sidebar-menu-text">Ajouter Equipment</span>
                    </a>
                </li>
                @endcan
            </ul>
            
        </div>

    </div>
</div>