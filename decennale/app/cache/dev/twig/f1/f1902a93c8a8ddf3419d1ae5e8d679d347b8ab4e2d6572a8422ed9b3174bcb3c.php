<?php

/* AbiUtilisateurBundle:Utilisateur:login.html.twig */
class __TwigTemplate_f3ffef06d4910016f7797012571383a447852dc1dc3b005f2ed85216a5e36425 extends Twig_Template
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
        $__internal_4d0d360912515eb728bc766f7903bd9282a181545ee20b02b0cfe8c0c350fe21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0d360912515eb728bc766f7903bd9282a181545ee20b02b0cfe8c0c350fe21->enter($__internal_4d0d360912515eb728bc766f7903bd9282a181545ee20b02b0cfe8c0c350fe21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d0d360912515eb728bc766f7903bd9282a181545ee20b02b0cfe8c0c350fe21->leave($__internal_4d0d360912515eb728bc766f7903bd9282a181545ee20b02b0cfe8c0c350fe21_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f884e8617b88dd6d82d9187603f065c1e060441cd68f04aa1796ecbc9bad04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f884e8617b88dd6d82d9187603f065c1e060441cd68f04aa1796ecbc9bad04d->enter($__internal_0f884e8617b88dd6d82d9187603f065c1e060441cd68f04aa1796ecbc9bad04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "--Connexion";
        
        $__internal_0f884e8617b88dd6d82d9187603f065c1e060441cd68f04aa1796ecbc9bad04d->leave($__internal_0f884e8617b88dd6d82d9187603f065c1e060441cd68f04aa1796ecbc9bad04d_prof);

    }

    // line 3
    public function block_acceuil_parent_active($context, array $blocks = array())
    {
        $__internal_481dea1b92f0b440e1fd23d5b7d84a4658f8ce34e854286ba4b61298c45052cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481dea1b92f0b440e1fd23d5b7d84a4658f8ce34e854286ba4b61298c45052cc->enter($__internal_481dea1b92f0b440e1fd23d5b7d84a4658f8ce34e854286ba4b61298c45052cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

        echo "active ";
        
        $__internal_481dea1b92f0b440e1fd23d5b7d84a4658f8ce34e854286ba4b61298c45052cc->leave($__internal_481dea1b92f0b440e1fd23d5b7d84a4658f8ce34e854286ba4b61298c45052cc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d2adf53814842db1e1ea7653f01712c9a85f283ec1c0364680fd05103ac706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d2adf53814842db1e1ea7653f01712c9a85f283ec1c0364680fd05103ac706->enter($__internal_a6d2adf53814842db1e1ea7653f01712c9a85f283ec1c0364680fd05103ac706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AbiUtilisateurBundle:Utilisateur:login.html.twig"));

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
        
        $__internal_a6d2adf53814842db1e1ea7653f01712c9a85f283ec1c0364680fd05103ac706->leave($__internal_a6d2adf53814842db1e1ea7653f01712c9a85f283ec1c0364680fd05103ac706_prof);

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
