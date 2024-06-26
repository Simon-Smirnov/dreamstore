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
class __TwigTemplate_d7fc822af5f63e81606410ad5547b6cf15a94b645e7006707c68404a61220a62 extends \Twig\Template
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
            <div class=\"product-right\" data-products-to-cart>
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
                    echo "                                <div class=\"product-right__options-item\" data-option-product-id=\"";
                    echo ($context["product_id"] ?? null);
                    echo "\"
                                     data-option=\"select\">
                                    <span class=\"product-right__options-title\">";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "]\"
                                               value=\"";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 164), 0, [], "any", false, false, false, 164), "product_option_value_id", [], "any", false, false, false, 164);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 172
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 172));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 173
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 173);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 174
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 174);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 181
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 184
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 184) == "checkbox")) {
                    // line 185
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 185)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 186);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "\"
                                             data-option-product-id=\"";
                    // line 188
                    echo ($context["product_id"] ?? null);
                    echo "\" data-option=\"checkbox\">
                                            ";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 189));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 190
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                        echo "][]\"
                                                               value=\"";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 195);
                        echo "\"
                                                               data-option-input-product-id=\"";
                        // line 196
                        echo ($context["product_id"] ?? null);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 204
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 204) == "radio")) {
                    // line 205
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 205)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 206);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 207));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 208
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 211
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                        echo "]\"
                                                               value=\"";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 212);
                        echo "\"/>
                                                        ";
                        // line 213
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213)) {
                            echo " <img
                                                                src=\"";
                            // line 214
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 214);
                            echo "\"
                                                                alt=\"";
                            // line 215
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 215);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 215);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 217
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 217);
                        echo "
                                                        ";
                        // line 218
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218)) {
                            // line 219
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 219);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219);
                            echo ")
                                                        ";
                        }
                        // line 220
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 222
                    echo " </div>
                                    </div>
                                ";
                }
                // line 225
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                        </div>
                    ";
        }
        // line 228
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 230
        if (($context["price"] ?? null)) {
            // line 231
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 232
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 234
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 235
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 236
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 238
            echo "                    ";
        }
        // line 239
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 243
        echo "                        ";
        // line 244
        echo "                        ";
        // line 245
        echo "                        <button type=\"button\" id=\"button-cart\" data-add-to-cart=\"true\"
                                data-product-id=\"";
        // line 246
        echo ($context["product_id"] ?? null);
        echo "\"
                                data-loading-text=\"";
        // line 247
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 248
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 249
        if ((($context["minimum"] ?? null) > 1)) {
            // line 250
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 252
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
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 287
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 287);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 292
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 292), "webp", [], "any", false, false, false, 292);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 293
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 293);
            echo "\"
                                                 title=\"";
            // line 294
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 294);
            echo "\"
                                                 src=\"";
            // line 295
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 295), "default", [], "any", false, false, false, 295);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 298
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 298)) {
                // line 299
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 300);
                echo "</span>
                                            ";
            } else {
                // line 302
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 303);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 305);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 306
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 306);
                echo "</span>
                                            ";
            }
            // line 308
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 310
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 310);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 312
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 313
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 313);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 319
            echo "                                    ";
            // line 320
            echo "
                                    ";
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
            echo "                                    ";
            // line 347
            echo "                                    ";
            // line 348
            echo "                                    ";
            // line 349
            echo "                                    ";
            // line 350
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 358
        if (($context["reviews_to_shop"] ?? null)) {
            // line 359
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
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 373
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 375);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 377
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 377);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 379
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 379));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 380
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 381
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
                // line 387
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 390
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 390);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 393
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 393);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 395
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 395));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 396
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 397
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 397);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 399
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 399);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 402
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 405
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 410
        echo "
    ";
        // line 411
        if (($context["recently_viewed_products"] ?? null)) {
            // line 412
            echo "        <section class=\"product-recentlyViewed sliderProductRecentlyViewed\">
            <div class=\"container\">
                <h2 class=\"section-title\">Ранее вы смотрели</h2>
                <div class=\"swiper\">
                    <ul class=\"product-recentlyViewed__list swiper-wrapper\" data-lightbox-parent>
                        ";
            // line 417
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recently_viewed_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recently_viewed_product"]) {
                // line 418
                echo "                            <li class=\"product-recentlyViewed__item\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
                // line 422
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "thumb", [], "any", false, false, false, 422), "webp", [], "any", false, false, false, 422);
                echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
                // line 423
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 423);
                echo "\"
                                                 title=\"";
                // line 424
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 424);
                echo "\"
                                                 src=\"";
                // line 425
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "thumb", [], "any", false, false, false, 425), "default", [], "any", false, false, false, 425);
                echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
                // line 428
                if ( !twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "special", [], "any", false, false, false, 428)) {
                    // line 429
                    echo "                                                <span
                                                        class=\"price-new\">";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "price", [], "any", false, false, false, 430);
                    echo "</span>
                                            ";
                } else {
                    // line 432
                    echo "                                                <span
                                                        class=\"price-new\">";
                    // line 433
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "special", [], "any", false, false, false, 433);
                    echo "</span>
                                                <span
                                                        class=\"price-old\">";
                    // line 435
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "price", [], "any", false, false, false, 435);
                    echo "</span>
                                                <span class=\"price-percent\">";
                    // line 436
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "percent", [], "any", false, false, false, 436);
                    echo "</span>
                                            ";
                }
                // line 438
                echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
                // line 440
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 440);
                echo "</h4>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recently_viewed_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 449
        echo "
    ";
        // line 450
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 451
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 456
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 457
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 457);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 459
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 459), "webp", [], "any", false, false, false, 459);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 460
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 460);
                echo "\"
                                         title=\"";
                // line 461
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 461);
                echo "\"
                                         src=\"";
                // line 462
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 462), "default", [], "any", false, false, false, 462);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 464
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 464);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 472
        echo "</div>
