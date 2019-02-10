      <nav id="menu">
        <ul>
          <li>
            <a href="{{ route('home')}}">Home</a>
          </li>
          <li>
            <a class="active" href="{{ route("about")}}">ABout Us</a>
          </li>
          <li>
            <a href="about.html">Shop</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <!-- <li>
            <a href="faq.html">Feature</a>
          </li> -->
        </ul>
      </nav>

 <header class="header-style-2">
        <div class="container">
          <div class="row">
            <div class="header-1-inner">
              <a class="brand-logo animsition-link" href="{{ route('home')}}">
                <img class="img-responsive" src="{{ asset('images/logo.png')}}" alt="" height="200"/>
              </a>
              <nav>
                <ul class="menu hidden-xs">
                    <li>
                        <a href="{{ route('home')}}">Home</a>
                    </li>
                    <li>
                        <a class="active" href="{{ route('about')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('shop')}}">Shop</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                <a href="#">My account</a>
                            <ul>
				 @if(auth()->check())	
              <li>
                <a href="{{ route('accounts', ['tab' => 'profile']) }}">My account</a>
              </li>
              <li>
                <a href="{{ route('logout') }}">Logout</a>
              </li>
				@else					 
              <li>
                <a href="{{route('login')}}">Login</a>
              </li>
              <li>
                <a href="{{route('register')}}">Register</a>
              </li>
			  @endif
             <li>
                <a href="{{ route('cart.index') }}">Cart</a>
              </li>             
            </ul>
              </li>
                    <li>
                        <a href="{{ route('contact')}}">Contact Us</a>
                    </li>
                    <!-- <li>
                        <a href="faq.html">Feature</a>
                    </li> -->
                </ul>
              </nav>
          <div class="widget widget-control-header widget-search-header">
            <a class="btn-open-search-form js-open-search-form-header" href="#">
              <span class="lnr lnr-magnifier"></span>
            </a>
            <div class="form-outer">
              <button class="btn-close-form-search-header js-close-search-form-header">
                <span class="lnr lnr-cross"></span>
              </button>
              <form>
                <input placeholder="Search" />
                <button class="search">
                  <span class="lnr lnr-magnifier"></span>
                </button>
              </form>
            </div>
          </div>
          <aside class="right">
            <div class="widget widget-control-header">
              <div class="select-custom-wrapper">
                <select class="no-border">
                  <option>NGN</option>
                  <option>USD</option>
                </select>
              </div>
            </div>
            <div class="widget widget-control-header widget-shop-cart js-widget-shop-cart @if($cartCount!=0) items-added @endif">Cart
              <a class="control" href="{{ route('cart.index')}}">
                <p class="counter">{{ $cartCount }}</p>
                <span class="lnr lnr-bag"></span>
              </a>
            </div>
            <div class="widget widget-control-header hidden-lg hidden-md hidden-sm">
              <a class="navbar-toggle js-offcanvas-has-events" type="button" href="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
            </div>
          </aside>

            </div>

          </div>

          
        </div>

      </header>