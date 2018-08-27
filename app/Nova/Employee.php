<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class Employee extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Employee';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'full_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','full_name','email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Full Name')
                ->exceptOnForms()
                ->sortable(),
            Text::make('First Name')
                ->onlyOnForms()
                ->rules('required', 'string'),
            Text::make('Last Name')
                ->onlyOnForms()
                ->rules('required', 'string'),
            Text::make('Email')
                ->sortable()
                ->rules('required', 'email')
                ->creationRules('unique:employees,email')
                ->updateRules('unique:employees,email,{{resourceId}}'),
            Date::make('Birth Date')
                ->hideFromIndex()
                ->rules('required'),
            Date::make('Start Date')
                ->hideFromIndex()
                ->rules('required'),
            Number::make('Annual Leave')
                ->hideFromIndex()
                ->rules('required'),
            HasMany::make('Vacations'),
            HasMany::make('Offs'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            (new Metrics\NumEmployees),
            (new Metrics\LeaveTaken)->onlyOnDetail(),
            (new Metrics\OffGiven)->onlyOnDetail(),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
