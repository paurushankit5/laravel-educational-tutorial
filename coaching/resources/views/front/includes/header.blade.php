<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">My Courses </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @if(count($cat_navbar))
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Categories
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            @foreach($cat_navbar as $c_nav)
                                <a href="/course/{{ $c_nav->cat_slug }}" class="dropdown-item">
                                    <i class="{{ $c_nav->fa_icon }}"></i> &nbsp;&nbsp;{{$c_nav->cat_name}}
                                </a> 
                            @endforeach
                        </div>
                    </li>
                @endif
                
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">view_day</i> Sections
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="sections.html#headers" class="dropdown-item">
                            <i class="material-icons">dns</i> Headers
                        </a>
                        <a href="sections.html#features" class="dropdown-item">
                            <i class="material-icons">build</i> Features
                        </a>
                        <a href="sections.html#blogs" class="dropdown-item">
                            <i class="material-icons">list</i> Blogs
                        </a>
                        <a href="sections.html#teams" class="dropdown-item">
                            <i class="material-icons">people</i> Teams
                        </a>
                        <a href="sections.html#projects" class="dropdown-item">
                            <i class="material-icons">assignment</i> Projects
                        </a>
                        <a href="sections.html#pricing" class="dropdown-item">
                            <i class="material-icons">monetization_on</i> Pricing
                        </a>
                        <a href="sections.html#testimonials" class="dropdown-item">
                            <i class="material-icons">chat</i> Testimonials
                        </a>
                        <a href="sections.html#contactus" class="dropdown-item">
                            <i class="material-icons">call</i> Contacts
                        </a>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">view_carousel</i> Examples
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="about-us.html" class="dropdown-item">
                            <i class="material-icons">account_balance</i> About Us
                        </a>
                        <a href="blog-post.html" class="dropdown-item">
                            <i class="material-icons">art_track</i> Blog Post
                        </a>
                        <a href="blog-posts.html" class="dropdown-item">
                            <i class="material-icons">view_quilt</i> Blog Posts
                        </a>
                        <a href="contact-us.html" class="dropdown-item">
                            <i class="material-icons">location_on</i> Contact Us
                        </a>
                        <a href="landing-page.html" class="dropdown-item">
                            <i class="material-icons">view_day</i> Landing Page
                        </a>
                        <a href="login-page.html" class="dropdown-item">
                            <i class="material-icons">fingerprint</i> Login Page
                        </a>
                        <a href="pricing.html" class="dropdown-item">
                            <i class="material-icons">attach_money</i> Pricing Page
                        </a>
                        <a href="ecommerce.html" class="dropdown-item">
                            <i class="material-icons">store</i> Ecommerce Page
                        </a>
                        <a href="product-page.html" class="dropdown-item">
                            <i class="material-icons">shopping_cart</i> Product Page
                        </a>
                        <a href="profile-page.html" class="dropdown-item">
                            <i class="material-icons">account_circle</i> Profile Page
                        </a>
                        <a href="signup-page.html" class="dropdown-item">
                            <i class="material-icons">person_add</i> Signup Page
                        </a>
                    </div>
                </li>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <li class="button-container nav-item iframe-extern">
                                <a target="_blankhref="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn  btn-rose btn-round btn-block" style="color:white;">
                                    <i class="fa fa-signout"></i> Logout
                                </a>
                            </li>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <div class="dropdown">
                                    <button href="#" class="dropdown-toggle btn button-container nav-item iframe-extern btn-round btn-danger" data-toggle="dropdown">My Account</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                         <a href="{{ url('/login') }}" class="dropdown-item"><i class="material-icons">fingerprint</i>&nbsp;&nbsp;&nbsp; Login</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('/register') }}" class="dropdown-item"><i class="material-icons">person_add</i>&nbsp;&nbsp;&nbsp; Register</a>
                                    </div>
                                </div>
                        @endif
                    </div>
                @endif
                
            </ul>
        </div>
    </div>
</nav>