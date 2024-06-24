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
class __TwigTemplate_3676e8c651ff942278e2ee4477fd4a0af12578ded45272bfc56ca209276550dd extends \Twig\Template
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
                                            <img class=\"product-images__image\"
                                                 src=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                 alt=\"";
                    // line 64
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                            ";
            }
            // line 69
            echo "                        </ul>
                    ";
        }
        // line 71
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
        // line 80
        echo ($context["description"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                            ";
        // line 83
        echo ($context["care"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                            ";
        // line 86
        echo ($context["questions"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 93
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 94
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 96
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 100
        if (($context["options"] ?? null)) {
            // line 101
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 102
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 102) == "select")) {
                    // line 103
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 104);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
                    echo "]\"
                                               value=\"";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 107), 0, [], "any", false, false, false, 107), "product_option_value_id", [], "any", false, false, false, 107);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 115));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 116
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 116);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 117
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 117);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 124
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 127
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 127) == "checkbox")) {
                    // line 128
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 128)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 129);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                    echo "\">
                                            ";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 131));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 132
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 136
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                        echo "][]\"
                                                               value=\"";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 137);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 138);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 145
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 145) == "radio")) {
                    // line 146
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 146)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 149
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                        echo "]\"
                                                               value=\"";
                        // line 153
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 153);
                        echo "\"/>
                                                        ";
                        // line 154
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 154)) {
                            echo " <img
                                                                src=\"";
                            // line 155
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 155);
                            echo "\"
                                                                alt=\"";
                            // line 156
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 156);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 156)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 156);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 156);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 158
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 158);
                        echo "
                                                        ";
                        // line 159
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 159)) {
                            // line 160
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 160);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 160);
                            echo ")
                                                        ";
                        }
                        // line 161
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo " </div>
                                    </div>
                                ";
                }
                // line 166
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                        </div>
                    ";
        }
        // line 169
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 171
        if (($context["price"] ?? null)) {
            // line 172
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 173
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 175
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 176
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 177
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 179
            echo "                    ";
        }
        // line 180
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 184
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 186
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 187
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 188
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 189
        if ((($context["minimum"] ?? null) > 1)) {
            // line 190
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 192
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
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 227
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 227);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 232
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 232), "webp", [], "any", false, false, false, 232);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 233
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 233);
            echo "\"
                                                 title=\"";
            // line 234
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 234);
            echo "\"
                                                 src=\"";
            // line 235
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 235), "default", [], "any", false, false, false, 235);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 238
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 238)) {
                // line 239
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 240);
                echo "</span>
                                            ";
            } else {
                // line 242
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 243);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 245);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 246);
                echo "</span>
                                            ";
            }
            // line 248
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 250
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 250);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 252
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 253
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 253);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 259
            echo "                                    ";
            // line 260
            echo "
                                    ";
            // line 262
            echo "                                    ";
            // line 263
            echo "                                    ";
            // line 264
            echo "                                    ";
            // line 265
            echo "                                    ";
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
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 298
        if (($context["reviews_to_shop"] ?? null)) {
            // line 299
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
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 313
                echo "                            <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                                <div class=\"reviews_site-list_item-title\">
                                    <div class=\"reviews_site-list_item-title_initial\">";
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 315);
                echo "</div>
                                    <div class=\"reviews_site-list_item-title_block\">
                                        <h4 class=\"reviews_site-list_item-title_block-name\">";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 317);
                echo "</h4>
                                        <ul class=\"reviews_site-list_item-title_block-grade\">
                                            ";
                // line 319
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 319));
                foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                    // line 320
                    echo "                                                <li>
                                                    <svg class=\"icon-svg-star ";
                    // line 321
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
                // line 327
                echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-list_item-title_date\">
                                        ";
                // line 330
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 330);
                echo "
                                    </div>
                                </div>
                                <div class=\"reviews_site-list_item-text\">";
                // line 333
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 333);
                echo "</div>
                                <div class=\"reviews_site-list_item-images\">
                                    ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 335));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 336
                    echo "                                        <picture>
                                            <source srcset=\"";
                    // line 337
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 337);
                    echo "\">
                                            <img class=\"catalog-inner_link-img\"
                                                 src=\"";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 339);
                    echo "\" loading=\"lazy\">
                                        </picture>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 342
                echo "                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "                    </ul>
                </div>
            </div>
        </section>
    ";
        }
        // line 350
        echo "    ";
        if (($context["may_be_interest_categories"] ?? null)) {
            // line 351
            echo "        <section class=\"product-mayBeInterest\">
            <div class=\"container\">
                <h2 class=\"section-title\">Может заинтересовать</h2>
                <ul class=\"product-mayBeInterest__list\">
                    ";
            // line 355
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["may_be_interest_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["interest_category"]) {
                // line 356
                echo "                        <li>
                            <a class=\"product-mayBeInterest__link\" href=\"";
                // line 357
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "href", [], "any", false, false, false, 357);
                echo "\">
                                <picture>
                                    <source srcset=\"";
                // line 359
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 359), "webp", [], "any", false, false, false, 359);
                echo "\">
                                    <img class=\"catalog-inner_link-img\" alt=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 360);
                echo "\"
                                         title=\"";
                // line 361
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 361);
                echo "\"
                                         src=\"";
                // line 362
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["interest_category"], "image", [], "any", false, false, false, 362), "default", [], "any", false, false, false, 362);
                echo "\" loading=\"lazy\">
                                </picture>
                                <h4>";
                // line 364
                echo twig_get_attribute($this->env, $this->source, $context["interest_category"], "name", [], "any", false, false, false, 364);
                echo "</h4>
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            echo "                </ul>
            </div>
        </section>
    ";
        }
        // line 372
        echo "</div>
