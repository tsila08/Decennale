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
        $__internal_f15d15d9a5bc85b1f4c63d2907a988b5a0a24a074f1c9e39428893c6391c5240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15d15d9a5bc85b1f4c63d2907a988b5a0a24a074f1c9e39428893c6391c5240->enter($__internal_f15d15d9a5bc85b1f4c63d2907a988b5a0a24a074f1c9e39428893c6391c5240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15d15d9a5bc85b1f4c63d2907a988b5a0a24a074f1c9e39428893c6391c5240->leave($__internal_f15d15d9a5bc85b1f4c63d2907a988b5a0a24a074f1c9e39428893c6391c5240_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d8c99c615da76d97aa47cca2f54d659e900bed0a41aef690685b353055adb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8c99c615da76d97aa47cca2f54d659e900bed0a41aef690685b353055adb01->enter($__internal_4d8c99c615da76d97aa47cca2f54d659e900bed0a41aef690685b353055adb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4d8c99c615da76d97aa47cca2f54d659e900bed0a41aef690685b353055adb01->leave($__internal_4d8c99c615da76d97aa47cca2f54d659e900bed0a41aef690685b353055adb01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc94a8cd8d9361227bfb3460220644610b21c45b642cb97983d5e44528238e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc94a8cd8d9361227bfb3460220644610b21c45b642cb97983d5e44528238e7a->enter($__internal_cc94a8cd8d9361227bfb3460220644610b21c45b642cb97983d5e44528238e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc94a8cd8d9361227bfb3460220644610b21c45b642cb97983d5e44528238e7a->leave($__internal_cc94a8cd8d9361227bfb3460220644610b21c45b642cb97983d5e44528238e7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd2a325eeb10cf74173dddd579cff55818795ec9b22d7402ca6aba83a5ed5b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2a325eeb10cf74173dddd579cff55818795ec9b22d7402ca6aba83a5ed5b94->enter($__internal_bd2a325eeb10cf74173dddd579cff55818795ec9b22d7402ca6aba83a5ed5b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd2a325eeb10cf74173dddd579cff55818795ec9b22d7402ca6aba83a5ed5b94->leave($__internal_bd2a325eeb10cf74173dddd579cff55818795ec9b22d7402ca6aba83a5ed5b94_prof);

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
