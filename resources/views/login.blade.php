<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LisTracker</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('Components.header') 
 
        <div class="flex flex-col w-screen h-screen justify-center items-center">
 
            <p class="text-6xl font-bold">ListTracker</p>
            <sub class=" text-xs text-gray-500">Track your grades Aim for stars</sub>

            <div class="rounded-sm w-4/12 p-2 mt-15">
                <form action="" method="POST" class="flex flex-col gap-2">
                    @csrf
                    <input type="text" name="username" placeholder="Username" class="p-1 rounded-sm border border-gray-300 focus:outline-none text-sm bg-white focus:ring-2 focus:ring-gray-700">
                    <input type="password" name="password" placeholder="Password" class="p-1 rounded-sm border border-gray-300 focus:outline-none text-sm bg-white focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class=" bg-gray-700 p-2 text-white rounded-sm hover:bg-gray-500 transition">Login</button>
                    </div>
                    <hr>
                    <a href="#" class="text-sm hover:underline">Don't have an account? Click me to sign up.</a>
                    
                </form>
            </div>
       
        </div>
        <div class="flex flex-col w-screen bg-amber-800 h-screen justify-center items-center">
 
            <p class="text-6xl font-bold">ListTracker</p>
            <sub class=" text-xs text-gray-500">Track your grades Aim for stars</sub>

            <div class="rounded-sm p-2 mt-15">
                <form action="" method="POST" class="flex flex-col gap-2">
                    @csrf
                    <input type="text" name="username" placeholder="Username" class="p-1 rounded-sm border border-gray-300 focus:outline-none text-sm bg-white focus:ring-2 focus:ring-gray-700">
                    <input type="password" name="password" placeholder="Password" class="p-1 rounded-sm border border-gray-300 focus:outline-none text-sm bg-white focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class=" bg-gray-700 p-2 text-white rounded-sm hover:bg-gray-500 transition">Login</button>
                    </div>
                    <hr>
                    <a href="#" class="text-sm hover:underline">Don't have an account? Click me to sign up.</a>
                    
                </form>
            </div>
       
        </div>
 
</body>
</html>