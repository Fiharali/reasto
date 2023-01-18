<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reserva;
use App\Models\Chefs;

class AdminController extends Controller
{
////////////////////////////////////////////////////////////
    public function users(){

        $user=user::all();
        return view('admin.users')->with([
            'users' =>$user
        ]);

    }

    public function deleteuser($id){

        $user=user::find($id);
        $user->delete();
        session()->flash('message', ' Deleted successfully');
        return redirect()->back();
    }
/////////////////////////////////////////////////////////////////////////
    public function food(){
        $food=food::all();
        return view('admin.food',['food'=>$food]);
    }


    public function uploadfood( Request $request){
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required'
          ]);
        $food = new food;
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('foodimage',$imagename);
        $food->image=$imagename;
        $food->price=$request->price;
        $food->title=$request->title;
        $food->description=$request->description;
        $food->save();
        session()->flash('message', 'It has been added successfully');
        return redirect()->back();
    }
    public function deletefood($id){
        $food=food::find($id);
        $food->delete();
        session()->flash('message', ' Deleted successfully');
        return redirect()->back();
    }
    public function updatefood($id){
        $food=food::find($id);
        return view('admin.updatefood',['food'=>$food]);
    }
    public function update(  Request $request , $id){
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
          ]);
        $food=food::find($id);
        $image=$request->image;
        if ($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('foodimage',$imagename);
            $chef->image=$imagename;
         }
        $food->price=$request->price;
        $food->title=$request->title;
        $food->description=$request->description;
        $food->save();
        session()->flash('message', ' The update has been completed successfully');
        return redirect()->back();
    }
////////////////////////////////////////////////////////////////////////////////////
    public function reservation(){
        $reserva=reserva::all();
        return view('admin.reservation',['reserva'=>$reserva]);
    }
    public function reserva( Request $request){

      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'date' => 'required',
        'guest' => 'required',
        'time' => 'required'
      ]);
        $reserva = new reserva;
        $reserva->name=$request->name;
        $reserva->email=$request->email;
        $reserva->phone=$request->phone;
        $reserva->guest=$request->guest;
        $reserva->date=$request->date;
        $reserva->time=$request->time;
        $reserva->message=$request->message;
        $reserva->save();
        session()->flash('message', ' Your reservation has been made successfully');
        return redirect('redirects');
    }
////////////////////////////////////////////////////////////////////////////////////
    public function chefs(){
        $chef=chefs::all();
        return view('admin.adminChefs',['chef'=>$chef]);
    }
    public function chefshow(Request $request){
      $request->validate([
        'name' => 'required',
        'spicialty' => 'required',
        'image' => 'required'
      ]);
       $chef = new chefs;
       $image=$request->image;
       $imagename = time().'.'.$image->getClientOriginalExtension();
       $image->move('chefimage',$imagename);
       $chef->image=$imagename;
       $chef->name=$request->name;
       $chef->specialty=$request->spicialty;
       $chef->save();
       session()->flash('message', 'It has been added successfully');
       return redirect()->back();
    }
    public function updatechef(  Request $request , $id){
        $chef=chefs::find($id);
        return view('admin.updatechef',['chef'=>$chef]);
    }
    public function updatefoodchef(  Request $request , $id){
        $request->validate([
            'name' => 'required',
            'spicialty' => 'required'
          ]);
        $chef=chefs::find($id);
        $image=$request->image;
     if ($image) {
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('chefimage',$imagename);
        $chef->image=$imagename;
     }
        $chef->name=$request->name;
        $chef->specialty=$request->spicialty;
        $chef->save();
        session()->flash('message', ' The update has been completed successfully');
        return redirect()->back();
    }
    public function deletechef(  $id){
        $chef=chefs::find($id);
        $chef->delete();
        session()->flash('message', ' Deleted successfully');
        return redirect()->back();
    }


}
 //
            // // §§§§§§§§§§§§§-----AUTH -----§§§§§§§§§§§§§§§§
        // $food=food::all();
        // $chefs=chefs::all();
        // if (!Auth::User()) {
        //     return view('home',
        //     [
        //         'food'=>$food,
        //         'chefs'=>$chefs
        //     ]
        //     );
        // }
        // //////////////////////////////////////////
        // $usertype = Auth::user()->usertype;
        // if ($usertype == '0') {
        //     return view('home',
        //     [
        //         'food'=>$food,
        //         'chefs'=>$chefs
        //     ]
        //     );
        // }
       // // §§§§§§§§§§§§§§-----AUTH -----§§§§§§§§§§§§§§§

