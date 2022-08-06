@extends('adm_theme::layouts.app')
@section('content')
@php
use Modules\Quaeris\Services\LimeModelService;

$customer = $profile->getProfile()->customers->first();
$survey = $customer->surveyPdfs->last();
$lime = LimeModelService::make()->setSurveyId((string) $survey->survey_id);
$questions = $lime->getQuestions();
$question = $questions->last();
$answers = $lime->getAnswersByQuestionId((string) 30342);
@endphp
@php dddx($answers); @endphp
@endsection