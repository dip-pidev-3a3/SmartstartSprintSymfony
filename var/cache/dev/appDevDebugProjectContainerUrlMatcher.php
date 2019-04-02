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

        elseif (0 === strpos($pathinfo, '/Admin')) {
            // admin_homepage
            if ('/Admin/Home' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_listPosts
            if ('/Admin/Posts' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\PostController::ListpostsAction',  '_route' => 'admin_listPosts',);
            }

            // Admin_deletePost
            if (0 === strpos($pathinfo, '/Admin/deletepost') && preg_match('#^/Admin/deletepost/(?P<postId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Admin_deletePost']), array (  '_controller' => 'AdminBundle\\Controller\\PostController::DeleteAction',));
            }

            // Admin_deleteComment
            if (0 === strpos($pathinfo, '/Admin/deletecomment') && preg_match('#^/Admin/deletecomment/(?P<commentId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Admin_deleteComment']), array (  '_controller' => 'AdminBundle\\Controller\\CommentController::DeleteAction',));
            }

            // Admin_UpdatePost
            if (0 === strpos($pathinfo, '/Admin/UpdatePost') && preg_match('#^/Admin/UpdatePost/(?P<postId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Admin_UpdatePost']), array (  '_controller' => 'AdminBundle\\Controller\\PostController::UpdateAction',));
            }

            // Admin_DetailPost
            if (0 === strpos($pathinfo, '/Admin/DetailPost') && preg_match('#^/Admin/DetailPost/(?P<postId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Admin_DetailPost']), array (  '_controller' => 'AdminBundle\\Controller\\PostController::DetailPostAction',));
            }

            // admin_listComments
            if ('/Admin/Comments' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\CommentController::ListCommentsAction',  '_route' => 'admin_listComments',);
            }

            // Admin_PaymentsBlogList
            if ('/Admin/paymentBlog' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminBlogProfitsController::listPaymentsAction',  '_route' => 'Admin_PaymentsBlogList',);
            }

            // Admin_PaymentsBlogListAccept
            if (0 === strpos($pathinfo, '/Admin/AcceptPayment') && preg_match('#^/Admin/AcceptPayment/(?P<id>[^/]++)/(?P<idpayment>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Admin_PaymentsBlogListAccept']), array (  '_controller' => 'AdminBundle\\Controller\\AdminBlogProfitsController::AcceptPaymentAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/blog')) {
            // blog_homepage
            if ('/blog' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_blog_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_homepage'));
                }

                return $ret;
            }
            not_blog_homepage:

            if (0 === strpos($pathinfo, '/blog/de')) {
                // blog_detailblog
                if ('/blog/detail' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::detailAction',  '_route' => 'blog_detailblog',);
                }

                // blog_delete
                if (0 === strpos($pathinfo, '/blog/deletepost') && preg_match('#^/blog/deletepost/(?P<postId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'blog_delete']), array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::DeleteAction',));
                }

                // blog_deleteComment
                if (0 === strpos($pathinfo, '/blog/deleteComment') && preg_match('#^/blog/deleteComment/(?P<commentId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'blog_deleteComment']), array (  '_controller' => 'BlogBundle\\Controller\\CommentsController::DeleteAction',));
                }

            }

            // blog_AddBlogPost
            if ('/blog/AddPost' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::AddBlogPostAction',  '_route' => 'blog_AddBlogPost',);
            }

            // blog_AddComment
            if ('/blog/AddComment' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\CommentsController::AddCommentAction',  '_route' => 'blog_AddComment',);
            }

            // blog_ListPosts
            if ('/blog/listposts' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::listAction',  '_route' => 'blog_ListPosts',);
            }

            // blog_Detail
            if (0 === strpos($pathinfo, '/blog/DetailPost') && preg_match('#^/blog/DetailPost/(?P<postId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'blog_Detail']), array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::DetailPostAction',));
            }

            // blog_Managment
            if ('/blog/BlogManager' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::ManagerAction',  '_route' => 'blog_Managment',);
            }

            // blog_Like
            if (0 === strpos($pathinfo, '/blog/Like') && preg_match('#^/blog/Like/(?P<postId>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'blog_Like']), array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::LikeAction',));
            }

            // Update_BlogPost
            if (0 === strpos($pathinfo, '/blog/UpdatePost') && preg_match('#^/blog/UpdatePost/(?P<postId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Update_BlogPost']), array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::UpdateAction',));
            }

            // Blog_PostCat
            if (0 === strpos($pathinfo, '/blog/PostCat') && preg_match('#^/blog/PostCat/(?P<cat>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Blog_PostCat']), array (  '_controller' => 'BlogBundle\\Controller\\BlogPostsController::PostsByCatAction',));
            }

            // blog_Profits
            if ('/blog/Profit' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\BlogProfitsController::AddEntryAction',  '_route' => 'blog_Profits',);
            }

        }

        // opportunity_homepage
        if ('/opportunity/home' === $pathinfo) {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'opportunity_homepage',);
        }

        // opportunity_detailblog
        if ('/opportunity/detail' === $pathinfo) {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::detailAction',  '_route' => 'opportunity_detailblog',);
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

        if (0 === strpos($pathinfo, '/login')) {
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

        elseif (0 === strpos($pathinfo, '/contract')) {
            // my_contracts
            if ('/contract/myContracts' === $pathinfo) {
                return array (  '_controller' => 'ContractBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_contracts',);
            }

            // my_low_contracts
            if ('/contract/myLowContracts' === $pathinfo) {
                return array (  '_controller' => 'ContractBundle\\Controller\\DefaultController::lowAction',  '_route' => 'my_low_contracts',);
            }

            // delete_contract
            if (0 === strpos($pathinfo, '/contract/contract/delete') && preg_match('#^/contract/contract/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_contract']), array (  '_controller' => 'ContractBundle\\Controller\\DefaultController::deleteAction',));
            }

            // update_contract
            if (0 === strpos($pathinfo, '/contract/contract/update') && preg_match('#^/contract/contract/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_contract']), array (  '_controller' => 'ContractBundle\\Controller\\DefaultController::updateAction',));
            }

            // freelancer_contracts
            if ('/contract/freelancerContracts' === $pathinfo) {
                return array (  '_controller' => 'ContractBundle\\Controller\\DefaultController::freelancerContractsAction',  '_route' => 'freelancer_contracts',);
            }

        }

        elseif (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_unseen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_all_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
