<?php

/* InfojetDevisBundle:Default:index.html.twig */
class __TwigTemplate_3e46adb4551435e40810cf2191ff0e37fc953b0c7b52fb8deebdf8a2843223ba extends Twig_Template
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
        $__internal_40a83199d156ef65f0aaa49249b151a5226c47fddaeed8488ae9b2dd6f4e13a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a83199d156ef65f0aaa49249b151a5226c47fddaeed8488ae9b2dd6f4e13a3->enter($__internal_40a83199d156ef65f0aaa49249b151a5226c47fddaeed8488ae9b2dd6f4e13a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InfojetDevisBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_40a83199d156ef65f0aaa49249b151a5226c47fddaeed8488ae9b2dd6f4e13a3->leave($__internal_40a83199d156ef65f0aaa49249b151a5226c47fddaeed8488ae9b2dd6f4e13a3_prof);

    }

    public function getTemplateName()
    {
        return "InfojetDevisBundle:Default:index.html.twig";
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
", "InfojetDevisBundle:Default:index.html.twig", "/var/www/projet/decennale/src/Infojet/DevisBundle/Resources/views/Default/index.html.twig");
    }
}
