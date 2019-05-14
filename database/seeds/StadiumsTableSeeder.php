<?php

use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->insert(array(
            array(
                'name' => 'Busch Stadium',
                'home_team' => 1,
                'location' => 'St. Louis, MO',
                'year_opened' => '2006',
            ),
            array(
                'name' => 'Dodger Stadium',
                'home_team' => 2,
                'location' => 'Los Angeles, CA',
                'year_opened' => '1962',
            ),
            array(
                'name' => 'Citizens Bank Park',
                'home_team' => 3,
                'location' => 'Philadelphia, PA',
                'year_opened' => '2004',
            ),
            array(
                'name' => 'Chase Field',
                'home_team' => 4,
                'location' => 'Phoenix, AZ',
                'year_opened' => '1998',
            ),
            array(
                'name' => 'Petco Park',
                'home_team' => 5,
                'location' => 'San Diego, CA',
                'year_opened' => '2004',
            ),
            array(
                'name' => 'Wrigley Field',
                'home_team' => 6,
                'location' => 'Chicago, IL',
                'year_opened' => '1914',
            ),
            array(
                'name' => 'Miller Park',
                'home_team' => 7,
                'location' => 'Milwaukee, WI',
                'year_opened' => '2001',
            ),
            array(
                'name' => 'Citi Field',
                'home_team' => 8,
                'location' => 'Queens, NY',
                'year_opened' => '2009',
            ),
            array(
                'name' => 'Suntrust Park',
                'home_team' => 9,
                'location' => 'Atlanta, GA',
                'year_opened' => '2017',
            ),
            array(
                'name' => 'PNC Park',
                'home_team' => 10,
                'location' => 'Pittsburg, PA',
                'year_opened' => '2001',
            ),
            array(
                'name' => 'Coors Field',
                'home_team' => 11,
                'location' => 'Denver, CO',
                'year_opened' => '1995',
            ),
            array(
                'name' => 'Nationals Park',
                'home_team' => 12,
                'location' => 'Washington, D.C.',
                'year_opened' => '2008',
            ),
            array(
                'name' => 'Great American Ball Park',
                'home_team' => 13,
                'location' => 'Cincinnati, OH',
                'year_opened' => '2003',
            ),
            array(
                'name' => 'Oracle Park',
                'home_team' => 14,
                'location' => 'San Franciso, CA',
                'year_opened' => '2000',
            ),
            array(
                'name' => 'Marlins Park',
                'home_team' => 15,
                'location' => 'Miami, FL',
                'year_opened' => '2012',
            ),
            array(
                'name' => 'Tropicana Field',
                'home_team' => 16,
                'location' => 'St. Petersburg, FL',
                'year_opened' => '1998',
            ),
            array(
                'name' => 'Target Field',
                'home_team' => 17,
                'location' => 'Minneapolis, MN',
                'year_opened' => '2010',
            ),
            array(
                'name' => 'Minute Maid Park',
                'home_team' => 18,
                'location' => 'Houston, TX',
                'year_opened' => '2000',
            ),
            array(
                'name' => 'Yankee Stadium',
                'home_team' => 19,
                'location' => 'Bronx, NY',
                'year_opened' => '2009',
            ),
            array(
                'name' => 'Progressive Field',
                'home_team' => 20,
                'location' => 'Cleveland, OH',
                'year_opened' => '1994',
            ),
            array(
                'name' => 'T-Mobile Park',
                'home_team' => 21,
                'location' => 'Seattle, WA',
                'year_opened' => '1999',
            ),
            array(
                'name' => 'Globe Life Park',
                'home_team' => 22,
                'location' => 'Arlington, TX',
                'year_opened' => '1994',
            ),
            array(
                'name' => 'Rogers Centre',
                'home_team' => 23,
                'location' => 'Toronto, Ont.',
                'year_opened' => '1989',
            ),
            array(
                'name' => 'Comerica Park',
                'home_team' => 24,
                'location' => 'Detroit, MI',
                'year_opened' => '2000',
            ),
            array(
                'name' => 'Guaranteed Rate Field',
                'home_team' => 25,
                'location' => 'Chicago, IL',
                'year_opened' => '1991',
            ),
            array(
                'name' => 'Oakland Coliseum',
                'home_team' => 26,
                'location' => 'Oakland, CA',
                'year_opened' => '1968',
            ),
            array(
                'name' => 'Fenway Park',
                'home_team' => 27,
                'location' => 'Boston, MA',
                'year_opened' => '1912',
            ),
            array(
                'name' => 'Angel Stadium',
                'home_team' => 28,
                'location' => 'Anaheim, CA',
                'year_opened' => '1966',
            ),
            array(
                'name' => 'Camden Yards',
                'home_team' => 29,
                'location' => 'Baltimore, MD',
                'year_opened' => '1992',
            ),
            array(
                'name' => 'Kauffman Stadium',
                'home_team' => 30,
                'location' => 'Kansas City, MO',
                'year_opened' => '1973',
            ),
        ));
    }
}
