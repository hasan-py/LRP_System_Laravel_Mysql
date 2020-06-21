<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
	public function data(){
		return [
			[
				'post_title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, totam.',
				'author'=>'Hasan'
			],
			[
				'post_title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora deserunt incidunt maiores!',
				'author'=>'Emon'
			],

		];
	}
}
