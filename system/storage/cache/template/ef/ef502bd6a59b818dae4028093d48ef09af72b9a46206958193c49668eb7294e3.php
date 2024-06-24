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

/* catalog/review_list.twig */
class __TwigTemplate_9d6735fad41e8861fc3a3b70ffb53e235d4c6b27d2e07af04e2745ca96c00d48 extends \Twig\Template
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
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
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
                  <label class=\"control-label\" for=\"input-product\">";
        // line 37
        echo ($context["entry_product"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_product\" value=\"";
        // line 38
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-author\">";
        // line 43
        echo ($context["entry_author"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_author\" value=\"";
        // line 44
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 49
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>                           
                  ";
        // line 52
        if ((($context["filter_status"] ?? null) == "1")) {
            echo "                  
                    <option value=\"1\" selected=\"selected\">";
            // line 53
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 55
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 57
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 58
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 60
            echo "                    <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>              
                  ";
        }
        // line 61
        echo "                
              </select>
            </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-date-added\">";
        // line 67
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 69
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                    <span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=catalog/review&user_token=";
        // line 75
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 76
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
        // line 87
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 91
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 92
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form action=\"";
        // line 94
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 100
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 101
        if ((($context["sort"] ?? null) == "r.author")) {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 102
        if ((($context["sort"] ?? null) == "r.rating")) {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 103
        if ((($context["sort"] ?? null) == "r.status")) {
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
                      <td class=\"text-left\">";
        // line 104
        if ((($context["sort"] ?? null) == "r.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 105
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 110
        if (($context["reviews"] ?? null)) {
            // line 111
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 112
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 113
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 113), ($context["selected"] ?? null))) {
                    // line 114
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 114);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 116
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 116);
                    echo "\" />
                      ";
                }
                // line 117
                echo "</td>
                    <td class=\"text-left\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 118);
                echo "</td>
                    <td class=\"text-left\">";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 119);
                echo "</td>
                    <td class=\"text-right\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 120);
                echo "</td>
                    <td class=\"text-left\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 121);
                echo "</td>
                    <td class=\"text-left\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 122);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 123);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                  ";
        } else {
            // line 127
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 128
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 131
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 137
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 138
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
\tlet url = '';
\t\$('#filter input[type=\"text\"][name^=\"filter\"], #filter input[type=\"hidden\"][name^=\"filter\"], select[name^=\"filter\"]').each(function() {
\t\tif (\$(this).val() !== '') {
\t\t\turl += '&' + \$(this).attr('name') +  '=' + encodeURIComponent(\$(this).val());
\t\t}
\t});
\tlocation = 'index.php?route=catalog/review&user_token=";
        // line 153
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script> 
<script>
\$('input[name=\\'filter_product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 160
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_product\\']').val(item['label']);
\t}
});

\$('.date').datetimepicker({
\tlanguage: '";
        // line 178
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
</script>
</div>
";
        // line 183
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 183,  482 => 178,  461 => 160,  451 => 153,  433 => 138,  429 => 137,  421 => 131,  415 => 128,  412 => 127,  409 => 126,  398 => 123,  394 => 122,  390 => 121,  386 => 120,  382 => 119,  378 => 118,  375 => 117,  369 => 116,  363 => 114,  361 => 113,  358 => 112,  353 => 111,  351 => 110,  343 => 105,  325 => 104,  307 => 103,  289 => 102,  271 => 101,  253 => 100,  244 => 94,  239 => 92,  235 => 91,  228 => 87,  214 => 76,  208 => 75,  197 => 69,  192 => 67,  184 => 61,  178 => 60,  172 => 58,  169 => 57,  163 => 55,  158 => 53,  154 => 52,  148 => 49,  138 => 44,  134 => 43,  124 => 38,  120 => 37,  111 => 31,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/review_list.twig", "");
    }
}
