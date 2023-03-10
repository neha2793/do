<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use Stripe;
class Main extends BaseController{
    
    public function __construct(){
         $session = session();
    }
    
    public function index(){

        $data = [];
        
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-slime-tour',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
         $data['slimetour'] = json_decode($response);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-trending-merchandise',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response1 = curl_exec($curl);
        
        curl_close($curl);
              
        $data['trending_merchnadise'] = json_decode($response1);
        
         $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-top-creator',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response2 = curl_exec($curl);
        
        curl_close($curl);
              
        $data['creator'] = json_decode($response2);
             
        return view('layouts/index',$data);
    }

    public function container1(){

        $data = [];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-container-content?shipping_container_id=1',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
              
        $data['container1'] = json_decode($response);
        return view('layouts/container1', $data);
    }
     public function slimecontainer(){

        $data = [];
        $data = [];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-slime-seat-container?shipping_container_id=7',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
              
        $data['slimecontainer'] = json_decode($response);
        return view('layouts/slimecontainer', $data);
    }

    public function container2(){
     
        $data = [];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-container-content?shipping_container_id=2',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       


       
     $data['container2'] = json_decode($response);
       

       
        return view('layouts/container2',$data);
    }
    public function container3()
    {

        
        $data = [];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-container-content?shipping_container_id=3',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       


       
     $data['container3'] = json_decode($response);
       

       
        return view('layouts/container3',$data);
    }
    public function container4()
    {

       
        $data = [];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-container-content?shipping_container_id=4',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       


       
     $data['container4'] = json_decode($response);
       

       
        return view('layouts/container4',$data);
    }

    public function container5()
    {

       
        $data = [];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-slime-seat-container?shipping_container_id=5',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       


       
     $data['container5'] = json_decode($response);
       

       
        return view('layouts/container5',$data);
    }

