<?php

namespace sprint2\RealEstate\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;

class GrapheController extends Controller{

 

 public function chartLineAction(){
$session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
 // Chart
     $em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT u.role,u.mail
    FROM sprint2RealEstateAdminBundle:Utilisateur u'
);

$u = $query->getResult();

foreach ($u as $val)
        {
            $data[] = array($val['mail'],(int) $val['role']);
        }
        
 $series = array(

 array("name" => "Role", "data" => $data)
 
 );

 $ob = new Highchart();

 $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe

 $ob->title->text('Niveau des membres');

 $ob->xAxis->title(array('text' => "Membres"));

 $ob->yAxis->title(array('text' => "Roles"));

 $ob->series($series);
 $listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
            $countmail4 = count($listofmailt4);
            $Image = $this->get_gravatar($session->get('compte')->getMail());
 return $this->render('sprint2RealEstateAdminBundle:Pages:LineChart.html.twig', array(

 'chart' => $ob, 'image'=>$Image,
                        'countmail4'=>$countmail4));

}else{
    
}
 }


public function chartPieAction(){
$session = $this->getRequest()->getSession();
        $hasCompte = $session->has('compte');
        if($hasCompte && $session->get('type')=="Admin"){
$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Evaluation des offres par gérant');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));
    $em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT o.note,u.nom
    FROM sprint2RealEstateAdminBundle:Offre o ,sprint2RealEstateAdminBundle:Utilisateur u where u.id=o.idGerant Group By u.nom'
);

$u = $query->getResult();

foreach ($u as $val)
        {
            $data[] = array($val['nom'],(int) $val['note']);
        }



$ob->series(array(array('type' => 'pie','name' => 'Note', 'data' => $data)));
$listofmailt4 = $this->getDoctrine()->getRepository('sprint2RealEstateAdminBundle:Boitemessages')->findBy(array('idExpediteur'=>"0", 'vu'=>"0"));
            $countmail4 = count($listofmailt4);
            $Image = $this->get_gravatar($session->get('compte')->getMail());

return $this->render('sprint2RealEstateAdminBundle:Pages:PieChart.html.twig', array(

 'chart' => $ob, 'image'=>$Image,
                        'countmail4'=>$countmail4));

}  else {
    
}}
function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
    return $url;
    }
}
