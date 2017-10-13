<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_277b1e708377c0fe85a298b65f5552df4ceade05deb491bc9f6681e2c9730090 extends Twig_Template
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
        $__internal_e8fdd0d02a4112e3dfb332d2043ae55dcc1ddbb8dec8ec9c13aac670156c48fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fdd0d02a4112e3dfb332d2043ae55dcc1ddbb8dec8ec9c13aac670156c48fb->enter($__internal_e8fdd0d02a4112e3dfb332d2043ae55dcc1ddbb8dec8ec9c13aac670156c48fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e8fdd0d02a4112e3dfb332d2043ae55dcc1ddbb8dec8ec9c13aac670156c48fb->leave($__internal_e8fdd0d02a4112e3dfb332d2043ae55dcc1ddbb8dec8ec9c13aac670156c48fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
