<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dreamsstore/template/checkout/cart.twig */
class __TwigTemplate_1bb5922fc8fe58e661a1ae0a13112d09448d82e55ccbb6680871202144311726 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"checkout-cart\">
    <div class=\"container\">
        <ul class=\"breadcrumb\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
    </div>
    ";
        // line 10
        if (($context["attention"] ?? null)) {
            // line 11
            echo "        <div class=\"alert notify\">";
            echo ($context["attention"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 15
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 16
            echo "        <div class=\"alert success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 20
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "        <div class=\"alert error alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 25
        echo "    <div class=\"container\">
        <div id=\"content\" class=\"cart\">
            <h1 class=\"page-title\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"cart-products\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "                        <div class=\"cart-products__item\">
                            <div class=\"cart-products__img\">
                                ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33)) {
                // line 34
                echo "                                    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\">
                                        <img
                                                src=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\"
                                                title=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "\" class=\"img-thumbnail\"/>
                                    </a>
                                ";
            }
            // line 40
            echo "                            </div>
                            <div class=\"cart-products__block\">
                                <div class=\"cart-products__name\">
                                    <a
                                            href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
            echo "</a>
                                    ";
            // line 45
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                        <span class=\"text-danger\">***</span>
                                    ";
            }
            // line 48
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                        <ul>
                                            ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 51
                    echo "                                                <li>- ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 51);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 51);
                    echo "</li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                                        </ul>
                                    ";
            }
            // line 55
            echo "                                </div>
                                <div class=\"cart-products__controls\">
                                    <div class=\"text-left\">
                                        <div class=\"input-group btn-block\">
                                            <input type=\"text\" name=\"quantity[";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 59);
            echo "]\"
                                                   value=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60);
            echo "\" size=\"1\" class=\"form-control\"/>
                                            <div class=\"input-group-btn\">
                                                <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo ($context["button_update"] ?? null);
            echo "\"
                                                        class=\"btn btn-primary\">
                                                </button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 65
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"
                                                        onclick=\"cart.remove('";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 67);
            echo "');\">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <td class=\"text-right\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75);
            echo "</td>
                            <td class=\"text-right\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 76);
            echo "</td>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 80
            echo "                        <tr>
                            <td></td>
                            <td class=\"text-left\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 82);
            echo "</td>
                            <td class=\"text-left\"></td>
                            <td class=\"text-left\">
                                <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                    <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\"
                                           class=\"form-control\"/>
                                    <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 89
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                          onclick=\"voucher.remove('";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 90);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                            </td>
                            <td class=\"text-right\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 93);
            echo "</td>
                            <td class=\"text-right\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 94);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    </tbody>
                </div>
            </form>
            <div class=\"cart-totals\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 102
            echo "                    <div class=\"cart-totals__item\">
                        <div class=\"cart-totals__title\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 103);
            echo ":</div>
                        <div class=\"cart-totals__value\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 104);
            echo "</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </div>
            <div class=\"cart-toCheckout\">
                <div class=\"pull-right\"><a href=\"";
        // line 109
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">Перейти к оформлению</a></div>
            </div>
        </div>
    </div>
    ";
        // line 114
        echo "    ";
        // line 115
        echo "    ";
        // line 116
        echo "    ";
        // line 117
        echo "</div>
";
        // line 118
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 118,  314 => 117,  312 => 116,  310 => 115,  308 => 114,  301 => 109,  297 => 107,  288 => 104,  284 => 103,  281 => 102,  277 => 101,  271 => 97,  262 => 94,  258 => 93,  252 => 90,  248 => 89,  238 => 82,  234 => 80,  229 => 79,  220 => 76,  216 => 75,  205 => 67,  200 => 65,  194 => 62,  189 => 60,  185 => 59,  179 => 55,  175 => 53,  164 => 51,  160 => 50,  157 => 49,  154 => 48,  150 => 46,  148 => 45,  142 => 44,  136 => 40,  130 => 37,  124 => 36,  118 => 34,  116 => 33,  112 => 31,  108 => 30,  103 => 28,  99 => 27,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
