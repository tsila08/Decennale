<?php

/* AdminDecennaleBundle:Default:index.html.twig */
class __TwigTemplate_3310a10bde18b76e4e382e6d19845156059bffbd09ce40434a0aa1c1e88fee18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminDecennaleBundle::layout.html.twig", "AdminDecennaleBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminDecennaleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee43cf9cdbb28ac5a9d8f796fb1556be28206905991ad6ff0e90ec946bdc8018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee43cf9cdbb28ac5a9d8f796fb1556be28206905991ad6ff0e90ec946bdc8018->enter($__internal_ee43cf9cdbb28ac5a9d8f796fb1556be28206905991ad6ff0e90ec946bdc8018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminDecennaleBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee43cf9cdbb28ac5a9d8f796fb1556be28206905991ad6ff0e90ec946bdc8018->leave($__internal_ee43cf9cdbb28ac5a9d8f796fb1556be28206905991ad6ff0e90ec946bdc8018_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d950518697eb542f18d19bfdbbe823a740c1608686c030613c934667f2dfd816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d950518697eb542f18d19bfdbbe823a740c1608686c030613c934667f2dfd816->enter($__internal_d950518697eb542f18d19bfdbbe823a740c1608686c030613c934667f2dfd816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDecennaleBundle:Default:index.html.twig"));

        // line 6
        echo "
";
        
        $__internal_d950518697eb542f18d19bfdbbe823a740c1608686c030613c934667f2dfd816->leave($__internal_d950518697eb542f18d19bfdbbe823a740c1608686c030613c934667f2dfd816_prof);

    }

    public function getTemplateName()
    {
        return "AdminDecennaleBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'AdminDecennaleBundle::layout.html.twig' %}


{% block body %}

{% endblock%} 
", "AdminDecennaleBundle:Default:index.html.twig", "/var/www/projet/decennale/src/Admin/DecennaleBundle/Resources/views/Default/index.html.twig");
    }
}
