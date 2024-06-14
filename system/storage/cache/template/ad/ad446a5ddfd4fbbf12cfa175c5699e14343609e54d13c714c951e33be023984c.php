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
class __TwigTemplate_6a6b399fad10dfb784c9372f443835fc616c1e4062cd07f382e75a96be7a897b extends \Twig\Template
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
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title\">";
        // line 35
        echo ($context["entry_title"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"title\"
                                   data-length=\"128\"
                                   value=\"";
        // line 40
        echo ($context["title"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 41
        echo ($context["entry_title"] ?? null);
        echo "\"
                                   id=\"input-title\" class=\"form-control\"/>
                            ";
        // line 43
        if (($context["error_title"] ?? null)) {
            // line 44
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                            ";
        }
        // line 46
        echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title\">";
        // line 50
        echo ($context["entry_responsibility"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"responsibility\"
                                   value=\"";
        // line 54
        echo ($context["responsibility"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 55
        echo ($context["entry_responsibility"] ?? null);
        echo "\"
                                   id=\"input-title\" class=\"form-control\"/>
                            ";
        // line 57
        if (($context["error_responsibility"] ?? null)) {
            // line 58
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_responsibility"] ?? null);
            echo "</div>
                            ";
        }
        // line 60
        echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title\">";
        // line 64
        echo ($context["entry_requirements"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"title\"
                                   value=\"";
        // line 68
        echo ($context["requirements"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 69
        echo ($context["entry_requirements"] ?? null);
        echo "\"
                                   id=\"input-title\" class=\"form-control\"/>
                            ";
        // line 71
        if (($context["error_requirements"] ?? null)) {
            // line 72
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_requirements"] ?? null);
            echo "</div>
                            ";
        }
        // line 74
        echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title\">";
        // line 78
        echo ($context["entry_conditions"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"conditions\"
                                   value=\"";
        // line 82
        echo ($context["conditions"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 83
        echo ($context["entry_conditions"] ?? null);
        echo "\"
                                   id=\"input-title\" class=\"form-control\"/>
                            ";
        // line 85
        if (($context["error_conditions"] ?? null)) {
            // line 86
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_conditions"] ?? null);
            echo "</div>
                            ";
        }
        // line 88
        echo "                        </div>
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
        // line 109
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 114
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
        // line 136
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
        // line 153
        echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 153);
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
        // line 165
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
        // line 194
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
        // line 223
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
        // line 249
        echo ($context["attribute_row"] ?? null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 253
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 256
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 256);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 256);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 256);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 256);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 259
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
        // line 273
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
        // line 298
        echo ($context["option_row"] ?? null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 303
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
        // line 326
        echo ($context["entry_required"] ?? null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 328
        echo ($context["text_yes"] ?? null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 329
        echo ($context["text_no"] ?? null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 335
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 336
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 342
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 343
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 349
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 350
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 356
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 357
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 363
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 364
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 370
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 371
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
        // line 380
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 381
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 382
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 383
        echo ($context["entry_price"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 384
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 385
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
        // line 394
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
        // line 422
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 427
        echo ($context["datepicker"] ?? null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 432
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
        // line 442
        echo ($context["option_value_row"] ?? null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 449
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 451
        echo ($context["text_yes"] ?? null);
        echo "</option>';
            html += '    <option value=\"0\" selected>";
        // line 452
        echo ($context["text_no"] ?? null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 458
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 463
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 468
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 469
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
        // line 480
        echo ($context["discount_row"] ?? null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 486
            echo "            html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 486);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 486), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 489
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 490
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 491
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 492
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 493
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 494
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
        // line 508
        echo ($context["special_row"] ?? null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 514
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 514);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 514), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 516
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 517
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 518
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 519
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 520
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 521
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 527
        echo ($context["datepicker"] ?? null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 536
        echo ($context["image_row"] ?? null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 540
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 541
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 542
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 552
        echo ($context["recurring_row"] ?? null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 559
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 559);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 559);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 566
            echo "            html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 566);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 566);
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 568
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 571
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
        // line 583
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 588
        echo ($context["datepicker"] ?? null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 593
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
        // line 603
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
        return array (  1034 => 603,  1021 => 593,  1013 => 588,  1005 => 583,  990 => 571,  985 => 568,  974 => 566,  970 => 565,  964 => 561,  953 => 559,  949 => 558,  940 => 552,  927 => 542,  923 => 541,  917 => 540,  910 => 536,  898 => 527,  889 => 521,  885 => 520,  881 => 519,  877 => 518,  873 => 517,  870 => 516,  859 => 514,  855 => 513,  847 => 508,  830 => 494,  826 => 493,  822 => 492,  818 => 491,  814 => 490,  810 => 489,  807 => 488,  796 => 486,  792 => 485,  784 => 480,  770 => 469,  766 => 468,  758 => 463,  750 => 458,  741 => 452,  737 => 451,  732 => 449,  722 => 442,  709 => 432,  701 => 427,  693 => 422,  662 => 394,  650 => 385,  646 => 384,  642 => 383,  638 => 382,  634 => 381,  630 => 380,  618 => 371,  614 => 370,  605 => 364,  601 => 363,  592 => 357,  588 => 356,  579 => 350,  575 => 349,  566 => 343,  562 => 342,  553 => 336,  549 => 335,  540 => 329,  536 => 328,  531 => 326,  505 => 303,  497 => 298,  469 => 273,  452 => 259,  449 => 258,  432 => 256,  428 => 255,  423 => 253,  416 => 249,  387 => 223,  355 => 194,  323 => 165,  306 => 153,  286 => 136,  261 => 114,  253 => 109,  230 => 88,  224 => 86,  222 => 85,  217 => 83,  213 => 82,  206 => 78,  200 => 74,  194 => 72,  192 => 71,  187 => 69,  183 => 68,  176 => 64,  170 => 60,  164 => 58,  162 => 57,  157 => 55,  153 => 54,  146 => 50,  140 => 46,  134 => 44,  132 => 43,  127 => 41,  123 => 40,  115 => 35,  108 => 31,  102 => 28,  98 => 26,  91 => 22,  88 => 21,  86 => 20,  81 => 17,  70 => 14,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_form.twig", "");
    }
}
