 <?php
 switch ($i){
	   	
	   	case company:
	   		echo "О компании";
	   	break;
	   	case company_text:
	   		echo "О компании - редактирование текста";
	   	break;
		case company_doc:
	   		echo "О компании - добавление документов";
	   	break;
		
		
	   	case activities:
	    	echo "Виды деятельности";
	   	break;
	   	case activities_1:
	    	echo "Морское страхование";
	   	break;
		case activities_2:
	    	echo "Неморское страхование";
	   	break;
		case activities_3:
	    	echo "Авиационное страхование";
	   	break;
		case activities_4:
	    	echo "Облигаторное и факультативное перестрахование";
	   	break;
		case activities_5:
	    	echo "Нестандартные и новые продукты";
	   	break;
		
		
		
		
		
		
	   	case publications:
	    	echo "Публикации";
	   	break;
	   	case publications_books:
	    	echo "Публикации - книги";
	   	break;
		case publications_article:
	    	echo "Публикации - статьи";
	   	break;
		
		
		
	   	case conference:
	   		echo "Конференции - семинары";
	   	break;
	   	case conference_1:
	   		echo "Конференции ";
	   	break;
		case conference_2:
	   		echo "Семинары";
	   	break;
	   	
		
		
		
	   	case news:
	   		echo "Новости";
	   	break;
	   	case news_add:
	   		echo "Новости - добавить новость";
	   	break;
		case news_kat:
	   		echo "Новости - каталог новостей";
	   	break;
		
		
		
	   	case partners:
	   		echo "Партнеры";
	   	break;
	   	
	   	case photoalbum:
	   		echo "Фотоальбом";
	   	break;
	   	
	   	default: echo "О компании";
	   }
 
 ?>