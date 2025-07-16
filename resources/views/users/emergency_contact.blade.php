@extends('layouts.users_header')

@section('title', 'Emergency Contact')

@section('content')
<div class="container-fluid py-5 mb-5 page-header-contact_us" style="
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                url('https://images.unsplash.com/photo-1587560699334-bea93391dcef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 500px;
    display: flex;
    align-items: center;
">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown mb-4">Emergency Contact</h1>
                <p class="fs-5 text-white animated slideInDown mb-4">24/7 Support • Immediate Assistance • Always Available</p>
                
                <div class="d-flex justify-content-center gap-3">
                    <button id="emergencyBtn" class="btn btn-light btn-lg px-4 py-2 mt-3 animated fadeIn">
                        <i class="bi bi-telephone-fill me-2"></i> Emergency Number
                    </button>
                    
                    <a href="tel:+11234567890" id="phoneNumber" class="btn btn-danger btn-lg px-4 py-2 mt-3 animated fadeIn d-none align-items-center">
                        <i class="bi bi-telephone-outbound-fill me-2"></i> +1-800-123-4567
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                <form method="POST" action="{{ route('users_emergency.contact') }}" class="p-4 p-md-5 border rounded-3 bg-light">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" 
                                    value="{{ old('name', (auth()->user()->first_name ?? '').' '.(auth()->user()->last_name ?? '')) }}" 
                                    placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{ old('email', auth()->user()->email ?? '') }}" 
                                       placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subject" name="subject" 
                                       value="{{ old('subject') }}" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a message here" 
                                          id="message" name="message" style="height: 150px" required>{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3 fs-5" type="submit">
                                <i class="bi bi-send-fill me-2"></i> Send Message
                            </button>
                        </div>
                    </div>
                    <hr class="my-4">
                    <small class="text-muted d-block text-center">We'll never share your information with anyone else.</small>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<script>
document.getElementById('emergencyBtn').addEventListener('click', function() {
    const phoneElement = document.getElementById('phoneNumber');
    phoneElement.classList.remove('d-none');
    phoneElement.classList.add('d-flex');
    
    // Optional: Scroll to the number if it's not fully visible
    phoneElement.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    
    // Optional: Change the first button text
    this.innerHTML = '<i class="bi bi-telephone-x me-2"></i> Hide Number';
    this.classList.add('btn-outline-light');
    this.classList.remove('btn-light');
    
    // Toggle functionality if clicked again
    this.onclick = function() {
        phoneElement.classList.toggle('d-none');
        phoneElement.classList.toggle('d-flex');
        
        if (phoneElement.classList.contains('d-none')) {
            this.innerHTML = '<i class="bi bi-telephone-fill me-2"></i> Show Emergency Number';
            this.classList.remove('btn-outline-light');
            this.classList.add('btn-light');
        } else {
            this.innerHTML = '<i class="bi bi-telephone-x me-2"></i> Hide Number';
        }
    };
});
</script>
@endsection