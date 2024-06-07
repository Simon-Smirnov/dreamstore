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

/* catalog/manufacturer_list.twig */
class __TwigTemplate_103650cbfafbf0f7b637910af32d0b2962bda140d8c5d87f02fa52ac32ce2073 extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-manufacturer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"row\">
      <div id=\"filter\" class=\"col-sm-12\">
        <div class=\"panel panel-default panel-filter\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"filter-name\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\">
              </div>
              <div class=\"col-lg-4 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label hidden-xs\">&nbsp;</label>
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=catalog/manufacturer&user_token=";
        // line 47
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 48
        echo ($context["button_filter"] ?? null);
        echo "</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 59
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 63
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 64
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form action=\"";
        // line 66
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 72
        if ((($context["sort"] ?? null) == "name")) {
            // line 73
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 75
            echo "                        <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                        ";
        }
        // line 76
        echo "</td>
                      <td class=\"text-right\">";
        // line 77
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 78
            echo "                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 80
            echo "                        <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                        ";
        }
        // line 81
        echo "</td>
                      <td class=\"text-right\">";
        // line 82
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 86
        if (($context["manufacturers"] ?? null)) {
            // line 87
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 88
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 89
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 89), ($context["selected"] ?? null))) {
                    // line 90
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 90);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 92
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 92);
                    echo "\" />
                        ";
                }
                // line 93
                echo "</td>
                      <td class=\"text-left\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 94);
                echo "</td>
                      <td class=\"text-right\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "sort_order", [], "any", false, false, false, 95);
                echo "</td>
                      <td class=\"text-right\">
                        <a href=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "view", [], "any", false, false, false, 97);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                        <a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "edit", [], "any", false, false, false, 98);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                    ";
        } else {
            // line 103
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"4\">";
            // line 104
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 107
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 112
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 113
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
\$('#button-filter').on('click', function() {
    let url = '';
    \$('#filter input[type=\"text\"][name^=\"filter\"], #filter input[type=\"hidden\"][name^=\"filter\"], select[name^=\"filter\"]').each(function() {
        if (\$(this).val() !== '') {
            url += '&' + \$(this).attr('name') +  '=' + encodeURIComponent(\$(this).val());
        }
    });
    location = 'index.php?route=catalog/manufacturer&user_token=";
        // line 128
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script> 
<script>
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 135
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
</script> 
</div>
";
        // line 153
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 153,  341 => 135,  331 => 128,  313 => 113,  309 => 112,  302 => 107,  296 => 104,  293 => 103,  290 => 102,  278 => 98,  272 => 97,  267 => 95,  263 => 94,  260 => 93,  254 => 92,  248 => 90,  246 => 89,  243 => 88,  238 => 87,  236 => 86,  229 => 82,  226 => 81,  218 => 80,  208 => 78,  206 => 77,  203 => 76,  195 => 75,  185 => 73,  183 => 72,  174 => 66,  169 => 64,  165 => 63,  158 => 59,  144 => 48,  138 => 47,  124 => 38,  120 => 37,  111 => 31,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/manufacturer_list.twig", "");
    }
}
