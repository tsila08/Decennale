<?php

/* AdminDecennaleBundle:Commentaires:index.html.twig */
class __TwigTemplate_66e92d13f933a210d4a1dfdaa3857744afa40c0d4960f99d05259e1d291d0452 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(range((isset($context["pageF"]) ? $context["pageF"] : null), (isset($context["pageD"]) ? $context["pageD"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "
";
            // line 16
            if (($context["i"] < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : null)))) {
                // line 17
                echo "
                           
                <div class=\"box\" style=\"margin-left:50px;margin-right:100px;\">

<div style=\"margin-right:200px;\">
         ";
                // line 22
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 5)) {
                    // line 23
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/5etoile.png"), "html", null, true);
                    echo " style=\"width:100px;\" > </div>
                   
        ";
                }
                // line 26
                echo "         ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 4)) {
                    // line 27
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/4etoile.png"), "html", null, true);
                    echo " style=\"width:75px;\" > </div>
        ";
                }
                // line 29
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 3)) {
                    // line 30
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/3etoile.png"), "html", null, true);
                    echo " style=\"width:55px;\" > </div>
        ";
                }
                // line 32
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 2)) {
                    // line 33
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/2etoile.png"), "html", null, true);
                    echo " style=\"width:35px;\" > </div>
        ";
                }
                // line 35
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 1)) {
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
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentCivilite", array()) == "Mr")) {
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentDate", array()), "d/m/Y"), "html", null, true);
                echo "                </span> 
                  <h4>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentCivilite", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentPrenom", array()), "html", null, true);
                echo "</h4>
                  <div class=\"text-col\">
";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentText", array()), "html", null, true);
                echo " <br>

<div style=\"text-align:right;margin-right:200px;\">         
   <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_valide", array("id" => $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentId", array()), "valide" => 0)), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\" data-toggle=\"modal\" onclick=\"return confirm('Vous êtes sûr de vouloir supprimer?')\">Effacer</a>
       <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_valide", array("id" => $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentId", array()), "valide" => 1)), "html", null, true);
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
        if (((isset($context["pageD"]) ? $context["pageD"] : null) > 0)) {
            // line 70
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_coms", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : null) - 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : null) - 10))), "html", null, true);
            echo "\">Précedent</a></li>
                             
                             ";
        }
        // line 73
        echo "
                             ";
        // line 74
        if (((isset($context["pageF"]) ? $context["pageF"] : null) < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : null)))) {
            // line 75
            echo "                                   <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_coms", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : null) + 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : null) + 10))), "html", null, true);
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
        return array (  191 => 77,  185 => 75,  183 => 74,  180 => 73,  173 => 70,  171 => 69,  159 => 64,  145 => 53,  141 => 52,  135 => 49,  128 => 47,  124 => 46,  121 => 45,  115 => 43,  109 => 41,  107 => 40,  103 => 38,  97 => 36,  94 => 35,  88 => 33,  85 => 32,  79 => 30,  76 => 29,  70 => 27,  67 => 26,  60 => 23,  58 => 22,  51 => 17,  49 => 16,  46 => 15,  42 => 14,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminDecennaleBundle:Commentaires:index.html.twig", "/var/www/projet/decennale/src/Admin/DecennaleBundle/Resources/views/Commentaires/index.html.twig");
    }
}
