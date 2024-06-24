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

/* dreamsstore/template/product/product.twig */
class __TwigTemplate_e4c19313339d8b79cf6cd1dd1b19530fa70f9834bf9a77af14a412ca09650a19 extends \Twig\Template
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
<div id=\"product-product\">
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
    <div class=\"container\">
        <div id=\"content\" class=\"product\">
            <div class=\"product-left\">
                <div class=\"product-images\">
                    ";
        // line 14
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 15
            echo "                        ";
            // line 16
            echo "                        ";
            // line 17
            echo "                        ";
            // line 18
            echo "                        ";
            // line 19
            echo "                        ";
            // line 20
            echo "                        ";
            // line 21
            echo "                        ";
            // line 22
            echo "                        ";
            // line 23
            echo "                        ";
            // line 24
            echo "                        ";
            // line 25
            echo "                        ";
            // line 26
            echo "                        <ul class=\"product-images__list\">
                            ";
            // line 28
            echo "                            ";
            // line 29
            echo "                            ";
            // line 30
            echo "                            ";
            // line 31
            echo "                            ";
            // line 32
            echo "                            ";
            // line 33
            echo "                            ";
            // line 34
            echo "                            ";
            // line 35
            echo "                            ";
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            // line 38
            echo "                            ";
            // line 39
            echo "                            ";
            // line 40
            echo "                            ";
            // line 41
            echo "                            ";
            // line 42
            echo "                            ";
            // line 43
            echo "                            ";
            if (($context["thumb"] ?? null)) {
                // line 44
                echo "                                <li class=\"product-images__item\">
                                    <a class=\"product-images__link\" href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "popup", [], "any", false, false, false, 45);
                echo "\"
                                       title=\"";
                // line 46
                echo ($context["heading_title"] ?? null);
                echo "\">
                                        <picture>
                                            <source srcset=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 48);
                echo "\">
                                            <img class=\"product-images__image\"
                                                 src=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 50);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                 title=\"";
                // line 51
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                 loading=\"lazy\"/>
                                        </picture>
                                    </a>
                                </li>
                            ";
            }
            // line 57
            echo "                            ";
            if (($context["images"] ?? null)) {
                // line 58
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 59
                    echo "                                    <li class=\"product-images__item\">
                                        <a class=\"product-images__link\" href=\"";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 60);
                    echo "\"
                                           title=\"";
                    // line 61
                    echo ($context["heading_title"] ?? null);
                    echo "\">
                                            <picture>
                                                <source srcset=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 63);
                    echo "\">
                                                <img class=\"product-images__image\"
                                                     src=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 65);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                     title=\"";
                    // line 66
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                     loading=\"lazy\"/>
                                            </picture>
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                            ";
            }
            // line 73
            echo "                        </ul>
                    ";
        }
        // line 75
        echo "                </div>
                <div class=\"product-tabs\" data-tabs-parent>
                    <div class=\"product-tabs__togglers\">
                        <button class=\"product-tabs__toggler\" data-tab-target=\"tab-1\">Описание</button>
                        <button class=\"product-tabs__toggler\" data-tab-target=\"tab-2\">Уход</button>
                        <button class=\"product-tabs__toggler\" data-tab-target=\"tab-3\">Частые вопросы</button>
                    </div>
                    <div class=\"product-tabs__content\">
                        <div class=\"product-tabs__box\" data-tab=\"tab-1\">
                            ";
        // line 84
        echo ($context["description"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                            ";
        // line 87
        echo ($context["care"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                            ";
        // line 90
        echo ($context["questions"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 97
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 98
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 100
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 104
        if (($context["options"] ?? null)) {
            // line 105
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 106
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 106) == "select")) {
                    // line 107
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 108);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                    echo "]\"
                                               value=\"";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 111), 0, [], "any", false, false, false, 111), "product_option_value_id", [], "any", false, false, false, 111);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 119));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 120
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 121);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 128
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 131
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 131) == "checkbox")) {
                    // line 132
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 132)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "\">
                                            ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 136
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                        echo "][]\"
                                                               value=\"";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 141);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 149
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "radio")) {
                    // line 150
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 150)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 151);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 153
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 156
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                        echo "]\"
                                                               value=\"";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 157);
                        echo "\"/>
                                                        ";
                        // line 158
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 158)) {
                            echo " <img
                                                                src=\"";
                            // line 159
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 159);
                            echo "\"
                                                                alt=\"";
                            // line 160
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 160);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 160)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 160);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 160);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 162
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 162);
                        echo "
                                                        ";
                        // line 163
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 163)) {
                            // line 164
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 164);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164);
                            echo ")
                                                        ";
                        }
                        // line 165
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo " </div>
                                    </div>
                                ";
                }
                // line 170
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                        </div>
                    ";
        }
        // line 173
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 175
        if (($context["price"] ?? null)) {
            // line 176
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 177
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 179
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 180
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 181
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 183
            echo "                    ";
        }
        // line 184
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 188
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 190
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 191
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 192
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 193
        if ((($context["minimum"] ?? null) > 1)) {
            // line 194
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 196
        echo "                    </div>
                    <div class=\"product-right__click\">
                        <button class=\"btn btn-second\">Заказать в 1 клик</button>
                    </div>
                </div>
                <div class=\"product-right__complect\">
                    <h4>Добавить в комплект</h4>
                </div>
                <div class=\"product-right__delivery\">

                </div>
            </div>
        </div>
    </div>
    <section class=\"fabric-samples\">
        <div class=\"container\">
            <div class=\"fabric-samples-inner\">
                <div class=\"fabric-samples-inner_block\">
                    <h2 class=\"fabric-samples-inner_block-title\">Не нашли подходящий размер или дизайн?</h2>
                    <p class=\"fabric-samples-inner_block-text\">Предлагаем индивидуальный пошив по любым размерам, а
                        также персональный подбор ткани и цвета</p>
                </div>
                <div class=\"fabric-samples-inner_btn\">
                    <a class=\"btn btn-primary\">Связаться с нами</a>
                </div>
            </div>
        </div>
    </section>
    <section class=\"product-similar\">
        <div class=\"container\">
            <div class=\"slider\">
                <h2 class=\"section-title\">Похожие товары</h2>
                <div class=\"swiper\">
                    <div class=\"swiper-wrapper\" data-lightbox-parent>
                        ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 231
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 231);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 236
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 236), "webp", [], "any", false, false, false, 236);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 237
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 237);
            echo "\"
                                                 title=\"";
            // line 238
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 238);
            echo "\"
                                                 src=\"";
            // line 239
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 239), "default", [], "any", false, false, false, 239);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 242
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 242)) {
                // line 243
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 244);
                echo "</span>
                                            ";
            } else {
                // line 246
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 247);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 249);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 250);
                echo "</span>
                                            ";
            }
            // line 252
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 254
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 254);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 256
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 257
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 257);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 263
            echo "                                    ";
            // line 264
            echo "
                                    ";
            // line 266
            echo "                                    ";
            // line 267
            echo "                                    ";
            // line 268
            echo "                                    ";
            // line 269
            echo "                                    ";
            // line 270
            echo "                                    ";
            // line 271
            echo "                                    ";
            // line 272
            echo "                                    ";
            // line 273
            echo "                                    ";
            // line 274
            echo "                                    ";
            // line 275
            echo "                                    ";
            // line 276
            echo "                                    ";
            // line 277
            echo "                                    ";
            // line 278
            echo "                                    ";
            // line 279
            echo "                                    ";
            // line 280
            echo "                                    ";
            // line 281
            echo "                                    ";
            // line 282
            echo "                                    ";
            // line 283
            echo "                                    ";
            // line 284
            echo "                                    ";
            // line 285
            echo "                                    ";
            // line 286
            echo "                                    ";
            // line 287
            echo "                                    ";
            // line 288
            echo "                                    ";
            // line 289
            echo "                                    ";
            // line 290
            echo "                                    ";
            // line 291
            echo "                                    ";
            // line 292
            echo "                                    ";
            // line 293
            echo "                                    ";
            // line 294
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 302
        if (($context["reviews_to_shop"] ?? null)) {
            // line 303
            echo "        <section class=\"product-reviews sliderProductReviews\">
            <div class=\"container\">
                <div class=\"product-reviews__block\">
                    <h2 class=\"section-title\">Отзывы покупателей</h2>
                    <a href=\"/reviews\" class=\"product-reviews__watchAll\">
                        <span>Смотреть все</span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\">
                            <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                        </svg>
                    </a>
                </div>
                <div class=\"reviews_site swiper\">
                    <ul class=\"reviews_site-list swiper-wrapper\" data-lightbox-parent>
                        ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 317
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 319);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 321);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 324
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 325
                    echo $context["grade"];
                    echo "\"
                                                         xmlns=\"http://www.w3.org/2000/svg\">
                                                        <use xlink:href=\"/sprite.svg#icon_star\"></use>
                                                    </svg>
                                                </li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 331
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 334
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 334);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 337);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 339));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 340
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 341);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 343
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 343);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 354
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 355
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 360
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 361
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 361);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 363
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 363), "webp", [], "any", false, false, false, 363);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 364
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 364);
                echo "\"
                                         title=\"";
                // line 365
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 365);
                echo "\"
                                         src=\"";
                // line 366
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 366), "default", [], "any", false, false, false, 366);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 368
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 368);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 376
        echo "</div>
