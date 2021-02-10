<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('admin.index')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Accueil </span></a>
            </li>

            <!--li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            لغة جديده </a>
                    </li>
                </ul>
            </li-->
            @can('commandes')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> Les Commandes </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Commande::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.orders')}}"
                                          data-i18n="nav.dash.ecommerce"> Afficher Tout  </a>
                    </li>
                </ul>
            </li>
            @endcan
       
       @can('categories')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.maincategories')}} </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Category::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.maincategories')}}"
                                          data-i18n="nav.dash.ecommerce"> {{__('admin/sidebar.showAll')}}  </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addcategory')}}  </a>
                    </li>
                </ul>
            </li>
       @endcan

            <!--li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.subcategories')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Category::Child()->count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.subcategories')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.subcategories.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addsubcategory')}} </a>
                    </li>
                </ul>
            </li-->
            @can('brands')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.brands')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Brand::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.brands')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.brands.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addbrands')}} </a>
                    </li>
                </ul>
            </li>
            @endcan
            
            @can('tags')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.tags')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Tags::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.tags')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.tags.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addtags')}} </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('products')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.products')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Product::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.products')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.products.general.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addproduct')}} </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('attributes')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.attributes')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Attributes::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.attributes')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.attributes.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addattribute')}} </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('options')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.options')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Options::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.options')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.options.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addoptions')}} </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('roles')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.roles')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Role::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.roles')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.roles.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addrole')}} </a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('users')
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.users')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Admin::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.users')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.users.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.adduser')}} </a>
                    </li>
                </ul>
            </li>
            @endcan

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.states')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\States::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.states')}}"
                                          data-i18n="nav.dash.ecommerce">  {{__('admin/sidebar.showAll')}} </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.states.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addstate')}} </a>
                    </li>
                </ul>
            </li>

            
         

            @can('settings')
            <!--li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"-
                                                                                    data-i18n="nav.templates.main">{{__('admin/sidebar.settings')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{__('admin/sidebar.shipping_methods')}}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('edit.shipping.methods','free')}}"
                                   data-i18n="nav.templates.vert.classic_menu">{{__('admin/sidebar.free_shipping')}}</a>
                            </li>
                            <li><a class="menu-item" href="{{route('edit.shipping.methods','inner')}}">{{__('admin/sidebar.inner_shipping')}}</a>
                            </li>
                            <li><a class="menu-item" href="{{route('edit.shipping.methods','outer')}}"
                                   data-i18n="nav.templates.vert.compact_menu">{{__('admin/sidebar.outer_shipping')}}</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{__('admin/sidebar.sliders')}}    </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Sliders::count()}}</span>
                </a>
                <ul class="menu-content">
                    
                    <li><a class="menu-item" href="{{route('admin.sliders.create')}}" data-i18n="nav.dash.crypto">
                    {{__('admin/sidebar.addSliders')}} </a>
                    </li>
                </ul>
            </li-->
            @endcan
                </ul>
            </li>         
        </ul>
    </div>
</div>
