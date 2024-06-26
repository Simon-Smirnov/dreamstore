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
class __TwigTemplate_e2e11d915d09a6ff2a354fb22f560e38558ba244a4be876482824977ba8368bd extends \Twig\Template
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
                    echo "                                <div class=\"product-right__options-item\" data-option=\"checkbox\">
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
                    echo "\"
                                             data-option-product-id=\"";
                    // line 187
                    echo ($context["product_id"] ?? null);
                    echo "\" data-option=\"checkbox\">
                                            ";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 188));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 189
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                        echo "][]\"
                                                               value=\"";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 194);
                        echo "\"
                                                               data-option-input-product-id=\"";
                        // line 195
                        echo ($context["product_id"] ?? null);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 196);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 203
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 203) == "radio")) {
                    // line 204
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 204)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 205);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 206));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 207
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 210
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                        echo "]\"
                                                               value=\"";
                        // line 211
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 211);
                        echo "\"/>
                                                        ";
                        // line 212
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 212)) {
                            echo " <img
                                                                src=\"";
                            // line 213
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213);
                            echo "\"
                                                                alt=\"";
                            // line 214
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 214)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 214);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 214);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 216
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 216);
                        echo "
                                                        ";
                        // line 217
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 217)) {
                            // line 218
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 218);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218);
                            echo ")
                                                        ";
                        }
                        // line 219
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo " </div>
                                    </div>
                                ";
                }
                // line 224
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                        </div>
                    ";
        }
        // line 227
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 229
        if (($context["price"] ?? null)) {
            // line 230
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 231
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 233
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 234
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 235
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 237
            echo "                    ";
        }
        // line 238
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 242
        echo "                        ";
        // line 243
        echo "                        ";
        // line 244
        echo "                        <button type=\"button\" id=\"button-cart\" data-add-to-cart=\"true\"
                                data-product-id=\"";
        // line 245
        echo ($context["product_id"] ?? null);
        echo "\"
                                data-loading-text=\"";
        // line 246
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 247
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 248
        if ((($context["minimum"] ?? null) > 1)) {
            // line 249
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 251
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
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 286
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 286);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 291
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 291), "webp", [], "any", false, false, false, 291);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 292
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 292);
            echo "\"
                                                 title=\"";
            // line 293
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 293);
            echo "\"
                                                 src=\"";
            // line 294
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 294), "default", [], "any", false, false, false, 294);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 297
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 297)) {
                // line 298
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 299);
                echo "</span>
                                            ";
            } else {
                // line 301
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 302
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 302);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 304);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 305);
                echo "</span>
                                            ";
            }
            // line 307
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 309
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 309);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 311
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 312
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 312);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 318
            echo "                                    ";
            // line 319
            echo "
                                    ";
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
            echo "                                    ";
            // line 347
            echo "                                    ";
            // line 348
            echo "                                    ";
            // line 349
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 357
        if (($context["reviews_to_shop"] ?? null)) {
            // line 358
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
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 372
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 374
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 374);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 376
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 376);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 378
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 378));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 379
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 380
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
                // line 386
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 389
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 389);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 392
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 392);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 394
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 394));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 395
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 396
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 396);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 398
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 398);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 401
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 409
        echo "
    ";
        // line 410
        if (($context["recently_viewed_products"] ?? null)) {
            // line 411
            echo "        <section class=\"product-recentlyViewed sliderProductRecentlyViewed\">
            <div class=\"container\">
                <h2 class=\"section-title\">Ранее вы смотрели</h2>
                <div class=\"swiper\">
                    <ul class=\"product-recentlyViewed__list swiper-wrapper\" data-lightbox-parent>
                        ";
            // line 416
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recently_viewed_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recently_viewed_product"]) {
                // line 417
                echo "                            <li class=\"product-recentlyViewed__item\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
                // line 421
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "thumb", [], "any", false, false, false, 421), "webp", [], "any", false, false, false, 421);
                echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
                // line 422
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 422);
                echo "\"
                                                 title=\"";
                // line 423
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 423);
                echo "\"
                                                 src=\"";
                // line 424
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "thumb", [], "any", false, false, false, 424), "default", [], "any", false, false, false, 424);
                echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
                // line 427
                if ( !twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "special", [], "any", false, false, false, 427)) {
                    // line 428
                    echo "                                                <span
                                                        class=\"price-new\">";
                    // line 429
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "price", [], "any", false, false, false, 429);
                    echo "</span>
                                            ";
                } else {
                    // line 431
                    echo "                                                <span
                                                        class=\"price-new\">";
                    // line 432
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "special", [], "any", false, false, false, 432);
                    echo "</span>
                                                <span
                                                        class=\"price-old\">";
                    // line 434
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "price", [], "any", false, false, false, 434);
                    echo "</span>
                                                <span class=\"price-percent\">";
                    // line 435
                    echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "percent", [], "any", false, false, false, 435);
                    echo "</span>
                                            ";
                }
                // line 437
                echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
                // line 439
                echo twig_get_attribute($this->env, $this->source, $context["recently_viewed_product"], "name", [], "any", false, false, false, 439);
                echo "</h4>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recently_viewed_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 443
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 448
        echo "
    ";
        // line 449
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 450
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 455
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 456
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 456);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 458
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 458), "webp", [], "any", false, false, false, 458);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 459
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 459);
                echo "\"
                                         title=\"";
                // line 460
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 460);
                echo "\"
                                         src=\"";
                // line 461
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 461), "default", [], "any", false, false, false, 461);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 463
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 463);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 471
        echo "</div>
