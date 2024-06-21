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
class __TwigTemplate_7ec8dd0623be49686f0c2c465001f537328fdbc18ddc12b058c4d01b604d0b91 extends \Twig\Template
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
            echo "                        <ul class=\"product-images__list\">
                            ";
            // line 16
            if (($context["thumb"] ?? null)) {
                // line 17
                echo "                                <li class=\"product-images__item\">
                                    <a class=\"product-images__link\" href=\"";
                // line 18
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                        ";
                // line 20
                echo "                                        ";
                // line 21
                echo "                                        ";
                // line 22
                echo "                                        <picture>
                                            <source srcset=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 23);
                echo "\">
                                            <img class=\"product-images__image\"
                                                 src=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 25);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                 title=\"";
                // line 26
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                 loading=\"lazy\"/>
                                        </picture>
                                    </a>
                                </li>
                            ";
            }
            // line 32
            echo "                            ";
            if (($context["images"] ?? null)) {
                // line 33
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 34
                    echo "                                    <li class=\"product-images__item\">
                                        <a class=\"product-images__link\" href=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 35);
                    echo "\"
                                           title=\"";
                    // line 36
                    echo ($context["heading_title"] ?? null);
                    echo "\">
                                            <img class=\"product-images__image\"
                                                 src=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                 alt=\"";
                    // line 39
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                            ";
            }
            // line 44
            echo "                        </ul>
                    ";
        }
        // line 46
        echo "                </div>
                <div class=\"product-tabs\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
                        ";
        // line 50
        if (($context["attribute_groups"] ?? null)) {
            // line 51
            echo "                            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 53
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 54
            echo "                            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 56
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 58
        echo ($context["description"] ?? null);
        echo "</div>
                        ";
        // line 59
        if (($context["attribute_groups"] ?? null)) {
            // line 60
            echo "                            <div class=\"tab-pane\" id=\"tab-specification\">
                                <table class=\"table table-bordered\">
                                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 63
                echo "                                        <thead>
                                        <tr>
                                            <td colspan=\"2\"><strong>";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 65);
                echo "</strong></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 70
                    echo "                                            <tr>
                                                <td>";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 71);
                    echo "</td>
                                                <td>";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 72);
                    echo "</td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                        </tbody>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                                </table>
                            </div>
                        ";
        }
        // line 80
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 81
            echo "                            <div class=\"tab-pane\" id=\"tab-review\">
                                <form class=\"form-horizontal\" id=\"form-review\">
                                    <div id=\"review\"></div>
                                    <h2>";
            // line 84
            echo ($context["text_write"] ?? null);
            echo "</h2>
                                    ";
            // line 85
            if (($context["review_guest"] ?? null)) {
                // line 86
                echo "                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-name\">";
                // line 88
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                                <input type=\"text\" name=\"name\" value=\"";
                // line 89
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
                // line 97
                echo ($context["entry_review"] ?? null);
                echo "</label>
                                                <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                          class=\"form-control\"></textarea>
                                                <div class=\"help-block\">";
                // line 100
                echo ($context["text_note"] ?? null);
                echo "</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\">";
                // line 105
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                                                &nbsp;&nbsp;&nbsp; ";
                // line 106
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
                // line 116
                echo ($context["entry_good"] ?? null);
                echo "</div>
                                        </div>
                                        ";
                // line 118
                echo ($context["captcha"] ?? null);
                echo "
                                        <div class=\"buttons clearfix\">
                                            <div class=\"pull-right\">
                                                <button type=\"button\" id=\"button-review\"
                                                        data-loading-text=\"";
                // line 122
                echo ($context["text_loading"] ?? null);
                echo "\"
                                                        class=\"btn btn-primary\">";
                // line 123
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 127
                echo "                                        ";
                echo ($context["text_login"] ?? null);
                echo "
                                    ";
            }
            // line 129
            echo "                                </form>
                            </div>
                        ";
        }
        // line 132
        echo "                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"";
        // line 136
        echo ($context["class"] ?? null);
        echo "\">
                    <div class=\"btn-group\">
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 139
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i
                                    class=\"fa fa-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 142
        echo ($context["button_compare"] ?? null);
        echo "\"
                                onclick=\"compare.add('";
        // line 143
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>
                    <h1>";
        // line 145
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <ul class=\"list-unstyled\">
                        ";
        // line 147
        if (($context["manufacturer"] ?? null)) {
            // line 148
            echo "                            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 150
        echo "                        <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
                        ";
        // line 151
        if (($context["reward"] ?? null)) {
            // line 152
            echo "                            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
                        ";
        }
        // line 154
        echo "                        <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
                    </ul>
                    ";
        // line 156
        if (($context["price"] ?? null)) {
            // line 157
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 158
            if ( !($context["special"] ?? null)) {
                // line 159
                echo "                                <li>
                                    <h2>";
                // line 160
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 163
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 165
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 168
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 169
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 171
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 172
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 174
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 175
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 179
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 179);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 179);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "                            ";
            }
            // line 182
            echo "                        </ul>
                    ";
        }
        // line 184
        echo "                    <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 185
            echo "                            <hr>
                            <h3>";
            // line 186
            echo ($context["text_option"] ?? null);
            echo "</h3>
                            ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 188
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 188) == "select")) {
                    // line 189
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 189)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 191);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 191);
                    echo "</label>
                                        <select name=\"option[";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "]\"
                                                id=\"input-option";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\"
                                                class=\"form-control\">
                                            <option value=\"\">";
                    // line 195
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                            ";
                    // line 196
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 196));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 197
                        echo "                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 197);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                        echo "
                                                    ";
                        // line 198
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 198)) {
                            // line 199
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 199);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199);
                            echo ")
                                                    ";
                        }
                        // line 200
                        echo " </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                                        </select>
                                    </div>
                                ";
                }
                // line 205
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "radio")) {
                    // line 206
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 208));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 209
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                        echo "]\"
                                                               value=\"";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 213);
                        echo "\"/>
                                                        ";
                        // line 214
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 214)) {
                            echo " <img
                                                                src=\"";
                            // line 215
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 215);
                            echo "\"
                                                                alt=\"";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 216);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 216);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 218
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 218);
                        echo "
                                                        ";
                        // line 219
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219)) {
                            // line 220
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 220);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 220);
                            echo ")
                                                        ";
                        }
                        // line 221
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 223
                    echo " </div>
                                    </div>
                                ";
                }
                // line 226
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 226) == "checkbox")) {
                    // line 227
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 227)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 228);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 229));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 230
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"option[";
                        // line 233
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                        echo "][]\"
                                                               value=\"";
                        // line 234
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 234);
                        echo "\"/>
                                                        ";
                        // line 235
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 235)) {
                            echo " <img
                                                                src=\"";
                            // line 236
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 236);
                            echo "\"
                                                                alt=\"";
                            // line 237
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 237);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 237)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 237);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 237);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 239
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 239);
                        echo "
                                                        ";
                        // line 240
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 240)) {
                            // line 241
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 241);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 241);
                            echo ")
                                                        ";
                        }
                        // line 242
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 244
                    echo " </div>
                                    </div>
                                ";
                }
                // line 247
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 247) == "text")) {
                    // line 248
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 248)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 250);
                    echo "</label>
                                        <input type=\"text\" name=\"option[";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
                    echo "]\"
                                               value=\"";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 252);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 252);
                    echo "\"
                                               id=\"input-option";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "\"
                                               class=\"form-control\"/>
                                    </div>
                                ";
                }
                // line 257
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 257) == "textarea")) {
                    // line 258
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 258)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 260);
                    echo "</label>
                                        <textarea name=\"option[";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "]\" rows=\"5\"
                                                  placeholder=\"";
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 262);
                    echo "\"
                                                  id=\"input-option";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 263);
                    echo "\"
                                                  class=\"form-control\">";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 264);
                    echo "</textarea>
                                    </div>
                                ";
                }
                // line 267
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 267) == "file")) {
                    // line 268
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 268)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 269);
                    echo "</label>
                                        <button type=\"button\" id=\"button-upload";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 270);
                    echo "\"
                                                data-loading-text=\"";
                    // line 271
                    echo ($context["text_loading"] ?? null);
                    echo "\"
                                                class=\"btn btn-default btn-block\"><i
                                                    class=\"fa fa-upload\"></i> ";
                    // line 273
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                        <input type=\"hidden\" name=\"option[";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    echo "]\" value=\"\"
                                               id=\"input-option";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 275);
                    echo "\"/>
                                    </div>
                                ";
                }
                // line 278
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 278) == "date")) {
                    // line 279
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 279)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 281
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 281);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 281);
                    echo "</label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"option[";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    echo "]\"
                                                   value=\"";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 284);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                   id=\"input-option";
                    // line 285
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 292
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 292) == "datetime")) {
                    // line 293
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 293)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 295);
                    echo "</label>
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"option[";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    echo "]\"
                                                   value=\"";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 298);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                   id=\"input-option";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 306
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 306) == "time")) {
                    // line 307
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 307)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 309);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 309);
                    echo "</label>
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"option[";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 311);
                    echo "]\"
                                                   value=\"";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 312);
                    echo "\" data-date-format=\"HH:mm\"
                                                   id=\"input-option";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 320
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "                        ";
        }
        // line 322
        echo "                        ";
        if (($context["recurrings"] ?? null)) {
            // line 323
            echo "                            <hr>
                            <h3>";
            // line 324
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                            <div class=\"form-group required\">
                                <select name=\"recurring_id\" class=\"form-control\">
                                    <option value=\"\">";
            // line 327
            echo ($context["text_select"] ?? null);
            echo "</option>
                                    ";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 329
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 329);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 329);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "                                </select>
                                <div class=\"help-block\" id=\"recurring-description\"></div>
                            </div>
                        ";
        }
        // line 335
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-quantity\">";
        // line 336
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"quantity\" value=\"";
        // line 337
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                   class=\"form-control\"/>
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 339
        echo ($context["product_id"] ?? null);
        echo "\"/>
                            <br/>
                            <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 341
        echo ($context["text_loading"] ?? null);
        echo "\"
                                    class=\"btn btn-primary btn-lg btn-block\">";
        // line 342
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        </div>
                        ";
        // line 344
        if ((($context["minimum"] ?? null) > 1)) {
            // line 345
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 346
        echo "</div>
                    ";
        // line 347
        if (($context["review_status"] ?? null)) {
            // line 348
            echo "                        <div class=\"rating\">
                            <p>";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 350
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 351
                    echo "<span
                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 354
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 355
            echo ($context["reviews"] ?? null);
            echo "</a>
                                / <a href=\"\"
                                     onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 357
            echo ($context["text_write"] ?? null);
            echo "</a>
                            </p>
                            <hr>
                        </div>
                    ";
        }
        // line 361
        echo " </div>
            </div>
            ";
        // line 364
        echo "            ";
        // line 365
        echo "            ";
        // line 366
        echo "            ";
        // line 367
        echo "            ";
        // line 368
        echo "            ";
        // line 369
        echo "            ";
        // line 370
        echo "            ";
        // line 371
        echo "            ";
        // line 372
        echo "            ";
        // line 373
        echo "            ";
        // line 374
        echo "            ";
        // line 375
        echo "            ";
        // line 376
        echo "            ";
        // line 377
        echo "            ";
        // line 378
        echo "            ";
        // line 379
        echo "            ";
        // line 380
        echo "            ";
        // line 381
        echo "            ";
        // line 382
        echo "            ";
        // line 383
        echo "            ";
        // line 384
        echo "            ";
        // line 385
        echo "            ";
        // line 386
        echo "            ";
        // line 387
        echo "            ";
        // line 388
        echo "            ";
        // line 389
        echo "            ";
        // line 390
        echo "            ";
        // line 391
        echo "            ";
        // line 392
        echo "            ";
        // line 393
        echo "            ";
        // line 394
        echo "            ";
        // line 395
        echo "            ";
        // line 396
        echo "            ";
        // line 397
        echo "            ";
        // line 398
        echo "            ";
        // line 399
        echo "            ";
        // line 400
        echo "            ";
        // line 401
        echo "            ";
        // line 402
        echo "            ";
        // line 403
        echo "            ";
        // line 404
        echo "            ";
        // line 405
        echo "            ";
        // line 406
        echo "            ";
        // line 407
        echo "            ";
        // line 408
        echo "            ";
        // line 409
        echo "            ";
        // line 410
        echo "            ";
        // line 411
        echo "            ";
        // line 412
        echo "            ";
        // line 413
        echo "            ";
        // line 414
        echo "            ";
        // line 415
        echo "            ";
        // line 416
        echo "            ";
        // line 417
        echo "            ";
        // line 418
        echo "            ";
        // line 419
        echo "            ";
        // line 420
        echo "            ";
        // line 421
        echo "            ";
        // line 422
        echo "            ";
        // line 423
        echo "            ";
        // line 424
        echo "            ";
        // line 425
        echo "            ";
        // line 426
        echo "            ";
        // line 427
        echo "            ";
        // line 428
        echo "            ";
        // line 429
        echo "            ";
        // line 430
        echo "            ";
        // line 431
        echo "            ";
        // line 432
        echo "        </div>
    </div>
</div>
";
        // line 435
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
        return array (  1210 => 435,  1205 => 432,  1203 => 431,  1201 => 430,  1199 => 429,  1197 => 428,  1195 => 427,  1193 => 426,  1191 => 425,  1189 => 424,  1187 => 423,  1185 => 422,  1183 => 421,  1181 => 420,  1179 => 419,  1177 => 418,  1175 => 417,  1173 => 416,  1171 => 415,  1169 => 414,  1167 => 413,  1165 => 412,  1163 => 411,  1161 => 410,  1159 => 409,  1157 => 408,  1155 => 407,  1153 => 406,  1151 => 405,  1149 => 404,  1147 => 403,  1145 => 402,  1143 => 401,  1141 => 400,  1139 => 399,  1137 => 398,  1135 => 397,  1133 => 396,  1131 => 395,  1129 => 394,  1127 => 393,  1125 => 392,  1123 => 391,  1121 => 390,  1119 => 389,  1117 => 388,  1115 => 387,  1113 => 386,  1111 => 385,  1109 => 384,  1107 => 383,  1105 => 382,  1103 => 381,  1101 => 380,  1099 => 379,  1097 => 378,  1095 => 377,  1093 => 376,  1091 => 375,  1089 => 374,  1087 => 373,  1085 => 372,  1083 => 371,  1081 => 370,  1079 => 369,  1077 => 368,  1075 => 367,  1073 => 366,  1071 => 365,  1069 => 364,  1065 => 361,  1057 => 357,  1052 => 355,  1044 => 354,  1039 => 351,  1033 => 350,  1029 => 349,  1026 => 348,  1024 => 347,  1021 => 346,  1015 => 345,  1013 => 344,  1008 => 342,  1004 => 341,  999 => 339,  994 => 337,  990 => 336,  987 => 335,  981 => 331,  970 => 329,  966 => 328,  962 => 327,  956 => 324,  953 => 323,  950 => 322,  947 => 321,  941 => 320,  931 => 313,  927 => 312,  923 => 311,  916 => 309,  908 => 307,  905 => 306,  895 => 299,  891 => 298,  887 => 297,  880 => 295,  872 => 293,  869 => 292,  859 => 285,  855 => 284,  851 => 283,  844 => 281,  836 => 279,  833 => 278,  827 => 275,  823 => 274,  819 => 273,  814 => 271,  810 => 270,  806 => 269,  799 => 268,  796 => 267,  790 => 264,  786 => 263,  782 => 262,  778 => 261,  772 => 260,  764 => 258,  761 => 257,  754 => 253,  748 => 252,  744 => 251,  738 => 250,  730 => 248,  727 => 247,  722 => 244,  714 => 242,  707 => 241,  705 => 240,  700 => 239,  687 => 237,  683 => 236,  679 => 235,  675 => 234,  671 => 233,  666 => 230,  660 => 229,  656 => 228,  649 => 227,  646 => 226,  641 => 223,  633 => 221,  626 => 220,  624 => 219,  619 => 218,  606 => 216,  602 => 215,  598 => 214,  594 => 213,  590 => 212,  585 => 209,  579 => 208,  575 => 207,  568 => 206,  565 => 205,  560 => 202,  553 => 200,  546 => 199,  544 => 198,  537 => 197,  533 => 196,  529 => 195,  524 => 193,  520 => 192,  514 => 191,  506 => 189,  503 => 188,  499 => 187,  495 => 186,  492 => 185,  489 => 184,  485 => 182,  482 => 181,  471 => 179,  467 => 178,  462 => 175,  459 => 174,  451 => 172,  448 => 171,  440 => 169,  437 => 168,  431 => 165,  425 => 163,  419 => 160,  416 => 159,  414 => 158,  411 => 157,  409 => 156,  401 => 154,  393 => 152,  391 => 151,  384 => 150,  374 => 148,  372 => 147,  367 => 145,  362 => 143,  358 => 142,  350 => 139,  344 => 136,  338 => 132,  333 => 129,  327 => 127,  320 => 123,  316 => 122,  309 => 118,  304 => 116,  291 => 106,  287 => 105,  279 => 100,  273 => 97,  262 => 89,  258 => 88,  254 => 86,  252 => 85,  248 => 84,  243 => 81,  240 => 80,  235 => 77,  228 => 75,  219 => 72,  215 => 71,  212 => 70,  208 => 69,  201 => 65,  197 => 63,  193 => 62,  189 => 60,  187 => 59,  183 => 58,  179 => 56,  173 => 54,  170 => 53,  164 => 51,  162 => 50,  158 => 49,  153 => 46,  149 => 44,  146 => 43,  136 => 39,  130 => 38,  125 => 36,  121 => 35,  118 => 34,  113 => 33,  110 => 32,  101 => 26,  95 => 25,  90 => 23,  87 => 22,  85 => 21,  83 => 20,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
