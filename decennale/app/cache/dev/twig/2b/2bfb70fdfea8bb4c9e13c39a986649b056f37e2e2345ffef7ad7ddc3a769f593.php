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
        $__internal_4e7afa7323b2c648606153670f21d26f6cd05a0e7338d8bcf0565dd0e282d0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7afa7323b2c648606153670f21d26f6cd05a0e7338d8bcf0565dd0e282d0b9->enter($__internal_4e7afa7323b2c648606153670f21d26f6cd05a0e7338d8bcf0565dd0e282d0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59d8c1d4c28eca75e4624a15/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

    <!-- BEGIN TOP BAR -->
    <div class=\"pre-header\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class=\"col-md-6 col-sm-6 additional-shop-info\">
                    <ul class=\"list-unstyled list-inline\">
                        <li><i class=\"fa fa-phone\"></i><span>+1 456 6717</span></li>
                        <li><i class=\"fa fa-envelope-o\"></i><span>devis@decennalee.fr</span></li>
  <li><i class=\"fa fa-envelope-o\"></i><span><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_afficherComs", array("pageD" => 0, "pagef" => 10, "valide" => 0)), "html", null, true);
        echo "\" >commentaires</a></span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class=\"col-md-6 col-sm-6 additional-nav\">
                    <ul class=\"list-unstyled list-inline pull-right\">
\t\t\t\t\t\t";
        // line 89
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 90
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_login");
            echo "\">Se connecter</a></li>
                        <li><a href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_creercompte");
            echo "\">Créer un compte</a></li>
\t\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_logout");
            echo "\">Deconnecter (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userfirstname", array()), "html", null, true);
            echo ")</a></li>
                        <li><a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_mon_compte");
            echo "\">Mon compte</a></li>
