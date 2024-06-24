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
class __TwigTemplate_e540284ba055e23041b40c45e2f3e721c1e14d8f3ea71d60bac00691622e4ebe extends \Twig\Template
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
            echo "                            <ul class=\"product-images__list swiper-wrapper\" data-lightbox-parent>
                                ";
            // line 100
            if (($context["thumb"] ?? null)) {
                // line 101
                echo "                                    <li class=\"product-images__item\">
                                        <picture>
                                            <source srcset=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 103);
                echo "\">
                                            <img class=\"product-images__image\"
                                                 src=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 105);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                 title=\"";
                // line 106
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                 loading=\"lazy\"/>
                                        </picture>
                                    </li>
                                ";
            }
            // line 111
            echo "                                ";
            if (($context["images"] ?? null)) {
                // line 112
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 113
                    echo "                                        <li class=\"product-images__item\">
                                            <picture>
                                                <source srcset=\"";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 115);
                    echo "\">
                                                <img class=\"product-images__image\"
                                                     src=\"";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 117);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                     title=\"";
                    // line 118
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
                // line 123
                echo "                                ";
            }
            // line 124
            echo "                            </ul>
                        ";
        }
        // line 126
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
        // line 136
        echo ($context["description"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                            ";
        // line 139
        echo ($context["care"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                            ";
        // line 142
        echo ($context["questions"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 149
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 150
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 152
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 156
        if (($context["options"] ?? null)) {
            // line 157
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 158
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "select")) {
                    // line 159
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "]\"
                                               value=\"";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 163), 0, [], "any", false, false, false, 163), "product_option_value_id", [], "any", false, false, false, 163);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 171));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 172
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 172);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 173);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 180
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 183
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 183) == "checkbox")) {
                    // line 184
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 184)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\">
                                            ";
                    // line 187
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 187));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 188
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                        echo "][]\"
                                                               value=\"";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 193);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 194);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 201
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "radio")) {
                    // line 202
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 204));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 205
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                        echo "]\"
                                                               value=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 209);
                        echo "\"/>
                                                        ";
                        // line 210
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 210)) {
                            echo " <img
                                                                src=\"";
                            // line 211
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 211);
                            echo "\"
                                                                alt=\"";
                            // line 212
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 212);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 212)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 212);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 212);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 214
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214);
                        echo "
                                                        ";
                        // line 215
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215)) {
                            // line 216
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 216);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216);
                            echo ")
                                                        ";
                        }
                        // line 217
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo " </div>
                                    </div>
                                ";
                }
                // line 222
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                        </div>
                    ";
        }
        // line 225
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 227
        if (($context["price"] ?? null)) {
            // line 228
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 229
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 231
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 232
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 233
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 235
            echo "                    ";
        }
        // line 236
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 240
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 242
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 243
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 244
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 245
        if ((($context["minimum"] ?? null) > 1)) {
            // line 246
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 248
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
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 283
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 283);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 288
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 288), "webp", [], "any", false, false, false, 288);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 289
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 289);
            echo "\"
                                                 title=\"";
            // line 290
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 290);
            echo "\"
                                                 src=\"";
            // line 291
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 291), "default", [], "any", false, false, false, 291);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 294
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 294)) {
                // line 295
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 296
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 296);
                echo "</span>
                                            ";
            } else {
                // line 298
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 299);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 301);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 302
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 302);
                echo "</span>
                                            ";
            }
            // line 304
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 306
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 306);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 308
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 309
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 309);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 315
            echo "                                    ";
            // line 316
            echo "
                                    ";
            // line 318
            echo "                                    ";
            // line 319
            echo "                                    ";
            // line 320
            echo "                                    ";
            // line 321
            echo "                                    ";
            // line 322
            echo "                                    ";
            // line 323
            echo "                                    ";
            // line 324
            echo "                                    ";
            // line 325
            echo "                                    ";
            // line 326
            echo "                                    ";
            // line 327
            echo "                                    ";
            // line 328
            echo "                                    ";
            // line 329
            echo "                                    ";
            // line 330
            echo "                                    ";
            // line 331
            echo "                                    ";
            // line 332
            echo "                                    ";
            // line 333
            echo "                                    ";
            // line 334
            echo "                                    ";
            // line 335
            echo "                                    ";
            // line 336
            echo "                                    ";
            // line 337
            echo "                                    ";
            // line 338
            echo "                                    ";
            // line 339
            echo "                                    ";
            // line 340
            echo "                                    ";
            // line 341
            echo "                                    ";
            // line 342
            echo "                                    ";
            // line 343
            echo "                                    ";
            // line 344
            echo "                                    ";
            // line 345
            echo "                                    ";
            // line 346
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 354
        if (($context["reviews_to_shop"] ?? null)) {
            // line 355
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
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 369
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 371
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 371);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 373
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 373);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 375
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 375));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 376
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 377
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
                // line 383
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 386
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 386);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 389
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 389);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 391
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 391));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 392
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 393
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 393);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 395);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 406
        echo "
    ";
        // line 407
        if (($context["recently_viewed_products"] ?? null)) {
            // line 408
            echo "        <section class=\"product-recentlyViewed sliderProductRecentlyViewed\">
            <div class=\"container\">
                <h2 class=\"section-title\">Ранее вы смотрели</h2>
                <div class=\"product-recentlyViewed swiper\">
                    <ul class=\"product-recentlyViewed__list swiper-wrapper\" data-lightbox-parent>
                        ";
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recently_viewed_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recently_viewed_product"]) {
                // line 414
                echo "                            <li class=\"product-recentlyViewed__item\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
                // line 418
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "thumb", [], "any", false, false, false, 418), "webp", [], "any", false, false, false, 418);
                echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
                // line 419
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 419);
                echo "\"
                                                 title=\"";
                // line 420
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 420);
                echo "\"
                                                 src=\"";
                // line 421
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "thumb", [], "any", false, false, false, 421), "default", [], "any", false, false, false, 421);
                echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
                // line 424
                if ( !twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "special", [], "any", false, false, false, 424)) {
                    // line 425
                    echo "                                                <span
                                                        class=\"price-new\">";
                    // line 426
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "price", [], "any", false, false, false, 426);
                    echo "</span>
                                            ";
                } else {
                    // line 428
                    echo "                                                <span
                                                        class=\"price-new\">";
                    // line 429
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "special", [], "any", false, false, false, 429);
                    echo "</span>
                                                <span
                                                        class=\"price-old\">";
                    // line 431
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "price", [], "any", false, false, false, 431);
                    echo "</span>
                                                <span class=\"price-percent\">";
                    // line 432
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "percent", [], "any", false, false, false, 432);
                    echo "</span>
                                            ";
                }
                // line 434
                echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
                // line 436
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 436);
                echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
                // line 438
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                            onclick=\"wishlist.add('";
                // line 439
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "product_id", [], "any", false, false, false, 439);
                echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recently_viewed_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 452
        echo "
    ";
        // line 453
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 454
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 458
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 459
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 460
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 460);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 462
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 462), "webp", [], "any", false, false, false, 462);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 463
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 463);
                echo "\"
                                         title=\"";
                // line 464
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 464);
                echo "\"
                                         src=\"";
                // line 465
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 465), "default", [], "any", false, false, false, 465);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 467
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 467);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 471
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 475
        echo "</div>
