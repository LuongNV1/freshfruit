<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\PostRequests;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Customer;

use Auth;

class CustomerController extends Controller
{
    /*kiểm tra nếu admin mới cho truy cập*/
   public function AuthenLogin(){
        $admin_id =Auth::id();
        if ($admin_id) {
            return redirect('dashboard');
        }else 
            return redirect('admin')->send();

    }

    
    public function all_customer(){
        $this->AuthenLogin();
        $all_customer = Customer::orderBy('customer_id','DESC')->paginate(5);
        return view('admin.Customer.all_customer')->with(compact('all_customer'));
    }

    public function delete_customer($customer_id){
        $this->AuthenLogin();
        DB::table('tbl_customer')->where('customer_id',$customer_id)->delete();
        Session::put('message','Xoá khách hàng thành công');
        return Redirect::to('all-customer');
    }
}
