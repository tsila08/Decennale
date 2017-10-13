<?php

/* InfojetDevisBundle:Demande:index.html.twig */
class __TwigTemplate_e3f62c3cd13c38b6cf4d471ed67d4b870f80a96552865d62ae81efc08b0aa30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b803e77fd2035be8d64531eba540b1c8ccfc68264d09dada4c9a53fb49121da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b803e77fd2035be8d64531eba540b1c8ccfc68264d09dada4c9a53fb49121da->enter($__internal_8b803e77fd2035be8d64531eba540b1c8ccfc68264d09dada4c9a53fb49121da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Demande:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8b803e77fd2035be8d64531eba540b1c8ccfc68264d09dada4c9a53fb49121da->leave($__internal_8b803e77fd2035be8d64531eba540b1c8ccfc68264d09dada4c9a53fb49121da_prof);

    }

    public function getTemplateName()
    {
        return "InfojetDevisBundle:Demande:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "InfojetDevisBundle:Demande:index.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Demande/index.html.twig");
    }
}
