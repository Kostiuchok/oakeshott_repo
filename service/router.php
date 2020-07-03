<?php 
session_start();

include "../a/f.php";

// *************************************************  	title	 ***********************************************
if(isset($_POST['add_title'])){
	
	$i= trim($_POST['i']);
	$title=$_POST['title'];

	$z="insert into title_index(i,text) value('$i','$title')";
	$ok=r_ex($z);	
	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=title"); 
		}
		
}



if(isset($_POST['del_title'])){
	$id=trim($_POST['id_title']);
	$z="delete from title_index  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=title"); };
}



if(isset($_POST['edit_title'])){
	$i= trim($_POST['i_edit']);
	$title=$_POST['title_edit'];
	$id=trim($_POST['id_title']);
	$z="update title_index set i='$i', text='$title' WHERE id='$id'";
	$ok=r_ex($z);
	
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=title"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=title"); 
		}
//	***********************************************************************************		
	/*
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=title"); };
    */
}
// *************************************************  	title	 ***********************************************


// *************************************************  	тема оформления	 ***********************************************
if(isset($_POST['css_k'])){
	$css=$_POST['css'];
	$i=$_POST['i'];
	$z="update tema_css set css_url='$css' WHERE id=8";
	$ok=r_ex($z);
	header("refresh:0; url=index.php?i=$i");
}
// *************************************************  	тема офрмления	 ***********************************************




// *************************************************  	о компании	 ***********************************************
	if(isset($_POST['company_text'])){
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	//$z="insert into company_text(title, text) value('$title','$text')";
	$z="update company_text set title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=company_text"); 
		}
			
}

if(isset($_POST['company_doc'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"]))  {$filename=$_FILES["filename"]["name"];  }
	
	$z="insert into company_doc(name,title, filename) value('$name','$title','$filename')";
	//$z="update company_doc set name='$name', title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=company_doc"); 
		}
			
}

if(isset($_POST['company_doc_del'])){
	$id=trim($_POST['doc_id']);
	$z="delete from company_doc  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=company_doc"); };
}

if(isset($_POST['company_doc_edit'])){
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename=$_POST['filename_old'];}
	
	$name=$_POST['name'];
	$title=$_POST['title'];
	$id=$_POST['id'];
	
	$z="update company_doc set name='$name', title='$title', filename='$filename' WHERE id='$id'";
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=company_doc"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=company_doc"); 
		}
//	***********************************************************************************		
/*	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=company_doc"); };
*/    
}

if(isset($_POST['company_doc_edit_url'])){
	$id= $_POST['doc_id'];
	header("refresh:0; url=index.php?i=company_doc_edit&id=$id"); 
}
// *************************************************  	о компании	 ***********************************************




// *************************************************  	виды деятельности	 ***********************************************
if(isset($_POST['morskoe_strahovanie'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	//$z="insert into morskoe_strahovanie(name,title, text) value('$name','$title','$text')";
	$z="update morskoe_strahovanie set name='$name', title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
			
}

// ************************************   морское страхование  ***************************	morskoe_strahovanie_add_doc1

if(isset($_POST['morskoe_strahovanie_add_doc1'])){
	$name=$_POST['name'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename="файл не выбран";}
	$z="insert into morskoe_strahovanie_doc_1(name, filename) value('$name','$filename')";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
		
}

if(isset($_POST['morskoe_strahovanie_doc_1_del'])){
	$id=$_POST['id'];
	$z="delete from morskoe_strahovanie_doc_1  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_1"); };
}

//	*******************************************************************************************	morskoe_strahovanie_add_doc2

if(isset($_POST['morskoe_strahovanie_add_doc2'])){
	$name=$_POST['name'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename="файл не выбран";}
	$z="insert into morskoe_strahovanie_doc_2(name, filename) value('$name','$filename')";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
		
}

