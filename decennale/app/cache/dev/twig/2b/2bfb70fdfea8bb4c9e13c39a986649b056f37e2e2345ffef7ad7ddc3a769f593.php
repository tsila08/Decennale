<?php

/* ::layout.html.twig */
class __TwigTemplate_94d48198afe3614b0d0dac87482070e009faa4ac6c968c01059a1cde330dde37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'acceuil_parent_active' => array($this, 'block_acceuil_parent_active'),
            'nos_service_parent_active' => array($this, 'block_nos_service_parent_active'),
            'nos_service_serv1_active' => array($this, 'block_nos_service_serv1_active'),
            'nos_service_serv2_active' => array($this, 'block_nos_service_serv2_active'),
            'nos_service_serv3_active' => array($this, 'block_nos_service_serv3_active'),
            'nos_service_serv4_active' => array($this, 'block_nos_service_serv4_active'),
            'nos_service_serv5_active' => array($this, 'block_nos_service_serv5_active'),
            'nos_service_serv6_active' => array($this, 'block_nos_service_serv6_active'),
            'qui_sommes_nous_parent_active' => array($this, 'block_qui_sommes_nous_parent_active'),
            'qui_sommes_nous_item1_active' => array($this, 'block_qui_sommes_nous_item1_active'),
            'qui_sommes_nous_item2_active' => array($this, 'block_qui_sommes_nous_item2_active'),
            'nous_contacter_parent_active' => array($this, 'block_nous_contacter_parent_active'),
            'body' => array($this, 'block_body'),
            'script_page' => array($this, 'block_script_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b04012fa8317752b835cf479b2e18a807f8b5e343a78acafaa20d80547f767a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b04012fa8317752b835cf479b2e18a807f8b5e343a78acafaa20d80547f767a->enter($__internal_1b04012fa8317752b835cf479b2e18a807f8b5e343a78acafaa20d80547f767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <meta content=\"Devis Decennale\" name=\"description\">
  <meta content=\"Devis en ligne Decennale infojet\" name=\"keywords\">
  <meta content=\"infojet\" name=\"author\">

  <meta property=\"og:site_name\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:title\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:description\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:image\" content=\"-CUSTOMER VALUE-\"><!-- link to image for socio -->
  <meta property=\"og:url\" content=\"-CUSTOMER VALUE-\">

  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  ";
        // line 29
        $this->displayBlock('style', $context, $blocks);
        // line 55
        echo "
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class=\"corporate\">

    <!-- BEGIN TOP BAR -->
    <div class=\"pre-header\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class=\"col-md-6 col-sm-6 additional-shop-info\">
                    <ul class=\"list-unstyled list-inline\">
                        <li><i class=\"fa fa-phone\"></i><span>+1 456 6717</span></li>
                        <li><i class=\"fa fa-envelope-o\"></i><span>devis@decennale.fr</span></li>
  <li><i class=\"fa fa-envelope-o\"></i><span><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_afficherComs", array("pageD" => 0, "pagef" => 10, "valide" => 0)), "html", null, true);
        echo "\" >commentaires</a></span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class=\"col-md-6 col-sm-6 additional-nav\">
                    <ul class=\"list-unstyled list-inline pull-right\">
\t\t\t\t\t\t";
        // line 78
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 79
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_login");
            echo "\">Se connecter</a></li>
                        <li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_creercompte");
            echo "\">Créer un compte</a></li>
\t\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_logout");
            echo "\">Deconnecter (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userfirstname", array()), "html", null, true);
            echo ")</a></li>
                        <li><a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_mon_compte");
            echo "\">Mon compte</a></li>
