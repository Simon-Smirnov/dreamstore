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

/* dreamsstore/template/information/reviews.twig */
class __TwigTemplate_383d8984edeae206ed0153ba39f079348d024c0e13b96362a3dd3a849cbf39ec extends \Twig\Template
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
<div id=\"information-reviews\">
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
    <div class=\"reviews\">
        <div class=\"container\">
            <h1 class=\"page-title\">";
        // line 12
        echo ($context["title"] ?? null);
        echo "</h1>
            <div class=\"reviews_inner\" data-tabs-parent>
                <div class=\"reviews_inner-tabs\">
                    <ul class=\"reviews_inner-tabs_list\">
                        <li class=\"reviews_inner-tabs_item grow right\"><a class=\"reviews_inner-tabs_item-link active\"
                                                                          data-content=\"site\" data-tab-target=\"tab-1\">С
                                сайта</a></li>
                        <li class=\"reviews_inner-tabs_item middle\" data-content=\"yandex\"><a
                                    class=\"reviews_inner-tabs_item-link\" data-content=\"yandex\" data-tab-target=\"tab-2\">С
                                яндекса</a></li>
                        <li class=\"reviews_inner-tabs_item grow left\" data-content=\"social\"><a
                                    class=\"reviews_inner-tabs_item-link\" data-content=\"social\" data-tab-target=\"tab-3\">Из
                                соцсетей</a></li>
                    </ul>
                </div>
                <div class=\"reviews_inner-content\">
                    <ul>
                        <li class=\"reviews_inner-content_item open\" data-content=\"site\" data-tab=\"tab-1\">
                            <div class=\"reviews_site\">
                                <ul class=\"reviews_site-list\">
                                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 33
            echo "                                        <li class=\"reviews_site-list_item\">
                                            <div class=\"reviews_site-list_item-title\">
                                                <div class=\"reviews_site-list_item-title_initial\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["review"], "initial", [], "any", false, false, false, 35);
            echo "</div>
                                                <div class=\"reviews_site-list_item-title_block\">
                                                    <h4 class=\"reviews_site-list_item-title_block-name\">";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 37);
            echo "</h4>
                                                    <ul class=\"reviews_site-list_item-title_block-grade\">
                                                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "grades", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 40
                echo "                                                            <li>
                                                                <svg class=\"icon-svg-star ";
                // line 41
                echo $context["grade"];
                echo "\"
                                                                     xmlns=\"http://www.w3.org/2000/svg\">
                                                                    <use xlink:href=\"/sprite.svg#icon_star\"></use>
                                                                </svg>
                                                            </li>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                                    </ul>
                                                </div>
                                                <div class=\"reviews_site-list_item-title_date\">
                                                    ";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 50);
            echo "
                                                </div>
                                            </div>
                                            <div class=\"reviews_site-list_item-text\">";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 53);
            echo "</div>
                                            <div class=\"reviews_site-list_item-images\">
                                                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "images", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 56
                echo "                                                    <picture>
                                                        <source srcset=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["image"], "webp", [], "any", false, false, false, 57);
                echo "\">
                                                        <img class=\"catalog-inner_link-img\"
                                                             src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["image"], "default", [], "any", false, false, false, 59);
                echo "\" loading=\"lazy\">
                                                    </picture>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                            </div>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </ul>
                                <div class=\"reviews_site-block\">
                                    <div class=\"reviews_site-block_grade\">
                                        <div class=\"reviews_site-block_grade-average\">
                                            <h4>";
        // line 69
        echo ($context["annual_grade"] ?? null);
        echo "</h4>
                                            <p>На основании<br>";
        // line 70
        echo ($context["count_reviews"] ?? null);
        echo " отзывов</p>
                                        </div>
                                        <ul class=\"reviews_site-block_grade-lines\">
                                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["general_grades"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["general_grade"]) {
            // line 74
            echo "                                                <li class=\"reviews_site-block_grade-lines_item\">
                                                    <div class=\"reviews_site-block_grade-lines_number\">";
            // line 75
            echo $context["key"];
            echo "</div>
                                                    <div class=\"reviews_site-block_grade-lines_line ";
            // line 76
            echo ($context["count"] ?? null);
            echo "\">
                                                        <div class=\"reviews_site-block_grade-lines_line-empty\">
                                                            <div class=\"reviews_site-block_grade-lines_line-full\"
                                                                 style=\"width: ";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["general_grade"], "percent", [], "any", false, false, false, 79);
            echo "%\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"reviews_site-block_grade-lines_percent\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["general_grade"], "percent", [], "any", false, false, false, 82);
            echo "
                                                        %
                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['general_grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                        </ul>
                                    </div>
                                    <div class=\"reviews_site-block_btn\">
                                        <a class=\"btn btn-primary\" data-modal=\"review\">Оставить отзыв</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"reviews_inner-content_item\" data-content=\"yandex\" data-tab=\"tab-2\"></li>
                        <li class=\"reviews_inner-content_item\" data-content=\"social\" data-tab=\"tab-3\"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal\" data-modal-type=\"review\" hidden>
        <div class=\"modal__content\">
            <label class=\"modal__box\">
                <button class=\"modal__close modal__close--fixed\"></button>
                <h3 class=\"modal__title\">Оставить отзыв</h3>
                <form class=\"review_form\">
                    <input class=\"input-text\" name=\"name\" type=\"text\" placeholder=\"Имя\">
                    <input class=\"input-text\" name=\"phone\" type=\"text\" placeholder=\"Телефон\">
                    <input class=\"input-text\" name=\"email\" type=\"email\" placeholder=\"Email\">
                    <textarea class=\"input-text\" name=\"review\" type=\"text\" placeholder=\"Текст отзыва\"></textarea>
                    <label class=\"modal__attach\">
                        <div>
                            <input id=\"modal__attach_input\" name=\"file\" type=\"file\" placeholder=\"Прикрепить файл\"
                                   multiple>
                            <svg xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_download\"></use>
                            </svg>
                        </div>
                        <p>Прикрепить файл</p>
                    </label>
                    <div id=\"fileList\"></div>
                    <div class=\"modal__size\">
                        <span>Можно прикрепить до 3х фото (JPG, JPEG, PNG)<br> Весом до 5мб. А также 1 видео весом до 20 мб</span>
                        <div class=\"images\">
                            <img src=\"\">
                        </div>
                    </div>
                    <div class=\"modal_grade\">
                        <span class=\"modal_grade-title\">Ваша оценка</span>
                        <span class=\"modal_grade-stars\">
                            <svg class=\"fill\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                            <svg class=\"fill\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                            <svg class=\"fill\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                            <svg class=\"fill\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                            <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\">
                                <use xlink:href=\"/sprite.svg#icon_star\"></use>
                            </svg>
                        </span>
                    </div>
                    <div>
                        <label class=\"agree\">
                            <input class=\"input-checkbox\" name=\"agree\" type=\"checkbox\">
                            <span>Даю согласие на <a>обработку персональных данных</a></span>
                        </label>
                    </div>
                </form>

                <button class=\"modal__btn btn btn-primary\">Отправить</button>
        </div>
    </div>
</div>
</div>
";
        // line 162
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "dreamsstore/template/information/reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 162,  220 => 87,  209 => 82,  203 => 79,  197 => 76,  193 => 75,  190 => 74,  186 => 73,  180 => 70,  176 => 69,  170 => 65,  162 => 62,  153 => 59,  148 => 57,  145 => 56,  141 => 55,  136 => 53,  130 => 50,  125 => 47,  113 => 41,  110 => 40,  106 => 39,  101 => 37,  96 => 35,  92 => 33,  88 => 32,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamsstore/template/information/reviews.twig", "");
    }
}
