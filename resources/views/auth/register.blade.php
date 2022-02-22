@extends('layouts.app')


@section('content')

        <div class="flex justify-center">
            <div class="w-4/12 p-6 m-10 bg-white rounded-lg">

                <form action="{{route('register')}}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">

                        @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>

                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('username') border-red-500 @enderror"  value="{{old('username')}}">

                        @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"  value="{{old('email')}}">

                        @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="choose a password"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror" value="">

                        @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">First Name</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-enter password"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                        @error('passwor_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <label>
                        <input type="checkbox"  name="remember" style="margin-bottom:15px"> Remember me
                     </label>
                   <br>
                     <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                     <br>


                    <div>
                        <button type="submit" class="bg-blue-500 text-white  px-4 py-3 rounded font-medium w-full" >Register</button>
                    </div>
                </form>

            </div>
        </div>
@endsection
