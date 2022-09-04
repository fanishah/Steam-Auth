## درباره
می توانید از Steam Auth برای احراز هویت در وب سایت و دریافت  SteamID Hex و اطلاعات حساب استیم استفاده کنید.

##  نصب
- مقدار `$steamauth['apikey']` در فایل `steamauth/SteamConfig.php`  با کلید API خود تغییر دهید { http://steamcommunity.com/dev/apikey }
- مقدار  `$steamauth['domainname']` در فایل `steamauth/SteamConfig.php` را با آدرس روت سایت تغییر دهید
- مقدار  `$steamauth['logoutpage']` در فایل `steamauth/SteamConfig.php` را با آدرس صفحه خروج تغییر دهید
- مقدار  `$steamauth['loginpage']` در فایل `steamauth/SteamConfig.php` را با آدرس صفحه ورود تغییر دهید
<br>
مثال »
```sh
$steamauth['apikey'] = "318a999f9dff40u2bcc024fcf30bde8b";
$steamauth['domainname'] = "http://example.com";
$steamauth['logoutpage'] = "http://example.com/logout";
$steamauth['loginpage'] = "http://example.com/login";
```
<br>
<br>

##  About
You can use Steam Auth to authenticate on the website and get SteamID Hex and Steam account information.


##  Install
- change `$steamauth['apikey']` to your API-Key from http://steamcommunity.com/dev/apikey in the `steamauth/SteamConfig.php`
<br>
- change `$steamauth['domainname']` to your domain name in the `steamauth/SteamConfig.php`
<br>
- change `$steamauth['logoutpage']` to your address loguot in the `steamauth/SteamConfig.php`
<br>
- change `$steamauth['loginpage']` to your address login in the `steamauth/SteamConfig.php`
<br>
Example
```sh
$steamauth['apikey'] = "318a999f9dff40u2bcc024fcf30bde8b";
$steamauth['domainname'] = "http://example.com";
$steamauth['logoutpage'] = "http://example.com/logout";
$steamauth['loginpage'] = "http://example.com/login";
```
