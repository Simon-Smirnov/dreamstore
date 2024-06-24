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
class __TwigTemplate_52022d715cca7f3fdb62471730a9cc9b4bd0fef9e989906371b1f81cd8dfd366 extends \Twig\Template
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
            echo "                        <div class=\"product-images__big\">
                            <a class=\"product-images__link\" href=\"";
            // line 16
            echo ($context["popup"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
                                <picture>
                                    <source srcset=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 18);
            echo "\">
                                    <img class=\"product-images__image\"
                                         src=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 20);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
                                         title=\"";
            // line 21
            echo ($context["heading_title"] ?? null);
            echo "\"
                                         loading=\"lazy\"/>
                                </picture>
                            </a>
                        </div>
                        ";
            // line 27
            echo "                        ";
            // line 28
            echo "                        ";
            // line 29
            echo "                        ";
            // line 30
            echo "                        ";
            // line 31
            echo "                        ";
            // line 32
            echo "                        ";
            // line 33
            echo "                        ";
            // line 34
            echo "                        ";
            // line 35
            echo "                        ";
            // line 36
            echo "                        ";
            // line 37
            echo "                        ";
            // line 38
            echo "                        ";
            // line 39
            echo "                        ";
            // line 40
            echo "                        ";
            // line 41
            echo "                        ";
            // line 42
            echo "                        ";
            // line 43
            echo "                        ";
            // line 44
            echo "                        ";
            // line 45
            echo "                        ";
            // line 46
            echo "                        ";
            // line 47
            echo "                        ";
            // line 48
            echo "                        ";
            // line 49
            echo "                        ";
            // line 50
            echo "                        ";
            // line 51
            echo "                        ";
            // line 52
            echo "                        ";
            // line 53
            echo "                        ";
            // line 54
            echo "                        ";
            // line 55
            echo "                        ";
            // line 56
            echo "                    ";
        }
        // line 57
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
        // line 66
        echo ($context["description"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-2\">
                            ";
        // line 69
        echo ($context["care"] ?? null);
        echo "
                        </div>
                        <div class=\"product-tabs__box\" data-tab=\"tab-3\">
                            ";
        // line 72
        echo ($context["questions"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 79
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 80
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 82
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 86
        if (($context["options"] ?? null)) {
            // line 87
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 88
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 88) == "select")) {
                    // line 89
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 90);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 92);
                    echo "]\"
                                               value=\"";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 93), 0, [], "any", false, false, false, 93), "product_option_value_id", [], "any", false, false, false, 93);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 102
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 102);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 103);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 110
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                        <div class=\"product-right__options-checkbox\">
                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 113
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                    // line 114
                    echo "                                    <div class=\"product-right__options-checkbox_item ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 114)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 115);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 116);
                    echo "\">
                                            ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 117));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 118
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox product-right__options-check\"
                                                               type=\"checkbox\"
                                                               name=\"option[";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 122);
                        echo "][]\"
                                                               value=\"";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 123);
                        echo "\"/>
                                                        <span class=\"product-right__options-text\">";
                        // line 124
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 124);
                        echo "</span>
                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 131
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 131) == "radio")) {
                    // line 132
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 132)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 134));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 135
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                        echo "]\"
                                                               value=\"";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        echo "\"/>
                                                        ";
                        // line 140
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140)) {
                            echo " <img
                                                                src=\"";
                            // line 141
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 141);
                            echo "\"
                                                                alt=\"";
                            // line 142
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 144
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                        echo "
                                                        ";
                        // line 145
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145)) {
                            // line 146
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 146);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146);
                            echo ")
                                                        ";
                        }
                        // line 147
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo " </div>
                                    </div>
                                ";
                }
                // line 152
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                        </div>
                    ";
        }
        // line 155
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 157
        if (($context["price"] ?? null)) {
            // line 158
            echo "                        ";
            if ( !($context["special"] ?? null)) {
                // line 159
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["price"] ?? null);
                echo "</h2>
                        ";
            } else {
                // line 161
                echo "                            <h2 class=\"product-right__newPrice\">";
                echo ($context["special"] ?? null);
                echo "</h2>
                            <span class=\"product-right__oldPrice\">";
                // line 162
                echo ($context["price"] ?? null);
                echo "</span>
                            <span class=\"product-right__percent\">";
                // line 163
                echo ($context["percent"] ?? null);
                echo "</span>
                        ";
            }
            // line 165
            echo "                    ";
        }
        // line 166
        echo "                </div>
                <div class=\"product-right__buttons\" id=\"product\">
                    <div class=\"product-right__add\">
                        ";
        // line 170
        echo "                        <input type=\"hidden\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 172
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 173
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary\">";
        // line 174
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        ";
        // line 175
        if ((($context["minimum"] ?? null) > 1)) {
            // line 176
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 178
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
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 213
            echo "                            <a class=\"products_grid-item product-similar__item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 213);
            echo "\"
                               data-fancybox=\"slider\">
                                <div class=\"products_grid-thumb\">
                                    <div class=\"products_grid-block\">
                                        <picture>
                                            <source srcset=\"";
            // line 218
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 218), "webp", [], "any", false, false, false, 218);
            echo "\">
                                            <img class=\"catalog-inner_link-img\" alt=\"";
            // line 219
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 219);
            echo "\"
                                                 title=\"";
            // line 220
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 220);
            echo "\"
                                                 src=\"";
            // line 221
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 221), "default", [], "any", false, false, false, 221);
            echo "\" loading=\"lazy\">
                                        </picture>
                                        <p class=\"products_grid-price\">
                                            ";
            // line 224
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 224)) {
                // line 225
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 226);
                echo "</span>
                                            ";
            } else {
                // line 228
                echo "                                                <span
                                                        class=\"price-new\">";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 229);
                echo "</span>
                                                <span
                                                        class=\"price-old\">";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 231);
                echo "</span>
                                                <span class=\"price-percent\">";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 232);
                echo "</span>
                                            ";
            }
            // line 234
            echo "                                        </p>
                                    </div>
                                    <h4 class=\"products_grid-title\">";
            // line 236
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
            echo "</h4>
                                    <button class=\"products_grid-wishlist\" type=\"button\" data-toggle=\"tooltip\"
                                            title=\"";
            // line 238
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 239
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 239);
            echo "');\">
                                        <svg class=\"icon-svg-whishlist\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_heart\"></use>
                                        </svg>
                                    </button>
                                    ";
            // line 245
            echo "                                    ";
            // line 246
            echo "
                                    ";
            // line 248
            echo "                                    ";
            // line 249
            echo "                                    ";
            // line 250
            echo "                                    ";
            // line 251
            echo "                                    ";
            // line 252
            echo "                                    ";
            // line 253
            echo "                                    ";
            // line 254
            echo "                                    ";
            // line 255
            echo "                                    ";
            // line 256
            echo "                                    ";
            // line 257
            echo "                                    ";
            // line 258
            echo "                                    ";
            // line 259
            echo "                                    ";
            // line 260
            echo "                                    ";
            // line 261
            echo "                                    ";
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
            echo "                                </div>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"product-reviews sliderProductReviews\">
        <div class=\"container\">
            <h2 class=\"section-title\">Отзывы покупателей</h2>
            <div class=\"reviews_site swiper\">
                <ul class=\"reviews_site-list swiper-wrapper\" data-lightbox-parent>
                    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews_to_shop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 290
            echo "                        <li class=\"reviews_site-list_item\" data-fancybox=\"slider\">
                            <div class=\"reviews_site-list_item-title\">
                                <div class=\"reviews_site-list_item-title_initial\">";
            // line 292
            echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 292);
            echo "</div>
                                <div class=\"reviews_site-list_item-title_block\">
                                    <h4 class=\"reviews_site-list_item-title_block-name\">";
            // line 294
            echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 294);
            echo "</h4>
                                    <ul class=\"reviews_site-list_item-title_block-grade\">
                                        ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 296));
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 297
                echo "                                            <li>
                                                <svg class=\"icon-svg-star ";
                // line 298
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
            // line 304
            echo "                                    </ul>
                                </div>
                                <div class=\"reviews_site-list_item-title_date\">
                                    ";
            // line 307
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 307);
            echo "
                                </div>
                            </div>
                            <div class=\"reviews_site-list_item-text\">";
            // line 310
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 310);
            echo "</div>
                            <div class=\"reviews_site-list_item-images\">
                                ";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 312));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 313
                echo "                                    <picture>
                                        <source srcset=\"";
                // line 314
                echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 314);
                echo "\">
                                        <img class=\"catalog-inner_link-img\"
                                             src=\"";
                // line 316
                echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 316);
                echo "\" loading=\"lazy\">
                                    </picture>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                </ul>
            </div>
        </div>
    </section>
