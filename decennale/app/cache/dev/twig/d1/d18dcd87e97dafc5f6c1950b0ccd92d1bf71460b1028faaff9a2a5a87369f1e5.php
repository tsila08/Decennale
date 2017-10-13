<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_40bf571662b66fc689a4273a34c5bf9b2c52b94520a3dc624baad3abeaff67b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_c413f909830743db34b45a720c0e9f2b9fb04e47501ee393ca65c0d367cb2d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c413f909830743db34b45a720c0e9f2b9fb04e47501ee393ca65c0d367cb2d17->enter($__internal_c413f909830743db34b45a720c0e9f2b9fb04e47501ee393ca65c0d367cb2d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c413f909830743db34b45a720c0e9f2b9fb04e47501ee393ca65c0d367cb2d17->leave($__internal_c413f909830743db34b45a720c0e9f2b9fb04e47501ee393ca65c0d367cb2d17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_786844e43c3453a191120dc81f55cf06dd4d6c191d6f784534075fe8b390290f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786844e43c3453a191120dc81f55cf06dd4d6c191d6f784534075fe8b390290f->enter($__internal_786844e43c3453a191120dc81f55cf06dd4d6c191d6f784534075fe8b390290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_786844e43c3453a191120dc81f55cf06dd4d6c191d6f784534075fe8b390290f->leave($__internal_786844e43c3453a191120dc81f55cf06dd4d6c191d6f784534075fe8b390290f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b6c48ebc660814dc0819ee5271cf875a0c25fb4a554088f913dec167987c026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6c48ebc660814dc0819ee5271cf875a0c25fb4a554088f913dec167987c026->enter($__internal_6b6c48ebc660814dc0819ee5271cf875a0c25fb4a554088f913dec167987c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b6c48ebc660814dc0819ee5271cf875a0c25fb4a554088f913dec167987c026->leave($__internal_6b6c48ebc660814dc0819ee5271cf875a0c25fb4a554088f913dec167987c026_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26b45e7159a0da3f0423903e054fae373b8348da1a7f4979a76a6396276856e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b45e7159a0da3f0423903e054fae373b8348da1a7f4979a76a6396276856e1->enter($__internal_26b45e7159a0da3f0423903e054fae373b8348da1a7f4979a76a6396276856e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26b45e7159a0da3f0423903e054fae373b8348da1a7f4979a76a6396276856e1->leave($__internal_26b45e7159a0da3f0423903e054fae373b8348da1a7f4979a76a6396276856e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
