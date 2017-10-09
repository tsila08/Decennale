<?php

/* ::layout.html.twig */
class __TwigTemplate_72c832af6fca9b2b6d29501c82ac7f1a096578ffdce02f70e2706ba5da27ac24 extends Twig_Template
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
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "userfirstname", array()), "html", null, true);
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
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Devis Decennale ";
    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
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
    }

    // line 102
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
    }

    // line 107
    public function block_nos_service_parent_active($context, array $blocks = array())
    {
    }

    // line 112
    public function block_nos_service_serv1_active($context, array $blocks = array())
    {
    }

    // line 115
    public function block_nos_service_serv2_active($context, array $blocks = array())
    {
    }

    // line 118
    public function block_nos_service_serv3_active($context, array $blocks = array())
    {
    }

    // line 121
    public function block_nos_service_serv4_active($context, array $blocks = array())
    {
    }

    // line 124
    public function block_nos_service_serv5_active($context, array $blocks = array())
    {
    }

    // line 127
    public function block_nos_service_serv6_active($context, array $blocks = array())
    {
    }

    // line 132
    public function block_qui_sommes_nous_parent_active($context, array $blocks = array())
    {
    }

    // line 137
    public function block_qui_sommes_nous_item1_active($context, array $blocks = array())
    {
    }

    // line 140
    public function block_qui_sommes_nous_item2_active($context, array $blocks = array())
    {
    }

    // line 146
    public function block_nous_contacter_parent_active($context, array $blocks = array())
    {
    }

    // line 160
    public function block_body($context, array $blocks = array())
    {
        // line 161
        echo "   ";
    }

    // line 293
    public function block_script_page($context, array $blocks = array())
    {
        // line 294
        echo "\t";
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
        return array (  632 => 294,  629 => 293,  625 => 161,  622 => 160,  617 => 146,  612 => 140,  607 => 137,  602 => 132,  597 => 127,  592 => 124,  587 => 121,  582 => 118,  577 => 115,  572 => 112,  567 => 107,  562 => 102,  555 => 52,  551 => 51,  547 => 50,  543 => 49,  539 => 48,  535 => 47,  528 => 43,  524 => 42,  520 => 41,  516 => 40,  509 => 36,  505 => 35,  498 => 30,  495 => 29,  489 => 12,  482 => 295,  480 => 293,  466 => 282,  462 => 281,  457 => 279,  453 => 278,  446 => 274,  442 => 273,  437 => 271,  433 => 270,  429 => 269,  425 => 268,  420 => 266,  340 => 189,  336 => 188,  332 => 187,  328 => 186,  324 => 185,  320 => 184,  316 => 183,  312 => 182,  308 => 181,  304 => 180,  300 => 179,  296 => 178,  292 => 177,  288 => 176,  284 => 175,  269 => 162,  267 => 160,  251 => 147,  247 => 146,  238 => 140,  233 => 138,  229 => 137,  221 => 132,  214 => 128,  210 => 127,  205 => 125,  201 => 124,  196 => 122,  192 => 121,  187 => 119,  183 => 118,  178 => 116,  174 => 115,  169 => 113,  165 => 112,  157 => 107,  150 => 103,  146 => 102,  136 => 95,  124 => 85,  119 => 83,  110 => 82,  105 => 80,  100 => 79,  98 => 78,  88 => 71,  70 => 55,  68 => 29,  48 => 12,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html.twig", "/var/www/projet/decennale/app/Resources/views/layout.html.twig");
    }
}
