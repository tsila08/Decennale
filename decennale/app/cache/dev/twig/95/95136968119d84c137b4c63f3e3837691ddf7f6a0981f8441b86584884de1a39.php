<?php

/* InfojetDevisBundle:Service:obligation.html.twig */
class __TwigTemplate_9852ab325950de8f1211db64b17883419fb7eeae8438bea1547204445eb413e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "InfojetDevisBundle:Service:obligation.html.twig", 1);
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
        $__internal_1718ca7e65057d3d0780fc6c9dd7ae585d17b22169674b21c5a3785e7c1b66e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1718ca7e65057d3d0780fc6c9dd7ae585d17b22169674b21c5a3785e7c1b66e8->enter($__internal_1718ca7e65057d3d0780fc6c9dd7ae585d17b22169674b21c5a3785e7c1b66e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Service:obligation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1718ca7e65057d3d0780fc6c9dd7ae585d17b22169674b21c5a3785e7c1b66e8->leave($__internal_1718ca7e65057d3d0780fc6c9dd7ae585d17b22169674b21c5a3785e7c1b66e8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f333536379bdf231fbfb4ebfb5e564907e9eb650a20bdc55d5bcf7602384c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f333536379bdf231fbfb4ebfb5e564907e9eb650a20bdc55d5bcf7602384c6b->enter($__internal_4f333536379bdf231fbfb4ebfb5e564907e9eb650a20bdc55d5bcf7602384c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "InfojetDevisBundle:Service:obligation.html.twig"));

        // line 3
        echo "

<section class=\"post-section blog-post\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-9 col-sm-9\">
        <div class=\"post-box\">
          
          <div class=\"summary-box\">
            
            <h4><a href=\"obligations\"> Obligations</a></h4>
        ";
        // line 14
        echo (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"));
        echo "

<div style=\"page-break-after:always\"><span style=\"display:none\">&nbsp;</span></div>

<p>&nbsp;</p>
            <div class=\"clearfix\"><strong class=\"date\"><i class=\"fa fa-calendar\"></i> 29 mai 2017</strong> </div>
          </div>
        </div>
      </div>
            <div class=\"col-md-3 col-sm-6\">
        <aside>
          <div class=\"sidebar\">
         
          <div class=\"box\">
            <div class=\"frame\"> <a href=\"devis-decennale-constructeur\"><img src=\"webroot/images/pages/page-1491329770.jpg\" class=\"img-responsive\" alt=\"obligations\" /> </a></div>
                        
<div class=\"text-col\">
<h4 >Obligations</h4>
                
           ";
        // line 33
        echo (isset($context["sd"]) ? $context["sd"] : $this->getContext($context, "sd"));
        echo "     
 
                
</div>

</div>
          
           


          </div>
        </aside>
      </div>
            
    </div>
  </div>
</section>




";
        
        $__internal_4f333536379bdf231fbfb4ebfb5e564907e9eb650a20bdc55d5bcf7602384c6b->leave($__internal_4f333536379bdf231fbfb4ebfb5e564907e9eb650a20bdc55d5bcf7602384c6b_prof);

    }

    public function getTemplateName()
    {
        return "InfojetDevisBundle:Service:obligation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
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
{% block body%}


<section class=\"post-section blog-post\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-9 col-sm-9\">
        <div class=\"post-box\">
          
          <div class=\"summary-box\">
            
            <h4><a href=\"obligations\"> Obligations</a></h4>
        {{page|raw}}

<div style=\"page-break-after:always\"><span style=\"display:none\">&nbsp;</span></div>

<p>&nbsp;</p>
            <div class=\"clearfix\"><strong class=\"date\"><i class=\"fa fa-calendar\"></i> 29 mai 2017</strong> </div>
          </div>
        </div>
      </div>
            <div class=\"col-md-3 col-sm-6\">
        <aside>
          <div class=\"sidebar\">
         
          <div class=\"box\">
            <div class=\"frame\"> <a href=\"devis-decennale-constructeur\"><img src=\"webroot/images/pages/page-1491329770.jpg\" class=\"img-responsive\" alt=\"obligations\" /> </a></div>
                        
<div class=\"text-col\">
<h4 >Obligations</h4>
                
           {{sd|raw}}     
 
                
</div>

</div>
          
           


          </div>
        </aside>
      </div>
            
    </div>
  </div>
</section>




{% endblock%}
", "InfojetDevisBundle:Service:obligation.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Service/obligation.html.twig");
    }
}
