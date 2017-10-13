<?php

/* AbiUtilisateurBundle:Utilisateur:monCompte.html.twig */
class __TwigTemplate_b92f20006aac09532af53c62b3b444e86e4fa114812a9fa1de21945cb52ab209 extends Twig_Template
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
        $__internal_a5ca9284e0e7ec7ef41d4a9c300b89e2325f96775d453a6e67a6d42a74f26dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ca9284e0e7ec7ef41d4a9c300b89e2325f96775d453a6e67a6d42a74f26dd8->enter($__internal_a5ca9284e0e7ec7ef41d4a9c300b89e2325f96775d453a6e67a6d42a74f26dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ca9284e0e7ec7ef41d4a9c300b89e2325f96775d453a6e67a6d42a74f26dd8->leave($__internal_a5ca9284e0e7ec7ef41d4a9c300b89e2325f96775d453a6e67a6d42a74f26dd8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd10d95b8f5d57ccb6f7ce68eca0b76200bfbf7a378081b1656a1fa1d1576d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd10d95b8f5d57ccb6f7ce68eca0b76200bfbf7a378081b1656a1fa1d1576d9c->enter($__internal_bd10d95b8f5d57ccb6f7ce68eca0b76200bfbf7a378081b1656a1fa1d1576d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userfirstname", array()), "html", null, true);
        
        $__internal_bd10d95b8f5d57ccb6f7ce68eca0b76200bfbf7a378081b1656a1fa1d1576d9c->leave($__internal_bd10d95b8f5d57ccb6f7ce68eca0b76200bfbf7a378081b1656a1fa1d1576d9c_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_ed1950961f1b3b9d9e41f9f65adb682cb8b6b102f4793a1a0f207fa8e68bfbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1950961f1b3b9d9e41f9f65adb682cb8b6b102f4793a1a0f207fa8e68bfbaf->enter($__internal_ed1950961f1b3b9d9e41f9f65adb682cb8b6b102f4793a1a0f207fa8e68bfbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig"));

        echo "active ";
        
        $__internal_ed1950961f1b3b9d9e41f9f65adb682cb8b6b102f4793a1a0f207fa8e68bfbaf->leave($__internal_ed1950961f1b3b9d9e41f9f65adb682cb8b6b102f4793a1a0f207fa8e68bfbaf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_447aa7bdbd3b863687065e73fe98f31d837b5941c13561e26902057b379ff777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447aa7bdbd3b863687065e73fe98f31d837b5941c13561e26902057b379ff777->enter($__internal_447aa7bdbd3b863687065e73fe98f31d837b5941c13561e26902057b379ff777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userfirstname", array()), "html", null, true);
        echo "</h2>
\t\t\t\t<p align=\"right\"><a href=\"\">Masquer cette notification</a></p>
\t\t\t</div>
            <div class=\"content-form-page\">
              <div class=\"row\">
                <div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t<h4>Mes coordonnées</h4>
\t\t\t\t\t<p><strong>Nom : </strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Prenom : </strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userfirstname", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Email : </strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mail", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Téléphone : </strong>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "clientTel", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Adresse : </strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "clientAdresse", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Ville : </strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "clientVille", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<button class=\"btn btn-primary\">Modifier <i class=\"fa fa-edit\"></i></button>
                </div>
\t\t\t\t <div class=\"col-md-7 col-sm-7\">
\t\t\t\t\t<h4>Ma société</h4>
\t\t\t\t\t<p><strong>Raison sociale :</strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "soRaisonSocial", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Forme juridique :</strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "soFormjuridique", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>N° SIRET :</strong>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "soSiret", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Date de création :</strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "soDateDeCreation", array()), "d-M-Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Nombre de salariés :</strong>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "soNbSalarier", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><strong>Chiffre d'affaire :</strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "soChiffreAffaire", array()), "html", null, true);
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
        
        $__internal_447aa7bdbd3b863687065e73fe98f31d837b5941c13561e26902057b379ff777->leave($__internal_447aa7bdbd3b863687065e73fe98f31d837b5941c13561e26902057b379ff777_prof);

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
        return array (  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  95 => 28,  70 => 5,  64 => 4,  52 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block title %}{{parent()}}--{{app.user.username}} {{app.user.userfirstname}}{% endblock %}
{% block acceuil_parent_active %}active {% endblock %}
{% block body%}
<div class=\"main\">
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
\t\t\t\t<h2>Bienvenu {{app.user.username}} {{app.user.userfirstname}}</h2>
\t\t\t\t<p align=\"right\"><a href=\"\">Masquer cette notification</a></p>
\t\t\t</div>
            <div class=\"content-form-page\">
              <div class=\"row\">
                <div class=\"col-md-5 col-sm-5\">
\t\t\t\t\t<h4>Mes coordonnées</h4>
\t\t\t\t\t<p><strong>Nom : </strong>{{app.user.username}}</p>
\t\t\t\t\t<p><strong>Prenom : </strong>{{app.user.userfirstname}}</p>
\t\t\t\t\t<p><strong>Email : </strong>{{app.user.mail}}</p>
\t\t\t\t\t<p><strong>Téléphone : </strong>{{app.user.clientTel}}</p>
\t\t\t\t\t<p><strong>Adresse : </strong>{{app.user.clientAdresse}}</p>
\t\t\t\t\t<p><strong>Ville : </strong>{{app.user.clientVille}}</p>
\t\t\t\t\t<button class=\"btn btn-primary\">Modifier <i class=\"fa fa-edit\"></i></button>
                </div>
\t\t\t\t <div class=\"col-md-7 col-sm-7\">
\t\t\t\t\t<h4>Ma société</h4>
\t\t\t\t\t<p><strong>Raison sociale :</strong>{{societe.soRaisonSocial}}</p>
\t\t\t\t\t<p><strong>Forme juridique :</strong>{{societe.soFormjuridique}}</p>
\t\t\t\t\t<p><strong>N° SIRET :</strong>{{societe.soSiret}}</p>
\t\t\t\t\t<p><strong>Date de création :</strong>{{societe.soDateDeCreation |date('d-M-Y')}}</p>
\t\t\t\t\t<p><strong>Nombre de salariés :</strong>{{societe.soNbSalarier}}</p>
\t\t\t\t\t<p><strong>Chiffre d'affaire :</strong>{{societe.soChiffreAffaire}}</p>
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
{% endblock %}", "AbiUtilisateurBundle:Utilisateur:monCompte.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/monCompte.html.twig");
    }
}
