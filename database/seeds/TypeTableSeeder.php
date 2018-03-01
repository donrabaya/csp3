<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = New Type();
        $type_user->name = 'User';
        $type_user->description = 'A normal User';
        $type_user->save();

        $type_author = New Type();
        $type_author->name = 'Author';
        $type_author->description = 'An Author';
        $type_author->save();

        $type_admin = New Type();
        $type_admin->name = 'Admin';
        $type_admin->description = 'An Admin';
        $type_admin->save();
    }
}
