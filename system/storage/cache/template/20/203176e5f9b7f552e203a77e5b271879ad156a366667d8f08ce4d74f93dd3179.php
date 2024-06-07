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

/* catalog/faq_answer_list.twig */
class __TwigTemplate_47696c254571f70cf53aa95714dceb719cdf37e6049de26d7457a970cae150d3 extends \Twig\Template
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
dfgdfgdfg
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\"><a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\"
                                       class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
                        onclick=\"confirm('";
        // line 10
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i
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
    <div class=\"container-fluid\">
        ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 28
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 29
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 35
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 38
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
        // line 46
        if ((($context["sort"] ?? null) == "id.title")) {
            // line 47
            echo "                                        <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                    ";
        } else {
            // line 49
            echo "                                        <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                    ";
        }
        // line 50
        echo "</td>
                                <td class=\"text-right\">";
        // line 51
        if ((($context["sort"] ?? null) == "i.sort_order")) {
            // line 52
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\"
                                           class=\"";
            // line 53
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                    ";
        } else {
            // line 55
            echo "                                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                    ";
        }
        // line 56
        echo "</td>
                                <td class=\"text-right\">";
        // line 57
        echo ($context["column_action"] ?? null);
        echo "</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        if (($context["faqs"] ?? null)) {
            // line 62
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                // line 63
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 64
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["information"] ?? null), "information_id", [], "any", false, false, false, 64), ($context["selected"] ?? null))) {
                    // line 65
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\"
                                                       value=\"";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, ($context["information"] ?? null), "information_id", [], "any", false, false, false, 66);
                    echo "\" checked=\"checked\"/>
                                            ";
                } else {
                    // line 68
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\"
                                                       value=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, ($context["information"] ?? null), "information_id", [], "any", false, false, false, 69);
                    echo "\"/>
                                            ";
                }
                // line 70
                echo "</td>
                                        <td class=\"text-left\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "name", [], "any", false, false, false, 71);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "sort_order", [], "any", false, false, false, 72);
                echo "</td>
                                        <td class=\"text-right\"><a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "edit", [], "any", false, false, false, 73);
                echo "\" data-toggle=\"tooltip\"
                                                                  title=\"";
                // line 74
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-pencil\"></i></a></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                            ";
        } else {
            // line 79
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"4\">";
            // line 80
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 83
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 88
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 89
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 95
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/faq_answer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 95,  267 => 89,  263 => 88,  256 => 83,  250 => 80,  247 => 79,  244 => 78,  234 => 74,  230 => 73,  226 => 72,  222 => 71,  219 => 70,  214 => 69,  211 => 68,  206 => 66,  203 => 65,  201 => 64,  198 => 63,  193 => 62,  191 => 61,  184 => 57,  181 => 56,  173 => 55,  166 => 53,  161 => 52,  159 => 51,  156 => 50,  148 => 49,  138 => 47,  136 => 46,  125 => 38,  119 => 35,  115 => 33,  107 => 29,  104 => 28,  97 => 24,  94 => 23,  92 => 22,  86 => 18,  75 => 16,  71 => 15,  66 => 13,  60 => 10,  56 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_answer_list.twig", "");
    }
}
