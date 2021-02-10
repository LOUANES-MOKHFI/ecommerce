
 
<!--   newsletter-->
 <!--div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="/assets/front/images/send.png" alt=""></div>
                            <div class="newsletter_title">S'inscrire aux Newsletters</div>
                            <div class="newsletter_text"><p>Et recevez nos derniers promotions</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            
                            <form action="javascript:void(0);" type="post" class="newsletter-area">
                                {{ csrf_field() }}
                                <input onfocus="enableSubscriber();" name="email" id="email" type="email" class="newsletter_input" required placeholder="Entrez votre adresse email">
                                <button onclick="checkSubscriber();addSubscriber();" type="submit" id="btnSubmit" class="newsletter_button">S'aboner</button>
                            </form>
                            <div id="statusSubscribe" style="display: none;color: red"></div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div-->

<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="address-block">
        
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>Boutique en ligne</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p> +213 662887669</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#">louanes.mokhfi@gmail.com</a></span> </div>
              </li>
            </ul>
          </div>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <!--div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title"> Services</h4>
          </div>
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="Contact us">Livraison</a></li>
              <li><a href="#" title="About us">Mes commandes</a></li>
              <li><a href="#" title="faq">Mon compte</a></li>
            </ul>
          </div>
        </div-->
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">QuickShop</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="{{route('about')}}">A propos</a></li>
              <li><a title="Information" href="{{route('contact')}}">Contatez-nous</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Pour quoi nous?</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="About us">Livraison assurer</a></li>
              <li><a href="#" title="Blog">Securite de vos informations</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-bar">
    <div class="container">
      <div class="col-xs-12 col-sm-4 no-padding social">
        <ul class="link">
          <li class="fb pull-left"><a target="_blank" rel="nofollow" href="https://web.facebook.com/louadev" title="Facebook"></a></li>
          <!--li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li-->
          <!--li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li-->
          <!--li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li-->
          <!--li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li-->
          <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="https://www.linkedin.com/in/louanes-mokhfi-0937b7162/" title="Linkedin"></a></li>
          <!--li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li-->
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank" href="https://web.facebook.com/louadev">QuickShop</a> </div>
      <div class="col-xs-12 col-sm-4 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="/assets/assets/images/payments/1.png" alt=""></li>
            <li><img src="/assets/assets/images/payments/2.png" alt=""></li>
            <li><img src="/assets/assets/images/payments/3.png" alt=""></li>
            <li><img src="/assets/assets/images/payments/4.png" alt=""></li>
            <li><img src="/assets/assets/images/payments/5.png" alt=""></li>
          </ul>
        </div>
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div>
</footer>

