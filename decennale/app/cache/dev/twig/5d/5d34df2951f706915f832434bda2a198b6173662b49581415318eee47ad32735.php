<?php

/* InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig */
class __TwigTemplate_d427ddb4a36dba395854bcd33bc956f1a44dfef631646222b1c7e74aa5dabee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'acceuil_parent_active' => array($this, 'block_acceuil_parent_active'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0831602ffdc698f81d366ec24943010440ea01e84110d072417accb25e7d0d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0831602ffdc698f81d366ec24943010440ea01e84110d072417accb25e7d0d61->enter($__internal_0831602ffdc698f81d366ec24943010440ea01e84110d072417accb25e7d0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0831602ffdc698f81d366ec24943010440ea01e84110d072417accb25e7d0d61->leave($__internal_0831602ffdc698f81d366ec24943010440ea01e84110d072417accb25e7d0d61_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b4748c0b2166e46e2000a4831ba741824eb6738fd8065afe0dde8241911a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b4748c0b2166e46e2000a4831ba741824eb6738fd8065afe0dde8241911a09->enter($__internal_06b4748c0b2166e46e2000a4831ba741824eb6738fd8065afe0dde8241911a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Confirmer votre souscription";
        
        $__internal_06b4748c0b2166e46e2000a4831ba741824eb6738fd8065afe0dde8241911a09->leave($__internal_06b4748c0b2166e46e2000a4831ba741824eb6738fd8065afe0dde8241911a09_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_160dc025217c78c59f3491f0e417c4d0d24bef8044af38f0fea68c9ce59e00e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160dc025217c78c59f3491f0e417c4d0d24bef8044af38f0fea68c9ce59e00e4->enter($__internal_160dc025217c78c59f3491f0e417c4d0d24bef8044af38f0fea68c9ce59e00e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        echo "active ";
        
        $__internal_160dc025217c78c59f3491f0e417c4d0d24bef8044af38f0fea68c9ce59e00e4->leave($__internal_160dc025217c78c59f3491f0e417c4d0d24bef8044af38f0fea68c9ce59e00e4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_db712482b99c88b313f709df83692c1683cd328c994b95e2590942ce5457817c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db712482b99c88b313f709df83692c1683cd328c994b95e2590942ce5457817c->enter($__internal_db712482b99c88b313f709df83692c1683cd328c994b95e2590942ce5457817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        // line 5
        echo "<div class=\"main\">
    <div class=\"container\">
        <h1>Votre souscription a été validé. </h1>
\t\tMail : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</p>
\t\tVotre mot de passe : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["motDePasse"]) ? $context["motDePasse"] : $this->getContext($context, "motDePasse")), "html", null, true);
        echo "
\t\t
\t\t<div>
\t\t\t
\t\t</div>
    </div>
</div>
";
        
        $__internal_db712482b99c88b313f709df83692c1683cd328c994b95e2590942ce5457817c->leave($__internal_db712482b99c88b313f709df83692c1683cd328c994b95e2590942ce5457817c_prof);

    }

    public function getTemplateName()
    {
        return "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  72 => 8,  67 => 5,  61 => 4,  49 => 3,  36 => 2,  11 => 1,);
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
{% block title %}{{parent()}}--Confirmer votre souscription{% endblock %}
{% block acceuil_parent_active %}active {% endblock %}
{% block body%}
<div class=\"main\">
    <div class=\"container\">
        <h1>Votre souscription a été validé. </h1>
\t\tMail : {{mail}}</p>
\t\tVotre mot de passe : {{motDePasse}}
\t\t
\t\t<div>
\t\t\t
\t\t</div>
    </div>
</div>
{% endblock%}", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Demande/confirmerMailDemandeur.html.twig");
    }
}