\t\t\t\t\t\t";
        }
        // line 96
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
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/logo.png"), "html", null, true);
        echo "\" alt=\"Devis decennale\"></a>

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"";
        // line 113
        $this->displayBlock('acceuil_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_homepage");
        echo "\">
                Acceuil
              </a>           

            <li class=\"";
        // line 118
        $this->displayBlock('nos_service_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"\">
                Nos services
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"";
        // line 123
        $this->displayBlock('nos_service_serv1_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_devis_decennale_architecte");
        echo "\">Devis Decennale Architecte</a>
                </li>
                <li class=\"";
        // line 126
        $this->displayBlock('nos_service_serv2_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_devis_decennale_constructeur");
        echo "\">Constructeur</a>
                </li>
                <li class=\"";
        // line 129
        $this->displayBlock('nos_service_serv3_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_obligation");
        echo "\">Obligation</a>
                </li>
                <li class=\"";
        // line 132
        $this->displayBlock('nos_service_serv4_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_resiliation");
        echo "\">Resiliation</a>
                </li>
                <li class=\"";
        // line 135
        $this->displayBlock('nos_service_serv5_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_souscription");
        echo "\">Souscription</a>
                </li>
                <li class=\"";
        // line 138
        $this->displayBlock('nos_service_serv6_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_documentation");
        echo "\">Documentation</a>
                </li>               
              </ul>
            </li>
            <li class=\"";
        // line 143
        $this->displayBlock('qui_sommes_nous_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"\">
                Qui sommes-nous ?
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"";
        // line 148
        $this->displayBlock('qui_sommes_nous_item1_active', $context, $blocks);
        echo "\">
                \t<a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_qui_sommes_nous");
        echo "\">A propos de nous</a>
                </li>
                <li class=\"";
        // line 151
        $this->displayBlock('qui_sommes_nous_item2_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-about.html\">Les commentaires sur nous</a>
                </li>
                
              </ul>
            </li>
            <li class=\"";
        // line 157
        $this->displayBlock('nous_contacter_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"";
        // line 158
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
        // line 171
        $this->displayBlock('body', $context, $blocks);
        // line 173
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
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img5-small.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img1.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img4-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img6.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img3.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img2-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img2.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img5.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img5-small.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img1.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img4-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img6.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img3.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/people/img2-large.jpg"), "html", null, true);
        echo "\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"";
        // line 200
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
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]--> 
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>      
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/scripts/back-to-top.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flexslider/js/jquery.flexisel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flexslider/js/jquery.flexslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script><!-- slider for products -->

    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 293
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
        // line 304
        $this->displayBlock('script_page', $context, $blocks);
        // line 306
        echo "</body>
<!-- END BODY -->
</html>
";
        
        $__internal_4e7afa7323b2c648606153670f21d26f6cd05a0e7338d8bcf0565dd0e282d0b9->leave($__internal_4e7afa7323b2c648606153670f21d26f6cd05a0e7338d8bcf0565dd0e282d0b9_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_83d4b867c9b71db672e1030146439ad51d2934678c9894f381dc603c5ff58e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d4b867c9b71db672e1030146439ad51d2934678c9894f381dc603c5ff58e3c->enter($__internal_83d4b867c9b71db672e1030146439ad51d2934678c9894f381dc603c5ff58e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        echo "Devis Decennale ";
        
        $__internal_83d4b867c9b71db672e1030146439ad51d2934678c9894f381dc603c5ff58e3c->leave($__internal_83d4b867c9b71db672e1030146439ad51d2934678c9894f381dc603c5ff58e3c_prof);

    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
        $__internal_d0a335800beb9f778e73164fd795ba9cb49cd3aa5b788d97ccb92de8662ee70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a335800beb9f778e73164fd795ba9cb49cd3aa5b788d97ccb92de8662ee70e->enter($__internal_d0a335800beb9f778e73164fd795ba9cb49cd3aa5b788d97ccb92de8662ee70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

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
        
        $__internal_d0a335800beb9f778e73164fd795ba9cb49cd3aa5b788d97ccb92de8662ee70e->leave($__internal_d0a335800beb9f778e73164fd795ba9cb49cd3aa5b788d97ccb92de8662ee70e_prof);

    }

    // line 113
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_dc22f8df38d4fc9d8bd943770f28d5a7ac9e9bb90a1f835a1d419d2a6f390661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc22f8df38d4fc9d8bd943770f28d5a7ac9e9bb90a1f835a1d419d2a6f390661->enter($__internal_dc22f8df38d4fc9d8bd943770f28d5a7ac9e9bb90a1f835a1d419d2a6f390661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_dc22f8df38d4fc9d8bd943770f28d5a7ac9e9bb90a1f835a1d419d2a6f390661->leave($__internal_dc22f8df38d4fc9d8bd943770f28d5a7ac9e9bb90a1f835a1d419d2a6f390661_prof);

    }

    // line 118
    public function block_nos_service_parent_active($context, array $blocks = array())
    {
        $__internal_8a33e28ca507cced2ab131e6661036ceea65b2ab86d478e3d9d3a29054f5ee3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a33e28ca507cced2ab131e6661036ceea65b2ab86d478e3d9d3a29054f5ee3b->enter($__internal_8a33e28ca507cced2ab131e6661036ceea65b2ab86d478e3d9d3a29054f5ee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_8a33e28ca507cced2ab131e6661036ceea65b2ab86d478e3d9d3a29054f5ee3b->leave($__internal_8a33e28ca507cced2ab131e6661036ceea65b2ab86d478e3d9d3a29054f5ee3b_prof);

    }

    // line 123
    public function block_nos_service_serv1_active($context, array $blocks = array())
    {
        $__internal_392249a45a673a5f5184ae3242d595e756aecfa471c719e79a0fa89a48a2935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392249a45a673a5f5184ae3242d595e756aecfa471c719e79a0fa89a48a2935d->enter($__internal_392249a45a673a5f5184ae3242d595e756aecfa471c719e79a0fa89a48a2935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_392249a45a673a5f5184ae3242d595e756aecfa471c719e79a0fa89a48a2935d->leave($__internal_392249a45a673a5f5184ae3242d595e756aecfa471c719e79a0fa89a48a2935d_prof);

    }

    // line 126
    public function block_nos_service_serv2_active($context, array $blocks = array())
    {
        $__internal_bc6824403a75f404eed6eface73a55430c9971dd0e749fa93c446efbb49e4c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6824403a75f404eed6eface73a55430c9971dd0e749fa93c446efbb49e4c90->enter($__internal_bc6824403a75f404eed6eface73a55430c9971dd0e749fa93c446efbb49e4c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_bc6824403a75f404eed6eface73a55430c9971dd0e749fa93c446efbb49e4c90->leave($__internal_bc6824403a75f404eed6eface73a55430c9971dd0e749fa93c446efbb49e4c90_prof);

    }

    // line 129
    public function block_nos_service_serv3_active($context, array $blocks = array())
    {
        $__internal_db21af1da075d430da9d9796ad7001d9503acbc5f2bd9c9358032f38eaeb51ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db21af1da075d430da9d9796ad7001d9503acbc5f2bd9c9358032f38eaeb51ed->enter($__internal_db21af1da075d430da9d9796ad7001d9503acbc5f2bd9c9358032f38eaeb51ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_db21af1da075d430da9d9796ad7001d9503acbc5f2bd9c9358032f38eaeb51ed->leave($__internal_db21af1da075d430da9d9796ad7001d9503acbc5f2bd9c9358032f38eaeb51ed_prof);

    }

    // line 132
    public function block_nos_service_serv4_active($context, array $blocks = array())
    {
        $__internal_2f646aa8201159c19f109cbab65629895ccda97ce636f409094fdad5633230da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f646aa8201159c19f109cbab65629895ccda97ce636f409094fdad5633230da->enter($__internal_2f646aa8201159c19f109cbab65629895ccda97ce636f409094fdad5633230da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_2f646aa8201159c19f109cbab65629895ccda97ce636f409094fdad5633230da->leave($__internal_2f646aa8201159c19f109cbab65629895ccda97ce636f409094fdad5633230da_prof);

    }

    // line 135
    public function block_nos_service_serv5_active($context, array $blocks = array())
    {
        $__internal_de32af4cc1c82236c0ed33d2e47d774face29ec166f4e44329d103fb0af40463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de32af4cc1c82236c0ed33d2e47d774face29ec166f4e44329d103fb0af40463->enter($__internal_de32af4cc1c82236c0ed33d2e47d774face29ec166f4e44329d103fb0af40463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_de32af4cc1c82236c0ed33d2e47d774face29ec166f4e44329d103fb0af40463->leave($__internal_de32af4cc1c82236c0ed33d2e47d774face29ec166f4e44329d103fb0af40463_prof);

    }

    // line 138
    public function block_nos_service_serv6_active($context, array $blocks = array())
    {
        $__internal_ad1fcc043581b953b8962607b9ed7b66ce0a4b8eec46eb7d6647f2557b447e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1fcc043581b953b8962607b9ed7b66ce0a4b8eec46eb7d6647f2557b447e79->enter($__internal_ad1fcc043581b953b8962607b9ed7b66ce0a4b8eec46eb7d6647f2557b447e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_ad1fcc043581b953b8962607b9ed7b66ce0a4b8eec46eb7d6647f2557b447e79->leave($__internal_ad1fcc043581b953b8962607b9ed7b66ce0a4b8eec46eb7d6647f2557b447e79_prof);

    }

    // line 143
    public function block_qui_sommes_nous_parent_active($context, array $blocks = array())
    {
        $__internal_de41bc2112297be0d330a3da09649599d28f15597d3cd5d0a13076739ca15747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de41bc2112297be0d330a3da09649599d28f15597d3cd5d0a13076739ca15747->enter($__internal_de41bc2112297be0d330a3da09649599d28f15597d3cd5d0a13076739ca15747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_de41bc2112297be0d330a3da09649599d28f15597d3cd5d0a13076739ca15747->leave($__internal_de41bc2112297be0d330a3da09649599d28f15597d3cd5d0a13076739ca15747_prof);

    }

    // line 148
    public function block_qui_sommes_nous_item1_active($context, array $blocks = array())
    {
        $__internal_d42a4896e73be08edb2c7c9bde5a163416a4d2fe73a7376344f6ccb27d651bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42a4896e73be08edb2c7c9bde5a163416a4d2fe73a7376344f6ccb27d651bc9->enter($__internal_d42a4896e73be08edb2c7c9bde5a163416a4d2fe73a7376344f6ccb27d651bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_d42a4896e73be08edb2c7c9bde5a163416a4d2fe73a7376344f6ccb27d651bc9->leave($__internal_d42a4896e73be08edb2c7c9bde5a163416a4d2fe73a7376344f6ccb27d651bc9_prof);

    }

    // line 151
    public function block_qui_sommes_nous_item2_active($context, array $blocks = array())
    {
        $__internal_ab58bf7ec846a97ca20c91bb10f70d9d6cff633fca081731d7cebf12c727aade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab58bf7ec846a97ca20c91bb10f70d9d6cff633fca081731d7cebf12c727aade->enter($__internal_ab58bf7ec846a97ca20c91bb10f70d9d6cff633fca081731d7cebf12c727aade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_ab58bf7ec846a97ca20c91bb10f70d9d6cff633fca081731d7cebf12c727aade->leave($__internal_ab58bf7ec846a97ca20c91bb10f70d9d6cff633fca081731d7cebf12c727aade_prof);

    }

    // line 157
    public function block_nous_contacter_parent_active($context, array $blocks = array())
    {
        $__internal_e031ba1ff63bfa02b5c2b0d61015af6c648d6b1b03b6a4e3c44bd2d57a3566a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e031ba1ff63bfa02b5c2b0d61015af6c648d6b1b03b6a4e3c44bd2d57a3566a5->enter($__internal_e031ba1ff63bfa02b5c2b0d61015af6c648d6b1b03b6a4e3c44bd2d57a3566a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        
        $__internal_e031ba1ff63bfa02b5c2b0d61015af6c648d6b1b03b6a4e3c44bd2d57a3566a5->leave($__internal_e031ba1ff63bfa02b5c2b0d61015af6c648d6b1b03b6a4e3c44bd2d57a3566a5_prof);

    }

    // line 171
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5ed41fb3e2eb3657930d213c34ff9158a396dbe251403aef093cf90913bf970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ed41fb3e2eb3657930d213c34ff9158a396dbe251403aef093cf90913bf970->enter($__internal_b5ed41fb3e2eb3657930d213c34ff9158a396dbe251403aef093cf90913bf970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 172
        echo "   ";
        
        $__internal_b5ed41fb3e2eb3657930d213c34ff9158a396dbe251403aef093cf90913bf970->leave($__internal_b5ed41fb3e2eb3657930d213c34ff9158a396dbe251403aef093cf90913bf970_prof);

    }

    // line 304
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_67a920b6caabb6c9dac3d887585064a2435ddee0edabf19ed29327da6391cf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a920b6caabb6c9dac3d887585064a2435ddee0edabf19ed29327da6391cf3c->enter($__internal_67a920b6caabb6c9dac3d887585064a2435ddee0edabf19ed29327da6391cf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html.twig"));

        // line 305
        echo "\t";
        
        $__internal_67a920b6caabb6c9dac3d887585064a2435ddee0edabf19ed29327da6391cf3c->leave($__internal_67a920b6caabb6c9dac3d887585064a2435ddee0edabf19ed29327da6391cf3c_prof);

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
        return array (  742 => 305,  736 => 304,  729 => 172,  723 => 171,  712 => 157,  701 => 151,  690 => 148,  679 => 143,  668 => 138,  657 => 135,  646 => 132,  635 => 129,  624 => 126,  613 => 123,  602 => 118,  591 => 113,  581 => 52,  577 => 51,  573 => 50,  569 => 49,  565 => 48,  561 => 47,  554 => 43,  550 => 42,  546 => 41,  542 => 40,  535 => 36,  531 => 35,  524 => 30,  518 => 29,  506 => 12,  496 => 306,  494 => 304,  480 => 293,  476 => 292,  471 => 290,  467 => 289,  460 => 285,  456 => 284,  451 => 282,  447 => 281,  443 => 280,  439 => 279,  434 => 277,  354 => 200,  350 => 199,  346 => 198,  342 => 197,  338 => 196,  334 => 195,  330 => 194,  326 => 193,  322 => 192,  318 => 191,  314 => 190,  310 => 189,  306 => 188,  302 => 187,  298 => 186,  283 => 173,  281 => 171,  265 => 158,  261 => 157,  252 => 151,  247 => 149,  243 => 148,  235 => 143,  228 => 139,  224 => 138,  219 => 136,  215 => 135,  210 => 133,  206 => 132,  201 => 130,  197 => 129,  192 => 127,  188 => 126,  183 => 124,  179 => 123,  171 => 118,  164 => 114,  160 => 113,  150 => 106,  138 => 96,  133 => 94,  124 => 93,  119 => 91,  114 => 90,  112 => 89,  102 => 82,  73 => 55,  71 => 29,  51 => 12,  38 => 1,);
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
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59d8c1d4c28eca75e4624a15/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

    <!-- BEGIN TOP BAR -->
    <div class=\"pre-header\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class=\"col-md-6 col-sm-6 additional-shop-info\">
                    <ul class=\"list-unstyled list-inline\">
                        <li><i class=\"fa fa-phone\"></i><span>+1 456 6717</span></li>
                        <li><i class=\"fa fa-envelope-o\"></i><span>devis@decennalee.fr</span></li>
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