if(isset($_POST['morskoe_strahovanie_doc_2_del'])){
	$id=$_POST['id'];
	$z="delete from morskoe_strahovanie_doc_2  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_1"); };
}

//	*************************************************************************************

if(isset($_POST['morskoe_strahovanie_doc_1_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=morskoe_strahovanie_doc_1_edit&id=$id"); 
}
if(isset($_POST['morskoe_strahovanie_doc_2_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=morskoe_strahovanie_doc_2_edit&id=$id"); 
}


if(isset($_POST['morskoe_strahovanie_doc_1_edit'])){
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename=$_POST['filename_old'];}
	
	$name=$_POST['name'];
	$id=$_POST['id'];
	
	$z="update morskoe_strahovanie_doc_1 set name='$name',  filename='$filename' WHERE id='$id'";
	$ok=r_ex($z);
	//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
//	***********************************************************************************		
	/*
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_1"); };
    */
}


if(isset($_POST['morskoe_strahovanie_doc_2_edit'])){
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename=$_POST['filename_old'];}
	
	$name=$_POST['name'];
	$id=$_POST['id'];
	
	$z="update morskoe_strahovanie_doc_2 set name='$name',  filename='$filename' WHERE id='$id'";
	$ok=r_ex($z);
	//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_1"); 
		}
//	***********************************************************************************		
/*	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_1"); };
  */  
}

// ************************************   морское страхование  ***************************




// ****************************** 		Неморское страхование 		***********************************


if(isset($_POST['nemorskoe_strahovanie'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	//$z="insert into nemorskoe_strahovanie(name,title, text) value('$name','$title','$text')";
	$z="update nemorskoe_strahovanie set name='$name', title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
			
}
// **********************	nemorskoe_strahovanie_doc_add
if(isset($_POST['nemorskoe_strahovanie_doc_add'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) 
	{ $filename=$_FILES["filename"]["name"];$size = round($_FILES["filename"]["size"]/1024,2); }
	else {$filename="файл не выбран";$size="no";}
	
	
	$z="insert into nemorskoe_strahovanie_doc(name, title, filename, size) value('$name', '$title', '$filename', '$size')";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
		
}


if(isset($_POST['nemorskoe_strahovanie_doc_del'])){
	$id=$_POST['id'];
	$z="delete from nemorskoe_strahovanie_doc  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_2"); };
}

if(isset($_POST['nemorskoe_strahovanie_doc_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=nemorskoe_strahovanie_doc_edit&id=$id"); 
}



if(isset($_POST['nemorskoe_strahovanie_doc_edit'])){
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) 
	{ $filename=$_FILES["filename"]["name"];$size = round($_FILES["filename"]["size"]/1024,2); }
	else {$filename=$_POST['filename_old'];$size=$_POST['size'];}
	
	$title=$_POST['title'];
	$name=$_POST['name'];
	$id=$_POST['id'];
	
	$z="update nemorskoe_strahovanie_doc set name='$name', title='$title', size='$size', filename='$filename' WHERE id='$id'";
	$ok=r_ex($z);
	//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
//	***********************************************************************************		
/*	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_2"); };
  */  
}


//	********************************** Базовые условия страхование неморских рисков	***************************************

if(isset($_POST['nemorskoe_strahovanie_doc1_add'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) 
	{ $filename=$_FILES["filename"]["name"];$size = round($_FILES["filename"]["size"]/1024,2); }
	else {$filename="файл не выбран";$size="no";}
	
	
	$z="insert into nemorskoe_strahovanie_doc1(name, title, filename, size) value('$name', '$title', '$filename', '$size')";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
		
}


if(isset($_POST['nemorskoe_strahovanie_doc1_del'])){
	$id=$_POST['id'];
	$z="delete from nemorskoe_strahovanie_doc1  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_2"); };
}

if(isset($_POST['nemorskoe_strahovanie_doc1_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=nemorskoe_strahovanie_doc1_edit&id=$id"); 
}



if(isset($_POST['nemorskoe_strahovanie_doc1_edit'])){
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) 
	{ $filename=$_FILES["filename"]["name"];$size = round($_FILES["filename"]["size"]/1024,2); }
	else {$filename=$_POST['filename_old'];$size=$_POST['size'];}
	
	$title=$_POST['title'];
	$name=$_POST['name'];
	$id=$_POST['id'];
	
	$z="update nemorskoe_strahovanie_doc1 set name='$name', title='$title', size='$size', filename='$filename' WHERE id='$id'";
	$ok=r_ex($z);
	//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_2"); 
		}
//	***********************************************************************************		
/*	
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_2"); };
*/    
}


//	********************************** Базовые условия страхование неморских рисков	***************************************

// ****************************** 		Неморское страхование 		***********************************



//	*************************************************************	Авиационное страхование	  ************************************

if(isset($_POST['aviacionnoe_strahovanie'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	//$z="insert into aviacionnoe_strahovanie(name,title, text) value('$name','$title','$text')";
	$z="update aviacionnoe_strahovanie set name='$name', title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_3"); 
		}
			
}

if(isset($_POST['aviacionnoe_strahovanie_add_doc'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename="файл не выбран";}
	$z="insert into aviacionnoe_strahovanie_doc(name, title, filename) value('$name', '$title', '$filename')";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_3"); 
		}
		
}

if(isset($_POST['aviacionnoe_strahovanie_doc_del'])){
	$id=$_POST['id'];
	$z="delete from aviacionnoe_strahovanie_doc  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_3"); };
}