";
        // line 373
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
        return array (  880 => 373,  877 => 372,  871 => 368,  861 => 364,  856 => 362,  852 => 361,  848 => 360,  844 => 359,  839 => 357,  836 => 356,  832 => 355,  826 => 351,  823 => 350,  816 => 345,  808 => 342,  799 => 339,  794 => 337,  791 => 336,  787 => 335,  782 => 333,  776 => 330,  771 => 327,  759 => 321,  756 => 320,  752 => 319,  747 => 317,  742 => 315,  738 => 313,  734 => 312,  719 => 299,  717 => 298,  710 => 293,  702 => 290,  700 => 289,  698 => 288,  696 => 287,  694 => 286,  692 => 285,  690 => 284,  688 => 283,  686 => 282,  684 => 281,  682 => 280,  680 => 279,  678 => 278,  676 => 277,  674 => 276,  672 => 275,  670 => 274,  668 => 273,  666 => 272,  664 => 271,  662 => 270,  660 => 269,  658 => 268,  656 => 267,  654 => 266,  652 => 265,  650 => 264,  648 => 263,  646 => 262,  643 => 260,  641 => 259,  633 => 253,  629 => 252,  624 => 250,  620 => 248,  615 => 246,  611 => 245,  606 => 243,  603 => 242,  598 => 240,  595 => 239,  593 => 238,  587 => 235,  583 => 234,  579 => 233,  575 => 232,  566 => 227,  562 => 226,  526 => 192,  520 => 190,  518 => 189,  514 => 188,  510 => 187,  506 => 186,  500 => 184,  495 => 180,  492 => 179,  487 => 177,  483 => 176,  478 => 175,  472 => 173,  469 => 172,  467 => 171,  463 => 169,  459 => 167,  453 => 166,  448 => 163,  440 => 161,  433 => 160,  431 => 159,  426 => 158,  413 => 156,  409 => 155,  405 => 154,  401 => 153,  397 => 152,  392 => 149,  386 => 148,  382 => 147,  375 => 146,  372 => 145,  367 => 142,  357 => 138,  353 => 137,  349 => 136,  343 => 132,  339 => 131,  335 => 130,  331 => 129,  324 => 128,  321 => 127,  317 => 126,  314 => 125,  308 => 124,  302 => 120,  293 => 117,  288 => 116,  284 => 115,  273 => 107,  269 => 106,  264 => 104,  261 => 103,  258 => 102,  253 => 101,  251 => 100,  244 => 96,  239 => 94,  235 => 93,  225 => 86,  219 => 83,  213 => 80,  202 => 71,  198 => 69,  195 => 68,  185 => 64,  179 => 63,  174 => 61,  170 => 60,  167 => 59,  162 => 58,  159 => 57,  150 => 51,  144 => 50,  139 => 48,  134 => 46,  130 => 45,  127 => 44,  124 => 43,  122 => 42,  120 => 41,  118 => 40,  116 => 39,  114 => 38,  112 => 37,  110 => 36,  108 => 35,  106 => 34,  104 => 33,  102 => 32,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  91 => 26,  89 => 25,  87 => 24,  85 => 23,  83 => 22,  81 => 21,  79 => 20,  77 => 19,  75 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
