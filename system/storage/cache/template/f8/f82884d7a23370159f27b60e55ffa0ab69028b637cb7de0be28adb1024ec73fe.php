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

/* catalog/advices_answer_form.twig */
class __TwigTemplate_a3cbebf4679c93b46f1513d86de9655934c44c1124b44efd27f182c96119860e extends \Twig\Template
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
                <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-faq-answer\"
                      class=\"form-horizontal\">
                    <input name=\"parent_id\"  type=\"hidden\" value=";
        // line 31
        echo ($context["faq_id"] ?? null);
        echo ">
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title\">";
        // line 34
        echo ($context["entry_title"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"title\"
                                   data-length=\"128\"
                                   value=\"";
        // line 39
        echo ($context["title"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 40
        echo ($context["entry_title"] ?? null);
        echo "\"
                                   id=\"input-title\" class=\"form-control\"/>
                            ";
        // line 42
        if (($context["error_title"] ?? null)) {
            // line 43
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                            ";
        }
        // line 45
        echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 49);
        echo "\">";
        echo ($context["entry_answer"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"input-answer\" class=\"form-control\" name=\"answer\"
                                      placeholder=\"";
        // line 52
        echo ($context["entry_answer"] ?? null);
        echo "\" rows=\"7\">";
        echo ($context["answer"] ?? null);
        echo "</textarea>
                            ";
        // line 53
        if (($context["error_answer"] ?? null)) {
            // line 54
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_answer"] ?? null);
            echo "</div>
                            ";
        }
        // line 56
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-sort-order\">";
        // line 60
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"sort_order\" value=\"";
        // line 62
        echo ($context["sort_order"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 63
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\"
                                   class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-status\">";
        // line 69
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 72
        if (($context["status"] ?? null)) {
            // line 73
            echo "                                    <option value=\"1\"
                                            selected=\"selected\">";
            // line 74
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 75
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 77
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\"
                                            selected=\"selected\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 81
        echo "                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
    <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        //--></script>
</div>
";
        // line 101
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/advices_answer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 101,  224 => 81,  219 => 79,  213 => 77,  208 => 75,  204 => 74,  201 => 73,  199 => 72,  193 => 69,  184 => 63,  180 => 62,  175 => 60,  169 => 56,  163 => 54,  161 => 53,  155 => 52,  147 => 49,  141 => 45,  135 => 43,  133 => 42,  128 => 40,  124 => 39,  116 => 34,  110 => 31,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/advices_answer_form.twig", "");
    }
}
