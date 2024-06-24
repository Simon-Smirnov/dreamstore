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
class __TwigTemplate_350ee7b5005de503db6d0c4bc004043b5cdb36649dfea7c16bf5e8ed5f940533 extends \Twig\Template
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
                    <div class=\"product-tabs\" data-tabs-parent>
                        <div class=\"product-tabs__togglers\">
                            <button class=\"product-tabs__toggler\" data-tab-target=\"tab-1\">Описание</button>
                            <button class=\"product-tabs__toggler\" data-tab-target=\"tab-2\">Уход</button>
                            <button class=\"product-tabs__toggler\" data-tab-target=\"tab-3\">Частые вопросы</button>
                        </div>
                        <div class=\"product-tabs__content\">
                            <div class=\"product-tabs__box\" data-tab=\"tab-1\">
                                ";
        // line 103
        echo ($context["description"] ?? null);
        echo "
                            </div>
                            <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                                ";
        // line 106
        echo ($context["care"] ?? null);
        echo "
                            </div>
                            <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                                ";
        // line 109
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
        // line 117
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 118
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 120
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 124
        if (($context["options"] ?? null)) {
            // line 125
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 126
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 126) == "select")) {
                    // line 127
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 128);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                    echo "]\"
                                               value=\"";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 131), 0, [], "any", false, false, false, 131), "product_option_value_id", [], "any", false, false, false, 131);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 139));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 140
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 141);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 148
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 151
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "checkbox")) {
                    // line 152
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\">
                                            ";
                    // line 155
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 155));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 156
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                        echo "][]\"
                                                               value=\"";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 161);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 162);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 169
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "radio")) {
                    // line 170
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 172));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 173
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                        echo "]\"
                                                               value=\"";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 177);
                        echo "\"/>
                                                        ";
                        // line 178
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 178)) {
                            echo " <img
                                                                src=\"";
                            // line 179
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 179);
                            echo "\"
                                                                alt=\"";
                            // line 180
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 180);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 180)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 180);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 180);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 182
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                        echo "
                                                        ";
                        // line 183
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183)) {
                            // line 184
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184);
                            echo ")
                                                        ";
                        }
                        // line 185
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo " </div>
                                    </div>
                                ";
                }
                // line 190
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                        </div>
                    ";
        }
        // line 193
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 195
        if (($context["price"] ?? null)) {
            // line 196
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 197
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 199
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 200
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 201
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 203
            echo "                    ";
        }
        // line 204
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 208
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 210
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 211
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 212
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 213
        if ((($context["minimum"] ?? null) > 1)) {
            // line 214
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 216
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
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 251
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 251);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 256
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 256), "webp", [], "any", false, false, false, 256);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 257
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 257);
            echo "\"
                                                 title=\"";
            // line 258
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 258);
            echo "\"
                                                 src=\"";
            // line 259
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 259), "default", [], "any", false, false, false, 259);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 262
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 262)) {
                // line 263
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 264);
                echo "</span>
                                            ";
            } else {
                // line 266
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 267);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 269);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 270
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 270);
                echo "</span>
                                            ";
            }
            // line 272
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 274
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 274);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 276
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 277
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 277);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 283
            echo "                                    ";
            // line 284
            echo "
                                    ";
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
            echo "                                    ";
            // line 311
            echo "                                    ";
            // line 312
            echo "                                    ";
            // line 313
            echo "                                    ";
            // line 314
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 322
        if (($context["reviews_to_shop"] ?? null)) {
            // line 323
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
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 337
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 339
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 339);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 341
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 341);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 343
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 343));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 344
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 345
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
                // line 351
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 354
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 354);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 357
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 357);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 359
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 359));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 360
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 361);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 363
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 363);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 374
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 375
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 380
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 381
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 381);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 383
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 383), "webp", [], "any", false, false, false, 383);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 384
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 384);
                echo "\"
                                         title=\"";
                // line 385
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 385);
                echo "\"
                                         src=\"";
                // line 386
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 386), "default", [], "any", false, false, false, 386);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 388
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 388);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 396
        echo "</div>
";
        // line 397
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
        return array (  907 => 397,  904 => 396,  898 => 392,  888 => 388,  883 => 386,  879 => 385,  875 => 384,  871 => 383,  866 => 381,  863 => 380,  859 => 379,  853 => 375,  850 => 374,  843 => 369,  835 => 366,  826 => 363,  821 => 361,  818 => 360,  814 => 359,  809 => 357,  803 => 354,  798 => 351,  786 => 345,  783 => 344,  779 => 343,  774 => 341,  769 => 339,  765 => 337,  761 => 336,  746 => 323,  744 => 322,  737 => 317,  729 => 314,  727 => 313,  725 => 312,  723 => 311,  721 => 310,  719 => 309,  717 => 308,  715 => 307,  713 => 306,  711 => 305,  709 => 304,  707 => 303,  705 => 302,  703 => 301,  701 => 300,  699 => 299,  697 => 298,  695 => 297,  693 => 296,  691 => 295,  689 => 294,  687 => 293,  685 => 292,  683 => 291,  681 => 290,  679 => 289,  677 => 288,  675 => 287,  673 => 286,  670 => 284,  668 => 283,  660 => 277,  656 => 276,  651 => 274,  647 => 272,  642 => 270,  638 => 269,  633 => 267,  630 => 266,  625 => 264,  622 => 263,  620 => 262,  614 => 259,  610 => 258,  606 => 257,  602 => 256,  593 => 251,  589 => 250,  553 => 216,  547 => 214,  545 => 213,  541 => 212,  537 => 211,  533 => 210,  527 => 208,  522 => 204,  519 => 203,  514 => 201,  510 => 200,  505 => 199,  499 => 197,  496 => 196,  494 => 195,  490 => 193,  486 => 191,  480 => 190,  475 => 187,  467 => 185,  460 => 184,  458 => 183,  453 => 182,  440 => 180,  436 => 179,  432 => 178,  428 => 177,  424 => 176,  419 => 173,  413 => 172,  409 => 171,  402 => 170,  399 => 169,  394 => 166,  384 => 162,  380 => 161,  376 => 160,  370 => 156,  366 => 155,  362 => 154,  358 => 153,  351 => 152,  348 => 151,  344 => 150,  341 => 149,  335 => 148,  329 => 144,  320 => 141,  315 => 140,  311 => 139,  300 => 131,  296 => 130,  291 => 128,  288 => 127,  285 => 126,  280 => 125,  278 => 124,  271 => 120,  266 => 118,  262 => 117,  251 => 109,  245 => 106,  239 => 103,  210 => 76,  206 => 74,  203 => 73,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  171 => 61,  168 => 60,  163 => 59,  160 => 58,  151 => 52,  145 => 51,  140 => 49,  135 => 47,  131 => 46,  128 => 45,  125 => 44,  123 => 43,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  103 => 33,  101 => 32,  99 => 31,  97 => 30,  95 => 29,  92 => 27,  90 => 26,  88 => 25,  86 => 24,  84 => 23,  82 => 22,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
