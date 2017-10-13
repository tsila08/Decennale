<?php

/* AbiRoutineBundle:Commentaires:index.html.twig */
class __TwigTemplate_2bbb9f1dbb7daef61480b4c60dda41c1f84b0f0238957ea40349b18f887d61be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiRoutineBundle:Commentaires:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_924a198a96be169f70ee1ba92fa6154a7db22d25928e5901023d7c6dca2e4f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924a198a96be169f70ee1ba92fa6154a7db22d25928e5901023d7c6dca2e4f1a->enter($__internal_924a198a96be169f70ee1ba92fa6154a7db22d25928e5901023d7c6dca2e4f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiRoutineBundle:Commentaires:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924a198a96be169f70ee1ba92fa6154a7db22d25928e5901023d7c6dca2e4f1a->leave($__internal_924a198a96be169f70ee1ba92fa6154a7db22d25928e5901023d7c6dca2e4f1a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e8d0fb7980d2d7124fbe1929bc5292bfb4b882953955396b33b74c053e2e0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8d0fb7980d2d7124fbe1929bc5292bfb4b882953955396b33b74c053e2e0fb->enter($__internal_4e8d0fb7980d2d7124fbe1929bc5292bfb4b882953955396b33b74c053e2e0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiRoutineBundle:Commentaires:index.html.twig"));

        // line 3
        echo "


<table>

</tr>


";
        // line 11
        if (((isset($context["valide"]) ? $context["valide"] : $this->getContext($context, "valide")) == 1)) {
            // line 12
            echo "
<div class=\"alert alert-success\">
Votre commentaire a été pris en compte
</div>

 ";
        }
        // line 18
        echo "
<section class=\"post-section blog-post\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-sm-8\">
        <div class=\"post-box\">
          <div class=\"text-box\">
            <div class=\"clearfix\"> <strong class=\"date\"><i class=\"fa fa-calendar\"></i>
              3 juin 2017 </strong> </div>
            <h4><a href=\"commentaires\">
              Commentaires              </a></h4>
            <p>D&eacute;couvrez les avis des clients&nbsp; devis-decennale&nbsp; assurance&nbsp; pas ch&egrave;re.</p>

<p>✓ + 3 000 assur&eacute;s</p>

<p>✓ Tarifs Attractifs</p>

<p>✓ 100% clients satisfaits !</p>
          </div>
        </div>
                  <div id=\"content-area\">
            <ul id=\"myList\">

";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")), (isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "
";
            // line 43
            if (($context["i"] < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms"))))) {
                // line 44
                echo "
                           
                <div class=\"box\">

         ";
                // line 48
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 5)) {
                    // line 49
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/5etoile.png"), "html", null, true);
                    echo " style=\"width:100px;\" > </div>
        ";
                }
                // line 51
                echo "         ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 4)) {
                    // line 52
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/4etoile.png"), "html", null, true);
                    echo " style=\"width:75px;\" > </div>
        ";
                }
                // line 54
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 3)) {
                    // line 55
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/3etoile.png"), "html", null, true);
                    echo " style=\"width:55px;\" > </div>
        ";
                }
                // line 57
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 2)) {
                    // line 58
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/2etoile.png"), "html", null, true);
                    echo " style=\"width:35px;\" > </div>
        ";
                }
                // line 60
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 1)) {
                    // line 61
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/1etoile.png"), "html", null, true);
                    echo " style=\"width:25px;\" > </div>
        ";
                }
                // line 63
                echo "\t";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentCivilite", array()) == "Mr")) {
                    // line 64
                    echo "\t\t<div class=\"thumb\"> <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Mr.jpg"), "html", null, true);
                    echo "  > </div>
\t";
                } else {
                    // line 66
                    echo "\t\t<div class=\"thumb\"> <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Mme.jpg"), "html", null, true);
                    echo "  > </div>
\t";
                }
                // line 68
                echo "                   <span class=\"  text-center\" style=\"font-size:12px; color:#666\"><i class=\"fa fa-calendar\"></i>
                    ";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentDate", array()), "d/m/Y"), "html", null, true);
                echo "                </span>
                  <h4>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentCivilite", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentPrenom", array()), "html", null, true);
                echo "</h4>
                  <div class=\"text-col\">
";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentText", array()), "html", null, true);
                echo " <br>
                   <br>
                    <hr>
                    </div>
                  <div class=\"price\"> </div>
                </div>
            

