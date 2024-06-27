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
class __TwigTemplate_770ff450e6d4f92c4b18a4c27752624449b3029200099f978cd92d3f4688eb70 extends \Twig\Template
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
            <div class=\"cart-inner\">
                <h1 class=\"page-title\">";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"cart-products\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 32
            echo "                            <div class=\"cart-products__item\">
                                <div class=\"cart-products__img\">
                                    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                        <picture>
                                            <source srcset=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36), "webp", [], "any", false, false, false, 36);
                echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "\"
                                                 title=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                echo "\"
                                                 src=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39), "default", [], "any", false, false, false, 39);
                echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
            }
            // line 42
            echo "                                </div>
                                <div class=\"cart-products__block\">
                                    <div class=\"cart-products__name\">
                                        <a
                                                href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
            echo "</a>
                                        ";
            // line 47
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                            <span class=\"text-danger\">***</span>
                                        ";
            }
            // line 50
            echo "                                        <div class=\"cart-products__price\">
                                            ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price_without_special", [], "any", false, false, false, 51)) {
                // line 52
                echo "                                                <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                echo "</div>
                                                <div class=\"cart-products__withOutDiscount\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price_without_special", [], "any", false, false, false, 53);
                echo "</div>
                                            ";
            } else {
                // line 55
                echo "                                                <div class=\"miniCart-product__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                echo "</div>
                                            ";
            }
            // line 57
            echo "                                        </div>
                                        ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 58)) {
                // line 59
                echo "                                            <ul class=\"cart-products__options\">
                                                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 60));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 61
                    echo "                                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 61);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 61);
                    echo "</li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                                            </ul>
                                        ";
            }
            // line 65
            echo "                                    </div>
                                    <div class=\"cart-products__controls\">
                                        <div class=\"cart-products__control\">
                                            <div class=\"cart-products__change\">
                                                <div class=\"cart-products__set\"
                                                     data-change-minus=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 70);
            echo "\"
                                                     data-change-quantity=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 71);
            echo "\">
                                                    <svg class=\"cart-products__minus\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <use xlink:href=\"/sprite.svg?v=1.0#icon_minus\"></use>
                                                    </svg>
                                                </div>
                                                <div class=\"cart-products__input\">
                                                    ";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 78);
            echo "
                                                </div>
                                                <div class=\"cart-products__set\" data-change-plus=\"";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 80);
            echo "\"
                                                     data-change-quantity=\"";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 81);
            echo "\">
                                                    <svg class=\"cart-products__plus\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <use xlink:href=\"/sprite.svg?v=1.0#icon_plus\"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class=\"cart-products__total\">
                                                ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 89)) {
                // line 90
                echo "                                                    <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 90);
                echo "</div>
                                                    <div class=\"cart-products__withOutDiscount\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total_without_special", [], "any", false, false, false, 91);
                echo "</div>
                                                ";
            } else {
                // line 93
                echo "                                                    <div class=\"cart-products__withDiscount\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 93);
                echo "</div>
                                                ";
            }
            // line 95
            echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"cart-products__remove\">
                                    <button data-product-remove=\"";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 100);
            echo "\" type=\"button\" title=\"Удалить\"
                                            class=\"\">
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
        // line 109
        echo "                    </div>
                </form>
                <div class=\"cart-totals\">
                    ";
        // line 113
        echo "                    ";
        // line 114
        echo "                    ";
        // line 115
        echo "                    ";
        // line 116
        echo "                    ";
        // line 117
        echo "                    ";
        // line 118
        echo "                    <div class=\"cart-totals__item\">
                        <div class=\"cart-totals__title\">Товаров на:</div>
                        <div class=\"cart-totals__line\"></div>
                        <div class=\"cart-totals__value\">
                            ";
        // line 122
        echo ($context["total_products"] ?? null);
        echo "
                        </div>
                    </div>
                    <div class=\"cart-totals__item\">
                        <div class=\"cart-totals__title\">Скидка:</div>
                        <div class=\"cart-totals__line\"></div>
                        <div class=\"cart-totals__value\">
                            - ";
        // line 129
        echo ($context["total_discounts"] ?? null);
        echo "
                        </div>
                    </div>
                    <div class=\"cart-totals__item\">
                        <div class=\"cart-totals__title\">Общий вес:</div>
                        <div class=\"cart-totals__line\"></div>
                        <div class=\"cart-totals__value\">
                            ";
        // line 136
        if (($context["weight"] ?? null)) {
            // line 137
            echo "                                ";
            echo ($context["weight"] ?? null);
            echo "
                            ";
        }
        // line 139
        echo "                        </div>
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
        // line 150
        echo ($context["total_rewards"] ?? null);
        echo "</span>
                            ";
        // line 151
        if ( !($context["logged"] ?? null)) {
            // line 152
            echo "                                <a class=\"cart-totals__login\" href=\"/\">Войти</a>
                            ";
        }
        // line 154
        echo "                        </div>
                    </div>
                </div>
                <div class=\"cart-toCheckout\">
                    <a href=\"";
        // line 158
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">Перейти к оформлению</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 164
        echo "    ";
        // line 165
        echo "    ";
        // line 166
        echo "    ";
        // line 167
        echo "</div>
";
        // line 168
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
        return array (  381 => 168,  378 => 167,  376 => 166,  374 => 165,  372 => 164,  364 => 158,  358 => 154,  354 => 152,  352 => 151,  348 => 150,  335 => 139,  329 => 137,  327 => 136,  317 => 129,  307 => 122,  301 => 118,  299 => 117,  297 => 116,  295 => 115,  293 => 114,  291 => 113,  286 => 109,  271 => 100,  264 => 95,  258 => 93,  253 => 91,  248 => 90,  246 => 89,  235 => 81,  231 => 80,  226 => 78,  216 => 71,  212 => 70,  205 => 65,  201 => 63,  190 => 61,  186 => 60,  183 => 59,  181 => 58,  178 => 57,  172 => 55,  167 => 53,  162 => 52,  160 => 51,  157 => 50,  153 => 48,  151 => 47,  145 => 46,  139 => 42,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  118 => 35,  116 => 34,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  94 => 25,  86 => 21,  83 => 20,  81 => 19,  79 => 18,  77 => 17,  75 => 16,  73 => 15,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/checkout/cart.twig", "");
    }
}
