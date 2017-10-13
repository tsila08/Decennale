<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4ea8a352edf5b706cc39282da07c2732fc4c7f4f989bbadec0102969b7d8920d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_442267545988b8d4cbb452a6d4d7d433bc2dfb8bdcf0896fb5e7debafe801d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442267545988b8d4cbb452a6d4d7d433bc2dfb8bdcf0896fb5e7debafe801d12->enter($__internal_442267545988b8d4cbb452a6d4d7d433bc2dfb8bdcf0896fb5e7debafe801d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442267545988b8d4cbb452a6d4d7d433bc2dfb8bdcf0896fb5e7debafe801d12->leave($__internal_442267545988b8d4cbb452a6d4d7d433bc2dfb8bdcf0896fb5e7debafe801d12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd32a61aff8140382d20386b9b40a887604a5dfc5cb865cd6367c57aadc9d438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd32a61aff8140382d20386b9b40a887604a5dfc5cb865cd6367c57aadc9d438->enter($__internal_cd32a61aff8140382d20386b9b40a887604a5dfc5cb865cd6367c57aadc9d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_cd32a61aff8140382d20386b9b40a887604a5dfc5cb865cd6367c57aadc9d438->leave($__internal_cd32a61aff8140382d20386b9b40a887604a5dfc5cb865cd6367c57aadc9d438_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_501ebafb9d81d764080635eccf8f70f05f5b24d1081a7dfc84f8b5ff3e80599f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ebafb9d81d764080635eccf8f70f05f5b24d1081a7dfc84f8b5ff3e80599f->enter($__internal_501ebafb9d81d764080635eccf8f70f05f5b24d1081a7dfc84f8b5ff3e80599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_501ebafb9d81d764080635eccf8f70f05f5b24d1081a7dfc84f8b5ff3e80599f->leave($__internal_501ebafb9d81d764080635eccf8f70f05f5b24d1081a7dfc84f8b5ff3e80599f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