if(isset($_POST['aviacionnoe_strahovanie_doc_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=aviacionnoe_strahovanie_doc_edit&id=$id"); 
}



if(isset($_POST['aviacionnoe_strahovanie_doc_edit'])){
	
	if(copy($_FILES["filename"]["tmp_name"],"../docs/".$_FILES["filename"]["name"])) { $filename=$_FILES["filename"]["name"]; }
	else {$filename=$_POST['filename_old'];}
	$title=$_POST['title'];
	$name=$_POST['name'];
	$id=$_POST['id'];
	
	$z="update aviacionnoe_strahovanie_doc set name='$name', title='$title', filename='$filename' WHERE id='$id'";
	$ok=r_ex($z);
	//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=activities_3"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_3"); 
		}
//	***********************************************************************************		
/*	
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=activities_3"); };
 */   
}




//	*************************************************************	Авиационное страхование	  ************************************

if(isset($_POST['obligatornoe'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	//$z="insert into obligatornoe(name,title, text) value('$name','$title','$text')";
	$z="update obligatornoe set name='$name', title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_4"); 
		}
			
}

if(isset($_POST['nestandartnoe'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	//$z="insert into nestandartnoe(name,title, text) value('$name','$title','$text')";
	$z="update nestandartnoe set name='$name', title='$title', text='$text' WHERE id=1";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=activities_5"); 
		}
			
}
// *************************************************  	виды деятельности	 ***********************************************




// *************************************************  	публикации	 ***********************************************

//	******************************	книги	**************************
if(isset($_POST['books_add'])){
	$name=$_POST['name'];
	$title=$_POST['title'];
	if(copy($_FILES["filename"]["tmp_name"],"../books/".$_FILES["filename"]["name"])) { $book_img=$_FILES["filename"]["name"]; }
	else {$book_img="book.jpg";}
	$author=$_POST['author'];
	$editor=$_POST['editor'];
	$date=$_POST['date'];
	$copies=$_POST['copies'];
	$price=$_POST['price'];
	
	
	$z="insert into books(name, title, book_img, author, editor, date, copies, price) 
	value('$name', '$title', '$book_img', '$author', '$editor', '$date', '$copies', '$price' )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=publications_books"); 
		}
		
}



if(isset($_POST['books_edit'])){
	$id=$_POST['id'];
	$filename_old=$_POST['filename_old'];
	
	$name=$_POST['name'];
	$title=$_POST['title'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../books/".$_FILES["filename"]["name"])) { $book_img=$_FILES["filename"]["name"]; }
	else {$book_img = $filename_old;}
	
	$author=$_POST['author'];
	$editor=$_POST['editor'];
	$date=$_POST['date'];
	$copies=$_POST['copies'];
	$price=$_POST['price'];


$z="update books set name='$name', title='$title', book_img='$book_img', author='$author', editor='$editor', date='$date', copies='$copies', price='$price'	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=publications_books"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=publications_books"); 
		}
//	***********************************************************************************		
}



if(isset($_POST['books_del'])){
	$id=$_POST['id'];
	$z="delete from books  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=publications_books"); };
}


