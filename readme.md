# Quotation App Laravel

Quotation App developed in Laravel. 

1. This projects is developed in end to end Laravel. You can add Author and their Quotation.
2. Single Author can have many quotations.
3. Laravel's proper validation has been used
4. Name filter has been set. If clicked in pubished Author's name, shows all the quotations written by that author
5. Delete route has been set so that can be deleted easily, shows proper message.
6. Laravel's pagination is used to organize 6 data per page.
7. Database is created with migration method i.e. php artisan make:model Author -m and php artisan make:model Quotation -m

## Installation
1. Clone or Download the repository and keep it in server or local server(like XAMPP).
2. Create a database and upload the laravel.sql file
3. Open .env file and configure like below:

```
DB_CONNECTION=mysql        //Database Type
DB_HOST=localhost          //Server Type
DB_DATABASE=laravel        //Database Name
DB_USERNAME=root           //Username
DB_PASSWORD=123456         //Password

```
4. Extract the vendor.zip compressed folder, keep it in root directory of the folder
5. Run this project: Eg. localhost/Quotes-App-Laravel

  
## Preview


![Screenshot of Quotes App ](https://cloud.githubusercontent.com/assets/15896579/25284799/d1b5c9d8-26d5-11e7-9f08-d4857755916e.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App ](https://cloud.githubusercontent.com/assets/15896579/25284804/d3781f50-26d5-11e7-9df6-132a2a665880.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App ](https://cloud.githubusercontent.com/assets/15896579/25284809/d640e866-26d5-11e7-9b9b-4e0b251e17f7.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25284811/d870b12a-26d5-11e7-80d4-9f7c5140398f.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25284814/dab5ce52-26d5-11e7-9965-fd0893102720.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25284835/edff1c52-26d5-11e7-807a-070698356c7f.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25284845/f1d9284a-26d5-11e7-839e-d9eabf604316.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25284851/f60fa38a-26d5-11e7-8ea3-673c63f13bfd.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25284865/ffad9884-26d5-11e7-8fa9-a6b02e766683.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>


<br/><br/><br/>



## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

