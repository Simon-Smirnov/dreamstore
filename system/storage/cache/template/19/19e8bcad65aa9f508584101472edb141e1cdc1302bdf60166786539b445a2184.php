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
class __TwigTemplate_900b908703836e94ecd638728cb1f426901345c71a5564533d37c54a179e7dd1 extends \Twig\Template
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
        </div>
        <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ul class=\"breadcrumb\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
    </div>
</div>
<div class=\"container-fluid\">";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 27
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 32
        echo "    <div class=\"row\">
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
                                <label class=\"control-label\" for=\"filter-manufacturer\">";
        // line 54
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                                <input type=\"text\" value=\"";
        // line 55
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 56
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"filter-manufacturer\"
                                       class=\"form-control\"/>
                                <input type=\"hidden\" name=\"filter_manufacturer\" value=\"";
        // line 58
        echo ($context["filter_manufacturer"] ?? null);
        echo "\"/>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"filter-category\">";
        // line 61
        echo ($context["entry_filter_category"] ?? null);
        echo "</label>
                                <input type=\"text\" value=\"";
        // line 62
        echo ($context["filter_category_name"] ?? null);
        echo "\"
                                       placeholder=\"";
        // line 63
        echo ($context["entry_filter_category"] ?? null);
        echo "\" id=\"filter-category\"
                                       class=\"form-control\"/>
                                <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 65
        echo ($context["filter_category"] ?? null);
        echo "\"/>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <label class=\"col-xs-12 control-label text-center\">";
        // line 71
        echo ($context["entry_price"] ?? null);
        echo "</label>
                                    <div class=\"col-xs-6\">
                                        <input type=\"text\" name=\"filter_price_min\" value=\"";
        // line 73
        echo ($context["filter_price_min"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 74
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\"/>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <input type=\"text\" name=\"filter_price_max\" value=\"";
        // line 77
        echo ($context["filter_price_max"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 78
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <label class=\"col-xs-12 control-label text-center\">";
        // line 84
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                                    <div class=\"col-xs-6\">
                                        <input type=\"text\" name=\"filter_quantity_min\" value=\"";
        // line 86
        echo ($context["filter_quantity_min"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 87
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\"/>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <input type=\"text\" name=\"filter_quantity_max\" value=\"";
        // line 90
        echo ($context["filter_quantity_max"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 91
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"filter-status\">";
        // line 98
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <select name=\"filter_status\" id=\"filter-status\" class=\"form-control\">
                                    <option value=\"\"></option>
                                    ";
        // line 101
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 102
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 104
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 106
        echo "                                    ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 107
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 109
            echo "                                        <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 111
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label hidden-xs\">&nbsp;</label>
                                <div class=\"button text-right\">
                                    <a href=\"index.php?route=catalog/product&user_token=";
        // line 116
        echo ($context["user_token"] ?? null);
        echo "\"
                                       class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        // line 117
        echo ($context["button_clear"] ?? null);
        echo "</a>
                                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i
                                                class=\"fa fa-filter\"></i> ";
        // line 119
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
        // line 130
        echo ($context["text_list"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 text-left\">";
        // line 134
        echo ($context["pagination"] ?? null);
        echo "</div>
                        <div class=\"col-sm-6 text-right\">";
        // line 135
        echo ($context["results"] ?? null);
        echo "</div>
                    </div>
                    <form action=\"";
        // line 137
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
        // line 145
        echo ($context["column_image"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 146
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                                                        class=\"";
            // line 147
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            // line 148
            echo "                                            <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-left\">";
        // line 149
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\"
                                                                                        class=\"";
            // line 150
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            // line 151
            echo "                                            <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-left\">";
        // line 152
        if ((($context["sort"] ?? null) == "manufacturer")) {
            echo " <a
                                                href=\"";
            // line 153
            echo ($context["sort_manufacturer"] ?? null);
            echo "\"
                                                class=\"";
            // line 154
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a
                                                href=\"";
            // line 155
            echo ($context["sort_manufacturer"] ?? null);
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        }
        // line 156
        echo "                                    </td>
                                    <td class=\"text-left\">";
        // line 157
        echo ($context["column_category"] ?? null);
        echo "</td>
                                    <td class=\"text-right\">";
        // line 158
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\"
                                                                                         class=\"";
            // line 159
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            // line 160
            echo "                                            <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-right\">";
        // line 161
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 162
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            // line 163
            echo "                                            <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-left\">";
        // line 164
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                                                         class=\"";
            // line 165
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            // line 166
            echo "                                            <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                    <td class=\"text-right\">";
        // line 167
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 172
        if (($context["products"] ?? null)) {
            // line 173
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 174
                echo "                                        <tr>
                                            <td class=\"text-center\">";
                // line 175
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 175), ($context["selected"] ?? null))) {
                    // line 176
                    echo "                                                    <input type=\"checkbox\" name=\"selected[]\"
                                                           value=\"";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 177);
                    echo "\" checked=\"checked\"/>
                                                ";
                } else {
                    // line 179
                    echo "                                                    <input type=\"checkbox\" name=\"selected[]\"
                                                           value=\"";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 180);
                    echo "\"/>
                                                ";
                }
                // line 181
                echo "</td>
                                            <td class=\"text-center\">";
                // line 182
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 182)) {
                    echo " <img
                                                        src=\"";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 183);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 183);
                    echo "\"
                                                        class=\"img-thumbnail\"/> ";
                } else {
                    // line 184
                    echo " <span
                                                        class=\"img-thumbnail list\"><i
                                                            class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                // line 186
                echo "</td>
                                            <td class=\"text-left\">";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 188);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 189);
                echo "</td>
                                            <td class=\"text-left\">
                                                ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "categories", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 192
                    echo "                                                    <div>";
                    echo $context["category"];
                    echo "</div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                                            </td>
                                            <td class=\"text-right\">";
                // line 195
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 195)) {
                    echo " <span
                                                        style=\"text-decoration: line-through;\">";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 196);
                    echo "</span>
                                                    <br/>
                                                    <div class=\"text-danger\">";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 198);
                    echo "</div>
                                                ";
                } else {
                    // line 200
                    echo "                                                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 200);
                    echo "
                                                ";
                }
                // line 201
                echo "</td>
                                            <td class=\"text-right\">";
                // line 202
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 202) <= 0)) {
                    echo " <span
                                                        class=\"label label-warning\">";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 203);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 203) <= 5)) {
                    // line 204
                    echo "                                                    <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 204);
                    echo "</span> ";
                } else {
                    // line 205
                    echo "                                                    <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 205);
                    echo "</span> ";
                }
                // line 206
                echo "                                            </td>
                                            <td class=\"text-left\">";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 207);
                echo "</td>
                                            <td class=\"text-right\">
                                                <a href=\"";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 209);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\"
                                                   title=\"";
                // line 210
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i
                                                            class=\"fa fa-eye\"></i></a>
                                                <a href=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 212);
                echo "\" data-toggle=\"tooltip\"
                                                   title=\"";
                // line 213
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
            // line 218
            echo "                                ";
        } else {
            // line 219
            echo "                                    <tr>
                                        <td class=\"text-center\" colspan=\"10\">";
            // line 220
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                    </tr>
                                ";
        }
        // line 223
        echo "                                </tbody>

                            </table>
                        </div>
                    </form>
                    <div class=\"row\">
                        <div class=\"col-sm-6 text-left\">";
        // line 229
        echo ($context["pagination"] ?? null);
        echo "</div>
                        <div class=\"col-sm-6 text-right\">";
        // line 230
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
        // line 245
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
        // line 257
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
        // line 277
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
        // line 297
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    json.unshift({manufacturer_id: '0', name: '";
        // line 300
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                    json.unshift({manufacturer_id: '*', name: '";
        // line 301
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
        // line 325
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function (json) {
                    json.unshift({category_id: '0', name: '";
        // line 328
        echo ($context["text_no_category"] ?? null);
        echo "'});
                    json.unshift({category_id: '*', name: '";
        // line 329
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
        // line 351
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
        return array (  822 => 351,  797 => 329,  793 => 328,  787 => 325,  760 => 301,  756 => 300,  750 => 297,  727 => 277,  704 => 257,  689 => 245,  671 => 230,  667 => 229,  659 => 223,  653 => 220,  650 => 219,  647 => 218,  636 => 213,  632 => 212,  627 => 210,  623 => 209,  618 => 207,  615 => 206,  610 => 205,  605 => 204,  601 => 203,  597 => 202,  594 => 201,  588 => 200,  583 => 198,  578 => 196,  574 => 195,  571 => 194,  562 => 192,  558 => 191,  553 => 189,  549 => 188,  545 => 187,  542 => 186,  537 => 184,  530 => 183,  526 => 182,  523 => 181,  518 => 180,  515 => 179,  510 => 177,  507 => 176,  505 => 175,  502 => 174,  497 => 173,  495 => 172,  487 => 167,  478 => 166,  472 => 165,  466 => 164,  457 => 163,  451 => 162,  445 => 161,  436 => 160,  430 => 159,  424 => 158,  420 => 157,  417 => 156,  411 => 155,  403 => 154,  399 => 153,  395 => 152,  386 => 151,  380 => 150,  374 => 149,  365 => 148,  359 => 147,  353 => 146,  349 => 145,  338 => 137,  333 => 135,  329 => 134,  322 => 130,  308 => 119,  303 => 117,  299 => 116,  292 => 111,  286 => 109,  280 => 107,  277 => 106,  271 => 104,  265 => 102,  263 => 101,  257 => 98,  247 => 91,  243 => 90,  237 => 87,  233 => 86,  228 => 84,  219 => 78,  215 => 77,  209 => 74,  205 => 73,  200 => 71,  191 => 65,  186 => 63,  182 => 62,  178 => 61,  172 => 58,  167 => 56,  163 => 55,  159 => 54,  151 => 49,  147 => 48,  143 => 47,  137 => 44,  133 => 43,  129 => 42,  120 => 36,  114 => 32,  106 => 28,  103 => 27,  95 => 23,  93 => 22,  88 => 19,  77 => 17,  73 => 16,  68 => 14,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}
