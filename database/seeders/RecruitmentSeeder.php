<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RecruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::take(10)->get();
        foreach ($users as $user) {

            // 期限切れ且つ募集終了(期限昨日)
            Recruitment::create([
                'user_id' => $user->id,
                'category_id' => Category::inRandomOrder()->first()->id,
                'name' => $user->name . 'の作成したいアプリ名1',
                'description' => $user->name . 'の作成したいアプリの概要1',
                'period' => '150h~200h程度',
                'number' => '3人程度',
                'due_date' => Carbon::yesterday()->toDateString(),
                'gain' => '業務知識',
                'caution' => '週に最低10hは開発できる時間を確保してください。',
                'comment' => '一緒に楽しく学びましょう！'
            ]);

            // 募集終了(期限翌月)
            Recruitment::create([
                'user_id' => $user->id,
                'category_id' => Category::inRandomOrder()->first()->id,
                'name' => $user->name . 'の作成したいアプリ名2',
                'description' => $user->name . 'の作成したいアプリの概要2',
                'period' => '100h~150h程度',
                'number' => '2人程度',
                'due_date' => Carbon::now()->firstOfMonth()->addMonth(1)->toDateString(),
                'gain' => '他人数開発の楽しさと難しさ',
                'caution' => '経験、未経験は問いません',
                'comment' => '一緒に楽しく学びながら成長しましょう！'
            ]);

            // 募集中(期限翌月)
            Recruitment::create([
                'user_id' => $user->id,
                'category_id' => Category::inRandomOrder()->first()->id,
                'name' => $user->name . 'の作成したいアプリ名3',
                'description' => $user->name . 'の作成したいアプリの概要3',
                'period' => '200h~250h程度',
                'number' => '4人程度',
                'due_date' => Carbon::now()->firstOfMonth()->addMonth(1)->toDateString(),
                'gain' => 'git管理',
                'caution' => 'やる気のある人のみ募集します！',
                'comment' => '一緒に楽しく学びながら成長しましょう！'
            ]);
            
            // 募集中(期限翌々月)
            Recruitment::create([
                'user_id' => $user->id,
                'category_id' => Category::inRandomOrder()->first()->id,
                'name' => $user->name . 'の作成したいアプリ名4',
                'description' => $user->name . 'の作成したいアプリの概要4',
                'period' => '250h~300h程度',
                'number' => '5人程度',
                'due_date' => Carbon::now()->firstOfMonth()->addMonth(2)->toDateString(),
                'gain' => 'ざっくりとしたチーム開発の流れ',
                'caution' => '自分自身、経験がないのでできれば経験者の方がありがたいです',
                'comment' => '迷惑かけるかもしれませんが、一緒に楽しく学びながら成長しましょう！'
            ]);
        }
    }
}
