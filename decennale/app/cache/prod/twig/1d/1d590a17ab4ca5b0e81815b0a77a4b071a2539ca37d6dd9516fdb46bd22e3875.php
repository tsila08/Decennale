<?php

/* ::layout.html - Copie.twig */
class __TwigTemplate_5cddb8e67cf5c3637d706d2de0f98b41bc9eb160ae33b09ee51386eb5e8769ab extends Twig_Template
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
        // line 54
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
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class=\"col-md-6 col-sm-6 additional-nav\">
                    <ul class=\"list-unstyled list-inline pull-right\">
                        <li><a href=\"page-login.html\">Se connecter</a></li>
                        <li><a href=\"page-reg-page.html\">Créer un compte</a></li>
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
        <a class=\"site-logo\" href=\"index.html\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/img/logos/logo-corp-red.png"), "html", null, true);
        echo "\" alt=\"Devis decennale\"></a>

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"";
        // line 95
        $this->displayBlock('acceuil_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Acceuil
              </a>           

            <li class=\"";
        // line 100
        $this->displayBlock('nos_service_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Nos services
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"";
        // line 105
        $this->displayBlock('nos_service_serv1_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-about.html\">Devis Decennale Architecte</a>
                </li>
                <li class=\"";
        // line 108
        $this->displayBlock('nos_service_serv2_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-about.html\">Constructeur</a>
                </li>
                <li class=\"";
        // line 111
        $this->displayBlock('nos_service_serv3_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-services.html\">Obligation</a>
                </li>
                <li class=\"";
        // line 114
        $this->displayBlock('nos_service_serv4_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-prices.html\">Resiliation</a>
                </li>
                <li class=\"";
        // line 117
        $this->displayBlock('nos_service_serv5_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-faq.html\">Souscription</a>
                </li>
                <li class=\"";
        // line 120
        $this->displayBlock('nos_service_serv6_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-gallery.html\">Documentation</a>
                </li>               
              </ul>
            </li>
            <li class=\"";
        // line 125
        $this->displayBlock('qui_sommes_nous_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Qui sommes-nous ?
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"";
        // line 130
        $this->displayBlock('qui_sommes_nous_item1_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-about.html\">A propos de nous</a>
                </li>
                <li class=\"";
        // line 133
        $this->displayBlock('qui_sommes_nous_item2_active', $context, $blocks);
        echo "\">
                \t<a href=\"page-about.html\">Les commentaires sur nous</a>
                </li>
                
              </ul>
            </li>
            <li class=\"";
        // line 139
        $this->displayBlock('nous_contacter_parent_active', $context, $blocks);
        echo "\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
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
        // line 153
        $this->displayBlock('body', $context, $blocks);
        // line 155
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
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/people/img5-small.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img1.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/people/img4-large.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img6.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img3.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/people/img2-large.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img2.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img5.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/people/img5-small.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img1.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/people/img4-large.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img6.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img3.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/people/img2-large.jpg\"></a></li>
                <li><a href=\"javascript:;\"><img alt=\"\" src=\"assets/pages/img/works/img2.jpg\"></a></li>
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
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Constructeur</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Obligation</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Résiliation</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Souscription</a><br>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Documentation</a><br>
             <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Devis Décennale Architecte</a><br>
             <h2>Qui sommes-nous</h2>
            <a class=\"twitter-timeline\" href=\"\"><i class=\"fa fa-angle-double-right\"></i> Devis décennale constructeur</a><br>
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
    <script src=\"assets/plugins/respond.min.js\"></script>
    <![endif]--> 
    <script src=\"assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script><!-- slider for products -->

    <script src=\"assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script>
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
</body>
<!-- END BODY -->
</html>";
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
  <link href=\"assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href=\"assets/pages/css/animate.css')\" rel=\"stylesheet\">
  <link href=\"assets/plugins/fancybox/source/jquery.fancybox.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/owl.carousel/assets/owl.carousel.css\" rel=\"stylesheet\">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href=\"assets/pages/css/components.css\" rel=\"stylesheet\">
  <link href=\"assets/pages/css/slider.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/style-responsive.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/themes/red.css\" rel=\"stylesheet\" id=\"style-color\">
  <link href=\"assets/corporate/css/custom.css\" rel=\"stylesheet\">
  <!-- Theme styles END -->
  ";
    }

    // line 95
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
    }

    // line 100
    public function block_nos_service_parent_active($context, array $blocks = array())
    {
    }

    // line 105
    public function block_nos_service_serv1_active($context, array $blocks = array())
    {
    }

    // line 108
    public function block_nos_service_serv2_active($context, array $blocks = array())
    {
    }

    // line 111
    public function block_nos_service_serv3_active($context, array $blocks = array())
    {
    }

    // line 114
    public function block_nos_service_serv4_active($context, array $blocks = array())
    {
    }

    // line 117
    public function block_nos_service_serv5_active($context, array $blocks = array())
    {
    }

    // line 120
    public function block_nos_service_serv6_active($context, array $blocks = array())
    {
    }

    // line 125
    public function block_qui_sommes_nous_parent_active($context, array $blocks = array())
    {
    }

    // line 130
    public function block_qui_sommes_nous_item1_active($context, array $blocks = array())
    {
    }

    // line 133
    public function block_qui_sommes_nous_item2_active($context, array $blocks = array())
    {
    }

    // line 139
    public function block_nous_contacter_parent_active($context, array $blocks = array())
    {
    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        // line 154
        echo "   ";
    }

    public function getTemplateName()
    {
        return "::layout.html - Copie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 154,  440 => 153,  435 => 139,  430 => 133,  425 => 130,  420 => 125,  415 => 120,  410 => 117,  405 => 114,  400 => 111,  395 => 108,  390 => 105,  385 => 100,  380 => 95,  353 => 30,  350 => 29,  344 => 12,  211 => 155,  209 => 153,  192 => 139,  183 => 133,  177 => 130,  169 => 125,  161 => 120,  155 => 117,  149 => 114,  143 => 111,  137 => 108,  131 => 105,  123 => 100,  115 => 95,  105 => 88,  69 => 54,  67 => 29,  47 => 12,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html - Copie.twig", "/var/www/projet/decennale/app/Resources/views/layout.html - Copie.twig");
    }
}
