<?php

namespace App\Http\Controllers\Admin;

use App\Work;
use App\CategoryWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('id', 'DESC')->paginate(12);

        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryWork::orderBy('name' , 'ASC')->get();
        return view('admin.works.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $work = Work::create($request->all());

        if($request->file('file')){

            $work->file =  $request->file('file')->store('public');

            $work->save();
        }

        return redirect()->route('works.index')->with('info', 'Work created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Work::findOrFail($id);

        return view('admin.works.show' , compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::findOrFail($id);
        $categories = CategoryWork::orderBy('name' , 'ASC')->get();
        return view('admin.works.edit', compact('work', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = Work::findOrFail($id);
        $work->fill($request->all())->save();
        if($request->file('file')){
            $work->file =  $request->file('file')->store('public');
            $work->save();
        }
        return redirect()->route('works.index')
            ->with('info', 'Work updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::findOrFail($id)->delete();
        return back()->with('info', 'Work eliminated succesfully');
    }
}
