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
class __TwigTemplate_6bd3ac94b0da6d0629679eea6793435ded64aee0bcde6ec04af314db71a7ae86 extends \Twig\Template
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
                <div class=\"product-right__options\">
                    ";
        // line 156
        if (($context["options"] ?? null)) {
            // line 157
            echo "                        <h3>";
            echo ($context["text_option"] ?? null);
            echo "</h3>
                        ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 159
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "select")) {
                    // line 160
                    echo "                                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
                                    <label class=\"control-label\"
                                           for=\"input-option";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    echo "</label>
                                    <select name=\"option[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "]\"
                                            id=\"input-option";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\"
                                            class=\"form-control\">
                                        <option value=\"\">";
                    // line 166
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                        ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 168
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 168);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                        echo "
                                                ";
                        // line 169
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 169)) {
                            // line 170
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 170);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 170);
                            echo ")
                                                ";
                        }
                        // line 171
                        echo " </option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "                                    </select>
                                </div>
                            ";
                }
                // line 176
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 176) == "radio")) {
                    // line 177
                    echo "                                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 177)) {
                        echo " required ";
                    }
                    echo "\">
                                    <label class=\"control-label\">";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                    echo "</label>
                                    <div id=\"input-option";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 179));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 180
                        echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\"
                                                           name=\"option[";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                        echo "]\"
                                                           value=\"";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 184);
                        echo "\"/>
                                                    ";
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 185)) {
                            echo " <img
                                                            src=\"";
                            // line 186
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 186);
                            echo "\"
                                                            alt=\"";
                            // line 187
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 187);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                                echo " ";
                            }
                            echo "\"
                                                            class=\"img-thumbnail\"/> ";
                        }
                        // line 189
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 189);
                        echo "
                                                    ";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190)) {
                            // line 191
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 191);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 191);
                            echo ")
                                                    ";
                        }
                        // line 192
                        echo " </label>
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    echo " </div>
                                </div>
                            ";
                }
                // line 197
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 197) == "checkbox")) {
                    // line 198
                    echo "                                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 198)) {
                        echo " required ";
                    }
                    echo "\">
                                    <label class=\"control-label\">";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo "</label>
                                    <div id=\"input-option";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 200));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 201
                        echo "                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\"
                                                           name=\"option[";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                        echo "][]\"
                                                           value=\"";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 205);
                        echo "\"/>
                                                    ";
                        // line 206
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 206)) {
                            echo " <img
                                                            src=\"";
                            // line 207
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 207);
                            echo "\"
                                                            alt=\"";
                            // line 208
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 208);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 208);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208);
                                echo " ";
                            }
                            echo "\"
                                                            class=\"img-thumbnail\"/> ";
                        }
                        // line 210
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 210);
                        echo "
                                                    ";
                        // line 211
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 211)) {
                            // line 212
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 212);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 212);
                            echo ")
                                                    ";
                        }
                        // line 213
                        echo " </label>
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    echo " </div>
                                </div>
                            ";
                }
                // line 218
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                    ";
        }
        // line 220
        echo "                </div>
                <div class=\"btn-group\">
                    <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                            title=\"";
        // line 223
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i
                                class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                            title=\"";
        // line 226
        echo ($context["button_compare"] ?? null);
        echo "\"
                            onclick=\"compare.add('";
        // line 227
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
                </div>

                <ul class=\"list-unstyled\">
                    ";
        // line 231
        if (($context["manufacturer"] ?? null)) {
            // line 232
            echo "                        <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 234
        echo "                    <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
                    ";
        // line 235
        if (($context["reward"] ?? null)) {
            // line 236
            echo "                        <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
                    ";
        }
        // line 238
        echo "                    <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
                </ul>
                ";
        // line 240
        if (($context["price"] ?? null)) {
            // line 241
            echo "                    <ul class=\"list-unstyled\">
                        ";
            // line 242
            if ( !($context["special"] ?? null)) {
                // line 243
                echo "                            <li>
                                <h2>";
                // line 244
                echo ($context["price"] ?? null);
                echo "</h2>
                            </li>
                        ";
            } else {
                // line 247
                echo "                            <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                            <li>
                                <h2>";
                // line 249
                echo ($context["special"] ?? null);
                echo "</h2>
                            </li>
                        ";
            }
            // line 252
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 253
                echo "                            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                        ";
            }
            // line 255
            echo "                        ";
            if (($context["points"] ?? null)) {
                // line 256
                echo "                            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                        ";
            }
            // line 258
            echo "                        ";
            if (($context["discounts"] ?? null)) {
                // line 259
                echo "                            <li>
                                <hr>
                            </li>
                            ";
                // line 262
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 263
                    echo "                                <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 263);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 263);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 265
                echo "                        ";
            }
            // line 266
            echo "                    </ul>
                ";
        }
        // line 268
        echo "                <div id=\"product\">
                    ";
        // line 269
        if (($context["recurrings"] ?? null)) {
            // line 270
            echo "                        <hr>
                        <h3>";
            // line 271
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                        <div class=\"form-group required\">
                            <select name=\"recurring_id\" class=\"form-control\">
                                <option value=\"\">";
            // line 274
            echo ($context["text_select"] ?? null);
            echo "</option>
                                ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 276
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 276);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 276);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "                            </select>
                            <div class=\"help-block\" id=\"recurring-description\"></div>
                        </div>
                    ";
        }
        // line 282
        echo "                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"input-quantity\">";
        // line 283
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                        <input type=\"text\" name=\"quantity\" value=\"";
        // line 284
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                               class=\"form-control\"/>
                        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 286
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        <br/>
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 288
        echo ($context["text_loading"] ?? null);
        echo "\"
                                class=\"btn btn-primary btn-lg btn-block\">";
        // line 289
        echo ($context["button_cart"] ?? null);
        echo "</button>
                    </div>
                    ";
        // line 291
        if ((($context["minimum"] ?? null) > 1)) {
            // line 292
            echo "                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                    ";
        }
        // line 293
        echo "</div>
                ";
        // line 294
        if (($context["review_status"] ?? null)) {
            // line 295
            echo "                    <div class=\"rating\">
                        <p>";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 297
                echo "                                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                            class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 298
                    echo "<span
                                        class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                            class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 301
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                            onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 302
            echo ($context["reviews"] ?? null);
            echo "</a>
                            / <a href=\"\"
                                 onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 304
            echo ($context["text_write"] ?? null);
            echo "</a>
                        </p>
                        <hr>
                    </div>
                ";
        }
        // line 308
        echo " </div>
        </div>
        ";
        // line 311
        echo "        ";
        // line 312
        echo "        ";
        // line 313
        echo "        ";
        // line 314
        echo "        ";
        // line 315
        echo "        ";
        // line 316
        echo "        ";
        // line 317
        echo "        ";
        // line 318
        echo "        ";
        // line 319
        echo "        ";
        // line 320
        echo "        ";
        // line 321
        echo "        ";
        // line 322
        echo "        ";
        // line 323
        echo "        ";
        // line 324
        echo "        ";
        // line 325
        echo "        ";
        // line 326
        echo "        ";
        // line 327
        echo "        ";
        // line 328
        echo "        ";
        // line 329
        echo "        ";
        // line 330
        echo "        ";
        // line 331
        echo "        ";
        // line 332
        echo "        ";
        // line 333
        echo "        ";
        // line 334
        echo "        ";
        // line 335
        echo "        ";
        // line 336
        echo "        ";
        // line 337
        echo "        ";
        // line 338
        echo "        ";
        // line 339
        echo "        ";
        // line 340
        echo "        ";
        // line 341
        echo "        ";
        // line 342
        echo "        ";
        // line 343
        echo "        ";
        // line 344
        echo "        ";
        // line 345
        echo "        ";
        // line 346
        echo "        ";
        // line 347
        echo "        ";
        // line 348
        echo "        ";
        // line 349
        echo "        ";
        // line 350
        echo "        ";
        // line 351
        echo "        ";
        // line 352
        echo "        ";
        // line 353
        echo "        ";
        // line 354
        echo "        ";
        // line 355
        echo "        ";
        // line 356
        echo "        ";
        // line 357
        echo "        ";
        // line 358
        echo "        ";
        // line 359
        echo "        ";
        // line 360
        echo "        ";
        // line 361
        echo "        ";
        // line 362
        echo "        ";
        // line 363
        echo "        ";
        // line 364
        echo "        ";
        // line 365
        echo "        ";
        // line 366
        echo "        ";
        // line 367
        echo "        ";
        // line 368
        echo "        ";
        // line 369
        echo "        ";
        // line 370
        echo "        ";
        // line 371
        echo "        ";
        // line 372
        echo "        ";
        // line 373
        echo "        ";
        // line 374
        echo "        ";
        // line 375
        echo "        ";
        // line 376
        echo "        ";
        // line 377
        echo "        ";
        // line 378
        echo "        ";
        // line 379
        echo "    </div>
