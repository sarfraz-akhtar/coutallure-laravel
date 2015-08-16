<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ForumsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $rules = [
		'name' => ['required', 'min:3','unique:forums'],

	];
	public function index()
	{
		$forums = Forum::all();
		return view('Forum.index', compact('forums'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Forum.create');
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
		Forum::create( $input );

		return Redirect::route('Forum.index')->with('message', 'Forum created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Forum $forum)
	{
		return view('Forum.show', compact('forum'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function edit(Forum $forum)
	{
		return view('Forum.edit', compact('forum'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Forum $forum, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$forum->update($input);

		return Redirect::route('Forum.show', $forum->id)->with('message', 'Forum updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Forum $forum)
	{
		$forum->delete();

		return Redirect::route('Forum.index')->with('message', 'Forum deleted.');
	}

}
