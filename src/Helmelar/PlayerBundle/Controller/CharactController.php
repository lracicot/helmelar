<?php

namespace Helmelar\PlayerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Helmelar\PlayerBundle\Entity\Charact;
use Helmelar\PlayerBundle\Form\CharactType;

/**
 * Charact controller.
 *
 */
class CharactController extends Controller
{
    /**
     * Lists all Charact entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelmelarPlayerBundle:Charact')->findAll();

        return $this->render('HelmelarPlayerBundle:Charact:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Charact entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelmelarPlayerBundle:Charact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Charact entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelmelarPlayerBundle:Charact:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Charact entity.
     *
     */
    public function newAction()
    {
        $entity = new Charact();
        $form   = $this->createForm(new CharactType(), $entity);

        return $this->render('HelmelarPlayerBundle:Charact:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Charact entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Charact();
        $form = $this->createForm(new CharactType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('charact_show', array('id' => $entity->getId())));
        }

        return $this->render('HelmelarPlayerBundle:Charact:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Charact entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelmelarPlayerBundle:Charact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Charact entity.');
        }

        $editForm = $this->createForm(new CharactType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelmelarPlayerBundle:Charact:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Charact entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelmelarPlayerBundle:Charact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Charact entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CharactType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('charact_edit', array('id' => $id)));
        }

        return $this->render('HelmelarPlayerBundle:Charact:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Charact entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelmelarPlayerBundle:Charact')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Charact entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('charact'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
