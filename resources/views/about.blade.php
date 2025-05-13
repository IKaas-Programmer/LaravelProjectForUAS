@extends('layout.index')
@section('footer')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        h1, h2 {
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #f4f4f4;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
        footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
        }
        footer .row {
            display: flex;
            justify-content: space-between;
        }
        footer .col-md-4 {
            flex: 1;
            margin: 0 10px;
        }
        footer h2 {
            color: #fff;
        }
        footer p {
            color: #ccc;
        }
    </style>

<h1 style="color:white">About Us</h1>
<hr>

<header>
</header>

    <main>
        <h2>Team</h2>
        <div class="container">
            <ul>
                <li style="margin: 20px;text-align: center; background-color: rgb(244, 240, 240); box-shadow: 5px 5px #0d0b10;">
                    <img src="{{ asset('assets/image/IKaas.jpg') }}" alt="I Ketut Agus Arta Suteja" style="border-radius: 10%   ; margin-bottom: 10px; width: 100px; height: 100px; box-shadow: 2px 2px #514f55;"> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: #333;">I Ketut Agus Arta Suteja </span> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: #333;">NIM: 2355201007</span>
                    <p style="color: #0d0b10">"Keep learning guys"</p>
                </li>
                <li style="margin: 20px; text-align: center; background-color: rgb(244, 240, 240); box-shadow: 5px 5px #0d0b10; ;">
                    <img src="{{ asset('assets/image/yoga.jpg') }}" alt="Yoga Prakusya" style="border-radius: 10%; margin-bottom: 10px; width: 100px; height: 100px; box-shadow: 2px 2px #514f55;"> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: black;">Yoga Prakusya</span> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: #333;">NIM: 2355201007</span>
                    <p style="color: black;">Anggota</p>
                </li>
                <li style="margin: 20px; text-align: center; background-color: rgb(244, 240, 240); box-shadow: 5px 5px #0d0b10;">
                    <img src="{{ asset('assets/image/asta.jpg') }}" alt="asta" style="border-radius: 10%; margin-bottom: 10px; width: 100px; height: 100px; box-shadow: 2px 2px #514f55;"> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color:black;">I Gede Asta Peramita Darma</span> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color:black;">NIM: 2355201005</span>
                    <p style="color: black;">Anggota</p>
                </li>
            </ul>
        </div>
    </main>

    <hr>
    <footer>
        <div class="row">
            <div class="col-md-4">
                <h2>Our Mission</h2>
                <p>To provide the best service to our customers.</p>
            </div>
            <div class="col-md-4">
                <h2>Our Vision</h2>
                <p>To be the leading company in our industry.</p>
            </div>
            <div class="col-md-4">
                <h2>Contact Us</h2>
                <p>Email: info@example.com</p>
            </div>
        </div>
    </footer>
@endsection