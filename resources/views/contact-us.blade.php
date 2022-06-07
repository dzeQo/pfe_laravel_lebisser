@extends('frontlayout')

@section('title' , 'Contact-us')
@section('content')
<head>
    <style>
        body{
            background: -webkit-linear-gradient(left, #38414d, #c1ecfa);
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
            border-radius:10%; 
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btn btn-outline-dark my-2 {
            width: 50%;
            
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<div class="container">
      <!-- Contact Us Section -->
      <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
            @endif
        <form action="{{url('/contact-us')}}" method="post">
            @csrf() 
            <h3>Emvoyez un Message</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Votre Nom *" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Votre Email *" value="" required />
                    </div> 
                    <div class="form-group" required>
                     <strong>Recaptcha:</strong>                  
                     {!! NoCaptcha::renderJs() !!}
                     {!! NoCaptcha::display() !!}
                    </div>   
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Votre Message *" style="width: 110%; height: 120px; " required></textarea>
                    </div>
                </div>
               <div class="col-md-6 my-2">
                <div  class="form-group">
                    <input  type="submit" name="send" class="btn btn-outline-dark my-2" value="Envoyer Message" required/>
                </div>
                </div>
            </div> 
            
            
        </form>
</div>
    <!-- End Contact Us Section -->
</body>
</html>
    </div>
    
@endsection