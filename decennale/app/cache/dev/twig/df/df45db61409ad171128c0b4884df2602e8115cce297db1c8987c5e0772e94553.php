<?php

/* AdminDecennaleBundle:Default:index.html.twig */
class __TwigTemplate_59220f4dc60f57e33d5c355656cfa88071045526af6bdad55ca9ef19370734e2 extends Twig_Template
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
        $__internal_602614dc35a4f86a0cd2a3d4160b1a6cb4d8b47b96cbc221c2975b1abd0b21f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602614dc35a4f86a0cd2a3d4160b1a6cb4d8b47b96cbc221c2975b1abd0b21f6->enter($__internal_602614dc35a4f86a0cd2a3d4160b1a6cb4d8b47b96cbc221c2975b1abd0b21f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminDecennaleBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602614dc35a4f86a0cd2a3d4160b1a6cb4d8b47b96cbc221c2975b1abd0b21f6->leave($__internal_602614dc35a4f86a0cd2a3d4160b1a6cb4d8b47b96cbc221c2975b1abd0b21f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f0a43b4fe3c89fe896bd991316732d8dc8dd75fa62a2e2e249795ee27db752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f0a43b4fe3c89fe896bd991316732d8dc8dd75fa62a2e2e249795ee27db752->enter($__internal_a3f0a43b4fe3c89fe896bd991316732d8dc8dd75fa62a2e2e249795ee27db752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDecennaleBundle:Default:index.html.twig"));

        // line 6
        echo "
";
        
        $__internal_a3f0a43b4fe3c89fe896bd991316732d8dc8dd75fa62a2e2e249795ee27db752->leave($__internal_a3f0a43b4fe3c89fe896bd991316732d8dc8dd75fa62a2e2e249795ee27db752_prof);

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
