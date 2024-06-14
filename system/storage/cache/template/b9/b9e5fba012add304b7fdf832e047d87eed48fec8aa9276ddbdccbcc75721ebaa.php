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
class __TwigTemplate_8b1f48e2d6a491703609adf021214b04788fa319cbbf056545aa9f89454c40cb extends \Twig\Template
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
<div id=\"error-not-found\" class=\"error_page\">
    ";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "    <div class=\"container\">
        <div id=\"content\" class=\"\">
            ";
        // line 13
        echo "            <h4 class=\"error_page_message\">Ошибка</h4>
            <h2 class=\"error_page_number\">404</h2>
            <p class=\"error_page_text\">";
        // line 15
        echo ($context["text_error"] ?? null);
        echo "</p>
            <a href=\"";
        // line 16
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary 404_btn\">";
        echo ($context["text_error_btn"] ?? null);
        echo "</a>
        </div>
    </div>
</div>
";
        // line 20
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
        return array (  75 => 20,  66 => 16,  62 => 15,  58 => 13,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/error/not_found.twig", "");
    }
}