\t\t\t\t\t\t";
        }
        // line 85
        echo "                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class=\"header\">
      <div class=\"container\">
        <a class=\"site-logo\" href=\"index.html\"><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/logo.png"), "html", null, true);
        echo "\" alt=\"Devis decennale\"></a>

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"";
        // line 102
        $this->displayBlock('acceuil_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_homepage");
        echo "\">
                Acceuil
              </a>           

            <li class=\"";
        // line 107
        $this->displayBlock('nos_service_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"\">
                Nos services
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"";
        // line 112
        $this->displayBlock('nos_service_serv1_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_devis_decennale_architecte");
        echo "\">Devis Decennale Architecte</a>
                </li>
                <li class=\"";
        // line 115
        $this->displayBlock('nos_service_serv2_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_devis_decennale_constructeur");
        echo "\">Constructeur</a>
                </li>
                <li class=\"";
        // line 118
        $this->displayBlock('nos_service_serv3_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_obligation");
        echo "\">Obligation</a>
                </li>
                <li class=\"";
        // line 121
        $this->displayBlock('nos_service_serv4_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_resiliation");
        echo "\">Resiliation</a>
                </li>
                <li class=\"";
        // line 124
        $this->displayBlock('nos_service_serv5_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_souscription");
        echo "\">Souscription</a>
                </li>
                <li class=\"";
        // line 127
        $this->displayBlock('nos_service_serv6_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_documentation");
        echo "\">Documentation</a>
                </li>               
              </ul>
            </li>
            <li class=\"";
        // line 132
        $this->displayBlock('qui_sommes_nous_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"\">
                Qui sommes-nous ?
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"";
        // line 137
        $this->displayBlock('qui_sommes_nous_item1_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_qui_sommes_nous");
        echo "\">A propos de nous</a>
                </li>
                <li class=\"";
        // line 140
        $this->displayBlock('qui_sommes_nous_item2_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-about.html\">Les commentaires sur nous</a>
                </li>
                
              </ul>
            </li>
            <li class=\"";
        // line 146
        $this->displayBlock('nous_contacter_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_contact");
        echo "\">
                Nous contacter
              </a>
            </li>


          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

   ";
        // line 160
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "
    <!-- BEGIN PRE-FOOTER -->
    <div class=\"pre-footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>Devis Decennale</h2>
            <p>Obtenez gratuitement un devis d'assurance pour votre garantie décennale sur le site http://devis-decennale.fr ! </p>

            <div class=\"photo-stream\">
              <h2>Nos références</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img5-small.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img1.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img4-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img6.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img3.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img2-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img2.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img5.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img5-small.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img1.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img4-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img6.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img3.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img2-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img2.jpg"), "html", null, true);
        echo "\"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>Nous contacter</h2>
            <address class=\"margin-bottom-40\">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href=\"mailto:info@metronic.com\">info@metronic.com</a><br>
              Skype: <a href=\"skype:metronic\">metronic</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class=\"col-md-4 col-sm-6 pre-footer-col\">
          \t<h2>Nos services</h2>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Devis décennale constructeur</a><br>
\t\t\t<a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Devis Décennale Architecte</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Obligation</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Résiliation</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Souscription</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Documentation</a><br>
             
             <h2>Qui sommes-nous</h2>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Qui sommes nous</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Les commentaires</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Nous contacter</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN COPYRIGHT -->
          <div class=\"col-md-4 col-sm-4 padding-top-10\">
            Copyright © Devis decennale 2017. Tous droit réservé. 
            <a href=\"javascript:;\">Mentions légales</a> | 
            <a href=\"javascript:;\">Conditions générales</a>| 
            <a href=\"javascript:;\">Protéction des données</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class=\"col-md-4 col-sm-4\">
            <ul class=\"social-footer list-unstyled list-inline pull-right\">
              <li><a href=\"javascript:;\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-google-plus\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-skype\"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class=\"col-md-4 col-sm-4 text-right\">
            <p class=\"powered\">Crée par: <a href=\"http://www.infojet.com/\">infojet.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]--> 
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/scripts/back-to-top.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flexslider/js/jquery.flexisel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flexslider/js/jquery.flexslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script><!-- slider for products -->

    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/bs-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
\t";
        // line 293
        $this->displayBlock('script_page', $context, $blocks);
        // line 295
        echo "</body>
<!-- END BODY -->
</html>
";
        
        $__internal_1b04012fa8317752b835cf479b2e18a807f8b5e343a78acafaa20d80547f767a->leave($__internal_1b04012fa8317752b835cf479b2e18a807f8b5e343a78acafaa20d80547f767a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d362437a8873133bca9a15b2975572cf9f8e17aabf5a38ccd75e9eac6cede4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d362437a8873133bca9a15b2975572cf9f8e17aabf5a38ccd75e9eac6cede4f->enter($__internal_4d362437a8873133bca9a15b2975572cf9f8e17aabf5a38ccd75e9eac6cede4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "Devis Decennale ";
        
        $__internal_4d362437a8873133bca9a15b2975572cf9f8e17aabf5a38ccd75e9eac6cede4f->leave($__internal_4d362437a8873133bca9a15b2975572cf9f8e17aabf5a38ccd75e9eac6cede4f_prof);

    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
        $__internal_8a5884f2192bf0599b73274645e651375c3cc27ab4cf2fd83864b3d2243704a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5884f2192bf0599b73274645e651375c3cc27ab4cf2fd83864b3d2243704a5->enter($__internal_8a5884f2192bf0599b73274645e651375c3cc27ab4cf2fd83864b3d2243704a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 30
        echo "  <!-- Fonts START -->
  <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl.carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flexslider/css/flexslider.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" media=\"screen\" />
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/css/themes/turquoise.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-color\">
  <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Theme styles END -->
  ";
        
        $__internal_8a5884f2192bf0599b73274645e651375c3cc27ab4cf2fd83864b3d2243704a5->leave($__internal_8a5884f2192bf0599b73274645e651375c3cc27ab4cf2fd83864b3d2243704a5_prof);

    }

    // line 102
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_339423095b0a7bb45c98f9ba4462a8ef1d1459409a1d2b0482cfe667029bd642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339423095b0a7bb45c98f9ba4462a8ef1d1459409a1d2b0482cfe667029bd642->enter($__internal_339423095b0a7bb45c98f9ba4462a8ef1d1459409a1d2b0482cfe667029bd642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_339423095b0a7bb45c98f9ba4462a8ef1d1459409a1d2b0482cfe667029bd642->leave($__internal_339423095b0a7bb45c98f9ba4462a8ef1d1459409a1d2b0482cfe667029bd642_prof);

    }

    // line 107
    public function block_nos_service_parent_active($context, array $blocks = array())
    {
        $__internal_664956c1e5a4f982b0a737dd7f146271734a20c2249e71b6f54514699229e792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664956c1e5a4f982b0a737dd7f146271734a20c2249e71b6f54514699229e792->enter($__internal_664956c1e5a4f982b0a737dd7f146271734a20c2249e71b6f54514699229e792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_664956c1e5a4f982b0a737dd7f146271734a20c2249e71b6f54514699229e792->leave($__internal_664956c1e5a4f982b0a737dd7f146271734a20c2249e71b6f54514699229e792_prof);

    }

    // line 112
    public function block_nos_service_serv1_active($context, array $blocks = array())
    {
        $__internal_8a9302228d6e5e7470fd62aed61e32759c4f0c7ea36abff16db3ac751c92eb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9302228d6e5e7470fd62aed61e32759c4f0c7ea36abff16db3ac751c92eb62->enter($__internal_8a9302228d6e5e7470fd62aed61e32759c4f0c7ea36abff16db3ac751c92eb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_8a9302228d6e5e7470fd62aed61e32759c4f0c7ea36abff16db3ac751c92eb62->leave($__internal_8a9302228d6e5e7470fd62aed61e32759c4f0c7ea36abff16db3ac751c92eb62_prof);

    }

    // line 115
    public function block_nos_service_serv2_active($context, array $blocks = array())
    {
        $__internal_3922c90ad2514da0e3235db3f8e92e3377b24ed7c4dc49e3a3d341a9a2ae5c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3922c90ad2514da0e3235db3f8e92e3377b24ed7c4dc49e3a3d341a9a2ae5c8a->enter($__internal_3922c90ad2514da0e3235db3f8e92e3377b24ed7c4dc49e3a3d341a9a2ae5c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_3922c90ad2514da0e3235db3f8e92e3377b24ed7c4dc49e3a3d341a9a2ae5c8a->leave($__internal_3922c90ad2514da0e3235db3f8e92e3377b24ed7c4dc49e3a3d341a9a2ae5c8a_prof);

    }

    // line 118
    public function block_nos_service_serv3_active($context, array $blocks = array())
    {
        $__internal_a747954fafe684518de04a897f4df4d7f1ea869ebe38c4069fb68f4464fd9ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a747954fafe684518de04a897f4df4d7f1ea869ebe38c4069fb68f4464fd9ebe->enter($__internal_a747954fafe684518de04a897f4df4d7f1ea869ebe38c4069fb68f4464fd9ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_a747954fafe684518de04a897f4df4d7f1ea869ebe38c4069fb68f4464fd9ebe->leave($__internal_a747954fafe684518de04a897f4df4d7f1ea869ebe38c4069fb68f4464fd9ebe_prof);

    }

    // line 121
    public function block_nos_service_serv4_active($context, array $blocks = array())
    {
        $__internal_5f004d06fe180992f9ca1eee5fa82b9bb4fa4c61f8064c03fbed24e6ca91eab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f004d06fe180992f9ca1eee5fa82b9bb4fa4c61f8064c03fbed24e6ca91eab0->enter($__internal_5f004d06fe180992f9ca1eee5fa82b9bb4fa4c61f8064c03fbed24e6ca91eab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_5f004d06fe180992f9ca1eee5fa82b9bb4fa4c61f8064c03fbed24e6ca91eab0->leave($__internal_5f004d06fe180992f9ca1eee5fa82b9bb4fa4c61f8064c03fbed24e6ca91eab0_prof);

    }

    // line 124
    public function block_nos_service_serv5_active($context, array $blocks = array())
    {
        $__internal_603c888b904fde5ad870c825d60f99b6fa278fba966c736645efc2a1be18ab0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603c888b904fde5ad870c825d60f99b6fa278fba966c736645efc2a1be18ab0e->enter($__internal_603c888b904fde5ad870c825d60f99b6fa278fba966c736645efc2a1be18ab0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_603c888b904fde5ad870c825d60f99b6fa278fba966c736645efc2a1be18ab0e->leave($__internal_603c888b904fde5ad870c825d60f99b6fa278fba966c736645efc2a1be18ab0e_prof);

    }

    // line 127
    public function block_nos_service_serv6_active($context, array $blocks = array())
    {
        $__internal_4095dcf36ba046beef7c8225ebdd9eb113470f6c0b3062343048d29ae768780e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4095dcf36ba046beef7c8225ebdd9eb113470f6c0b3062343048d29ae768780e->enter($__internal_4095dcf36ba046beef7c8225ebdd9eb113470f6c0b3062343048d29ae768780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_4095dcf36ba046beef7c8225ebdd9eb113470f6c0b3062343048d29ae768780e->leave($__internal_4095dcf36ba046beef7c8225ebdd9eb113470f6c0b3062343048d29ae768780e_prof);

    }

    // line 132
    public function block_qui_sommes_nous_parent_active($context, array $blocks = array())
    {
        $__internal_07e967b9bad42ee99b28bbe19aa8eca580d90475fa0e488db754483392f39f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e967b9bad42ee99b28bbe19aa8eca580d90475fa0e488db754483392f39f10->enter($__internal_07e967b9bad42ee99b28bbe19aa8eca580d90475fa0e488db754483392f39f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_07e967b9bad42ee99b28bbe19aa8eca580d90475fa0e488db754483392f39f10->leave($__internal_07e967b9bad42ee99b28bbe19aa8eca580d90475fa0e488db754483392f39f10_prof);

    }

    // line 137
    public function block_qui_sommes_nous_item1_active($context, array $blocks = array())
    {
        $__internal_94131620a4169d80723c6cb518292db308ce99be17cfdc1dc305be44a9e52b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94131620a4169d80723c6cb518292db308ce99be17cfdc1dc305be44a9e52b9f->enter($__internal_94131620a4169d80723c6cb518292db308ce99be17cfdc1dc305be44a9e52b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_94131620a4169d80723c6cb518292db308ce99be17cfdc1dc305be44a9e52b9f->leave($__internal_94131620a4169d80723c6cb518292db308ce99be17cfdc1dc305be44a9e52b9f_prof);

    }

    // line 140
    public function block_qui_sommes_nous_item2_active($context, array $blocks = array())
    {
        $__internal_11dc88fff508d95e4ebc066599af576189ebc249ff038b078ec89fb2e4908fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11dc88fff508d95e4ebc066599af576189ebc249ff038b078ec89fb2e4908fde->enter($__internal_11dc88fff508d95e4ebc066599af576189ebc249ff038b078ec89fb2e4908fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_11dc88fff508d95e4ebc066599af576189ebc249ff038b078ec89fb2e4908fde->leave($__internal_11dc88fff508d95e4ebc066599af576189ebc249ff038b078ec89fb2e4908fde_prof);

    }

    // line 146
    public function block_nous_contacter_parent_active($context, array $blocks = array())
    {
        $__internal_785ca8d88849badf8d406d9c2ccf6b39f77d30487c4ee809d1d44afab8c03b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785ca8d88849badf8d406d9c2ccf6b39f77d30487c4ee809d1d44afab8c03b34->enter($__internal_785ca8d88849badf8d406d9c2ccf6b39f77d30487c4ee809d1d44afab8c03b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_785ca8d88849badf8d406d9c2ccf6b39f77d30487c4ee809d1d44afab8c03b34->leave($__internal_785ca8d88849badf8d406d9c2ccf6b39f77d30487c4ee809d1d44afab8c03b34_prof);

    }

    // line 160
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb41a4469ff1e52b0e6f1e3f73798c8790f6752131c55794a44d2d5ab5944091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb41a4469ff1e52b0e6f1e3f73798c8790f6752131c55794a44d2d5ab5944091->enter($__internal_fb41a4469ff1e52b0e6f1e3f73798c8790f6752131c55794a44d2d5ab5944091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 161
        echo "   ";
        
        $__internal_fb41a4469ff1e52b0e6f1e3f73798c8790f6752131c55794a44d2d5ab5944091->leave($__internal_fb41a4469ff1e52b0e6f1e3f73798c8790f6752131c55794a44d2d5ab5944091_prof);

    }

    // line 293
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_12629f1082f7a8e5f9137d47d0a207ecb344a570611d54de60d6de6bf9c46676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12629f1082f7a8e5f9137d47d0a207ecb344a570611d54de60d6de6bf9c46676->enter($__internal_12629f1082f7a8e5f9137d47d0a207ecb344a570611d54de60d6de6bf9c46676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 294
        echo "\t";
        
        $__internal_12629f1082f7a8e5f9137d47d0a207ecb344a570611d54de60d6de6bf9c46676->leave($__internal_12629f1082f7a8e5f9137d47d0a207ecb344a570611d54de60d6de6bf9c46676_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 294,  725 => 293,  718 => 161,  712 => 160,  701 => 146,  690 => 140,  679 => 137,  668 => 132,  657 => 127,  646 => 124,  635 => 121,  624 => 118,  613 => 115,  602 => 112,  591 => 107,  580 => 102,  570 => 52,  566 => 51,  562 => 50,  558 => 49,  554 => 48,  550 => 47,  543 => 43,  539 => 42,  535 => 41,  531 => 40,  524 => 36,  520 => 35,  513 => 30,  507 => 29,  495 => 12,  485 => 295,  483 => 293,  469 => 282,  465 => 281,  460 => 279,  456 => 278,  449 => 274,  445 => 273,  440 => 271,  436 => 270,  432 => 269,  428 => 268,  423 => 266,  343 => 189,  339 => 188,  335 => 187,  331 => 186,  327 => 185,  323 => 184,  319 => 183,  315 => 182,  311 => 181,  307 => 180,  303 => 179,  299 => 178,  295 => 177,  291 => 176,  287 => 175,  272 => 162,  270 => 160,  254 => 147,  250 => 146,  241 => 140,  236 => 138,  232 => 137,  224 => 132,  217 => 128,  213 => 127,  208 => 125,  204 => 124,  199 => 122,  195 => 121,  190 => 119,  186 => 118,  181 => 116,  177 => 115,  172 => 113,  168 => 112,  160 => 107,  153 => 103,  149 => 102,  139 => 95,  127 => 85,  122 => 83,  113 => 82,  108 => 80,  103 => 79,  101 => 78,  91 => 71,  73 => 55,  71 => 29,  51 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset=\"utf-8\">
  <title>{% block title%}Devis Decennale {%endblock %}</title>

  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <meta content=\"Devis Decennale\" name=\"description\">
  <meta content=\"Devis en ligne Decennale infojet\" name=\"keywords\">
  <meta content=\"infojet\" name=\"author\">

  <meta property=\"og:site_name\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:title\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:description\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:image\" content=\"-CUSTOMER VALUE-\"><!-- link to image for socio -->
  <meta property=\"og:url\" content=\"-CUSTOMER VALUE-\">

  <link rel=\"shortcut icon\" href=\"favicon.ico\">
  {% block style %}
  <!-- Fonts START -->
  <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href=\"{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href=\"{{asset('assets/pages/css/animate.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/plugins/fancybox/source/jquery.fancybox.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/plugins/owl.carousel/assets/owl.carousel.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/plugins/flexslider/css/flexslider.css')}}\"  rel=\"stylesheet\" media=\"screen\" />
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href=\"{{asset('assets/pages/css/components.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/pages/css/slider.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/corporate/css/style.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/corporate/css/style-responsive.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/corporate/css/themes/turquoise.css')}}\" rel=\"stylesheet\" id=\"style-color\">
  <link href=\"{{asset('assets/corporate/css/custom.css')}}\" rel=\"stylesheet\">
  <!-- Theme styles END -->
  {% endblock%}

</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class=\"corporate\">

    <!-- BEGIN TOP BAR -->
    <div class=\"pre-header\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class=\"col-md-6 col-sm-6 additional-shop-info\">
                    <ul class=\"list-unstyled list-inline\">
                        <li><i class=\"fa fa-phone\"></i><span>+1 456 6717</span></li>
                        <li><i class=\"fa fa-envelope-o\"></i><span>devis@decennale.fr</span></li>
  <li><i class=\"fa fa-envelope-o\"></i><span><a href=\"{{ path('devis_decennale_afficherComs', { 'pageD': 0,'pagef' : 10 ,'valide': 0})}}\" >commentaires</a></span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class=\"col-md-6 col-sm-6 additional-nav\">
                    <ul class=\"list-unstyled list-inline pull-right\">
\t\t\t\t\t\t{% if not app.user %}
                        <li><a href=\"{{path('abi_utilisateur_login')}}\">Se connecter</a></li>
                        <li><a href=\"{{path('abi_utilisateur_creercompte')}}\">Créer un compte</a></li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li><a href=\"{{path('abi_utilisateur_logout')}}\">Deconnecter ({{app.user.username}} {{app.user.userfirstname}})</a></li>
                        <li><a href=\"{{path('abi_utilisateur_mon_compte')}}\">Mon compte</a></li>
\t\t\t\t\t\t{% endif %}
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class=\"header\">
      <div class=\"container\">
        <a class=\"site-logo\" href=\"index.html\"><img src=\"{{asset('assets/pages/img/devis-decennale/logo.png')}}\" alt=\"Devis decennale\"></a>

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"{% block acceuil_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"{{path('abi_routine_homepage')}}\">
                Acceuil
              </a>           

            <li class=\"{% block nos_service_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"\">
                Nos services
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"{% block nos_service_serv1_active %}{% endblock%}\">
                \t<a href=\"{{path('infojet_service_devis_decennale_architecte')}}\">Devis Decennale Architecte</a>
                </li>
                <li class=\"{% block nos_service_serv2_active %}{% endblock%}\">
                \t<a href=\"{{path('infojet_service_devis_decennale_constructeur')}}\">Constructeur</a>
                </li>
                <li class=\"{% block nos_service_serv3_active %}{% endblock%}\">
                \t<a href=\"{{path('infojet_service_obligation')}}\">Obligation</a>
                </li>
                <li class=\"{% block nos_service_serv4_active %}{% endblock%}\">
                \t<a href=\"{{path('infojet_service_resiliation')}}\">Resiliation</a>
                </li>
                <li class=\"{% block nos_service_serv5_active %}{% endblock%}\">
                \t<a href=\"{{path('infojet_service_souscription')}}\">Souscription</a>
                </li>
                <li class=\"{% block nos_service_serv6_active %}{% endblock%}\">
                \t<a href=\"{{path('infojet_service_documentation')}}\">Documentation</a>
                </li>               
              </ul>
            </li>
            <li class=\"{% block qui_sommes_nous_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"\">
                Qui sommes-nous ?
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"{% block qui_sommes_nous_item1_active %}{% endblock%}\">
                \t<a href=\"{{path('abi_routine_qui_sommes_nous')}}\">A propos de nous</a>
                </li>
                <li class=\"{% block qui_sommes_nous_item2_active %}{% endblock%}\">
                \t<a href=\"page-about.html\">Les commentaires sur nous</a>
                </li>
                
              </ul>
            </li>
            <li class=\"{% block nous_contacter_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"{{path('abi_routine_contact')}}\">
                Nous contacter
              </a>
            </li>


          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

   {% block body %}
   {% endblock%}

    <!-- BEGIN PRE-FOOTER -->
    <div class=\"pre-footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>Devis Decennale</h2>
            <p>Obtenez gratuitement un devis d'assurance pour votre garantie décennale sur le site http://devis-decennale.fr ! </p>

            <div class=\"photo-stream\">
              <h2>Nos références</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/people/img5-small.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img1.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/people/img4-large.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img6.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img3.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/people/img2-large.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img2.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img5.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/people/img5-small.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img1.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/people/img4-large.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img6.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img3.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/people/img2-large.jpg')}}\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"{{asset('assets/pages/img/works/img2.jpg')}}\"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>Nous contacter</h2>
            <address class=\"margin-bottom-40\">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href=\"mailto:info@metronic.com\">info@metronic.com</a><br>
              Skype: <a href=\"skype:metronic\">metronic</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class=\"col-md-4 col-sm-6 pre-footer-col\">
          \t<h2>Nos services</h2>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Devis décennale constructeur</a><br>
\t\t\t<a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Devis Décennale Architecte</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Obligation</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Résiliation</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Souscription</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Documentation</a><br>
             
             <h2>Qui sommes-nous</h2>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Qui sommes nous</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Les commentaires</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Nous contacter</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN COPYRIGHT -->
          <div class=\"col-md-4 col-sm-4 padding-top-10\">
            Copyright © Devis decennale 2017. Tous droit réservé. 
            <a href=\"javascript:;\">Mentions légales</a> | 
            <a href=\"javascript:;\">Conditions générales</a>| 
            <a href=\"javascript:;\">Protéction des données</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class=\"col-md-4 col-sm-4\">
            <ul class=\"social-footer list-unstyled list-inline pull-right\">
              <li><a href=\"javascript:;\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-google-plus\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-skype\"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class=\"col-md-4 col-sm-4 text-right\">
            <p class=\"powered\">Crée par: <a href=\"http://www.infojet.com/\">infojet.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"{{asset('assets/plugins/respond.min.js')}}\"></script>
    <![endif]--> 
    <script src=\"{{asset('assets/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/jquery-migrate.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>      
    <script src=\"{{asset('assets/corporate/scripts/back-to-top.js')}}\" type=\"text/javascript\"></script>
\t
\t<script src=\"{{asset('assets/plugins/flexslider/js/jquery.flexisel.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('assets/plugins/flexslider/js/jquery.flexslider.js')}}\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"{{asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"{{asset('assets/plugins/owl.carousel/owl.carousel.min.js')}}\" type=\"text/javascript\"></script><!-- slider for products -->

    <script src=\"{{asset('assets/corporate/scripts/layout.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/pages/scripts/bs-carousel.js')}}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
\t{% block script_page %}
\t{% endblock %}
</body>
<!-- END BODY -->
</html>
", "::layout.html.twig", "/var/www/projet/decennale/app/Resources/views/layout.html.twig");
    }
}