if(isset($_POST['books_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=publications_books_edit&id=$id"); 
}



//	******************************	книги	**************************
if(isset($_POST['publications_add'])){
	$name=$_POST['name'];
	if(copy($_FILES["filename"]["tmp_name"],"../publications_article/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; 
		  $size = round($_FILES["filename"]["size"]/1024,2);
		}
	else {
			$filename="нет файла";
			$size="no";
		 }
	$date=$_POST['date'];
	$date_y = substr($date, 0, 4);

	$z="insert into publications(name,filename, size, date, date_y ) 
	value('$name', '$filename', '$size', '$date', '$date_y' )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=publications_article"); 
		}
		
}

if(isset($_POST['publications_del'])){
	$id=$_POST['id'];
	$z="delete from publications  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=publications_article"); };
}


if(isset($_POST['publications_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=publications_article_edit&id=$id"); 
}

if(isset($_POST['publications_edit'])){
	$id=$_POST['id'];
	$filename_old=$_POST['filename_old'];
	$size_old=$_POST['size_old'];
	$name=$_POST['name'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../publications_article/".$_FILES["filename"]["name"])) 
		{ 
			$filename=$_FILES["filename"]["name"]; 
			$size = round($_FILES["filename"]["size"]/1024,2);
		}
	else {
			$filename = $filename_old;
			$size = $size_old;
		 }
	
	$date=$_POST['date'];
	$date_y = substr($date, 0, 4);


$z="update publications set name='$name', filename='$filename', size='$size',  date='$date', date_y='$date_y'	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=publications_article"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=publications_article"); 
		}
//	***********************************************************************************		
}

// *************************************************  	публикации	 ***********************************************




// *************************************************  	конференции - семинары	 ***********************************************
/*
if(isset($_POST['seminars_create'])){
	
	$date=date('Y-m-d');
	
	$z="insert into seminars( date)	value('$date' )";
	$ok=r_ex($z);
		
	if($ok) 
		{	
			$idx=seminars_id(); $id=$idx->id;
			echo  "<script>alert('Семинар создан!  Заполните необходимые поля информацией!');</script>";
			header("refresh:0; url=index.php?i=seminars_edit&id=$id"); 
		}
		
}
*/
// *************************************************  	конференции 	 ***********************************************
//	conference_create
if(isset($_POST['conference_create'])){
	
	$date=date('Y-m-d');
	
	$z="insert into conference( date)	value('$date' )";
	$ok=r_ex($z);
		
	if($ok) 
		{	
			$idx=conference_id(); $id=$idx->id;
			echo  "<script>alert('Конференция создана!  Заполните необходимые поля информацией!');</script>";
			header("refresh:0; url=index.php?i=conference_edit&id=$id"); 
		}
		
}

if(isset($_POST['conference_del'])){
	$id=$_POST['id'];
	$z="delete from conference  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=conference_1"); };
}


