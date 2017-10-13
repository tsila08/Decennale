<?php

/* AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig */
class __TwigTemplate_a5036664c4cd210f2467181420d031ee52c302d949f344732174274af0d1ea0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig", 1);
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
        $__internal_a3479a5102bd2db27f5a47b22e5898e5159881acffc3a4bf95a088985bc5b1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3479a5102bd2db27f5a47b22e5898e5159881acffc3a4bf95a088985bc5b1b1->enter($__internal_a3479a5102bd2db27f5a47b22e5898e5159881acffc3a4bf95a088985bc5b1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3479a5102bd2db27f5a47b22e5898e5159881acffc3a4bf95a088985bc5b1b1->leave($__internal_a3479a5102bd2db27f5a47b22e5898e5159881acffc3a4bf95a088985bc5b1b1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e03fe935c0c94ed490d98da09b05a9a874f51998706b1e37bc10fabe8e3f9cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03fe935c0c94ed490d98da09b05a9a874f51998706b1e37bc10fabe8e3f9cc3->enter($__internal_e03fe935c0c94ed490d98da09b05a9a874f51998706b1e37bc10fabe8e3f9cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Reinitialiser votre mot de passe ";
        
        $__internal_e03fe935c0c94ed490d98da09b05a9a874f51998706b1e37bc10fabe8e3f9cc3->leave($__internal_e03fe935c0c94ed490d98da09b05a9a874f51998706b1e37bc10fabe8e3f9cc3_prof);

    }

    // line 4
    public function block_body_avec_pop_up($context, array $blocks = array())
    {
        $__internal_145573f7f06f88020a0613eb5bd57c1e8e0e68a215b25ae726acecccd3c3a0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145573f7f06f88020a0613eb5bd57c1e8e0e68a215b25ae726acecccd3c3a0d9->enter($__internal_145573f7f06f88020a0613eb5bd57c1e8e0e68a215b25ae726acecccd3c3a0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig"));

        
        $__internal_145573f7f06f88020a0613eb5bd57c1e8e0e68a215b25ae726acecccd3c3a0d9->leave($__internal_145573f7f06f88020a0613eb5bd57c1e8e0e68a215b25ae726acecccd3c3a0d9_prof);

    }

    // line 7
    public function block_body_sans_pop_up($context, array $blocks = array())
    {
        $__internal_fbd9ee31c3a17b9556737ccca4f0e9c155c0ccae1377f2755ae0c7c34f747681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd9ee31c3a17b9556737ccca4f0e9c155c0ccae1377f2755ae0c7c34f747681->enter($__internal_fbd9ee31c3a17b9556737ccca4f0e9c155c0ccae1377f2755ae0c7c34f747681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig"));

        // line 8
        $this->displayParentBlock("body_sans_pop_up", $context, $blocks);
        echo "
";
        
        $__internal_fbd9ee31c3a17b9556737ccca4f0e9c155c0ccae1377f2755ae0c7c34f747681->leave($__internal_fbd9ee31c3a17b9556737ccca4f0e9c155c0ccae1377f2755ae0c7c34f747681_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ff785c14516af14e386c8514c62892cb637ffa0828f3a1cac37f7fb95613679b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff785c14516af14e386c8514c62892cb637ffa0828f3a1cac37f7fb95613679b->enter($__internal_ff785c14516af14e386c8514c62892cb637ffa0828f3a1cac37f7fb95613679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig"));

        // line 11
        echo "\t\t<br>
\t\t<h2>Choisissez votre nouveau mot de passe</h2>
\t\tVous serrez ensuite rediriger vers la page de connexion. Utiliser votre adresse mail et nouveau mot de passe pour vous conncter.
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t 
\t\t\t\t\t";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors')) {
            // line 19
            echo "\t\t\t\t\t <div class=\"alert alert-danger\">  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_reinitialiser_mot_de_passe", array("mail" => (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "motDePasse" => (isset($context["mdp"]) ? $context["mdp"] : $this->getContext($context, "mdp")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'enctype');
        echo ">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nouveau Mdp* :</li>
\t\t\t\t\t\t\t<li>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "password", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Confirmer nouv Mdp* :</li>
\t\t\t\t\t\t\t<li>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "confirmationMdp", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'rest');
        echo "
\t\t\t\t\t\t 
\t\t\t\t\t\t <input type=\"submit\" value=\"Reinitialiser mot de passe\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<br>
";
        
        $__internal_ff785c14516af14e386c8514c62892cb637ffa0828f3a1cac37f7fb95613679b->leave($__internal_ff785c14516af14e386c8514c62892cb637ffa0828f3a1cac37f7fb95613679b_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  124 => 31,  117 => 27,  108 => 24,  102 => 22,  99 => 21,  93 => 19,  91 => 18,  82 => 11,  76 => 10,  67 => 8,  61 => 7,  50 => 4,  37 => 2,  11 => 1,);
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
{% block title %}{{ parent() }}-Reinitialiser votre mot de passe {% endblock %}\t

{% block body_avec_pop_up %}
{% endblock %}

{% block body_sans_pop_up %}
{{parent()}}
{% endblock %}
{% block contenu %}
\t\t<br>
\t\t<h2>Choisissez votre nouveau mot de passe</h2>
\t\tVous serrez ensuite rediriger vers la page de connexion. Utiliser votre adresse mail et nouveau mot de passe pour vous conncter.
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t 
\t\t\t\t\t{% if form_errors(formulaire)%}
\t\t\t\t\t <div class=\"alert alert-danger\">  {{ form_errors(formulaire) }} </div>
\t\t\t\t\t {% endif %}
\t\t\t\t\t {% if (message) %}
\t\t\t\t\t\t<div class=\"alert alert-warning\">  {{ message }} </div>
\t\t\t\t\t {% endif %}
\t\t\t\t\t <form  method=\"post\" action=\"{{path('bds_utilisateur_reinitialiser_mot_de_passe',{'mail':mail,'motDePasse':mdp})}}\" {{ form_enctype(formulaire) }}>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nouveau Mdp* :</li>
\t\t\t\t\t\t\t<li>{{ form_widget(formulaire.password) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Confirmer nouv Mdp* :</li>
\t\t\t\t\t\t\t<li>{{ form_widget(formulaire.confirmationMdp) }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t{{form_rest(formulaire) }}
\t\t\t\t\t\t 
\t\t\t\t\t\t <input type=\"submit\" value=\"Reinitialiser mot de passe\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<br>
{% endblock %}

", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/reinitialiserMotDePasse.html.twig");
    }
}
