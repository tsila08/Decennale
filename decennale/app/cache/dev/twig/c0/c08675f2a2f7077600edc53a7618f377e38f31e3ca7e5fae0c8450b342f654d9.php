<?php

/* base.html.twig */
class __TwigTemplate_a396579343adde71095cd71763e08271d9e2128f87a64e706b42a2b081d4babd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6b5390ec23a108e03038da1a024c4cff9cf29c0a35acbf50486738e4e76ec60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b5390ec23a108e03038da1a024c4cff9cf29c0a35acbf50486738e4e76ec60->enter($__internal_a6b5390ec23a108e03038da1a024c4cff9cf29c0a35acbf50486738e4e76ec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a6b5390ec23a108e03038da1a024c4cff9cf29c0a35acbf50486738e4e76ec60->leave($__internal_a6b5390ec23a108e03038da1a024c4cff9cf29c0a35acbf50486738e4e76ec60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_500aae28d784da44a798e42716d0a5815b28f775faeffb3b374251942bdb952d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500aae28d784da44a798e42716d0a5815b28f775faeffb3b374251942bdb952d->enter($__internal_500aae28d784da44a798e42716d0a5815b28f775faeffb3b374251942bdb952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_500aae28d784da44a798e42716d0a5815b28f775faeffb3b374251942bdb952d->leave($__internal_500aae28d784da44a798e42716d0a5815b28f775faeffb3b374251942bdb952d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cc3975676eba821c96b942b54753ab9638321bc0c195ba6764d8a32d3a2cc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc3975676eba821c96b942b54753ab9638321bc0c195ba6764d8a32d3a2cc1e->enter($__internal_5cc3975676eba821c96b942b54753ab9638321bc0c195ba6764d8a32d3a2cc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5cc3975676eba821c96b942b54753ab9638321bc0c195ba6764d8a32d3a2cc1e->leave($__internal_5cc3975676eba821c96b942b54753ab9638321bc0c195ba6764d8a32d3a2cc1e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8810447f6096b0529f3a07a23c6f493c56a379951468fe6d61666ded72826d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8810447f6096b0529f3a07a23c6f493c56a379951468fe6d61666ded72826d39->enter($__internal_8810447f6096b0529f3a07a23c6f493c56a379951468fe6d61666ded72826d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_8810447f6096b0529f3a07a23c6f493c56a379951468fe6d61666ded72826d39->leave($__internal_8810447f6096b0529f3a07a23c6f493c56a379951468fe6d61666ded72826d39_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_035c03cc39e020064608d6cad21b102329f04f8550ec44da61c3e1675f894075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035c03cc39e020064608d6cad21b102329f04f8550ec44da61c3e1675f894075->enter($__internal_035c03cc39e020064608d6cad21b102329f04f8550ec44da61c3e1675f894075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_035c03cc39e020064608d6cad21b102329f04f8550ec44da61c3e1675f894075->leave($__internal_035c03cc39e020064608d6cad21b102329f04f8550ec44da61c3e1675f894075_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/projet/decennale/app/Resources/views/base.html.twig");
    }
}
