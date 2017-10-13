<?php

/* InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig */
class __TwigTemplate_324c828d304eb9a4766515962dcf0df7d4d2f3e15bb015d527e4a918f40daf59 extends Twig_Template
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
        <h1>Veuillez confirmer votre souscription </h1>
\t\tConsulter votre adresse mail <strong>\" ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : null), "html", null, true);
        echo " \"</strong> et cliquez sur le lien indiqué pour activer gratuitement votre compte.
\t\t
\t\t<div>
\t\t\t
\t\t</div>
\t\t<hr>
    </div>
</div>
";
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
        return array (  51 => 8,  46 => 5,  43 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Demande/confirmationMailDemandeur.html.twig");
    }
}
