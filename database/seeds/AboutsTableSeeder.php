<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'short_summery',
                'description' => 'عُرِف الشيخ أحمد الطلحي بتأليف الكثير من الكتب والمشاركة في العديد من المحاضرات والمناظرات والمؤتمرات على الصعيدين المحلي والدولي، كما اشتُهر بتنشيط عدد من البرامج التلفزيونية على القنوات الفضائية العربية لعل أبرزها برنامجه الناجح "تبسَّم".',
                'photo_path' => 'uploads/about\\1492467281_about_sec.jpg',
                'created_at' => '2017-04-17 22:14:41',
                'updated_at' => '2017-04-17 22:17:29',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'summery',
                'description' => '<section class="about-page pages-body">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="info">
<h2 class="text-center">تَرجَمَةٌ</h2>

<div class="intro text-center">
<p>عن الداعية الإسلامي السيّد أحمد الطلحي حفظه الله</p>

<div class="intro-img-profile"><img src="img/profile-intro.jpg"></div>

<p>الحمد لله رب العالمين والصلاة والسلام على فخر الأنبياء و أرحم المرسلين</p>

<p>سيّدنا محمّد وعلى آله وصحبه أجمعين...</p>

<p>ترجمةُ مختصرة</p>

<p>عن الداعي إلى الله الداعية الإسلامي</p>

<p>(السيّد أحمد الطلحي حفظه الله )</p>
</div>

<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingOne">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">النســـــب </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseOne" style="height: 0px;">
<div class="panel-body">
<p>هو السيّد: &nbsp;أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء <span style="color: #000080;">ψ</span> بنت سيّدنا محمّد خاتم النبيين <span style="color: #333399;">????</span>.</p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingTwo">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">المولد </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseTwo" style="height: 0px;">
<div class="panel-body">
<p>ولد من والديــن شريفين من ذرية الإمام الحســن بن علي بن أبي طالب <span style="color: #000080;">ψ</span> ، قبيل فجر يوم الإثنين العاشر من شوال عام 1405هـ&nbsp; /&nbsp; 29 يونيـــو 1985م، بالجبل الأخضر بمدينة البيضاء إحدى مدن شرق ليبيا، بجوار ضريح الصحابي الجليل سيّدنا رويفع بن ثابت الأنصاري &nbsp;<span style="color: #000080;">????</span>.</p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingThree">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">تكوينه </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseThree" style="height: 0px;">
<div class="panel-body">مالكي المذهب ، أشعري العقيدة ، جنيدي المسلك .</div>
</div>
</div>



<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingFive">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">المسيرة العلمية الدعوية </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseFive">
<div class="panel-body">
<p>عيّن إمام وخطيب ومحفظ بجامع سيّدنا الزبير بن العوام – البيضاء - &nbsp;ليبيا .</p>

<p>ثم إمام وخطيب وواعظ ومحفظ بجامع النور - بنغازي -&nbsp; ليبيا .</p>

<p>مأذون شرعي بمحكمة الحزام الأخضر الشرعية - &nbsp;بنغازي .</p>

<p>مدير مركز النور لتحفيظ القرآن الكريم وتدريس العلوم الشرعية &nbsp;- بنغازي - ليبيا</p>

<p>محاضر زائر بدوائر الأوقاف ومساجد ليبيا .</p>

<p>واعظ بمجموعة من المؤسسات الإصلاحية .</p>

<p>رئيس مهرجان جوائز المحبة &nbsp;في ليبيا .</p>

<p>رئيس مهرجان المحبة الإنشادي في &nbsp;ليبيا .</p>

<p>رئيس اللجنة التحضيرية لمجلس الدعوة والإرشاد في ليبيا .</p>

<p>عضو مؤسس لمجلس الدعوة والإرشاد في ليبيا .</p>

<p>عضو رابطة العمل الإسلامي ليبيا .</p>

<p>عضو جمعية الإمام المجدد محمّد بن علي السنوسي الإسلامية للثقافة والتراث في ليبيا .</p>

<p>كما له العديد من الزيارات الدولية والعالمية في الدعوة إلي الله .</p>

<p>وله أيضًا عدد من المؤلفات ك ( كتاب أساس علوم الدين ، تبسم ) وغيرها .</p>
</div>
</div>
</div>



<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingSeven">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">الإنجازات </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseSeven">
<div class="panel-body">
<p>أسس مجلس الدعوة والإرشاد في ليبيا</p>

<p>أسس مركز النور لتحفيظ القرآن الكريم وتدريس العلوم الشرعية في ليبيا .</p>

<p>أسس مهرجان المحبة الإنشادي في ليبيا .</p>

<p>أسس مهرجان جوائز المحبة في ليبيا .</p>

<p>&nbsp;</p>

<p>النشاط الاعلامي :</p>

<p>البرامج :</p>

<p>برنامج تبسم 30 حلقة على قناة السلام عليك أيها النبي</p>

<p>برنامج عيد الروح الموسم الاول على قناة الارث النبوي</p>

<p>برنامج عيد الروح الموسم الثاني على قناة الارث النبوي</p>

<p>برنامج خيمة النهار الرمضانية على شبكة تلفزيون النهار</p>

<p>المقابلات :</p>

<p>سلسلة عام الابتسامة 52 حلقة على قناة روتانا مصرية</p>

<p>سلسلة عام البشارة 52 حلقة على قناة روتانا مصرية</p>

<p>سلسلة عام الحب 52 حلقة على قناة روتانا مصرية</p>

