<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_419190cecd59e5c23d403bf686d093599453e1394740b16fb94a9239abdca26b extends Twig_Template
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
        $__internal_7891724e400dae4936059bcdf35b7f7fcf011a76ffb70a9663dee010fb94065b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7891724e400dae4936059bcdf35b7f7fcf011a76ffb70a9663dee010fb94065b->enter($__internal_7891724e400dae4936059bcdf35b7f7fcf011a76ffb70a9663dee010fb94065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7891724e400dae4936059bcdf35b7f7fcf011a76ffb70a9663dee010fb94065b->leave($__internal_7891724e400dae4936059bcdf35b7f7fcf011a76ffb70a9663dee010fb94065b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
