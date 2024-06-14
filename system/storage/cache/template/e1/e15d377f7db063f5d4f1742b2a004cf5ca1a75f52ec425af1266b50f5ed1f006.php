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

/* catalog/manufacturer_form.twig */
class __TwigTemplate_d3f5f8f802f0c86a8c3d7e81f0ad747ece6c5f854d2d790d2bf381ac43d7b07e extends \Twig\Template
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
        <button type=\"submit\" form=\"form-manufacturer\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 35
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 37
        echo ($context["name"] ?? null);
        echo "\" data-length=\"255\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 38
        if (($context["error_name"] ?? null)) {
            // line 39
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 40
        echo "</div>
              </div>
              <div class=\"form-group\"></div>
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            echo "\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-h1-";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            echo "\">";
            echo ($context["entry_meta_h1"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"manufacturer_description[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "][meta_h1]\" data-length=\"255\" value=\"";
            echo (((($__internal_compile_0 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "meta_h1", [], "any", false, false, false, 54)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_h1"] ?? null);
            echo "\" id=\"input-meta-h1-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"manufacturer_description[";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "][meta_title]\" data-length=\"255\" value=\"";
            echo (((($__internal_compile_2 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null), "meta_title", [], "any", false, false, false, 60)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"manufacturer_description[";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "\" data-toggle=\"summernote\" data-height=\"150\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_4 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null), "description", [], "any", false, false, false, 66)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"manufacturer_description[";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "][meta_description]\" data-length=\"255\" rows=\"3\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_6 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "meta_description", [], "any", false, false, false, 72)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"manufacturer_description[";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "][meta_keyword]\" data-length=\"255\" rows=\"3\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_8 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["manufacturer_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 78)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 87
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 90
            echo "                    <div class=\"checkbox\">
                      <label>";
            // line 91
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 91), ($context["manufacturer_store"] ?? null))) {
                // line 92
                echo "                        <input type=\"checkbox\" name=\"manufacturer_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 92);
                echo "\" checked=\"checked\" />
                        ";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 93);
                echo "
                        ";
            } else {
                // line 95
                echo "                        <input type=\"checkbox\" name=\"manufacturer_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 95);
                echo "\" />
                        ";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 96);
                echo "
                        ";
            }
            // line 97
            echo "</label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 103
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 104
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 105
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 109
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 111
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 117
        echo ($context["help_no_index"] ?? null);
        echo "\">";
        echo ($context["entry_no_index"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"no_index\" value=\"1\" ";
        // line 120
        if (($context["no_index"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"no_index\" value=\"0\" ";
        // line 123
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
        // line 129
        echo ($context["text_keyword"] ?? null);
        echo "</div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">";
        // line 134
        echo ($context["entry_store"] ?? null);
        echo "</td>
                          <td class=\"text-left\">";
        // line 135
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 140
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 141);
            echo "</td>
                        <td class=\"text-left\">";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 143
                echo "                          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 143);
                echo "\" /></span>
                            <input type=\"text\" name=\"manufacturer_seo_url[";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 144);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = (($__internal_compile_11 = ($context["manufacturer_seo_url"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 144)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null)) {
                    echo (($__internal_compile_12 = (($__internal_compile_13 = ($context["manufacturer_seo_url"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 144)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                          </div>
                          ";
                // line 146
                if ((($__internal_compile_14 = (($__internal_compile_15 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 146)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null)) {
                    // line 147
                    echo "                          <div class=\"text-danger\">";
                    echo (($__internal_compile_16 = (($__internal_compile_17 = ($context["error_keyword"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 147)] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147)] ?? null) : null);
                    echo "</div>
                          ";
                }
                // line 148
                echo " 
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</td>
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
<link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script>
\$('#language a:first').tab('show');
</script>
</div>
";
        // line 179
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/manufacturer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 179,  485 => 152,  477 => 149,  470 => 148,  464 => 147,  462 => 146,  449 => 144,  440 => 143,  436 => 142,  432 => 141,  429 => 140,  425 => 139,  418 => 135,  414 => 134,  406 => 129,  393 => 123,  383 => 120,  375 => 117,  364 => 111,  359 => 109,  352 => 105,  346 => 104,  342 => 103,  336 => 99,  328 => 97,  323 => 96,  318 => 95,  313 => 93,  308 => 92,  306 => 91,  303 => 90,  299 => 89,  294 => 87,  288 => 83,  271 => 78,  264 => 76,  251 => 72,  244 => 70,  229 => 66,  222 => 64,  209 => 60,  202 => 58,  189 => 54,  182 => 52,  176 => 50,  172 => 49,  168 => 47,  151 => 45,  147 => 44,  141 => 40,  135 => 39,  133 => 38,  127 => 37,  122 => 35,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/manufacturer_form.twig", "");
    }
}
