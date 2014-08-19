<?php

namespace Hr\EmployeeBundle\Controller;

use Hr\EmployeeBundle\Entity\Employee;
use Hr\EmployeeBundle\Form\Type\EmployeeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class EmployeeController
 *
 * @package Hr\EmployeeBundle\Controller
 */
class EmployeeController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository('HrEmployeeBundle:Employee');
        /** @noinspection PhpUndefinedMethodInspection */
        $employees = $repository->findByItemStatus('1');
        return $this->render('HrEmployeeBundle:Employee:list.html.twig', array('employees' => $employees));
    }


    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addAction(Request $request)
    {
        $employee = new Employee();
        $employee->setItemStatus(1);

        $form = $this->createForm(new EmployeeType(), $employee);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();
            return $this->redirect($this->generateUrl('hr_employee_list'));
        }

        return $this->render('HrEmployeeBundle:Employee:add.html.twig', array('form' => $form->createView()));
    }
}
