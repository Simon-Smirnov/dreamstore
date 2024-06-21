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
class __TwigTemplate_37b6e43be83c9e3a04dc2ad8ea6f3e2f00d36fed490151b961b2f6ee63ff22a0 extends \Twig\Template
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
                <div class=\"product-tabs\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 60
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
                        ";
        // line 61
        if (($context["attribute_groups"] ?? null)) {
            // line 62
            echo "                            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 64
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 65
            echo "                            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 67
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 69
        echo ($context["description"] ?? null);
        echo "</div>
                        ";
        // line 70
        if (($context["attribute_groups"] ?? null)) {
            // line 71
            echo "                            <div class=\"tab-pane\" id=\"tab-specification\">
                                <table class=\"table table-bordered\">
                                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 74
                echo "                                        <thead>
                                        <tr>
                                            <td colspan=\"2\"><strong>";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 76);
                echo "</strong></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 81
                    echo "                                            <tr>
                                                <td>";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 82);
                    echo "</td>
                                                <td>";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 83);
                    echo "</td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                                        </tbody>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                </table>
                            </div>
                        ";
        }
        // line 91
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 92
            echo "                            <div class=\"tab-pane\" id=\"tab-review\">
                                <form class=\"form-horizontal\" id=\"form-review\">
                                    <div id=\"review\"></div>
                                    <h2>";
            // line 95
            echo ($context["text_write"] ?? null);
            echo "</h2>
                                    ";
            // line 96
            if (($context["review_guest"] ?? null)) {
                // line 97
                echo "                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-name\">";
                // line 99
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                                <input type=\"text\" name=\"name\" value=\"";
                // line 100
                echo ($context["customer_name"] ?? null);
                echo "\"
                                                       id=\"input-name\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\"
                                                       for=\"input-review\">";
                // line 108
                echo ($context["entry_review"] ?? null);
                echo "</label>
                                                <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                          class=\"form-control\"></textarea>
                                                <div class=\"help-block\">";
                // line 111
                echo ($context["text_note"] ?? null);
                echo "</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\">";
                // line 116
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                                                &nbsp;&nbsp;&nbsp; ";
                // line 117
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                                                <input type=\"radio\" name=\"rating\" value=\"1\"/>
                                                &nbsp;
                                                <input type=\"radio\" name=\"rating\" value=\"2\"/>
                                                &nbsp;
                                                <input type=\"radio\" name=\"rating\" value=\"3\"/>
                                                &nbsp;
                                                <input type=\"radio\" name=\"rating\" value=\"4\"/>
                                                &nbsp;
                                                <input type=\"radio\" name=\"rating\" value=\"5\"/>
                                                &nbsp;";
                // line 127
                echo ($context["entry_good"] ?? null);
                echo "</div>
                                        </div>
                                        ";
                // line 129
                echo ($context["captcha"] ?? null);
                echo "
                                        <div class=\"buttons clearfix\">
                                            <div class=\"pull-right\">
                                                <button type=\"button\" id=\"button-review\"
                                                        data-loading-text=\"";
                // line 133
                echo ($context["text_loading"] ?? null);
                echo "\"
                                                        class=\"btn btn-primary\">";
                // line 134
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 138
                echo "                                        ";
                echo ($context["text_login"] ?? null);
                echo "
                                    ";
            }
            // line 140
            echo "                                </form>
                            </div>
                        ";
        }
        // line 143
        echo "                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"product-right__info\">
                    <p>Артикул: ";
        // line 148
        echo ($context["sku"] ?? null);
        echo "</p>
                    <a href=\"";
        // line 149
        echo ($context["share"] ?? null);
        echo "\">Поделиться</a>
                </div>
                <h1 class=\"section-title\">";
        // line 151
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">
                </div>
                <div class=\"product-right__options\">
                    ";
        // line 155
        if (($context["options"] ?? null)) {
            // line 156
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 157
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "select")) {
                    // line 158
                    echo "                                ";
                    // line 159
                    echo "                                ";
                    // line 160
                    echo "                                ";
                    // line 161
                    echo "                                ";
                    // line 162
                    echo "                                ";
                    // line 163
                    echo "                                ";
                    // line 164
                    echo "                                ";
                    // line 165
                    echo "                                ";
                    // line 166
                    echo "                                ";
                    // line 167
                    echo "                                ";
                    // line 168
                    echo "                                ";
                    // line 169
                    echo "                                ";
                    // line 170
                    echo "                                ";
                    // line 171
                    echo "                                ";
                    // line 172
                    echo "                                ";
                    // line 173
                    echo "                                ";
                    // line 174
                    echo "                                ";
                    // line 175
                    echo "                                <div id=\"sorts\" class=\"select select-1 open active\">
                                    <input type=\"hidden\" name=\"выапываыва\"
                                           value=\"https://motochek-shop.ru/aksessuary/?sort=p.sort_order&amp;order=ASC\">
                                    <div class=\"select__box-btn\">
                                        <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                        </svg>
                                    </div>
                                    <ul class=\"select__list\">
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.sort_order&amp;order=ASC\"
                                            selected=\"selected\">По умолчанию1
                                        </li>
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.price&amp;order=ASC\">
                                            Сначала недорогие1
                                        </li>
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.price&amp;order=DESC\">
                                            Сначала дорогие1
                                        </li>
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.viewed&amp;order=DESC\">
                                            Популярные1
                                        </li>
                                    </ul>
                                </div>
                                <div id=\"sorts\" class=\"select select-1 open active\">
                                    <input type=\"hidden\" name=\"выапываыва\"
                                           value=\"https://motochek-shop.ru/aksessuary/?sort=p.sort_order&amp;order=ASC\">
                                    <div class=\"select__box-btn\">
                                        <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                        </svg>
                                    </div>
                                    <ul class=\"select__list\">
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.sort_order&amp;order=ASC\"
                                            selected=\"selected\">По умолчанию2
                                        </li>
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.price&amp;order=ASC\">
                                            Сначала недорогие2
                                        </li>
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.price&amp;order=DESC\">
                                            Сначала дорогие2
                                        </li>
                                        <li data-value=\"https://motochek-shop.ru/aksessuary/?sort=p.viewed&amp;order=DESC\">
                                            Популярные2
                                        </li>
                                    </ul>
                                </div>
                            ";
                }
                // line 224
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 224) == "radio")) {
                    // line 225
                    echo "                                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 225)) {
                        echo " required ";
                    }
                    echo "\">
                                    <label class=\"control-label\">";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                    echo "</label>
                                    <div id=\"input-option";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 227));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 228
                        echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\"
                                                           name=\"option[";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                        echo "]\"
                                                           value=\"";
                        // line 232
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 232);
                        echo "\"/>
                                                    ";
                        // line 233
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 233)) {
                            echo " <img
                                                            src=\"";
                            // line 234
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 234);
                            echo "\"
                                                            alt=\"";
                            // line 235
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 235);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 235)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 235);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 235);
                                echo " ";
                            }
                            echo "\"
                                                            class=\"img-thumbnail\"/> ";
                        }
                        // line 237
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 237);
                        echo "
                                                    ";
                        // line 238
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 238)) {
                            // line 239
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 239);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 239);
                            echo ")
                                                    ";
                        }
                        // line 240
                        echo " </label>
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 242
                    echo " </div>
                                </div>
                            ";
                }
                // line 245
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245) == "checkbox")) {
                    // line 246
                    echo "                                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 246)) {
                        echo " required ";
                    }
                    echo "\">
                                    <label class=\"control-label\">";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 247);
                    echo "</label>
                                    <div id=\"input-option";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 248));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 249
                        echo "                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\"
                                                           name=\"option[";
                        // line 252
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
                        echo "][]\"
                                                           value=\"";
                        // line 253
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 253);
                        echo "\"/>
                                                    ";
                        // line 254
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 254)) {
                            echo " <img
                                                            src=\"";
                            // line 255
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 255);
                            echo "\"
                                                            alt=\"";
                            // line 256
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 256);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 256)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 256);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 256);
                                echo " ";
                            }
                            echo "\"
                                                            class=\"img-thumbnail\"/> ";
                        }
                        // line 258
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 258);
                        echo "
                                                    ";
                        // line 259
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 259)) {
                            // line 260
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 260);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 260);
                            echo ")
                                                    ";
                        }
                        // line 261
                        echo " </label>
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 263
                    echo " </div>
                                </div>
                            ";
                }
                // line 266
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "                    ";
        }
        // line 268
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 270
        if (($context["price"] ?? null)) {
            // line 271
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 272
            if ( !($context["special"] ?? null)) {
                // line 273
                echo "                                <li>
                                    <h2>";
                // line 274
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 277
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 279
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 282
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 283
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 285
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 286
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 288
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 289
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 293
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 293);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 293);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "                            ";
            }
            // line 296
            echo "                        </ul>
                    ";
        }
        // line 298
        echo "                </div>
                <div class=\"product-right__add\" id=\"product\">
                    <label class=\"control-label\" for=\"input-quantity\">";
        // line 300
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 301
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                           class=\"form-control\"/>
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 303
        echo ($context["product_id"] ?? null);
        echo "\"/>
                    <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 304
        echo ($context["text_loading"] ?? null);
        echo "\"
                            class=\"btn btn-primary btn-lg btn-block\">";
        // line 305
        echo ($context["button_cart"] ?? null);
        echo "</button>
                    ";
        // line 306
        if ((($context["minimum"] ?? null) > 1)) {
            // line 307
            echo "                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                    ";
        }
        // line 309
        echo "                </div>
                <div class=\"product-right__complect\">
                    <h4>Добавить в комплект</h4>
                </div>
                <div class=\"product-right__delivery\">

                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 320
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
        return array (  763 => 320,  750 => 309,  744 => 307,  742 => 306,  738 => 305,  734 => 304,  730 => 303,  725 => 301,  721 => 300,  717 => 298,  713 => 296,  710 => 295,  699 => 293,  695 => 292,  690 => 289,  687 => 288,  679 => 286,  676 => 285,  668 => 283,  665 => 282,  659 => 279,  653 => 277,  647 => 274,  644 => 273,  642 => 272,  639 => 271,  637 => 270,  633 => 268,  630 => 267,  624 => 266,  619 => 263,  611 => 261,  604 => 260,  602 => 259,  597 => 258,  584 => 256,  580 => 255,  576 => 254,  572 => 253,  568 => 252,  563 => 249,  557 => 248,  553 => 247,  546 => 246,  543 => 245,  538 => 242,  530 => 240,  523 => 239,  521 => 238,  516 => 237,  503 => 235,  499 => 234,  495 => 233,  491 => 232,  487 => 231,  482 => 228,  476 => 227,  472 => 226,  465 => 225,  462 => 224,  411 => 175,  409 => 174,  407 => 173,  405 => 172,  403 => 171,  401 => 170,  399 => 169,  397 => 168,  395 => 167,  393 => 166,  391 => 165,  389 => 164,  387 => 163,  385 => 162,  383 => 161,  381 => 160,  379 => 159,  377 => 158,  374 => 157,  369 => 156,  367 => 155,  360 => 151,  355 => 149,  351 => 148,  344 => 143,  339 => 140,  333 => 138,  326 => 134,  322 => 133,  315 => 129,  310 => 127,  297 => 117,  293 => 116,  285 => 111,  279 => 108,  268 => 100,  264 => 99,  260 => 97,  258 => 96,  254 => 95,  249 => 92,  246 => 91,  241 => 88,  234 => 86,  225 => 83,  221 => 82,  218 => 81,  214 => 80,  207 => 76,  203 => 74,  199 => 73,  195 => 71,  193 => 70,  189 => 69,  185 => 67,  179 => 65,  176 => 64,  170 => 62,  168 => 61,  164 => 60,  159 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  90 => 21,  84 => 20,  79 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
