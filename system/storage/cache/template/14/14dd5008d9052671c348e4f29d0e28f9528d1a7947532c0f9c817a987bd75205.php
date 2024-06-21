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

/* catalog/option_form.twig */
class __TwigTemplate_d4993d724f260e417bfd62ed82ae6381230a6ee25f2b83df399ddf9d5e9558b5 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\"
                      class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 32
        echo ($context["text_option"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\"> ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 36
            echo "                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                    src=\"language/";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37);
            echo ".png\"
                                                    title=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            echo "\"/></span>
                                        <input type=\"text\" name=\"option_description[";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            echo "][name]\"
                                               value=\"";
            // line 40
            echo (((($__internal_compile_0 = ($context["option_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["option_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null), "name", [], "any", false, false, false, 40)) : (""));
            echo "\"
                                               placeholder=\"";
            // line 41
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\"/>
                                    </div>
                                    ";
            // line 43
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null)) {
                // line 44
                echo "                                        <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
                echo "</div>
                                    ";
            }
            // line 46
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 49
        echo ($context["entry_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                                    <optgroup label=\"";
        // line 52
        echo ($context["text_choose"] ?? null);
        echo "\">
                                        ";
        // line 53
        if ((($context["type"] ?? null) == "select")) {
            // line 54
            echo "                                            <option value=\"select\" selected=\"selected\">";
            echo ($context["text_select"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 56
            echo "                                            <option value=\"select\">";
            echo ($context["text_select"] ?? null);
            echo "</option>
                                        ";
        }
        // line 58
        echo "                                        ";
        if ((($context["type"] ?? null) == "radio")) {
            // line 59
            echo "                                            <option value=\"radio\" selected=\"selected\">";
            echo ($context["text_radio"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 61
            echo "                                            <option value=\"radio\">";
            echo ($context["text_radio"] ?? null);
            echo "</option>
                                        ";
        }
        // line 63
        echo "                                        ";
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 64
            echo "                                            <option value=\"checkbox\" selected=\"selected\">";
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 66
            echo "                                            <option value=\"checkbox\">";
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                                        ";
        }
        // line 68
        echo "                                    </optgroup>
                                    <optgroup label=\"";
        // line 69
        echo ($context["text_input"] ?? null);
        echo "\">
                                        ";
        // line 70
        if ((($context["type"] ?? null) == "text")) {
            // line 71
            echo "                                            <option value=\"text\" selected=\"selected\">";
            echo ($context["text_text"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 73
            echo "                                            <option value=\"text\">";
            echo ($context["text_text"] ?? null);
            echo "</option>
                                        ";
        }
        // line 75
        echo "                                        ";
        if ((($context["type"] ?? null) == "textarea")) {
            // line 76
            echo "                                            <option value=\"textarea\" selected=\"selected\">";
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 78
            echo "                                            <option value=\"textarea\">";
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                                        ";
        }
        // line 80
        echo "                                    </optgroup>
                                    <optgroup label=\"";
        // line 81
        echo ($context["text_file"] ?? null);
        echo "\">
                                        ";
        // line 82
        if ((($context["type"] ?? null) == "file")) {
            // line 83
            echo "                                            <option value=\"file\" selected=\"selected\">";
            echo ($context["text_file"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 85
            echo "                                            <option value=\"file\">";
            echo ($context["text_file"] ?? null);
            echo "</option>
                                        ";
        }
        // line 87
        echo "                                    </optgroup>
                                    <optgroup label=\"";
        // line 88
        echo ($context["text_date"] ?? null);
        echo "\">
                                        ";
        // line 89
        if ((($context["type"] ?? null) == "date")) {
            // line 90
            echo "                                            <option value=\"date\" selected=\"selected\">";
            echo ($context["text_date"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 92
            echo "                                            <option value=\"date\">";
            echo ($context["text_date"] ?? null);
            echo "</option>
                                        ";
        }
        // line 94
        echo "                                        ";
        if ((($context["type"] ?? null) == "time")) {
            // line 95
            echo "                                            <option value=\"time\" selected=\"selected\">";
            echo ($context["text_time"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 97
            echo "                                            <option value=\"time\">";
            echo ($context["text_time"] ?? null);
            echo "</option>
                                        ";
        }
        // line 99
        echo "                                        ";
        if ((($context["type"] ?? null) == "datetime")) {
            // line 100
            echo "                                            <option value=\"datetime\" selected=\"selected\">";
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 102
            echo "                                            <option value=\"datetime\">";
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                                        ";
        }
        // line 104
        echo "                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 109
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 111
        echo ($context["sort_order"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 112
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>";
        // line 117
        echo ($context["text_value"] ?? null);
        echo "</legend>
                        <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <td class=\"text-left required\">";
        // line 121
        echo ($context["entry_option_value"] ?? null);
        echo "</td>
                                <td class=\"text-center\">";
        // line 122
        echo ($context["entry_image"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 123
        echo ($context["entry_attention"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 124
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>

                            ";
        // line 130
        $context["option_value_row"] = 0;
        // line 131
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 132
            echo "                                <tr id=\"option-value-row";
            echo ($context["option_value_row"] ?? null);
            echo "\">
                                    <td class=\"text-center\"><input type=\"hidden\"
                                                                   name=\"option_value[";
            // line 134
            echo ($context["option_value_row"] ?? null);
            echo "][option_value_id]\"
                                                                   value=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 135);
            echo "\"/>
                                        ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 137
                echo "                                            <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                            src=\"language/";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 138);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 138);
                echo ".png\"
                                                            title=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 139);
                echo "\"/></span>
                                                <input type=\"text\"
                                                       name=\"option_value[";
                // line 141
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
                echo "][name]\"
                                                       value=\"";
                // line 142
                echo (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 142)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 142)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142)] ?? null) : null), "name", [], "any", false, false, false, 142)) : (""));
                echo "\"
                                                       placeholder=\"";
                // line 143
                echo ($context["entry_option_value"] ?? null);
                echo "\" class=\"form-control\"/>
                                            </div>
                                            ";
                // line 145
                if ((($__internal_compile_6 = (($__internal_compile_7 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)] ?? null) : null)) {
                    // line 146
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_8 = (($__internal_compile_9 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 148
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                    <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 149
            echo ($context["option_value_row"] ?? null);
            echo "\"
                                                             data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                    src=\"";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "thumb", [], "any", false, false, false, 151);
            echo "\" alt=\"\" title=\"\"
                                                    data-placeholder=\"";
            // line 152
            echo ($context["placeholder"] ?? null);
            echo "\"/></a>
                                        <input type=\"hidden\" name=\"option_value[";
            // line 153
            echo ($context["option_value_row"] ?? null);
            echo "][image]\"
                                               value=\"";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 154);
            echo "\" id=\"input-image";
            echo ($context["option_value_row"] ?? null);
            echo "\"/>
                                    </td>
                                    <td class=\"text-left\">
                                        ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 158
                echo "                                            <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                            src=\"language/";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 159);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 159);
                echo ".png\"
                                                            title=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["language"], "attention", [], "any", false, false, false, 160);
                echo "\"/></span>
                                                <input type=\"text\"
                                                       name=\"option_value[";
                // line 162
                echo ($context["option_value_row"] ?? null);
                echo "][option_value_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162);
                echo "][attention]\"
                                                       value=\"";
                // line 163
                echo (((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description_attention", [], "any", false, false, false, 163)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_description", [], "any", false, false, false, 163)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163)] ?? null) : null), "attention", [], "any", false, false, false, 163)) : (""));
                echo "\"
                                                       placeholder=\"";
                // line 164
                echo ($context["entry_option_value_attention"] ?? null);
                echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                            ";
                // line 167
                if ((($__internal_compile_12 = (($__internal_compile_13 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    // line 168
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_compile_14 = (($__internal_compile_15 = ($context["error_option_value"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["option_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 168)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 170
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                                    </td>
                                    <td class=\"text-right\"><input type=\"text\"
                                                                  name=\"option_value[";
            // line 173
            echo ($context["option_value_row"] ?? null);
            echo "][sort_order]\"
                                                                  value=\"";
            // line 174
            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "sort_order", [], "any", false, false, false, 174);
            echo "\"
                                                                  class=\"form-control\"/></td>
                                    <td class=\"text-right\">
                                        <button type=\"button\"
                                                onclick=\"\$('#option-value-row";
            // line 178
            echo ($context["option_value_row"] ?? null);
            echo "').remove();\"
                                                data-toggle=\"tooltip\" title=\"";
            // line 179
            echo ($context["button_remove"] ?? null);
            echo "\"
                                                class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                    </td>
                                </tr>
                                ";
            // line 183
            $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
            // line 184
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan=\"3\"></td>
                                <td class=\"text-right\">
                                    <button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\"
                                            title=\"";
        // line 192
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                                                class=\"fa fa-plus-circle\"></i></button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
        \$('select[name=\\'type\\']').on('change', function () {
            if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
                \$('#option-value').parent().show();
            } else {
                \$('#option-value').parent().hide();
            }
        });

        \$('select[name=\\'type\\']').trigger('change');

        var option_value_row = ";
        // line 214
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue() {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
            ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 220
            echo "            html += '    <div class=\"input-group\">';
            html += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 221
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 221);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 221);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 221);
            echo "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 221);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_option_value"] ?? null);
            echo "\" class=\"form-control\" />';
            html += '    </div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "            html += '  </td>';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 225
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][attention]\" value=\"\" placeholder=\"";
        // line 226
        echo ($context["entry_attention"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 227
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 228
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#option-value tbody').append(html);

            option_value_row++;
        }

        //--></script>
</div>
";
        // line 238
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  655 => 238,  642 => 228,  638 => 227,  634 => 226,  628 => 225,  625 => 224,  608 => 221,  605 => 220,  601 => 219,  593 => 214,  568 => 192,  559 => 185,  553 => 184,  551 => 183,  544 => 179,  540 => 178,  533 => 174,  529 => 173,  525 => 171,  519 => 170,  513 => 168,  511 => 167,  505 => 164,  501 => 163,  495 => 162,  490 => 160,  484 => 159,  481 => 158,  477 => 157,  469 => 154,  465 => 153,  461 => 152,  457 => 151,  452 => 149,  444 => 148,  438 => 146,  436 => 145,  431 => 143,  427 => 142,  421 => 141,  416 => 139,  410 => 138,  407 => 137,  403 => 136,  399 => 135,  395 => 134,  389 => 132,  384 => 131,  382 => 130,  373 => 124,  369 => 123,  365 => 122,  361 => 121,  354 => 117,  346 => 112,  342 => 111,  337 => 109,  330 => 104,  324 => 102,  318 => 100,  315 => 99,  309 => 97,  303 => 95,  300 => 94,  294 => 92,  288 => 90,  286 => 89,  282 => 88,  279 => 87,  273 => 85,  267 => 83,  265 => 82,  261 => 81,  258 => 80,  252 => 78,  246 => 76,  243 => 75,  237 => 73,  231 => 71,  229 => 70,  225 => 69,  222 => 68,  216 => 66,  210 => 64,  207 => 63,  201 => 61,  195 => 59,  192 => 58,  186 => 56,  180 => 54,  178 => 53,  174 => 52,  168 => 49,  158 => 46,  152 => 44,  150 => 43,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  127 => 37,  124 => 36,  120 => 35,  116 => 34,  111 => 32,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/option_form.twig", "");
    }
}
