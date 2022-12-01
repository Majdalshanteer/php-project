<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- JavaScript Bundle with Popper -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
   
        .overlay h1,
        h2 {
            color: white;
            background-color: rgba(18, 6, 6, 0.6);

            font-weight: 600;
            margin: 2rem 3rem 0;
            mix-blend-mode: normal;
            z-index: 1;
            padding: 5px 15px;
            text-align: center;
        }




        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;

        }

        .image-gallery>li {
            flex-basis: 350px;
            /* width: 350px; */
        }

        .image-gallery li img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            vertical-align: middle;
            border-radius: 5px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        footer {
            bottom: 0;
            left: 0;
            right: 0;
            background-color:lightgrey;
            height: auto;
            width: 100vw;

            padding-top: 40px;
            color: #fff;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;

        }

        .footer-content h3 {
            font-size: 2.1rem;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 3rem;
            color: black;
        }

        .footer-content p {
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
            color: #cacdd2;
            color: black;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
            color: black;
        }

        .socials li {
            margin: 0 10px;
            color: black;
        }

        .socials a {
            text-decoration: none;
            color: black;
            border: 1.1px solid black;
            padding: 5px;

            border-radius: 50%;

        }

        .socials a i {
            font-size: 1.1rem;
            width: 20px;
            color: black;




        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            background: #000;
            width: 100vw;
            padding: 20px;
            padding-bottom: 40px;
            text-align: center;
        }

        .footer-bottom p {
            float: left;
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom p a {
            color: #44bae8;
            font-size: 16px;
            text-decoration: none;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }

        .footer-menu {
            float: right;

        }

        .footer-menu ul {
            display: flex;
        }

        .footer-menu ul li {
            padding-right: 10px;
            display: block;
        }

        .footer-menu ul li a {
            color: black;
            text-decoration: none;
        }

        .footer-menu ul li a:hover {
            color: #27bcda;
        }

        @media (max-width:500px) {
            .footer-menu ul {
                display: flex;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        }

        </style>
</head>
<body>
    





    <footer>
        <div class="footer-content">
            <img src="logo-removebg-preview_2.png" style="width: 90px; height: 100px; padding-bottom:20px ; ">

            <h3>Smart Home </h3>
            <h6 style="color: black ;">Home is not a place, it's a feeling..</h6>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 <a href="#">Smart Home </a> </p>

        </div>

    </footer>
    </body>
</html>