﻿<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
<title>מרפאט - שירותי בריאות לחיות מחמד - מה אנו מכסים</title>
	
      <!-- bower:css -->
      <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css" />
      <link rel="stylesheet" href="bower_components/angucomplete-alt/angucomplete-alt.css" />
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.html" />
      <link rel="stylesheet" href="bower_components/angular-motion/dist/angular-motion.html" />
      <link rel="stylesheet" href="bower_components/angular-loading-bar/build/loading-bar.css" />
      <!-- endbower -->
      <!-- endbuild -->
      <!-- build:css(.tmp) styles/main.css -->
      <link href="styles/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="styles/bootstrap-rtl.min.css">
      <link href="styles/main.css" rel="stylesheet">
      <!-- endbuild -->	 





	<link href="css/bootstrap.css" rel="stylesheet">	 
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
	<link href="css/main.css" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/balloontip.css" />

<script type="text/javascript" src="js/balloontip.js">
</script>
	
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode

// mini, maxi
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


function require_check()
{
var subi = true;
diviErrorType.style.display='none';
diviErrorComm.style.display='none';
diviErrorType2.style.display='none';
diviErrorEmail.style.display='none';
diviErrorPhone.style.display = 'none'

if (diviType.style.display == '')
	{
		diviErrorType.style.display = ''
		subi=false;
	}
else
{

	if (pedigreeCat.value == -1 && pedigreeDog.value == -1)
	{
		diviErrorType2.style.display = ''
		subi=false;
	}
}

if (phone.value == '' && email.value == '')
	{
		diviErrorComm.style.display = ''
		subi=false;
	}

// check age:
diviErrorAge_check();

if (email.value !='')
{
	if (!validateEmail(email.value))
	{
		diviErrorEmail.style.display = ''
		subi=false;
	}
}

if (!validatePhone(phone.value)){
	diviErrorPhone.style.display = ''
	subi=false;	
}

if (subi)
	join0.submit();

//alert("submit : " + subi)


}

function diviErrorAge_check()
{

diviErrorAge.style.display='none';
diviErrorAge.innerHTML = '';

if (!(petAgeYear.value >0 && petAgeYear.value < 21 ))
	{
		diviErrorAge.style.display='';
		diviErrorAge.innerHTML = 'אנא הזן גיל חיית המחמד (בין  0 ל 20)'
	}


if (petAgeMonth.value != '')
{
	if (!(petAgeMonth.value >=0 && petAgeMonth.value < 12 ))
		{
		diviErrorAge.style.display='';
		if (diviErrorAge.innerHTML != '')
			diviErrorAge.innerHTML += '<BR>'
		diviErrorAge.innerHTML += 'אנא הזן מספר חודשים (בין 0 ל 11)'
		}
	}
}


function validateEmail(email1) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return re.test(email1);
} 

function validatePhone(phone1) { 
    var re = phone1.replace("-", "")
    re1 = re.replace(/[^0-9]/g, '');

    if (re.length != re1.length)
	return false;	

    if ((phone1 == '') || ((re.length == 10 || re.length == 9)))
	return true;

    return false;
	
} 

</script>

</head>

<body>
	<header>
    	<div class="header-top">
            <div class="container">
        		<div class="row">
	                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="text-left">
                            <span class="link-callus">חייג אלינו:</span>                           
                            <span class="callus-phone">073-240-9505</span>
                        </div>    
                     </div>
                	 <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                     	<ul class="top-links list-inline">
	                        <li class="link-customerLogin"><a 
							href='Login.html'>כניסת לקוחות</a></li>
                            <li class="link-veterinarian"><a 
							href='Login-Veterinarians.html'>כניסת וטרינר</a></li>                        	
                            <li class="link-contactus"><a href="contact-us.html">צור קשר</a></li>
                        </ul>
                     </div>					 
                </div>
            </div>  
   
        </div>
        
        	<div class="header-middle">
	        	<div class="container">
                	<div class="header-logo clearfix">
                        <div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-3 no-gutters">
                            <a href='main.html'><img
							
