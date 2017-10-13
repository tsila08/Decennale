<?php

/* AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig */
class __TwigTemplate_fefde2c2d5d88d87fa48e1d4b083f5a66529ed2491a3891465929b7e99e4cc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig", 1);
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
        echo "-Reinitialiser votre mot de passe ";
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
\t\t<h2>Choisissez votre nouveau mot de passe</h2>
\t\tVous serrez ensuite rediriger vers la page de connexion. Utiliser votre adresse mail et nouveau mot de passe pour vous conncter.
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t 
\t\t\t\t\t";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors')) {
            // line 19
            echo "\t\t\t\t\t <div class=\"alert alert-danger\">  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
            echo " </div>
\t\t\t\t\t ";
        }
        // line 21
        echo "\t\t\t\t\t ";
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">  ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo " </div>
\t\t\t\t\t ";
        }
        // line 24
        echo "\t\t\t\t\t <form  method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_reinitialiser_mot_de_passe", array("mail" => (isset($context["mail"]) ? $context["mail"] : null), "motDePasse" => (isset($context["mdp"]) ? $context["mdp"] : null))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'enctype');
        echo ">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nouveau Mdp* :</li>
\t\t\t\t\t\t\t<li>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "password", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Confirmer nouv Mdp* :</li>
\t\t\t\t\t\t\t<li>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "confirmationMdp", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'rest');
        echo "
\t\t\t\t\t\t 
\t\t\t\t\t\t <input type=\"submit\" value=\"Reinitialiser mot de passe\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<br>
";
    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  97 => 31,  90 => 27,  81 => 24,  75 => 22,  72 => 21,  66 => 19,  64 => 18,  55 => 11,  52 => 10,  46 => 8,  43 => 7,  38 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/reinitialiserMotDePasse.html.twig");
    }
}
