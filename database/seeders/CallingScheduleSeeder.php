<?php

namespace Database\Seeders;

use App\Models\CallingSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallingScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallingSchedule::factory()->count(8)->sequence(
            [
                'label' => '1 Урок',
                'start_time' => fake()->time('8:00'),
                'end_time' => fake()->time('8:45'),
                'break_time' => fake()->time('00:15')
            ],
            [
                'label' => '2 Урок',
                'start_time' => fake()->time('9:00'),
                'end_time' => fake()->time('9:45'),
                'break_time' => fake()->time('00:15')
            ],
            [
                'label' => '3 Урок',
                'start_time' => fake()->time('10:00'),
                'end_time' => fake()->time('10:45'),
                'break_time' => fake()->time('00:15')
            ],
            [
                'label' => '4 Урок',
                'start_time' => fake()->time('11:00'),
                'end_time' => fake()->time('11:45'),
                'break_time' => fake()->time('00:25')
            ],
            [
                'label' => '5 Урок',
                'start_time' => fake()->time('12:10'),
                'end_time' => fake()->time('12:55'),
                'break_time' => fake()->time('00:15')
            ],
            [
                'label' => '6 Урок',
                'start_time' => fake()->time('13:10'),
                'end_time' => fake()->time('13:55'),
                'break_time' => fake()->time('00:15')
            ],
            [
                'label' => '7 Урок',
                'start_time' => fake()->time('14:10'),
                'end_time' => fake()->time('14:55'),
                'break_time' => fake()->time('00:10')
            ],
            [
                'label' => '8 Урок',
                'start_time' => fake()->time('15:05'),
                'end_time' => fake()->time('15:50'),
                'break_time' => fake()->time('00:10')
            ],
        )->create();

        // CallingSchedule::factory(1)->create();
    }
}
