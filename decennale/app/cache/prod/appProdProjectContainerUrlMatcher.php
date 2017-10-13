<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_decennale_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_decennale_homepage');
                }

                return array (  '_controller' => 'Admin\\DecennaleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_decennale_homepage',);
            }

            // admin_decennale_coms
            if (0 === strpos($pathinfo, '/admin/Commentaires') && preg_match('#^/admin/Commentaires/(?P<pageD>[^/]++)/(?P<pagef>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_decennale_coms')), array (  '_controller' => 'Admin\\DecennaleBundle\\Controller\\CommentairesController::indexAction',));
            }

            // admin_decennale_valide
            if (0 === strpos($pathinfo, '/admin/ValideCommentaires') && preg_match('#^/admin/ValideCommentaires/(?P<id>[^/]++)/(?P<valide>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_decennale_valide')), array (  '_controller' => 'Admin\\DecennaleBundle\\Controller\\CommentairesController::valideAction',));
            }

            // admin_decennale_devis
            if (0 === strpos($pathinfo, '/admin/Devis') && preg_match('#^/admin/Devis/(?P<pageD>[^/]++)/(?P<pagef>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_decennale_devis')), array (  '_controller' => 'Admin\\DecennaleBundle\\Controller\\DevisController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // abi_utilisateur_login
            if ($pathinfo === '/utilisateur/connexion') {
                return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::loginAction',  '_route' => 'abi_utilisateur_login',);
            }

            // abi_utilisateur_login_check
            if ($pathinfo === '/utilisateur/verification_connexion') {
                return array('_route' => 'abi_utilisateur_login_check');
            }

            // abi_utilisateur_logout
            if ($pathinfo === '/utilisateur/deconnexion') {
                return array('_route' => 'abi_utilisateur_logout');
            }

            // abi_utilisateur_creercompte
            if (rtrim($pathinfo, '/') === '/utilisateur/creer_compte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'abi_utilisateur_creercompte');
                }

                return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::creerCompteAction',  '_route' => 'abi_utilisateur_creercompte',);
            }

            // abi_utilisateur_creercompte_admin
            if (rtrim($pathinfo, '/') === '/utilisateur/gerant/creer_compte_admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'abi_utilisateur_creercompte_admin');
                }

                return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::creerCompteAdminAction',  '_route' => 'abi_utilisateur_creercompte_admin',);
            }

            if (0 === strpos($pathinfo, '/utilisateur/mo')) {
                // abi_utilisateur_mon_compte
                if (rtrim($pathinfo, '/') === '/utilisateur/mon_compte') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'abi_utilisateur_mon_compte');
                    }

                    return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::monCompteAction',  '_route' => 'abi_utilisateur_mon_compte',);
                }

                if (0 === strpos($pathinfo, '/utilisateur/modifier_')) {
                    // abi_utilisateur_modifier_profil
                    if (rtrim($pathinfo, '/') === '/utilisateur/modifier_profil') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'abi_utilisateur_modifier_profil');
                        }

                        return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::modifierProfilAction',  '_route' => 'abi_utilisateur_modifier_profil',);
                    }

                    // abi_utilisateur_modifier_info_connexion
                    if (rtrim($pathinfo, '/') === '/utilisateur/modifier_info_connexion') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'abi_utilisateur_modifier_info_connexion');
                        }

                        return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::modifierInfoConnexionAction',  '_route' => 'abi_utilisateur_modifier_info_connexion',);
                    }

                }

                // abi_utilisateur_mot_de_passe_oublie
                if (rtrim($pathinfo, '/') === '/utilisateur/mot_de_passe_oublie') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'abi_utilisateur_mot_de_passe_oublie');
                    }

                    return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::motDePasseOublieAction',  '_route' => 'abi_utilisateur_mot_de_passe_oublie',);
                }

            }

            // abi_utilisateur_verifier_recuperer_mot_de_passe
            if (0 === strpos($pathinfo, '/utilisateur/verifier_recuperer_mot_de_passe') && preg_match('#^/utilisateur/verifier_recuperer_mot_de_passe/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abi_utilisateur_verifier_recuperer_mot_de_passe')), array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::verifierRecupererMotDePasseAction',));
            }

            if (0 === strpos($pathinfo, '/utilisateur/re')) {
                // abi_utilisateur_recuperer_mot_de_passe
                if (0 === strpos($pathinfo, '/utilisateur/recuperer_mot_de_passe') && preg_match('#^/utilisateur/recuperer_mot_de_passe/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'abi_utilisateur_recuperer_mot_de_passe')), array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::recupererMotDePasseAction',));
                }

                // abi_utilisateur_reinitialiser_mot_de_passe
                if (0 === strpos($pathinfo, '/utilisateur/reinitialiser_mot_de_passe') && preg_match('#^/utilisateur/reinitialiser_mot_de_passe/(?P<mail>[^/]++)/(?P<motDePasse>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'abi_utilisateur_reinitialiser_mot_de_passe')), array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::reinitialiserMotDePasseAction',));
                }

                // abi_utilisateur_recuperer_mot_de_passe_effectue
                if (rtrim($pathinfo, '/') === '/utilisateur/recuperer_mot_de_passe_effectue') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'abi_utilisateur_recuperer_mot_de_passe_effectue');
                    }

                    return array (  '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::recupererMotDePasseEffectueAction',  '_route' => 'abi_utilisateur_recuperer_mot_de_passe_effectue',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/devis')) {
            if (0 === strpos($pathinfo, '/devis/service')) {
                if (0 === strpos($pathinfo, '/devis/service/devis_decennale_')) {
                    // infojet_service_devis_decennale_constructeur
                    if ($pathinfo === '/devis/service/devis_decennale_constructeur') {
                        return array (  '_controller' => 'InfojetDevisBundle:Service:devisDecennaleConstructeur',  '_route' => 'infojet_service_devis_decennale_constructeur',);
                    }

                    // infojet_service_devis_decennale_architecte
                    if ($pathinfo === '/devis/service/devis_decennale_architecte') {
                        return array (  '_controller' => 'InfojetDevisBundle:Service:devisDecennaleArchitecte',  '_route' => 'infojet_service_devis_decennale_architecte',);
                    }

                }

                // infojet_service_obligation
                if ($pathinfo === '/devis/service/obligation') {
                    return array (  '_controller' => 'InfojetDevisBundle:Service:obligation',  '_route' => 'infojet_service_obligation',);
                }

                // infojet_service_resiliation
                if ($pathinfo === '/devis/service/resiliation') {
                    return array (  '_controller' => 'InfojetDevisBundle:Service:resiliation',  '_route' => 'infojet_service_resiliation',);
                }

                // infojet_service_souscription
                if ($pathinfo === '/devis/service/souscription') {
                    return array (  '_controller' => 'InfojetDevisBundle:Service:souscription',  '_route' => 'infojet_service_souscription',);
                }

                // infojet_service_documentation
                if ($pathinfo === '/devis/service/documentation') {
                    return array (  '_controller' => 'InfojetDevisBundle:Service:documentation',  '_route' => 'infojet_service_documentation',);
                }

            }

            // infojet_devis_demander_confirmation_mail_demandeur
            if (0 === strpos($pathinfo, '/devis/demander_confirmation_mail_demandeur') && preg_match('#^/devis/demander_confirmation_mail_demandeur/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infojet_devis_demander_confirmation_mail_demandeur')), array (  '_controller' => 'Infojet\\DevisBundle\\Controller\\DemandeController::demanderConfirmationMailAction',));
            }

            // infojet_devis_confirmer_mail_demandeur
            if (0 === strpos($pathinfo, '/devis/confirmer_mail_demandeur') && preg_match('#^/devis/confirmer_mail_demandeur/(?P<id_demande>[^/]++)/(?P<code_validation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infojet_devis_confirmer_mail_demandeur')), array (  '_controller' => 'Infojet\\DevisBundle\\Controller\\DemandeController::confirmerMailAction',));
            }

        }

        // abi_routine_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'abi_routine_homepage');
            }

            return array (  '_controller' => 'Abi\\RoutineBundle\\Controller\\RoutineController::indexAction',  '_route' => 'abi_routine_homepage',);
        }

        // abi_routine_contact
        if ($pathinfo === '/contacter_nous') {
            return array (  '_controller' => 'Abi\\RoutineBundle\\Controller\\RoutineController::contactAction',  '_route' => 'abi_routine_contact',);
        }

        if (0 === strpos($pathinfo, '/avis')) {
            // devis_decennale_afficherComs
            if (0 === strpos($pathinfo, '/avis/index') && preg_match('#^/avis/index/(?P<pageD>[^/]++)/(?P<pagef>[^/]++)/(?P<valide>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'devis_decennale_afficherComs')), array (  '_controller' => 'Abi\\RoutineBundle\\Controller\\CommentairesController::indexAction',));
            }

            // devis_decennale_createComs
            if ($pathinfo === '/avis/create') {
                return array (  '_controller' => 'Abi\\RoutineBundle\\Controller\\CommentairesController::createAction',  '_route' => 'devis_decennale_createComs',);
            }

        }

        // abi_routine_qui_sommes_nous
        if ($pathinfo === '/qui_sommes_nous') {
            return array (  '_controller' => 'Abi\\RoutineBundle\\Controller\\RoutineController::quiSommesNousAction',  '_route' => 'abi_routine_qui_sommes_nous',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
