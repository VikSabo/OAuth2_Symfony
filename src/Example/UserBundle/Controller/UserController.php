<?php

namespace Example\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
	 * @Route("/addClient", name="_adduser")
	 */
	public function addclientAction()
	{
	   $clientManager = $this->get('fos_oauth_server.client_manager.default');

	   $client = $clientManager->createClient();

	   $client->setRedirectUris(array('http://localhost:8000/app_dev.php'));

	   $client->setAllowedGrantTypes(array('token', 'authorization_code'));

	   $clientManager->updateClient($client);

	   $output = sprintf("Added client with id: %s secret: %s",$client->getPublicId(),$client->getSecret());

	   // Here we would like to authorize the user witout redirection :
    	return $this->redirect($this->generateUrl('fos_oauth_server_authorize', array(
                'client_id'     => $client->getPublicId(),
                'redirect_uri'  => 'http://localhost:8000/app_dev.php',
                'response_type' => 'code'
            )));

	   //return new Response($output);
	}
}