if(isset($_POST['conference_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=conference_edit&id=$id"); 
}


if(isset($_POST['conference_edit'])){
	$id=$_POST['id'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$text=$_POST['text'];
	

$z="update conference set  date='$date', name='$name', address='$address', text='$text' 	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=conference_1"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=conference_1"); 
		}
//	***********************************************************************************		
}

if(isset($_POST['conference_doc_add'])){
	$id_conf=$_POST['id_conf'];
	$url_name=$_POST['url_name'];
	if(copy($_FILES["filename"]["tmp_name"],"../conference_doc/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; 
		  $size = round($_FILES["filename"]["size"]/1024,2);
		}
	else {
			$filename="нет файла";
			$size="no";
		 }
	

	$z="insert into conference_doc(id_conf, url_name, filename, size  ) 
	value('$id_conf', '$url_name', '$filename', '$size'  )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=conference_edit&id=$id_conf"); 
		}
// сохранение информации из верхней формы
$id=$_POST['id'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$text=$_POST['text'];
	

$z1="update conference set  date='$date', name='$name', address='$address', text='$text' 	WHERE id='$id'";
$ok1=r_ex($z1);	
//	***********************************************************************************		
/*
	if($ok1==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=conference_edit&id=$id_conf"); 
		}
	if($ok1!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=conference_edit&id=$id_conf"); 
		}
*/		
//	*******************	
}




if(isset($_POST['conference_doc_del'])){
	$id=$_POST['id']; // id удаляемого файла
	$id_conf=$_POST['id_conf']; // id конференции
	$z="delete from conference_doc  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=conference_edit&id=$id_conf"); };
}









// *************************************************  	конференции 	 ***********************************************
// *************************************************  	 семинары	 ***********************************************





if(isset($_POST['seminars_create'])){
	
	$date=date('Y-m-d');
	
	$z="insert into seminars( date)	value('$date' )";
	$ok=r_ex($z);
		
	if($ok) 
		{	
			$idx=seminars_id(); $id=$idx->id;
			echo  "<script>alert('Семинар создан!  Заполните необходимые поля информацией!');</script>";
			header("refresh:0; url=index.php?i=seminars_edit&id=$id"); 
		}
		
}

if(isset($_POST['seminars_del'])){
	$id=$_POST['id'];
	$z="delete from seminars  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=seminars_1"); };
}


if(isset($_POST['seminars_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=seminars_edit&id=$id"); 
}


if(isset($_POST['seminars_edit'])){
	$id=$_POST['id'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$text=$_POST['text'];
	

$z="update seminars set  date='$date', name='$name', address='$address', text='$text' 	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=seminars_1"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=seminars_1"); 
		}
//	***********************************************************************************		
}

if(isset($_POST['seminars_doc_add'])){
	$id_conf=$_POST['id_conf'];
	$url_name=$_POST['url_name'];
	if(copy($_FILES["filename"]["tmp_name"],"../seminars_doc/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; 
		  $size = round($_FILES["filename"]["size"]/1024,2);
		}
	else {
			$filename="нет файла";
			$size="no";
		 }
	

	$z="insert into seminars_doc(id_conf, url_name, filename, size  ) 
	value('$id_conf', '$url_name', '$filename', '$size'  )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=seminars_edit&id=$id_conf"); 
		}
// сохранение информации из верхней формы
$id=$_POST['id'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$text=$_POST['text'];
	

$z1="update seminars set  date='$date', name='$name', address='$address', text='$text' 	WHERE id='$id'";
$ok1=r_ex($z1);	
//	***********************************************************************************		
/*
	if($ok1==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=seminars_edit&id=$id_conf"); 
		}
	if($ok1!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=seminars_edit&id=$id_conf"); 
		}
*/		
//	*******************	
}




if(isset($_POST['seminars_doc_del'])){
	$id=$_POST['id']; // id удаляемого файла
	$id_conf=$_POST['id_conf']; // id конференции
	$z="delete from seminars_doc  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=seminars_edit&id=$id_conf"); };
}





// *************************************************  	 семинары	 ***********************************************



// *************************************************  	конференции - семинары	 ***********************************************




// *************************************************  	новости	 ***********************************************
if(isset($_POST['news_add'])){
	$name=$_POST['name'];
	if(copy($_FILES["filename"]["tmp_name"],"../news/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; }
	else {
			$filename="no";
		 }
	$date=$_POST['date'];
	$title=$_POST['title'];
	$text=$_POST['text'];
	
	$z="insert into news(name, filename, date, title, text  ) 
	value('$name', '$filename', '$date', '$title', '$text' )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=news_kat"); 
		}
		
}

if(isset($_POST['news_edit'])){
	$id=$_POST['id'];
	$filename_old=$_POST['filename_old'];
	$name=$_POST['name'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../news/".$_FILES["filename"]["name"])) 
		{ 
			$filename=$_FILES["filename"]["name"]; 
		}
	else {
			$filename = $filename_old;
		 }
	
	$date=$_POST['date'];
	$title=$_POST['title'];
	$text=$_POST['text'];

$z="update news set name='$name', filename='$filename', title='$title',  date='$date', text='$text'	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=news_kat"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=news_kat"); 
		}
//	***********************************************************************************		
}

if(isset($_POST['news_del'])){
	$id=$_POST['id'];
	$z="delete from news  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=news_kat"); };
}


