<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/arabic/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:47 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','التحميل الذي طلبت غير موجود ');
define('_CATEGORIES','أقسام ');
define('_LVOTES','أصوات');
define('_TOTALVOTES','العدد الكلي للأصوات ');
define('_THEREARE','هنالك ');
define('_NOMATCHES','لا نتائج مطابقة لبحثك ');
define('_SCOMMENTS','تعليقات');
define('_UNKNOWN','مجهول ');
define('_AUTHORNAME','صاحب البرنامج ');
define('_AUTHOREMAIL','بريده ');
define('_DOWNLOADNAME','اسم البرنامج ');
define('_ADDTHISFILE','أضف هذا الملف');
define('_INBYTES','بالبايتات ');
//define('_FILESIZE','Filesize');
//define('_VERSION','Version');
//define('_AUTHOR','Author');
define('_HOMEPAGE','البداية ');
define('_DOWNLOADNOW','ابدأ التحميل ');
define('_RATERESOURCE','تقييم ');
define('_FILEURL','رابط الملف');
define('_ADDDOWNLOAD','أضف تحميل ');
define('_DOWNLOADSMAIN','الرئيسية ');
define('_DOWNLOADCOMMENTS','التعليقات ');
define('_DOWNLOADSMAINCAT','الأقسام الرئيسية ');
define('_ADDADOWNLOAD','أضف تحميل جديد ');
define('_DSUBMITONCE','Submit a unique download only once.');
define('_DPOSTPENDING','All downloads are posted pending verification.');
define('_RESSORTED','Resources currently sorted by');
define('_DOWNLOADSNOTUSER1','أنت غير مسجل لدينا أو انه لم يتم تسجيل دخولك.');
define('_DOWNLOADSNOTUSER2','تستطيع اضافة برامج اذا كنت مسجلا لدينا.');
define('_DOWNLOADSNOTUSER3','عملية التسجيل سهلة وسريعة.');
define('_DOWNLOADSNOTUSER4','لماذا نطلب التسجيل للدخول الى بعض وظائف الموقع؟');
define('_DOWNLOADSNOTUSER5','السبب هو لكي نستطيع تقديم خدمة أجود وأسرع,');
define('_DOWNLOADSNOTUSER6','يتم مراجعة كل عنصر بواسطة مشرفي الموقع ومن ثم الموافقة عليه.');
define('_DOWNLOADSNOTUSER7','نأمل أن نقدم لك خدمات مميزة.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink('Your_Account').'">سجل الآن</a>');
define('_DOWNLOADALREADYEXT','خطأ: تم ادخال هذا الرابط في قاعدة البيانات!');
define('_DOWNLOADNOTITLE','خطأ: يجب كتابة اسم أو عنوان للرابط!');
define('_DOWNLOADNOURL','خطأ: يجب ادخال الرابط نفسه!');
define('_DOWNLOADNODESC','خطأ: يجب أدخال شرح للرابط!');
define('_DOWNLOADRECEIVED','شكرا! تم استلام البرنامج الذي أرسلت');
define('_NEWDOWNLOADS','برامج جديدة');
define('_TOTALNEWDOWNLOADS','مجموع البرامج جديدة');
define('_DTOTALFORLAST','مجموع البرامج لآخر');
define('_DBESTRATED','أفضل البرامج المقيمة - الأعلى');
define('_TRATEDDOWNLOADS','مجموع البرامج المقيمة');
define('_SORTDOWNLOADSBY','ترتيب البرامج حسب');
define('_DCATNEWTODAY','New Downloads in this Category Added Today');
define('_DCATLAST3DAYS','New Downloads in this Category Added in the last 3 days');
define('_DCATTHISWEEK','New Downloads in this Category Added this week');
define('_DDATE1','Date (Old Downloads Listed First)');
define('_DDATE2','Date (New Downloads Listed First)');
define('_DOWNLOADS','تحميل');
define('_DOWNLOADPROFILE','معلومات البرنامج');
define('_DOWNLOADRATINGDET','تفاصيل تقييم البرنامج');
define('_EDITTHISDOWNLOAD','تعديل هذا البرنامج');
define('_DOWNLOADRATING','تقييم البرامج');
define('_DOWNLOADVOTE','تصويت!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','طلب تعديل برنامج');
define('_DOWNLOADID','رقم البرنامج');
define('_DLETSDECIDE','Input from users such as yourself will help other visitors better decide which downloads to click on.');
define('_DRATENOTE4','You can view a list of the <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Top Rated Resources</a>.');
define('_POPULAR','مشهور');
define('_TOPRATED','أفضل تقييم');
define('_ADDITIONALDET','تفاصيل اضافية');
define('_EDITORREVIEW','مراجعة الكاتب');
define('_REPORTBROKEN','أخبرنا عن وصلة لا تعمل');
define('_AND','و');
define('_INDB','في قاعدة البيانات');
define('_INSTRUCTIONS','تعليمات');
define('_USERANDIP','يتم تسجيل اسم المستخدم وعنوان الأي بي فنرجوا عدم أساءة استعمال البرنامج.');
define('_LDESCRIPTION','وصف: (حد أقص 255 حرف)');
define('_CHECKFORIT','لم تكتب بريدك الإلكتروني. سنقوم بمراجعة البرنامج على أية حال.');
define('_LASTWEEK','الأسبوع الماضي');
define('_LAST30DAYS','أخر 30 يوما');
define('_1WEEK','أسبوع');
define('_2WEEKS','أسبوعان');
define('_30DAYS','30 يوم ');
define('_ADDEDON','أضيف في ');
define('_RATING','تقييم ');
define('_DETAILS','تفاصيل');
define('_OF','لـ');
define('_TVOTESREQ','أقل أصوات مطلوبة ');
define('_SHOWTOP','أعرض أفضل ');
define('_MOSTPOPULAR','الأكثر شيوعا - أفضلها');
define('_OFALL','من الكل');
define('_POPULARITY','الشهره');
define('_SELECTPAGE','اختر صفحة ');
define('_MAIN','رئيسي ');
define('_NEWTODAY','جديد اليوم');
define('_NEWLAST3DAYS','جديد آخر 3 أيام ');
define('_NEWTHISWEEK','جديد هذا الأسبوع');
define('_POPULARITY1','الشهرة (الأقل الى الأكثر زيارة)');
define('_POPULARITY2','الشهرة (الأكثر الى الأقل زيارة)');
define('_TITLEAZ','العنوان (أ الى ي)');
define('_TITLEZA','العنوان (ي الى أ)');
define('_RATING1','التقييم (من الأدنى الى الأعلى تقييم)');
define('_RATING2','التقييم (من الأعلى الى الأدنى تقييم)');
define('_SEARCHRESULTS4','نتائج بحث');
define('_USUBCATEGORIES','تصنيفات فرعية');
define('_TRY2SEARCH','حاول البحث');
define('_INOTHERSENGINES','في محركات البحث الأخرى');
define('_EDITORIAL','المحررين');
define('_EDITORIALBY','أرسل بواسطة');
define('_NOEDITORIAL','لا يوجد محررين لهذا الموقع حاليا.');
define('_RATETHISSITE','تقييم هذا الموقع');
define('_ISTHISYOURSITE','هل هذا موقعك؟');
define('_ALLOWTORATE','تمكين المستخدمين من تقييم موقعك!');
define('_OVERALLRATING','التقييم الكلي');
define('_TOTALOF','مجموع');
define('_USER','عضو');
define('_USERAVGRATING','متوسط تقييم الأعضاء');
define('_NUMRATINGS','# التقاييم');
define('_REGISTEREDUSERS','أعضاء مسجلين');
define('_NUMBEROFRATINGS','عدد التقييم');
define('_NOREGUSERSVOTES','لا يوجد تصويت من عضو مسجل');
define('_BREAKDOWNBYVAL','تفاصيل التقييم بالقيم');
define('_LTOTALVOTES','مجموع التصويتات');
define('_HIGHRATING','تقييم عالي');
define('_LOWRATING','تقييم واطي');
define('_NUMOFCOMMENTS','عدد التعليقات');
define('_WEIGHNOTE','* ملحوظة: تقييم الأعضاء المسجلين لهذا الموقع يفوق الأعضاء الغير مسجلين');
define('_NOUNREGUSERSVOTES','لا يوجد تقييم لأعضاء غير مسجلين');
define('_WEIGHOUTNOTE','* ملحوظة: تقييم المسجلين يفوق التقييم المصوتين الخارجيين');
define('_NOOUTSIDEVOTES','لا يوجد تصويت خارجي');
define('_OUTSIDEVOTERS','مصوتين من الخارج');
define('_UNREGISTEREDUSERS','مستخدمين غير مسجلين');
define('_PROMOTEYOURSITE','لزيادة عدد زوارك');
define('_PROMOTE01','يمكنك اختيار أحد الخيارات التالية لترشيح موقعك. هذه عبارة عن صورة لرابط تضعه في موقعك يقوم زوارك بترشيح موقعك عن طريقها. الرجاء إختيار أحد الخيارات التالية:');
define('_TEXTLINK','رابط نصي');
define('_PROMOTE02','أحد الطرق لتقييم البرنامج هو عبارة عن رابط نصي:');
define('_HTMLCODE1','كود الهتمل الذي تستخدمه لذلك هو:');
define('_THENUMBER','الرقم');
define('_IDREFER','في كود الهتمل يحيل الى رقم موقعك في قاعدة بيانات $sitename. تأكد من وجود هذا الرقم.');
define('_BUTTONLINK','زر الرابط');
define('_PROMOTE03','اذا كنت تريد طريقة غير الرابط النصي فيمكنك استخدام زر للبرنامج:');
define('_RATEIT','رشح هذا الموقع!');
define('_HTMLCODE2','الكود للزر في الأعلى هو:');
define('_REMOTEFORM','نموذج الترشيح الخارجي');
define('_PROMOTE04','اذا قمت يالتلاعب في الترشيح فسوف نلغي برنامجك من قاعدة البيانات. وهذا هوا الكود الخاص بالترشيح الخارجي.');
define('_VOTE4THISSITE','رشح هذا الموقع!');
define('_HTMLCODE3','يمكنك استخدام هذا النموذج من تقييم موقعك لدينا من خلا موقعك نفسه ويتم تسجيل التقييم هنا. النموذج في الأعلى معطل ولكن اذا نسخت ولصقت هذا الكود فسيتمكن زوارك من تقييم موقعك. الكود هو كالتالي:');
define('_PROMOTE05','شكرا لك ونتمنى لك التوفيق في تقييم موقعك');
define('_THANKSBROKEN','نشكرك على مساعدتنا في هذا الدليل.');
define('_SECURITYBROKEN','سيتم حفظ عنوان الأي بي واسم المستخدم لفترة مؤقته وذلك لأسباب أمنية.');
define('_THANKSFORINFO','شكرا على هذه المعلومات.');
define('_LOOKTOREQUEST','سوف ننظر في طلبك قريبا.');
define('_SENDREQUEST','أرسل الطلب');
define('_THANKSTOTAKETIME','نشكرك لتقييمك لهذا الموقع لدينا');
define('_RETURNTO','عودة الى');
define('_RATENOTE1','الرجاء عدم تقييم نفس الموقع أكثر من مرة.');
define('_RATENOTE2','التقييم يكون من 1 - 10. بحيث 1 معناها ردئ و10 تعني ممتاز.');
define('_RATENOTE3','الرجاء أن تكون عادل في تقييمك. لو قيمت المواقع كلها بواحد أو كلها بعشرة لإإن هذا التقييم سيكون عديم الفائدة.');
define('_RATENOTE5','الرجاء عدم ترشيح موقعك أو مواقع منافسة.');
define('_YOUAREREGGED','أنت مسجل لدينا وتمت عملية دخولك.');
define('_FEELFREE2ADD','يمكنك اضافة تعليق على هذا الموقع.');
define('_YOUARENOTREGGED','انت غير مسجل لدينا أو أنك لم تقم بعملية الدخول.');
define('_IFYOUWEREREG','يمكنك إرسال تعليقك على الموقع اذا كنت مسجلا لدينا.');
define('_MODIFY','تعديل');
define('_COMPLETEVOTE1','شكرا لتصويتك ');
define('_COMPLETEVOTE2','قمت بالتصويت مسبقا خلال $anonwaitdays أيام الماضية.');
define('_COMPLETEVOTE3','يمكنك التصويت لمرة واحدة فقط.<br>جميع الأصوات تسجل وتراجع.');
define('_COMPLETEVOTE4','لا يمكنك التصويت على موقع قمت بادخاله.<brجميع الأصوات تسجل وتراجع.');
define('_COMPLETEVOTE5','لم يختر ترشيح - لم يختر تصويت');
define('_COMPLETEVOTE6','تصويت واحد لكل عنوان اي بي كل $outsidewaitdays يوم/أيام.');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','حذف قسم ');
define('_DOWNLOADTITLE','اسم المرفق ');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','مرفق بانتظار التحقق');
define('_CLEANDOWNLOADSDB','حذف التصويتات على المرفق ');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','أضف مرفق جديد ');
define('_MODDOWNLOAD','تعديل مواصفات مرفق ');
define('_WEBDOWNLOADSADMIN','التحكم بالمرفقات ');
define('_DNOREPORTEDBROKEN','ليس من تقرير عن مرفق ذو رابط خاطئ ');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','تفحص جميع المرفقات ');
define('_VALIDATEDOWNLOADS','التحقق من المرفقات ');
define('_NEWDOWNLOADADDED','تم إَافة المرفق إلى قاعدة البيانات ');
