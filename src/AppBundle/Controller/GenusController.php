<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Article;

class GenusController extends Controller
{
	//главная страница
	/**
     * @Route("/site.com")
     */
	public function DoctrineTestQuery()
    {	
		$repository = $this->getDoctrine()->getRepository('AppBundle\Entity\Article');
		$product = $repository->findAll();
		$name = array();
		for ($i = 0; $i < count($product); $i++){
			$name[] = $product[$i]->getName();
		}
		$html = $this->container->get('templating')->render(
			'my_test_twig.html.twig',
			array('navigation' => $name)
		);
		return new Response($html);
    }
	
	//категории
	/**
     * @Route("/site.com/category_name")
     */
	public function DoctrineCategories()
    {	
		$repository = $this->getDoctrine()->getRepository('AppBundle\Entity\Category');
		$category = $repository->findAll();
		$name = array();
		for ($i = 0; $i < count($category); $i++){
			$name[] = $category[$i]->getName();
		}
		$html = $this->container->get('templating')->render(
			'category_page.html.twig',
			array('navigation' => $name)
		);
		return new Response($html);
    }
	
	//получение товаров из категории
	/**
     * @Route("/site.com/category_name/{name}")
     */
	public function getArticleCategories($name)
    {	
		$repository = $this->getDoctrine()->getRepository('AppBundle\Entity\Category');
		$category = $repository->findAll();
		
		$cat_name = array();

		for ($i = 0; $i < count($category); $i++)
		{
			$cat_name[] = $category[$i]->getName();
		}
	
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
			'SELECT a FROM AppBundle:Category c, AppBundle:Article a, AppBundle:ArtCat ac 
			WHERE a.id = ac.artId 
			AND ac.catId=c.id 
			AND c.name = :name'
		)->setParameter('name', $name);
		$cat = $query->getResult();
		$art_name = array();
		
		for ($i = 0; $i < count($cat); $i++)
		{
			$art_name[] = $cat[$i]->getName();
		}
		
		$html = $this->container->get('templating')->render(
			'article_test.html.twig',
			array('besobration' => $art_name, 'navigation'=>$cat_name)
		);
		return new Response($html);
    }
	
}