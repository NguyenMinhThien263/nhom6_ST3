<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Film;
use App\Model\Nav_Menu;
use App\Model\Single_Movie;
use App\Model\Nation;
use App\Model\Series_Movie;
use App\Model\Theater_Movie;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all informations of nav
        $nav = Nav_Menu::all(); //nav.
        $single = Single_Movie::all(); //single
        $category = Category::all(); //category
        $nation = Nation::all(); //nation
        $theater = Theater_Movie::all(); //theater
        $series = Series_Movie::all(); //series
        //list movies-hot
        $limit = 8; // limit
        $type = 1; //single 1: single, 2:series
        $name = 'type_movie';
        $hot = $this->orderBy($limit);
        //home
        //-content
        $fsingle = $this->orderByWhere($name, $type, $limit);
        $type = 2; //change value type
        $fseries = $this->orderByWhere($name, $type, $limit);
        $limit = 8; //change value of limit
        $contentAll = $this->orderBy($limit);
        $contentSingle = $this->orderByWhere($name, $type, $limit);
        $type = 2; //
        $contentSeries = $this->orderByWhere($name, $type, $limit);
        //category
        $limit = 4;
        $name = 'category_id';
        $type = 1; //1: thuyet minh, 9: action
        $category_tm =  $this->orderByWhere($name, $type, $limit);
        $type = 9; //
        $category_ac =  $this->orderByWhere($name, $type, $limit);
        //sidebar //1: single, 2: series, 3: theater
        $limit = 10; // limit
        $name = 'type_movie';
        $sidebar = array();
        for ($i = 1; $i < 4; $i++) {
            $sidebar[$i] =  $this->orderByWhere($name, $i, $limit);
        }
        return view('contents.home', [
            'navs' => $nav,
            'singles' => $single,
            'categories' => $category,
            'nations' => $nation,
            'theaters' => $theater,
            'series' => $series,
            'hots' => $hot,
            'fsingles' => $fsingle,
            'fseries' => $fseries,
            'contAll' => $contentAll,
            'contSingle' => $contentSingle,
            'contSeries' => $contentSeries,
            'cateTM' => $category_tm, // category thuyet minh
            'cateAC' => $category_ac, //category action
            'singleSidebar' => $sidebar[1],
            'seriesSidebar' => $sidebar[2],
            'theaterSidebar' => $sidebar[3],
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Film::where('id', $id)
            ->first();
        $detail_nation = Nation::where('id', $detail->nation_id)
            ->first();
        $nav = Nav_Menu::all(); //nav.
        $single = Single_Movie::all(); //single
        $category = Category::all(); //category
        $nation = Nation::all(); //nation
        $theater = Theater_Movie::all(); //theater
        $series = Series_Movie::all(); //series
        $hot = $this->orderBy(12);
        //--
        $limit = 10; // limit
        $name = 'type_movie';
        $sidebar = array();
        for ($i = 1; $i < 4; $i++) {
            $sidebar[$i] =  $this->orderByWhere($name, $i, $limit);
        }
        return view('contents.detail', [
            'navs' => $nav,
            'singles' => $single,
            'categories' => $category,
            'nations' => $nation,
            'theaters' => $theater,
            'series' => $series,
            'hots' => $hot,
            'singleSidebar' => $sidebar[1],
            'seriesSidebar' => $sidebar[2],
            'theaterSidebar' => $sidebar[3],
            'detail' => $detail,
            'detail_nation' => $detail_nation,
        ]);
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
    public function destroy($id)
    {
        //
    }


    //--------------------------------------------------------------------------------
    private function orderBy($limit)
    {
        return Film::orderBy('num_view', 'desc')
            ->limit($limit)
            ->get();
    }

    private function orderByWhere($name, $type, $limit)
    {
        return Film::where($name, $type)
            ->orderBy('num_view', 'desc')
            ->limit($limit)
            ->get();
    }
}
