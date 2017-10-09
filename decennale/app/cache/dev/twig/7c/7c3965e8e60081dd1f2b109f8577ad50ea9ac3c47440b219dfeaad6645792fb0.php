<?php

/* AbiRoutineBundle:Routine:index.html.twig */
class __TwigTemplate_133b5d83d4597e5ed3b8ccbda8b8ea3ddd98704a92c21edb375a10221b3d421e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiRoutineBundle:Routine:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'acceuil_parent_active' => array($this, 'block_acceuil_parent_active'),
            'body' => array($this, 'block_body'),
            'script_page' => array($this, 'block_script_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_367ad0dd249861fa19aedaf9d05d348139cb4cb96a79fc81a75b0c630028893f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367ad0dd249861fa19aedaf9d05d348139cb4cb96a79fc81a75b0c630028893f->enter($__internal_367ad0dd249861fa19aedaf9d05d348139cb4cb96a79fc81a75b0c630028893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiRoutineBundle:Routine:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367ad0dd249861fa19aedaf9d05d348139cb4cb96a79fc81a75b0c630028893f->leave($__internal_367ad0dd249861fa19aedaf9d05d348139cb4cb96a79fc81a75b0c630028893f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8154f286af99b19bf9d3f7108647ad3b1f75f85ddd7af728db1e5739e5b7c58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8154f286af99b19bf9d3f7108647ad3b1f75f85ddd7af728db1e5739e5b7c58f->enter($__internal_8154f286af99b19bf9d3f7108647ad3b1f75f85ddd7af728db1e5739e5b7c58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Acceuil";
        
        $__internal_8154f286af99b19bf9d3f7108647ad3b1f75f85ddd7af728db1e5739e5b7c58f->leave($__internal_8154f286af99b19bf9d3f7108647ad3b1f75f85ddd7af728db1e5739e5b7c58f_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_a243dc092e50b70d4823afdb0eb16617d9dfbdaf706822ba72b972b7ebd32836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a243dc092e50b70d4823afdb0eb16617d9dfbdaf706822ba72b972b7ebd32836->enter($__internal_a243dc092e50b70d4823afdb0eb16617d9dfbdaf706822ba72b972b7ebd32836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html.twig"));

        echo "active ";
        
        $__internal_a243dc092e50b70d4823afdb0eb16617d9dfbdaf706822ba72b972b7ebd32836->leave($__internal_a243dc092e50b70d4823afdb0eb16617d9dfbdaf706822ba72b972b7ebd32836_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d707f4dda5a7f9ff12cbfd0832076fe3036b5a9318843bbc16b99e753c63ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d707f4dda5a7f9ff12cbfd0832076fe3036b5a9318843bbc16b99e753c63ad->enter($__internal_a6d707f4dda5a7f9ff12cbfd0832076fe3036b5a9318843bbc16b99e753c63ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html.twig"));

        // line 5
        echo "
 
    <div class=\"main\">
      <div class=\"container\">
        
        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
          <div class=\"col-md-3\">
            <h2><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_devis_decennale_constructeur");
        echo "\">Devis Décennale Constructeur </a></h2>
\t\t\t<p>Votre assurance décennale en 3 Clics !</p>
\t\t\t<p>Devis gratuit assurance decennale</p>
          </div>
          <div class=\"col-md-9\">
            <div class=\"owl-carousel owl-carousel5\">
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img1.jpg"), "html", null, true);
        echo "\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_devis_decennale_architecte");
        echo "\">
                  <strong>Devis Décennale Architecte</strong>
                  
                </a>
              </div>
\t\t\t  <div class=\"recent-work-item\">
                <em>
                  <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img2.jpg"), "html", null, true);
        echo "\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_obligation");
        echo "\">
                  <strong>Obligations</strong>
                  
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img3.jpg"), "html", null, true);
        echo "\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_resiliation");
        echo "\">
                  <strong>Resiliation</strong>
                
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img4.jpg"), "html", null, true);
        echo "\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_souscription");
        echo "\">
                  <strong>Souscription</strong>
                  
                </a>
              </div>
\t\t\t  <div class=\"recent-work-item\">
                <em>
                  <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/works/img5.jpg"), "html", null, true);
        echo "\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("infojet_service_documentation");
        echo "\">
                  <strong>Documentation</strong>
                 
                </a>
              </div>
             
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->
\t\t<!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Nos sérvices</span>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->
\t\t
\t\t
 <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
                
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-one active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">Architecte et Techniciens du Batiment</p>
                            <p>
                                Architecte DPLG - Bureau d’Étude BET - Contractant Général - 
\t\t\t\t\t\t\t\t<br>Géotechniciens - Maitre d'Oeuvre Exécution MOE...
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-two\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tAménagement et préparation du site</p>
                            <p>
                               Démolition - Terrassement - Amélioration des sols - <br>
\t\t\t\t\t\t\t   Sondages et Forages - VRD -  Paysagiste - <br>
\t\t\t\t\t\t\t   Montage d'échafaudage- Étaiement - Traitement Amiante - <br>
\t\t\t\t\t\t\t   Traitement curatifs -Insectes xylophages – <br>
\t\t\t\t\t\t\t   Champignons - Assèchement des murs
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-three\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tStructures et Gros Oeuvre</p>
                            <p>
                               Fondations spéciales - <br>
\t\t\t\t\t\t\t   Maçonnerie et béton armé sauf précontraint in situ - 
\t\t\t\t\t\t\t   <br>Charpente et structure en bois - 
\t\t\t\t\t\t\t   <br>Charpente et structure métallique
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t<!-- forth slide -->
                <div class=\"item carousel-item-for\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">Clos et Couverts</p>
                            <p>
                                Couverture - Ravalement - Etanchéité de toiture - <br>
\t\t\t\t\t\t\t\tterrasse et plancher intérieur - 
\t\t\t\t\t\t\t\t<br>Etanchéité et Imperméabilisation de cuvelage,<br> réservoirs et piscines - 
\t\t\t\t\t\t\t\t<br>Calfeutrement protection, imperméabilité étanchéité des façades - 
\t\t\t\t\t\t\t\t<br>Menuiseries extérieures...
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
                
                <!-- fiveth slide -->
                <div class=\"item carousel-item-five\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tDivisions et Aménagements</p>
                            <p>
                               Ménuiserie intérieur - Platrerie
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>

                <!-- sixth slide -->
                <div class=\"item carousel-item-six\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tRC Décennale Lots Techniques</p>
                            <p>
                               Plomberie – Sanitaires - Chauffage - <br>
\t\t\t\t\t\t\t   Gaz - Sprinkler – RIA - <br>
\t\t\t\t\t\t\t   Installation thermique de génie climatique - <br>
\t\t\t\t\t\t\t   pompes à chaleur - Installation d’aéraulique et de <br>
\t\t\t\t\t\t\t   conditionnement d’air - Électricité - <br>
\t\t\t\t\t\t\t   Photovoltaïques - Piscines - Maisons  Ossatures Bois
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"right carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
\t
        <h1>Choisissez votre activité</h1>
        <!-- BEGIN STEPS -->
        <div class=\"row margin-bottom-40 front-steps-wrapper front-steps-count-3\">
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step1\">
              <h2>Les riques</h2>
              
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step2\">
              <h2>Antécédent</h2>
              
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step3\">
              <h2>Souscripteur</h2>
              
            </div>
          </div>
        </div>
        <!-- END STEPS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
\t\t<form action=\"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_homepage");
        echo "\" method=\"post\"  class=\"form-horizontal form-without-legend\" enctype=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\">
