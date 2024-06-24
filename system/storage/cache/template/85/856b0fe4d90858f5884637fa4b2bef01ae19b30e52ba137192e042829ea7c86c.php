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
class __TwigTemplate_a42a6d8caeca162feb3871a0dc122e506fc45d64136a92fe11a7a78a3efa5072 extends \Twig\Template
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
                                <div>
                                    <li class=\"slider__arrow--prev\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                        </svg>
                                    </li>
                                </div>
                                <div>
                                    <li class=\"slider__arrow--next\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                        </svg>
                                    </li>
                                </div>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=\"sliderProductThumbs\">
                    <div class=\"product-images swiper\">
                        ";
        // line 98
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 99
            echo "                            ";
            // line 100
            echo "                            ";
            // line 101
            echo "                            ";
            // line 102
            echo "                            ";
            // line 103
            echo "                            ";
            // line 104
            echo "                            ";
            // line 105
            echo "                            ";
            // line 106
            echo "                            ";
            // line 107
            echo "                            ";
            // line 108
            echo "                            ";
            // line 109
            echo "                            ";
            // line 110
            echo "                            <ul class=\"product-images__list swiper-wrapper\" data-lightbox-parent>
                                ";
            // line 112
            echo "                                ";
            // line 113
            echo "                                ";
            // line 114
            echo "                                ";
            // line 115
            echo "                                ";
            // line 116
            echo "                                ";
            // line 117
            echo "                                ";
            // line 118
            echo "                                ";
            // line 119
            echo "                                ";
            // line 120
            echo "                                ";
            // line 121
            echo "                                ";
            // line 122
            echo "                                ";
            // line 123
            echo "                                ";
            // line 124
            echo "                                ";
            // line 125
            echo "                                ";
            // line 126
            echo "                                ";
            // line 127
            echo "                                ";
            if (($context["thumb"] ?? null)) {
                // line 128
                echo "                                    <li class=\"product-images__item\">
                                        <a class=\"product-images__link\" href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "popup", [], "any", false, false, false, 129);
                echo "\"
                                           title=\"";
                // line 130
                echo ($context["heading_title"] ?? null);
                echo "\">
                                            <picture>
                                                <source srcset=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 132);
                echo "\">
                                                <img class=\"product-images__image\"
                                                     src=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 134);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                     title=\"";
                // line 135
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                     loading=\"lazy\"/>
                                            </picture>
                                        </a>
                                    </li>
                                ";
            }
            // line 141
            echo "                                ";
            if (($context["images"] ?? null)) {
                // line 142
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 143
                    echo "                                        <li class=\"product-images__item\">
                                            <picture>
                                                <source srcset=\"";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 145);
                    echo "\">
                                                <img class=\"product-images__image\"
                                                     src=\"";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 147);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                     title=\"";
                    // line 148
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                     loading=\"lazy\"/>
                                            </picture>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                ";
            }
            // line 154
            echo "                            </ul>
                        ";
        }
        // line 156
        echo "                    </div>
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
        // line 166
        echo ($context["description"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                            ";
        // line 169
        echo ($context["care"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                            ";
        // line 172
        echo ($context["questions"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 179
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 180
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 182
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 186
        if (($context["options"] ?? null)) {
            // line 187
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 188
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 188) == "select")) {
                    // line 189
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 190);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "]\"
                                               value=\"";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193), 0, [], "any", false, false, false, 193), "product_option_value_id", [], "any", false, false, false, 193);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 201
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 201));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 202
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 202);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 203);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 210
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 213
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 213) == "checkbox")) {
                    // line 214
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 214)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\">
                                            ";
                    // line 217
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 217));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 218
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 222
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                        echo "][]\"
                                                               value=\"";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 223);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 224);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 231
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 231) == "radio")) {
                    // line 232
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 232)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 233);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 234));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 235
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 238
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                        echo "]\"
                                                               value=\"";
                        // line 239
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 239);
                        echo "\"/>
                                                        ";
                        // line 240
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 240)) {
                            echo " <img
                                                                src=\"";
                            // line 241
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 241);
                            echo "\"
                                                                alt=\"";
                            // line 242
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 242);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 242)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 242);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 242);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 244
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 244);
                        echo "
                                                        ";
                        // line 245
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245)) {
                            // line 246
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 246);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 246);
                            echo ")
                                                        ";
                        }
                        // line 247
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 249
                    echo " </div>
                                    </div>
                                ";
                }
                // line 252
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                        </div>
                    ";
        }
        // line 255
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 257
        if (($context["price"] ?? null)) {
            // line 258
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 259
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 261
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 262
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 263
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 265
            echo "                    ";
        }
        // line 266
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 270
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 272
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 273
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 274
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 275
        if ((($context["minimum"] ?? null) > 1)) {
            // line 276
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 278
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
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 313
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 313);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 318
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 318), "webp", [], "any", false, false, false, 318);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 319
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 319);
            echo "\"
                                                 title=\"";
            // line 320
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 320);
            echo "\"
                                                 src=\"";
            // line 321
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 321), "default", [], "any", false, false, false, 321);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 324
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 324)) {
                // line 325
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 326
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 326);
                echo "</span>
                                            ";
            } else {
                // line 328
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 329);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 331);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 332);
                echo "</span>
                                            ";
            }
            // line 334
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 336
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 336);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 338
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 339
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 339);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 345
            echo "                                    ";
            // line 346
            echo "
                                    ";
            // line 348
            echo "                                    ";
            // line 349
            echo "                                    ";
            // line 350
            echo "                                    ";
            // line 351
            echo "                                    ";
            // line 352
            echo "                                    ";
            // line 353
            echo "                                    ";
            // line 354
            echo "                                    ";
            // line 355
            echo "                                    ";
            // line 356
            echo "                                    ";
            // line 357
            echo "                                    ";
            // line 358
            echo "                                    ";
            // line 359
            echo "                                    ";
            // line 360
            echo "                                    ";
            // line 361
            echo "                                    ";
            // line 362
            echo "                                    ";
            // line 363
            echo "                                    ";
            // line 364
            echo "                                    ";
            // line 365
            echo "                                    ";
            // line 366
            echo "                                    ";
            // line 367
            echo "                                    ";
            // line 368
            echo "                                    ";
            // line 369
            echo "                                    ";
            // line 370
            echo "                                    ";
            // line 371
            echo "                                    ";
            // line 372
            echo "                                    ";
            // line 373
            echo "                                    ";
            // line 374
            echo "                                    ";
            // line 375
            echo "                                    ";
            // line 376
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 384
        if (($context["reviews_to_shop"] ?? null)) {
            // line 385
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
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 399
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 401
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 401);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 403
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 403);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 405
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 405));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 406
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 407
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
                // line 413
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 416
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 416);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 419
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 419);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 421
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 421));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 422
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 423
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 423);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 425
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 425);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 436
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 437
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 442
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 443
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 443);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 445
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 445), "webp", [], "any", false, false, false, 445);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 446
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 446);
                echo "\"
                                         title=\"";
                // line 447
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 447);
                echo "\"
                                         src=\"";
                // line 448
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 448), "default", [], "any", false, false, false, 448);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 450
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 450);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 458
        echo "</div>
