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

/* catalog/reviews_list.twig */
class __TwigTemplate_a036350327b5bfd97fb3afac0972343ac8734ecd59f9ee4a8b5131f804590456 extends \Twig\Template
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
<div id=\"content\" class=\"admin_page_reviews\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 9
        echo "\t\t\t\t";
        // line 12
        echo "\t\t\t\t";
        // line 15
        echo "\t\t\t</div>
\t\t\t<h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 27
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t";
            // line 30
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 34
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 35
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible\">
\t\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t\t";
            // line 37
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t<div class=\"row\">
\t\t\t<div id=\"filter-review\" class=\"";
        // line 42
        echo "\">
\t\t\t\t";
        // line 92
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-12 ";
        // line 93
        echo " col-sm-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-list\"></i>
\t\t\t\t\t\t\t";
        // line 98
        echo ($context["text_list"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<form action=\"";
        // line 101
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        if ((($context["sort"] ?? null) == "r.author")) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t\t\t\t</td>
                                            <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        if ((($context["sort"] ?? null) == "r.email")) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        if ((($context["sort"] ?? null) == "r.phone")) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_phone"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\">";
            echo ($context["column_phone"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t\t\t\t\t\t\t</td>
                                            <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 128
        echo ($context["column_text"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 137
        echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 138
        if ((($context["sort"] ?? null) == "r.status")) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 145
        if ((($context["sort"] ?? null) == "r.date_added")) {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 151
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 155
        if (($context["reviews"] ?? null)) {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 158);
                echo "</td>
                                                    <td class=\"text-left\">";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["review"], "email", [], "any", false, false, false, 159);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["review"], "phone", [], "any", false, false, false, 160);
                echo "</td>
                                                    <td class=\"text-left\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 161);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 163);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 164);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right admin_page_reviews-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tooltip\" data-reviews-id=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["review"], "reviews_id", [], "any", false, false, false, 166);
                echo "\" title=\"";
                echo ($context["button_change_status"] ?? null);
                echo "\" class=\"btn btn-primary change_status_reviews\">
                                                            <i class=\"fa fa-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 169);
                echo "\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-reviews-id=\"";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["review"], "reviews_id", [], "any", false, false, false, 172);
                echo "\" title=\"";
                echo ($context["button_delete_review"] ?? null);
                echo "\" class=\"btn btn-danger delete_review\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 180
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 189
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 190
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#button-filter').on('click', function () {
url = 'index.php?route=catalog/review&user_token= ";
        // line 201
        echo ($context["user_token"] ?? null);
        echo "';

var filter_product = \$('input[name=\\'filter_product\\']').val();

if (filter_product) {
url += '&filter_product=' + encodeURIComponent(filter_product);
}

var filter_author = \$('input[name=\\'filter_author\\']').val();

if (filter_author) {
url += '&filter_author=' + encodeURIComponent(filter_author);
}

var filter_status = \$('select[name=\\'filter_status\\']').val();

if (filter_status !== '') {
url += '&filter_status=' + encodeURIComponent(filter_status);
}

var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

if (filter_date_added) {
url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
}

location = url;
});
//--></script>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('.date').datetimepicker({language: '";
        // line 233
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
//--></script>
</div>
";
        // line 236
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/reviews_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 236,  413 => 233,  378 => 201,  364 => 190,  360 => 189,  352 => 183,  346 => 180,  343 => 179,  340 => 178,  326 => 172,  318 => 169,  310 => 166,  305 => 164,  300 => 163,  296 => 161,  292 => 160,  288 => 159,  284 => 158,  281 => 157,  276 => 156,  274 => 155,  267 => 151,  264 => 150,  256 => 148,  246 => 146,  244 => 145,  240 => 143,  232 => 141,  222 => 139,  220 => 138,  217 => 137,  212 => 128,  208 => 126,  200 => 124,  190 => 122,  188 => 121,  184 => 119,  176 => 117,  166 => 115,  164 => 114,  160 => 112,  152 => 110,  142 => 108,  140 => 107,  131 => 101,  125 => 98,  118 => 93,  115 => 92,  112 => 42,  109 => 41,  102 => 37,  98 => 35,  95 => 34,  88 => 30,  84 => 28,  82 => 27,  76 => 23,  65 => 20,  62 => 19,  58 => 18,  53 => 16,  50 => 15,  48 => 12,  46 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/reviews_list.twig", "");
    }
}
