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
class __TwigTemplate_3f481f69eda2aa0c0bb91ac48978a02a7eb499f4ac3f3677b972ec397e2f4845 extends \Twig\Template
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
                <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\"
                        title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 10
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i
                            class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 23
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 32
        echo "        <div class=\"row\">
            <div id=\"filter\" class=\"col-sm-12\">
                <div class=\"panel panel-default panel-filter\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 36
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"filter-name\">";
        // line 42
        echo ($context["entry_name"] ?? null);
        echo "</label>
                                    <input type=\"text\" name=\"filter_name\" value=\"";
        // line 43
        echo ($context["filter_name"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 44
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"filter-name\" class=\"form-control\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"filter-model\">";
        // line 47
        echo ($context["entry_model"] ?? null);
        echo "</label>
                                    <input type=\"text\" name=\"filter_model\" value=\"";
        // line 48
        echo ($context["filter_model"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 49
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"filter-model\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\"
                                           for=\"filter-manufacturer\">";
        // line 55
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                                    <input type=\"text\" value=\"";
        // line 56
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 57
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"filter-manufacturer\"
                                           class=\"form-control\"/>
                                    <input type=\"hidden\" name=\"filter_manufacturer\" value=\"";
        // line 59
        echo ($context["filter_manufacturer"] ?? null);
        echo "\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\"
                                           for=\"filter-category\">";
        // line 63
        echo ($context["entry_filter_category"] ?? null);
        echo "</label>
                                    <input type=\"text\" value=\"";
        // line 64
        echo ($context["filter_category_name"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 65
        echo ($context["entry_filter_category"] ?? null);
        echo "\" id=\"filter-category\"
                                           class=\"form-control\"/>
                                    <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 67
        echo ($context["filter_category"] ?? null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <label class=\"col-xs-12 control-label text-center\">";
        // line 73
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_price_min\" value=\"";
        // line 75
        echo ($context["filter_price_min"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 76
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\"/>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_price_max\" value=\"";
        // line 79
        echo ($context["filter_price_max"] ?? null);
        echo "\"
                                                   placeholder=\"";
        // line 80
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <label class=\"col-xs-12 control-label text-center\">";
        // line 86
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_quantity_min\"
                                                   value=\"";
        // line 89
        echo ($context["filter_quantity_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_from"] ?? null);
        echo "\"
                                                   class=\"form-control text-left\"/>
                                        </div>
                                        <div class=\"col-xs-6\">
                                            <input type=\"text\" name=\"filter_quantity_max\"
                                                   value=\"";
        // line 94
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
        // line 102
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <select name=\"filter_status\" id=\"filter-status\" class=\"form-control\">
                                        <option value=\"\"></option>
                                        ";
        // line 105
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 106
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 108
            echo "                                            <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 110
        echo "                                        ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 111
            echo "                                            <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 113
            echo "                                            <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 115
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label hidden-xs\">&nbsp;</label>
                                    <div class=\"button text-right\">
                                        <a href=\"index.php?route=catalog/product&user_token=";
        // line 120
        echo ($context["user_token"] ?? null);
        echo "\"
                                           class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        // line 121
        echo ($context["button_clear"] ?? null);
        echo "</a>
                                        <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i
                                                    class=\"fa fa-filter\"></i> ";
        // line 123
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
        // line 134
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 138
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 139
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                        <form action=\"";
        // line 141
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
        // line 149
        echo ($context["column_image"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 150
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 151
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            // line 152
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 153
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 154
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            // line 155
            echo "                                                <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 156
        if ((($context["sort"] ?? null) == "manufacturer")) {
            echo " <a
                                                    href=\"";
            // line 157
            echo ($context["sort_manufacturer"] ?? null);
            echo "\"
                                                    class=\"";
            // line 158
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        } else {
            // line 159
            echo "                                                <a href=\"";
            echo ($context["sort_manufacturer"] ?? null);
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        }
        // line 160
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 161
        echo ($context["column_category"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 162
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 163
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            // line 164
            echo "                                                <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 165
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a
                                                    href=\"";
            // line 166
            echo ($context["sort_quantity"] ?? null);
            echo "\"
                                                    class=\"";
            // line 167
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a
                                                    href=\"";
            // line 168
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        // line 169
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 170
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 171
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            // line 172
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 173
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 178
        if (($context["products"] ?? null)) {
            // line 179
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 180
                echo "                                            <tr>
                                                <td class=\"text-center\">";
                // line 181
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181), ($context["selected"] ?? null))) {
                    // line 182
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 183);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 185
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 186);
                    echo "\"/>
                                                    ";
                }
                // line 187
                echo "</td>
                                                <td class=\"text-center\">";
                // line 188
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 188)) {
                    echo " <img
                                                            src=\"";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 189);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 189);
                    echo "\"
                                                            class=\"img-thumbnail\"/> ";
                } else {
                    // line 190
                    echo " <span
                                                            class=\"img-thumbnail list\"><i
                                                                class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                // line 192
                echo "</td>
                                                <td class=\"text-left\">";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 193);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 194);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 195);
                echo "</td>
                                                <td class=\"text-left\">
                                                    ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "categories", [], "any", false, false, false, 197));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 198
                    echo "                                                        <div>";
                    echo $context["category"];
                    echo "</div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                                                </td>
                                                <td class=\"text-right\">";
                // line 201
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 201)) {
                    echo " <span
                                                            style=\"text-decoration: line-through;\">";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 202);
                    echo "</span>
                                                        <br/>
                                                        <div class=\"text-danger\">";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 204);
                    echo "</div>
                                                    ";
                } else {
                    // line 206
                    echo "                                                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 206);
                    echo "
                                                    ";
                }
                // line 207
                echo "</td>
                                                <td class=\"text-right\">";
                // line 208
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 208) <= 0)) {
                    echo " <span
                                                            class=\"label label-warning\">";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 209);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 209) <= 5)) {
                    // line 210
                    echo "                                                        <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 210);
                    echo "</span> ";
                } else {
                    // line 211
                    echo "                                                        <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 211);
                    echo "</span> ";
                }
                // line 212
                echo "                                                </td>
                                                <td class=\"text-left\">";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 213);
                echo "</td>
                                                <td class=\"text-right\">
                                                    <a href=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 215);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 216
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i
                                                                class=\"fa fa-eye\"></i></a>
                                                    <a href=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 218);
                echo "\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 219
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
            // line 224
            echo "                                    ";
        } else {
            // line 225
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 226
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 229
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 235
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 236
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
        // line 251
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
        // line 263
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
        // line 283
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
        // line 303
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 306
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 307
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
        // line 331
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 334
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 335
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
        // line 357
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
        return array (  828 => 357,  803 => 335,  799 => 334,  793 => 331,  766 => 307,  762 => 306,  756 => 303,  733 => 283,  710 => 263,  695 => 251,  677 => 236,  673 => 235,  665 => 229,  659 => 226,  656 => 225,  653 => 224,  642 => 219,  638 => 218,  633 => 216,  629 => 215,  624 => 213,  621 => 212,  616 => 211,  611 => 210,  607 => 209,  603 => 208,  600 => 207,  594 => 206,  589 => 204,  584 => 202,  580 => 201,  577 => 200,  568 => 198,  564 => 197,  559 => 195,  555 => 194,  551 => 193,  548 => 192,  543 => 190,  536 => 189,  532 => 188,  529 => 187,  524 => 186,  521 => 185,  516 => 183,  513 => 182,  511 => 181,  508 => 180,  503 => 179,  501 => 178,  493 => 173,  484 => 172,  478 => 171,  472 => 170,  469 => 169,  463 => 168,  455 => 167,  451 => 166,  447 => 165,  438 => 164,  432 => 163,  426 => 162,  422 => 161,  419 => 160,  412 => 159,  406 => 158,  402 => 157,  398 => 156,  389 => 155,  383 => 154,  377 => 153,  368 => 152,  362 => 151,  356 => 150,  352 => 149,  341 => 141,  336 => 139,  332 => 138,  325 => 134,  311 => 123,  306 => 121,  302 => 120,  295 => 115,  289 => 113,  283 => 111,  280 => 110,  274 => 108,  268 => 106,  266 => 105,  260 => 102,  247 => 94,  237 => 89,  231 => 86,  222 => 80,  218 => 79,  212 => 76,  208 => 75,  203 => 73,  194 => 67,  189 => 65,  185 => 64,  181 => 63,  174 => 59,  169 => 57,  165 => 56,  161 => 55,  152 => 49,  148 => 48,  144 => 47,  138 => 44,  134 => 43,  130 => 42,  121 => 36,  115 => 32,  107 => 28,  104 => 27,  97 => 23,  94 => 22,  92 => 21,  87 => 18,  76 => 16,  72 => 15,  67 => 13,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}