   public function checkout(){
       
        $data = [];
 $session = session();
        /* if(!empty($_POST)){  
   
            $curl = curl_init();
 
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://2kpaid.com/api/api/order-place',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "item":{
                        "Product_ID":1,
                        "Quantity":2,
                        "Price":100,
                        "Transaction_Token": "ABC001567IUOP"
                        },
                    "billingDetail":{
                        "name":"'.$_POST['first_name'].'",
                        "lastname":"'.$_POST['last_name'].'",
                        "email":"'.$_POST['email_address'].'",
                        "address":"'.$_POST['full_address'].'",
                        "city":"'.$_POST['city'].'",
                        "state":"'.$_POST['state'].'",
                        "pincode":"'.$_POST['pincode'].'",
                        "password" : "'.$_POST['phone'].'"
         
                        },
                    "shippingDetail":{
                        "Shipping_FirstName":"gfg",
                        "Shipping_lastName":"'.$_POST['last_name'].'",
                        "Shipping_address1":"'.$_POST['full_address'].'",
                        "Shipping_address2":"'.$_POST['full_address'].'",
                        "Shipping_city":"'.$_POST['city'].'",
                        "Shipping_state":"'.$_POST['state'].'",
                        "Shipping_Zipcode":"'.$_POST['pincode'].'"
         
                }
 
            }',
                CURLOPT_HTTPHEADER => array(
                    'Accept: application/json',
                    'Content-Type: application/json',
                    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvMmtwYWlkLmNvbVwvYXBpXC9hcGlcL2xvZ2luIiwiaWF0IjoxNjY4NTg4NDQzLCJleHAiOjE2Njg1OTIwNDMsIm5iZiI6MTY2ODU4ODQ0MywianRpIjoiSnNXUlhvRGxkeUZqSUo1RyIsInN1YiI6MiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.h7f2LcM79qeYc5BR6WBMmwP4kqBEwzVoEwsDZMruhXY'
                ),
                ));
 
            $response = curl_exec($curl);
 
            curl_close($curl);
            $response = json_decode($response);

            if(($response->status == 200)){
                $data['order_id'] = ($response->order->id);
                return view('layouts/payment',$data);
     
            }else{
                $data['msg'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->messages </div>";
                return view('layouts/checkout',$data);
            }
 
        } */
     //   print_r($_POST);
      //  $_SESSION['detail'] = $_POST;
      if(!empty($_POST)){
        $ses_data = [
                    'quantity' => $_POST['quantity'],
                    'cname' => $_POST['name'],
                    'pid' => $_POST['pid'],
                    'price' => $_POST['price'],
                    'shippingcharge' => $_POST['shippingcharge'],
                    
                ];
                $session->set($ses_data);
      }
        return view('layouts/checkout',$data);
   }
   public function update_ajax(){
    $data = [];
       
 $width = $_REQUEST['screenwidth'];
       $_SESSION['width'] = $width;
  }
   public function update_view(){
    $data = [];
       

       
        return view('layouts/update_view');
   }
    public function payment(){
    $data = [];
     // print_r($_POST);
      // print_r($order_id);
       
        if(!empty($_POST['cardname'])){
             $data['order_id'] = $_POST['order_id'];
        //    echo 'a'; die;
            return view('layouts/order_rcvd',$data);
        }
    //   echo 'b'; die;
        return view('layouts/payment',$data);
   }
    public function order_rcvd(){
    $data = [];
    // print_r($_POST);
 if(!empty($_POST)){  
     $rules = [
         "first_name" => ["label" => "First Name", "rules" => "required|min_length[3]|max_length[20]"],
         "last_name" => ["label" => "Last Name", "rules" => "required|min_length[3]|max_length[20]"],
         "email_address" => ["label" => "Email", "rules" => "required|valid_email"],
         "phone" => ["label" => "Phone", "rules" => "required|numeric|min_length[10]"],
         "pincode" => ["label" => "Pin code", "rules" => "required|numeric|min_length[5]|max_length[6]"],
        // "card_no" => ["label" => "Card No.", "rules" => "required|numeric|min_length[16]|max_length[16]"],
        // "cvv" => ["label" => "CVV", "rules" => "required|numeric|min_length[3]|max_length[3]"]
           
        ];
        
        if(!empty($_POST['Shipping_FirstName'])){
            $_POST['Shipping_FirstName'] = $_POST['Shipping_FirstName'];
        }else{
            $_POST['Shipping_FirstName'] = "";
        }
        if(!empty($_POST['Shipping_lastName'])){
            $_POST['Shipping_lastName'] = $_POST['Shipping_lastName'];
        }else{
            $_POST['Shipping_lastName'] = "";
        }
        if(!empty($_POST['Shipping_address1'])){
            $_POST['Shipping_address1'] = $_POST['Shipping_address1'];
        }else{
            $_POST['Shipping_address1'] = "";
        }
        if(!empty($_POST['Shipping_city'])){
            $_POST['Shipping_city'] = $_POST['Shipping_city'];
        }else{
            $_POST['Shipping_city'] = "";
        }
        if(!empty($_POST['Shipping_state'])){
            $_POST['Shipping_state'] = $_POST['Shipping_state'];
        }else{
            $_POST['Shipping_state'] = "";
        }
         if(!empty($_POST['shipping_country'])){
            $_POST['shipping_country'] = $_POST['shipping_country'];
        }else{
            $_POST['shipping_country'] = "";
        }
         if(!empty($_POST['Shipping_Zipcode'])){
            $_POST['Shipping_Zipcode'] = $_POST['Shipping_Zipcode'];
        }else{
            $_POST['Shipping_Zipcode'] = "";
        }
        
        
   if($this->validate($rules)){
       //require_once('vendor/autoload.php');
      // echo '<pre>';
      // print_r($_POST);
      // echo '</pre>';
      // die;
      require_once(APPPATH."Libraries/stripe/stripe-php/init.php");
       
       Stripe\Stripe::setApiKey(STRIPE_SECRET);

    $stripe = Stripe\Charge::create([
        "amount" => (number_format($_POST['price'], 2, '.', '') * 100),
        "currency" =>"usd",
        "source" => $_REQUEST["stripeToken"],
        "description" => "",
    ]); 
  //  echo 'sc'; die;
            $curl = curl_init();
 
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://2kpaid.com/api/api/order-place',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "item":{
                        "Product_ID":"'.$_POST['pid'].'",
                        "Quantity":"'.$_POST['quantity'].'",
                        "Price":"'.$_POST['price'].'",
                        "Transaction_Token": "ABC001567IUOP"
                        },
                    "billingDetail":{
                        "name":"'.$_POST['first_name'].'",
                        "lastname":"'.$_POST['last_name'].'",
                        "email":"'.$_POST['email_address'].'",
                        "address":"'.$_POST['full_address'].'",
                        "city":"'.$_POST['city'].'",
                        "state":"'.$_POST['state'].'",
                        
                        "pincode":"'.$_POST['pincode'].'",
                        "country":"'.$_POST['country'].'",
                        "user_id" : "'.$_SESSION['id'].'"
         
                        },
                    "shippingDetail":{
                        "Shipping_FirstName":"'.$_POST['Shipping_FirstName'].'",
                        "Shipping_lastName":"'.$_POST['Shipping_lastName'].'",
                        "Shipping_address1":"'.$_POST['Shipping_address1'].'",
                        "Shipping_address2":"",
                        "Shipping_city":"'.$_POST['Shipping_city'].'",
                        "Shipping_state":"'.$_POST['Shipping_state'].'",
                        "shipping_country":"'.$_POST['shipping_country'].'",
                        "Shipping_Zipcode":"'.$_POST['Shipping_Zipcode'].'"
         
                }
 
            }',
                CURLOPT_HTTPHEADER => array(
                    'Accept: application/json',
                    'Content-Type: application/json',
                    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvMmtwYWlkLmNvbVwvYXBpXC9hcGlcL2xvZ2luIiwiaWF0IjoxNjY4NTg4NDQzLCJleHAiOjE2Njg1OTIwNDMsIm5iZiI6MTY2ODU4ODQ0MywianRpIjoiSnNXUlhvRGxkeUZqSUo1RyIsInN1YiI6MiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.h7f2LcM79qeYc5BR6WBMmwP4kqBEwzVoEwsDZMruhXY'
                ),
                ));
 
            $response = curl_exec($curl);
 
            curl_close($curl);
            $response = json_decode($response);
