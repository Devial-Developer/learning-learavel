<?php

use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER user_default_role AFTER INSERT ON `users` FOR EACH ROW
                BEGIN
                   INSERT INTO `user_role` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES (3, NEW.id, now(), null);
                END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `user_default_role`');

    }
}
