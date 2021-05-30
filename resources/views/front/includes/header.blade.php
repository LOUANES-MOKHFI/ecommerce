
<style type="text/css">
    @media screen and (max-width: 768px){
    .modal-mobile{
        top: 0px;
        left: 50px;
}
.action-menu{
    width: 50px;
    height: 50px;
}
.modal-mobile a img{
    margin-top: 60px;
    width: 50%;
    height: 20%;
}
.modal-mobile-search{
        top: 0px;
        left: 50px;

}
.modal-mobile-search a img{
    margin-top: 60px;
    width: 50%;
    height: 20%;
}
.withchild{
    text-align: left;
    font-size: 18px;
}
.withchild a {
font-size: 18px;
}
.withchild button {
font-size: 18px;
}
.child{
    margin-left: 30px;
}

}
.withchild a {
font-family: 'Times New Roman', Times, serif;";
}
.withchild button {
font-family: 'Times New Roman', Times, serif;";
}
@media (min-width: 769px)
.withchild{
    padding: 0 17px;
}
</style>
<header class="site-header headr" >
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
    <a style="text-align: center;color: rgb(225,15,26);" href="{{route('home')}}" class="action-home" style="width: 80px">
        <span class="action-search__label">
            <i class="material-icons" >home</i>
        </span>
    </a>
</header>



    <nav class="site-navigation modal-mobile" role="navigation" data-mobile-menu id="nav" style="background-color: rgb(225,15,26);">
        
        <a href="{{route('home')}}" class="site-navigation__brand">
            <img src="/assets/assets/images/ceramic/logoblanche.png" alt="NuevaCeramica" class="imghead" />
        </a>
        <ul class="menu-list">

       

        <li class="withchild">
           
                <a href="{{route('about')}}" data-toggle="ENTREPRISE">
                    Entreprise
                </a>
                
        </li>
        <li class="withchild">
            <a data-track=''  class="hide-menu level-1">
                Céramique et porcelaine
            </a>
                <button data-toggle="CERAMIC">
                    Céramique et porcelaine
                </button>
                <ul class="children" id="CERAMIC">
                    <li>
                        <button class="back" data-toggle="CERAMIC">
                            <i class="material-icons md-24 back__icon">chevron_left</i>
                            Céramique et porcelaine
                        </button>
                    </li>
                    @if(AllparentCategorie()->count() > 0)
                    @foreach(AllparentCategorie() as $cat)
                    <li class="child">
                        <a data-track='' href="{{route('category',$cat->slug)}}" class=" level-2">
                            {{$cat->name}}
                        </a>   
                    </li>
                    @endforeach
                    @endif
                </ul>
            
        </li>
        <li class="withchild">
            <a data-track='' class="hide-menu level-1">
                Salle de bain et sanitaires
            </a>
                <button data-toggle="salledebain">
                    Salle de bain et sanitaires
                </button>
                <ul class="children" id="salledebain">
                    <li>
                        <button class="back" data-toggle="salledebain">
                            <i class="material-icons md-24 back__icon">chevron_left</i>
                            Salle de bain et sanitaires
                        </button>
                    </li>
                     
                     @if(AllchildCategorie()->count() > 0)
                      @foreach(AllchildCategorie() as $cat)
                                <li class="child">
                                    <a data-track='' href="{{route('salle-de-bain',$cat->slug)}}" class=" level-2">
                                        {{$cat->name}}
                                    </a>   
                                </li>
                                
                      @endforeach
                      @endif
                    
                </ul>
            
        </li>
         <li class="withchild">
            
            <a href="{{route('category','Mosaïque')}}" data-toggle="Mosaïque">
                Mosaïque
            </a>
                
            
        </li>
        <li class="withchild">
            <a href="{{route('category','Piscine')}}" data-toggle="Piscine">
                Piscine
            </a>
            
               
            
        </li>
        <li class="withchild">
           
                <a href="{{route('catalogues')}}" data-toggle="CATALOGUES">
                    Catalogues
                </a>
        </li>
        <li class="withchild">
            
                <a href="{{route('videos')}}" data-toggle="VIDEOS">
                    Vidéos
                </a>
       <li class="withchild">
            
                <a href="{{route('contact')}}" data-toggle="CONTACT">
                    Contact
                </a>
        </li>
        
    </li>

      



        </ul>
    </nav>



    <nav class="site-navigation site-navigation--search modal-mobile-search" id="search" >

        <a href="{{route('home')}}" class="site-navigation__brand">
            <img src="/assets/assets/images/ceramic/logo.png" alt="NuevaCeramica"/>
        </a>
        <div class="search-form">
            
            <form action="{{route('products.search')}}" method="get" id="search-page-form" class="validate">
                <input id="id_q" name="product" type="text" value="" placeholder="Recherche "
                       autocomplete="off">
                <i class="material-icons">search</i>
            </form>
        </div>
        
    </nav>





        