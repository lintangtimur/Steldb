[![Latest Stable Version](https://poser.pugx.org/lintangtimur/steldb/v/stable)](https://packagist.org/packages/lintangtimur/steldb)
[![GitHub issues](https://img.shields.io/github/issues/lintangtimur/Steldb.svg?style=flat-square)](https://github.com/lintangtimur/Steldb/issues)
[![GitHub license](https://img.shields.io/github/license/lintangtimur/Steldb.svg?style=flat-square)](https://github.com/lintangtimur/Steldb/blob/master/LICENSE)

# About Steldb
Steldb adalah library php yang bertujuan mempermudah pelaksanaan eksekusi query database, mungkin anda sudah pakai PHP ORM semacam Doctrine, Propel, atau RedbeanPHP.
Namun Steldb digunakan hanya untuk project kecil saja, dan mempermudah tugas kuliah.

## Table Of Content

[Requirement](#requirement)  
[Installation](#installation)  
[Getting Started](#getting-started)  
[Example](#example)  
[Bug/Error/Suggestion](#bugerrorsuggestion)  
[Wiki](https://github.com/lintangtimur/Steldb/wiki)  
[Contributing](#contributing)  
## Requirement
1. Sudah terinstall Composer
2. Saya menggunakan PHP versi 7, jadi untuk PHP untuk versi sebelumnya, belum dicoba.

## Installation
Install Steldb menggunakan [Composer](https://getcomposer.org/).

<code>composer require lintangtimur/steldb </code>

## Getting Started
Buat file ```.env``` atau rename file ```.env-example```, dan sesuaikan dengan database yang akan dipakai

dalam php kalian inputkan
```php
use Dotenv\Dotenv;
use Steldb\DB;

require "vendor/autoload.php";

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$db = new DB;
```

## Example
1. select seluruh table
```php
$db->selectAll('siswa');
```
2. insert
```php
$db->insert('table', []);
```
3. atau dapat menggunakan perintah sql mentahan
```php
$db->RAW("",[]);
```

lebih lanjut silahkan membuka ```index.html``` di folder documentation
## Bug/Error/Suggestion
Jika menemukan bug, error, maupun sugesti bisa menambahkan issue baru
[Create Issue](https://github.com/lintangtimur/Steldb/issues)

## Contributing
Library ini bebas digunakan, dan opensource, kontribusi juga welcome. Mohon bantuannya jika ada yang salah kalian dapat membantu saya dalam mengembangkan ini
- Fork repository ini
- Clone to your local
- Push and make pull request

## License
```
MIT License

Copyright (c) 2017 lintangtimur

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
