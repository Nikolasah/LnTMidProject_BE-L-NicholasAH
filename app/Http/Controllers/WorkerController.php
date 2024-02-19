<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;


class WorkerController extends Controller
{
    //
    public function AddWorker(){

        
        return view('addWorker');
    }
    

    public function StoreWorker(Request $req) {

        Worker::create([
            'name' => $req->nama,
            'age' => $req->umur,
            'adress' => $req->alamat,
            'telephone' => $req->telepon,
        ]);
        return redirect('/');
    }

    public function ViewAllWorker() {
            $worker = Worker::all();

            return view('welcome')->with('worker_worker', $worker);
        
    }
    

    public function ViewWorker($id){
        $worker = Worker::findOrFail($id);

        return view('WorkerDetail')->with('worker', $worker);
    }

    public function viewUpdateWorker($id){
        $worker = Worker::findOrFail($id);

        return view('updateWorker')->with('worker', $worker);
    }

    public function saveUpdate($id, Request $req){
        $worker = Worker::findOrFail($id)->update([
            'name' => $req->nama,
            'age' => $req->umur,
            'adress' => $req->alamat,
            'telephone' => $req->telepon,
        ]);
        return redirect('/');
    }

    public function deleteWorker($id){
        Worker::destroy($id);

        return redirect('/');
    }

}
