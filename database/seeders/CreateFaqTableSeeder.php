<?php

namespace Database\Seeders;

use App\Models\Admin\Faq;
use Illuminate\Database\Seeder;

class CreateFaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::truncate();

        Faq::insert([
            [
                'question' => 'Accordion Item #1',

                'answer' => '<p>Lorem ipsum dolor sit amet, ut has quidam prodesset, eos sumo ipsum civibus ea, vel quas nusquam ei. Et sea doming quodsi audire. No vim ornatus scaevola disputando, qui stet ceteros ad. Ad his choro appetere mnesarchum, no duo accusata incorrupte, vel essent fabulas ut.</p><p>Ne nam soluta libris. Cu sea utamur adipiscing, convenire patrioque dignissim et nec. Accusam incorrupte vituperatoribus vix ad, ei clita omnium mentitum pro. Est ad duis perpetua recteque, in autem posidonium qui. Illum nulla dolor mea an.</p><p>Officiis disputationi ne pri, libris malorum eam id. Molestie principes vix no. Ut velit iudicabit inciderint mea. Malorum mediocrem deseruisse nam ne, tale imperdiet vim ut. Aperiri splendide cu eos, vis in alia laoreet aliquando.</p>'
            ],
            [
                'question' => 'Accordion Item #2',

                'answer' => '<p>Lorem ipsum dolor sit amet, ut has quidam prodesset, eos sumo ipsum civibus ea, vel quas nusquam ei. Et sea doming quodsi audire. No vim ornatus scaevola disputando, qui stet ceteros ad. Ad his choro appetere mnesarchum, no duo accusata incorrupte, vel essent fabulas ut.</p><p>Ne nam soluta libris. Cu sea utamur adipiscing, convenire patrioque dignissim et nec. Accusam incorrupte vituperatoribus vix ad, ei clita omnium mentitum pro. Est ad duis perpetua recteque, in autem posidonium qui. Illum nulla dolor mea an.</p><p>Officiis disputationi ne pri, libris malorum eam id. Molestie principes vix no. Ut velit iudicabit inciderint mea. Malorum mediocrem deseruisse nam ne, tale imperdiet vim ut. Aperiri splendide cu eos, vis in alia laoreet aliquando.</p>'
            ],
            [
                'question' => 'Accordion Item #3',

                'answer' => '<p>Lorem ipsum dolor sit amet, ut has quidam prodesset, eos sumo ipsum civibus ea, vel quas nusquam ei. Et sea doming quodsi audire. No vim ornatus scaevola disputando, qui stet ceteros ad. Ad his choro appetere mnesarchum, no duo accusata incorrupte, vel essent fabulas ut.</p><p>Ne nam soluta libris. Cu sea utamur adipiscing, convenire patrioque dignissim et nec. Accusam incorrupte vituperatoribus vix ad, ei clita omnium mentitum pro. Est ad duis perpetua recteque, in autem posidonium qui. Illum nulla dolor mea an.</p><p>Officiis disputationi ne pri, libris malorum eam id. Molestie principes vix no. Ut velit iudicabit inciderint mea. Malorum mediocrem deseruisse nam ne, tale imperdiet vim ut. Aperiri splendide cu eos, vis in alia laoreet aliquando.</p>'
            ]
        ]);
    }
}
