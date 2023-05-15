<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('layouts.head')

<body class="layout-default">

    @include('layouts.header')

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">


                    <div class="container-fluid  page__heading-container">
                        <div class="page__heading">

                            <div class="d-flex align-items-center">
                                <div>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="#">@yield('title_page_1')</a></li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            <li class="breadcrumb-item"><a href="#">@yield('title_page_2')</a></li>
                                        </ol>
                                    </nav>
                                    <br>
                                    <h1 class="m-0">@yield('title_header')</h1>
                                </div>
                                {{-- <div class="ml-auto">
                                    <a href="" class="btn btn-light"><i class="bi bi-gear">  Settings</i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>



                    <div class="container-fluid page__container">
                        
                        @yield('content')

                    </div>


                </div>
                <!-- // END drawer-layout__content -->

                @include('layouts.main-sidebar')

            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    
    @include('layouts.script')

</body>

</html>