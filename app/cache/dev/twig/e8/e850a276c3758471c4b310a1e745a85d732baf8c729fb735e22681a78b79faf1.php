<?php

/* FrontEndGamesBundle:Pannier:Pannier.html.twig */
class __TwigTemplate_7065f43015c1b113fcb7d22b10f63505ae99f5361ad1f160e0edec9e7b2cbe77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontEndGamesBundle::base.html.twig", "FrontEndGamesBundle:Pannier:Pannier.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontEndGamesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["total"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"content-wrapper-parent\">
    <div id=\"content-wrapper\">
      <div id=\"content\" class=\"container clearfix\">
        <div class=\"group_breadcrumb\">
          <div id=\"breadcrumb\" class=\"row breadcrumb\">
            <div class=\"col-md-24\">
              <a href=\"index-2.html\" class=\"homepage-link\" title=\"Back to the frontpage\">Home</a>
              <i class=\"angle-right\">&gt;</i>
              <span class=\"page-title\">Your Shopping Cart</span>
            </div>
          </div>
        </div>
        
        <section class=\"row content\">
          <div id=\"col-main\" class=\"col-md-24 cart-page content\">
            <div id=\"page-header\">
              <h4 id=\"page-title\">Shopping Cart</h4>
            </div>
            <form action=\"http://demo.designshopify.com/html_gameworld/cart.html\" method=\"post\" id=\"cartform\" class=\"clearfix\">
              <div class=\"row-fluid\">
                <div class=\"wrap-table\">
                  <table class=\"cart-items haft-border\">
                    <colgroup>
                      <col class=\"checkout-image\">
                      <col class=\"checkout-info\">
                      <col class=\"checkout-price\">
                      <col class=\"checkout-quantity\">
                      <col class=\"checkout-totals\">
                      <col class=\"checkout-delete\">
                    </colgroup>
                    <thead>
                      <tr class=\"top-labels\">
                        <th></th>
                        <th class=\"text-left\">Product name</th>
                        <th>Unit Price</th>
                        <th class=\"qty\">Qty</th>
                        <th>SubTotal</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 46
            echo "                      <tr class=\"item curabitur-mattis-tellus-rutrum-enim-facilisis\">
                        <td>
                          <img src=\"screen/products/product_03_small.jpg\" alt=\"Curabitur mattis tellus rutrum enim facilisis\">
                        </td>
                        <td class=\"title\">
                          <a class=\"link\" href=\"product.html\">
                              <span class=\"block\">";
            // line 52
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["produit"], "nom", array())), "html", null, true);
            echo "</span>
                            <span class=\"variant_title\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "typejeu", array()), "type", array()), "html", null, true);
            echo "</span>
                          </a>
                           <span class=\"variant_title\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "etatJeu", array()), "etat", array()), "html", null, true);
            echo "</span>
                        </td>
                        <td class=\"title-1\"><span class=\"money\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " DT</span></td>
                        <td class=\"qty\">
                          <input class=\"form-control input-1\" type=\"number\" maxlength=\"5\" size=\"5\" id=\"updates_455695609\" name=\"updates[]\" value=\"1\">
                        </td>
                        <td class=\"total title-1\"><span class=\"money\">";
            // line 61
            $context["foo"] = ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"));
            echo " ";
            $context["total"] = ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
            echo " DT</span></td>
                        <td class=\"action\">
                          <button class=\"btn-7 btooltip\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Remove\">
                            <i class=\"fa fa-times\"></i>
                          </button>
                        </td>
                      </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                    <tfoot>
                      <tr class=\"bottom-summary\">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class=\"update-quantities\">
                          <button type=\"submit\" id=\"update-cart\" class=\"btn btn-1\" name=\"update\">Update Qty</button>
                        </td>
                        <td class=\"subtotal title-1\"><span class=\"money\">";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " DT</span></td>
                        <td>&nbsp;</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class=\"row-fluid\">
                <div id=\"checkout-proceed\" class=\"last1 text-right\">
                  <button class=\"btn btn-2 large\" type=\"submit\" id=\"update-cart\" name=\"checkout\">Proceed to Checkout <i class=\"fa fa-chevron-right\"></i></button>
                </div>
              </div>
              <div class=\"row-fluid\">
                <div id=\"checkout-addnote\" class=\"col-md-10 last\">
                  <div class=\"wrapper-title\">
                    <span>Add a note for the seller</span>
                  </div>
                  <textarea id=\"note\" rows=\"5\" class=\"form-control\" name=\"note\"></textarea>
                </div>
              </div>
            </form>
            <div id=\"shipping-calculator\">
              <div class=\"row\">
                <div class=\"col-md-10\">
                  <div class=\"wrapper-title\">
                    <span>Get shipping estimates</span>
                  </div>
                  <div class=\"row\">
                    <p class=\"col-md-24\">
                      <label for=\"address_country\" class=\"control-label\">Country</label>
                      <select id=\"address_country\" class=\"form-control\" name=\"address[country]\" data-default=\"United States\">
                        <option value=\"\" data-provinces=\"[]\">-- Please Select --</option>
                      </select>
                    </p>
                    <p id=\"address_province_container\" class=\"col-md-24\" style=\"\">
                      <label for=\"address_province\" id=\"address_province_label\" class=\"control-label\">State</label>
                      <select id=\"address_province\" class=\"form-control address_form\" name=\"address[province]\" data-default=\"\">
                      </select>
                    </p>
                    <p class=\"col-md-24\">
                      <label for=\"address_zip\" class=\"control-label\">Zip/Postal Code</label>
                      <input type=\"text\" class=\"form-control\" id=\"address_zip\" name=\"address[zip]\">
                    </p>
                    <p class=\"col-md-24 last1\">
                      <button class=\"btn small get-rates\">Calculate shipping</button>
                    </p>
                  </div>
                </div>
                <div id=\"wrapper-response\" class=\"col-md-14\"></div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  

