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
class __TwigTemplate_5c66af8684bd5f3fd23cdaecbccb0fa179b0b5da84625ab3343e94666d2dde76 extends \Twig\Template
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
                            <div class=\"tab-content\">";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 36
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "][name]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 44
            echo (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null), "name", [], "any", false, false, false, 44)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 45
            echo ($context["entry_name"] ?? null);
            echo "\"
                                                       id=\"input-name";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\" class=\"form-control\"/>
                                                ";
            // line 47
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null)) {
                // line 48
                echo "                                                    <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null);
                echo "</div>
                                                ";
            }
            // line 50
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-h1-";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\">";
            echo ($context["entry_meta_h1"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "][meta_h1]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 59
            echo (((($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["product_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null), "meta_h1", [], "any", false, false, false, 59)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 60
            echo ($context["entry_meta_h1"] ?? null);
            echo "\"
                                                       id=\"input-meta-h1-";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            echo "][meta_title]\"
                                                       data-length=\"255\"
                                                       value=\"";
            // line 72
            echo (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "meta_title", [], "any", false, false, false, 72)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 73
            echo ($context["entry_meta_title"] ?? null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "][description]\"
                                                        placeholder=\"";
            // line 84
            echo ($context["entry_description"] ?? null);
            echo "\"
                                                        id=\"input-description";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 86
            echo ($context["summernote"] ?? null);
            echo "\"
                                                        class=\"form-control\">";
            // line 87
            echo (((($__internal_compile_8 = ($context["product_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null), "description", [], "any", false, false, false, 87)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "][meta_description]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 97
            echo ($context["entry_meta_description"] ?? null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "\"
                                                        class=\"form-control\">";
            // line 99
            echo (((($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["product_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null), "meta_description", [], "any", false, false, false, 99)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
            echo "][meta_keyword]\"
                                                        data-length=\"255\" rows=\"5\"
                                                        placeholder=\"";
            // line 109
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            echo "\"
                                                        class=\"form-control\">";
            // line 111
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 111)) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 117
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            echo "][tag]\"
                                                       value=\"";
            // line 121
            echo (((($__internal_compile_14 = ($context["product_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null), "tag", [], "any", false, false, false, 121)) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 122
            echo ($context["entry_tag"] ?? null);
            echo "\"
                                                       id=\"input-tag";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 131
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 133
        echo ($context["model"] ?? null);
        echo "\" data-length=\"255\"
                                           placeholder=\"";
        // line 134
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                                    ";
        // line 135
        if (($context["error_model"] ?? null)) {
            // line 136
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                                    ";
        }
        // line 137
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 141
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 143
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
        // line 149
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"upc\" value=\"";
        // line 151
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
        // line 157
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"ean\" value=\"";
        // line 159
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
        // line 165
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"jan\" value=\"";
        // line 167
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
        // line 173
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"isbn\" value=\"";
        // line 175
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
        // line 181
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"mpn\" value=\"";
        // line 183
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\"
                                           id=\"input-mpn\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 188
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"location\" value=\"";
        // line 190
        echo ($context["location"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 191
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 195
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 197
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
        // line 203
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                                        <option value=\"0\">";
        // line 206
        echo ($context["text_none"] ?? null);
        echo "</option>
                                        ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 208
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 208) == ($context["tax_class_id"] ?? null))) {
                // line 209
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 209);
                echo "\"
                                                        selected=\"selected\">";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 210);
                echo "</option>
                                            ";
            } else {
                // line 212
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 212);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 212);
                echo "</option>
                                            ";
            }
            // line 214
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 219
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 221
        echo ($context["quantity"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 222
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 227
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"minimum\" value=\"";
        // line 229
        echo ($context["minimum"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 230
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 234
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                                        ";
        // line 237
        if (($context["subtract"] ?? null)) {
            // line 238
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 239
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 241
            echo "                                            <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 242
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 244
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 250
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                                        ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 254
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 254) == ($context["stock_status_id"] ?? null))) {
                // line 255
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 255);
                echo "\"
                                                        selected=\"selected\">";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 256);
                echo "</option>
                                            ";
            } else {
                // line 258
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 258);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 258);
                echo "</option>
                                            ";
            }
            // line 260
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 265
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\"> ";
        // line 267
        if (($context["shipping"] ?? null)) {
            // line 268
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 269
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        } else {
            // line 271
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                                            ";
            // line 272
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        }
        // line 273
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 274
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 275
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        } else {
            // line 277
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                                            ";
            // line 278
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        }
        // line 279
        echo " </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 284
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 287
        echo ($context["date_available"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 288
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
        // line 296
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 300
        echo ($context["length"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 301
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 305
        echo ($context["width"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 306
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 310
        echo ($context["height"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 311
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
        // line 319
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                                        ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 323
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 323) == ($context["length_class_id"] ?? null))) {
                // line 324
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 324);
                echo "\"
                                                        selected=\"selected\">";
                // line 325
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 325);
                echo "</option>
                                            ";
            } else {
                // line 327
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 327);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 327);
                echo "</option>
                                            ";
            }
            // line 329
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 334
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 336
        echo ($context["weight"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 337
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-weight-class\">";
        // line 342
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                                        ";
        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 346
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 346) == ($context["weight_class_id"] ?? null))) {
                // line 347
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 347);
                echo "\"
                                                        selected=\"selected\">";
                // line 348
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 348);
                echo "</option>
                                            ";
            } else {
                // line 350
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 350);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 350);
                echo "</option>
                                            ";
            }
            // line 352
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 357
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 360
        if (($context["status"] ?? null)) {
            // line 361
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\">";
            // line 362
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 364
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 365
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 367
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 372
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 374
        echo ($context["sort_order"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 375
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
        // line 384
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 386
        echo ($context["manufacturer"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 387
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\"
                                           class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\"
                                                                         value=\"";
        // line 389
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 394
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 396
        echo ($context["entry_category"] ?? null);
        echo "\"
                                           id=\"input-category\" class=\"form-control\"/>
                                    <div id=\"product-category\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 400
            echo "                                            <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 400);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i>
                                                <label>
                                                    <input type=\"radio\" name=\"main_category\"
                                                           value=\"";
            // line 404
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 404);
            echo "\"
                                                           data-toggle=\"tooltip\" title=\"";
            // line 405
            echo ($context["entry_main_category"] ?? null);
            echo "\"
                                                           ";
            // line 406
            if ((($context["main_category"] ?? null) == twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 406))) {
                echo "checked=\"checked\"";
            }
            echo " />
                                                    <span>";
            // line 407
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 407);
            echo "</span>
                                                </label>
                                                <input type=\"hidden\" name=\"product_category[]\"
                                                       value=\"";
            // line 410
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 410);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "</div>
                                    <label>
                                        <input type=\"radio\" name=\"main_category\"
                                               value=\"";
        // line 415
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 415);
        echo "\"
                                               ";
        // line 416
        if ( !($context["main_category"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " />
                                        <span>";
        // line 417
        echo ($context["text_no_main_category"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"alert alert-info\"><i
                                                class=\"fa fa-info-circle\"></i> ";
        // line 420
        echo ($context["help_main_category"] ?? null);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 425
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 427
        echo ($context["entry_filter"] ?? null);
        echo "\"
                                           id=\"input-filter\" class=\"form-control\"/>
                                    <div id=\"product-filter\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 431
            echo "                                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 431);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 432
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 432);
            echo "
                                                <input type=\"hidden\" name=\"product_filter[]\"
                                                       value=\"";
            // line 434
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 434);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 440
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 444
            echo "                                            <div class=\"checkbox\">
                                                <label> ";
            // line 445
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 445), ($context["product_store"] ?? null))) {
                // line 446
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 447
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 447);
                echo "\" checked=\"checked\"/>
                                                        ";
                // line 448
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 448);
                echo "
                                                    ";
            } else {
                // line 450
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 451
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 451);
                echo "\"/>
                                                        ";
                // line 452
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 452);
                echo "
                                                    ";
            }
            // line 453
            echo " </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 460
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 462
        echo ($context["entry_download"] ?? null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"product-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 466
            echo "                                            <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 466);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 467
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 467);
            echo "
                                                <input type=\"hidden\" name=\"product_download[]\"
                                                       value=\"";
            // line 469
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 469);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 476
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 478
        echo ($context["entry_related"] ?? null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"product-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 482
            echo "                                            <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 482);
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 483
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 483);
            echo "
                                                <input type=\"hidden\" name=\"product_related[]\"
                                                       value=\"";
            // line 485
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 485);
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
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
        // line 496
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 497
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 503
        $context["attribute_row"] = 0;
        // line 504
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 505
            echo "                                        <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                                                                                             name=\"product_attribute[";
            // line 507
            echo ($context["attribute_row"] ?? null);
            echo "][name]\"
                                                                                             value=\"";
            // line 508
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 508);
            echo "\"
                                                                                             placeholder=\"";
            // line 509
            echo ($context["entry_attribute"] ?? null);
            echo "\"
                                                                                             class=\"form-control\"/>
                                                <input type=\"hidden\"
                                                       name=\"product_attribute[";
            // line 512
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\"
                                                       value=\"";
            // line 513
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 513);
            echo "\"/></td>
                                            <td class=\"text-left\">";
            // line 514
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 515
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 516
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 516);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 516);
                echo ".png\"
                                                                    title=\"";
                // line 517
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 517);
                echo "\"/></span> <textarea
                                                                name=\"product_attribute[";
                // line 518
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 518);
                echo "][text]\"
                                                                rows=\"5\" placeholder=\"";
                // line 519
                echo ($context["entry_text"] ?? null);
                echo "\"
                                                                class=\"form-control\">";
                // line 520
                echo (((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 520)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 520)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 520)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 520)] ?? null) : null), "text", [], "any", false, false, false, 520)) : (""));
                echo "</textarea>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "</td>
                                            <td class=\"text-right\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#attribute-row";
            // line 525
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 526
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 531
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 532
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 540
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
        // line 552
        $context["option_row"] = 0;
        // line 553
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 554
            echo "                                            <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i
                                                            class=\"fa fa-minus-circle\"
                                                            onclick=\"\$('a[href=\\'#tab-option";
            // line 556
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 556);
            echo "
                                                </a></li>
                                            ";
            // line 558
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 559
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 561
        echo ($context["entry_option"] ?? null);
        echo "\"
                                                   id=\"input-option\" class=\"form-control\"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\"> ";
        // line 567
        $context["option_row"] = 0;
        // line 568
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 569
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 570
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                                <input type=\"hidden\"
                                                       name=\"product_option[";
            // line 572
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\"
                                                       value=\"";
            // line 573
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 573);
            echo "\"/> <input
                                                        type=\"hidden\" name=\"product_option[";
            // line 574
            echo ($context["option_row"] ?? null);
            echo "][name]\"
                                                        value=\"";
            // line 575
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 575);
            echo "\"/> <input type=\"hidden\"
                                                                                                   name=\"product_option[";
            // line 576
            echo ($context["option_row"] ?? null);
            echo "][option_id]\"
                                                                                                   value=\"";
            // line 577
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 577);
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 578
            echo ($context["option_row"] ?? null);
            echo "][type]\"
                                                       value=\"";
            // line 579
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 579);
            echo "\"/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\"
                                                           for=\"input-required";
            // line 582
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"product_option[";
            // line 584
            echo ($context["option_row"] ?? null);
            echo "][required]\"
                                                                id=\"input-required";
            // line 585
            echo ($context["option_row"] ?? null);
            echo "\"
                                                                class=\"form-control\">
                                                            ";
            // line 587
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 587)) {
                // line 588
                echo "                                                                <option value=\"1\"
                                                                        selected=\"selected\">";
                // line 589
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\">";
                // line 590
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            } else {
                // line 592
                echo "                                                                <option value=\"1\">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                                <option value=\"0\"
                                                                        selected=\"selected\">";
                // line 594
                echo ($context["text_no"] ?? null);
                echo "</option>
                                                            ";
            }
            // line 596
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 599
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 599) == "text")) {
                // line 600
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 602
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 605
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 606
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 606);
                echo "\"
                                                                   placeholder=\"";
                // line 607
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 608
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 613
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 613) == "textarea")) {
                // line 614
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 616
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"product_option[";
                // line 618
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                      rows=\"5\" placeholder=\"";
                // line 619
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                      id=\"input-value";
                // line 620
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                      class=\"form-control\">";
                // line 621
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 621);
                echo "</textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 625
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 625) == "file")) {
                // line 626
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 628
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 631
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                   value=\"";
                // line 632
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 632);
                echo "\"
                                                                   placeholder=\"";
                // line 633
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                   id=\"input-value";
                // line 634
                echo ($context["option_row"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 639
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 639) == "date")) {
                // line 640
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 642
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 646
                echo ($context["option_row"] ?? null);
                echo "][value]\"
                                                                       value=\"";
                // line 647
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 647);
                echo "\"
                                                                       placeholder=\"";
                // line 648
                echo ($context["entry_option_value"] ?? null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-value";
                // line 650
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
            // line 658
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 658) == "time")) {
                // line 659
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 661
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
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
                                                                       data-date-format=\"HH:mm\"
                                                                       id=\"input-value";
                // line 669
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
            // line 677
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 677) == "datetime")) {
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
                                                            <div class=\"input-group datetime\">
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
                                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
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
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 696) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 696) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 696) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 696) == "image"))) {
                // line 697
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 698
                echo ($context["option_row"] ?? null);
                echo "\"
                                                               class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                            <tr>
                                                                <td class=\"text-left\">";
                // line 702
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 703
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                                <td class=\"text-left\">";
                // line 704
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 705
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 706
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 707
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                                <td></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            ";
                // line 713
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 713));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 714
                    echo "                                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 716
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 718
                    if ((($__internal_compile_18 = ($context["option_values"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 718)] ?? null) : null)) {
                        // line 719
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_19 = ($context["option_values"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 719)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 720
                            echo "                                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 720) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 720))) {
                                // line 721
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 721);
                                echo "\"
                                                                                                selected=\"selected\">";
                                // line 722
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 722);
                                echo "</option>
                                                                                    ";
                            } else {
                                // line 724
                                echo "                                                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 724);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 724);
                                echo "</option>
                                                                                    ";
                            }
                            // line 726
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 727
                        echo "                                                                            ";
                    }
                    // line 728
                    echo "                                                                        </select> <input type=\"hidden\"
                                                                                         name=\"product_option[";
                    // line 729
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\"
                                                                                         value=\"";
                    // line 730
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 730);
                    echo "\"/>
                                                                    </td>
                                                                    <td class=\"text-right\"><input type=\"text\"
                                                                                                  name=\"product_option[";
                    // line 733
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\"
                                                                                                  value=\"";
                    // line 734
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 734);
                    echo "\"
                                                                                                  placeholder=\"";
                    // line 735
                    echo ($context["entry_quantity"] ?? null);
                    echo "\"
                                                                                                  class=\"form-control\"/>
                                                                    </td>
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 739
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 741
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 741)) {
                        // line 742
                        echo "                                                                                <option value=\"1\"
                                                                                        selected=\"selected\">";
                        // line 743
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\">";
                        // line 744
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    } else {
                        // line 746
                        echo "                                                                                <option value=\"1\">";
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                                                <option value=\"0\"
                                                                                        selected=\"selected\">";
                        // line 748
                        echo ($context["text_no"] ?? null);
                        echo "</option>
                                                                            ";
                    }
                    // line 750
                    echo "                                                                        </select></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 752
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 754
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 754) == "+")) {
                        // line 755
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 759
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 761
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 761) == "-")) {
                        // line 762
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 766
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 768
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 769
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\"
                                                                                         value=\"";
                    // line 770
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 770);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 771
                    echo ($context["entry_price"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 774
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 776
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 776) == "+")) {
                        // line 777
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 781
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 783
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 783) == "-")) {
                        // line 784
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 788
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 790
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 791
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\"
                                                                                         value=\"";
                    // line 792
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 792);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 793
                    echo ($context["entry_points"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 796
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\"
                                                                                class=\"form-control\">
                                                                            ";
                    // line 798
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 798) == "+")) {
                        // line 799
                        echo "                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>
                                                                            ";
                    } else {
                        // line 803
                        echo "                                                                                <option value=\"+\">+</option>
                                                                            ";
                    }
                    // line 805
                    echo "                                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 805) == "-")) {
                        // line 806
                        echo "                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>
                                                                            ";
                    } else {
                        // line 810
                        echo "                                                                                <option value=\"-\">-</option>
                                                                            ";
                    }
                    // line 812
                    echo "                                                                        </select> <input type=\"text\"
                                                                                         name=\"product_option[";
                    // line 813
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\"
                                                                                         value=\"";
                    // line 814
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 814);
                    echo "\"
                                                                                         placeholder=\"";
                    // line 815
                    echo ($context["entry_weight"] ?? null);
                    echo "\"
                                                                                         class=\"form-control\"/></td>
                                                                    <td class=\"text-right\">
                                                                        <button type=\"button\"
                                                                                onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 819
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                    // line 821
                    echo ($context["button_remove"] ?? null);
                    echo "\"
                                                                                class=\"btn btn-danger\"><i
                                                                                    class=\"fa fa-minus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                ";
                    // line 827
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 828
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 829
                echo "                                                            </tbody>

                                                            <tfoot>
                                                            <tr>
                                                                <td colspan=\"6\"></td>
                                                                <td class=\"text-left\">
                                                                    <button type=\"button\"
                                                                            onclick=\"addOptionValue('";
                // line 836
                echo ($context["option_row"] ?? null);
                echo "');\"
                                                                            data-toggle=\"tooltip\"
                                                                            title=\"";
                // line 838
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
                // line 846
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">
                                                        ";
                // line 847
                if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 847)] ?? null) : null)) {
                    // line 848
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 848)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 849
                        echo "                                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 849);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 849);
                        echo "</option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 851
                    echo "                                                        ";
                }
                // line 852
                echo "                                                    </select>
                                                ";
            }
            // line 853
            echo " </div>
                                            ";
            // line 854
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 855
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
        // line 864
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 865
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-left\"></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 871
        $context["recurring_row"] = 0;
        // line 872
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 873
            echo "                                        <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 875
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 877
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 878
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 878) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 878))) {
                    // line 879
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 879);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 880
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 880);
                    echo "</option>
                                                        ";
                } else {
                    // line 882
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 882);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 882);
                    echo "</option>
                                                        ";
                }
                // line 884
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 885
            echo "                                                </select></td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 887
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 889
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 890
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 890) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 890))) {
                    // line 891
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 891);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 892
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 892);
                    echo "</option>
                                                        ";
                } else {
                    // line 894
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 894);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 894);
                    echo "</option>
                                                        ";
                }
                // line 896
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 897
            echo "                                                </select></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#recurring-row";
            // line 900
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 901
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 906
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 907
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 908
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 915
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
        // line 928
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 929
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 930
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 931
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 932
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 933
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 939
        $context["discount_row"] = 0;
        // line 940
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 941
            echo "                                        <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_discount[";
            // line 943
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 945
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 946
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 946) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 946))) {
                    // line 947
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 947);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 948
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 948);
                    echo "</option>
                                                        ";
                } else {
                    // line 950
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 950);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 950);
                    echo "</option>
                                                        ";
                }
                // line 952
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 953
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 955
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                                                          value=\"";
            // line 956
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 956);
            echo "\"
                                                                          placeholder=\"";
            // line 957
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 960
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 961
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 961);
            echo "\"
                                                                          placeholder=\"";
            // line 962
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 965
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 966
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 966);
            echo "\"
                                                                          placeholder=\"";
            // line 967
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 972
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 973
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 973);
            echo "\"
                                                           placeholder=\"";
            // line 974
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
            // line 983
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 984
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 984);
            echo "\"
                                                           placeholder=\"";
            // line 985
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
            // line 993
            echo ($context["discount_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 994
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 999
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1000
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1001
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1008
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
        // line 1021
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1022
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1023
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1024
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1025
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1031
        $context["special_row"] = 0;
        // line 1032
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1033
            echo "                                        <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_special[";
            // line 1035
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 1037
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1038
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1038) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1038))) {
                    // line 1039
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1039);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1040
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1040);
                    echo "</option>
                                                        ";
                } else {
                    // line 1042
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1042);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1042);
                    echo "</option>
                                                        ";
                }
                // line 1044
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1045
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1047
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1048
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1048);
            echo "\"
                                                                          placeholder=\"";
            // line 1049
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1052
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                                                          value=\"";
            // line 1053
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1053);
            echo "\"
                                                                          placeholder=\"";
            // line 1054
            echo ($context["entry_price"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1059
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1060
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1060);
            echo "\"
                                                           placeholder=\"";
            // line 1061
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
            // line 1070
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1071
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1071);
            echo "\"
                                                           placeholder=\"";
            // line 1072
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
            // line 1080
            echo ($context["special_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1081
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1086
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1087
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1088
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"5\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1095
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
        // line 1108
        echo ($context["entry_image"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 1114
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 1116
        echo ($context["placeholder"] ?? null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 1117
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
        // line 1127
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1128
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1134
        $context["image_row"] = 0;
        // line 1135
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1136
            echo "                                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1137
            echo ($context["image_row"] ?? null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 1139
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1139);
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 1140
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input
                                                        type=\"hidden\" name=\"product_image[";
            // line 1141
            echo ($context["image_row"] ?? null);
            echo "][image]\"
                                                        value=\"";
            // line 1142
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1142);
            echo "\"
                                                        id=\"input-image";
            // line 1143
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_image[";
            // line 1145
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 1146
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1146);
            echo "\"
                                                                          placeholder=\"";
            // line 1147
            echo ($context["entry_sort_order"] ?? null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 1150
            echo ($context["image_row"] ?? null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1151
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1156
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1157
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1158
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1165
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
        // line 1176
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1178
        echo ($context["points"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 1179
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1186
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1187
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1193
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1194
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1194);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_reward[";
            // line 1196
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1196);
            echo "][points]\"
                                                                          value=\"";
            // line 1197
            echo (((($__internal_compile_22 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1197)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1197)] ?? null) : null), "points", [], "any", false, false, false, 1197)) : (""));
            echo "\"
                                                                          class=\"form-control\"/></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1201
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                            title=\"";
        // line 1209
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"no_index\" value=\"1\"
                                               ";
        // line 1213
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
        // line 1217
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
        // line 1223
        echo ($context["text_keyword"] ?? null);
        echo "
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 1229
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 1230
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 1234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1235
            echo "                                                <tr>
                                                    <td class=\"text-left\">";
            // line 1236
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1236);
            echo "</td>
                                                    <td class=\"text-left\">";
            // line 1237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1238
                echo "                                                            <div class=\"input-group\"><span
                                                                        class=\"input-group-addon\"><img
                                                                            src=\"language/";
                // line 1240
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1240);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1240);
                echo ".png\"
                                                                            title=\"";
                // line 1241
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1241);
                echo "\"/></span> <input
                                                                        type=\"text\"
                                                                        name=\"product_seo_url[";
                // line 1243
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1243);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1243);
                echo "]\"
                                                                        value=\"";
                // line 1244
                if ((($__internal_compile_24 = (($__internal_compile_25 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1244)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1244)] ?? null) : null)) {
                    echo (($__internal_compile_26 = (($__internal_compile_27 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1244)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1244)] ?? null) : null);
                }
                echo "\"
                                                                        placeholder=\"";
                // line 1245
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                                        class=\"form-control\"/>
                                                            </div>
                                                            ";
                // line 1248
                if ((($__internal_compile_28 = (($__internal_compile_29 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1248)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1248)] ?? null) : null)) {
                    // line 1249
                    echo "                                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_30 = (($__internal_compile_31 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1249)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1249)] ?? null) : null);
                    echo "</div>
                                                            ";
                }
                // line 1251
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
        // line 1254
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
        // line 1265
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1266
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1271
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1272
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1272);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1273
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1273);
            echo "]\"
                                                                          class=\"form-control\">
                                                    <option value=\"\"></option>
                                                    ";
            // line 1276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1277
                echo "                                                        ";
                if (((($__internal_compile_32 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1277)] ?? null) : null) && ((($__internal_compile_33 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1277)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1277)))) {
                    // line 1278
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1278);
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1279
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1279);
                    echo "</option>
                                                        ";
                } else {
                    // line 1281
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1281);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1281);
                    echo "</option>
                                                        ";
                }
                // line 1283
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1284
            echo "                                                </select></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1287
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
        // line 1310
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 1315
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
        // line 1337
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
        // line 1354
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1354);
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
        // line 1366
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
        // line 1395
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
        // line 1424
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
        // line 1450
        echo ($context["attribute_row"] ?? null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1454
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 1456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1457
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1457);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1457);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1457);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1457);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1459
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1460
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
        // line 1474
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
        // line 1499
        echo ($context["option_row"] ?? null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1504
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
        // line 1527
        echo ($context["entry_required"] ?? null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 1529
        echo ($context["text_yes"] ?? null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 1530
        echo ($context["text_no"] ?? null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1536
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1537
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1543
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1544
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1550
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1551
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1557
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1558
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1564
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1565
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1571
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1572
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
        // line 1581
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1582
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 1583
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1584
        echo ($context["entry_price"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1585
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1586
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
        // line 1595
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
        // line 1623
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 1628
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 1633
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
        // line 1643
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1650
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 1652
        echo ($context["text_yes"] ?? null);
        echo "</option>';
            html += '    <option value=\"0\" selected>";
        // line 1653
        echo ($context["text_no"] ?? null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1659
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1664
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1669
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1670
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
        // line 1681
        echo ($context["discount_row"] ?? null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1686
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1687
            echo "            html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1687);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1687), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1689
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1690
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1691
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1692
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1693
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1694
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1695
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
        // line 1709
        echo ($context["special_row"] ?? null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1714
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1715
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1715);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1715), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1717
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1718
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1719
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1720
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1721
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1722
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 1728
        echo ($context["datepicker"] ?? null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 1737
        echo ($context["image_row"] ?? null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1741
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1742
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1743
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 1753
        echo ($context["recurring_row"] ?? null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 1759
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1760
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1760);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1760);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1762
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 1766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1767
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1767);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1767);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1769
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1772
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
        // line 1784
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 1789
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 1794
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
        // line 1804
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
        return array (  3929 => 1804,  3916 => 1794,  3908 => 1789,  3900 => 1784,  3885 => 1772,  3880 => 1769,  3869 => 1767,  3865 => 1766,  3859 => 1762,  3848 => 1760,  3844 => 1759,  3835 => 1753,  3822 => 1743,  3818 => 1742,  3812 => 1741,  3805 => 1737,  3793 => 1728,  3784 => 1722,  3780 => 1721,  3776 => 1720,  3772 => 1719,  3768 => 1718,  3765 => 1717,  3754 => 1715,  3750 => 1714,  3742 => 1709,  3725 => 1695,  3721 => 1694,  3717 => 1693,  3713 => 1692,  3709 => 1691,  3705 => 1690,  3702 => 1689,  3691 => 1687,  3687 => 1686,  3679 => 1681,  3665 => 1670,  3661 => 1669,  3653 => 1664,  3645 => 1659,  3636 => 1653,  3632 => 1652,  3627 => 1650,  3617 => 1643,  3604 => 1633,  3596 => 1628,  3588 => 1623,  3557 => 1595,  3545 => 1586,  3541 => 1585,  3537 => 1584,  3533 => 1583,  3529 => 1582,  3525 => 1581,  3513 => 1572,  3509 => 1571,  3500 => 1565,  3496 => 1564,  3487 => 1558,  3483 => 1557,  3474 => 1551,  3470 => 1550,  3461 => 1544,  3457 => 1543,  3448 => 1537,  3444 => 1536,  3435 => 1530,  3431 => 1529,  3426 => 1527,  3400 => 1504,  3392 => 1499,  3364 => 1474,  3347 => 1460,  3344 => 1459,  3327 => 1457,  3323 => 1456,  3318 => 1454,  3311 => 1450,  3282 => 1424,  3250 => 1395,  3218 => 1366,  3201 => 1354,  3181 => 1337,  3156 => 1315,  3148 => 1310,  3123 => 1287,  3115 => 1284,  3109 => 1283,  3101 => 1281,  3096 => 1279,  3091 => 1278,  3088 => 1277,  3084 => 1276,  3078 => 1273,  3074 => 1272,  3071 => 1271,  3067 => 1270,  3060 => 1266,  3056 => 1265,  3043 => 1254,  3030 => 1251,  3024 => 1249,  3022 => 1248,  3016 => 1245,  3010 => 1244,  3004 => 1243,  2999 => 1241,  2993 => 1240,  2989 => 1238,  2985 => 1237,  2981 => 1236,  2978 => 1235,  2974 => 1234,  2967 => 1230,  2963 => 1229,  2954 => 1223,  2941 => 1217,  2930 => 1213,  2921 => 1209,  2911 => 1201,  2901 => 1197,  2897 => 1196,  2892 => 1194,  2889 => 1193,  2885 => 1192,  2877 => 1187,  2873 => 1186,  2863 => 1179,  2859 => 1178,  2852 => 1176,  2838 => 1165,  2829 => 1158,  2823 => 1157,  2821 => 1156,  2813 => 1151,  2809 => 1150,  2803 => 1147,  2799 => 1146,  2795 => 1145,  2790 => 1143,  2786 => 1142,  2782 => 1141,  2778 => 1140,  2774 => 1139,  2769 => 1137,  2764 => 1136,  2759 => 1135,  2757 => 1134,  2748 => 1128,  2744 => 1127,  2731 => 1117,  2727 => 1116,  2722 => 1114,  2713 => 1108,  2697 => 1095,  2688 => 1088,  2682 => 1087,  2680 => 1086,  2672 => 1081,  2668 => 1080,  2657 => 1072,  2653 => 1071,  2649 => 1070,  2637 => 1061,  2633 => 1060,  2629 => 1059,  2621 => 1054,  2617 => 1053,  2613 => 1052,  2607 => 1049,  2603 => 1048,  2599 => 1047,  2595 => 1045,  2589 => 1044,  2581 => 1042,  2576 => 1040,  2571 => 1039,  2568 => 1038,  2564 => 1037,  2559 => 1035,  2553 => 1033,  2548 => 1032,  2546 => 1031,  2537 => 1025,  2533 => 1024,  2529 => 1023,  2525 => 1022,  2521 => 1021,  2505 => 1008,  2496 => 1001,  2490 => 1000,  2488 => 999,  2480 => 994,  2476 => 993,  2465 => 985,  2461 => 984,  2457 => 983,  2445 => 974,  2441 => 973,  2437 => 972,  2429 => 967,  2425 => 966,  2421 => 965,  2415 => 962,  2411 => 961,  2407 => 960,  2401 => 957,  2397 => 956,  2393 => 955,  2389 => 953,  2383 => 952,  2375 => 950,  2370 => 948,  2365 => 947,  2362 => 946,  2358 => 945,  2353 => 943,  2347 => 941,  2342 => 940,  2340 => 939,  2331 => 933,  2327 => 932,  2323 => 931,  2319 => 930,  2315 => 929,  2311 => 928,  2295 => 915,  2286 => 908,  2280 => 907,  2278 => 906,  2270 => 901,  2266 => 900,  2261 => 897,  2255 => 896,  2247 => 894,  2242 => 892,  2237 => 891,  2234 => 890,  2230 => 889,  2225 => 887,  2221 => 885,  2215 => 884,  2207 => 882,  2202 => 880,  2197 => 879,  2194 => 878,  2190 => 877,  2185 => 875,  2179 => 873,  2174 => 872,  2172 => 871,  2163 => 865,  2159 => 864,  2143 => 855,  2141 => 854,  2138 => 853,  2134 => 852,  2131 => 851,  2120 => 849,  2115 => 848,  2113 => 847,  2109 => 846,  2098 => 838,  2093 => 836,  2084 => 829,  2078 => 828,  2076 => 827,  2067 => 821,  2062 => 819,  2055 => 815,  2051 => 814,  2045 => 813,  2042 => 812,  2038 => 810,  2032 => 806,  2029 => 805,  2025 => 803,  2019 => 799,  2017 => 798,  2010 => 796,  2004 => 793,  2000 => 792,  1994 => 791,  1991 => 790,  1987 => 788,  1981 => 784,  1978 => 783,  1974 => 781,  1968 => 777,  1966 => 776,  1959 => 774,  1953 => 771,  1949 => 770,  1943 => 769,  1940 => 768,  1936 => 766,  1930 => 762,  1927 => 761,  1923 => 759,  1917 => 755,  1915 => 754,  1908 => 752,  1904 => 750,  1899 => 748,  1893 => 746,  1888 => 744,  1884 => 743,  1881 => 742,  1879 => 741,  1872 => 739,  1865 => 735,  1861 => 734,  1855 => 733,  1849 => 730,  1843 => 729,  1840 => 728,  1837 => 727,  1831 => 726,  1823 => 724,  1818 => 722,  1813 => 721,  1810 => 720,  1805 => 719,  1803 => 718,  1796 => 716,  1790 => 714,  1786 => 713,  1777 => 707,  1773 => 706,  1769 => 705,  1765 => 704,  1761 => 703,  1757 => 702,  1750 => 698,  1747 => 697,  1744 => 696,  1733 => 688,  1728 => 686,  1724 => 685,  1720 => 684,  1711 => 680,  1707 => 678,  1704 => 677,  1693 => 669,  1688 => 667,  1684 => 666,  1680 => 665,  1671 => 661,  1667 => 659,  1664 => 658,  1653 => 650,  1648 => 648,  1644 => 647,  1640 => 646,  1631 => 642,  1627 => 640,  1624 => 639,  1616 => 634,  1612 => 633,  1608 => 632,  1604 => 631,  1596 => 628,  1592 => 626,  1589 => 625,  1582 => 621,  1578 => 620,  1574 => 619,  1570 => 618,  1563 => 616,  1559 => 614,  1556 => 613,  1548 => 608,  1544 => 607,  1540 => 606,  1536 => 605,  1528 => 602,  1524 => 600,  1522 => 599,  1517 => 596,  1512 => 594,  1506 => 592,  1501 => 590,  1497 => 589,  1494 => 588,  1492 => 587,  1487 => 585,  1483 => 584,  1476 => 582,  1470 => 579,  1466 => 578,  1462 => 577,  1458 => 576,  1454 => 575,  1450 => 574,  1446 => 573,  1442 => 572,  1436 => 570,  1431 => 569,  1428 => 568,  1426 => 567,  1417 => 561,  1414 => 560,  1408 => 559,  1406 => 558,  1397 => 556,  1391 => 554,  1386 => 553,  1384 => 552,  1369 => 540,  1360 => 533,  1354 => 532,  1352 => 531,  1344 => 526,  1340 => 525,  1335 => 522,  1326 => 520,  1322 => 519,  1316 => 518,  1312 => 517,  1306 => 516,  1303 => 515,  1299 => 514,  1295 => 513,  1291 => 512,  1285 => 509,  1281 => 508,  1277 => 507,  1271 => 505,  1266 => 504,  1264 => 503,  1255 => 497,  1251 => 496,  1240 => 487,  1231 => 485,  1226 => 483,  1221 => 482,  1217 => 481,  1211 => 478,  1204 => 476,  1197 => 471,  1188 => 469,  1183 => 467,  1178 => 466,  1174 => 465,  1168 => 462,  1161 => 460,  1154 => 455,  1146 => 453,  1141 => 452,  1137 => 451,  1134 => 450,  1129 => 448,  1125 => 447,  1122 => 446,  1120 => 445,  1117 => 444,  1113 => 443,  1107 => 440,  1101 => 436,  1092 => 434,  1087 => 432,  1082 => 431,  1078 => 430,  1072 => 427,  1065 => 425,  1057 => 420,  1051 => 417,  1045 => 416,  1041 => 415,  1036 => 412,  1027 => 410,  1021 => 407,  1015 => 406,  1011 => 405,  1007 => 404,  999 => 400,  995 => 399,  989 => 396,  982 => 394,  974 => 389,  969 => 387,  965 => 386,  958 => 384,  946 => 375,  942 => 374,  937 => 372,  930 => 367,  925 => 365,  920 => 364,  915 => 362,  910 => 361,  908 => 360,  902 => 357,  896 => 353,  890 => 352,  882 => 350,  877 => 348,  872 => 347,  869 => 346,  865 => 345,  859 => 342,  851 => 337,  847 => 336,  842 => 334,  836 => 330,  830 => 329,  822 => 327,  817 => 325,  812 => 324,  809 => 323,  805 => 322,  799 => 319,  788 => 311,  784 => 310,  777 => 306,  773 => 305,  766 => 301,  762 => 300,  755 => 296,  744 => 288,  740 => 287,  734 => 284,  727 => 279,  722 => 278,  719 => 277,  714 => 275,  711 => 274,  708 => 273,  703 => 272,  700 => 271,  695 => 269,  692 => 268,  690 => 267,  685 => 265,  679 => 261,  673 => 260,  665 => 258,  660 => 256,  655 => 255,  652 => 254,  648 => 253,  640 => 250,  632 => 244,  627 => 242,  622 => 241,  617 => 239,  612 => 238,  610 => 237,  604 => 234,  597 => 230,  593 => 229,  586 => 227,  578 => 222,  574 => 221,  569 => 219,  563 => 215,  557 => 214,  549 => 212,  544 => 210,  539 => 209,  536 => 208,  532 => 207,  528 => 206,  522 => 203,  511 => 197,  506 => 195,  499 => 191,  495 => 190,  490 => 188,  480 => 183,  473 => 181,  462 => 175,  455 => 173,  444 => 167,  437 => 165,  426 => 159,  419 => 157,  408 => 151,  401 => 149,  390 => 143,  383 => 141,  377 => 137,  371 => 136,  369 => 135,  365 => 134,  361 => 133,  356 => 131,  350 => 127,  339 => 123,  335 => 122,  331 => 121,  327 => 120,  319 => 117,  315 => 116,  307 => 111,  303 => 110,  299 => 109,  294 => 107,  286 => 104,  278 => 99,  274 => 98,  270 => 97,  265 => 95,  257 => 92,  249 => 87,  245 => 86,  241 => 85,  237 => 84,  233 => 83,  225 => 80,  216 => 74,  212 => 73,  208 => 72,  203 => 70,  195 => 67,  186 => 61,  182 => 60,  178 => 59,  173 => 57,  165 => 54,  159 => 50,  153 => 48,  151 => 47,  147 => 46,  143 => 45,  139 => 44,  134 => 42,  126 => 39,  119 => 36,  115 => 35,  108 => 31,  102 => 28,  98 => 26,  91 => 22,  88 => 21,  86 => 20,  81 => 17,  70 => 14,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_form.twig", "");
    }
}