\t\t\t\t
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
\t\t  
          <div class=\"col-md-12 tab-style-1\">
\t\t\t";
        // line 260
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 261
            echo "\t\t\t\t<h4>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</h4>
\t\t\t";
        }
        // line 263
        echo "\t\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 264
            echo "\t\t\t\t<h4>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "</h4>
\t\t\t";
        }
        // line 266
        echo "            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\">Les risques</a></li>
              <li><a href=\"#tab-2\" data-toggle=\"tab\">Antécédent</a></li>
              <li><a href=\"#tab-3\" data-toggle=\"tab\">Souscripteur</a></li>
\t\t\t 
            </ul>
\t\t\t
\t\t\t
            <div class=\"tab-content\">
\t\t\t
              <div class=\"tab-pane row fade in active\" id=\"tab-1\">
                <div class=\"col-md-7 col-sm-7\">
\t\t\t\t";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupeRisques"]) ? $context["groupeRisques"] : $this->getContext($context, "groupeRisques")));
        foreach ($context['_seq'] as $context["_key"] => $context["grouperisque"]) {
            // line 279
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["grouperisque"], "risques", array())) > 0)) {
                // line 280
                echo "\t\t\t\t\t\t<div id=\"accordion\" class=\"accordion-style1 panel-group accordion-style2\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a aria-expanded=\"false\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["grouperisque"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bigger-110 ace-icon fa fa-angle-right\" data-icon-hide=\"ace-icon fa fa-angle-down\" data-icon-show=\"ace-icon fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 286
                echo twig_escape_filter($this->env, $this->getAttribute($context["grouperisque"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"height: 0px;\" aria-expanded=\"false\" class=\"panel-collapse collapse\" id=\"collapse";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute($context["grouperisque"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t                  <div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t  ";
                // line 294
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["grouperisque"], "risques", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["risque"]) {
                    // line 295
                    echo "\t\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t                      <label for=\"email\" class=\"col-lg-4 control-label\">";
                    // line 296
                    echo twig_escape_filter($this->env, $this->getAttribute($context["risque"], "libelle", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t                      <div class=\"col-lg-4\">
\t\t\t\t\t\t\t                        <input class=\"form-control\" name=\"";
                    // line 298
                    echo twig_escape_filter($this->env, $this->getAttribute($context["risque"], "inputName", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["risque"], "libelle", array()), "html", null, true);
                    echo "\"  
\t\t\t\t\t\t\t\t\t\t\t  type=\"checkbox\" data-parsley-mincheck=\"1\">
\t\t\t\t\t\t\t                      </div>
\t\t\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['risque'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                echo "\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t            </div>                     
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grouperisque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "                </div>
\t\t\t\t
              </div>
              <div class=\"tab-pane row fade\" id=\"tab-2\">
                <div class=\"col-md-7 col-sm-7\">
\t\t\t\t<p>";
        // line 318
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estDejaAssure", array()), 'widget');
        echo " Avez-vous déjà été assuré ? </p>
\t\t\t\t<p>";
        // line 319
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estPlusTrentePourcentSoustraitance", array()), 'widget');
        echo " Avez-vous Plus de 30% de soustraitance ?</p>
\t\t\t\t<p>";
        // line 320
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estRepriseDuPasse", array()), 'widget');
        echo " Souhaitez vous la reprise du passé ? </p>
\t\t\t\t<p>";
        // line 321
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estRedressementJudiciare", array()), 'widget');
        echo " Êtes-vous en redressement judiciaire ou en liquidation ?</p>
\t\t\t\t<p>Date effet ";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEffet", array()), 'widget');
        echo "</p>
\t\t\t\t<p>Echéancier ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Echeance", array()), 'widget');
        echo "</p>
                </div>
              </div>
              <div class=\"tab-pane fade\" id=\"tab-3\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <div class=\"col-md-9 col-sm-9\">
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Civilité</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Nom</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Prenom</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userfirstname", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Mail</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Code postal</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 356
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Ville</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 362
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Adresse entreprise</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 368
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseEntreprise", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Raison sociale</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raisonSociale", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Forme juridique</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 380
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formeJuridique", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Numero Siret</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 386
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroSiret", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Date création</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 392
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Chiffre d'affaire</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 398
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chiffreAffaire", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Nombre salarié</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 404
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreDeSalarie", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Téléphone</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t";
        // line 410
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  ";
        // line 413
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t\t  <br>
\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-primary\">Enregistrer <i class=\"ace-icon fa fa-save\"></i></button>
\t\t\t\t\t  </div>
\t\t\t\t</div>
              </div>
              
            </div>
\t\t\t
          </div>
          <!-- END TABS -->
        
         
        </div>   
\t\t</form>
        <!-- END TABS AND TESTIMONIALS -->
\t\t


       <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
          <!-- BEGIN CONTENT -->
          <div class=\"col-md-12 col-sm-12\">
            <div class=\"content-page\">
              <div class=\"row margin-bottom-30\">
                <!-- BEGIN INFO BLOCK -->               
                <div class=\"col-md-7\">
                  <h2 class=\"no-top-space\">Pourquoi nous choisir?</h2>
                  <p>Devis Décennale est le leader de la RC Décennale en ligne, 
\t\t\t\t  une équipe de professionnels réactifs de l'assurance construction, 
\t\t\t\t  qui a travaillé dur avec son service informatique afin de mettre à votre disposition 
\t\t\t\t  une technologie sans égale pour réaliser vous même vos demandes de devis en 
\t\t\t\t  assurance responsabilité décennale directement sur notre site web, 
\t\t\t\t  pour une réponse en quelques minutes dans votre espace client, 
\t\t\t\t  dans lequel vous pourrez télécharger vos documents de souscription 
\t\t\t\t  et souscrire tranquillement sans stress.
\t\t\t\t  Économisez jusqu'à 50% sur votre assurance Responsabilité Civile 
\t\t\t\t  Décennale par année d'assurance au prorata du chiffre d'affaires 
\t\t\t\t  réalisé pour des garanties quasi équivalentes</p>
\t\t\t\t  <button class=\"btn btn-primary\"> Plus de détails<i class=\"ace-icon fa fa-more\"></i></button>
                  <!-- END LISTS -->
                </div>
                <!-- END INFO BLOCK -->   

                <!-- BEGIN CAROUSEL -->            
                <div class=\"col-md-5 front-carousel\">
                  <div id=\"myCarousel\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"item active\">
                        <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/pourquoi_nous_choisir.png"), "html", null, true);
        echo "\" alt=\"\">
                       
                      </div>
                     
                    </div>
                    <!-- Carousel nav -->
                    <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                      <i class=\"fa fa-angle-left\"></i>
                    </a>
                    <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                      <i class=\"fa fa-angle-right\"></i>
                    </a>
                  </div>                
                </div>
                <!-- END CAROUSEL -->
              </div>

              <div class=\"row margin-bottom-40\">
                <!-- BEGIN TESTIMONIALS -->
                <div class=\"col-md-7 testimonials-v1\">
                  <h2><a href=\"\">Avis de nos clients en assurance décennale</a></h2>                
                  <div id=\"myCarousel1\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"active item\">
                        <blockquote><p>Notre compagnie d'assurance française nous a augmenté notre prime de 10 000 € 
\t\t\t\t\t\tsous prétexte d'une augmentation du CA de 10 000 € soit 34 000 €/an d'assurance RCD. 
\t\t\t\t\t\tDevis décennale nous a divisé la prime par 2, soit 50% d'économie du coup 85000€/5ans et 
\t\t\t\t\t\tj'ai recruté un technicien.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/Mr.jpg"), "html", null, true);
        echo "\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Amalou</span>
                            <span class=\"testimonials-post\">3 juin 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"item\">
                        <blockquote><p>Enfin une assurance décennale pas chère ! AXA a résilié mon contrat 
\t\t\t\t\t\td'assurance décennale pour sinistre, je payais 47 000 €/an d'assurance décennale 
\t\t\t\t\t\tet ils étaient prêts à me reprendre pour 75 000 €/an. 
\t\t\t\t\t\tDevis décennale m'a fait souscrire en urgence un contrat 
\t\t\t\t\t\tavec une compagnie spécialisée. Merci</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/Mr.jpg"), "html", null, true);
        echo "\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Rohad</span>
                            <span class=\"testimonials-post\">21 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
\t\t\t\t\t  <div class=\"item\">
                        <blockquote><p>Nous étions chez un courtier injoignable, pas compétent, 
\t\t\t\t\t\tpeu scrupuleux et horriblement cher. 
\t\t\t\t\t\tNous avons trouvé sur internet le site devis-décennale.fr. 
\t\t\t\t\t\tDevis en ligne simple, rapide, pro et pas 
\t\t\t\t\t\tcher nous réalisons 50% d'économie par année d'assurance RC Décennale. </p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/Mme.jpg"), "html", null, true);
        echo "\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Valente</span>
                            <span class=\"testimonials-post\">18 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
\t\t\t\t\t  <div class=\"item\">
                        <blockquote><p>Trouver une Garantie Décennale pas chère lorsqu’on a une activité 
\t\t\t\t\t\tTous Corps d’États et résilié pour redressement par Axa, 
\t\t\t\t\t\tc’est presque « mission impossible ». Le plus dur c’est 
\t\t\t\t\t\tdéjà de trouver un Assureur qui couvre notre activité.
\t\t\t\t\t\tDevis Décennale m'a solutionné ma problématique, le top</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/Mr.jpg"), "html", null, true);
        echo "\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Mancini</span>
                            <span class=\"testimonials-post\">18 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
\t\t\t\t\t  <div class=\"item\">
                        <blockquote><p>J'étais chez GAN en Corse, je payais 14 000 €/an d'assurance décennale Corse,
\t\t\t\t\t\tmon conseillé perso a pris l'avion de Paris et en 24h il est venu à ma rencontre, 
\t\t\t\t\t\tj'ai validé sa proposition, j'économise 5 000 €/an d'assurance soit 25 000€/5ans, 
\t\t\t\t\t\tj'ai parrainé 2 de mes sous-traitants chez lui, Merci </p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/Mr.jpg"), "html", null, true);
        echo "\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Venturio</span>
                            <span class=\"testimonials-post\">17 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
                    </div>
\t\t\t\t\t
                    <!-- Carousel nav -->
                    <a class=\"left-btn\" href=\"#myCarousel1\" data-slide=\"prev\"></a>
                    <a class=\"right-btn\" href=\"#myCarousel1\" data-slide=\"next\"></a>
                  </div>
                </div>
                <!-- END TESTIMONIALS --> 

                <!-- BEGIN PROGRESS BAR -->
                <div class=\"col-md-5 front-skills\">
                  <h2 class=\"block\">Les chiffres parlent tous seuls</h2>
                  <span>1599 Devis</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 96%;\"></div>
                  </div>
\t\t\t\t  <span>1527 Inscriptions</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 90%;\"></div>
                  </div>
                  <span>963 Clients</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 85%;\"></div>
                  </div>
                  <span>7 Partenaires</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 70%;\"></div>
                  </div>
                </div>                       
                <!-- END PROGRESS BAR -->
              </div>

             
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
\t\t<!-- BEGIN CLIENTS -->
        <div class=\"row margin-bottom-40 our-clients\">
          <div class=\"col-md-3\">
            <h2><a href=\"\">Nos clients</a></h2>
            <p>Nous comptons actuellement plus de 960 Clients. </p>
          </div>
          <div class=\"col-md-9\">
            <div class=\"owl-carousel owl-carousel6-brands\">
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client1-gray.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                  <img src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client1.png"), "html", null, true);
        echo "\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client2-gray.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                  <img src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client2.jpg"), "html", null, true);
        echo "\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client3-gray.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                  <img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client3.jpg"), "html", null, true);
        echo "\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client4-gray.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                  <img src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/client4.jpg"), "html", null, true);
        echo "\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
                           
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
        <!-- END SIDEBAR & CONTENT -->
\t\t<h2>Actualités</h2>
\t <div class=\"row front-team\">
                <ul class=\"list-unstyled\">
                  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/art1.jpg"), "html", null, true);
        echo "\">
                      <h3>
                        <strong>DEVIS RC PRO...</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-04-12</small>
                      </h3>
                      <p>Devis en 3 clics ! Et recevez votre devis en 30 Minutes</p>
                      
                    </div>
                  </li>
\t\t\t\t  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/art2.jpg"), "html", null, true);
        echo "\">
                      <h3>
                        <strong>L'assurance éc...</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-04-09</small>
                      </h3>
                      <p>Il n'y aurait de construction en Fra...</p>
                      
                    </div>
                  </li>
\t\t\t\t  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/art3.jpg"), "html", null, true);
        echo "\">
                      <h3>
                        <strong>DEVIS EN LIGNE</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-01-31</small>
                      </h3>
                      <p>Devis en 3 clics ! Et recevez votre devis en 30 Minutes</p>
                      
                    </div>
                  </li>
\t\t\t\t  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/devis-decennale/art4.jpg"), "html", null, true);
        echo "\">
                      <h3>
                        <strong>DEVIS ASSUR...</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-01-31</small>
                      </h3>
                      <p>Devis en 3 clics ! Et recevez votre devis en 30 Minutes</p>
                      
                    </div>
                  </li>
\t\t\t\t  
\t\t\t\t

                </ul>            
              </div>

       
    </div>
";
        
        $__internal_a6d707f4dda5a7f9ff12cbfd0832076fe3036b5a9318843bbc16b99e753c63ad->leave($__internal_a6d707f4dda5a7f9ff12cbfd0832076fe3036b5a9318843bbc16b99e753c63ad_prof);

    }

    // line 686
    public function block_script_page($context, array $blocks = array())
    {
        $__internal_0a21cb1af74ce551542f48f02e2a810bcebded802145b5f54cc4c0bc1d2b22ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a21cb1af74ce551542f48f02e2a810bcebded802145b5f54cc4c0bc1d2b22ad->enter($__internal_0a21cb1af74ce551542f48f02e2a810bcebded802145b5f54cc4c0bc1d2b22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html.twig"));

        // line 687
        echo " <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-mixitup/jquery.mixitup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <script src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/corporate/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/portfolio.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
";
        
        $__internal_0a21cb1af74ce551542f48f02e2a810bcebded802145b5f54cc4c0bc1d2b22ad->leave($__internal_0a21cb1af74ce551542f48f02e2a810bcebded802145b5f54cc4c0bc1d2b22ad_prof);

    }

    public function getTemplateName()
    {
        return "AbiRoutineBundle:Routine:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  987 => 692,  983 => 691,  978 => 689,  974 => 688,  971 => 687,  965 => 686,  940 => 668,  926 => 657,  912 => 646,  898 => 635,  881 => 621,  877 => 620,  869 => 615,  865 => 614,  857 => 609,  853 => 608,  845 => 603,  841 => 602,  784 => 548,  768 => 535,  751 => 521,  734 => 507,  717 => 493,  684 => 463,  631 => 413,  625 => 410,  616 => 404,  607 => 398,  598 => 392,  589 => 386,  580 => 380,  571 => 374,  562 => 368,  553 => 362,  544 => 356,  535 => 350,  526 => 344,  517 => 338,  508 => 332,  496 => 323,  492 => 322,  488 => 321,  484 => 320,  480 => 319,  476 => 318,  469 => 313,  462 => 311,  452 => 304,  438 => 298,  433 => 296,  430 => 295,  426 => 294,  419 => 290,  412 => 286,  407 => 284,  401 => 280,  398 => 279,  394 => 278,  380 => 266,  374 => 264,  371 => 263,  365 => 261,  363 => 260,  352 => 254,  154 => 59,  149 => 57,  139 => 50,  134 => 48,  124 => 41,  119 => 39,  109 => 32,  104 => 30,  94 => 23,  89 => 21,  78 => 13,  68 => 5,  62 => 4,  50 => 3,  37 => 2,  11 => 1,);
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
{% block title %}{{parent()}}--Acceuil{% endblock %}
{% block acceuil_parent_active %}active {% endblock %}
{% block body%}

 
    <div class=\"main\">
      <div class=\"container\">
        
        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
          <div class=\"col-md-3\">
            <h2><a href=\"{{path('infojet_service_devis_decennale_constructeur')}}\">Devis Décennale Constructeur </a></h2>
\t\t\t<p>Votre assurance décennale en 3 Clics !</p>
\t\t\t<p>Devis gratuit assurance decennale</p>
          </div>
          <div class=\"col-md-9\">
            <div class=\"owl-carousel owl-carousel5\">
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"{{asset('assets/pages/img/works/img1.jpg')}}\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"{{path('infojet_service_devis_decennale_architecte')}}\">
                  <strong>Devis Décennale Architecte</strong>
                  
                </a>
              </div>
\t\t\t  <div class=\"recent-work-item\">
                <em>
                  <img src=\"{{asset('assets/pages/img/works/img2.jpg')}}\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"{{path('infojet_service_obligation')}}\">
                  <strong>Obligations</strong>
                  
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"{{asset('assets/pages/img/works/img3.jpg')}}\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"{{path('infojet_service_resiliation')}}\">
                  <strong>Resiliation</strong>
                
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"{{asset('assets/pages/img/works/img4.jpg')}}\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"{{path('infojet_service_souscription')}}\">
                  <strong>Souscription</strong>
                  
                </a>
              </div>
\t\t\t  <div class=\"recent-work-item\">
                <em>
                  <img src=\"{{asset('assets/pages/img/works/img5.jpg')}}\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"{{path('infojet_service_documentation')}}\">
                  <strong>Documentation</strong>
                 
                </a>
              </div>
             
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->
\t\t<!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Nos sérvices</span>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->
\t\t
\t\t
 <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
                
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-one active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">Architecte et Techniciens du Batiment</p>
                            <p>
                                Architecte DPLG - Bureau d’Étude BET - Contractant Général - 
\t\t\t\t\t\t\t\t<br>Géotechniciens - Maitre d'Oeuvre Exécution MOE...
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-two\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tAménagement et préparation du site</p>
                            <p>
                               Démolition - Terrassement - Amélioration des sols - <br>
\t\t\t\t\t\t\t   Sondages et Forages - VRD -  Paysagiste - <br>
\t\t\t\t\t\t\t   Montage d'échafaudage- Étaiement - Traitement Amiante - <br>
\t\t\t\t\t\t\t   Traitement curatifs -Insectes xylophages – <br>
\t\t\t\t\t\t\t   Champignons - Assèchement des murs
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-three\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tStructures et Gros Oeuvre</p>
                            <p>
                               Fondations spéciales - <br>
\t\t\t\t\t\t\t   Maçonnerie et béton armé sauf précontraint in situ - 
\t\t\t\t\t\t\t   <br>Charpente et structure en bois - 
\t\t\t\t\t\t\t   <br>Charpente et structure métallique
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
\t\t\t\t
\t\t\t\t<!-- forth slide -->
                <div class=\"item carousel-item-for\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">Clos et Couverts</p>
                            <p>
                                Couverture - Ravalement - Etanchéité de toiture - <br>
\t\t\t\t\t\t\t\tterrasse et plancher intérieur - 
\t\t\t\t\t\t\t\t<br>Etanchéité et Imperméabilisation de cuvelage,<br> réservoirs et piscines - 
\t\t\t\t\t\t\t\t<br>Calfeutrement protection, imperméabilité étanchéité des façades - 
\t\t\t\t\t\t\t\t<br>Menuiseries extérieures...
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
                
                <!-- fiveth slide -->
                <div class=\"item carousel-item-five\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tDivisions et Aménagements</p>
                            <p>
                               Ménuiserie intérieur - Platrerie
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>

                <!-- sixth slide -->
                <div class=\"item carousel-item-six\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                RC Décennale<br/>
                                
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">
\t\t\t\t\t\t\tRC Décennale Lots Techniques</p>
                            <p>
                               Plomberie – Sanitaires - Chauffage - <br>
\t\t\t\t\t\t\t   Gaz - Sprinkler – RIA - <br>
\t\t\t\t\t\t\t   Installation thermique de génie climatique - <br>
\t\t\t\t\t\t\t   pompes à chaleur - Installation d’aéraulique et de <br>
\t\t\t\t\t\t\t   conditionnement d’air - Électricité - <br>
\t\t\t\t\t\t\t   Photovoltaïques - Piscines - Maisons  Ossatures Bois
                            </p>
\t\t\t\t\t\t\t<a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Plus de détails!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"right carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
\t
        <h1>Choisissez votre activité</h1>
        <!-- BEGIN STEPS -->
        <div class=\"row margin-bottom-40 front-steps-wrapper front-steps-count-3\">
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step1\">
              <h2>Les riques</h2>
              
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step2\">
              <h2>Antécédent</h2>
              
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step3\">
              <h2>Souscripteur</h2>
              
            </div>
          </div>
        </div>
        <!-- END STEPS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
\t\t<form action=\"{{path('abi_routine_homepage')}}\" method=\"post\"  class=\"form-horizontal form-without-legend\" enctype=\"{{form_enctype(form)}}\">
\t\t\t\t
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
\t\t  
          <div class=\"col-md-12 tab-style-1\">
\t\t\t{% if message %}
\t\t\t\t<h4>{{message}}</h4>
\t\t\t{% endif %}
\t\t\t{% if form_errors(form) %}
\t\t\t\t<h4>{{form_errors(form)}}</h4>
\t\t\t{% endif %}
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\">Les risques</a></li>
              <li><a href=\"#tab-2\" data-toggle=\"tab\">Antécédent</a></li>
              <li><a href=\"#tab-3\" data-toggle=\"tab\">Souscripteur</a></li>
\t\t\t 
            </ul>
\t\t\t
\t\t\t
            <div class=\"tab-content\">
\t\t\t
              <div class=\"tab-pane row fade in active\" id=\"tab-1\">
                <div class=\"col-md-7 col-sm-7\">
\t\t\t\t{% for grouperisque in groupeRisques %}
\t\t\t\t\t{% if grouperisque.risques|length > 0 %}
\t\t\t\t\t\t<div id=\"accordion\" class=\"accordion-style1 panel-group accordion-style2\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a aria-expanded=\"false\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{grouperisque.id}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bigger-110 ace-icon fa fa-angle-right\" data-icon-hide=\"ace-icon fa fa-angle-down\" data-icon-show=\"ace-icon fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t{{grouperisque.libelle}}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"height: 0px;\" aria-expanded=\"false\" class=\"panel-collapse collapse\" id=\"collapse{{grouperisque.id}}\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t                  <div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t  {% for risque in grouperisque.risques %}
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t                      <label for=\"email\" class=\"col-lg-4 control-label\">{{risque.libelle}}</label>
\t\t\t\t\t\t\t                      <div class=\"col-lg-4\">
\t\t\t\t\t\t\t                        <input class=\"form-control\" name=\"{{risque.inputName}}\" value=\"{{risque.libelle}}\"  
\t\t\t\t\t\t\t\t\t\t\t  type=\"checkbox\" data-parsley-mincheck=\"1\">
\t\t\t\t\t\t\t                      </div>
\t\t\t\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t\t\t  {% endfor %}
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t            </div>                     
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t{% endif %}\t\t\t\t
\t\t\t\t{% endfor %}
                </div>
\t\t\t\t
              </div>
              <div class=\"tab-pane row fade\" id=\"tab-2\">
                <div class=\"col-md-7 col-sm-7\">
\t\t\t\t<p>{{form_widget(form.estDejaAssure)}} Avez-vous déjà été assuré ? </p>
\t\t\t\t<p>{{form_widget(form.estPlusTrentePourcentSoustraitance)}} Avez-vous Plus de 30% de soustraitance ?</p>
\t\t\t\t<p>{{form_widget(form.estRepriseDuPasse)}} Souhaitez vous la reprise du passé ? </p>
\t\t\t\t<p>{{form_widget(form.estRedressementJudiciare)}} Êtes-vous en redressement judiciaire ou en liquidation ?</p>
\t\t\t\t<p>Date effet {{form_widget(form.dateEffet)}}</p>
\t\t\t\t<p>Echéancier {{form_widget(form.Echeance)}}</p>
                </div>
              </div>
              <div class=\"tab-pane fade\" id=\"tab-3\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <div class=\"col-md-9 col-sm-9\">
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Civilité</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.civilite)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Nom</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.username)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Prenom</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.userfirstname)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Mail</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.mail)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Code postal</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.codePostal)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Ville</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.ville)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Adresse entreprise</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.adresseEntreprise)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Raison sociale</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.raisonSociale)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Forme juridique</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.formeJuridique)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Numero Siret</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.numeroSiret)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Date création</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.dateCreation)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Chiffre d'affaire</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.chiffreAffaire)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Nombre salarié</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.nombreDeSalarie)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-lg-1 control-label\">Téléphone</label>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t{{form_widget(form.telephone)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  {{form_rest(form)}}
\t\t\t\t\t\t  <br>
\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-primary\">Enregistrer <i class=\"ace-icon fa fa-save\"></i></button>
\t\t\t\t\t  </div>
\t\t\t\t</div>
              </div>
              
            </div>
