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

/* catalog/product_form.twig */
class __TwigTemplate_b56801e645a4176e69c543f90ef88147d2d382717c92775220dddbaf193475bd extends \Twig\Template
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
        echo "</h1>
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
                                        <div class=\"form-group required 1111\">
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
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_care[";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
            echo "][name]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 78
            echo (((($__internal_compile_4 = ($context["product_care"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["product_care"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "name", [], "any", false, false, false, 78)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 79
            echo ($context["entry_name"] ?? null);
            echo "\"
                                                       id=\"input-name";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\" class=\"form-control\"/>
                                                ";
            // line 81
            if ((($__internal_compile_6 = ($context["error_name"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null)) {
                // line 82
                echo "                                                    <div class=\"text-danger\">";
                echo (($__internal_compile_7 = ($context["error_name"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82)] ?? null) : null);
                echo "</div>
                                                ";
            }
            // line 84
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-h1-";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "\">";
            echo ($context["entry_meta_h1"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "][meta_h1]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 93
            echo (((($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null), "meta_h1", [], "any", false, false, false, 93)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 94
            echo ($context["entry_meta_h1"] ?? null);
            echo "\"
                                                       id=\"input-meta-h1-";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "][meta_title]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 106
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "meta_title", [], "any", false, false, false, 106)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 107
            echo ($context["entry_meta_title"] ?? null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "][description]\"
                                                        placeholder=\"";
            // line 118
            echo ($context["entry_description"] ?? null);
            echo "\"
                                                        id=\"input-description";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119);
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 120
            echo ($context["summernote"] ?? null);
            echo "\"
                                                        class=\"form-control\">";
            // line 121
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null), "description", [], "any", false, false, false, 121)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "][meta_description]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 131
            echo ($context["entry_meta_description"] ?? null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132);
            echo "\"
                                                        class=\"form-control\">";
            // line 133
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133)] ?? null) : null), "meta_description", [], "any", false, false, false, 133)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
            echo "][meta_keyword]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 143
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            echo "\"
                                                        class=\"form-control\">";
            // line 145
            echo (((($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["product_description"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 145)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 150);
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 151
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
            echo "][tag]\"
                                                       value=\"";
            // line 155
            echo (((($__internal_compile_18 = ($context["product_description"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 155)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["product_description"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 155)] ?? null) : null), "tag", [], "any", false, false, false, 155)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 156
            echo ($context["entry_tag"] ?? null);
            echo "\"
                                                       id=\"input-tag";
            // line 157
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 157);
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 165
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 167
        echo ($context["model"] ?? null);
        echo "\" data-length=\"255\"
                                           placeholder=\"";
        // line 168
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                                    ";
        // line 169
        if (($context["error_model"] ?? null)) {
            // line 170
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                                    ";
        }
        // line 171
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 175
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 177
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
        // line 183
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"upc\" value=\"";
        // line 185
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
        // line 191
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"ean\" value=\"";
        // line 193
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
        // line 199
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"jan\" value=\"";
        // line 201
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
        // line 207
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"isbn\" value=\"";
        // line 209
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
        // line 215
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"mpn\" value=\"";
        // line 217
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\"
                                           id=\"input-mpn\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 222
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"location\" value=\"";
        // line 224
        echo ($context["location"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 225
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 229
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 231
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
        // line 237
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                                        <option value=\"0\">";
        // line 240
        echo ($context["text_none"] ?? null);
        echo "</option>
                                        ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 242
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 242) == ($context["tax_class_id"] ?? null))) {
                // line 243
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 243);
                echo "\"
                                                        selected=\"selected\">";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 244);
                echo "</option>
                                            ";
            } else {
                // line 246
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 246);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 246);
                echo "</option>
                                            ";
            }
            // line 248
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 253
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 255
        echo ($context["quantity"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 256
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 261
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"minimum\" value=\"";
        // line 263
        echo ($context["minimum"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 264
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 268
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                                        ";
        // line 271
        if (($context["subtract"] ?? null)) {
            // line 272
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 273
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 275
            echo "                                            <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 276
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 278
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 284
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                                        ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 288
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 288) == ($context["stock_status_id"] ?? null))) {
                // line 289
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 289);
                echo "\"
                                                        selected=\"selected\">";
                // line 290
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 290);
                echo "</option>
                                            ";
            } else {
                // line 292
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 292);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 292);
                echo "</option>
                                            ";
            }
            // line 294
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 299
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\"> ";
        // line 301
        if (($context["shipping"] ?? null)) {
            // line 302
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 303
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        } else {
            // line 305
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                                            ";
            // line 306
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        }
        // line 307
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 308
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 309
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        } else {
            // line 311
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                                            ";
            // line 312
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        }
        // line 313
        echo " </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 318
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 321
        echo ($context["date_available"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 322
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
        // line 330
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 334
        echo ($context["length"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 335
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 339
        echo ($context["width"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 340
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 344
        echo ($context["height"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 345
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
        // line 353
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                                        ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 357
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 357) == ($context["length_class_id"] ?? null))) {
                // line 358
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 358);
                echo "\"
                                                        selected=\"selected\">";
                // line 359
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 359);
                echo "</option>
                                            ";
            } else {
                // line 361
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 361);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 361);
                echo "</option>
                                            ";
            }
            // line 363
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 368
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 370
        echo ($context["weight"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 371
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-weight-class\">";
        // line 376
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                                        ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 380
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 380) == ($context["weight_class_id"] ?? null))) {
                // line 381
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 381);
                echo "\"
                                                        selected=\"selected\">";
                // line 382
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 382);
                echo "</option>
                                            ";
            } else {
                // line 384
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 384);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 384);
                echo "</option>
                                            ";
            }
            // line 386
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 391
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 394
        if (($context["status"] ?? null)) {
            // line 395
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 396
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 398
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 399
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 401
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 406
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 408
        echo ($context["sort_order"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 409
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
        // line 418
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 420
        echo ($context["manufacturer"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 421
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\"
                                           class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\"
                                                                         value=\"";
        // line 423
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 428
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 430
        echo ($context["entry_category"] ?? null);
        echo "\"
                                           id=\"input-category\" class=\"form-control\"/>
                                    <div id=\"product-category\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 434
            echo "                                            <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 434);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i>
                                                <label>
                                                    <input type=\"radio\" name=\"main_category\"
                                                           value=\"";
            // line 438
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 438);
            echo "\"
                                                           data-toggle=\"tooltip\" title=\"";
            // line 439
            echo ($context["entry_main_category"] ?? null);
            echo "\"
                                                           ";
            // line 440
            if ((($context["main_category"] ?? null) == twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 440))) {
                echo "checked=\"checked\"";
            }
            echo " />
                                                    <span>";
            // line 441
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 441);
            echo "</span>
                                                </label>
                                                <input type=\"hidden\" name=\"product_category[]\"
                                                       value=\"";
            // line 444
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 444);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "</div>
                                    <label>
                                        <input type=\"radio\" name=\"main_category\"
                                               value=\"";
        // line 449
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 449);
        echo "\"
                                               ";
        // line 450
        if ( !($context["main_category"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                                        <span>";
        // line 451
        echo ($context["text_no_main_category"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"alert alert-info\"><i
                                                class=\"fa fa-info-circle\"></i> ";
        // line 454
        echo ($context["help_main_category"] ?? null);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 459
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 461
        echo ($context["entry_filter"] ?? null);
        echo "\"
                                           id=\"input-filter\" class=\"form-control\"/>
                                    <div id=\"product-filter\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 464
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 465
            echo "                                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 465);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 466
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 466);
            echo "
                                                <input type=\"hidden\" name=\"product_filter[]\"
                                                       value=\"";
            // line 468
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 468);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 474
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 478
            echo "                                            <div class=\"checkbox\">
                                                <label> ";
            // line 479
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 479), ($context["product_store"] ?? null))) {
                // line 480
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 481
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 481);
                echo "\" checked=\"checked\"/>
                                                        ";
                // line 482
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 482);
                echo "
                                                    ";
            } else {
                // line 484
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 485
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 485);
                echo "\"/>
                                                        ";
                // line 486
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 486);
                echo "
                                                    ";
            }
            // line 487
            echo " </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 489
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 494
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 496
        echo ($context["entry_download"] ?? null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"product-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 499
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 500
            echo "                                            <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 500);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 501
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 501);
            echo "
                                                <input type=\"hidden\" name=\"product_download[]\"
                                                       value=\"";
            // line 503
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 503);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 510
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 512
        echo ($context["entry_related"] ?? null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"product-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 515
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 516
            echo "                                            <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 516);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 517
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 517);
            echo "
                                                <input type=\"hidden\" name=\"product_related[]\"
                                                       value=\"";
            // line 519
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 519);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
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
        // line 530
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 531
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 537
        $context["attribute_row"] = 0;
        // line 538
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 539
            echo "                                        <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                                                                                             name=\"product_attribute[";
            // line 541
            echo ($context["attribute_row"] ?? null);
            echo "][name]\"
                                                                                             value=\"";
            // line 542
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 542);
            echo "\"
                                                                                             placeholder=\"";
            // line 543
            echo ($context["entry_attribute"] ?? null);
            echo "\"
                                                                                             class=\"form-control\"/>
                                                <input type=\"hidden\"
                                                       name=\"product_attribute[";
            // line 546
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                                                       value=\"";
            // line 547
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 547);
            echo "\"/></td>
                                            <td class=\"text-left\">";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 549
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 550
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 550);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 550);
                echo ".png\"
                                                                    title=\"";
                // line 551
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 551);
                echo "\"/></span> <textarea
                                                                name=\"product_attribute[";
                // line 552
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 552);
                echo "][text]\"
                                                                rows=\"5\" placeholder=\"";
                // line 553
                echo ($context["entry_text"] ?? null);
                echo "\"
                                                                class=\"form-control\">";
                // line 554
                echo (((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 554)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 554)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 554)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 554)] ?? null) : null), "text", [], "any", false, false, false, 554)) : (""));
                echo "</textarea>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 556
            echo "</td>
                                            <td class=\"text-right\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#attribute-row";
            // line 559
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 560
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 565
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 566
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 574
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
        // line 586
        $context["option_row"] = 0;
        // line 587
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 588
            echo "                                            <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i
                                                            class=\"fa fa-minus-circle\"
                                                            onclick=\"\$('a[href=\\'#tab-option";
            // line 590
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 590);
            echo "
                                                </a></li>
                                            ";
            // line 592
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 593
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 595
        echo ($context["entry_option"] ?? null);
        echo "\"
                                                   id=\"input-option\" class=\"form-control\"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\"> ";
        // line 601
        $context["option_row"] = 0;
        // line 602
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 603
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 604
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                                <input type=\"hidden\"
                                                       name=\"product_option[";
            // line 606
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                                                       value=\"";
            // line 607
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 607);
            echo "\"/> <input
                                                        type=\"hidden\" name=\"product_option[";
            // line 608
            echo ($context["option_row"] ?? null);
            echo "][name]\"
                                                        value=\"";
            // line 609
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 609);
            echo "\"/> <input type=\"hidden\"
                                                                                                   name=\"product_option[";
            // line 610
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                                                                                                   value=\"";
            // line 611
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 611);
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 612
            echo ($context["option_row"] ?? null);
            echo "][type]\"
                                                       value=\"";
            // line 613
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 613);
            echo "\"/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\"
                                                           for=\"input-required";
            // line 616
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"product_option[";
            // line 618
            echo ($context["option_row"] ?? null);
            echo "][required]\"
                                                                id=\"input-required";
            // line 619
            echo ($context["option_row"] ?? null);
            echo "\"
                                                                class=\"form-control\">
                                                            ";
            // line 621
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 621)) {
                // line 622
                echo "                                                                <option value=\"1\"
                                                                        selected=\"selected\">";
                // line 623
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\">";
                // line 624
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            } else {
                // line 626
                echo "                                                                <option value=\"1\">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\"
                                                                        selected=\"selected\">";
                // line 628
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            }
            // line 630
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 633
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 633) == "text")) {
                // line 634
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 636
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 639
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 640
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 640);
                echo "\"
                                                                   placeholder=\"";
                // line 641
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 642
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 647
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 647) == "textarea")) {
                // line 648
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 650
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"product_option[";
                // line 652
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                      rows=\"5\" placeholder=\"";
                // line 653
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                      id=\"input-value";
                // line 654
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                      class=\"form-control\">";
                // line 655
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 655);
                echo "</textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 659
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 659) == "file")) {
                // line 660
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 662
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
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
                                                                   id=\"input-value";
                // line 668
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 673
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 673) == "date")) {
                // line 674
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 676
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 680
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 681
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 681);
                echo "\"
                                                                       placeholder=\"";
                // line 682
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-value";
                // line 684
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
            // line 692
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 692) == "time")) {
                // line 693
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 695
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 699
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 700
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 700);
                echo "\"
                                                                       placeholder=\"";
                // line 701
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"HH:mm\"
                                                                       id=\"input-value";
                // line 703
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
            // line 711
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 711) == "datetime")) {
                // line 712
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 714
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 718
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 719
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 719);
                echo "\"
                                                                       placeholder=\"";
                // line 720
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-value";
                // line 722
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
            // line 730
            echo "                                                ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "image"))) {
                // line 731
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 732
                echo ($context["option_row"] ?? null);
                echo "\"
                                                               class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                            <tr>
                                                                <td class=\"text-left\">";
                // line 736
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 737
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                                <td class=\"text-left\">";
                // line 738
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 739
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 740
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 741
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                                <td></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            ";
                // line 747
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 747));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 748
                    echo "                                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 750
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 752
                    if ((($__internal_compile_22 = ($context["option_values"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 752)] ?? null) : null)) {
                        // line 753
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_23 = ($context["option_values"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 753)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 754
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 754) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 754))) {
                                // line 755
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 755);
                                echo "\"
                                                                                                selected=\"selected\">";
                                // line 756
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 756);
                                echo "</option>
                                                                                    ";
                            } else {
                                // line 758
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 758);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 758);
                                echo "</option>
                                                                                    ";
                            }
                            // line 760
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 761
                        echo "                                                                            ";
                    }
                    // line 762
                    echo "                                                                        </select> <input type=\"hidden\"
                                                                                         name=\"product_option[";
                    // line 763
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                                                                         value=\"";
                    // line 764
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 764);
                    echo "\"/>
                                                                    </td>
                                                                    <td class=\"text-right\"><input type=\"text\"
                                                                                                  name=\"product_option[";
                    // line 767
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                                                                                  value=\"";
                    // line 768
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 768);
                    echo "\"
                                                                                                  placeholder=\"";
                    // line 769
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                                                                                  class=\"form-control\"/>
                                                                    </td>
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 773
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 775
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 775)) {
                        // line 776
                        echo "                                                                                <option value=\"1\"
                                                                                        selected=\"selected\">";
                        // line 777
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\">";
                        // line 778
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    } else {
                        // line 780
                        echo "                                                                                <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\"
                                                                                        selected=\"selected\">";
                        // line 782
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    }
                    // line 784
                    echo "                                                                        </select></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 786
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 788
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 788) == "+")) {
                        // line 789
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 793
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 795
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 795) == "-")) {
                        // line 796
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 800
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 802
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 803
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                                                                         value=\"";
                    // line 804
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 804);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 805
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 808
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 810
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 810) == "+")) {
                        // line 811
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 815
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 817
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 817) == "-")) {
                        // line 818
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 822
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 824
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 825
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                                                                         value=\"";
                    // line 826
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 826);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 827
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 830
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 832
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 832) == "+")) {
                        // line 833
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 837
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 839
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 839) == "-")) {
                        // line 840
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 844
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 846
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 847
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                                                                         value=\"";
                    // line 848
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 848);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 849
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\">
                                                                        <button type=\"button\"
                                                                                onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 853
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                    // line 855
                    echo ($context["button_remove"] ?? null);
                    echo "\"
                                                                                class=\"btn btn-danger\"><i
                                                                                    class=\"fa fa-minus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                ";
                    // line 861
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 862
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 863
                echo "                                                            </tbody>

                                                            <tfoot>
                                                            <tr>
                                                                <td colspan=\"6\"></td>
                                                                <td class=\"text-left\">
                                                                    <button type=\"button\"
                                                                            onclick=\"addOptionValue('";
                // line 870
                echo ($context["option_row"] ?? null);
                echo "');\"
                                                                            data-toggle=\"tooltip\"
                                                                            title=\"";
                // line 872
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
                // line 880
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">
                                                        ";
                // line 881
                if ((($__internal_compile_24 = ($context["option_values"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 881)] ?? null) : null)) {
                    // line 882
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_25 = ($context["option_values"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 882)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 883
                        echo "                                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 883);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 883);
                        echo "</option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 885
                    echo "                                                        ";
                }
                // line 886
                echo "                                                    </select>
                                                ";
            }
            // line 887
            echo " </div>
                                            ";
            // line 888
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 889
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
        // line 898
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 899
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-left\"></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 905
        $context["recurring_row"] = 0;
        // line 906
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 907
            echo "                                        <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 909
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 911
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 912
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 912) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 912))) {
                    // line 913
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 913);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 914
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 914);
                    echo "</option>
                                                        ";
                } else {
                    // line 916
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 916);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 916);
                    echo "</option>
                                                        ";
                }
                // line 918
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 919
            echo "                                                </select></td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 921
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 923
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 924
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 924) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 924))) {
                    // line 925
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 925);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 926
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 926);
                    echo "</option>
                                                        ";
                } else {
                    // line 928
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 928);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 928);
                    echo "</option>
                                                        ";
                }
                // line 930
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 931
            echo "                                                </select></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#recurring-row";
            // line 934
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 935
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 940
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 941
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 942
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 949
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
        // line 962
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 963
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 964
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 965
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 966
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 967
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 973
        $context["discount_row"] = 0;
        // line 974
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 975
            echo "                                        <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_discount[";
            // line 977
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 979
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 980
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 980) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 980))) {
                    // line 981
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 981);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 982
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 982);
                    echo "</option>
                                                        ";
                } else {
                    // line 984
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 984);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 984);
                    echo "</option>
                                                        ";
                }
                // line 986
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 987
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 989
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                                                          value=\"";
            // line 990
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 990);
            echo "\"
                                                                          placeholder=\"";
            // line 991
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 994
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 995
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 995);
            echo "\"
                                                                          placeholder=\"";
            // line 996
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 999
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 1000
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1000);
            echo "\"
                                                                          placeholder=\"";
            // line 1001
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 1006
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1007
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1007);
            echo "\"
                                                           placeholder=\"";
            // line 1008
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
            // line 1017
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1018
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1018);
            echo "\"
                                                           placeholder=\"";
            // line 1019
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
            // line 1027
            echo ($context["discount_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1028
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1033
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1034
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1035
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1042
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
        // line 1055
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1056
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1057
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1058
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1059
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1065
        $context["special_row"] = 0;
        // line 1066
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1067
            echo "                                        <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_special[";
            // line 1069
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 1071
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1072
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1072) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1072))) {
                    // line 1073
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1073);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1074
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1074);
                    echo "</option>
                                                        ";
                } else {
                    // line 1076
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1076);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1076);
                    echo "</option>
                                                        ";
                }
                // line 1078
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1079
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1081
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1082
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1082);
            echo "\"
                                                                          placeholder=\"";
            // line 1083
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1086
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 1087
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1087);
            echo "\"
                                                                          placeholder=\"";
            // line 1088
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1093
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1094
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1094);
            echo "\"
                                                           placeholder=\"";
            // line 1095
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
            // line 1104
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1105
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1105);
            echo "\"
                                                           placeholder=\"";
            // line 1106
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
            // line 1114
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1115
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1120
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1121
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1122
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"5\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1129
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
        // line 1142
        echo ($context["entry_image"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 1148
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 1150
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 1151
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
        // line 1161
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1162
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1168
        $context["image_row"] = 0;
        // line 1169
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1170
            echo "                                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1171
            echo ($context["image_row"] ?? null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 1173
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1173);
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 1174
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input
                                                        type=\"hidden\" name=\"product_image[";
            // line 1175
            echo ($context["image_row"] ?? null);
            echo "][image]\"
                                                        value=\"";
            // line 1176
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1176);
            echo "\"
                                                        id=\"input-image";
            // line 1177
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_image[";
            // line 1179
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 1180
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1180);
            echo "\"
                                                                          placeholder=\"";
            // line 1181
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 1184
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1185
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1190
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1191
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1192
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1199
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
        // line 1210
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1212
        echo ($context["points"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 1213
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1220
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1221
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1227
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1228
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1228);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_reward[";
            // line 1230
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1230);
            echo "][points]\"
                                                                          value=\"";
            // line 1231
            echo (((($__internal_compile_26 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1231)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1231)] ?? null) : null), "points", [], "any", false, false, false, 1231)) : (""));
            echo "\"
                                                                          class=\"form-control\"/></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1235
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                            title=\"";
        // line 1243
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"no_index\" value=\"1\"
                                               ";
        // line 1247
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
        // line 1251
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
        // line 1257
        echo ($context["text_keyword"] ?? null);
        echo "
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 1263
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 1264
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 1268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1269
            echo "                                                <tr>
                                                    <td class=\"text-left\">";
            // line 1270
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1270);
            echo "</td>
                                                    <td class=\"text-left\">";
            // line 1271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1272
                echo "                                                            <div class=\"input-group\"><span
                                                                        class=\"input-group-addon\"><img
                                                                            src=\"language/";
                // line 1274
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1274);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1274);
                echo ".png\"
                                                                            title=\"";
                // line 1275
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1275);
                echo "\"/></span> <input
                                                                        type=\"text\"
                                                                        name=\"product_seo_url[";
                // line 1277
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1277);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1277);
                echo "]\"
                                                                        value=\"";
                // line 1278
                if ((($__internal_compile_28 = (($__internal_compile_29 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1278)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1278)] ?? null) : null)) {
                    echo (($__internal_compile_30 = (($__internal_compile_31 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1278)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1278)] ?? null) : null);
                }
                echo "\"
                                                                        placeholder=\"";
                // line 1279
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                                        class=\"form-control\"/>
                                                            </div>
                                                            ";
                // line 1282
                if ((($__internal_compile_32 = (($__internal_compile_33 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1282)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1282)] ?? null) : null)) {
                    // line 1283
                    echo "                                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_34 = (($__internal_compile_35 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1283)] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1283)] ?? null) : null);
                    echo "</div>
                                                            ";
                }
                // line 1285
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
        // line 1288
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
        // line 1299
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1300
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1305
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1306
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1306);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1307
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1307);
            echo "]\"
                                                                          class=\"form-control\">
                                                    <option value=\"\"></option>
                                                    ";
            // line 1310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1311
                echo "                                                        ";
                if (((($__internal_compile_36 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1311)] ?? null) : null) && ((($__internal_compile_37 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1311)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1311)))) {
                    // line 1312
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1312);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1313
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1313);
                    echo "</option>
                                                        ";
                } else {
                    // line 1315
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1315);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1315);
                    echo "</option>
                                                        ";
                }
                // line 1317
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1318
            echo "                                                </select></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1321
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
        // line 1344
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 1349
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
        // line 1371
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
        // line 1388
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1388);
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
        // line 1400
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
        // line 1429
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
        // line 1458
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
        // line 1484
        echo ($context["attribute_row"] ?? null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1488
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 1490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1491
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1491);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1491);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1491);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1491);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1493
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1494
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
        // line 1508
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
        // line 1533
        echo ($context["option_row"] ?? null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1538
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
        // line 1561
        echo ($context["entry_required"] ?? null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 1563
        echo ($context["text_yes"] ?? null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 1564
        echo ($context["text_no"] ?? null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1570
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1571
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1577
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1578
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1584
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1585
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1591
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1592
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1598
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1599
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1605
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1606
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
        // line 1615
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1616
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 1617
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1618
        echo ($context["entry_price"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1619
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1620
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
        // line 1629
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
        // line 1657
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 1662
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 1667
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
        // line 1677
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1684
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 1686
        echo ($context["text_yes"] ?? null);
        echo "</option>';
            html += '    <option value=\"0\" selected>";
        // line 1687
        echo ($context["text_no"] ?? null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1693
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1698
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1703
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1704
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
        // line 1715
        echo ($context["discount_row"] ?? null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1721
            echo "            html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1721);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1721), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1723
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1724
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1725
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1726
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1727
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1728
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1729
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
        // line 1743
        echo ($context["special_row"] ?? null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1748
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1749
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1749);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1749), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1751
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1752
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1753
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1754
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1755
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1756
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 1762
        echo ($context["datepicker"] ?? null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 1771
        echo ($context["image_row"] ?? null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1775
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1776
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1777
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 1787
        echo ($context["recurring_row"] ?? null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 1793
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1794
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1794);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1794);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1796
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 1800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1801
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1801);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1801);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1803
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1806
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
        // line 1818
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 1823
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 1828
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
        // line 1838
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4044 => 1838,  4031 => 1828,  4023 => 1823,  4015 => 1818,  4000 => 1806,  3995 => 1803,  3984 => 1801,  3980 => 1800,  3974 => 1796,  3963 => 1794,  3959 => 1793,  3950 => 1787,  3937 => 1777,  3933 => 1776,  3927 => 1775,  3920 => 1771,  3908 => 1762,  3899 => 1756,  3895 => 1755,  3891 => 1754,  3887 => 1753,  3883 => 1752,  3880 => 1751,  3869 => 1749,  3865 => 1748,  3857 => 1743,  3840 => 1729,  3836 => 1728,  3832 => 1727,  3828 => 1726,  3824 => 1725,  3820 => 1724,  3817 => 1723,  3806 => 1721,  3802 => 1720,  3794 => 1715,  3780 => 1704,  3776 => 1703,  3768 => 1698,  3760 => 1693,  3751 => 1687,  3747 => 1686,  3742 => 1684,  3732 => 1677,  3719 => 1667,  3711 => 1662,  3703 => 1657,  3672 => 1629,  3660 => 1620,  3656 => 1619,  3652 => 1618,  3648 => 1617,  3644 => 1616,  3640 => 1615,  3628 => 1606,  3624 => 1605,  3615 => 1599,  3611 => 1598,  3602 => 1592,  3598 => 1591,  3589 => 1585,  3585 => 1584,  3576 => 1578,  3572 => 1577,  3563 => 1571,  3559 => 1570,  3550 => 1564,  3546 => 1563,  3541 => 1561,  3515 => 1538,  3507 => 1533,  3479 => 1508,  3462 => 1494,  3459 => 1493,  3442 => 1491,  3438 => 1490,  3433 => 1488,  3426 => 1484,  3397 => 1458,  3365 => 1429,  3333 => 1400,  3316 => 1388,  3296 => 1371,  3271 => 1349,  3263 => 1344,  3238 => 1321,  3230 => 1318,  3224 => 1317,  3216 => 1315,  3211 => 1313,  3206 => 1312,  3203 => 1311,  3199 => 1310,  3193 => 1307,  3189 => 1306,  3186 => 1305,  3182 => 1304,  3175 => 1300,  3171 => 1299,  3158 => 1288,  3145 => 1285,  3139 => 1283,  3137 => 1282,  3131 => 1279,  3125 => 1278,  3119 => 1277,  3114 => 1275,  3108 => 1274,  3104 => 1272,  3100 => 1271,  3096 => 1270,  3093 => 1269,  3089 => 1268,  3082 => 1264,  3078 => 1263,  3069 => 1257,  3056 => 1251,  3045 => 1247,  3036 => 1243,  3026 => 1235,  3016 => 1231,  3012 => 1230,  3007 => 1228,  3004 => 1227,  3000 => 1226,  2992 => 1221,  2988 => 1220,  2978 => 1213,  2974 => 1212,  2967 => 1210,  2953 => 1199,  2944 => 1192,  2938 => 1191,  2936 => 1190,  2928 => 1185,  2924 => 1184,  2918 => 1181,  2914 => 1180,  2910 => 1179,  2905 => 1177,  2901 => 1176,  2897 => 1175,  2893 => 1174,  2889 => 1173,  2884 => 1171,  2879 => 1170,  2874 => 1169,  2872 => 1168,  2863 => 1162,  2859 => 1161,  2846 => 1151,  2842 => 1150,  2837 => 1148,  2828 => 1142,  2812 => 1129,  2803 => 1122,  2797 => 1121,  2795 => 1120,  2787 => 1115,  2783 => 1114,  2772 => 1106,  2768 => 1105,  2764 => 1104,  2752 => 1095,  2748 => 1094,  2744 => 1093,  2736 => 1088,  2732 => 1087,  2728 => 1086,  2722 => 1083,  2718 => 1082,  2714 => 1081,  2710 => 1079,  2704 => 1078,  2696 => 1076,  2691 => 1074,  2686 => 1073,  2683 => 1072,  2679 => 1071,  2674 => 1069,  2668 => 1067,  2663 => 1066,  2661 => 1065,  2652 => 1059,  2648 => 1058,  2644 => 1057,  2640 => 1056,  2636 => 1055,  2620 => 1042,  2611 => 1035,  2605 => 1034,  2603 => 1033,  2595 => 1028,  2591 => 1027,  2580 => 1019,  2576 => 1018,  2572 => 1017,  2560 => 1008,  2556 => 1007,  2552 => 1006,  2544 => 1001,  2540 => 1000,  2536 => 999,  2530 => 996,  2526 => 995,  2522 => 994,  2516 => 991,  2512 => 990,  2508 => 989,  2504 => 987,  2498 => 986,  2490 => 984,  2485 => 982,  2480 => 981,  2477 => 980,  2473 => 979,  2468 => 977,  2462 => 975,  2457 => 974,  2455 => 973,  2446 => 967,  2442 => 966,  2438 => 965,  2434 => 964,  2430 => 963,  2426 => 962,  2410 => 949,  2401 => 942,  2395 => 941,  2393 => 940,  2385 => 935,  2381 => 934,  2376 => 931,  2370 => 930,  2362 => 928,  2357 => 926,  2352 => 925,  2349 => 924,  2345 => 923,  2340 => 921,  2336 => 919,  2330 => 918,  2322 => 916,  2317 => 914,  2312 => 913,  2309 => 912,  2305 => 911,  2300 => 909,  2294 => 907,  2289 => 906,  2287 => 905,  2278 => 899,  2274 => 898,  2258 => 889,  2256 => 888,  2253 => 887,  2249 => 886,  2246 => 885,  2235 => 883,  2230 => 882,  2228 => 881,  2224 => 880,  2213 => 872,  2208 => 870,  2199 => 863,  2193 => 862,  2191 => 861,  2182 => 855,  2177 => 853,  2170 => 849,  2166 => 848,  2160 => 847,  2157 => 846,  2153 => 844,  2147 => 840,  2144 => 839,  2140 => 837,  2134 => 833,  2132 => 832,  2125 => 830,  2119 => 827,  2115 => 826,  2109 => 825,  2106 => 824,  2102 => 822,  2096 => 818,  2093 => 817,  2089 => 815,  2083 => 811,  2081 => 810,  2074 => 808,  2068 => 805,  2064 => 804,  2058 => 803,  2055 => 802,  2051 => 800,  2045 => 796,  2042 => 795,  2038 => 793,  2032 => 789,  2030 => 788,  2023 => 786,  2019 => 784,  2014 => 782,  2008 => 780,  2003 => 778,  1999 => 777,  1996 => 776,  1994 => 775,  1987 => 773,  1980 => 769,  1976 => 768,  1970 => 767,  1964 => 764,  1958 => 763,  1955 => 762,  1952 => 761,  1946 => 760,  1938 => 758,  1933 => 756,  1928 => 755,  1925 => 754,  1920 => 753,  1918 => 752,  1911 => 750,  1905 => 748,  1901 => 747,  1892 => 741,  1888 => 740,  1884 => 739,  1880 => 738,  1876 => 737,  1872 => 736,  1865 => 732,  1862 => 731,  1859 => 730,  1848 => 722,  1843 => 720,  1839 => 719,  1835 => 718,  1826 => 714,  1822 => 712,  1819 => 711,  1808 => 703,  1803 => 701,  1799 => 700,  1795 => 699,  1786 => 695,  1782 => 693,  1779 => 692,  1768 => 684,  1763 => 682,  1759 => 681,  1755 => 680,  1746 => 676,  1742 => 674,  1739 => 673,  1731 => 668,  1727 => 667,  1723 => 666,  1719 => 665,  1711 => 662,  1707 => 660,  1704 => 659,  1697 => 655,  1693 => 654,  1689 => 653,  1685 => 652,  1678 => 650,  1674 => 648,  1671 => 647,  1663 => 642,  1659 => 641,  1655 => 640,  1651 => 639,  1643 => 636,  1639 => 634,  1637 => 633,  1632 => 630,  1627 => 628,  1621 => 626,  1616 => 624,  1612 => 623,  1609 => 622,  1607 => 621,  1602 => 619,  1598 => 618,  1591 => 616,  1585 => 613,  1581 => 612,  1577 => 611,  1573 => 610,  1569 => 609,  1565 => 608,  1561 => 607,  1557 => 606,  1551 => 604,  1546 => 603,  1543 => 602,  1541 => 601,  1532 => 595,  1529 => 594,  1523 => 593,  1521 => 592,  1512 => 590,  1506 => 588,  1501 => 587,  1499 => 586,  1484 => 574,  1475 => 567,  1469 => 566,  1467 => 565,  1459 => 560,  1455 => 559,  1450 => 556,  1441 => 554,  1437 => 553,  1431 => 552,  1427 => 551,  1421 => 550,  1418 => 549,  1414 => 548,  1410 => 547,  1406 => 546,  1400 => 543,  1396 => 542,  1392 => 541,  1386 => 539,  1381 => 538,  1379 => 537,  1370 => 531,  1366 => 530,  1355 => 521,  1346 => 519,  1341 => 517,  1336 => 516,  1332 => 515,  1326 => 512,  1319 => 510,  1312 => 505,  1303 => 503,  1298 => 501,  1293 => 500,  1289 => 499,  1283 => 496,  1276 => 494,  1269 => 489,  1261 => 487,  1256 => 486,  1252 => 485,  1249 => 484,  1244 => 482,  1240 => 481,  1237 => 480,  1235 => 479,  1232 => 478,  1228 => 477,  1222 => 474,  1216 => 470,  1207 => 468,  1202 => 466,  1197 => 465,  1193 => 464,  1187 => 461,  1180 => 459,  1172 => 454,  1166 => 451,  1160 => 450,  1156 => 449,  1151 => 446,  1142 => 444,  1136 => 441,  1130 => 440,  1126 => 439,  1122 => 438,  1114 => 434,  1110 => 433,  1104 => 430,  1097 => 428,  1089 => 423,  1084 => 421,  1080 => 420,  1073 => 418,  1061 => 409,  1057 => 408,  1052 => 406,  1045 => 401,  1040 => 399,  1035 => 398,  1030 => 396,  1025 => 395,  1023 => 394,  1017 => 391,  1011 => 387,  1005 => 386,  997 => 384,  992 => 382,  987 => 381,  984 => 380,  980 => 379,  974 => 376,  966 => 371,  962 => 370,  957 => 368,  951 => 364,  945 => 363,  937 => 361,  932 => 359,  927 => 358,  924 => 357,  920 => 356,  914 => 353,  903 => 345,  899 => 344,  892 => 340,  888 => 339,  881 => 335,  877 => 334,  870 => 330,  859 => 322,  855 => 321,  849 => 318,  842 => 313,  837 => 312,  834 => 311,  829 => 309,  826 => 308,  823 => 307,  818 => 306,  815 => 305,  810 => 303,  807 => 302,  805 => 301,  800 => 299,  794 => 295,  788 => 294,  780 => 292,  775 => 290,  770 => 289,  767 => 288,  763 => 287,  755 => 284,  747 => 278,  742 => 276,  737 => 275,  732 => 273,  727 => 272,  725 => 271,  719 => 268,  712 => 264,  708 => 263,  701 => 261,  693 => 256,  689 => 255,  684 => 253,  678 => 249,  672 => 248,  664 => 246,  659 => 244,  654 => 243,  651 => 242,  647 => 241,  643 => 240,  637 => 237,  626 => 231,  621 => 229,  614 => 225,  610 => 224,  605 => 222,  595 => 217,  588 => 215,  577 => 209,  570 => 207,  559 => 201,  552 => 199,  541 => 193,  534 => 191,  523 => 185,  516 => 183,  505 => 177,  498 => 175,  492 => 171,  486 => 170,  484 => 169,  480 => 168,  476 => 167,  471 => 165,  465 => 161,  454 => 157,  450 => 156,  446 => 155,  442 => 154,  434 => 151,  430 => 150,  422 => 145,  418 => 144,  414 => 143,  409 => 141,  401 => 138,  393 => 133,  389 => 132,  385 => 131,  380 => 129,  372 => 126,  364 => 121,  360 => 120,  356 => 119,  352 => 118,  348 => 117,  340 => 114,  331 => 108,  327 => 107,  323 => 106,  318 => 104,  310 => 101,  301 => 95,  297 => 94,  293 => 93,  288 => 91,  280 => 88,  274 => 84,  268 => 82,  266 => 81,  262 => 80,  258 => 79,  254 => 78,  249 => 76,  241 => 73,  235 => 69,  229 => 67,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  210 => 61,  202 => 58,  195 => 55,  191 => 54,  188 => 53,  178 => 51,  172 => 50,  167 => 49,  163 => 48,  155 => 43,  151 => 42,  147 => 41,  143 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
