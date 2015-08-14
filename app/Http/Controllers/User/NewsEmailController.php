<?php
namespace App\Http\Controllers\User;
//use App\Us
use App\Http\Controllers\Controller;
use App\Models\NewsEmail;
class NewsEmailController extends Controller {

    /**
     * The layout that should be used for responses.
     */
//    protected $layout = 'layouts.master';

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// get POST data
		$input = Input::all();

		// set validation rules
		$rules = array(
			'email' => 'required',
			
		);

		// validate input
		$validation = Validator::make($input, $rules);

		// if validation fails, return the user to the form w/ validation errors
		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		} else {
			// create new Post instance
			$post = NewsEmail::create(array('email' => $input['title']));


			

			

			// redirect to newly created post page
			return $post->id;
		}
	}



}















