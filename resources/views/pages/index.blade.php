<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <title>Safevest Calculator</title>
</head>
<body>
    
    <section>

        <div class="container mt-5">

            <div class="offset-md-3 col-md-6 offset-md-3 bg-light p-5">

            <h2 class="fw-light"><strong>Safevest NAIRA Calculator</strong></h2>
            
               <form class="mt-5" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><strong>Your Investment Size</strong></label>
                        <select class="form-select" aria-label="Default select example" id ="investment-size">
                            <option value = "0">--Select--</option>
                            <option value="0.02">NGN50,000 - 499,999 (2% monthly return)</option>
                            <option value="0.024">NGN500,000 - 4,999,999 (2.4% monthly return)</option>
                            <option value="0.028">NGN5,000,000 - 50,000,000 (2.8% monthly return)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><strong>Your Investment Duration</strong></label>
                        <select class="form-select" aria-label="Default select example" id="investment-duration">
                            <option value ="0">--Select--</option>
                            <option value="6">6 months</option>
                            <option value="9">9 months</option>
                            <option value="12">12 months</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><strong>Enter Investment Amount Minimum(	&#8358;50,000)</strong></label>
                        <input type="number" class="form-control" id="investment-amount">
                    </div>
                    <div class="mb-3">
                        
                        <h3 class="fw-light">Total Returns would be &#8358; <span id="total-returns"></span></h3>
                    </div>
                     <div>
                     <h3 class="fw-light">At  <span id="apr-result"></span>% APR </h3> 
                     </div>
                </form>
            </div>

        </div>
    
    </section>
    
<script type="text/javascript" src="{{asset('asset/js/jquery-3.3.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/calculator.js')}}"></script>

</body>
</html>