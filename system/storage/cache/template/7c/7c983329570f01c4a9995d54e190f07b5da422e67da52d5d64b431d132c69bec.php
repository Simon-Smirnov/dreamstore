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

/* catalog/faq_form.twig */
class __TwigTemplate_d97c23f7514411b1f8e315b71eda351be64de4dd3f8dd1684d18eefb0cacc918 extends \Twig\Template
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-faq\"
                      class=\"form-horizontal\">

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-name\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\"
                                   name=\"name\"
                                   data-length=\"255\"
                                   value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 40
        echo ($context["entry_name"] ?? null);
        echo "\"
                                   id=\"input-name\" class=\"form-control\"/>
                            ";
        // line 42
        if (($context["error_name"] ?? null)) {
            // line 43
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                            ";
        }
        // line 45
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 51
        if (($context["status"] ?? null)) {
            // line 52
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 53
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 55
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 56
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 58
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-sort-order\">";
        // line 63
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"sort_order\" value=\"";
        // line 65
        echo ($context["sort_order"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 66
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\"
                                   class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-seo\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\"
                                                                        title=\"";
        // line 73
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"no_index\" value=\"1\"
                                           ";
        // line 77
        if (($context["no_index"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"no_index\" value=\"0\"
                                           ";
        // line 81
        if ( !($context["no_index"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 87
        echo ($context["text_keyword"] ?? null);
        echo "
                                </div>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover\">
                                        <thead>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 93
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 94
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 99
            echo "                                            <tr>
                                                <td class=\"text-left\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 100);
            echo "</td>
                                                <td class=\"text-left\">";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 102
                echo "                                                        <div class=\"input-group\"><span
                                                                    class=\"input-group-addon\"><img
                                                                        src=\"language/";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 104);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 104);
                echo ".png\"
                                                                        title=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 105);
                echo "\"/></span>
                                                            <input type=\"text\"
                                                                   name=\"information_seo_url[";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 107);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
                echo "]\"
                                                                   value=\"";
                // line 108
                if ((($__internal_compile_0 = (($__internal_compile_1 = ($context["information_seo_url"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 108)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null)) {
                    echo (($__internal_compile_2 = (($__internal_compile_3 = ($context["information_seo_url"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 108)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null);
                }
                echo "\"
                                                                   placeholder=\"";
                // line 109
                echo ($context["entry_keyword"] ?? null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                        ";
                // line 112
                if ((($__internal_compile_4 = (($__internal_compile_5 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 112)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112)] ?? null) : null)) {
                    // line 113
                    echo "                                                            <div class=\"text-danger\">";
                    echo (($__internal_compile_6 = (($__internal_compile_7 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 113)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null);
                    echo "</div>
                                                        ";
                }
                // line 115
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-design\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-left\">";
        // line 129
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 130
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 136
            echo "                                    <tr>
                                        <td class=\"text-left\">";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 137);
            echo "</td>
                                        <td class=\"text-left\"><select
                                                    name=\"information_layout[";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 139);
            echo "]\"
                                                    class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 143
                echo "                                                    ";
                if (((($__internal_compile_8 = ($context["information_layout"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 143)] ?? null) : null) && ((($__internal_compile_9 = ($context["information_layout"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 143)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 143)))) {
                    // line 144
                    echo "                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 144);
                    echo "\"
                                                                selected=\"selected\">";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 145);
                    echo "</option>
                                                    ";
                } else {
                    // line 147
                    echo "                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 147);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 147);
                    echo "</option>
                                                    ";
                }
                // line 149
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                                            </select></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                                </tbody>

                            </table>
                        </div>
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
        // line 176
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/faq_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 176,  401 => 153,  393 => 150,  387 => 149,  379 => 147,  374 => 145,  369 => 144,  366 => 143,  362 => 142,  356 => 139,  351 => 137,  348 => 136,  344 => 135,  336 => 130,  332 => 129,  319 => 118,  306 => 115,  300 => 113,  298 => 112,  292 => 109,  286 => 108,  280 => 107,  275 => 105,  269 => 104,  265 => 102,  261 => 101,  257 => 100,  254 => 99,  250 => 98,  243 => 94,  239 => 93,  230 => 87,  217 => 81,  206 => 77,  197 => 73,  187 => 66,  183 => 65,  178 => 63,  171 => 58,  166 => 56,  161 => 55,  156 => 53,  151 => 52,  149 => 51,  143 => 48,  138 => 45,  132 => 43,  130 => 42,  125 => 40,  121 => 39,  113 => 34,  105 => 29,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/faq_form.twig", "");
    }
}
