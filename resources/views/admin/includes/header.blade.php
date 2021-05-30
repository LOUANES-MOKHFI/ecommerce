<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="Nueva ceramica"
                             src="{{asset('/assets/assets/images/ceramic/logonueva.png')}}">
                        <h3 class="brand-text">NUEVA CERAMICA</h3>
                       
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">{{__('admin/header.welcome')}}
                  <span
                      class="user-name text-bold-700">  {{auth('admins')->user()->name}}</span>
                </span>
                            <!--span class="avatar avatar-online">
                  <img  style="height: 35px;" src="" alt="avatar"--><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('edit.profile')}}"><i
                                    class="ft-user"></i> {{__('admin/header.update_profile')}} </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ft-power"></i>{{__('admin/header.logout')}} </a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="notification-counter badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">{{allDevisnoread()->count()}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Demandes de devi</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-danger float-right m-0">{{allDevisnoread()->count()}} nouveau</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                @foreach(allDevisnoread() as $devi)
                                <a href="{{route('admin.devis.show',$devi->id)}}">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Nouveau demande de devi!</h6>
                                            <p class="notification-text font-small-3 text-muted">{{$devi->Fname}}-{{$devi->Lname}} -- {{$devi->state->nom}}</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="{{date_format($devi->created_at,'Y-m-d')}}">{{date_format($devi->created_at,'Y-m-d')}}
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                               @endforeach
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="{{route('admin.devis')}}">Voir tout les devis</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i
                                class="ficon ft-mail"> </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Messages</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-warning float-right m-0">{{count(All_contact())}} messages</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                @foreach(All_contact() as $message)
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{asset('assets/admin/images/portrait/small/avatar-s-19.png')}}"
                               alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">{{$message->nom}} {{$message->prenom}}</h6>
                                            <p class="notification-text font-small-3 text-muted">{{Str::limit($message->message,200)}}.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">{{date_format($message->created_at,"Y-M-D")}} à {{date_format($message->created_at,"G:i:s")}}
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                               @endforeach
                                
                               
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Afficher tout les messages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
