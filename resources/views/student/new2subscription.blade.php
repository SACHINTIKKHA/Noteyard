@extends('student.layout')
@section('main')

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow-lg w-100" style="max-width: 700px;">
    
    <div class="card-header text-white text-center">
      <h4 class="mb-0">Select Plan</h4>
    </div>

    <div class="card-body">
      <form action="{{'maildata/'.$say->id}}" method="post">
        @csrf
        <div class="row">
          <!-- Title -->
          <div class="col-md-6 mb-3">
            <label class="form-label">Title</label>
            <select class="form-select" required>
               
              <option>{{$say->title}}</option>
            </select>
          </div>

          <!-- Validity -->
          <div class="col-md-6 mb-3">
            <label class="form-label">Validity (days)</label>
            <input type="number" class="form-control" placeholder="Enter validity"disabled value="{{$say->validity}}">
          </div>
        </div>

        <!-- Description full width -->
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter description"disabled>{{$say->description}}</textarea>
        </div>

        <div class="row">
          <!-- Amount -->
          <div class="col-md-6 mb-3">
            <label class="form-label">Amount (₹)</label>
            <input type="number" class="form-control" placeholder="Enter amount"disabled value="{{$say->amount}}">
          </div>

          <!-- Empty space / optional field -->
          <div class="col-md-6 mb-3">
            <!-- You can add another field here if needed -->
          </div>
        </div>

        <!-- Buttons -->
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Proceed</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>

      </form>
    </div>

  </div>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>