";
        // line 459
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
        return array (  1046 => 459,  1043 => 458,  1037 => 454,  1027 => 450,  1022 => 448,  1018 => 447,  1014 => 446,  1010 => 445,  1005 => 443,  1002 => 442,  998 => 441,  992 => 437,  989 => 436,  982 => 431,  974 => 428,  965 => 425,  960 => 423,  957 => 422,  953 => 421,  948 => 419,  942 => 416,  937 => 413,  925 => 407,  922 => 406,  918 => 405,  913 => 403,  908 => 401,  904 => 399,  900 => 398,  885 => 385,  883 => 384,  876 => 379,  868 => 376,  866 => 375,  864 => 374,  862 => 373,  860 => 372,  858 => 371,  856 => 370,  854 => 369,  852 => 368,  850 => 367,  848 => 366,  846 => 365,  844 => 364,  842 => 363,  840 => 362,  838 => 361,  836 => 360,  834 => 359,  832 => 358,  830 => 357,  828 => 356,  826 => 355,  824 => 354,  822 => 353,  820 => 352,  818 => 351,  816 => 350,  814 => 349,  812 => 348,  809 => 346,  807 => 345,  799 => 339,  795 => 338,  790 => 336,  786 => 334,  781 => 332,  777 => 331,  772 => 329,  769 => 328,  764 => 326,  761 => 325,  759 => 324,  753 => 321,  749 => 320,  745 => 319,  741 => 318,  732 => 313,  728 => 312,  692 => 278,  686 => 276,  684 => 275,  680 => 274,  676 => 273,  672 => 272,  666 => 270,  661 => 266,  658 => 265,  653 => 263,  649 => 262,  644 => 261,  638 => 259,  635 => 258,  633 => 257,  629 => 255,  625 => 253,  619 => 252,  614 => 249,  606 => 247,  599 => 246,  597 => 245,  592 => 244,  579 => 242,  575 => 241,  571 => 240,  567 => 239,  563 => 238,  558 => 235,  552 => 234,  548 => 233,  541 => 232,  538 => 231,  533 => 228,  523 => 224,  519 => 223,  515 => 222,  509 => 218,  505 => 217,  501 => 216,  497 => 215,  490 => 214,  487 => 213,  483 => 212,  480 => 211,  474 => 210,  468 => 206,  459 => 203,  454 => 202,  450 => 201,  439 => 193,  435 => 192,  430 => 190,  427 => 189,  424 => 188,  419 => 187,  417 => 186,  410 => 182,  405 => 180,  401 => 179,  391 => 172,  385 => 169,  379 => 166,  367 => 156,  363 => 154,  360 => 153,  349 => 148,  343 => 147,  338 => 145,  334 => 143,  329 => 142,  326 => 141,  317 => 135,  311 => 134,  306 => 132,  301 => 130,  297 => 129,  294 => 128,  291 => 127,  289 => 126,  287 => 125,  285 => 124,  283 => 123,  281 => 122,  279 => 121,  277 => 120,  275 => 119,  273 => 118,  271 => 117,  269 => 116,  267 => 115,  265 => 114,  263 => 113,  261 => 112,  258 => 110,  256 => 109,  254 => 108,  252 => 107,  250 => 106,  248 => 105,  246 => 104,  244 => 103,  242 => 102,  240 => 101,  238 => 100,  236 => 99,  234 => 98,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
