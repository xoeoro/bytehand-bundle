bytehand-bundle
=============

composer
------

```
composer require xoeoro/bytehand-bundle:dev-master
```

AppKernel.php
------

```php
$bundles = array(
   // Other bundles
   new Xoeoro\BytehandBundle\XoeoroBytehandBundle(),
);
```

config.yml 
-------

```yaml
xoeoro_bytehand:
    id: %xoeoro.bytehand.id%
    key: %xoeoro.bytehand.key%
    from: %xoeoro.bytehand.from%
```

parameters.yml.dist
-------

```yaml
parameters:
    xoeoro.bytehand.id: ~
    xoeoro.bytehand.key: ~
    xoeoro.bytehand.from: SMS-INFO
```

parameters.yml
-------

```yaml
parameters:
    xoeoro.bytehand.id: YOUR_BYTEHAND_ID
    xoeoro.bytehand.key: YOUR_BYTEHAND_KEY
    xoeoro.bytehand.from: YOUR_BYTEHAND_FROM
```

Usage:
-------

```php
$byteHandService = $this->container->get('xoeoro.bytehand');
$smsStatus = $byteHandService->send($number, $message);
```
