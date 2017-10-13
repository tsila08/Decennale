<?php

/* AbiRoutineBundle:Routine:contact.html.twig */
class __TwigTemplate_21c401a21959d2d51d1552be46620dcbdacd77cd292f88c7ad99a9b530565d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiRoutineBundle:Routine:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nous_contacter_parent_active' => array($this, 'block_nous_contacter_parent_active'),
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "--contact";
    }

    // line 3
    public function block_nous_contacter_parent_active($context, array $blocks = array())
    {
        echo "active ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"main\">
    <div class=\"container\">
        <h1>Contactez-nous</h1> 
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AbiRoutineBundle:Routine:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  43 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AbiRoutineBundle:Routine:contact.html.twig", "/var/www/projet/decennale/src/Abi/RoutineBundle/Resources/views/Routine/contact.html.twig");
    }
}
