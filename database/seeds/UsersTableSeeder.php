<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Type;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = Type::where('name', 'User')->first();
        $type_author = Type::where('name', 'Author')->first();
        $type_admin = Type::where('name', 'Admin')->first();

        $user = new User();
        $user->first_name = 'Victor';
        $user->last_name = 'Visitor';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->types()->attach($type_user);

        $admin = new User();
        $admin->first_name = 'Alex';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->types()->attach($type_admin);

        $author = new User();
        $author->first_name = 'Andy';
        $author->last_name = 'Author';
        $author->email = 'author@example.com';
        $author->password = bcrypt('author');
        $author->save();
        $author->types()->attach($type_author);
    }
}