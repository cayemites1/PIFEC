/**
* 
connection  information  used  by the  ORM to connect
*to your application'sdatastore.
*drivers include MySQL  Postgres Sqlite Sql server  
*see vendor\cake php\Src\Database\Driver for Complete list
*
	'Dataservice'=>[
	'default'=>[
	'className'=>'cake\Database\connection',
	'driver'=>'cake\Database\Driver\MySQL',
	'persistent'=>false,
	'host'='localhost',
	/**
	*cake PHP will use the default DB Port based on the driver selected
	*Mysql  on MANP uses lort 8889,MANP users will want to uncomment
	*the following line and set the port accordingly  
	*/
		//'port'=>'non-standard-port-number,
		'userName'=>'my-app',
		'password'=>'secret',
		'Database'=>'my-app',
		'timezone'=>'utc',
		'flag' =>[],
		'cachemetadata'=>true,
		'log'=>false,
	'email transport'=>[
	'default'=>[
	'className'=>'mail',
	//the following  keys are usd in SMTP transport
	'host'=>'localhost',
	'port'=>2 s,
	'timeout'=> '30',
	'userName'=>'user',
	'password'=>'secret',
	'client'=>'null',
	'Tls'=>'null',
	'url'=>env('email-transport-default-url',null);
	}
	}       	
		        