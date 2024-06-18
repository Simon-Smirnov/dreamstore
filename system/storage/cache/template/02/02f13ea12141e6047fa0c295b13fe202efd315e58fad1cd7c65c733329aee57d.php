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

/* catalog/advices_answer_list.twig */
class __TwigTemplate_1d70795704d65af034ec2ed445d8fd622638e82e1eb56217dd1b39acff65cbac extends \Twig\Template
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
        if ((($context["sort"] ?? null) == "title")) {
            // line 46
            echo "                                        <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                    ";
        } else {
            // line 48
            echo "                                        <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                    ";
        }
        // line 49
        echo "</td>
                                <td class=\"text-left\">";
        // line 50
        echo ($context["column_answer"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 51
        if ((($context["sort"] ?? null) == "sort_order")) {
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
        if (($context["faq_answers"] ?? null)) {
            // line 62
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faq_answers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_answer"]) {
                // line 63
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 64
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["faq_answer"], "faq_answer_id", [], "any", false, false, false, 64), ($context["selected"] ?? null))) {
                    // line 65
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\"
                                                       value=\"";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["faq_answer"], "faq_answer_id", [], "any", false, false, false, 66);
                    echo "\" checked=\"checked\"/>
                                            ";
                } else {
                    // line 68
                    echo "                                                <input type=\"checkbox\" name=\"selected[]\"
                                                       value=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["faq_answer"], "faq_answer_id", [], "any", false, false, false, 69);
                    echo "\"/>
                                            ";
                }
                // line 70
                echo "</td>
                                        <td class=\"text-left\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["faq_answer"], "title", [], "any", false, false, false, 71);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["faq_answer"], "answer", [], "any", false, false, false, 72);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["faq_answer"], "sort_order", [], "any", false, false, false, 73);
                echo "</td>
                                        <td class=\"text-right\"><a href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["faq_answer"], "edit", [], "any", false, false, false, 74);
                echo "\" data-toggle=\"tooltip\"
                                                                  title=\"";
                // line 75
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-pencil\"></i></a></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            ";
        } else {
            // line 80
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"4\">";
            // line 81
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 84
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 89
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 90
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 96
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/advices_answer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 96,  274 => 90,  270 => 89,  263 => 84,  257 => 81,  254 => 80,  251 => 79,  241 => 75,  237 => 74,  233 => 73,  229 => 72,  225 => 71,  222 => 70,  217 => 69,  214 => 68,  209 => 66,  206 => 65,  204 => 64,  201 => 63,  196 => 62,  194 => 61,  187 => 57,  184 => 56,  176 => 55,  169 => 53,  164 => 52,  162 => 51,  158 => 50,  155 => 49,  147 => 48,  137 => 46,  135 => 45,  124 => 37,  118 => 34,  114 => 32,  106 => 28,  103 => 27,  96 => 23,  93 => 22,  91 => 21,  85 => 17,  74 => 15,  70 => 14,  65 => 12,  59 => 9,  55 => 8,  48 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/advices_answer_list.twig", "");
    }
}
