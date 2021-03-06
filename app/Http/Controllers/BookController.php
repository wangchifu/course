<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mandarin_books = Book::where('subject','mandarin')
            ->where('disable',null)
            ->get();
        $dialects_books = Book::where('subject','dialects')
            ->where('disable',null)
            ->get();
        $english_books = Book::where('subject','english')
            ->where('disable',null)
            ->get();
        $mathematics_books = Book::where('subject','mathematics')
            ->where('disable',null)
            ->get();
        $life_curriculum_books = Book::where('subject','life_curriculum')
            ->where('disable',null)
            ->get();
        $social_studies_books = Book::where('subject','social_studies')
            ->where('disable',null)
            ->get();
        $science_technology_books = Book::where('subject','science_technology')
            ->where('disable',null)
            ->get();
        $science_books = Book::where('subject','science')
            ->where('disable',null)
            ->get();
        $arts_humanities_books = Book::where('subject','arts_humanities')
            ->where('disable',null)
            ->get();
        $integrative_activities_books = Book::where('subject','integrative_activities')
            ->where('disable',null)
            ->get();
        $technology_books = Book::where('subject','technology')
            ->where('disable',null)
            ->get();
        $health_physical_books = Book::where('subject','health_physical')
            ->where('disable',null)
            ->get();

        $data = [
            'mandarin_books'=>$mandarin_books,
            'dialects_books'=>$dialects_books,
            'english_books'=>$english_books,
            'mathematics_books'=>$mathematics_books,
            'life_curriculum_books'=>$life_curriculum_books,
            'social_studies_books'=>$social_studies_books,
            'science_technology_books'=>$science_technology_books,
            'science_books'=>$science_books,
            'arts_humanities_books'=>$arts_humanities_books,
            'integrative_activities_books'=>$integrative_activities_books,
            'technology_books'=>$technology_books,
            'health_physical_books'=>$health_physical_books,
        ];
        return view('books.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $att = $request->all();
        Book::create($att);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $att['disable'] =1;
        Book::where('id',$request->input('id'))->update($att);

        return redirect()->route('books.index');
    }
}
