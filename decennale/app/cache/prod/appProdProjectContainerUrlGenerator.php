<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_decennale_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Admin\\DecennaleBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_decennale_coms' => array (  0 =>   array (    0 => 'pageD',    1 => 'pagef',  ),  1 =>   array (    '_controller' => 'Admin\\DecennaleBundle\\Controller\\CommentairesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pagef',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pageD',    ),    2 =>     array (      0 => 'text',      1 => '/admin/Commentaires',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_decennale_valide' => array (  0 =>   array (    0 => 'id',    1 => 'valide',  ),  1 =>   array (    '_controller' => 'Admin\\DecennaleBundle\\Controller\\CommentairesController::valideAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'valide',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ValideCommentaires',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_decennale_devis' => array (  0 =>   array (    0 => 'pageD',    1 => 'pagef',  ),  1 =>   array (    '_controller' => 'Admin\\DecennaleBundle\\Controller\\DevisController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pagef',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pageD',    ),    2 =>     array (      0 => 'text',      1 => '/admin/Devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/verification_connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_creercompte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::creerCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/creer_compte/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_creercompte_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::creerCompteAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/gerant/creer_compte_admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_mon_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::monCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/mon_compte/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_modifier_profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::modifierProfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/modifier_profil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_modifier_info_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::modifierInfoConnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/modifier_info_connexion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_mot_de_passe_oublie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::motDePasseOublieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/mot_de_passe_oublie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_verifier_recuperer_mot_de_passe' => array (  0 =>   array (    0 => 'mail',  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::verifierRecupererMotDePasseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mail',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/verifier_recuperer_mot_de_passe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_recuperer_mot_de_passe' => array (  0 =>   array (    0 => 'mail',  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::recupererMotDePasseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mail',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/recuperer_mot_de_passe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_reinitialiser_mot_de_passe' => array (  0 =>   array (    0 => 'mail',    1 => 'motDePasse',  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::reinitialiserMotDePasseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'motDePasse',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mail',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur/reinitialiser_mot_de_passe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_utilisateur_recuperer_mot_de_passe_effectue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\UtilisateurBundle\\Controller\\UtilisateurController::recupererMotDePasseEffectueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/recuperer_mot_de_passe_effectue/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_service_devis_decennale_constructeur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InfojetDevisBundle:Service:devisDecennaleConstructeur',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/service/devis_decennale_constructeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_service_devis_decennale_architecte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InfojetDevisBundle:Service:devisDecennaleArchitecte',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/service/devis_decennale_architecte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_service_obligation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InfojetDevisBundle:Service:obligation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/service/obligation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_service_resiliation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InfojetDevisBundle:Service:resiliation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/service/resiliation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_service_souscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InfojetDevisBundle:Service:souscription',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/service/souscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_service_documentation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InfojetDevisBundle:Service:documentation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis/service/documentation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_devis_demander_confirmation_mail_demandeur' => array (  0 =>   array (    0 => 'mail',  ),  1 =>   array (    '_controller' => 'Infojet\\DevisBundle\\Controller\\DemandeController::demanderConfirmationMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mail',    ),    1 =>     array (      0 => 'text',      1 => '/devis/demander_confirmation_mail_demandeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'infojet_devis_confirmer_mail_demandeur' => array (  0 =>   array (    0 => 'id_demande',    1 => 'code_validation',  ),  1 =>   array (    '_controller' => 'Infojet\\DevisBundle\\Controller\\DemandeController::confirmerMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code_validation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_demande',    ),    2 =>     array (      0 => 'text',      1 => '/devis/confirmer_mail_demandeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_routine_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\RoutineBundle\\Controller\\RoutineController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_routine_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\RoutineBundle\\Controller\\RoutineController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacter_nous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_decennale_afficherComs' => array (  0 =>   array (    0 => 'pageD',    1 => 'pagef',    2 => 'valide',  ),  1 =>   array (    '_controller' => 'Abi\\RoutineBundle\\Controller\\CommentairesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'valide',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pagef',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pageD',    ),    3 =>     array (      0 => 'text',      1 => '/avis/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'devis_decennale_createComs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\RoutineBundle\\Controller\\CommentairesController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/avis/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abi_routine_qui_sommes_nous' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Abi\\RoutineBundle\\Controller\\RoutineController::quiSommesNousAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/qui_sommes_nous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
