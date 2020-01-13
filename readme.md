# Composer Package

## used package of packagist.org

```// create a log channel
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log',
 Monolog\Logger::WARNING));

// add records to the log
$log->warning((new Hello())->say('William'));
```

### app.log

```// app log
[2020-01-13T19:40:04.124592-03:00] name.WARNING: Hello William [] []
```
