<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoardingHub - Find Student Housing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom styles adjusted for modern look */
        .custom-blue { color: #4da6ff !important; } 
        .custom-bg-blue { background-color: #0d6efd !important; } 
        .custom-bg-blue:hover { background-color: #0c5ed7 !important; }
        body { font-family: sans-serif; } 
        
        /* === NEW: HERO BACKGROUND STYLES === */
        .hero-background {
            position: relative;
            /* Using a placeholder image for a modern student building */
            background-image: url('/images/boarding-bg.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed; /* Optional: for a subtle parallax effect */
            color: #fff; /* Ensure text is white */
            z-index: 1; 
            
            /* 👇 ADJUSTED HEIGHT PROPERTY 👇 */
            min-height: 95vh; /* Set minimum height to 80% of viewport height */
            display: flex; /* Use flexbox to vertically center content */
            align-items: center; /* Center content vertically */
            /* Removed py-6/py-lg-7 padding from header tag, now managed by min-height/flexbox */
        }

        /* Dark Overlay for Text Readability */
        .hero-background::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.7); /* 70% opacity black overlay */
            z-index: -1; /* Place below the header content */
        }
        
        /* Ensure all header content (h1, p, search bar) is above the overlay */
        .hero-background .container {
            position: relative;
            z-index: 2;
            width: 100%; /* Ensure container takes full width */
        }
        /* ==================================== */

        /* Modernized Search Bar Look */
        .modern-search-group {
            max-width: 600px; 
            padding: 8px;
            border-radius: 50px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); 
            transition: box-shadow 0.3s ease;
            background-color: rgba(255, 255, 255, 0.1) !important; /* Slightly transparent search bar */
        }
        .modern-search-group:focus-within {
             box-shadow: 0 10px 40px rgba(77, 166, 255, 0.3); 
        }
        .modern-search-group .form-control {
            font-size: 1.1rem; 
            background-color: transparent !important; /* Make input transparent */
        }
        
        /* Feature Card Hover Effect */
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background-color: #1a1a1a; 
        }
        .feature-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 15px 30px rgba(77, 166, 255, 0.15); 
        }
        
        /* Responsive adjustments */
        @media (max-width: 576px) {
             .modern-search-group {
                max-width: 95% !important; 
                padding: 10px;
                flex-direction: column; 
            }
            .modern-search-group input {
                border-radius: 50px !important; 
                margin-bottom: 8px;
            }
            .modern-search-group button {
                width: 100%;
            }
             .display-3 {
                font-size: 3rem !important; 
            }
        }
    </style>
</head>
<body class="bg-dark text-light pt-5">

    {{-- 🧩 INCLUDING REUSABLE NAVBAR COMPONENT --}}
    @include('partials.navbar')

    <header class="text-center text-white hero-background">
        <div class="container py-5">
            <h1 class="display-3 fw-bolder mb-3 responsive-title">
                Find your Boarding House near campus.
            </h1>
            <p class="lead text-white fs-5 mb-5 mx-auto" style="max-width: 55rem;">
                Don't stress about housing. See real-time vacancies, compare prices, 
                and secure your spot at verified boarding houses near your university.
            </p>
            
            <div class="input-group mx-auto modern-search-group shadow-lg border-0" >
                <input type="text" class="form-control border-0 bg-body-secondary text-white rounded-pill pe-3" placeholder="Search by campus or location..." aria-label="Search by campus or location">
                <button class="btn custom-bg-blue text-white rounded-pill px-5 py-2 fw-bold" type="button">
                    Search
                </button>
            </div>
        </div>
    </header>

    <section class="py-6 bg-black border-top border-secondary">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-white">Why BoardingHub?</h2>
            <div class="row text-center justify-content-center g-4"> 
                
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature-card p-4 h-100"> 
                        <div class="fs-2 mb-3">📍</div>
                        <h3 class="fs-5 fw-bold mb-2 custom-blue">Near Campus</h3>
                        <p class="text-secondary small">We use GPS and distance metrics to show you properties within easy walking or transit distance of your school.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature-card p-4 h-100">
                        <div class="fs-2 mb-3">🛏️</div>
                        <h3 class="fs-5 fw-bold mb-2 custom-blue">Live Vacancy Status</h3>
                        <p class="text-secondary small">No more guessing. See exactly how many beds or rooms are available for immediate booking, updated in real-time.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="feature-card p-4 h-100">
                        <div class="fs-2 mb-3">🛡️</div>
                        <h3 class="fs-5 fw-bold mb-2 custom-blue">Verified Landlords</h3>
                        <p class="text-secondary small">Every landlord and listing is verified by our team to ensure student safety, fair pricing, and reliable service.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-4 text-center text-secondary small bg-dark border-top border-secondary mt-5"> 
        &copy; 2025 BoardingHub. Built for students.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>