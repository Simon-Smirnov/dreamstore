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

/* dreamsstore/template/information/vacancy.twig */
class __TwigTemplate_71ac30ad9067e767340b89df9bc6d72a146338a417c3025eb608e0cf1b0f6164 extends \Twig\Template
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
<div id=\"information-vacancy\">
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
    <div class=\"vacancy\">
        <div class=\"container\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["title"] ?? null);
        echo "</h1>
            <div class=\"vacancy-inner\">
                <div class=\"vacancy-inner_info\">
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Oбязaнности:</h4>
                        <div class=\"vacancy-inner_info-item_block\">";
        // line 17
        echo ($context["responsibility"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Tребовaния:</h4>
                        <div class=\"vacancy-inner_info-item_block\">";
        // line 21
        echo ($context["requirements"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Уcловия:</h4>
                        <div class=\"vacancy-inner_info-item_block\">";
        // line 25
        echo ($context["conditions"] ?? null);
        echo "</div>
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Звоните по телефону:</h4>
                        <a href=\"tel:";
        // line 29
        echo ($context["telephone_for_link"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
                    </div>
                    <div class=\"vacancy-inner_info-item\">
                        <h4 class=\"vacancy-inner_info-item_title\">Присылайте резюме на почту:</h4>
                        <a href=\"mailto:";
        // line 33
        echo ($context["email_for_store"] ?? null);
        echo "\"></a>
                    </div>
                </div>
                <div class=\"vacancy-inner_form\">
                    <button class=\"modal__close modal__close--fixed\"></button>
                    <h3 class=\"modal__title\">Оставить отзыв</h3>
                    <form class=\"review_form\">
                        <div class=\"review_form-item\">
                            <input class=\"input-text\" name=\"name\" type=\"text\" placeholder=\"Имя\">
                            <div class=\"name-error error\"></div>
                        </div>
                        <div class=\"review_form-item\">
                            <input class=\"input-text\" name=\"phone\" type=\"text\" placeholder=\"Телефон\">
                            <div class=\"phone-error error\"></div>
                        </div>
                        <div class=\"review_form-item\">
                            <input class=\"input-text\" name=\"email\" type=\"email\" placeholder=\"Email\">
                            <div class=\"email-error error\"></div>
                        </div>
                        <div class=\"review_form-item\">
                            <textarea class=\"input-text\" name=\"review\" type=\"text\"
                                      placeholder=\"Текст отзыва\"></textarea>
                            <div class=\"review-error error\"></div>
                        </div>
                        <label class=\"modal__attach\">
                            <div>
                                <input class=\"modal__attach_input\" name=\"image[]\" data-num=\"1\" type=\"file\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\">
                                    <use xlink:href=\"/sprite.svg#icon_download\"></use>
                                </svg>
                            </div>
                            <p>Прикрепить файл</p>
                        </label>
                        <div class=\"modal__size\">
                            <span>Можно прикрепить до 3х фото (JPG, JPEG, PNG)<br> Весом до 5мб. А также 1 видео весом до 20 мб</span>
                            <div class=\"modal__size-images\"></div>
                            <div class=\"image-error error\"></div>
                        </div>
                        <div class=\"modal_grade\">
                            <span class=\"modal_grade-title\">Ваша оценка</span>
                            <span class=\"modal_grade-stars stars_grade\">
                        <label class=\"star\">
                            <input class=\"\" name=\"grade\" type=\"radio\" value=\"1\">
                            <svg class=\"fill\" data-grade=\"1\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                        </label>
                        <label class=\"star\">
                            <input class=\"\" name=\"grade\" type=\"radio\" value=\"2\">
                            <svg class=\"fill\" data-grade=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                        </label>
                        <label class=\"star\">
                            <input class=\"\" name=\"grade\" type=\"radio\" value=\"3\">
                            <svg class=\"fill\" data-grade=\"3\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                        </label>
                        <label class=\"star\">
                            <input class=\"\" name=\"grade\" type=\"radio\" value=\"4\">
                            <svg class=\"fill\" data-grade=\"4\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                        </label>
                        <label class=\"star\">
                            <input class=\"\" name=\"grade\" type=\"radio\" value=\"5\" checked=\"\">
                            <svg class=\"fill\" data-grade=\"5\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                        </label>
                    </span>
                        </div>
                        <div>
                            <label class=\"agree\">
                                <input class=\"input-checkbox\" name=\"agree\" type=\"checkbox\">
                                <span>Даю согласие на <a>обработку персональных данных</a></span>
                            </label>
                            <div class=\"agree-error error\"></div>
                        </div>
                        <button class=\"modal__btn btn btn-primary\">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 120
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/vacancy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 120,  103 => 33,  94 => 29,  87 => 25,  80 => 21,  73 => 17,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/vacancy.twig", "");
    }
}