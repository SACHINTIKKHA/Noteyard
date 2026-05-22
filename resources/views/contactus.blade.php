@extends('layout')
@section('title')
Contact
@endsection
@section('csslink')
<link rel="stylesheet" href="{{asset('stylehome.css')}}">
@endsection
@section('main')

<!-- Hero -->
<section class="contact-hero">
    <div class="container">
        <h1>Contact <span>Us</span></h1>
        <p>We’d love to hear from you</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="row g-4">

            <!-- Form -->
            <div class="col-md-7">
                <div class="contact-form">
                    <h3 class="mb-4">Send Message</h3>

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>

                        <button class="btn btn-gradient w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-5">
                <div class="contact-info">
                    <h4>Get in Touch</h4>
                    <p>📍 Lucknow, India</p>
                    <p>📧 support@ebookhub.com</p>
                    <p>📞 +91 98765 43210</p>
                    <hr>
                    <p>We usually respond within 24 hours.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection