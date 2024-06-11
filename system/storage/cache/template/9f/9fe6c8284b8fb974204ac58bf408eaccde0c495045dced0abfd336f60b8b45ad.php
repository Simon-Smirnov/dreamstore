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
class __TwigTemplate_5e24c1f129c0e35d94231f42280cc885d8e0f6bf21075b5792820897e4e4b95b extends \Twig\Template
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
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                ";
        // line 9
        echo "                ";
        // line 12
        echo "                ";
        // line 15
        echo "            </div>
            <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "                    <li>
                        <a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 27
        if (($context["error_warning"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <i class=\"fa fa-exclamation-circle\"></i>
                ";
            // line 30
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 34
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 35
            echo "            <div class=\"alert alert-success alert-dismissible\">
                <i class=\"fa fa-check-circle\"></i>
                ";
            // line 37
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"row\">
            <div id=\"filter-review\" class=\"";
        // line 42
        echo "\">
                ";
        // line 92
        echo "            </div>
            <div class=\"col-md-12 ";
        // line 93
        echo " col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">
                            <i class=\"fa fa-list\"></i>
                            ";
        // line 98
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 101
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">
                                            ";
        // line 107
        if ((($context["sort"] ?? null) == "r.author")) {
            // line 108
            echo "                                                <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\"
                                                   class=\"";
            // line 109
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 111
            echo "                                                <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                                            ";
        }
        // line 113
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 115
        if ((($context["sort"] ?? null) == "r.email")) {
            // line 116
            echo "                                                <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\"
                                                   class=\"";
            // line 117
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 119
            echo "                                                <a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        }
        // line 121
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 123
        if ((($context["sort"] ?? null) == "r.phone")) {
            // line 124
            echo "                                                <a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\"
                                                   class=\"";
            // line 125
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_phone"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 127
            echo "                                                <a href=\"";
            echo ($context["sort_phone"] ?? null);
            echo "\">";
            echo ($context["column_phone"] ?? null);
            echo "</a>
                                            ";
        }
        // line 129
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 131
        echo ($context["column_text"] ?? null);
        echo "
                                        </td>
                                        ";
        // line 140
        echo "                                        <td class=\"text-left\">
                                            ";
        // line 141
        if ((($context["sort"] ?? null) == "r.status")) {
            // line 142
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                                                   class=\"";
            // line 143
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 145
            echo "                                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        }
        // line 147
        echo "                                        </td>
                                        <td class=\"text-left\">
                                            ";
        // line 149
        if ((($context["sort"] ?? null) == "r.date_added")) {
            // line 150
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                                                   class=\"";
            // line 151
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 153
            echo "                                                <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                                            ";
        }
        // line 155
        echo "                                        </td>
                                        <td class=\"text-right\">";
        // line 156
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 160
        if (($context["reviews"] ?? null)) {
            // line 161
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 162
                echo "                                            <tr>
                                                <td class=\"text-left\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 163);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["review"], "email", [], "any", false, false, false, 164);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["review"], "phone", [], "any", false, false, false, 165);
                echo "</td>
                                                <td class=\"text-left\">
                                                    ";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 167);
                echo "
                                                    ";
                // line 168
                if (twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 168)) {
                    // line 169
                    echo "                                                        <div class=\"mt-2\">
                                                            ";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 171
                        echo "                                                                <image src=\"";
                        echo $context["image"];
                        echo "\"></image>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "                                                        </div>
                                                    ";
                }
                // line 175
                echo "                                                </td>
                                                ";
                // line 177
                echo "                                                <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 177);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 178);
                echo "</td>
                                                <td class=\"text-right admin_page_reviews-buttons\">
                                                    <a data-toggle=\"tooltip\" data-reviews-id=\"";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["review"], "reviews_id", [], "any", false, false, false, 180);
                echo "\"
                                                       title=\"";
                // line 181
                echo ($context["button_change_status"] ?? null);
                echo "\"
                                                       class=\"btn btn-primary change_status_reviews\">
                                                        <i class=\"fa fa-circle\"></i>
                                                    </a>
                                                    <a href=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 185);
                echo "\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\"
                                                       class=\"btn btn-primary\">
                                                        <i class=\"fa fa-pencil\"></i>
                                                    </a>
                                                    <a data-reviews-id=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["review"], "reviews_id", [], "any", false, false, false, 189);
                echo "\"
                                                       title=\"";
                // line 190
                echo ($context["button_delete_review"] ?? null);
                echo "\"
                                                       class=\"btn btn-danger delete_review\">
                                                        <i class=\"fa fa-trash-o\"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                                    ";
        } else {
            // line 198
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"7\">";
            // line 199
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 202
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 208
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 209
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
            type=\"text/javascript\">
        <!--
        \$('#button-filter').on('click', function () {
            url = 'index.php?route=catalog/review&user_token= ";
        // line 220
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
    <script
            type=\"text/javascript\">
        <!--
        \$('.date').datetimepicker({language: '";
        // line 252
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
        //--></script>
</div>
";
        // line 255
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
        return array (  462 => 255,  456 => 252,  421 => 220,  407 => 209,  403 => 208,  395 => 202,  389 => 199,  386 => 198,  383 => 197,  370 => 190,  366 => 189,  357 => 185,  350 => 181,  346 => 180,  341 => 178,  336 => 177,  333 => 175,  329 => 173,  320 => 171,  316 => 170,  313 => 169,  311 => 168,  307 => 167,  302 => 165,  298 => 164,  294 => 163,  291 => 162,  286 => 161,  284 => 160,  277 => 156,  274 => 155,  266 => 153,  259 => 151,  254 => 150,  252 => 149,  248 => 147,  240 => 145,  233 => 143,  228 => 142,  226 => 141,  223 => 140,  218 => 131,  214 => 129,  206 => 127,  199 => 125,  194 => 124,  192 => 123,  188 => 121,  180 => 119,  173 => 117,  168 => 116,  166 => 115,  162 => 113,  154 => 111,  147 => 109,  142 => 108,  140 => 107,  131 => 101,  125 => 98,  118 => 93,  115 => 92,  112 => 42,  109 => 41,  102 => 37,  98 => 35,  95 => 34,  88 => 30,  84 => 28,  82 => 27,  76 => 23,  65 => 20,  62 => 19,  58 => 18,  53 => 16,  50 => 15,  48 => 12,  46 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/reviews_list.twig", "");
    }
}
