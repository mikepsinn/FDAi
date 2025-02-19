<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    {!! Form::number('parent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::text('client_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Variable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('variable_id', 'Variable Id:') !!}
    {!! Form::number('variable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Default Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('default_unit_id', 'Default Unit Id:') !!}
    {!! Form::number('default_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Minimum Allowed Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minimum_allowed_value', 'Minimum Allowed Value:') !!}
    {!! Form::number('minimum_allowed_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Maximum Allowed Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maximum_allowed_value', 'Maximum Allowed Value:') !!}
    {!! Form::number('maximum_allowed_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Filling Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filling_value', 'Filling Value:') !!}
    {!! Form::number('filling_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Join With Field -->
<div class="form-group col-sm-6">
    {!! Form::label('join_with', 'Join With:') !!}
    {!! Form::number('join_with', null, ['class' => 'form-control']) !!}
</div>

<!-- Onset Delay Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onset_delay', 'Onset Delay:') !!}
    {!! Form::number('onset_delay', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Of Action Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration_of_action', 'Duration Of Action:') !!}
    {!! Form::number('duration_of_action', null, ['class' => 'form-control']) !!}
</div>

<!-- Variable Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('variable_category_id', 'Variable Category Id:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('variable_category_id', 0) !!}
        {!! Form::checkbox('variable_category_id', '1', null) !!}
    </label>
</div>


<!-- Public Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_public', 'Public:') !!}
    {!! Form::number('is_public', null, ['class' => 'form-control']) !!}
</div>

<!-- Cause Only Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cause_only', 'Cause Only:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('cause_only', 0) !!}
        {!! Form::checkbox('cause_only', '1', null) !!}
    </label>
</div>


<!-- Filling Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filling_type', 'Filling Type:') !!}
    {!! Form::text('filling_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Raw Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_measurements', 'Number Of Measurements:') !!}
    {!! Form::number('number_of_measurements', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Processed Daily Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_processed_daily_measurements', 'Number Of Processed Daily Measurements:') !!}
    {!! Form::number('number_of_processed_daily_measurements', null, ['class' => 'form-control']) !!}
</div>

<!-- Measurements At Last Analysis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('measurements_at_last_analysis', 'Measurements At Last Analysis:') !!}
    {!! Form::number('measurements_at_last_analysis', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_unit_id', 'Last Unit Id:') !!}
    {!! Form::number('last_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Original Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_original_unit_id', 'Last Original Unit Id:') !!}
    {!! Form::number('last_original_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_value', 'Last Value:') !!}
    {!! Form::number('last_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Original Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_original_value', 'Last Original Value:') !!}
    {!! Form::number('last_original_value', null, ['class' => 'form-control']) !!}
</div>


<!-- Number Of VariableRelationships Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_correlations', 'Number Of VariableRelationships:') !!}
    {!! Form::number('number_of_correlations', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Standard Deviation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('standard_deviation', 'Standard Deviation:') !!}
    {!! Form::number('standard_deviation', null, ['class' => 'form-control']) !!}
</div>

<!-- Variance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('variance', 'Variance:') !!}
    {!! Form::number('variance', null, ['class' => 'form-control']) !!}
</div>

<!-- Minimum Recorded Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minimum_recorded_value', 'Minimum Recorded Value:') !!}
    {!! Form::number('minimum_recorded_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Maximum Recorded Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maximum_recorded_value', 'Maximum Recorded Value:') !!}
    {!! Form::number('maximum_recorded_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Mean Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mean', 'Mean:') !!}
    {!! Form::number('mean', null, ['class' => 'form-control']) !!}
</div>

<!-- Median Field -->
<div class="form-group col-sm-6">
    {!! Form::label('median', 'Median:') !!}
    {!! Form::number('median', null, ['class' => 'form-control']) !!}
</div>

<!-- Most Common Original Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('most_common_original_unit_id', 'Most Common Original Unit Id:') !!}
    {!! Form::number('most_common_original_unit_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Most Common Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('most_common_value', 'Most Common Value:') !!}
    {!! Form::number('most_common_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Unique Daily Values Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_unique_daily_values', 'Number Of Unique Daily Values:') !!}
    {!! Form::number('number_of_unique_daily_values', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Unique Values Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_unique_values', 'Number Of Unique Values:') !!}
    {!! Form::number('number_of_unique_values', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Changes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_changes', 'Number Of Changes:') !!}
    {!! Form::number('number_of_changes', null, ['class' => 'form-control']) !!}
</div>

<!-- Skewness Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skewness', 'Skewness:') !!}
    {!! Form::number('skewness', null, ['class' => 'form-control']) !!}
</div>

<!-- Kurtosis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kurtosis', 'Kurtosis:') !!}
    {!! Form::number('kurtosis', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::number('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::number('longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Outcome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outcome', 'Outcome:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('outcome', 0) !!}
        {!! Form::checkbox('outcome', '1', null) !!}
    </label>
</div>

{{--

<!-- Data Sources Count Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('data_sources_count', 'Data Sources Count:') !!}
    {!! Form::textarea('data_sources_count', null, ['class' => 'form-control']) !!}
</div>

--}}


<!-- Earliest Filling Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('earliest_filling_time', 'Earliest Filling Time:') !!}
    {!! Form::number('earliest_filling_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Latest Filling Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latest_filling_time', 'Latest Filling Time:') !!}
    {!! Form::number('latest_filling_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Processed Daily Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_processed_daily_value', 'Last Processed Daily Value:') !!}
    {!! Form::number('last_processed_daily_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Outcome Of Interest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outcome_of_interest', 'Outcome Of Interest:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('outcome_of_interest', 0) !!}
        {!! Form::checkbox('outcome_of_interest', '1', null) !!}
    </label>
</div>


<!-- Predictor Of Interest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predictor_of_interest', 'Predictor Of Interest:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('predictor_of_interest', 0) !!}
        {!! Form::checkbox('predictor_of_interest', '1', null) !!}
    </label>
</div>


<!-- Experiment Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('experiment_start_time', 'Experiment Start Time:') !!}
    {!! Form::date('experiment_start_time', null, ['class' => 'form-control','id'=>'experiment_start_time']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#experiment_start_time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Experiment End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('experiment_end_time', 'Experiment End Time:') !!}
    {!! Form::date('experiment_end_time', null, ['class' => 'form-control','id'=>'experiment_end_time']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#experiment_end_time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Second To Last Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_to_last_value', 'Second To Last Value:') !!}
    {!! Form::number('second_to_last_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Third To Last Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('third_to_last_value', 'Third To Last Value:') !!}
    {!! Form::number('third_to_last_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of User Variable Relationships As Effect Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_user_variable_relationships_as_effect', 'Number Of User Variable Relationships As Effect:') !!}
    {!! Form::number('number_of_user_variable_relationships_as_effect', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of User Variable Relationships As Cause Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_user_variable_relationships_as_cause', 'Number Of User Variable Relationships As Cause:') !!}
    {!! Form::number('number_of_user_variable_relationships_as_cause', null, ['class' => 'form-control']) !!}
</div>

<!-- Combination Operation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('combination_operation', 'Combination Operation:') !!}
    {!! Form::text('combination_operation', null, ['class' => 'form-control']) !!}
</div>

<!-- Share User Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_public', 'Share User Measurements:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_public', 0) !!}
        {!! Form::checkbox('is_public', '1', null) !!}
    </label>
</div>


<!-- Informational Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('informational_url', 'Informational Url:') !!}
    {!! Form::text('informational_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Most Common Connector Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('most_common_connector_id', 'Most Common Connector Id:') !!}
    {!! Form::number('most_common_connector_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Valence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valence', 'Valence:') !!}
    {!! Form::text('valence', null, ['class' => 'form-control']) !!}
</div>

<!-- Wikipedia Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wikipedia_title', 'Wikipedia Title:') !!}
    {!! Form::text('wikipedia_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Tracking Reminders Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_tracking_reminders', 'Number Of Tracking Reminders:') !!}
    {!! Form::number('number_of_tracking_reminders', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Raw Measurements With Tags Joins Children Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_raw_measurements_with_tags_joins_children', 'Number Of Raw Measurements With Tags Joins Children:') !!}
    {!! Form::number('number_of_raw_measurements_with_tags_joins_children', null, ['class' => 'form-control']) !!}
</div>

<!-- Most Common Source Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('most_common_source_name', 'Most Common Source Name:') !!}
    {!! Form::text('most_common_source_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Optimal Value Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('optimal_value_message', 'Optimal Value Message:') !!}
    {!! Form::text('optimal_value_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Best Cause Variable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('best_cause_variable_id', 'Best Cause Variable Id:') !!}
    {!! Form::number('best_cause_variable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Best Effect Variable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('best_effect_variable_id', 'Best Effect Variable Id:') !!}
    {!! Form::number('best_effect_variable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Best User Variable Relationship Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('best_user_variable_relationship_id', 'Best User Variable Relationship:') !!}
    {!! Form::textarea('best_user_variable_relationship_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Maximum Allowed Daily Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_maximum_allowed_daily_value', 'User Maximum Allowed Daily Value:') !!}
    {!! Form::number('user_maximum_allowed_daily_value', null, ['class' => 'form-control']) !!}
</div>

<!-- User Minimum Allowed Daily Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_minimum_allowed_daily_value', 'User Minimum Allowed Daily Value:') !!}
    {!! Form::number('user_minimum_allowed_daily_value', null, ['class' => 'form-control']) !!}
</div>

<!-- User Minimum Allowed Non Zero Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_minimum_allowed_non_zero_value', 'User Minimum Allowed Non Zero Value:') !!}
    {!! Form::number('user_minimum_allowed_non_zero_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Minimum Allowed Seconds Between Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minimum_allowed_seconds_between_measurements', 'Minimum Allowed Seconds Between Measurements:') !!}
    {!! Form::number('minimum_allowed_seconds_between_measurements', null, ['class' => 'form-control']) !!}
</div>

<!-- Average Seconds Between Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('average_seconds_between_measurements', 'Average Seconds Between Measurements:') !!}
    {!! Form::number('average_seconds_between_measurements', null, ['class' => 'form-control']) !!}
</div>

<!-- Median Seconds Between Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('median_seconds_between_measurements', 'Median Seconds Between Measurements:') !!}
    {!! Form::number('median_seconds_between_measurements', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Correlated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_correlated_at', 'Last Correlated At:') !!}
    {!! Form::date('last_correlated_at', null, ['class' => 'form-control','id'=>'last_correlated_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#last_correlated_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Number Of Measurements With Tags At Last UserVariableRelationship Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_measurements_with_tags_at_last_correlation', 'Number Of Measurements With Tags At Last UserVariableRelationship:') !!}
    {!! Form::number('number_of_measurements_with_tags_at_last_correlation', null, ['class' => 'form-control']) !!}
</div>

<!-- Analysis Settings Modified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('analysis_settings_modified_at', 'Analysis Settings Modified At:') !!}
    {!! Form::date('analysis_settings_modified_at', null, ['class' => 'form-control','id'=>'analysis_settings_modified_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#analysis_settings_modified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Newest Data At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('newest_data_at', 'Newest Data At:') !!}
    {!! Form::date('newest_data_at', null, ['class' => 'form-control','id'=>'newest_data_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#newest_data_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Analysis Requested At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('analysis_requested_at', 'Analysis Requested At:') !!}
    {!! Form::date('analysis_requested_at', null, ['class' => 'form-control','id'=>'analysis_requested_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#analysis_requested_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Reason For Analysis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reason_for_analysis', 'Reason For Analysis:') !!}
    {!! Form::text('reason_for_analysis', null, ['class' => 'form-control']) !!}
</div>

<!-- Analysis Started At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('analysis_started_at', 'Analysis Started At:') !!}
    {!! Form::date('analysis_started_at', null, ['class' => 'form-control','id'=>'analysis_started_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#analysis_started_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Analysis Ended At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('analysis_ended_at', 'Analysis Ended At:') !!}
    {!! Form::date('analysis_ended_at', null, ['class' => 'form-control','id'=>'analysis_ended_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#analysis_ended_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- User Error Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_error_message', 'User Error Message:') !!}
    {!! Form::text('user_error_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Internal Error Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('internal_error_message', 'Internal Error Message:') !!}
    {!! Form::text('internal_error_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Earliest Source Measurement Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('earliest_source_measurement_start_at', 'Earliest Source Measurement Start At:') !!}
    {!! Form::date('earliest_source_measurement_start_at', null, ['class' => 'form-control','id'=>'earliest_source_measurement_start_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#earliest_source_measurement_start_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Latest Source Measurement Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latest_source_measurement_start_at', 'Latest Source Measurement Start At:') !!}
    {!! Form::date('latest_source_measurement_start_at', null, ['class' => 'form-control','id'=>'latest_source_measurement_start_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#latest_source_measurement_start_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Latest Tagged Measurement Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latest_tagged_measurement_start_at', 'Latest Tagged Measurement Start At:') !!}
    {!! Form::date('latest_tagged_measurement_start_at', null, ['class' => 'form-control','id'=>'latest_tagged_measurement_start_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#latest_tagged_measurement_start_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Earliest Tagged Measurement Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('earliest_tagged_measurement_start_at', 'Earliest Tagged Measurement Start At:') !!}
    {!! Form::date('earliest_tagged_measurement_start_at', null, ['class' => 'form-control','id'=>'earliest_tagged_measurement_start_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#earliest_tagged_measurement_start_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Latest Non Tagged Measurement Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latest_non_tagged_measurement_start_at', 'Latest Non Tagged Measurement Start At:') !!}
    {!! Form::date('latest_non_tagged_measurement_start_at', null, ['class' => 'form-control','id'=>'latest_non_tagged_measurement_start_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#latest_non_tagged_measurement_start_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Earliest Non Tagged Measurement Start At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('earliest_non_tagged_measurement_start_at', 'Earliest Non Tagged Measurement Start At:') !!}
    {!! Form::date('earliest_non_tagged_measurement_start_at', null, ['class' => 'form-control','id'=>'earliest_non_tagged_measurement_start_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#earliest_non_tagged_measurement_start_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Wp Post Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wp_post_id', 'Wp Post Id:') !!}
    {!! Form::number('wp_post_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Of Soft Deleted Measurements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_soft_deleted_measurements', 'Number Of Soft Deleted Measurements:') !!}
    {!! Form::number('number_of_soft_deleted_measurements', null, ['class' => 'form-control']) !!}
</div>
{{--

<!-- Charts Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('charts', 'Charts:') !!}
    {!! Form::textarea('charts', null, ['class' => 'form-control']) !!}
</div>

--}}


<!-- Best User Variable Relationship Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('best_user_variable_relationship_id', 'Best User Variable Relationship Id:') !!}
    {!! Form::number('best_user_variable_relationship_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('datalab.userVariables.index') }}" class="btn btn-default">Cancel</a>
</div>