";
            }
            // line 81
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                       
                          </ul>
          </div>
          <div class=\"pagination-box\">
            <nav>
              <ul class=\"pager\">
                             ";
        // line 87
        if (((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) > 0)) {
            // line 88
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_afficherComs", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) - 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) - 10), "valide" => 0)), "html", null, true);
            echo "\">Précedent</a></li>
                             
                             ";
        }
        // line 91
        echo "
                             ";
        // line 92
        if (((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms"))))) {
            // line 93
            echo "                                   <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_afficherComs", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) + 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) + 10), "valide" => 0)), "html", null, true);
            echo "\">Suivant</a></li>
                            ";
        }
        // line 95
        echo "                                </ul>
            </nav>
          </div>
                </div>
      <div class=\"col-md-4 col-sm-6\">
        <aside>
          <div class=\"sidebar\">
            <div class=\"post-box\">
              <div class=\"comment-form\">
                                            <form  method=\"post\" ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  action=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_createComs");
        echo " >
                
                <input type=\"hidden\" name=\"MM_insert\" value=\"form1\">
                  <div class=\"col-md-12\">
                    <legend>Ecrivez votre avis </legend>
                  </div>
                  <div class=\"\">
                    <div class=\"col-md-12\">
                      <label>Civilité *</label>
                      <div class=\"form-group\">
                        
                        
                       ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentCivilite", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\" col-md-12 \">
                      <label>Nom <em class=\"required\">*</em></label>
                 <br> ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentNom", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Prénom <em class=\"required\">*</em></label>
               <br>  ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentPrenom", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Email <em class=\"required\">*</em></label>
                  <br>      ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentEmail", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Note*</label>
                <br>      ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentNote", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group col-md-12\">
                      <label>Commentaire <em class=\"required\">*</em></label>
                 <br>           ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentText", array()), 'widget');
        echo "
                    </div>
                   
                  </div>
                  <div class=\"col-md-12\">
                    <input value=\"Valider votre opinion\" type=\"submit\" class=\"btn btn-primary\">
                  </div>
                </form>
                              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>



</tr>





</table>



