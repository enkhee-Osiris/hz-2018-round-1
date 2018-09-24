## Impossible

You can't do that. It's crypto chall.  
http://218.100.84.106:5003/

> **By w01f**  
> Hint  
> ```php  
> if(isset($_POST['username'])) {  
>   # cookie shalgah  
>   if(is_valid($_POST['username'], $_POST['password'])) {  
>     # uusgeh cookie  
>     date_default_timezone_set('Asia/Ulaanbaatar');  
>     $cookie = 'username=' . $_POST['username'] . '&';  
>     $cookie .= 'date=' . date(DATE_ISO8601) . '&';  
>     $cookie .= 'secret_length=' . strlen(SECRET) . '&';  
>     # Login hiih  
>     $cookie = create_hmac($cookie) . '|' . $cookie;  
>     setcookie('auth', $cookie);  
>     print "<h1>?????????!</h1>\n";  
>   } else {  
>     print "<h1>???? ?? ?????!</h1>\n";  
> }  
> ```
