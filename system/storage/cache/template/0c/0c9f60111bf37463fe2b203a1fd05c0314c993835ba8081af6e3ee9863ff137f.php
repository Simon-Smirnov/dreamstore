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

/* dreamsstore/template/error/not_found.twig */
class __TwigTemplate_b10ad03cb8a07701462cfc89ffeb10ff3804099b06fa894e94d46aff85d2277a extends \Twig\Template
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
<div id=\"error-not-found\">
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
    </div>
    <div class=\"container\">
        <div id=\"content\" class=\"\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 13
        echo ($context["text_error"] ?? null);
        echo "</p>
            <div class=\"buttons clearfix\">
                <div class=\"pull-right\"><a href=\"";
        // line 15
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["text_error_btn"] ?? null);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 21
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  74 => 15,  69 => 13,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/error/not_found.twig", "");
    }
}
