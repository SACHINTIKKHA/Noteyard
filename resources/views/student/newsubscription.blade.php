@extends('student.layout')


@section('main')

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow-lg w-100" style="max-width: 700px;">
    
    <div class="card-header text-white text-center">
      <h4 class="mb-0">Select Plan</h4>
    </div>

    <div class="card-body">
      <form>

        <div class="row">
          <!-- Title -->
          <div class="col-md-6 mb-3">
            <label class="form-label">Title</label>
            <select class="form-select" required onchange="gotopage(this.value)"> 
              <option>Select Plan</option>
                @foreach($tab as $d)
              <option value="{{'sub/'.$d->id}}">{{$d->title}}</option>@endforeach
            </select>
          </div>

          <!-- Validity -->
          <div class="col-md-6 mb-3">
            <label class="form-label">Validity (days)</label>
            <input type="number" class="form-control" placeholder="Enter validity"disabled >
          </div>
        </div>

        <!-- Description full width -->
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter description"disabled></textarea>
        </div>

        <div class="row">
          <!-- Amount -->
          <div class="col-md-6 mb-3">
            <label class="form-label">Amount (₹)</label>
            <input type="number" class="form-control" placeholder="Enter amount"disabled >
          </div>

          <!-- Empty space / optional field -->
          <div class="col-md-6 mb-3">
            <!-- You can add another field here if needed -->
          </div>
        </div>

        <!-- Buttons -->
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Payment</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>

      </form>
    </div>

  </div>
</div>

@endsection
<script>
    function gotopage(url){
        if(url){
            window.location.href=url;
        }
    }
    </script>
    
