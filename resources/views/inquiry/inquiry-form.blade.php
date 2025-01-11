 <!-- Success Message -->
 @if (session('success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{ session('success') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif

<!-- Error Message -->
@if (session('error'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
     {{ session('error') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif

<!-- Validation Errors -->
@if ($errors->any())
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif

<!-- Inquiry Form -->
<form action="{{ route('inquiry.store') }}" method="POST">
 @csrf
 <div class="mb-3">
     <label for="name" class="form-label">Name</label>
     <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
     @error('name')
         <div class="invalid-feedback">{{ $message }}</div>
     @enderror
 </div>

 <div class="mb-3">
     <label for="email" class="form-label">Email</label>
     <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
     @error('email')
         <div class="invalid-feedback">{{ $message }}</div>
     @enderror
 </div>

 <div class="mb-3">
     <label for="phone" class="form-label">Phone</label>
     <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
     @error('phone')
         <div class="invalid-feedback">{{ $message }}</div>
     @enderror
 </div>

 <div class="mb-3">
     <label for="subject" class="form-label">Subject</label>
     <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}">
     @error('subject')
         <div class="invalid-feedback">{{ $message }}</div>
     @enderror
 </div>

 <div class="mb-3">
     <label for="message" class="form-label">Message</label>
     <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5">{{ old('message') }}</textarea>
     @error('message')
         <div class="invalid-feedback">{{ $message }}</div>
     @enderror
 </div>

 <button type="submit" class="btn btn-primary">Submit Inquiry</button>
</form>