id="logo" src="images/logo.png" 
 class="img-responsive" alt="cat" >
							</a>
                        </div>
                        <div class="logocat col-lg-10 col-md-10 col-sm-10 col-xs-9 no-gutters" style="padding: 0 !important;">
                            <img src="images/logocat.jpg" class="img-responsive" alt="cat insurance" >
                        </div>
                      </div>  
                	<nav class="navbar navbar-default navbar-menu" role="navigation">
                    	<div class="container-fluid no-gutters">
                        	<div class="navbar-header no-gutters">
                                <a href="#" class="get-quote"><span>קבל הצעת מחיר</span></a>                            
                            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                             	</button>
                            </div>
                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
                                <li><a href="main.html" class="home"><span class="navlabel">דף הבית</span></a></li>
                                 <li class="dropdown">
                                	<a href="about-us.html" 
onclick='menuGo("about-us.html")'
									data-target="about-us.html"
class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel">&nbsp;&nbsp;על השירות&nbsp;&nbsp;<span class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='about-us.html' class="service">על השירות</a></li>
                                        <li><a href="What-we-cover.html" class="solution">מה אנו מכסים</a></li>
                                        <li><a href="faq.html" class="solution">שאלות נפוצות</a></li>
                                    </ul>
                                </li>
		
                                <li class="dropdown">
                                	<a href="plans.html" 
onclick='menuGo("plans.html")'
class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	<span class="navlabel">&nbsp;תכניות כיסוי&nbsp;<span class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='plans.html' class="solution">תוכניות כיסוי</a></li>
                                        <li><a href='Service-for-the-dog.html' class="solution">השירות לכלב</a></li>
                                        <li><a href="Service-for-the-cat.html" class="solution">השירות לחתול</a></li>
                                    </ul>
                                </li>

                                <li><a href="for-Veterinarians.html" class="for-veterinarians last"><span class="navlabel">לוטרינרים</span></a></li>                            
                            </ul>
                            </div>                         
                       </div> 
                    </nav>
    			</div>	
    		</div>
    </header> 
  
            </div>
	<section>


<center>
<div class="join-wapper">
   <div class="join-steps-content">
      <h1 
         class="text-center">אנא מלא פרטים לקבלת הצעת מחיר</h1>
      <div class="registration-form">
         <form novalidate="" name="join0" role="form" 
action='join-save.php' method="post"
            class="ng-invalid ng-invalid-required ng-valid-minlength ng-valid-min ng-valid-max
            ng-valid-email ng-dirty ng-valid-parse">
            <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-paw"></i></div>
                  <input type="text" ng-minlength="2" required="" placeholder="שם בעל החיים" 
                     name="petName" ng-model="details.pet.name"
                     class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-touched">
               </div>
            </div>
            <!--Pet Name Validation Control-->
            <!-- ngIf: click > 0 -->
            <!---->


	    <div id="diviErrorType" style="display:none"  ng-message="required" 
		class="error message ng-scope"
		>נא לבחור סוג חיית המחמד
            </div>  

            <div class="form-group clearfix">
               <div class="col-xs-6">
                  <img class="img-responsive" src="images/register-img-cat.png">
               </div>
               <div class="col-xs-6">
                  <img class="img-responsive" src="images/register-img-dog.png">	
               </div>
            </div>
            <div class="form-group inline-group text-center clearfix field-grey">
               <div class="col-xs-3 no-gutters form-control">                                       
                  <label>חתול</label>
               </div>
               <div class="col-xs-3 no-gutters form-control">
                  <input type="radio" ng-required="!details.pet.type" value="cat" 
name="petType" 
id=petType_1
onchange="pedigreeCat.value=-1;pedigreeDog.value=-1;diviType.style.display='none';diviTypeDog.style.display='none';diviTypeCat.style.display='';"
                     ng-model="details.pet.type" class="ng-dirty ng-valid ng-valid-required ng-touched">
               </div>
               <div class="col-xs-3 no-gutters form-control">
                  <label>כלב</label>
               </div>
               <div class="col-xs-3 no-gutters form-control">
                  <input type="radio"  value="dog"
			onchange="pedigreeCat.value=-1;pedigreeDog.value=-1;diviType.style.display='none';diviTypeCat.style.display='none';diviTypeDog.style.display='';" 