";
    }

    public function getTemplateName()
    {
        return "FrontEndGamesBundle:Pannier:Pannier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 78,  128 => 69,  110 => 61,  103 => 57,  98 => 55,  93 => 53,  89 => 52,  81 => 46,  77 => 45,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'FrontEndGamesBundle::base.html.twig' %}*/
/* {% set total = 0 %}*/
/* {% block body %}*/
/*   <div id="content-wrapper-parent">*/
/*     <div id="content-wrapper">*/
/*       <div id="content" class="container clearfix">*/
/*         <div class="group_breadcrumb">*/
/*           <div id="breadcrumb" class="row breadcrumb">*/
/*             <div class="col-md-24">*/
/*               <a href="index-2.html" class="homepage-link" title="Back to the frontpage">Home</a>*/
/*               <i class="angle-right">&gt;</i>*/
/*               <span class="page-title">Your Shopping Cart</span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/*         <section class="row content">*/
/*           <div id="col-main" class="col-md-24 cart-page content">*/
/*             <div id="page-header">*/
/*               <h4 id="page-title">Shopping Cart</h4>*/
/*             </div>*/
/*             <form action="http://demo.designshopify.com/html_gameworld/cart.html" method="post" id="cartform" class="clearfix">*/
/*               <div class="row-fluid">*/
/*                 <div class="wrap-table">*/
/*                   <table class="cart-items haft-border">*/
/*                     <colgroup>*/
/*                       <col class="checkout-image">*/
/*                       <col class="checkout-info">*/
/*                       <col class="checkout-price">*/
/*                       <col class="checkout-quantity">*/
/*                       <col class="checkout-totals">*/
/*                       <col class="checkout-delete">*/
/*                     </colgroup>*/
/*                     <thead>*/
/*                       <tr class="top-labels">*/
/*                         <th></th>*/
/*                         <th class="text-left">Product name</th>*/
/*                         <th>Unit Price</th>*/
/*                         <th class="qty">Qty</th>*/
/*                         <th>SubTotal</th>*/
/*                         <th></th>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {%for produit in produits%}*/
/*                       <tr class="item curabitur-mattis-tellus-rutrum-enim-facilisis">*/
/*                         <td>*/
/*                           <img src="screen/products/product_03_small.jpg" alt="Curabitur mattis tellus rutrum enim facilisis">*/
/*                         </td>*/
/*                         <td class="title">*/
/*                           <a class="link" href="product.html">*/
/*                               <span class="block">{{produit.nom|upper}}</span>*/
/*                             <span class="variant_title">{{produit.typejeu.type}}</span>*/
/*                           </a>*/
/*                            <span class="variant_title">{{produit.etatJeu.etat}}</span>*/
/*                         </td>*/
/*                         <td class="title-1"><span class="money">{{produit.prix}} DT</span></td>*/
/*                         <td class="qty">*/
/*                           <input class="form-control input-1" type="number" maxlength="5" size="5" id="updates_455695609" name="updates[]" value="1">*/
/*                         </td>*/
/*                         <td class="total title-1"><span class="money">{%set foo = produit.prix * panier[produit.id]%} {%set total = foo+total%} {{foo}} DT</span></td>*/
/*                         <td class="action">*/
/*                           <button class="btn-7 btooltip" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">*/
/*                             <i class="fa fa-times"></i>*/
/*                           </button>*/
/*                         </td>*/
/*                       </tr>*/
/*                      {% endfor %}*/
/*                         </tbody>*/
/*                     <tfoot>*/
/*                       <tr class="bottom-summary">*/
/*                         <td>&nbsp;</td>*/
/*                         <td>&nbsp;</td>*/
/*                         <td>&nbsp;</td>*/
/*                         <td class="update-quantities">*/
/*                           <button type="submit" id="update-cart" class="btn btn-1" name="update">Update Qty</button>*/
/*                         </td>*/
/*                         <td class="subtotal title-1"><span class="money">{{total}} DT</span></td>*/
/*                         <td>&nbsp;</td>*/
/*                       </tr>*/
/*                     </tfoot>*/
/*                   </table>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="row-fluid">*/
/*                 <div id="checkout-proceed" class="last1 text-right">*/
/*                   <button class="btn btn-2 large" type="submit" id="update-cart" name="checkout">Proceed to Checkout <i class="fa fa-chevron-right"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="row-fluid">*/
/*                 <div id="checkout-addnote" class="col-md-10 last">*/
/*                   <div class="wrapper-title">*/
/*                     <span>Add a note for the seller</span>*/
/*                   </div>*/
/*                   <textarea id="note" rows="5" class="form-control" name="note"></textarea>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/*             <div id="shipping-calculator">*/
/*               <div class="row">*/
/*                 <div class="col-md-10">*/
/*                   <div class="wrapper-title">*/
/*                     <span>Get shipping estimates</span>*/
/*                   </div>*/
/*                   <div class="row">*/
/*                     <p class="col-md-24">*/
/*                       <label for="address_country" class="control-label">Country</label>*/
/*                       <select id="address_country" class="form-control" name="address[country]" data-default="United States">*/
/*                         <option value="" data-provinces="[]">-- Please Select --</option>*/
/*                       </select>*/
/*                     </p>*/
/*                     <p id="address_province_container" class="col-md-24" style="">*/
/*                       <label for="address_province" id="address_province_label" class="control-label">State</label>*/
/*                       <select id="address_province" class="form-control address_form" name="address[province]" data-default="">*/
/*                       </select>*/
/*                     </p>*/
/*                     <p class="col-md-24">*/
/*                       <label for="address_zip" class="control-label">Zip/Postal Code</label>*/
/*                       <input type="text" class="form-control" id="address_zip" name="address[zip]">*/
/*                     </p>*/
/*                     <p class="col-md-24 last1">*/
/*                       <button class="btn small get-rates">Calculate shipping</button>*/
/*                     </p>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="wrapper-response" class="col-md-14"></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </section>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/* */
/* {% endblock %}*/
