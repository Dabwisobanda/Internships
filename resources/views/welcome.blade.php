@extends('layout')
@section('title', 'Home')
  
@section('content')
<style>
    h1{
        text-align: center;
    }
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    
    .card {
      width: 600px;
      margin: 10px;
      padding: 20px;
      border: 1px solid #ccc;
    }
    
    .card img {
      width: 100%;
    }
    
    .card h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }
    
    .card p {
      margin-bottom: 10px;
    }
    
    .card a {
      text-decoration: none;
      color: #000;
    }
    
    </style>
    <h1>Afri-Connect Jobs</h1>
    <hr>
    
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="logo.png" alt="Job Listing Website Logo" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">Software Engineer</h2>
            <p class="card-text">We are looking for a talented Software Engineer to join our team. The ideal candidate will have experience with Java, Python, and SQL. To apply, please submit your resume and a cover letter to Dabwisobandadb9@gmail.com.</p>
            <a href="{{route("applicationform")}}" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
    </div>

  
    <div class="col-md-4 ">
        <div class="card">
          <img src="logo.png" alt="Job Listing Website Logo" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">Developer Manager</h2>
            <p class="card-text">We are looking for a Web Manager to join our team. The ideal candidate will have experience with HTML, C#, JAVA, Python CSS, JavaScript, and PHP. To apply, please submit your resume and a cover letter to Dabwisobandadb9@gmail.com</p>
            <a href="{{route("applicationform")}}" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 ">
        <div class="card">
          <img src="logo.png" alt="Job Listing Website Logo" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">Web Developer</h2>
            <p class="card-text">We are looking for a talented Web Developer to join our team. The ideal candidate will have experience with HTML, CSS, JavaScript, and PHP. To apply, please submit your resume and a cover letter to Dabwisobandadb9@gmail.com.</p>
            <a href="{{route("applicationform")}}" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Web Designer </h2>
            <p class="card-text">We are looking for a talented Web designer to join our team. The ideal candidate will have experience with . To apply, please submit your resume and a cover letter to Dabwisobandadb9@gmail.com</p>
            <a href="{{route("applicationform")}}" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
      </div>
    </div>

  <div>
    <footer class=" text-center text-white" style="background-color: blue;">
       
        <div class="container p-4 pb-0" >
          
          <section class="mb-4">
            
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-facebook-f"></i></a>
      
            
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i></a>
      
           
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i></a>
      
            
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" >
                <i class="fab fa-instagram"></i></a>
      
            
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-linkedin-in"></i ></a>
      
           
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-github"></i ></a>
          </section>
        
        </div>
        
      
        
        <div class="text-center p-3"> 
            Contact on us: 0965769753|Dabwisobandadb9@gmail.com
        
        </div>
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-white" href="index.html">Afri-Connect</a>
          </div>
        
      </footer>
        <script src="js/bootstrap.js"></script>
  </div>

@endsection