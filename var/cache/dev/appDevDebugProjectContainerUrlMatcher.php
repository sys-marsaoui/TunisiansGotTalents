<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // tgt_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'TGTBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tgt_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_tgt_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'tgt_homepage'));
            }

            return $ret;
        }
        not_tgt_homepage:

        if (0 === strpos($pathinfo, '/new')) {
            // candidat_new
            if ('/newCandidat' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\CandidatController::newAction',  '_route' => 'candidat_new',);
            }

            // contrat_new
            if ('/newContrat' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\ContratController::newAction',  '_route' => 'contrat_new',);
            }

            // entretien_new
            if ('/newEntretien' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\EntretienController::newAction',  '_route' => 'entretien_new',);
            }

        }

        elseif (0 === strpos($pathinfo, '/show')) {
            // candidat_show
            if ('/showCandidat' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\CandidatController::indexAction',  '_route' => 'candidat_show',);
            }

            // contrat_show
            if ('/showContrat' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\ContratController::indexAction',  '_route' => 'contrat_show',);
            }

            // entretien_show
            if ('/showEntretien' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\EntretienController::indexAction',  '_route' => 'entretien_show',);
            }

        }

        elseif (0 === strpos($pathinfo, '/edit')) {
            // candidat_edit
            if (0 === strpos($pathinfo, '/editCandidat') && preg_match('#^/editCandidat/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'candidat_edit']), array (  '_controller' => 'TGTBundle\\Controller\\CandidatController::editAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_candidat_edit;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'candidat_edit'));
                }

                return $ret;
            }
            not_candidat_edit:

            // contrat_edit
            if (0 === strpos($pathinfo, '/editContrat') && preg_match('#^/editContrat/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'contrat_edit']), array (  '_controller' => 'TGTBundle\\Controller\\ContratController::editAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_contrat_edit;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contrat_edit'));
                }

                return $ret;
            }
            not_contrat_edit:

            // entretien_edit
            if (0 === strpos($pathinfo, '/editEntretien') && preg_match('#^/editEntretien/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'entretien_edit']), array (  '_controller' => 'TGTBundle\\Controller\\EntretienController::editAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_entretien_edit;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entretien_edit'));
                }

                return $ret;
            }
            not_entretien_edit:

        }

        elseif (0 === strpos($pathinfo, '/delete')) {
            // candidat_delete
            if (0 === strpos($pathinfo, '/deleteCandidat') && preg_match('#^/deleteCandidat/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'candidat_delete']), array (  '_controller' => 'TGTBundle\\Controller\\CandidatController::deleteAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_candidat_delete;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'candidat_delete'));
                }

                return $ret;
            }
            not_candidat_delete:

            // contrat_delete
            if (0 === strpos($pathinfo, '/deleteContrat') && preg_match('#^/deleteContrat/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'contrat_delete']), array (  '_controller' => 'TGTBundle\\Controller\\ContratController::deleteAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_contrat_delete;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contrat_delete'));
                }

                return $ret;
            }
            not_contrat_delete:

            // entretien_delete
            if (0 === strpos($pathinfo, '/deleteEntretien') && preg_match('#^/deleteEntretien/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'entretien_delete']), array (  '_controller' => 'TGTBundle\\Controller\\EntretienController::deleteAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_entretien_delete;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entretien_delete'));
                }

                return $ret;
            }
            not_entretien_delete:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/back')) {
                // back_Utilisateur
                if ('/admin/backUtilisateur' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexUtilisateurAction',  '_route' => 'back_Utilisateur',);
                }

                // back_Organiation
                if ('/admin/backOrganisation' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexOrganisationAction',  '_route' => 'back_Organiation',);
                }

                // back_Entretient
                if ('/admin/backEntretient' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexEntretientAction',  '_route' => 'back_Entretient',);
                }

                // back_Contrat
                if ('/admin/backContrat' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexContratAction',  '_route' => 'back_Contrat',);
                }

                // back_Candidat
                if ('/admin/backCandidat' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexCandidatAction',  '_route' => 'back_Candidat',);
                }

                // back_Formation
                if ('/admin/backFormation' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexFormationAction',  '_route' => 'back_Formation',);
                }

                // back_Forum
                if ('/admin/backForum' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexForumAction',  '_route' => 'back_Forum',);
                }

                // back_Vente
                if ('/admin/backVente' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexVenteAction',  '_route' => 'back_Vente',);
                }

                // back_Publication
                if ('/admin/backPublication' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::indexPublicationAction',  '_route' => 'back_Publication',);
                }

            }

            // back_AddUtilisateur
            if ('/admin/AddUtilisateur' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\BackController::addUtilisateurAction',  '_route' => 'back_AddUtilisateur',);
            }

            // back_EditUtilisateur
            if ('/admin/EditUtilisateur' === $pathinfo) {
                return array (  '_controller' => 'TGTBundle\\Controller\\BackController::editUtilisateurAction',  '_route' => 'back_EditUtilisateur',);
            }

            if (0 === strpos($pathinfo, '/admin/add')) {
                // back_AddOrganiation
                if ('/admin/addOrganisation' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::addOrganisationAction',  '_route' => 'back_AddOrganiation',);
                }

                // back_AddEntretient
                if ('/admin/addEntretient' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::addEntretientAction',  '_route' => 'back_AddEntretient',);
                }

                // back_AddContrat
                if ('/admin/addContrat' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::addContratAction',  '_route' => 'back_AddContrat',);
                }

                // back_AddCandidat
                if ('/admin/addCandidat' === $pathinfo) {
                    return array (  '_controller' => 'TGTBundle\\Controller\\BackController::addCandidatAction',  '_route' => 'back_AddCandidat',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/edit')) {
                // back_EditOrganiation
                if (0 === strpos($pathinfo, '/admin/editOrganisation') && preg_match('#^/admin/editOrganisation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_EditOrganiation']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::editOrganisationAction',));
                }

                // back_EditEntretient
                if (0 === strpos($pathinfo, '/admin/editEntretient') && preg_match('#^/admin/editEntretient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_EditEntretient']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::editEntretientAction',));
                }

                // back_EditContrat
                if (0 === strpos($pathinfo, '/admin/editContrat') && preg_match('#^/admin/editContrat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_EditContrat']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::editContratAction',));
                }

                // back_EditCandidat
                if (0 === strpos($pathinfo, '/admin/editCandidat') && preg_match('#^/admin/editCandidat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_EditCandidat']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::editCandidatAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/delete')) {
                // back_DeleteOrganiation
                if (0 === strpos($pathinfo, '/admin/deleteOrganisation') && preg_match('#^/admin/deleteOrganisation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_DeleteOrganiation']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::deleteOrganisationAction',));
                }

                // back_DeleteEntretient
                if (0 === strpos($pathinfo, '/admin/deleteEntretient') && preg_match('#^/admin/deleteEntretient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_DeleteEntretient']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::deleteEntretientAction',));
                }

                // back_DeleteContrat
                if (0 === strpos($pathinfo, '/admin/deleteContrat') && preg_match('#^/admin/deleteContrat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_DeleteContrat']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::deleteContratAction',));
                }

                // back_DeleteCandidat
                if (0 === strpos($pathinfo, '/admin/deleteCandidat') && preg_match('#^/admin/deleteCandidat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'back_DeleteCandidat']), array (  '_controller' => 'TGTBundle\\Controller\\BackController::deleteCandidatAction',));
                }

            }

            // adminpage
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'adminpage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
