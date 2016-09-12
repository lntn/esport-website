<?php

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->delete();

        SiteSetting::create([
            'key'           => 'title',
            'title'         => trans('contents.site-title'),
            'value'         => 'Next Gen Esports',
            'lines'         => 1,
            'order'         => 0,
        ]);

        SiteSetting::create([
            'key'           => 'brand-name',
            'title'         => trans('contents.brand-name'),
            'value'         => 'Next-Gen',
            'lines'         => 1,
            'order'         => 0,
        ]);

        SiteSetting::create([
            'key'           => 'meta-keywords',
            'title'         => trans('contents.meta-keywords'),
            'value'         => 'dota 2, esport, gaming, dota',
            'order'         => 1,
        ]);

        SiteSetting::create([
            'key'           => 'meta-description',
            'title'         => trans('contents.meta-description'),
            'value'         => 'The number one DOTA 2 in Vietnam',
            'order'         => 2,
        ]);

        SiteSetting::create([
            'key'           => 'google-analytics',
            'title'         => trans('contents.google-analytics'),
            'value'         => 'UA-46526094-5',
            'lines'         => 1,
            'order'         => 4,
        ]);
    }
}
