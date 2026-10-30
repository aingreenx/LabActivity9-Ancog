<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Baby Liam Ancog', 'purok' => 'Purok 2', 'vaccine' => 'BCG',
             'dose' => '1st dose', 'scheduled_at' => '2026-11-05', 'status' => 'Scheduled'],
            ['patient_name' => 'Baby Althea Mabini', 'purok' => 'Purok 4', 'vaccine' => 'Pentavalent',
             'dose' => '2nd dose', 'scheduled_at' => '2026-10-12', 'status' => 'Done'],
            ['patient_name' => 'Baby Kyle Bautista', 'purok' => 'Purok 1', 'vaccine' => 'OPV',
             'dose' => '3rd dose', 'scheduled_at' => '2026-10-22', 'status' => 'Overdue'],
            ['patient_name' => 'Princess Mae Villanueva', 'purok' => 'Purok 5', 'vaccine' => 'MMR',
             'dose' => '1st dose', 'scheduled_at' => '2026-11-18', 'status' => 'Scheduled'],
            ['patient_name' => 'Lolo Andoy Ramirez', 'purok' => 'Purok 3', 'vaccine' => 'Anti-Flu',
             'dose' => 'Annual', 'scheduled_at' => '2026-10-15', 'status' => 'Overdue'],
            ['patient_name' => 'Lola Nenita Garcia', 'purok' => 'Purok 2', 'vaccine' => 'Pneumococcal (PPV23)',
             'dose' => 'Single dose', 'scheduled_at' => '2026-09-28', 'status' => 'Done'],
            // Birthday row (June 17)
            ['patient_name' => 'Baby Andrei Ancog', 'purok' => 'Purok 3', 'vaccine' => 'Hepatitis B',
             'dose' => 'Birth dose', 'scheduled_at' => '2026-06-17', 'status' => 'Done'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
