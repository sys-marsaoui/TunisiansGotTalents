<?php

namespace TGTBundle\Controller;

use TGTBundle\Entity\Casting;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use TGTBundle\Form\CastingType;

/**
 * Casting controller.
 *
 * @Route("casting")
 */
class CastingController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $castings = $em->getRepository('TGTBundle:Casting')->findAll();

        return $this->render('@TGT/Casting/indexCasting.html.twig', array(
            'castings' => $castings,
        ));
    }


    public function newAction(Request $request)
    {

        $casting= new Casting();
        $form = $this->createForm(CastingType::class,$casting);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()){

            $file = $form ['imageCasting']->getData();


            $newImageName = $file->getClientOriginalName();

            $file->move($this->getParameter('images_directory'), $newImageName);

            $casting->setImageCasting($newImageName);



            dump($file);

            dump($casting);
            $em = $this->getDoctrine()->getManager();
            $em->persist($casting);
            $em->flush();
            return $this->redirectToRoute('Casting_show');
        }

        return ($this->render('@TGT/Casting/addCasting.html.twig',array("form"=> $form->createView())));
    }

    public function showAction(Casting $casting)
    {
        $deleteForm = $this->createDeleteForm($casting);

        return $this->render('@TGT/Casting/showCasting.html.twig', array(
            'casting' => $casting,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Casting $casting)
    {
        $deleteForm = $this->createDeleteForm($casting);
        $editForm = $this->createForm('TGTBundle\Form\CastingType', $casting);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Casting_show', array('id' => $casting->getId()));
        }

        return $this->render('@TGT/casting/editCasting.html.twig', array(
            'casting' => $casting,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $casting= $em->getRepository(Casting::class)->find($id);

        $em->remove($casting);

        $em->flush();

        return $this->redirectToRoute("Casting_show");
    }

    /**
     * Creates a form to delete a casting entity.
     *
     * @param Casting $casting The casting entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Casting $casting)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Casting_delete', array('id' => $casting->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
