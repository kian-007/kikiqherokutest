<?php

function connect_to_db(){
	
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

try{  
       $pdo = new PDO("pgsql:" . sprintf(
			"host=%s;port=%s;user=%s;password=%s;dbname=%s",
			$db["host"],
			$db["port"],
			$db["user"],
			$db["pass"],
			ltrim($db["path"], "/")
		));  
       Echo "Successfully connected with myDB database";  
   }catch(Exception $e){  
	Echo "Connection failed" . $e->getMessage();  
   }  
}







<br/>
				<br/>
				<br/>
		   		<?php  
					$db = parse_url(getenv("DATABASE_URL"));

					$pdo = new PDO("pgsql:" . sprintf(
						"host=%s;port=%s;user=%s;password=%s;dbname=%s",
						$db["host"],
						$db["port"],
						$db["user"],
						$db["pass"],
						ltrim($db["path"], "/")
					));
					
					if(!$pdo){
						echo 'connection faild!';
					}else{
						echo 'connected successfully!';
					}
					$result = $pdo->query('SELECT * FROM users');
					if(!$result){
						echo 'query faild!';
					}else{
						echo 'query is alive!';
					}
					foreach ($result as $row) {
					print_r($row);
					}
					
					
				?>