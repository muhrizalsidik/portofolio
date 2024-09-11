$token = "1hBfkoeMv7CvBfNKPSyR2yEXtCCL7ZZj6jDnVfiXkxxyGQw9xA";
// $phone= "mina-mgr"; //untuk group pakai groupid contoh: 62812xxxxxx-xxxxx
$phone = "6282215151718";
$message = "Test Whatsapp";

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://app.ruangwa.id/api/send_message',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'token=' . $token . '&number=' . $phone . '&message=' . $message,
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
