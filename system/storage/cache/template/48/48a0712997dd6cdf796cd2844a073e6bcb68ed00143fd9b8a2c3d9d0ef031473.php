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
class __TwigTemplate_d00d4c1e65d331d195e1f8bdb46f1c9bab1b6a66fee879ab41b1a7cc819e1145 extends \Twig\Template
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
                <div class=\"sliderProductMain\">
                    <div class=\"product-images swiper\">
                        ";
        // line 15
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 16
            echo "                            ";
            // line 17
            echo "                            ";
            // line 18
            echo "                            ";
            // line 19
            echo "                            ";
            // line 20
            echo "                            ";
            // line 21
            echo "                            ";
            // line 22
            echo "                            ";
            // line 23
            echo "                            ";
            // line 24
            echo "                            ";
            // line 25
            echo "                            ";
            // line 26
            echo "                            ";
            // line 27
            echo "                            <ul class=\"product-images__list swiper-wrapper\" data-lightbox-parent>
                                ";
            // line 29
            echo "                                ";
            // line 30
            echo "                                ";
            // line 31
            echo "                                ";
            // line 32
            echo "                                ";
            // line 33
            echo "                                ";
            // line 34
            echo "                                ";
            // line 35
            echo "                                ";
            // line 36
            echo "                                ";
            // line 37
            echo "                                ";
            // line 38
            echo "                                ";
            // line 39
            echo "                                ";
            // line 40
            echo "                                ";
            // line 41
            echo "                                ";
            // line 42
            echo "                                ";
            // line 43
            echo "                                ";
            // line 44
            echo "                                ";
            if (($context["thumb"] ?? null)) {
                // line 45
                echo "                                    <li class=\"product-images__item\">
                                        <a class=\"product-images__link\" href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "popup", [], "any", false, false, false, 46);
                echo "\"
                                           title=\"";
                // line 47
                echo ($context["heading_title"] ?? null);
                echo "\">
                                            <picture>
                                                <source srcset=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 49);
                echo "\">
                                                <img class=\"product-images__image\"
                                                     src=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 51);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                     title=\"";
                // line 52
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                     loading=\"lazy\"/>
                                            </picture>
                                        </a>
                                    </li>
                                ";
            }
            // line 58
            echo "                                ";
            if (($context["images"] ?? null)) {
                // line 59
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 60
                    echo "                                        <li class=\"product-images__item\">
                                            <a class=\"product-images__link\" href=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 61);
                    echo "\"
                                               title=\"";
                    // line 62
                    echo ($context["heading_title"] ?? null);
                    echo "\">
                                                <picture>
                                                    <source srcset=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 64);
                    echo "\">
                                                    <img class=\"product-images__image\"
                                                         src=\"";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 66);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                         title=\"";
                    // line 67
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
                // line 73
                echo "                                ";
            }
            // line 74
            echo "                            </ul>
                        ";
        }
        // line 76
        echo "                        <nav class=\"sliderProductMain-arrows\">
                            <ul class=\"sliderProductMain-list\">
                                <li class=\"slider__arrow--next\">Вперед</li>
                                <li class=\"slider__arrow--prev\">Назад</li>
                            </ul>
                        </nav>
                    </div>
                    <div class=\"product-tabs\" data-tabs-parent>
                        <div class=\"product-tabs__togglers\">
                            <button class=\"product-tabs__toggler\" data-tab-target=\"tab-1\">Описание</button>
                            <button class=\"product-tabs__toggler\" data-tab-target=\"tab-2\">Уход</button>
                            <button class=\"product-tabs__toggler\" data-tab-target=\"tab-3\">Частые вопросы</button>
                        </div>
                        <div class=\"product-tabs__content\">
                            <div class=\"product-tabs__box\" data-tab=\"tab-1\">
                                ";
        // line 91
        echo ($context["description"] ?? null);
        echo "
                            </div>
                            <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                                ";
        // line 94
        echo ($context["care"] ?? null);
        echo "
                            </div>
                            <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                                ";
        // line 97
        echo ($context["questions"] ?? null);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 105
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 106
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 108
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 112
        if (($context["options"] ?? null)) {
            // line 113
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 114
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 114) == "select")) {
                    // line 115
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 116);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                    echo "]\"
                                               value=\"";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 119), 0, [], "any", false, false, false, 119), "product_option_value_id", [], "any", false, false, false, 119);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 128
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 129
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 136
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 139
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 139) == "checkbox")) {
                    // line 140
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 140)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    echo "\">
                                            ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 143));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 144
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                        echo "][]\"
                                                               value=\"";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 149);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 150);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 157
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "radio")) {
                    // line 158
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 160));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 161
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                        echo "]\"
                                                               value=\"";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\"/>
                                                        ";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 166)) {
                            echo " <img
                                                                src=\"";
                            // line 167
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 167);
                            echo "\"
                                                                alt=\"";
                            // line 168
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 168);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 170
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 170);
                        echo "
                                                        ";
                        // line 171
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171)) {
                            // line 172
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 172);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 172);
                            echo ")
                                                        ";
                        }
                        // line 173
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo " </div>
                                    </div>
                                ";
                }
                // line 178
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "                        </div>
                    ";
        }
        // line 181
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 183
        if (($context["price"] ?? null)) {
            // line 184
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 185
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 187
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 188
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 189
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 191
            echo "                    ";
        }
        // line 192
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 196
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 198
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 199
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 200
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 201
        if ((($context["minimum"] ?? null) > 1)) {
            // line 202
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 204
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
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 239
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 239);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 244
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 244), "webp", [], "any", false, false, false, 244);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 245
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 245);
            echo "\"
                                                 title=\"";
            // line 246
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 246);
            echo "\"
                                                 src=\"";
            // line 247
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 247), "default", [], "any", false, false, false, 247);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 250
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 250)) {
                // line 251
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 252);
                echo "</span>
                                            ";
            } else {
                // line 254
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 255);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 257
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 257);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 258);
                echo "</span>
                                            ";
            }
            // line 260
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 262
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 262);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 264
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 265
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 265);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 271
            echo "                                    ";
            // line 272
            echo "
                                    ";
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
            echo "                                    ";
            // line 295
            echo "                                    ";
            // line 296
            echo "                                    ";
            // line 297
            echo "                                    ";
            // line 298
            echo "                                    ";
            // line 299
            echo "                                    ";
            // line 300
            echo "                                    ";
            // line 301
            echo "                                    ";
            // line 302
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 310
        if (($context["reviews_to_shop"] ?? null)) {
            // line 311
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
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 325
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 327
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 327);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 329);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 331
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 331));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 332
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 333
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
                // line 339
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 342
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 342);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 345
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 345);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 347
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 347));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 348
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 349
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 349);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 351
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 351);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 362
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 363
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 367
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 368
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 369
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 369);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 371
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 371), "webp", [], "any", false, false, false, 371);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 372
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 372);
                echo "\"
                                         title=\"";
                // line 373
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 373);
                echo "\"
                                         src=\"";
                // line 374
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 374), "default", [], "any", false, false, false, 374);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 376
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 376);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 384
        echo "</div>
