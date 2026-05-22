@extends('student.layout')
@section('csslink')
<link rel="stylesheet" href="{{ asset('stylehome.css') }}">
@endsection

@section('main')


  <div class="card">

    <!-- Left Section -->
    <div class="left-section">
      <h2>Premium Membership</h2>

      <p class="description">
        Enjoy unlimited access to all premium features, downloadable content,
        and priority support with this membership plan.
      </p>

      <div class="info-box">

        <div class="info">
          <h3>Validity</h3>
          <p>{{$new->validity}}</p>
        </div>

        <div class="info">
          <h3>Amount</h3>
          <p>₹{{$new->amount}}</p>
        </div>

        <div class="info">
          <h3>Left Days</h3>
          <p>{{$new2->leftdays}}</p>
        </div>

         <div class="info">
          <h3>Purchased</h3>
          <p>{{$new2->date}}</p>
        </div>

      </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
           alt="Membership Image">

      <h1>{{$new->title}}</h1>

      <p>Upgrade your experience with premium benefits.</p>
    </div>

  </div>




@endsection