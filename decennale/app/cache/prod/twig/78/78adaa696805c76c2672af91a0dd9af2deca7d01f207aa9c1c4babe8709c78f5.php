<?php

/* AbiRoutineBundle:Commentaires:index.html.twig */
class __TwigTemplate_062b69a67eb6cea33e7be12273388c1aadf74b4eeeca135c0c38029cd0b75cd1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "


<table>

</tr>


";
        // line 11
        if (((isset($context["valide"]) ? $context["valide"] : null) == 1)) {
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
        $context['_seq'] = twig_ensure_traversable(range((isset($context["pageF"]) ? $context["pageF"] : null), (isset($context["pageD"]) ? $context["pageD"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "
";
            // line 43
            if (($context["i"] < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : null)))) {
                // line 44
                echo "
                           
                <div class=\"box\">

         ";
                // line 48
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 5)) {
                    // line 49
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/5etoile.png"), "html", null, true);
                    echo " style=\"width:100px;\" > </div>
        ";
                }
                // line 51
                echo "         ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 4)) {
                    // line 52
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/4etoile.png"), "html", null, true);
                    echo " style=\"width:75px;\" > </div>
        ";
                }
                // line 54
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 3)) {
                    // line 55
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/3etoile.png"), "html", null, true);
                    echo " style=\"width:55px;\" > </div>
        ";
                }
                // line 57
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 2)) {
                    // line 58
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/2etoile.png"), "html", null, true);
                    echo " style=\"width:35px;\" > </div>
        ";
                }
                // line 60
                echo "          ";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentNote", array()) == 1)) {
                    // line 61
                    echo "                  <div class=\"pull-right\" > <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/1etoile.png"), "html", null, true);
                    echo " style=\"width:25px;\" > </div>
        ";
                }
                // line 63
                echo "\t";
                if (($this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentCivilite", array()) == "Mr")) {
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentDate", array()), "d/m/Y"), "html", null, true);
                echo "                </span>
                  <h4>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentCivilite", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentPrenom", array()), "html", null, true);
                echo "</h4>
                  <div class=\"text-col\">
";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coms"]) ? $context["coms"] : null), $context["i"], array(), "array"), "commentText", array()), "html", null, true);
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
        if (((isset($context["pageD"]) ? $context["pageD"] : null) > 0)) {
            // line 88
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_afficherComs", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : null) - 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : null) - 10), "valide" => 0)), "html", null, true);
            echo "\">Précedent</a></li>
                             
                             ";
        }
        // line 91
        echo "
                             ";
        // line 92
        if (((isset($context["pageF"]) ? $context["pageF"] : null) < twig_length_filter($this->env, (isset($context["coms"]) ? $context["coms"] : null)))) {
            // line 93
            echo "                                   <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devis_decennale_afficherComs", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : null) + 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : null) + 10), "valide" => 0)), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentCivilite", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\" col-md-12 \">
                      <label>Nom <em class=\"required\">*</em></label>
                 <br> ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentNom", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Prénom <em class=\"required\">*</em></label>
               <br>  ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentPrenom", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Email <em class=\"required\">*</em></label>
                  <br>      ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentEmail", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                      <label>Note*</label>
                <br>      ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentNote", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group col-md-12\">
                      <label>Commentaire <em class=\"required\">*</em></label>
                 <br>           ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentText", array()), 'widget');
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
        return array (  273 => 137,  266 => 133,  259 => 129,  252 => 125,  245 => 121,  237 => 116,  220 => 104,  209 => 95,  203 => 93,  201 => 92,  198 => 91,  191 => 88,  189 => 87,  176 => 81,  164 => 72,  157 => 70,  153 => 69,  150 => 68,  144 => 66,  138 => 64,  135 => 63,  129 => 61,  126 => 60,  120 => 58,  117 => 57,  111 => 55,  108 => 54,  102 => 52,  99 => 51,  93 => 49,  91 => 48,  85 => 44,  83 => 43,  80 => 42,  76 => 41,  51 => 18,  43 => 12,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiRoutineBundle:Commentaires:index.html.twig", "/var/www/projet/decennale/src/Abi/RoutineBundle/Resources/views/Commentaires/index.html.twig");
    }
}
