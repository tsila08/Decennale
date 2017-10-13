<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ab8d2eb206b41eae53312a45c0c8ea89ba41ff349cdafa4325b7da87537a9cd6 extends Twig_Template
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
        $__internal_7c2f4d713d2c964f85c44ca14ab8a86b1f2f1fa98ecf7dfb0ebbe482b3a28e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2f4d713d2c964f85c44ca14ab8a86b1f2f1fa98ecf7dfb0ebbe482b3a28e56->enter($__internal_7c2f4d713d2c964f85c44ca14ab8a86b1f2f1fa98ecf7dfb0ebbe482b3a28e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c2f4d713d2c964f85c44ca14ab8a86b1f2f1fa98ecf7dfb0ebbe482b3a28e56->leave($__internal_7c2f4d713d2c964f85c44ca14ab8a86b1f2f1fa98ecf7dfb0ebbe482b3a28e56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
