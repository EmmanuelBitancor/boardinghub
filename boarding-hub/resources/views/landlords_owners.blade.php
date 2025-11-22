<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoardingHub - Landlord Registry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* --- REUSED STYLES --- */
        .custom-blue { color: #4da6ff !important; } 
        .custom-bg-blue { background-color: #0d6efd !important; } 
        .custom-bg-blue:hover { background-color: #0c5ed7 !important; }
        body { font-family: sans-serif; } 
        
        /* --- LANDLORD CARD STYLES --- */
        .landlord-card {
            background-color: #1a1a1a;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
            transition: all 0.3s ease;
        }
        .landlord-card:hover {
            border-color: #4da6ff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        
        /* Profile Image */
        .avatar-box {
            width: 80px;
            height: 80px;
            background-color: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #777;
            border: 2px solid #444;
        }

        /* Property Mini-List inside the card */
        .property-mini-item {
            background-color: #212529;
            border: 1px solid #333;
            border-radius: 0.5rem;
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            transition: background-color 0.2s;
        }
        .property-mini-item:hover {
            background-color: #2c3035;
        }
        .verified-badge {
            color: #00b894;
            font-size: 1.2rem;
        }
    </style>
</head>
<body class="bg-dark text-light pt-5">

    @include('partials.navbar')
    
    <main class="py-5">
        <div class="container">
            
            <div class="row mb-5 align-items-end">
                <div class="col-md-8">
                    <h1 class="display-5 fw-bold custom-blue">Landlord Registry</h1>
                    <p class="lead text-secondary">
                        Directory of registered owners and their associated boarding house portfolios.
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Sort By</button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Name (A-Z)</a></li>
                            <li><a class="dropdown-item" href="#">Most Properties</a></li>
                            <li><a class="dropdown-item" href="#">Highest Rated</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card bg-dark border-secondary mb-5">
                <div class="card-body p-2">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0 text-secondary"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control bg-transparent border-0 text-light shadow-none" placeholder="Search by Owner Name, ID, or Phone Number...">
                        <button class="btn custom-bg-blue rounded-pill px-4">Search</button>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column gap-4">

                <div class="landlord-card p-4">
                    <div class="row">
                        <div class="col-lg-3 border-end border-secondary pe-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                            <div class="d-flex flex-column align-items-center align-items-lg-start">
                                <div class="avatar-box mb-3">
                                    <span class="fw-bold">MR</span> </div>
                                <h4 class="fw-bold mb-1">Maria Reyes <i class="bi bi-patch-check-fill verified-badge" title="Verified Owner"></i></h4>
                                <p class="text-secondary small mb-3">Member since 2021</p>
                                
                                <div class="d-flex gap-2 mb-3">
                                    <span class="badge bg-secondary"><i class="bi bi-telephone-fill me-1"></i> 0917-XXX-XXXX</span>
                                </div>

                                <div class="d-grid gap-2 w-100">
                                    <button class="btn btn-sm btn-outline-light">View Profile</button>
                                    <button class="btn btn-sm btn-outline-success"><i class="bi bi-whatsapp me-2"></i>Contact</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 ps-lg-4">
                            <h6 class="text-uppercase text-secondary small fw-bold mb-3">Owned Properties (3)</h6>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="property-mini-item d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold custom-blue mb-1">The Student Nest</h6>
                                            <small class="text-secondary"><i class="bi bi-geo-alt"></i> Downtown Area</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge text-bg-success mb-1">Active</span>
                                            <div class="small text-white-50">₱10k/mo</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="property-mini-item d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold custom-blue mb-1">Reyes Ladies Dorm</h6>
                                            <small class="text-secondary"><i class="bi bi-geo-alt"></i> University Belt</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge text-bg-danger mb-1">Full</span>
                                            <div class="small text-white-50">₱5k/mo</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="property-mini-item d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold custom-blue mb-1">Reyes Annex</h6>
                                            <small class="text-secondary"><i class="bi bi-geo-alt"></i> Near Hospital</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge text-bg-warning text-dark mb-1">Maintenance</span>
                                            <div class="small text-white-50">₱7k/mo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landlord-card p-4">
                    <div class="row">
                        <div class="col-lg-3 border-end border-secondary pe-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                            <div class="d-flex flex-column align-items-center align-items-lg-start">
                                <div class="avatar-box mb-3 bg-dark border-warning">
                                    <span class="fw-bold text-warning">JD</span>
                                </div>
                                <h4 class="fw-bold mb-1">Juan Dela Cruz</h4>
                                <p class="text-warning small mb-3"><i class="bi bi-hourglass-split"></i> Verification Pending</p>
                                
                                <div class="d-flex gap-2 mb-3">
                                    <span class="badge bg-secondary"><i class="bi bi-envelope-fill me-1"></i> juan@email.com</span>
                                </div>

                                <div class="d-grid gap-2 w-100">
                                    <button class="btn btn-sm btn-outline-light">View Profile</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 ps-lg-4">
                            <h6 class="text-uppercase text-secondary small fw-bold mb-3">Owned Properties (1)</h6>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="property-mini-item d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold text-white-50 mb-1">Dela Cruz Apartments</h6>
                                            <small class="text-secondary"><i class="bi bi-geo-alt"></i> San Jose St.</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge text-bg-secondary mb-1">Pending Review</span>
                                            <div class="small text-white-50">₱8k/mo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="alert alert-dark border border-secondary mt-3 py-2 small">
                                <i class="bi bi-info-circle me-2 text-custom-blue"></i> This landlord is currently uploading documents for property verification.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="landlord-card p-4">
                    <div class="row">
                        <div class="col-lg-3 border-end border-secondary pe-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                            <div class="d-flex flex-column align-items-center align-items-lg-start">
                                <div class="avatar-box mb-3" style="background-color: #0d6efd;">
                                    <i class="bi bi-building text-white"></i>
                                </div>
                                <h4 class="fw-bold mb-1">City Dorms Inc. <i class="bi bi-patch-check-fill verified-badge" title="Verified Company"></i></h4>
                                <p class="text-secondary small mb-3">Property Management Group</p>
                                
                                <div class="d-grid gap-2 w-100">
                                    <button class="btn btn-sm custom-bg-blue">Manage Agency</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 ps-lg-4">
                            <h6 class="text-uppercase text-secondary small fw-bold mb-3">Owned Properties (12)</h6>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="property-mini-item d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold custom-blue mb-1">Metro Heights</h6>
                                            <small class="text-secondary"><i class="bi bi-geo-alt"></i> North Campus</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge text-bg-success mb-1">Active</span>
                                            <div class="small text-white-50">₱15k/mo</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="property-mini-item d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold custom-blue mb-1">The Hub</h6>
                                            <small class="text-secondary"><i class="bi bi-geo-alt"></i> South Campus</small>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge text-bg-success mb-1">Active</span>
                                            <div class="small text-white-50">₱12k/mo</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="text-secondary small text-decoration-none hover-white">+ View 10 more properties</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>