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
class __TwigTemplate_7b371b39d836a69c0e5a5dd3da5305c41369978f277bb7f7e7f9416cbc78d0e1 extends \Twig\Template
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
                    echo "                                <div class=\"product-right__options-item\">
                                    <span class=\"product-right__options-title\">";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                    echo "</span>
                                    <div class=\"select select-product product-right__options-block\">
                                        <input type=\"hidden\" name=\"option[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "]\"
                                               value=\"";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162), 0, [], "any", false, false, false, 162), "product_option_value_id", [], "any", false, false, false, 162);
                    echo "\">
                                        <div class=\"select__box-btn\">
                                            <button class=\"select__button\" type=\"button\">По умолчанию<br></button>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                                <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                            </svg>
                                        </div>
                                        <ul class=\"select__list\">
                                            ";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 171
                        echo "                                                <li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 171);
                        echo "\"
                                                    selected=\"selected\">";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 172);
                        echo "
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                                        </ul>
                                    </div>
                                </div>
                            ";
                }
                // line 179
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                        <div class=\" product-right__options-checkbox\">
                            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 182
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "checkbox")) {
                    // line 183
                    echo "                                    <div class=\"product-right__options-item";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\">
                                        <span class=\"product-right__options-title\">";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo "</span>
                                        <div id=\"input-option";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\">
                                            ";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 186));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 187
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input class=\"input-checkbox\" type=\"checkbox\"
                                                               name=\"option[";
                        // line 190
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                        echo "][]\"
                                                               value=\"";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 191);
                        echo "\"/>
                                                        ";
                        // line 193
                        echo "                                                        ";
                        // line 194
                        echo "                                                        ";
                        // line 195
                        echo "                                                        ";
                        // line 196
                        echo "                                                        ";
                        // line 197
                        echo "                                                        ";
                        // line 198
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 198);
                        echo "
                                                        ";
                        // line 200
                        echo "                                                        ";
                        // line 201
                        echo "                                                        ";
                        // line 202
                        echo "                                                    </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 208
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 208) == "radio")) {
                    // line 209
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 209)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 211));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 212
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                        echo "]\"
                                                               value=\"";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 216);
                        echo "\"/>
                                                        ";
                        // line 217
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 217)) {
                            echo " <img
                                                                src=\"";
                            // line 218
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 218);
                            echo "\"
                                                                alt=\"";
                            // line 219
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 219);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 219);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 221
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 221);
                        echo "
                                                        ";
                        // line 222
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 222)) {
                            // line 223
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 223);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 223);
                            echo ")
                                                        ";
                        }
                        // line 224
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo " </div>
                                    </div>
                                ";
                }
                // line 229
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "                        </div>
                    ";
        }
        // line 232
        echo "                </div>
                <div class=\"product-right__price\">
                    ";
        // line 234
        if (($context["price"] ?? null)) {
            // line 235
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 236
            if ( !($context["special"] ?? null)) {
                // line 237
                echo "                                <li>
                                    <h2>";
                // line 238
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 241
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 243
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 246
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 247
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 249
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 250
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 252
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 253
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 256
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 257
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 257);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 257);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "                            ";
            }
            // line 260
            echo "                        </ul>
                    ";
        }
        // line 262
        echo "                </div>
                <div class=\"product-right__add\" id=\"product\">
                    <label class=\"control-label\" for=\"input-quantity\">";
        // line 264
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 265
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                           class=\"form-control\"/>
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 267
        echo ($context["product_id"] ?? null);
        echo "\"/>
                    <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 268
        echo ($context["text_loading"] ?? null);
        echo "\"
                            class=\"btn btn-primary btn-lg btn-block\">";
        // line 269
        echo ($context["button_cart"] ?? null);
        echo "</button>
                    ";
        // line 270
        if ((($context["minimum"] ?? null) > 1)) {
            // line 271
            echo "                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                    ";
        }
        // line 273
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
        // line 284
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
        return array (  725 => 284,  712 => 273,  706 => 271,  704 => 270,  700 => 269,  696 => 268,  692 => 267,  687 => 265,  683 => 264,  679 => 262,  675 => 260,  672 => 259,  661 => 257,  657 => 256,  652 => 253,  649 => 252,  641 => 250,  638 => 249,  630 => 247,  627 => 246,  621 => 243,  615 => 241,  609 => 238,  606 => 237,  604 => 236,  601 => 235,  599 => 234,  595 => 232,  591 => 230,  585 => 229,  580 => 226,  572 => 224,  565 => 223,  563 => 222,  558 => 221,  545 => 219,  541 => 218,  537 => 217,  533 => 216,  529 => 215,  524 => 212,  518 => 211,  514 => 210,  507 => 209,  504 => 208,  499 => 205,  491 => 202,  489 => 201,  487 => 200,  482 => 198,  480 => 197,  478 => 196,  476 => 195,  474 => 194,  472 => 193,  468 => 191,  464 => 190,  459 => 187,  455 => 186,  451 => 185,  447 => 184,  440 => 183,  437 => 182,  433 => 181,  430 => 180,  424 => 179,  418 => 175,  409 => 172,  404 => 171,  400 => 170,  389 => 162,  385 => 161,  380 => 159,  377 => 158,  374 => 157,  369 => 156,  367 => 155,  360 => 151,  355 => 149,  351 => 148,  344 => 143,  339 => 140,  333 => 138,  326 => 134,  322 => 133,  315 => 129,  310 => 127,  297 => 117,  293 => 116,  285 => 111,  279 => 108,  268 => 100,  264 => 99,  260 => 97,  258 => 96,  254 => 95,  249 => 92,  246 => 91,  241 => 88,  234 => 86,  225 => 83,  221 => 82,  218 => 81,  214 => 80,  207 => 76,  203 => 74,  199 => 73,  195 => 71,  193 => 70,  189 => 69,  185 => 67,  179 => 65,  176 => 64,  170 => 62,  168 => 61,  164 => 60,  159 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  90 => 21,  84 => 20,  79 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}