<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MyFatoorah\Library\PaymentMyfatoorahApiV2;

class PaymentController extends Controller
{
    private $apiKey = "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL";
    private $apiURL = "https://apitest.myfatoorah.com/v2/";

    public function showForm()
    {
        return view('quick-payment');
    }

    public function initiatePayment(Request $request)
    {
        $postFields = [
            'NotificationOption' => 'LNK',
            'InvoiceValue'      => $request->amount,
            'CustomerName'      => 'Test Customer',
            'DisplayCurrencyIso' => 'KWD',
            'CallBackUrl'       => route('payment.callback'),
            'ErrorUrl'          => route('payment.error'),
            'Language'          => 'EN',
        ];

        $response = $this->callAPI($this->apiURL . 'SendPayment', $postFields);

        if ($response->IsSuccess) {
            return redirect($response->Data->InvoiceURL);
        }

        return back()->with('error', 'Could not initialize payment');
    }

    public function callback(Request $request)
    {
        $paymentId = $request->paymentId;

        $postFields = [
            'Key'     => $paymentId,
            'KeyType' => 'PaymentId'
        ];

        $response = $this->callAPI($this->apiURL . 'GetPaymentStatus', $postFields);

        if ($response->IsSuccess && $response->Data->InvoiceStatus == "Paid") {
            return view('payment-success');
        }

        return view('payment-error');
    }

    private function callAPI($endpointURL, $postFields)
    {
        $curl = curl_init($endpointURL);
        curl_setopt_array($curl, array(
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS     => json_encode($postFields),
            CURLOPT_HTTPHEADER     => array(
                'Authorization: Bearer ' . $this->apiKey,
                'Content-Type: application/json'
            ),
            CURLOPT_RETURNTRANSFER => true
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            throw new \Exception($error);
        }

        return json_decode($response);
    }
}