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
        $__internal_4cb859f6b536b460182cfa45c1566d94c356ef47e3303fee48e2ef7012d2b226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb859f6b536b460182cfa45c1566d94c356ef47e3303fee48e2ef7012d2b226->enter($__internal_4cb859f6b536b460182cfa45c1566d94c356ef47e3303fee48e2ef7012d2b226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb859f6b536b460182cfa45c1566d94c356ef47e3303fee48e2ef7012d2b226->leave($__internal_4cb859f6b536b460182cfa45c1566d94c356ef47e3303fee48e2ef7012d2b226_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89597c69e0a2dfa421c4861f5c0d9eb711653f86d063fa4305d3bb88c7844c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89597c69e0a2dfa421c4861f5c0d9eb711653f86d063fa4305d3bb88c7844c3->enter($__internal_e89597c69e0a2dfa421c4861f5c0d9eb711653f86d063fa4305d3bb88c7844c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Confirmer votre souscription";
        
        $__internal_e89597c69e0a2dfa421c4861f5c0d9eb711653f86d063fa4305d3bb88c7844c3->leave($__internal_e89597c69e0a2dfa421c4861f5c0d9eb711653f86d063fa4305d3bb88c7844c3_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_dd66edfcd887a464e2fdb098b0bdaa804411fb5bb6958c223c6262f25b112e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd66edfcd887a464e2fdb098b0bdaa804411fb5bb6958c223c6262f25b112e85->enter($__internal_dd66edfcd887a464e2fdb098b0bdaa804411fb5bb6958c223c6262f25b112e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

        echo "active ";
        
        $__internal_dd66edfcd887a464e2fdb098b0bdaa804411fb5bb6958c223c6262f25b112e85->leave($__internal_dd66edfcd887a464e2fdb098b0bdaa804411fb5bb6958c223c6262f25b112e85_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c37ef5432222b40c45df2d6ada7e3a5ed894a92bc5f320a6b74c68f329632e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37ef5432222b40c45df2d6ada7e3a5ed894a92bc5f320a6b74c68f329632e5c->enter($__internal_c37ef5432222b40c45df2d6ada7e3a5ed894a92bc5f320a6b74c68f329632e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig"));

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
        
        $__internal_c37ef5432222b40c45df2d6ada7e3a5ed894a92bc5f320a6b74c68f329632e5c->leave($__internal_c37ef5432222b40c45df2d6ada7e3a5ed894a92bc5f320a6b74c68f329632e5c_prof);

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
