<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_99ec87ef2f69b3c17ffb7cd6065317c0618176fc17cf32c8a67ce1d620f2f3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a1ce07b4e8c837c1e6b5c1af76066b751b9b58ec0efe0755687b50f9d560ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1ce07b4e8c837c1e6b5c1af76066b751b9b58ec0efe0755687b50f9d560ec3->enter($__internal_7a1ce07b4e8c837c1e6b5c1af76066b751b9b58ec0efe0755687b50f9d560ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a1ce07b4e8c837c1e6b5c1af76066b751b9b58ec0efe0755687b50f9d560ec3->leave($__internal_7a1ce07b4e8c837c1e6b5c1af76066b751b9b58ec0efe0755687b50f9d560ec3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7cb3efc3f69072a7664adab38d0ff2c88d2dd3e01dc8756447fccac56701bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cb3efc3f69072a7664adab38d0ff2c88d2dd3e01dc8756447fccac56701bbe->enter($__internal_b7cb3efc3f69072a7664adab38d0ff2c88d2dd3e01dc8756447fccac56701bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_b7cb3efc3f69072a7664adab38d0ff2c88d2dd3e01dc8756447fccac56701bbe->leave($__internal_b7cb3efc3f69072a7664adab38d0ff2c88d2dd3e01dc8756447fccac56701bbe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
