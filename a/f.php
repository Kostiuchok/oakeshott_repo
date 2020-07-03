<?php 
  
//	****************************	фунции  для  проверки - тестирования	*****************************
//echo "<h1>файл f.php подключен!</h1>";
//echo __FILE__;
//echo db();

function test(){
	echo "<h1>есть подключение</h1>";
}

function db_test(){
$params = parse_ini_file('config.ini');
echo $params['db.conn']."<br></br>"; 
echo $params['db.user']."<br></br>";
echo $params['db.pass']."<br></br>";

}



//	****************************	фунции  для  проверки - тестирования	*****************************

//	****************************		фунции  для  работы сайта		*****************************
function db()
{
$params = parse_ini_file('config.ini');
//$db = new PDO($params['db.conn'], $params['db.user'], $params['db.pass']);
$db = new PDO('mysql:host=oakeshot.mysql.ukraine.com.ua; dbname=oakeshot_new','oakeshot_new','s5c6vbbv'); 
$db->exec('SET CHARACTER SET utf8');
return $db;	
}


function title($i){
	
	$mas = ar_obj(title_index);	
	
	foreach($mas as $x)
	{
		if($x->i==$i){$s =$x->text; return $s;}
	}
	return $s ="";
}

function keyw($i){
	
	$mas = ar_obj(title_index);	
	
	foreach($mas as $x)
	{
		if($x->i==$i){$s =$x->keyw; return $s;}
	}
	return $s ="";
}

function des($i){
	
	$mas = ar_obj(title_index);	
	
	foreach($mas as $x)
	{
		if($x->i==$i){$s =$x->des; return $s;}
	}
	return $s ="";
}


function pages($i){
	if($i=="login") { header("refresh:0; url=servise/login.php");}
	if(file_exists($i.".php")) {
		include_once "a.php";
		include_once "header.php";
		include_once "aside.php";
		include $i.".php";
		include_once "z.php";
		}
	else header("refresh:0; url=error.php");  
}


/*
функция принимает имя таблицы и возвращает массив объектов 
*/
function ar_obj($table_name = "", $database_field = "id", $sort = "desc"){ 
	$db = db();
	$sql  = "select * from  $table_name ORDER BY $database_field $sort";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция принимает запрос (вставка, удаление, редактирование) и выполняет его
*/
function r_ex($sql){
	$db= db();
	$ok=$db->exec($sql);
	return $ok;
}

/*
функция принимает имя таблицы и id строки - возвращает строку объектов
*/
function row_id($table_name,$id){
	$db= db();
	$sql  = "select * from  $table_name WHERE id = $id";
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_OBJ);
	return $row; 
}


/*
функция для активного пункта меню
*/
function a($i,$menu){
	if($i==$menu)echo "class='is-active'";
}

