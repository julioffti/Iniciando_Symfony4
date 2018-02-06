<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        if (0 === strpos($pathinfo, '/produto')) {
            // listar-produto
            if ('/produto' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ProdutoController::index',  '_route' => 'listar-produto',);
            }

            // cadastrar-produto
            if ('/produto/cadastro' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ProdutoController::create',  '_route' => 'cadastrar-produto',);
            }

            // editar-produto
            if (0 === strpos($pathinfo, '/produto/editar') && preg_match('#^/produto/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar-produto')), array (  '_controller' => 'App\\Controller\\ProdutoController::update',));
            }

            // visualizar-produto
            if (0 === strpos($pathinfo, '/produto/ver') && preg_match('#^/produto/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visualizar-produto')), array (  '_controller' => 'App\\Controller\\ProdutoController::show',));
            }

            // deletar-produto
            if (0 === strpos($pathinfo, '/produto/deletar') && preg_match('#^/produto/deletar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletar-produto')), array (  '_controller' => 'App\\Controller\\ProdutoController::delete',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
