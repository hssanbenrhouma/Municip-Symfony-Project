<?php

namespace sfdBundle\Controller;

use sfdBundle\Entity\demande;
use sfdBundle\Entity\reclamation;
use sfdBundle\Entity\sondage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $currentuser = $this->get('security.token_storage')->getToken()->getUser();

        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $em = $this->getDoctrine()->getManager();

            $users = $em->getRepository('UserBundle:User')->findAll();

            return $this->render('sfdBundle:Default:adminpage.html.twig', array(
                'users' => $users,
            ));
        }
        elseif ($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {




            $em = $this->getDoctrine()->getManager();

            $s = $em->getRepository('sfdBundle:sondage')->find(1);


            return $this->render('sfdBundle:Default:index.html.twig', array(
                's' => $s,
            ));

        }
        else{

            $em = $this->getDoctrine()->getManager();

            $s = $em->getRepository('sfdBundle:sondage')->find(1);


            return $this->render('sfdBundle:Default:index.html.twig', array(
                's' => $s,
            ));        }
    }



    public function sonAction(Request $request)
    {
        $resp= $request->request->get('son');
$s=new sondage();
        $em = $this->getDoctrine()->getManager();

            $s = $em->getRepository('sfdBundle:sondage')->find(1);

if ($resp=='oui')
{
    $s->setOui($s->getOui()+1);

}
elseif ($resp=='non')
{
    $s->setNon($s->getNon()+1);

}
elseif ($resp=='any'){
    $s->setAny($s->getAny()+1);

}
        $em->flush();
            return $this->render('sfdBundle:Default:index.html.twig', array(
                's' => $s,
            ));

    }
    public function adminpageAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findAll();

        return $this->render('sfdBundle:Default:adminpage.html.twig', array(
            'users' => $users,
        ));
    }
    public function sondageAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sonds = $em->getRepository('sfdBundle:sondage')->findAll();

        return $this->render('sfdBundle:Default:sondage.html.twig', array(
            'sonds' => $sonds,
        ));
    }
    public function newsondageAction(Request $request)
    {
        $sondage = new Sondage();
        $form = $this->createForm('sfdBundle\Form\sondageType', $sondage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sondage);
            $em->flush($sondage);
            $em = $this->getDoctrine()->getManager();

            $sonds = $em->getRepository('sfdBundle:sondage')->findAll();
            return $this->redirectToRoute('sfd_sondage', array('sonds' => $sonds));
        }
        return $this->render('sfdBundle:Default:newsondage.html.twig', array(
            'sondage' => $sondage,
            'form' => $form->createView(),
        ));
    }



    public function reclamationsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recs = $em->getRepository('sfdBundle:reclamation')->findAll();

        return $this->render('sfdBundle:Default:reclamations.html.twig', array(
            'recs' => $recs,
        ));
    }
    public function demandesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reqs = $em->getRepository('sfdBundle:demande')->findAll();

        return $this->render('sfdBundle:Default:requests.html.twig', array(
            'reqs' => $reqs,
        ));
    }


    public function loginAction(Request $request)

    {
        $currentuser = $this->get('security.token_storage')->getToken()->getUser();

        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('sfdBundle:Default:adminpage.html.twig');

        }
        elseif ($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {


                return $this->render('sfdBundle:Default:index.html.twig');

        }
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('sfdBundle:Default:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError()
        ));
    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }
    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }








    public function registerAction()
    {
        return $this->render('sfdBundle:Default:registration.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('sfdBundle:Default:services.html.twig');
    }
    public function newsAction()
    {
        return $this->render('sfdBundle:Default:news.html.twig');
    }
    public function eventsAction()
    {
        return $this->render('sfdBundle:Default:events.html.twig');
    }
    public function jobsAction()
    {
        return $this->render('sfdBundle:Default:jobs.html.twig');
    }
    public function serviceAction()
    {
        return $this->render('sfdBundle:Default:services.html.twig');
    }
    public function newAction()
    {
        return $this->render('sfdBundle:Default:new.html.twig');
    }
    public function eventAction()
    {
        return $this->render('sfdBundle:Default:event.html.twig');
    }
    public function jobAction()
    {
        return $this->render('sfdBundle:Default:job.html.twig');
    }














    public function sondagedeleteAction(Request $request, sondage $son)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($son);
        $em->flush();

        return $this->redirectToRoute('sfd_sondage');
    }


    public function sondagedeleteallAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('DELETE sfdBundle:sondage *');
        $query->execute();

        return $this->redirectToRoute('sfd_sondage');
    }
    public function reclamationdeleteAction(Request $request, reclamation $rec)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($rec);
        $em->flush();

        return $this->redirectToRoute('sfd_reclamations');
    }


    public function reclamationdeleteallAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('DELETE sfdBundle:request *');
        $query->execute();

        return $this->redirectToRoute('sfd_reclamations');
    }

  public function demandedeleteAction(Request $request, demande $req)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($req);
        $em->flush();

        return $this->redirectToRoute('sfd_requests');
    }


    public function requestdeleteallAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('DELETE sfdBundle:demande *');
        $query->execute();

        return $this->redirectToRoute('sfd_requests');
    }


    public function demAction(Request $request)
    {
        $currentuser = $this->get('security.token_storage')->getToken()->getUser();



        $dem= $request->request->get('title');
        $cin= $request->request->get('cin');
        $d=new demande();
        $d->setTopic($dem);
        $d->setCin($cin);
        $d->setEmail($currentuser->getEmail());
        $d->setName($currentuser->getUsername());
        $em = $this->getDoctrine()->getManager();
        $em->persist($d);
        $em->flush($d);


        return $this->render('sfdBundle:Default:services.html.twig');

    }

    public function recAction(Request $request)
    {
        $currentuser = $this->get('security.token_storage')->getToken()->getUser();



        $t= $request->request->get('title');
        $des= $request->request->get('desc');
       $rec=new reclamation();
        $rec->setTitle($t);
        $rec->setDescription($des);
        $rec->getTitle();
        $em = $this->getDoctrine()->getManager();
        $em->persist($rec);
        $em->flush($rec);


        return $this->render('sfdBundle:Default:services.html.twig');

    }
}
