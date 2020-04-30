# covid19-malaysia
Welcome to the COVID-19 Malaysia API! You can use our API to access COVID-19 data and statistic only for malaysia.

## .htacess File

Htaccess responsible for redirecting every single request in the web to the `index.php` unless the file or directory is specify. This is will produce a semantic and clean URL. Therefore, `index.php` will be responsible to handle the request and route to the intended page.

## Example

URL is being parse in the `index.php` file. `{country}` can be change based on the country that you're desire to pull the data.  `{region}` also can be change based on the region of the country that you're desire to pull the data.

```php
http://afimaster.com/{country}
http://afimaster.com/{country}/{region}
```

* Country List  : https://covid19.ascube.net/cases/
* Regions List  : https://covid19.ascube.net/regions/

## Credit
* Original Owner  : https://github.com/AfiHisam/covid19-malaysia/
* Scraping source : https://covid19.ascube.net/
* Template source : https://github.com/ticlekiwi/API-Documentation-HTML-Template
