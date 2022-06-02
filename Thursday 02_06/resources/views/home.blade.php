<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .logo {
            width: 60px;
            height: 60px;
        }

        img {
            width: 260px;
            height: 240px;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <li class="nav-item active">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Candy-clipart.svg/768px-Candy-clipart.svg.png" alt="" srcset="">
        </li>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " href="./about">About</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="./register">Register</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="./login">Login</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="data:image/jpeg;base64,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" alt="" srcset="">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="data:image/jpeg;base64,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" alt="" srcset="">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU7ja14TT7LsxvNX5ypQUmVsPoKL-76tfQpQ&usqp=CAU" alt="">            
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsZDlh0IYGMGQenIlV3EGoSd5LSNtWHGFoxg&usqp=CAU" alt="">

                <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
        </div>




        <br><br>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQggD9tY1Egd25lJVrgmfVPjJ9N7ofVgZ6LBg&usqp=CAU
" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhFWt2FQUdJe0X9hylHDzUOd377hIXDl8oJA&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd-4HqLxzdNXYutoaJwJ8S7i_EVC9UkusLiA&usqp=CAU" alt="">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
 </div>
       
        <div class="col">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGT3NB6TyarRka2LLSDLMk6I4U4j7ZryxxQQ&usqp=CAU" alt="">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

        </div>
     </div>


     <br><br>

 

    </div>


    
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2022 Copyright:
    Group Three
  </div>
  <!-- Copyright -->
</footer>
</body>

</html>