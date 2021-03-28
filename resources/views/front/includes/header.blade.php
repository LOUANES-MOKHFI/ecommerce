<header class="site-header" style="height: 80px;">
    <button class="action-menu"
        data-toggler
        data-toggle="nav"
        data-body-active="menu-open">
        <span class="action-menu__label"
            data-label="menu"
            data-label-active="exit">
            menu
        </span>
    </button>
    <button class="action-search"
        data-toggler
        data-toggle="search"
        data-body-active="search-open">
        <span class="action-search__label"
            data-label="<i class='material-icons'>search</i>"
            data-label-active="exit">
            <i class="material-icons">search</i>
        </span>
    </button>
    <a style="text-align: center;color: #DB322B" href="{{route('home')}}" class="action-home">
        <span class="action-search__label">
            <i class="material-icons" >home</i>
        </span>
    </a>
</header>


<nav class="site-navigation" role="navigation" data-mobile-menu id="nav">
    <a href="/" class="site-navigation__brand">
        <img src="/assets/assets/images/ceramic/logoblanche.png" alt="Casalgrande Padana. Pave your way"/>
    </a>
    <ul class="menu-list">

   

    <li class="withchild">
        <a data-track='' href="{{route('about')}}" class="hide-menu level-1">
            ENTREPRISE
        </a>
            <button data-toggle="ENTREPRISE">
                ENTREPRISE
            </button>
            
    </li>
    <li class="withchild">
        <a data-track=''  class="hide-menu level-1">
            CERAMIC
        </a>
            <button data-toggle="CERAMIC">
                CERAMIC
            </button>
            <ul class="children" id="CERAMIC">
                <li>
                    <button class="back" data-toggle="CERAMIC">
                        <i class="material-icons md-24 back__icon">chevron_left</i>
                        CERAMIC
                    </button>
                </li>
                @if(AllparentCategorie()->count() > 0)
                @foreach(AllparentCategorie() as $cat)
                
                <li class="">
                    <a data-track='' href="{{route('category',$cat->slug)}}" class=" level-2">
                        {{$cat->name}}
                    </a>   
                </li>
                @endforeach
                @endif
            </ul>
        
    </li>
    <li class="withchild">
        <a data-track='' href="" class="hide-menu level-1">
            SALLE DE BAIN
        </a>
            <button data-toggle="SALLE _DE_BAIN">
                SALLE DE BAIN
            </button>
            <ul class="children" id="SALLE _DE_BAIN">
                <li>
                    <button class="back" data-toggle="SALLE _DE_BAIN">
                        <i class="material-icons md-24 back__icon">chevron_left</i>
                        SALLE DE BAIN
                    </button>
                </li>
                <li class="">
                    <a data-track='' href="" class=" level-2">
                        LAVABOS
                    </a>   
                </li>
                <li class="">
                    <a data-track='' href="" class=" level-2">
                        TOILLETES ET BIDETS
                    </a> 
                </li>
                <li class="">
                    <a data-track='' href=""class=" level-2">
                        DOUCHES ET BAIGNOIRES
                    </a>
                </li>
                <li class="">
                    <a data-track='' href="" class=" level-2">
                        ROBBINETERIE
                    </a> 
                </li>
                <li class="">
                    <a data-track='' href=""class=" level-2">
                        MEUBLES ET ACCESSOIRES
                    </a>
                </li>
            </ul>
        
    </li>
    <li class="withchild">
        <a data-track='' href="" class="hide-menu level-1">
            CATALOGUES
        </a>
            <button data-toggle="CATALOGUES">
                CATALOGUES
            </button>
    </li>
    <li class="withchild">
        <a data-track='' href="" class="hide-menu level-1">
            CONTACT
        </a>
    </li>
  



    </ul>
</nav>



<nav class="site-navigation site-navigation--search" id="search">
    <a href="/" class="site-navigation__brand">
        <img src="/assets/assets/images/ceramic/logo.png" alt="Casalgrande Padana. Pave your way"/>
    </a>
    <div class="search-form">
        
        <form action="/fr/search/" method="get" id="search-page-form" class="validate">
            <input id="id_q" name="q" type="text" value="" placeholder="Recherche"
                   autocomplete="off">
            <i class="material-icons">search</i>
        </form>
    </div>
    
</nav>

        