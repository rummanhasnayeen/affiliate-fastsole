<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon; 


class ProfileController extends Controller
{
    public function index($slug){

     return view('profile.index'); 

 }

 public function productChange(Request $req){
     $this->validate($req,[
                                    
                                    'affiliateImage1'=>'dimensions:max_width=130,max_height=78',
                                   



                                ]);

                   $product_id=$req->input('product_id');
                   $product_release=$req->input('release_date');
                   DB::table('products')->where('product_id','=',$product_id)->update(['product_release_date'=>$product_release]);



    $file0 = $req->file('affiliateImage1');
     $file1 = $req->file('affiliateImage2');
     
     $affiliate11=$req->input('affiliate11');
     $affiliate12=$req->input('affiliate12');
        $affiliate21=$req->input('affiliate21');
     $affiliate22=$req->input('affiliate22');
     


     $path = 'img';

    if($file0){
    $filename0 = $file0->getClientOriginalName();
    $file0->move($path, $filename0);
    DB::table('affiliates')->insert([ 'product_id'=>$product_id, 'affiliate_image'=>$filename0,'affiliate_link1'=>$affiliate11,'affiliate_link2'=>$affiliate12]);
    }
    if($file1){
    $filename1 = $file1->getClientOriginalName();
    $file1->move($path, $filename1);
    DB::table('affiliates')->insert([ 'product_id'=>$product_id, 'affiliate_image'=>$filename1,'affiliate_link1'=>$affiliate21,'affiliate_link2'=>$affiliate22]);
    }
    
    return back();

 }

