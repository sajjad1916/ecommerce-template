<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
      $result['data'] = Product::all();  
       return view('admin.product', $result);
    }
 
    public function manage_product(Request $request, $id=''){
       if ($id > 0){
          $arr = product::where(['id' => $id])->get();
          $result['category_id'] = $arr['0']->category_id;
          $result['name'] = $arr['0']->name;
          $result['image'] = $arr['0']->image;
          $result['slug'] = $arr['0']->slug;
          $result['brand'] = $arr['0']->brand;
          $result['model'] = $arr['0']->model;
          $result['short_desc'] = $arr['0']->short_desc;
          $result['keywords'] = $arr['0']->keywords;
          $result['technical_specfication'] = $arr['0']->technical_specfication;
          $result['uses'] = $arr['0']->uses;
          $result['warranty'] = $arr['0']->warranty;
          $result['status'] = $arr['0']->status;
         $result['id'] = $arr['0']->id;
       }else{
          $result['category_id'] = '';
          $result['name'] = '';
          $result['image'] = '';
          $result['slug'] = '';
          $result['brand'] = '';
          $result['model'] = '';
          $result['short_desc'] = '';
          $result['keywords'] = '';
          $result['technical_specfication'] = '';
          $result['uses'] = '';
          $result['warranty'] = '';
          $result['status'] = '';
          $result['id'] = '0';
       }
       $result['category'] = DB::table('categories')->where(['status' => 1])->get();
       $result['sizes'] = DB::table('sizes')->where(['status' => 1])->get();
       $result['colors'] = DB::table('colors')->where(['status' => 1])->get();


        return view('admin.manage_product', $result);
    }


    public function manage_product_process(Request $request){
      if ($request->post('id')>0) {
         $image_validation = 'mimes:jpeg,png,jpg,gif,svg|max:2048';
      }else{
         $image_validation = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
     }

        $request->validate([
            'name' => 'required',
            'image' =>  $image_validation,
            'slug' => 'required',
            $request->post('id'),
        ]);

         if ($request->post('id')>0) {
            $model = Product::find($request->post('id'));
            $msg = "Product Updated";
         }else{
            $model = new Product();
            $msg = "Product Inserted";
        }

      //   image validation
        if ($request->hasFile('image')) {
           $image = $request->file('image');
           $ext = $image->extension();
           $image_name = time().'.'. $ext;
           $image->storeAs('/public/media', $image_name);
           $model->image = $image_name;
        }


        $model->category_id = 1;
        $model->name = $request->post('name');
        $model->image = $image_name;
        $model->slug = $request->post('slug');
        $model->brand = $request->post('brand');
        $model->model = $request->post('model');
        $model->short_desc = $request->post('short_desc');
        $model->keywords = $request->post('keywords');
        $model->technical_specfication = $request->post('technical_specfication');
        $model->uses = $request->post('uses');
        $model->warranty = $request->post('warranty');
        $model->status = $request->post('status');
        $model->status = 1;
        $model->save();

        $request->session()->flash('message', $msg);
        return redirect('admin/product');
    }

    public function delete(Request $request, $id){
       $model = Product::find($id);
       $model->delete();
       $request->session()->flash('message', 'Product Deleted');
       return redirect('admin/product');
    }

    //Active and Deactive status update
    public function status(Request $request, $status, $id){
      $model = Product::find($id);
      $model->status=$status;
      $model->save();
      $request->session()->flash('message', 'product Status Updated');
      return redirect('admin/product');       
 }
}