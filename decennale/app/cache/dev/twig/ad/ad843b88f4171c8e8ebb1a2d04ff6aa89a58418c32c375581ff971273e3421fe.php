<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_de2ffcacd428bd82d7b764a063b737db38a53ac18e0d6097df37a75755ef4db8 extends Twig_Template
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
        $__internal_d59e302842a265bc85763f1fcbde41ecd3e57befdeba2bf701307ae6e7ed65ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59e302842a265bc85763f1fcbde41ecd3e57befdeba2bf701307ae6e7ed65ab->enter($__internal_d59e302842a265bc85763f1fcbde41ecd3e57befdeba2bf701307ae6e7ed65ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d59e302842a265bc85763f1fcbde41ecd3e57befdeba2bf701307ae6e7ed65ab->leave($__internal_d59e302842a265bc85763f1fcbde41ecd3e57befdeba2bf701307ae6e7ed65ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
