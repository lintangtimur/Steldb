# About Steldb
Steldb adalah library php yang bertujuan mempermudah pelaksanaan eksekusi query database, mungkin anda sudah pakai PHP ORM semacam Doctrine, Propel, atau RedbeanPHP.
Namun Steldb digunakan hanya untuk project kecil saja, dan mempermudah tugas kuliah.

## Table Of Content
[Requirement](#requirement)

[Installation](#installation)

[Getting Started](#getting-started)

[Example](#example)

[Bug/Error/Suggestion](#bugerrorsuggestion)

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
