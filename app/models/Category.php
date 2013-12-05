<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'titulo' => 'required',
		'descricao' => 'required'
	);

	public function news()
    {
        return $this->hasMany('News');
    }
}
