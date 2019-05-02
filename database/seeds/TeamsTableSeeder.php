<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(array(
            array(
                'team_name' => 'Cardinals',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Dodgers',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Phillies',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Diamondbacks',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Padres',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Cubs',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Brewers',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Mets',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Braves',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Pirates',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Rockies',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Nationals',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Reds',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Giants',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Marlins',
                'league' => 'NL'
            ),
            array(
                'team_name' => 'Rays',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Twins',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Astros',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Yankees',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Indians',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Mariners',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Rangers',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Blue Jays',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Tigers',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'White Sox',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Athletics',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Red Sox',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Angels',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Orioles',
                'league' => 'AL'
            ),
            array(
                'team_name' => 'Royals',
                'league' => 'AL'
            ),
        ));
    }
}