";
        // line 385
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
        return array (  895 => 385,  892 => 384,  886 => 380,  876 => 376,  871 => 374,  867 => 373,  863 => 372,  859 => 371,  854 => 369,  851 => 368,  847 => 367,  841 => 363,  838 => 362,  831 => 357,  823 => 354,  814 => 351,  809 => 349,  806 => 348,  802 => 347,  797 => 345,  791 => 342,  786 => 339,  774 => 333,  771 => 332,  767 => 331,  762 => 329,  757 => 327,  753 => 325,  749 => 324,  734 => 311,  732 => 310,  725 => 305,  717 => 302,  715 => 301,  713 => 300,  711 => 299,  709 => 298,  707 => 297,  705 => 296,  703 => 295,  701 => 294,  699 => 293,  697 => 292,  695 => 291,  693 => 290,  691 => 289,  689 => 288,  687 => 287,  685 => 286,  683 => 285,  681 => 284,  679 => 283,  677 => 282,  675 => 281,  673 => 280,  671 => 279,  669 => 278,  667 => 277,  665 => 276,  663 => 275,  661 => 274,  658 => 272,  656 => 271,  648 => 265,  644 => 264,  639 => 262,  635 => 260,  630 => 258,  626 => 257,  621 => 255,  618 => 254,  613 => 252,  610 => 251,  608 => 250,  602 => 247,  598 => 246,  594 => 245,  590 => 244,  581 => 239,  577 => 238,  541 => 204,  535 => 202,  533 => 201,  529 => 200,  525 => 199,  521 => 198,  515 => 196,  510 => 192,  507 => 191,  502 => 189,  498 => 188,  493 => 187,  487 => 185,  484 => 184,  482 => 183,  478 => 181,  474 => 179,  468 => 178,  463 => 175,  455 => 173,  448 => 172,  446 => 171,  441 => 170,  428 => 168,  424 => 167,  420 => 166,  416 => 165,  412 => 164,  407 => 161,  401 => 160,  397 => 159,  390 => 158,  387 => 157,  382 => 154,  372 => 150,  368 => 149,  364 => 148,  358 => 144,  354 => 143,  350 => 142,  346 => 141,  339 => 140,  336 => 139,  332 => 138,  329 => 137,  323 => 136,  317 => 132,  308 => 129,  303 => 128,  299 => 127,  288 => 119,  284 => 118,  279 => 116,  276 => 115,  273 => 114,  268 => 113,  266 => 112,  259 => 108,  254 => 106,  250 => 105,  239 => 97,  233 => 94,  227 => 91,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
