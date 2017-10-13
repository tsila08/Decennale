<?php

/* AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig */
class __TwigTemplate_25467adfc7967cc29a5f3bbce967eb4658f64d72bc93e4296ae4a103f9e9d9d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig", 1);
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
        $__internal_2660c985b21bf8adc5a73a2994ec2f77408162325569560403ee17aef98f696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2660c985b21bf8adc5a73a2994ec2f77408162325569560403ee17aef98f696c->enter($__internal_2660c985b21bf8adc5a73a2994ec2f77408162325569560403ee17aef98f696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2660c985b21bf8adc5a73a2994ec2f77408162325569560403ee17aef98f696c->leave($__internal_2660c985b21bf8adc5a73a2994ec2f77408162325569560403ee17aef98f696c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_65d9c66ea35c3a225873061710b996b12d2a7b553eeb8048a6ccddea402c73e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d9c66ea35c3a225873061710b996b12d2a7b553eeb8048a6ccddea402c73e2->enter($__internal_65d9c66ea35c3a225873061710b996b12d2a7b553eeb8048a6ccddea402c73e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Recuperer votre compte ";
        
        $__internal_65d9c66ea35c3a225873061710b996b12d2a7b553eeb8048a6ccddea402c73e2->leave($__internal_65d9c66ea35c3a225873061710b996b12d2a7b553eeb8048a6ccddea402c73e2_prof);

    }

    // line 4
    public function block_body_avec_pop_up($context, array $blocks = array())
    {
        $__internal_0d2ba7182653d9053c9d3e049b47d7c7cd1b93975ae52b5b4fb1959b7127c0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2ba7182653d9053c9d3e049b47d7c7cd1b93975ae52b5b4fb1959b7127c0d3->enter($__internal_0d2ba7182653d9053c9d3e049b47d7c7cd1b93975ae52b5b4fb1959b7127c0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig"));

        
        $__internal_0d2ba7182653d9053c9d3e049b47d7c7cd1b93975ae52b5b4fb1959b7127c0d3->leave($__internal_0d2ba7182653d9053c9d3e049b47d7c7cd1b93975ae52b5b4fb1959b7127c0d3_prof);

    }

    // line 7
    public function block_body_sans_pop_up($context, array $blocks = array())
    {
        $__internal_dfa1e4eb1c05779186df75cd14b450b01fca6442949957c2528f0de5a0895589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa1e4eb1c05779186df75cd14b450b01fca6442949957c2528f0de5a0895589->enter($__internal_dfa1e4eb1c05779186df75cd14b450b01fca6442949957c2528f0de5a0895589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig"));

        // line 8
        $this->displayParentBlock("body_sans_pop_up", $context, $blocks);
        echo "
";
        
        $__internal_dfa1e4eb1c05779186df75cd14b450b01fca6442949957c2528f0de5a0895589->leave($__internal_dfa1e4eb1c05779186df75cd14b450b01fca6442949957c2528f0de5a0895589_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_66fe333330b51b20eeaa5ed3bfd992a4de4eafbcbe0993bc99b1e852e2b33a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fe333330b51b20eeaa5ed3bfd992a4de4eafbcbe0993bc99b1e852e2b33a6a->enter($__internal_66fe333330b51b20eeaa5ed3bfd992a4de4eafbcbe0993bc99b1e852e2b33a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig"));

        // line 11
        echo "
\t\t<div class=\"login-page\">
\t\t\t   <div class=\"account_grid\">
\t\t\t   <div class=\"col-md-6 login-left wow fadeInLeft\" data-wow-delay=\"0.4s\">
\t\t\t  \t <h2>Récuperer votre compte</h2>
\t\t\t\t <h4>S'il ne s'agit pas de votre compte, veuillez <a class=\"forgot\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_mot_de_passe_oublie");
        echo "\"> saisir votre adresse mail.</a> </h4>
\t\t\t\t <p>Si vous avez aussi oublié votre adresse mail, veuillez nous contacter par télephone.</p>
\t\t\t\t 
\t\t\t   </div>
\t\t\t   <div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t<h4>S'agit-t-il de votre compte ? </h4>
\t\t\t\t  <div>
\t\t\t\t\t<span>Nom : <label> ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " </label></span>
\t\t\t\t  </div>
\t\t\t\t  <div>
\t\t\t\t\t<span>Adresse mail : <label>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</label></span>
\t\t\t\t  </div>
\t\t\t\tEn continuant, nous allons vous envoyer un lien pour récupérer votre compte à votre adresse mail.
\t\t\t\t  <a class=\"forgot\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_recuperer_mot_de_passe", array("mail" => (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")))), "html", null, true);
        echo "\">Oui, il s'agit de mon compte.</a>
\t\t\t\t  
\t\t\t    
\t\t\t   </div>\t
\t\t\t   <div class=\"clearfix\"> </div>
\t\t\t </div>
\t\t   </div>
\t
\t
";
        
        $__internal_66fe333330b51b20eeaa5ed3bfd992a4de4eafbcbe0993bc99b1e852e2b33a6a->leave($__internal_66fe333330b51b20eeaa5ed3bfd992a4de4eafbcbe0993bc99b1e852e2b33a6a_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  105 => 26,  99 => 23,  89 => 16,  82 => 11,  76 => 10,  67 => 8,  61 => 7,  50 => 4,  37 => 2,  11 => 1,);
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
{% block title %}{{ parent() }}-Recuperer votre compte {% endblock %}\t

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
\t\t\t\t <h4>S'il ne s'agit pas de votre compte, veuillez <a class=\"forgot\" href=\"{{path('bds_utilisateur_mot_de_passe_oublie')}}\"> saisir votre adresse mail.</a> </h4>
\t\t\t\t <p>Si vous avez aussi oublié votre adresse mail, veuillez nous contacter par télephone.</p>
\t\t\t\t 
\t\t\t   </div>
\t\t\t   <div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t<h4>S'agit-t-il de votre compte ? </h4>
\t\t\t\t  <div>
\t\t\t\t\t<span>Nom : <label> {{ nom }} </label></span>
\t\t\t\t  </div>
\t\t\t\t  <div>
\t\t\t\t\t<span>Adresse mail : <label>{{ mail }}</label></span>
\t\t\t\t  </div>
\t\t\t\tEn continuant, nous allons vous envoyer un lien pour récupérer votre compte à votre adresse mail.
\t\t\t\t  <a class=\"forgot\" href=\"{{path('bds_utilisateur_recuperer_mot_de_passe',{'mail':mail })}}\">Oui, il s'agit de mon compte.</a>
\t\t\t\t  
\t\t\t    
\t\t\t   </div>\t
\t\t\t   <div class=\"clearfix\"> </div>
\t\t\t </div>
\t\t   </div>
\t
\t
{% endblock %}

", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/verifierRecupererMotDePasse.html.twig");
    }
}
