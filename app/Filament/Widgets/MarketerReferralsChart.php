<?php

namespace App\Filament\Widgets;

use App\Models\Marketer;
use Filament\Widgets\ChartWidget;

class MarketerReferralsChart extends ChartWidget
{
    protected static ?string $heading = 'Martketer Referrals';
    protected static ?int $sort = 2;
    

    protected function getData(): array
    {

        $marketers = Marketer::select('name', 'students_referred')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => $marketers->pluck('students_referred')->toArray(),
                ],
            ],
            'labels' => $marketers->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
