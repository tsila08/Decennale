<?php

/* AbiUtilisateurBundle:Utilisateur:login.html.twig */
class __TwigTemplate_2bf3fb1b5eecd5f5231fa1a463d00335cc43f511ccb49efe242b9e940e7ce31a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AbiUtilisateurBundle:Utilisateur:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'acceuil_parent_active' => array($this, 'block_acceuil_parent_active'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44e3a90acbe416c9382c0f8049377361279e40033d7479522d3a301f2ef9f889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e3a90acbe416c9382c0f8049377361279e40033d7479522d3a301f2ef9f889->enter($__internal_44e3a90acbe416c9382c0f8049377361279e40033d7479522d3a301f2ef9f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e3a90acbe416c9382c0f8049377361279e40033d7479522d3a301f2ef9f889->leave($__internal_44e3a90acbe416c9382c0f8049377361279e40033d7479522d3a301f2ef9f889_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5217935f8846e1f14e7e4a3c4defd1685f0bc0c96a0075881ab5553520ffdc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5217935f8846e1f14e7e4a3c4defd1685f0bc0c96a0075881ab5553520ffdc27->enter($__internal_5217935f8846e1f14e7e4a3c4defd1685f0bc0c96a0075881ab5553520ffdc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Connexion";
        
        $__internal_5217935f8846e1f14e7e4a3c4defd1685f0bc0c96a0075881ab5553520ffdc27->leave($__internal_5217935f8846e1f14e7e4a3c4defd1685f0bc0c96a0075881ab5553520ffdc27_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_0511dac62d59b9095e4ec3ddfaa7f491df1260ff4e03004e99edb00c82e208f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0511dac62d59b9095e4ec3ddfaa7f491df1260ff4e03004e99edb00c82e208f2->enter($__internal_0511dac62d59b9095e4ec3ddfaa7f491df1260ff4e03004e99edb00c82e208f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        echo "active ";
        
        $__internal_0511dac62d59b9095e4ec3ddfaa7f491df1260ff4e03004e99edb00c82e208f2->leave($__internal_0511dac62d59b9095e4ec3ddfaa7f491df1260ff4e03004e99edb00c82e208f2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5116a405a53623dcc82b30ca0b8f18c4f4c9cf5ea60cd9b00699b3d20f715622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5116a405a53623dcc82b30ca0b8f18c4f4c9cf5ea60cd9b00699b3d20f715622->enter($__internal_5116a405a53623dcc82b30ca0b8f18c4f4c9cf5ea60cd9b00699b3d20f715622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        // line 5
        echo "<div class=\"main\">
      <div class=\"container\">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
        
          <!-- BEGIN CONTENT -->
          <div class=\"col-md-9 col-sm-9\">
            <h1>Connexion</h1>
            <div class=\"content-form-page\">
              <div class=\"row\">
                <div class=\"col-md-7 col-sm-7\">
\t\t\t\t";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "\t\t\t\t\t<div class=\"alert alert-danger\"> 
\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 21
        echo "                  <form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_login_check");
        echo "\" class=\"form-horizontal form-without-legend\" role=\"form\">
                    <div class=\"form-group\">
                      <label for=\"email\" class=\"col-lg-4 control-label\">Email <span class=\"require\">*</span></label>
                      <div class=\"col-lg-8\">
                        <input type=\"text\" placeholder=\"votre adresse mail...\" class=\"form-control\" name=\"_username\" id=\"username\">
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"password\" class=\"col-lg-4 control-label\">Mot de passe <span class=\"require\">*</span></label>
                      <div class=\"col-lg-8\">
                        <input type=\"password\" placeholder=\"votre mot de passe...\" class=\"form-control\" name=\"_password\" id=\"password\">
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-lg-8 col-md-offset-4 padding-left-0\">
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_mot_de_passe_oublie");
        echo "\">Mot de passe oublier ?</a>
\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abi_utilisateur_creercompte");
        echo "\">Créer un compte</a>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-lg-8 col-md-offset-4 padding-left-0 padding-top-20\">
                        <button type=\"submit\" class=\"btn btn-primary\">Se connecter <i class=\"ace-icon fa fa-lock\"></i></button>
                      </div>
                    </div>
   
                  </form>
                </div>
                <div class=\"col-md-4 col-sm-4 pull-right\">
                  <div class=\"form-info\">
                    <h2><em>Vos défis</em> gratuitement</h2>
                    <p>Vos défis en 3 clics.</p>

                    <button type=\"button\" class=\"btn btn-default\">Plus de détails</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
";
        
        $__internal_5116a405a53623dcc82b30ca0b8f18c4f4c9cf5ea60cd9b00699b3d20f715622->leave($__internal_5116a405a53623dcc82b30ca0b8f18c4f4c9cf5ea60cd9b00699b3d20f715622_prof);

    }

    public function getTemplateName()
    {
        return "AbiUtilisateurBundle:Utilisateur:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  110 => 36,  91 => 21,  85 => 18,  82 => 17,  80 => 16,  67 => 5,  61 => 4,  49 => 3,  36 => 2,  11 => 1,);
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
{% block title %}{{parent()}}--Connexion{% endblock %}
{% block acceuil_parent_active %}active {% endblock %}
{% block body%}
<div class=\"main\">
      <div class=\"container\">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class=\"row margin-bottom-40\">
        
          <!-- BEGIN CONTENT -->
          <div class=\"col-md-9 col-sm-9\">
            <h1>Connexion</h1>
            <div class=\"content-form-page\">
              <div class=\"row\">
                <div class=\"col-md-7 col-sm-7\">
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\"> 
\t\t\t\t\t\t{{ error.message }}\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
                  <form method=\"post\" action=\"{{path('abi_utilisateur_login_check')}}\" class=\"form-horizontal form-without-legend\" role=\"form\">
                    <div class=\"form-group\">
                      <label for=\"email\" class=\"col-lg-4 control-label\">Email <span class=\"require\">*</span></label>
                      <div class=\"col-lg-8\">
                        <input type=\"text\" placeholder=\"votre adresse mail...\" class=\"form-control\" name=\"_username\" id=\"username\">
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label for=\"password\" class=\"col-lg-4 control-label\">Mot de passe <span class=\"require\">*</span></label>
                      <div class=\"col-lg-8\">
                        <input type=\"password\" placeholder=\"votre mot de passe...\" class=\"form-control\" name=\"_password\" id=\"password\">
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-lg-8 col-md-offset-4 padding-left-0\">
                        <a href=\"{{path('abi_utilisateur_mot_de_passe_oublie')}}\">Mot de passe oublier ?</a>
\t\t\t\t\t\t<a href=\"{{path('abi_utilisateur_creercompte')}}\">Créer un compte</a>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"col-lg-8 col-md-offset-4 padding-left-0 padding-top-20\">
                        <button type=\"submit\" class=\"btn btn-primary\">Se connecter <i class=\"ace-icon fa fa-lock\"></i></button>
                      </div>
                    </div>
   
                  </form>
                </div>
                <div class=\"col-md-4 col-sm-4 pull-right\">
                  <div class=\"form-info\">
                    <h2><em>Vos défis</em> gratuitement</h2>
                    <p>Vos défis en 3 clics.</p>

                    <button type=\"button\" class=\"btn btn-default\">Plus de détails</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
{% endblock %}", "AbiUtilisateurBundle:Utilisateur:login.html.twig", "/var/www/projet/decennale/src/Abi/UtilisateurBundle/Resources/views/Utilisateur/login.html.twig");
    }
}