</div>
";
        // line 327
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
        return array (  768 => 327,  761 => 322,  753 => 319,  744 => 316,  739 => 314,  736 => 313,  732 => 312,  727 => 310,  721 => 307,  716 => 304,  704 => 298,  701 => 297,  697 => 296,  692 => 294,  687 => 292,  683 => 290,  679 => 289,  667 => 279,  659 => 276,  657 => 275,  655 => 274,  653 => 273,  651 => 272,  649 => 271,  647 => 270,  645 => 269,  643 => 268,  641 => 267,  639 => 266,  637 => 265,  635 => 264,  633 => 263,  631 => 262,  629 => 261,  627 => 260,  625 => 259,  623 => 258,  621 => 257,  619 => 256,  617 => 255,  615 => 254,  613 => 253,  611 => 252,  609 => 251,  607 => 250,  605 => 249,  603 => 248,  600 => 246,  598 => 245,  590 => 239,  586 => 238,  581 => 236,  577 => 234,  572 => 232,  568 => 231,  563 => 229,  560 => 228,  555 => 226,  552 => 225,  550 => 224,  544 => 221,  540 => 220,  536 => 219,  532 => 218,  523 => 213,  519 => 212,  483 => 178,  477 => 176,  475 => 175,  471 => 174,  467 => 173,  463 => 172,  457 => 170,  452 => 166,  449 => 165,  444 => 163,  440 => 162,  435 => 161,  429 => 159,  426 => 158,  424 => 157,  420 => 155,  416 => 153,  410 => 152,  405 => 149,  397 => 147,  390 => 146,  388 => 145,  383 => 144,  370 => 142,  366 => 141,  362 => 140,  358 => 139,  354 => 138,  349 => 135,  343 => 134,  339 => 133,  332 => 132,  329 => 131,  324 => 128,  314 => 124,  310 => 123,  306 => 122,  300 => 118,  296 => 117,  292 => 116,  288 => 115,  281 => 114,  278 => 113,  274 => 112,  271 => 111,  265 => 110,  259 => 106,  250 => 103,  245 => 102,  241 => 101,  230 => 93,  226 => 92,  221 => 90,  218 => 89,  215 => 88,  210 => 87,  208 => 86,  201 => 82,  196 => 80,  192 => 79,  182 => 72,  176 => 69,  170 => 66,  159 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  90 => 21,  84 => 20,  79 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
