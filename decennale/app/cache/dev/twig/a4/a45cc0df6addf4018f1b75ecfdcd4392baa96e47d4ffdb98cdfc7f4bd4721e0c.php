<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f923bd9bd32953f5e6a61c6d8df531cc9bf4eb7a80dda0aa157963cd9a0295af extends Twig_Template
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
        $__internal_2906dbb8fd68692ac904e8daa7331bfe509fe1a496482feb8b8b931cd9949ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2906dbb8fd68692ac904e8daa7331bfe509fe1a496482feb8b8b931cd9949ccb->enter($__internal_2906dbb8fd68692ac904e8daa7331bfe509fe1a496482feb8b8b931cd9949ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2906dbb8fd68692ac904e8daa7331bfe509fe1a496482feb8b8b931cd9949ccb->leave($__internal_2906dbb8fd68692ac904e8daa7331bfe509fe1a496482feb8b8b931cd9949ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
