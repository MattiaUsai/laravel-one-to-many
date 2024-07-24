<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        
        Type::truncate();
        $types= ['Frontend','Backend'];
        foreach ($types as $type) {
            $new_type= new Type();
            $new_type->title=$type;
            
            $new_type->save();
        }
        Schema::enableForeignKeyConstraints();
        
    }
}