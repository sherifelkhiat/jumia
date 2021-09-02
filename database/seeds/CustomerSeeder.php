<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();

        DB::table('customers')->insert([ 
            'name' => 'Walid Hammadi', 
            'phone' =>	'(212) 6007989253'
        ]);

        DB::table('customers')->insert([
            'name' => 'Yosaf Karrouch',
            'phone' =>	'(212) 698054317'
        ]);

        DB::table('customers')->insert([ 
            'name' => 'Younes Boutikyad', 
            'phone' =>	'(212) 6546545369'
        ]);

        DB::table('customers')->insert([ 
            'name' => 'Houda Houda', 
            'phone' =>	'(212) 6617344445'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Chouf Malo', 
            'phone' =>	'(212) 691933626'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'soufiane fritisse', 
            'phone' =>	'(212) 633963130'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Nada Sofie', 
            'phone' =>	'(212) 654642448'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Edunildo Gomes Alberto', 
            'phone' =>	'(258) 847651504'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Wallas Singz Junior', 
            'phone' =>	'(258) 846565883'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'sevilton sylvestre', 
            'phone' =>	'(258) 849181828'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Tanvi Sachdeva', 
            'phone' =>	'(258) 84330678235'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Florencio Samuel', 
            'phone' =>	'(258) 847602609'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Solo Dolo', 
            'phone' =>	'(258) 042423566'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Pedro B 173', 
            'phone' =>	'(258) 823747618'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Ezequiel Fenias', 
            'phone' =>	'(258) 848826725'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'JACKSON NELLY', 
            'phone' =>	'(256) 775069443'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Kiwanuka Budallah', 
            'phone' =>	'(256) 7503O6263'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'VINEET SETH', 
            'phone' =>	'(256) 704244430'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Jokkene Richard', 
            'phone' =>	'(256) 7734127498'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Ogwal David', 
            'phone' =>	'(256) 7771031454'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'pt shop 0901 Ultimo', 
            'phone' =>	'(256) 3142345678'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Daniel Makori', 
            'phone' =>	'(256) 714660221'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'shop23 sales', 
            'phone' =>	'(251) 9773199405'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Filimon Embaye', 
            'phone' =>	'(251) 914701723'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'ABRAHAM NEGASH', 
            'phone' =>	'(251) 911203317'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'ZEKARIAS KEBEDE', 
            'phone' =>	'(251) 9119454961'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'EPHREM KINFE', 
            'phone' =>	'(251) 914148181'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Karim Niki', 
            'phone' =>	'(251) 966002259'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Frehiwot Teka', 
            'phone' =>	'(251) 988200000'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Fanetahune Abaia', 
            'phone' =>	'(251) 924418461'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Yonatan Tekelay', 
            'phone' =>	'(251) 911168450'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'EMILE CHRISTIAN KOUKOU DIKANDA HONORE', 
            'phone' =>	'(237) 697151594'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'MICHAEL MICHAEL', 
            'phone' =>	'(237) 677046616'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'ARREYMANYOR ROLAND TABOT', 
            'phone' =>	'(237) 6A0311634'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'LOUIS PARFAIT OMBES NTSO', 
            'phone' =>	'(237) 673122155'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'JOSEPH FELICIEN NOMO', 
            'phone' =>	'(237) 695539786'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'SUGAR STARRK BARRAGAN', 
            'phone' =>	'(237) 6780009592'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'WILLIAM KEMFANG', 
            'phone' =>	'(237) 6622284920'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'THOMAS WILFRIED LOMO LOMO', 
            'phone' =>	'(237) 696443597'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Dominique mekontchou', 
            'phone' =>	'(237) 691816558'
        ]);
        
        DB::table('customers')->insert([ 
            'name' => 'Nelson Nelson', 
            'phone' =>	'(237) 699209115'
        ]);
    }
}
