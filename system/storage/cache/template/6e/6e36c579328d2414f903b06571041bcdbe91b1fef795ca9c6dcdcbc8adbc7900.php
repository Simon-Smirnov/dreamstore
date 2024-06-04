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

/* catalog/category_list.twig */
class __TwigTemplate_1d750f29f9956827fddb3b7eaa2962304148324ce49658a0bd1b7af11eeb00c0 extends \Twig\Template
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
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        echo ($context["repair"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
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
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-parent\">";
        // line 43
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                  <input type=\"text\" value=\"";
        // line 44
        echo ($context["filter_parent_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"filter-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"filter_parent\" value=\"";
        // line 45
        echo ($context["filter_parent"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-status\">";
        // line 50
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <select name=\"filter_status\" id=\"filter-status\" class=\"form-control\">
                    <option value=\"\"></option>
                      ";
        // line 53
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 54
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 56
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 58
        echo "                      ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 59
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 61
            echo "                      <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 63
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label hidden-xs\">&nbsp;</label>
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=catalog/category&user_token=";
        // line 70
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 71
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
        // line 82
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 86
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 87
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form action=\"";
        // line 89
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 95
        if ((($context["sort"] ?? null) == "name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 96
        if ((($context["sort"] ?? null) == "sort_order")) {
            echo " <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 97
        if ((($context["sort"] ?? null) == "status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 98
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 102
        if (($context["categories"] ?? null)) {
            // line 103
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 104
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 105
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 105), ($context["selected"] ?? null))) {
                    // line 106
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 106);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 108
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 108);
                    echo "\" />
                        ";
                }
                // line 109
                echo "</td>
                      <td class=\"text-left\">";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 110);
                echo "</td>
                      <td class=\"text-right\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 111);
                echo "</td>
                      <td class=\"text-left\">";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["category"], "status", [], "any", false, false, false, 112);
                echo "</td>
                      <td class=\"text-right\">
                        <a href=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["category"], "view", [], "any", false, false, false, 114);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                        <a href=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 115);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                    ";
        } else {
            // line 120
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"5\">";
            // line 121
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 124
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 129
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 130
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
    location = 'index.php?route=catalog/category&user_token=";
        // line 145
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script> 
<script>
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 152
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['category_name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('#filter-parent').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 172
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({ category_id: '0', name: '";
        // line 175
        echo ($context["text_no_parent"] ?? null);
        echo "' });
\t\t\t\tjson.unshift({ category_id: '*', name: '";
        // line 176
        echo ($context["text_none"] ?? null);
        echo "' });
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tif (item['value'] == '*') {
\t\t\t\$('input[name=\\'filter_parent\\']').val('');
\t\t\t\$('#filter-parent').val('');
\t\t} else {
\t\t\t\$('input[name=\\'filter_parent\\']').val(item['value']);
\t\t\t\$('#filter-parent').val(item['label']);
\t\t}
\t}
});
</script>
</div>
";
        // line 198
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 198,  448 => 176,  444 => 175,  438 => 172,  415 => 152,  405 => 145,  387 => 130,  383 => 129,  376 => 124,  370 => 121,  367 => 120,  364 => 119,  352 => 115,  346 => 114,  341 => 112,  337 => 111,  333 => 110,  330 => 109,  324 => 108,  318 => 106,  316 => 105,  313 => 104,  308 => 103,  306 => 102,  299 => 98,  281 => 97,  263 => 96,  245 => 95,  236 => 89,  231 => 87,  227 => 86,  220 => 82,  206 => 71,  200 => 70,  191 => 63,  185 => 61,  179 => 59,  176 => 58,  170 => 56,  164 => 54,  162 => 53,  156 => 50,  148 => 45,  142 => 44,  138 => 43,  128 => 38,  124 => 37,  115 => 31,  109 => 27,  101 => 23,  98 => 22,  90 => 18,  88 => 17,  82 => 13,  71 => 11,  67 => 10,  62 => 8,  55 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}
