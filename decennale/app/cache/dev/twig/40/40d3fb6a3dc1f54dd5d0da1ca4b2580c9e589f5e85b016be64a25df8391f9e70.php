<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5f59a3178512ff1491751ddacff6ab89b834acf83b2c0aa4326b75ef47f12e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d1dd075235f5fcec52c3d37a4a85afe31dc16d997c5801f7be964bd3f6a8e2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dd075235f5fcec52c3d37a4a85afe31dc16d997c5801f7be964bd3f6a8e2fc->enter($__internal_d1dd075235f5fcec52c3d37a4a85afe31dc16d997c5801f7be964bd3f6a8e2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1dd075235f5fcec52c3d37a4a85afe31dc16d997c5801f7be964bd3f6a8e2fc->leave($__internal_d1dd075235f5fcec52c3d37a4a85afe31dc16d997c5801f7be964bd3f6a8e2fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c1a8e1808f35b345d106d7022943219c12101e2e00f1b5fffbfb99182f0131e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1a8e1808f35b345d106d7022943219c12101e2e00f1b5fffbfb99182f0131e->enter($__internal_4c1a8e1808f35b345d106d7022943219c12101e2e00f1b5fffbfb99182f0131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c1a8e1808f35b345d106d7022943219c12101e2e00f1b5fffbfb99182f0131e->leave($__internal_4c1a8e1808f35b345d106d7022943219c12101e2e00f1b5fffbfb99182f0131e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d04b2ebc1c495d14c3bda4bce808c417e8fb8ad3834b8a796a1f352b5c8cfffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04b2ebc1c495d14c3bda4bce808c417e8fb8ad3834b8a796a1f352b5c8cfffc->enter($__internal_d04b2ebc1c495d14c3bda4bce808c417e8fb8ad3834b8a796a1f352b5c8cfffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d04b2ebc1c495d14c3bda4bce808c417e8fb8ad3834b8a796a1f352b5c8cfffc->leave($__internal_d04b2ebc1c495d14c3bda4bce808c417e8fb8ad3834b8a796a1f352b5c8cfffc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d0f2c900354183b53e15fe47b0795656965fd9e1b218a03556401725c133446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0f2c900354183b53e15fe47b0795656965fd9e1b218a03556401725c133446->enter($__internal_1d0f2c900354183b53e15fe47b0795656965fd9e1b218a03556401725c133446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1d0f2c900354183b53e15fe47b0795656965fd9e1b218a03556401725c133446->leave($__internal_1d0f2c900354183b53e15fe47b0795656965fd9e1b218a03556401725c133446_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
