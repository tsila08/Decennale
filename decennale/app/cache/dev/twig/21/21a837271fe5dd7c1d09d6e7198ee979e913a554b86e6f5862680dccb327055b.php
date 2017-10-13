<?php

/* AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig */
class __TwigTemplate_b7e04089cc92e06d1ae4b756f993da6fcb9bcfc2aec6f9b70f9c2d7a7b2fef7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d33f632776c78bad08b3b0921772ea00941aba208f42a71df093d82a16d0be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d33f632776c78bad08b3b0921772ea00941aba208f42a71df093d82a16d0be8->enter($__internal_5d33f632776c78bad08b3b0921772ea00941aba208f42a71df093d82a16d0be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d33f632776c78bad08b3b0921772ea00941aba208f42a71df093d82a16d0be8->leave($__internal_5d33f632776c78bad08b3b0921772ea00941aba208f42a71df093d82a16d0be8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b69b5f2ec76be5515b04559ae60ea96f875156c9ea76d25dd931d07f6786308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b69b5f2ec76be5515b04559ae60ea96f875156c9ea76d25dd931d07f6786308->enter($__internal_5b69b5f2ec76be5515b04559ae60ea96f875156c9ea76d25dd931d07f6786308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Ajouter un administrateur ";
        
        $__internal_5b69b5f2ec76be5515b04559ae60ea96f875156c9ea76d25dd931d07f6786308->leave($__internal_5b69b5f2ec76be5515b04559ae60ea96f875156c9ea76d25dd931d07f6786308_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5271b0262f7f6ef99a87a718c765929db07d6545de54f88b321f5bf90f5e37e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5271b0262f7f6ef99a87a718c765929db07d6545de54f88b321f5bf90f5e37e2->enter($__internal_5271b0262f7f6ef99a87a718c765929db07d6545de54f88b321f5bf90f5e37e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig"));

        // line 5
        echo "\t\t<br>
\t\t<h2>Ajouiter un nouveau administrateur</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Welcome, please enter the following details to continue.</p>
\t\t\t\t\t 
\t\t\t\t\t";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 13
            echo "\t\t\t\t\t <div class=\"alert alert-danger\">  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo " </div>
\t\t\t\t\t ";
        }
        // line 15
        echo "\t\t\t\t\t ";
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 16
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">  ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </div>
\t\t\t\t\t ";
        }
        // line 18
        echo "\t\t\t\t\t <form  method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_creercompte_admin");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Nom : </li>
\t\t\t\t\t\t\t <li>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mail : </li>
\t\t\t\t\t\t\t <li>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t </ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mot de passe : </li>
\t\t\t\t\t\t\t <li>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t </ul>
<!--
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Password: </li>
\t\t\t\t\t\t\t <li><input type=\"password\" value=\"\"></li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Re-enter Password:</li>
\t\t\t\t\t\t\t <li><input type=\"password\" value=\"\"></li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mobile Number:</li>
\t\t\t\t\t\t\t <li><input type=\"text\" value=\"\"></li>
\t\t\t\t\t\t </ul>
-->
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t\t <input type=\"submit\" value=\"Creer un compte\">
\t\t\t\t\t\t <p class=\"click\">By clicking this button, you are agree to my  <a href=\"#\">Policy Terms and Conditions.</a></p> 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t <h3>Creer un compte administrateur</h3>
\t\t\t\t <div class=\"strip\"></div>
\t\t\t\t <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
\t\t\t\t libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
";
        
        $__internal_5271b0262f7f6ef99a87a718c765929db07d6545de54f88b321f5bf90f5e37e2->leave($__internal_5271b0262f7f6ef99a87a718c765929db07d6545de54f88b321f5bf90f5e37e2_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  103 => 29,  96 => 25,  89 => 21,  80 => 18,  74 => 16,  71 => 15,  65 => 13,  63 => 12,  54 => 5,  48 => 4,  35 => 2,  11 => 1,);
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
{% block title %}{{ parent() }}-Ajouter un administrateur {% endblock %}\t

{% block contenu %}
\t\t<br>
\t\t<h2>Ajouiter un nouveau administrateur</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Welcome, please enter the following details to continue.</p>
\t\t\t\t\t 
\t\t\t\t\t{% if form_errors(form)%}
\t\t\t\t\t <div class=\"alert alert-danger\">  {{ form_errors(form) }} </div>
\t\t\t\t\t {% endif %}
\t\t\t\t\t {% if (message) %}
\t\t\t\t\t\t<div class=\"alert alert-warning\">  {{ message }} </div>
\t\t\t\t\t {% endif %}
\t\t\t\t\t <form  method=\"post\" action=\"{{path('bds_utilisateur_creercompte_admin')}}\" {{ form_enctype(form) }}>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Nom : </li>
\t\t\t\t\t\t\t <li>{{ form_widget(form.username) }}</li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mail : </li>
\t\t\t\t\t\t\t <li>{{ form_widget(form.mail) }}</li>
\t\t\t\t\t\t </ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mot de passe : </li>
\t\t\t\t\t\t\t <li>{{ form_widget(form.password) }}</li>
\t\t\t\t\t\t </ul>
<!--
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Password: </li>
\t\t\t\t\t\t\t <li><input type=\"password\" value=\"\"></li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Re-enter Password:</li>
\t\t\t\t\t\t\t <li><input type=\"password\" value=\"\"></li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mobile Number:</li>
\t\t\t\t\t\t\t <li><input type=\"text\" value=\"\"></li>
\t\t\t\t\t\t </ul>
-->
\t\t\t\t\t\t{{form_rest(form) }}
\t\t\t\t\t\t <input type=\"submit\" value=\"Creer un compte\">
\t\t\t\t\t\t <p class=\"click\">By clicking this button, you are agree to my  <a href=\"#\">Policy Terms and Conditions.</a></p> 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t <h3>Creer un compte administrateur</h3>
\t\t\t\t <div class=\"strip\"></div>
\t\t\t\t <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
\t\t\t\t libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
{% endblock %}

", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/creercompteAdmin.html.twig");
    }
}
