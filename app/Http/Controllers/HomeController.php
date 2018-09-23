<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void  
     */
    public function __construct()
    {
        
    }

    public function subscription(Request $req){
      $email=$req->email;
      DB::table('subscription')->insert(['email'=>$email]);

      return back();
    }

    public function comingsoontest(Request $request){
      $status=$request->termid;


                 $allsneakers = DB::table('products')
                 ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->join('status', 'products.product_status', '=', 'status.status_id')
                ->orderBy('products.product_id','DESC')
                 ->where('images.image_feature', '=', 1)

                 ->where('status.status','=',$status) 
                               
                 ->get();
                 

      return response()->json($allsneakers);


    }

     public function welcomebrandtest(Request $request){
      $brand=$request->termid;


                 $allsneakers = DB::table('products')
                 ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->join('status', 'products.product_status', '=', 'status.status_id')
                ->orderBy('products.product_id','DESC')
                 ->where('images.image_feature', '=', 1)

                 ->where('products.product_brand','=',$brand) 
                 ->limit(2)
                               
                 ->get();


      return response()->json($allsneakers);


    }

 
     public function testnewscatalogue(){
       $allnews = DB::table('news')
        ->join('news_image', 'news.news_id', '=', 'news_image.news_id')
        ->where('news_image.news_image_feature', '=', 1)
        ->orderBy('news_date','DESC')
        ->paginate(3);
        
        
         return view('testnews',['allnews'=>$allnews]);
    }

    public function testbrand($brandname){
      $allsneakers = DB::table('products')
                 ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->join('status', 'products.product_status', '=', 'status.status_id')
                 // ->join('search_temp','products.product_id','=','search_temp.product_id')
                 ->orderBy('products.product_id','DESC')
                 
                 ->where('images.image_feature', '=', 1)
                 ->where('products.product_brand','=',$brandname)
                 
                 
                 ->get();

                 $fn=DB::table('brands')
                        ->where('brand_name','=',$brandname)
                        ->get();
                    foreach ($fn as $key) {
                      $desc=$key->brand_description;
                    }
                  return view('brands',['allsneakers'=>$allsneakers,'brandname'=>$brandname,'desc'=>$desc]);
    }



    public function randomSearchtest(Request $req){
      $randomSearch=$req->input('randomSearch');
      



                       $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')

                       ->join('status', 'products.product_status', '=', 'status.status_id')
                       ->orderBy('products.product_id','DESC')

                       ->where('products.product_name', 'like','%'.$randomSearch.'%')
                       
                       ->where('images.image_feature', '=', 1)
                       ->distinct()

                       ->get();
                       if (count($allsneakers)>0) {
                          return view('testreleases',['allsneakers'=>$allsneakers,'message'=>'You searched for : '.$randomSearch]);
                       }
                       else{
                          return view('testreleases',['allsneakers'=>$allsneakers,'message'=>'No result found']);

                       }

                 
                       
    }

    public function messages(Request $req){
      $name=$req->input('name');
      $email=$req->input('email');
      $subject=$req->input('subject');
      $message=$req->input('message');
      DB::table('messages')->insert(['name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message,'message_read'=>'1']);
      return back()->with('message', 'Your message has been sent.Thank you!');


    }
    
  
    public function test(Request $request){
         // $id = $_GET['data'];
         // $id=urlencode($id);
      $product_status=[];
         $data= $request->id;
         $cnt=0;
        // $data=count($data);
                 for($cnt=0;$cnt<count($data);$cnt++){
                        if($data[$cnt]=="Coming Soon"){
                          array_push($product_status,$data[$cnt]);
                        }
                        else if($data[$cnt]=="In Stock"){
                          array_push($product_status,$data[$cnt]);
                        }
                         else if($data[$cnt]=="Recent Release"){
                          array_push($product_status,$data[$cnt]);
                        }
                        else if($data[$cnt]=="Out of Stock"){
                          array_push($product_status,$data[$cnt]);
                        }
                 }
        if(count($product_status)==0){
           $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                 ->orderBy('products.product_id','DESC')
                       
                       ->where('images.image_feature', '=', 1)
                       ->whereIn('products.product_brand', $data)
                 ->limit(20)

                       // ->whereIn('status.status', $product_status)

                       ->get();
                       return response()->json($allsneakers);


        }
        else if(count($product_status)==count($data)){
           $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->orderBy('products.product_id','DESC')

                       ->join('status', 'products.product_status', '=', 'status.status_id')
                       ->where('images.image_feature', '=', 1)
                       ->whereIn('status.status', $product_status)
                 ->limit(20)

                       // ->whereIn('products.product_brand', $data)
                       

                       ->get();
                       return response()->json($allsneakers);
        }
        else{
           $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                       ->orderBy('products.product_id','DESC')
                       ->where('images.image_feature', '=', 1)
                       ->whereIn('status.status', $product_status)
                       ->whereIn('products.product_brand', $data)
                       ->limit(20)
                       

                       ->get();
                       return response()->json($allsneakers);
        }
                       
     
     // return response()->json($allsneakers);

    }

    public function testall(Request $request){
      $product_status=[];
         $data= $request->id;
         $cnt=0;
        // $data=count($data);
                 for($cnt=0;$cnt<count($data);$cnt++){
                        if($data[$cnt]=="Coming Soon"){
                          array_push($product_status,$data[$cnt]);
                        }
                        else if($data[$cnt]=="In Stock"){
                          array_push($product_status,$data[$cnt]);
                        }
                         else if($data[$cnt]=="Recent Release"){
                          array_push($product_status,$data[$cnt]);
                        }
                        else if($data[$cnt]=="Out of Stock"){
                          array_push($product_status,$data[$cnt]);
                        }
                 }
        if(count($product_status)==0){
           $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                        ->orderBy('products.product_id','DESC')

                       ->where('images.image_feature', '=', 1)
                       ->whereIn('products.product_brand', $data)
                 // ->limit(2)

                       // ->whereIn('status.status', $product_status)

                       ->get();
                       return response()->json($allsneakers);


        }
        else if(count($product_status)==count($data)){
           $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                 ->orderBy('products.product_id','DESC')

                       ->where('images.image_feature', '=', 1)
                       ->whereIn('status.status', $product_status)
                 // ->limit(2)

                       // ->whereIn('products.product_brand', $data)
                       

                       ->get();
                       return response()->json($allsneakers);
        }
        else{
           $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                 ->orderBy('products.product_id','DESC')

                       ->where('images.image_feature', '=', 1)
                       ->whereIn('status.status', $product_status)
                       ->whereIn('products.product_brand', $data)
                 // ->limit(2)
                       

                       ->get();
                       return response()->json($allsneakers);
        }

    }

    public function resetSearch(){
      
                 $allsneakers = DB::table('products')
                       ->join('images', 'products.product_id', '=', 'images.product_id')
                       ->join('status', 'products.product_status', '=', 'status.status_id')
                      ->orderBy('products.product_id','DESC')

                       ->where('images.image_feature', '=', 1)
                      
                 
                       ->get();
                       return response()->json($allsneakers);
    }

    
  public function bsearch($brand){
  // DB::table('search_temp')->delete();

  $allsneakers = DB::table('products')
                 ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->join('status', 'products.product_status', '=', 'status.status_id')
                 // ->join('search_temp','products.product_id','=','search_temp.product_id')
                 ->orderBy('products.product_id','DESC')
                 
                 ->where('images.image_feature', '=', 1)
                 ->where('products.product_brand','=',$brand)
                 ->limit(5)
                 
                 ->get();
                  return view('releases',['allsneakers'=>$allsneakers]);
  // return view('releases');
  }

   public function newsSingle($news_id){
      $news=DB::table('news')
              ->join('news_image','news.news_id','=','news_image.news_id')
              ->where('news.news_id','=',$news_id)
              ->get();

      return view('profile.newsSingle',['RealNews'=>$news]);

   }
                    
 
 public function releases(){
                $allsneakers = DB::table('products')
                 ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->join('status', 'products.product_status', '=', 'status.status_id')
                 // ->join('search_temp','products.product_id','=','search_temp.product_id')
                 ->orderBy('products.product_id','DESC')
                 
                 ->where('images.image_feature', '=', 1)
                 
                 
                 ->get();
                  return view('testreleases',['allsneakers'=>$allsneakers]);
 }

 public function testreleases(){
  $allsneakers = DB::table('products')
                 ->join('images', 'products.product_id', '=', 'images.product_id')
                 ->join('status', 'products.product_status', '=', 'status.status_id')
                 // ->join('search_temp','products.product_id','=','search_temp.product_id')
                 ->orderBy('products.product_id','DESC')
                 
                 ->where('images.image_feature', '=', 1)
                 // ->limit(10)
                 
                 ->get();
                  return view('testreleases',['allsneakers'=>$allsneakers]);
 }

 // public function allreleases(){
 //                $allsneakers = DB::table('products')
 //                 ->join('images', 'products.product_id', '=', 'images.product_id')
 //                 ->join('status', 'products.product_status', '=', 'status.status_id')
 //                 // ->join('search_temp','products.product_id','=','search_temp.product_id')
 //                 ->orderBy('products.product_id','DESC')
                 
 //                 ->where('images.image_feature', '=', 1)
 //                 // ->limit(5)
                 
 //                 ->get();
 //                  return view('releases',['allsneakers'=>$allsneakers]);
 // }

 // public function search_releases(Request $req){
 //    DB::table('search_temp')->delete();
 //    $brand_id=$req->input('vehicle');
    
 //    $status_id=$req->input('status');


 //    if($brand_id && $status_id){
 //        $brand=DB::table('products')
         
 //         ->join('status','products.product_status','=','status.status_id')
 //         ->whereIn('product_brand', $brand_id)

 //         ->whereIn('status', $status_id)

 //         ->get();
     

 //        foreach($brand as $key){
            
 //            $temp=DB::table('search_temp')->insert(['product_id' => $key->product_id ]);
            
 //        }


 //    }


 //    else if($brand_id && $status_id==null){


 //        $brand=DB::table('products')
         
 //         ->join('status','products.product_status','=','status.status_id')
 //         ->whereIn('product_brand', $brand_id)

 //         // ->whereIn('status', $status_id)

 //         ->get();
     

 //        foreach($brand as $key){
            
 //            $temp=DB::table('search_temp')->insert(['product_id' => $key->product_id ]);
            
 //        }

 //    }
 //    else if($brand_id==null && $status_id){


 //        $brand=DB::table('products')
         
 //         ->join('status','products.product_status','=','status.status_id')
 //         // ->whereIn('product_brand', $brand_id)

 //         ->whereIn('status', $status_id)

 //         ->get();
     

 //        foreach($brand as $key){
            
 //            $temp=DB::table('search_temp')->insert(['product_id' => $key->product_id ]);
            
 //        }
        
 //    }

    
 //    return back();
 // }



 public function testproductPage($product_id){
  
    $product=DB::table('products')
            ->join('status','products.product_status','=','status.status_id')
            ->join('images','products.product_id','=','images.product_id')
            ->where('products.product_id','=',$product_id)
            ->where('images.image_feature','=','1')
            ->get();

     $affiliate=DB::table('products')
            ->join('affiliates','affiliates.product_id','=','products.product_id')
            ->where('products.product_id','=',$product_id)
            ->get();

     $imagegallery=DB::table('products')
                    ->join('images','products.product_id','=','images.product_id')
                    ->where('products.product_id','=',$product_id)
                    ->get();

    return view('testproduct',['RealProduct'=>$product,'affiliate'=>$affiliate,'imagegallery'=>$imagegallery]);
    // return $product;

 }

 public function searchResult(Request $req){
    $data=$req->data;

    $searchResult=DB::table('products')->join('status','products.product_status','=','status.status_id')
                  ->where('status','=',$data)
                  ->get();
    return $data;
 }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
