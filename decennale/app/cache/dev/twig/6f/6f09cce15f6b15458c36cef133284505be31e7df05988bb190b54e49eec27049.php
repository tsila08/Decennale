<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b53e5c79fd540a14098f09ed6c4ebc8a662abf9bcd747cf298840cb0bb9baffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a963ccab0c84cd52e81d78823903bfc700321dba4cebace5d10d9715146025d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a963ccab0c84cd52e81d78823903bfc700321dba4cebace5d10d9715146025d7->enter($__internal_a963ccab0c84cd52e81d78823903bfc700321dba4cebace5d10d9715146025d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a963ccab0c84cd52e81d78823903bfc700321dba4cebace5d10d9715146025d7->leave($__internal_a963ccab0c84cd52e81d78823903bfc700321dba4cebace5d10d9715146025d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f6a3b0b320514f0bc06f40dd6527af1037c9c46c869b4c7d1c143834f9fc0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6a3b0b320514f0bc06f40dd6527af1037c9c46c869b4c7d1c143834f9fc0d0->enter($__internal_0f6a3b0b320514f0bc06f40dd6527af1037c9c46c869b4c7d1c143834f9fc0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f6a3b0b320514f0bc06f40dd6527af1037c9c46c869b4c7d1c143834f9fc0d0->leave($__internal_0f6a3b0b320514f0bc06f40dd6527af1037c9c46c869b4c7d1c143834f9fc0d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df9cfbaccd53747571685cb6b58b4ae729a631cf61df49028b9fc2b4fd00df1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9cfbaccd53747571685cb6b58b4ae729a631cf61df49028b9fc2b4fd00df1f->enter($__internal_df9cfbaccd53747571685cb6b58b4ae729a631cf61df49028b9fc2b4fd00df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df9cfbaccd53747571685cb6b58b4ae729a631cf61df49028b9fc2b4fd00df1f->leave($__internal_df9cfbaccd53747571685cb6b58b4ae729a631cf61df49028b9fc2b4fd00df1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e6ff03d54c956f6212d0a404c078f7c6e02481ef8ddddcb14644bbc782fd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e6ff03d54c956f6212d0a404c078f7c6e02481ef8ddddcb14644bbc782fd6b->enter($__internal_64e6ff03d54c956f6212d0a404c078f7c6e02481ef8ddddcb14644bbc782fd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_64e6ff03d54c956f6212d0a404c078f7c6e02481ef8ddddcb14644bbc782fd6b->leave($__internal_64e6ff03d54c956f6212d0a404c078f7c6e02481ef8ddddcb14644bbc782fd6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
