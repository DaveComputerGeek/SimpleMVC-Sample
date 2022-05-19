<?php

class MainController extends DaveComputerGeek\SimpleMVC\Controller
{
    public function __construct()
    {
        $views_dir_path = __DIR__ . "/../views";

        parent::__construct( $views_dir_path );
    }

    public function home()
    {
        $data = array
        (
            "page_title" => "Home Page",
            "current_page" => "home"
        );

        $this->view( 'home', $data );
    }

    public function about()
    {
        $data = array
        (
            "page_title" => "About Page",
            "current_page" => "about"
        );

        $this->view( 'about', $data );
    }

    public function contact()
    {
        $data = array
        (
            "page_title" => "Contact Page",
            "current_page" => "contact"
        );

        $this->view( 'contact', $data );
    }

	public function notfound()
	{
		http_response_code( 404 );
		
		$data = array(
			"page_title" => "Not Found (404)",
			"current_page" => "notfound"
		);
		
		$this->view( 'notfound', $data );
	}
}