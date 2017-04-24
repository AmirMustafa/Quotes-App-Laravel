<?php

namespace App\Http\Controllers;
use DB;
use Session;
//use Request;
use Illuminate\Http\Request;            

use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /*public function login(){
    	//echo 'dfsd';die;
   // if(DB::connection()->getDatabaseName())
   //{
   	$value=DB::table('users')->select('users.*')->get();
   	
   // Session::set('Name', 'Amir');

   //}1
   //else{
   	//echo 'no connect';die;
   //}
    	$value=DB::table('users')->select('users.*')->get();
    	//echo'<pre>';print_r($value);die;
    	$data['abcd']='xyz';
    	$data['dfe']='werrer';
    	return view('login',compact('value'));
    } */
   
   public function signup (Request $request) {
   if ($request->isMethod('post')) {
    /*echo 'fdsf';die;*/
    /* echo '<pre>';print_r($request->name);
     echo '<pre>';print_r($request->email);
     echo '<pre>';print_r($request->password);
     echo '<pre>';print_r($request->gender);
     echo '<pre>';print_r($request->account); die;
*/
     $data['name']=$request->name;
     $data['email']=$request->email;
     $data['password']=$request->password;
     $data['gender']= $request->gender;
     $data['account']=$request->account;
     //$data['gender']=$request->gender;
     $result=DB::table('users')->insert($data);
    //   echo $result;die;
}
   
      return view('signup');
   }

   public function login (Request $request) {
    if($request->isMethod('post')) {
     /* echo '<pre>';print_r($request->email);
      echo '<pre>';print_r($request->password);die;*/

      $email = $request->email;
      $password = $request->password;

      $value=DB::table('users')->select('users.id')->where(['email' => $email, 'password' => $password])->first();

     /* echo "<pre>";
      print_r($value);die;*/

     /* if((count($value)) > 0) {
        echo "Homepage";
      }
      else {
         return view('login');
      }*/

       if((count($value)) > 0) {
        Session::set('Name',  $email);    //storing value from login form to variable to display in home page


        return Redirect :: to('home');
      }
      else {
         return view('login');
      }


    }
    return view('login');
   }

   /*public function edit($id=null) {
    // echo '<pre>';print_r($id);die;

    //$value=DB::table('users')->select('users.*')->where(['id' => $id, 'name' => 'retretre'])->first();
    $value=DB::table('users')->select('users.*')->where('id' ,'=' ,$id)->first();
    return view('edit',compact('value'));
   }*/

   public function edit($id=null) {
    /*echo '<pre>';print_r($id);die;*/    //checking specific id reception through query string                                   home.blade.php line 22

    $value = DB :: table('users')->select('users.*')->where('id', '=', $id)->first();
    return view('edit', compact('value'));


   }


//     public function update (Request $request) {
//      // echo '<pre>';print_r($request->all());die;
//    if ($request->isMethod('post')) {
//   $data=$request->all();
//  // echo '<pre>';print_r($data);die;
//   $updateVal=array('name' => $data['name'],'email'=>$data['email']);

//          /*$result= DB::table('users') ->where('id','=' ,$data['id'])
//             ->update(['name' => $data['name']]);*/
//             $result= DB::table('users') ->where('id','=' ,$data['id'])
//             ->update($updateVal);
//             echo $result;die;
     
// }
// }

    public function update (Request $request) {
      /*echo '<pre>';print_r($request->all());die;*/

      if($request->isMethod('post')) {
        $data=$request->all();
        //echo '<pre>';print_r($request->all());die;

        /*$updateVal = array('name' => $data['name'], 'account' => $data['account'],'email' => $data['email'],'password' => $data['password'],'gender' => $data['gender']);*/
          
          $updateVal = array('name' => $data['name'], 'account' => $data['account'],'email' => $data['email'],'password' => $data['password']);
        //echo '<pre>';print_r($updateVal);die;

        $result = DB :: table('users')->where('id', '=', $data['id'])
                                      ->update($updateVal);
       // echo $result; die;

        if($result) {
          return Redirect :: to('home');
        }

      }
}

public function home (Request $request) {
  if(!empty(Session :: get('Name'))){
   $data = DB :: table('users')->select('users.*')->get();
        /*echo "<pre>";
        print_r($data); die;*/
  

  return view('home',compact('data'));
}
else
{
return Redirect :: to('login'); 
}
}


public function delete($id = null) {
  if(!empty($id)) {
    $result = DB :: table('users')->delete($id);

     if($result) {
          return Redirect :: to('home');
        }
  }
}

public function logout() {
  Session :: flush();
   return Redirect :: to('login');
}
}