\t\t\t
          </div>
          <!-- END TABS -->
        
         
        </div>   
\t\t</form>
        <!-- END TABS AND TESTIMONIALS -->
\t\t


       <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
          <!-- BEGIN CONTENT -->
          <div class=\"col-md-12 col-sm-12\">
            <div class=\"content-page\">
              <div class=\"row margin-bottom-30\">
                <!-- BEGIN INFO BLOCK -->               
                <div class=\"col-md-7\">
                  <h2 class=\"no-top-space\">Pourquoi nous choisir?</h2>
                  <p>Devis Décennale est le leader de la RC Décennale en ligne, 
\t\t\t\t  une équipe de professionnels réactifs de l'assurance construction, 
\t\t\t\t  qui a travaillé dur avec son service informatique afin de mettre à votre disposition 
\t\t\t\t  une technologie sans égale pour réaliser vous même vos demandes de devis en 
\t\t\t\t  assurance responsabilité décennale directement sur notre site web, 
\t\t\t\t  pour une réponse en quelques minutes dans votre espace client, 
\t\t\t\t  dans lequel vous pourrez télécharger vos documents de souscription 
\t\t\t\t  et souscrire tranquillement sans stress.
\t\t\t\t  Économisez jusqu'à 50% sur votre assurance Responsabilité Civile 
\t\t\t\t  Décennale par année d'assurance au prorata du chiffre d'affaires 
\t\t\t\t  réalisé pour des garanties quasi équivalentes</p>
\t\t\t\t  <button class=\"btn btn-primary\"> Plus de détails<i class=\"ace-icon fa fa-more\"></i></button>
                  <!-- END LISTS -->
                </div>
                <!-- END INFO BLOCK -->   

                <!-- BEGIN CAROUSEL -->            
                <div class=\"col-md-5 front-carousel\">
                  <div id=\"myCarousel\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"item active\">
                        <img src=\"{{asset('assets/pages/img/devis-decennale/pourquoi_nous_choisir.png')}}\" alt=\"\">
                       
                      </div>
                     
                    </div>
                    <!-- Carousel nav -->
                    <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                      <i class=\"fa fa-angle-left\"></i>
                    </a>
                    <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                      <i class=\"fa fa-angle-right\"></i>
                    </a>
                  </div>                
                </div>
                <!-- END CAROUSEL -->
              </div>

              <div class=\"row margin-bottom-40\">
                <!-- BEGIN TESTIMONIALS -->
                <div class=\"col-md-7 testimonials-v1\">
                  <h2><a href=\"\">Avis de nos clients en assurance décennale</a></h2>                
                  <div id=\"myCarousel1\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"active item\">
                        <blockquote><p>Notre compagnie d'assurance française nous a augmenté notre prime de 10 000 € 
