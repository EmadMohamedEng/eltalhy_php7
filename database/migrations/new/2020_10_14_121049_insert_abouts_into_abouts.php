<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertAboutsIntoAbouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::statement('ALTER TABLE `abouts` CHANGE `photo_path` `photo_path` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;');
        DB::table('abouts')->insert(
            [
                [
                    'title' => 'النســـــب',
                    'description' => '<p>هو السيّد: &nbsp;أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن
                        الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء <span
                        style="color: #000080;">&psi;</span> بنت سيّدنا محمّد خاتم النبيين <span
                        style="color: #333399;">????</span>.</p>'
                ],
                [
                    'title' => 'المولد',
                    'description' => '<p>ولد من والديــن شريفين من ذرية الإمام الحســن بن علي بن أبي طالب <span
                        style="color: #000080;">&psi;</span> ، قبيل فجر يوم الإثنين العاشر من شوال
                        عام 1405هـ&nbsp; /&nbsp; 29 يونيـــو 1985م، بالجبل الأخضر بمدينة البيضاء إحدى
                        مدن شرق ليبيا، بجوار ضريح الصحابي الجليل سيّدنا رويفع بن ثابت الأنصاري
                        &nbsp;<span style="color: #000080;">????</span>.</p>'
                ],
                [
                    'title' => 'تكوينه',
                    'description' => 'مالكي المذهب ، أشعري العقيدة ، جنيدي المسلك'
                ],
                [
                    'title' => 'المسيرة',
                    'description' => '<p>عيّن إمام وخطيب ومحفظ بجامع سيّدنا الزبير بن العوام &ndash; البيضاء - &nbsp;ليبيا
                    .</p>

                    <p>ثم إمام وخطيب وواعظ ومحفظ بجامع النور - بنغازي -&nbsp; ليبيا .</p>

                    <p>مأذون شرعي بمحكمة الحزام الأخضر الشرعية - &nbsp;بنغازي .</p>

                    <p>مدير مركز النور لتحفيظ القرآن الكريم وتدريس العلوم الشرعية &nbsp;- بنغازي - ليبيا
                    </p>

                    <p>محاضر زائر بدوائر الأوقاف ومساجد ليبيا .</p>

                    <p>واعظ بمجموعة من المؤسسات الإصلاحية .</p>

                    <p>رئيس مهرجان جوائز المحبة &nbsp;في ليبيا .</p>

                    <p>رئيس مهرجان المحبة الإنشادي في &nbsp;ليبيا .</p>

                    <p>رئيس اللجنة التحضيرية لمجلس الدعوة والإرشاد في ليبيا .</p>

                    <p>عضو مؤسس لمجلس الدعوة والإرشاد في ليبيا .</p>

                    <p>عضو رابطة العمل الإسلامي ليبيا .</p>

                    <p>عضو جمعية الإمام المجدد محمّد بن علي السنوسي الإسلامية للثقافة والتراث في ليبيا .
                    </p>

                    <p>كما له العديد من الزيارات الدولية والعالمية في الدعوة إلي الله .</p>

                    <p>وله أيضًا عدد من المؤلفات ك ( كتاب أساس علوم الدين ، تبسم ) وغيرها .</p>'
                ],
                [
                    'title' => 'الإنجازات',
                    'description' => '<p>أسس مجلس الدعوة والإرشاد في ليبيا</p>

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

                    <p>و 200 حلقة منوعة على عدد من القنوات ( الحياة &ndash; أونست &ndash; dtv &ndash;cbc
                        &nbsp;- الحدث اليوم &ndash; جروزني الشيشانية &ndash; مكس اف ام السعودية
                        &ndash;وغيرها )</p>'
                ],
                [
                    'title' => 'الأنشطة والرحلات',
                    'description' => '<p>أقام دروساً ومجالس للتعليم والإرشاد والتوجيه والتوعية والدعوة إلى الله في بلدان
                    شتى استهلها عام 1427هـ / 2006م داخل مدن ليبيا وقراها النائية في الشرق والغرب
                    والشمال والجنوب ، وفي عام 1429هـ / 2008م بدأت رحلاته الدعوية الخارجية ومازالت
                    متواصلة وقد شملت رحلاته الخارجية البلدان الآتية :-</p>

                    <p>البلدان العربية :&nbsp; &nbsp;(جمهورية مصر العربية &ndash; المملكة الُأردنية
                        الهاشمية &nbsp;&ndash; جمهورية &nbsp;سوريا العربية &ndash; دولة الإمارات المتحدة
                        &ndash; المملكة العربية السعودية &ndash;&nbsp;الجمهورية التونسية ).</p>

                    <p>دول أسيـــــــا :&nbsp;&nbsp; &nbsp;(ماليزيا &ndash; أندونيسيا - سنغافورا ).</p>

                    <p>دُول أوروبـــا : &nbsp;( المملكة البريطانية المتحدة &ndash; الجمهورية التركية
                        &nbsp;- جمهورية روسيا الاتحادية &ndash; جمهورية الشيشان ).</p>'
                ],
                [
                    'title' => 'المحاضرات الخارجية',
                    'description' => '<p>ألقى محاضرات ذات بال تتناول قضايا&nbsp; تهم المجتمع الإنساني في أنحاء العالم من
                    أهمها</p>

                    <p>محاضرة في جامعة كامبريج البريطانية .</p>

                    <p>سلسلة محاضرات في المدارس الثانوية في مدينة لوتن ببريطانيا .</p>

                    <p>كلمة بين يدي شيخه الحبيب عمر بن حفيظ في مجلس رسول الله في ميدان موناس بالعاصمة
                        الاندونيسية جاكرتا وقد حضرها أكثر من مليون مسلم</p>

                    <p>سلسلة محاضرات عن السير الى الله &nbsp;في المراكز الثقافية باستانبول تركيا<br />
                        سلسلة محاضرات عن التربية النبوية في مراكز دعوية في اسكتلندا</p>

                    <p>له عدد من الدروس والخطب والمحاضرات المسجلة على الموقع الرسمي</p>

                    <p>www.eltalhyoffcial.com.</p>'
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