</div>
</div>
";
        // line 382
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
        return array (  1015 => 382,  1010 => 379,  1008 => 378,  1006 => 377,  1004 => 376,  1002 => 375,  1000 => 374,  998 => 373,  996 => 372,  994 => 371,  992 => 370,  990 => 369,  988 => 368,  986 => 367,  984 => 366,  982 => 365,  980 => 364,  978 => 363,  976 => 362,  974 => 361,  972 => 360,  970 => 359,  968 => 358,  966 => 357,  964 => 356,  962 => 355,  960 => 354,  958 => 353,  956 => 352,  954 => 351,  952 => 350,  950 => 349,  948 => 348,  946 => 347,  944 => 346,  942 => 345,  940 => 344,  938 => 343,  936 => 342,  934 => 341,  932 => 340,  930 => 339,  928 => 338,  926 => 337,  924 => 336,  922 => 335,  920 => 334,  918 => 333,  916 => 332,  914 => 331,  912 => 330,  910 => 329,  908 => 328,  906 => 327,  904 => 326,  902 => 325,  900 => 324,  898 => 323,  896 => 322,  894 => 321,  892 => 320,  890 => 319,  888 => 318,  886 => 317,  884 => 316,  882 => 315,  880 => 314,  878 => 313,  876 => 312,  874 => 311,  870 => 308,  862 => 304,  857 => 302,  849 => 301,  844 => 298,  838 => 297,  834 => 296,  831 => 295,  829 => 294,  826 => 293,  820 => 292,  818 => 291,  813 => 289,  809 => 288,  804 => 286,  799 => 284,  795 => 283,  792 => 282,  786 => 278,  775 => 276,  771 => 275,  767 => 274,  761 => 271,  758 => 270,  756 => 269,  753 => 268,  749 => 266,  746 => 265,  735 => 263,  731 => 262,  726 => 259,  723 => 258,  715 => 256,  712 => 255,  704 => 253,  701 => 252,  695 => 249,  689 => 247,  683 => 244,  680 => 243,  678 => 242,  675 => 241,  673 => 240,  665 => 238,  657 => 236,  655 => 235,  648 => 234,  638 => 232,  636 => 231,  629 => 227,  625 => 226,  617 => 223,  612 => 220,  609 => 219,  603 => 218,  598 => 215,  590 => 213,  583 => 212,  581 => 211,  576 => 210,  563 => 208,  559 => 207,  555 => 206,  551 => 205,  547 => 204,  542 => 201,  536 => 200,  532 => 199,  525 => 198,  522 => 197,  517 => 194,  509 => 192,  502 => 191,  500 => 190,  495 => 189,  482 => 187,  478 => 186,  474 => 185,  470 => 184,  466 => 183,  461 => 180,  455 => 179,  451 => 178,  444 => 177,  441 => 176,  436 => 173,  429 => 171,  422 => 170,  420 => 169,  413 => 168,  409 => 167,  405 => 166,  400 => 164,  396 => 163,  390 => 162,  382 => 160,  379 => 159,  375 => 158,  370 => 157,  368 => 156,  360 => 151,  355 => 149,  351 => 148,  344 => 143,  339 => 140,  333 => 138,  326 => 134,  322 => 133,  315 => 129,  310 => 127,  297 => 117,  293 => 116,  285 => 111,  279 => 108,  268 => 100,  264 => 99,  260 => 97,  258 => 96,  254 => 95,  249 => 92,  246 => 91,  241 => 88,  234 => 86,  225 => 83,  221 => 82,  218 => 81,  214 => 80,  207 => 76,  203 => 74,  199 => 73,  195 => 71,  193 => 70,  189 => 69,  185 => 67,  179 => 65,  176 => 64,  170 => 62,  168 => 61,  164 => 60,  159 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  128 => 42,  126 => 41,  124 => 40,  122 => 39,  120 => 38,  118 => 37,  116 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  90 => 21,  84 => 20,  79 => 18,  72 => 16,  69 => 15,  67 => 14,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
