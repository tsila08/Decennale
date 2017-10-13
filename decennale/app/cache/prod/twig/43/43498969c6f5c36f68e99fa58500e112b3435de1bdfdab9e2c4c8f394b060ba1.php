<?php

/* AbiUtilisateurBundle:Utilisateur:creercompte.html.twig */
class __TwigTemplate_538354db8b7661d43a3d0d7163d9976f95a86f01ced49abb99b28178d15af57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:creercompte.html.twig", 1);
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
        echo "-Créer un compte ";
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
\t\t<h2>Créer un compte</h2>
\t\t<div class=\"registration-grids\">
\t\t\t<div class=\"reg-form\">
\t\t\t\t<div class=\"reg\">
\t\t\t\t\t <p>Veuillez fournir les renseignements suivants pour continuer.</p>
\t\t\t\t\t <p>Si vous avez déjà un compte, <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_login");
        echo "\">Connectez-vous</a></p>
\t\t\t\t\t ";
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_utilisateur_creercompte");
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
\t\t\t\t\t\t\t<li class=\"text-info\">Photo * : </li>
\t\t\t\t\t\t\t<li>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "photoProfil", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Nom * : </li>
\t\t\t\t\t\t\t<li>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Entreprise : </li>
\t\t\t\t\t\t\t<li>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomEntreprise", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Mail *: </li>
\t\t\t\t\t\t\t<li>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mail", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Mot de passe  * : </li>
\t\t\t\t\t\t\t<li>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Confirmer MDP*:</li>
\t\t\t\t\t\t\t<li>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmationMdp", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Télephone * : </li>
\t\t\t\t\t\t\t<li>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Adresse : </li>
\t\t\t\t\t\t\t<li>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>\t\t\t\t 
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"text-info\">Ville  * : </li>
\t\t\t\t\t\t\t<li>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget');
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t\t\t<p class=\"click\">En cliquant sur ce bouton, vous acceptez nos  <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bds_routine_a_propos_du_site");
        echo "\">conditions générales d'utilisation.</a></p> 
\t\t\t\t\t\t <p>Votre compte sera crée et vous serrez rediriger vers la page d'authentification. Vous pouvez commencer à vous connecter avec l'adresse mail et le mot de passe que avez choisi. </p>\t
\t\t\t\t\t\t <input type=\"submit\" value=\"Creer un compte\">
\t\t\t\t\t\t 
\t\t\t\t\t </form> 

\t\t\t\t </div>
\t\t\t\t 
\t\t\t</div>
\t\t\t<div class=\"reg-right\">
\t\t\t\t <h3>Pour vous entrepreneurs</h3>
\t\t\t\t <div class=\"strip\"></div>
\t\t\t\t <p>Ce site vous permet de créer un compte avec lequel vous pourrez
\t\t\t\t\tprésenter vos produits et vos services pour les mettre en ligne et
\t\t\t\t\tles proposer à d'autres entrepreneurs hommes ou femmes d'affaires.
\t\t\t\t\t<br>
\t\t\t\t\tNous nous chargerons de publier et d’émettre les publicités
\t\t\t\t\tconcernant vos produits et services. L’accrocheur et les descriptions
\t\t\t\t\tconcernant les produits seront rédigés par le propriétaire des
\t\t\t\t\tproduits lui-même.
\t\t\t\t\t<br>Les entrepreneurs acheteurs se soumettront aux mêmes conditions que
\t\t\t\t\tles particuliers


\t\t\t\t</p>
\t\t\t\t <h3 class=\"lorem\">Pour vous  porteurs de projets ou futures relations d'affaires</h3>
\t\t\t\t <div class=\"strip\"></div>
\t\t\t\t <p>   Ce site vous offrira divers services pour faciliter la préparation de
\t\t\t\t\tvotre projet, accompagner son lancement ou renforcer l'exploitation de
\t\t\t\t\tvotre activité. Vous y verrez des conseils, des vidéos, des
\t\t\t\t\tinterviews, vous pourrez suivre des programmes qui vont  changer votre
\t\t\t\t\tquotidien professionnel et confirmer votre réussite  d'entrepreneur
\t\t\t\t\tcar « on ne naît pas entrepreneur, on le devient »
\t\t\t\t\t<br>
\t\t\t\t\t<h4>Choisissez votre type d’activité</h4>
\t\t\t\t\t<div class=\"strip\"></div>
\t\t\t\t\t<p>Entrer dans l’accueil puis choisir les catégories qui vous
\t\t\t\t\tconviennent : Hypestyle, Bien-être, Art de manger

\t\t\t\t\t</p>
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<h3>Les avantages apportés par MYTSENA</h3>
\t\t\t\t <div class=\"strip\"></div>
\t\t\t\t <p>Ce site permet de faciliter votre mode de vie au quotidien. MYTSENA
\t\t\t\t\taide l'entrepreneur à trouver auprès des autres entrepreneurs des
\t\t\t\t\tpartenaires potentiels, des solutions d'activités communes, et des
\t\t\t\t\tréseaux de relations pour accéder aux informations, aux
\t\t\t\t\tcollaborateurs et aux ressources qui vous permettent d'avancer plus
\t\t\t\t\tsûrement et plus activement.

\t\t\t\t\t<br>
\t\t\t\t\tVotre temps est votre première ressource : pour passer  vos commandes
\t\t\t\t\tsans vous déplacer, il suffit de vous inscrire pour pouvoir profiter
\t\t\t\t\tdes offres et facilitations exceptionnelles MYTSENA.

\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:creercompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 66,  161 => 65,  156 => 63,  149 => 59,  142 => 55,  135 => 51,  128 => 47,  121 => 43,  114 => 39,  107 => 35,  100 => 31,  93 => 27,  84 => 24,  78 => 22,  75 => 21,  69 => 19,  67 => 18,  63 => 17,  55 => 11,  52 => 10,  46 => 8,  43 => 7,  38 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:creercompte.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/creercompte.html.twig");
    }
}