name="petType"
id=petType_2
                      class="ng-valid ng-valid-required ng-dirty ng-valid-parse ng-touched">
               </div>
            </div>



	    <div id="diviErrorType2" style="display:none"  ng-message="required" 
		class="error message ng-scope"
		>נא לבחור גזע חיית המחמד
            </div>  

	<div class="form-group" id=diviType style='display:'>
               <div class="selectContainer">
                  <!-- ngIf: details.pet.type!='cat' -->
                  <div ng-if="details.pet.type!='cat'" class="ng-scope">
                     <select disabled class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" >
                        <option value="">בחר סוג חיית מחמד כדי לבחור גזע</option>
                     </select>
                  </div>
                  <!-- end ngIf: details.pet.type!='cat' -->
                  <!-- ngIf: details.pet.type=='cat' -->
               </div>
            </div>


            <div class="form-group" id=diviTypeDog style='display:none'>
               <div class="selectContainer">
                  <!-- ngIf: details.pet.type!='cat' -->
                  <div ng-if="details.pet.type!='cat'" class="ng-scope">
                     <select 
name=pedigreeDog
id=pedigreeDog
class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" >
                        <option value="-1">-- בחר גזע כלב --</option>


<option value="2000">מעורב
<option value="20001">לא ברשימה
<option value="2001">אפנפינצ'ר
<option value="2002">בסנג'י
<option value="2003">בדלינגטון טרייר
<option value="2004">בורזוי
<option value="2005">בריארד
<option value="2006">ביוהאנד נורבגי
<option value="2007">בול מסטיף
<option value="2008">צ'סאפיק ביי רטריבר
<option value="2009">דנדי דינמונט טרייר
<option value="2010">דירהאונד סקוטי
<option value="2011">אלקהאונד נורבגי
<option value="2012">פוקסהאונד
<option value="2013">קייסהונד
<option value="2014">קלפי אוסטרלי
<option value="2015">לייקלנד טרייר
<option value="2016">לאוכן
<option value="2017">מונסטרלנד
<option value="2018">פולי
<option value="2019">סכיפרקה
<option value="2020">סיליהם טרייר
<option value="2021">ויימרנר
<option value="2022">אוסטרלי סילקי טרייר
<option value="2023">אנגלי עתיקה רועים
<option value="2025">אסקימואי באלסקה
<option value="2026">אקיטה
<option value="2027">באסט כלבם
<option value="2028">בובייה דה פלנדרס
<option value="2029">בול טרייר
<option value="2030">בול טרייר (מיניאטורי)
<option value="2031">בולדוג בריטי
<option value="2032">בולדוג צרפתי
<option value="2033">בוסטון טרייר
<option value="2034">בריטני ספנייל
<option value="2035">גרייהאונד האיטלקי
<option value="2036">דוברמן
<option value="2037">דלמטי
<option value="2038">דני ענק
<option value="2039">האירי טרייר
<option value="2040">האסקי סיבירי
<option value="2041">הגבול טרייר
<option value="2042">הגלעד טרייר
<option value="2043">פוינטר גרמני
<option value="2045">הוויסלה הונגרית
<option value="2046">הטיבטי טרייר
<option value="2047">מלטז פראיז
<option value="2048">הסקוטי טרייר
<option value="2049">הפומרני
<option value="2050">השי טסו
<option value="2051">פמברוק ולש קורגי
<option value="2052">ולש קורגי
<option value="2053">וולשית טרייר
<option value="2054">וסט היילנד וייט טרייר
<option value="2055">זרזיר מתנים
<option value="2056">חיטה מצופה רכה
<option value="2057">טרייר
<option value="2058">טרייר האוסטרלי
<option value="2059">יורקשייר טרייר
<option value="2060">כלב אפגניסטני
<option value="2061">כלב בקר אוסטרלי
<option value="2062">כלב בקר זנב קצר ועבה
<option value="2063">כלב גשוש
<option value="2064">כלב הצאן
<option value="2065">כלב הרי הפירנאים
<option value="2066">כלב זאב אירי
<option value="2067">כלב מרוץ
<option value="2068">כלב ציד
<option value="2069">כלב רועה גרמני
<option value="2070">לאסה אפסו
<option value="2071">מיניאטורות תחש
<option value="2072">מלטזית
<option value="2073">מנצ'סטר טרייר
<option value="2074">מסטיף
<option value="2075">מעורב
<option value="2076">מצביע
<option value="2077">מצויץ כלב סיני
<option value="2078">מתאגרף
<option value="2079">נוריץ' טרייר
<option value="2080">נורפולק טרייר
<option value="2081">ניופאונדלנד
<option value="2083">סאלוקי
<option value="2084">סולד
<option value="2085">סטאפורדשייר בול טרייר
<option value="2086">סמויד
<option value="2087">סנט ברנרד
<option value="2088">קלמבר ספניאל
<option value="2089">ספנייל (אירי מים)
<option value="2090">ספנייל (ספרינגר, אנגלית, סאסקס)
<option value="2091">ספנייל (ספרינגר, וולשית)
<option value="2092">ספנייל (קוקר)
<option value="2093">ספנייל (קוקר, אמריקאי)
<option value="2094">ספנייל (שדה)
<option value="2095">סקיי טרייר
<option value="2096">סתר (אירי)
<option value="2097">סתר (אנגלית)
<option value="2098">סתר (גורדון)
<option value="2099">פודל (מיניאטורי)
<option value="2100">פודל (סטנדרטי)
<option value="2101">פודל (צעצוע)
<option value="2102">פוקס טרייר
<option value="2103">פוקס טרייר (חלק)
<option value="2104">פינצ'ר מיניאטורי
<option value="2105">פפיון
<option value="2106">פקינז
<option value="2107">פרעה כלבם
<option value="2108">צ'או צ'או
<option value="2109">צ'יוואווה
<option value="2110">צ'ין היפני
<option value="2111">קבלייר קינג צ'ארלס ספנייל
<option value="2112">קולי גבול
<option value="2113">קולי מזוקן
<option value="2114">קינג צ'ארלס ספנייל
<option value="2115">קרי בלו טרייר
<option value="2117">רוטווילר
<option value="2118">רועים שטלנד
<option value="2119">רטריבר (גולדן)
<option value="2120">רטריבר (לברדור)
<option value="2121">רטריבר (מצופה שטוח)
<option value="2122">רטריבר (קרלי מצופה)
<option value="2123">שנאוצר
<option value="2124">שנאוצר (מיניאטורי)
<option value="2125">שנאוצר (ענק)
<option value="2126">שפיץ פיני
<option value="2127">תחש


                     </select>
                  </div>
                  <!-- end ngIf: details.pet.type!='cat' -->
                  <!-- ngIf: details.pet.type=='cat' -->
               </div>
            </div>

            <div class="form-group" id=diviTypeCat style='display:none'>
               <div class="selectContainer">
                  <!-- ngIf: details.pet.type!='cat' -->
                  <div ng-if="details.pet.type!='cat'" class="ng-scope">
                     <select
