<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wifi;
use App\Models\Maps;
use App\Http\Requests\WifiRequest;

class WifiController extends Controller
{
       public function index(Request $request)
    {

          $data = Wifi::with('maps')->get();

        // dd($data);
        return view('wifi.index', [
            'data' => $data,
        ]);
    }

      public function create()
    {
        $data = Maps::all();
        return view('wifi.create',[
            'data' => $data
        ]);
    }

     public function store(WifiRequest $request)
    {
        $data = $request->all();

        Wifi::create($data);
        return redirect()->route('wifi')->with('success', 'Data telah tersimpan');
    }

       public function edit($id)
    {
        $data = Maps::all();
        $item = Wifi::findOrFail($id);
        // dd($item);
        return view('wifi.edit', [
            'item' => $item,
            'data' => $data
        ]);
    }

     public function update(WifiRequest $request, $id)
    {
        $data = $request->all();

        $item = Wifi::findOrFail($id);

        $item->update($data);
        return redirect()->route('wifi')->with('success','Data berhasil dirubah');
    }

    public function destroy($id)
    {
        $item = Wifi::findOrFail($id);
        $item->delete($id);

        return redirect()->route('wifi')->with('success', 'Data telah di hapus');
    }

}
