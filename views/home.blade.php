
@extends('layouts.master')

@section('title', 'Home - SLVSN')

@section('content')
<section class="hero-section">
    <div class="hero-content">
        <h2 class="hero-title">SLVSN uses big data to assess vaccine safety and effectiveness across large and diverse populations across the country and over time.</h2>
        <p>Sri Lankan Vaccine Safety Network (SLVSN) is a collaborative, investigator-led research effort looking to ensure vaccine safety and effectiveness within the country...</p>
    </div>
</section>

<div class="features">
    <div class="feature-card">
        <div class="feature-icon">📊</div>
        <h3>Research and Data Access</h3>
        <p>Access to Studies</p>
    </div>
    <div class="feature-card">
        <div class="feature-icon">👨🏽‍⚕️</div>
        <h3>Healthcare</h3>
        <p>Medical expertise</p>
    </div>
    <div class="feature-card">
        <div class="feature-icon">💉</div>
        <h3>Informative Sections</h3>
        <p>Vaccine Information</p>
    </div>   
    <div class="feature-card">
        <div class="feature-icon">🤝</div>
        <h3>Community Engagement</h3>
        <p>Discussion Forums</p>
    </div>
</div>

<section class="info-section">
    <div>
        <h3>Our Mission</h3>
        <p>"The project is supposed to explore the concept of Big Data and Big Data visualization in relation to the vaccination process in Sri Lanka..."</p>
    </div>
    <div>
        <h3>Our Impact</h3>
        <p>"Big Data and visualization will definitely enhance vaccination process monitoring in Sri Lanka at large scales of public health..."</p>
    </div>
</section>
@endsection
