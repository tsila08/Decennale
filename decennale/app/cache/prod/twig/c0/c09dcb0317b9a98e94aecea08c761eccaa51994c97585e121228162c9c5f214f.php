<?php

/* AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig */
class __TwigTemplate_09e8727df0cb0b9747485b7e615423e35f61dbc34d84996ad8455f12339991ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "-Recuperer votre compte";
    }

    // line 4
    public function block_body_avec_pop_up($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body_sans_pop_up($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body_sans_pop_up", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<br>
\t\t<h2>Votre demande a été prise en compte</h2>
\t\tNous allons vous envoyer (par mail sauf indication spécifique de votre part) un lien vous permettant de reinitialiser votre mot de passe.
\t\t<p>Pour recevoir le lien par sms, veuillez nous contacter. </p>
\t\t<br>
";
    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  52 => 10,  46 => 8,  43 => 7,  38 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/recupMdpEffectue.html.twig");
    }
}
