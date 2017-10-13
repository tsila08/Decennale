<?php

/* AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig */
class __TwigTemplate_bd29e064fcf36a6bcb1f0a9a3820949cbd9a1e28455454646c4c5b9827c91ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig", 1);
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
        echo "-Modifier votre profil ";
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
\t\t<h2>Modifier votre profil</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Veuillez fournir les renseignements suivants pour continuer.</p>
\t\t\t\t\t 
\t\t\t\t\t";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 19
            echo "\t\t\t\t\t <div class=\"alert alert-danger\">  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_modifier_profil");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Type d'activité * : </li>
\t\t\t\t\t\t\t<li>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "typeCompteString", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nom * : </li>
\t\t\t\t\t\t\t<li>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Entreprise : </li>
\t\t\t\t\t\t\t<li>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomEntreprise", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Télephone * : </li>
\t\t\t\t\t\t\t<li>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Adresse : </li>
\t\t\t\t\t\t\t<li>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Ville  * : </li>
\t\t\t\t\t\t\t<li>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t\t\t<p class=\"click\">Pour modifier votre mot de passe ou votre adresse mail  <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_modifier_info_connexion");
        echo "\">cliquer ici.</a></p> 
\t\t\t\t\t\t <input type=\"submit\" value=\"Modifier votre profil\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t 
\t\t\t\t 
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<br>
";
    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  130 => 49,  125 => 47,  118 => 43,  111 => 39,  104 => 35,  97 => 31,  90 => 27,  81 => 24,  75 => 22,  72 => 21,  66 => 19,  64 => 18,  55 => 11,  52 => 10,  46 => 8,  43 => 7,  38 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/modifierProfil.html.twig");
    }
}
