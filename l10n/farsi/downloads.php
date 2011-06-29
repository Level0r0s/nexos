<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/farsi/downloads.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:53 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','شاخه ها');
define('_LVOTES','رای ها');
define('_TOTALVOTES','جمع رای ها:');
define('_THEREARE','در حال حاظر');
define('_NOMATCHES','نظیری برای پرسش شما یافت نشد');
define('_SCOMMENTS','نظرها');
define('_UNKNOWN','ناشناخته');
define('_AUTHORNAME','نام نویسنده');
define('_AUTHOREMAIL','ایمیل نویسنده');
define('_DOWNLOADNAME','نام برنامه');
define('_ADDTHISFILE','اضافه کردن این فایل');
define('_INBYTES','در بیت');
//define('_FILESIZE','حجم فایل');
//define('_VERSION','ورژن');
//define('_AUTHOR','نویسنده');
define('_HOMEPAGE','آدرس سایت');
define('_DOWNLOADNOW','دریافت این فایل!');
define('_RATERESOURCE','امتیازدادن به این منبع');
define('_FILEURL','لینک فایل');
define('_ADDDOWNLOAD','اضافه کردن فایل');
define('_DOWNLOADSMAIN','صفحه اصلی دریافت فایل');
define('_DOWNLOADCOMMENTS','نظرها');
define('_DOWNLOADSMAINCAT','شاخه اصلی دریافت فایل');
define('_ADDADOWNLOAD','اضافه کردن فایل جدید');
define('_DSUBMITONCE','هر فایل را فقط یک بار ارسال کنید.');
define('_DPOSTPENDING','همه فایل های ارسالی قبل از تائید کنترل می شود.');
define('_RESSORTED','مرتب کردن منابع جاری به صورت');
define('_DOWNLOADSNOTUSER1','شما عضور رسمی سایت نیستید یا اینکه هنوز وارد حساب کاربری خود نشده اید.');
define('_DOWNLOADSNOTUSER2','So we can offer you only the highest quality content.');
define('_DOWNLOADSNOTUSER3','شایسه می باشد سریع و آسان ثبت نام کنید.');
define('_DOWNLOADSNOTUSER4','چرا ما بعضی از امکانات سايت خود را فقط برای کاربران عضو شده سايت قرار ميدهيم?');
define('_DOWNLOADSNOTUSER5','در اين صورت ما می توانيم بهترين مطالب را به شما ارائه کنيم,');
define('_DOWNLOADSNOTUSER6','هر آيتم توسط مديرن سايت قبول يا غير قابل قبول شناخته می شود.');
define('_DOWNLOADSNOTUSER7','اميد ور هستيم که اطلاعات قابل قبولی را به شما داده باشيم.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'">عضو شويد</a>');
define('_DOWNLOADALREADYEXT','خطا: این آدرس در بانک اطلاعاتی وجود دارد!');
define('_DOWNLOADNOTITLE','خطا: شما باید یک عنوان برای آدرس خود وارد کنید!');
define('_DOWNLOADNOURL','خطا: شما باید آدرس مورد نظر را وارد کنید!');
define('_DOWNLOADNODESC','خطا: شما باید برای آدرس مورد نظر توضیح وارد کنید!');
define('_DOWNLOADRECEIVED','ما فایل ارسالی شما را دریافت کردیم!');
define('_NEWDOWNLOADS','فایل جدید');
define('_TOTALNEWDOWNLOADS','جمع فایل های جدید');
define('_DTOTALFORLAST','جمع فایل های اضافه شده گذشته برای');
define('_DBESTRATED','فایل های دارای بیشترین امتیاز');
define('_TRATEDDOWNLOADS','جمع امتیازات فایل ها');
define('_SORTDOWNLOADSBY','مرتب کردن فایل ها بر اساس');
define('_DCATNEWTODAY','فایل های جدید اضافه شده به این شاخه در امروز');
define('_DCATLAST3DAYS','فایل های جدید اضافه شده به این شاخه در 3 روز گذشته');
define('_DCATTHISWEEK','فایل های جدید اضافه شده به این شاخه در این هفته');
define('_DDATE1','Date تاریخ (فایل های قدیمی اول لیست شود)');
define('_DDATE2','Date تاریخ (فایل های جدید اول لیست شود)');
define('_DOWNLOADS','فایل');
define('_DOWNLOADPROFILE','طلاعات  فایل');
define('_DOWNLOADRATINGDET','جزئیات امتیاز فایل');
define('_EDITTHISDOWNLOAD','ویرایش این فایل');
define('_DOWNLOADRATING','امتیازات فایل');
define('_DOWNLOADVOTE','رای!!');
define('_DONLYREGUSERSMODIFY','فقط کاربران ثبت نام کرده قادر به ویرایش فایل می باشند. لطفا <a href="'.getlink("Your_Account").'">ثبت نام کنید یا وارد شوید</a>.');
define('_REQUESTDOWNLOADMOD','درخواست اصلاح فایل');
define('_DOWNLOADID','شماره فایل');
define('_DLETSDECIDE','ارائه نظر کاربرانی مثل شما کاربران ديگر را کمک می کند که کدام فايل را دانلود کنند.');
define('_DRATENOTE4','شما ميتوانيد ببينيد يک ليست از <a href="'.getlink("Downloads&amp;d_op=TopRated").'">فايل های درای بيشترين امتياز را</a>.');
define('_POPULAR','مورد علاقه');
define('_TOPRATED','بیشترین امتیاز');
define('_ADDITIONALDET','اطلاعات اضافی');
define('_EDITORREVIEW','مرور نشر کننده');
define('_REPORTBROKEN','گزارش لینک شکسته');
define('_AND','و');
define('_INDB','در بانک اطلاعاتی ما وجود دارد');
define('_INSTRUCTIONS','توجه کنید');
define('_USERANDIP','نام کاربری و شماره آی پی سیستم شما ثبت خواهد شد..');
define('_LDESCRIPTION','توضیح: (255 حرف حداکثر)');
define('_CHECKFORIT','شما ایمیل خود را وارد نکرده اید ولی ما فایل شما را به زودی بررسی خواهیم کرد.');
define('_LASTWEEK','هفته گذشته');
define('_LAST30DAYS','30 روز گذشته');
define('_1WEEK','1 هفته');
define('_2WEEKS','2 هفته');
define('_30DAYS','30 روز');
define('_ADDEDON','اضافه شده در');
define('_RATING','امتیاز');
define('_DETAILS','جزئیات');
define('_OF','of');
define('_TVOTESREQ','حداقل امتیاز لازم');
define('_SHOWTOP','نمایش بهترین ها');
define('_MOSTPOPULAR','بیشترین علاقه مندی');
define('_OFALL','از همه');
define('_POPULARITY','مورد علاقه');
define('_SELECTPAGE','انتخاب صفحه');
define('_MAIN','اصلی');
define('_NEWTODAY','جدید امروز');
define('_NEWLAST3DAYS','جدید 3 روزگ ذشته');
define('_NEWTHISWEEK','جدید این هفته');
define('_POPULARITY1','مورد علاقه (کمترین به بیشترین نمایش)');
define('_POPULARITY2','مورد علاقه (بیشترین به کمترین نمایش)');
define('_TITLEAZ','عنوان (A به Z)');
define('_TITLEZA','عنوان(Z به A)');
define('_RATING1','امتیاز (کمترین امتیاز به بیشترین امتیاز)');
define('_RATING2','امتیاز (بیشترین امتیاز به کمترین امتیاز)');
define('_SEARCHRESULTS4','نتیجه جستجو برای');
define('_USUBCATEGORIES','زیر شاخه');
define('_TRY2SEARCH','سعی برای جستجو');
define('_INOTHERSENGINES','در سایر موتور های جستجو');
define('_EDITORIAL','سر مقاله');
define('_EDITORIALBY','سر مقاله توسط');
define('_NOEDITORIAL','شرحی در باره اين وب سايت وجود ندارد.');
define('_RATETHISSITE','امتیاز به این منبع');
define('_ISTHISYOURSITE','این منبع شماست؟');
define('_ALLOWTORATE','اجازه به کاربران سایت شما برای امتیاز دادن به این منبع!');
define('_OVERALLRATING','همگی امتیازها');
define('_TOTALOF','همه از');
define('_USER','کاربر');
define('_USERAVGRATING','میانگین امتیازات کاربران"');
define('_NUMRATINGS','# از امتياز ها');
define('_REGISTEREDUSERS','کاربران ثبت نام کرده');
define('_NUMBEROFRATINGS','تعداد امتیازات"');
define('_NOREGUSERSVOTES','رایی از کاربران ثبت نام کرده وجود مدارد');
define('_BREAKDOWNBYVAL','تفکیک رای ها بر اساس امتیازات');
define('_LTOTALVOTES','جمع امتیازات');
define('_HIGHRATING','بیشترین امتیاز');
define('_LOWRATING','Low Rating');
define('_NUMOFCOMMENTS','تعداد نظرات');
define('_WEIGHNOTE','* Note: This Resource weighs Registered vs. Unregistered users ratings');
define('_NOUNREGUSERSVOTES','No Unregistered User Votes');
define('_WEIGHOUTNOTE','* Note: This Resource weighs Registered vs. Outside voters ratings');
define('_NOOUTSIDEVOTES','No Outside Votes');
define('_OUTSIDEVOTERS','Outside Voters');
define('_UNREGISTEREDUSERS','شما در سايت ثبت نام نكرده ايد');
define('_PROMOTEYOURSITE','Promote Your Website');
define('_PROMOTE01','Maybe you can be interested in several of the remote \'Rate a Website\' options we have available. These allow you to place an image (or even a rating form) on your web site in order to increase the number of votes your resource receive. Please choose from one of the options listed below:');
define('_TEXTLINK','Text Link');
define('_PROMOTE02','One way to link to the rating form is through a simple text link:');
define('_HTMLCODE1','The HTML code you should use in this case, is the following:');
define('_THENUMBER','The Number');
define('_IDREFER','in the HTML source references your site\'s ID number in '.$sitename.' database. Be sure this number is present.');
define('_BUTTONLINK','Button Link');
define('_PROMOTE03','If you\'re looking for a little more than a basic text link, you may wish to use a small button link:');
define('_RATEIT','ارزيابي اين سايت');
define('_HTMLCODE2','The source code for the above button is:');
define('_REMOTEFORM','Remote Rating Form');
define('_PROMOTE04','If you cheat on this, we\'ll remove your link. Having said that, here is what the current remote rating form looks like.');
define('_VOTE4THISSITE','دادن راي به اين سايت');
define('_HTMLCODE3','Using this form will allow users to rate your resource directly from your site and the rating will be recorded here. The above form is disabled, but the following source code will work if you simply cut and paste it into your web page. The source code is shown below:');
define('_PROMOTE05','Thanks! and good luck with your ratings!');
define('_THANKSBROKEN','Thank you for helping to maintain this directory\'s integrity.');
define('_SECURITYBROKEN','For security reasons your user name and IP address will also be temporarily recorded.');
define('_THANKSFORINFO','بابت اطلاعات مچكريم');
define('_LOOKTOREQUEST','We\'ll look into your request shortly.');
define('_SENDREQUEST','ارسال درخواست');
define('_THANKSTOTAKETIME','Thank you for taking the time to rate a site here at');
define('_RETURNTO','برگشت به');
define('_RATENOTE1','Please do not vote for the same resource more than once.');
define('_RATENOTE2','The scale is 1 - 10, with 1 being poor and 10 being excellent.');
define('_RATENOTE3','Please be objective in your vote, if everyone receives a 1 or a 10, the ratings aren\'t very useful.');
define('_RATENOTE5','Do not vote for your own resource or a competitor\'s.');
define('_YOUAREREGGED','You are a registered user and are logged in.');
define('_FEELFREE2ADD','Feel free to add a comment about this site.');
define('_YOUARENOTREGGED','You are not a registered user or you have not logged in.');
define('_IFYOUWEREREG','If you were registered you could make comments on this website.');
define('_MODIFY','Modify');
define('_COMPLETEVOTE1','راي شما ارزشمند است');
define('_COMPLETEVOTE2','You have already voted for this resource in the past '.$anonwaitdays.' day(s).');
define('_COMPLETEVOTE3','Vote for a resource only once.<br />All votes are logged and reviewed.');
define('_COMPLETEVOTE4','You cannot vote on a link you submitted.<br />All votes are logged and reviewed.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Only one vote per IP address allowed every '.$outsidewaitdays.' day(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','انتقال همه فايل ها از شاخه ');
define('_DELEZDOWNLOADSCATWARNING',' اخطار:آيا مطمئن هستيد که ميخواهيد اين شاخه را پاک کنيد؟ شما با پاک کردن اين شاخه تمام زير شاخه ها و فايل های ضميمه شده آن ها را پاک خواهيد کرد.');
define('_DELCONTENTCAT','اخطار: آيا مطمئن هستيد که ميخواهيد اين شاخه را پاک کنيد ؟ با پاک کردن اين شاخه صفحه های زير مجموعه  آن حذف نخواهند شد ولی به شاخه ديگری هم انتقال نمی يابند.');
define('_DELCATEGORY','حذف شاخه');
define('_DOWNLOADTITLE','تيتر فايل');
define('_DOWNLOADSINDB','فايل در بانک اطلاعاتی وجود دارد.');
define('_DOWNLOADSWAITINGVAL','فايل های در حال انتظار برای قبول شدن');
define('_CLEANDOWNLOADSDB','پاک کردن نظرات فايل ها');
define('_BROKENDOWNLOADSREP','ا لينک ها و فايل های خراب اطلاع داده شده توسط کاربران.');
define('_DOWNLOADMODREQUEST','در خواست های ويرايش فايل');
define('_ADDNEWDOWNLOAD','اضافه کردن فايل جديد');
define('_MODDOWNLOAD','ويرايش يک فايل');
define('_WEBDOWNLOADSADMIN','مديريت فايل های وب');
define('_DNOREPORTEDBROKEN','فايل خرابی اطلاع داده نشده است.');
define('_DUSERREPBROKEN','کاربر لينک خراب را اطلاع داده است');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','دانلود فايل هاي جديد');