<p>سلسلة حلقات على قناة النهار برنامج النهارده</p>

<p>سلسلة حلقات منوعة على قناة الناس</p>

<p>و 200 حلقة منوعة على عدد من القنوات ( الحياة – أونست – dtv –cbc &nbsp;- الحدث اليوم – جروزني الشيشانية – مكس اف ام السعودية –وغيرها )</p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingEight">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseEight">الأنشطة والرحلات </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseEight">
<div class="panel-body">
<p>أقام دروساً ومجالس للتعليم والإرشاد والتوجيه والتوعية والدعوة إلى الله في بلدان شتى استهلها عام 1427هـ / 2006م داخل مدن ليبيا وقراها النائية في الشرق والغرب والشمال والجنوب ، وفي عام 1429هـ / 2008م بدأت رحلاته الدعوية الخارجية ومازالت متواصلة وقد شملت رحلاته الخارجية البلدان الآتية :-</p>

<p>البلدان العربية :&nbsp; &nbsp;(جمهورية مصر العربية – المملكة الُأردنية الهاشمية &nbsp;– جمهورية &nbsp;سوريا العربية – دولة الإمارات المتحدة – المملكة العربية السعودية –&nbsp;الجمهورية التونسية ).</p>

<p>دول أسيـــــــا :&nbsp;&nbsp; &nbsp;(ماليزيا – أندونيسيا - سنغافورا ).</p>

<p>دُول أوروبـــا : &nbsp;( المملكة البريطانية المتحدة – الجمهورية التركية &nbsp;- جمهورية روسيا الاتحادية – جمهورية الشيشان ).</p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" id="headingNine">
<h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseNine">المحاضرات الخارجية </a></h4>
</div>

<div aria-expanded="false" class="panel-collapse collapse" id="collapseNine" style="height: 0px;">
<div class="panel-body">
<p>ألقى محاضرات ذات بال تتناول قضايا&nbsp; تهم المجتمع الإنساني في أنحاء العالم من أهمها</p>

<p>محاضرة في جامعة كامبريج البريطانية .</p>

<p>سلسلة محاضرات في المدارس الثانوية في مدينة لوتن ببريطانيا .</p>

<p>كلمة بين يدي شيخه الحبيب عمر بن حفيظ في مجلس رسول الله في ميدان موناس بالعاصمة الاندونيسية جاكرتا وقد حضرها أكثر من مليون مسلم</p>

<p>سلسلة محاضرات عن السير الى الله &nbsp;في المراكز الثقافية باستانبول تركيا<br>
سلسلة محاضرات عن التربية النبوية في مراكز دعوية في اسكتلندا</p>

<p>له عدد من الدروس والخطب والمحاضرات المسجلة على الموقع الرسمي</p>

<p>www.eltalhyoffcial.com.</p>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading hvr-bounce-to-left" id="headingTen">
<h4 class="panel-title"><a aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapseTen">شيوخه </a></h4>
</div>

<div aria-expanded="true" class="panel-collapse collapse in" id="collapseTen">
<div class="panel-body"><!--Teachers -->
<div class="teachers text-center">
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="العلامة الحبيب عبد القادر بن أحمد بن عبد الرحمن  السقاف " src="img/t1.jpg"></div>

<div class="caption">
<h3>العلامة الحبيب عبد القادر بن أحمد بن عبد الرحمن السقاف</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="العلامة الحبيب عمر بن محمد بن سالم بن حفيظ بن الشيخ أبوبكر بن سالم" src="img/t2.jpg"></div>

<div class="caption">
<h3>العلامة الحبيب عمر بن محمد بن سالم بن حفيظ بن الشيخ أبوبكر بن سالم</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="العلامة الدكتور على جمعة مفتي الديار المصرية " src="img/t6.jpg"></div>

<div class="caption">
<h3>العلامة الدكتور على جمعة مفتي الديار المصرية</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="الشيخ المربي : السيّد محجوب أبوفارس الصفراني " src="img/t3.jpg"></div>

<div class="caption">
<h3>الشيخ المربي : السيّد محجوب أبوفارس الصفراني</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="العلامة السيد الشيخ محمود افندي المجددي الخالدي النقشبندي " src="img/t4.jpg"></div>

<div class="caption">
<h3>العلامة السيد الشيخ محمود افندي المجددي الخالدي النقشبندي</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="العلامة الشيخ ابراهيم آل خليفة الاحسائي" src="img/t7.jpg"></div>

<div class="caption">
<h3>العلامة الشيخ ابراهيم آل خليفة الاحسائي</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="الحبيب أبوبكر بن علي العدني المشهور " src="img/t8.jpg"></div>

<div class="caption">
<h3>الحبيب أبوبكر بن علي العدني المشهور</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="الحبيب علي زين العابدين بن عبد الرحمن الجفري " src="img/t5.jpg"></div>

<div class="caption">
<h3>الحبيب علي زين العابدين بن عبد الرحمن الجفري</h3>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="thumbnail">
<div class="img-teacher"><img alt="الحبيب محمد بن عبد الرحمن السقاف " src="img/t9.jpg"></div>

<div class="caption">
<h3>الحبيب محمد بن عبد الرحمن السقاف</h3>
</div>
</div>
</div>
</div>
</div>
<!--//Teachers --></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>',
                'photo_path' => 'uploads/about\\1492468912_slide_4.png',
                'created_at' => '2017-04-17 22:41:52',
                'updated_at' => '2017-04-22 16:48:14',
            ),
        ));
        
        
    }
}
