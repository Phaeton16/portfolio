<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <ul>
                <li class="logo">JRV</li>
                <div class="menu">
                    <li><a href="#home-section">Home</a></li>
                    <li><a href="#about-section">About</a></li>
                    <li><a href="#projects-section">Projects</a></li>
                    <li><a href="#contacts-section">Contacts</a></li>
                </div>
            </ul>
        </div>
        <section id="home-section">
            <div class="content">
                <div class="text">
                    <h3>Hello,</h3>
                    <h1>I'm a Web <br> Developer</h1>
                    <h3>I build and develop websites.</h3>
                    <div class="socials">
                        <li><i class='bx bxl-facebook-circle'></i></li>
                        <li><i class='bx bxl-gmail'></i></li>
                        <li><i class='bx bxl-github'></i></li>
                        <li><i class='bx bxl-linkedin'></i></li>
                    </div>
                </div>
                <div class="image">
                    <img src="{{ asset('images/avatar-no-bg.png') }}" alt="not found">
                </div>
            </div>
            {{-- <div class="footer">
            <div class="footer-content">
                <h1>This is footer</h1>
            </div>
        </div> --}}
        </section>
        <section id="about-section">
            <div class="section-content">
                <div class="content-title">
                    <h1 class="title">About me</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
            </div>
        </section>
        <section id="projects-section">
            <div class="section-content">
                <div class="content-title">
                    <h1 class="title">Projects</h1>
                </div>
            </div>
        </section>
        <section id="contacts-section">
            <div class="section-content">
                <div class="content-title">
                    <h1 class="title">Contacts</h1>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
