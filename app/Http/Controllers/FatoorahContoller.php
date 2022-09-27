<?php

namespace App\Http\Controllers;

use App\Services\FatoorahServices;
use Illuminate\Http\Request;

class FatoorahContoller extends Controller
{
    private $fatooraservice;

    public function __construct(FatoorahServices $fatooraservice)
    {
        $this->fatooraservice = $fatooraservice;
    }

    public function PayOrder()
    {
        $data = [
            "CustomerName" => "Muhanad",
            "CustomerMobile" => "01110032911",
            "NotificationOption" => "ALL",
            "InvoiceValue" => 100,
            "CustomerEmail" => "muhanadmahmoud@hotmail.com",
            "CallBackUrl" => 'https://www.google.com',
            "ErrorUrl" => 'https://www.youtube.com',
            "DisplayCurrencyIso" => "SAR",
            "Language" => "en"
        ];

        $this->fatooraservice->sendPayment($data);
    }

    public function Success_callback(Request $request)
    {
        $data = [
            'key' => $request->paymentId,
            'KeyType'=> 'paymentId'
        ];
       return $this->fatooraservice->getPaymentStatus($request->paymentId , $data);
    }

    public function Error_callback()
    {
        return 'Failed';
    }
}
