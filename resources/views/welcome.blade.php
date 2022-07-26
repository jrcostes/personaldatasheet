<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personal Data Sheet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 20px 50px 20px 50px ;
            }
            .full-height {
                height: 100vh;
            }
            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content{
                /* display: flex; */
                /* text-align: center; */
            }
            .personalInformation {
                text-align: center;
                display: flex;
                flex-direction: row;
                padding-top: 25px;
                padding-left: 60px;
            }
            .card1{
                padding-left: 20px;
            }
            .card2{
                padding-left: 30px;
            }
            .card3{
                padding-top: 45px;
                padding-left: 30px;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            .personalInformation{
                background-color: #add8e6;
                padding-right: 50px;
            }
            .additionalInfo{
                background-color: #add8e6;
                padding-right: 50px;
            }
            .content{
                background-color: #add8e6;
            }
            .card1{
                background-color: #ffffff;
                position: relative;
                left: 40px;
                border-radius: 20px;
                padding: 20px 20px 20px 20px;
                text-align: justified;
            }
            .card2{
                background-color: #ffffff;
                position: relative;
                left: 110px;
                border-radius: 20px;
                padding: 40px 80px 40px 80px;
                text-align: justified;
            }

            .personal{
                text-align: left;
            }
        </style>
    </head>

</html>
