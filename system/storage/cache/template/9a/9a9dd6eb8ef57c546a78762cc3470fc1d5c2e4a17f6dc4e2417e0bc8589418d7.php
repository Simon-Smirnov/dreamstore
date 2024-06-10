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

/* catalog/faq_form.twig */
class __TwigTemplate_c08ca17e19d00bb47d1bc09c8a385ac2ac26ec2b689414969b2e44ac8000aa71 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"";
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
    <div class=\"container-fluid\">";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-faq\"
                      class=\"form-horizontal\">

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-name\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"name\"
                                   data-length=\"255\"
                                   value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 40
        echo ($context["entry_name"] ?? null);
        echo "\"
                                   id=\"input-name\" class=\"form-control\"/>
                            ";
        // line 42
        if (($context["error_name"] ?? null)) {
            // line 43
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                            ";
        }
        // line 45
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-meta-h1-";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 49);
        echo "\">";
        echo ($context["entry_meta_h1"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"information_description[";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 52);
        echo "][meta_h1]\"
                                   data-length=\"255\"
                                   value=\"";
        // line 54
        echo (((($__internal_compile_0 = ($context["information_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["information_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 54)] ?? null) : null), "meta_h1", [], "any", false, false, false, 54)) : (""));
        echo "\"
                                   placeholder=\"";
        // line 55
        echo ($context["entry_meta_h1"] ?? null);
        echo "\"
                                   id=\"input-meta-h1-";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 56);
        echo "\"
                                   class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-meta-title";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 62);
        echo "\">";
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"information_description[";
        // line 65
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 65);
        echo "][meta_title]\"
                                   data-length=\"255\"
                                   value=\"";
        // line 67
        echo (((($__internal_compile_2 = ($context["information_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 67)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["information_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 67)] ?? null) : null), "meta_title", [], "any", false, false, false, 67)) : (""));
        echo "\"
                                   placeholder=\"";
        // line 68
        echo ($context["entry_meta_title"] ?? null);
        echo "\"
                                   id=\"input-meta-title";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 69);
        echo "\"
                                   class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-description";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 75);
        echo "\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"information_description[";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 78);
        echo "][description]\"
                                                        placeholder=\"";
        // line 79
        echo ($context["entry_description"] ?? null);
        echo "\"
                                                        id=\"input-description";
        // line 80
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 80);
        echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
        // line 81
        echo ($context["summernote"] ?? null);
        echo "\"
                                                        class=\"form-control\">";
        // line 82
        echo (((($__internal_compile_4 = ($context["information_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 82)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["information_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 82)] ?? null) : null), "description", [], "any", false, false, false, 82)) : (""));
        echo "</textarea>
                            ";
        // line 83
        if ((($__internal_compile_6 = ($context["error_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 83)] ?? null) : null)) {
            // line 84
            echo "                                <div class=\"text-danger\">";
            echo (($__internal_compile_7 = ($context["error_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 84)] ?? null) : null);
            echo "</div>
                            ";
        }
        // line 86
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-meta-description";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 90);
        echo "\">";
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"information_description[";
        // line 93
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 93);
        echo "][meta_description]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
        // line 95
        echo ($context["entry_meta_description"] ?? null);
        echo "\"
                                                        id=\"input-meta-description";
        // line 96
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 96);
        echo "\"
                                                        class=\"form-control\">";
        // line 97
        echo (((($__internal_compile_8 = ($context["information_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 97)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["information_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 97)] ?? null) : null), "meta_description", [], "any", false, false, false, 97)) : (""));
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-meta-keyword";
        // line 102
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 102);
        echo "\">";
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"information_description[";
        // line 105
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 105);
        echo "][meta_keyword]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
        // line 107
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\"
                                                        id=\"input-meta-keyword";
        // line 108
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 108);
        echo "\"
                                                        class=\"form-control\">";
        // line 109
        echo (((($__internal_compile_10 = ($context["information_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 109)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["information_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 109)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 109)) : (""));
        echo "</textarea>
                        </div>
                    </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">";
        // line 115
        echo ($context["entry_store"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <div class=\"well well-sm\"
                             style=\"height: 150px; overflow: auto;\"> ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 119
            echo "                                <div class=\"checkbox\">
                                    <label> ";
            // line 120
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 120), ($context["information_store"] ?? null))) {
                // line 121
                echo "                                            <input type=\"checkbox\" name=\"information_store[]\"
                                                   value=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 122);
                echo "\" checked=\"checked\"/>
                                            ";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 123);
                echo "
                                        ";
            } else {
                // line 125
                echo "                                            <input type=\"checkbox\" name=\"information_store[]\"
                                                   value=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 126);
                echo "\"/>
                                            ";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 127);
                echo "
                                        ";
            }
            // line 128
            echo "</label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "</div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bottom\"><span data-toggle=\"tooltip\"
                                                                                   title=\"";
        // line 135
        echo ($context["help_bottom"] ?? null);
        echo "\">";
        echo ($context["entry_bottom"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <div class=\"checkbox\">
                            <label>";
        // line 138
        if (($context["bottom"] ?? null)) {
            // line 139
            echo "                                    <input type=\"checkbox\" name=\"bottom\" value=\"1\" checked=\"checked\"
                                           id=\"input-bottom\"/>
                                ";
        } else {
            // line 142
            echo "                                    <input type=\"checkbox\" name=\"bottom\" value=\"1\" id=\"input-bottom\"/>
                                ";
        }
        // line 144
        echo "                                &nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 149
        echo ($context["entry_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <select name=\"status\" id=\"input-status\" class=\"form-control\">
                            ";
        // line 152
        if (($context["status"] ?? null)) {
            // line 153
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\">";
            // line 154
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        } else {
            // line 156
            echo "                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 157
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                            ";
        }
        // line 159
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"
                           for=\"input-sort-order\">";
        // line 164
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"sort_order\" value=\"";
        // line 166
        echo ($context["sort_order"] ?? null);
        echo "\"
                               placeholder=\"";
        // line 167
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\"
                               class=\"form-control\"/>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                title=\"";
        // line 175
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                        <label class=\"radio-inline\">
                            <input type=\"radio\" name=\"no_index\" value=\"1\"
                                   ";
        // line 179
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
        // line 183
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
        // line 189
        echo ($context["text_keyword"] ?? null);
        echo "
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-left\">";
        // line 195
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 196
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 201
            echo "                                    <tr>
                                        <td class=\"text-left\">";
            // line 202
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 202);
            echo "</td>
                                        <td class=\"text-left\">";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 204
                echo "                                                <div class=\"input-group\"><span
                                                            class=\"input-group-addon\"><img
                                                                src=\"language/";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 206);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 206);
                echo ".png\"
                                                                title=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 207);
                echo "\"/></span>
                                                    <input type=\"text\"
                                                           name=\"information_seo_url[";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 209);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 209);
                echo "]\"
                                                           value=\"";
                // line 210
                if ((($__internal_compile_12 = (($__internal_compile_13 = ($context["information_seo_url"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 210)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210)] ?? null) : null)) {
                    echo (($__internal_compile_14 = (($__internal_compile_15 = ($context["information_seo_url"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 210)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210)] ?? null) : null);
                }
                echo "\"
                                                           placeholder=\"";
                // line 211
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                                ";
                // line 214
                if ((($__internal_compile_16 = (($__internal_compile_17 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 214)] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 214)] ?? null) : null)) {
                    // line 215
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_compile_18 = (($__internal_compile_19 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 215)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 215)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 217
                echo "                                            ";
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
        // line 220
        echo "                                </tbody>
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
        // line 231
        echo ($context["entry_store"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 232
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 238
            echo "                            <tr>
                                <td class=\"text-left\">";
            // line 239
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 239);
            echo "</td>
                                <td class=\"text-left\"><select
                                            name=\"information_layout[";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 241);
            echo "]\"
                                            class=\"form-control\">
                                        <option value=\"\"></option>
                                        ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 245
                echo "                                            ";
                if (((($__internal_compile_20 = ($context["information_layout"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 245)] ?? null) : null) && ((($__internal_compile_21 = ($context["information_layout"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 245)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 245)))) {
                    // line 246
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 246);
                    echo "\"
                                                        selected=\"selected\">";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 247);
                    echo "</option>
                                            ";
                } else {
                    // line 249
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 249);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 249);
                    echo "</option>
                                            ";
                }
                // line 251
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                    </select></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                        </tbody>

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
    \$('#language a:first').tab('show');
    //--></script>
