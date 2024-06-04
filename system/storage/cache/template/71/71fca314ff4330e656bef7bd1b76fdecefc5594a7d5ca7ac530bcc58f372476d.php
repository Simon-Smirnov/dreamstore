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

/* dreamsstore/template/common/home.twig */
class __TwigTemplate_03b673ee9477417df1c8d3044ca928624438f254093b69db774f98afa6d15909 extends \Twig\Template
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
<div id=\"common-home\">
    <section class=\"main_slider\">
        <div class=\"container\">
            <div class=\"main_slider-inner\">
                <div class=\"swiper-wrapper swiper-wrapper_main\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["main_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["main_banner"]) {
            // line 8
            echo "                        <div class=\"swiper-slide\">
                            ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["main_banner"], "link", [], "any", false, false, false, 9)) {
                // line 10
                echo "                                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["main_banner"], "link", [], "any", false, false, false, 10);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["main_banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["main_banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\"/></a>
                            ";
            } else {
                // line 12
                echo "                                <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["main_banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["main_banner"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive\"/>
                            ";
            }
            // line 14
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  
                </div>
                ";
        // line 23
        echo "                <div class=\"main_slider-pagination\"></div>
            </div>
        </div>
    </section>
    <section class=\"advantages\">
        <div class=\"container\">
            <div class=\"advantages-inner\">
                <div class=\"advantages-item\">
                    <h3></h3>
                </div>
            </div>
        </div>
    </section>
</div>
";
        // line 37
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  84 => 23,  80 => 15,  73 => 14,  65 => 12,  55 => 10,  53 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/home.twig", "");
    }
}