\t\t\t\t\t\tsous prétexte d'une augmentation du CA de 10 000 € soit 34 000 €/an d'assurance RCD. 
\t\t\t\t\t\tDevis décennale nous a divisé la prime par 2, soit 50% d'économie du coup 85000€/5ans et 
\t\t\t\t\t\tj'ai recruté un technicien.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"{{asset('assets/pages/img/devis-decennale/Mr.jpg')}}\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Amalou</span>
                            <span class=\"testimonials-post\">3 juin 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"item\">
                        <blockquote><p>Enfin une assurance décennale pas chère ! AXA a résilié mon contrat 
\t\t\t\t\t\td'assurance décennale pour sinistre, je payais 47 000 €/an d'assurance décennale 
\t\t\t\t\t\tet ils étaient prêts à me reprendre pour 75 000 €/an. 
\t\t\t\t\t\tDevis décennale m'a fait souscrire en urgence un contrat 
\t\t\t\t\t\tavec une compagnie spécialisée. Merci</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"{{asset('assets/pages/img/devis-decennale/Mr.jpg')}}\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Rohad</span>
                            <span class=\"testimonials-post\">21 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
\t\t\t\t\t  <div class=\"item\">
                        <blockquote><p>Nous étions chez un courtier injoignable, pas compétent, 
