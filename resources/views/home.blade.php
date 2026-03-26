@extends('layouts.app')

@section('title', 'MADI Solutions — Proyectos con Excelencia')
@section('description', 'Empresa líder en construcción residencial, comercial e industrial con más de 20 años de experiencia en Lima y todo el Perú.')

@section('content')
  @include('sections.hero')
  @include('sections.nosotros')
  @include('sections.stats')
  @include('sections.servicios')
  @include('sections.proyectos')
  @include('sections.proceso')
  @include('sections.contacto')
@endsection

  