name=pedigreeCat
id=pedigreeCat
  class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" >
                        <option value="-1">-- בחר גזע חתול --</option>
<option value="1001">מעורב
<option value="10001">לא ברשימה
<option value="1002">אבסיני (חבשי) 
<option value="1003"> אוסטרלי מיסט 
<option value="1004"> אוסיקט 
<option value="1005"> אוריינטלי ארוך שער 
<option value="1006"> אוריינטלי קצר שער 
<option value="1007"> אמריקן קרל ארוך שער
<option value="1008"> אמריקן קרל קצר שער 
<option value="1009"> אמריקני מקורזל 
<option value="1010"> אמריקני קצר שער 
<option value="1011"> אנגורה 
<option value="1012"> אקזוטי קצר שער 
<option value="1013"> ארופאי קצר שער
<option value="1014"> בומביי 
<option value="1015"> בורמזי 
<option value="1016"> בורמזי אירופאי 
<option value="1017"> בורמילה 
<option value="1018"> בירמן 
<option value="1019"> בלינזי 
<option value="1020"> בנגלי 
<option value="1021"> ברזילאי קצר שער
<option value="1022"> בריטי קצר שער 
<option value="1022"> דבון רקס 
<option value="1023"> הוואנה חום 
<option value="1024">הימלאיה 
<option value="1025"> ואן טורקי 
<option value="1026"> חתול יערות נורבגי 
<option value="1027"> טונקינזי 
<option value="1028"> טיפאני (בורמילה ארוך שער) 
<option value="1029"> יפני קצר-זנב ארוך שער 
<option value="1030">יפני קצר-זנב קצר שער 
<option value="1031"> לה-פרם ארוך שער 
<option value="1032"> לה-פרם קצר שער 
<option value="1033"> מאו מצרי 
<option value="1034"> מיין קון 
<option value="1035"> מנצ'קין ארוך שער 
<option value="1036">מנצ'קין קצר שער 
<option value="1037"> מנקס 
<option value="1038"> נבלנג 
<option value="1039"> סומלי 
<option value="1040"> סוקוק 
<option value="1041"> סיאמי 
<option value="1042"> סיבירי 
<option value="1043"> סינגפורה 
<option value="1044"> סלקירק רקס ארוך שער 
<option value="1045">סלקירק רקס קצר שער 
<option value="1046"> סנואו-שו 
<option value="1047"> ספינקס 
<option value="1048"> סקוטי שמוט אוזניים ארוך שער 
<option value="1049"> סקוטי שמוט אוזניים קצר שער 
<option value="1050">פיקסי-בוב ארוך שער 
<option value="1051"> פיקסי-בוב קצר שער 
<option value="1052"> פרסי 
<option value="1053"> פרסי בדיל 
<option value="1054"> פרסי ביקולור וקליקו 
<option value="1055"> פרסי טאבי 
<option value="1056"> פרסי מגוון (שיידד) 
<option value="1057"> פרסי סוליד אדום 
<option value="1058"> פרסי סוליד כחול 
<option value="1059"> פרסי סוליד לבן 
<option value="1060"> פרסי סוליד לילך 
<option value="1061"> פרסי סוליד שוקולד 
<option value="1062">פרסי סוליד שחור 
<option value="1063"> פרסי סוליד שנהב 
<option value="1064"> פרסי עשן 
<option value="1065"> פרסי פרטי-קולור 
<option value="1066"> פרסי צ'ינצ'ילה 
<option value="1067"> קוראט 
<option value="1068"> קורניש רקס 
<option value="1069">קימריק (מנקס ארוך שער) 
<option value="1070"> ראגמאפין 
<option value="1071"> רגדול 
<option value="1072"> רוסי כחול 
<option value="1073"> רקס גרמני ארוך שער 
<option value="1074"> רקס גרמני קצר שער 
<option value="1075">שארטרה 
                     </select>
                  </div>
                  <!-- end ngIf: details.pet.type!='cat' -->
                  <!-- ngIf: details.pet.type=='cat' -->
               </div>
            </div>


            <div id="diviErrorAge" style="display:none" ng-message="required" 
		class="error message ng-scope"
		>שדה חובה
            </div>  

            <div class="form-group clearfix">
               <div class="col-lg-6 col-md-6 col-xs-6 no-gutters">
                  <div class="input-group">
                     <div class="input-group-addon"><i class="fa fa-tachometer"></i></div>
                     <input type="number" required="" max="7" min="0" name="petAgeYear"
