<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestCtrl
{
	public function index()
	{
		var_dump("texte de test");
		die();
	}

	public function test()
	{
		$request = Request::createFromGlobals();
	
		$nb = $request->query->get('nb', 0);
		//dd("texte de test numero $nb");
		
		return new Response("texte de reponse $nb");
	}
}