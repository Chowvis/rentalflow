@extends('dashboard.skeleton')

@section('content')
    <div class="p-8 bg-gray-50 h-full">
        <p class="text-gray-600 font-bold text-2xl">Settings</p>
        <div class="grid gap-4 mt-5 lg:grid-cols-6 grid-col-1">
            <div class="rounded-md border border-slate-300 bg-white flex items-center justify-center p-5 text-xs font-roboto">
                <div class="flex flex-col items-center group cursor-pointer" id="change_pw" >
                    <img src="images/changepassword.png" class="rounded-md h-[80px] group-hover:h-[70px] duration-100" alt="">
                    <span class="my-2 group-hover:text-blue-500 duration-100">Change Password</span>

                </div>
            </div>
            <div class="rounded-md border border-slate-300 bg-white flex items-center justify-center p-5 text-xs font-roboto">
                <a class="flex flex-col items-center" href="{{route('edituser')}}">
                    <img src="images/Profile.png" class="rounded-md h-[80px]" alt="">
                    <span class="my-2">Profile</span>

                </a>
            </div>
            <div class="rounded-md border border-slate-300 bg-white flex items-center justify-center p-5 text-xs font-roboto">
                <a class="flex flex-col items-center" href="">
                    <img src="images/Payments.png" class="rounded-md h-[80px]" alt="">
                    <span class="my-2">Payments</span>

                </a>
            </div>

            <div id="myModal" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex justify-center items-center font-roboto">

                <form action="{{route('newpass')}}" method="POST" class="bg-white p-5 rounded-lg flex flex-col">
                    @csrf
                    <h2 class="text-xl font-semibold mb-4 px-8 py-4">Change Password</h2>
                    <label for="old_password" class="text-sm font-medium pb-3">Old Password</label>
                    <input id="" type="password" name="old_password" placeholder="Enter your Old Password" class="border mb-3 border-gray-300 rounded-md p-2 text-sm">
                    <span id="o1" class="text-red-500 text-sm"></span>
                    @error('old_password')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror

                    <label  for="new_password" class="text-sm font-medium pb-3">New Password</label>
                    <input id="new" type="password" name="new_password" placeholder="Enter New Password" class="border mb-3 border-gray-300 rounded-md p-2 text-sm">
                    <span id="o2" class="text-red-500 text-sm"></span>
                    @error('new_password')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror

                    <label for="con_password" class="text-sm font-medium pb-3">Confirm Password</label>
                    <input id="con" type="password" name="con_password" placeholder="Enter Confirm Password" class="border border-gray-300 rounded-md p-2 text-sm">
                    <span id="o3" class="text-red-500 text-sm mb-3"></span>
                    @error('con_password')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    <hr>
                    <div class="mt-3">
                        <span id="closeModal" class="mt-4 px-3 py-2 rounded-lg text-sm font-bold border border-gray-700 cursor-pointer">Cancel</span>
                        <button id="save" class="bg-purple-800 text-white py-2 px-3 rounded-md text-sm font-bold hover:bg-purple-500">
                            <i class="fa-solid fa-check pr-2"></i>
                            Save
                        </button>
                    </div>

                </form>


            </div>

        </div>
    </div>
    <script>
        const id = document.getElementById('change_pw');
        id.addEventListener('click', (event) => {
            const modal = document.getElementById('myModal');
            modal.classList.remove('hidden');
            const closeModalButton = document.getElementById('closeModal');
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
            window.addEventListener('click', (event) => {
            if (event.target === modal)//checking if any click is been made outside the form
            {
                modal.classList.add('hidden');
            }
            });



        //     const newPasswordInput = document.getElementById('new');
        //     const confirmPasswordInput = document.getElementById('con');
        // // Function to check if passwords match
        //     function checkPasswordMatch() {
        //         if (newPasswordInput.value === confirmPasswordInput.value) {
        //             confirmPasswordInput.classList.add('bg-green-200');
        //             confirmPasswordInput.classList.remove('bg-red-200');
        //         } else {
        //             confirmPasswordInput.classList.remove('bg-green-200');
        //             confirmPasswordInput.classList.add('bg-red-200');
        //         }
        //         }

        //     // Event listeners to check password match on keyup

        //     confirmPasswordInput.addEventListener('keyup', checkPasswordMatch);

        });



    </script>
    <script>

        const confirmPasswordInput = document.getElementById('con');
        const newPasswordInput = document.getElementById('new');
        function checkPasswordMatch() {
                    if (newPasswordInput.value === confirmPasswordInput.value) {
                        confirmPasswordInput.classList.add('bg-green-200');
                        confirmPasswordInput.classList.remove('bg-red-200');
                    } else {
                        confirmPasswordInput.classList.remove('bg-green-200');
                        confirmPasswordInput.classList.add('bg-red-200');
                    }
                    }
        function check(){

            if((newPasswordInput.value).length < 8 || (confirmPasswordInput.value).length < 8){
                    document.getElementById('o3').innerText = 'Password is less than 8 character';
                    // const renderedText = htmlElement.innerText;
                }
            else{
                document.getElementById('o3').innerText = '';
                // Function to check if passwords match
                }

            // Event listeners to check password match on keyup


        }

        confirmPasswordInput.addEventListener('keyup', check);
        confirmPasswordInput.addEventListener('keyup', checkPasswordMatch);

    </script>
@endsection