\t\t\t\t\t\tpeu scrupuleux et horriblement cher. 
\t\t\t\t\t\tNous avons trouvé sur internet le site devis-décennale.fr. 
\t\t\t\t\t\tDevis en ligne simple, rapide, pro et pas 
\t\t\t\t\t\tcher nous réalisons 50% d'économie par année d'assurance RC Décennale. </p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"{{asset('assets/pages/img/devis-decennale/Mme.jpg')}}\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Valente</span>
                            <span class=\"testimonials-post\">18 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
\t\t\t\t\t  <div class=\"item\">
                        <blockquote><p>Trouver une Garantie Décennale pas chère lorsqu’on a une activité 
\t\t\t\t\t\tTous Corps d’États et résilié pour redressement par Axa, 
\t\t\t\t\t\tc’est presque « mission impossible ». Le plus dur c’est 
\t\t\t\t\t\tdéjà de trouver un Assureur qui couvre notre activité.
\t\t\t\t\t\tDevis Décennale m'a solutionné ma problématique, le top</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"{{asset('assets/pages/img/devis-decennale/Mr.jpg')}}\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Mancini</span>
                            <span class=\"testimonials-post\">18 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
\t\t\t\t\t  <div class=\"item\">
                        <blockquote><p>J'étais chez GAN en Corse, je payais 14 000 €/an d'assurance décennale Corse,
