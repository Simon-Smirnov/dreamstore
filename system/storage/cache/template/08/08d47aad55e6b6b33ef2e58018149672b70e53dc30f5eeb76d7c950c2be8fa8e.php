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

/* setting/setting.twig */
class __TwigTemplate_1d3e1bebd6eeaf03bca59bc29f2853d2cac1ea6104af5e81ac399e0cd796ba44 extends \Twig\Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo-url\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_seo_url"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 46
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 48
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 49
        if (($context["error_meta_title"] ?? null)) {
            // line 50
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 51
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 54
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 56
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 60
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 62
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 66
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 71);
                echo "</option>                    
                    ";
            } else {
                // line 72
                echo "                    
                    <option value=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 73);
                echo "</option>                    
                    ";
            }
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 81
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 85
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 85) == ($context["config_layout_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 86);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 86);
                echo "</option>                    
                    ";
            } else {
                // line 87
                echo "                    
                    <option value=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 88);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 88);
                echo "</option>                    
                    ";
            }
            // line 90
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 97
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 99
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 100
        if (($context["error_name"] ?? null)) {
            // line 101
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 102
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 105
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 107
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 108
        if (($context["error_owner"] ?? null)) {
            // line 109
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 110
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 113
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 115
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 116
        if (($context["error_address"] ?? null)) {
            // line 117
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 118
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 121
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 123
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 127
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 129
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 130
        if (($context["error_email"] ?? null)) {
            // line 131
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 132
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 135
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 137
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 138
        if (($context["error_telephone"] ?? null)) {
            // line 139
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 140
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 143
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 145
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 149
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 150
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 151
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 155
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 157
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 161
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 163
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 166
        if (($context["locations"] ?? null)) {
            // line 167
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 168
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 170
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 171
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 171), ($context["config_location"] ?? null))) {
                    // line 172
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 172);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 173);
                    echo "
                      ";
                } else {
                    // line 175
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 175);
                    echo "\" />
                      ";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 176);
                    echo "
                      ";
                }
                // line 177
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo " </div>
              </div>
              ";
        }
        // line 181
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 184
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 188
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 188) == ($context["config_country_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 189);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 189);
                echo "</option>                    
                    ";
            } else {
                // line 190
                echo "                    
                    <option value=\"";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 191);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 191);
                echo "</option>                    
                    ";
            }
            // line 193
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 198
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 205
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 209
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 209) == ($context["config_timezone"] ?? null))) {
                // line 210
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 210);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 210);
                echo "</option>
                      ";
            } else {
                // line 212
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 212);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 212);
                echo "</option>
                      ";
            }
            // line 214
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 219
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 223
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 223) == ($context["config_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 224);
                echo "</option>                    
                    ";
            } else {
                // line 225
                echo "                    
                    <option value=\"";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 226);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 226);
                echo "</option>                    
                    ";
            }
            // line 228
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 233
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 237
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 237) == ($context["config_admin_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 238);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 238);
                echo "</option>                    
                    ";
            } else {
                // line 239
                echo "                    
                    <option value=\"";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 240);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 240);
                echo "</option>                    
                    ";
            }
            // line 242
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 247
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 251
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 251) == ($context["config_currency"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 252);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 252);
                echo "</option>                    
                    ";
            } else {
                // line 253
                echo "                    
                    <option value=\"";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 254);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 254);
                echo "</option>                    
                    ";
            }
            // line 256
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 261
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 263
        if (($context["config_currency_auto"] ?? null)) {
            // line 264
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 265
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 267
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 268
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 269
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 270
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 271
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 272
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 274
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 275
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 276
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 280
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 284
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 284) == ($context["config_length_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 285);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 285);
                echo "</option>                    
                    ";
            } else {
                // line 286
                echo "                    
                    <option value=\"";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 287);
                echo "</option>                    
                    ";
            }
            // line 289
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 294
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 298
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 298) == ($context["config_weight_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 299);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 299);
                echo "</option>                    
                    ";
            } else {
                // line 300
                echo "                    
                    <option value=\"";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 301);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 301);
                echo "</option>                    
                    ";
            }
            // line 303
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 310
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 312
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 314
        if (($context["config_product_count"] ?? null)) {
            // line 315
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 316
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 318
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 319
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 320
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 321
        if ( !($context["config_product_count"] ?? null)) {
            // line 322
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 323
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 325
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 326
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 327
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 331
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 333
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 334
        if (($context["error_limit_admin"] ?? null)) {
            // line 335
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 337
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-autocomplete\"><span data-toggle=\"tooltip\" title=\"";
        // line 340
        echo ($context["help_autocomplete_admin"] ?? null);
        echo "\">";
        echo ($context["entry_autocomplete_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_autocomplete_admin\" value=\"";
        // line 342
        echo ($context["config_autocomplete_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_autocomplete_admin"] ?? null);
        echo "\" id=\"input-admin-autocomplete\" class=\"form-control\" />
                    ";
        // line 343
        if (($context["error_autocomplete_admin"] ?? null)) {
            // line 344
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_autocomplete_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 346
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 350
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 352
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 354
        if (($context["config_review_status"] ?? null)) {
            // line 355
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 356
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 358
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 359
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 360
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 361
        if ( !($context["config_review_status"] ?? null)) {
            // line 362
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 363
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 365
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 366
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 367
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 371
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 373
        if (($context["config_review_guest"] ?? null)) {
            // line 374
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 375
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 377
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 378
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 379
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 380
        if ( !($context["config_review_guest"] ?? null)) {
            // line 381
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 382
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 384
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 385
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 386
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 391
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 393
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 395
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 396
        if (($context["error_voucher_min"] ?? null)) {
            // line 397
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 398
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 401
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 403
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 404
        if (($context["error_voucher_max"] ?? null)) {
            // line 405
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 406
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 410
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 412
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 414
        if (($context["config_tax"] ?? null)) {
            // line 415
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 416
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 418
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 419
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 420
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 421
        if ( !($context["config_tax"] ?? null)) {
            // line 422
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 423
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 425
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 426
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 427
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 431
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 434
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 435
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 436
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 437
            echo "                      
                      <option value=\"shipping\">";
            // line 438
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 440
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 441
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 442
            echo "                      
                      <option value=\"payment\">";
            // line 443
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 444
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 449
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 452
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 453
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 454
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 455
            echo "                      
                      <option value=\"shipping\">";
            // line 456
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 458
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 459
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 460
            echo "                      
                      <option value=\"payment\">";
            // line 461
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 462
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 468
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 470
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 472
        if (($context["config_customer_online"] ?? null)) {
            // line 473
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 474
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 476
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 477
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 478
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 479
        if ( !($context["config_customer_online"] ?? null)) {
            // line 480
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 481
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 483
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 484
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 485
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 489
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 491
        if (($context["config_customer_activity"] ?? null)) {
            // line 492
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 493
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 495
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 496
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 497
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 498
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 499
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 500
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 502
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 503
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 504
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 508
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 510
        if (($context["config_customer_search"] ?? null)) {
            // line 511
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 512
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 514
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 515
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 516
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 517
        if ( !($context["config_customer_search"] ?? null)) {
            // line 518
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 519
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 521
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 522
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 523
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 527
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 531
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 531) == ($context["config_customer_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 532
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 532);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 532);
                echo "</option>                      
                      ";
            } else {
                // line 533
                echo "                      
                      <option value=\"";
                // line 534
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 534);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 534);
                echo "</option>                      
                      ";
            }
            // line 536
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 541
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 542
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 543
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 544
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 544), ($context["config_customer_group_display"] ?? null))) {
                // line 545
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 545);
                echo "\" checked=\"checked\" />
                        ";
                // line 546
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 546);
                echo "
                        ";
            } else {
                // line 548
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 548);
                echo "\" />
                        ";
                // line 549
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 549);
                echo "
                        ";
            }
            // line 550
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 553
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 554
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 555
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 558
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 560
        if (($context["config_customer_price"] ?? null)) {
            // line 561
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 562
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 564
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 565
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 566
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 567
        if ( !($context["config_customer_price"] ?? null)) {
            // line 568
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 572
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 573
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 577
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 579
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 580
        if (($context["error_login_attempts"] ?? null)) {
            // line 581
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 582
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 585
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 588
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 590
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 590) == ($context["config_account_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 591
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 591);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 591);
                echo "</option>                      
                      ";
            } else {
                // line 592
                echo "                      
                      <option value=\"";
                // line 593
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 593);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 593);
                echo "</option>                      
                      ";
            }
            // line 595
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 601
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 603
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 605
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 609
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 611
        if (($context["config_cart_weight"] ?? null)) {
            // line 612
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 613
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 615
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 616
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 617
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 618
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 619
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 620
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 622
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 623
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 624
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 628
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 630
        if (($context["config_checkout_guest"] ?? null)) {
            // line 631
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 632
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 634
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 635
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 636
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 637
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 638
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 639
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 641
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 642
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 643
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 647
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 650
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 652
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 652) == ($context["config_checkout_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 653
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 653);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 653);
                echo "</option>                      
                      ";
            } else {
                // line 654
                echo "                      
                      <option value=\"";
                // line 655
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 655);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 655);
                echo "</option>                      
                      ";
            }
            // line 657
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 662
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 665
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 666
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 666) == ($context["config_order_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 667
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 667);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 667);
                echo "</option>                      
                      ";
            } else {
                // line 668
                echo "                      
                      <option value=\"";
                // line 669
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 669);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 669);
                echo "</option>                      
                      ";
            }
            // line 671
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 676
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 679
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 680
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 680), ($context["config_processing_status"] ?? null))) {
                // line 681
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 681);
                echo "\" checked=\"checked\" />
                          ";
                // line 682
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 682);
                echo "
                          ";
            } else {
                // line 684
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 684);
                echo "\" />
                          ";
                // line 685
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 685);
                echo "
                          ";
            }
            // line 686
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        echo " </div>
                    ";
        // line 689
        if (($context["error_processing_status"] ?? null)) {
            // line 690
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 691
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 694
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 697
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 698
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 698), ($context["config_complete_status"] ?? null))) {
                // line 699
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 699);
                echo "\" checked=\"checked\" />
                          ";
                // line 700
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 700);
                echo "
                          ";
            } else {
                // line 702
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 702);
                echo "\" />
                          ";
                // line 703
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 703);
                echo "
                          ";
            }
            // line 704
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        echo " </div>
                    ";
        // line 707
        if (($context["error_complete_status"] ?? null)) {
            // line 708
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 709
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 712
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 715
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 717
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 717) == ($context["config_api_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 718
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 718);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 718);
                echo "</option>                      
                      ";
            } else {
                // line 719
                echo "                      
                      <option value=\"";
                // line 720
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 720);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 720);
                echo "</option>                      
                      ";
            }
            // line 722
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 728
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 730
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 732
        if (($context["config_stock_display"] ?? null)) {
            // line 733
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 734
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 736
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 737
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 738
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 739
        if ( !($context["config_stock_display"] ?? null)) {
            // line 740
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 741
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 743
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 744
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 745
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 749
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 751
        if (($context["config_stock_warning"] ?? null)) {
            // line 752
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 753
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 755
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 756
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 757
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 758
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 759
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 760
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 762
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 763
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 764
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 768
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 770
        if (($context["config_stock_checkout"] ?? null)) {
            // line 771
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 772
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 774
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 775
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 776
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 777
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 778
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 779
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 781
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 782
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 783
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 788
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 790
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 793
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 795
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 795) == ($context["config_return_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 796
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 796);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 796);
                echo "</option>                      
                      ";
            } else {
                // line 797
                echo "                      
                      <option value=\"";
                // line 798
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 798);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 798);
                echo "</option>                      
                      ";
            }
            // line 800
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 805
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 808
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 809
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 809) == ($context["config_return_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 810
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 810);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 810);
                echo "</option>                      
                      ";
            } else {
                // line 811
                echo "                      
                      <option value=\"";
                // line 812
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 812);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 812);
                echo "</option>                      
                      ";
            }
            // line 814
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 820
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 822
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 825
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 826
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 827
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 827) == ($context["config_captcha"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 828
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 828);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 828);
                echo "</option>                      
                      ";
            } else {
                // line 829
                echo "                      
                      <option value=\"";
                // line 830
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 830);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 830);
                echo "</option>                      
                      ";
            }
            // line 832
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 837
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 839
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 840
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 841
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 841), ($context["config_captcha_page"] ?? null))) {
                // line 842
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 842);
                echo "\" checked=\"checked\" />
                          ";
                // line 843
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 843);
                echo "
                          ";
            } else {
                // line 845
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 845);
                echo "\" />
                          ";
                // line 846
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 846);
                echo "
                          ";
            }
            // line 847
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 849
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 856
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 857
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 858
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 862
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 863
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 864
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 870
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 872
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 875
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 876
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 877
            echo "                      
                      <option value=\"mail\">";
            // line 878
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 880
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 881
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 882
            echo "                      
                      <option value=\"smtp\">";
            // line 883
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 884
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 889
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 891
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 895
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 897
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 901
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 903
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 907
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 909
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 913
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 915
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 919
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 921
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 926
        echo ($context["text_mail_custom"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 928
        echo ($context["help_enquiry_allow_links"] ?? null);
        echo "\">";
        echo ($context["entry_enquiry_allow_links"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_enquiry_allow_links\" value=\"1\" ";
        // line 931
        if (($context["config_enquiry_allow_links"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                    </label>
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_enquiry_allow_links\" value=\"0\" ";
        // line 934
        if ( !($context["config_enquiry_allow_links"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                    </label>
                  </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 939
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 941
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 943
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 944
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 945
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 945), ($context["config_mail_alert"] ?? null))) {
                // line 946
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 946);
                echo "\" checked=\"checked\" />
                          ";
                // line 947
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 947);
                echo "
                          ";
            } else {
                // line 949
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 949);
                echo "\" />
                          ";
                // line 950
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 950);
                echo "
                          ";
            }
            // line 951
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 953
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 957
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 959
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <fieldset>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 967
        echo ($context["help_seo_canonical_first"] ?? null);
        echo "\">";
        echo ($context["entry_seo_canonical_first"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_canonical_first\" value=\"1\" ";
        // line 970
        if (($context["config_seo_canonical_first"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                    </label>
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_canonical_first\" value=\"0\" ";
        // line 973
        if ( !($context["config_seo_canonical_first"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 978
        echo ($context["help_seo_no_description"] ?? null);
        echo "\">";
        echo ($context["entry_seo_no_description"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_no_description\" value=\"1\" ";
        // line 981
        if (($context["config_seo_no_description"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                    </label>
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_no_description\" value=\"0\" ";
        // line 984
        if ( !($context["config_seo_no_description"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 989
        echo ($context["help_seo_title_page"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_page"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_title_page\" value=\"1\" ";
        // line 992
        if (($context["config_seo_title_page"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                    </label>
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_title_page\" value=\"0\" ";
        // line 995
        if ( !($context["config_seo_title_page"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1000
        echo ($context["help_seo_meta_description_page"] ?? null);
        echo "\">";
        echo ($context["entry_seo_meta_description_page"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_meta_description_page\" value=\"1\" ";
        // line 1003
        if (($context["config_seo_meta_description_page"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_yes"] ?? null);
        echo "
                    </label>
                    <label class=\"radio-inline\">
                      <input type=\"radio\" name=\"config_seo_meta_description_page\" value=\"0\" ";
        // line 1006
        if ( !($context["config_seo_meta_description_page"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_no"] ?? null);
        echo "
                    </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo-url\">
              <fieldset>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1017
        if (($context["config_seo_url"] ?? null)) {
            // line 1018
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1019
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1021
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1022
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1023
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1024
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1025
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1026
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1028
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1029
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1030
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1034
        echo ($context["help_seo_url_postfix"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_postfix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1036
        if (($context["config_seo_url_postfix"] ?? null)) {
            // line 1037
            echo "                      <input type=\"radio\" name=\"config_seo_url_postfix\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1038
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1040
            echo "                      <input type=\"radio\" name=\"config_seo_url_postfix\" value=\"1\" />
                      ";
            // line 1041
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1042
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1043
        if ( !($context["config_seo_url_postfix"] ?? null)) {
            // line 1044
            echo "                      <input type=\"radio\" name=\"config_seo_url_postfix\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1045
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1047
            echo "                      <input type=\"radio\" name=\"config_seo_url_postfix\" value=\"0\" />
                      ";
            // line 1048
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1049
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1053
        echo ($context["help_seo_url_slash"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_slash"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1055
        if (($context["config_seo_url_slash"] ?? null)) {
            // line 1056
            echo "                      <input type=\"radio\" name=\"config_seo_url_slash\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1057
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1059
            echo "                      <input type=\"radio\" name=\"config_seo_url_slash\" value=\"1\" />
                      ";
            // line 1060
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1061
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1062
        if ( !($context["config_seo_url_slash"] ?? null)) {
            // line 1063
            echo "                      <input type=\"radio\" name=\"config_seo_url_slash\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1064
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1066
            echo "                      <input type=\"radio\" name=\"config_seo_url_slash\" value=\"0\" />
                      ";
            // line 1067
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1068
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1072
        echo ($context["entry_seo_url_mode"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 1074
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seo_url_modes"] ?? null));
        foreach ($context['_seq'] as $context["mode"] => $context["item"]) {
            // line 1075
            echo "                    <div>
                      <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"config_seo_url_mode\" value=\"";
            // line 1077
            echo $context["mode"];
            echo "\" ";
            if (($context["mode"] == ($context["config_seo_url_mode"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 1077);
            echo "
                      </label>
                      ";
            // line 1079
            if (twig_get_attribute($this->env, $this->source, $context["item"], "help", [], "any", false, false, false, 1079)) {
                echo "<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "help", [], "any", false, false, false, 1079);
                echo "</div>";
            }
            // line 1080
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mode'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1082
        echo "                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1088
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1090
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1092
        if (($context["config_maintenance"] ?? null)) {
            // line 1093
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1094
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1096
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1097
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1098
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1099
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1100
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1101
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1103
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1104
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1105
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1109
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1111
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1115
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1117
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1122
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1124
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1126
        if (($context["config_secure"] ?? null)) {
            // line 1127
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1128
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1130
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1131
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1132
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1133
        if ( !($context["config_secure"] ?? null)) {
            // line 1134
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1135
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1137
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1138
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1139
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1143
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1145
        if (($context["config_password"] ?? null)) {
            // line 1146
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1147
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1149
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1150
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1151
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1152
        if ( !($context["config_password"] ?? null)) {
            // line 1153
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1154
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1156
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1157
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1158
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1162
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1164
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1165
        if (($context["error_encryption"] ?? null)) {
            // line 1166
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1167
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1171
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1173
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1175
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1179
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1181
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1185
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1187
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1192
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1194
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1196
        if (($context["config_error_display"] ?? null)) {
            // line 1197
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1198
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1200
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1201
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1202
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1203
        if ( !($context["config_error_display"] ?? null)) {
            // line 1204
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1205
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1207
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1208
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1209
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1213
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1215
        if (($context["config_error_log"] ?? null)) {
            // line 1216
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1217
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1219
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1220
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1221
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1222
        if ( !($context["config_error_log"] ?? null)) {
            // line 1223
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1224
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1226
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1227
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1228
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1232
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1234
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1235
        if (($context["error_log"] ?? null)) {
            // line 1236
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1237
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1249
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1271
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1280
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1286
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1293
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1308
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3633 => 1308,  3615 => 1293,  3605 => 1286,  3596 => 1280,  3584 => 1271,  3559 => 1249,  3545 => 1237,  3539 => 1236,  3537 => 1235,  3531 => 1234,  3526 => 1232,  3520 => 1228,  3515 => 1227,  3512 => 1226,  3507 => 1224,  3504 => 1223,  3502 => 1222,  3499 => 1221,  3494 => 1220,  3491 => 1219,  3486 => 1217,  3483 => 1216,  3481 => 1215,  3476 => 1213,  3470 => 1209,  3465 => 1208,  3462 => 1207,  3457 => 1205,  3454 => 1204,  3452 => 1203,  3449 => 1202,  3444 => 1201,  3441 => 1200,  3436 => 1198,  3433 => 1197,  3431 => 1196,  3426 => 1194,  3421 => 1192,  3411 => 1187,  3404 => 1185,  3395 => 1181,  3388 => 1179,  3379 => 1175,  3372 => 1173,  3367 => 1171,  3361 => 1167,  3355 => 1166,  3353 => 1165,  3347 => 1164,  3340 => 1162,  3334 => 1158,  3329 => 1157,  3326 => 1156,  3321 => 1154,  3318 => 1153,  3316 => 1152,  3313 => 1151,  3308 => 1150,  3305 => 1149,  3300 => 1147,  3297 => 1146,  3295 => 1145,  3288 => 1143,  3282 => 1139,  3277 => 1138,  3274 => 1137,  3269 => 1135,  3266 => 1134,  3264 => 1133,  3261 => 1132,  3256 => 1131,  3253 => 1130,  3248 => 1128,  3245 => 1127,  3243 => 1126,  3236 => 1124,  3231 => 1122,  3221 => 1117,  3214 => 1115,  3205 => 1111,  3198 => 1109,  3192 => 1105,  3187 => 1104,  3184 => 1103,  3179 => 1101,  3176 => 1100,  3174 => 1099,  3171 => 1098,  3166 => 1097,  3163 => 1096,  3158 => 1094,  3155 => 1093,  3153 => 1092,  3146 => 1090,  3141 => 1088,  3133 => 1082,  3126 => 1080,  3120 => 1079,  3109 => 1077,  3105 => 1075,  3101 => 1074,  3096 => 1072,  3090 => 1068,  3085 => 1067,  3082 => 1066,  3077 => 1064,  3074 => 1063,  3072 => 1062,  3069 => 1061,  3064 => 1060,  3061 => 1059,  3056 => 1057,  3053 => 1056,  3051 => 1055,  3044 => 1053,  3038 => 1049,  3033 => 1048,  3030 => 1047,  3025 => 1045,  3022 => 1044,  3020 => 1043,  3017 => 1042,  3012 => 1041,  3009 => 1040,  3004 => 1038,  3001 => 1037,  2999 => 1036,  2992 => 1034,  2986 => 1030,  2981 => 1029,  2978 => 1028,  2973 => 1026,  2970 => 1025,  2968 => 1024,  2965 => 1023,  2960 => 1022,  2957 => 1021,  2952 => 1019,  2949 => 1018,  2947 => 1017,  2940 => 1015,  2924 => 1006,  2914 => 1003,  2906 => 1000,  2894 => 995,  2884 => 992,  2876 => 989,  2864 => 984,  2854 => 981,  2846 => 978,  2834 => 973,  2824 => 970,  2816 => 967,  2803 => 959,  2796 => 957,  2790 => 953,  2782 => 951,  2777 => 950,  2772 => 949,  2767 => 947,  2762 => 946,  2760 => 945,  2757 => 944,  2753 => 943,  2746 => 941,  2741 => 939,  2729 => 934,  2719 => 931,  2711 => 928,  2706 => 926,  2696 => 921,  2691 => 919,  2682 => 915,  2677 => 913,  2668 => 909,  2661 => 907,  2652 => 903,  2647 => 901,  2638 => 897,  2631 => 895,  2622 => 891,  2615 => 889,  2608 => 884,  2603 => 883,  2600 => 882,  2595 => 881,  2590 => 880,  2585 => 878,  2582 => 877,  2577 => 876,  2573 => 875,  2565 => 872,  2560 => 870,  2551 => 864,  2545 => 863,  2539 => 862,  2532 => 858,  2526 => 857,  2522 => 856,  2513 => 849,  2505 => 847,  2500 => 846,  2495 => 845,  2490 => 843,  2485 => 842,  2483 => 841,  2480 => 840,  2476 => 839,  2471 => 837,  2459 => 832,  2452 => 830,  2449 => 829,  2442 => 828,  2437 => 827,  2433 => 826,  2429 => 825,  2421 => 822,  2416 => 820,  2403 => 814,  2396 => 812,  2393 => 811,  2386 => 810,  2381 => 809,  2377 => 808,  2369 => 805,  2357 => 800,  2350 => 798,  2347 => 797,  2340 => 796,  2335 => 795,  2331 => 794,  2327 => 793,  2319 => 790,  2314 => 788,  2307 => 783,  2302 => 782,  2299 => 781,  2294 => 779,  2291 => 778,  2289 => 777,  2286 => 776,  2281 => 775,  2278 => 774,  2273 => 772,  2270 => 771,  2268 => 770,  2261 => 768,  2255 => 764,  2250 => 763,  2247 => 762,  2242 => 760,  2239 => 759,  2237 => 758,  2234 => 757,  2229 => 756,  2226 => 755,  2221 => 753,  2218 => 752,  2216 => 751,  2209 => 749,  2203 => 745,  2198 => 744,  2195 => 743,  2190 => 741,  2187 => 740,  2185 => 739,  2182 => 738,  2177 => 737,  2174 => 736,  2169 => 734,  2166 => 733,  2164 => 732,  2157 => 730,  2152 => 728,  2139 => 722,  2132 => 720,  2129 => 719,  2122 => 718,  2117 => 717,  2113 => 716,  2109 => 715,  2101 => 712,  2096 => 709,  2090 => 708,  2088 => 707,  2085 => 706,  2077 => 704,  2072 => 703,  2067 => 702,  2062 => 700,  2057 => 699,  2055 => 698,  2052 => 697,  2048 => 696,  2041 => 694,  2036 => 691,  2030 => 690,  2028 => 689,  2025 => 688,  2017 => 686,  2012 => 685,  2007 => 684,  2002 => 682,  1997 => 681,  1995 => 680,  1992 => 679,  1988 => 678,  1981 => 676,  1969 => 671,  1962 => 669,  1959 => 668,  1952 => 667,  1947 => 666,  1943 => 665,  1935 => 662,  1923 => 657,  1916 => 655,  1913 => 654,  1906 => 653,  1901 => 652,  1897 => 651,  1893 => 650,  1885 => 647,  1879 => 643,  1874 => 642,  1871 => 641,  1866 => 639,  1863 => 638,  1861 => 637,  1858 => 636,  1853 => 635,  1850 => 634,  1845 => 632,  1842 => 631,  1840 => 630,  1833 => 628,  1827 => 624,  1822 => 623,  1819 => 622,  1814 => 620,  1811 => 619,  1809 => 618,  1806 => 617,  1801 => 616,  1798 => 615,  1793 => 613,  1790 => 612,  1788 => 611,  1781 => 609,  1772 => 605,  1765 => 603,  1760 => 601,  1747 => 595,  1740 => 593,  1737 => 592,  1730 => 591,  1725 => 590,  1721 => 589,  1717 => 588,  1709 => 585,  1704 => 582,  1698 => 581,  1696 => 580,  1690 => 579,  1683 => 577,  1677 => 573,  1672 => 572,  1669 => 571,  1664 => 569,  1661 => 568,  1659 => 567,  1656 => 566,  1651 => 565,  1648 => 564,  1643 => 562,  1640 => 561,  1638 => 560,  1631 => 558,  1626 => 555,  1620 => 554,  1617 => 553,  1609 => 550,  1604 => 549,  1599 => 548,  1594 => 546,  1589 => 545,  1587 => 544,  1584 => 543,  1580 => 542,  1574 => 541,  1562 => 536,  1555 => 534,  1552 => 533,  1545 => 532,  1540 => 531,  1536 => 530,  1528 => 527,  1522 => 523,  1517 => 522,  1514 => 521,  1509 => 519,  1506 => 518,  1504 => 517,  1501 => 516,  1496 => 515,  1493 => 514,  1488 => 512,  1485 => 511,  1483 => 510,  1478 => 508,  1472 => 504,  1467 => 503,  1464 => 502,  1459 => 500,  1456 => 499,  1454 => 498,  1451 => 497,  1446 => 496,  1443 => 495,  1438 => 493,  1435 => 492,  1433 => 491,  1426 => 489,  1420 => 485,  1415 => 484,  1412 => 483,  1407 => 481,  1404 => 480,  1402 => 479,  1399 => 478,  1394 => 477,  1391 => 476,  1386 => 474,  1383 => 473,  1381 => 472,  1374 => 470,  1369 => 468,  1361 => 462,  1356 => 461,  1353 => 460,  1348 => 459,  1343 => 458,  1338 => 456,  1335 => 455,  1330 => 454,  1326 => 453,  1322 => 452,  1314 => 449,  1307 => 444,  1302 => 443,  1299 => 442,  1294 => 441,  1289 => 440,  1284 => 438,  1281 => 437,  1276 => 436,  1272 => 435,  1268 => 434,  1260 => 431,  1254 => 427,  1249 => 426,  1246 => 425,  1241 => 423,  1238 => 422,  1236 => 421,  1233 => 420,  1228 => 419,  1225 => 418,  1220 => 416,  1217 => 415,  1215 => 414,  1210 => 412,  1205 => 410,  1199 => 406,  1193 => 405,  1191 => 404,  1185 => 403,  1178 => 401,  1173 => 398,  1167 => 397,  1165 => 396,  1159 => 395,  1152 => 393,  1147 => 391,  1140 => 386,  1135 => 385,  1132 => 384,  1127 => 382,  1124 => 381,  1122 => 380,  1119 => 379,  1114 => 378,  1111 => 377,  1106 => 375,  1103 => 374,  1101 => 373,  1094 => 371,  1088 => 367,  1083 => 366,  1080 => 365,  1075 => 363,  1072 => 362,  1070 => 361,  1067 => 360,  1062 => 359,  1059 => 358,  1054 => 356,  1051 => 355,  1049 => 354,  1042 => 352,  1037 => 350,  1031 => 346,  1025 => 344,  1023 => 343,  1017 => 342,  1010 => 340,  1005 => 337,  999 => 335,  997 => 334,  991 => 333,  984 => 331,  978 => 327,  973 => 326,  970 => 325,  965 => 323,  962 => 322,  960 => 321,  957 => 320,  952 => 319,  949 => 318,  944 => 316,  941 => 315,  939 => 314,  932 => 312,  927 => 310,  913 => 303,  906 => 301,  903 => 300,  896 => 299,  891 => 298,  887 => 297,  881 => 294,  869 => 289,  862 => 287,  859 => 286,  852 => 285,  847 => 284,  843 => 283,  837 => 280,  831 => 276,  826 => 275,  823 => 274,  818 => 272,  815 => 271,  813 => 270,  810 => 269,  805 => 268,  802 => 267,  797 => 265,  794 => 264,  792 => 263,  785 => 261,  773 => 256,  766 => 254,  763 => 253,  756 => 252,  751 => 251,  747 => 250,  739 => 247,  727 => 242,  720 => 240,  717 => 239,  710 => 238,  705 => 237,  701 => 236,  695 => 233,  683 => 228,  676 => 226,  673 => 225,  666 => 224,  661 => 223,  657 => 222,  651 => 219,  645 => 215,  639 => 214,  631 => 212,  623 => 210,  620 => 209,  616 => 208,  610 => 205,  600 => 198,  588 => 193,  581 => 191,  578 => 190,  571 => 189,  566 => 188,  562 => 187,  556 => 184,  551 => 181,  546 => 179,  538 => 177,  533 => 176,  528 => 175,  523 => 173,  518 => 172,  516 => 171,  513 => 170,  509 => 169,  503 => 168,  500 => 167,  498 => 166,  490 => 163,  483 => 161,  474 => 157,  467 => 155,  460 => 151,  454 => 150,  450 => 149,  441 => 145,  436 => 143,  431 => 140,  425 => 139,  423 => 138,  417 => 137,  412 => 135,  407 => 132,  401 => 131,  399 => 130,  393 => 129,  388 => 127,  379 => 123,  372 => 121,  367 => 118,  361 => 117,  359 => 116,  353 => 115,  348 => 113,  343 => 110,  337 => 109,  335 => 108,  329 => 107,  324 => 105,  319 => 102,  313 => 101,  311 => 100,  305 => 99,  300 => 97,  286 => 90,  279 => 88,  276 => 87,  269 => 86,  264 => 85,  260 => 84,  254 => 81,  241 => 75,  234 => 73,  231 => 72,  224 => 71,  219 => 70,  215 => 69,  209 => 66,  200 => 62,  195 => 60,  186 => 56,  181 => 54,  176 => 51,  170 => 50,  168 => 49,  162 => 48,  157 => 46,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
