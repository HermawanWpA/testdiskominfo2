<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;
use App\Http\Requests\MapsRequest;

class MapsController extends Controller
{
     
       public function index(Request $request)
    {

          $data = Maps::all();
    

        // dd($data);
        return view('maps.index', [
            'data' => $data,
        ]);
    }

     public function create()
    {
        return view('maps.create');
    }

     public function store(MapsRequest $request)
    {
        $data = $request->all();

        Maps::create($data);
        return redirect()->route('maps')->with('success', 'Data telah tersimpan');
    }

        public function edit($id)
    {
        $item = Maps::findOrFail($id);
        // dd($item);
        return view('maps.edit', [
            'item' => $item
        ]);
    }

     public function update(MapsRequest $request, $id)
    {
        $data = $request->all();

        $item = Maps::findOrFail($id);

        $item->update($data);
        return redirect()->route('maps')->with('success','Data berhasil dirubah');
    }

    public function destroy($id)
    {
        $item = Maps::findOrFail($id);
        $item->delete($id);

        return redirect()->route('maps')->with('success', 'Data telah di hapus');
    }
        
}
