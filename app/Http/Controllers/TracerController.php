<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\TracerAnswer;
use App\Models\TracerUser;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerController extends Controller
{
    public function login()
    {
        return view("tracer_study/login");
    }
    public function loginProcess(Request $request){
        // $credentials =  $request->validate([
        //     'nisn' => 'required|min:4|max:4',
        //     'nama' => 'required',
        //     'email' => 'required|unique:users|email:dns',
        //     'nomer' => 'required|unique:users',
        //     'program_study' => 'required',
        //     'tahun_lulus' => 'required'
        // ]);

        // if (Auth::check()){
        //     return redirect()->route('login')->withWarning('maaf anda sudah mengisi');
        // }

        // $user =  TracerUser::save($credentials);

        return redirect()->route('soal1-process',[' nama => $credentials->nama'])->withSuccess('login berhasil');
    }


    //soal 1
    public function viewSoal1(){


        return view('tracer_study/page');
    }

    public function soal1Process(Request $request){
      
        return redirect()->route('soal2');
        
        
        
    }

    //soal 2
    public function viewSoal2(){

        return view('tracer_study/soal2');
    }

    public function soal2Process(Request $request){
      
        return redirect()->route('soal3');
        
     
    }

        //soal 3
        public function viewSoal3(){


            return view('tracer_study/soal3');
        }
    
        public function soal3Process(Request $request){
        
            return redirect()->route('soal4');
            
            
            
        }

        //soal4

    public function viewSoal4(){


        return view('tracer_study/soal4');
    }

    public function soal4Process(Request $request){
       
        return redirect()->route('soal5')->withErrors("data gagal");
        
        
        
    }

    //soal5
        
        public function viewSoal5(){


            return view('tracer_study/soal5');
        }
    
        public function soal5Process(Request $request){
          
            return redirect()->route('soal6')->withErrors("data gagal");
            
            
            
        }

            //soal 6

    public function viewSoal6(){


        return view('tracer_study/soal6');
    }

    public function soal6Process(Request $request){
      
        return redirect()->route('soal7')->withErrors("data gagal");
        
        
        
    }



        //soal 7
        public function viewSoal7(){


            return view('tracer_study/soal7');
        }
    
        public function soal7Process(Request $request){
           
            return redirect()->route('finish')->withErrors("data gagal");
            
            
            
        }
        public function finish(){


            return view('tracer_study/page-success');
        }
}
