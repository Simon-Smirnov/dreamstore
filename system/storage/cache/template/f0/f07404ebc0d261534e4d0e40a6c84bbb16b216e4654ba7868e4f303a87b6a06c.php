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
class __TwigTemplate_7a301ac225ea6e3dda9a452ffa057357e6f7c1fc3ac3e41e5f9f71dfbbfdd515 extends \Twig\Template
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
                    <img class=\"advantages-item_img\" src=\"";
        // line 31
        echo $this->env->getAssets();
        echo "/assets/images/advantages/advantages-1.webp\">
                    <h3 class=\"advantages-item_title\">Высокое качество материалов и тактильно приятные текстуры</h3>
                    <p class=\"advantages-item_text\">Изготавливаем текстиль из премиальных тканей: тенселя, египетского и королевского хлопка. Это нежный, шелковистый материал “как в отеле”, что невозможно вылезти из кровати</p>
                </div>
                <div class=\"advantages-item\">
                    <img class=\"advantages-item_img\" src=\"";
        // line 36
        echo $this->env->getAssets();
        echo "/assets/images/advantages/advantages-2.webp\">
                    <h3 class=\"advantages-item_title\">Возможность заказа индивидуального размера</h3>
                    <p class=\"advantages-item_text\">Шьем постельное белье и домашний текстиль любого размера с необходимым вам количеством предметов под любой запрос</p>
                </div>
                <div class=\"advantages-item\">
                    <img class=\"advantages-item_img\" src=\"";
        // line 41
        echo $this->env->getAssets();
        echo "/assets/images/advantages/advantages-3.webp\">
                    <h3 class=\"advantages-item_title\">Широкий выбор материалов и цветовая гамма</h3>
                    <p class=\"advantages-item_text\">Имеем более 40 расцветок постельных тканей, большая коллекция портьерных, тюлевых и покрывальных тканей под любой интерьер</p>
                </div>
                <div class=\"advantages-item\">
                    <img class=\"advantages-item_img\" src=\"";
        // line 46
        echo $this->env->getAssets();
        echo "/assets/images/advantages/advantages-4.webp\">
                    <h3 class=\"advantages-item_title\">Премиум пошив и персональная вышивка</h3>
                    <p class=\"advantages-item_text\">Уделяем огромное внимание деталям и тщательно следим за каждым швом. Для эксклюзивного подарка делаем индивидуальную вышивку инициалов или узор любой сложности</p>
                </div>
            </div>
        </div>
    </section>
</div>
";
        // line 54
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
        return array (  129 => 54,  118 => 46,  110 => 41,  102 => 36,  94 => 31,  84 => 23,  80 => 15,  73 => 14,  65 => 12,  55 => 10,  53 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/common/home.twig", "");
    }
}
