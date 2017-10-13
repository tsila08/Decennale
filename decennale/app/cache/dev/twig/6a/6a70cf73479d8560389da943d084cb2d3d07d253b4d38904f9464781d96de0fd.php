<?php

/* AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig */
class __TwigTemplate_76db40212fe3e698c98c681f02f88e85a534133fb082af9ce2d5ca0a30817a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_avec_pop_up' => array($this, 'block_body_avec_pop_up'),
            'body_sans_pop_up' => array($this, 'block_body_sans_pop_up'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475d2f75bccb3937e9ddf5e99a02c3c8a2915f71d4f4ba5d479a9f8515a1290f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475d2f75bccb3937e9ddf5e99a02c3c8a2915f71d4f4ba5d479a9f8515a1290f->enter($__internal_475d2f75bccb3937e9ddf5e99a02c3c8a2915f71d4f4ba5d479a9f8515a1290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475d2f75bccb3937e9ddf5e99a02c3c8a2915f71d4f4ba5d479a9f8515a1290f->leave($__internal_475d2f75bccb3937e9ddf5e99a02c3c8a2915f71d4f4ba5d479a9f8515a1290f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_86a147d977b59b5774c0ba56f6b89e246a2deb5d72072051dfbc594784208a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a147d977b59b5774c0ba56f6b89e246a2deb5d72072051dfbc594784208a1f->enter($__internal_86a147d977b59b5774c0ba56f6b89e246a2deb5d72072051dfbc594784208a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-Recuperer votre compte";
        
        $__internal_86a147d977b59b5774c0ba56f6b89e246a2deb5d72072051dfbc594784208a1f->leave($__internal_86a147d977b59b5774c0ba56f6b89e246a2deb5d72072051dfbc594784208a1f_prof);

    }

    // line 4
    public function block_body_avec_pop_up($context, array $blocks = array())
    {
        $__internal_c1ca38419677262ea6012a0e781cdff9d6bf2359f7d184f7bb0fab77f286943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ca38419677262ea6012a0e781cdff9d6bf2359f7d184f7bb0fab77f286943d->enter($__internal_c1ca38419677262ea6012a0e781cdff9d6bf2359f7d184f7bb0fab77f286943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig"));

        
        $__internal_c1ca38419677262ea6012a0e781cdff9d6bf2359f7d184f7bb0fab77f286943d->leave($__internal_c1ca38419677262ea6012a0e781cdff9d6bf2359f7d184f7bb0fab77f286943d_prof);

    }

    // line 7
    public function block_body_sans_pop_up($context, array $blocks = array())
    {
        $__internal_f4462a2b44e8c73c0d17d1da4acbc68403c1eb1b3bb479d60f7922038df5966c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4462a2b44e8c73c0d17d1da4acbc68403c1eb1b3bb479d60f7922038df5966c->enter($__internal_f4462a2b44e8c73c0d17d1da4acbc68403c1eb1b3bb479d60f7922038df5966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig"));

        // line 8
        $this->displayParentBlock("body_sans_pop_up", $context, $blocks);
        echo "
";
        
        $__internal_f4462a2b44e8c73c0d17d1da4acbc68403c1eb1b3bb479d60f7922038df5966c->leave($__internal_f4462a2b44e8c73c0d17d1da4acbc68403c1eb1b3bb479d60f7922038df5966c_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_139256989ac595ef1ca3a59b4de2ea17b5b108497c4c9ff0917679bda499446e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139256989ac595ef1ca3a59b4de2ea17b5b108497c4c9ff0917679bda499446e->enter($__internal_139256989ac595ef1ca3a59b4de2ea17b5b108497c4c9ff0917679bda499446e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig"));

        // line 11
        echo "\t\t<br>
\t\t<h2>Votre demande a été prise en compte</h2>
\t\tNous allons vous envoyer (par mail sauf indication spécifique de votre part) un lien vous permettant de reinitialiser votre mot de passe.
\t\t<p>Pour recevoir le lien par sms, veuillez nous contacter. </p>
\t\t<br>
";
        
        $__internal_139256989ac595ef1ca3a59b4de2ea17b5b108497c4c9ff0917679bda499446e->leave($__internal_139256989ac595ef1ca3a59b4de2ea17b5b108497c4c9ff0917679bda499446e_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 11,  76 => 10,  67 => 8,  61 => 7,  50 => 4,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block title %}{{ parent() }}-Recuperer votre compte{% endblock %}\t

{% block body_avec_pop_up %}
{% endblock %}

{% block body_sans_pop_up %}
{{parent()}}
{% endblock %}
{% block contenu %}
\t\t<br>
\t\t<h2>Votre demande a été prise en compte</h2>
\t\tNous allons vous envoyer (par mail sauf indication spécifique de votre part) un lien vous permettant de reinitialiser votre mot de passe.
\t\t<p>Pour recevoir le lien par sms, veuillez nous contacter. </p>
\t\t<br>
{% endblock %}

", "AbiUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/recupMdpEffectue.html.twig");
    }
}
