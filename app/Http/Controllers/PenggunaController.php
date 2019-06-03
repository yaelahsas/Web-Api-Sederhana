<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
  public  function index(){
      $query =  Pengguna::all();
      $result = json_encode(array('pengguna' => $query));
      return $result;
    }
    public function getId($id)
    {
      return Pengguna::find($id);
    }

    public function create(request $request)
    {
      $pengguna = new Pengguna;
      $pengguna->nama = $request->nama;
     // $pengguna->email = $request->email;
      //$pengguna->password = $request->password;
      $pengguna->save();
      return "Data Berhasil Di Buat";
    }

    public function update(request $request, $id)
    {
      $nama = $request->nama;
      $email = $request->email;
      $password = $request->password;

      $pengguna = Pengguna::find($id);

      $pengguna->nama = $nama;
      $pengguna->email = $email;
      $pengguna->password = $password;
      $pengguna->save();
      return "Data Berhasil Di Ganti";
    }

    public function delete($id)
    {
      $pengguna = Pengguna::find($id);
      $pengguna->delete();
      return "Berhasil Di Hapus!";
    }


}
