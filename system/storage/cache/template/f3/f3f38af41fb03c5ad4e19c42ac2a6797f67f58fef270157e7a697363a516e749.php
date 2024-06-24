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
class __TwigTemplate_dfc238f3d2dd02901e2e4f37d29602509728de51f5f8b7f15cd8d8441fd01d33 extends \Twig\Template
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
                                            <a class=\"product-images__link\" href=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 144);
                    echo "\"
                                               title=\"";
                    // line 145
                    echo ($context["heading_title"] ?? null);
                    echo "\">
                                                <picture>
                                                    <source srcset=\"";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 147);
                    echo "\">
                                                    <img class=\"product-images__image\"
                                                         src=\"";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 149);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                         title=\"";
                    // line 150
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
                // line 156
                echo "                                ";
            }
            // line 157
            echo "                            </ul>
                        ";
        }
        // line 159
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
        // line 169
        echo ($context["description"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                            ";
        // line 172
        echo ($context["care"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                            ";
        // line 175
        echo ($context["questions"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 182
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 183
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 185
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 189
        if (($context["options"] ?? null)) {
            // line 190
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 191
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "select")) {
                    // line 192
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "]\"
                                               value=\"";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 196), 0, [], "any", false, false, false, 196), "product_option_value_id", [], "any", false, false, false, 196);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 204));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 205
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 205);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 206);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 213
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 216
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 216) == "checkbox")) {
                    // line 217
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 217)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 218);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\">
                                            ";
                    // line 220
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 220));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 221
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 225
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                        echo "][]\"
                                                               value=\"";
                        // line 226
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 226);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 227);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 231
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 234
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "radio")) {
                    // line 235
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 237));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 238
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                        echo "]\"
                                                               value=\"";
                        // line 242
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 242);
                        echo "\"/>
                                                        ";
                        // line 243
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 243)) {
                            echo " <img
                                                                src=\"";
                            // line 244
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 244);
                            echo "\"
                                                                alt=\"";
                            // line 245
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 245);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 245);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 247
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 247);
                        echo "
                                                        ";
                        // line 248
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248)) {
                            // line 249
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 249);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 249);
                            echo ")
                                                        ";
                        }
                        // line 250
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 252
                    echo " </div>
                                    </div>
                                ";
                }
                // line 255
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                        </div>
                    ";
        }
        // line 258
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 260
        if (($context["price"] ?? null)) {
            // line 261
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 262
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 264
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 265
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 266
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 268
            echo "                    ";
        }
        // line 269
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 273
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 275
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 276
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 277
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 278
        if ((($context["minimum"] ?? null) > 1)) {
            // line 279
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 281
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
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 316
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 316);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 321
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 321), "webp", [], "any", false, false, false, 321);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 322
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 322);
            echo "\"
                                                 title=\"";
            // line 323
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 323);
            echo "\"
                                                 src=\"";
            // line 324
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 324), "default", [], "any", false, false, false, 324);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 327
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 327)) {
                // line 328
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 329);
                echo "</span>
                                            ";
            } else {
                // line 331
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 332);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 334
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 334);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 335
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 335);
                echo "</span>
                                            ";
            }
            // line 337
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 339
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 339);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 341
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 342
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 342);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 348
            echo "                                    ";
            // line 349
            echo "
                                    ";
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
            echo "                                    ";
            // line 377
            echo "                                    ";
            // line 378
            echo "                                    ";
            // line 379
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 387
        if (($context["reviews_to_shop"] ?? null)) {
            // line 388
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
            // line 401
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 402
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 404
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 404);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 406
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 406);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 408
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 408));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 409
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 410
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
                // line 416
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 419
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 419);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 422
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 422);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 424
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 424));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 425
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 426
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 426);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 428
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 428);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 431
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 439
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 440
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 444
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 445
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 446
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 446);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 448
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 448), "webp", [], "any", false, false, false, 448);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 449
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 449);
                echo "\"
                                         title=\"";
                // line 450
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 450);
                echo "\"
                                         src=\"";
                // line 451
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 451), "default", [], "any", false, false, false, 451);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 453
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 453);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 461
        echo "</div>
";
        // line 462
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
        return array (  1055 => 462,  1052 => 461,  1046 => 457,  1036 => 453,  1031 => 451,  1027 => 450,  1023 => 449,  1019 => 448,  1014 => 446,  1011 => 445,  1007 => 444,  1001 => 440,  998 => 439,  991 => 434,  983 => 431,  974 => 428,  969 => 426,  966 => 425,  962 => 424,  957 => 422,  951 => 419,  946 => 416,  934 => 410,  931 => 409,  927 => 408,  922 => 406,  917 => 404,  913 => 402,  909 => 401,  894 => 388,  892 => 387,  885 => 382,  877 => 379,  875 => 378,  873 => 377,  871 => 376,  869 => 375,  867 => 374,  865 => 373,  863 => 372,  861 => 371,  859 => 370,  857 => 369,  855 => 368,  853 => 367,  851 => 366,  849 => 365,  847 => 364,  845 => 363,  843 => 362,  841 => 361,  839 => 360,  837 => 359,  835 => 358,  833 => 357,  831 => 356,  829 => 355,  827 => 354,  825 => 353,  823 => 352,  821 => 351,  818 => 349,  816 => 348,  808 => 342,  804 => 341,  799 => 339,  795 => 337,  790 => 335,  786 => 334,  781 => 332,  778 => 331,  773 => 329,  770 => 328,  768 => 327,  762 => 324,  758 => 323,  754 => 322,  750 => 321,  741 => 316,  737 => 315,  701 => 281,  695 => 279,  693 => 278,  689 => 277,  685 => 276,  681 => 275,  675 => 273,  670 => 269,  667 => 268,  662 => 266,  658 => 265,  653 => 264,  647 => 262,  644 => 261,  642 => 260,  638 => 258,  634 => 256,  628 => 255,  623 => 252,  615 => 250,  608 => 249,  606 => 248,  601 => 247,  588 => 245,  584 => 244,  580 => 243,  576 => 242,  572 => 241,  567 => 238,  561 => 237,  557 => 236,  550 => 235,  547 => 234,  542 => 231,  532 => 227,  528 => 226,  524 => 225,  518 => 221,  514 => 220,  510 => 219,  506 => 218,  499 => 217,  496 => 216,  492 => 215,  489 => 214,  483 => 213,  477 => 209,  468 => 206,  463 => 205,  459 => 204,  448 => 196,  444 => 195,  439 => 193,  436 => 192,  433 => 191,  428 => 190,  426 => 189,  419 => 185,  414 => 183,  410 => 182,  400 => 175,  394 => 172,  388 => 169,  376 => 159,  372 => 157,  369 => 156,  357 => 150,  351 => 149,  346 => 147,  341 => 145,  337 => 144,  334 => 143,  329 => 142,  326 => 141,  317 => 135,  311 => 134,  306 => 132,  301 => 130,  297 => 129,  294 => 128,  291 => 127,  289 => 126,  287 => 125,  285 => 124,  283 => 123,  281 => 122,  279 => 121,  277 => 120,  275 => 119,  273 => 118,  271 => 117,  269 => 116,  267 => 115,  265 => 114,  263 => 113,  261 => 112,  258 => 110,  256 => 109,  254 => 108,  252 => 107,  250 => 106,  248 => 105,  246 => 104,  244 => 103,  242 => 102,  240 => 101,  238 => 100,  236 => 99,  234 => 98,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
