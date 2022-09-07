<html>
    <head>

        <style>
            body{
                background-color: #eee;
            }
            .card{
                background-color: #fff;
                width: 500px;
                border: none;
                border-radius: 16px;

            }

            .info{
                line-height: 19px;
            }

            .name{
                color: #0693e3;
                font-size: 18px;
                font-weight: 600;
            }

            .order{
                font-size: 14px;
                font-weight: 400;
                color: #b7b5b5;
            }
            .detail{

                line-height:19px;
            }

            .summery{


                    color: #d2cfcf;
                font-weight: 400;
                font-size: 13px;
            }

            }

            .text{

                line-height:15px;
            }
            .new{

                color: #000;
                font-size: 14px;
                font-weight: 600;
            }
            .money{


                font-size: 14px;
                font-weight:500;
            }
            .address{

            color: black;
                font-weight:500;
                font-size:14px;
            }

            .last{

                font-size: 10px;
                font-weight: 500;

            }


            .address-line{
                color: #4C40E0;
                font-size: 11px;
                font-weight: 700;
            }
        </style>
    </head>
<body>
    <div class="mt-5 d-flex justify-content-center">
        <img src="{{ asset('public/img/logo-murni.png') }}" width="20%"/>
    </div>
    @if($response['status'] == 400)
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-4 mt-3  text-center">
            <h1 style="color: #0693e3;">{{$response['message']}}</h1>
        </div>
    </div>
    @else
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-4 mt-3">
           <div class="first d-flex justify-content-between align-items-center mb-3">
             <div class="info">
                 <span class="d-block name">{{ $response['data']['summary']['status'] }}</span>
                 <span class="order">Nomor Resi : {{ $response['data']['summary']['awb'] }}</span><br>
                 <span class="order">Courrier : {{ $response['data']['summary']['courier'] }}</span>

             </div>
              <img src="{{ asset('public/img/car.png') }}" width="40"/>
           </div>
           <hr>
           <div class="text">
         <span class="d-block new mb-4" >History</span>
          </div>
            @foreach ($response['data']['history'] as $value)
                <span class="d-block address mb-3">{{ $value['date'] }}</span>
                <span class="d-block address mb-3">{{ $value['desc'] }}</span>
                <hr>
            @endforeach
        </div>
     </div>
     @endif
</body>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' />
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>

</html>
