<?php

class HomeController extends BaseController {

	public $news;

	public function __construct(News $news){
		$this->news = $news;
	}

	public function index()
	{
		$news = $this->news->all();
		return View::make('home.index', compact('news'));
	}

}