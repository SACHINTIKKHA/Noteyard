@extends('student.layout')
@section('main')

<div class="container py-5">

    <div class="row g-4">

        <!-- LEFT -->
        <div class="col-md-6">
    <div class="custom-card p-4">

        <h5 class="section-title">Payment Information</h5>

        <!-- QR Scanner -->
        <div class="text-center mb-4">
            <div class="qr-box" >
                <img id="qrPreview" src="{{ asset('storage/uploads/qr.jpg') }}" 
     alt="QR Code" style="width:180px; border-radius:10px; cursor:pointer;">
                <p class="mt-2 text-muted">Click to upload/change QR</p>
            </div>
            <input type="file" id="qrInput" hidden onchange="previewQR(event)">
        </div>

        <form >

          <div class="mb-3">
    <label class="form-label">UPI ID</label>
    <div class="form-control">ebook@123456789</div>
</div>

            <div class="mb-3">
                <label class="form-label">Account Number</label>
                 <div class="form-control">SBI10000052632</div>
            </div>

            <div class="mb-3">
                <label class="form-label">IFSC Code</label>
                 <div class="form-control">SBIBANK745874</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Account Holder Name</label>
                 <div class="form-control">SACHIN TIKKHA</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Branch</label>
                 <div class="form-control">VRINDAVAN</div>
            </div>
             
        </form>

    </div>
</div>

        <!-- RIGHT -->
        <div class="col-md-6">
            <div class="custom-card p-4">

                <h5 class="section-title">Submit Payment</h5>

                <form action="{{'paid/'.$id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">UTR Number</label>
                        <input type="text" class="form-control" placeholder="Enter UTR Number"name="utr">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" class="form-control" placeholder="Enter Amount" name="amount">
                    </div>

                    <!-- Upload -->
                    <div class="mb-3">
                        <label class="form-label">Upload Screenshot</label>
                        <input type="file" id="file"class="form-control"name="file">
                    </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Payment</button>
                        </div>
                     

                </form>

            </div>
        </div>

    </div>

</div>
@endsection

