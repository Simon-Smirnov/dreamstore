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

/* user/user_group_form.twig */
class __TwigTemplate_3c6ffc2eebbedd16d4e9e53469f636716bc4b23b1c83fbe5ecef10abe290aea7 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-user-group\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user-group\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 38
        echo ($context["entry_access"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 300px; overflow: auto;\">
                ";
        // line 41
        $context["last_base"] = "";
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 43
            echo "                ";
            $context["base"] = (($__internal_compile_0 = twig_split_filter($this->env, $context["permission"], "/")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 44
            echo "                ";
            if ((($context["base"] ?? null) != ($context["last_base"] ?? null))) {
                // line 45
                echo "                ";
                if ((($context["last_base"] ?? null) != "")) {
                    echo "</div></div>";
                }
                // line 46
                echo "                <div class=\"group\">
                  <div class=\"group-title\">--- ";
                // line 47
                echo ($context["base"] ?? null);
                echo " ---</div>
                  <div class=\"group-content\">
                ";
            }
            // line 50
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 52
            if (twig_in_filter($context["permission"], ($context["access"] ?? null))) {
                // line 53
                echo "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                echo $context["permission"];
                echo "\" checked=\"checked\" />
                    ";
                // line 54
                echo $context["permission"];
                echo "
                    ";
            } else {
                // line 56
                echo "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                echo $context["permission"];
                echo "\" />
                    ";
                // line 57
                echo $context["permission"];
                echo "
                    ";
            }
            // line 59
            echo "                  </label>
                </div>
                ";
            // line 61
            $context["last_base"] = ($context["base"] ?? null);
            // line 62
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                ";
        if ((($context["last_base"] ?? null) != "")) {
            echo "</div></div>";
        }
        // line 64
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 65
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 68
        echo ($context["entry_modify"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 300px; overflow: auto;\">
                ";
        // line 71
        $context["last_base"] = "";
        // line 72
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 73
            echo "                ";
            $context["base"] = (($__internal_compile_1 = twig_split_filter($this->env, $context["permission"], "/")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
            // line 74
            echo "                ";
            if ((($context["base"] ?? null) != ($context["last_base"] ?? null))) {
                // line 75
                echo "                ";
                if ((($context["last_base"] ?? null) != "")) {
                    echo "</div></div>";
                }
                // line 76
                echo "                <div class=\"group\">
                  <div class=\"group-title\">--- ";
                // line 77
                echo ($context["base"] ?? null);
                echo " ---</div>
                  <div class=\"group-content\">
                ";
            }
            // line 80
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 82
            if (twig_in_filter($context["permission"], ($context["modify"] ?? null))) {
                // line 83
                echo "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                echo $context["permission"];
                echo "\" checked=\"checked\" />
                    ";
                // line 84
                echo $context["permission"];
                echo "
                    ";
            } else {
                // line 86
                echo "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                echo $context["permission"];
                echo "\" />
                    ";
                // line 87
                echo $context["permission"];
                echo "
                    ";
            }
            // line 89
            echo "                  </label>
                </div>
                ";
            // line 91
            $context["last_base"] = ($context["base"] ?? null);
            // line 92
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                ";
        if ((($context["last_base"] ?? null) != "")) {
            echo "</div></div>";
        }
        // line 94
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 95
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 102
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "user/user_group_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 102,  297 => 95,  294 => 94,  289 => 93,  283 => 92,  281 => 91,  277 => 89,  272 => 87,  267 => 86,  262 => 84,  257 => 83,  255 => 82,  251 => 80,  245 => 77,  242 => 76,  237 => 75,  234 => 74,  231 => 73,  226 => 72,  224 => 71,  218 => 68,  210 => 65,  207 => 64,  202 => 63,  196 => 62,  194 => 61,  190 => 59,  185 => 57,  180 => 56,  175 => 54,  170 => 53,  168 => 52,  164 => 50,  158 => 47,  155 => 46,  150 => 45,  147 => 44,  144 => 43,  139 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user_group_form.twig", "");
    }
}
