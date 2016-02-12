<?php 
	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Contact.php';

	session_start();
	if(empty($_SESSION['list_of_contacts'])){
		$_SESSION['list_of_contacts'] = array();
	}

	$app = new Silex\Application();
	$app->register(new Silex\Provider\TwigServiceProvider, array(
		'twig.path'=> __DIR__.'/../views'
	));

	$app->get('/', function() use ($app) {
		return $app['twig']->render('address_book.html.twig', array('contacts' => Contact::getAll()));
	});

	$app->get('/create_contact', function() use ($app) {
		return $app['twig']->render('create_contact.html.twig');
	});

	$app->post('/add_contact', function() use ($app) {
		$new_contact = new Contact($_POST['first_name'], $_POST['last_name'], $_POST['street'], $_POST['city'], $_POST['zip'], $_POST['phone']);
		$new_contact->save();

		return $app['twig']->render('add_contact.html.twig', array('newcontacts' => $new_contact));
	});

	$app->get('/delete_contacts', function() use ($app) {
		Contact::deleteAll();
		return $app['twig']->render('delete_contacts.html.twig');
	});
	return $app;
?>