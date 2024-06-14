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

/* catalog/vacancies_list.twig */
class __TwigTemplate_f3362b6eb91825b7d78837720e3bd53d31b0e66ba8a76b51bb35f32f781e9744 extends \Twig\Template
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
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\"
                        title=\"";
        // line 9
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 10
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\"
                        title=\"";
        // line 11
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 12
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i
                            class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"row\">
            <div id=\"filter\" class=\"col-sm-12\">
                <div class=\"panel panel-default panel-filter\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 38
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"filter-name\">";
        // line 44
        echo ($context["entry_name"] ?? null);
        echo "</label>
                                    <input type=\"text\" name=\"filter_name\" value=\"";
        // line 45
        echo ($context["filter_name"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 46
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"filter-name\" class=\"form-control\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"filter-model\">";
        // line 49
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                    <input type=\"text\" name=\"filter_model\" value=\"";
        // line 50
        echo ($context["filter_model"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 51
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"filter-model\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\"
                                           for=\"filter-manufacturer\">";
        // line 57
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                                    <input type=\"text\" value=\"";
        // line 58
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 59
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"filter-manufacturer\"
                                           class=\"form-control\"/>
                                    <input type=\"hidden\" name=\"filter_manufacturer\" value=\"";
        // line 61
        echo ($context["filter_manufacturer"] ?? null);
        echo "\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\"
                                           for=\"filter-category\">";
        // line 65
        echo ($context["entry_filter_category"] ?? null);
        echo "</label>
                                    <input type=\"text\" value=\"";
        // line 66
        echo ($context["filter_category_name"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 67
        echo ($context["entry_filter_category"] ?? null);
        echo "\" id=\"filter-category\"
                                           class=\"form-control\"/>
                                    <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 69
        echo ($context["filter_category"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <label class=\"col-xs-12 control-label text-center\">";
        // line 75
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_price_min\" value=\"";
        // line 77
        echo ($context["filter_price_min"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 78
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\"/>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_price_max\" value=\"";
        // line 81
        echo ($context["filter_price_max"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 82
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <label class=\"col-xs-12 control-label text-center\">";
        // line 88
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_quantity_min\"
                                                   value=\"";
        // line 91
        echo ($context["filter_quantity_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_from"] ?? null);
        echo "\"
                                                   class=\"form-control text-left\"/>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_quantity_max\"
                                                   value=\"";
        // line 96
        echo ($context["filter_quantity_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_to"] ?? null);
        echo "\"
                                                   class=\"form-control text-right\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"filter-status\">";
        // line 104
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <select name=\"filter_status\" id=\"filter-status\" class=\"form-control\">
                                        <option value=\"\"></option>
                                        ";
        // line 107
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 108
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 110
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 112
        echo "                                        ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 113
            echo "                                            <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 115
            echo "                                            <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 117
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label hidden-xs\">&nbsp;</label>
                                    <div class=\"button text-right\">
                                        <a href=\"index.php?route=catalog/product&user_token=";
        // line 122
        echo ($context["user_token"] ?? null);
        echo "\"
                                           class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        // line 123
        echo ($context["button_clear"] ?? null);
        echo "</a>
                                        <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i
                                                    class=\"fa fa-filter\"></i> ";
        // line 125
        echo ($context["button_filter"] ?? null);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 136
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 140
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 141
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                        <form action=\"";
        // line 143
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\"
                                                                                           onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/>
                                        </td>
                                        <td class=\"text-center\" style=\"width: 70px; \">";
        // line 151
        echo ($context["column_image"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 152
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 153
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            // line 154
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 155
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 156
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            // line 157
            echo "                                                <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 158
        if ((($context["sort"] ?? null) == "manufacturer")) {
            echo " <a
                                                    href=\"";
            // line 159
            echo ($context["sort_manufacturer"] ?? null);
            echo "\"
                                                    class=\"";
            // line 160
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        } else {
            // line 161
            echo "                                                <a href=\"";
            echo ($context["sort_manufacturer"] ?? null);
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        }
        // line 162
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 163
        echo ($context["column_category"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 164
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 165
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            // line 166
            echo "                                                <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 167
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a
                                                    href=\"";
            // line 168
            echo ($context["sort_quantity"] ?? null);
            echo "\"
                                                    class=\"";
            // line 169
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a
                                                    href=\"";
            // line 170
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        // line 171
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 172
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 173
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            // line 174
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 175
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 180
        if (($context["products"] ?? null)) {
            // line 181
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 182
                echo "                                            <tr>
                                                <td class=\"text-center\">";
                // line 183
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 183), ($context["selected"] ?? null))) {
                    // line 184
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 185);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 187
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                    echo "\"/>
                                                    ";
                }
                // line 189
                echo "</td>
                                                <td class=\"text-center\">";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 190)) {
                    echo " <img
                                                            src=\"";
                    // line 191
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 191);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 191);
                    echo "\"
                                                            class=\"img-thumbnail\"/> ";
                } else {
                    // line 192
                    echo " <span
                                                            class=\"img-thumbnail list\"><i
                                                                class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                // line 194
                echo "</td>
                                                <td class=\"text-left\">";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 196);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 197);
                echo "</td>
                                                <td class=\"text-left\">
                                                    ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "categories", [], "any", false, false, false, 199));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 200
                    echo "                                                        <div>";
                    echo $context["category"];
                    echo "</div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "                                                </td>
                                                <td class=\"text-right\">";
                // line 203
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 203)) {
                    echo " <span
                                                            style=\"text-decoration: line-through;\">";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 204);
                    echo "</span>
                                                        <br/>
                                                        <div class=\"text-danger\">";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 206);
                    echo "</div>
                                                    ";
                } else {
                    // line 208
                    echo "                                                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 208);
                    echo "
                                                    ";
                }
                // line 209
                echo "</td>
                                                <td class=\"text-right\">";
                // line 210
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 210) <= 0)) {
                    echo " <span
                                                            class=\"label label-warning\">";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 211);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 211) <= 5)) {
                    // line 212
                    echo "                                                        <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 212);
                    echo "</span> ";
                } else {
                    // line 213
                    echo "                                                        <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 213);
                    echo "</span> ";
                }
                // line 214
                echo "                                                </td>
                                                <td class=\"text-left\">";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 215);
                echo "</td>
                                                <td class=\"text-right\">
                                                    <a href=\"";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 217);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 218
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i
                                                                class=\"fa fa-eye\"></i></a>
                                                    <a href=\"";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 220);
                echo "\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 221
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                                                class=\"fa fa-pencil\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                                    ";
        } else {
            // line 227
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 228
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 231
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 237
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 238
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('#button-filter').on('click', function () {
            let url = '';
            \$('#filter input[type=\"text\"][name^=\"filter\"], #filter input[type=\"hidden\"][name^=\"filter\"], select[name^=\"filter\"]').each(function () {
                if (\$(this).val() !== '') {
                    url += '&' + \$(this).attr('name') + '=' + encodeURIComponent(\$(this).val());
                }
            });
            location = 'index.php?route=catalog/product&user_token=";
        // line 253
        echo ($context["user_token"] ?? null);
        echo "' + url;
        });
    </script>
    <script>
        // IE and Edge fix!
        \$('button[form=\\'form-product\\']').on('click', function (e) {
            \$('#form-product').attr('action', \$(this).attr('formaction'));
        });

        \$('input[name=\\'filter_name\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 265
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
                \$('input[name=\\'filter_name\\']').val(item['label']);
            }
        });

        \$('input[name=\\'filter_model\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 285
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['model'],
                                value: item['product_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'filter_model\\']').val(item['label']);
            }
        });

        \$('#filter-manufacturer').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 305
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 308
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 309
        echo ($context["text_none"] ?? null);
        echo "'});
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
                if (item['value'] == '*') {
                    \$('input[name=\\'filter_manufacturer\\']').val('');
                    \$('#filter-manufacturer').val('');
                } else {
                    \$('input[name=\\'filter_manufacturer\\']').val(item['value']);
                    \$('#filter-manufacturer').val(item['label']);
                }
            }
        });

        \$('#filter-category').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 333
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 336
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 337
        echo ($context["text_none"] ?? null);
        echo "'});
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
                if (item['value'] == '*') {
                    \$('input[name=\\'filter_category\\']').val('');
                    \$('#filter-category').val('');
                } else {
                    \$('input[name=\\'filter_category\\']').val(item['value']);
                    \$('#filter-category').val(item['label']);
                }
            }
        });
    </script>
