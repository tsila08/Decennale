<?php

/* AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig */
class __TwigTemplate_22754516fe258e789e151f7121d215464f95a7b9440a676e11e6ef15ed56564e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig", 1);
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
        echo "-Mot de passe oublié ";
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
\t\t\t\t <p>Si vous avez oublié votre mot de passe, 
\t\t\t\t vous pouvez demander la reinitialisation de votre en donnant votre adresse mail. Si vous avez aussi oublié votre adresse mail, veuillez nous contacter par télephone.</p>
\t\t\t\t 
\t\t\t   </div>
\t\t\t   <div class=\"col-md-6 login-right wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t";
        // line 21
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\"> 
\t\t\t\t\t\t<h4>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t<form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_mot_de_passe_oublie");
        echo "\" >
\t\t\t\t  <div>
\t\t\t\t\t<span>Adresse mail: <label>*</label></span>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mail", array()), 'widget');
        echo "
\t\t\t\t  </div>
\t\t\t\t ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t  <input type=\"submit\" value=\"Récuperer mot de passe\">
\t\t\t\t  
\t\t\t\t  
\t\t\t    </form>
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
        return "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  86 => 30,  79 => 27,  72 => 23,  69 => 22,  67 => 21,  55 => 11,  52 => 10,  46 => 8,  43 => 7,  38 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/motDePasseOublie.html.twig");
    }
}
