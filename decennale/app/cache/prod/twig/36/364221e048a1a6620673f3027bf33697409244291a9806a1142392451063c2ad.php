<?php

/* AbiRoutineBundle:Routine:quisommesnous.html.twig */
class __TwigTemplate_576189b7f37a081c80f3ad06a55e7da2ad04438ac421a8f697488a38cc887858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiRoutineBundle:Routine:quisommesnous.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'qui_sommes_nous_parent_active' => array($this, 'block_qui_sommes_nous_parent_active'),
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
        echo "--qui sommes nous";
    }

    // line 3
    public function block_qui_sommes_nous_parent_active($context, array $blocks = array())
    {
        echo "active";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"main\">
    <div class=\"container\">
\t\t
        <h1>Qui sommes nous</h1>
\t\t<div class=\"col-md-9\">
\t\t\t<h2>TERME REALISATION</h2>
\t\t\t<h3>Réalisation : </h3>
\t\t\t<p>comprend pour toutes les activités du tableau, la mise en oeuvre y compris la préparation des supports, 
\t\t\tla transformation, le confortement, la réparation, la maintenance, l'entretien, et le montage-levage.</p>
\t\t\t<p>Par la notion de travaux accessoires et/ou complémentaires, il faut entendre la réalisation de 
\t\t\ttravaux nécessaires et indispensables à l'exécution des travaux relevant de l'activité principale 
\t\t\tdéfinie. Ces travaux répertoriés comme accessoires ou complémentaires ne peuvent en aucun cas faire 
\t\t\tl'objet d'un marché de travaux à part entière. Si tel est le cas, l'attestation d'assurance doit 
\t\t\treproduire précisément l'activité objet du marché de travaux. A l'inverse, 
\t\t\tces travaux seraient alors réputés non garantis.</p>
\t\t\t<h4>PREPARATION AMENAGEMENTS DU SITE</h4>
\t\t\t<h6>1. Assurance décennale Démolition </h6>
\t\t\t<p>Démolition d’ouvrage par des moyens manuels ou mécaniques (hors explosifs). 
\t\t\tCette activité comprend, pour les raccordements et la protection des existants, 
\t\t\tles travaux accessoires ou complémentaires de :Maçonnerie ;Zinguerie, couverture et étanchéité ;VRD</p>
\t\t\t<h6>2. Assurance décennale Terrassement </p>
\t\t\t<p>Réalisation à ciel ouvert, de creusement et de blindage de fouilles provisoires dans les sols, ainsi que des travaux de rabattement de nappes nécessaires à l'exécution des travaux, de remblai, d'enrochement non lié et de comblement sauf pour les carrières ayant pour objet soit de constituer par eux-mêmes un ouvrage soit de permettre la
\t\t\tréalisation d'un ouvrage. Cette activité comprend les sondages et forages.</p>
\t\t\t
\t\t<hr>
\t\t<p><i class=\"fa fa-calendar\"></i>22 août 2017</p>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t<img class=\"img-responsive\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/devis-gratuit.png"), "html", null, true);
        echo "\">
\t\t<h3>Devis Décennale Constructeur </h3>
\t\t<p>Votre assurance décennale en 3 Clics ! devis gratuit assurance decennale</p>
\t\t</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AbiRoutineBundle:Routine:quisommesnous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 33,  46 => 5,  43 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiRoutineBundle:Routine:quisommesnous.html.twig", "/var/www/projet/decennale/src/Abi/RoutineBundle/Resources/views/Routine/quisommesnous.html.twig");
    }
}
