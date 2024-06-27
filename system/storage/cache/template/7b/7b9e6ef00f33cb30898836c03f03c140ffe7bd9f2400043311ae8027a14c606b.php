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
class __TwigTemplate_1df04e8d9257327977a0ced2d4b2c1426f343ace817c3f8dafc0dfd689b97299 extends \Twig\Template
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
                    echo "                                                <li>";
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
                                            <div class=\"cart-products__set\" data-change-minus=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 68);
            echo "\"
                                                 data-change-quantity=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 69);
            echo "\">
                                                <svg class=\"cart-products__minus\"
                                                     xmlns=\"http://www.w3.org/2000/svg\">
                                                    <use xlink:href=\"/sprite.svg?v=1.0#icon_minus\"></use>
                                                </svg>
                                            </div>
                                            <div class=\"cart-products__input\">
                                                ";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 76);
            echo "
                                            </div>
                                            <div class=\"cart-products__set\" data-change-plus=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 78);
            echo "\"
                                                 data-change-quantity=\"";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 79);
            echo "\">
                                                <svg class=\"cart-products__plus\"
                                                     xmlns=\"http://www.w3.org/2000/svg\">
                                                    <use xlink:href=\"/sprite.svg?v=1.0#icon_plus\"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class=\"cart-products__total\">
                                            ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 87)) {
                // line 88
                echo "                                                <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 88);
                echo "</div>
                                                <div class=\"cart-products__withOutDiscount\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 89);
                echo "</div>
                                            ";
            } else {
                // line 91
                echo "                                                <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 91);
                echo "</div>
                                            ";
            }
            // line 93
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
        // line 106
        echo "                </div>
            </form>
            <div class=\"cart-totals\">
                ";
        // line 110
        echo "                ";
        // line 111
        echo "                ";
        // line 112
        echo "                ";
        // line 113
        echo "                ";
        // line 114
        echo "                ";
        // line 115
        echo "                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Товаров на:</div>
                    <div class=\"cart-totals__value\">
                        ";
        // line 118
        echo ($context["total_products"] ?? null);
        echo "
                    </div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Общий вес:</div>
                    <div class=\"cart-totals__value\">
                        ";
        // line 124
        if (($context["weight"] ?? null)) {
            // line 125
            echo "                            ";
            echo ($context["weight"] ?? null);
            echo "
                        ";
        }
        // line 127
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
        // line 136
        echo ($context["bonuses"] ?? null);
        echo "</span>
                        ";
        // line 137
        if ( !($context["logged"] ?? null)) {
            // line 138
            echo "                            <span>Войти</span>
                        ";
        }
        // line 140
        echo "                    </div>
                </div>
            </div>
            <div class=\"cart-toCheckout\">
                <a href=\"";
        // line 144
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">Перейти к оформлению</a>
            </div>
        </div>
    </div>
    ";
        // line 149
        echo "    ";
        // line 150
        echo "    ";
        // line 151
        echo "    ";
        // line 152
        echo "</div>
";
        // line 153
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
        return array (  361 => 153,  358 => 152,  356 => 151,  354 => 150,  352 => 149,  345 => 144,  339 => 140,  335 => 138,  333 => 137,  329 => 136,  318 => 127,  312 => 125,  310 => 124,  301 => 118,  296 => 115,  294 => 114,  292 => 113,  290 => 112,  288 => 111,  286 => 110,  281 => 106,  263 => 93,  257 => 91,  252 => 89,  247 => 88,  245 => 87,  234 => 79,  230 => 78,  225 => 76,  215 => 69,  211 => 68,  205 => 64,  201 => 62,  190 => 60,  186 => 59,  183 => 58,  181 => 57,  178 => 56,  172 => 54,  167 => 52,  162 => 51,  160 => 50,  157 => 49,  153 => 47,  151 => 46,  145 => 45,  139 => 41,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  118 => 34,  116 => 33,  112 => 31,  108 => 30,  103 => 28,  99 => 27,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
