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
class __TwigTemplate_4be998069a63b89f4042bc310a863b55f65125e436f9a58c9f30252e162ebc73 extends \Twig\Template
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
                <h1>";
        // line 151
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <div class=\"product-right__color\">

                </div>
                <div class=\"\">
                    <div class=\"btn-group\">
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 158
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i
                                    class=\"fa fa-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 161
        echo ($context["button_compare"] ?? null);
        echo "\"
                                onclick=\"compare.add('";
        // line 162
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>

                    <ul class=\"list-unstyled\">
                        ";
        // line 166
        if (($context["manufacturer"] ?? null)) {
            // line 167
            echo "                            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 169
        echo "                        <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
                        ";
        // line 170
        if (($context["reward"] ?? null)) {
            // line 171
            echo "                            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
                        ";
        }
        // line 173
        echo "                        <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
                    </ul>
                    ";
        // line 175
        if (($context["price"] ?? null)) {
            // line 176
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 177
            if ( !($context["special"] ?? null)) {
                // line 178
                echo "                                <li>
                                    <h2>";
                // line 179
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 182
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 184
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 187
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 188
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 190
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 191
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 193
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 194
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 198
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 198);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 198);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                            ";
            }
            // line 201
            echo "                        </ul>
                    ";
        }
        // line 203
        echo "                    <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 204
            echo "                            <hr>
                            <h3>";
            // line 205
            echo ($context["text_option"] ?? null);
            echo "</h3>
                            ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 207
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 207) == "select")) {
                    // line 208
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 208)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "</label>
                                        <select name=\"option[";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "]\"
                                                id=\"input-option";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "\"
                                                class=\"form-control\">
                                            <option value=\"\">";
                    // line 214
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                            ";
                    // line 215
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 215));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 216
                        echo "                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 216);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 216);
                        echo "
                                                    ";
                        // line 217
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 217)) {
                            // line 218
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 218);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218);
                            echo ")
                                                    ";
                        }
                        // line 219
                        echo " </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "                                        </select>
                                    </div>
                                ";
                }
                // line 224
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 224) == "radio")) {
                    // line 225
                    echo "                                    <div class=\"form-group";
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
                        echo "                                                <div class=\"radio\">
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
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 237);
                        echo "
                                                        ";
                        // line 238
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 238)) {
                            // line 239
                            echo "                                                            (";
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
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245) == "checkbox")) {
                    // line 246
                    echo "                                    <div class=\"form-group";
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
                        echo "                                                <div class=\"checkbox\">
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
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 258);
                        echo "
                                                        ";
                        // line 259
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 259)) {
                            // line 260
                            echo "                                                            (";
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
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 266) == "text")) {
                    // line 267
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 267)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 269);
                    echo "</label>
                                        <input type=\"text\" name=\"option[";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 270);
                    echo "]\"
                                               value=\"";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 271);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 271);
                    echo "\"
                                               id=\"input-option";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "\"
                                               class=\"form-control\"/>
                                    </div>
                                ";
                }
                // line 276
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 276) == "textarea")) {
                    // line 277
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 277)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 279
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 279);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 279);
                    echo "</label>
                                        <textarea name=\"option[";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "]\" rows=\"5\"
                                                  placeholder=\"";
                    // line 281
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 281);
                    echo "\"
                                                  id=\"input-option";
                    // line 282
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 282);
                    echo "\"
                                                  class=\"form-control\">";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 283);
                    echo "</textarea>
                                    </div>
                                ";
                }
                // line 286
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 286) == "file")) {
                    // line 287
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 287)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 288);
                    echo "</label>
                                        <button type=\"button\" id=\"button-upload";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                    echo "\"
                                                data-loading-text=\"";
                    // line 290
                    echo ($context["text_loading"] ?? null);
                    echo "\"
                                                class=\"btn btn-default btn-block\"><i
                                                    class=\"fa fa-upload\"></i> ";
                    // line 292
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                        <input type=\"hidden\" name=\"option[";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 293);
                    echo "]\" value=\"\"
                                               id=\"input-option";
                    // line 294
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 294);
                    echo "\"/>
                                    </div>
                                ";
                }
                // line 297
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 297) == "date")) {
                    // line 298
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 298)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 300
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 300);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 300);
                    echo "</label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"option[";
                    // line 302
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 302);
                    echo "]\"
                                                   value=\"";
                    // line 303
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 303);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                   id=\"input-option";
                    // line 304
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 304);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 311
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 311) == "datetime")) {
                    // line 312
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 312)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 314);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 314);
                    echo "</label>
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"option[";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                    echo "]\"
                                                   value=\"";
                    // line 317
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 317);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                   id=\"input-option";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 318);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 325
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 325) == "time")) {
                    // line 326
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 326)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 328
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 328);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 328);
                    echo "</label>
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"option[";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 330);
                    echo "]\"
                                                   value=\"";
                    // line 331
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 331);
                    echo "\" data-date-format=\"HH:mm\"
                                                   id=\"input-option";
                    // line 332
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 339
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "                        ";
        }
        // line 341
        echo "                        ";
        if (($context["recurrings"] ?? null)) {
            // line 342
            echo "                            <hr>
                            <h3>";
            // line 343
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                            <div class=\"form-group required\">
                                <select name=\"recurring_id\" class=\"form-control\">
                                    <option value=\"\">";
            // line 346
            echo ($context["text_select"] ?? null);
            echo "</option>
                                    ";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 348
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 348);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 348);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                                </select>
                                <div class=\"help-block\" id=\"recurring-description\"></div>
                            </div>
                        ";
        }
        // line 354
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-quantity\">";
        // line 355
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"quantity\" value=\"";
        // line 356
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                   class=\"form-control\"/>
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 358
        echo ($context["product_id"] ?? null);
        echo "\"/>
                            <br/>
                            <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 360
        echo ($context["text_loading"] ?? null);
        echo "\"
                                    class=\"btn btn-primary btn-lg btn-block\">";
        // line 361
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        </div>
                        ";
        // line 363
        if ((($context["minimum"] ?? null) > 1)) {
            // line 364
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 365
        echo "</div>
                    ";
        // line 366
        if (($context["review_status"] ?? null)) {
            // line 367
            echo "                        <div class=\"rating\">
                            <p>";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 369
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 370
                    echo "<span
                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 373
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 374
            echo ($context["reviews"] ?? null);
            echo "</a>
                                / <a href=\"\"
                                     onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 376
            echo ($context["text_write"] ?? null);
            echo "</a>
                            </p>
                            <hr>
                        </div>
                    ";
        }
        // line 380
        echo " </div>
            </div>
            ";
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
        echo "            ";
        // line 433
        echo "            ";
        // line 434
        echo "            ";
        // line 435
        echo "            ";
        // line 436
        echo "            ";
        // line 437
        echo "            ";
        // line 438
        echo "            ";
        // line 439
        echo "            ";
        // line 440
        echo "            ";
        // line 441
        echo "            ";
        // line 442
        echo "            ";
        // line 443
        echo "            ";
        // line 444
        echo "            ";
        // line 445
        echo "            ";
        // line 446
        echo "            ";
        // line 447
        echo "            ";
        // line 448
        echo "            ";
        // line 449
        echo "            ";
        // line 450
        echo "            ";
        // line 451
        echo "        </div>
    </div>
</div>
";
        // line 454
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
        return array (  1227 => 454,  1222 => 451,  1220 => 450,  1218 => 449,  1216 => 448,  1214 => 447,  1212 => 446,  1210 => 445,  1208 => 444,  1206 => 443,  1204 => 442,  1202 => 441,  1200 => 440,  1198 => 439,  1196 => 438,  1194 => 437,  1192 => 436,  1190 => 435,  1188 => 434,  1186 => 433,  1184 => 432,  1182 => 431,  1180 => 430,  1178 => 429,  1176 => 428,  1174 => 427,  1172 => 426,  1170 => 425,  1168 => 424,  1166 => 423,  1164 => 422,  1162 => 421,  1160 => 420,  1158 => 419,  1156 => 418,  1154 => 417,  1152 => 416,  1150 => 415,  1148 => 414,  1146 => 413,  1144 => 412,  1142 => 411,  1140 => 410,  1138 => 409,  1136 => 408,  1134 => 407,  1132 => 406,  1130 => 405,  1128 => 404,  1126 => 403,  1124 => 402,  1122 => 401,  1120 => 400,  1118 => 399,  1116 => 398,  1114 => 397,  1112 => 396,  1110 => 395,  1108 => 394,  1106 => 393,  1104 => 392,  1102 => 391,  1100 => 390,  1098 => 389,  1096 => 388,  1094 => 387,  1092 => 386,  1090 => 385,  1088 => 384,  1086 => 383,  1082 => 380,  1074 => 376,  1069 => 374,  1061 => 373,  1056 => 370,  1050 => 369,  1046 => 368,  1043 => 367,  1041 => 366,  1038 => 365,  1032 => 364,  1030 => 363,  1025 => 361,  1021 => 360,  1016 => 358,  1011 => 356,  1007 => 355,  1004 => 354,  998 => 350,  987 => 348,  983 => 347,  979 => 346,  973 => 343,  970 => 342,  967 => 341,  964 => 340,  958 => 339,  948 => 332,  944 => 331,  940 => 330,  933 => 328,  925 => 326,  922 => 325,  912 => 318,  908 => 317,  904 => 316,  897 => 314,  889 => 312,  886 => 311,  876 => 304,  872 => 303,  868 => 302,  861 => 300,  853 => 298,  850 => 297,  844 => 294,  840 => 293,  836 => 292,  831 => 290,  827 => 289,  823 => 288,  816 => 287,  813 => 286,  807 => 283,  803 => 282,  799 => 281,  795 => 280,  789 => 279,  781 => 277,  778 => 276,  771 => 272,  765 => 271,  761 => 270,  755 => 269,  747 => 267,  744 => 266,  739 => 263,  731 => 261,  724 => 260,  722 => 259,  717 => 258,  704 => 256,  700 => 255,  696 => 254,  692 => 253,  688 => 252,  683 => 249,  677 => 248,  673 => 247,  666 => 246,  663 => 245,  658 => 242,  650 => 240,  643 => 239,  641 => 238,  636 => 237,  623 => 235,  619 => 234,  615 => 233,  611 => 232,  607 => 231,  602 => 228,  596 => 227,  592 => 226,  585 => 225,  582 => 224,  577 => 221,  570 => 219,  563 => 218,  561 => 217,  554 => 216,  550 => 215,  546 => 214,  541 => 212,  537 => 211,  531 => 210,  523 => 208,  520 => 207,  516 => 206,  512 => 205,  509 => 204,  506 => 203,  502 => 201,  499 => 200,  488 => 198,  484 => 197,  479 => 194,  476 => 193,  468 => 191,  465 => 190,  457 => 188,  454 => 187,  448 => 184,  442 => 182,  436 => 179,  433 => 178,  431 => 177,  428 => 176,  426 => 175,  418 => 173,  410 => 171,  408 => 170,  401 => 169,  391 => 167,  389 => 166,  382 => 162,  378 => 161,  370 => 158,  360 => 151,  355 => 149,  351 => 148,  344 => 143,  339 => 140,  333 => 138,  326 => 134,  322 => 133,  315 => 129,  310 => 127,  297 => 117,  293 => 116,  285 => 111,  279 => 108,  268 => 100,  264 => 99,  260 => 97,  258 => 96,  254 => 95,  249 => 92,  246 => 91,  241 => 88,  234 => 86,  225 => 83,  221 => 82,  218 => 81,  214 => 80,  207 => 76,  203 => 74,  199 => 73,  195 => 71,  193 => 70,  189 => 69,  185 => 67,  179 => 65,  176 => 64,  170 => 62,  168 => 61,  164 => 60,  159 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  90 => 21,  84 => 20,  79 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
