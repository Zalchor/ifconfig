<!DOCTYPE html>
<html>
    <head>
        <title>ifconfig</title>
    </head>
    <body>
        <?php
        function getIPAddress() {
        //whether ip is from the internet
        if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
        //whether ip is from the proxy
        elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
         }
    //whether ip is from the remote address
        else{
                 $ip = $_SERVER['REMOTE_ADDR'];
         }
         return $ip;
    }
    $ip = getIPAddress();
    echo 'User Real IP Address - '.$ip;
    ?>
    </body>
</html>
