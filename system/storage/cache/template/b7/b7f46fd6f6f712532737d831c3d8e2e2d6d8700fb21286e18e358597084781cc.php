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
class __TwigTemplate_79364a33047611efd33f7baee6f8dc491968357b0a3715011b6dfd6cb07d2429 extends \Twig\Template
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
                                        <td class=\"text-left\">";
        // line 81
        echo ($context["column_vacancy"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">
                                            ";
        // line 83
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 84
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                                                   class=\"";
            // line 85
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                                                    ";
            // line 86
            echo ($context["column_date_added"] ?? null);
            echo "
                                                </a>
                                            ";
        } else {
            // line 89
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                            ";
        }
        // line 90
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 95
        if (($context["replies"] ?? null)) {
            // line 96
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["replies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 97
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 99
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 99), ($context["selected"] ?? null))) {
                    // line 100
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 101);
                    echo "\" checked=\"checked\"/>
                                                    ";
                } else {
                    // line 103
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\"
                                                               value=\"";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "reply_id", [], "any", false, false, false, 104);
                    echo "\"/>
                                                    ";
                }
                // line 106
                echo "                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "name", [], "any", false, false, false, 108);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "phone", [], "any", false, false, false, 111);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "email", [], "any", false, false, false, 114);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "message", [], "any", false, false, false, 117);
                echo "
                                                    ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["reply"], "files", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                                                        <div>
                                                            <ul>
                                                                ";
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reply"], "files", [], "any", false, false, false, 121));
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 122
                        echo "                                                                    <li>Файл №";
                        echo twig_get_attribute($this->env, $this->source, $context["file"], "sort_order", [], "any", false, false, false, 122);
                        echo " <a
                                                                                href=\"";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, $context["file"], "file", [], "any", false, false, false, 123);
                        echo "\">Скачать</a></li>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "                                                            </ul>
                                                        </div>
                                                    ";
                }
                // line 128
                echo "                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "vacancy", [], "any", false, false, false, 130);
                echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 133);
                echo "
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    ";
        } else {
            // line 138
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"10\">";
            // line 139
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 142
        echo "                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 147
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 148
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
        // line 163
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
        // line 175
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
        // line 195
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
        // line 215
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({manufacturer_id: '0', name: '";
        // line 218
        echo ($context["text_no_manufacturer"] ?? null);
        echo "'});
                        json.unshift({manufacturer_id: '*', name: '";
        // line 219
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
        // line 243
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({category_id: '0', name: '";
        // line 246
        echo ($context["text_no_category"] ?? null);
        echo "'});
                        json.unshift({category_id: '*', name: '";
        // line 247
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
        // line 269
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
        return array (  547 => 269,  522 => 247,  518 => 246,  512 => 243,  485 => 219,  481 => 218,  475 => 215,  452 => 195,  429 => 175,  414 => 163,  396 => 148,  392 => 147,  385 => 142,  379 => 139,  376 => 138,  373 => 137,  363 => 133,  357 => 130,  353 => 128,  348 => 125,  340 => 123,  335 => 122,  331 => 121,  327 => 119,  325 => 118,  321 => 117,  315 => 114,  309 => 111,  303 => 108,  299 => 106,  294 => 104,  291 => 103,  286 => 101,  283 => 100,  281 => 99,  277 => 97,  272 => 96,  270 => 95,  263 => 90,  255 => 89,  249 => 86,  245 => 85,  240 => 84,  238 => 83,  233 => 81,  229 => 80,  226 => 79,  218 => 77,  212 => 74,  208 => 73,  203 => 72,  201 => 71,  197 => 69,  189 => 67,  183 => 64,  179 => 63,  174 => 62,  172 => 61,  168 => 59,  160 => 57,  154 => 54,  150 => 53,  145 => 52,  143 => 51,  130 => 41,  125 => 39,  121 => 38,  114 => 34,  108 => 30,  100 => 26,  97 => 25,  90 => 21,  87 => 20,  85 => 19,  80 => 16,  69 => 14,  65 => 13,  60 => 11,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/replies_list.twig", "");
    }
}
