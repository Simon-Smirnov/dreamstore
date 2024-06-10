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

/* catalog/faq_list.twig */
class __TwigTemplate_312df0ee4265667e1d1d58969037b61579c642e454bdcaaa94cb5b1f8887e84c extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\"><a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\"
                                       class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 9
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i
                            class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
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
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 37
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                            <tr>
                                <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\"
                                                                                   onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/>
                                </td>
                                <td class=\"text-left\">";
        // line 45
        if ((($context["sort"] ?? null) == "name")) {
            // line 46
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                    ";
        } else {
            // line 48
            echo "                                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                    ";
        }
        // line 49
        echo "</td>
                                <td class=\"text-right\">";
        // line 50
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 51
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\"
                                           class=\"";
            // line 52
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                    ";
        } else {
            // line 54
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                    ";
        }
        // line 55
        echo "</td>
                                <td class=\"text-right\">";
        // line 56
        echo ($context["column_action"] ?? null);
        echo "</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 60
        if (($context["faqs"] ?? null)) {
            // line 61
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 62
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 63
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["information"] ?? null), "information_id", [], "any", false, false, false, 63), ($context["selected"] ?? null))) {
                    // line 64
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\"
                                                       value=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, ($context["information"] ?? null), "information_id", [], "any", false, false, false, 65);
                    echo "\" checked=\"checked\"/>
                                            ";
                } else {
                    // line 67
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\"
                                                       value=\"";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, ($context["information"] ?? null), "information_id", [], "any", false, false, false, 68);
                    echo "\"/>
                                            ";
                }
                // line 69
                echo "</td>
                                        <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 70);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "sort_order", [], "any", false, false, false, 71);
                echo "</td>
                                        <td class=\"text-right\"><a href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "edit", [], "any", false, false, false, 72);
                echo "\" data-toggle=\"tooltip\"
                                                                  title=\"";
                // line 73
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-secondary><i
                                                        class=\" fa fa-pencil\"></i>sdfsdf</a></td>
                                        <td class=\"text-right\"><a href=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "edit", [], "any", false, false, false, 75);
                echo "\" data-toggle=\"tooltip\"
                                                                  title=\"";
                // line 76
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-pencil\"></i></a></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                            ";
        } else {
            // line 81
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"4\">";
            // line 82
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 85
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 90
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 91
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 97
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/faq_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 97,  275 => 91,  271 => 90,  264 => 85,  258 => 82,  255 => 81,  252 => 80,  242 => 76,  238 => 75,  233 => 73,  229 => 72,  225 => 71,  221 => 70,  218 => 69,  213 => 68,  210 => 67,  205 => 65,  202 => 64,  200 => 63,  197 => 62,  192 => 61,  190 => 60,  183 => 56,  180 => 55,  172 => 54,  165 => 52,  160 => 51,  158 => 50,  155 => 49,  147 => 48,  137 => 46,  135 => 45,  124 => 37,  118 => 34,  114 => 32,  106 => 28,  103 => 27,  96 => 23,  93 => 22,  91 => 21,  85 => 17,  74 => 15,  70 => 14,  65 => 12,  59 => 9,  55 => 8,  48 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_list.twig", "");
    }
}