id="petAgeYear"
 placeholder="גיל בשנים"
 onkeypress="return isNumberKey(event)"
onchange='diviErrorAge_check()'
                        class="form-control no-left-radius ng-pristine ng-valid-min ng-valid-max ng-invalid ng-invalid-required ng-touched" 
                        ng-model="details.pet.age.year">
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-xs-6 no-gutters">
                  <div class="input-group">
                     <div class="input-group-addon no-right-radius"><i class="fa fa-tachometer"></i></div>
                     <input type="number" required="" max="11" min="0" name="petAgeMonth"
id="petAgeMonth"
                        placeholder="חודשים"
onkeypress="return isNumberKey(event)"
onchange='diviErrorAge_check()'
                        class="form-control ng-pristine ng-valid-min 
                        ng-valid-max ng-invalid ng-invalid-required ng-touched" 
                        ng-model="details.pet.age.month">
                  </div>
               </div>
            </div>


            <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-male"></i></div>
                  <input type="text" ng-minlength="2" required="" placeholder="שם" 
                     ng-model="details.client.name" name="clientName" 
                     class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-touched">
               </div>
            </div>
            <!-- ngIf: click > 0 -->
            <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-users"></i></div>
                  <input type="text" ng-minlength="2" required="" placeholder="שם משפחה" 
                     name="clientLastName" ng-model="details.client.lastName" 
                     class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-touched">
               </div>
            </div>


