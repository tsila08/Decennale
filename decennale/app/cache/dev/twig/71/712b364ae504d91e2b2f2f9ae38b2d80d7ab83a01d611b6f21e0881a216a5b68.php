<?php

/* InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig */
class __TwigTemplate_139bd73b588ee1c39fc98e95c7ca3812a9c973948465d840018739be9991d798 extends Twig_Template
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
        $__internal_a0908cf4e09c4acae1f91a803f8c4a849117dec656af6dcc0eed220b90261651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0908cf4e09c4acae1f91a803f8c4a849117dec656af6dcc0eed220b90261651->enter($__internal_a0908cf4e09c4acae1f91a803f8c4a849117dec656af6dcc0eed220b90261651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0908cf4e09c4acae1f91a803f8c4a849117dec656af6dcc0eed220b90261651->leave($__internal_a0908cf4e09c4acae1f91a803f8c4a849117dec656af6dcc0eed220b90261651_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aed47a388e3fde50a201dba89b1f621b0d8315c4df414693374f6e91738f7842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed47a388e3fde50a201dba89b1f621b0d8315c4df414693374f6e91738f7842->enter($__internal_aed47a388e3fde50a201dba89b1f621b0d8315c4df414693374f6e91738f7842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Confirmer votre souscription";
        
        $__internal_aed47a388e3fde50a201dba89b1f621b0d8315c4df414693374f6e91738f7842->leave($__internal_aed47a388e3fde50a201dba89b1f621b0d8315c4df414693374f6e91738f7842_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_feafae0cfca2b5a98f4f6a2bcd1d6afba06ef2a30ba4bd339fa71dcc7318de45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feafae0cfca2b5a98f4f6a2bcd1d6afba06ef2a30ba4bd339fa71dcc7318de45->enter($__internal_feafae0cfca2b5a98f4f6a2bcd1d6afba06ef2a30ba4bd339fa71dcc7318de45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        echo "active ";
        
        $__internal_feafae0cfca2b5a98f4f6a2bcd1d6afba06ef2a30ba4bd339fa71dcc7318de45->leave($__internal_feafae0cfca2b5a98f4f6a2bcd1d6afba06ef2a30ba4bd339fa71dcc7318de45_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad06fedb22a5a3eca776070f2d1e36ed79005cc86f21c2410b885c6514fd3ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad06fedb22a5a3eca776070f2d1e36ed79005cc86f21c2410b885c6514fd3ea3->enter($__internal_ad06fedb22a5a3eca776070f2d1e36ed79005cc86f21c2410b885c6514fd3ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

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
        
        $__internal_ad06fedb22a5a3eca776070f2d1e36ed79005cc86f21c2410b885c6514fd3ea3->leave($__internal_ad06fedb22a5a3eca776070f2d1e36ed79005cc86f21c2410b885c6514fd3ea3_prof);

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