if(isset($_POST['news_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=news_edit&id=$id"); 
}



if(isset($_POST['centr_news'])){
	$id=$_POST['id'];
$z="update centr_news set centr_id='$id' WHERE id=1";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=central_news"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=central_news"); 
		}
//	***********************************************************************************		
}
// *************************************************  	новости	 ***********************************************





// *************************************************  	партнеры	 ***********************************************
if(isset($_POST['partners_add_1'])){
	$name=$_POST['name'];
	if(copy($_FILES["filename"]["tmp_name"],"../partners/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; }
	else {
			$filename="no";
		 }
	
	$z="insert into partners1(name, filename  )	value('$name', '$filename' )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=partners"); 
		}
		
}

if(isset($_POST['partners_add_2'])){
	$name=$_POST['name'];
	if(copy($_FILES["filename"]["tmp_name"],"../partners/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; }
	else {
			$filename="no";
		 }
	
	$z="insert into partners2(name, filename  )	value('$name', '$filename' )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=partners"); 
		}
		
}

if(isset($_POST['partners1_del'])){
	$id=$_POST['id'];
	$z="delete from partners1  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=partners"); };
}


if(isset($_POST['partners1_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=partners1_edit&id=$id"); 
}

if(isset($_POST['partners2_del'])){
	$id=$_POST['id'];
	$z="delete from partners2  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=partners"); };
}


if(isset($_POST['partners2_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=partners2_edit&id=$id"); 
}


if(isset($_POST['partners_edit_1'])){
	$id=$_POST['id'];
	$filename_old=$_POST['filename_old'];
	$name=$_POST['name'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../partners/".$_FILES["filename"]["name"])) 
		{ 
			$filename=$_FILES["filename"]["name"]; 
		}
	else {
			$filename = $filename_old;
		 }

$z="update partners1 set name='$name', filename='$filename'	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=partners"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=partners"); 
		}
//	***********************************************************************************		
}

if(isset($_POST['partners_edit_2'])){
	$id=$_POST['id'];
	$filename_old=$_POST['filename_old'];
	$name=$_POST['name'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../partners/".$_FILES["filename"]["name"])) 
		{ 
			$filename=$_FILES["filename"]["name"]; 
		}
	else {
			$filename = $filename_old;
		 }

$z="update partners2 set name='$name', filename='$filename'	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=partners"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=partners"); 
		}
//	***********************************************************************************		
}

// *************************************************  	партнеры	 ***********************************************





// *************************************************  	фотоальбом	 ***********************************************



if(isset($_POST['photoalbum_create'])){
	
	$date=date('Y-m-d');
	
	$z="insert into photoalbum( date)	value('$date' )";
	$ok=r_ex($z);
		
	if($ok) 
		{	
			$idx=photoalbum_id(); $id=$idx->id;
			echo  "<script>alert('Фотоальбом создан!  Заполните необходимые поля информацией!');</script>";
			header("refresh:0; url=index.php?i=photoalbum_edit&id=$id"); 
		}
		
}

if(isset($_POST['photoalbum_del'])){
	$id=$_POST['id'];
	$z="delete from photoalbum  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=photoalbum"); };
}


