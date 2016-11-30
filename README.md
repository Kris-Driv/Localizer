# Localizer
Simple to use translate package for PocketMine-MP

###Loading languages
```php
Localizer::loadLanguages($this->getDataFolder() . "languages");
```
or
```php
$localizer = new Localizer('en', $this->getDataFolder(). "languages");
```

Localizer class provides a helper function to copy folder with its contents to destination folder. It's used to transfer default language files from plugin to resource folder.

###Using

Get english text under key 'line' from file example 
```php
$localizer->get('example.line');
```
Pointing to file is redundant if the key is unique in the language so you can simply call ```php $localizer->get('line') ```

Every Localizer object is saved into static variable in Localizer class and manage them with static functions
```
Localizer::trans('line')
```
If you don't provide locale code then Localizer::DEFAULT_LANGUAGE ("en") will be used. Also you can use this method
```
Localizer::en('line');
```
Each of functions above accepts these next two arguments: ```php ..., array $params = [], string $default = null```

###Example:
See [this example](https://github.com/Chris-Prime/LibLoader-Example)