  public function affiliateChange(Request $req){
                               $affiliate_id=$req->input('affiliate_id');
                               $status=$req->input('status');
                               $newDate=$req->input('newDate');
                               if($status){
                               DB::table('affiliates')->where('affiliate_id','=',$affiliate_id)->update([ 
                                'affiliate_status'=>$status]); 
                               }
                               if($newDate){
                               DB::table('affiliates')->where('affiliate_id','=',$affiliate_id)->update([ 
                                'affiliate_release_date'=>$newDate]); 
                               }
                               
                               return back();

                                 }
   public function removeMessage($message_id){
      DB::table('messages')->where('message_id','=',$message_id)->update(['message_read'=>'0']);
      return back()->with('message', 'The message has been marked as read!');

    }
    public function allmessages(){
      $messages=DB::table('messages')->where('message_read','=','1')->orderBy('message_id','DESC')->get();

      return view('profile.allmessages',['messages'=>$messages]);


    }

public function remove_brand(Request $req){
    $brand_id=$req->input('brandId');
    $brands = DB::table('brands')
                ->where('brand_id','=', $brand_id )
                ->delete();
                return back()->with('warningbrand', 'Your brand has been successfully removed');
}

public function delete_sale($sale_id){
   
    $brands = DB::table('sale')
                ->where('sale_id','=', $sale_id )
                ->update(['sale_status'=>'0']);
                
                return back();
}

public function delete_news($news_id){
   
    $brands = DB::table('news')
                ->where('news_id','=', $news_id )
                ->update(['news_status'=>'0']);
                return back();
}

public function remove_onfocus(Request $req){
    $brand_id=$req->input('productId');
    $brands = DB::table('products')
                ->where('product_id','=', $brand_id )
                ->update(['product_onfocus'=>'0']);
                return back();
}

public function remove_slider(Request $req){
    $brand_id=$req->input('sliderId');
    $brands = DB::table('images_sliders')
                ->where('image_slider_id','=', $brand_id )
                ->delete();
                return back();
}

public function remove_slider_banner(Request $req){
    $brand_id=$req->input('bannerId');
    $brands = DB::table('slider_banner')
                ->where('slider_banner_id','=', $brand_id )
                ->delete();
                return back()->with('warning', 'Your slider banner has been successfully removed');
}

public function remove_banner(Request $req){
    $brand_id=$req->input('bannerId');
    $brands = DB::table('banners')
                ->where('banner_id','=', $brand_id )
                ->delete();
                return back();
}

public function add_brand(Request $req){

                            $this->validate($req,[
                                    'newBrand'=>'required',
                                    'newBrandDescription'=>'required',
                                    



                                ]);

    $brand_name=$req->input('newBrand');
    $brand_desc=$req->input('newBrandDescription');
    $brands = DB::table('brands')
                ->insert(['brand_name'=>$brand_name,'brand_description'=>$brand_desc]);
                return back()->with('successbrand', 'Your brand has been successfully saved');
}

public function add_onfocus(Request $req){
    $product_name=$req->input('product_name');
    $brands = DB::table('products')
                ->where('product_name','=',$product_name)
                ->update(['product_onfocus'=>'1']);
                return back();
}

public function add_sale(Request $req){


     $this->validate($req,[
            'sale_pic' => 'required',
                                    'sale_pic'=>'dimensions:max_width=264,max_height=218',
                                    


                                ]);
    $sale_header=$req->input('sale_header');
    $sale_footer=$req->input('sale_footer');
    $sale_source_link=$req->input('sale_source_link');
    $file = $req->file('sale_pic');
     $path = 'img';
     $filename = $file->getClientOriginalName();
     $file->move($path, $filename);

     DB::table('sale')->insert([ 'sale_header'=>$sale_header,'sale_footer'=>$sale_footer,'sale_source_link'=>$sale_source_link,'sale_image_name'=>$filename,'sale_status'=>'1']);
                return back();
}

public function add_news(Request $req){

     $this->validate($req,[
            'news_pic' => 'required',
                                    'news_pic'=>'dimensions:max_width=264,max_height=218',
                                    


                                ]);
    $news_title=$req->input('news_title');
    $news_source=$req->input('news_source'); 
    $news_description=$req->input('news_description');
    $news_short_description=$req->input('news_short_description');

    
    // $cdate=Carbon::now(+6);//shomossha

    $news_date=Carbon::now(+6);;

   
    $file = $req->file('news_pic');
     $path = 'img';
     $filename = $file->getClientOriginalName();
     $file->move($path, $filename);


     DB::table('news')->insert([ 'news_title'=>$news_title,'news_source'=>$news_source,'news_description'=>$news_description,'news_date'=>$news_date,'news_status'=>'1','news_short_description'=>$news_short_description]);
     $imgfind=DB::table('news')->where('news_title','=',$news_title)->get();
     foreach($imgfind as $key){
         DB::table('news_image')->insert([ 'news_id'=>$key->news_id,'news_image_name'=>$filename,'news_image_feature'=>'1']);
     }
                return back();
}

public function add_slider(Request $req){
        $this->validate($req,[
            'pic' => 'required',
                                    'pic'=>'dimensions:max_width=780,max_height=400',
                                    


                                ]);
    $file = $req->file('pic');
     $path = 'img';

    $filename = $file->getClientOriginalName();
    $file->move($path, $filename);
    DB::table('images_sliders')->insert([ 'image_slider_name'=>$filename]);
                return back();
}

public function add_slider_banner(Request $req){
    $this->validate($req, [
    'pic' => 'required',
    'pic.*' => 'dimensions:max_width=180,max_height=200'
]);

    $file = $req->file('pic');
     $path = 'img';

    $filename = $file->getClientOriginalName();
    $file->move($path, $filename);
    DB::table('slider_banner')->insert([ 'slider_banner_image'=>$filename]);
                return back()->with('success', 'Your slider banner has been successfully saved');
}

public function add_banner(Request $req){
     $this->validate($req,[
        'pic' => 'required',
                                    'pic'=>'dimensions:max_width=570,max_height=80',
                                    


                                ]);
    $file = $req->file('pic');
     $path = 'img';

    $filename = $file->getClientOriginalName();
    $file->move($path, $filename);
    DB::table('banners')->insert([ 'banner_image'=>$filename]);
                return back();
}

public function add_product(Request $req){

                $this->validate($req,[
                                    'product_name'=>'required',
                                    'product_description'=>'required',
                                    'product_brand_name'=>'required',
                                    'product_price'=>'required',
                                    'featurepic'=>'dimensions:max_width=700,max_height=450',
                                    '*.affiliateImage'=>'dimensions:max_width=130,max_height=78',
                                    '*.otherpic'=>'dimensions:max_width=700,max_height=450',



                                ]);
    
                   $product_name=$req->input('product_name');
                    $product_description=$req->input('product_description');
                   $product_brand_name=$req->input('product_brand_name');
                   $product_status=$req->input('product_status');
                   $product_release_date=$req->input('product_release_date');
                   $product_release_time=$req->input('product_release_time');
                   $product_price=$req->input('product_price');



                DB::table('products')->insert([ 'product_name'=>$product_name, 'product_description'=>$product_description, 'product_brand' => $product_brand_name,'product_status' => $product_status,'product_release_date'=>$product_release_date,'product_release_time'=>$product_release_time,'product_onfocus'=>'0','product_price'=>$product_price]);

                $identify=DB::table('products')->where('product_name','=',$product_name)->get();
                
                foreach($identify as $key){
                    $product_id=$key->product_id;
                    DB::table('products')->where('product_id','=',$product_id)->update(['onfocus_position'=>$product_id]);

                }

//images
                 $path = 'img';
                  ///feature image
                $file0 = $req->file('featurepic');
                if($file0){
                $filename0 = $file0->getClientOriginalName();
                $file0->move($path, $filename0);
                DB::table('images')->insert([ 'product_id'=>$product_id, 'image_name'=>$filename0,'image_feature'=>'1']);
                    }

                ///multiple controller function
                if($req->hasfile('otherpic'))
                 {

                    foreach($req->file('otherpic') as $image)
                    {



                        $name=$image->getClientOriginalName();
                        $image->move($path, $name);  
                        DB::table('images')->insert([ 'product_id'=>$product_id, 'image_name'=>$name]);
                         
                    }
                 }
                //end multiple controller function
                 

    //multiple affiliate
     $affiliate_release_date=$req->input('affiliate_release_date');
     $affiliate_status=$req->input('affiliate_status');
     $affiliate1=$req->input('affiliate1');
     $affiliate2=$req->input('affiliate2');
     $count=0;


                if($req->hasfile('affiliateImage')){
                   
                     foreach($req->file('affiliateImage') as $image)
                    {
                        
                        $name=$image->getClientOriginalName();
                        $image->move($path, $name);  

                       
                        DB::table('affiliates')->insert([ 'product_id'=>$product_id, 'affiliate_image'=>$name,'affiliate_link1'=>$affiliate1[$count],'affiliate_link2'=>$affiliate2[$count],'affiliate_release_date'=>$affiliate_release_date[$count],'affiliate_status'=>$affiliate_status[$count]]);
                        $count++;
                         
                    }


                }


    //multiple affiliate end

return back()->with('successproduct', 'Your product has been successfully saved');
}




public function uploadPhoto(Request $request) {

    $file = $request->file('pic');
    $filename = $file->getClientOriginalName();


    $path = 'public/img';

    $file->move($path, $filename);
    $user_id = Auth::user()->id;

    DB::table('users')->where('id', $user_id)->update(['pic' => $filename]);
         //return view('profile.index');
    // return back();
} 

public function store()
{
   
    User::create([
        'name' => request('name'),
        'email' => request('email'),
            // 'pic' => $pic_path,
        'password' => bcrypt(request('password'))
        ]);

    return redirect('/');

}
}
