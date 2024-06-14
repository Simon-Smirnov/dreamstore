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
class __TwigTemplate_a0fcd204aa696015e062f4fbacc7b4b26c24ad73dc0a9fbb6c841d060b6794af extends \Twig\Template
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
            <div class=\"col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 36
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 40
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 41
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                        <form action=\"";
        // line 43
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
        // line 51
        echo ($context["column_image"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 52
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 53
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            // line 54
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 55
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 56
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            // line 57
            echo "                                                <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 58
        if ((($context["sort"] ?? null) == "manufacturer")) {
            echo " <a
                                                    href=\"";
            // line 59
            echo ($context["sort_manufacturer"] ?? null);
            echo "\"
                                                    class=\"";
            // line 60
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        } else {
            // line 61
            echo "                                                <a href=\"";
            echo ($context["sort_manufacturer"] ?? null);
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        }
        // line 62
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 63
        echo ($context["column_category"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 64
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 65
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            // line 66
            echo "                                                <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 67
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a
                                                    href=\"";
            // line 68
            echo ($context["sort_quantity"] ?? null);
            echo "\"
                                                    class=\"";
            // line 69
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a
                                                    href=\"";
            // line 70
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        // line 71
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 72
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 73
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            // line 74
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 75
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 80
        if (($context["vacancies"] ?? null)) {
            // line 81
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vacancies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vacancy"]) {
                // line 82
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 84
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["vacancy"], "id_vacancy", [], "any", false, false, false, 84), ($context["selected"] ?? null))) {
                    // line 85
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "id_vacancy", [], "any", false, false, false, 86);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 88
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "id_vacancy", [], "any", false, false, false, 89);
                    echo "\"/>
                                                    ";
                }
                // line 91
                echo "                                                </td>
                                                <td class=\"text-center\">
                                                    ";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "title", [], "any", false, false, false, 93);
                echo "
                                                </td>
                                                <td class=\"text-center\">
                                                    ";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "responsibility", [], "any", false, false, false, 96);
                echo "
                                                </td>
                                                <td class=\"text-center\">
                                                    ";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "requirements", [], "any", false, false, false, 99);
                echo "
                                                </td>
                                                <td class=\"text-center\">
                                                    ";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "conditions", [], "any", false, false, false, 102);
                echo "
                                                </td>
                                                <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 104);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "model", [], "any", false, false, false, 105);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 106);
                echo "</td>
                                                <td class=\"text-left\">
                                                    ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 109
                    echo "                                                        <div>";
                    echo $context["category"];
                    echo "</div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                                                </td>
                                                <td class=\"text-right\">";
                // line 112
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 112)) {
                    echo " <span
                                                            style=\"text-decoration: line-through;\">";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 113);
                    echo "</span>
                                                        <br/>
                                                        <div class=\"text-danger\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 115);
                    echo "</div>
                                                    ";
                } else {
                    // line 117
                    echo "                                                        ";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 117);
                    echo "
                                                    ";
                }
                // line 118
                echo "</td>
                                                <td class=\"text-right\">";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 119) <= 0)) {
                    echo " <span
                                                            class=\"label label-warning\">";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 120);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 120) <= 5)) {
                    // line 121
                    echo "                                                        <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 121);
                    echo "</span> ";
                } else {
                    // line 122
                    echo "                                                        <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 122);
                    echo "</span> ";
                }
                // line 123
                echo "                                                </td>
                                                <td class=\"text-left\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "status", [], "any", false, false, false, 124);
                echo "</td>
                                                <td class=\"text-right\">
                                                    <a href=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "view", [], "any", false, false, false, 126);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 127
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i
                                                                class=\"fa fa-eye\"></i></a>
                                                    <a href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "edit", [], "any", false, false, false, 129);
                echo "\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 130
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                                                class=\"fa fa-pencil\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacancy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                                    ";
        } else {
            // line 136
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 137
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 140
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 146
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 147
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
        // line 162
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
        // line 174
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
        // line 194
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
        // line 214
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 217
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 218
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
        // line 242
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 245
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 246
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
        // line 268
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
        return array (  630 => 268,  605 => 246,  601 => 245,  595 => 242,  568 => 218,  564 => 217,  558 => 214,  535 => 194,  512 => 174,  497 => 162,  479 => 147,  475 => 146,  467 => 140,  461 => 137,  458 => 136,  455 => 135,  444 => 130,  440 => 129,  435 => 127,  431 => 126,  426 => 124,  423 => 123,  418 => 122,  413 => 121,  409 => 120,  405 => 119,  402 => 118,  396 => 117,  391 => 115,  386 => 113,  382 => 112,  379 => 111,  370 => 109,  366 => 108,  361 => 106,  357 => 105,  353 => 104,  348 => 102,  342 => 99,  336 => 96,  330 => 93,  326 => 91,  321 => 89,  318 => 88,  313 => 86,  310 => 85,  308 => 84,  304 => 82,  299 => 81,  297 => 80,  289 => 75,  280 => 74,  274 => 73,  268 => 72,  265 => 71,  259 => 70,  251 => 69,  247 => 68,  243 => 67,  234 => 66,  228 => 65,  222 => 64,  218 => 63,  215 => 62,  208 => 61,  202 => 60,  198 => 59,  194 => 58,  185 => 57,  179 => 56,  173 => 55,  164 => 54,  158 => 53,  152 => 52,  148 => 51,  137 => 43,  132 => 41,  128 => 40,  121 => 36,  115 => 32,  107 => 28,  104 => 27,  97 => 23,  94 => 22,  92 => 21,  87 => 18,  76 => 16,  72 => 15,  67 => 13,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}
