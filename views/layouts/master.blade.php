
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=.0">
    <title>@yield('title', 'Sri Lankan Vaccine Safety Network')</title>
    <style>
        /* Add your provided CSS styles here */
   
        
        body {
            font-family: Baskerville Old Face, sans-serif;
            margin: 1;
            padding: 1;
            line-height: 1;
        }
        
        .header {
            background-color: #3f85be84;
            padding: 1.5rem;
            box-shadow: 0 2px 4px rgba(6, 137, 243, 0.1);
            margin-bottom: 3.5mm; 
        }
        
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1800px;
            margin: 0 auto;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        .nav-links a {
            color: #000000;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            padding-bottom: 2px;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: #3498db;
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .logo-section {
            /* display: flex;
            align-items: center;
            gap: 1rem; */
        }
        
      
    
        .hero-section {
            background: linear-gradient(135deg, rgba(57, 161, 230, 0.7) 0%, rgba(0,0,0,0.5) 100%),
                        url('/api/placeholder/1200/600') center/cover;
            padding: 6rem 2rem;
            color: rgb(3, 3, 3);
            position: relative;
            overflow: hidden;
            margin-bottom: 10mm;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                45deg,
                rgba(255,255,255,0.1),
                rgba(255,255,255,0.1) 10px,
                transparent 10px,
                transparent 20px
            );
        }
        
        .hero-content {
            max-width: 1300px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            max-width: 600px;
        }
        
        .features {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3.5mm; 
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1rem;
        }
        
        .feature-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5mm;  
            width: 100%;
        }
        
        .feature-card {
            text-align: center;
            padding: 0.8rem;
            background: #2f85d6ac;
            border-radius: 175px;
            transition: transform 0.3s ease;
            color: white;
        }
        
        .feature-card:hover {
            transform: translateY(-35px);
        }
        
        .feature-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 1rem;
            background: #dadfe5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #091c2e;
            font-size: 1.5rem;
        }
        
        
        .info-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            max-width: 1350px;
            margin: 3rem auto;
            padding: 2rem 1rem;
            background: #6aa2de;
            border-radius: 8px;
            margin-top: 3.5mm;
        }
        .info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;  
            gap: 3.5rem;
            padding: 1rem;
            background: #97afc8;
            border-radius: 4px;
        }
        
        .footer {
            background-color: #6692c084;
            color: rgb(6, 5, 5);
            padding: 2.5rem 0;
            margin-top: 3rem;
        }
        
        .footer-content {
            max-width: 800px;
            margin:  auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.2rem;
            padding: 0 1rem;
        }
        
        .footer a {
            color: white;
            text-decoration: none;
            transition: color 0.5s ease;
        }
        
        .footer a:hover {
            color: #000000;;
        }
        
        .search-box input {
            padding: 0.7rem 1rem;
            border: 1px solid #e3e8eb;
            border-radius: 4px;
            margin-right: 0.8rem;
        }
        
    .search-box button {
    padding: 0.7rem 1rem;
    background: #3498db;
    color: rgb(255, 255, 255);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-box button:hover {
    background: #2980b9;  
    color: white;  
        }
   
        /* Add all other styles here */
    </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <header class="header">
        <nav class="nav">
            <div class="logo-section">
                {{-- <div> --}}
                {{-- <img src="{{asset('img/logo.png')}}" alt="" style="width: 4%;height=4% !important;"> --}}
                {{-- <svg viewBox="0 0 100 100" width="60" height="90">
                    <path d="M50 20 C 70 20, 80 40, 80 50 C 80 70, 60 80, 50 80 C 30 80, 20 70, 20 50 C 20 30, 30 20, 50 20" fill="none" stroke="white" stroke-width="2"/>
                </svg> --}}
                <h1>Sri Lankan Vaccine Safety Network</h1>
                {{-- </div> --}}
                
                
            </div>
         
            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
            
                <!-- Links visible only to logged-in users -->
                @auth
                    {{-- <a href="#about">About</a> --}}
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <a href="{{ url('/adverse_effects') }}">Report Adverse Events</a>
                    <a href="{{ url('/news') }}">News</a>
                @endauth
            
                <!-- Show Login and Register links for guests -->
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endguest
            
                <!-- Profile and Logout for logged-in users -->
                @auth
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
            
            {{-- <div class="search-box">
                <input type="search" placeholder="Search...">
                <button>Search</button>
            </div> --}}
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <a href="#privacy">Privacy Policy</a><br>
                <a href="{{ url('/') }}">Home</a><br>
                <a href="#faqs">FAQs</a>
            </div>
            <div class="footer-section">
                <h4>Connect</h4>
                <a href="https://www.facebook.com">Facebook</a><br>
                <a href="https://www.linkedin.com">LinkedIn</a><br>
                <a href="https://x.com">X.com</a>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <a href="mailto:info@SLVSN.org">info@SLVSN.org</a><br>
                <a href="https://www.epid.gov.lk">Epid.gov.lk</a><br>
                <a href="https://www.health.gov.lk/">Health.gov.lk</a><br>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


