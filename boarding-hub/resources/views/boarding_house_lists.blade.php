<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoardingHub - Boarding House Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom styles reused from the landing page */
        .custom-blue { color: #4da6ff !important; } 
        .custom-bg-blue { background-color: #0d6efd !important; } 
        .custom-bg-blue:hover { background-color: #0c5ed7 !important; }
        body { font-family: sans-serif; } 
        
        /* Feature Card Hover Effect - Reused for listing cards */
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

        /* Specific styles for the list page */
        .price-tag {
            background-color: #333;
            border-radius: 0.5rem;
            padding: 0.5rem 0.75rem;
            margin-right: 5px;
            font-size: 0.85rem;
            color: #fff;
            white-space: nowrap; 
        }
        .filter-panel {
            background-color: #1a1a1a;
            border-radius: 1rem;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .listing-img-placeholder {
            height: 200px;
            background-color: #2c3e50; 
            border-top-left-radius: calc(1rem - 1px);
            border-top-right-radius: calc(1rem - 1px);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-dark text-light pt-5">

    {{-- 🧩 INCLUDING REUSABLE NAVBAR COMPONENT --}}
    @include('partials.navbar')
    
    <main class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold custom-blue">Available Boarding Houses</h1>
                <p class="lead text-secondary mx-auto" style="max-width: 600px;">
                    Browse verified listings. Use the filters to narrow down your perfect student accommodation.
                </p>
            </div>
            
            <div class="row g-4">
                
                <div class="col-lg-3">
                    <div class="filter-panel sticky-top" style="top: 80px;">
                        <h5 class="fw-bold mb-3 text-white">Vacancy Status</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="available" id="filterAvailable" checked>
                            <label class="form-check-label" for="filterAvailable">
                                <span class="badge text-bg-success">Available Room Vacancy</span>
                            </label>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="full" id="filterFull">
                            <label class="form-check-label" for="filterFull">
                                <span class="badge text-bg-danger">Full Room Vacancy</span>
                            </label>
                        </div>
                        
                        <hr class="border-secondary">
                        
                        <h5 class="fw-bold mb-3 text-white">Price Range (Monthly)</h5>
                        <p class="text-secondary small">₱0 - ₱15,000</p>
                        <input type="range" class="form-range" min="0" max="15000" step="500" id="priceRange" value="15000">
                        
                        <button class="btn btn-sm custom-bg-blue mt-3 w-100">Apply Filters</button>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="row g-4">
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-card h-100 p-0 overflow-hidden">
                                <div class="listing-img-placeholder">Listing Photo</div>
                                <div class="p-3">
                                    <h5 class="custom-blue fw-bold">The Student Nest Dormitory</h5>
                                    <p class="small text-secondary mb-2">Near University of Tech | 1.2 km away</p>
                                    <p class="mb-2"><span class="badge text-bg-success fw-bold">3 Beds Available</span></p>
                                    
                                    <h6 class="text-white-50 small mb-2">Pricing Options (Per Person)</h6>
                                    <div class="d-flex flex-wrap mb-3 gap-2">
                                        <div class="price-tag">₱500/Day</div>
                                        <div class="price-tag">₱3,000/Week</div>
                                        <div class="price-tag custom-blue fw-bold border border-secondary">₱10,000/Month</div>
                                    </div>
                                    
                                    <a href="#" class="btn custom-bg-blue btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="feature-card h-100 p-0 overflow-hidden opacity-75">
                                <div class="listing-img-placeholder" style="background-color: #7f8c8d;">FULLY BOOKED</div>
                                <div class="p-3">
                                    <h5 class="text-white-50 fw-bold">Campus View Residences</h5>
                                    <p class="small text-secondary mb-2">Near State University | 0.5 km away</p>
                                    <p class="mb-2"><span class="badge text-bg-danger fw-bold">Full Vacancy</span></p>
                                    
                                    <h6 class="text-white-50 small mb-2">Pricing Options (Historical)</h6>
                                    <div class="d-flex flex-wrap mb-3 gap-2">
                                        <div class="price-tag text-white-50">₱450/Day</div>
                                        <div class="price-tag text-white-50">₱2,800/Week</div>
                                        <div class="price-tag text-white-50">₱9,500/Month</div>
                                    </div>
                                    
                                    <a href="#" class="btn btn-secondary btn-sm w-100 disabled">Booked Out</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-card h-100 p-0 overflow-hidden">
                                <div class="listing-img-placeholder" style="background-color: #2980b9;">Apartment Style</div>
                                <div class="p-3">
                                    <h5 class="custom-blue fw-bold">Maple Heights Boarding</h5>
                                    <p class="small text-secondary mb-2">Near Arts College | 2.1 km away</p>
                                    <p class="mb-2"><span class="badge text-bg-warning text-dark fw-bold">1 Room Available</span></p>
                                    
                                    <h6 class="text-white-50 small mb-2">Pricing Options (Per Unit)</h6>
                                    <div class="d-flex flex-wrap mb-3 gap-2">
                                        <div class="price-tag">₱650/Day</div>
                                        <div class="price-tag">₱4,000/Week</div>
                                        <div class="price-tag custom-blue fw-bold border border-secondary">₱14,000/Month</div>
                                    </div>
                                    
                                    <a href="#" class="btn custom-bg-blue btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-card h-100 p-0 overflow-hidden">
                                <div class="listing-img-placeholder">Budget Room</div>
                                <div class="p-3">
                                    <h5 class="custom-blue fw-bold">Budget Student Haven</h5>
                                    <p class="small text-secondary mb-2">Near Polytechnic | 1.5 km away</p>
                                    <p class="mb-2"><span class="badge text-bg-success fw-bold">5 Beds Available</span></p>
                                    
                                    <h6 class="text-white-50 small mb-2">Pricing Options (Per Bed)</h6>
                                    <div class="d-flex flex-wrap mb-3 gap-2">
                                        <div class="price-tag">₱300/Day</div>
                                        <div class="price-tag">₱1,800/Week</div>
                                        <div class="price-tag custom-blue fw-bold border border-secondary">₱6,500/Month</div>
                                    </div>
                                    
                                    <a href="#" class="btn custom-bg-blue btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-card h-100 p-0 overflow-hidden">
                                <div class="listing-img-placeholder" style="background-color: #f39c12;">Premium Unit</div>
                                <div class="p-3">
                                    <h5 class="custom-blue fw-bold">The Premier Suites</h5>
                                    <p class="small text-secondary mb-2">Near Medical School | 0.8 km away</p>
                                    <p class="mb-2"><span class="badge text-bg-success fw-bold">2 Rooms Available</span></p>
                                    
                                    <h6 class="text-white-50 small mb-2">Pricing Options (Per Unit)</h6>
                                    <div class="d-flex flex-wrap mb-3 gap-2">
                                        <div class="price-tag">₱800/Day</div>
                                        <div class="price-tag">₱5,000/Week</div>
                                        <div class="price-tag custom-blue fw-bold border border-secondary">₱18,000/Month</div>
                                    </div>
                                    
                                    <a href="#" class="btn custom-bg-blue btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-card h-100 p-0 overflow-hidden opacity-75">
                                <div class="listing-img-placeholder" style="background-color: #7f8c8d;">Fully Booked</div>
                                <div class="p-3">
                                    <h5 class="text-white-50 fw-bold">Blue Star Boarding</h5>
                                    <p class="small text-secondary mb-2">Near Law School | 1.1 km away</p>
                                    <p class="mb-2"><span class="badge text-bg-danger fw-bold">Full Vacancy</span></p>
                                    
                                    <h6 class="text-white-50 small mb-2">Pricing Options (Historical)</h6>
                                    <div class="d-flex flex-wrap mb-3 gap-2">
                                        <div class="price-tag text-white-50">₱550/Day</div>
                                        <div class="price-tag text-white-50">₱3,300/Week</div>
                                        <div class="price-tag text-white-50">₱11,000/Month</div>
                                    </div>
                                    
                                    <a href="#" class="btn btn-secondary btn-sm w-100 disabled">Booked Out</a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <div class="text-center mt-5">
                        <button class="btn custom-bg-blue px-5 py-2 rounded-pill">Load More Listings</button>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    
    <footer class="py-4 text-center text-secondary small bg-dark border-top border-secondary mt-5"> 
        &copy; 2025 BoardingHub. Built for students.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>