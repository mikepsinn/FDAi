<?php /** @var App\Models\UnitCategory $unitCategory */ ?>
@extends('layouts.admin-lte-app')

@section('content')
    @include('model-header')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('datalab.unit_categories.show_fields')
                    <a href="{{ route('datalab.unitCategories.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
