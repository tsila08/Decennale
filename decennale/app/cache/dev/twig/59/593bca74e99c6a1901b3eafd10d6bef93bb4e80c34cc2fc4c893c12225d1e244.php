<?php

/* InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig */
class __TwigTemplate_20017262f20c03b3119162f02486b2d84de4d15cbf74a0b9606825a5f624b739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig", 1);
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
        $__internal_ef005e3e9c7554614eee2b19b4fee8d469bc75006a19697ba7a6b16ceccf87a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef005e3e9c7554614eee2b19b4fee8d469bc75006a19697ba7a6b16ceccf87a3->enter($__internal_ef005e3e9c7554614eee2b19b4fee8d469bc75006a19697ba7a6b16ceccf87a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef005e3e9c7554614eee2b19b4fee8d469bc75006a19697ba7a6b16ceccf87a3->leave($__internal_ef005e3e9c7554614eee2b19b4fee8d469bc75006a19697ba7a6b16ceccf87a3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a3f92acf929999aa40155ddf0260d7efc41ba95b7064bf81c0d0f10a866b2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3f92acf929999aa40155ddf0260d7efc41ba95b7064bf81c0d0f10a866b2c6->enter($__internal_2a3f92acf929999aa40155ddf0260d7efc41ba95b7064bf81c0d0f10a866b2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Confirmer votre souscription";
        
        $__internal_2a3f92acf929999aa40155ddf0260d7efc41ba95b7064bf81c0d0f10a866b2c6->leave($__internal_2a3f92acf929999aa40155ddf0260d7efc41ba95b7064bf81c0d0f10a866b2c6_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_1fc3408e2e26b60c3aa607e44d3b028bfa5050c2ea3684291ba7c3b94717807e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc3408e2e26b60c3aa607e44d3b028bfa5050c2ea3684291ba7c3b94717807e->enter($__internal_1fc3408e2e26b60c3aa607e44d3b028bfa5050c2ea3684291ba7c3b94717807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig"));

        echo "active ";
        
        $__internal_1fc3408e2e26b60c3aa607e44d3b028bfa5050c2ea3684291ba7c3b94717807e->leave($__internal_1fc3408e2e26b60c3aa607e44d3b028bfa5050c2ea3684291ba7c3b94717807e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b3988c1e466bfabaf45497da6c9f02164a33747c26274926d8d504f951a00b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3988c1e466bfabaf45497da6c9f02164a33747c26274926d8d504f951a00b2->enter($__internal_6b3988c1e466bfabaf45497da6c9f02164a33747c26274926d8d504f951a00b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig"));

        // line 5
        echo "<div class=\"main\">
    <div class=\"container\">
        <h1>Veuillez confirmer votre souscription </h1>
\t\tConsulter votre adresse mail <strong>\" ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo " \"</strong> et cliquez sur le lien indiqué pour activer gratuitement votre compte.
\t\t
\t\t<div>
\t\t\t
\t\t</div>
\t\t<hr>
    </div>
</div>
";
        
        $__internal_6b3988c1e466bfabaf45497da6c9f02164a33747c26274926d8d504f951a00b2->leave($__internal_6b3988c1e466bfabaf45497da6c9f02164a33747c26274926d8d504f951a00b2_prof);

    }

    public function getTemplateName()
    {
        return "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  67 => 5,  61 => 4,  49 => 3,  36 => 2,  11 => 1,);
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
        <h1>Veuillez confirmer votre souscription </h1>
\t\tConsulter votre adresse mail <strong>\" {{mail}} \"</strong> et cliquez sur le lien indiqué pour activer gratuitement votre compte.
\t\t
\t\t<div>
\t\t\t
\t\t</div>
\t\t<hr>
    </div>
</div>
{% endblock%}", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Demande/confirmationMailDemandeur.html.twig");
    }
}