";
        // line 476
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
        return array (  1087 => 476,  1084 => 475,  1078 => 471,  1068 => 467,  1063 => 465,  1059 => 464,  1055 => 463,  1051 => 462,  1046 => 460,  1043 => 459,  1039 => 458,  1033 => 454,  1031 => 453,  1028 => 452,  1021 => 447,  1007 => 439,  1003 => 438,  998 => 436,  994 => 434,  989 => 432,  985 => 431,  980 => 429,  977 => 428,  972 => 426,  969 => 425,  967 => 424,  961 => 421,  957 => 420,  953 => 419,  949 => 418,  943 => 414,  939 => 413,  932 => 408,  930 => 407,  927 => 406,  920 => 401,  912 => 398,  903 => 395,  898 => 393,  895 => 392,  891 => 391,  886 => 389,  880 => 386,  875 => 383,  863 => 377,  860 => 376,  856 => 375,  851 => 373,  846 => 371,  842 => 369,  838 => 368,  823 => 355,  821 => 354,  814 => 349,  806 => 346,  804 => 345,  802 => 344,  800 => 343,  798 => 342,  796 => 341,  794 => 340,  792 => 339,  790 => 338,  788 => 337,  786 => 336,  784 => 335,  782 => 334,  780 => 333,  778 => 332,  776 => 331,  774 => 330,  772 => 329,  770 => 328,  768 => 327,  766 => 326,  764 => 325,  762 => 324,  760 => 323,  758 => 322,  756 => 321,  754 => 320,  752 => 319,  750 => 318,  747 => 316,  745 => 315,  737 => 309,  733 => 308,  728 => 306,  724 => 304,  719 => 302,  715 => 301,  710 => 299,  707 => 298,  702 => 296,  699 => 295,  697 => 294,  691 => 291,  687 => 290,  683 => 289,  679 => 288,  670 => 283,  666 => 282,  630 => 248,  624 => 246,  622 => 245,  618 => 244,  614 => 243,  610 => 242,  604 => 240,  599 => 236,  596 => 235,  591 => 233,  587 => 232,  582 => 231,  576 => 229,  573 => 228,  571 => 227,  567 => 225,  563 => 223,  557 => 222,  552 => 219,  544 => 217,  537 => 216,  535 => 215,  530 => 214,  517 => 212,  513 => 211,  509 => 210,  505 => 209,  501 => 208,  496 => 205,  490 => 204,  486 => 203,  479 => 202,  476 => 201,  471 => 198,  461 => 194,  457 => 193,  453 => 192,  447 => 188,  443 => 187,  439 => 186,  435 => 185,  428 => 184,  425 => 183,  421 => 182,  418 => 181,  412 => 180,  406 => 176,  397 => 173,  392 => 172,  388 => 171,  377 => 163,  373 => 162,  368 => 160,  365 => 159,  362 => 158,  357 => 157,  355 => 156,  348 => 152,  343 => 150,  339 => 149,  329 => 142,  323 => 139,  317 => 136,  305 => 126,  301 => 124,  298 => 123,  287 => 118,  281 => 117,  276 => 115,  272 => 113,  267 => 112,  264 => 111,  256 => 106,  250 => 105,  245 => 103,  241 => 101,  239 => 100,  236 => 99,  234 => 98,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
