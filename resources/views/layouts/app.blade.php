<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Demo</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >


</head>
<body class="bg-gray-100">

       <nav class="p-6 bg-white flex justify-between">
           <ul class="flex items-center">
               <li>
                   <a href="/" class="p-3">Home</a>
               </li>
               <li>
                   <a href="{{route('dashboard')}}"class="p-3">Dashboard</a>
               </li>
               <li>
                   <a href="{{route('posts') }}" class="p-3">Post</a>
               </li>

               <li>
                <a href="upload" class="p-3">Upload</a>
            </li>

           </ul>

           <ul class="flex items-center">

            @auth

            <li>
                <a href="Profile" class="p-3">{{auth()->user()->name}}</a>
            </li>

            <li>

                <form action="{{route('logout')}}" method="post" class="p-3 inline">

                    @csrf

                    <button type="submit" >Logout</button>

                </form>

            </li>

            @endauth

            @guest



            <li>
                <a href="{{route('login')}}"class="p-3">Login</a>
            </li>


            <li>
                <a href="{{route('register')}}" class="p-3 ">Register</a>
            </li>

            @endguest




         </ul>

       </nav>



         @yield('content')




</body>
</html>
