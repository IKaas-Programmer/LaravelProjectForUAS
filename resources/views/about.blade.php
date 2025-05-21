@extends('layout.index')

@section('main')
    <style>
        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .about-team-list {
            list-style-type: none;
            padding: 0;
        }

        .about-team-list li {
            background: #504747;
            margin: 20px 0;
            text-align: center;
            box-shadow: 5px 5px #0d0b10;
            padding: 10px;
            border-radius: 5px;
        }

        .about-team-list img {
            border-radius: 10%;
            margin-bottom: 10px;
            width: 100px;
            height: 100px;
            box-shadow: 2px 2px #514f55;
        }

        .about-title {
            color: #333;
        }
    </style>

    <h1 class="about-title">About Us</h1>
    <hr>

    <main>
        <h2>Team</h2>
        <div class="about-container">
            <ul class="about-team-list">
                <li>
                    <img src="{{ asset('assets/image/IKaas.jpg') }}" alt="I Ketut Agus Arta Suteja">
                    <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: #dfdada;">I Ketut Agus Arta Suteja
                    </span>
                    <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: #e9e6e6;">NIM: 2355201007</span>
                    <p style="color: #0d0b10">"Keep learning guys"</p>
                </li>
                <li>
                    <img src="{{ asset('assets/image/yoga.jpg') }}" alt="Yoga Prakusya">
                    <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: rgb(227, 219, 219);">Yoga
                        Prakusya</span> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color: #cfc2c2;">NIM: 2355201007</span>
                    <p style="color: black;">Anggota</p>
                </li>
                <li>
                    <img src="{{ asset('assets/image/asta.jpg') }}" alt="asta">
                    <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color:rgb(226, 217, 217);">I Gede Asta
                        Peramita
                        Darma</span> <br>
                    <span style="font-family: 'Times New Roman', Times, serif; color:rgb(222, 212, 212);">NIM:
                        2355201005</span>
                    <p style="color: black;">Anggota</p>
                </li>
            </ul>
        </div>
    </main>
    <hr>
@endsection

@section('footer')
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
