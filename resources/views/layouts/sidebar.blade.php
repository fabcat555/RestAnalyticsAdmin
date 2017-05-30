<a class="closedbar inner hidden-sm hidden-xs" href="#">
</a>
<nav id="pageslide-left" class="pageslide inner">
    <div class="navbar-content">
        <!-- start: SIDEBAR -->
        <div class="main-navigation left-wrapper transition-left">
            <div class="navigation-toggler hidden-sm hidden-xs">
                <a href="#main-navbar" class="sb-toggle-left">
                </a>
            </div>
            <div class="user-profile border-top padding-horizontal-10 block">
                <div class="inline-block">
                    <img src="{{asset('images/avatar-1.jpg')}}" alt="">
                </div>
                <div class="inline-block">
                    <h5 class="no-margin"> {{trans('messages.Welcome')}} </h5>
                    <h4 class="no-margin"> {{Auth::user()->name}} </h4>
                </div>
            </div>
            <!-- start: MAIN NAVIGATION MENU -->
            <ul class="main-navigation-menu">
                <li class='{{ (str_contains(Request::url(), 'users')) ? 'open active' : ""}}'>
                    <a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title"> {{trans('messages.Users')}} </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu" {{ (str_contains(Request::url(), 'users')) ? 'style=display:block;' : "style=display:none;"}}>
                        <li class='{{ substr(Request::url(), strrpos(Request::url(), '/')+1)=='users' ? 'active' : ""}}'>
                            <a href='{{url('users')}}'>
                                <span class="title"> {{trans('messages.UsersByCriterion')}} </span>
                            </a>
                        </li>
                        <li class='{{ substr(Request::url(), strrpos(Request::url(), '/')+1)=='usersCount' ? 'active' : ""}}'>
                            <a href='{{url('usersCount')}}'>
                                <span class="title"> {{trans('messages.UsersByPeriod')}} </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='{{ (str_contains(Request::url(), 'exits')) || (str_contains(Request::url(), 'pages')) || (str_contains(Request::url(), 'buttons')) ? 'open active' : ""}}'>
                    <a href="javascript:void(0)"><i class="fa fa-file-text"></i> <span class="title"> {{trans('messages.PagesButtons')}} </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu" {{ (str_contains(Request::url(), 'exits')) || (str_contains(Request::url(), 'pages')) || (str_contains(Request::url(), 'buttons')) ? 'style=display:block;' : "style=display:none;"}}>
                        <li class='{{ substr(Request::url(), strrpos(Request::url(), '/')+1)=='pages' ? 'active' : ""}}'>
                            <a href='{{url('pages')}}'>
                                <span class="title"> {{trans('messages.MostVisitedPages')}} </span>
                            </a>
                        </li>
                        <li class='{{ substr(Request::url(), strrpos(Request::url(), '/')+1)=='pagesAverageLoadingTime' ? 'active' : ""}}'>
                            <a href='{{url('pagesAverageLoadingTime')}}'>
                                <span class="title"> {{trans('messages.LoadingTime')}} </span>
                            </a>
                        </li>
                        <li class='{{ substr(Request::url(), strrpos(Request::url(), '/')+1)=='exits' ? 'active' : ""}}'>
                            <a href='{{url('exits')}}'>
                                <span class="title"> {{trans('messages.ExitPages')}} </span>
                            </a>
                        </li>
                        <li class='{{ substr(Request::url(), strrpos(Request::url(), '/')+1)=='buttons' ? 'active' : ""}}'>
                            <a href='{{url('buttons')}}'>
                                <span class="title"> {{trans('messages.MostClickedButtons')}} </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='{{ (str_contains(Request::url(), 'searchTerms')) ? 'active' : ""}}'>
                    <a href='{{url('searchTerms')}}'><i class="fa fa-font"></i> <span class="title"> {{trans('messages.SearchTerms')}} </span> </a>
                </li>
                <li class='{{ (str_contains(Request::url(), 'statistics')) ? 'active' : ""}}'>
                    <a href='{{url('statistics')}}'><i class="fa fa-bar-chart-o"></i> <span class="title"> {{trans('messages.Statistics')}} </span> </a>
                </li>
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <div class="slide-tools">
        <div class="col-xs-6 text-left no-padding">
            <a class="btn btn-sm log-out text-right" href="{{url('logout')}}">
                <i class="fa fa-power-off"></i> {{trans('messages.Logout')}}
            </a>
        </div>
    </div>
</nav>