/*
функция для страницы о компании - возвращает 6 последних документов
*/
function company_doc(){ 
	$db = db();
	$sql  = "select * from  company_doc ORDER BY id desc limit 6";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для авиационное страхование - возвращает все документы
*/
function avia_doc(){ 
	$db = db();
	$sql  = "select * from  aviacionnoe_strahovanie_doc ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для авиационное страхование - возвращает 4 последних документа
*/
function avia_doc_4(){ 
	$db = db();
	$sql  = "select * from  aviacionnoe_strahovanie_doc ORDER BY id desc limit 4";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для служебных страниц - возвращает все документы
*/
function special_page(){ 
	$db = db();
	$sql  = "select * from  special_page ORDER BY date desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}
/*
функция для неморского страхование - возвращает все документы - Некторые опросники страхования неморских рисков
*/
function nemorskoe(){ 
	$db = db();
	$sql  = "select * from  nemorskoe_strahovanie_doc ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для авторизации - возвращает все записи 
*/
function login(){ 
	$db = db();
	$sql  = "select * from  login ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для неморского страхование - возвращает все документы - Базовые условия страхование неморских рисков
*/
function nemorskoe1(){ 
	$db = db();
	$sql  = "select * from  nemorskoe_strahovanie_doc1 ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция для публикации-статьи - возвращает последние 4 материала для главной старницы
*/
function publications4(){ 
	$db = db();
	//  $sql  = "select * from  publications ORDER BY id desc limit 4";
        $sql  = "select * from  publications ORDER BY date desc limit 4";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}



/*
функция для публикации-статьи - возвращает все документы 
*/
function publications(){ 
	$db = db();
	$sql  = "select * from  publications ORDER BY date desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для конференций - возвращает все документы для заданного id
*/
function conference_doc($id){ 
	$db = db();
	$sql  = "select * from  conference_doc  where id_conf='$id' ORDER BY id desc";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для seminars - возвращает все документы для заданного id
*/
function seminars_doc($id){ 
	$db = db();
	$sql  = "select * from  seminars_doc  where id_conf='$id' ORDER BY id desc";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция для фотоальбом - возвращает все документы для заданного id
*/
function photoalbum_doc21($id){ 
	$db = db();
	$sql  = "select * from  photoalbum_doc  where id_conf='$id' ORDER BY id desc limit 21";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция для фтоальбом - возвращает  документы для заданного id
*/
function photoalbum_doc($id){ 
	$db = db();
	$sql  = "select * from  photoalbum_doc  where id_conf=$id ORDER BY id desc";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}
/*
функция для seminars - возвращает все seminars 
*/
function seminars(){ 
	$db = db();
	$sql  = "select * from  seminars ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для seminars - возвращает все 1 последний seminars 
*/
function seminars1(){ 
	$db = db();
	$sql  = "select * from  seminars ORDER BY id desc limit 1";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для books - возвращает все 1 последний books 
*/
function books1(){ 
	$db = db();
	$sql  = "select * from  books ORDER BY date desc limit 1";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для photoalbum - возвращает все photoalbum 
*/
function photoalbum(){ 
	$db = db();
	$sql  = "select * from  photoalbum ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для photoalbum - возвращает 1 последний photoalbum 
*/
function photoalbum1(){ 
	$db = db();
	$sql  = "select * from  photoalbum ORDER BY id desc limit 1";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция для конференций - возвращает все конференции 
*/
function conference(){ 
	$db = db();
	$sql  = "select * from  conference ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для фотоальбома - возвращает последний id 
*/
function photoalbum_id(){ 
	$db = db();
	$sql  = "select * from  photoalbum ORDER BY id desc limit 1 ";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}
/*
функция для seminars - возвращает последний id 
*/
function seminars_id(){ 
	$db = db();
	$sql  = "select * from  seminars ORDER BY id desc limit 1 ";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для conference - возвращает последний id 
*/
function conference_id(){ 
	$db = db();
	$sql  = "select * from  conference ORDER BY id desc limit 1 ";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}




/*
функция для публикации-статьи - возвращает все документы  сортироаванные по дате 
*/
function publications_date(){ 
	$db = db();
	$sql  = "select * from  publications ORDER BY date desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для публикации-статьи - возвращает неповторяющиеся года  сортироаванные по дате 
*/
function publications_y(){ 
	$db = db();
	$sql  = "select DISTINCT date_y from  publications ORDER BY date_y desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция для публикации-статьи - возвращает все документы заданного года 
*/
function publications_dat($a){ 
	$db = db();
	$sql  = "select * from  publications  where date_y='$a' ORDER BY date desc";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция для публикации-статьи - возвращает количество материалов за определенный год
*/
function publications_n($y){ 
	$db = db();
	$sql  = "select  *  from  publications where date_y='$y'";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	$n1=0;
	foreach($array_a as $n){
		$n1=$n1+$n;
	}
	return $n1;
}

/*
функция для новостей - возвращает все новости
*/
function news(){ 
	$db = db();
	$sql  = "select * from  news ORDER BY id desc ";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

/*
функция для новостей - возвращает последнию добавленную новость
	$sql  = "select * from  news ORDER BY date desc limit 2";
	
	function row_id($table_name,$id){
	$db= db();
	$sql  = "select * from  $table_name WHERE id = $id";
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_OBJ);
	return $row; 
}
*/
function news_1(){ 
	$db = db();
	$sql  = "select * from  news ORDER BY id desc limit 1";
	$result = $db->query($sql); 
	$array_a = $result->fetch(PDO::FETCH_OBJ);
	return $array_a;
}

function news2(){ 
	$db = db();
	$sql  = "select * from  news ORDER BY id desc limit 2";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}
//	****************************		фунции  для  работы сайта  		*****************************










//	****************************	образцы функций		*****************************

function start(){

	if(isset($_GET['i'])) {$i=trim(strip_tags($_GET['i'])); }
	else { 
		$i="home";
		//	header("refresh:0; url=site-under-construction.php"); 
	}
	
	if ($i=="home") include_once "a/home_header.php";
	else include_once "a/page_header.php";
	include_once "a/page_index.php";
	include_once "a/footer.php";
	
}




/*
функция принимает имя таблицы и возвращает лимитированный массив объектов 
*/
function ar_obj_lim($table_name = "",$lim_x, $database_field = "id", $sort = "desc"){ 
	$db = db();
	$sql  = "select * from  $table_name ORDER BY $database_field $sort LIMIT $lim_x";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}


/*
функция отображает последние 2 новости на главной странице 
*/
function home_news_2(){ 
	$db = db();
	$sql  = "select * from  news ORDER BY date desc limit 2";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

function doc_2(){ 
	$db = db();
	$sql  = "select * from  products_add_doc ORDER BY id desc limit 2";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}

function info_news_2(){ 
	$db = db();
	$sql  = "select * from  products_info ORDER BY id desc limit 2";
	$result = $db->query($sql); 
	$array_a = $result->fetchAll(PDO::FETCH_OBJ);
	return $array_a;
}






?>