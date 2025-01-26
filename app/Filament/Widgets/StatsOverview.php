<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\Course;
use App\Models\Marketer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {

        $marketersCount = Marketer::distinct('id')->count();
        $applocationsCount = Application::distinct('id')->count();
        $coursesCount = Course::distinct('id')->count();
        return [
            Stat::make('Marketers', number_format($marketersCount)),
            Stat::make('Applications', number_format($applocationsCount)),
            Stat::make('Courses', number_format($coursesCount)),
            
        ];
    }
}
