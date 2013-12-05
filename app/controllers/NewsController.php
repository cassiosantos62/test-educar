<?php

class NewsController extends BaseController {

	/**
	 * News Repository
	 *
	 * @var News
	 */
	protected $news;

	public function __construct(News $news, Category $category)
	{
		$this->news = $news;
		$this->category  = $category;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = $this->news->with('category')->get();		

		return View::make('news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = $this->category->lists('titulo','id');
		return View::make('news.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, News::$rules);

		if ($validation->passes())
		{
			$this->news->create($input);

			return Redirect::route('news.index');
		}

		return Redirect::route('news.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Existem erros de validação.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$news = $this->news->findOrFail($id);

		return View::make('news.show', compact('news'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$news = $this->news->find($id);
		$categories = $this->category->lists('titulo','id');

		if (is_null($news))
		{
			return Redirect::route('news.index');
		}

		return View::make('news.edit', array('news'=> $news, 'categories'=> $categories));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, News::$rules);

		if ($validation->passes())
		{
			$news = $this->news->find($id);
			$news->update($input);

			return Redirect::route('news.show', $id);
		}

		return Redirect::route('news.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'Existem erros de validação.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->news->find($id)->delete();

		return Redirect::route('news.index');
	}

}
