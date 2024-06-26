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

/* dreamsstore/template/information/models.twig */
class __TwigTemplate_9b08249238d9d96b4c79f33f308ef37e2256f30c7990e6f07988f542e53ebdb3 extends \Twig\Template
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
        if (($context["models"] ?? null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["models"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 3
                echo "        <div class=\"atelier-models__item\" data-atelier-model=\"";
                echo twig_get_attribute($this->env, $this->source, $context["model"], "product_id", [], "any", false, false, false, 3);
                echo "\">
            <picture>
                <source srcset=\"";
                // line 5
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["model"], "thumb", [], "any", false, false, false, 5), "webp", [], "any", false, false, false, 5);
                echo "\">
                <img class=\"atelier-models__image\" alt=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 6);
                echo "\"
                     title=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 7);
                echo "\"
                     src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["model"], "thumb", [], "any", false, false, false, 8), "default", [], "any", false, false, false, 8);
                echo "\" loading=\"lazy\">
            </picture>
            <h4 class=\"atelier-models__title\">";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 10);
                echo "</h4>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/models.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/models.twig", "");
    }
}
