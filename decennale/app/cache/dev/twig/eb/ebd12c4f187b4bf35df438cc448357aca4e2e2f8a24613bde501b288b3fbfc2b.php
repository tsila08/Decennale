<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_72cba9226a3266928060a8506a5e25fa11911bba0dc22d069c124d1c334bad14 extends Twig_Template
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
        $__internal_573803979cf0d64aeef15d90870634b49e4717284d9a5f839483fc2c9f2239e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573803979cf0d64aeef15d90870634b49e4717284d9a5f839483fc2c9f2239e3->enter($__internal_573803979cf0d64aeef15d90870634b49e4717284d9a5f839483fc2c9f2239e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_573803979cf0d64aeef15d90870634b49e4717284d9a5f839483fc2c9f2239e3->leave($__internal_573803979cf0d64aeef15d90870634b49e4717284d9a5f839483fc2c9f2239e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