</div>
";
        // line 359
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/vacancies_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 359,  811 => 337,  807 => 336,  801 => 333,  774 => 309,  770 => 308,  764 => 305,  741 => 285,  718 => 265,  703 => 253,  685 => 238,  681 => 237,  673 => 231,  667 => 228,  664 => 227,  661 => 226,  650 => 221,  646 => 220,  641 => 218,  637 => 217,  632 => 215,  629 => 214,  624 => 213,  619 => 212,  615 => 211,  611 => 210,  608 => 209,  602 => 208,  597 => 206,  592 => 204,  588 => 203,  585 => 202,  576 => 200,  572 => 199,  567 => 197,  563 => 196,  559 => 195,  556 => 194,  551 => 192,  544 => 191,  540 => 190,  537 => 189,  532 => 188,  529 => 187,  524 => 185,  521 => 184,  519 => 183,  516 => 182,  511 => 181,  509 => 180,  501 => 175,  492 => 174,  486 => 173,  480 => 172,  477 => 171,  471 => 170,  463 => 169,  459 => 168,  455 => 167,  446 => 166,  440 => 165,  434 => 164,  430 => 163,  427 => 162,  420 => 161,  414 => 160,  410 => 159,  406 => 158,  397 => 157,  391 => 156,  385 => 155,  376 => 154,  370 => 153,  364 => 152,  360 => 151,  349 => 143,  344 => 141,  340 => 140,  333 => 136,  319 => 125,  314 => 123,  310 => 122,  303 => 117,  297 => 115,  291 => 113,  288 => 112,  282 => 110,  276 => 108,  274 => 107,  268 => 104,  255 => 96,  245 => 91,  239 => 88,  230 => 82,  226 => 81,  220 => 78,  216 => 77,  211 => 75,  202 => 69,  197 => 67,  193 => 66,  189 => 65,  182 => 61,  177 => 59,  173 => 58,  169 => 57,  160 => 51,  156 => 50,  152 => 49,  146 => 46,  142 => 45,  138 => 44,  129 => 38,  123 => 34,  115 => 30,  112 => 29,  105 => 25,  102 => 24,  100 => 23,  95 => 20,  84 => 18,  80 => 17,  75 => 15,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}
