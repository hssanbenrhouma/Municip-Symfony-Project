<?php

namespace sfdBundle\Controller;

use sfdBundle\Entity\sondage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sondage controller.
 *
 * @Route("user")
 */
class sondageController extends Controller
{
    /**
     * Lists all sondage entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sondages = $em->getRepository('sfdBundle:sondage')->findAll();

        return $this->render('sondage/index.html.twig', array(
            'sondages' => $sondages,
        ));
    }

    /**
     * Creates a new sondage entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sondage = new Sondage();
        $form = $this->createForm('sfdBundle\Form\sondageType', $sondage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sondage);
            $em->flush($sondage);

            return $this->redirectToRoute('user_show', array('id' => $sondage->getId()));
        }

        return $this->render('sondage/new.html.twig', array(
            'sondage' => $sondage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sondage entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(sondage $sondage)
    {
        $deleteForm = $this->createDeleteForm($sondage);

        return $this->render('sondage/show.html.twig', array(
            'sondage' => $sondage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sondage entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, sondage $sondage)
    {
        $deleteForm = $this->createDeleteForm($sondage);
        $editForm = $this->createForm('sfdBundle\Form\sondageType', $sondage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $sondage->getId()));
        }

        return $this->render('sondage/edit.html.twig', array(
            'sondage' => $sondage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sondage entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, sondage $sondage)
    {
        $form = $this->createDeleteForm($sondage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sondage);
            $em->flush($sondage);
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a sondage entity.
     *
     * @param sondage $sondage The sondage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(sondage $sondage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $sondage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
