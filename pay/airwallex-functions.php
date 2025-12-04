<?php
//todo change these when going to prod
const AW_API_KEY = "b635c8230076145b5f19a63d165b3c9f6b19348e3ec1b674a8b591245551598b7e8742e1b620699f2fcdf89f06489736";
const AW_CLIENT_ID = "YoTN8CSsTXOqkAPrLaRRtQ";
const AW_ACCESS_ID = "acct_EpoT-nKJPD2y0YQln4okng";
const AW_BASE_URL = "https://api-demo.airwallex.com/api/v1";
const AW_TOKEN_CACHE = __DIR__ . "/token_cache.json"; //token cache

function postAirwallexHTTP($url, $headers, $body = "")
{
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_POSTFIELDS => $body
    ]);

    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        "status" => $status,
        "body" => json_decode($response, true)
    ];
}

function getAirwallexHTTP($url, $headers)
{
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_SSL_VERIFYPEER => true
    ]);

    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        "status" => $status,
        "body" => json_decode($response, true)
    ];
}


function getAirwallexToken()
{
    //check cache
    // if (file_exists(AW_TOKEN_CACHE)) {
    //     $cache = json_decode(file_get_contents(AW_TOKEN_CACHE), true);
    //     if ($cache && $cache['expires_at'] > time()) {
    //         return $cache['token'];
    //     }
    // }

    $url = AW_BASE_URL . "/authentication/login";

    $headers = [
        "x-api-key: " . AW_API_KEY,
        "x-client-id: " . AW_CLIENT_ID,
        "x-login-as: " . AW_ACCESS_ID,
        "Content-Type: application/json"
    ];

    $res = postAirwallexHTTP($url, $headers);

    if ($res["status"] !== 201) {
        throw new Exception("Failed to get Airwallex token: " . json_encode($res["status"]));
    }

    $token = $res["body"]["token"];
    // $expiry = $res["body"]["expires_at"];

    // file_put_contents(AW_TOKEN_CACHE, json_encode([
    //     "token" => $token,
    //     "expires_at" => $expiry
    // ]));

    return $token;
}

function createPaymentIntent($amount, $currency, $merchant_order_id, $course_name)
{
    $token = getAirwallexToken();

    $url = AW_BASE_URL . "/pa/payment_intents/create";

    $headers = [
        "Authorization: Bearer " . $token,
        "Content-Type: application/json"
    ];

    $body = json_encode([
        "amount" => $amount,
        "currency" => $currency,
        "merchant_order_id" => $merchant_order_id,
        "request_id" => uniqid("ReqID_"),
        "descriptor" => "WeTalk Airwallex Payment",
        "return_url" => "https://www.wetalk.com",
        "metadata" => [
            "course_name" => $course_name,
        ]
    ]);

    //201 response checking is done in create-payment-intent.php
    return postAirwallexHTTP($url, $headers, $body);
}

function retrievePaymentIntent($intent_id)
{
    $token = getAirwallexToken();

    $url = AW_BASE_URL . "/pa/payment_intents/" . $intent_id;

    $headers = [
        "Authorization: Bearer " . $token,
        "Content-Type: application/json"
    ];

    return getAirwallexHTTP($url, $headers);
}


?>