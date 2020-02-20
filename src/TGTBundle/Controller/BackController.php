<?php

namespace TGTBundle\Controller;

use TGTBundle\Entity\Candidat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use TGTBundle\Entity\Contrat;
use TGTBundle\Entity\Entretien;
use TGTBundle\Entity\Organisations;
use TGTBundle\Form\CandidatType;
use TGTBundle\Form\ContratType;
use TGTBundle\Form\EntretienType;
use TGTBundle\Form\OrganisationsType;

/**
 * Back controller.
 *
 * @Route("candidat")
 */
class BackController extends Controller
{

    public function indexUtilisateurAction()
    {
        $em = $this->getDoctrine()->getManager();

        $candidats = $em->getRepository(Candidat::class)->findAll();

        return $this->render('@TGT/back/utilisateur/backUtilisateur.html.twig', array(
            'candidats' => $candidats,
        ));
    }

########ORGANISATION###################################################################
    public function indexOrganisationAction()
    {
        $em = $this->getDoctrine()->getManager();

        $organisations = $em->getRepository(Organisations::class)->findAll();

        return $this->render('@TGT/back/organisation/indexOrganisations.html.twig', array(
            'organisations' => $organisations,
        ));
    }

    public function addOrganisationAction(Request $request)
    {
        $organisation = new Organisations();
        $form = $this->createForm('TGTBundle\Form\OrganisationsType', $organisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organisation);
            $em->flush();

            return $this->redirectToRoute('back_Organiation', array('id' => $organisation->getId()));
        }

        return $this->render('@TGT/back/organisation/addOrganisations.html.twig', array(
            'organisation' => $organisation,
            'form' => $form->createView(),
        ));
    }

    public function editOrganisationAction(Request $request, $id)
    {
        $organisation = $this->getDoctrine()->getRepository(Organisations::class)
            ->find($id);
        $form = $this->createForm(OrganisationsType::class, $organisation);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $ef = $this->getDoctrine()->getManager();
            $ef->persist($organisation);
            $ef->flush();


            return $this->redirectToRoute("back_Organiation");
        }
        return $this->render("@TGT/back/organisation/editOrganisations.html.twig",
            array("form"=>$form->createView()));

    }


    public function deleteOrganisationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $organisation= $em->getRepository(Organisations::class)->find($id);

        $em->remove($organisation);

        $em->flush();

        return $this->redirectToRoute("back_Organiation");
    }
####################################################################################################################

########CANDIAT#############################################

    public function indexCandidatAction()
    {
        $em = $this->getDoctrine()->getManager();

        $candidat = $em->getRepository(Candidat::class)->findAll();

        return $this->render('@TGT/back/condidat/indexCandidat.html.twig', array(
            'candidat' => $candidat,
        ));
    }

    public function addCandidatAction(Request $request)
    {
        $candidats= new Candidat();
        $form = $this->createForm(CandidatType::class,$candidats);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()){

            $file = $form ['cv']->getData();


            $newFileName = $file->getClientOriginalName();

            $file->move($this->getParameter('files_directory'), $newFileName);

            $candidats->setcv($newFileName);



            dump($file);

            dump($candidats);
            $em = $this->getDoctrine()->getManager();
            $em->persist($candidats);
            $em->flush();
            return $this->redirectToRoute('back_Candidat');
        }

        return ($this->render('@TGT/back/condidat/addCandidat.html.twig',array("form"=> $form->createView())));
    }


    public function editCandidatAction(Request $request, Candidat $candidat)
    {
        $deleteForm = $this->createDeleteForm($candidat);
        $editForm = $this->createForm(CandidatType::class, $candidat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_Candidat', array('id' => $candidat->getId()));
        }

        return $this->render('@TGT/back/condidat/editCandidat.html.twig', array(
            'candidat' => $candidat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteCandidatAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $candidat= $em->getRepository(Candidat::class)->find($id);

        $em->remove($candidat);

        $em->flush();

        return $this->redirectToRoute("back_Candidat");
    }
####################################################################################################################
##################Etretient################################################################################

    public function indexEntretientAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entretient = $em->getRepository(Entretien::class)->findAll();

        return $this->render('@TGT/back/entretient/indexEntretient.html.twig', array(
            'entretient' => $entretient,
        ));
    }

    public function editEntretientAction(Request $request, $id)
    {
        $entretient = $this->getDoctrine()->getRepository(Organisations::class)
            ->find($id);
        $form = $this->createForm(EntretienType::class, $entretient);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $ef = $this->getDoctrine()->getManager();
            $ef->persist($entretient);
            $ef->flush();


            return $this->redirectToRoute("back_Entretient");
        }
        return $this->render("@TGT/back/entretient/editEntretient.html.twig",
            array("form"=>$form->createView()));

    }

    public function addEntretientAction(Request $request)
    {
        $entretient = new Entretien();
        $form = $this->createForm(EntretienType::class, $entretient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entretient);
            $em->flush();

            return $this->redirectToRoute('back_Entretient', array('id' => $entretient->getId()));
        }

        return $this->render('@TGT/back/entretient/addEntretient.html.twig', array(
            'entretient' => $entretient,
            'form' => $form->createView(),
        ));
    }

    public function deleteEntretientAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $entretiens= $em->getRepository(Entretien::class)->find($id);

        $em->remove($entretiens);

        $em->flush();

        return $this->redirectToRoute("back_Entretient");
    }


####################################################################################################################
##################Contrat################################################################################
    public function indexContratAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contrat = $em->getRepository(Contrat::class)->findAll();

        return $this->render('@TGT/back/contrat/indexContrat.html.twig', array(
            'contrat' => $contrat,
        ));
    }

    public function addContratAction(Request $request)
    {
        $contrats = new Contrat();
        $form = $this->createForm(ContratType::class, $contrats);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrats);
            $em->flush();

            return $this->redirectToRoute('back_Contrat', array('id' => $contrats->getId()));
        }

        return $this->render('@TGT/back/contrat/addContrat.html.twig', array(
            'contrat' => $contrats,
            'form' => $form->createView(),
        ));
    }

    public function editContratAction(Request $request, $id)
    {
        $contrat = $this->getDoctrine()->getRepository(Contrat::class)
            ->find($id);
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $ef = $this->getDoctrine()->getManager();
            $ef->persist($contrat);
            $ef->flush();


            return $this->redirectToRoute("back_Contrat");
        }
        return $this->render("@TGT/back/contrat/editContrat.html.twig",
            array("form"=>$form->createView()));

    }
    public function deleteContratAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $contrat= $em->getRepository(Contrat::class)->find($id);

        $em->remove($contrat);

        $em->flush();

        return $this->redirectToRoute("back_Contrat");
    }

    private function createDeleteForm(Candidat $candidat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back_DeleteCandidat', array('id' => $candidat->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
