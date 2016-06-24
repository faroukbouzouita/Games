<?php

/* FrontEndGamesBundle:Includes:Header.html.twig */
class __TwigTemplate_d90cb109c38faff33503f1208ad9cf74458e5757d1a6fd5cb1f9e4ef6ea17834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <header id=\"top\" class=\"clearfix\">
    
    <!--top-other-->
    <div id=\"top-other\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"welcome col-md-9 text-left\">
            Welcome to game world
          </div>
          <div class=\"top-other col-md-15\">
            <ul class=\"list-inline text-right\">
              <li class=\"currencies-switcher\">
                <div class=\"currency-plain\">
                  <ul class=\"currencies list-inline unmargin\">
                    <li class=\"heading\">Currency </li>
                    <li class=\"currency-EUR active\">
                      <a href=\"#\">EUR</a>
                      <input type=\"hidden\" value=\"EUR\">
                    </li>
                    <li class=\"currency-USD\">
                      <a href=\"#\">USD</a>
                      <input type=\"hidden\" value=\"USD\">
                    </li>
                    <li class=\"currency-GBP\">
                      <a href=\"#\">GBP</a>
                      <input type=\"hidden\" value=\"GBP\">
                    </li>
                  </ul>
                  <select class=\"currencies_src hide\" name=\"currencies\">
                    <option value=\"EUR\" selected=\"selected\">EUR</option>
                    <option value=\"USD\">USD</option>
                    <option value=\"GBP\">GBP</option>
                  </select>
                </div>
              </li>
              <li class=\"customer-links\">
                <ul id=\"accounts\" class=\"list-inline\">
                  <li class=\"login\">
                    <span id=\"loginButton\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                      Login
                      <i class=\"sub-dropdown1\"></i>
                      <i class=\"sub-dropdown\"></i>
                    </span>
                    <div id=\"loginBox\" class=\"dropdown-menu text-left\" style=\"overflow:hidden;display:none\">
                      <form method=\"post\" action=\"http://demo.designshopify.com/html_gameworld/login.html\" id=\"customer_login\" accept-charset=\"UTF-8\">
                        <input name=\"form_type\" type=\"hidden\" value=\"customer_login\">
                        <input name=\"utf8\" type=\"hidden\" value=\"✓\">
                        <div id=\"bodyBox\">
                          <div class=\"sb-title\">Login</div>
                          <ul class=\"control-container customer-accounts list-unstyled\">
                            <li class=\"clearfix\">
                              <label for=\"customer_email_box\" class=\"control-label\">Email Address <span class=\"req\">*</span></label>
                              <input type=\"email\" value=\"\" name=\"customer[email]\" id=\"customer_email_box\" class=\"form-control\">
                            </li>
                            <li class=\"clearfix\">
                              <label for=\"customer_password_box\" class=\"control-label\">Password <span class=\"req\">*</span></label>
                              <input type=\"password\" value=\"\" name=\"customer[password]\" id=\"customer_password_box\" class=\"form-control password\">
                            </li>
                            <li class=\"clearfix last1\">
                              <button class=\"btn btn-1\" type=\"submit\">Login</button>
                            </li>
                            <li>
                              <a class=\"register\" href=\"register.html\">Creat New Account</a>
                            </li>
                          </ul>
                        </div>
                      </form>
                    </div>
                  </li>
                  <li>or</li>
                  <li class=\"register\">
                    <a href=\"register.html\" id=\"customer_register_link\">Register</a>
                  </li>
                </ul>
              </li>
              <li class=\"umbrella\">
                <div id=\"umbrella\" class=\"list-inline unmargin\">
                  <div class=\"cart-link\">
                    <div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                      <i class=\"sub-dropdown1\"></i>
                      <i class=\"sub-dropdown\"></i>
                      <a class=\"num-items-in-cart link-dropdown\" href=\"cart.html\">
                        <span>My Cart</span>
                        <span class=\"icon\">
                          <span class=\"number\">2</span> items
                          <span class=\"total\"> - <span class=\"money\" >€118.00</span></span>
                        </span>
                      </a>
                    </div>
                    <div id=\"cart-info\" class=\"dropdown-menu\">
                      <div id=\"cart-content\">
                        <div class=\"sb-title\">
                          <a href=\"http://demo.designshopify.com/cart\">My cart</a>
                        </div>
                        <div class=\"action\">
                          <span>Cart Subtotal:</span>
                          <span class=\"cart-total-right\"><span class=\"money\">€118.00</span></span>
                        </div>
                        <div class=\"action\">
                          <button class=\"btn btn-1\">CHECKOUT</button>
                        </div>
                        <div class=\"recently\">
                          <span>Recently added items</span>
                        </div>
                        <div class=\"items control-container\">
                          <div class=\"row\">
                            <a class=\"cart-close\" title=\"Remove\" href=\"#\">
                              <i class=\"fa fa-times\"></i>
                            </a>
                            <div class=\"col-md-7 cart-left\">
                              <a class=\"cart-image\" href=\"product.html\">
                                <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("screen/products/product_03_small.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
                              </a>
                            </div>
                            <div class=\"col-md-17 cart-right\">
                              <div class=\"cart-title\">
                                <a href=\"product.html\">Curabitur mattis tellus rutrum enim facilisis - Ferrari / Modern</a>
                              </div>
                              <div class=\"cart-price\">1<span class=\"x\"> x </span><span class=\"money\">€59.00</span></div>
                            </div>
                          </div>
                          <div class=\"row\">
                            <a class=\"cart-close\" title=\"Remove\" href=\"#\">
                              <i class=\"fa fa-times\"></i>
                            </a>
                            <div class=\"col-md-7 cart-left\">
                              <a class=\"cart-image\" href=\"product.html\">
                                <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("screen/products/product_07_small.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a>
                            </div>
                            <div class=\"col-md-17 cart-right\">
                              <div class=\"cart-title\">
                                <a href=\"product.html\">Nam at lectus eget mi vista hendrerit tincidunt - action</a>
                              </div>
                              <div class=\"cart-price\">1<span class=\"x\"> x </span><span class=\"money\">€59.00</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--end top-other -->
    
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 top-logo\">
          <a id=\"site-title\" href=\"index-2.html\" title=\"HTML Game Store Theme\">
            <img  src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"HTML Game Store Theme\">
          </a>
        </div>
        <div class=\"col-md-12 top-support\">
          <div class=\"support\">
            <span class=\"h5 txt_color\">Customer Support</span><span>1800-000-GameWorld</span>
            <span class=\"line\"></span>
            <a href=\"ymsgr:sendIM?quocbao0415\">Chat with us</a>
          </div>
          <div class=\"top-search\">
            <form id=\"header-search\" class=\"search-form\" action=\"http://demo.designshopify.com/html_gameworld/index.html\" method=\"get\">
              <input type=\"hidden\" name=\"type\" value=\"product\">
              <input type=\"text\" class=\"input-block-level\" name=\"q\" value=\"\" accesskey=\"4\" autocomplete=\"off\" placeholder=\"search entire store here\">
              <button type=\"submit\" class=\"search-submit\" title=\"Search\">
                <i class=\"fa fa-search\"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class=\"container\">
      <div class=\"row top-navigation\">
        <nav class=\"navbar\" role=\"navigation\">
          <div class=\"clearfix\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle main navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            </div>
            <div class=\"is-mobile visible-xs\">
              <ul class=\"list-inline\">
                <li class=\"is-mobile-menu\">
                  <div class=\"btn-navbar\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar-group\">
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </span>
                  </div>
                </li>
                <li class=\"is-mobile-login\">
                  <div class=\"btn-group\">
                    <div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                      <i class=\"fa fa-user\"></i>
                    </div>
                    <ul class=\"customer dropdown-menu\">
                      <li class=\"logout\">
                        <a href=\"login.html\">Log in</a>
                      </li>
                      <li class=\"account\">
                        <a href=\"register.html\">Register</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class=\"is-mobile-currency currencies-switcher\">
                  <div class=\"currency btn-group uppercase\">
                    <a class=\"currency_wrapper dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                      <i class=\"sub-dropdown1\"></i>
                      <i class=\"sub-dropdown\"></i>
                      <span class=\"currency_code\">EUR</span>
                      &nbsp;<i class=\"icon-caret-down\"></i>
                    </a>
                    <ul class=\"currencies dropdown-menu text-left\">
                      <li class=\"currency-EUR active\">
                        <a href=\"javascript:\">EUR</a>
                        <input type=\"hidden\" value=\"EUR\">
                      </li>
                      <li class=\"currency-USD\">
                        <a href=\"javascript:\">USD</a>
                        <input type=\"hidden\" value=\"USD\">
                      </li>
                      <li class=\"currency-GBP\">
                        <a href=\"javascript:\">GBP</a>
                        <input type=\"hidden\" value=\"GBP\">
                      </li>
                    </ul>
                    <select class=\"currencies_src hide\" name=\"currencies\">
                      <option value=\"EUR\" selected=\"selected\">EUR</option>
                      <option value=\"USD\">USD</option>
                      <option value=\"GBP\">GBP</option>
                    </select>
                  </div>
                </li>
                <li class=\"is-mobile-cart\">
                  <a href=\"cart.html\"><i class=\"fa fa-shopping-cart\"></i></a>
                </li>
              </ul>
            </div>
            <div class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav hoverMenuWrapper\">
                <li class=\"dropdown\">
                  <a href=\"collection.html\" class=\"dropdown-toggle link-dropdown\" data-toggle=\"dropdown\">
                    Xbox 360
                    <i class=\"fa fa-caret-down\"></i>
                    <i class=\"sub-dropdown1 visible-md visible-lg\"></i>
                    <i class=\"sub-dropdown visible-md visible-lg\"></i>
                  </a>
                  <ul class=\"dropdown-menu\" style=\"overflow:hidden;display:none\">
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Curabitur mattis tellus rutrum enim facilisis\">Curabitur mattis tellus rutrum enim facilisis</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\">Curabitur sollicitudin</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Pellentesque habitant morbi  tristique senectus\">Pellentesque habitant morbi tristique senectus</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Suspendisse sed libero consequat\">Suspendisse sed libero consequat</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"collection.html\" class=\"dropdown-toggle link-dropdown\" data-toggle=\"dropdown\">
                    PlayStation 3
                    <i class=\"fa fa-caret-down\"></i>
                    <i class=\"sub-dropdown1 visible-md visible-lg\"></i>
                    <i class=\"sub-dropdown visible-md visible-lg\"></i>
                  </a>
                  <ul class=\"dropdown-menu\" style=\"overflow:hidden;display:none\">
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Cras in nunc non ipsum duo  cursus ultrices\">Cras in nunc non ipsum duo cursus ultrices</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Curabitur mattis tellus rutrum enim facilisis\">Curabitur mattis tellus rutrum enim facilisis</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\">Curabitur sollicitudin</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Nam at lectus eget mi vista  hendrerit tincidunt\">Nam at lectus eget mi vista hendrerit tincidunt</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Pellentesque habitant morbi  tristique senectus\">Pellentesque habitant morbi tristique senectus</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Suspendisse sed libero consequat\">Suspendisse sed libero consequat</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Suspendisse sed libero tesla  magna consequat\">Suspendisse sed libero tesla magna consequat</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Auctor semper\">Auctor semper</a></li>
                  </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"collection.html\" class=\"dropdown-toggle link-dropdown\" data-toggle=\"dropdown\">
                    Wii
                    <i class=\"fa fa-caret-down\"></i>
                    <i class=\"sub-dropdown1 visible-md visible-lg\"></i>
                    <i class=\"sub-dropdown visible-md visible-lg\"></i>
                  </a>
                  <ul class=\"dropdown-menu\" style=\"overflow:hidden;display:none\">
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Suspendisse sed libero tesla  magna consequat\">Suspendisse sed libero tesla magna consequat</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Suspendisse sed libero consequat\">Suspendisse sed libero consequat</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Auctor semper\">Auctor semper</a></li>
                    <li><a tabindex=\"-1\" href=\"product.html\" title=\"Nam at lectus eget mi vista  hendrerit tincidunt\">Nam at lectus eget mi vista hendrerit tincidunt</a></li>
                  </ul>
                </li>
                <li class=\"\">
                  <a href=\"collection.html\">
                    3DS
                    <span></span>
                  </a>
                </li>
                <li class=\"\">
                  <a href=\"collection.html\">
                    PSP
                    <span></span>
                  </a>
                </li>
                <li class=\"\">
                  <a href=\"collection.html\">
                    PC
                    <span></span>
                  </a>
                </li>
                <li class=\"\">
                  <a href=\"collection.html\">
                    Gear and Gadgets
                    <span></span>
                  </a>
                </li>
                <li class=\"\">
                  <a href=\"product.html\">
                    PlayStation 2
                    <span></span>
                  </a>
                </li>
                <li class=\"\">
                  <a href=\"product.html\">
                    Nintendo GBA
                    <span></span>
                  </a>
                </li>
                <li class=\"\">
                  <a href=\"typography.html\">
                    Typography
                    <span></span>
                  </a>
                </li>
                <li class=\"last\">
                  <a href=\"collection.html\">
                    More +
                    <span></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    
    <div class=\"gr-below-nav\">
      <div class=\"container\">
        <div class=\"home_below_nav top-below-nav clearfix\">
          <div class=\"sub_menu\">
            <ul class=\"list-inline list-unstylet text-left clearfix\">
              <li class=\"col-md-5\">
                <a href=\"collection.html\">
                  <span>Downloads</span>
                </a>
                <span>Games &amp; Add-ons</span>
              </li>
              <li class=\"col-md-5\">
                <a href=\"collection.html\">
                  <span>Pre-owned</span>
                </a>
                <span>Great Values</span>
              </li>
              <li class=\"col-md-5\">
                <a href=\"collection.html\">
                  <span>Trade-Ins</span>
                </a>
                <span>Great Offers</span>
              </li>
              <li class=\"col-md-5\">
                <a href=\"collection.html\">
                  <span>Monthly-Deals</span>
                </a>
                <span>Current Sales</span>
              </li>
            </ul>
            <span class=\"sub_nav\"></span>
          </div>
        </div>
      </div>
    </div>
    
  </header>
 ";
    }

    public function getTemplateName()
    {
        return "FrontEndGamesBundle:Includes:Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 154,  151 => 128,  132 => 112,  19 => 1,);
    }
}
/*  <header id="top" class="clearfix">*/
/*     */
/*     <!--top-other-->*/
/*     <div id="top-other">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="welcome col-md-9 text-left">*/
/*             Welcome to game world*/
/*           </div>*/
/*           <div class="top-other col-md-15">*/
/*             <ul class="list-inline text-right">*/
/*               <li class="currencies-switcher">*/
/*                 <div class="currency-plain">*/
/*                   <ul class="currencies list-inline unmargin">*/
/*                     <li class="heading">Currency </li>*/
/*                     <li class="currency-EUR active">*/
/*                       <a href="#">EUR</a>*/
/*                       <input type="hidden" value="EUR">*/
/*                     </li>*/
/*                     <li class="currency-USD">*/
/*                       <a href="#">USD</a>*/
/*                       <input type="hidden" value="USD">*/
/*                     </li>*/
/*                     <li class="currency-GBP">*/
/*                       <a href="#">GBP</a>*/
/*                       <input type="hidden" value="GBP">*/
/*                     </li>*/
/*                   </ul>*/
/*                   <select class="currencies_src hide" name="currencies">*/
/*                     <option value="EUR" selected="selected">EUR</option>*/
/*                     <option value="USD">USD</option>*/
/*                     <option value="GBP">GBP</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </li>*/
/*               <li class="customer-links">*/
/*                 <ul id="accounts" class="list-inline">*/
/*                   <li class="login">*/
/*                     <span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">*/
/*                       Login*/
/*                       <i class="sub-dropdown1"></i>*/
/*                       <i class="sub-dropdown"></i>*/
/*                     </span>*/
/*                     <div id="loginBox" class="dropdown-menu text-left" style="overflow:hidden;display:none">*/
/*                       <form method="post" action="http://demo.designshopify.com/html_gameworld/login.html" id="customer_login" accept-charset="UTF-8">*/
/*                         <input name="form_type" type="hidden" value="customer_login">*/
/*                         <input name="utf8" type="hidden" value="✓">*/
/*                         <div id="bodyBox">*/
/*                           <div class="sb-title">Login</div>*/
/*                           <ul class="control-container customer-accounts list-unstyled">*/
/*                             <li class="clearfix">*/
/*                               <label for="customer_email_box" class="control-label">Email Address <span class="req">*</span></label>*/
/*                               <input type="email" value="" name="customer[email]" id="customer_email_box" class="form-control">*/
/*                             </li>*/
/*                             <li class="clearfix">*/
/*                               <label for="customer_password_box" class="control-label">Password <span class="req">*</span></label>*/
/*                               <input type="password" value="" name="customer[password]" id="customer_password_box" class="form-control password">*/
/*                             </li>*/
/*                             <li class="clearfix last1">*/
/*                               <button class="btn btn-1" type="submit">Login</button>*/
/*                             </li>*/
/*                             <li>*/
/*                               <a class="register" href="register.html">Creat New Account</a>*/
/*                             </li>*/
/*                           </ul>*/
/*                         </div>*/
/*                       </form>*/
/*                     </div>*/
/*                   </li>*/
/*                   <li>or</li>*/
/*                   <li class="register">*/
/*                     <a href="register.html" id="customer_register_link">Register</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="umbrella">*/
/*                 <div id="umbrella" class="list-inline unmargin">*/
/*                   <div class="cart-link">*/
/*                     <div class="dropdown-toggle" data-toggle="dropdown">*/
/*                       <i class="sub-dropdown1"></i>*/
/*                       <i class="sub-dropdown"></i>*/
/*                       <a class="num-items-in-cart link-dropdown" href="cart.html">*/
/*                         <span>My Cart</span>*/
/*                         <span class="icon">*/
/*                           <span class="number">2</span> items*/
/*                           <span class="total"> - <span class="money" >€118.00</span></span>*/
/*                         </span>*/
/*                       </a>*/
/*                     </div>*/
/*                     <div id="cart-info" class="dropdown-menu">*/
/*                       <div id="cart-content">*/
/*                         <div class="sb-title">*/
/*                           <a href="http://demo.designshopify.com/cart">My cart</a>*/
/*                         </div>*/
/*                         <div class="action">*/
/*                           <span>Cart Subtotal:</span>*/
/*                           <span class="cart-total-right"><span class="money">€118.00</span></span>*/
/*                         </div>*/
/*                         <div class="action">*/
/*                           <button class="btn btn-1">CHECKOUT</button>*/
/*                         </div>*/
/*                         <div class="recently">*/
/*                           <span>Recently added items</span>*/
/*                         </div>*/
/*                         <div class="items control-container">*/
/*                           <div class="row">*/
/*                             <a class="cart-close" title="Remove" href="#">*/
/*                               <i class="fa fa-times"></i>*/
/*                             </a>*/
/*                             <div class="col-md-7 cart-left">*/
/*                               <a class="cart-image" href="product.html">*/
/*                                 <img src="{{ asset('screen/products/product_03_small.jpg') }}" alt="" title="">*/
/*                               </a>*/
/*                             </div>*/
/*                             <div class="col-md-17 cart-right">*/
/*                               <div class="cart-title">*/
/*                                 <a href="product.html">Curabitur mattis tellus rutrum enim facilisis - Ferrari / Modern</a>*/
/*                               </div>*/
/*                               <div class="cart-price">1<span class="x"> x </span><span class="money">€59.00</span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="row">*/
/*                             <a class="cart-close" title="Remove" href="#">*/
/*                               <i class="fa fa-times"></i>*/
/*                             </a>*/
/*                             <div class="col-md-7 cart-left">*/
/*                               <a class="cart-image" href="product.html">*/
/*                                 <img src="{{ asset('screen/products/product_07_small.jpg') }}" alt="" title=""></a>*/
/*                             </div>*/
/*                             <div class="col-md-17 cart-right">*/
/*                               <div class="cart-title">*/
/*                                 <a href="product.html">Nam at lectus eget mi vista hendrerit tincidunt - action</a>*/
/*                               </div>*/
/*                               <div class="cart-price">1<span class="x"> x </span><span class="money">€59.00</span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <!--end top-other -->*/
/*     */
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12 top-logo">*/
/*           <a id="site-title" href="index-2.html" title="HTML Game Store Theme">*/
/*             <img  src="{{ asset('assets/images/logo.png') }}" alt="HTML Game Store Theme">*/
/*           </a>*/
/*         </div>*/
/*         <div class="col-md-12 top-support">*/
/*           <div class="support">*/
/*             <span class="h5 txt_color">Customer Support</span><span>1800-000-GameWorld</span>*/
/*             <span class="line"></span>*/
/*             <a href="ymsgr:sendIM?quocbao0415">Chat with us</a>*/
/*           </div>*/
/*           <div class="top-search">*/
/*             <form id="header-search" class="search-form" action="http://demo.designshopify.com/html_gameworld/index.html" method="get">*/
/*               <input type="hidden" name="type" value="product">*/
/*               <input type="text" class="input-block-level" name="q" value="" accesskey="4" autocomplete="off" placeholder="search entire store here">*/
/*               <button type="submit" class="search-submit" title="Search">*/
/*                 <i class="fa fa-search"></i>*/
/*               </button>*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <div class="container">*/
/*       <div class="row top-navigation">*/
/*         <nav class="navbar" role="navigation">*/
/*           <div class="clearfix">*/
/*             <div class="navbar-header">*/
/*               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle main navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/*             </div>*/
/*             <div class="is-mobile visible-xs">*/
/*               <ul class="list-inline">*/
/*                 <li class="is-mobile-menu">*/
/*                   <div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="icon-bar-group">*/
/*                       <span class="icon-bar"></span>*/
/*                       <span class="icon-bar"></span>*/
/*                       <span class="icon-bar"></span>*/
/*                     </span>*/
/*                   </div>*/
/*                 </li>*/
/*                 <li class="is-mobile-login">*/
/*                   <div class="btn-group">*/
/*                     <div class="dropdown-toggle" data-toggle="dropdown">*/
/*                       <i class="fa fa-user"></i>*/
/*                     </div>*/
/*                     <ul class="customer dropdown-menu">*/
/*                       <li class="logout">*/
/*                         <a href="login.html">Log in</a>*/
/*                       </li>*/
/*                       <li class="account">*/
/*                         <a href="register.html">Register</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </div>*/
/*                 </li>*/
/*                 <li class="is-mobile-currency currencies-switcher">*/
/*                   <div class="currency btn-group uppercase">*/
/*                     <a class="currency_wrapper dropdown-toggle" href="#" data-toggle="dropdown">*/
/*                       <i class="sub-dropdown1"></i>*/
/*                       <i class="sub-dropdown"></i>*/
/*                       <span class="currency_code">EUR</span>*/
/*                       &nbsp;<i class="icon-caret-down"></i>*/
/*                     </a>*/
/*                     <ul class="currencies dropdown-menu text-left">*/
/*                       <li class="currency-EUR active">*/
/*                         <a href="javascript:">EUR</a>*/
/*                         <input type="hidden" value="EUR">*/
/*                       </li>*/
/*                       <li class="currency-USD">*/
/*                         <a href="javascript:">USD</a>*/
/*                         <input type="hidden" value="USD">*/
/*                       </li>*/
/*                       <li class="currency-GBP">*/
/*                         <a href="javascript:">GBP</a>*/
/*                         <input type="hidden" value="GBP">*/
/*                       </li>*/
/*                     </ul>*/
/*                     <select class="currencies_src hide" name="currencies">*/
/*                       <option value="EUR" selected="selected">EUR</option>*/
/*                       <option value="USD">USD</option>*/
/*                       <option value="GBP">GBP</option>*/
/*                     </select>*/
/*                   </div>*/
/*                 </li>*/
/*                 <li class="is-mobile-cart">*/
/*                   <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*             <div class="collapse navbar-collapse">*/
/*               <ul class="nav navbar-nav hoverMenuWrapper">*/
/*                 <li class="dropdown">*/
/*                   <a href="collection.html" class="dropdown-toggle link-dropdown" data-toggle="dropdown">*/
/*                     Xbox 360*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                     <i class="sub-dropdown1 visible-md visible-lg"></i>*/
/*                     <i class="sub-dropdown visible-md visible-lg"></i>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu" style="overflow:hidden;display:none">*/
/*                     <li><a tabindex="-1" href="product.html" title="Curabitur mattis tellus rutrum enim facilisis">Curabitur mattis tellus rutrum enim facilisis</a></li>*/
/*                     <li><a tabindex="-1" href="product.html">Curabitur sollicitudin</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Pellentesque habitant morbi  tristique senectus">Pellentesque habitant morbi tristique senectus</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Suspendisse sed libero consequat">Suspendisse sed libero consequat</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                   <a href="collection.html" class="dropdown-toggle link-dropdown" data-toggle="dropdown">*/
/*                     PlayStation 3*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                     <i class="sub-dropdown1 visible-md visible-lg"></i>*/
/*                     <i class="sub-dropdown visible-md visible-lg"></i>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu" style="overflow:hidden;display:none">*/
/*                     <li><a tabindex="-1" href="product.html" title="Cras in nunc non ipsum duo  cursus ultrices">Cras in nunc non ipsum duo cursus ultrices</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Curabitur mattis tellus rutrum enim facilisis">Curabitur mattis tellus rutrum enim facilisis</a></li>*/
/*                     <li><a tabindex="-1" href="product.html">Curabitur sollicitudin</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Nam at lectus eget mi vista  hendrerit tincidunt">Nam at lectus eget mi vista hendrerit tincidunt</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Pellentesque habitant morbi  tristique senectus">Pellentesque habitant morbi tristique senectus</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Suspendisse sed libero consequat">Suspendisse sed libero consequat</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Suspendisse sed libero tesla  magna consequat">Suspendisse sed libero tesla magna consequat</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Auctor semper">Auctor semper</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                   <a href="collection.html" class="dropdown-toggle link-dropdown" data-toggle="dropdown">*/
/*                     Wii*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                     <i class="sub-dropdown1 visible-md visible-lg"></i>*/
/*                     <i class="sub-dropdown visible-md visible-lg"></i>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu" style="overflow:hidden;display:none">*/
/*                     <li><a tabindex="-1" href="product.html" title="Suspendisse sed libero tesla  magna consequat">Suspendisse sed libero tesla magna consequat</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Suspendisse sed libero consequat">Suspendisse sed libero consequat</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Auctor semper">Auctor semper</a></li>*/
/*                     <li><a tabindex="-1" href="product.html" title="Nam at lectus eget mi vista  hendrerit tincidunt">Nam at lectus eget mi vista hendrerit tincidunt</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="collection.html">*/
/*                     3DS*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="collection.html">*/
/*                     PSP*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="collection.html">*/
/*                     PC*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="collection.html">*/
/*                     Gear and Gadgets*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="product.html">*/
/*                     PlayStation 2*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="product.html">*/
/*                     Nintendo GBA*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="">*/
/*                   <a href="typography.html">*/
/*                     Typography*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*                 <li class="last">*/
/*                   <a href="collection.html">*/
/*                     More +*/
/*                     <span></span>*/
/*                   </a>*/
/*                 </li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </nav>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <div class="gr-below-nav">*/
/*       <div class="container">*/
/*         <div class="home_below_nav top-below-nav clearfix">*/
/*           <div class="sub_menu">*/
/*             <ul class="list-inline list-unstylet text-left clearfix">*/
/*               <li class="col-md-5">*/
/*                 <a href="collection.html">*/
/*                   <span>Downloads</span>*/
/*                 </a>*/
/*                 <span>Games &amp; Add-ons</span>*/
/*               </li>*/
/*               <li class="col-md-5">*/
/*                 <a href="collection.html">*/
/*                   <span>Pre-owned</span>*/
/*                 </a>*/
/*                 <span>Great Values</span>*/
/*               </li>*/
/*               <li class="col-md-5">*/
/*                 <a href="collection.html">*/
/*                   <span>Trade-Ins</span>*/
/*                 </a>*/
/*                 <span>Great Offers</span>*/
/*               </li>*/
/*               <li class="col-md-5">*/
/*                 <a href="collection.html">*/
/*                   <span>Monthly-Deals</span>*/
/*                 </a>*/
/*                 <span>Current Sales</span>*/
/*               </li>*/
/*             </ul>*/
/*             <span class="sub_nav"></span>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*   </header>*/
/*  */