";
        // line 472
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
        return array (  1083 => 472,  1080 => 471,  1074 => 467,  1064 => 463,  1059 => 461,  1055 => 460,  1051 => 459,  1047 => 458,  1042 => 456,  1039 => 455,  1035 => 454,  1029 => 450,  1027 => 449,  1024 => 448,  1017 => 443,  1007 => 439,  1003 => 437,  998 => 435,  994 => 434,  989 => 432,  986 => 431,  981 => 429,  978 => 428,  976 => 427,  970 => 424,  966 => 423,  962 => 422,  958 => 421,  952 => 417,  948 => 416,  941 => 411,  939 => 410,  936 => 409,  929 => 404,  921 => 401,  912 => 398,  907 => 396,  904 => 395,  900 => 394,  895 => 392,  889 => 389,  884 => 386,  872 => 380,  869 => 379,  865 => 378,  860 => 376,  855 => 374,  851 => 372,  847 => 371,  832 => 358,  830 => 357,  823 => 352,  815 => 349,  813 => 348,  811 => 347,  809 => 346,  807 => 345,  805 => 344,  803 => 343,  801 => 342,  799 => 341,  797 => 340,  795 => 339,  793 => 338,  791 => 337,  789 => 336,  787 => 335,  785 => 334,  783 => 333,  781 => 332,  779 => 331,  777 => 330,  775 => 329,  773 => 328,  771 => 327,  769 => 326,  767 => 325,  765 => 324,  763 => 323,  761 => 322,  759 => 321,  756 => 319,  754 => 318,  746 => 312,  742 => 311,  737 => 309,  733 => 307,  728 => 305,  724 => 304,  719 => 302,  716 => 301,  711 => 299,  708 => 298,  706 => 297,  700 => 294,  696 => 293,  692 => 292,  688 => 291,  679 => 286,  675 => 285,  639 => 251,  633 => 249,  631 => 248,  627 => 247,  623 => 246,  619 => 245,  616 => 244,  614 => 243,  612 => 242,  607 => 238,  604 => 237,  599 => 235,  595 => 234,  590 => 233,  584 => 231,  581 => 230,  579 => 229,  575 => 227,  571 => 225,  565 => 224,  560 => 221,  552 => 219,  545 => 218,  543 => 217,  538 => 216,  525 => 214,  521 => 213,  517 => 212,  513 => 211,  509 => 210,  504 => 207,  498 => 206,  494 => 205,  487 => 204,  484 => 203,  479 => 200,  469 => 196,  465 => 195,  461 => 194,  457 => 193,  451 => 189,  447 => 188,  443 => 187,  439 => 186,  435 => 185,  428 => 184,  425 => 183,  421 => 182,  418 => 181,  412 => 180,  406 => 176,  397 => 173,  392 => 172,  388 => 171,  377 => 163,  373 => 162,  368 => 160,  365 => 159,  362 => 158,  357 => 157,  355 => 156,  348 => 152,  343 => 150,  339 => 149,  329 => 142,  323 => 139,  317 => 136,  305 => 126,  301 => 124,  298 => 123,  287 => 118,  281 => 117,  276 => 115,  272 => 113,  267 => 112,  264 => 111,  256 => 106,  250 => 105,  245 => 103,  241 => 101,  239 => 100,  236 => 99,  234 => 98,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
