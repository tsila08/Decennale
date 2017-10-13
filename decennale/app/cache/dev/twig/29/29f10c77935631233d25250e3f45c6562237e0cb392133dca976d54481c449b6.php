<?php

/* AdminDecennaleBundle:Devis:index.html.twig */
class __TwigTemplate_b1f04e2ccc4eb5a1485e11bde64d42112b13568c6f75a84cd22545d11e9ac704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminDecennaleBundle::layout.html.twig", "AdminDecennaleBundle:Devis:index.html.twig", 2);
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
        $__internal_9ca572d8a27422b58bc8b185459190fe36787a91d031213bfc4723e61b97900a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca572d8a27422b58bc8b185459190fe36787a91d031213bfc4723e61b97900a->enter($__internal_9ca572d8a27422b58bc8b185459190fe36787a91d031213bfc4723e61b97900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminDecennaleBundle:Devis:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca572d8a27422b58bc8b185459190fe36787a91d031213bfc4723e61b97900a->leave($__internal_9ca572d8a27422b58bc8b185459190fe36787a91d031213bfc4723e61b97900a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_35f420930cc2ac6e5982bde5dd2c327350000c2b9fbe335d2b32492511adaab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f420930cc2ac6e5982bde5dd2c327350000c2b9fbe335d2b32492511adaab2->enter($__internal_35f420930cc2ac6e5982bde5dd2c327350000c2b9fbe335d2b32492511adaab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDecennaleBundle:Devis:index.html.twig"));

        // line 5
        echo "
<div class=\"container\">
  <h2>Gestion de devis</h2>
  <p>Total de devis réçue:";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))), "html", null, true);
        echo "</p>            
  <table class=\"table table-bordered\">
  <thead>
      <tr>
        <th>Ordre</th>
        <th>Date</th>
        <th>Devis</th>
        <th>Client</th>
        <th>Societé</th>
        <th>Gestion&Etat</th>
      </tr>
    </thead>

<tbody>

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")), (isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "

";
            // line 26
            if (($context["i"] < twig_length_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))))) {
                // line 27
                echo "
<tr>
<td>";
                // line 29
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
<td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), $context["i"], array(), "array"), "DvrDate", array()), "d-m-Y"), "html", null, true);
                echo "</td>
<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), $context["i"], array(), "array"), "DvrRefdevis", array()), "html", null, true);
                echo "</td>
<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), $context["i"], array(), "array"), "clientCivilite", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), $context["i"], array(), "array"), "clientPrenom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), $context["i"], array(), "array"), "clientNom", array()), "html", null, true);
                echo "</td>
<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), $context["i"], array(), "array"), "soRaisonSocial", array()), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), $context["i"], array(), "array"), "soFormjuridique", array()), "html", null, true);
                echo ")</td>
<td></td>



</tr>
";
            }
            // line 40
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "   



 </tbody>
  </table>
</div>

<div class=\"pagination-box\">
            <nav>
              <ul class=\"pager\">
                             ";
        // line 51
        if (((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) > 0)) {
            // line 52
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_devis", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) - 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) - 10))), "html", null, true);
            echo "\">Précedent</a></li>
                             
                             ";
        }
        // line 55
        echo "
                             ";
        // line 56
        if (((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) < twig_length_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))))) {
            // line 57
            echo "                                   <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_devis", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : $this->getContext($context, "pageD")) + 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : $this->getContext($context, "pageF")) + 10))), "html", null, true);
            echo "\">Suivant</a></li>
                            ";
        }
        // line 59
        echo "                                </ul>
            </nav>
          </div>
";
        
        $__internal_35f420930cc2ac6e5982bde5dd2c327350000c2b9fbe335d2b32492511adaab2->leave($__internal_35f420930cc2ac6e5982bde5dd2c327350000c2b9fbe335d2b32492511adaab2_prof);

    }

    public function getTemplateName()
    {
        return "AdminDecennaleBundle:Devis:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 59,  141 => 57,  139 => 56,  136 => 55,  129 => 52,  127 => 51,  109 => 40,  97 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 27,  71 => 26,  67 => 24,  63 => 23,  45 => 8,  40 => 5,  34 => 4,  11 => 2,);
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

<div class=\"container\">
  <h2>Gestion de devis</h2>
  <p>Total de devis réçue:{{c|length}}</p>            
  <table class=\"table table-bordered\">
  <thead>
      <tr>
        <th>Ordre</th>
        <th>Date</th>
        <th>Devis</th>
        <th>Client</th>
        <th>Societé</th>
        <th>Gestion&Etat</th>
      </tr>
    </thead>

<tbody>

{% for i in pageD..pageF%}


{% if  i<c|length %}

<tr>
<td>{{i+1}}</td>
<td>{{d[i].DvrDate|date('d-m-Y')}}</td>
<td>{{d[i].DvrRefdevis}}</td>
<td>{{c[i].clientCivilite}}:{{c[i].clientPrenom}}&nbsp;{{c[i].clientNom}}</td>
<td>{{s[i].soRaisonSocial}}({{s[i].soFormjuridique}})</td>
<td></td>



</tr>
{% endif %}
     {% endfor %}   



 </tbody>
  </table>
</div>

<div class=\"pagination-box\">
            <nav>
              <ul class=\"pager\">
                             {% if  pageD>0 %}
                                  <li><a href=\"{{ path('admin_decennale_devis', { 'pageD': pageD-10,'pagef' : pageF-10 })}}\">Précedent</a></li>
                             
                             {% endif %}

                             {% if  pageF<c|length %}
                                   <li> <a href=\"{{ path('admin_decennale_devis', { 'pageD': pageD+10,'pagef' : pageF+10})}}\">Suivant</a></li>
                            {% endif %}
                                </ul>
            </nav>
          </div>
{% endblock%} 
", "AdminDecennaleBundle:Devis:index.html.twig", "/var/www/projet/decennale/src/Admin/DecennaleBundle/Resources/views/Devis/index.html.twig");
    }
}
