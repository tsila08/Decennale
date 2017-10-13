<?php

/* AbiUtilisateurBundle:Utilisateur:monCompte.html.twig */
class __TwigTemplate_6c2a4a9c212b1a7d27d2ff990920970078e77cc06bcd3e151daf563b774e4671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig", 1);
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
        echo "--";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "userfirstname", array()), "html", null, true);
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

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
          <!-- BEGIN SIDEBAR -->
          <div class=\"sidebar col-md-3 col-sm-3\">
            <ul class=\"list-group margin-bottom-25 sidebar-menu\">
              <li class=\"list-group-item clearfix\"><a href=\"javascript:;\"><i class=\"fa fa-angle-right\"></i> Tableau de bord</a></li>
\t\t\t  <li class=\"list-group-item clearfix\"><a href=\"javascript:;\"><i class=\"fa fa-angle-right\"></i> Mes documents</a></li>
\t\t\t  <li class=\"list-group-item clearfix\"><a href=\"javascript:;\"><i class=\"fa fa-angle-right\"></i> Demande de tarification</a></li>
              <li class=\"list-group-item clearfix\"><a href=\"javascript:;\"><i class=\"fa fa-angle-right\"></i> Attestations</a></li>
              <li class=\"list-group-item clearfix\"><a href=\"javascript:;\"><i class=\"fa fa-angle-right\"></i> Messages</a></li>
\t\t\t  <li class=\"list-group-item clearfix\"><a href=\"javascript:;\"><i class=\"fa fa-angle-right\"></i> Mon profil</a></li>

            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class=\"col-md-9 col-sm-9\">
            <h1>Votre tableau de bord</h1>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t<h2>Bienvenu ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "userfirstname", array()), "html", null, true);
        echo "</h2>
\t\t\t\t<p align=\"right\"><a href=\"\">Masquer cette notification</a></p>
\t\t\t</div>
            <div class=\"content-form-page\">
              <div class=\"row\">
                <div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t<h4>Mes coordonnées</h4>
\t\t\t\t\t<p><strong>Nom : </strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Prenom : </strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "userfirstname", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Email : </strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "mail", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Téléphone : </strong>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "clientTel", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Adresse : </strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "clientAdresse", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Ville : </strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "clientVille", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<button class=\"btn btn-primary\">Modifier <i class=\"fa fa-edit\"></i></button>
                </div>
\t\t\t\t <div class=\"col-md-7 col-sm-7\">
\t\t\t\t\t<h4>Ma société</h4>
\t\t\t\t\t<p><strong>Raison sociale :</strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : null), "soRaisonSocial", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Forme juridique :</strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : null), "soFormjuridique", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>N° SIRET :</strong>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : null), "soSiret", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Date de création :</strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : null), "soDateDeCreation", array()), "d-M-Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Nombre de salariés :</strong>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : null), "soNbSalarier", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Chiffre d'affaire :</strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : null), "soChiffreAffaire", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<button class=\"btn btn-primary\">Modifier <i class=\"fa fa-edit\"></i></button>
                </div>

              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  114 => 45,  106 => 40,  102 => 39,  98 => 38,  94 => 37,  90 => 36,  86 => 35,  74 => 28,  49 => 5,  46 => 4,  40 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/monCompte.html.twig");
    }
}
