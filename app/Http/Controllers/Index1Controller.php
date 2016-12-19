<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Speciality;
use App\Menus;
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
     $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
     $sideb=Speciality::select(['denumire'])->get();
     return view('events')->with([     
	                                'articles'=>$article,'sidebar'=>$sidebar,'sideb'=>$sideb]);
      
   }
   public function showarticle($id){
       $articl=Article::select(['id','title','content','author','description','date','image','views','tags'])->where('id',$id)->first();
      
      $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
     $sideb=Speciality::select(['denumire'])->get();
       
    
       return view('more')->with(['article'=>$articl,'sidebar'=>$sidebar,'sideb'=>$sideb]);
       
   }
   
   public function showspecialities($id){
       $special=Speciality::select(['id','content'])->where('id',$id)->first();
       //dump($articl);
       
       return view('specialities')->with(['specialit'=>$special,]);
   }
   public function showmenu(){
       $menu=Menus::select(['menulist'])->get();
       //dump($articl);
       return view('welcome')->with(['menu'=>$menu]);
   }
 
       
   
   
   
}
