<?php

/* AdminDecennaleBundle:Devis:index.html.twig */
class __TwigTemplate_caf53a5e6fb7231b03bfdc0e7466eb6626236eee062d7e76788eb689df526053 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"container\">
  <h2>Gestion de devis</h2>
  <p>Total de devis réçue:";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["c"]) ? $context["c"] : null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range((isset($context["pageD"]) ? $context["pageD"] : null), (isset($context["pageF"]) ? $context["pageF"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "

";
            // line 26
            if (($context["i"] < twig_length_filter($this->env, (isset($context["c"]) ? $context["c"] : null)))) {
                // line 27
                echo "
<tr>
<td>";
                // line 29
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
<td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), $context["i"], array(), "array"), "DvrDate", array()), "d-m-Y"), "html", null, true);
                echo "</td>
<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), $context["i"], array(), "array"), "DvrRefdevis", array()), "html", null, true);
                echo "</td>
<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : null), $context["i"], array(), "array"), "clientCivilite", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : null), $context["i"], array(), "array"), "clientPrenom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : null), $context["i"], array(), "array"), "clientNom", array()), "html", null, true);
                echo "</td>
<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), $context["i"], array(), "array"), "soRaisonSocial", array()), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), $context["i"], array(), "array"), "soFormjuridique", array()), "html", null, true);
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
        if (((isset($context["pageD"]) ? $context["pageD"] : null) > 0)) {
            // line 52
            echo "                                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_devis", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : null) - 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : null) - 10))), "html", null, true);
            echo "\">Précedent</a></li>
                             
                             ";
        }
        // line 55
        echo "
                             ";
        // line 56
        if (((isset($context["pageF"]) ? $context["pageF"] : null) < twig_length_filter($this->env, (isset($context["c"]) ? $context["c"] : null)))) {
            // line 57
            echo "                                   <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_decennale_devis", array("pageD" => ((isset($context["pageD"]) ? $context["pageD"] : null) + 10), "pagef" => ((isset($context["pageF"]) ? $context["pageF"] : null) + 10))), "html", null, true);
            echo "\">Suivant</a></li>
                            ";
        }
        // line 59
        echo "                                </ul>
            </nav>
          </div>
";
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
        return array (  138 => 59,  132 => 57,  130 => 56,  127 => 55,  120 => 52,  118 => 51,  100 => 40,  88 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 27,  62 => 26,  58 => 24,  54 => 23,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminDecennaleBundle:Devis:index.html.twig", "/var/www/projet/decennale/src/Admin/DecennaleBundle/Resources/views/Devis/index.html.twig");
    }
}
