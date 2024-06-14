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
class __TwigTemplate_6ce60c612181165d545d7c08cfdd6ec41ff0037d483e829a7ec04fcfbc89bcbb extends \Twig\Template
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
                
            </div>
            <div class=\"col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 39
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 43
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 44
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                        <form action=\"";
        // line 46
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
        // line 54
        echo ($context["column_image"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 55
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 56
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            // line 57
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 58
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\"
                                                                                            class=\"";
            // line 59
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            // line 60
            echo "                                                <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 61
        if ((($context["sort"] ?? null) == "manufacturer")) {
            echo " <a
                                                    href=\"";
            // line 62
            echo ($context["sort_manufacturer"] ?? null);
            echo "\"
                                                    class=\"";
            // line 63
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        } else {
            // line 64
            echo "                                                <a href=\"";
            echo ($context["sort_manufacturer"] ?? null);
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        }
        // line 65
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 66
        echo ($context["column_category"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 67
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 68
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            // line 69
            echo "                                                <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 70
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a
                                                    href=\"";
            // line 71
            echo ($context["sort_quantity"] ?? null);
            echo "\"
                                                    class=\"";
            // line 72
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a
                                                    href=\"";
            // line 73
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        // line 74
        echo "                                        </td>
                                        <td class=\"text-left\">";
        // line 75
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                                                             class=\"";
            // line 76
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            // line 77
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 78
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 83
        if (($context["products"] ?? null)) {
            // line 84
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                echo "                                            <tr>
                                                <td class=\"text-center\">";
                // line 86
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 86), ($context["selected"] ?? null))) {
                    // line 87
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 90
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                    echo "\"/>
                                                    ";
                }
                // line 92
                echo "</td>
                                                <td class=\"text-center\">";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 93)) {
                    echo " <img
                                                            src=\"";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 94);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 94);
                    echo "\"
                                                            class=\"img-thumbnail\"/> ";
                } else {
                    // line 95
                    echo " <span
                                                            class=\"img-thumbnail list\"><i
                                                                class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                // line 97
                echo "</td>
                                                <td class=\"text-left\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 99);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 100);
                echo "</td>
                                                <td class=\"text-left\">
                                                    ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "categories", [], "any", false, false, false, 102));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 103
                    echo "                                                        <div>";
                    echo $context["category"];
                    echo "</div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                                                </td>
                                                <td class=\"text-right\">";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106)) {
                    echo " <span
                                                            style=\"text-decoration: line-through;\">";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                    echo "</span>
                                                        <br/>
                                                        <div class=\"text-danger\">";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 109);
                    echo "</div>
                                                    ";
                } else {
                    // line 111
                    echo "                                                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                    echo "
                                                    ";
                }
                // line 112
                echo "</td>
                                                <td class=\"text-right\">";
                // line 113
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 113) <= 0)) {
                    echo " <span
                                                            class=\"label label-warning\">";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 114);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 114) <= 5)) {
                    // line 115
                    echo "                                                        <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 115);
                    echo "</span> ";
                } else {
                    // line 116
                    echo "                                                        <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 116);
                    echo "</span> ";
                }
                // line 117
                echo "                                                </td>
                                                <td class=\"text-left\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 118);
                echo "</td>
                                                <td class=\"text-right\">
                                                    <a href=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 120);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 121
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i
                                                                class=\"fa fa-eye\"></i></a>
                                                    <a href=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 123);
                echo "\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 124
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
            // line 129
            echo "                                    ";
        } else {
            // line 130
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 131
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 134
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
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
        // line 156
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
        // line 168
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
        // line 188
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
        // line 208
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 211
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 212
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
        // line 236
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 239
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 240
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
        // line 262
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
        return array (  627 => 262,  602 => 240,  598 => 239,  592 => 236,  565 => 212,  561 => 211,  555 => 208,  532 => 188,  509 => 168,  494 => 156,  476 => 141,  472 => 140,  464 => 134,  458 => 131,  455 => 130,  452 => 129,  441 => 124,  437 => 123,  432 => 121,  428 => 120,  423 => 118,  420 => 117,  415 => 116,  410 => 115,  406 => 114,  402 => 113,  399 => 112,  393 => 111,  388 => 109,  383 => 107,  379 => 106,  376 => 105,  367 => 103,  363 => 102,  358 => 100,  354 => 99,  350 => 98,  347 => 97,  342 => 95,  335 => 94,  331 => 93,  328 => 92,  323 => 91,  320 => 90,  315 => 88,  312 => 87,  310 => 86,  307 => 85,  302 => 84,  300 => 83,  292 => 78,  283 => 77,  277 => 76,  271 => 75,  268 => 74,  262 => 73,  254 => 72,  250 => 71,  246 => 70,  237 => 69,  231 => 68,  225 => 67,  221 => 66,  218 => 65,  211 => 64,  205 => 63,  201 => 62,  197 => 61,  188 => 60,  182 => 59,  176 => 58,  167 => 57,  161 => 56,  155 => 55,  151 => 54,  140 => 46,  135 => 44,  131 => 43,  124 => 39,  115 => 32,  107 => 28,  104 => 27,  97 => 23,  94 => 22,  92 => 21,  87 => 18,  76 => 16,  72 => 15,  67 => 13,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}
