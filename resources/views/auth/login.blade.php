<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- 
<head>
    <title>Login</title>
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

     <!-- App css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            
                                <div class="row">
                                    <div class="auth-logo-box pb-5 mb-4">
                                        <a href="{{route('login')}}" class=""><img src="{{asset('assets/images/maroc.png')}}" height="120" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                </div>
                                <br>
                                <br>
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Royaume du Maroc</h4>
                                    <p class="text-muted mb-0">Parlement</p>  
                                </div> <!--end auth-logo-text-->  

                                
                                <form class="form-horizontal auth-form my-4" method="POST" action="{{ url('/login') }}">
                                    @csrf

                                    <div class="form-group">
                                        

                                        <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                        
                                        
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                              
                                    </div><!--end form-group--> 

                                    
                                    <div class="form-group">
                                        <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>                                            
                                        <div class="input-group mb-3"> 
                                            
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                             
                                    </div><!--end form-group--> 
        
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light">
                                                <i class="bi bi-box-arrow-in-right ml-1"></i>
                                                {{ __('Login') }}
                                            </button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                </form><!--end form-->
                                
                            
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>

                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
            </div><!--end col-->           
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->




     <!-- jQuery  -->
     <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{URL::asset('assets/js/jquery-ui.min.js')}}"></script>
     <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{URL::asset('assets/js/metismenu.min.js')}}"></script>
     <script src="{{URL::asset('assets/js/waves.js')}}"></script>
     <script src="{{URL::asset('assets/js/feather.min.js')}}"></script>
     <script src="{{URL::asset('assets/js/jquery.slimscroll.min.js')}}"></script>        
 
     <!-- App js -->
     <script src="{{URL::asset('assets/js/app.js')}}"></script>

</body>
 --}}