";
        // line 473
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
        return array (  1086 => 473,  1083 => 472,  1077 => 468,  1067 => 464,  1062 => 462,  1058 => 461,  1054 => 460,  1050 => 459,  1045 => 457,  1042 => 456,  1038 => 455,  1032 => 451,  1030 => 450,  1027 => 449,  1020 => 444,  1010 => 440,  1006 => 438,  1001 => 436,  997 => 435,  992 => 433,  989 => 432,  984 => 430,  981 => 429,  979 => 428,  973 => 425,  969 => 424,  965 => 423,  961 => 422,  955 => 418,  951 => 417,  944 => 412,  942 => 411,  939 => 410,  932 => 405,  924 => 402,  915 => 399,  910 => 397,  907 => 396,  903 => 395,  898 => 393,  892 => 390,  887 => 387,  875 => 381,  872 => 380,  868 => 379,  863 => 377,  858 => 375,  854 => 373,  850 => 372,  835 => 359,  833 => 358,  826 => 353,  818 => 350,  816 => 349,  814 => 348,  812 => 347,  810 => 346,  808 => 345,  806 => 344,  804 => 343,  802 => 342,  800 => 341,  798 => 340,  796 => 339,  794 => 338,  792 => 337,  790 => 336,  788 => 335,  786 => 334,  784 => 333,  782 => 332,  780 => 331,  778 => 330,  776 => 329,  774 => 328,  772 => 327,  770 => 326,  768 => 325,  766 => 324,  764 => 323,  762 => 322,  759 => 320,  757 => 319,  749 => 313,  745 => 312,  740 => 310,  736 => 308,  731 => 306,  727 => 305,  722 => 303,  719 => 302,  714 => 300,  711 => 299,  709 => 298,  703 => 295,  699 => 294,  695 => 293,  691 => 292,  682 => 287,  678 => 286,  642 => 252,  636 => 250,  634 => 249,  630 => 248,  626 => 247,  622 => 246,  619 => 245,  617 => 244,  615 => 243,  610 => 239,  607 => 238,  602 => 236,  598 => 235,  593 => 234,  587 => 232,  584 => 231,  582 => 230,  578 => 228,  574 => 226,  568 => 225,  563 => 222,  555 => 220,  548 => 219,  546 => 218,  541 => 217,  528 => 215,  524 => 214,  520 => 213,  516 => 212,  512 => 211,  507 => 208,  501 => 207,  497 => 206,  490 => 205,  487 => 204,  482 => 201,  472 => 197,  468 => 196,  464 => 195,  460 => 194,  454 => 190,  450 => 189,  446 => 188,  442 => 187,  438 => 186,  431 => 185,  428 => 184,  424 => 183,  421 => 182,  415 => 181,  409 => 177,  400 => 174,  395 => 173,  391 => 172,  380 => 164,  376 => 163,  371 => 161,  365 => 159,  362 => 158,  357 => 157,  355 => 156,  348 => 152,  343 => 150,  339 => 149,  329 => 142,  323 => 139,  317 => 136,  305 => 126,  301 => 124,  298 => 123,  287 => 118,  281 => 117,  276 => 115,  272 => 113,  267 => 112,  264 => 111,  256 => 106,  250 => 105,  245 => 103,  241 => 101,  239 => 100,  236 => 99,  234 => 98,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
