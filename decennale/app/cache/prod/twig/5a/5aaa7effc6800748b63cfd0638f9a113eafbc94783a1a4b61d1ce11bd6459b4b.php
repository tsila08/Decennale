<?php

/* InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig */
class __TwigTemplate_55e3adf75af702bfa0d83d443bddbf6b45f3c407c605e3451256aad8b25952ca extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "--Confirmer votre souscription";
    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        echo "active ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"main\">
    <div class=\"container\">
        <h1>Votre souscription a été validé. </h1>
\t\tMail : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : null), "html", null, true);
        echo "</p>
\t\tVotre mot de passe : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["motDePasse"]) ? $context["motDePasse"] : null), "html", null, true);
        echo "
\t\t
\t\t<div>
\t\t\t
\t\t</div>
    </div>
</div>
";
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
        return array (  55 => 9,  51 => 8,  46 => 5,  43 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Demande/confirmerMailDemandeur.html.twig");
    }
}
