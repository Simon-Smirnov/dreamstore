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
class __TwigTemplate_d337592e21cdc7339df762869a0de3c239d4b485c99cb72015fec709129b9c25 extends \Twig\Template
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
                                                   for=\"input-care";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "\">";
            echo ($context["entry_care"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "][care]\"
                                                        placeholder=\"";
            // line 115
            echo ($context["entry_care"] ?? null);
            echo "\"
                                                        id=\"input-care";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 117
            echo ($context["summernote"] ?? null);
            echo "\"
                                                        class=\"form-control\">";
            // line 118
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null), "care", [], "any", false, false, false, 118)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 126);
            echo "][meta_description]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 128
            echo ($context["entry_meta_description"] ?? null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "\"
                                                        class=\"form-control\">";
            // line 130
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null), "meta_description", [], "any", false, false, false, 130)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
            echo "][meta_keyword]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 140
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
            echo "\"
                                                        class=\"form-control\">";
            // line 142
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 142)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 148
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151);
            echo "][tag]\"
                                                       value=\"";
            // line 152
            echo (((($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["product_description"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null), "tag", [], "any", false, false, false, 152)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 153
            echo ($context["entry_tag"] ?? null);
            echo "\"
                                                       id=\"input-tag";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 162
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 164
        echo ($context["model"] ?? null);
        echo "\" data-length=\"255\"
                                           placeholder=\"";
        // line 165
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                                    ";
        // line 166
        if (($context["error_model"] ?? null)) {
            // line 167
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                                    ";
        }
        // line 168
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 172
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 174
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
        // line 180
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"upc\" value=\"";
        // line 182
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
        // line 188
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"ean\" value=\"";
        // line 190
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
        // line 196
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"jan\" value=\"";
        // line 198
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
        // line 204
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"isbn\" value=\"";
        // line 206
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
        // line 212
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"mpn\" value=\"";
        // line 214
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\"
                                           id=\"input-mpn\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 219
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"location\" value=\"";
        // line 221
        echo ($context["location"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 222
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 226
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 228
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
        // line 234
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                                        <option value=\"0\">";
        // line 237
        echo ($context["text_none"] ?? null);
        echo "</option>
                                        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 239
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 239) == ($context["tax_class_id"] ?? null))) {
                // line 240
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 240);
                echo "\"
                                                        selected=\"selected\">";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 241);
                echo "</option>
                                            ";
            } else {
                // line 243
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 243);
                echo "</option>
                                            ";
            }
            // line 245
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 250
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 252
        echo ($context["quantity"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 253
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 258
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"minimum\" value=\"";
        // line 260
        echo ($context["minimum"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 261
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 265
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                                        ";
        // line 268
        if (($context["subtract"] ?? null)) {
            // line 269
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 270
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 272
            echo "                                            <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 273
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 275
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 281
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                                        ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 285
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 285) == ($context["stock_status_id"] ?? null))) {
                // line 286
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 286);
                echo "\"
                                                        selected=\"selected\">";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 287);
                echo "</option>
                                            ";
            } else {
                // line 289
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 289);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 289);
                echo "</option>
                                            ";
            }
            // line 291
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 296
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\"> ";
        // line 298
        if (($context["shipping"] ?? null)) {
            // line 299
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 300
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        } else {
            // line 302
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                                            ";
            // line 303
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        }
        // line 304
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 305
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 306
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        } else {
            // line 308
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                                            ";
            // line 309
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        }
        // line 310
        echo " </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 315
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 318
        echo ($context["date_available"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 319
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
        // line 327
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 331
        echo ($context["length"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 332
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 336
        echo ($context["width"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 337
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 341
        echo ($context["height"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 342
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
        // line 350
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                                        ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 354
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 354) == ($context["length_class_id"] ?? null))) {
                // line 355
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 355);
                echo "\"
                                                        selected=\"selected\">";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 356);
                echo "</option>
                                            ";
            } else {
                // line 358
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 358);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 358);
                echo "</option>
                                            ";
            }
            // line 360
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 365
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 367
        echo ($context["weight"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 368
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-weight-class\">";
        // line 373
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                                        ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 377
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 377) == ($context["weight_class_id"] ?? null))) {
                // line 378
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 378);
                echo "\"
                                                        selected=\"selected\">";
                // line 379
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 379);
                echo "</option>
                                            ";
            } else {
                // line 381
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 381);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 381);
                echo "</option>
                                            ";
            }
            // line 383
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 388
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 391
        if (($context["status"] ?? null)) {
            // line 392
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 393
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 395
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 396
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 398
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 403
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 405
        echo ($context["sort_order"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 406
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
        // line 415
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 417
        echo ($context["manufacturer"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 418
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\"
                                           class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\"
                                                                         value=\"";
        // line 420
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 425
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 427
        echo ($context["entry_category"] ?? null);
        echo "\"
                                           id=\"input-category\" class=\"form-control\"/>
                                    <div id=\"product-category\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 431
            echo "                                            <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 431);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i>
                                                <label>
                                                    <input type=\"radio\" name=\"main_category\"
                                                           value=\"";
            // line 435
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 435);
            echo "\"
                                                           data-toggle=\"tooltip\" title=\"";
            // line 436
            echo ($context["entry_main_category"] ?? null);
            echo "\"
                                                           ";
            // line 437
            if ((($context["main_category"] ?? null) == twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 437))) {
                echo "checked=\"checked\"";
            }
            echo " />
                                                    <span>";
            // line 438
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 438);
            echo "</span>
                                                </label>
                                                <input type=\"hidden\" name=\"product_category[]\"
                                                       value=\"";
            // line 441
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 441);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "</div>
                                    <label>
                                        <input type=\"radio\" name=\"main_category\"
                                               value=\"";
        // line 446
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 446);
        echo "\"
                                               ";
        // line 447
        if ( !($context["main_category"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                                        <span>";
        // line 448
        echo ($context["text_no_main_category"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"alert alert-info\"><i
                                                class=\"fa fa-info-circle\"></i> ";
        // line 451
        echo ($context["help_main_category"] ?? null);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 456
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 458
        echo ($context["entry_filter"] ?? null);
        echo "\"
                                           id=\"input-filter\" class=\"form-control\"/>
                                    <div id=\"product-filter\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 462
            echo "                                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 462);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 463
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 463);
            echo "
                                                <input type=\"hidden\" name=\"product_filter[]\"
                                                       value=\"";
            // line 465
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 465);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 471
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 475
            echo "                                            <div class=\"checkbox\">
                                                <label> ";
            // line 476
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 476), ($context["product_store"] ?? null))) {
                // line 477
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 478
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 478);
                echo "\" checked=\"checked\"/>
                                                        ";
                // line 479
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 479);
                echo "
                                                    ";
            } else {
                // line 481
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 482
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 482);
                echo "\"/>
                                                        ";
                // line 483
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 483);
                echo "
                                                    ";
            }
            // line 484
            echo " </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 491
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 493
        echo ($context["entry_download"] ?? null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"product-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 497
            echo "                                            <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 497);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 498
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 498);
            echo "
                                                <input type=\"hidden\" name=\"product_download[]\"
                                                       value=\"";
            // line 500
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 500);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 507
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 509
        echo ($context["entry_related"] ?? null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"product-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 512
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 513
            echo "                                            <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 513);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 514
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 514);
            echo "
                                                <input type=\"hidden\" name=\"product_related[]\"
                                                       value=\"";
            // line 516
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 516);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
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
        // line 527
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 528
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 534
        $context["attribute_row"] = 0;
        // line 535
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 536
            echo "                                        <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                                                                                             name=\"product_attribute[";
            // line 538
            echo ($context["attribute_row"] ?? null);
            echo "][name]\"
                                                                                             value=\"";
            // line 539
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 539);
            echo "\"
                                                                                             placeholder=\"";
            // line 540
            echo ($context["entry_attribute"] ?? null);
            echo "\"
                                                                                             class=\"form-control\"/>
                                                <input type=\"hidden\"
                                                       name=\"product_attribute[";
            // line 543
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                                                       value=\"";
            // line 544
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 544);
            echo "\"/></td>
                                            <td class=\"text-left\">";
            // line 545
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 546
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 547
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 547);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 547);
                echo ".png\"
                                                                    title=\"";
                // line 548
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 548);
                echo "\"/></span> <textarea
                                                                name=\"product_attribute[";
                // line 549
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 549);
                echo "][text]\"
                                                                rows=\"5\" placeholder=\"";
                // line 550
                echo ($context["entry_text"] ?? null);
                echo "\"
                                                                class=\"form-control\">";
                // line 551
                echo (((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 551)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 551)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 551)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 551)] ?? null) : null), "text", [], "any", false, false, false, 551)) : (""));
                echo "</textarea>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 553
            echo "</td>
                                            <td class=\"text-right\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#attribute-row";
            // line 556
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 557
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 562
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 563
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 571
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
        // line 583
        $context["option_row"] = 0;
        // line 584
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 585
            echo "                                            <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i
                                                            class=\"fa fa-minus-circle\"
                                                            onclick=\"\$('a[href=\\'#tab-option";
            // line 587
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 587);
            echo "
                                                </a></li>
                                            ";
            // line 589
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 590
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 591
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 592
        echo ($context["entry_option"] ?? null);
        echo "\"
                                                   id=\"input-option\" class=\"form-control\"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\"> ";
        // line 598
        $context["option_row"] = 0;
        // line 599
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 600
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 601
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                                <input type=\"hidden\"
                                                       name=\"product_option[";
            // line 603
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                                                       value=\"";
            // line 604
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 604);
            echo "\"/> <input
                                                        type=\"hidden\" name=\"product_option[";
            // line 605
            echo ($context["option_row"] ?? null);
            echo "][name]\"
                                                        value=\"";
            // line 606
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 606);
            echo "\"/> <input type=\"hidden\"
                                                                                                   name=\"product_option[";
            // line 607
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                                                                                                   value=\"";
            // line 608
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 608);
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 609
            echo ($context["option_row"] ?? null);
            echo "][type]\"
                                                       value=\"";
            // line 610
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 610);
            echo "\"/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\"
                                                           for=\"input-required";
            // line 613
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"product_option[";
            // line 615
            echo ($context["option_row"] ?? null);
            echo "][required]\"
                                                                id=\"input-required";
            // line 616
            echo ($context["option_row"] ?? null);
            echo "\"
                                                                class=\"form-control\">
                                                            ";
            // line 618
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 618)) {
                // line 619
                echo "                                                                <option value=\"1\"
                                                                        selected=\"selected\">";
                // line 620
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\">";
                // line 621
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            } else {
                // line 623
                echo "                                                                <option value=\"1\">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\"
                                                                        selected=\"selected\">";
                // line 625
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            }
            // line 627
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 630
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 630) == "text")) {
                // line 631
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 633
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 636
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 637
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 637);
                echo "\"
                                                                   placeholder=\"";
                // line 638
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 639
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 644
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 644) == "textarea")) {
                // line 645
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 647
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"product_option[";
                // line 649
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                      rows=\"5\" placeholder=\"";
                // line 650
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                      id=\"input-value";
                // line 651
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                      class=\"form-control\">";
                // line 652
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 652);
                echo "</textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 656
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 656) == "file")) {
                // line 657
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 659
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 662
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 663
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 663);
                echo "\"
                                                                   placeholder=\"";
                // line 664
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 665
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 670
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 670) == "date")) {
                // line 671
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 673
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 677
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 678
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 678);
                echo "\"
                                                                       placeholder=\"";
                // line 679
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-value";
                // line 681
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
            // line 689
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 689) == "time")) {
                // line 690
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 692
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 696
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 697
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 697);
                echo "\"
                                                                       placeholder=\"";
                // line 698
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"HH:mm\"
                                                                       id=\"input-value";
                // line 700
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
            // line 708
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 708) == "datetime")) {
                // line 709
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 711
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 715
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 716
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 716);
                echo "\"
                                                                       placeholder=\"";
                // line 717
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-value";
                // line 719
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
            // line 727
            echo "                                                ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 727) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 727) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 727) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 727) == "image"))) {
                // line 728
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 729
                echo ($context["option_row"] ?? null);
                echo "\"
                                                               class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                            <tr>
                                                                <td class=\"text-left\">";
                // line 733
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 734
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                                <td class=\"text-left\">";
                // line 735
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 736
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 737
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 738
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                                <td></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            ";
                // line 744
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 744));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 745
                    echo "                                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 747
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 749
                    if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 749)] ?? null) : null)) {
                        // line 750
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 750)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 751
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 751) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 751))) {
                                // line 752
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 752);
                                echo "\"
                                                                                                selected=\"selected\">";
                                // line 753
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 753);
                                echo "</option>
                                                                                    ";
                            } else {
                                // line 755
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 755);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 755);
                                echo "</option>
                                                                                    ";
                            }
                            // line 757
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 758
                        echo "                                                                            ";
                    }
                    // line 759
                    echo "                                                                        </select> <input type=\"hidden\"
                                                                                         name=\"product_option[";
                    // line 760
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                                                                         value=\"";
                    // line 761
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 761);
                    echo "\"/>
                                                                    </td>
                                                                    <td class=\"text-right\"><input type=\"text\"
                                                                                                  name=\"product_option[";
                    // line 764
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                                                                                  value=\"";
                    // line 765
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 765);
                    echo "\"
                                                                                                  placeholder=\"";
                    // line 766
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                                                                                  class=\"form-control\"/>
                                                                    </td>
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 770
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 772
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 772)) {
                        // line 773
                        echo "                                                                                <option value=\"1\"
                                                                                        selected=\"selected\">";
                        // line 774
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\">";
                        // line 775
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    } else {
                        // line 777
                        echo "                                                                                <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\"
                                                                                        selected=\"selected\">";
                        // line 779
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    }
                    // line 781
                    echo "                                                                        </select></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 783
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 785
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 785) == "+")) {
                        // line 786
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 790
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 792
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 792) == "-")) {
                        // line 793
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 797
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 799
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 800
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                                                                         value=\"";
                    // line 801
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 801);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 802
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 805
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 807
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 807) == "+")) {
                        // line 808
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 812
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 814
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 814) == "-")) {
                        // line 815
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 819
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 821
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 822
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                                                                         value=\"";
                    // line 823
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 823);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 824
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 827
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 829
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 829) == "+")) {
                        // line 830
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 834
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 836
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 836) == "-")) {
                        // line 837
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 841
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 843
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 844
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                                                                         value=\"";
                    // line 845
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 845);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 846
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\">
                                                                        <button type=\"button\"
                                                                                onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 850
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                    // line 852
                    echo ($context["button_remove"] ?? null);
                    echo "\"
                                                                                class=\"btn btn-danger\"><i
                                                                                    class=\"fa fa-minus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                ";
                    // line 858
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 859
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 860
                echo "                                                            </tbody>

                                                            <tfoot>
                                                            <tr>
                                                                <td colspan=\"6\"></td>
                                                                <td class=\"text-left\">
                                                                    <button type=\"button\"
                                                                            onclick=\"addOptionValue('";
                // line 867
                echo ($context["option_row"] ?? null);
                echo "');\"
                                                                            data-toggle=\"tooltip\"
                                                                            title=\"";
                // line 869
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
                // line 877
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">
                                                        ";
                // line 878
                if ((($__internal_compile_22 = ($context["option_values"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 878)] ?? null) : null)) {
                    // line 879
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_23 = ($context["option_values"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 879)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 880
                        echo "                                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 880);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 880);
                        echo "</option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 882
                    echo "                                                        ";
                }
                // line 883
                echo "                                                    </select>
                                                ";
            }
            // line 884
            echo " </div>
                                            ";
            // line 885
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 886
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
        // line 895
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 896
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-left\"></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 902
        $context["recurring_row"] = 0;
        // line 903
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 904
            echo "                                        <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 906
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 908
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 909
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 909) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 909))) {
                    // line 910
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 910);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 911
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 911);
                    echo "</option>
                                                        ";
                } else {
                    // line 913
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 913);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 913);
                    echo "</option>
                                                        ";
                }
                // line 915
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 916
            echo "                                                </select></td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 918
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 920
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 921
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 921) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 921))) {
                    // line 922
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 922);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 923
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 923);
                    echo "</option>
                                                        ";
                } else {
                    // line 925
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 925);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 925);
                    echo "</option>
                                                        ";
                }
                // line 927
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            echo "                                                </select></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#recurring-row";
            // line 931
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 932
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 937
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 938
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 939
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 946
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
        // line 959
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 960
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 961
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 962
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 963
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 964
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 970
        $context["discount_row"] = 0;
        // line 971
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 972
            echo "                                        <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_discount[";
            // line 974
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 976
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 977
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 977) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 977))) {
                    // line 978
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 978);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 979
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 979);
                    echo "</option>
                                                        ";
                } else {
                    // line 981
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 981);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 981);
                    echo "</option>
                                                        ";
                }
                // line 983
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 984
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 986
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                                                          value=\"";
            // line 987
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 987);
            echo "\"
                                                                          placeholder=\"";
            // line 988
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 991
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 992
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 992);
            echo "\"
                                                                          placeholder=\"";
            // line 993
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 996
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 997
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 997);
            echo "\"
                                                                          placeholder=\"";
            // line 998
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 1003
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1004
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1004);
            echo "\"
                                                           placeholder=\"";
            // line 1005
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
            // line 1014
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1015
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1015);
            echo "\"
                                                           placeholder=\"";
            // line 1016
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
            // line 1024
            echo ($context["discount_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1025
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1030
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1031
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1032
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1039
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
        // line 1052
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1053
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1054
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1055
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1056
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1062
        $context["special_row"] = 0;
        // line 1063
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1064
            echo "                                        <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_special[";
            // line 1066
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 1068
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1069
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1069) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1069))) {
                    // line 1070
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1070);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1071
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1071);
                    echo "</option>
                                                        ";
                } else {
                    // line 1073
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1073);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1073);
                    echo "</option>
                                                        ";
                }
                // line 1075
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1076
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1078
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1079
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1079);
            echo "\"
                                                                          placeholder=\"";
            // line 1080
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1083
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 1084
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1084);
            echo "\"
                                                                          placeholder=\"";
            // line 1085
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1090
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1091
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1091);
            echo "\"
                                                           placeholder=\"";
            // line 1092
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
            // line 1101
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1102
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1102);
            echo "\"
                                                           placeholder=\"";
            // line 1103
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
            // line 1111
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1112
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1117
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1118
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1119
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"5\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1126
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
        // line 1139
        echo ($context["entry_image"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 1145
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 1147
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 1148
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
        // line 1158
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1159
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1165
        $context["image_row"] = 0;
        // line 1166
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1167
            echo "                                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1168
            echo ($context["image_row"] ?? null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 1170
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1170);
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 1171
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input
                                                        type=\"hidden\" name=\"product_image[";
            // line 1172
            echo ($context["image_row"] ?? null);
            echo "][image]\"
                                                        value=\"";
            // line 1173
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1173);
            echo "\"
                                                        id=\"input-image";
            // line 1174
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_image[";
            // line 1176
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 1177
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1177);
            echo "\"
                                                                          placeholder=\"";
            // line 1178
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 1181
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1182
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1187
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1188
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1189
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1196
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
        // line 1207
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1209
        echo ($context["points"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 1210
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1217
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1218
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1224
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1225
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1225);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_reward[";
            // line 1227
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1227);
            echo "][points]\"
                                                                          value=\"";
            // line 1228
            echo (((($__internal_compile_24 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1228)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1228)] ?? null) : null), "points", [], "any", false, false, false, 1228)) : (""));
            echo "\"
                                                                          class=\"form-control\"/></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1232
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                            title=\"";
        // line 1240
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"no_index\" value=\"1\"
                                               ";
        // line 1244
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
        // line 1248
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
        // line 1254
        echo ($context["text_keyword"] ?? null);
        echo "
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 1260
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 1261
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 1265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1266
            echo "                                                <tr>
                                                    <td class=\"text-left\">";
            // line 1267
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1267);
            echo "</td>
                                                    <td class=\"text-left\">";
            // line 1268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1269
                echo "                                                            <div class=\"input-group\"><span
                                                                        class=\"input-group-addon\"><img
                                                                            src=\"language/";
                // line 1271
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1271);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1271);
                echo ".png\"
                                                                            title=\"";
                // line 1272
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1272);
                echo "\"/></span> <input
                                                                        type=\"text\"
                                                                        name=\"product_seo_url[";
                // line 1274
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1274);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1274);
                echo "]\"
                                                                        value=\"";
                // line 1275
                if ((($__internal_compile_26 = (($__internal_compile_27 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1275)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1275)] ?? null) : null)) {
                    echo (($__internal_compile_28 = (($__internal_compile_29 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1275)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1275)] ?? null) : null);
                }
                echo "\"
                                                                        placeholder=\"";
                // line 1276
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                                        class=\"form-control\"/>
                                                            </div>
                                                            ";
                // line 1279
                if ((($__internal_compile_30 = (($__internal_compile_31 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1279)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1279)] ?? null) : null)) {
                    // line 1280
                    echo "                                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_32 = (($__internal_compile_33 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1280)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1280)] ?? null) : null);
                    echo "</div>
                                                            ";
                }
                // line 1282
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
        // line 1285
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
        // line 1296
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1297
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1302
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1303
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1303);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1304
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1304);
            echo "]\"
                                                                          class=\"form-control\">
                                                    <option value=\"\"></option>
                                                    ";
            // line 1307
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1308
                echo "                                                        ";
                if (((($__internal_compile_34 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1308)] ?? null) : null) && ((($__internal_compile_35 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1308)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1308)))) {
                    // line 1309
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1309);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1310
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1310);
                    echo "</option>
                                                        ";
                } else {
                    // line 1312
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1312);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1312);
                    echo "</option>
                                                        ";
                }
                // line 1314
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1315
            echo "                                                </select></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1318
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
        // line 1341
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 1346
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
        // line 1368
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
        // line 1385
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1385);
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
        // line 1397
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
        // line 1426
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
        // line 1455
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
        // line 1481
        echo ($context["attribute_row"] ?? null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1485
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 1487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1488
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1488);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1488);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1488);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1488);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1490
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1491
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
        // line 1505
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
        // line 1530
        echo ($context["option_row"] ?? null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1535
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
        // line 1558
        echo ($context["entry_required"] ?? null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 1560
        echo ($context["text_yes"] ?? null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 1561
        echo ($context["text_no"] ?? null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1567
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1568
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1574
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1575
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1581
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1582
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1588
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1589
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1595
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1596
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1602
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1603
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
        // line 1612
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1613
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 1614
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1615
        echo ($context["entry_price"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1616
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1617
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
        // line 1626
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
        // line 1654
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 1659
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 1664
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
        // line 1674
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1681
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 1683
        echo ($context["text_yes"] ?? null);
        echo "</option>';
            html += '    <option value=\"0\" selected>";
        // line 1684
        echo ($context["text_no"] ?? null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1690
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1695
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1700
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1701
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
        // line 1712
        echo ($context["discount_row"] ?? null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1717
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1718
            echo "            html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1718);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1718), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1720
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1721
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1722
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1723
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1724
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1725
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1726
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
        // line 1740
        echo ($context["special_row"] ?? null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1746
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1746);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1746), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1748
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1749
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1750
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1751
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1752
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1753
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 1759
        echo ($context["datepicker"] ?? null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 1768
        echo ($context["image_row"] ?? null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1772
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1773
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1774
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 1784
        echo ($context["recurring_row"] ?? null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 1790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1791
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1791);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1791);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1793
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 1797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1798
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1798);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1798);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1800
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1803
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
        // line 1815
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 1820
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 1825
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
        // line 1835
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
        return array (  4037 => 1835,  4024 => 1825,  4016 => 1820,  4008 => 1815,  3993 => 1803,  3988 => 1800,  3977 => 1798,  3973 => 1797,  3967 => 1793,  3956 => 1791,  3952 => 1790,  3943 => 1784,  3930 => 1774,  3926 => 1773,  3920 => 1772,  3913 => 1768,  3901 => 1759,  3892 => 1753,  3888 => 1752,  3884 => 1751,  3880 => 1750,  3876 => 1749,  3873 => 1748,  3862 => 1746,  3858 => 1745,  3850 => 1740,  3833 => 1726,  3829 => 1725,  3825 => 1724,  3821 => 1723,  3817 => 1722,  3813 => 1721,  3810 => 1720,  3799 => 1718,  3795 => 1717,  3787 => 1712,  3773 => 1701,  3769 => 1700,  3761 => 1695,  3753 => 1690,  3744 => 1684,  3740 => 1683,  3735 => 1681,  3725 => 1674,  3712 => 1664,  3704 => 1659,  3696 => 1654,  3665 => 1626,  3653 => 1617,  3649 => 1616,  3645 => 1615,  3641 => 1614,  3637 => 1613,  3633 => 1612,  3621 => 1603,  3617 => 1602,  3608 => 1596,  3604 => 1595,  3595 => 1589,  3591 => 1588,  3582 => 1582,  3578 => 1581,  3569 => 1575,  3565 => 1574,  3556 => 1568,  3552 => 1567,  3543 => 1561,  3539 => 1560,  3534 => 1558,  3508 => 1535,  3500 => 1530,  3472 => 1505,  3455 => 1491,  3452 => 1490,  3435 => 1488,  3431 => 1487,  3426 => 1485,  3419 => 1481,  3390 => 1455,  3358 => 1426,  3326 => 1397,  3309 => 1385,  3289 => 1368,  3264 => 1346,  3256 => 1341,  3231 => 1318,  3223 => 1315,  3217 => 1314,  3209 => 1312,  3204 => 1310,  3199 => 1309,  3196 => 1308,  3192 => 1307,  3186 => 1304,  3182 => 1303,  3179 => 1302,  3175 => 1301,  3168 => 1297,  3164 => 1296,  3151 => 1285,  3138 => 1282,  3132 => 1280,  3130 => 1279,  3124 => 1276,  3118 => 1275,  3112 => 1274,  3107 => 1272,  3101 => 1271,  3097 => 1269,  3093 => 1268,  3089 => 1267,  3086 => 1266,  3082 => 1265,  3075 => 1261,  3071 => 1260,  3062 => 1254,  3049 => 1248,  3038 => 1244,  3029 => 1240,  3019 => 1232,  3009 => 1228,  3005 => 1227,  3000 => 1225,  2997 => 1224,  2993 => 1223,  2985 => 1218,  2981 => 1217,  2971 => 1210,  2967 => 1209,  2960 => 1207,  2946 => 1196,  2937 => 1189,  2931 => 1188,  2929 => 1187,  2921 => 1182,  2917 => 1181,  2911 => 1178,  2907 => 1177,  2903 => 1176,  2898 => 1174,  2894 => 1173,  2890 => 1172,  2886 => 1171,  2882 => 1170,  2877 => 1168,  2872 => 1167,  2867 => 1166,  2865 => 1165,  2856 => 1159,  2852 => 1158,  2839 => 1148,  2835 => 1147,  2830 => 1145,  2821 => 1139,  2805 => 1126,  2796 => 1119,  2790 => 1118,  2788 => 1117,  2780 => 1112,  2776 => 1111,  2765 => 1103,  2761 => 1102,  2757 => 1101,  2745 => 1092,  2741 => 1091,  2737 => 1090,  2729 => 1085,  2725 => 1084,  2721 => 1083,  2715 => 1080,  2711 => 1079,  2707 => 1078,  2703 => 1076,  2697 => 1075,  2689 => 1073,  2684 => 1071,  2679 => 1070,  2676 => 1069,  2672 => 1068,  2667 => 1066,  2661 => 1064,  2656 => 1063,  2654 => 1062,  2645 => 1056,  2641 => 1055,  2637 => 1054,  2633 => 1053,  2629 => 1052,  2613 => 1039,  2604 => 1032,  2598 => 1031,  2596 => 1030,  2588 => 1025,  2584 => 1024,  2573 => 1016,  2569 => 1015,  2565 => 1014,  2553 => 1005,  2549 => 1004,  2545 => 1003,  2537 => 998,  2533 => 997,  2529 => 996,  2523 => 993,  2519 => 992,  2515 => 991,  2509 => 988,  2505 => 987,  2501 => 986,  2497 => 984,  2491 => 983,  2483 => 981,  2478 => 979,  2473 => 978,  2470 => 977,  2466 => 976,  2461 => 974,  2455 => 972,  2450 => 971,  2448 => 970,  2439 => 964,  2435 => 963,  2431 => 962,  2427 => 961,  2423 => 960,  2419 => 959,  2403 => 946,  2394 => 939,  2388 => 938,  2386 => 937,  2378 => 932,  2374 => 931,  2369 => 928,  2363 => 927,  2355 => 925,  2350 => 923,  2345 => 922,  2342 => 921,  2338 => 920,  2333 => 918,  2329 => 916,  2323 => 915,  2315 => 913,  2310 => 911,  2305 => 910,  2302 => 909,  2298 => 908,  2293 => 906,  2287 => 904,  2282 => 903,  2280 => 902,  2271 => 896,  2267 => 895,  2251 => 886,  2249 => 885,  2246 => 884,  2242 => 883,  2239 => 882,  2228 => 880,  2223 => 879,  2221 => 878,  2217 => 877,  2206 => 869,  2201 => 867,  2192 => 860,  2186 => 859,  2184 => 858,  2175 => 852,  2170 => 850,  2163 => 846,  2159 => 845,  2153 => 844,  2150 => 843,  2146 => 841,  2140 => 837,  2137 => 836,  2133 => 834,  2127 => 830,  2125 => 829,  2118 => 827,  2112 => 824,  2108 => 823,  2102 => 822,  2099 => 821,  2095 => 819,  2089 => 815,  2086 => 814,  2082 => 812,  2076 => 808,  2074 => 807,  2067 => 805,  2061 => 802,  2057 => 801,  2051 => 800,  2048 => 799,  2044 => 797,  2038 => 793,  2035 => 792,  2031 => 790,  2025 => 786,  2023 => 785,  2016 => 783,  2012 => 781,  2007 => 779,  2001 => 777,  1996 => 775,  1992 => 774,  1989 => 773,  1987 => 772,  1980 => 770,  1973 => 766,  1969 => 765,  1963 => 764,  1957 => 761,  1951 => 760,  1948 => 759,  1945 => 758,  1939 => 757,  1931 => 755,  1926 => 753,  1921 => 752,  1918 => 751,  1913 => 750,  1911 => 749,  1904 => 747,  1898 => 745,  1894 => 744,  1885 => 738,  1881 => 737,  1877 => 736,  1873 => 735,  1869 => 734,  1865 => 733,  1858 => 729,  1855 => 728,  1852 => 727,  1841 => 719,  1836 => 717,  1832 => 716,  1828 => 715,  1819 => 711,  1815 => 709,  1812 => 708,  1801 => 700,  1796 => 698,  1792 => 697,  1788 => 696,  1779 => 692,  1775 => 690,  1772 => 689,  1761 => 681,  1756 => 679,  1752 => 678,  1748 => 677,  1739 => 673,  1735 => 671,  1732 => 670,  1724 => 665,  1720 => 664,  1716 => 663,  1712 => 662,  1704 => 659,  1700 => 657,  1697 => 656,  1690 => 652,  1686 => 651,  1682 => 650,  1678 => 649,  1671 => 647,  1667 => 645,  1664 => 644,  1656 => 639,  1652 => 638,  1648 => 637,  1644 => 636,  1636 => 633,  1632 => 631,  1630 => 630,  1625 => 627,  1620 => 625,  1614 => 623,  1609 => 621,  1605 => 620,  1602 => 619,  1600 => 618,  1595 => 616,  1591 => 615,  1584 => 613,  1578 => 610,  1574 => 609,  1570 => 608,  1566 => 607,  1562 => 606,  1558 => 605,  1554 => 604,  1550 => 603,  1544 => 601,  1539 => 600,  1536 => 599,  1534 => 598,  1525 => 592,  1522 => 591,  1516 => 590,  1514 => 589,  1505 => 587,  1499 => 585,  1494 => 584,  1492 => 583,  1477 => 571,  1468 => 564,  1462 => 563,  1460 => 562,  1452 => 557,  1448 => 556,  1443 => 553,  1434 => 551,  1430 => 550,  1424 => 549,  1420 => 548,  1414 => 547,  1411 => 546,  1407 => 545,  1403 => 544,  1399 => 543,  1393 => 540,  1389 => 539,  1385 => 538,  1379 => 536,  1374 => 535,  1372 => 534,  1363 => 528,  1359 => 527,  1348 => 518,  1339 => 516,  1334 => 514,  1329 => 513,  1325 => 512,  1319 => 509,  1312 => 507,  1305 => 502,  1296 => 500,  1291 => 498,  1286 => 497,  1282 => 496,  1276 => 493,  1269 => 491,  1262 => 486,  1254 => 484,  1249 => 483,  1245 => 482,  1242 => 481,  1237 => 479,  1233 => 478,  1230 => 477,  1228 => 476,  1225 => 475,  1221 => 474,  1215 => 471,  1209 => 467,  1200 => 465,  1195 => 463,  1190 => 462,  1186 => 461,  1180 => 458,  1173 => 456,  1165 => 451,  1159 => 448,  1153 => 447,  1149 => 446,  1144 => 443,  1135 => 441,  1129 => 438,  1123 => 437,  1119 => 436,  1115 => 435,  1107 => 431,  1103 => 430,  1097 => 427,  1090 => 425,  1082 => 420,  1077 => 418,  1073 => 417,  1066 => 415,  1054 => 406,  1050 => 405,  1045 => 403,  1038 => 398,  1033 => 396,  1028 => 395,  1023 => 393,  1018 => 392,  1016 => 391,  1010 => 388,  1004 => 384,  998 => 383,  990 => 381,  985 => 379,  980 => 378,  977 => 377,  973 => 376,  967 => 373,  959 => 368,  955 => 367,  950 => 365,  944 => 361,  938 => 360,  930 => 358,  925 => 356,  920 => 355,  917 => 354,  913 => 353,  907 => 350,  896 => 342,  892 => 341,  885 => 337,  881 => 336,  874 => 332,  870 => 331,  863 => 327,  852 => 319,  848 => 318,  842 => 315,  835 => 310,  830 => 309,  827 => 308,  822 => 306,  819 => 305,  816 => 304,  811 => 303,  808 => 302,  803 => 300,  800 => 299,  798 => 298,  793 => 296,  787 => 292,  781 => 291,  773 => 289,  768 => 287,  763 => 286,  760 => 285,  756 => 284,  748 => 281,  740 => 275,  735 => 273,  730 => 272,  725 => 270,  720 => 269,  718 => 268,  712 => 265,  705 => 261,  701 => 260,  694 => 258,  686 => 253,  682 => 252,  677 => 250,  671 => 246,  665 => 245,  657 => 243,  652 => 241,  647 => 240,  644 => 239,  640 => 238,  636 => 237,  630 => 234,  619 => 228,  614 => 226,  607 => 222,  603 => 221,  598 => 219,  588 => 214,  581 => 212,  570 => 206,  563 => 204,  552 => 198,  545 => 196,  534 => 190,  527 => 188,  516 => 182,  509 => 180,  498 => 174,  491 => 172,  485 => 168,  479 => 167,  477 => 166,  473 => 165,  469 => 164,  464 => 162,  458 => 158,  447 => 154,  443 => 153,  439 => 152,  435 => 151,  427 => 148,  423 => 147,  415 => 142,  411 => 141,  407 => 140,  402 => 138,  394 => 135,  386 => 130,  382 => 129,  378 => 128,  373 => 126,  365 => 123,  357 => 118,  353 => 117,  349 => 116,  345 => 115,  341 => 114,  333 => 111,  325 => 106,  321 => 105,  317 => 104,  313 => 103,  309 => 102,  301 => 99,  292 => 93,  288 => 92,  284 => 91,  279 => 89,  271 => 86,  262 => 80,  258 => 79,  254 => 78,  249 => 76,  241 => 73,  235 => 69,  229 => 67,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  210 => 61,  202 => 58,  195 => 55,  191 => 54,  188 => 53,  178 => 51,  172 => 50,  167 => 49,  163 => 48,  155 => 43,  151 => 42,  147 => 41,  143 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
