@extends('admin.projects.layouts.create-or-edit')

@section('title', 'Edit project')

@section('heading')
    Edit Project {{ $project->id }}
@endsection

@section('buttonContent', 'Edit')