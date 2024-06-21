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
class __TwigTemplate_d6b8c1e824271b4de4920002d647a486bf87150b0f51ef59aaa14a7d8ad9dd1e extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <div class=\"row\"> ";
        // line 17
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "                ";
        } else {
            // line 20
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "                ";
        }
        // line 22
        echo "                <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 23
            echo "                        <ul class=\"thumbnails\">
                            ";
            // line 24
            if (($context["thumb"] ?? null)) {
                // line 25
                echo "                                <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img
                                                src=\"";
                // line 26
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
                                                alt=\"";
                // line 27
                echo ($context["heading_title"] ?? null);
                echo "\"/></a></li>
                            ";
            }
            // line 29
            echo "                            ";
            if (($context["images"] ?? null)) {
                // line 30
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 31
                    echo "                                    <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 31);
                    echo "\"
                                                                    title=\"";
                    // line 32
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img
                                                    src=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
                                                    alt=\"";
                    // line 34
                    echo ($context["heading_title"] ?? null);
                    echo "\"/></a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                            ";
            }
            // line 37
            echo "                        </ul>
                    ";
        }
        // line 39
        echo "                </div>
                ";
        // line 40
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 41
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 42
            echo "                ";
        } else {
            // line 43
            echo "                    ";
            $context["class"] = "col-sm-6";
            // line 44
            echo "                ";
        }
        // line 45
        echo "                <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
                    <div class=\"btn-group\">
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\"
                                title=\"";
        // line 48
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i
                                    class=\"fa fa-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 50
        echo ($context["button_compare"] ?? null);
        echo "\"
                                onclick=\"compare.add('";
        // line 51
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>
                    <h1>";
        // line 53
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <ul class=\"list-unstyled\">
                        ";
        // line 55
        if (($context["manufacturer"] ?? null)) {
            // line 56
            echo "                            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 58
        echo "                        <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
                        ";
        // line 59
        if (($context["reward"] ?? null)) {
            // line 60
            echo "                            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
                        ";
        }
        // line 62
        echo "                        <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
                    </ul>
                    ";
        // line 64
        if (($context["price"] ?? null)) {
            // line 65
            echo "                        <ul class=\"list-unstyled\">
                            ";
            // line 66
            if ( !($context["special"] ?? null)) {
                // line 67
                echo "                                <li>
                                    <h2>";
                // line 68
                echo ($context["price"] ?? null);
                echo "</h2>
                                </li>
                            ";
            } else {
                // line 71
                echo "                                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                                <li>
                                    <h2>";
                // line 73
                echo ($context["special"] ?? null);
                echo "</h2>
                                </li>
                            ";
            }
            // line 76
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 77
                echo "                                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                            ";
            }
            // line 79
            echo "                            ";
            if (($context["points"] ?? null)) {
                // line 80
                echo "                                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                            ";
            }
            // line 82
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 83
                echo "                                <li>
                                    <hr>
                                </li>
                                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 87
                    echo "                                    <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 87);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 87);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                            ";
            }
            // line 90
            echo "                        </ul>
                    ";
        }
        // line 92
        echo "                    <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 93
            echo "                            <hr>
                            <h3>";
            // line 94
            echo ($context["text_option"] ?? null);
            echo "</h3>
                            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 96
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 96) == "select")) {
                    // line 97
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 97)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 99);
                    echo "</label>
                                        <select name=\"option[";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    echo "]\"
                                                id=\"input-option";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                    echo "\" class=\"form-control\">
                                            <option value=\"\">";
                    // line 102
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                            ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 103));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 104
                        echo "                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 104);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 104);
                        echo "
                                                    ";
                        // line 105
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 105)) {
                            // line 106
                            echo "                                                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 106);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 106);
                            echo ")
                                                    ";
                        }
                        // line 107
                        echo " </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "                                        </select>
                                    </div>
                                ";
                }
                // line 112
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 112) == "radio")) {
                    // line 113
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 113)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 115);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 115));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 116
                        echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"option[";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                        echo "]\"
                                                               value=\"";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 120);
                        echo "\"/>
                                                        ";
                        // line 121
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 121)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 121);
                            echo "\"
                                                                                         alt=\"";
                            // line 122
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 122);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 122);
                                echo " ";
                            }
                            echo "\"
                                                                                         class=\"img-thumbnail\"/> ";
                        }
                        // line 124
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 124);
                        echo "
                                                        ";
                        // line 125
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 125)) {
                            // line 126
                            echo "                                                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 126);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126);
                            echo ")
                                                        ";
                        }
                        // line 127
                        echo " </label>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo " </div>
                                    </div>
                                ";
                }
                // line 132
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 132) == "checkbox")) {
                    // line 133
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 133)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 134);
                    echo "</label>
                                        <div id=\"input-option";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 136
                        echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"option[";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        echo "][]\"
                                                               value=\"";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        echo "\"/>
                                                        ";
                        // line 141
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 141)) {
                            echo " <img src=\"";
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
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "text")) {
                    // line 153
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 153)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    echo "</label>
                                        <input type=\"text\" name=\"option[";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "]\"
                                               value=\"";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 157);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 157);
                    echo "\"
                                               id=\"input-option";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "\" class=\"form-control\"/>
                                    </div>
                                ";
                }
                // line 161
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 161) == "textarea")) {
                    // line 162
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164);
                    echo "</label>
                                        <textarea name=\"option[";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "]\" rows=\"5\"
                                                  placeholder=\"";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 166);
                    echo "\"
                                                  id=\"input-option";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "\"
                                                  class=\"form-control\">";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 168);
                    echo "</textarea>
                                    </div>
                                ";
                }
                // line 171
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 171) == "file")) {
                    // line 172
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 172)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\">";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 173);
                    echo "</label>
                                        <button type=\"button\" id=\"button-upload";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\"
                                                data-loading-text=\"";
                    // line 175
                    echo ($context["text_loading"] ?? null);
                    echo "\"
                                                class=\"btn btn-default btn-block\"><i
                                                    class=\"fa fa-upload\"></i> ";
                    // line 177
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                        <input type=\"hidden\" name=\"option[";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "]\" value=\"\"
                                               id=\"input-option";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\"/>
                                    </div>
                                ";
                }
                // line 182
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "date")) {
                    // line 183
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    echo "</label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"option[";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "]\"
                                                   value=\"";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 188);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                   id=\"input-option";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 196
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 196) == "datetime")) {
                    // line 197
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo "</label>
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"option[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "]\"
                                                   value=\"";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 202);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                   id=\"input-option";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 210
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 210) == "time")) {
                    // line 211
                    echo "                                    <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 211)) {
                        echo " required ";
                    }
                    echo "\">
                                        <label class=\"control-label\"
                                               for=\"input-option";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"option[";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "]\"
                                                   value=\"";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 216);
                    echo "\" data-date-format=\"HH:mm\"
                                                   id=\"input-option";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\"
                                                   class=\"form-control\"/>
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    </div>
                                ";
                }
                // line 224
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                        ";
        }
        // line 226
        echo "                        ";
        if (($context["recurrings"] ?? null)) {
            // line 227
            echo "                            <hr>
                            <h3>";
            // line 228
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                            <div class=\"form-group required\">
                                <select name=\"recurring_id\" class=\"form-control\">
                                    <option value=\"\">";
            // line 231
            echo ($context["text_select"] ?? null);
            echo "</option>
                                    ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 233
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 233);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 233);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                </select>
                                <div class=\"help-block\" id=\"recurring-description\"></div>
                            </div>
                        ";
        }
        // line 239
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-quantity\">";
        // line 240
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"quantity\" value=\"";
        // line 241
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                   class=\"form-control\"/>
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 243
        echo ($context["product_id"] ?? null);
        echo "\"/>
                            <br/>
                            <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 245
        echo ($context["text_loading"] ?? null);
        echo "\"
                                    class=\"btn btn-primary btn-lg btn-block\">";
        // line 246
        echo ($context["button_cart"] ?? null);
        echo "</button>
                        </div>
                        ";
        // line 248
        if ((($context["minimum"] ?? null) > 1)) {
            // line 249
            echo "                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                        ";
        }
        // line 250
        echo "</div>
                    ";
        // line 251
        if (($context["review_status"] ?? null)) {
            // line 252
            echo "                        <div class=\"rating\">
                            <p>";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 254
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 255
                    echo "<span
                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 258
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 259
            echo ($context["reviews"] ?? null);
            echo "</a>
                                / <a href=\"\"
                                     onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 261
            echo ($context["text_write"] ?? null);
            echo "</a>
                            </p>
                            <hr>
                        </div>
                    ";
        }
        // line 265
        echo " </div>
            </div>

            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 269
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
                ";
        // line 270
        if (($context["attribute_groups"] ?? null)) {
            // line 271
            echo "                    <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
                ";
        }
        // line 273
        echo "                ";
        if (($context["review_status"] ?? null)) {
            // line 274
            echo "                    <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
                ";
        }
        // line 276
        echo "            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 278
        echo ($context["description"] ?? null);
        echo "</div>
                ";
        // line 279
        if (($context["attribute_groups"] ?? null)) {
            // line 280
            echo "                    <div class=\"tab-pane\" id=\"tab-specification\">
                        <table class=\"table table-bordered\">
                            ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 283
                echo "                                <thead>
                                <tr>
                                    <td colspan=\"2\"><strong>";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 285);
                echo "</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 289));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 290
                    echo "                                    <tr>
                                        <td>";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 291);
                    echo "</td>
                                        <td>";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 292);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "                                </tbody>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                        </table>
                    </div>
                ";
        }
        // line 300
        echo "                ";
        if (($context["review_status"] ?? null)) {
            // line 301
            echo "                    <div class=\"tab-pane\" id=\"tab-review\">
                        <form class=\"form-horizontal\" id=\"form-review\">
                            <div id=\"review\"></div>
                            <h2>";
            // line 304
            echo ($context["text_write"] ?? null);
            echo "</h2>
                            ";
            // line 305
            if (($context["review_guest"] ?? null)) {
                // line 306
                echo "                                <div class=\"form-group required\">
                                    <div class=\"col-sm-12\">
                                        <label class=\"control-label\" for=\"input-name\">";
                // line 308
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                        <input type=\"text\" name=\"name\" value=\"";
                // line 309
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\"
                                               class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <div class=\"col-sm-12\">
                                        <label class=\"control-label\" for=\"input-review\">";
                // line 315
                echo ($context["entry_review"] ?? null);
                echo "</label>
                                        <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                  class=\"form-control\"></textarea>
                                        <div class=\"help-block\">";
                // line 318
                echo ($context["text_note"] ?? null);
                echo "</div>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <div class=\"col-sm-12\">
                                        <label class=\"control-label\">";
                // line 323
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                                        &nbsp;&nbsp;&nbsp; ";
                // line 324
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
                // line 334
                echo ($context["entry_good"] ?? null);
                echo "</div>
                                </div>
                                ";
                // line 336
                echo ($context["captcha"] ?? null);
                echo "
                                <div class=\"buttons clearfix\">
                                    <div class=\"pull-right\">
                                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 339
                echo ($context["text_loading"] ?? null);
                echo "\"
                                                class=\"btn btn-primary\">";
                // line 340
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                    </div>
                                </div>
                            ";
            } else {
                // line 344
                echo "                                ";
                echo ($context["text_login"] ?? null);
                echo "
                            ";
            }
            // line 346
            echo "                        </form>
                    </div>
                ";
        }
        // line 349
        echo "            </div>

            ";
        // line 351
        if (($context["products"] ?? null)) {
            // line 352
            echo "                <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
                <div class=\"row\"> ";
            // line 353
            $context["i"] = 0;
            // line 354
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 355
                echo "                        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 356
                    echo "                            ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 357
                    echo "                        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 358
                    echo "                            ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 359
                    echo "                        ";
                } else {
                    // line 360
                    echo "                            ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 361
                    echo "                        ";
                }
                // line 362
                echo "                        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
                            <div class=\"product-thumb transition\">
                                <div class=\"image\"><a href=\"";
                // line 364
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 364);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 364);
                echo "\"
                                                                                     alt=\"";
                // line 365
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 365);
                echo "\"
                                                                                     title=\"";
                // line 366
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 366);
                echo "\"
                                                                                     class=\"img-responsive\"/></a></div>
                                <div class=\"caption\">
                                    <h4><a href=\"";
                // line 369
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 369);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 369);
                echo "</a></h4>
                                    <p>";
                // line 370
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 370);
                echo "</p>
                                    ";
                // line 371
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 371)) {
                    // line 372
                    echo "                                        <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 373
                        echo "                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 373) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i
                                                            class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            // line 375
                            echo "                                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                                class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 377
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                                    ";
                }
                // line 379
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 379)) {
                    // line 380
                    echo "                                        <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 380)) {
                        // line 381
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 381);
                        echo "
                                            ";
                    } else {
                        // line 382
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 382);
                        echo "</span> <span
                                                    class=\"price-old\">";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 383);
                        echo "</span> ";
                    }
                    // line 384
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 384)) {
                        echo " <span
                                                    class=\"price-tax\">";
                        // line 385
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 385);
                        echo "</span> ";
                    }
                    // line 386
                    echo "                                        </p>
                                    ";
                }
                // line 387
                echo " </div>
                                <div class=\"button-group\">
                                    <button type=\"button\"
                                            onclick=\"cart.add('";
                // line 390
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 390);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 390);
                echo "');\">
                                        <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 391
                echo ($context["button_cart"] ?? null);
                echo "</span> <i
                                                class=\"fa fa-shopping-cart\"></i></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 393
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                                            onclick=\"wishlist.add('";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 394);
                echo "');\"><i
                                                class=\"fa fa-heart\"></i></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 396
                echo ($context["button_compare"] ?? null);
                echo "\"
                                            onclick=\"compare.add('";
                // line 397
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 397);
                echo "');\"><i
                                                class=\"fa fa-exchange\"></i></button>
                                </div>
                            </div>
                        </div>
                        ";
                // line 402
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 403
                    echo "                            <div class=\"clearfix visible-md visible-sm\"></div>
                        ";
                } elseif ((                // line 404
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 405
                    echo "                            <div class=\"clearfix visible-md\"></div>
                        ";
                } elseif ((((                // line 406
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 407
                    echo "                            <div class=\"clearfix visible-md\"></div>
                        ";
                }
                // line 409
                echo "                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 410
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
            ";
        }
        // line 412
        echo "            ";
        if (($context["tags"] ?? null)) {
            // line 413
            echo "                <p>";
            echo ($context["text_tags"] ?? null);
            echo "
                    ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 415
                echo "                        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 415);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 415);
                    echo "</a>,
                        ";
                } else {
                    // line 416
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 416);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 416);
                    echo "</a> ";
                }
                // line 417
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
            ";
        }
        // line 419
        echo "            ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 420
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function () {
                \$('#recurring-description').html('');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-cart').button('loading');
            },
            complete: function () {
                \$('#button-cart').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

                    \$('html, body').animate({scrollTop: 0}, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 498
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 503
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 509
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function () {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(node).button('loading');
                    },
                    complete: function () {
                        \$(node).button('reset');
                    },
                    success: function (json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 576
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 580
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function () {
                \$('#button-review').button('loading');
            },
            complete: function () {
                \$('#button-review').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function () {
        \$('.thumbnails').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>
";
        // line 618
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
        return array (  1544 => 618,  1503 => 580,  1496 => 576,  1426 => 509,  1417 => 503,  1409 => 498,  1328 => 420,  1323 => 419,  1314 => 417,  1307 => 416,  1297 => 415,  1293 => 414,  1288 => 413,  1285 => 412,  1276 => 410,  1273 => 409,  1269 => 407,  1267 => 406,  1264 => 405,  1262 => 404,  1259 => 403,  1257 => 402,  1249 => 397,  1245 => 396,  1240 => 394,  1236 => 393,  1231 => 391,  1225 => 390,  1220 => 387,  1216 => 386,  1210 => 385,  1205 => 384,  1201 => 383,  1196 => 382,  1190 => 381,  1187 => 380,  1184 => 379,  1175 => 377,  1171 => 375,  1165 => 373,  1160 => 372,  1158 => 371,  1154 => 370,  1148 => 369,  1142 => 366,  1138 => 365,  1132 => 364,  1126 => 362,  1123 => 361,  1120 => 360,  1117 => 359,  1114 => 358,  1111 => 357,  1108 => 356,  1105 => 355,  1100 => 354,  1098 => 353,  1093 => 352,  1091 => 351,  1087 => 349,  1082 => 346,  1076 => 344,  1069 => 340,  1065 => 339,  1059 => 336,  1054 => 334,  1041 => 324,  1037 => 323,  1029 => 318,  1023 => 315,  1014 => 309,  1010 => 308,  1006 => 306,  1004 => 305,  1000 => 304,  995 => 301,  992 => 300,  987 => 297,  980 => 295,  971 => 292,  967 => 291,  964 => 290,  960 => 289,  953 => 285,  949 => 283,  945 => 282,  941 => 280,  939 => 279,  935 => 278,  931 => 276,  925 => 274,  922 => 273,  916 => 271,  914 => 270,  910 => 269,  904 => 265,  896 => 261,  891 => 259,  883 => 258,  878 => 255,  872 => 254,  868 => 253,  865 => 252,  863 => 251,  860 => 250,  854 => 249,  852 => 248,  847 => 246,  843 => 245,  838 => 243,  833 => 241,  829 => 240,  826 => 239,  820 => 235,  809 => 233,  805 => 232,  801 => 231,  795 => 228,  792 => 227,  789 => 226,  786 => 225,  780 => 224,  770 => 217,  766 => 216,  762 => 215,  755 => 213,  747 => 211,  744 => 210,  734 => 203,  730 => 202,  726 => 201,  719 => 199,  711 => 197,  708 => 196,  698 => 189,  694 => 188,  690 => 187,  683 => 185,  675 => 183,  672 => 182,  666 => 179,  662 => 178,  658 => 177,  653 => 175,  649 => 174,  645 => 173,  638 => 172,  635 => 171,  629 => 168,  625 => 167,  621 => 166,  617 => 165,  611 => 164,  603 => 162,  600 => 161,  594 => 158,  588 => 157,  584 => 156,  578 => 155,  570 => 153,  567 => 152,  562 => 149,  554 => 147,  547 => 146,  545 => 145,  540 => 144,  527 => 142,  521 => 141,  517 => 140,  513 => 139,  508 => 136,  502 => 135,  498 => 134,  491 => 133,  488 => 132,  483 => 129,  475 => 127,  468 => 126,  466 => 125,  461 => 124,  448 => 122,  442 => 121,  438 => 120,  434 => 119,  429 => 116,  423 => 115,  419 => 114,  412 => 113,  409 => 112,  404 => 109,  397 => 107,  390 => 106,  388 => 105,  381 => 104,  377 => 103,  373 => 102,  369 => 101,  365 => 100,  359 => 99,  351 => 97,  348 => 96,  344 => 95,  340 => 94,  337 => 93,  334 => 92,  330 => 90,  327 => 89,  316 => 87,  312 => 86,  307 => 83,  304 => 82,  296 => 80,  293 => 79,  285 => 77,  282 => 76,  276 => 73,  270 => 71,  264 => 68,  261 => 67,  259 => 66,  256 => 65,  254 => 64,  246 => 62,  238 => 60,  236 => 59,  229 => 58,  219 => 56,  217 => 55,  212 => 53,  207 => 51,  203 => 50,  196 => 48,  189 => 45,  186 => 44,  183 => 43,  180 => 42,  177 => 41,  175 => 40,  172 => 39,  168 => 37,  165 => 36,  157 => 34,  151 => 33,  147 => 32,  142 => 31,  137 => 30,  134 => 29,  129 => 27,  123 => 26,  116 => 25,  114 => 24,  111 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/product/product.twig", "");
    }
}