if(isset($_POST['photoalbum_edit_url'])){
	$id= $_POST['id'];
	header("refresh:0; url=index.php?i=photoalbum_edit&id=$id"); 
}


if(isset($_POST['photoalbum_edit'])){
	$id=$_POST['id'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	
	

$z="update photoalbum set  date='$date', name='$name' 	WHERE id='$id'";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=photoalbum"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=photoalbum"); 
		}
//	***********************************************************************************		
}

if(isset($_POST['photoalbum_doc_add'])){
	$id_conf=$_POST['id_conf'];
	
	if(copy($_FILES["filename"]["tmp_name"],"../photoalbum_doc/".$_FILES["filename"]["name"])) 
		{ $filename=$_FILES["filename"]["name"]; 
		  $size = round($_FILES["filename"]["size"]/1024,2);
		}
	else {
			$filename="нет файла";
			$size="no";
		 }
	

	$z="insert into photoalbum_doc(id_conf,  filename, size  ) 
	value('$id_conf',  '$filename', '$size'  )";
	$ok=r_ex($z);	
	if($ok) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=photoalbum_edit&id=$id_conf"); 
		}
// сохранение информации из верхней формы
$id=$_POST['id'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	
	

$z1="update photoalbum set  date='$date', name='$name' 	WHERE id='$id'";
$ok1=r_ex($z1);	
//	***********************************************************************************		
/*
	if($ok1==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=photoalbum_edit&id=$id_conf"); 
		}
	if($ok1!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=photoalbum_edit&id=$id_conf"); 
		}
*/		
//	*******************	
}




if(isset($_POST['photoalbum_doc_del'])){
	$id=$_POST['id']; // id удаляемого файла
	$id_conf=$_POST['id_conf']; // id конференции
	$z="delete from photoalbum_doc  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=photoalbum_edit&id=$id_conf"); };
}


// *************************************************  	фотоальбом	 ***********************************************

// *************************************************  	служебная страница	 ***********************************************
if(isset($_POST['special_page_edit_url'])){
	$id=strip_tags($_POST['id']);
	header("refresh:0; url=index.php?i=special_page_edit&id=$id"); 
}
  
 if(isset($_POST['special_page_create'])){
	$id=strip_tags($_POST['id']);
	header("refresh:0; url=index.php?i=special_page_add"); 
} 
  
if(isset($_POST['special_page_del'])){
	$id=$_POST['id'];
	$z="delete from special_page  WHERE id='$id'";
	$ok=r_ex($z);
	if($ok) {echo  "<script>alert('Информация  в базе обновлена!');</script>";
    header("refresh:0; url=index.php?i=special_page"); };
}


if(isset($_POST['special_page_view'])){
	$id=$_POST['id'];
	header("refresh:0; url=index.php?i=special_page_view&id=$id"); 
}

if(isset($_POST['special_page_edit'])){
$id=$_POST['id'];
$name=$_POST['name'];	
$text=$_POST['text'];
$date=$_POST['date'];

$z="update special_page set text='$text', name='$name', date='$date'	WHERE id = $id";
	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=special_page"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=special_page"); 
		}
//	***********************************************************************************		
}

if(isset($_POST['special_page_add'])){
$name=$_POST['name'];	
$text=$_POST['text'];
$date=$_POST['date'];

$z="insert into special_page(text, name, date) value('$text',  '$name', '$date'  )";	  
	$ok=r_ex($z);
//	***********************************************************************************		
	if($ok==0) {
			echo  "<script>alert('Вы не редактировали информацию!');</script>";
			header("refresh:0; url=index.php?i=special_page"); 
		}
	if($ok!=0) {
			echo  "<script>alert('Информация  в базе обновлена!');</script>";
			header("refresh:0; url=index.php?i=special_page"); 
		}
//	***********************************************************************************		
}