\t\t\t\t\t\tmon conseillé perso a pris l'avion de Paris et en 24h il est venu à ma rencontre, 
\t\t\t\t\t\tj'ai validé sa proposition, j'économise 5 000 €/an d'assurance soit 25 000€/5ans, 
\t\t\t\t\t\tj'ai parrainé 2 de mes sous-traitants chez lui, Merci </p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"{{asset('assets/pages/img/devis-decennale/Mr.jpg')}}\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">M. Venturio</span>
                            <span class=\"testimonials-post\">17 avril 2017 - Note : 5/5</span>
                          </div>
                        </div>
                      </div>
                    </div>
\t\t\t\t\t
                    <!-- Carousel nav -->
                    <a class=\"left-btn\" href=\"#myCarousel1\" data-slide=\"prev\"></a>
                    <a class=\"right-btn\" href=\"#myCarousel1\" data-slide=\"next\"></a>
                  </div>
                </div>
                <!-- END TESTIMONIALS --> 

                <!-- BEGIN PROGRESS BAR -->
                <div class=\"col-md-5 front-skills\">
                  <h2 class=\"block\">Les chiffres parlent tous seuls</h2>
                  <span>1599 Devis</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 96%;\"></div>
                  </div>
\t\t\t\t  <span>1527 Inscriptions</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 90%;\"></div>
                  </div>
                  <span>963 Clients</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 85%;\"></div>
                  </div>
                  <span>7 Partenaires</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 70%;\"></div>
                  </div>
                </div>                       
                <!-- END PROGRESS BAR -->
              </div>

             
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
\t\t<!-- BEGIN CLIENTS -->
        <div class=\"row margin-bottom-40 our-clients\">
          <div class=\"col-md-3\">
            <h2><a href=\"\">Nos clients</a></h2>
            <p>Nous comptons actuellement plus de 960 Clients. </p>
          </div>
          <div class=\"col-md-9\">
            <div class=\"owl-carousel owl-carousel6-brands\">
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client1-gray.png')}}\" class=\"img-responsive\" alt=\"\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client1.png')}}\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client2-gray.png')}}\" class=\"img-responsive\" alt=\"\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client2.jpg')}}\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client3-gray.png')}}\" class=\"img-responsive\" alt=\"\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client3.jpg')}}\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
              <div class=\"client-item\">
                <a href=\"javascript:;\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client4-gray.png')}}\" class=\"img-responsive\" alt=\"\">
                  <img src=\"{{asset('assets/pages/img/devis-decennale/client4.jpg')}}\" class=\"color-img img-responsive\" alt=\"\">
                </a>
              </div>
                           
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
        <!-- END SIDEBAR & CONTENT -->
