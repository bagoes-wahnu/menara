<?php

namespace App\Helpers;

class Firebase
{
    public static function send($token, $idNotif, $data, $single = FALSE)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';

        if($single == TRUE){
            $field = [
                'to' => $token,
                "notification" => [
                  "title" => $data['title'],
                  "body" => $data['message'],
                  "click_action" => 'FLUTTER_NOTIFICATION_CLICK'
                ],
                'data' => [
                  'id' => $idNotif,
                  'dataNotif' => $data,
                ],
            ];
        }else{
            $field = [
                'registration_ids' => $token,
                "notification" => [
                  "title" => $data['title'],
                  "body" => $data['message'],
                  "click_action" => 'FLUTTER_NOTIFICATION_CLICK'
                ],
                'data' => [
                  'id' => $idNotif,
                  'dataNotif' => $data,
                ],
            ];
        }
        
        $headers = [
            /* Key didapat dari project di website firebase */
            'Authorization:key = '.env('FIREBASE', false),
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($field));

        $result = curl_exec($ch);
        if(!$result){
            die('Curl failed: '. curl_error($ch));
        }

        curl_close($ch);
        return $result;
    }
}
