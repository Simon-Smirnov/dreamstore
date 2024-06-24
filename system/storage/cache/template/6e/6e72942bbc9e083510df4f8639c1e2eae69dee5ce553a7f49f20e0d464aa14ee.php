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
class __TwigTemplate_6469c0095b35455e37144d92c0b9c16059d586de7ae2e2c6b7bf19b95f696597 extends \Twig\Template
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
                                <li class=\"slider__arrow--prev\">
                                    <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                    </svg>
                                </li>
                                <li class=\"slider__arrow--next\">
                                    <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                    </svg>
                                </li>
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
        // line 99
        echo ($context["description"] ?? null);
        echo "
                            </div>
                            <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                                ";
        // line 102
        echo ($context["care"] ?? null);
        echo "
                            </div>
                            <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                                ";
        // line 105
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
        // line 113
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 114
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 116
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 120
        if (($context["options"] ?? null)) {
            // line 121
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 122
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "select")) {
                    // line 123
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 124);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                    echo "]\"
                                               value=\"";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 127), 0, [], "any", false, false, false, 127), "product_option_value_id", [], "any", false, false, false, 127);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 136
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 136);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 137);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 144
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 147
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "checkbox")) {
                    // line 148
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 148)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 149);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "\">
                                            ";
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 151));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 152
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 156
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                        echo "][]\"
                                                               value=\"";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 157);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 158
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 158);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 165
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 165) == "radio")) {
                    // line 166
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 166)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 167);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 168));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 169
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                        echo "]\"
                                                               value=\"";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 173);
                        echo "\"/>
                                                        ";
                        // line 174
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 174)) {
                            echo " <img
                                                                src=\"";
                            // line 175
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 175);
                            echo "\"
                                                                alt=\"";
                            // line 176
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 176);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 176);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 178
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 178);
                        echo "
                                                        ";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 180);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 180);
                            echo ")
                                                        ";
                        }
                        // line 181
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo " </div>
                                    </div>
                                ";
                }
                // line 186
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                        </div>
                    ";
        }
        // line 189
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 191
        if (($context["price"] ?? null)) {
            // line 192
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 193
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 195
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 196
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 197
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 199
            echo "                    ";
        }
        // line 200
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 204
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 206
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 207
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 208
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 209
        if ((($context["minimum"] ?? null) > 1)) {
            // line 210
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 212
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
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 247
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 247);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 252
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 252), "webp", [], "any", false, false, false, 252);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 253
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
            echo "\"
                                                 title=\"";
            // line 254
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 254);
            echo "\"
                                                 src=\"";
            // line 255
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 255), "default", [], "any", false, false, false, 255);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 258
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 258)) {
                // line 259
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 260);
                echo "</span>
                                            ";
            } else {
                // line 262
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 263);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 265);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 266);
                echo "</span>
                                            ";
            }
            // line 268
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 270
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 270);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 272
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 273
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 273);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 279
            echo "                                    ";
            // line 280
            echo "
                                    ";
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
            echo "                                    ";
            // line 303
            echo "                                    ";
            // line 304
            echo "                                    ";
            // line 305
            echo "                                    ";
            // line 306
            echo "                                    ";
            // line 307
            echo "                                    ";
            // line 308
            echo "                                    ";
            // line 309
            echo "                                    ";
            // line 310
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 318
        if (($context["reviews_to_shop"] ?? null)) {
            // line 319
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
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 333
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 335
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 335);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 337);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 339));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 340
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 341
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
                // line 347
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 350
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 350);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 353);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 355
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 355));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 356
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 357
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 357);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 359
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 359);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 362
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 365
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 370
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 371
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 376
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 377
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 377);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 379
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 379), "webp", [], "any", false, false, false, 379);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 380
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 380);
                echo "\"
                                         title=\"";
                // line 381
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 381);
                echo "\"
                                         src=\"";
                // line 382
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 382), "default", [], "any", false, false, false, 382);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 384
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 384);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 388
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 392
        echo "</div>
";
        // line 393
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
        return array (  903 => 393,  900 => 392,  894 => 388,  884 => 384,  879 => 382,  875 => 381,  871 => 380,  867 => 379,  862 => 377,  859 => 376,  855 => 375,  849 => 371,  846 => 370,  839 => 365,  831 => 362,  822 => 359,  817 => 357,  814 => 356,  810 => 355,  805 => 353,  799 => 350,  794 => 347,  782 => 341,  779 => 340,  775 => 339,  770 => 337,  765 => 335,  761 => 333,  757 => 332,  742 => 319,  740 => 318,  733 => 313,  725 => 310,  723 => 309,  721 => 308,  719 => 307,  717 => 306,  715 => 305,  713 => 304,  711 => 303,  709 => 302,  707 => 301,  705 => 300,  703 => 299,  701 => 298,  699 => 297,  697 => 296,  695 => 295,  693 => 294,  691 => 293,  689 => 292,  687 => 291,  685 => 290,  683 => 289,  681 => 288,  679 => 287,  677 => 286,  675 => 285,  673 => 284,  671 => 283,  669 => 282,  666 => 280,  664 => 279,  656 => 273,  652 => 272,  647 => 270,  643 => 268,  638 => 266,  634 => 265,  629 => 263,  626 => 262,  621 => 260,  618 => 259,  616 => 258,  610 => 255,  606 => 254,  602 => 253,  598 => 252,  589 => 247,  585 => 246,  549 => 212,  543 => 210,  541 => 209,  537 => 208,  533 => 207,  529 => 206,  523 => 204,  518 => 200,  515 => 199,  510 => 197,  506 => 196,  501 => 195,  495 => 193,  492 => 192,  490 => 191,  486 => 189,  482 => 187,  476 => 186,  471 => 183,  463 => 181,  456 => 180,  454 => 179,  449 => 178,  436 => 176,  432 => 175,  428 => 174,  424 => 173,  420 => 172,  415 => 169,  409 => 168,  405 => 167,  398 => 166,  395 => 165,  390 => 162,  380 => 158,  376 => 157,  372 => 156,  366 => 152,  362 => 151,  358 => 150,  354 => 149,  347 => 148,  344 => 147,  340 => 146,  337 => 145,  331 => 144,  325 => 140,  316 => 137,  311 => 136,  307 => 135,  296 => 127,  292 => 126,  287 => 124,  284 => 123,  281 => 122,  276 => 121,  274 => 120,  267 => 116,  262 => 114,  258 => 113,  247 => 105,  241 => 102,  235 => 99,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
