<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a0a0d0eec2ed5c268f9f42ea493c17863e4f55f2b085f1af7d787ac6edac08ca extends Twig_Template
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
        $__internal_2daecd872f849bcd9430051e288670a296925959ddc9adc4c2a3ffcd58452225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daecd872f849bcd9430051e288670a296925959ddc9adc4c2a3ffcd58452225->enter($__internal_2daecd872f849bcd9430051e288670a296925959ddc9adc4c2a3ffcd58452225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2daecd872f849bcd9430051e288670a296925959ddc9adc4c2a3ffcd58452225->leave($__internal_2daecd872f849bcd9430051e288670a296925959ddc9adc4c2a3ffcd58452225_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
