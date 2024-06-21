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
class __TwigTemplate_10c05790c48bcab10c0d14fc3e71674c76f06b5d8539c9dcdc145741280043ee extends \Twig\Template
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
                <div class=\"";
        // line 147
        echo ($context["class"] ?? null);
        echo "\">
                    <div class=\"btn-group\">
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 150
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i
                                    class=\"fa fa-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 153
        echo ($context["button_compare"] ?? null);
        echo "\"
                                onclick=\"compare.add('";
        // line 154
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>
                    <h1>";
        // line 156
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <ul class=\"list-unstyled\">
                        ";
        // line 158
        if (($context["manufacturer"] ?? null)) {
            // line 159
            echo "                            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 161
        echo "                        <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
                        ";
        // line 162
        if (($context["reward"] ?? null)) {
            // line 163
            echo "                            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
                        ";
        }
        // line 165
        echo "                        <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
                    </ul>
                    ";
        // line 167
        if (($context["price"] ?? null)) {
            // line 168
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 169
            if ( !($context["special"] ?? null)) {
                // line 170
                echo "                                <li>
                                    <h2>";
                // line 171
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 174
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 176
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 179
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 180
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 182
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 183
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 185
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 186
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 190
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 190);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 190);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                echo "                            ";
            }
            // line 193
            echo "                        </ul>
                    ";
        }
        // line 195
        echo "                    <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 196
            echo "                            <hr>
                            <h3>";
            // line 197
            echo ($context["text_option"] ?? null);
            echo "</h3>
                            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 199
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "select")) {
                    // line 200
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "</label>
                                        <select name=\"option[";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\"
                                                id=\"input-option";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\"
                                                class=\"form-control\">
                                            <option value=\"\">";
                    // line 206
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                            ";
                    // line 207
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 207));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 208
                        echo "                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 208);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 208);
                        echo "
                                                    ";
                        // line 209
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209)) {
                            // line 210
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 210);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 210);
                            echo ")
                                                    ";
                        }
                        // line 211
                        echo " </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 213
                    echo "                                        </select>
                                    </div>
                                ";
                }
                // line 216
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 216) == "radio")) {
                    // line 217
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 217)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 218);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 219));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 220
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                        echo "]\"
                                                               value=\"";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 224);
                        echo "\"/>
                                                        ";
                        // line 225
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 225)) {
                            echo " <img
                                                                src=\"";
                            // line 226
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 226);
                            echo "\"
                                                                alt=\"";
                            // line 227
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 227);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 227)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 227);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 227);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 229
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 229);
                        echo "
                                                        ";
                        // line 230
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 230)) {
                            // line 231
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 231);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 231);
                            echo ")
                                                        ";
                        }
                        // line 232
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 234
                    echo " </div>
                                    </div>
                                ";
                }
                // line 237
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 237) == "checkbox")) {
                    // line 238
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 238)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 239);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 240));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 241
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"option[";
                        // line 244
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 244);
                        echo "][]\"
                                                               value=\"";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 245);
                        echo "\"/>
                                                        ";
                        // line 246
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 246)) {
                            echo " <img
                                                                src=\"";
                            // line 247
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 247);
                            echo "\"
                                                                alt=\"";
                            // line 248
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 248);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 248);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 250
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 250);
                        echo "
                                                        ";
                        // line 251
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 251)) {
                            // line 252
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 252);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 252);
                            echo ")
                                                        ";
                        }
                        // line 253
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo " </div>
                                    </div>
                                ";
                }
                // line 258
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 258) == "text")) {
                    // line 259
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 259)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 261);
                    echo "</label>
                                        <input type=\"text\" name=\"option[";
                    // line 262
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
                    echo "]\"
                                               value=\"";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 263);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 263);
                    echo "\"
                                               id=\"input-option";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 264);
                    echo "\"
                                               class=\"form-control\"/>
                                    </div>
                                ";
                }
                // line 268
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 268) == "textarea")) {
                    // line 269
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 269)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 271);
                    echo "</label>
                                        <textarea name=\"option[";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "]\" rows=\"5\"
                                                  placeholder=\"";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 273);
                    echo "\"
                                                  id=\"input-option";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    echo "\"
                                                  class=\"form-control\">";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 275);
                    echo "</textarea>
                                    </div>
                                ";
                }
                // line 278
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 278) == "file")) {
                    // line 279
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 279)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 280);
                    echo "</label>
                                        <button type=\"button\" id=\"button-upload";
                    // line 281
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 281);
                    echo "\"
                                                data-loading-text=\"";
                    // line 282
                    echo ($context["text_loading"] ?? null);
                    echo "\"
                                                class=\"btn btn-default btn-block\"><i
                                                    class=\"fa fa-upload\"></i> ";
                    // line 284
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                        <input type=\"hidden\" name=\"option[";
                    // line 285
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
                    echo "]\" value=\"\"
                                               id=\"input-option";
                    // line 286
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 286);
                    echo "\"/>
                                    </div>
                                ";
                }
                // line 289
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 289) == "date")) {
                    // line 290
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 290)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 292);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 292);
                    echo "</label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"option[";
                    // line 294
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 294);
                    echo "]\"
                                                   value=\"";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 295);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                   id=\"input-option";
                    // line 296
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 303
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 303) == "datetime")) {
                    // line 304
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 304)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 306);
                    echo "</label>
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"option[";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                    echo "]\"
                                                   value=\"";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 309);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                   id=\"input-option";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 317
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 317) == "time")) {
                    // line 318
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 318)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 320);
                    echo "</label>
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"option[";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 322);
                    echo "]\"
                                                   value=\"";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 323);
                    echo "\" data-date-format=\"HH:mm\"
                                                   id=\"input-option";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 324);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 331
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "                        ";
        }
        // line 333
        echo "                        ";
        if (($context["recurrings"] ?? null)) {
            // line 334
            echo "                            <hr>
                            <h3>";
            // line 335
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                            <div class=\"form-group required\">
                                <select name=\"recurring_id\" class=\"form-control\">
                                    <option value=\"\">";
            // line 338
            echo ($context["text_select"] ?? null);
            echo "</option>
                                    ";
            // line 339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 340
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 340);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 340);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            echo "                                </select>
                                <div class=\"help-block\" id=\"recurring-description\"></div>
                            </div>
                        ";
        }
        // line 346
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-quantity\">";
        // line 347
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"quantity\" value=\"";
        // line 348
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                   class=\"form-control\"/>
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 350
        echo ($context["product_id"] ?? null);
        echo "\"/>
                            <br/>
                            <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 352
        echo ($context["text_loading"] ?? null);
        echo "\"
                                    class=\"btn btn-primary btn-lg btn-block\">";
        // line 353
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        </div>
                        ";
        // line 355
        if ((($context["minimum"] ?? null) > 1)) {
            // line 356
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 357
        echo "</div>
                    ";
        // line 358
        if (($context["review_status"] ?? null)) {
            // line 359
            echo "                        <div class=\"rating\">
                            <p>";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 361
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 362
                    echo "<span
                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 365
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 366
            echo ($context["reviews"] ?? null);
            echo "</a>
                                / <a href=\"\"
                                     onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 368
            echo ($context["text_write"] ?? null);
            echo "</a>
                            </p>
                            <hr>
                        </div>
                    ";
        }
        // line 372
        echo " </div>
            </div>
            ";
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
        echo "        </div>
    </div>
</div>
";
        // line 446
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
        return array (  1216 => 446,  1211 => 443,  1209 => 442,  1207 => 441,  1205 => 440,  1203 => 439,  1201 => 438,  1199 => 437,  1197 => 436,  1195 => 435,  1193 => 434,  1191 => 433,  1189 => 432,  1187 => 431,  1185 => 430,  1183 => 429,  1181 => 428,  1179 => 427,  1177 => 426,  1175 => 425,  1173 => 424,  1171 => 423,  1169 => 422,  1167 => 421,  1165 => 420,  1163 => 419,  1161 => 418,  1159 => 417,  1157 => 416,  1155 => 415,  1153 => 414,  1151 => 413,  1149 => 412,  1147 => 411,  1145 => 410,  1143 => 409,  1141 => 408,  1139 => 407,  1137 => 406,  1135 => 405,  1133 => 404,  1131 => 403,  1129 => 402,  1127 => 401,  1125 => 400,  1123 => 399,  1121 => 398,  1119 => 397,  1117 => 396,  1115 => 395,  1113 => 394,  1111 => 393,  1109 => 392,  1107 => 391,  1105 => 390,  1103 => 389,  1101 => 388,  1099 => 387,  1097 => 386,  1095 => 385,  1093 => 384,  1091 => 383,  1089 => 382,  1087 => 381,  1085 => 380,  1083 => 379,  1081 => 378,  1079 => 377,  1077 => 376,  1075 => 375,  1071 => 372,  1063 => 368,  1058 => 366,  1050 => 365,  1045 => 362,  1039 => 361,  1035 => 360,  1032 => 359,  1030 => 358,  1027 => 357,  1021 => 356,  1019 => 355,  1014 => 353,  1010 => 352,  1005 => 350,  1000 => 348,  996 => 347,  993 => 346,  987 => 342,  976 => 340,  972 => 339,  968 => 338,  962 => 335,  959 => 334,  956 => 333,  953 => 332,  947 => 331,  937 => 324,  933 => 323,  929 => 322,  922 => 320,  914 => 318,  911 => 317,  901 => 310,  897 => 309,  893 => 308,  886 => 306,  878 => 304,  875 => 303,  865 => 296,  861 => 295,  857 => 294,  850 => 292,  842 => 290,  839 => 289,  833 => 286,  829 => 285,  825 => 284,  820 => 282,  816 => 281,  812 => 280,  805 => 279,  802 => 278,  796 => 275,  792 => 274,  788 => 273,  784 => 272,  778 => 271,  770 => 269,  767 => 268,  760 => 264,  754 => 263,  750 => 262,  744 => 261,  736 => 259,  733 => 258,  728 => 255,  720 => 253,  713 => 252,  711 => 251,  706 => 250,  693 => 248,  689 => 247,  685 => 246,  681 => 245,  677 => 244,  672 => 241,  666 => 240,  662 => 239,  655 => 238,  652 => 237,  647 => 234,  639 => 232,  632 => 231,  630 => 230,  625 => 229,  612 => 227,  608 => 226,  604 => 225,  600 => 224,  596 => 223,  591 => 220,  585 => 219,  581 => 218,  574 => 217,  571 => 216,  566 => 213,  559 => 211,  552 => 210,  550 => 209,  543 => 208,  539 => 207,  535 => 206,  530 => 204,  526 => 203,  520 => 202,  512 => 200,  509 => 199,  505 => 198,  501 => 197,  498 => 196,  495 => 195,  491 => 193,  488 => 192,  477 => 190,  473 => 189,  468 => 186,  465 => 185,  457 => 183,  454 => 182,  446 => 180,  443 => 179,  437 => 176,  431 => 174,  425 => 171,  422 => 170,  420 => 169,  417 => 168,  415 => 167,  407 => 165,  399 => 163,  397 => 162,  390 => 161,  380 => 159,  378 => 158,  373 => 156,  368 => 154,  364 => 153,  356 => 150,  350 => 147,  344 => 143,  339 => 140,  333 => 138,  326 => 134,  322 => 133,  315 => 129,  310 => 127,  297 => 117,  293 => 116,  285 => 111,  279 => 108,  268 => 100,  264 => 99,  260 => 97,  258 => 96,  254 => 95,  249 => 92,  246 => 91,  241 => 88,  234 => 86,  225 => 83,  221 => 82,  218 => 81,  214 => 80,  207 => 76,  203 => 74,  199 => 73,  195 => 71,  193 => 70,  189 => 69,  185 => 67,  179 => 65,  176 => 64,  170 => 62,  168 => 61,  164 => 60,  159 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  90 => 21,  84 => 20,  79 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
