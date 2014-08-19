<?php

namespace Hr\TimeManagmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AbsenceController
 *
 * @package Hr\TimeManagmentBundle\Controller
 */
class AbsenceController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository('HrTimeManagmentBundle:Absence');
        /** @noinspection PhpUndefinedMethodInspection */
        $absences = $repository->findByItemStatus('1');
        return $this->render('HrTimeManagmentBundle:Absence:list.html.twig', array('absences' => $absences));
    }
}
