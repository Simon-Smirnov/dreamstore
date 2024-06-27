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
class __TwigTemplate_152d723b47e3cdbd1b3e33e58a772810c638b822afcd87a0a0636e2ea999cb87 extends \Twig\Template
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
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
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
        <div id=\"content\" class=\"cart\" data-checkout-cart>
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
                    <div class=\"cart-totals__line\"></div>
                    <div class=\"cart-totals__value\">
                        ";
        // line 119
        echo ($context["total_products"] ?? null);
        echo "
                    </div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Скидка:</div>
                    <div class=\"cart-totals__line\"></div>
                    <div class=\"cart-totals__value\">
                        - ";
        // line 126
        echo ($context["total_discounts"] ?? null);
        echo "
                    </div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Общий вес:</div>
                    <div class=\"cart-totals__line\"></div>
                    <div class=\"cart-totals__value\">
                        ";
        // line 133
        if (($context["weight"] ?? null)) {
            // line 134
            echo "                            ";
            echo ($context["weight"] ?? null);
            echo "
                        ";
        }
        // line 136
        echo "                    </div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Стоимость доставки:</div>
                    <div class=\"cart-totals__line\"></div>
                    <div class=\"cart-totals__value\">не рассчитана</div>
                </div>
                <div class=\"cart-totals__item\">
                    <div class=\"cart-totals__title\">Бонусов за заказ:</div>
                    <div class=\"cart-totals__line\"></div>
                    <div class=\"cart-totals__value\">
                        <span>+";
        // line 147
        echo ($context["total_rewards"] ?? null);
        echo "</span>
                        ";
        // line 148
        if ( !($context["logged"] ?? null)) {
            // line 149
            echo "                            <a class=\"cart-totals__login\" href=\"/\">Войти</a>
                        ";
        }
        // line 151
        echo "                    </div>
                </div>
            </div>
            <div class=\"cart-toCheckout\">
                <a href=\"";
        // line 155
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">Перейти к оформлению</a>
            </div>
        </div>
    </div>
    ";
        // line 160
        echo "    ";
        // line 161
        echo "    ";
        // line 162
        echo "    ";
        // line 163
        echo "</div>
";
        // line 164
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
        return array (  374 => 164,  371 => 163,  369 => 162,  367 => 161,  365 => 160,  358 => 155,  352 => 151,  348 => 149,  346 => 148,  342 => 147,  329 => 136,  323 => 134,  321 => 133,  311 => 126,  301 => 119,  295 => 115,  293 => 114,  291 => 113,  289 => 112,  287 => 111,  285 => 110,  280 => 106,  262 => 93,  256 => 91,  251 => 89,  246 => 88,  244 => 87,  233 => 79,  229 => 78,  224 => 76,  214 => 69,  210 => 68,  204 => 64,  200 => 62,  189 => 60,  185 => 59,  182 => 58,  180 => 57,  177 => 56,  171 => 54,  166 => 52,  161 => 51,  159 => 50,  156 => 49,  152 => 47,  150 => 46,  144 => 45,  138 => 41,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  117 => 34,  115 => 33,  111 => 31,  107 => 30,  102 => 28,  98 => 27,  94 => 25,  86 => 21,  83 => 20,  81 => 19,  79 => 18,  77 => 17,  75 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
