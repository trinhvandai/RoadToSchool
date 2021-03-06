            <div class="header">
                <nav class="navbar navbar-default main-navigation" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="/"><img src="/assets/img/logo.png" alt=""></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ __('titles.categories') }} 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">
                                            TODO1
                                        </a>
                                        <br>
                                        <a class="dropdown-item" href="">
                                            TODO2
                                        </a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 7 - Items<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-cart" role="menu">
                                        <li>
                                            <span class="item">
                                              <span class="item-left">
                                                  <img src="http://lorempixel.com/50/50/" alt="" />
                                                  <span class="item-info">
                                                      <span>Item name</span>
                                                      <span>23$</span>
                                                  </span>
                                              </span>
                                              <span class="item-right">
                                                  <button class="btn btn-xs btn-danger pull-right">x</button>
                                              </span>
                                          </span>
                                        </li>
                                        <li>
                                            <span class="item">
                                              <span class="item-left">
                                                  <img src="http://lorempixel.com/50/50/" alt="" />
                                                  <span class="item-info">
                                                      <span>Item name</span>
                                                      <span>23$</span>
                                                  </span>
                                              </span>
                                              <span class="item-right">
                                                  <button class="btn btn-xs btn-danger pull-right">x</button>
                                              </span>
                                          </span>
                                        </li>
                                        <li>
                                            <span class="item">
                                              <span class="item-left">
                                                  <img src="http://lorempixel.com/50/50/" alt="" />
                                                  <span class="item-info">
                                                      <span>Item name</span>
                                                      <span>23$</span>
                                                  </span>
                                              </span>
                                              <span class="item-right">
                                                  <button class="btn btn-xs btn-danger pull-right">x</button>
                                              </span>
                                          </span>
                                        </li>
                                        <li>
                                            <span class="item">
                                              <span class="item-left">
                                                  <img src="http://lorempixel.com/50/50/" alt="" />
                                                  <span class="item-info">
                                                      <span>Item name</span>
                                                      <span>23$</span>
                                                  </span>
                                              </span>
                                              <span class="item-right">
                                                  <button class="btn btn-xs btn-danger pull-right">x</button>
                                              </span>
                                          </span>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a class="text-center" href="">View Cart</a></li>
                                    </ul>
                                </li>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">
                                            {{ __('titles.my_profile') }}
                                        </a>
                                        <br>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        {{ Form::open(['method' => 'post', 'url' => 'logout', 'id' => 'logout-form']) }}
                                        {{ Form::close() }}
                                    </div>
                                </li>
                                @endguest
                                {{-- <li class="postadd">
                                    <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Post an Ad</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
                    <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                        <i class="fa fa-close"></i>
                    </div>
                    <h3 class="title-menu"> {{ __('titles.all_pages') }} </h3>
                    <ul class="nav navmenu-nav"> 
                        <li><a href=""> {{ __('titles.home') }} </a></li>
                        <li><a href=""> {{ __('titles.register') }} </a></li>
                        <li><a href=""> {{ __('titles.login') }} </a></li>
                    </ul>
                </div>
            </div>
            <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
                <p><i class="fa fa-file-text-o"></i> {{ __('titles.all_pages') }} </p>
            </div>
        </div>
    </div>
</div>
