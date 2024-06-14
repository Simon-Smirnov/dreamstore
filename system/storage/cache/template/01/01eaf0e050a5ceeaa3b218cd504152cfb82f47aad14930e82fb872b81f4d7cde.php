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
class __TwigTemplate_f775c2183d3df2788835141a2d7c7cd06ae0393480ac50c37651a2cc9d97bcc6 extends \Twig\Template
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
            echo "                    <li>
                        <a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\"> ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 26
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\"
                      class=\"form-horizontal\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                                    <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37);
            echo "\" data-toggle=\"tab\"><img
                                                    src=\"language/";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 38);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 38);
            echo ".png\"
                                                    title=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </ul>
                            <div class=\"tab-content\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "][name]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 51
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null), "name", [], "any", false, false, false, 51)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 52
            echo ($context["entry_name"] ?? null);
            echo "\"
                                                       id=\"input-name";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" class=\"form-control\"/>
                                                ";
            // line 54
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) {
                // line 55
                echo "                                                    <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                echo "</div>
                                                ";
            }
            // line 57
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-h1-";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\">";
            echo ($context["entry_meta_h1"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "][meta_h1]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 66
            echo (((($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null), "meta_h1", [], "any", false, false, false, 66)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 67
            echo ($context["entry_meta_h1"] ?? null);
            echo "\"
                                                       id=\"input-meta-h1-";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "][meta_title]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 79
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null), "meta_title", [], "any", false, false, false, 79)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 80
            echo ($context["entry_meta_title"] ?? null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
            echo "][description]\"
                                                        placeholder=\"";
            // line 91
            echo ($context["entry_description"] ?? null);
            echo "\"
                                                        id=\"input-description";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 93
            echo ($context["summernote"] ?? null);
            echo "\"
                                                        class=\"form-control\">";
            // line 94
            echo (((($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94)] ?? null) : null), "description", [], "any", false, false, false, 94)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            echo "][meta_description]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 104
            echo ($context["entry_meta_description"] ?? null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
            echo "\"
                                                        class=\"form-control\">";
            // line 106
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "meta_description", [], "any", false, false, false, 106)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "][meta_keyword]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 116
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "\"
                                                        class=\"form-control\">";
            // line 118
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 118)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 124
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 127);
            echo "][tag]\"
                                                       value=\"";
            // line 128
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null), "tag", [], "any", false, false, false, 128)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 129
            echo ($context["entry_tag"] ?? null);
            echo "\"
                                                       id=\"input-tag";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130);
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 138
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 140
        echo ($context["model"] ?? null);
        echo "\" data-length=\"255\"
                                           placeholder=\"";
        // line 141
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                                    ";
        // line 142
        if (($context["error_model"] ?? null)) {
            // line 143
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                                    ";
        }
        // line 144
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 148
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 150
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
        // line 156
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"upc\" value=\"";
        // line 158
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
        // line 164
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"ean\" value=\"";
        // line 166
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
        // line 172
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"jan\" value=\"";
        // line 174
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
        // line 180
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"isbn\" value=\"";
        // line 182
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
        // line 188
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"mpn\" value=\"";
        // line 190
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\"
                                           id=\"input-mpn\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 195
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"location\" value=\"";
        // line 197
        echo ($context["location"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 198
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 202
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 204
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
        // line 210
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                                        <option value=\"0\">";
        // line 213
        echo ($context["text_none"] ?? null);
        echo "</option>
                                        ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 215
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 215) == ($context["tax_class_id"] ?? null))) {
                // line 216
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 216);
                echo "\"
                                                        selected=\"selected\">";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 217);
                echo "</option>
                                            ";
            } else {
                // line 219
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 219);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 219);
                echo "</option>
                                            ";
            }
            // line 221
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 226
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 228
        echo ($context["quantity"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 229
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 234
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"minimum\" value=\"";
        // line 236
        echo ($context["minimum"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 237
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 241
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                                        ";
        // line 244
        if (($context["subtract"] ?? null)) {
            // line 245
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 246
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 248
            echo "                                            <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 249
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 251
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 257
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                                        ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 261
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 261) == ($context["stock_status_id"] ?? null))) {
                // line 262
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 262);
                echo "\"
                                                        selected=\"selected\">";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 263);
                echo "</option>
                                            ";
            } else {
                // line 265
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 265);
                echo "</option>
                                            ";
            }
            // line 267
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 272
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\"> ";
        // line 274
        if (($context["shipping"] ?? null)) {
            // line 275
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 276
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        } else {
            // line 278
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                                            ";
            // line 279
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        }
        // line 280
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 281
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 282
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        } else {
            // line 284
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                                            ";
            // line 285
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        }
        // line 286
        echo " </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 291
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 294
        echo ($context["date_available"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 295
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
        // line 303
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 307
        echo ($context["length"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 308
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 312
        echo ($context["width"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 313
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 317
        echo ($context["height"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 318
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
        // line 326
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                                        ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 330
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 330) == ($context["length_class_id"] ?? null))) {
                // line 331
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 331);
                echo "\"
                                                        selected=\"selected\">";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 332);
                echo "</option>
                                            ";
            } else {
                // line 334
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 334);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 334);
                echo "</option>
                                            ";
            }
            // line 336
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 341
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 343
        echo ($context["weight"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 344
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-weight-class\">";
        // line 349
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                                        ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 353
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 353) == ($context["weight_class_id"] ?? null))) {
                // line 354
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 354);
                echo "\"
                                                        selected=\"selected\">";
                // line 355
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 355);
                echo "</option>
                                            ";
            } else {
                // line 357
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 357);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 357);
                echo "</option>
                                            ";
            }
            // line 359
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 364
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 367
        if (($context["status"] ?? null)) {
            // line 368
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 369
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 371
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 372
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 374
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 379
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 381
        echo ($context["sort_order"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 382
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
        // line 391
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 393
        echo ($context["manufacturer"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 394
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\"
                                           class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\"
                                                                         value=\"";
        // line 396
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 401
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 403
        echo ($context["entry_category"] ?? null);
        echo "\"
                                           id=\"input-category\" class=\"form-control\"/>
                                    <div id=\"product-category\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 407
            echo "                                            <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 407);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i>
                                                <label>
                                                    <input type=\"radio\" name=\"main_category\"
                                                           value=\"";
            // line 411
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 411);
            echo "\"
                                                           data-toggle=\"tooltip\" title=\"";
            // line 412
            echo ($context["entry_main_category"] ?? null);
            echo "\"
                                                           ";
            // line 413
            if ((($context["main_category"] ?? null) == twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 413))) {
                echo "checked=\"checked\"";
            }
            echo " />
                                                    <span>";
            // line 414
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 414);
            echo "</span>
                                                </label>
                                                <input type=\"hidden\" name=\"product_category[]\"
                                                       value=\"";
            // line 417
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 417);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "</div>
                                    <label>
                                        <input type=\"radio\" name=\"main_category\"
                                               value=\"";
        // line 422
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 422);
        echo "\"
                                               ";
        // line 423
        if ( !($context["main_category"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                                        <span>";
        // line 424
        echo ($context["text_no_main_category"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"alert alert-info\"><i
                                                class=\"fa fa-info-circle\"></i> ";
        // line 427
        echo ($context["help_main_category"] ?? null);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 432
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 434
        echo ($context["entry_filter"] ?? null);
        echo "\"
                                           id=\"input-filter\" class=\"form-control\"/>
                                    <div id=\"product-filter\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 438
            echo "                                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 438);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 439
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 439);
            echo "
                                                <input type=\"hidden\" name=\"product_filter[]\"
                                                       value=\"";
            // line 441
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 441);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 447
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 451
            echo "                                            <div class=\"checkbox\">
                                                <label> ";
            // line 452
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 452), ($context["product_store"] ?? null))) {
                // line 453
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 454
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 454);
                echo "\" checked=\"checked\"/>
                                                        ";
                // line 455
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 455);
                echo "
                                                    ";
            } else {
                // line 457
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 458
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 458);
                echo "\"/>
                                                        ";
                // line 459
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 459);
                echo "
                                                    ";
            }
            // line 460
            echo " </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 467
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 469
        echo ($context["entry_download"] ?? null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"product-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 472
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 473
            echo "                                            <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 473);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 474
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 474);
            echo "
                                                <input type=\"hidden\" name=\"product_download[]\"
                                                       value=\"";
            // line 476
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 476);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 483
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 485
        echo ($context["entry_related"] ?? null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"product-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 489
            echo "                                            <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 489);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 490
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 490);
            echo "
                                                <input type=\"hidden\" name=\"product_related[]\"
                                                       value=\"";
            // line 492
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 492);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
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
        // line 503
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 504
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 510
        $context["attribute_row"] = 0;
        // line 511
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 512
            echo "                                        <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                                                                                             name=\"product_attribute[";
            // line 514
            echo ($context["attribute_row"] ?? null);
            echo "][name]\"
                                                                                             value=\"";
            // line 515
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 515);
            echo "\"
                                                                                             placeholder=\"";
            // line 516
            echo ($context["entry_attribute"] ?? null);
            echo "\"
                                                                                             class=\"form-control\"/>
                                                <input type=\"hidden\"
                                                       name=\"product_attribute[";
            // line 519
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                                                       value=\"";
            // line 520
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 520);
            echo "\"/></td>
                                            <td class=\"text-left\">";
            // line 521
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 522
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 523
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 523);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 523);
                echo ".png\"
                                                                    title=\"";
                // line 524
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 524);
                echo "\"/></span> <textarea
                                                                name=\"product_attribute[";
                // line 525
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 525);
                echo "][text]\"
                                                                rows=\"5\" placeholder=\"";
                // line 526
                echo ($context["entry_text"] ?? null);
                echo "\"
                                                                class=\"form-control\">";
                // line 527
                echo (((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 527)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 527)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 527)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 527)] ?? null) : null), "text", [], "any", false, false, false, 527)) : (""));
                echo "</textarea>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 529
            echo "</td>
                                            <td class=\"text-right\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#attribute-row";
            // line 532
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 533
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 538
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 539
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 547
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
        // line 559
        $context["option_row"] = 0;
        // line 560
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 561
            echo "                                            <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i
                                                            class=\"fa fa-minus-circle\"
                                                            onclick=\"\$('a[href=\\'#tab-option";
            // line 563
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 563);
            echo "
                                                </a></li>
                                            ";
            // line 565
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 566
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 568
        echo ($context["entry_option"] ?? null);
        echo "\"
                                                   id=\"input-option\" class=\"form-control\"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\"> ";
        // line 574
        $context["option_row"] = 0;
        // line 575
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 576
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 577
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                                <input type=\"hidden\"
                                                       name=\"product_option[";
            // line 579
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                                                       value=\"";
            // line 580
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 580);
            echo "\"/> <input
                                                        type=\"hidden\" name=\"product_option[";
            // line 581
            echo ($context["option_row"] ?? null);
            echo "][name]\"
                                                        value=\"";
            // line 582
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 582);
            echo "\"/> <input type=\"hidden\"
                                                                                                   name=\"product_option[";
            // line 583
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                                                                                                   value=\"";
            // line 584
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 584);
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 585
            echo ($context["option_row"] ?? null);
            echo "][type]\"
                                                       value=\"";
            // line 586
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 586);
            echo "\"/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\"
                                                           for=\"input-required";
            // line 589
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"product_option[";
            // line 591
            echo ($context["option_row"] ?? null);
            echo "][required]\"
                                                                id=\"input-required";
            // line 592
            echo ($context["option_row"] ?? null);
            echo "\"
                                                                class=\"form-control\">
                                                            ";
            // line 594
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 594)) {
                // line 595
                echo "                                                                <option value=\"1\"
                                                                        selected=\"selected\">";
                // line 596
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\">";
                // line 597
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            } else {
                // line 599
                echo "                                                                <option value=\"1\">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\"
                                                                        selected=\"selected\">";
                // line 601
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            }
            // line 603
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 606
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 606) == "text")) {
                // line 607
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 609
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 612
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 613
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 613);
                echo "\"
                                                                   placeholder=\"";
                // line 614
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 615
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 620
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 620) == "textarea")) {
                // line 621
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 623
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"product_option[";
                // line 625
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                      rows=\"5\" placeholder=\"";
                // line 626
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                      id=\"input-value";
                // line 627
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                      class=\"form-control\">";
                // line 628
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 628);
                echo "</textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 632
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 632) == "file")) {
                // line 633
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 635
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 638
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 639
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 639);
                echo "\"
                                                                   placeholder=\"";
                // line 640
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 641
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 646
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 646) == "date")) {
                // line 647
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 649
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 653
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 654
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 654);
                echo "\"
                                                                       placeholder=\"";
                // line 655
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-value";
                // line 657
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
            // line 665
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 665) == "time")) {
                // line 666
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 668
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 672
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 673
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 673);
                echo "\"
                                                                       placeholder=\"";
                // line 674
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"HH:mm\"
                                                                       id=\"input-value";
                // line 676
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
            // line 684
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 684) == "datetime")) {
                // line 685
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 687
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 691
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 692
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 692);
                echo "\"
                                                                       placeholder=\"";
                // line 693
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-value";
                // line 695
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
            // line 703
            echo "                                                ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 703) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 703) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 703) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 703) == "image"))) {
                // line 704
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 705
                echo ($context["option_row"] ?? null);
                echo "\"
                                                               class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                            <tr>
                                                                <td class=\"text-left\">";
                // line 709
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 710
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                                <td class=\"text-left\">";
                // line 711
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 712
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 713
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 714
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                                <td></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            ";
                // line 720
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 720));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 721
                    echo "                                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 723
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 725
                    if ((($__internal_compile_18 = ($context["option_values"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 725)] ?? null) : null)) {
                        // line 726
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_19 = ($context["option_values"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 726)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 727
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 727) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 727))) {
                                // line 728
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 728);
                                echo "\"
                                                                                                selected=\"selected\">";
                                // line 729
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 729);
                                echo "</option>
                                                                                    ";
                            } else {
                                // line 731
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 731);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 731);
                                echo "</option>
                                                                                    ";
                            }
                            // line 733
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 734
                        echo "                                                                            ";
                    }
                    // line 735
                    echo "                                                                        </select> <input type=\"hidden\"
                                                                                         name=\"product_option[";
                    // line 736
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                                                                         value=\"";
                    // line 737
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 737);
                    echo "\"/>
                                                                    </td>
                                                                    <td class=\"text-right\"><input type=\"text\"
                                                                                                  name=\"product_option[";
                    // line 740
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                                                                                  value=\"";
                    // line 741
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 741);
                    echo "\"
                                                                                                  placeholder=\"";
                    // line 742
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                                                                                  class=\"form-control\"/>
                                                                    </td>
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 746
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 748
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 748)) {
                        // line 749
                        echo "                                                                                <option value=\"1\"
                                                                                        selected=\"selected\">";
                        // line 750
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\">";
                        // line 751
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    } else {
                        // line 753
                        echo "                                                                                <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\"
                                                                                        selected=\"selected\">";
                        // line 755
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    }
                    // line 757
                    echo "                                                                        </select></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 759
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 761
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 761) == "+")) {
                        // line 762
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 766
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 768
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 768) == "-")) {
                        // line 769
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 773
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 775
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 776
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                                                                         value=\"";
                    // line 777
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 777);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 778
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 781
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 783
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 783) == "+")) {
                        // line 784
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 788
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 790
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 790) == "-")) {
                        // line 791
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 795
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 797
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 798
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                                                                         value=\"";
                    // line 799
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 799);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 800
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 803
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 805
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 805) == "+")) {
                        // line 806
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 810
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 812
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 812) == "-")) {
                        // line 813
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 817
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 819
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 820
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                                                                         value=\"";
                    // line 821
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 821);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 822
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\">
                                                                        <button type=\"button\"
                                                                                onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 826
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                    // line 828
                    echo ($context["button_remove"] ?? null);
                    echo "\"
                                                                                class=\"btn btn-danger\"><i
                                                                                    class=\"fa fa-minus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                ";
                    // line 834
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 835
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 836
                echo "                                                            </tbody>

                                                            <tfoot>
                                                            <tr>
                                                                <td colspan=\"6\"></td>
                                                                <td class=\"text-left\">
                                                                    <button type=\"button\"
                                                                            onclick=\"addOptionValue('";
                // line 843
                echo ($context["option_row"] ?? null);
                echo "');\"
                                                                            data-toggle=\"tooltip\"
                                                                            title=\"";
                // line 845
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
                // line 853
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">
                                                        ";
                // line 854
                if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 854)] ?? null) : null)) {
                    // line 855
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 855)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 856
                        echo "                                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 856);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 856);
                        echo "</option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 858
                    echo "                                                        ";
                }
                // line 859
                echo "                                                    </select>
                                                ";
            }
            // line 860
            echo " </div>
                                            ";
            // line 861
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 862
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
        // line 871
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 872
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-left\"></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 878
        $context["recurring_row"] = 0;
        // line 879
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 880
            echo "                                        <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 882
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 884
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 885
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 885) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 885))) {
                    // line 886
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 886);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 887
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 887);
                    echo "</option>
                                                        ";
                } else {
                    // line 889
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 889);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 889);
                    echo "</option>
                                                        ";
                }
                // line 891
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 892
            echo "                                                </select></td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 894
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 896
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 897
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 897) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 897))) {
                    // line 898
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 898);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 899
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 899);
                    echo "</option>
                                                        ";
                } else {
                    // line 901
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 901);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 901);
                    echo "</option>
                                                        ";
                }
                // line 903
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 904
            echo "                                                </select></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#recurring-row";
            // line 907
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 908
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 913
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 914
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 922
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
        // line 935
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 936
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 937
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 938
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 939
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 940
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 946
        $context["discount_row"] = 0;
        // line 947
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 948
            echo "                                        <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_discount[";
            // line 950
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 952
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 953
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 953) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 953))) {
                    // line 954
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 954);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 955
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 955);
                    echo "</option>
                                                        ";
                } else {
                    // line 957
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 957);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 957);
                    echo "</option>
                                                        ";
                }
                // line 959
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 960
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 962
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                                                          value=\"";
            // line 963
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 963);
            echo "\"
                                                                          placeholder=\"";
            // line 964
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 967
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 968
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 968);
            echo "\"
                                                                          placeholder=\"";
            // line 969
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 972
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 973
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 973);
            echo "\"
                                                                          placeholder=\"";
            // line 974
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 979
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 980
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 980);
            echo "\"
                                                           placeholder=\"";
            // line 981
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
            // line 990
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 991
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 991);
            echo "\"
                                                           placeholder=\"";
            // line 992
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
            // line 1000
            echo ($context["discount_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1001
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1006
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1007
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1008
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1015
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
        // line 1028
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1029
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1030
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1031
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1032
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1038
        $context["special_row"] = 0;
        // line 1039
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1040
            echo "                                        <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_special[";
            // line 1042
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 1044
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1045
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1045) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1045))) {
                    // line 1046
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1046);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1047
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1047);
                    echo "</option>
                                                        ";
                } else {
                    // line 1049
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1049);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1049);
                    echo "</option>
                                                        ";
                }
                // line 1051
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1052
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1054
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1055
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1055);
            echo "\"
                                                                          placeholder=\"";
            // line 1056
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1059
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 1060
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1060);
            echo "\"
                                                                          placeholder=\"";
            // line 1061
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1066
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1067
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1067);
            echo "\"
                                                           placeholder=\"";
            // line 1068
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
            // line 1077
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1078
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1078);
            echo "\"
                                                           placeholder=\"";
            // line 1079
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
            // line 1087
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1088
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1093
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1094
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1095
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"5\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1102
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
        // line 1115
        echo ($context["entry_image"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 1121
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 1123
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 1124
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
        // line 1134
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1135
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1141
        $context["image_row"] = 0;
        // line 1142
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1143
            echo "                                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1144
            echo ($context["image_row"] ?? null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 1146
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1146);
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 1147
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input
                                                        type=\"hidden\" name=\"product_image[";
            // line 1148
            echo ($context["image_row"] ?? null);
            echo "][image]\"
                                                        value=\"";
            // line 1149
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1149);
            echo "\"
                                                        id=\"input-image";
            // line 1150
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_image[";
            // line 1152
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 1153
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1153);
            echo "\"
                                                                          placeholder=\"";
            // line 1154
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 1157
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1158
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1163
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1164
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1165
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1172
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
        // line 1183
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1185
        echo ($context["points"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 1186
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1193
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1194
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1200
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1201
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1201);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_reward[";
            // line 1203
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1203);
            echo "][points]\"
                                                                          value=\"";
            // line 1204
            echo (((($__internal_compile_22 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1204)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1204)] ?? null) : null), "points", [], "any", false, false, false, 1204)) : (""));
            echo "\"
                                                                          class=\"form-control\"/></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1208
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                            title=\"";
        // line 1216
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"no_index\" value=\"1\"
                                               ";
        // line 1220
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
        // line 1224
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
        // line 1230
        echo ($context["text_keyword"] ?? null);
        echo "
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 1236
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 1237
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 1241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1242
            echo "                                                <tr>
                                                    <td class=\"text-left\">";
            // line 1243
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1243);
            echo "</td>
                                                    <td class=\"text-left\">";
            // line 1244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1245
                echo "                                                            <div class=\"input-group\"><span
                                                                        class=\"input-group-addon\"><img
                                                                            src=\"language/";
                // line 1247
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1247);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1247);
                echo ".png\"
                                                                            title=\"";
                // line 1248
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1248);
                echo "\"/></span> <input
                                                                        type=\"text\"
                                                                        name=\"product_seo_url[";
                // line 1250
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1250);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1250);
                echo "]\"
                                                                        value=\"";
                // line 1251
                if ((($__internal_compile_24 = (($__internal_compile_25 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1251)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1251)] ?? null) : null)) {
                    echo (($__internal_compile_26 = (($__internal_compile_27 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1251)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1251)] ?? null) : null);
                }
                echo "\"
                                                                        placeholder=\"";
                // line 1252
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                                        class=\"form-control\"/>
                                                            </div>
                                                            ";
                // line 1255
                if ((($__internal_compile_28 = (($__internal_compile_29 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1255)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1255)] ?? null) : null)) {
                    // line 1256
                    echo "                                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_30 = (($__internal_compile_31 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1256)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1256)] ?? null) : null);
                    echo "</div>
                                                            ";
                }
                // line 1258
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
        // line 1261
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
        // line 1272
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1273
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1278
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1279
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1279);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1280
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1280);
            echo "]\"
                                                                          class=\"form-control\">
                                                    <option value=\"\"></option>
                                                    ";
            // line 1283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1284
                echo "                                                        ";
                if (((($__internal_compile_32 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1284)] ?? null) : null) && ((($__internal_compile_33 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1284)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1284)))) {
                    // line 1285
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1285);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1286
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1286);
                    echo "</option>
                                                        ";
                } else {
                    // line 1288
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1288);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1288);
                    echo "</option>
                                                        ";
                }
                // line 1290
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1291
            echo "                                                </select></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1294
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
        // line 1317
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 1322
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
        // line 1344
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
        // line 1361
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1361);
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
        // line 1373
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
        // line 1402
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
        // line 1431
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
        // line 1457
        echo ($context["attribute_row"] ?? null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1461
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 1463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1464
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1464);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1464);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1464);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1464);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1466
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1467
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
        // line 1481
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
        // line 1506
        echo ($context["option_row"] ?? null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1511
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
        // line 1534
        echo ($context["entry_required"] ?? null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 1536
        echo ($context["text_yes"] ?? null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 1537
        echo ($context["text_no"] ?? null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1543
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1544
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1550
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1551
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1557
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1558
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1564
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1565
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1571
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1572
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1578
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1579
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
        // line 1588
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1589
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 1590
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1591
        echo ($context["entry_price"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1592
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1593
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
        // line 1602
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
        // line 1630
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 1635
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 1640
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
        // line 1650
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1657
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 1659
        echo ($context["text_yes"] ?? null);
        echo "</option>';
            html += '    <option value=\"0\" selected>";
        // line 1660
        echo ($context["text_no"] ?? null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1666
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1671
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1676
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1677
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
        // line 1688
        echo ($context["discount_row"] ?? null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1693
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1694
            echo "            html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1694);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1694), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1696
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1697
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1698
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1699
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1700
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1701
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1702
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
        // line 1716
        echo ($context["special_row"] ?? null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1721
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1722
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1722);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1722), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1724
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1725
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1726
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1727
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1728
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1729
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 1735
        echo ($context["datepicker"] ?? null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 1744
        echo ($context["image_row"] ?? null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1748
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1749
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1750
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 1760
        echo ($context["recurring_row"] ?? null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 1766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1767
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1767);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1767);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1769
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 1773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1774
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1774);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1774);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1776
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1779
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
        // line 1791
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 1796
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 1801
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
        // line 1811
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
        return array (  3958 => 1811,  3945 => 1801,  3937 => 1796,  3929 => 1791,  3914 => 1779,  3909 => 1776,  3898 => 1774,  3894 => 1773,  3888 => 1769,  3877 => 1767,  3873 => 1766,  3864 => 1760,  3851 => 1750,  3847 => 1749,  3841 => 1748,  3834 => 1744,  3822 => 1735,  3813 => 1729,  3809 => 1728,  3805 => 1727,  3801 => 1726,  3797 => 1725,  3794 => 1724,  3783 => 1722,  3779 => 1721,  3771 => 1716,  3754 => 1702,  3750 => 1701,  3746 => 1700,  3742 => 1699,  3738 => 1698,  3734 => 1697,  3731 => 1696,  3720 => 1694,  3716 => 1693,  3708 => 1688,  3694 => 1677,  3690 => 1676,  3682 => 1671,  3674 => 1666,  3665 => 1660,  3661 => 1659,  3656 => 1657,  3646 => 1650,  3633 => 1640,  3625 => 1635,  3617 => 1630,  3586 => 1602,  3574 => 1593,  3570 => 1592,  3566 => 1591,  3562 => 1590,  3558 => 1589,  3554 => 1588,  3542 => 1579,  3538 => 1578,  3529 => 1572,  3525 => 1571,  3516 => 1565,  3512 => 1564,  3503 => 1558,  3499 => 1557,  3490 => 1551,  3486 => 1550,  3477 => 1544,  3473 => 1543,  3464 => 1537,  3460 => 1536,  3455 => 1534,  3429 => 1511,  3421 => 1506,  3393 => 1481,  3376 => 1467,  3373 => 1466,  3356 => 1464,  3352 => 1463,  3347 => 1461,  3340 => 1457,  3311 => 1431,  3279 => 1402,  3247 => 1373,  3230 => 1361,  3210 => 1344,  3185 => 1322,  3177 => 1317,  3152 => 1294,  3144 => 1291,  3138 => 1290,  3130 => 1288,  3125 => 1286,  3120 => 1285,  3117 => 1284,  3113 => 1283,  3107 => 1280,  3103 => 1279,  3100 => 1278,  3096 => 1277,  3089 => 1273,  3085 => 1272,  3072 => 1261,  3059 => 1258,  3053 => 1256,  3051 => 1255,  3045 => 1252,  3039 => 1251,  3033 => 1250,  3028 => 1248,  3022 => 1247,  3018 => 1245,  3014 => 1244,  3010 => 1243,  3007 => 1242,  3003 => 1241,  2996 => 1237,  2992 => 1236,  2983 => 1230,  2970 => 1224,  2959 => 1220,  2950 => 1216,  2940 => 1208,  2930 => 1204,  2926 => 1203,  2921 => 1201,  2918 => 1200,  2914 => 1199,  2906 => 1194,  2902 => 1193,  2892 => 1186,  2888 => 1185,  2881 => 1183,  2867 => 1172,  2858 => 1165,  2852 => 1164,  2850 => 1163,  2842 => 1158,  2838 => 1157,  2832 => 1154,  2828 => 1153,  2824 => 1152,  2819 => 1150,  2815 => 1149,  2811 => 1148,  2807 => 1147,  2803 => 1146,  2798 => 1144,  2793 => 1143,  2788 => 1142,  2786 => 1141,  2777 => 1135,  2773 => 1134,  2760 => 1124,  2756 => 1123,  2751 => 1121,  2742 => 1115,  2726 => 1102,  2717 => 1095,  2711 => 1094,  2709 => 1093,  2701 => 1088,  2697 => 1087,  2686 => 1079,  2682 => 1078,  2678 => 1077,  2666 => 1068,  2662 => 1067,  2658 => 1066,  2650 => 1061,  2646 => 1060,  2642 => 1059,  2636 => 1056,  2632 => 1055,  2628 => 1054,  2624 => 1052,  2618 => 1051,  2610 => 1049,  2605 => 1047,  2600 => 1046,  2597 => 1045,  2593 => 1044,  2588 => 1042,  2582 => 1040,  2577 => 1039,  2575 => 1038,  2566 => 1032,  2562 => 1031,  2558 => 1030,  2554 => 1029,  2550 => 1028,  2534 => 1015,  2525 => 1008,  2519 => 1007,  2517 => 1006,  2509 => 1001,  2505 => 1000,  2494 => 992,  2490 => 991,  2486 => 990,  2474 => 981,  2470 => 980,  2466 => 979,  2458 => 974,  2454 => 973,  2450 => 972,  2444 => 969,  2440 => 968,  2436 => 967,  2430 => 964,  2426 => 963,  2422 => 962,  2418 => 960,  2412 => 959,  2404 => 957,  2399 => 955,  2394 => 954,  2391 => 953,  2387 => 952,  2382 => 950,  2376 => 948,  2371 => 947,  2369 => 946,  2360 => 940,  2356 => 939,  2352 => 938,  2348 => 937,  2344 => 936,  2340 => 935,  2324 => 922,  2315 => 915,  2309 => 914,  2307 => 913,  2299 => 908,  2295 => 907,  2290 => 904,  2284 => 903,  2276 => 901,  2271 => 899,  2266 => 898,  2263 => 897,  2259 => 896,  2254 => 894,  2250 => 892,  2244 => 891,  2236 => 889,  2231 => 887,  2226 => 886,  2223 => 885,  2219 => 884,  2214 => 882,  2208 => 880,  2203 => 879,  2201 => 878,  2192 => 872,  2188 => 871,  2172 => 862,  2170 => 861,  2167 => 860,  2163 => 859,  2160 => 858,  2149 => 856,  2144 => 855,  2142 => 854,  2138 => 853,  2127 => 845,  2122 => 843,  2113 => 836,  2107 => 835,  2105 => 834,  2096 => 828,  2091 => 826,  2084 => 822,  2080 => 821,  2074 => 820,  2071 => 819,  2067 => 817,  2061 => 813,  2058 => 812,  2054 => 810,  2048 => 806,  2046 => 805,  2039 => 803,  2033 => 800,  2029 => 799,  2023 => 798,  2020 => 797,  2016 => 795,  2010 => 791,  2007 => 790,  2003 => 788,  1997 => 784,  1995 => 783,  1988 => 781,  1982 => 778,  1978 => 777,  1972 => 776,  1969 => 775,  1965 => 773,  1959 => 769,  1956 => 768,  1952 => 766,  1946 => 762,  1944 => 761,  1937 => 759,  1933 => 757,  1928 => 755,  1922 => 753,  1917 => 751,  1913 => 750,  1910 => 749,  1908 => 748,  1901 => 746,  1894 => 742,  1890 => 741,  1884 => 740,  1878 => 737,  1872 => 736,  1869 => 735,  1866 => 734,  1860 => 733,  1852 => 731,  1847 => 729,  1842 => 728,  1839 => 727,  1834 => 726,  1832 => 725,  1825 => 723,  1819 => 721,  1815 => 720,  1806 => 714,  1802 => 713,  1798 => 712,  1794 => 711,  1790 => 710,  1786 => 709,  1779 => 705,  1776 => 704,  1773 => 703,  1762 => 695,  1757 => 693,  1753 => 692,  1749 => 691,  1740 => 687,  1736 => 685,  1733 => 684,  1722 => 676,  1717 => 674,  1713 => 673,  1709 => 672,  1700 => 668,  1696 => 666,  1693 => 665,  1682 => 657,  1677 => 655,  1673 => 654,  1669 => 653,  1660 => 649,  1656 => 647,  1653 => 646,  1645 => 641,  1641 => 640,  1637 => 639,  1633 => 638,  1625 => 635,  1621 => 633,  1618 => 632,  1611 => 628,  1607 => 627,  1603 => 626,  1599 => 625,  1592 => 623,  1588 => 621,  1585 => 620,  1577 => 615,  1573 => 614,  1569 => 613,  1565 => 612,  1557 => 609,  1553 => 607,  1551 => 606,  1546 => 603,  1541 => 601,  1535 => 599,  1530 => 597,  1526 => 596,  1523 => 595,  1521 => 594,  1516 => 592,  1512 => 591,  1505 => 589,  1499 => 586,  1495 => 585,  1491 => 584,  1487 => 583,  1483 => 582,  1479 => 581,  1475 => 580,  1471 => 579,  1465 => 577,  1460 => 576,  1457 => 575,  1455 => 574,  1446 => 568,  1443 => 567,  1437 => 566,  1435 => 565,  1426 => 563,  1420 => 561,  1415 => 560,  1413 => 559,  1398 => 547,  1389 => 540,  1383 => 539,  1381 => 538,  1373 => 533,  1369 => 532,  1364 => 529,  1355 => 527,  1351 => 526,  1345 => 525,  1341 => 524,  1335 => 523,  1332 => 522,  1328 => 521,  1324 => 520,  1320 => 519,  1314 => 516,  1310 => 515,  1306 => 514,  1300 => 512,  1295 => 511,  1293 => 510,  1284 => 504,  1280 => 503,  1269 => 494,  1260 => 492,  1255 => 490,  1250 => 489,  1246 => 488,  1240 => 485,  1233 => 483,  1226 => 478,  1217 => 476,  1212 => 474,  1207 => 473,  1203 => 472,  1197 => 469,  1190 => 467,  1183 => 462,  1175 => 460,  1170 => 459,  1166 => 458,  1163 => 457,  1158 => 455,  1154 => 454,  1151 => 453,  1149 => 452,  1146 => 451,  1142 => 450,  1136 => 447,  1130 => 443,  1121 => 441,  1116 => 439,  1111 => 438,  1107 => 437,  1101 => 434,  1094 => 432,  1086 => 427,  1080 => 424,  1074 => 423,  1070 => 422,  1065 => 419,  1056 => 417,  1050 => 414,  1044 => 413,  1040 => 412,  1036 => 411,  1028 => 407,  1024 => 406,  1018 => 403,  1011 => 401,  1003 => 396,  998 => 394,  994 => 393,  987 => 391,  975 => 382,  971 => 381,  966 => 379,  959 => 374,  954 => 372,  949 => 371,  944 => 369,  939 => 368,  937 => 367,  931 => 364,  925 => 360,  919 => 359,  911 => 357,  906 => 355,  901 => 354,  898 => 353,  894 => 352,  888 => 349,  880 => 344,  876 => 343,  871 => 341,  865 => 337,  859 => 336,  851 => 334,  846 => 332,  841 => 331,  838 => 330,  834 => 329,  828 => 326,  817 => 318,  813 => 317,  806 => 313,  802 => 312,  795 => 308,  791 => 307,  784 => 303,  773 => 295,  769 => 294,  763 => 291,  756 => 286,  751 => 285,  748 => 284,  743 => 282,  740 => 281,  737 => 280,  732 => 279,  729 => 278,  724 => 276,  721 => 275,  719 => 274,  714 => 272,  708 => 268,  702 => 267,  694 => 265,  689 => 263,  684 => 262,  681 => 261,  677 => 260,  669 => 257,  661 => 251,  656 => 249,  651 => 248,  646 => 246,  641 => 245,  639 => 244,  633 => 241,  626 => 237,  622 => 236,  615 => 234,  607 => 229,  603 => 228,  598 => 226,  592 => 222,  586 => 221,  578 => 219,  573 => 217,  568 => 216,  565 => 215,  561 => 214,  557 => 213,  551 => 210,  540 => 204,  535 => 202,  528 => 198,  524 => 197,  519 => 195,  509 => 190,  502 => 188,  491 => 182,  484 => 180,  473 => 174,  466 => 172,  455 => 166,  448 => 164,  437 => 158,  430 => 156,  419 => 150,  412 => 148,  406 => 144,  400 => 143,  398 => 142,  394 => 141,  390 => 140,  385 => 138,  379 => 134,  368 => 130,  364 => 129,  360 => 128,  356 => 127,  348 => 124,  344 => 123,  336 => 118,  332 => 117,  328 => 116,  323 => 114,  315 => 111,  307 => 106,  303 => 105,  299 => 104,  294 => 102,  286 => 99,  278 => 94,  274 => 93,  270 => 92,  266 => 91,  262 => 90,  254 => 87,  245 => 81,  241 => 80,  237 => 79,  232 => 77,  224 => 74,  215 => 68,  211 => 67,  207 => 66,  202 => 64,  194 => 61,  188 => 57,  182 => 55,  180 => 54,  176 => 53,  172 => 52,  168 => 51,  163 => 49,  155 => 46,  148 => 43,  144 => 42,  141 => 41,  131 => 39,  125 => 38,  120 => 37,  116 => 36,  108 => 31,  102 => 28,  98 => 26,  91 => 22,  88 => 21,  86 => 20,  81 => 17,  70 => 14,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_form.twig", "");
    }
}
