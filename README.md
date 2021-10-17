# Very Simple PHP Redirect

If you've moved from new domain & you don't want to simply redirect to new domain.
You want to tell your site visitors that your domain has changed.

This simple PHP script show very simple message that domain has changed.

It will fetch the current request URL, and redirect to the new domain with exact same URI.

https://github.com/katzueno/simple-php-redirect

## Requirement

- For Apache server, mod_rewrite module should be enabled, and allowing to use .htaccess
    - You could set it in Apache config.
- For Nginx server
    - PHP-FPM
    - Ability to set nginx config and knowledge

## How to install

1. Change index.php to your desired state.
    - You could add logos and other text if you wish.
2. Place (or upload) index.php script to your old domain's webroot and clear all other files
3. Edit your apache config, .htaccess or Nginx config so that all request will go through this index.php
4. Enjoy the rest

## Where to set

`$newDomain`: Enter the new domain name.

`$siteNameEn`: Site name in English.

`$siteNameJa`: Site name in Japanese.

`$sec`: Seconds to wait and redirect

## Apache's .htaccess example

Create .htaccess file (if your server is allowing it), and enter the following.
If you want to place it under some directory, make sure to change `RewriteEngine`.

```apacheconf
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase / # if it's lives under subdirectory, add the directory accordingly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME}/index.html !-f
RewriteCond %{REQUEST_FILENAME}/index.php !-f
RewriteRule . index.php [L]
</IfModule>

```

## Nginx config example

I assume you know about Nginx server and its config.
Add the following config in your nginx config.
I've assume you've set `~ \.php($|/)` location to send it to php-fpm.
As same as Apache, change location to directory if you want just to place underneath, and `absolute_redirect` must be turned off.


```
location / {
    index index.php index.html index.htm;
    if (!-e $request_filename) {
        rewrite ^ /index.php last;
    }
}
```

# Versions

Version | Date         | Description
--------|--------------|-------------------
0.9.0   | Oct 17, 2021 | Initial release

# Copyright

Katz Ueno (GitHub @katzueno)
