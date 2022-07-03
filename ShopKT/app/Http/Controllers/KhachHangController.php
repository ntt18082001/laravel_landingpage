<?php

namespace App\Http\Controllers;

use App\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KhachHangController extends Controller
{
   public function save(Request $request)
   {
      $data = $request->all();

      $rules = [
         "fullname" => ["required", "max:255"],
         "email" => ["required", 'email'],
         "phone_number"   => ["required"]
      ];

      $fields = [
         "fullname" => "Họ tên",
         "email" => "Email",
         "phone_number" => "Số điện thoại"
      ];
      $validator = Validator::make($data, $rules, [], $fields);

      if ($validator->fails()) {
         $errors = $validator->errors();
         return response()->json(["errors" => $errors]);
      }
      
      $khachHang = new KhachHang();
      $khachHang->fullname = $request->fullname;
      $khachHang->email = $request->email;
      $khachHang->phone_number = $request->phone_number;
      
      $khachHang->save();

      return response()->json(['success' => true]);
   }
}
