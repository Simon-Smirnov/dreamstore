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

/* catalog/faq_answer_form.twig */
class __TwigTemplate_b2a4afc5c8f8b8d3f00f123b39399e42d1c31575f3067eece8b3c7ec7d0dfcd5 extends \Twig\Template
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
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title\">";
        // line 33
        echo ($context["entry_title"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"title\"
                                   data-length=\"128\"
                                   value=\"";
        // line 38
        echo ($context["title"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 39
        echo ($context["entry_title"] ?? null);
        echo "\"
                                   id=\"input-title\" class=\"form-control\"/>
                            ";
        // line 41
        if (($context["error_title"] ?? null)) {
            // line 42
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                            ";
        }
        // line 44
        echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-title";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 48);
        echo "\">";
        echo ($context["entry_answer"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"input-answer\" class=\"form-control\" name=\"answer\"
                                      placeholder=\"";
        // line 51
        echo ($context["entry_answer"] ?? null);
        echo "\" rows=\"7\">";
        echo ($context["answer"] ?? null);
        echo "</textarea>
                            ";
        // line 53
        echo "                            ";
        // line 54
        echo "                            ";
        // line 55
        echo "                            ";
        // line 56
        echo "                            ";
        // line 57
        echo "                            ";
        if (($context["error_answer"] ?? null)) {
            // line 58
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_answer"] ?? null);
            echo "</div>
                            ";
        }
        // line 60
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-sort-order\">";
        // line 64
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"sort_order\" value=\"";
        // line 66
        echo ($context["sort_order"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 67
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\"
                                   class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-status\">";
        // line 73
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 76
        if (($context["status"] ?? null)) {
            // line 77
            echo "                                    <option value=\"1\"
                                            selected=\"selected\">";
            // line 78
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 81
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\"
                                            selected=\"selected\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 85
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
        // line 105
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/faq_answer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 105,  229 => 85,  224 => 83,  218 => 81,  213 => 79,  209 => 78,  206 => 77,  204 => 76,  198 => 73,  189 => 67,  185 => 66,  180 => 64,  174 => 60,  168 => 58,  165 => 57,  163 => 56,  161 => 55,  159 => 54,  157 => 53,  151 => 51,  143 => 48,  137 => 44,  131 => 42,  129 => 41,  124 => 39,  120 => 38,  112 => 33,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_answer_form.twig", "");
    }
}