";
        // line 377
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 377,  884 => 376,  878 => 372,  868 => 368,  863 => 366,  859 => 365,  855 => 364,  851 => 363,  846 => 361,  843 => 360,  839 => 359,  833 => 355,  830 => 354,  823 => 349,  815 => 346,  806 => 343,  801 => 341,  798 => 340,  794 => 339,  789 => 337,  783 => 334,  778 => 331,  766 => 325,  763 => 324,  759 => 323,  754 => 321,  749 => 319,  745 => 317,  741 => 316,  726 => 303,  724 => 302,  717 => 297,  709 => 294,  707 => 293,  705 => 292,  703 => 291,  701 => 290,  699 => 289,  697 => 288,  695 => 287,  693 => 286,  691 => 285,  689 => 284,  687 => 283,  685 => 282,  683 => 281,  681 => 280,  679 => 279,  677 => 278,  675 => 277,  673 => 276,  671 => 275,  669 => 274,  667 => 273,  665 => 272,  663 => 271,  661 => 270,  659 => 269,  657 => 268,  655 => 267,  653 => 266,  650 => 264,  648 => 263,  640 => 257,  636 => 256,  631 => 254,  627 => 252,  622 => 250,  618 => 249,  613 => 247,  610 => 246,  605 => 244,  602 => 243,  600 => 242,  594 => 239,  590 => 238,  586 => 237,  582 => 236,  573 => 231,  569 => 230,  533 => 196,  527 => 194,  525 => 193,  521 => 192,  517 => 191,  513 => 190,  507 => 188,  502 => 184,  499 => 183,  494 => 181,  490 => 180,  485 => 179,  479 => 177,  476 => 176,  474 => 175,  470 => 173,  466 => 171,  460 => 170,  455 => 167,  447 => 165,  440 => 164,  438 => 163,  433 => 162,  420 => 160,  416 => 159,  412 => 158,  408 => 157,  404 => 156,  399 => 153,  393 => 152,  389 => 151,  382 => 150,  379 => 149,  374 => 146,  364 => 142,  360 => 141,  356 => 140,  350 => 136,  346 => 135,  342 => 134,  338 => 133,  331 => 132,  328 => 131,  324 => 130,  321 => 129,  315 => 128,  309 => 124,  300 => 121,  295 => 120,  291 => 119,  280 => 111,  276 => 110,  271 => 108,  268 => 107,  265 => 106,  260 => 105,  258 => 104,  251 => 100,  246 => 98,  242 => 97,  232 => 90,  226 => 87,  220 => 84,  209 => 75,  205 => 73,  202 => 72,  190 => 66,  184 => 65,  179 => 63,  174 => 61,  170 => 60,  167 => 59,  162 => 58,  159 => 57,  150 => 51,  144 => 50,  139 => 48,  134 => 46,  130 => 45,  127 => 44,  124 => 43,  122 => 42,  120 => 41,  118 => 40,  116 => 39,  114 => 38,  112 => 37,  110 => 36,  108 => 35,  106 => 34,  104 => 33,  102 => 32,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  91 => 26,  89 => 25,  87 => 24,  85 => 23,  83 => 22,  81 => 21,  79 => 20,  77 => 19,  75 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
