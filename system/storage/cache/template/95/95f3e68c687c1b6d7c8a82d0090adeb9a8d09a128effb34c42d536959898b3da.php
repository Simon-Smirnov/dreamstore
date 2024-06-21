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
class __TwigTemplate_4a3a30481adea04f670c1f76c562035a32846099ddd87a8498e83d81410cc22c extends \Twig\Template
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
                                ";
            // line 18
            echo "                                ";
            // line 19
            echo "                                ";
            // line 20
            echo "                                <picture>
                                    <source srcset=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "webp", [], "any", false, false, false, 21);
            echo "\">
                                    <img class=\"product-images__image\"
                                         src=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["thumb"] ?? null), "default", [], "any", false, false, false, 23);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
                                         title=\"";
            // line 24
            echo ($context["heading_title"] ?? null);
            echo "\"
                                         loading=\"lazy\"/>
                                </picture>
                            </a>
                        </div>
                        ";
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
            echo "                        ";
            // line 57
            echo "                        ";
            // line 58
            echo "                        ";
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                </div>
                <div class=\"product-tabs\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 63
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
                        ";
        // line 64
        if (($context["attribute_groups"] ?? null)) {
            // line 65
            echo "                            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 67
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 68
            echo "                            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 70
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 72
        echo ($context["description"] ?? null);
        echo "</div>
                        ";
        // line 73
        if (($context["attribute_groups"] ?? null)) {
            // line 74
            echo "                            <div class=\"tab-pane\" id=\"tab-specification\">
                                <table class=\"table table-bordered\">
                                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 77
                echo "                                        <thead>
                                        <tr>
                                            <td colspan=\"2\"><strong>";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 79);
                echo "</strong></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 84
                    echo "                                            <tr>
                                                <td>";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 85);
                    echo "</td>
                                                <td>";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 86);
                    echo "</td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                        </tbody>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                                </table>
                            </div>
                        ";
        }
        // line 94
        echo "                        ";
        if (($context["review_status"] ?? null)) {
            // line 95
            echo "                            <div class=\"tab-pane\" id=\"tab-review\">
                                <form class=\"form-horizontal\" id=\"form-review\">
                                    <div id=\"review\"></div>
                                    <h2>";
            // line 98
            echo ($context["text_write"] ?? null);
            echo "</h2>
                                    ";
            // line 99
            if (($context["review_guest"] ?? null)) {
                // line 100
                echo "                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\" for=\"input-name\">";
                // line 102
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                                <input type=\"text\" name=\"name\" value=\"";
                // line 103
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
                // line 111
                echo ($context["entry_review"] ?? null);
                echo "</label>
                                                <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                          class=\"form-control\"></textarea>
                                                <div class=\"help-block\">";
                // line 114
                echo ($context["text_note"] ?? null);
                echo "</div>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <div class=\"col-sm-12\">
                                                <label class=\"control-label\">";
                // line 119
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                                                &nbsp;&nbsp;&nbsp; ";
                // line 120
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
                // line 130
                echo ($context["entry_good"] ?? null);
                echo "</div>
                                        </div>
                                        ";
                // line 132
                echo ($context["captcha"] ?? null);
                echo "
                                        <div class=\"buttons clearfix\">
                                            <div class=\"pull-right\">
                                                <button type=\"button\" id=\"button-review\"
                                                        data-loading-text=\"";
                // line 136
                echo ($context["text_loading"] ?? null);
                echo "\"
                                                        class=\"btn btn-primary\">";
                // line 137
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 141
                echo "                                        ";
                echo ($context["text_login"] ?? null);
                echo "
                                    ";
            }
            // line 143
            echo "                                </form>
                            </div>
                        ";
        }
        // line 146
        echo "                    </div>
                </div>
            </div>
            <div class=\"product-right\">
                <div class=\"";
        // line 150
        echo ($context["class"] ?? null);
        echo "\">
                    <div class=\"btn-group\">
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 153
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i
                                    class=\"fa fa-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 156
        echo ($context["button_compare"] ?? null);
        echo "\"
                                onclick=\"compare.add('";
        // line 157
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>
                    <h1>";
        // line 159
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <ul class=\"list-unstyled\">
                        ";
        // line 161
        if (($context["manufacturer"] ?? null)) {
            // line 162
            echo "                            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 164
        echo "                        <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
                        ";
        // line 165
        if (($context["reward"] ?? null)) {
            // line 166
            echo "                            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
                        ";
        }
        // line 168
        echo "                        <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
                    </ul>
                    ";
        // line 170
        if (($context["price"] ?? null)) {
            // line 171
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 172
            if ( !($context["special"] ?? null)) {
                // line 173
                echo "                                <li>
                                    <h2>";
                // line 174
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 177
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 179
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 182
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 183
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 185
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 186
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 188
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 189
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 193
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 193);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 193);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "                            ";
            }
            // line 196
            echo "                        </ul>
                    ";
        }
        // line 198
        echo "                    <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 199
            echo "                            <hr>
                            <h3>";
            // line 200
            echo ($context["text_option"] ?? null);
            echo "</h3>
                            ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 202
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 202) == "select")) {
                    // line 203
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 205);
                    echo "</label>
                                        <select name=\"option[";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "]\"
                                                id=\"input-option";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\"
                                                class=\"form-control\">
                                            <option value=\"\">";
                    // line 209
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                            ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 210));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 211
                        echo "                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 211);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 211);
                        echo "
                                                    ";
                        // line 212
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 212)) {
                            // line 213
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 213);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 213);
                            echo ")
                                                    ";
                        }
                        // line 214
                        echo " </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "                                        </select>
                                    </div>
                                ";
                }
                // line 219
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 219) == "radio")) {
                    // line 220
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 220)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 221);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 222));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 223
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 226
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                        echo "]\"
                                                               value=\"";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 227);
                        echo "\"/>
                                                        ";
                        // line 228
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 228)) {
                            echo " <img
                                                                src=\"";
                            // line 229
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 229);
                            echo "\"
                                                                alt=\"";
                            // line 230
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 230);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 230)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 230);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 230);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 232
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 232);
                        echo "
                                                        ";
                        // line 233
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 233)) {
                            // line 234
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 234);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234);
                            echo ")
                                                        ";
                        }
                        // line 235
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    echo " </div>
                                    </div>
                                ";
                }
                // line 240
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 240) == "checkbox")) {
                    // line 241
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 241)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 242);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 243));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 244
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"option[";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                        echo "][]\"
                                                               value=\"";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 248);
                        echo "\"/>
                                                        ";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 249)) {
                            echo " <img
                                                                src=\"";
                            // line 250
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 250);
                            echo "\"
                                                                alt=\"";
                            // line 251
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 251);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 251)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 251);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 251);
                                echo " ";
                            }
                            echo "\"
                                                                class=\"img-thumbnail\"/> ";
                        }
                        // line 253
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 253);
                        echo "
                                                        ";
                        // line 254
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 254)) {
                            // line 255
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 255);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 255);
                            echo ")
                                                        ";
                        }
                        // line 256
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 258
                    echo " </div>
                                    </div>
                                ";
                }
                // line 261
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "text")) {
                    // line 262
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 262)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 264);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 264);
                    echo "</label>
                                        <input type=\"text\" name=\"option[";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    echo "]\"
                                               value=\"";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 266);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 266);
                    echo "\"
                                               id=\"input-option";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    echo "\"
                                               class=\"form-control\"/>
                                    </div>
                                ";
                }
                // line 271
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 271) == "textarea")) {
                    // line 272
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 272)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 274);
                    echo "</label>
                                        <textarea name=\"option[";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 275);
                    echo "]\" rows=\"5\"
                                                  placeholder=\"";
                    // line 276
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 276);
                    echo "\"
                                                  id=\"input-option";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 277);
                    echo "\"
                                                  class=\"form-control\">";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 278);
                    echo "</textarea>
                                    </div>
                                ";
                }
                // line 281
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 281) == "file")) {
                    // line 282
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 282)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 283);
                    echo "</label>
                                        <button type=\"button\" id=\"button-upload";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 284);
                    echo "\"
                                                data-loading-text=\"";
                    // line 285
                    echo ($context["text_loading"] ?? null);
                    echo "\"
                                                class=\"btn btn-default btn-block\"><i
                                                    class=\"fa fa-upload\"></i> ";
                    // line 287
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                        <input type=\"hidden\" name=\"option[";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 288);
                    echo "]\" value=\"\"
                                               id=\"input-option";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                    echo "\"/>
                                    </div>
                                ";
                }
                // line 292
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 292) == "date")) {
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
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"option[";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    echo "]\"
                                                   value=\"";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 298);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                   id=\"input-option";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 306
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 306) == "datetime")) {
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
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"option[";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 311);
                    echo "]\"
                                                   value=\"";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 312);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
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
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 320) == "time")) {
                    // line 321
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 321)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 323);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 323);
                    echo "</label>
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"option[";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 325);
                    echo "]\"
                                                   value=\"";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 326);
                    echo "\" data-date-format=\"HH:mm\"
                                                   id=\"input-option";
                    // line 327
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 327);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 334
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                        ";
        }
        // line 336
        echo "                        ";
        if (($context["recurrings"] ?? null)) {
            // line 337
            echo "                            <hr>
                            <h3>";
            // line 338
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                            <div class=\"form-group required\">
                                <select name=\"recurring_id\" class=\"form-control\">
                                    <option value=\"\">";
            // line 341
            echo ($context["text_select"] ?? null);
            echo "</option>
                                    ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 343
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 343);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 343);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "                                </select>
                                <div class=\"help-block\" id=\"recurring-description\"></div>
                            </div>
                        ";
        }
        // line 349
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-quantity\">";
        // line 350
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"quantity\" value=\"";
        // line 351
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                   class=\"form-control\"/>
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 353
        echo ($context["product_id"] ?? null);
        echo "\"/>
                            <br/>
                            <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 355
        echo ($context["text_loading"] ?? null);
        echo "\"
                                    class=\"btn btn-primary btn-lg btn-block\">";
        // line 356
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        </div>
                        ";
        // line 358
        if ((($context["minimum"] ?? null) > 1)) {
            // line 359
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 360
        echo "</div>
                    ";
        // line 361
        if (($context["review_status"] ?? null)) {
            // line 362
            echo "                        <div class=\"rating\">
                            <p>";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 364
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 365
                    echo "<span
                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 368
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 369
            echo ($context["reviews"] ?? null);
            echo "</a>
                                / <a href=\"\"
                                     onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 371
            echo ($context["text_write"] ?? null);
            echo "</a>
                            </p>
                            <hr>
                        </div>
                    ";
        }
        // line 375
        echo " </div>
            </div>
            ";
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
        echo "            ";
        // line 444
        echo "            ";
        // line 445
        echo "            ";
        // line 446
        echo "        </div>
    </div>
</div>
";
        // line 449
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
        return array (  1222 => 449,  1217 => 446,  1215 => 445,  1213 => 444,  1211 => 443,  1209 => 442,  1207 => 441,  1205 => 440,  1203 => 439,  1201 => 438,  1199 => 437,  1197 => 436,  1195 => 435,  1193 => 434,  1191 => 433,  1189 => 432,  1187 => 431,  1185 => 430,  1183 => 429,  1181 => 428,  1179 => 427,  1177 => 426,  1175 => 425,  1173 => 424,  1171 => 423,  1169 => 422,  1167 => 421,  1165 => 420,  1163 => 419,  1161 => 418,  1159 => 417,  1157 => 416,  1155 => 415,  1153 => 414,  1151 => 413,  1149 => 412,  1147 => 411,  1145 => 410,  1143 => 409,  1141 => 408,  1139 => 407,  1137 => 406,  1135 => 405,  1133 => 404,  1131 => 403,  1129 => 402,  1127 => 401,  1125 => 400,  1123 => 399,  1121 => 398,  1119 => 397,  1117 => 396,  1115 => 395,  1113 => 394,  1111 => 393,  1109 => 392,  1107 => 391,  1105 => 390,  1103 => 389,  1101 => 388,  1099 => 387,  1097 => 386,  1095 => 385,  1093 => 384,  1091 => 383,  1089 => 382,  1087 => 381,  1085 => 380,  1083 => 379,  1081 => 378,  1077 => 375,  1069 => 371,  1064 => 369,  1056 => 368,  1051 => 365,  1045 => 364,  1041 => 363,  1038 => 362,  1036 => 361,  1033 => 360,  1027 => 359,  1025 => 358,  1020 => 356,  1016 => 355,  1011 => 353,  1006 => 351,  1002 => 350,  999 => 349,  993 => 345,  982 => 343,  978 => 342,  974 => 341,  968 => 338,  965 => 337,  962 => 336,  959 => 335,  953 => 334,  943 => 327,  939 => 326,  935 => 325,  928 => 323,  920 => 321,  917 => 320,  907 => 313,  903 => 312,  899 => 311,  892 => 309,  884 => 307,  881 => 306,  871 => 299,  867 => 298,  863 => 297,  856 => 295,  848 => 293,  845 => 292,  839 => 289,  835 => 288,  831 => 287,  826 => 285,  822 => 284,  818 => 283,  811 => 282,  808 => 281,  802 => 278,  798 => 277,  794 => 276,  790 => 275,  784 => 274,  776 => 272,  773 => 271,  766 => 267,  760 => 266,  756 => 265,  750 => 264,  742 => 262,  739 => 261,  734 => 258,  726 => 256,  719 => 255,  717 => 254,  712 => 253,  699 => 251,  695 => 250,  691 => 249,  687 => 248,  683 => 247,  678 => 244,  672 => 243,  668 => 242,  661 => 241,  658 => 240,  653 => 237,  645 => 235,  638 => 234,  636 => 233,  631 => 232,  618 => 230,  614 => 229,  610 => 228,  606 => 227,  602 => 226,  597 => 223,  591 => 222,  587 => 221,  580 => 220,  577 => 219,  572 => 216,  565 => 214,  558 => 213,  556 => 212,  549 => 211,  545 => 210,  541 => 209,  536 => 207,  532 => 206,  526 => 205,  518 => 203,  515 => 202,  511 => 201,  507 => 200,  504 => 199,  501 => 198,  497 => 196,  494 => 195,  483 => 193,  479 => 192,  474 => 189,  471 => 188,  463 => 186,  460 => 185,  452 => 183,  449 => 182,  443 => 179,  437 => 177,  431 => 174,  428 => 173,  426 => 172,  423 => 171,  421 => 170,  413 => 168,  405 => 166,  403 => 165,  396 => 164,  386 => 162,  384 => 161,  379 => 159,  374 => 157,  370 => 156,  362 => 153,  356 => 150,  350 => 146,  345 => 143,  339 => 141,  332 => 137,  328 => 136,  321 => 132,  316 => 130,  303 => 120,  299 => 119,  291 => 114,  285 => 111,  274 => 103,  270 => 102,  266 => 100,  264 => 99,  260 => 98,  255 => 95,  252 => 94,  247 => 91,  240 => 89,  231 => 86,  227 => 85,  224 => 84,  220 => 83,  213 => 79,  209 => 77,  205 => 76,  201 => 74,  199 => 73,  195 => 72,  191 => 70,  185 => 68,  182 => 67,  176 => 65,  174 => 64,  170 => 63,  165 => 60,  162 => 59,  160 => 58,  158 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  96 => 24,  90 => 23,  85 => 21,  82 => 20,  80 => 19,  78 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
