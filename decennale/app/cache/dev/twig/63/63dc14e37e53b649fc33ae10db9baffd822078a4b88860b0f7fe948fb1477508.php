<?php

/* ::layout.html - Copie.twig */
class __TwigTemplate_e61357bb205e35e229e578678b118f48cfca1b4a40f16c9900b4dd29689395bd extends Twig_Template
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
        $__internal_13fc1a5964577bb5939424405fbb60a9c8afc093ac11ac2552933a9f3f1d7a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fc1a5964577bb5939424405fbb60a9c8afc093ac11ac2552933a9f3f1d7a0b->enter($__internal_13fc1a5964577bb5939424405fbb60a9c8afc093ac11ac2552933a9f3f1d7a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html - Copie.twig"));

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
        
        $__internal_13fc1a5964577bb5939424405fbb60a9c8afc093ac11ac2552933a9f3f1d7a0b->leave($__internal_13fc1a5964577bb5939424405fbb60a9c8afc093ac11ac2552933a9f3f1d7a0b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_486c10e4a0df07a62606db3bc0989879df0abb92d0094a118a4482455b0f837f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486c10e4a0df07a62606db3bc0989879df0abb92d0094a118a4482455b0f837f->enter($__internal_486c10e4a0df07a62606db3bc0989879df0abb92d0094a118a4482455b0f837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        echo "Devis Decennale ";
        
        $__internal_486c10e4a0df07a62606db3bc0989879df0abb92d0094a118a4482455b0f837f->leave($__internal_486c10e4a0df07a62606db3bc0989879df0abb92d0094a118a4482455b0f837f_prof);

    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
        $__internal_4ca8cc5df6f683ab21b4acf4c06e7d2ef4117561b751b14f80823facc0251537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca8cc5df6f683ab21b4acf4c06e7d2ef4117561b751b14f80823facc0251537->enter($__internal_4ca8cc5df6f683ab21b4acf4c06e7d2ef4117561b751b14f80823facc0251537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

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
        
        $__internal_4ca8cc5df6f683ab21b4acf4c06e7d2ef4117561b751b14f80823facc0251537->leave($__internal_4ca8cc5df6f683ab21b4acf4c06e7d2ef4117561b751b14f80823facc0251537_prof);

    }

    // line 95
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_d1bc7eb9674c7f9e7e5b08c86fe0837f41506f9125ec4fc8b8308ae4693edc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bc7eb9674c7f9e7e5b08c86fe0837f41506f9125ec4fc8b8308ae4693edc76->enter($__internal_d1bc7eb9674c7f9e7e5b08c86fe0837f41506f9125ec4fc8b8308ae4693edc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_d1bc7eb9674c7f9e7e5b08c86fe0837f41506f9125ec4fc8b8308ae4693edc76->leave($__internal_d1bc7eb9674c7f9e7e5b08c86fe0837f41506f9125ec4fc8b8308ae4693edc76_prof);

    }

    // line 100
    public function block_nos_service_parent_active($context, array $blocks = array())
    {
        $__internal_aadee36e9bfd9f1f78f2f26a03b819fd4d6ed1970e30b26443f88a3b2fd5e195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadee36e9bfd9f1f78f2f26a03b819fd4d6ed1970e30b26443f88a3b2fd5e195->enter($__internal_aadee36e9bfd9f1f78f2f26a03b819fd4d6ed1970e30b26443f88a3b2fd5e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_aadee36e9bfd9f1f78f2f26a03b819fd4d6ed1970e30b26443f88a3b2fd5e195->leave($__internal_aadee36e9bfd9f1f78f2f26a03b819fd4d6ed1970e30b26443f88a3b2fd5e195_prof);

    }

    // line 105
    public function block_nos_service_serv1_active($context, array $blocks = array())
    {
        $__internal_c07ea4cd29e3d8e7d4aa0755673c50f762d2af7251316f6f6af998f246727916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07ea4cd29e3d8e7d4aa0755673c50f762d2af7251316f6f6af998f246727916->enter($__internal_c07ea4cd29e3d8e7d4aa0755673c50f762d2af7251316f6f6af998f246727916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_c07ea4cd29e3d8e7d4aa0755673c50f762d2af7251316f6f6af998f246727916->leave($__internal_c07ea4cd29e3d8e7d4aa0755673c50f762d2af7251316f6f6af998f246727916_prof);

    }

    // line 108
    public function block_nos_service_serv2_active($context, array $blocks = array())
    {
        $__internal_7c38568f4dcbda70e2311e22a71a5c3532f57d1e65d567b1a328910720bc90e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c38568f4dcbda70e2311e22a71a5c3532f57d1e65d567b1a328910720bc90e1->enter($__internal_7c38568f4dcbda70e2311e22a71a5c3532f57d1e65d567b1a328910720bc90e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_7c38568f4dcbda70e2311e22a71a5c3532f57d1e65d567b1a328910720bc90e1->leave($__internal_7c38568f4dcbda70e2311e22a71a5c3532f57d1e65d567b1a328910720bc90e1_prof);

    }

    // line 111
    public function block_nos_service_serv3_active($context, array $blocks = array())
    {
        $__internal_19f6e3ea40743df7748c9518d697f40bd76cd0adc43f959fa43fb0a187961e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f6e3ea40743df7748c9518d697f40bd76cd0adc43f959fa43fb0a187961e99->enter($__internal_19f6e3ea40743df7748c9518d697f40bd76cd0adc43f959fa43fb0a187961e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_19f6e3ea40743df7748c9518d697f40bd76cd0adc43f959fa43fb0a187961e99->leave($__internal_19f6e3ea40743df7748c9518d697f40bd76cd0adc43f959fa43fb0a187961e99_prof);

    }

    // line 114
    public function block_nos_service_serv4_active($context, array $blocks = array())
    {
        $__internal_a49f88b3a001c39b7691c7f3df132059b579d0484c35f3bb22a190c2df245e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49f88b3a001c39b7691c7f3df132059b579d0484c35f3bb22a190c2df245e6e->enter($__internal_a49f88b3a001c39b7691c7f3df132059b579d0484c35f3bb22a190c2df245e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_a49f88b3a001c39b7691c7f3df132059b579d0484c35f3bb22a190c2df245e6e->leave($__internal_a49f88b3a001c39b7691c7f3df132059b579d0484c35f3bb22a190c2df245e6e_prof);

    }

    // line 117
    public function block_nos_service_serv5_active($context, array $blocks = array())
    {
        $__internal_56e8dd0a23d43385e7e26216ec68ceb8d68ea5483171afd486201c76261fc372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e8dd0a23d43385e7e26216ec68ceb8d68ea5483171afd486201c76261fc372->enter($__internal_56e8dd0a23d43385e7e26216ec68ceb8d68ea5483171afd486201c76261fc372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_56e8dd0a23d43385e7e26216ec68ceb8d68ea5483171afd486201c76261fc372->leave($__internal_56e8dd0a23d43385e7e26216ec68ceb8d68ea5483171afd486201c76261fc372_prof);

    }

    // line 120
    public function block_nos_service_serv6_active($context, array $blocks = array())
    {
        $__internal_89efe09a9f26cd79f4ec9f38aeee82b0930b119d9af3ebff4d2cd29669118ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89efe09a9f26cd79f4ec9f38aeee82b0930b119d9af3ebff4d2cd29669118ca2->enter($__internal_89efe09a9f26cd79f4ec9f38aeee82b0930b119d9af3ebff4d2cd29669118ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_89efe09a9f26cd79f4ec9f38aeee82b0930b119d9af3ebff4d2cd29669118ca2->leave($__internal_89efe09a9f26cd79f4ec9f38aeee82b0930b119d9af3ebff4d2cd29669118ca2_prof);

    }

    // line 125
    public function block_qui_sommes_nous_parent_active($context, array $blocks = array())
    {
        $__internal_a841e67af1fe6b4693a8a26e541af236b6736d291f6aa8c7f26da4d7323ce2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a841e67af1fe6b4693a8a26e541af236b6736d291f6aa8c7f26da4d7323ce2df->enter($__internal_a841e67af1fe6b4693a8a26e541af236b6736d291f6aa8c7f26da4d7323ce2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_a841e67af1fe6b4693a8a26e541af236b6736d291f6aa8c7f26da4d7323ce2df->leave($__internal_a841e67af1fe6b4693a8a26e541af236b6736d291f6aa8c7f26da4d7323ce2df_prof);

    }

    // line 130
    public function block_qui_sommes_nous_item1_active($context, array $blocks = array())
    {
        $__internal_4b21efd76e0aee50b75b308ad85001e6214c0c9f201e99447fbe45f646e18e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21efd76e0aee50b75b308ad85001e6214c0c9f201e99447fbe45f646e18e77->enter($__internal_4b21efd76e0aee50b75b308ad85001e6214c0c9f201e99447fbe45f646e18e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_4b21efd76e0aee50b75b308ad85001e6214c0c9f201e99447fbe45f646e18e77->leave($__internal_4b21efd76e0aee50b75b308ad85001e6214c0c9f201e99447fbe45f646e18e77_prof);

    }

    // line 133
    public function block_qui_sommes_nous_item2_active($context, array $blocks = array())
    {
        $__internal_7c2c9449b208123d5c104f7534fedce96c574886345da425ed17013dfe5d7287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2c9449b208123d5c104f7534fedce96c574886345da425ed17013dfe5d7287->enter($__internal_7c2c9449b208123d5c104f7534fedce96c574886345da425ed17013dfe5d7287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_7c2c9449b208123d5c104f7534fedce96c574886345da425ed17013dfe5d7287->leave($__internal_7c2c9449b208123d5c104f7534fedce96c574886345da425ed17013dfe5d7287_prof);

    }

    // line 139
    public function block_nous_contacter_parent_active($context, array $blocks = array())
    {
        $__internal_722db8572d1e4fa0c5b71104c2487c46e0c86639a4279a5851cedc4d2ab70b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722db8572d1e4fa0c5b71104c2487c46e0c86639a4279a5851cedc4d2ab70b6c->enter($__internal_722db8572d1e4fa0c5b71104c2487c46e0c86639a4279a5851cedc4d2ab70b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        
        $__internal_722db8572d1e4fa0c5b71104c2487c46e0c86639a4279a5851cedc4d2ab70b6c->leave($__internal_722db8572d1e4fa0c5b71104c2487c46e0c86639a4279a5851cedc4d2ab70b6c_prof);

    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1a34169a5fe01ce6de7f9fa45f2e04a15088ca32aac5c7472e730f485543de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a34169a5fe01ce6de7f9fa45f2e04a15088ca32aac5c7472e730f485543de7->enter($__internal_f1a34169a5fe01ce6de7f9fa45f2e04a15088ca32aac5c7472e730f485543de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::layout.html - Copie.twig"));

        // line 154
        echo "   ";
        
        $__internal_f1a34169a5fe01ce6de7f9fa45f2e04a15088ca32aac5c7472e730f485543de7->leave($__internal_f1a34169a5fe01ce6de7f9fa45f2e04a15088ca32aac5c7472e730f485543de7_prof);

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
        return array (  536 => 154,  530 => 153,  519 => 139,  508 => 133,  497 => 130,  486 => 125,  475 => 120,  464 => 117,  453 => 114,  442 => 111,  431 => 108,  420 => 105,  409 => 100,  398 => 95,  368 => 30,  362 => 29,  350 => 12,  214 => 155,  212 => 153,  195 => 139,  186 => 133,  180 => 130,  172 => 125,  164 => 120,  158 => 117,  152 => 114,  146 => 111,  140 => 108,  134 => 105,  126 => 100,  118 => 95,  108 => 88,  72 => 54,  70 => 29,  50 => 12,  37 => 1,);
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
        <a class=\"site-logo\" href=\"index.html\"><img src=\"{{asset('assets/corporate/img/logos/logo-corp-red.png')}}\" alt=\"Devis decennale\"></a>

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"{% block acceuil_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Acceuil
              </a>           

            <li class=\"{% block nos_service_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Nos services
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"{% block nos_service_serv1_active %}{% endblock%}\">
                \t<a href=\"page-about.html\">Devis Decennale Architecte</a>
                </li>
                <li class=\"{% block nos_service_serv2_active %}{% endblock%}\">
                \t<a href=\"page-about.html\">Constructeur</a>
                </li>
                <li class=\"{% block nos_service_serv3_active %}{% endblock%}\">
                \t<a href=\"page-services.html\">Obligation</a>
                </li>
                <li class=\"{% block nos_service_serv4_active %}{% endblock%}\">
                \t<a href=\"page-prices.html\">Resiliation</a>
                </li>
                <li class=\"{% block nos_service_serv5_active %}{% endblock%}\">
                \t<a href=\"page-faq.html\">Souscription</a>
                </li>
                <li class=\"{% block nos_service_serv6_active %}{% endblock%}\">
                \t<a href=\"page-gallery.html\">Documentation</a>
                </li>               
              </ul>
            </li>
            <li class=\"{% block qui_sommes_nous_parent_active %}{% endblock%}\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Qui sommes-nous ?
              </a>
               <ul class=\"dropdown-menu\">
                <li class=\"{% block qui_sommes_nous_item1_active %}{% endblock%}\">
                \t<a href=\"page-about.html\">A propos de nous</a>
                </li>
                <li class=\"{% block qui_sommes_nous_item2_active %}{% endblock%}\">
                \t<a href=\"page-about.html\">Les commentaires sur nous</a>
                </li>
                
              </ul>
            </li>
            <li class=\"{% block nous_contacter_parent_active %}{% endblock%}\">
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
</html>", "::layout.html - Copie.twig", "/var/www/projet/decennale/app/Resources/views/layout.html - Copie.twig");
    }
}
