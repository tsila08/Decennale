<?php

/* AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig */
class __TwigTemplate_e287147ced7c3c918ec7baede45b3c0521715990f02347b46cee017cc2b397da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "-Ajouter un administrateur ";
    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<br>
\t\t<h2>Ajouiter un nouveau administrateur</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Welcome, please enter the following details to continue.</p>
\t\t\t\t\t 
\t\t\t\t\t";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 13
            echo "\t\t\t\t\t <div class=\"alert alert-danger\">  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo " </div>
\t\t\t\t\t ";
        }
        // line 15
        echo "\t\t\t\t\t ";
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 16
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">  ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo " </div>
\t\t\t\t\t ";
        }
        // line 18
        echo "\t\t\t\t\t <form  method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_creercompte_admin");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Nom : </li>
\t\t\t\t\t\t\t <li>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mail : </li>
\t\t\t\t\t\t\t <li>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mail", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t </ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mot de passe : </li>
\t\t\t\t\t\t\t <li>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t </ul>
<!--
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Password: </li>
\t\t\t\t\t\t\t <li><input type=\"password\" value=\"\"></li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Re-enter Password:</li>
\t\t\t\t\t\t\t <li><input type=\"password\" value=\"\"></li>
\t\t\t\t\t\t </ul>
\t\t\t\t\t\t <ul>
\t\t\t\t\t\t\t <li class=\"text-info\">Mobile Number:</li>
\t\t\t\t\t\t\t <li><input type=\"text\" value=\"\"></li>
\t\t\t\t\t\t </ul>
-->
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t\t\t <input type=\"submit\" value=\"Creer un compte\">
\t\t\t\t\t\t <p class=\"click\">By clicking this button, you are agree to my  <a href=\"#\">Policy Terms and Conditions.</a></p> 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t <h3>Creer un compte administrateur</h3>
\t\t\t\t <div class=\"strip\"></div>
\t\t\t\t <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
\t\t\t\t libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  88 => 29,  81 => 25,  74 => 21,  65 => 18,  59 => 16,  56 => 15,  50 => 13,  48 => 12,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:creercompteAdmin.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/creercompteAdmin.html.twig");
    }
}
