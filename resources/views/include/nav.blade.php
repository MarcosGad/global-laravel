<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}">Global Solution</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          @if (Route::has('login'))
          @auth
	          <li class="nav-item active"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>

            <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                        </form>
                  </div>
            </li>
          @else
	          <li class="nav-item cta mr-md-2"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @if (Route::has('register'))
	          <li class="nav-item cta cta-colored"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            @endif
                    @endauth
          @endif
	        </ul>

          

	      </div>
	    </div>
      </nav>
