<?php

/* AdminDecennaleBundle:Commentaires:index.html.twig */
class __TwigTemplate_0df30edc4cb2f8a7bfbad3872668b14cce38a0ff9015181bcf054ffd04beeae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminDecennaleBundle::layout.html.twig", "AdminDecennaleBundle:Commentaires:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminDecennaleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6501f044c40de13f85b3df1ae8bd77057346f9a2acc2b4c359c622d8e8dd3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6501f044c40de13f85b3df1ae8bd77057346f9a2acc2b4c359c622d8e8dd3fc->enter($__internal_f6501f044c40de13f85b3df1ae8bd77057346f9a2acc2b4c359c622d8e8dd3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminDecennaleBundle:Commentaires:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6501f044c40de13f85b3df1ae8bd77057346f9a2acc2b4c359c622d8e8dd3fc->leave($__internal_f6501f044c40de13f85b3df1ae8bd77057346f9a2acc2b4c359c622d8e8dd3fc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3ad3c179b09c8ee85e537aa2b5ba37f0b06fc27a6c847a7ac37f73f2fef86ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ad3c179b09c8ee85e537aa2b5ba37f0b06fc27a6c847a7ac37f73f2fef86ec->enter($__internal_d3ad3c179b09c8ee85e537aa2b5ba37f0b06fc27a6c847a7ac37f73f2fef86ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDecennaleBundle:Commentaires:index.html.twig"));

        // line 5
        echo "
<h4><a href=\"commentaires\">
              Commentaires              </a></h4>
            <p>D&eacute;couvrez les avis des clients&nbsp; devis-decennale&nbsp; assurance&nbsp; pas ch&egrave;re.</p>   
            <p>Effacez ou valider les avis pour qu'ils puissent s'afficher sur le Front-End</p>


<div id=\"content-area\">
            <ul id=\"myList\">
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")), (isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "
";
            // line 16
            if (($context["i"] < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms"))))) {
                // line 17
                echo "
                           
                <div class=\"box\" style=\"margin-left:50px;margin-right:100px;\">

<div style=\"margin-right:200px;\">
         ";
                // line 22
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 5)) {
                    // line 23
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/5etoile.png"), "html", null, true);
                    echo " style=\"width:100px;\" > </div>
                   
        ";
                }
                // line 26
                echo "         ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 4)) {
                    // line 27
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/4etoile.png"), "html", null, true);
                    echo " style=\"width:75px;\" > </div>
        ";
                }
                // line 29
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 3)) {
                    // line 30
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/3etoile.png"), "html", null, true);
                    echo " style=\"width:55px;\" > </div>
        ";
                }
                // line 32
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 2)) {
                    // line 33
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/2etoile.png"), "html", null, true);
                    echo " style=\"width:35px;\" > </div>
        ";
                }
                // line 35
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentNote", array()) == 1)) {
                    // line 36
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/1etoile.png"), "html", null, true);
                    echo " style=\"width:25px;\"\" > </div>
        ";
                }
                // line 38
                echo "
</div>
\t";
                // line 40
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentCivilite", array()) == "Mr")) {
                    // line 41
                    echo "\t\t<div class=\"thumb\"> <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Mr.jpg"), "html", null, true);
                    echo "  > </div>
\t";
                } else {
                    // line 43
                    echo "\t\t<div class=\"thumb\"> <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Mme.jpg"), "html", null, true);
                    echo "  > </div>
\t";
                }
                // line 45
                echo "                   <span class=\"  text-center\" style=\"font-size:12px; color:#666\"><i class=\"fa fa-calendar\"></i>
                    ";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentDate", array()), "d/m/Y"), "html", null, true);
                echo "                </span> 
                  <h4>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentCivilite", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentPrenom", array()), "html", null, true);
                echo "</h4>
                  <div class=\"text-col\">
";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentText", array()), "html", null, true);
                echo " <br>

<div style=\"text-align:right;margin-right:200px;\">         
   <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_valide", array("id" => $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentId", array()), "valide" => 0)), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" data-toggle=\"modal\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer?')\">Effacer</a>
       <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_valide", array("id" => $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $context["i"], array(), "array"), "commentId", array()), "valide" => 1)), "html", null, true);
                echo "\"  class=\"btn btn-success btn-sm\" data-toggle=\"modal\">Valider</a>
 </div>
            
                   <br>
                    <hr>
                   </div>
       
                </div>
  

