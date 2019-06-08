<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Serg</title>
    </head>
    <body>

        <div class="article">
            hello world2
        </div>
         <?php
	 require_once 'vendor/autoload.php';
	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;

	echo 'hello';
	// create a log channel
	$log = new Logger('name');
	$log->pushHandler(new StreamHandler('errors/your.log', Logger::WARNING));

	// add records to the log
	$log->warning('Foo');
	$log->error('Bar');
	
	
	 
	 ?>
    </body>
</html>