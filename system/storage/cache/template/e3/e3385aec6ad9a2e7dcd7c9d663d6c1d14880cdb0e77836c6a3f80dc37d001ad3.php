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

/* design/seo_url_list.twig */
class __TwigTemplate_f8f4e73948a68d5508f21d42fa7dca6c79366df24361ec6328b3aab535c37a3c extends \Twig\Template
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
        echo "') ? \$('#form-url-alias').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
                  <label class=\"control-label\" for=\"input-query\">";
        // line 37
        echo ($context["entry_query"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_query\" value=\"";
        // line 38
        echo ($context["filter_query"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_query"] ?? null);
        echo "\" id=\"input-query\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-keyword\">";
        // line 43
        echo ($context["entry_keyword"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_keyword\" value=\"";
        // line 44
        echo ($context["filter_keyword"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_keyword"] ?? null);
        echo "\" id=\"input-keyword\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-store\">";
        // line 49
        echo ($context["entry_store"] ?? null);
        echo "</label>
                  <select name=\"filter_store_id\" id=\"input-store\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 52
        if ((($context["filter_store_id"] ?? null) == "0")) {
            // line 53
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 55
            echo "                    <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                    ";
        }
        // line 56
        echo "                  
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 58
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 58) == ($context["filter_store_id"] ?? null))) {
                // line 59
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 59);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 59);
                echo "</option>
                    ";
            } else {
                // line 61
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 61);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 61);
                echo "</option>
                    ";
            }
            // line 63
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-language\">";
        // line 69
        echo ($context["entry_language"] ?? null);
        echo "</label>
                  <select name=\"filter_language_id\" id=\"input-language\" class=\"form-control\">
                    <option value=\"\"></option>
                      ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73) == ($context["filter_language_id"] ?? null))) {
                // line 74
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 74);
                echo "</option>
                      ";
            } else {
                // line 76
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 76);
                echo "</option>
                      ";
            }
            // line 78
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                  </select>
                </div>
                <div class=\"form-group\">
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=design/seo_url&user_token=";
        // line 83
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 84
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
        // line 95
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 99
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 100
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form action=\"";
        // line 102
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-url-alias\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 108
        if ((($context["sort"] ?? null) == "query")) {
            echo "<a href=\"";
            echo ($context["sort_query"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_query"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_query"] ?? null);
            echo "\">";
            echo ($context["column_query"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 109
        if ((($context["sort"] ?? null) == "keyword")) {
            echo "<a href=\"";
            echo ($context["sort_keyword"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_keyword"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_keyword"] ?? null);
            echo "\">";
            echo ($context["column_keyword"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 110
        if ((($context["sort"] ?? null) == "store")) {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 111
        if ((($context["sort"] ?? null) == "language")) {
            echo "<a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 112
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 117
        if (($context["seo_urls"] ?? null)) {
            // line 118
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seo_urls"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seo_url"]) {
                // line 119
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 120
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 120), ($context["selected"] ?? null))) {
                    // line 121
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 121);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 123
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 123);
                    echo "\" />
                      ";
                }
                // line 124
                echo "</td>
                    <td class=\"text-left\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "query", [], "any", false, false, false, 125);
                echo "</td>
                    <td class=\"text-left\">";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "keyword", [], "any", false, false, false, 126);
                echo "</td>
                    <td class=\"text-left\">";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "store", [], "any", false, false, false, 127);
                echo "</td>
                    <td class=\"text-left\">";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "language", [], "any", false, false, false, 128);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "edit", [], "any", false, false, false, 129);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                  ";
        } else {
            // line 133
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"6\">";
            // line 134
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 137
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 143
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 144
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
    location = 'index.php?route=design/seo_url&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script>
</div>
";
        // line 163
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "design/seo_url_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 163,  469 => 159,  451 => 144,  447 => 143,  439 => 137,  433 => 134,  430 => 133,  427 => 132,  416 => 129,  412 => 128,  408 => 127,  404 => 126,  400 => 125,  397 => 124,  391 => 123,  385 => 121,  383 => 120,  380 => 119,  375 => 118,  373 => 117,  365 => 112,  347 => 111,  329 => 110,  311 => 109,  293 => 108,  284 => 102,  279 => 100,  275 => 99,  268 => 95,  254 => 84,  248 => 83,  242 => 79,  236 => 78,  228 => 76,  220 => 74,  217 => 73,  213 => 72,  207 => 69,  200 => 64,  194 => 63,  186 => 61,  178 => 59,  175 => 58,  171 => 57,  168 => 56,  162 => 55,  156 => 53,  154 => 52,  148 => 49,  138 => 44,  134 => 43,  124 => 38,  120 => 37,  111 => 31,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/seo_url_list.twig", "");
    }
}