// *************************************************  	служебная страница	 ***********************************************

// *************************************************  	Авторизация	 ***********************************************
if(isset($_POST['logout'])){
$_SESSION['login']="no";
header("refresh:0; url=login.php"); 	
}

if(isset($_POST['registration'])){
$_SESSION['login']="no";
header("refresh:0; url=login_new.php"); 	
}

if(isset($_POST['login_old'])){
$log=strip_tags(trim($_POST['log']));
$pas=md5(strip_tags(trim($_POST['pas'])));
$logx=login();
$_SESSION['login']="no";
		foreach($logx as $x){
			if(($log==($x->log)) and ($pas==($x->pas))) $_SESSION['login']=$log;
		}
		
		if($_SESSION['login']!="no"){
			echo  "<script>alert('Привет $log!');</script>";
			header("refresh:0; url=index.php?i=special_page"); 
		}
		
		else{
			echo  "<script>alert('Вы незарегистрированы или некорректно заполнили форму авторизации!');</script>";
			header("refresh:0; url=login.php"); 
		}
		
		
}	//	$_POST['login'

// *************************************************  	Авторизация - сброс пароля user	 ***********************************************
if(isset($_POST['login_reset'])){
$log=strip_tags(trim($_POST['log']));
$pas=md5(strip_tags(trim($_POST['pas'])));
$pas1=md5(strip_tags(trim($_POST['pas1'])));

$_SESSION['login']="no";
$logx=login();

$_SESSION['login']="no";

		foreach($logx as $x){
			if($log==($x->log)) $_SESSION['login']=$log;
		}
		
		if($_SESSION['login']=="no"){
			echo  "<script>alert('Такой логин не зарегистрирован или Вы его некорректно набрали!');</script>";
			header("refresh:0; url=login_reset.php"); 
		}
		
		if($pas1!=$pas){
		echo  "<script>alert('Введенные пароли не совпадают!');</script>";
		header("refresh:0; url=login_reset.php");	
		}
		
		$z="update login set pas='$pas' WHERE log='$log'";
		$ok=r_ex($z);
		if($ok) {
			echo  "<script>alert('Пароль для логина - $log - успешно  обновлен!');</script>";
   
    		header("refresh:0; url=index.php?i=special_page"); 
    		}
		
		
}	//	$_POST['login'

// *************************************************  	Авторизация - регистрация user	 ***********************************************
if(isset($_POST['login_new'])){
$log=strip_tags(trim($_POST['log']));
$pas=md5(strip_tags(trim($_POST['pas'])));
$pas1=md5(strip_tags(trim($_POST['pas1'])));
$nn=0;
$_SESSION['login']="no";
$logx=login();
		foreach($logx as $x){
			if($log==($x->log)) $nn=1;
		}
		
		if($nn==1)	{
					echo  "<script>alert('Такой логин уже существует, выберите другой!');</script>";
					header("refresh:0; url=login_new.php"); 
				}
		else{
	
			if($pas1!=$pas){
			echo  "<script>alert('Введенные пароли не совпадают!');</script>";
			header("refresh:0; url=login_new.php");	
			}
			else{
					$z="insert into login (log, pas) value ('$log','$pas') ";
					$ok=r_ex($z);
					if($ok) {
								echo  "<script>alert('Профиль - $log - успешно  добавлен!');</script>";
					   			$_SESSION['login']=$log;
					    		header("refresh:0; url=index.php?i=special_page"); 
			    			}
		    	}
		}
		
}	//	$_POST['login'


	
	
	

// *************************************************  	Авторизация	 ***********************************************

?>