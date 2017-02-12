<?php

namespace Controller;

class HeaderController extends Controller
{
	public function connexionDeconnexion()
	{
		debug($_SESSION);
		if ($_SESSION['token'])
		{
			$this->show('Header/connexionDeconnexion', [ 'connect' => 'deconnexion' ]);
		}else{
			$this->show('Header/connexionDeconnexion', [ 'connect' => 'connexion' ]);
		}
	}
}
