<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ForumPostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $rules = [
		'name' => ['required', 'min:3'],

		'description' => ['required'],
	];
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Forum.post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);

		$input = Input::all();
//		unset($input['_token']);
		$forum_post = ForumPost::create( $input );
//		Redirect::action('UserController@profile', array(1));

		return Redirect::action('ForumPostController@show',array($forum_post))->with('message', 'Forum created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(ForumPost $post)
	{
		return view('Forum.post.show', compact('forum_post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(ForumPost $forum_post)
	{
		return view('Forum.post.edit', compact('forum_post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ForumPost $forum_post, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$forum_post->update($input);

		return Redirect::route('Forum.show', $forum_post->id)->with('message', 'Forum Post updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(ForumPost $forum_post)
	{
		$forum_post->delete();

		return Redirect::route('Forum.post.index')->with('message', 'Forum deleted.');
	}
	public function upload() {
		if(Input::hasFile('file')) {
			//upload an image to the /img/tmp directory and return the filepath.
			$file = Input::file('file');
			$tmpFilePath = '/img/tmp/';
			$tmpFileName = time() . '-' . $file->getClientOriginalName();
			$file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
			$path = $tmpFilePath . $tmpFileName;
			return response()->json(array('path'=> $path), 200);
		} else {
			return response()->json(false, 200);
		}
	}

}
