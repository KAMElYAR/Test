<?php
$bot_token = "<8223992925:AAE8R0yTj540UaQ1duMOPpfC7PsC3Z-j5os>";      // مثل 123456:ABC-...
$chat_id   = "<1196450049>";        // عدد چت یا یوزر
$text      = "سلام! تست ربات از طریق PHP.";

$api_url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
$post_fields = [
    'chat_id' => $chat_id,
    'text'    => $text,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "HTTP code: $httpcode\n";
echo "Response: $res\n";
?>
