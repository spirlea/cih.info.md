<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Speciality;
class Index1Controller extends Controller
{
   public function index(){
	   $message=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();
           $specialt=Speciality::select(['denumire','nr'])->get();
           $num=0;
           foreach ($specialt as $total){ $num=$total->nr+$num;   }	  
//dump($num);
	   return view('index')->with(['articles'=>$message,'specialit'=>$specialt,'numar'=>$num,]);
	   
   }
   public function show(){
       
     $article=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();  
        return view('events')->with([     
	                                'articles'=>$article,]);
       
   }
   public function showarticle($id){
       $articl=Article::select(['id','title','content','author','description','date','image','views','tags'])->where('id',$id)->first();
       //dump($articl);
       return view('more')->with(['article'=>$articl,]);
   }
   
   
   
}
