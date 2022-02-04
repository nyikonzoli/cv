<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Zoltán Nyikon</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <section id="profile">
        <div id="profile-content">
            <div id="profile-picture">
                <img src="https://dummyimage.com/450x450/ff8/c64" alt="me">
            </div>
            <div id="profile-text">
                <h1><b>Hello</b></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione velit, hic beatae tempora earum nulla accusamus saepe tempore vero est adipisci ad obcaecati veniam dolores exercitationem odio aliquid voluptate fugiat.</p>                
            </div>
        </div>
    </section>
    <div class="spacer" style="background-image: url({{asset('svg/spacer1.svg')}});"></div>
    <section id="resume">
        <div id="resume-content">
           <div class="resume-card">

           </div>
        </div>
    </section>
    <div class="spacer" style="background-image: url({{asset('svg/spacer2.svg')}}); height: 150px;"></div>
    <section id="contact">
        <div id="contact-content">

        </div>
    </section>
</body>
</html>