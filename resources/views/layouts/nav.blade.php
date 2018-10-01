
<nav class="navbar navbar-expand-md navbar-light navbar-laravel " >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
						<li class="a"><a class="nav-link" href={{ route('blogs')}}>Blogs <span class="badge bg-success text-white">
						{{$blog->count()}}
						
						</span></a></li>

						<li><a class="nav-link" href={{ route('contact')}}>Contact</a></li>
                    </ul>
              <ul class="navbar-nav ml-auto">
                    <!-- Right Side Of Navbar -->
					@if(Auth::user() && Auth::user()->role_id === 1 )
						<li><a class="nav-link" href={{ route('admin.index')}}>Admin</a></li>
					@elseif(Auth::user() && Auth::user()->role_id === 2 )
					<li><a class="nav-link" href={{ route('admin.index')}}>Author</a></li>
					@elseif(Auth::user() && Auth::user()->role_id === 3 )
	              <li><a class="nav-link">subscriber</a></li>
					@endif
                    
							
				
                        <!-- Authentication Links -->
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                </div>
            </div>
        </nav>


