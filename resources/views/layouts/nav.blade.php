         <nav id="menu">
        <ul>
          <li>
            <a href="index.html">Home</a>
            <ul>
              <li>
                <a href="index.html">Home Version 1</a>
              </li>
              <li>
                <a href="index-02.html">Home Version 2</a>
              </li>
              <li>
                <a href="index-03.html">Home Version 3</a>
              </li>
              <li>
                <a href="index-04.html">Home Version 4</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="shop.html">Shop</a>
            <ul>
              <li>
                <a href="shop.html">Shop List</a>
              </li>
              <li>
                <a href="shop-02.html">Shop List Version 2</a>
              </li>
              <li>
                <a href="shop-03.html">Shop List Version 3</a>
              </li>
              <li>
                <a href="shop-04.html">Shop List Version 4</a>
              </li>
              <li>
                <a href="shop-detail.html">Shop Detail</a>
                <ul>
                  <li>
                    <a href="shop-detail.html">Shop Detail</a>
                  </li>
                  <li>
                    <a href="shop-detail-02.html">Shop Detail Version 2</a>
                  </li>
                  <li>
                    <a href="shop-detail-03.html">Shop Detail Version 3</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="wish-list.html">Wishlist</a>
              </li>
              <li>
                <a href="shop-cart.html">Shop Cart</a>
              </li>
              <li>
                <a href="check-out.html">Checkout</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.html">About</a>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul>
              <li>
                <a href="blog.html">Blog List Version 1</a>
              </li>
              <li>
                <a href="blog-02.html">Blog List Version 2</a>
              </li>
              <li>
                <a href="blog-03.html">Blog List Version 3</a>
              </li>
              <li>
                <a href="blog-04.html">Blog List Version 4</a>
              </li>
              <li>
                <a href="blog-detail.html">Blog Detail</a>
                <ul>
                  <li>
                    <a href="blog-detail.html">Blog Detail</a>
                  </li>
                  <li>
                    <a href="blog-detail-02.html">Blog Detail Version 2</a>
                  </li>
                  <li>
                    <a href="blog-detail-03.html">Blog Detail Version 3</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
          <li>
            <a href="faq.html">Feature</a>
            <ul>
              <li>
                <a href="404.html">404 Page</a>
              </li>
              <li>
                <a href="faq.html">Faq</a>
              </li>
              <li>
                <a href="login.html">Login</a>
              </li>
              <li>
                <a href="register.html">Register</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <header class="header-style-2">
        <div class="header-2-inner">
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
          <nav>
            <ul class="menu hidden-xs">
              <li>
                <a href="{{ route('home')}}">Home</a>
              </li>
              <li>
                <a href="#">Shop</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
            <a class="brand-logo" href="#">
              <img class="img-responsive" src="images/logo-5.png"  alt="" />
            </a>
            <ul class="menu hidden-xs">
              <li>
                <a href="#">Blog</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <a href="#">Feature</a>
              </li>
            </ul>
          </nav>
          <aside class="right">
            <div class="widget widget-control-header">
              <div class="select-custom-wrapper">
                <select class="no-border">
                  <option>NGN</option>
                  <option>USD</option>
                </select>
              </div>
            </div>
            <div class="widget widget-control-header widget-shop-cart js-widget-shop-cart">
              <a class="control" href="#">
                <p class="counter">0</p>
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
      </header>