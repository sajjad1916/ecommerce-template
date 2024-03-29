<?php

namespace App\Http\Controllers;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //
    public function index(){
        $result['data'] = Coupon::all();  
         return view('admin.coupon', $result);
      }
      public function manage_coupon(Request $request, $id=''){
        if ($id > 0){
           $arr = Coupon::where(['id' => $id])->get();
           $result['title'] = $arr['0']->title;
           $result['code'] = $arr['0']->code;
           $result['value'] = $arr['0']->value;
           $result['id'] = $arr['0']->id;
        }else{
           $result['title'] = '';
           $result['code'] = '';
           $result['value'] = '';
           $result['id'] = '0';
        }
        return view('admin.manage_coupon', $result);
     }
     public function manage_coupon_process(Request $request)  {
        $request->validate([
           'title' => 'required',
           'value' => 'required',
        //   'code' => 'required|unique:coupons'
        ]);

         if ($request->post('id')>0) {
            $model = Coupon::find($request->post('id'));
            $msg = "coupon Updated";
         }else{
            $model = new Coupon();
            $msg = "coupon Inserted";
        }

        $model->title = $request->post('title');
        $model->code = $request->post('code');
        $model->value = $request->post('value');
        $model->save();

        $request->session()->flash('message', $msg);
        return redirect('admin/coupon');
    }

    public function delete(Request $request, $id){
        $model = Coupon::find($id);
        $model->delete();
        $request->session()->flash('message', 'coupon Deleted');
        return redirect('admin/coupon');
     }

     public function status(Request $request, $status, $id){
        $model = Coupon::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message', 'Coupon Status Updated');
        return redirect('admin/coupon');     
   }
}
