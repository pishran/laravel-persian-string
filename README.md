# Laravel Persian String

تبدیل خودکار حروف، اعداد و کاراکترهای عربی، انگلیسی و ... به حروف، اعداد و کاراکترهای فارسی در مدل های لاراول


```php
use Illuminate\Database\Eloquent\Model;
use Pishran\LaravelPersianString\HasPersianString;

class Post extends Model
{
    use HasPersianString;

    protected $persianStrings = [
        'title',
        'summary',
        'content',
    ];
}
```

## روش نصب

برای نصب و استفاده از این پکیج می توانید از کمپوسر استفاده کنید:

`composer require pishran/laravel-persian-string`

## پیکربندی

انتشار فایل پیکربندی:

`php artisan vendor:publish --provider="Pishran\LaravelPersianString\ServiceProvider"`

جهت شخصی سازی قوانین تبدیل، فایل پیکربندی را ویرایش کنید:

`config/persian-string.php`