";
        
        $__internal_4e8d0fb7980d2d7124fbe1929bc5292bfb4b882953955396b33b74c053e2e0fb->leave($__internal_4e8d0fb7980d2d7124fbe1929bc5292bfb4b882953955396b33b74c053e2e0fb_prof);

    }

    public function getTemplateName()
    {
        return "AbiRoutineBundle:Commentaires:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 137,  275 => 133,  268 => 129,  261 => 125,  254 => 121,  246 => 116,  229 => 104,  218 => 95,  212 => 93,  210 => 92,  207 => 91,  200 => 88,  198 => 87,  185 => 81,  173 => 72,  166 => 70,  162 => 69,  159 => 68,  153 => 66,  147 => 64,  144 => 63,  138 => 61,  135 => 60,  129 => 58,  126 => 57,  120 => 55,  117 => 54,  111 => 52,  108 => 51,  102 => 49,  100 => 48,  94 => 44,  92 => 43,  89 => 42,  85 => 41,  60 => 18,  52 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %} 
{% block body%}



<table>

</tr>


{% if valide==1 %}

<div class=\"alert alert-success\">
Votre commentaire a été pris en compte
</div>

 {% endif %}

<section class=\"post-section blog-post\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-sm-8\">
        <div class=\"post-box\">
          <div class=\"text-box\">
            <div class=\"clearfix\"> <strong class=\"date\"><i class=\"fa fa-calendar\"></i>
              3 juin 2017 </strong> </div>
            <h4><a href=\"commentaires\">
              Commentaires              </a></h4>
            <p>D&eacute;couvrez les avis des clients&nbsp; devis-decennale&nbsp; assurance&nbsp; pas ch&egrave;re.</p>

<p>✓ + 3 000 assur&eacute;s</p>

<p>✓ Tarifs Attractifs</p>

<p>✓ 100% clients satisfaits !</p>
          </div>
        </div>
                  <div id=\"content-area\">
            <ul id=\"myList\">

{% for i in pageF..pageD%}

{% if  i<coms|length %}

                           
                <div class=\"box\">

         {% if coms[i].commentNote==5 %}
                  <div class=\"pull-right\" > <img src={{asset('assets/images/5etoile.png')}} style=\"width:100px;\" > </div>
        {% endif %}
         {% if coms[i].commentNote==4 %}
                  <div class=\"pull-right\" > <img src={{asset('assets/images/4etoile.png')}} style=\"width:75px;\" > </div>
        {% endif %}
          {% if coms[i].commentNote==3 %}
                  <div class=\"pull-right\" > <img src={{asset('assets/images/3etoile.png')}} style=\"width:55px;\" > </div>
        {% endif %}
          {% if coms[i].commentNote==2 %}
                  <div class=\"pull-right\" > <img src={{asset('assets/images/2etoile.png')}} style=\"width:35px;\" > </div>
        {% endif %}
          {% if coms[i].commentNote==1 %}
                  <div class=\"pull-right\" > <img src={{asset('assets/images/1etoile.png')}} style=\"width:25px;\" > </div>
        {% endif %}
\t{% if coms[i].commentCivilite==\"Mr\" %}
\t\t<div class=\"thumb\"> <img src={{asset('assets/images/Mr.jpg')}}  > </div>
\t{% else %}
\t\t<div class=\"thumb\"> <img src={{asset('assets/images/Mme.jpg')}}  > </div>
\t{% endif %}
                   <span class=\"  text-center\" style=\"font-size:12px; color:#666\"><i class=\"fa fa-calendar\"></i>
                    {{ coms[i].commentDate|date(\"d/m/Y\") }}                </span>
                  <h4>{{ coms[i].commentCivilite }} : {{ coms[i].commentPrenom }}</h4>
                  <div class=\"text-col\">
{{ coms[i].commentText }} <br>
                   <br>
                    <hr>
                    </div>
                  <div class=\"price\"> </div>
                </div>
            

{% endif %}
     {% endfor %}                       
                          </ul>
          </div>
          <div class=\"pagination-box\">
            <nav>
              <ul class=\"pager\">
                             {% if  pageD>0 %}
                                  <li><a href=\"{{ path('devis_decennale_afficherComs', { 'pageD': pageD-10,'pagef' : pageF-10 ,'valide':0})}}\">Précedent</a></li>
                             
                             {% endif %}

                             {% if  pageF<coms|length %}
                                   <li> <a href=\"{{ path('devis_decennale_afficherComs', { 'pageD': pageD+10,'pagef' : pageF+10 ,'valide':0})}}\">Suivant</a></li>
                            {% endif %}
                                </ul>
            </nav>
          </div>
                </div>
      <div class=\"col-md-4 col-sm-6\">
        <aside>
          <div class=\"sidebar\">
            <div class=\"post-box\">
              <div class=\"comment-form\">
                                            <form  method=\"post\" {{ form_enctype(form) }}  action={{ path('devis_decennale_createComs') }} >
                
                <input type=\"hidden\" name=\"MM_insert\" value=\"form1\">
                  <div class=\"col-md-12\">
                    <legend>Ecrivez votre avis </legend>
                  </div>
                  <div class=\"\">
                    <div class=\"col-md-12\">
                      <label>Civilité *</label>
                      <div class=\"form-group\">
                        
                        
                       {{ form_widget(form.commentCivilite) }}
                        </div>
                    </div>
                    <div class=\" col-md-12 \">
                      <label>Nom <em class=\"required\">*</em></label>
                 <br> {{ form_widget(form.commentNom) }}
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Prénom <em class=\"required\">*</em></label>
               <br>  {{ form_widget(form.commentPrenom) }}
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Email <em class=\"required\">*</em></label>
                  <br>      {{ form_widget(form.commentEmail) }}
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Note*</label>
                <br>      {{ form_widget(form.commentNote) }}
                    </div>
                    <div class=\"form-group col-md-12\">
                      <label>Commentaire <em class=\"required\">*</em></label>
                 <br>           {{ form_widget(form.commentText) }}
                    </div>
                   
                  </div>
                  <div class=\"col-md-12\">
                    <input value=\"Valider votre opinion\" type=\"submit\" class=\"btn btn-primary\">
                  </div>
                </form>
                              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>



</tr>





</table>



{% endblock%}


", "AbiRoutineBundle:Commentaires:index.html.twig", "/var/www/projet/decennale/src/Abi/RoutineBundle/Resources/views/Commentaires/index.html.twig");
    }
}
