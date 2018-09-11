<?php

/* PrestaShopBundle:Admin/Module:tab-modules-list.html.twig */
class __TwigTemplate_8788d453af50e08af347746653c738fb30da19fa026daa40b01ca0b8aedefaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig"));

        // line 25
        if ((array_key_exists("modulesList", $context) &&  !twig_test_empty(($context["modulesList"] ?? $this->getContext($context, "modulesList"))))) {
            // line 26
            echo "<div class=\"row row-margin-bottom\">
  <div class=\"col-lg-12\">
    <ul class=\"nav nav-pills\">
      ";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", array())) > 0)) {
                // line 30
                echo "      <li class=\"active\">
        <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
          ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not Installed", array()), "html", null, true);
                echo "
        </a>
      </li>
      ";
            }
            // line 36
            echo "
      ";
            // line 37
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "installed", array())) > 0)) {
                // line 38
                echo "        <li ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", array())) == 0)) {
                    echo "class=\"active\"";
                }
                echo ">
        <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
          ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed", array()), "html", null, true);
                echo "
        </a>
        </li>
      ";
            }
            // line 44
            echo "    </ul>
  </div>
</div>
<div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
  ";
            // line 48
            if (($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", array())))) {
                // line 49
                echo "  <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
    <table id=\"tab_modules_list_not_installed\" class=\"table\">
      ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 52
                    echo "        ";
                    echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig", array("module" => $context["module"]));
                    echo "
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "    </table>
  </div>
  ";
            }
            // line 57
            echo "  ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "installed", array())) > 0)) {
                // line 58
                echo "  <div class=\"tab-pane ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "notInstalled", array())) == 0)) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\">
    <table id=\"tab_modules_list_installed\" class=\"table\">
      ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? $this->getContext($context, "modulesList")), "installed", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 61
                    echo "        ";
                    echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig", array("module" => $context["module"]));
                    echo "
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    </table>
  </div>
  ";
            }
            // line 66
            echo "</div>
";
        }
        // line 68
        echo "<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "&amp;utm_content=download";
        if (array_key_exists("adminListFromSource", $context)) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, ($context["adminListFromSource"] ?? $this->getContext($context, "adminListFromSource")), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More modules on addons.prestashop.com", array()), "html", null, true);
        echo "</a>
  </p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 70,  170 => 68,  166 => 66,  161 => 63,  144 => 61,  127 => 60,  119 => 58,  116 => 57,  111 => 54,  94 => 52,  77 => 51,  73 => 49,  71 => 48,  65 => 44,  58 => 40,  50 => 38,  48 => 37,  45 => 36,  38 => 32,  34 => 30,  32 => 29,  27 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% if modulesList is defined and modulesList is not empty %}
<div class=\"row row-margin-bottom\">
  <div class=\"col-lg-12\">
    <ul class=\"nav nav-pills\">
      {% if modulesList.notInstalled|length > 0 %}
      <li class=\"active\">
        <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
          {{ 'Not Installed'|trans({}) }}
        </a>
      </li>
      {% endif %}

      {% if modulesList.installed|length > 0 %}
        <li {% if modulesList.notInstalled|length == 0 %}class=\"active\"{% endif %}>
        <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
          {{ 'Installed'|trans({}) }}
        </a>
        </li>
      {% endif %}
    </ul>
  </div>
</div>
<div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
  {% if modulesList.notInstalled is defined and modulesList.notInstalled is not empty %}
  <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
    <table id=\"tab_modules_list_not_installed\" class=\"table\">
      {% for module in modulesList.notInstalled %}
        {{ include('PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig',{'module': module}) }}
      {% endfor %}
    </table>
  </div>
  {% endif %}
  {% if modulesList.installed|length > 0 %}
  <div class=\"tab-pane {% if modulesList.notInstalled|length == 0 %}active{% endif %}\" id=\"tab_modules_list_installed\">
    <table id=\"tab_modules_list_installed\" class=\"table\">
      {% for module in modulesList.installed %}
        {{ include('PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig',{'module': module}) }}
      {% endfor %}
    </table>
  </div>
  {% endif %}
</div>
{% endif %}
<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-{{ app.request.locale }}&amp;utm_content=download{% if adminListFromSource is defined %}&amp;utm_term={{ adminListFromSource }}{% endif %}\" onclick=\"return !window.open(this.href);\">{{ 'More modules on addons.prestashop.com'|trans({}) }}</a>
  </p>
</div>
", "PrestaShopBundle:Admin/Module:tab-modules-list.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Module/tab-modules-list.html.twig");
    }
}
