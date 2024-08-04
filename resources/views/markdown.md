#### Theme Switcher


### .env (add this line)
 ```html
 ACT_THEME = light
```

### .env.example (add this line)
 ```html
 ACT_THEME = light
```

### config/app.php (add at end of file)

```php
/*
|--------------------------------------------------------------------------
|Theme y Selector
|--------------------------------------------------------------------------
*/

    'act_theme' => env('ACT_THEME', 'light'),
```
### App/Http/Controllers/ThemeController.php (create a new file)
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ThemeController extends Controller
{
    public function switch($theme)
    {
        Session::put([
            'themeLocal' => $theme,
        ]);
        return Redirect::back();
    }
}
```
### App/Http/Middleware/themes.php -(create a new file)

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Theme
{
    public function handle(Request $request, Closure $next): Response
    {
         $themeSesion = Session::get('themeLocal');
         if(!$themeSesion)
            Session::put('themeLocal', 'light');
         return $next($request);
    }
}
```

### resources/views/layouts/header.blade.php (add where you want the menu theme to be displayed )
```php
                <!-- DropDown -->
                <div class="relative z-10">
                    <div class="relative inline-flex dropdown">
                        <button
                            class="inline-flex items-center justify-center gap-2 px-3 py-1 text-sm font-semibold text-center text-white transition-all duration-500 bg-indigo-600 rounded-full shadow-xs cursor-pointer dropdown-toggle hover:bg-indigo-700"
                            data-target="dropdown-with-icon" type="button">
                           <!--Put yor link name -->
                            {{ __('utiles.theme') }}
                        </button>
                        <div aria-labelledby="dropdown-with-icon"
                            class="absolute hidden mt-2 bg-white shadow-lg dropdown-menu open top-full min-w-40 rounded-xl" id="dropdown-with-icon">
                            <x-theme-link></x-theme-link>
                        </div>
                    </div>
                </div>
                <!-- DropDown -->
```

### App/Http/Middleware/Theme.php (create a new file)
```php

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Theme
{
    public function handle(Request $request, Closure $next): Response
    {
         $themeSesion = Session::get('themeLocal');
         if(!$themeSesion)
            Session::put('themeLocal', 'light');
         return $next($request);
    }
}
```
### resources/views/components/theme-link.blade.php (create a new file)
```php
@props([
    //List Your Themes in array
    'themes'=> [
        "light",
        "dark",
        "aqua",
        "cupcake",
        "retro",
],
])
<ul class="py-2">
@foreach ($themes as $theme)
   <a class="flex items-center gap-3 px-6 py-2 font-medium text-gray-900 capitalize hover:bg-gray-100" href="{{ route('theme', $theme) }}">{{ $theme }}</a>
@endforeach
</ul>
```

### routes/web.php

```php
Route::get('/theme/{theme}', [ThemeController::class, 'switch'])->name('theme');

#### In your template:
### Replace :

```php
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
```

### For
```php
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ Session::get('themeLocal') }}">
```