\t\t<h2>Actualités</h2>
\t <div class=\"row front-team\">
                <ul class=\"list-unstyled\">
                  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"{{asset('assets/pages/img/devis-decennale/art1.jpg')}}\">
                      <h3>
                        <strong>DEVIS RC PRO...</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-04-12</small>
                      </h3>
                      <p>Devis en 3 clics ! Et recevez votre devis en 30 Minutes</p>
                      
                    </div>
                  </li>
\t\t\t\t  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"{{asset('assets/pages/img/devis-decennale/art2.jpg')}}\">
                      <h3>
                        <strong>L'assurance éc...</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-04-09</small>
                      </h3>
                      <p>Il n'y aurait de construction en Fra...</p>
                      
                    </div>
                  </li>
\t\t\t\t  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"{{asset('assets/pages/img/devis-decennale/art3.jpg')}}\">
                      <h3>
                        <strong>DEVIS EN LIGNE</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-01-31</small>
                      </h3>
                      <p>Devis en 3 clics ! Et recevez votre devis en 30 Minutes</p>
                      
                    </div>
                  </li>
\t\t\t\t  <li class=\"col-md-2\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"{{asset('assets/pages/img/devis-decennale/art4.jpg')}}\">
                      <h3>
                        <strong>DEVIS ASSUR...</strong> 
                        <small><i class=\"fa fa-calendar\"></i> 2017-01-31</small>
                      </h3>
                      <p>Devis en 3 clics ! Et recevez votre devis en 30 Minutes</p>
                      
                    </div>
                  </li>
\t\t\t\t  
\t\t\t\t

                </ul>            
              </div>

       
    </div>
{% endblock%}
{% block script_page %}
 <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"{{asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"{{asset('assets/plugins/jquery-mixitup/jquery.mixitup.min.js')}}\" type=\"text/javascript\"></script>
    
    <script src=\"{{asset('assets/corporate/scripts/layout.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/pages/scripts/portfolio.js')}}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
{% endblock %}", "AbiRoutineBundle:Routine:index.html.twig", "/var/www/projet/decennale/src/Abi/RoutineBundle/Resources/views/Routine/index.html.twig");
    }
}