//print_r($response);die;
            if(($response->status == 200)){
                $data['order_id'] = ($response->order->id);
                return view('layouts/order_rcvd',$data);
     
            }else{
                $data['msg'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->messages </div>";
                return view('layouts/checkout',$data);
            }
 
        
         $session = session();
       
        $session->destroy();
      
        return view('layouts/order_rcvd');
 }else{
            $data['validation'] = $this->validator;
           return view('layouts/checkout',$data);
        } 
 }
   }
    public function forget_password(){
    $data = [];
    
    if(!empty($_POST)){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/forget-password',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('email' => $_POST['email'] ),
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
    
       
        curl_close($curl);
        
     
        $response = json_decode($response);
      //  print_r($response); 
      //die;
      
        if($response->status == 200){
    $data['message'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> Mail sent successfully. Please check your email </div>";
   }else{
    $data['message'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->error </div>";
   }
      
        $data['response'] = $response;
        
       }

       
        return view('layouts/forget_password',$data);
   }
   public function reset_password(){

    $data = [];
     $rules = [
                
                "password" => ["label" => "Password", "rules" => "required"],
                "cnfrm_password" => ["label" => "Confirm password", "rules" => "required|matches[password]"],
           
           
        ];
   if($this->validate($rules)){
   }

    if(!empty($_POST)){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/confirm-reset-password',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('email' => $_REQUEST['email'],'token'=>$_REQUEST['token'],'password'=>$_POST['password'] ),
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
    
       
        curl_close($curl);
        
     
        $response = json_decode($response);
       // print_r($response); die;
      
        if($response->status == 200){
    $data['message'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> Mail Send Successfully. Please check your email </div>";
   }else{
    $data['message'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->error </div>";
   }
      
        $data['response'] = $response;
       }
       return view('layouts/reset_password',$data);
   }
   public function billing(){
        
    $data = [];
    $pid = $_REQUEST['id'];
    $cid = $_REQUEST['cid'];
 
    if( ($cid == 7)|| ($cid == '7') || ($cid == '5') || ($cid == 5)){
         
         $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://2kpaid.com/api/api/get-slime-seat-container?shipping_container_id='.$cid,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => array(
        ': '
        ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
        $response = json_decode($response);

        $data['billing'] = $response;
    }else{
    
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://2kpaid.com/api/api/get-container-content?shipping_container_id='.$cid,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => array(
        ': '
        ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
        $response = json_decode($response);

        $data['billing'] = $response->Shipping_container_product;
    }
        $data['pid'] = $pid;
        $data['cid'] = $cid;

        return view('layouts/billing',$data);
   }
   
   public function nft_billing(){
       
       $pid = $_REQUEST['id'];
        $userid = $_REQUEST['uid'];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-profile?user_id='.$userid,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $data['profile'] = json_decode($response);
        return view('layouts/billing',$data);
   }

   public function login(){
   
    $data = [];
    $session = session();
    
       if(!empty($_POST)){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/login',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('email' => $_POST['email'],'password' =>$_POST['password'] ),
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
    
       
        curl_close($curl);
        
    
        $response = json_decode($response);
     
        if($response->status == 200){
            
            $ses_data = [
                    'id' => $response->user->id,
                    'name' => $response->user->name,
                    'last_name' => $response->user->lastname,
                    'email' => $response->user->email,
                    'phone_number' => $response->user->phone_number,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                 if(!empty($_REQUEST['chec'])){
             return redirect()->to(base_url('checkout'));
         }
              //  print_r($session->ses_data);
                return redirect()->to(base_url(''));
   // $data['message'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> Login Successfully </div>";
   }else{
    $data['message'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->error </div>";
   }
      
        $data['response'] = $response;
       }
      
       
       
        return view('layouts/login',$data);
   }
   public function logout(){
       //echo 'yes'; die;
      $session = session();
       //print_r($session->logged_in);
        $session->destroy();
       
      return redirect()->to(base_url());
   }
   public function signup(){
    $data = [];
     $session = session();
       if(!empty($_POST)){
           
            $rules = [
                 "name" => ["label" => "First Name", "rules" => "required|min_length[3]|max_length[20]"],
                 "lastname" => ["label" => "Last Name", "rules" => "required|min_length[3]|max_length[20]"],
                 "email" => ["label" => "Email", "rules" => "required|valid_email"],
                "password" => ["label" => "Password", "rules" => "required|min_length[8]"],
                "phone_number" => ["label" => "Phone Number", "rules" => "required|numeric|min_length[10]"],
           
           
        ];
   if($this->validate($rules)){
      
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://2kpaid.com/api/api/register',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('name' => $_POST['name'],'lastname' =>$_POST['lastname'],'email'=>$_POST['email'],'password'=>$_POST['password'],'phone_number'=>$_POST['phone_number'] ),
      CURLOPT_HTTPHEADER => array(
        ': '
      ),
    ));
    
    $response = curl_exec($curl);
    //print_r($response);
    curl_close($curl);
     $response = json_decode($response);
     if($response->status == 200){
           $ses_data = [
                    'id' => $response->user->id,
                    'name' => $response->user->name,
                    'last_name' => $response->user->lastname,
                    'email' => $response->user->email,
                    'phone_number' => $response->user->phone_number,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
         if(!empty($_REQUEST['chec'])){
             return redirect()->to(base_url('checkout'));
         }
   return redirect()->to(base_url('login'));
   }else{
    $data['message'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->error </div>";
   }
    $data['response'] = $response;
  }else{
       $data['validation'] = $this->validator;
           return view('layouts/signup',$data);
  } 
       }
        return view('layouts/signup',$data);
   }
   public function about(){

    $data = [];
     $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-page?page_id=3',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $data['response'] = json_decode($response);

    return view('layouts/about',$data);
   }
   public function contact(){

$data = [];
$data = [];
$session = session();

   if(!empty($_POST)){
       
         $rules = [
              "name" => ["label" => " Name", "rules" => "required|min_length[3]|max_length[20]"],
              "email" => ["label" => " Email", "rules" => "required|valid_email"],
              "phone_no" => ["label" => " Phone Number", "rules" => "required|min_length[3]|max_length[20]"],
              "message" => ["label" => " Message", "rules" => "required|alpha_numeric_punct|max_length[10000]"],
            
           
        ];
   if($this->validate($rules)){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://2kpaid.com/api/api/save-contact-us',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('name' => $_POST['name'],'email' =>$_POST['email'],'phone_number' =>$_POST['phone_no'],
      'regarding' =>$_POST['reason'],'message' =>$_POST['message'] ),
      CURLOPT_HTTPHEADER => array(
        ': '
      ),
    ));
    
    $response = curl_exec($curl);

   
    curl_close($curl);
    

    $response = json_decode($response);
 
    if($response->status == 200){
        
      
$data['message'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>Your request has been submitted successfully, We will contact you soon </div>";
}else{
$data['message'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> $response->error </div>";
}
  
    $data['response'] = $response;
   }else{
        $data['validation'] = $this->validator;
           return view('layouts/contact',$data);
   }
   }

    return view('layouts/contact',$data);
   }
   public function privacy_policy(){

    $data = [];
    
    $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-page?page_id=1',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $data['response'] = json_decode($response);
        

    return view('layouts/privacy_policy',$data);
   }
   public function term_of_use(){

    $data = [];
    
    $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-page?page_id=2',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $data['response'] = json_decode($response);

    return view('layouts/term_of_use',$data);
   }
    public function create_nft(){

    $data = [];
    
   

    return view('layouts/create_nft',$data);
   }
    public function profile(){

    $data = [];
    $id = $_REQUEST['id'];
    $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://2kpaid.com/api/api/get-profile?user_id='.$id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_HTTPHEADER => array(
            ': '
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $data['profile'] = json_decode($response);

    return view('layouts/profile',$data);
   }
}