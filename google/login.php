<?php
include 'secrets.php';
function createAuthUrl()
{
    global $client_id, $redirect_uri;

    $params = array(
        'client_id' => $client_id,
        'redirect_uri' => $redirect_uri,
        'response_type' => 'code',
        'scope' => 'email profile',
        'access_type' => 'online',
        'prompt' => 'select_account',
    );

    $url = 'https://accounts.google.com/o/oauth2/auth?' . http_build_query($params);
    return $url;
}
$authUrl = createAuthUrl();
header("Location: $authUrl");
exit();

?>