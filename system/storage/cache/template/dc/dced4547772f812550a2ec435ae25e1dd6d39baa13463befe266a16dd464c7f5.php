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

/* dreamsstore/template/account/account.twig */
class __TwigTemplate_f02d8e8aa54512b948137cfd7c574f8d8d34b3fcbcba5d6e00035cc03928dd5d extends \Twig\Template
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
<div id=\"account-account\" class=\"container\">
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
    ";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "        <div class=\"container\">
            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 12
            echo ($context["success"] ?? null);
            echo "</div>
        </div>
    ";
        }
        // line 15
        echo "    <div class=\"container\">
        <div id=\"content\" class=\"account\">
            <h1 class=\"page-title\">";
        // line 17
        echo ($context["text_account"] ?? null);
        echo "</h1>
            <h2>";
        // line 18
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li><a href=\"";
        // line 20
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 21
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 22
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 23
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
            </ul>
            ";
        // line 25
        if (($context["credit_cards"] ?? null)) {
            // line 26
            echo "                <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
                <ul class=\"list-unstyled\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 29);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                </ul>
            ";
        }
        // line 33
        echo "            <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li><a href=\"";
        // line 35
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 36
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
                ";
        // line 37
        if (($context["reward"] ?? null)) {
            // line 38
            echo "                    <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
                ";
        }
        // line 40
        echo "                <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 41
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 42
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
            </ul>
            <h2>";
        // line 44
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li><a href=\"";
        // line 46
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
            </ul>
        </div>
    </div>
    ";
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        // line 54
        echo "</div>
";
        // line 55
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 55,  207 => 54,  205 => 53,  203 => 52,  201 => 51,  192 => 46,  187 => 44,  180 => 42,  174 => 41,  167 => 40,  159 => 38,  157 => 37,  151 => 36,  145 => 35,  139 => 33,  135 => 31,  124 => 29,  120 => 28,  114 => 26,  112 => 25,  105 => 23,  99 => 22,  93 => 21,  87 => 20,  82 => 18,  78 => 17,  74 => 15,  68 => 12,  65 => 11,  63 => 10,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/account/account.twig", "");
    }
}
