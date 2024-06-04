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

/* common/column_left.twig */
class __TwigTemplate_0eb3eb7bf211de8e7a52fc65f3758a53dd722dcfe3851e45568a878d06408880 extends \Twig\Template
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
        echo "<nav id=\"column-left\" class=\"";
        echo ((($context["menu_collapsed"] ?? null)) ? ("collapsed") : (""));
        echo "\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span> <span>";
        // line 2
        echo ($context["text_navigation"] ?? null);
        echo "</span> <button class=\"btn btn-default\"><i class=\"fa fa-chevron-left\"></i></button></div>
  <ul id=\"menu\">
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "    <li id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 6);
            echo "\">
        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7);
                echo "\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 7);
                echo " fw\"></i> <span class=\"menu-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 7);
                echo "</span></a>";
            } else {
                echo "<a href=\"#collapse";
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa ";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 7);
                echo " fw\"></i> <span class=\"menu-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 7);
                echo "</span></a>";
            }
            // line 8
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 8)) {
                // line 9
                echo "          <ul id=\"collapse";
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse\">
            ";
                // line 10
                $context["j"] = 0;
                // line 11
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 12
                    echo "              <li>";
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 12)) {
                        // line 13
                        echo "                  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 13);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 13);
                        echo "</a>
                ";
                    } else {
                        // line 15
                        echo "                  <a href=\"#collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 15);
                        echo "</a>
                ";
                    }
                    // line 17
                    echo "
                ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                  <ul id=\"collapse";
                        echo ($context["i"] ?? null);
                        echo "-";
                        echo ($context["j"] ?? null);
                        echo "\" class=\"collapse\">
                    ";
                        // line 20
                        $context["k"] = 0;
                        // line 21
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 22
                            echo "                      <li>";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 22)) {
                                // line 23
                                echo "                          <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 23);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 23);
                                echo "</a>
                        ";
                            } else {
                                // line 25
                                echo "                          <a href=\"#collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo twig_get_attribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 25);
                                echo "</a>
                        ";
                            }
                            // line 27
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 27)) {
                                // line 28
                                echo "                          <ul id=\"collapse-";
                                echo ($context["i"] ?? null);
                                echo "-";
                                echo ($context["j"] ?? null);
                                echo "-";
                                echo ($context["k"] ?? null);
                                echo "\" class=\"collapse\">
                            ";
                                // line 29
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 29));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 30
                                    echo "                              <li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 30);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 30);
                                    echo "</a></li>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 32
                                echo "                          </ul>
                        ";
                            }
                            // line 33
                            echo "</li>
                      ";
                            // line 34
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 35
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "                  </ul>
                ";
                    }
                    // line 37
                    echo " </li>
              ";
                    // line 38
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 39
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "          </ul>
        ";
            }
            // line 42
            echo "      </li>
    ";
            // line 43
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 49
        echo ($context["text_complete_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 51
        echo ($context["complete_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["complete_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["complete_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 55
        echo ($context["text_processing_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 57
        echo ($context["processing_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["processing_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["processing_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 61
        echo ($context["text_other_status"] ?? null);
        echo " <span class=\"pull-right\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 63
        echo ($context["other_status"] ?? null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo ($context["other_status"] ?? null);
        echo "%\"> <span class=\"sr-only\">";
        echo ($context["other_status"] ?? null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 63,  269 => 61,  258 => 57,  251 => 55,  240 => 51,  233 => 49,  227 => 45,  221 => 44,  219 => 43,  216 => 42,  212 => 40,  206 => 39,  204 => 38,  201 => 37,  197 => 36,  191 => 35,  189 => 34,  186 => 33,  182 => 32,  171 => 30,  167 => 29,  158 => 28,  155 => 27,  143 => 25,  135 => 23,  132 => 22,  127 => 21,  125 => 20,  118 => 19,  116 => 18,  113 => 17,  103 => 15,  95 => 13,  92 => 12,  87 => 11,  85 => 10,  80 => 9,  77 => 8,  59 => 7,  54 => 6,  49 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/column_left.twig", "");
    }
}
