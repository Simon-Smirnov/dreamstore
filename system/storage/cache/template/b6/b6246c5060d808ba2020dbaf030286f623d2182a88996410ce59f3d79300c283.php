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
class __TwigTemplate_f7a122fdbccf68fb3d0953f0038b6583900f6773b46822d575c6d4796965dd94 extends \Twig\Template
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
                echo "                                    <picture>
                                        <source srcset=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 35), "webp", [], "any", false, false, false, 35);
                echo "\">
                                        <img class=\"catalog-inner_link-img\" alt=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\"
                                             title=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "\"
                                             src=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 38), "default", [], "any", false, false, false, 38);
                echo "\" loading=\"lazy\">
                                    </picture>
                                ";
            }
            // line 41
            echo "                            </div>
                            <div class=\"cart-products__block\">
                                <div class=\"cart-products__name\">
                                    <a
                                            href=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
            echo "</a>
                                    ";
            // line 46
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                        <span class=\"text-danger\">***</span>
                                    ";
            }
            // line 49
            echo "                                    <div class=\"cart-products__price\">
                                        ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price_without_special", [], "any", false, false, false, 50)) {
                // line 51
                echo "                                            <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                echo "</div>
                                            <div class=\"cart-products__withOutDiscount\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price_without_special", [], "any", false, false, false, 52);
                echo "</div>
                                        ";
            } else {
                // line 54
                echo "                                            <div class=\"miniCart-product__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
                echo "</div>
                                        ";
            }
            // line 56
            echo "                                    </div>
                                    ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 57)) {
                // line 58
                echo "                                        <ul class=\"cart-products__options\">
                                            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 60
                    echo "                                                <li>- ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 60);
                    echo "</li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                        </ul>
                                    ";
            }
            // line 64
            echo "                                </div>
                                <div class=\"cart-products__controls\">
                                    <div class=\"cart-products__control\">
                                        <div class=\"cart-products__change\">
                                            <input type=\"text\" name=\"quantity[";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 68);
            echo "]\"
                                                   value=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 69);
            echo "\" size=\"1\" class=\"form-control\"/>
                                            <div class=\"input-group-btn\">
                                                <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo ($context["button_update"] ?? null);
            echo "\"
                                                        class=\"btn btn-primary\">
                                                </button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"
                                                        onclick=\"cart.remove('";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 76);
            echo "');\">
                                                </button>
                                            </div>
                                        </div>
                                        <div class=\"cart-products__total\">
                                            ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 81)) {
                // line 82
                echo "                                                <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 82);
                echo "</div>
                                                <div class=\"cart-products__withOutDiscount\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 83);
                echo "</div>
                                            ";
            } else {
                // line 85
                echo "                                                <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 85);
                echo "</div>
                                            ";
            }
            // line 87
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"cart-products__remove\">
                                <button data-product-remove=\"23\" type=\"button\" title=\"Удалить\" class=\"\">
                                    <svg class=\"miniCart-product__svg\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <use xlink:href=\"/sprite.svg#icon_trash\"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </div>
            </form>
            <div class=\"cart-totals\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 104
            echo "                    <div class=\"cart-totals__item\">
                        <div class=\"cart-totals__title\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 105);
            echo ":</div>
                        <div class=\"cart-totals__value\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 106);
            echo "</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Общий вес:</div>
                    <div class=\"cart-totals__value\">
                        ";
        // line 112
        if (($context["weight"] ?? null)) {
            // line 113
            echo "                            ";
            echo ($context["weight"] ?? null);
            echo "
                        ";
        }
        // line 115
        echo "                    </div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Стоимость доставки:</div>
                    <div class=\"cart-totals__value\">не рассчитана</div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Бонусов за заказ:</div>
                    <div class=\"cart-totals__value\">
                        <span>+165";
        // line 124
        echo ($context["bonuses"] ?? null);
        echo "</span>
                        ";
        // line 125
        if ( !($context["logged"] ?? null)) {
            // line 126
            echo "                            <span>Войти</span>
                        ";
        }
        // line 128
        echo "                    </div>
                </div>
            </div>
            <div class=\"cart-toCheckout\">
                <a href=\"";
        // line 132
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">Перейти к оформлению</a>
            </div>
        </div>
    </div>
    ";
        // line 137
        echo "    ";
        // line 138
        echo "    ";
        // line 139
        echo "    ";
        // line 140
        echo "</div>
";
        // line 141
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
        return array (  356 => 141,  353 => 140,  351 => 139,  349 => 138,  347 => 137,  340 => 132,  334 => 128,  330 => 126,  328 => 125,  324 => 124,  313 => 115,  307 => 113,  305 => 112,  300 => 109,  291 => 106,  287 => 105,  284 => 104,  280 => 103,  275 => 100,  257 => 87,  251 => 85,  246 => 83,  241 => 82,  239 => 81,  231 => 76,  226 => 74,  220 => 71,  215 => 69,  211 => 68,  205 => 64,  201 => 62,  190 => 60,  186 => 59,  183 => 58,  181 => 57,  178 => 56,  172 => 54,  167 => 52,  162 => 51,  160 => 50,  157 => 49,  153 => 47,  151 => 46,  145 => 45,  139 => 41,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  118 => 34,  116 => 33,  112 => 31,  108 => 30,  103 => 28,  99 => 27,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
