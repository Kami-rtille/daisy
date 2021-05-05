<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        DB::table('connexion')->insert([
            return $this->belongsToMany("App\Models\User", "connexion", "from_to", "to_id");
            // SELECT * FROM users JOIN connexion ON connexion.to_id=users.id WHERE from_id = $this->id
            
            ]);
        }
    }
