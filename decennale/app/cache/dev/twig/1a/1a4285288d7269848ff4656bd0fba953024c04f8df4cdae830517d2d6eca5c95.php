<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6147a6069f9588672e5c5ca37d17c448b007210d283ef3770cf79c66c7cd98c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fe20240cf401aa382bff16cdb9e362fa0882629cbc24cc156bf252197b2f045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe20240cf401aa382bff16cdb9e362fa0882629cbc24cc156bf252197b2f045->enter($__internal_4fe20240cf401aa382bff16cdb9e362fa0882629cbc24cc156bf252197b2f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe20240cf401aa382bff16cdb9e362fa0882629cbc24cc156bf252197b2f045->leave($__internal_4fe20240cf401aa382bff16cdb9e362fa0882629cbc24cc156bf252197b2f045_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e64105eaca546792562328d6e528466c8265cb9c375740ca911ad6e1ee252681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64105eaca546792562328d6e528466c8265cb9c375740ca911ad6e1ee252681->enter($__internal_e64105eaca546792562328d6e528466c8265cb9c375740ca911ad6e1ee252681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_e64105eaca546792562328d6e528466c8265cb9c375740ca911ad6e1ee252681->leave($__internal_e64105eaca546792562328d6e528466c8265cb9c375740ca911ad6e1ee252681_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41ab3fac1e915ed964521a94173cb3b75016d71e55344a062220b033c349964d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ab3fac1e915ed964521a94173cb3b75016d71e55344a062220b033c349964d->enter($__internal_41ab3fac1e915ed964521a94173cb3b75016d71e55344a062220b033c349964d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41ab3fac1e915ed964521a94173cb3b75016d71e55344a062220b033c349964d->leave($__internal_41ab3fac1e915ed964521a94173cb3b75016d71e55344a062220b033c349964d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3921c45ca0935e784e22907c3e52fdc050c288e97a9d18ebf64b6b1f4305af70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3921c45ca0935e784e22907c3e52fdc050c288e97a9d18ebf64b6b1f4305af70->enter($__internal_3921c45ca0935e784e22907c3e52fdc050c288e97a9d18ebf64b6b1f4305af70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3921c45ca0935e784e22907c3e52fdc050c288e97a9d18ebf64b6b1f4305af70->leave($__internal_3921c45ca0935e784e22907c3e52fdc050c288e97a9d18ebf64b6b1f4305af70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
