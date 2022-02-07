<?php

namespace App\Http\Controllers\API\Web;

use App\Contract\Web\CustomerInterface;
use App\Http\Controllers\Controller as Controller;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Admin\Customer;
use App\Repository\Web\CustomerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function show(Customer $customer)
    {
        return $this->customerRepository->show($customer);
    }

    public function update(CustomerUpdateRequest $request, Customer $customer)
    {
        $parms = $request->all();
        return $this->customerRepository->update($parms, $customer);
    }

    public function changePassword(Request $request)
    {
        
        DB::beginTransaction();
        try {
            
                if (Auth::check()){
                    $customer = Customer::where("id", Auth::user()->id)->first();
                    
                $customer->update([
                    'password' => Hash::make($request->new_password),
                ]);
                
                // Auth::guard('customer')->logout();
           DB::commit();
          
            return response()->json(['msg' => "Password changed successfully"]);
            
                }
            
           
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['db_error' => $e->getMessage()]);
        }
    }
}
    
