<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemsCreateRequest;
use App\Item;
use App\Photo;
use Illuminate\Http\Request;

class AdminItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();


       return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {


        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemsCreateRequest $request)
    {

        $input = $request->all();


        if($file = $request->file('photo_id')){

            $name = $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

       Item::create($input);

        return redirect('/admin/items');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);


        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);


        return view('admin.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemsCreateRequest $request, $id)
    {
        $item = Item::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id')) {    // če imamo datoteko s sliko,

            $name = time() . $file->getClientOriginalName();  // ji dodamo čas pred pravo ime slike

            $file->move('images', $name);                      // in sliko premaknemo v folder Images

            $photo = Photo::create(['file' =>$name ]);     // V tablelo photo shranimo kot ime

            $input['photo_id'] = $photo->id;
        }

        $item->update($input);

        return redirect('/admin/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id); // tukaj najprej najdemo produkt

//        unlink(public_path() . $item->photo->file); //potem zbrišemo sliko, ki je vezana nanj

        $item->delete(); //potem še zbrišemo produkt

        //Session::flash('deleted_user', 'The User was deleted');

        return redirect('/admin/items');
    }

    public function product($id){

        $item = Item::findOrFail($id);



        return view('item', compact('item'));
    }

    public function products(){

        $products = Item::all();


        return view('item', compact('products'));
    }

    // izdelek iščemo po SLUG in ne več po ID-ju
    public function izdelek($slug){

        $products = Item::all();
        $product = Item::findBySlugOrFail($slug);


        return view('items.product_info', compact('products', 'product'));
    }






}
