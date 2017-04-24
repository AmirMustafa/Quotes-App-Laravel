# Quotation App Laravel

Quotation App deveoped in Laravel. 

1. This project is developed in end to end Laravel. You can add Author and their Quotation.
2. Single Author can have many quotations.
3. Laravel's proper validation has been used
4. Name filter has been set. If clicked in pubished Author's name, shows all the quotations written by that author
5. Delete route has been set so that can be deleted easily, shows proper message.
6. Laravel's pagination is used to organize 6 data per page.
7. Database is created with migration method i.e. php artisan make:model Author -m and php artisan make:model Quotation -m
8. Proper Mail Configuration coding are done to receive mails. (User will receive mails in their described email).
9. Email contain callback mail link.
10. Proper security coding is maintained with the help of middleware.

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

4. For Mails you can add your server details below. 
For Testing purpose Goto to [Mailtrap](https://mailtrap.io/) which provides free mails, good for testing. Signup and its dashboard you will find username and password. 
For configuring in our Laravel Project open .env file and configure like below:

```

MAIL_DRIVER=smtp		   //Mail Configuration are done 
MAIL_HOST=mailtrap.io      //write this
MAIL_PORT=2525			   // port will be 2525 for default
MAIL_USERNAME=7888.........36  	//your unique username
MAIL_PASSWORD=e5373f.....843  	//your unique password
MAIL_ENCRYPTION=null

```
5. Extract the vendor.zip compressed folder, keep it in root directory of the folder
6. Run this project: Eg. localhost/Quotes-App-Laravel

  
## Preview


![Screenshot of Quotes App ](https://cloud.githubusercontent.com/assets/15896579/25339123/463973d6-291f-11e7-80d6-0b4c6fc4270f.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App ](https://cloud.githubusercontent.com/assets/15896579/25339126/47e9942c-291f-11e7-94d7-5debcdbb2eb5.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App ](https://cloud.githubusercontent.com/assets/15896579/25339134/4a171544-291f-11e7-94b3-6cee74cb63d8.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339139/4d43d680-291f-11e7-834a-211865054c36.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339146/53b969b2-291f-11e7-86c5-62db3f894c38.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339155/5a91b67c-291f-11e7-8a0a-78cd4011d705.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339165/61283790-291f-11e7-815f-af3240b24aa8.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339174/65f40b0a-291f-11e7-8f4c-829e09d071d3.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339183/6b070f16-291f-11e7-95f8-c5fb55f2f28a.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339191/6f7fc95c-291f-11e7-9c78-0f2f92030927.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339201/7514392a-291f-11e7-8277-361ae48c995e.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339208/7af99f1a-291f-11e7-80ab-f1a32a8be88d.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339217/7fd2f0e0-291f-11e7-9c59-83b886c4aa4c.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339226/84b946ea-291f-11e7-9691-2242c841d91b.png?raw=true "Screenshot of Quotes App")
<br/><br/><br/>

![Screenshot of Quotes App](https://cloud.githubusercontent.com/assets/15896579/25339229/88512944-291f-11e7-92e9-1c0cf21f35ff.png?raw=true "Screenshot of Quotes App")
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

