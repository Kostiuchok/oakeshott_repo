 <?php
  switch ($i){
	   	case company:
	   		include "company.php";
	   	break;
	   	case company_text:
	   		include "company_text.php";
	   	break;
		case company_doc:
	   		include "company_doc.php";
	   	break;
		
		
		
	   	case activities:
	    	include "activities.php";
	   	break;
	   	case activities_1:
	    	include "activities_1.php";
	   	break;
		case activities_2:
	    	include "activities_2.php";
	   	break;
		case activities_3:
	    	include "activities_3.php";
	   	break;
		case activities_4:
	    	include "activities_4.php";
	   	break;
		case activities_5:
	    	include "activities_5.php";
	   	break;
		
		
		
	   	case publications:
	    	include "publications.php";
	   	break;
	   	case publications_books:
	    	include "publications_books.php";
	   	break;
		case publications_article:
	    	include "publications_article.php";
	   	break;
		
		
		
	   	case conference:
	   		include "conference.php";
	   	break;
	   	case conference_1:
	   		include "conference_1.php";
	   	break;
		case conference_2:
	   		include "conference_2.php";
	   	break;
		
		
		
	   	
	   	case news:
	   		include "news.php";
	   	break;
	   	case news_add:
	   		include "news_add.php";
	   	break;
		case news_kat:
	   		include "news_kat.php";
	   	break;
		
		
	   	case partners:
	   		include "partners.php";
	   	break;
	   	
	   	case photoalbum:
	   		include "photoalbum.php";
	   	break;

	   	default: include "company.php";
	   }
 
 ?>