<?php
      use Carbon\Carbon;
      $cdate=Carbon::now(+6);//shomossha
      $cdate=explode(" ", $cdate);
      

      $cdate=explode("-", $cdate[0]);

     

      // echo $cdate[0]."<br>";
      // echo $cdate[1]."<br>";
      // echo $cdate[2]."<br>";


      $allproducts=DB::table('products')
                    ->join('status','products.product_status','=','status.status_id')
                    ->get();
       foreach($allproducts as $key){
        $product_id=$key->product_id;
        $rdate=$key->product_release_date;
        $rdate=explode("-", $rdate);

        // echo $product_id."<br>";
        // echo $rdate[1]."<br>";
        // echo $rdate[2]."<br>";

        //current year gt release year -> direct in stock
        if($cdate[0]>$rdate[0]){
          if($key->status != 'Out of Stock'){
            DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'2']);
            
          }

        }
        //current year equal release year
        else if($cdate[0]==$rdate[0]){
          // echo "in";
          //cmonth gt rmonth= instock 
          if($cdate[1]>$rdate[1]){
            if($key->status != 'Out of Stock'){
                  DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'2']);
                  
                }
                

          }
          //cmonth lt rmonth=coming soon
          else if($cdate[1] < $rdate[1]){
                  DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'1']);
                  

          }
          //cmonth eq rmonth
          else if($cdate[1]==$rdate[1]){
            //date same or eq
                if($cdate[2]>=$rdate[2]){
                    //for recent release
                        if($cdate[2]-$rdate[2]<=7){
                        DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'3']);
                        
                            }  
                        //other than recent release
                        else if($key->status != 'Out of Stock'){
                        DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'2']);
                        
                            }
               

              }
                else if($cdate[2]<$rdate[2]){

                  DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'1']);

                  }

          }
                    
          

        }
        else if($cdate[0]<$rdate[0]){
                  DB::table('products')->where('product_id','=',$product_id)->update(['product_status'=>'1']);

        
       }             
        }

?>