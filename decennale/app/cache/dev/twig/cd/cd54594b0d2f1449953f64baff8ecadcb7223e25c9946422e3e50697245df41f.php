<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_70504ce62270a68cbae3620f5f39e2befadd77427d1318f45f090826a0f7af78 extends Twig_Template
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
        $__internal_4ccc2b81131df6184c11d581822155c5b9c12c38e8fc6409c2697ab2ea47b9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccc2b81131df6184c11d581822155c5b9c12c38e8fc6409c2697ab2ea47b9b8->enter($__internal_4ccc2b81131df6184c11d581822155c5b9c12c38e8fc6409c2697ab2ea47b9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4ccc2b81131df6184c11d581822155c5b9c12c38e8fc6409c2697ab2ea47b9b8->leave($__internal_4ccc2b81131df6184c11d581822155c5b9c12c38e8fc6409c2697ab2ea47b9b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
