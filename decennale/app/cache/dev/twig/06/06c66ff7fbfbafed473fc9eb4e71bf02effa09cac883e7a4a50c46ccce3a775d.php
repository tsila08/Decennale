<?php

/* AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig */
class __TwigTemplate_43798a6c7cb2f6844d7f85524621e7471dc9b03ffe703e0d657b38b21f48def2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig", 1);
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
        $__internal_ed70a681a72d8b9b324694b82eed18ab623548be0a9940bc41e0593682f396c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed70a681a72d8b9b324694b82eed18ab623548be0a9940bc41e0593682f396c1->enter($__internal_ed70a681a72d8b9b324694b82eed18ab623548be0a9940bc41e0593682f396c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed70a681a72d8b9b324694b82eed18ab623548be0a9940bc41e0593682f396c1->leave($__internal_ed70a681a72d8b9b324694b82eed18ab623548be0a9940bc41e0593682f396c1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfda04855607280c34316a584d54a8b76cdc2ff9d0458d64f5240e36577f5450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfda04855607280c34316a584d54a8b76cdc2ff9d0458d64f5240e36577f5450->enter($__internal_cfda04855607280c34316a584d54a8b76cdc2ff9d0458d64f5240e36577f5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Modifier votre profil ";
        
        $__internal_cfda04855607280c34316a584d54a8b76cdc2ff9d0458d64f5240e36577f5450->leave($__internal_cfda04855607280c34316a584d54a8b76cdc2ff9d0458d64f5240e36577f5450_prof);

    }

    // line 4
    public function block_body_avec_pop_up($context, array $blocks = array())
    {
        $__internal_88390b01c20b175620ba3a83d60cff69dba47a90632e0f46c844a4f5e6e6696a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88390b01c20b175620ba3a83d60cff69dba47a90632e0f46c844a4f5e6e6696a->enter($__internal_88390b01c20b175620ba3a83d60cff69dba47a90632e0f46c844a4f5e6e6696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig"));

        
        $__internal_88390b01c20b175620ba3a83d60cff69dba47a90632e0f46c844a4f5e6e6696a->leave($__internal_88390b01c20b175620ba3a83d60cff69dba47a90632e0f46c844a4f5e6e6696a_prof);

    }

    // line 7
    public function block_body_sans_pop_up($context, array $blocks = array())
    {
        $__internal_a88bce11d0b15d91ac9ff56775b15e2b94e5a4567193b5c570036aba27db490c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88bce11d0b15d91ac9ff56775b15e2b94e5a4567193b5c570036aba27db490c->enter($__internal_a88bce11d0b15d91ac9ff56775b15e2b94e5a4567193b5c570036aba27db490c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig"));

        // line 8
        $this->displayParentBlock("body_sans_pop_up", $context, $blocks);
        echo "
";
        
        $__internal_a88bce11d0b15d91ac9ff56775b15e2b94e5a4567193b5c570036aba27db490c->leave($__internal_a88bce11d0b15d91ac9ff56775b15e2b94e5a4567193b5c570036aba27db490c_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_54c1e065ef8707654a6923679e8e3b46cedb47f61da214d51f8edd54f14917b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c1e065ef8707654a6923679e8e3b46cedb47f61da214d51f8edd54f14917b1->enter($__internal_54c1e065ef8707654a6923679e8e3b46cedb47f61da214d51f8edd54f14917b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig"));

        // line 11
        echo "\t\t<br>
\t\t<h2>Modifier votre profil</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Veuillez fournir les renseignements suivants pour continuer.</p>
\t\t\t\t\t 
\t\t\t\t\t";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 19
            echo "\t\t\t\t\t <div class=\"alert alert-danger\">  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo " </div>
\t\t\t\t\t ";
        }
        // line 21
        echo "\t\t\t\t\t ";
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">  ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </div>
\t\t\t\t\t ";
        }
        // line 24
        echo "\t\t\t\t\t <form  method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_modifier_profil");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Type d'activité * : </li>
\t\t\t\t\t\t\t<li>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeCompteString", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nom * : </li>
\t\t\t\t\t\t\t<li>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Entreprise : </li>
\t\t\t\t\t\t\t<li>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomEntreprise", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Télephone * : </li>
\t\t\t\t\t\t\t<li>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Adresse : </li>
\t\t\t\t\t\t\t<li>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Ville  * : </li>
\t\t\t\t\t\t\t<li>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t\t<p class=\"click\">Pour modifier votre mot de passe ou votre adresse mail  <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_modifier_info_connexion");
        echo "\">cliquer ici.</a></p> 
\t\t\t\t\t\t <input type=\"submit\" value=\"Modifier votre profil\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t 
\t\t\t\t 
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<br>
";
        
        $__internal_54c1e065ef8707654a6923679e8e3b46cedb47f61da214d51f8edd54f14917b1->leave($__internal_54c1e065ef8707654a6923679e8e3b46cedb47f61da214d51f8edd54f14917b1_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 50,  157 => 49,  152 => 47,  145 => 43,  138 => 39,  131 => 35,  124 => 31,  117 => 27,  108 => 24,  102 => 22,  99 => 21,  93 => 19,  91 => 18,  82 => 11,  76 => 10,  67 => 8,  61 => 7,  50 => 4,  37 => 2,  11 => 1,);
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
{% block title %}{{ parent() }}-Modifier votre profil {% endblock %}\t

{% block body_avec_pop_up %}
{% endblock %}

{% block body_sans_pop_up %}
{{parent()}}
{% endblock %}
{% block contenu %}
\t\t<br>
\t\t<h2>Modifier votre profil</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Veuillez fournir les renseignements suivants pour continuer.</p>
\t\t\t\t\t 
\t\t\t\t\t{% if form_errors(form)%}
\t\t\t\t\t <div class=\"alert alert-danger\">  {{ form_errors(form) }} </div>
\t\t\t\t\t {% endif %}
\t\t\t\t\t {% if (message) %}
\t\t\t\t\t\t<div class=\"alert alert-warning\">  {{ message }} </div>
\t\t\t\t\t {% endif %}
\t\t\t\t\t <form  method=\"post\" action=\"{{path('bds_utilisateur_modifier_profil')}}\" {{ form_enctype(form) }}>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Type d'activité * : </li>
\t\t\t\t\t\t\t<li>{{ form_widget(form.typeCompteString) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nom * : </li>
\t\t\t\t\t\t\t<li>{{ form_widget(form.username) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Entreprise : </li>
\t\t\t\t\t\t\t<li>{{ form_widget(form.nomEntreprise) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Télephone * : </li>
\t\t\t\t\t\t\t<li>{{ form_widget(form.telephone) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Adresse : </li>
\t\t\t\t\t\t\t<li>{{ form_widget(form.adresse) }}</li>
\t\t\t\t\t\t</ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Ville  * : </li>
\t\t\t\t\t\t\t<li>{{ form_widget(form.ville) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{{form_rest(form) }}
\t\t\t\t\t\t<p class=\"click\">Pour modifier votre mot de passe ou votre adresse mail  <a href=\"{{path('bds_utilisateur_modifier_info_connexion')}}\">cliquer ici.</a></p> 
\t\t\t\t\t\t <input type=\"submit\" value=\"Modifier votre profil\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t 
\t\t\t\t 
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<br>
{% endblock %}

", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/modifierProfil.html.twig");
    }
}
