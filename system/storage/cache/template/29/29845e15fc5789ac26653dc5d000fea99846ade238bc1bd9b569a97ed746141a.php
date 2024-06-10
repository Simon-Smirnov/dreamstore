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

/* dreamsstore/template/information/aboutcompany.twig */
class __TwigTemplate_e76566061f499558811666b28051810cf35e36358b8563e8a126cbd87ad80e7d extends \Twig\Template
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
<div id=\"information-information\">
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
    <div id=\"content\">
        <div class=\"container\"><h1 class=\"page-title\">";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
        ";
        // line 12
        echo ($context["description"] ?? null);
        echo "
        <section class=\"about_company\">
            <div class=\"container\">
                <div class=\"about_company-inner\">
                    <div class=\"about_company-inner_block\">
                        <h3 class=\"about_company-inner_block-title\">Премиальное постельное белье для вашего дома</h3>
                        <p class=\"about_company-inner_block-text\">Dreams Store - это интернет-магазин постельного белья
                            и домашнего текстиля, который поможет вам создать уют, теплоту и необходимую атмосферу в
                            вашем доме. Мы помогаем людям сделать дом местом для отдыха, окружив себя качественным,
                            стильным текстилем и товарами для дома</p>
                        <a class=\"about_company-inner_block-btn btn btn-primary\">Подробнее о компании</a>
                    </div>
                    <div class=\"about_company-inner_images\">
                        <div class=\"about_company-inner_images-one\">
                            <img src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/aboutcompany/aboutcompany_1.webp\">
                        </div>
                        <div class=\"about_company-inner_images-two\">
                            <img src=\"/catalog/view/theme/dreamsstore/resources/dev/assets/images/aboutcompany/aboutcompany_2.webp\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"advatages_to_buy\">
            <div></div>
        </section>

        ";
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        // line 43
        echo "    </div>
</div>
";
        // line 45
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/aboutcompany.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  104 => 43,  102 => 42,  100 => 41,  98 => 40,  68 => 12,  64 => 11,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/aboutcompany.twig", "");
    }
}
