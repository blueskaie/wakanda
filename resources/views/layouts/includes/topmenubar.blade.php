<div class="headernav">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-xs-12 col-sm-2 col-md-2 logo "><a href="/"><img src="{{ asset('maintheme/images/logo.jpg') }} " alt=""  /></a></div>
            <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 selecttopic">
                <div>Menu List</div>
                <!-- <div class="dropdown">
                    <a data-toggle="dropdown" href="#" >Borderlands 2</a> <b class="caret"></b>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

                    </ul>
                </div> -->
            </div>
            <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                <div class="wrap">
                    <form action="#" method="post" class="form">
                        <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                        <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-1 col-xs-12 col-sm-1 col-md-1 avt">
                <!-- <div class="stnt pull-left">                            
                    <form action="http://forum.azyrusthemes.com/03_new_topic.html" method="post" class="form">
                        <button class="btn btn-primary">Start New Topic</button>
                    </form>
                </div> -->
                <!-- <div class="env pull-left"><i class="fa fa-envelope"></i></div> -->
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    
                    @if (Route::has('register'))
                        | <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif       
                @else
                <div class="avatar pull-right dropdown">
                    <a data-toggle="dropdown" href="#"><img src="{{ asset('maintheme/images/avatar.jpg') }} " alt="" /></a> 
                    <!-- <b class="caret"></b> -->
                    <div class="status green">&nbsp;</div>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Message</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>                 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
                @endguest
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>