<?php

namespace Helmelar\PlayerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Helmelar\PlayerBundle\Entity\Guild;
use Helmelar\PlayerBundle\Form\GuildType;

/**
 * Guild controller.
 *
 */
class GuildController extends Controller
{
    /**
     * Lists all Guild entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HelmelarPlayerBundle:Guild')->findAll();

        return $this->render('HelmelarPlayerBundle:Guild:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Guild entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelmelarPlayerBundle:Guild')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guild entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelmelarPlayerBundle:Guild:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Guild entity.
     *
     */
    public function newAction()
    {
        $entity = new Guild();
        $form   = $this->createForm(new GuildType(), $entity);

        return $this->render('HelmelarPlayerBundle:Guild:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Guild entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Guild();
        $form = $this->createForm(new GuildType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('guild_show', array('id' => $entity->getId())));
        }

        return $this->render('HelmelarPlayerBundle:Guild:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Guild entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelmelarPlayerBundle:Guild')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guild entity.');
        }

        $editForm = $this->createForm(new GuildType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HelmelarPlayerBundle:Guild:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Guild entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HelmelarPlayerBundle:Guild')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guild entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new GuildType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('guild_edit', array('id' => $id)));
        }

        return $this->render('HelmelarPlayerBundle:Guild:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Guild entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HelmelarPlayerBundle:Guild')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Guild entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('guild'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
