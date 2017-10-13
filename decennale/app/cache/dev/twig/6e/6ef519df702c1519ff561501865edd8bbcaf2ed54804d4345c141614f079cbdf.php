<?php

/* AbiRoutineBundle:Routine:index.html - Copie.twig */
class __TwigTemplate_1dc8cea2a4e6700e57b327d4e0b998bbf358d8e7db89acd8ff97d174a1b3a28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiRoutineBundle:Routine:index.html - Copie.twig", 1);
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
        $__internal_430b9b7d768646bab6bd2fa7c19fa2edd359d87b81f2742f13509cabeedfc72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430b9b7d768646bab6bd2fa7c19fa2edd359d87b81f2742f13509cabeedfc72d->enter($__internal_430b9b7d768646bab6bd2fa7c19fa2edd359d87b81f2742f13509cabeedfc72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiRoutineBundle:Routine:index.html - Copie.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430b9b7d768646bab6bd2fa7c19fa2edd359d87b81f2742f13509cabeedfc72d->leave($__internal_430b9b7d768646bab6bd2fa7c19fa2edd359d87b81f2742f13509cabeedfc72d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c09cc773ad11976adabc1d2a78490330a96a4d7ae893f40e13d8dea0d6d926d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09cc773ad11976adabc1d2a78490330a96a4d7ae893f40e13d8dea0d6d926d0->enter($__internal_c09cc773ad11976adabc1d2a78490330a96a4d7ae893f40e13d8dea0d6d926d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html - Copie.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Acceuil";
        
        $__internal_c09cc773ad11976adabc1d2a78490330a96a4d7ae893f40e13d8dea0d6d926d0->leave($__internal_c09cc773ad11976adabc1d2a78490330a96a4d7ae893f40e13d8dea0d6d926d0_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_f1c70e3e110596fffd145edbdfd21296a377988d82cc78eebe554d857d58c2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c70e3e110596fffd145edbdfd21296a377988d82cc78eebe554d857d58c2ae->enter($__internal_f1c70e3e110596fffd145edbdfd21296a377988d82cc78eebe554d857d58c2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html - Copie.twig"));

        echo "active ";
        
        $__internal_f1c70e3e110596fffd145edbdfd21296a377988d82cc78eebe554d857d58c2ae->leave($__internal_f1c70e3e110596fffd145edbdfd21296a377988d82cc78eebe554d857d58c2ae_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_16998f867dce311c7b07d00ef95db26e807e3562909b4ac55cad06f39ddd1cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16998f867dce311c7b07d00ef95db26e807e3562909b4ac55cad06f39ddd1cad->enter($__internal_16998f867dce311c7b07d00ef95db26e807e3562909b4ac55cad06f39ddd1cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Routine:index.html - Copie.twig"));

        // line 5
        echo "
 <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-eight active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                Dévis décennale<br/>
                                <span class=\"carousel-title-normal\">constructeur</span>
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">Votre assurance décennale en 3 Clics</p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Souscrire maintenant!</a>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-nine\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Besoin d'un assureur?
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                devis gratuit assurance decennale 
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Souscrire maintenant!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-ten\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Simple &amp; Rapide
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                3 clics suffisent.
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
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

    <div class=\"main\">
      <div class=\"container\">
        <!-- BEGIN SERVICE BOX -->   
        <div class=\"row service-box margin-bottom-40\">
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"service-box-heading\">
              <em><i class=\"fa fa-location-arrow blue\"></i></em>
              <span>Valeur 1</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"service-box-heading\">
              <em><i class=\"fa fa-check red\"></i></em>
              <span>Valeur 2</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"service-box-heading\">
              <em><i class=\"fa fa-compress green\"></i></em>
              <span>Valeur 3</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Dévis décennale</span>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
          <div class=\"col-md-3\">
            <h2><a href=\"portfolio.html\">Nos services</a></h2>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class=\"col-md-9\">
            <div class=\"owl-carousel owl-carousel3\">
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"assets/pages/img/works/img1.jpg\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>Devis décennale architecte</strong>
                  <b>lorem ispmu</b>
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"assets/pages/img/works/img2.jpg\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>Devis décennale constructeur</strong>
                  <b>lorem ispmu.</b>
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"assets/pages/img/works/img2.jpg\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>Service vedette 3</strong>
                  <b>lorem ispmu.</b>
                </a>
              </div>
             
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->

        <h1>Des besoins particuliers ? Choisissez votre activité</h1>
        <!-- BEGIN STEPS -->
        <div class=\"row margin-bottom-40 front-steps-wrapper front-steps-count-3\">
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step1\">
              <h2>Les riques</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step2\">
              <h2>Antécédent - Option</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step3\">
              <h2>Souscripteur - Validation</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
        </div>
        <!-- END STEPS -->

        <!-- BEGIN TABS  -->
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
\t\t  
          <div class=\"col-md-12 tab-style-1\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\">Quels services avez-vous besoins</a></li>
              <li><a href=\"#tab-2\" data-toggle=\"tab\">Parlons de vous</a></li>
              <li><a href=\"#tab-3\" data-toggle=\"tab\">Validez votre demande</a></li>
            </ul>
            <div class=\"tab-content\">
\t\t\t<form action=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_routine_homepage");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "/>
              <div class=\"tab-pane row fade in active\" id=\"tab-1\">
                <div class=\"col-md-9 col-sm-9\">
                 <h4>ARCHITECTE ET TECHNICIENS DU BATIMENT </h4>
\t\t\t\t ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "risques1", array()), 'widget');
        echo "
            </div>
              </div>
              <div class=\"tab-pane row fade\" id=\"tab-2\">
                <div class=\"col-md-9 col-sm-9\">
\t\t\t\t\t<label>
\t\t\t\t        Etes vous déjà assuré? 
\t\t\t\t     </label>
\t\t\t\t\t\t&nbsp &nbsp &nbsp &nbsp
\t\t\t\t\t\t";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estDejaAssure", array()), 'widget');
        echo "
                </div>
                <div class=\"col-md-3 col-sm-3\">
                </div>
              </div>
              <div class=\"tab-pane fade\" id=\"tab-3\">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
\t\t\t\t";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t<input type=\"submit\" value=\"Envoyer\">
\t\t\t  </div>
\t\t\t</form>
            </div>
          </div>
          <!-- END TABS -->
        </div>                
        <!-- END TABS -->



       <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
          <!-- BEGIN CONTENT -->
          <div class=\"col-md-12 col-sm-12\">
            <div class=\"content-page\">
              <div class=\"row margin-bottom-30\">
                <!-- BEGIN INFO BLOCK -->               
                <div class=\"col-md-7\">
                  <h2 class=\"no-top-space\">Pourquoi nous choisir?</h2>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> 
                  <p>Idest laborum et dolorum fuga. Et harum quidem rerum et quas molestias excepturi sint occaecati facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
                  <!-- BEGIN LISTS -->
                  <div class=\"row front-lists-v1\">
                    <div class=\"col-md-6\">
                      <ul class=\"list-unstyled margin-bottom-20\">
                        <li><i class=\"fa fa-check\"></i> Officia deserunt molliti</li>
                        <li><i class=\"fa fa-check\"></i> Consectetur adipiscing </li>
                        <li><i class=\"fa fa-check\"></i> Deserunt fpicia</li>
                      </ul>
                    </div>
                    <div class=\"col-md-6\">
                      <ul class=\"list-unstyled\">
                        <li><i class=\"fa fa-check\"></i> Officia deserunt molliti</li>
                        <li><i class=\"fa fa-check\"></i> Consectetur adipiscing </li>
                        <li><i class=\"fa fa-check\"></i> Deserunt fpicia</li>
                      </ul>
                    </div>
                  </div>
                  <!-- END LISTS -->
                </div>
                <!-- END INFO BLOCK -->   

                <!-- BEGIN CAROUSEL -->            
                <div class=\"col-md-5 front-carousel\">
                  <div id=\"myCarousel\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"item active\">
                        <img src=\"assets/pages/img/pics/img2-medium.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                          <p>Excepturi sint occaecati cupiditate non provident</p>
                        </div>
                      </div>
                      <div class=\"item\">
                        <img src=\"assets/pages/img/pics/img1-medium.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                          <p>Ducimus qui blanditiis praesentium voluptatum</p>
                        </div>
                      </div>
                      <div class=\"item\">
                        <img src=\"assets/pages/img/pics/img2-medium.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                          <p>Ut non libero consectetur adipiscing elit magna</p>
                        </div>
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
                  <h2>Avis de nos clients</h2>                
                  <div id=\"myCarousel1\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"active item\">
                        <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"assets/pages/img/people/img1-small.jpg\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">Lina Mars</span>
                            <span class=\"testimonials-post\">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"item\">
                        <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"assets/pages/img/people/img5-small.jpg\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">Kate Ford</span>
                            <span class=\"testimonials-post\">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"item\">
                        <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"assets/pages/img/people/img2-small.jpg\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">Jake Witson</span>
                            <span class=\"testimonials-post\">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class=\"left-btn\" href=\"#myCarousel1\" data-slide=\"prev\"></a>
                    <a class=\"right-btn\" href=\"#myCarousel1\" data-slide=\"next\"></a>
                  </div>
                </div>
                <!-- END TESTIMONIALS --> 

                <!-- BEGIN PROGRESS BAR -->
                <div class=\"col-md-5 front-skills\">
                  <h2 class=\"block\">Les chiffres parlent tous seuls</h2>
                  <span>UI Design 90%</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 90%;\"></div>
                  </div>
                  <span>Wordpress CMS 60%</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 60%;\"></div>
                  </div>
                  <span>HTML/CSS &amp; JavaScirp 75%</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 75%;\"></div>
                  </div>
                </div>                       
                <!-- END PROGRESS BAR -->
              </div>

              <div class=\"row front-team\">
                <ul class=\"list-unstyled\">
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img1-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 1</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img4-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 2</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img2-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 3</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img5-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 4</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>            
              </div>

            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

       
    </div>
";
        
        $__internal_16998f867dce311c7b07d00ef95db26e807e3562909b4ac55cad06f39ddd1cad->leave($__internal_16998f867dce311c7b07d00ef95db26e807e3562909b4ac55cad06f39ddd1cad_prof);

    }

    public function getTemplateName()
    {
        return "AbiRoutineBundle:Routine:index.html - Copie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 213,  278 => 206,  266 => 197,  257 => 193,  67 => 5,  61 => 4,  49 => 3,  36 => 2,  11 => 1,);
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

 <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-eight active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                Dévis décennale<br/>
                                <span class=\"carousel-title-normal\">constructeur</span>
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">Votre assurance décennale en 3 Clics</p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Souscrire maintenant!</a>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-nine\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Besoin d'un assureur?
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                devis gratuit assurance decennale 
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Souscrire maintenant!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-ten\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Simple &amp; Rapide
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                3 clics suffisent.
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
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

    <div class=\"main\">
      <div class=\"container\">
        <!-- BEGIN SERVICE BOX -->   
        <div class=\"row service-box margin-bottom-40\">
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"service-box-heading\">
              <em><i class=\"fa fa-location-arrow blue\"></i></em>
              <span>Valeur 1</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"service-box-heading\">
              <em><i class=\"fa fa-check red\"></i></em>
              <span>Valeur 2</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class=\"col-md-4 col-sm-4\">
            <div class=\"service-box-heading\">
              <em><i class=\"fa fa-compress green\"></i></em>
              <span>Valeur 3</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Dévis décennale</span>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
          <div class=\"col-md-3\">
            <h2><a href=\"portfolio.html\">Nos services</a></h2>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class=\"col-md-9\">
            <div class=\"owl-carousel owl-carousel3\">
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"assets/pages/img/works/img1.jpg\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>Devis décennale architecte</strong>
                  <b>lorem ispmu</b>
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"assets/pages/img/works/img2.jpg\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>Devis décennale constructeur</strong>
                  <b>lorem ispmu.</b>
                </a>
              </div>
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"assets/pages/img/works/img2.jpg\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>Service vedette 3</strong>
                  <b>lorem ispmu.</b>
                </a>
              </div>
             
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->

        <h1>Des besoins particuliers ? Choisissez votre activité</h1>
        <!-- BEGIN STEPS -->
        <div class=\"row margin-bottom-40 front-steps-wrapper front-steps-count-3\">
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step1\">
              <h2>Les riques</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step2\">
              <h2>Antécédent - Option</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-4 front-step-col\">
            <div class=\"front-step front-step3\">
              <h2>Souscripteur - Validation</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
        </div>
        <!-- END STEPS -->

        <!-- BEGIN TABS  -->
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
\t\t  
          <div class=\"col-md-12 tab-style-1\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\">Quels services avez-vous besoins</a></li>
              <li><a href=\"#tab-2\" data-toggle=\"tab\">Parlons de vous</a></li>
              <li><a href=\"#tab-3\" data-toggle=\"tab\">Validez votre demande</a></li>
            </ul>
            <div class=\"tab-content\">
\t\t\t<form action=\"{{path('abi_routine_homepage')}}\" method=\"post\" {{ form_enctype(form) }}/>
              <div class=\"tab-pane row fade in active\" id=\"tab-1\">
                <div class=\"col-md-9 col-sm-9\">
                 <h4>ARCHITECTE ET TECHNICIENS DU BATIMENT </h4>
\t\t\t\t {{form_widget(form.risques1)}}
            </div>
              </div>
              <div class=\"tab-pane row fade\" id=\"tab-2\">
                <div class=\"col-md-9 col-sm-9\">
\t\t\t\t\t<label>
\t\t\t\t        Etes vous déjà assuré? 
\t\t\t\t     </label>
\t\t\t\t\t\t&nbsp &nbsp &nbsp &nbsp
\t\t\t\t\t\t{{ form_widget(form.estDejaAssure) }}
                </div>
                <div class=\"col-md-3 col-sm-3\">
                </div>
              </div>
              <div class=\"tab-pane fade\" id=\"tab-3\">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
\t\t\t\t{{form_rest(form) }}
\t\t\t\t<input type=\"submit\" value=\"Envoyer\">
\t\t\t  </div>
\t\t\t</form>
            </div>
          </div>
          <!-- END TABS -->
        </div>                
        <!-- END TABS -->



       <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
          <!-- BEGIN CONTENT -->
          <div class=\"col-md-12 col-sm-12\">
            <div class=\"content-page\">
              <div class=\"row margin-bottom-30\">
                <!-- BEGIN INFO BLOCK -->               
                <div class=\"col-md-7\">
                  <h2 class=\"no-top-space\">Pourquoi nous choisir?</h2>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> 
                  <p>Idest laborum et dolorum fuga. Et harum quidem rerum et quas molestias excepturi sint occaecati facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
                  <!-- BEGIN LISTS -->
                  <div class=\"row front-lists-v1\">
                    <div class=\"col-md-6\">
                      <ul class=\"list-unstyled margin-bottom-20\">
                        <li><i class=\"fa fa-check\"></i> Officia deserunt molliti</li>
                        <li><i class=\"fa fa-check\"></i> Consectetur adipiscing </li>
                        <li><i class=\"fa fa-check\"></i> Deserunt fpicia</li>
                      </ul>
                    </div>
                    <div class=\"col-md-6\">
                      <ul class=\"list-unstyled\">
                        <li><i class=\"fa fa-check\"></i> Officia deserunt molliti</li>
                        <li><i class=\"fa fa-check\"></i> Consectetur adipiscing </li>
                        <li><i class=\"fa fa-check\"></i> Deserunt fpicia</li>
                      </ul>
                    </div>
                  </div>
                  <!-- END LISTS -->
                </div>
                <!-- END INFO BLOCK -->   

                <!-- BEGIN CAROUSEL -->            
                <div class=\"col-md-5 front-carousel\">
                  <div id=\"myCarousel\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"item active\">
                        <img src=\"assets/pages/img/pics/img2-medium.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                          <p>Excepturi sint occaecati cupiditate non provident</p>
                        </div>
                      </div>
                      <div class=\"item\">
                        <img src=\"assets/pages/img/pics/img1-medium.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                          <p>Ducimus qui blanditiis praesentium voluptatum</p>
                        </div>
                      </div>
                      <div class=\"item\">
                        <img src=\"assets/pages/img/pics/img2-medium.jpg\" alt=\"\">
                        <div class=\"carousel-caption\">
                          <p>Ut non libero consectetur adipiscing elit magna</p>
                        </div>
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
                  <h2>Avis de nos clients</h2>                
                  <div id=\"myCarousel1\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                      <div class=\"active item\">
                        <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"assets/pages/img/people/img1-small.jpg\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">Lina Mars</span>
                            <span class=\"testimonials-post\">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"item\">
                        <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"assets/pages/img/people/img5-small.jpg\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">Kate Ford</span>
                            <span class=\"testimonials-post\">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                      <div class=\"item\">
                        <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                        <div class=\"carousel-info\">
                          <img class=\"pull-left\" src=\"assets/pages/img/people/img2-small.jpg\" alt=\"\">
                          <div class=\"pull-left\">
                            <span class=\"testimonials-name\">Jake Witson</span>
                            <span class=\"testimonials-post\">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class=\"left-btn\" href=\"#myCarousel1\" data-slide=\"prev\"></a>
                    <a class=\"right-btn\" href=\"#myCarousel1\" data-slide=\"next\"></a>
                  </div>
                </div>
                <!-- END TESTIMONIALS --> 

                <!-- BEGIN PROGRESS BAR -->
                <div class=\"col-md-5 front-skills\">
                  <h2 class=\"block\">Les chiffres parlent tous seuls</h2>
                  <span>UI Design 90%</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 90%;\"></div>
                  </div>
                  <span>Wordpress CMS 60%</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 60%;\"></div>
                  </div>
                  <span>HTML/CSS &amp; JavaScirp 75%</span>
                  <div class=\"progress\">
                    <div role=\"progressbar\" class=\"progress-bar\" style=\"width: 75%;\"></div>
                  </div>
                </div>                       
                <!-- END PROGRESS BAR -->
              </div>

              <div class=\"row front-team\">
                <ul class=\"list-unstyled\">
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img1-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 1</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img4-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 2</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img2-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 3</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class=\"col-md-3\">
                    <div class=\"thumbnail\">
                      <img alt=\"\" src=\"assets/pages/img/people/img5-large.jpg\">
                      <h3>
                        <strong>Client / ref /partenaire 4</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class=\"social-icons social-icons-color\">
                        <li><a class=\"facebook\" data-original-title=\"Facebook\" href=\"javascript:;\"></a></li>
                        <li><a class=\"twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a></li>
                        <li><a class=\"googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a></li>
                        <li><a class=\"linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>            
              </div>

            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

       
    </div>
{% endblock%}", "AbiRoutineBundle:Routine:index.html - Copie.twig", "/var/www/projet/decennale/src/Abi/RoutineBundle/Resources/views/Routine/index.html - Copie.twig");
    }
}
