<?php

/* AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig */
class __TwigTemplate_43a555125fce8a631cc65b1da4fd6c17d617b7b039a31a7c11e6ba178b6c9a3a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "-Recuperer votre compte ";
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
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo " </label></span>
\t\t\t\t  </div>
\t\t\t\t  <div>
\t\t\t\t\t<span>Adresse mail : <label>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : null), "html", null, true);
        echo "</label></span>
\t\t\t\t  </div>
\t\t\t\tEn continuant, nous allons vous envoyer un lien pour récupérer votre compte à votre adresse mail.
\t\t\t\t  <a class=\"forgot\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_recuperer_mot_de_passe", array("mail" => (isset($context["mail"]) ? $context["mail"] : null))), "html", null, true);
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
        return array (  84 => 29,  78 => 26,  72 => 23,  62 => 16,  55 => 11,  52 => 10,  46 => 8,  43 => 7,  38 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/verifierRecupererMotDePasse.html.twig");
    }
}
