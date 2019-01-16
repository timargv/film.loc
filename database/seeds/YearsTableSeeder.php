<?php

use App\Entity\Film\Year;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 200; $i++) {
            DB::table('film_years')->insert([
                'film_id' => rand(1, 125),
                'year_id' => rand(1, 125)
            ]);
        }

        //
        Year::create(['name' => '2025']);
        Year::create(['name' => '2024']);
        Year::create(['name' => '2023']);
        Year::create(['name' => '2022']);
        Year::create(['name' => '2021']);
        Year::create(['name' => '2020']);
        Year::create(['name' => '2019']);
        Year::create(['name' => '2018']);
        Year::create(['name' => '2017']);
        Year::create(['name' => '2016']);
        Year::create(['name' => '2015']);
        Year::create(['name' => '2014']);
        Year::create(['name' => '2013']);
        Year::create(['name' => '2012']);
        Year::create(['name' => '2011']);
        Year::create(['name' => '2010']);
        Year::create(['name' => '2009']);
        Year::create(['name' => '2008']);
        Year::create(['name' => '2007']);
        Year::create(['name' => '2006']);
        Year::create(['name' => '2005']);
        Year::create(['name' => '2004']);
        Year::create(['name' => '2003']);
        Year::create(['name' => '2002']);
        Year::create(['name' => '2001']);
        Year::create(['name' => '2000']);
        Year::create(['name' => '1999']);
        Year::create(['name' => '1998']);
        Year::create(['name' => '1997']);
        Year::create(['name' => '1996']);
        Year::create(['name' => '1995']);
        Year::create(['name' => '1994']);
        Year::create(['name' => '1993']);
        Year::create(['name' => '1992']);
        Year::create(['name' => '1991']);
        Year::create(['name' => '1990']);
        Year::create(['name' => '1989']);
        Year::create(['name' => '1988']);
        Year::create(['name' => '1987']);
        Year::create(['name' => '1986']);
        Year::create(['name' => '1985']);
        Year::create(['name' => '1984']);
        Year::create(['name' => '1983']);
        Year::create(['name' => '1982']);
        Year::create(['name' => '1981']);
        Year::create(['name' => '1980']);
        Year::create(['name' => '1979']);
        Year::create(['name' => '1978']);
        Year::create(['name' => '1977']);
        Year::create(['name' => '1976']);
        Year::create(['name' => '1975']);
        Year::create(['name' => '1974']);
        Year::create(['name' => '1973']);
        Year::create(['name' => '1972']);
        Year::create(['name' => '1971']);
        Year::create(['name' => '1970']);
        Year::create(['name' => '1969']);
        Year::create(['name' => '1968']);
        Year::create(['name' => '1967']);
        Year::create(['name' => '1966']);
        Year::create(['name' => '1965']);
        Year::create(['name' => '1964']);
        Year::create(['name' => '1963']);
        Year::create(['name' => '1962']);
        Year::create(['name' => '1961']);
        Year::create(['name' => '1960']);
        Year::create(['name' => '1959']);
        Year::create(['name' => '1958']);
        Year::create(['name' => '1957']);
        Year::create(['name' => '1956']);
        Year::create(['name' => '1955']);
        Year::create(['name' => '1954']);
        Year::create(['name' => '1953']);
        Year::create(['name' => '1952']);
        Year::create(['name' => '1951']);
        Year::create(['name' => '1950']);
        Year::create(['name' => '1949']);
        Year::create(['name' => '1948']);
        Year::create(['name' => '1947']);
        Year::create(['name' => '1946']);
        Year::create(['name' => '1945']);
        Year::create(['name' => '1944']);
        Year::create(['name' => '1943']);
        Year::create(['name' => '1942']);
        Year::create(['name' => '1941']);
        Year::create(['name' => '1940']);
        Year::create(['name' => '1939']);
        Year::create(['name' => '1938']);
        Year::create(['name' => '1937']);
        Year::create(['name' => '1936']);
        Year::create(['name' => '1935']);
        Year::create(['name' => '1934']);
        Year::create(['name' => '1933']);
        Year::create(['name' => '1932']);
        Year::create(['name' => '1931']);
        Year::create(['name' => '1930']);
        Year::create(['name' => '1929']);
        Year::create(['name' => '1928']);
        Year::create(['name' => '1927']);
        Year::create(['name' => '1926']);
        Year::create(['name' => '1925']);
        Year::create(['name' => '1924']);
        Year::create(['name' => '1923']);
        Year::create(['name' => '1922']);
        Year::create(['name' => '1921']);
        Year::create(['name' => '1920']);
        Year::create(['name' => '1919']);
        Year::create(['name' => '1918']);
        Year::create(['name' => '1917']);
        Year::create(['name' => '1916']);
        Year::create(['name' => '1915']);
        Year::create(['name' => '1914']);
        Year::create(['name' => '1913']);
        Year::create(['name' => '1912']);
        Year::create(['name' => '1911']);
        Year::create(['name' => '1910']);
        Year::create(['name' => '1909']);
        Year::create(['name' => '1908']);
        Year::create(['name' => '1907']);
        Year::create(['name' => '1906']);
        Year::create(['name' => '1905']);
        Year::create(['name' => '1904']);
        Year::create(['name' => '1903']);
        Year::create(['name' => '1902']);
        Year::create(['name' => '1901']);
        Year::create(['name' => '1900']);
    }
}
