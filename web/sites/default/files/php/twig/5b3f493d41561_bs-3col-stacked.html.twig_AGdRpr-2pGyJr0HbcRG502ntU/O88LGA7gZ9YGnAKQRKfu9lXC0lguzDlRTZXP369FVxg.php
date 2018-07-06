<?php

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-stacked.html.twig */
class __TwigTemplate_3839ca0b167786709f4be9ac4f1e041eeeb2e5929b84b36a6fad4bebd3c67184 extends Twig_Template
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
        $tags = array("if" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 23
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 26
        if ($this->getAttribute(($context["top"] ?? null), "content", array())) {
            // line 27
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ($this->getAttribute(($context["left"] ?? null), "content", array())) {
            // line 33
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["left"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["left"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["left"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["left"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if ($this->getAttribute(($context["middle"] ?? null), "content", array())) {
            // line 39
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        if ($this->getAttribute(($context["right"] ?? null), "content", array())) {
            // line 45
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["right"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["right"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["right"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["right"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ($this->getAttribute(($context["bottom"] ?? null), "content", array())) {
            // line 51
            echo "  <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "content", array()), "html", null, true));
            echo "
  </";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["bottom"] ?? null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 55
        echo "
</";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  151 => 55,  146 => 53,  142 => 52,  136 => 51,  134 => 50,  131 => 49,  126 => 47,  122 => 46,  116 => 45,  114 => 44,  111 => 43,  106 => 41,  102 => 40,  96 => 39,  94 => 38,  91 => 37,  86 => 35,  82 => 34,  76 => 33,  74 => 32,  71 => 31,  66 => 29,  62 => 28,  56 => 27,  54 => 26,  49 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-stacked.html.twig", "/var/www/html/gbc.goodwillbaptist.org/web/modules/contrib/bootstrap_layouts/templates/3.0.0/bs-3col-stacked.html.twig");
    }
}
