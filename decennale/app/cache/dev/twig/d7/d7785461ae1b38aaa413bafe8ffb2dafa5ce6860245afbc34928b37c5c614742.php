<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4e86ad06b52ffaac2dc9a44f0821d198336ad9fd36bcb57424d80f8b28450eb5 extends Twig_Template
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
        $__internal_0e01f1ccc9a419d69f1cf8778d2fa519908ed16032addc26a1693f91055c2aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e01f1ccc9a419d69f1cf8778d2fa519908ed16032addc26a1693f91055c2aec->enter($__internal_0e01f1ccc9a419d69f1cf8778d2fa519908ed16032addc26a1693f91055c2aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0e01f1ccc9a419d69f1cf8778d2fa519908ed16032addc26a1693f91055c2aec->leave($__internal_0e01f1ccc9a419d69f1cf8778d2fa519908ed16032addc26a1693f91055c2aec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/projet/decennale/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
