<?php

/* AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig */
class __TwigTemplate_f9523e01367d45a4385f58a157f99adc594e8e7ec99ecec5b9b36227c246501a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_avec_pop_up' => array($this, 'block_body_avec_pop_up'),
            'body_sans_pop_up' => array($this, 'block_body_sans_pop_up'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_454375ad3f39b83003d54c044ce5e7a0f841604b1482a769fde778980641fa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454375ad3f39b83003d54c044ce5e7a0f841604b1482a769fde778980641fa3a->enter($__internal_454375ad3f39b83003d54c044ce5e7a0f841604b1482a769fde778980641fa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454375ad3f39b83003d54c044ce5e7a0f841604b1482a769fde778980641fa3a->leave($__internal_454375ad3f39b83003d54c044ce5e7a0f841604b1482a769fde778980641fa3a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a122e0641821eabbbf18a010df5846b3483139b7082daeb93ef60e1002ea657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a122e0641821eabbbf18a010df5846b3483139b7082daeb93ef60e1002ea657->enter($__internal_7a122e0641821eabbbf18a010df5846b3483139b7082daeb93ef60e1002ea657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Mot de passe oublié ";
        
        $__internal_7a122e0641821eabbbf18a010df5846b3483139b7082daeb93ef60e1002ea657->leave($__internal_7a122e0641821eabbbf18a010df5846b3483139b7082daeb93ef60e1002ea657_prof);

    }

    // line 4
    public function block_body_avec_pop_up($context, array $blocks = array())
    {
        $__internal_f9c2c8f2e91dc71916f595d5b86432317919ae546b91e9e32f5451404a662266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c2c8f2e91dc71916f595d5b86432317919ae546b91e9e32f5451404a662266->enter($__internal_f9c2c8f2e91dc71916f595d5b86432317919ae546b91e9e32f5451404a662266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig"));

        
        $__internal_f9c2c8f2e91dc71916f595d5b86432317919ae546b91e9e32f5451404a662266->leave($__internal_f9c2c8f2e91dc71916f595d5b86432317919ae546b91e9e32f5451404a662266_prof);

    }

    // line 7
    public function block_body_sans_pop_up($context, array $blocks = array())
    {
        $__internal_b43bb453f04ac8c91784c86b87a9e02914e5e78233fa003e6baac9b754a0409e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43bb453f04ac8c91784c86b87a9e02914e5e78233fa003e6baac9b754a0409e->enter($__internal_b43bb453f04ac8c91784c86b87a9e02914e5e78233fa003e6baac9b754a0409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig"));

        // line 8
        $this->displayParentBlock("body_sans_pop_up", $context, $blocks);
        echo "
";
        
        $__internal_b43bb453f04ac8c91784c86b87a9e02914e5e78233fa003e6baac9b754a0409e->leave($__internal_b43bb453f04ac8c91784c86b87a9e02914e5e78233fa003e6baac9b754a0409e_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c9480d5b3b3f0f8ec0381cef117ddc3dccf4b785839cadc97b1b4d664f5e896c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9480d5b3b3f0f8ec0381cef117ddc3dccf4b785839cadc97b1b4d664f5e896c->enter($__internal_c9480d5b3b3f0f8ec0381cef117ddc3dccf4b785839cadc97b1b4d664f5e896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig"));

        // line 11
        echo "
\t\t<div class=\"login-page\">
\t\t\t   <div class=\"account_grid\">
\t\t\t   <div class=\"col-md-6 login-left wow fadeInLeft\" data-wow-delay=\"0.4s\">
\t\t\t  \t <h2>Récuperer votre compte</h2>
\t\t\t\t <p>Si vous avez oublié votre mot de passe, 
\t\t\t\t vous pouvez demander la reinitialisation de votre en donnant votre adresse mail. Si vous avez aussi oublié votre adresse mail, veuillez nous contacter par télephone.</p>
\t\t\t\t 
\t\t\t   </div>
\t\t\t   <div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t";
        // line 21
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\"> 
\t\t\t\t\t\t<h4>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t<form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_mot_de_passe_oublie");
        echo "\" >
\t\t\t\t  <div>
\t\t\t\t\t<span>Adresse mail: <label>*</label></span>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget');
        echo "
\t\t\t\t  </div>
\t\t\t\t ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t  <input type=\"submit\" value=\"Récuperer mot de passe\">
\t\t\t\t  
\t\t\t\t  
\t\t\t    </form>
\t\t\t   </div>\t
\t\t\t   <div class=\"clearfix\"> </div>
\t\t\t </div>
\t\t   </div>
\t
\t
";
        
        $__internal_c9480d5b3b3f0f8ec0381cef117ddc3dccf4b785839cadc97b1b4d664f5e896c->leave($__internal_c9480d5b3b3f0f8ec0381cef117ddc3dccf4b785839cadc97b1b4d664f5e896c_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  113 => 30,  106 => 27,  99 => 23,  96 => 22,  94 => 21,  82 => 11,  76 => 10,  67 => 8,  61 => 7,  50 => 4,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block title %}{{ parent() }}-Mot de passe oublié {% endblock %}\t

{% block body_avec_pop_up %}
{% endblock %}

{% block body_sans_pop_up %}
{{parent()}}
{% endblock %}
{% block contenu %}

\t\t<div class=\"login-page\">
\t\t\t   <div class=\"account_grid\">
\t\t\t   <div class=\"col-md-6 login-left wow fadeInLeft\" data-wow-delay=\"0.4s\">
\t\t\t  \t <h2>Récuperer votre compte</h2>
\t\t\t\t <p>Si vous avez oublié votre mot de passe, 
\t\t\t\t vous pouvez demander la reinitialisation de votre en donnant votre adresse mail. Si vous avez aussi oublié votre adresse mail, veuillez nous contacter par télephone.</p>
\t\t\t\t 
\t\t\t   </div>
\t\t\t   <div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t{% if message %}
\t\t\t\t\t\t<div class=\"alert alert-danger\"> 
\t\t\t\t\t\t<h4>{{message}}</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t<form method=\"post\" action=\"{{path('bds_utilisateur_mot_de_passe_oublie')}}\" >
\t\t\t\t  <div>
\t\t\t\t\t<span>Adresse mail: <label>*</label></span>
\t\t\t\t\t{{ form_widget(form.mail) }}
\t\t\t\t  </div>
\t\t\t\t {{form_rest(form) }}
\t\t\t\t  <input type=\"submit\" value=\"Récuperer mot de passe\">
\t\t\t\t  
\t\t\t\t  
\t\t\t    </form>
\t\t\t   </div>\t
\t\t\t   <div class=\"clearfix\"> </div>
\t\t\t </div>
\t\t   </div>
\t
\t
{% endblock %}

", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/motDePasseOublie.html.twig");
    }
}
