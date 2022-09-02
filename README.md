

## Requirements
- HTTP web server - Ex. Apache, Nginx, IIS
- PHP version from 5.6 upto 8.1.1 (version 7.3 is recommended)
- MySQL version 4.1 and above with Innodb tables enabled, or any MariaDB version
- A web browser with HTML5 compatibility

## Installation
### Manual installation
1. [Download the latest official ERP ZIPFILE.]
2. Unzip the downloaded file.
3. Everything inside the folder you unzipped needs to be uploaded/copied to your webserver, for example, into your `public_html` or `www` or `html` or `htdocs` folder (the folder will already exist on your webserver).
4. In your browser, enter the address to your site, such as: www.yourdomain.com (or if you uploaded it into another subdirectory such as NotrinosERP use www.yourdomain.com/gl-erp)
5. Follow the instructions that appear in your browser for installation.
6. After successful installation please remove `install` folder for safety reasons. You won't need it any more.

### Composer
Run this command in an empty location that you want NotrinosERP to be installed in:  
`composer create-project docugs/gl-erp:master`