<div class="form-group">
               <div class="input-group">
                  נא להזין מספר טלפון או כתובת אימייל: </div>
            </div>

   <div id="diviErrorComm"   ng-message="required" 
		class="error message ng-scope" style='display:none'
		>חובה להזין טלפון או כתובת דואר אלקטרוני
            </div> 

   <div id="diviErrorEmail"   ng-message="required" 
		class="error message ng-scope" style='display:none'
		>נא להזין כתובת תקינה של דואר אלקטרוני           </div> 

   <div id="diviErrorPhone"   ng-message="required" 
		class="error message ng-scope" style='display:none'>
		נא להזין מספר טלפון תקין
            </div> 

            <!-- ngIf: click > 0 -->
            <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-at"></i></div>
                  <input type="email" id=email required="" placeholder="דואר אלקטרוני" ng-model="details.client.email" name="clientEmail" 
                     class="form-control ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-touched"
                     >
               </div>
            </div>
            <!-- ngIf: click > 0 -->
            <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" id=phone name="phone" placeholder="טלפון" ng-model="details.client.phone" 
                     class="form-control ng-pristine ng-valid ng-touched">
               </div>
            </div>
            <div class="step1-submit text-center">
               <input type=button value=המשך onclick='require_check()'
                  class="button-style2"></button>
            </div>
         </form>
      </div>
   </div>
</div>




</center>

	</section>
    
  <footer>
    	<div class="footer">        	
            <div class="container">
            	<div class="footer-top clearfix">
                	<div class="col-md-4 col-md-4 col-sm-4 col-xs-6 footer-logo">
	                    <img src="images/footer_icon.png" class="img-responsive">
                    </div>                	
                </div>
            	<div class="footer-middle clearfix">
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                        <ul>
                            <li><a href="about-us.html">על השירות</a></li>
                            <li><a href="What-we-cover.html">מה אנו מכסים</a></li>
							<li><a href="plans.html">תוכניות</a></li>
							<li><a href="Service-for-the-dog.html">השירות לכלב</a></li>
							<li><a href="Service-for-the-cat.html">השירות לחתול</a></li>
                        </ul>
                    </div>                
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                        <ul>						
                            <li><a href="terms-and-conditions.html">תנאים והגבלות</a></li>
                            <li><a href="faq.html">שאלות נפוצות</a></li>
                            <li><a href="for-Veterinarians.html">וטרינרים</a></li>
							<li><a href="contact-us.html">צור קשר</a></li>
                        </ul>
                    </div>        
               </div>                        
               <div class="footer-bottom clearfix">
               	<p class="">2014 © מרפאט בע"מ שירותי בריאות לחיות מחמד</p>
               </div>
            </div>
        </div>
    </footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
 
 
<script>
 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
	  $('.dropdown-menu').hover(function(){
		$(this).prev('.dropdown-toggle').addClass('hover');
  		},function() {
    	$(this).prev('.dropdown-toggle').removeClass( "hover" );
	});
});         
</script>

<div id="balloon2" class="balloonstyle" 
style="color:white;background-color:#25A0D6;font-family:arial;font-size:16px;font-weight:bold;width:400px;"
>
וטרינר מומחה שהוסמך בארץ או בחו"ל, או וטרינר שסיים את התמחותו במוסד מוכר ועומד לפני מבחני הסמכה
</div> 
</body>
</html>
