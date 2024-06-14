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

/* catalog/vacancies_list.twig */
class __TwigTemplate_423f5f6e35d17927c29f06f281b57e8a24e57398d3b82121bab3bd3438e9a6f1 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 7
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter\" class=\"col-sm-12\">
        <div class=\"panel panel-default panel-filter\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-name\">";
        // line 38
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 39
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"filter-name\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-model\">";
        // line 42
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_model\" value=\"";
        // line 43
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"filter-model\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-manufacturer\">";
        // line 48
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                  <input type=\"text\" value=\"";
        // line 49
        echo ($context["filter_manufacturer_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"filter-manufacturer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"filter_manufacturer\" value=\"";
        // line 50
        echo ($context["filter_manufacturer"] ?? null);
        echo "\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-category\">";
        // line 53
        echo ($context["entry_filter_category"] ?? null);
        echo "</label>
                  <input type=\"text\" value=\"";
        // line 54
        echo ($context["filter_category_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_filter_category"] ?? null);
        echo "\" id=\"filter-category\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 55
        echo ($context["filter_category"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <div class=\"row\">
                    <label class=\"col-xs-12 control-label text-center\">";
        // line 61
        echo ($context["entry_price"] ?? null);
        echo "</label>
                    <div class=\"col-xs-6\">
                      <input type=\"text\" name=\"filter_price_min\" value=\"";
        // line 63
        echo ($context["filter_price_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\" />
                    </div>
                    <div class=\"col-xs-6\">
                      <input type=\"text\" name=\"filter_price_max\" value=\"";
        // line 66
        echo ($context["filter_price_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\" />
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"row\">
                    <label class=\"col-xs-12 control-label text-center\">";
        // line 72
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                    <div class=\"col-xs-6\">
                      <input type=\"text\" name=\"filter_quantity_min\" value=\"";
        // line 74
        echo ($context["filter_quantity_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\" />
                    </div>
                    <div class=\"col-xs-6\">
                      <input type=\"text\" name=\"filter_quantity_max\" value=\"";
        // line 77
        echo ($context["filter_quantity_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"filter-status\">";
        // line 84
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <select name=\"filter_status\" id=\"filter-status\" class=\"form-control\">
                    <option value=\"\"></option>
                      ";
        // line 87
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 88
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 90
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 92
        echo "                      ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 93
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 95
            echo "                      <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 97
        echo "                  </select>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label hidden-xs\">&nbsp;</label>
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=catalog/product&user_token=";
        // line 102
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 103
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
        // line 114
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 118
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 119
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form action=\"";
        // line 121
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\" style=\"width: 70px; \">";
        // line 127
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 128
        if ((($context["sort"] ?? null) == "pd.name")) {
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
                      <td class=\"text-left\">";
        // line 129
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 130
        if ((($context["sort"] ?? null) == "manufacturer")) {
            echo " <a href=\"";
            echo ($context["sort_manufacturer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_manufacturer"] ?? null);
            echo "\">";
            echo ($context["column_manufacturer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 131
        echo ($context["column_category"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 132
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 133
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 134
        if ((($context["sort"] ?? null) == "p.status")) {
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
        // line 135
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 140
        if (($context["products"] ?? null)) {
            // line 141
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 142
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 143
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143), ($context["selected"] ?? null))) {
                    // line 144
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 144);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 146
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146);
                    echo "\" />
                      ";
                }
                // line 147
                echo "</td>
                    <td class=\"text-center\">";
                // line 148
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 148)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 148);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 149);
                echo "</td>
                    <td class=\"text-left\">";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 150);
                echo "</td>
                    <td class=\"text-left\">";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 151);
                echo "</td>
                    <td class=\"text-left\">
                      ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "categories", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 154
                    echo "                      <div>";
                    echo $context["category"];
                    echo "</div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                    </td>
                    <td class=\"text-right\">";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 157)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157);
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 158);
                    echo "</div>
                      ";
                } else {
                    // line 160
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                    echo "
                      ";
                }
                // line 161
                echo "</td>
                    <td class=\"text-right\">";
                // line 162
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 163);
                echo "</td>
                    <td class=\"text-right\">
                      <a href=\"";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 165);
                echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                      <a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 166);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                  ";
        } else {
            // line 171
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"10\">";
            // line 172
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 175
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 181
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 182
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
    location = 'index.php?route=catalog/product&user_token=";
        // line 197
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script> 
<script>
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
    \$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 209
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
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 229
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});

\$('#filter-manufacturer').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 249
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({ manufacturer_id: '0', name: '";
        // line 252
        echo ($context["text_no_manufacturer"] ?? null);
        echo "' });
\t\t\t\tjson.unshift({ manufacturer_id: '*', name: '";
        // line 253
        echo ($context["text_none"] ?? null);
        echo "' });
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
\t\tif (item['value'] == '*') {
\t\t\t\$('input[name=\\'filter_manufacturer\\']').val('');
\t\t\t\$('#filter-manufacturer').val('');
\t\t} else {
\t\t\t\$('input[name=\\'filter_manufacturer\\']').val(item['value']);
\t\t\t\$('#filter-manufacturer').val(item['label']);
\t\t}
\t}
});

\$('#filter-category').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 277
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({ category_id: '0', name: '";
        // line 280
        echo ($context["text_no_category"] ?? null);
        echo "' });
\t\t\t\tjson.unshift({ category_id: '*', name: '";
        // line 281
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
\t\t\t\$('input[name=\\'filter_category\\']').val('');
\t\t\t\$('#filter-category').val('');
\t\t} else {
\t\t\t\$('input[name=\\'filter_category\\']').val(item['value']);
\t\t\t\$('#filter-category').val(item['label']);
\t\t}
\t}
});
</script>
</div>
";
        // line 303
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/vacancies_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  751 => 303,  726 => 281,  722 => 280,  716 => 277,  689 => 253,  685 => 252,  679 => 249,  656 => 229,  633 => 209,  618 => 197,  600 => 182,  596 => 181,  588 => 175,  582 => 172,  579 => 171,  576 => 170,  564 => 166,  558 => 165,  553 => 163,  537 => 162,  534 => 161,  528 => 160,  523 => 158,  517 => 157,  514 => 156,  505 => 154,  501 => 153,  496 => 151,  492 => 150,  488 => 149,  476 => 148,  473 => 147,  467 => 146,  461 => 144,  459 => 143,  456 => 142,  451 => 141,  449 => 140,  441 => 135,  423 => 134,  405 => 133,  387 => 132,  383 => 131,  365 => 130,  347 => 129,  329 => 128,  325 => 127,  316 => 121,  311 => 119,  307 => 118,  300 => 114,  286 => 103,  280 => 102,  273 => 97,  267 => 95,  261 => 93,  258 => 92,  252 => 90,  246 => 88,  244 => 87,  238 => 84,  226 => 77,  218 => 74,  213 => 72,  202 => 66,  194 => 63,  189 => 61,  180 => 55,  174 => 54,  170 => 53,  164 => 50,  158 => 49,  154 => 48,  144 => 43,  140 => 42,  132 => 39,  128 => 38,  119 => 32,  113 => 28,  105 => 24,  102 => 23,  94 => 19,  92 => 18,  87 => 15,  76 => 13,  72 => 12,  67 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/vacancies_list.twig", "");
    }
}
