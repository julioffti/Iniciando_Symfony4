<?php

namespace App\Controller;

use App\Entity\Produto;
use App\Form\ProdutoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ProdutoController extends Controller
{

    public function index()
    {
         $em = $this->getDoctrine()->getManager();

         $produtos = $em -> getRepository(Produto::class)->findAll();

         return $this->render("produto/index.html.twig", [
                'produtos' => $produtos
             ]);
    }

    public function create(Request $request)
    {
        $produto = new Produto();

        $form = $this->createForm(ProdutoType::class, $produto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();

            $em->persist($produto);
            $em->flush();

            $this->get('session')->getFlashBag()->set('success', 'Produto foi salvo com sucesso');

            return $this->redirectToRoute('listar-produto');
        }

        return $this->render("produto/create.html.twig",[
            'form' => $form->createView()
        ]);
    }

    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produto = $em->getRepository(Produto::class)->find($id);

        $form = $this->createForm(ProdutoType::class, $produto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();

            $em->persist($produto);
            $em->flush();

            $this->get('session')->getFlashBag()->set('success', "O produto " . $produto->getNome() . ' foi editado com sucesso');

            return $this->redirectToRoute('listar-produto');
        }


        return $this->render("produto/update.html.twig", [
            'produto' => $produto,
            'form' => $form->createView()
        ]);
    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produto = $em->getRepository(Produto::class)->find($id);

        return $this->render('produto/show.html.twig', [
            'produto' => $produto
        ]);
    }

    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produto = $em->getRepository(Produto::class)->find($id);
        if (!$produto) {
            $mensagem = "Produto não foi encontrado!";
            $tipo = "warning";
        } else {
            $em->remove($produto);
            $em->flush();
            $mensagem = "Produto foi excluído com sucesso!";
            $tipo = "success";
        }
        $this->get('session')->getFlashBag()->set($tipo, $mensagem);
        return $this->redirectToRoute("listar-produto");
    }
}
