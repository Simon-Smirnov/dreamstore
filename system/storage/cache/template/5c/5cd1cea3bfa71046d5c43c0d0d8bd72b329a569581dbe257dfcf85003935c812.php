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

/* catalog/vacancies_form.twig */
class __TwigTemplate_7902351e2d7be97ff26a67329241d322bea22d4c0c8407fb4c00d94c53b5d989 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "111</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\"> ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\"
                      class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                                    <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\" data-toggle=\"tab\"><img
                                                    src=\"language/";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo ".png\"
                                                    title=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 51);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 51);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </ul>
                            <div class=\"tab-content\">";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 55
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][name]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 63
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null), "name", [], "any", false, false, false, 63)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 64
            echo ($context["entry_name"] ?? null);
            echo "\"
                                                       id=\"input-name";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\" class=\"form-control\"/>
                                                ";
            // line 66
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) {
                // line 67
                echo "                                                    <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null);
                echo "</div>
                                                ";
            }
            // line 69
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-h1-";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_meta_h1"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
            echo "][meta_h1]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 78
            echo (((($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "meta_h1", [], "any", false, false, false, 78)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 79
            echo ($context["entry_meta_h1"] ?? null);
            echo "\"
                                                       id=\"input-meta-h1-";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "][meta_title]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 91
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null), "meta_title", [], "any", false, false, false, 91)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 92
            echo ($context["entry_meta_title"] ?? null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            echo "][description]\"
                                                        placeholder=\"";
            // line 103
            echo ($context["entry_description"] ?? null);
            echo "\"
                                                        id=\"input-description";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 105
            echo ($context["summernote"] ?? null);
            echo "\"
                                                        class=\"form-control\">";
            // line 106
            echo (((($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "description", [], "any", false, false, false, 106)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "][meta_description]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 116
            echo ($context["entry_meta_description"] ?? null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "\"
                                                        class=\"form-control\">";
            // line 118
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null), "meta_description", [], "any", false, false, false, 118)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
            echo "][meta_keyword]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 128
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "\"
                                                        class=\"form-control\">";
            // line 130
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 130)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135);
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 136
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
            echo "][tag]\"
                                                       value=\"";
            // line 140
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140)] ?? null) : null), "tag", [], "any", false, false, false, 140)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 141
            echo ($context["entry_tag"] ?? null);
            echo "\"
                                                       id=\"input-tag";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 150
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 152
        echo ($context["model"] ?? null);
        echo "\" data-length=\"255\"
                                           placeholder=\"";
        // line 153
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                                    ";
        // line 154
        if (($context["error_model"] ?? null)) {
            // line 155
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                                    ";
        }
        // line 156
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 160
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 162
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\"
                                           id=\"input-sku\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 168
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"upc\" value=\"";
        // line 170
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\"
                                           id=\"input-upc\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 176
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"ean\" value=\"";
        // line 178
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\"
                                           id=\"input-ean\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 184
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"jan\" value=\"";
        // line 186
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\"
                                           id=\"input-jan\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\"
                                                                                             title=\"";
        // line 192
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"isbn\" value=\"";
        // line 194
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\"
                                           id=\"input-isbn\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 200
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"mpn\" value=\"";
        // line 202
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\"
                                           id=\"input-mpn\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 207
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"location\" value=\"";
        // line 209
        echo ($context["location"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 210
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 214
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 216
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\"
                                           id=\"input-price\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-tax-class\">";
        // line 222
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                                        <option value=\"0\">";
        // line 225
        echo ($context["text_none"] ?? null);
        echo "</option>
                                        ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 227
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 227) == ($context["tax_class_id"] ?? null))) {
                // line 228
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 228);
                echo "\"
                                                        selected=\"selected\">";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 229);
                echo "</option>
                                            ";
            } else {
                // line 231
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 231);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 231);
                echo "</option>
                                            ";
            }
            // line 233
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 238
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 240
        echo ($context["quantity"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 241
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 246
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"minimum\" value=\"";
        // line 248
        echo ($context["minimum"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 249
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 253
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                                        ";
        // line 256
        if (($context["subtract"] ?? null)) {
            // line 257
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 258
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 260
            echo "                                            <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 261
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 263
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 269
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                                        ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 273
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 273) == ($context["stock_status_id"] ?? null))) {
                // line 274
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 274);
                echo "\"
                                                        selected=\"selected\">";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 275);
                echo "</option>
                                            ";
            } else {
                // line 277
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 277);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 277);
                echo "</option>
                                            ";
            }
            // line 279
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 284
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\"> ";
        // line 286
        if (($context["shipping"] ?? null)) {
            // line 287
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 288
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        } else {
            // line 290
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                                            ";
            // line 291
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        }
        // line 292
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 293
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 294
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        } else {
            // line 296
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                                            ";
            // line 297
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        }
        // line 298
        echo " </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 303
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 306
        echo ($context["date_available"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 307
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-date-available\" class=\"form-control\"/> <span
                                                class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 315
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 319
        echo ($context["length"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 320
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 324
        echo ($context["width"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 325
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 329
        echo ($context["height"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 330
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\"
                                                   class=\"form-control\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-length-class\">";
        // line 338
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                                        ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 342
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 342) == ($context["length_class_id"] ?? null))) {
                // line 343
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 343);
                echo "\"
                                                        selected=\"selected\">";
                // line 344
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 344);
                echo "</option>
                                            ";
            } else {
                // line 346
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 346);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 346);
                echo "</option>
                                            ";
            }
            // line 348
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 353
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 355
        echo ($context["weight"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 356
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-weight-class\">";
        // line 361
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                                        ";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 365
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 365) == ($context["weight_class_id"] ?? null))) {
                // line 366
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 366);
                echo "\"
                                                        selected=\"selected\">";
                // line 367
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 367);
                echo "</option>
                                            ";
            } else {
                // line 369
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 369);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 369);
                echo "</option>
                                            ";
            }
            // line 371
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 376
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 379
        if (($context["status"] ?? null)) {
            // line 380
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 381
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 383
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 384
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 386
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 391
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 393
        echo ($context["sort_order"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 394
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\"
                                           class=\"form-control\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-links\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 403
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 405
        echo ($context["manufacturer"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 406
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\"
                                           class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\"
                                                                         value=\"";
        // line 408
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 413
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 415
        echo ($context["entry_category"] ?? null);
        echo "\"
                                           id=\"input-category\" class=\"form-control\"/>
                                    <div id=\"product-category\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 419
            echo "                                            <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 419);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i>
                                                <label>
                                                    <input type=\"radio\" name=\"main_category\"
                                                           value=\"";
            // line 423
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 423);
            echo "\"
                                                           data-toggle=\"tooltip\" title=\"";
            // line 424
            echo ($context["entry_main_category"] ?? null);
            echo "\"
                                                           ";
            // line 425
            if ((($context["main_category"] ?? null) == twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 425))) {
                echo "checked=\"checked\"";
            }
            echo " />
                                                    <span>";
            // line 426
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 426);
            echo "</span>
                                                </label>
                                                <input type=\"hidden\" name=\"product_category[]\"
                                                       value=\"";
            // line 429
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 429);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "</div>
                                    <label>
                                        <input type=\"radio\" name=\"main_category\"
                                               value=\"";
        // line 434
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 434);
        echo "\"
                                               ";
        // line 435
        if ( !($context["main_category"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                                        <span>";
        // line 436
        echo ($context["text_no_main_category"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"alert alert-info\"><i
                                                class=\"fa fa-info-circle\"></i> ";
        // line 439
        echo ($context["help_main_category"] ?? null);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 444
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 446
        echo ($context["entry_filter"] ?? null);
        echo "\"
                                           id=\"input-filter\" class=\"form-control\"/>
                                    <div id=\"product-filter\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 450
            echo "                                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 450);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 451
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 451);
            echo "
                                                <input type=\"hidden\" name=\"product_filter[]\"
                                                       value=\"";
            // line 453
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 453);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 459
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 463
            echo "                                            <div class=\"checkbox\">
                                                <label> ";
            // line 464
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 464), ($context["product_store"] ?? null))) {
                // line 465
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 466
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 466);
                echo "\" checked=\"checked\"/>
                                                        ";
                // line 467
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 467);
                echo "
                                                    ";
            } else {
                // line 469
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 470
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 470);
                echo "\"/>
                                                        ";
                // line 471
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 471);
                echo "
                                                    ";
            }
            // line 472
            echo " </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 479
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 481
        echo ($context["entry_download"] ?? null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"product-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 485
            echo "                                            <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 485);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 486
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 486);
            echo "
                                                <input type=\"hidden\" name=\"product_download[]\"
                                                       value=\"";
            // line 488
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 488);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 495
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 497
        echo ($context["entry_related"] ?? null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"product-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 501
            echo "                                            <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 501);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 502
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 502);
            echo "
                                                <input type=\"hidden\" name=\"product_related[]\"
                                                       value=\"";
            // line 504
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 504);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-attribute\">
                            <div class=\"table-responsive\">
                                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 515
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 516
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 522
        $context["attribute_row"] = 0;
        // line 523
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 524
            echo "                                        <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                                                                                             name=\"product_attribute[";
            // line 526
            echo ($context["attribute_row"] ?? null);
            echo "][name]\"
                                                                                             value=\"";
            // line 527
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 527);
            echo "\"
                                                                                             placeholder=\"";
            // line 528
            echo ($context["entry_attribute"] ?? null);
            echo "\"
                                                                                             class=\"form-control\"/>
                                                <input type=\"hidden\"
                                                       name=\"product_attribute[";
            // line 531
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                                                       value=\"";
            // line 532
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 532);
            echo "\"/></td>
                                            <td class=\"text-left\">";
            // line 533
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 534
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 535
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 535);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 535);
                echo ".png\"
                                                                    title=\"";
                // line 536
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 536);
                echo "\"/></span> <textarea
                                                                name=\"product_attribute[";
                // line 537
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 537);
                echo "][text]\"
                                                                rows=\"5\" placeholder=\"";
                // line 538
                echo ($context["entry_text"] ?? null);
                echo "\"
                                                                class=\"form-control\">";
                // line 539
                echo (((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 539)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 539)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 539)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 539)] ?? null) : null), "text", [], "any", false, false, false, 539)) : (""));
                echo "</textarea>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "</td>
                                            <td class=\"text-right\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#attribute-row";
            // line 544
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 545
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 550
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 551
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 559
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-option\">
                            <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                                        ";
        // line 571
        $context["option_row"] = 0;
        // line 572
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 573
            echo "                                            <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i
                                                            class=\"fa fa-minus-circle\"
                                                            onclick=\"\$('a[href=\\'#tab-option";
            // line 575
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 575);
            echo "
                                                </a></li>
                                            ";
            // line 577
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 578
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 579
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 580
        echo ($context["entry_option"] ?? null);
        echo "\"
                                                   id=\"input-option\" class=\"form-control\"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\"> ";
        // line 586
        $context["option_row"] = 0;
        // line 587
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 588
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 589
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                                <input type=\"hidden\"
                                                       name=\"product_option[";
            // line 591
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                                                       value=\"";
            // line 592
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 592);
            echo "\"/> <input
                                                        type=\"hidden\" name=\"product_option[";
            // line 593
            echo ($context["option_row"] ?? null);
            echo "][name]\"
                                                        value=\"";
            // line 594
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 594);
            echo "\"/> <input type=\"hidden\"
                                                                                                   name=\"product_option[";
            // line 595
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                                                                                                   value=\"";
            // line 596
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 596);
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 597
            echo ($context["option_row"] ?? null);
            echo "][type]\"
                                                       value=\"";
            // line 598
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 598);
            echo "\"/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\"
                                                           for=\"input-required";
            // line 601
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"product_option[";
            // line 603
            echo ($context["option_row"] ?? null);
            echo "][required]\"
                                                                id=\"input-required";
            // line 604
            echo ($context["option_row"] ?? null);
            echo "\"
                                                                class=\"form-control\">
                                                            ";
            // line 606
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 606)) {
                // line 607
                echo "                                                                <option value=\"1\"
                                                                        selected=\"selected\">";
                // line 608
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\">";
                // line 609
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            } else {
                // line 611
                echo "                                                                <option value=\"1\">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\"
                                                                        selected=\"selected\">";
                // line 613
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            }
            // line 615
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 618
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 618) == "text")) {
                // line 619
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 621
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 624
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 625
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 625);
                echo "\"
                                                                   placeholder=\"";
                // line 626
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 627
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 632
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 632) == "textarea")) {
                // line 633
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 635
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"product_option[";
                // line 637
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                      rows=\"5\" placeholder=\"";
                // line 638
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                      id=\"input-value";
                // line 639
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                      class=\"form-control\">";
                // line 640
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 640);
                echo "</textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 644
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 644) == "file")) {
                // line 645
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 647
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 650
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 651
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 651);
                echo "\"
                                                                   placeholder=\"";
                // line 652
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 653
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 658
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 658) == "date")) {
                // line 659
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 661
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 665
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 666
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 666);
                echo "\"
                                                                       placeholder=\"";
                // line 667
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-value";
                // line 669
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                       class=\"form-control\"/> <span
                                                                        class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 677
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 677) == "time")) {
                // line 678
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 680
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 684
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 685
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 685);
                echo "\"
                                                                       placeholder=\"";
                // line 686
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"HH:mm\"
                                                                       id=\"input-value";
                // line 688
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                       class=\"form-control\"/> <span
                                                                        class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 696
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 696) == "datetime")) {
                // line 697
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 699
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 703
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 704
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 704);
                echo "\"
                                                                       placeholder=\"";
                // line 705
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-value";
                // line 707
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                       class=\"form-control\"/> <span
                                                                        class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 715
            echo "                                                ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 715) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 715) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 715) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 715) == "image"))) {
                // line 716
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 717
                echo ($context["option_row"] ?? null);
                echo "\"
                                                               class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                            <tr>
                                                                <td class=\"text-left\">";
                // line 721
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 722
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                                <td class=\"text-left\">";
                // line 723
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 724
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 725
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 726
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                                <td></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            ";
                // line 732
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 732));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 733
                    echo "                                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 735
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 737
                    if ((($__internal_compile_18 = ($context["option_values"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 737)] ?? null) : null)) {
                        // line 738
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_19 = ($context["option_values"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 738)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 739
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 739) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 739))) {
                                // line 740
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 740);
                                echo "\"
                                                                                                selected=\"selected\">";
                                // line 741
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 741);
                                echo "</option>
                                                                                    ";
                            } else {
                                // line 743
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 743);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 743);
                                echo "</option>
                                                                                    ";
                            }
                            // line 745
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 746
                        echo "                                                                            ";
                    }
                    // line 747
                    echo "                                                                        </select> <input type=\"hidden\"
                                                                                         name=\"product_option[";
                    // line 748
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                                                                         value=\"";
                    // line 749
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 749);
                    echo "\"/>
                                                                    </td>
                                                                    <td class=\"text-right\"><input type=\"text\"
                                                                                                  name=\"product_option[";
                    // line 752
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                                                                                  value=\"";
                    // line 753
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 753);
                    echo "\"
                                                                                                  placeholder=\"";
                    // line 754
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                                                                                  class=\"form-control\"/>
                                                                    </td>
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 758
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 760
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 760)) {
                        // line 761
                        echo "                                                                                <option value=\"1\"
                                                                                        selected=\"selected\">";
                        // line 762
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\">";
                        // line 763
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    } else {
                        // line 765
                        echo "                                                                                <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\"
                                                                                        selected=\"selected\">";
                        // line 767
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    }
                    // line 769
                    echo "                                                                        </select></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 771
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 773
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 773) == "+")) {
                        // line 774
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 778
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 780
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 780) == "-")) {
                        // line 781
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 785
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 787
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 788
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                                                                         value=\"";
                    // line 789
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 789);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 790
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 793
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 795
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 795) == "+")) {
                        // line 796
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 800
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 802
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 802) == "-")) {
                        // line 803
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 807
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 809
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 810
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                                                                         value=\"";
                    // line 811
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 811);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 812
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 815
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 817
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 817) == "+")) {
                        // line 818
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 822
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 824
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 824) == "-")) {
                        // line 825
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 829
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 831
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 832
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                                                                         value=\"";
                    // line 833
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 833);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 834
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\">
                                                                        <button type=\"button\"
                                                                                onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 838
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                    // line 840
                    echo ($context["button_remove"] ?? null);
                    echo "\"
                                                                                class=\"btn btn-danger\"><i
                                                                                    class=\"fa fa-minus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                ";
                    // line 846
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 847
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 848
                echo "                                                            </tbody>

                                                            <tfoot>
                                                            <tr>
                                                                <td colspan=\"6\"></td>
                                                                <td class=\"text-left\">
                                                                    <button type=\"button\"
                                                                            onclick=\"addOptionValue('";
                // line 855
                echo ($context["option_row"] ?? null);
                echo "');\"
                                                                            data-toggle=\"tooltip\"
                                                                            title=\"";
                // line 857
                echo ($context["button_option_value_add"] ?? null);
                echo "\"
                                                                            class=\"btn btn-primary\"><i
                                                                                class=\"fa fa-plus-circle\"></i></button>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <select id=\"option-values";
                // line 865
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">
                                                        ";
                // line 866
                if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 866)] ?? null) : null)) {
                    // line 867
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 867)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 868
                        echo "                                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 868);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 868);
                        echo "</option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 870
                    echo "                                                        ";
                }
                // line 871
                echo "                                                    </select>
                                                ";
            }
            // line 872
            echo " </div>
                                            ";
            // line 873
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 874
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-recurring\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 883
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 884
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-left\"></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 890
        $context["recurring_row"] = 0;
        // line 891
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 892
            echo "                                        <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 894
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 896
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 897
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 897) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 897))) {
                    // line 898
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 898);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 899
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 899);
                    echo "</option>
                                                        ";
                } else {
                    // line 901
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 901);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 901);
                    echo "</option>
                                                        ";
                }
                // line 903
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 904
            echo "                                                </select></td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 906
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 908
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 909
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 909) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 909))) {
                    // line 910
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 910);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 911
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 911);
                    echo "</option>
                                                        ";
                } else {
                    // line 913
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 913);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 913);
                    echo "</option>
                                                        ";
                }
                // line 915
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 916
            echo "                                                </select></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#recurring-row";
            // line 919
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 920
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 925
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 926
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 927
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 934
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-discount\">
                            <div class=\"table-responsive\">
                                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 947
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 948
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 949
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 950
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 951
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 952
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 958
        $context["discount_row"] = 0;
        // line 959
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 960
            echo "                                        <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_discount[";
            // line 962
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 964
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 965
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 965) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 965))) {
                    // line 966
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 966);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 967
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 967);
                    echo "</option>
                                                        ";
                } else {
                    // line 969
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 969);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 969);
                    echo "</option>
                                                        ";
                }
                // line 971
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 972
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 974
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                                                          value=\"";
            // line 975
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 975);
            echo "\"
                                                                          placeholder=\"";
            // line 976
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 979
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 980
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 980);
            echo "\"
                                                                          placeholder=\"";
            // line 981
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 984
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 985
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 985);
            echo "\"
                                                                          placeholder=\"";
            // line 986
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 991
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 992
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 992);
            echo "\"
                                                           placeholder=\"";
            // line 993
            echo ($context["entry_date_start"] ?? null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span
                                                            class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 1002
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1003
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1003);
            echo "\"
                                                           placeholder=\"";
            // line 1004
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span
                                                            class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#discount-row";
            // line 1012
            echo ($context["discount_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1013
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1018
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1019
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1020
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1027
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-special\">
                            <div class=\"table-responsive\">
                                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1040
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1041
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1042
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1043
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1044
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1050
        $context["special_row"] = 0;
        // line 1051
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1052
            echo "                                        <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_special[";
            // line 1054
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 1056
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1057
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1057) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1057))) {
                    // line 1058
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1058);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1059
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1059);
                    echo "</option>
                                                        ";
                } else {
                    // line 1061
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1061);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1061);
                    echo "</option>
                                                        ";
                }
                // line 1063
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1064
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1066
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1067
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1067);
            echo "\"
                                                                          placeholder=\"";
            // line 1068
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1071
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 1072
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1072);
            echo "\"
                                                                          placeholder=\"";
            // line 1073
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1078
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1079
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1079);
            echo "\"
                                                           placeholder=\"";
            // line 1080
            echo ($context["entry_date_start"] ?? null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span
                                                            class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1089
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1090
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1090);
            echo "\"
                                                           placeholder=\"";
            // line 1091
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span
                                                            class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#special-row";
            // line 1099
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1100
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1105
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1106
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1107
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"5\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1114
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-image\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1127
        echo ($context["entry_image"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 1133
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 1135
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 1136
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"table-responsive\">
                                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1146
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1147
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1153
        $context["image_row"] = 0;
        // line 1154
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1155
            echo "                                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1156
            echo ($context["image_row"] ?? null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 1158
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1158);
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 1159
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input
                                                        type=\"hidden\" name=\"product_image[";
            // line 1160
            echo ($context["image_row"] ?? null);
            echo "][image]\"
                                                        value=\"";
            // line 1161
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1161);
            echo "\"
                                                        id=\"input-image";
            // line 1162
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_image[";
            // line 1164
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 1165
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1165);
            echo "\"
                                                                          placeholder=\"";
            // line 1166
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 1169
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1170
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1175
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1176
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1177
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1184
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-reward\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 1195
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1197
        echo ($context["points"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 1198
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1205
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1206
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1212
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1213
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1213);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_reward[";
            // line 1215
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1215);
            echo "][points]\"
                                                                          value=\"";
            // line 1216
            echo (((($__internal_compile_22 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1216)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1216)] ?? null) : null), "points", [], "any", false, false, false, 1216)) : (""));
            echo "\"
                                                                          class=\"form-control\"/></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1220
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                            title=\"";
        // line 1228
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"no_index\" value=\"1\"
                                               ";
        // line 1232
        if (($context["no_index"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"no_index\" value=\"0\"
                                               ";
        // line 1236
        if ( !($context["no_index"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-sm-12\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1242
        echo ($context["text_keyword"] ?? null);
        echo "
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 1248
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 1249
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 1253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1254
            echo "                                                <tr>
                                                    <td class=\"text-left\">";
            // line 1255
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1255);
            echo "</td>
                                                    <td class=\"text-left\">";
            // line 1256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1257
                echo "                                                            <div class=\"input-group\"><span
                                                                        class=\"input-group-addon\"><img
                                                                            src=\"language/";
                // line 1259
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1259);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1259);
                echo ".png\"
                                                                            title=\"";
                // line 1260
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1260);
                echo "\"/></span> <input
                                                                        type=\"text\"
                                                                        name=\"product_seo_url[";
                // line 1262
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1262);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1262);
                echo "]\"
                                                                        value=\"";
                // line 1263
                if ((($__internal_compile_24 = (($__internal_compile_25 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1263)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1263)] ?? null) : null)) {
                    echo (($__internal_compile_26 = (($__internal_compile_27 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1263)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1263)] ?? null) : null);
                }
                echo "\"
                                                                        placeholder=\"";
                // line 1264
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                                        class=\"form-control\"/>
                                                            </div>
                                                            ";
                // line 1267
                if ((($__internal_compile_28 = (($__internal_compile_29 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1267)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1267)] ?? null) : null)) {
                    // line 1268
                    echo "                                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_30 = (($__internal_compile_31 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1268)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1268)] ?? null) : null);
                    echo "</div>
                                                            ";
                }
                // line 1270
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1273
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-design\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1284
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1285
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1290
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1291
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1291);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1292
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1292);
            echo "]\"
                                                                          class=\"form-control\">
                                                    <option value=\"\"></option>
                                                    ";
            // line 1295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1296
                echo "                                                        ";
                if (((($__internal_compile_32 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1296)] ?? null) : null) && ((($__internal_compile_33 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1296)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1296)))) {
                    // line 1297
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1297);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1298
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1298);
                    echo "</option>
                                                        ";
                } else {
                    // line 1300
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1300);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1300);
                    echo "</option>
                                                        ";
                }
                // line 1302
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1303
            echo "                                                </select></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1306
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
    <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
    <script type=\"text/javascript\"><!--
        // Manufacturer
        \$('input[name=\\'manufacturer\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1329
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 1334
        echo ($context["text_none"] ?? null);
        echo "'
                        });

                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['manufacturer_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'manufacturer\\']').val(item['label']);
                \$('input[name=\\'manufacturer_id\\']').val(item['value']);
            }
        });

        // Category
        \$('input[name=\\'category\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1356
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['category_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'category\\']').val('');

                \$('#product-category' + item['value']).remove();

                \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> <label><input type=\"radio\" name=\"main_category\" value=\"";
        // line 1373
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1373);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["entry_main_category"] ?? null);
        echo "\" /> <span>' + item['label'] + '</span></label><input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-category').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Filter
        \$('input[name=\\'filter\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1385
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['filter_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'filter\\']').val('');

                \$('#product-filter' + item['value']).remove();

                \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-filter').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Downloads
        \$('input[name=\\'download\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1414
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['download_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'download\\']').val('');

                \$('#product-download' + item['value']).remove();

                \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-download').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Related
        \$('input[name=\\'related\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1443
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['product_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'related\\']').val('');

                \$('#product-related' + item['value']).remove();

                \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-related').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var attribute_row = ";
        // line 1469
        echo ($context["attribute_row"] ?? null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1473
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 1475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1476
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1476);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1476);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1476);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1476);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1478
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1479
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#attribute tbody').append(html);

            attributeautocomplete(attribute_row);

            attribute_row++;
        }

        function attributeautocomplete(attribute_row) {
            \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
                'source': function (request, response) {
                    \$.ajax({
                        url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1493
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                        dataType: 'json',
                        success: function (json) {
                            response(\$.map(json, function (item) {
                                return {
                                    category: item.attribute_group,
                                    label: item.name,
                                    value: item.attribute_id
                                }
                            }));
                        }
                    });
                },
                'select': function (item) {
                    \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
                    \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
                }
            });
        }

        \$('#attribute tbody tr').each(function (index, element) {
            attributeautocomplete(index);
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var option_row = ";
        // line 1518
        echo ($context["option_row"] ?? null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1523
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                category: item['category'],
                                label: item['name'],
                                value: item['option_id'],
                                type: item['type'],
                                option_value: item['option_value']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

                html += '\t<div class=\"form-group\">';
                html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1546
        echo ($context["entry_required"] ?? null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 1548
        echo ($context["text_yes"] ?? null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 1549
        echo ($context["text_no"] ?? null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1555
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1556
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1562
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1563
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1569
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1570
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1576
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1577
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1583
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1584
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1590
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1591
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
                    html += '<div class=\"table-responsive\">';
                    html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
                    html += '  \t <thead>';
                    html += '      <tr>';
                    html += '        <td class=\"text-left\">";
        // line 1600
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1601
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 1602
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1603
        echo ($context["entry_price"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1604
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1605
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
                    html += '        <td></td>';
                    html += '      </tr>';
                    html += '  \t </thead>';
                    html += '  \t <tbody>';
                    html += '    </tbody>';
                    html += '    <tfoot>';
                    html += '      <tr>';
                    html += '        <td colspan=\"6\"></td>';
                    html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1614
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
                    html += '      </tr>';
                    html += '    </tfoot>';
                    html += '  </table>';
                    html += '</div>';

                    html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

                    for (i = 0; i < item['option_value'].length; i++) {
                        html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
                    }

                    html += '  </select>';
                    html += '</div>';
                }

                \$('#tab-option .tab-content').append(html);

                \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

                \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

                \$('[data-toggle=\\'tooltip\\']').tooltip({
                    container: 'body',
                    html: true
                });

                \$('.date').datetimepicker({
                    language: '";
        // line 1642
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 1647
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 1652
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: true,
                    pickTime: true
                });

                option_row++;
            }
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var option_value_row = ";
        // line 1662
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1669
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 1671
        echo ($context["text_yes"] ?? null);
        echo "</option>';
            html += '    <option value=\"0\" selected>";
        // line 1672
        echo ($context["text_no"] ?? null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1678
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1683
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1688
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1689
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#option-value' + option_row + ' tbody').append(html);
            \$('[rel=tooltip]').tooltip();

            option_value_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var discount_row = ";
        // line 1700
        echo ($context["discount_row"] ?? null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1706
            echo "            html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1706);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1706), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1708
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1709
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1710
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1711
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1712
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1713
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1714
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#discount tbody').append(html);

            \$('.date').datetimepicker({
                pickTime: false
            });

            discount_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var special_row = ";
        // line 1728
        echo ($context["special_row"] ?? null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1733
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1734
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1734);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1734), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1736
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1737
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1738
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1739
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1740
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1741
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 1747
        echo ($context["datepicker"] ?? null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 1756
        echo ($context["image_row"] ?? null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1760
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1761
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1762
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 1772
        echo ($context["recurring_row"] ?? null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 1778
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1779
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1779);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1779);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1781
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 1785
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1786
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1786);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1786);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1788
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1791
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
            html += '  </td>';
            html += '</tr>';

            \$('#tab-recurring table tbody').append(html);

            recurring_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        \$('.date').datetimepicker({
            language: '";
        // line 1803
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 1808
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 1813
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: true,
            pickTime: true
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
        //--></script>
</div>
";
        // line 1823
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/vacancies_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4005 => 1823,  3992 => 1813,  3984 => 1808,  3976 => 1803,  3961 => 1791,  3956 => 1788,  3945 => 1786,  3941 => 1785,  3935 => 1781,  3924 => 1779,  3920 => 1778,  3911 => 1772,  3898 => 1762,  3894 => 1761,  3888 => 1760,  3881 => 1756,  3869 => 1747,  3860 => 1741,  3856 => 1740,  3852 => 1739,  3848 => 1738,  3844 => 1737,  3841 => 1736,  3830 => 1734,  3826 => 1733,  3818 => 1728,  3801 => 1714,  3797 => 1713,  3793 => 1712,  3789 => 1711,  3785 => 1710,  3781 => 1709,  3778 => 1708,  3767 => 1706,  3763 => 1705,  3755 => 1700,  3741 => 1689,  3737 => 1688,  3729 => 1683,  3721 => 1678,  3712 => 1672,  3708 => 1671,  3703 => 1669,  3693 => 1662,  3680 => 1652,  3672 => 1647,  3664 => 1642,  3633 => 1614,  3621 => 1605,  3617 => 1604,  3613 => 1603,  3609 => 1602,  3605 => 1601,  3601 => 1600,  3589 => 1591,  3585 => 1590,  3576 => 1584,  3572 => 1583,  3563 => 1577,  3559 => 1576,  3550 => 1570,  3546 => 1569,  3537 => 1563,  3533 => 1562,  3524 => 1556,  3520 => 1555,  3511 => 1549,  3507 => 1548,  3502 => 1546,  3476 => 1523,  3468 => 1518,  3440 => 1493,  3423 => 1479,  3420 => 1478,  3403 => 1476,  3399 => 1475,  3394 => 1473,  3387 => 1469,  3358 => 1443,  3326 => 1414,  3294 => 1385,  3277 => 1373,  3257 => 1356,  3232 => 1334,  3224 => 1329,  3199 => 1306,  3191 => 1303,  3185 => 1302,  3177 => 1300,  3172 => 1298,  3167 => 1297,  3164 => 1296,  3160 => 1295,  3154 => 1292,  3150 => 1291,  3147 => 1290,  3143 => 1289,  3136 => 1285,  3132 => 1284,  3119 => 1273,  3106 => 1270,  3100 => 1268,  3098 => 1267,  3092 => 1264,  3086 => 1263,  3080 => 1262,  3075 => 1260,  3069 => 1259,  3065 => 1257,  3061 => 1256,  3057 => 1255,  3054 => 1254,  3050 => 1253,  3043 => 1249,  3039 => 1248,  3030 => 1242,  3017 => 1236,  3006 => 1232,  2997 => 1228,  2987 => 1220,  2977 => 1216,  2973 => 1215,  2968 => 1213,  2965 => 1212,  2961 => 1211,  2953 => 1206,  2949 => 1205,  2939 => 1198,  2935 => 1197,  2928 => 1195,  2914 => 1184,  2905 => 1177,  2899 => 1176,  2897 => 1175,  2889 => 1170,  2885 => 1169,  2879 => 1166,  2875 => 1165,  2871 => 1164,  2866 => 1162,  2862 => 1161,  2858 => 1160,  2854 => 1159,  2850 => 1158,  2845 => 1156,  2840 => 1155,  2835 => 1154,  2833 => 1153,  2824 => 1147,  2820 => 1146,  2807 => 1136,  2803 => 1135,  2798 => 1133,  2789 => 1127,  2773 => 1114,  2764 => 1107,  2758 => 1106,  2756 => 1105,  2748 => 1100,  2744 => 1099,  2733 => 1091,  2729 => 1090,  2725 => 1089,  2713 => 1080,  2709 => 1079,  2705 => 1078,  2697 => 1073,  2693 => 1072,  2689 => 1071,  2683 => 1068,  2679 => 1067,  2675 => 1066,  2671 => 1064,  2665 => 1063,  2657 => 1061,  2652 => 1059,  2647 => 1058,  2644 => 1057,  2640 => 1056,  2635 => 1054,  2629 => 1052,  2624 => 1051,  2622 => 1050,  2613 => 1044,  2609 => 1043,  2605 => 1042,  2601 => 1041,  2597 => 1040,  2581 => 1027,  2572 => 1020,  2566 => 1019,  2564 => 1018,  2556 => 1013,  2552 => 1012,  2541 => 1004,  2537 => 1003,  2533 => 1002,  2521 => 993,  2517 => 992,  2513 => 991,  2505 => 986,  2501 => 985,  2497 => 984,  2491 => 981,  2487 => 980,  2483 => 979,  2477 => 976,  2473 => 975,  2469 => 974,  2465 => 972,  2459 => 971,  2451 => 969,  2446 => 967,  2441 => 966,  2438 => 965,  2434 => 964,  2429 => 962,  2423 => 960,  2418 => 959,  2416 => 958,  2407 => 952,  2403 => 951,  2399 => 950,  2395 => 949,  2391 => 948,  2387 => 947,  2371 => 934,  2362 => 927,  2356 => 926,  2354 => 925,  2346 => 920,  2342 => 919,  2337 => 916,  2331 => 915,  2323 => 913,  2318 => 911,  2313 => 910,  2310 => 909,  2306 => 908,  2301 => 906,  2297 => 904,  2291 => 903,  2283 => 901,  2278 => 899,  2273 => 898,  2270 => 897,  2266 => 896,  2261 => 894,  2255 => 892,  2250 => 891,  2248 => 890,  2239 => 884,  2235 => 883,  2219 => 874,  2217 => 873,  2214 => 872,  2210 => 871,  2207 => 870,  2196 => 868,  2191 => 867,  2189 => 866,  2185 => 865,  2174 => 857,  2169 => 855,  2160 => 848,  2154 => 847,  2152 => 846,  2143 => 840,  2138 => 838,  2131 => 834,  2127 => 833,  2121 => 832,  2118 => 831,  2114 => 829,  2108 => 825,  2105 => 824,  2101 => 822,  2095 => 818,  2093 => 817,  2086 => 815,  2080 => 812,  2076 => 811,  2070 => 810,  2067 => 809,  2063 => 807,  2057 => 803,  2054 => 802,  2050 => 800,  2044 => 796,  2042 => 795,  2035 => 793,  2029 => 790,  2025 => 789,  2019 => 788,  2016 => 787,  2012 => 785,  2006 => 781,  2003 => 780,  1999 => 778,  1993 => 774,  1991 => 773,  1984 => 771,  1980 => 769,  1975 => 767,  1969 => 765,  1964 => 763,  1960 => 762,  1957 => 761,  1955 => 760,  1948 => 758,  1941 => 754,  1937 => 753,  1931 => 752,  1925 => 749,  1919 => 748,  1916 => 747,  1913 => 746,  1907 => 745,  1899 => 743,  1894 => 741,  1889 => 740,  1886 => 739,  1881 => 738,  1879 => 737,  1872 => 735,  1866 => 733,  1862 => 732,  1853 => 726,  1849 => 725,  1845 => 724,  1841 => 723,  1837 => 722,  1833 => 721,  1826 => 717,  1823 => 716,  1820 => 715,  1809 => 707,  1804 => 705,  1800 => 704,  1796 => 703,  1787 => 699,  1783 => 697,  1780 => 696,  1769 => 688,  1764 => 686,  1760 => 685,  1756 => 684,  1747 => 680,  1743 => 678,  1740 => 677,  1729 => 669,  1724 => 667,  1720 => 666,  1716 => 665,  1707 => 661,  1703 => 659,  1700 => 658,  1692 => 653,  1688 => 652,  1684 => 651,  1680 => 650,  1672 => 647,  1668 => 645,  1665 => 644,  1658 => 640,  1654 => 639,  1650 => 638,  1646 => 637,  1639 => 635,  1635 => 633,  1632 => 632,  1624 => 627,  1620 => 626,  1616 => 625,  1612 => 624,  1604 => 621,  1600 => 619,  1598 => 618,  1593 => 615,  1588 => 613,  1582 => 611,  1577 => 609,  1573 => 608,  1570 => 607,  1568 => 606,  1563 => 604,  1559 => 603,  1552 => 601,  1546 => 598,  1542 => 597,  1538 => 596,  1534 => 595,  1530 => 594,  1526 => 593,  1522 => 592,  1518 => 591,  1512 => 589,  1507 => 588,  1504 => 587,  1502 => 586,  1493 => 580,  1490 => 579,  1484 => 578,  1482 => 577,  1473 => 575,  1467 => 573,  1462 => 572,  1460 => 571,  1445 => 559,  1436 => 552,  1430 => 551,  1428 => 550,  1420 => 545,  1416 => 544,  1411 => 541,  1402 => 539,  1398 => 538,  1392 => 537,  1388 => 536,  1382 => 535,  1379 => 534,  1375 => 533,  1371 => 532,  1367 => 531,  1361 => 528,  1357 => 527,  1353 => 526,  1347 => 524,  1342 => 523,  1340 => 522,  1331 => 516,  1327 => 515,  1316 => 506,  1307 => 504,  1302 => 502,  1297 => 501,  1293 => 500,  1287 => 497,  1280 => 495,  1273 => 490,  1264 => 488,  1259 => 486,  1254 => 485,  1250 => 484,  1244 => 481,  1237 => 479,  1230 => 474,  1222 => 472,  1217 => 471,  1213 => 470,  1210 => 469,  1205 => 467,  1201 => 466,  1198 => 465,  1196 => 464,  1193 => 463,  1189 => 462,  1183 => 459,  1177 => 455,  1168 => 453,  1163 => 451,  1158 => 450,  1154 => 449,  1148 => 446,  1141 => 444,  1133 => 439,  1127 => 436,  1121 => 435,  1117 => 434,  1112 => 431,  1103 => 429,  1097 => 426,  1091 => 425,  1087 => 424,  1083 => 423,  1075 => 419,  1071 => 418,  1065 => 415,  1058 => 413,  1050 => 408,  1045 => 406,  1041 => 405,  1034 => 403,  1022 => 394,  1018 => 393,  1013 => 391,  1006 => 386,  1001 => 384,  996 => 383,  991 => 381,  986 => 380,  984 => 379,  978 => 376,  972 => 372,  966 => 371,  958 => 369,  953 => 367,  948 => 366,  945 => 365,  941 => 364,  935 => 361,  927 => 356,  923 => 355,  918 => 353,  912 => 349,  906 => 348,  898 => 346,  893 => 344,  888 => 343,  885 => 342,  881 => 341,  875 => 338,  864 => 330,  860 => 329,  853 => 325,  849 => 324,  842 => 320,  838 => 319,  831 => 315,  820 => 307,  816 => 306,  810 => 303,  803 => 298,  798 => 297,  795 => 296,  790 => 294,  787 => 293,  784 => 292,  779 => 291,  776 => 290,  771 => 288,  768 => 287,  766 => 286,  761 => 284,  755 => 280,  749 => 279,  741 => 277,  736 => 275,  731 => 274,  728 => 273,  724 => 272,  716 => 269,  708 => 263,  703 => 261,  698 => 260,  693 => 258,  688 => 257,  686 => 256,  680 => 253,  673 => 249,  669 => 248,  662 => 246,  654 => 241,  650 => 240,  645 => 238,  639 => 234,  633 => 233,  625 => 231,  620 => 229,  615 => 228,  612 => 227,  608 => 226,  604 => 225,  598 => 222,  587 => 216,  582 => 214,  575 => 210,  571 => 209,  566 => 207,  556 => 202,  549 => 200,  538 => 194,  531 => 192,  520 => 186,  513 => 184,  502 => 178,  495 => 176,  484 => 170,  477 => 168,  466 => 162,  459 => 160,  453 => 156,  447 => 155,  445 => 154,  441 => 153,  437 => 152,  432 => 150,  426 => 146,  415 => 142,  411 => 141,  407 => 140,  403 => 139,  395 => 136,  391 => 135,  383 => 130,  379 => 129,  375 => 128,  370 => 126,  362 => 123,  354 => 118,  350 => 117,  346 => 116,  341 => 114,  333 => 111,  325 => 106,  321 => 105,  317 => 104,  313 => 103,  309 => 102,  301 => 99,  292 => 93,  288 => 92,  284 => 91,  279 => 89,  271 => 86,  262 => 80,  258 => 79,  254 => 78,  249 => 76,  241 => 73,  235 => 69,  229 => 67,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  210 => 61,  202 => 58,  195 => 55,  191 => 54,  188 => 53,  178 => 51,  172 => 50,  167 => 49,  163 => 48,  155 => 43,  151 => 42,  147 => 41,  143 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_form.twig", "");
    }
}
