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

/* catalog/replies_list.twig */
class __TwigTemplate_82797daa9c10398e9c860804badc15f1580d75aa3778f60e68831dde027ed1d0 extends \Twig\Template
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
        if ((($context["sort"] ?? null) == "name")) {
            // line 54
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                   class=\"";
            // line 55
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 56
            echo ($context["column_name"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 59
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                            ";
        }
        // line 61
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 63
        if ((($context["sort"] ?? null) == "phone")) {
            // line 64
            echo "                                                <a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\"
                                                   class=\"";
            // line 65
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 66
            echo ($context["column_phone"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 69
            echo "                                                <a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\">";
            echo ($context["column_phone"] ?? null);
            echo "</a>
                                            ";
        }
        // line 71
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 73
        if ((($context["sort"] ?? null) == "email")) {
            // line 74
            echo "                                                <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\"
                                                   class=\"";
            // line 75
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 76
            echo ($context["column_email"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 79
            echo "                                                <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        }
        // line 81
        echo "                                        </td>
                                        <td class=\"text-right\">";
        // line 82
        echo ($context["column_message"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">
                                            ";
        // line 84
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 85
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                                                   class=\"";
            // line 86
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 87
            echo ($context["column_date_added"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 90
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                            ";
        }
        // line 91
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 96
        if (($context["replies"] ?? null)) {
            // line 97
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["replies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 98
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 100
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 100), ($context["selected"] ?? null))) {
                    // line 101
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 102);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 104
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 105);
                    echo "\"/>
                                                    ";
                }
                // line 107
                echo "                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "name", [], "any", false, false, false, 109);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "phone", [], "any", false, false, false, 112);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "email", [], "any", false, false, false, 115);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "message", [], "any", false, false, false, 118);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 121);
                echo "
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                    ";
        } else {
            // line 126
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 127
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 130
        echo "                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 135
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 136
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
        // line 151
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
        // line 163
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
        // line 183
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
        // line 203
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 206
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 207
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
        // line 231
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 234
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 235
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
        // line 257
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/replies_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 257,  489 => 235,  485 => 234,  479 => 231,  452 => 207,  448 => 206,  442 => 203,  419 => 183,  396 => 163,  381 => 151,  363 => 136,  359 => 135,  352 => 130,  346 => 127,  343 => 126,  340 => 125,  330 => 121,  324 => 118,  318 => 115,  312 => 112,  306 => 109,  302 => 107,  297 => 105,  294 => 104,  289 => 102,  286 => 101,  284 => 100,  280 => 98,  275 => 97,  273 => 96,  266 => 91,  258 => 90,  252 => 87,  248 => 86,  243 => 85,  241 => 84,  236 => 82,  233 => 81,  225 => 79,  219 => 76,  215 => 75,  210 => 74,  208 => 73,  204 => 71,  196 => 69,  190 => 66,  186 => 65,  181 => 64,  179 => 63,  175 => 61,  167 => 59,  161 => 56,  157 => 55,  152 => 54,  150 => 53,  137 => 43,  132 => 41,  128 => 40,  121 => 36,  115 => 32,  107 => 28,  104 => 27,  97 => 23,  94 => 22,  92 => 21,  87 => 18,  76 => 16,  72 => 15,  67 => 13,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/replies_list.twig", "");
    }
}
