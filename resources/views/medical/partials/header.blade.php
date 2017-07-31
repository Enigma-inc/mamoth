        <header class="c-layout-header c-layout-header-4  c-layout-header-default-mobile c-header-transparent-dark" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="">
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="{{url('/')}}" class="c-logo">
                                <img src="{{asset('images/logo-landscape.png')}}"  alt="Mamoth" class="c-desktop-logo">
                                <img src="{{asset('images/logo-landscape.png')}}"  alt="Mamoth" class="c-desktop-logo-inverse">
                                <img src="{{asset('images/logo-landscape.png')}}"  alt="Mamoth" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                        </div>
                        <nav class="c-mega-menu c-pull-right c-mega-menu-light c-mega-menu-light-mobile  c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                             <li class="c-active">
                                    <a href="{{route('medical-aid.home')}}" class="c-link dropdown-toggle">Home
                                    </a>
                                </li>
                             <li class="c-active">
                                    <a href="{{route('medical-aid.about')}}" class="c-link dropdown-toggle">About Us
                                    </a>
                                </li>
                              <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Individuals
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">I Want To...
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.become-member',['type'=>'individual'])}}">Become A Member
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.benefits')}}">Discover Benefits
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.find-doctor')}}">Find A Doctor
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.lodge-claim')}}">Lodge A Claim
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Request a Quotation
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Login to my Account
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                              <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Employers
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">I Want To...
                                            </a>
                                        </li>
                                          <li class="dropdown-submenu">
                                            <a href="#">Become A Member
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.benefits')}}">Discover Benefits
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.find-doctor')}}">Find A Doctor
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.lodge-claim')}}">Lodge A Claim
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Login to my Account
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                 <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Students
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">I Want To...
                                            </a>
                                        </li>
                                          <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.become-member',['type'=>'student'])}}">Become A Member
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.benefits')}}">Discover Benefits
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.find-doctor')}}">Find A Doctor
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.lodge-claim')}}">Lodge A Claim
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Login to my Account
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                           
                                <li class="">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Healthcare Providers 
                                    </a>
                                           <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">I Want To...
                                            </a>
                                        </li>
                                          <li class="dropdown-submenu">
                                            <a href="{{route('medical-aid.become-member',['type'=>'healthcare-providers'])}}">Become A Member
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                {{--  <li class="">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Partners
                                    </a>
                                </li>  --}}
                                <li class="c-active">
                                    <a href="{{route('medical-aid.contact')}}" class="c-link dropdown-toggle">Contatc Us
                                    </a>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Member Log-In
                                    </a>
                                </li>
                                
                         
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>