";
            }
            // line 64
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "   

<div class=\"pagination-box\">
            <nav>
              <ul class=\"pager\">
                             ";
        // line 69
        if (((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) > 0)) {
            // line 70
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_coms", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) - 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) - 10))), "html", null, true);
            echo "\">Précedent</a></li>
                             
                             ";
        }
        // line 73
        echo "
                             ";
        // line 74
        if (((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms"))))) {
            // line 75
            echo "                                   <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_coms", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) + 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) + 10))), "html", null, true);
            echo "\">Suivant</a></li>
                            ";
        }
        // line 77
        echo "                                </ul>
            </nav>
          </div>

</div>
                </div>
";
        
        $__internal_d3ad3c179b09c8ee85e537aa2b5ba37f0b06fc27a6c847a7ac37f73f2fef86ec->leave($__internal_d3ad3c179b09c8ee85e537aa2b5ba37f0b06fc27a6c847a7ac37f73f2fef86ec_prof);

    }

    public function getTemplateName()
    {
        return "AdminDecennaleBundle:Commentaires:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 77,  194 => 75,  192 => 74,  189 => 73,  182 => 70,  180 => 69,  168 => 64,  154 => 53,  150 => 52,  144 => 49,  137 => 47,  133 => 46,  130 => 45,  124 => 43,  118 => 41,  116 => 40,  112 => 38,  106 => 36,  103 => 35,  97 => 33,  94 => 32,  88 => 30,  85 => 29,  79 => 27,  76 => 26,  69 => 23,  67 => 22,  60 => 17,  58 => 16,  55 => 15,  51 => 14,  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'AdminDecennaleBundle::layout.html.twig' %}

{% block body %}

<h4><a href=\"commentaires\">
              Commentaires              </a></h4>
            <p>D&eacute;couvrez les avis des clients&nbsp; devis-decennale&nbsp; assurance&nbsp; pas ch&egrave;re.</p>   
            <p>Effacez ou valider les avis pour qu'ils puissent s'afficher sur le Front-End</p>


<div id=\"content-area\">
            <ul id=\"myList\">
{% for i in pageF..pageD%}

{% if  i<coms|length %}

                           
                <div class=\"box\" style=\"margin-left:50px;margin-right:100px;\">

<div style=\"margin-right:200px;\">
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
                  <div class=\"pull-right\" > <img src={{asset('assets/images/1etoile.png')}} style=\"width:25px;\"\" > </div>
        {% endif %}

</div>
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

<div style=\"text-align:right;margin-right:200px;\">         
   <a href=\"{{ path('admin_decennale_valide', { 'id': coms[i].commentId,'valide' : 0 })}}\" class=\"btn btn-warning btn-sm\" data-toggle=\"modal\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer?')\">Effacer</a>
       <a href=\"{{ path('admin_decennale_valide', { 'id': coms[i].commentId,'valide' : 1 })}}\"  class=\"btn btn-success btn-sm\" data-toggle=\"modal\">Valider</a>
 </div>
            
                   <br>
                    <hr>
                   </div>
       
                </div>
  

{% endif %}
     {% endfor %}   

<div class=\"pagination-box\">
            <nav>
              <ul class=\"pager\">
                             {% if  pageD>0 %}
                                  <li><a href=\"{{ path('admin_decennale_coms', { 'pageD': pageD-10,'pagef' : pageF-10 })}}\">Précedent</a></li>
                             
                             {% endif %}

                             {% if  pageF<coms|length %}
                                   <li> <a href=\"{{ path('admin_decennale_coms', { 'pageD': pageD+10,'pagef' : pageF+10 })}}\">Suivant</a></li>
                            {% endif %}
                                </ul>
            </nav>
          </div>

</div>
                </div>
{% endblock%} 
", "AdminDecennaleBundle:Commentaires:index.html.twig", "/var/www/projet/decennale/src/Admin/DecennaleBundle/Resources/views/Commentaires/index.html.twig");
    }
}
