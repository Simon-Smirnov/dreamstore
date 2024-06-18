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
class __TwigTemplate_81a8c7237ac0e3e419eab36f8164f839bf37bd4c34a3aaeabb3c1dfa0b770332 extends \Twig\Template
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
                <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 6
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\"
                        title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 8
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i
                            class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 30
        echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 38
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 39
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                        <form action=\"";
        // line 41
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
        // line 51
        if ((($context["sort"] ?? null) == "name")) {
            // line 52
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\"
                                                   class=\"";
            // line 53
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 54
            echo ($context["column_name"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 57
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                            ";
        }
        // line 59
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 61
        if ((($context["sort"] ?? null) == "phone")) {
            // line 62
            echo "                                                <a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\"
                                                   class=\"";
            // line 63
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 64
            echo ($context["column_phone"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 67
            echo "                                                <a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\">";
            echo ($context["column_phone"] ?? null);
            echo "</a>
                                            ";
        }
        // line 69
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 71
        if ((($context["sort"] ?? null) == "email")) {
            // line 72
            echo "                                                <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\"
                                                   class=\"";
            // line 73
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 74
            echo ($context["column_email"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 77
            echo "                                                <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        }
        // line 79
        echo "                                        </td>
                                        <td class=\"text-right\">";
        // line 80
        echo ($context["column_message"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">
                                            ";
        // line 82
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 83
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                                                   class=\"";
            // line 84
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 85
            echo ($context["column_date_added"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 88
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                            ";
        }
        // line 89
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 94
        if (($context["replies"] ?? null)) {
            // line 95
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["replies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 96
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 98
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 98), ($context["selected"] ?? null))) {
                    // line 99
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 100);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 102
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 103);
                    echo "\"/>
                                                    ";
                }
                // line 105
                echo "                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "name", [], "any", false, false, false, 107);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "phone", [], "any", false, false, false, 110);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "email", [], "any", false, false, false, 113);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "message", [], "any", false, false, false, 116);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 119);
                echo "
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
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
        return "catalog/replies_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 255,  482 => 233,  478 => 232,  472 => 229,  445 => 205,  441 => 204,  435 => 201,  412 => 181,  389 => 161,  374 => 149,  356 => 134,  352 => 133,  345 => 128,  339 => 125,  336 => 124,  333 => 123,  323 => 119,  317 => 116,  311 => 113,  305 => 110,  299 => 107,  295 => 105,  290 => 103,  287 => 102,  282 => 100,  279 => 99,  277 => 98,  273 => 96,  268 => 95,  266 => 94,  259 => 89,  251 => 88,  245 => 85,  241 => 84,  236 => 83,  234 => 82,  229 => 80,  226 => 79,  218 => 77,  212 => 74,  208 => 73,  203 => 72,  201 => 71,  197 => 69,  189 => 67,  183 => 64,  179 => 63,  174 => 62,  172 => 61,  168 => 59,  160 => 57,  154 => 54,  150 => 53,  145 => 52,  143 => 51,  130 => 41,  125 => 39,  121 => 38,  114 => 34,  108 => 30,  100 => 26,  97 => 25,  90 => 21,  87 => 20,  85 => 19,  80 => 16,  69 => 14,  65 => 13,  60 => 11,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/replies_list.twig", "");
    }
}
