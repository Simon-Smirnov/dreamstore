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

/* dreamsstore/template/information/faq.twig */
class __TwigTemplate_90d4853cb4fd6534e4c6fab0075245378c43849d9bac6af7e44623a718cf0b86 extends \Twig\Template
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
        echo "
<div id=\"information-contact\">
    <div class=\"container\">
        <ul class=\"breadcrumb\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </ul>
        <div class=\"row\">
            ";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
            <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
                ";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
                <h1 class=\"page-title\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <h3>";
        // line 14
        echo ($context["text_location"] ?? null);
        echo "</h3>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            ";
        // line 18
        if (($context["image"] ?? null)) {
            // line 19
            echo "                                <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
                            ";
        }
        // line 21
        echo "                            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
                                <address>
                                    ";
        // line 23
        echo ($context["address"] ?? null);
        echo "
                                </address>
                                ";
        // line 25
        if (($context["geocode"] ?? null)) {
            // line 26
            echo "                                    <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                                ";
        }
        // line 28
        echo "                            </div>
                            <div class=\"col-sm-3\"><strong>";
        // line 29
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
                                ";
        // line 30
        echo ($context["telephone"] ?? null);
        echo "<br />
                                <br />
                                ";
        // line 32
        if (($context["fax"] ?? null)) {
            // line 33
            echo "                                    <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
                                    ";
            // line 34
            echo ($context["fax"] ?? null);
            echo "
                                ";
        }
        // line 36
        echo "                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 38
        if (($context["open"] ?? null)) {
            // line 39
            echo "                                    <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
                                    ";
            // line 40
            echo ($context["open"] ?? null);
            echo "<br />
                                    <br />
                                ";
        }
        // line 43
        echo "                                ";
        if (($context["comment"] ?? null)) {
            // line 44
            echo "                                    <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
                                    ";
            // line 45
            echo ($context["comment"] ?? null);
            echo "
                                ";
        }
        // line 47
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 51
        if (($context["locations"] ?? null)) {
            // line 52
            echo "                    <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
                    <div class=\"panel-group\" id=\"accordion\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 55
                echo "                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 57);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 57);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 59);
                echo "\">
                                    <div class=\"panel-body\">
                                        <div class=\"row\">
                                            ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                                                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 63);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 63);
                    echo "\" class=\"img-thumbnail\" /></div>
                                            ";
                }
                // line 65
                echo "                                            <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 65);
                echo "</strong><br/>
                                                <address>
                                                    ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 67);
                echo "
                                                </address>
                                                ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                                                    <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 70));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                                                ";
                }
                // line 72
                echo "                                            </div>
                                            <div class=\"col-sm-3\"> <strong>";
                // line 73
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                                                ";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 74);
                echo "<br/>
                                                <br/>
                                                ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                                                    <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                                                    ";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 78);
                    echo "
                                                ";
                }
                // line 80
                echo "                                            </div>
                                            <div class=\"col-sm-3\">
                                                ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                                                    <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                                                    ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 84);
                    echo "<br/>
                                                    <br/>
                                                ";
                }
                // line 87
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                                                    <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                                                    ";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 89);
                    echo "
                                                ";
                }
                // line 91
                echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                    </div>
                ";
        }
        // line 99
        echo "                <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 101
        echo ($context["text_contact"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 103
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 105
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                ";
        // line 106
        if (($context["error_name"] ?? null)) {
            // line 107
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 109
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 112
        echo ($context["entry_email"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"email\" value=\"";
        // line 114
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                                ";
        // line 115
        if (($context["error_email"] ?? null)) {
            // line 116
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                ";
        }
        // line 118
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 121
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 123
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                                ";
        // line 124
        if (($context["error_enquiry"] ?? null)) {
            // line 125
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                                ";
        }
        // line 127
        echo "                            </div>
                        </div>
                        ";
        // line 129
        echo ($context["captcha"] ?? null);
        echo "
                    </fieldset>
                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 133
        echo ($context["button_submit"] ?? null);
        echo "\" />
                        </div>
                    </div>
                </form>
                ";
        // line 137
        echo ($context["content_bottom"] ?? null);
        echo "</div>
            ";
        // line 138
        echo ($context["column_right"] ?? null);
        echo "</div>
    </div>
</div>
";
        // line 141
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 141,  408 => 138,  404 => 137,  397 => 133,  390 => 129,  386 => 127,  380 => 125,  378 => 124,  374 => 123,  369 => 121,  364 => 118,  358 => 116,  356 => 115,  352 => 114,  347 => 112,  342 => 109,  336 => 107,  334 => 106,  330 => 105,  325 => 103,  320 => 101,  314 => 99,  310 => 97,  299 => 91,  294 => 89,  289 => 88,  286 => 87,  280 => 84,  275 => 83,  273 => 82,  269 => 80,  264 => 78,  259 => 77,  257 => 76,  252 => 74,  248 => 73,  245 => 72,  235 => 70,  233 => 69,  228 => 67,  222 => 65,  212 => 63,  210 => 62,  204 => 59,  197 => 57,  193 => 55,  189 => 54,  183 => 52,  181 => 51,  175 => 47,  170 => 45,  165 => 44,  162 => 43,  156 => 40,  151 => 39,  149 => 38,  145 => 36,  140 => 34,  135 => 33,  133 => 32,  128 => 30,  124 => 29,  121 => 28,  111 => 26,  109 => 25,  104 => 23,  98 => 21,  88 => 19,  86 => 18,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/faq.twig", "");
    }
}
