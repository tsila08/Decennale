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
        $__internal_770ae3bff48080e8bc39f15edf18cd8762d34b1868dae9de1083514e051c2123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770ae3bff48080e8bc39f15edf18cd8762d34b1868dae9de1083514e051c2123->enter($__internal_770ae3bff48080e8bc39f15edf18cd8762d34b1868dae9de1083514e051c2123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminDecennaleBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_770ae3bff48080e8bc39f15edf18cd8762d34b1868dae9de1083514e051c2123->leave($__internal_770ae3bff48080e8bc39f15edf18cd8762d34b1868dae9de1083514e051c2123_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebb0d8c7ba502c20d8552400b374a2d4b93b827ab665e3e22f602179ad20438a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb0d8c7ba502c20d8552400b374a2d4b93b827ab665e3e22f602179ad20438a->enter($__internal_ebb0d8c7ba502c20d8552400b374a2d4b93b827ab665e3e22f602179ad20438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDecennaleBundle:Default:index.html.twig"));

        // line 6
        echo "
";
        
        $__internal_ebb0d8c7ba502c20d8552400b374a2d4b93b827ab665e3e22f602179ad20438a->leave($__internal_ebb0d8c7ba502c20d8552400b374a2d4b93b827ab665e3e22f602179ad20438a_prof);

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