</div>
";
        // line 278
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/faq_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 278,  644 => 255,  636 => 252,  630 => 251,  622 => 249,  617 => 247,  612 => 246,  609 => 245,  605 => 244,  599 => 241,  594 => 239,  591 => 238,  587 => 237,  579 => 232,  575 => 231,  562 => 220,  549 => 217,  543 => 215,  541 => 214,  535 => 211,  529 => 210,  523 => 209,  518 => 207,  512 => 206,  508 => 204,  504 => 203,  500 => 202,  497 => 201,  493 => 200,  486 => 196,  482 => 195,  473 => 189,  460 => 183,  449 => 179,  440 => 175,  429 => 167,  425 => 166,  420 => 164,  413 => 159,  408 => 157,  403 => 156,  398 => 154,  393 => 153,  391 => 152,  385 => 149,  378 => 144,  374 => 142,  369 => 139,  367 => 138,  359 => 135,  352 => 130,  344 => 128,  339 => 127,  335 => 126,  332 => 125,  327 => 123,  323 => 122,  320 => 121,  318 => 120,  315 => 119,  311 => 118,  305 => 115,  296 => 109,  292 => 108,  288 => 107,  283 => 105,  275 => 102,  267 => 97,  263 => 96,  259 => 95,  254 => 93,  246 => 90,  240 => 86,  234 => 84,  232 => 83,  228 => 82,  224 => 81,  220 => 80,  216 => 79,  212 => 78,  204 => 75,  195 => 69,  191 => 68,  187 => 67,  182 => 65,  174 => 62,  165 => 56,  161 => 55,  157 => 54,  152 => 52,  144 => 49,  138 => 45,  132 => 43,  130 => 42,  125 => 40,  121 => 39,  113 => 34,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_form.twig", "");
    }
}
