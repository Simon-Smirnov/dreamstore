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
class __TwigTemplate_4966aa5b588105a9181e294f89da237285a9a00df19685c1d8bc101e4ca79ef7 extends \Twig\Template
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
                                        <td style=\"width: 1px;\" class=\"text-center\">
                                            <input type=\"checkbox\"
                                                   onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/>
                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 53
        if ((($context["sort"] ?? null) == "title")) {
            // line 54
            echo "                                                <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\"
                                                   class=\"";
            // line 55
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 56
            echo ($context["column_title"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 59
            echo "                                                <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                            ";
        }
        // line 61
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 63
        echo ($context["column_responsibility"] ?? null);
        echo "
                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 66
        echo ($context["column_requirements"] ?? null);
        echo "
                                        </td>
                                        <td class=\"text-leftt\">
                                            ";
        // line 69
        echo ($context["column_conditions"] ?? null);
        echo "
                                        </td>
                                        <td>";
        // line 71
        echo ($context["column_order"] ?? null);
        echo "</td>
                                        <td class=\"text-center\">
                                            ";
        // line 73
        if ((($context["sort"] ?? null) == "status")) {
            // line 74
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                   class=\"";
            // line 75
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 76
            echo ($context["column_status"] ?? null);
            echo "
                                                </a> ";
        } else {
            // line 78
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        }
        // line 80
        echo "                                        </td>
                                        <td class=\"text-right\">";
        // line 81
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 86
        if (($context["vacancies"] ?? null)) {
            // line 87
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vacancies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["vacancy"]) {
                // line 88
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 90
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["vacancy"], "vacancy_id", [], "any", false, false, false, 90), ($context["selected"] ?? null))) {
                    // line 91
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "vacancy_id", [], "any", false, false, false, 92);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 94
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "vacancy_id", [], "any", false, false, false, 95);
                    echo "\"/>
                                                    ";
                }
                // line 97
                echo "                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "title", [], "any", false, false, false, 99);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "responsibility", [], "any", false, false, false, 102);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "requirements", [], "any", false, false, false, 105);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "conditions", [], "any", false, false, false, 108);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "sort_order", [], "any", false, false, false, 111);
                echo "
                                                </td>
                                                <td class=\"text-left\">";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "status", [], "any", false, false, false, 113);
                echo "</td>
                                                <td class=\"text-left\">
                                                    <a href=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["vacancy"], "edit", [], "any", false, false, false, 115);
                echo "\" data-toggle=\"tooltip\"
                                                       title=\"";
                // line 116
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
                                                        <i
                                                                class=\"fa fa-pencil\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacancy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                    ";
        } else {
            // line 124
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 125
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 128
        echo "                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 133
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 134
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
        // line 149
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
        // line 161
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
        // line 181
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
        // line 201
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 204
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 205
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
        // line 229
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 232
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 233
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
        // line 255
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
        return array (  494 => 255,  469 => 233,  465 => 232,  459 => 229,  432 => 205,  428 => 204,  422 => 201,  399 => 181,  376 => 161,  361 => 149,  343 => 134,  339 => 133,  332 => 128,  326 => 125,  323 => 124,  320 => 123,  307 => 116,  303 => 115,  298 => 113,  293 => 111,  287 => 108,  281 => 105,  275 => 102,  269 => 99,  265 => 97,  260 => 95,  257 => 94,  252 => 92,  249 => 91,  247 => 90,  243 => 88,  238 => 87,  236 => 86,  228 => 81,  225 => 80,  217 => 78,  212 => 76,  208 => 75,  203 => 74,  201 => 73,  196 => 71,  191 => 69,  185 => 66,  179 => 63,  175 => 61,  167 => 59,  161 => 56,  157 => 55,  152 => 54,  150 => 53,  137 => 43,  132 => 41,  128 => 40,  121 => 36,  115 => 32,  107 => 28,  104 => 27,  97 => 23,  94 => 22,  92 => 21,  87 => 18,  76 => 16,  72 => 15,  67 => 13,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}