<?php

namespace App\Exports;

use App\Models\Participants;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Carbon\Carbon;

class ParticipantsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Participants::all();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Age',
            'Gender',
            'Address',
            'Email Address',
            'Contact Number',
            'Date Registered',
        ];
    }

    public function map($participant): array
    {
    	$this_year = Carbon::today()->format('Y');
		$age = $this_year - Carbon::parse($participant->birthday)->format('Y');
        return [
            $participant->first_name."".$participant->last_name,
            $age,
            $participant->gender,
            $participant->address,
            $participant->email_address,
            $participant->contact_number,
            Carbon::parse($participant->created_at)->format('F d, Y H:i A'),
        ];
    }
}