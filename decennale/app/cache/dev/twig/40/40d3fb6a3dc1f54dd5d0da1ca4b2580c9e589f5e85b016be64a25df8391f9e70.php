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
        $__internal_022cd0729e3bf941f6cbb0a12e8af4dddfa1464db72abc099c6bc395b8cfbdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022cd0729e3bf941f6cbb0a12e8af4dddfa1464db72abc099c6bc395b8cfbdff->enter($__internal_022cd0729e3bf941f6cbb0a12e8af4dddfa1464db72abc099c6bc395b8cfbdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022cd0729e3bf941f6cbb0a12e8af4dddfa1464db72abc099c6bc395b8cfbdff->leave($__internal_022cd0729e3bf941f6cbb0a12e8af4dddfa1464db72abc099c6bc395b8cfbdff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17431ef6ff39feba653448863dc4dd7540bd120750431fe418bf5be65f93d276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17431ef6ff39feba653448863dc4dd7540bd120750431fe418bf5be65f93d276->enter($__internal_17431ef6ff39feba653448863dc4dd7540bd120750431fe418bf5be65f93d276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17431ef6ff39feba653448863dc4dd7540bd120750431fe418bf5be65f93d276->leave($__internal_17431ef6ff39feba653448863dc4dd7540bd120750431fe418bf5be65f93d276_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0aeab6f1bc5de877684c9a64a4817e61f742d798dddfe4aa2760967826f83c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0aeab6f1bc5de877684c9a64a4817e61f742d798dddfe4aa2760967826f83c6->enter($__internal_d0aeab6f1bc5de877684c9a64a4817e61f742d798dddfe4aa2760967826f83c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0aeab6f1bc5de877684c9a64a4817e61f742d798dddfe4aa2760967826f83c6->leave($__internal_d0aeab6f1bc5de877684c9a64a4817e61f742d798dddfe4aa2760967826f83c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e5769543d6cca9bc8897ceaeb09e004c8677ec9126fe4b3cd3865a0029db48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5769543d6cca9bc8897ceaeb09e004c8677ec9126fe4b3cd3865a0029db48c->enter($__internal_4e5769543d6cca9bc8897ceaeb09e004c8677ec9126fe4b3cd3865a0029db48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4e5769543d6cca9bc8897ceaeb09e004c8677ec9126fe4b3cd3865a0029db48c->leave($__internal_4e5769543d6cca9bc8897ceaeb09e004c8677ec9126fe4b3cd3865a0029db48c_prof);

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
