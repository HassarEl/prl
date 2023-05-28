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
                {{-- Administrator --}}

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse"  href="#admin">
                        <i class="bi bi-lock"></i>
                        <span class="pl-4 sidebar-menu-text">Administrator</span>
                        <span class="ml-auto"><i class="bi bi-caret-down-fill"></i></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="admin">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="{{ route('administrator.index') }}">
                                <i class="bi bi-caret-right"></i> 
                                <span class="sidebar-menu-text">Personneles</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('administrator.create') }}">
                                <i class="bi bi-plus-circle"></i>
                                <span class="sidebar-menu-text">Create user</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="#">
                                <i class="bi bi-plus-circle"></i>
                                <span class="sidebar-menu-text">Affectation</span>
                            </a>
                        </li>
                    </ul>
                </li>




                {{-- Rooms --}}
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse"  href="#salle">
                        <i class="bi bi-node-plus"></i>
                        <span class="pl-4 sidebar-menu-text">Salles</span>
                        <span class="ml-auto"><i class="bi bi-caret-down-fill"></i></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="salle">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="{{route('salles')}}">
                                <i class="bi bi-caret-right-fill"></i> 
                                <span class="sidebar-menu-text">Voire Salles</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('createSalle')}}">
                                <i class="bi bi-plus-circle"></i>
                                <span class="sidebar-menu-text">Ajouter Salle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Services --}}
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse"  href="#service">
                        <i class="bi bi-person-fill-gear"></i>
                        <span class="pl-4 sidebar-menu-text">Service</span>
                        <span class="ml-auto"><i class="bi bi-caret-down-fill"></i></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="service">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="{{route('services.index')}}">
                                <i class="bi bi-plus-circle"></i> 
                                <span class="sidebar-menu-text">Voire Services</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('services.create')}}">
                                <i class="bi bi-eye"></i>
                                <span class="sidebar-menu-text">Ajoute Service</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Equipments --}}
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse"  href="#reservation_menu">
                        <i class="bi bi-node-plus"></i>
                        <span class="pl-4 sidebar-menu-text">Contenu Salle</span>
                        <span class="ml-auto"><i class="bi bi-caret-down-fill"></i></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="reservation_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="{{route('contenu.index')}}">
                                <i class="bi bi-plus-circle"></i> 
                                <span class="sidebar-menu-text">Voire Contenu</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('contenu.create')}}">
                                <i class="bi bi-eye"></i>
                                <span class="sidebar-menu-text">Ajoute Contenu</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Appoitments --}}
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{route('reservation.index')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text">Reservations</span>
                        <span class="ml-auto badge text-bg-secondary">{{$reservations->count()}}</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{route('reservation.create')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text">Create Reservations</span>
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
                    <a class="sidebar-menu-button" data-toggle="collapse"  href="#equipment">
                        <i class="bi bi-node-plus"></i>
                        <span class="pl-4 sidebar-menu-text">Equipments</span>
                        <span class="ml-auto"><i class="bi bi-caret-down-fill"></i></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="equipment">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('equipment.index')}}">
                                <i class="bi bi-plus-circle"></i> 
                                <span class="sidebar-menu-text">Voire Equipments</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('equipment.create')}}">
                                <i class="bi bi-grid-fill"></i>
                                <span class="sidebar-menu-text">Ajoute Equipment</span>
                            </a>
                        </li>
                    </ul>
                </li>

                @endcan

                {{-- ChefService  --}}
                @can('isChef')
                    
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{route('reservation.index')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text">Reservations</span>
                        <span class="ml-auto badge text-bg-secondary">{{$reservations->count()}}</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="{{route('reservation.create')}}">
                        <i class="bi bi-grid-1x2"></i>
                        <span class="pl-4 sidebar-menu-text">Create Reservations</span>
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