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

/* dreamsstore/template/information/loyalty.twig */
class __TwigTemplate_6413887a7dc4abeb8823b28b43f2069d31735e2a2e2c93cbed5c726b9166083c extends \Twig\Template
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
    <div id=\"content\" class=\"loyalty\">
        <div class=\"container\"><h1 class=\"page-title\">";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
        <section class=\"loyalty_announcement\">
            <div class=\"container\">
                <div class=\"loyalty_announcement-inner\">
                    <ul class=\"loyalty_announcement-list\">
                        <li>1. Совершайте покупки на нашем сайте.</li>
                        <li>2. Получаете на свой счет #% бонусов от суммы покупки.</li>
                        <li>3. Оплачивайте бонусами при совершении следующих покупок.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class=\"loyalty-answers\">
            <div class=\"container\">
                <div class=\"loyalty-answers_inner\">
                    <h2 class=\"section-title\">Частые вопросы о бонусной системе</h2>
                    <ul class=\"faq-content_list loyalty-answers_list dropdown-list\">
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loyalties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["loyalty"]) {
            // line 29
            echo "                            <li class=\"faq-content_list-item dropdown-list-item\">
                                <h4 class=\"faq-content_list-item_title loyalty-answers_list-item_title\">
                                    <span>";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["loyalty"], "title", [], "any", false, false, false, 31);
            echo "</span>
                                    <span class=\"faq-content_list-item_title-svg  loyalty-answers_list-item_title-svg\">
                                        <svg class=\"faq-svg\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                            <use xlink:href=\"/sprite.svg#icon_arrow_right\"></use>
                                        </svg>
                                    </span>
                                </h4>
                                <div class=\"faq-content_list-item_answer loyalty-answers_list-item_answer dropdown-list-description\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["loyalty"], "description", [], "any", false, false, false, 39);
            echo "</div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loyalty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </ul>
                </div>
            </div>
        </section>

        ";
        // line 48
        echo "        ";
        // line 49
        echo "        ";
        // line 50
        echo "        ";
        // line 51
        echo "    </div>
</div>
";
        // line 53
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/loyalty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  125 => 51,  123 => 50,  121 => 49,  119 => 48,  112 => 42,  103 => 39,  92 => 31,  88 => 29,  84 => 28,  64 => 11,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/loyalty.twig", "");
    }
}
