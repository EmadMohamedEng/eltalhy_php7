<?php

use Illuminate\Database\Migrations\Migration;

class EditAudioIntoAbouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("INSERT INTO `album` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES (NULL, 'eltalhy', 'eltalhy', 'uploads/album\\1603365510_avatars-000689927555-6zeg8w-t200x200.jpg', '2020-10-22 11:18:30', '2020-10-22 11:18:30')");

        \DB::statement("INSERT INTO `audio` (`id`, `title`, `sound_link`, `description`, `created_at`, `updated_at`, `category_id`, `slug`, `album_id`) VALUES (NULL, 'الحلقة التاسعة من برنامج \" صل على النبي ﷺ\" في موسمه الجديد 2020 (حلقات كاملة)', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/840625795&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true%22%3E%3C/iframe%3E%3Cdiv', 'الحلقة التاسعة من برنامج \" صل على النبي ﷺ\" في موسمه الجديد 2020 (حلقات كاملة)', '2020-10-22 11:22:55', '2020-10-22 11:31:16', NULL, 'alhlk-altasaa-mn-brnamj-sl-aal-alnby-fy-mosmh-aljdyd-2020-hlkat-kaml', '1')
      ");

        \DB::statement("INSERT INTO `videos` (`id`, `title`, `youtube_link`, `description`, `category_id`, `created_at`, `updated_at`, `slug`) VALUES (NULL, 'لفاتحة بصوت الداعية الإسلامى السيد أحمد الطلحى', 'https://www.youtube.com/embed/T5O5IMGHIvE?rel=0&amp;controls=0&amp;showinfo=0', 'لفاتحة بصوت الداعية الإسلامى السيد أحمد الطلحى', '8', '2020-10-22 11:32:40', '2020-10-22 11:32:40', 'lfath-bsot-aldaaay-aleslam-alsyd-ahmd-altlh')
");

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
