<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Login</title>
</head>

<body>

    <section class="ezy__signup10 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white">
        <div class="container px-4 mx-auto">
          <div class="grid grid-cols-6 gap-6 h-full">
            <div class="col-span-6 md:col-span-2 lg:col-span-3">
                <div
                class="bg-cover bg-center bg-no-repeat min-h-[150px] rounded-xl hidden md:block w-full md:w-[200%] lg:w-[150%] h-full"
                style="background-image: url('image/doc2.png');"
              ></div>
            </div>
            <div class="col-span-6 md:col-span-4 lg:col-span-3 py-12">
              <div class="max-w-lg w-full h-full">
                <div class="bg-white dark:bg-slate-800 shadow-xl rounded-2xl p-4 md:p-12 lg:py-16">
                    <div x-data="{ isSignInActive: true }">
                        <div class="bg-blue-50 dark:bg-slate-700 w-64 flex justify-center mx-auto rounded-xl p-2">
                            <button @click="isSignInActive = true" :class="{ 'bg-white dark:bg-slate-800 text-black dark:text-white': isSignInActive }" class="py-3 w-1/2 h-full rounded-xl">Sign In</button>
                            <button @click="isSignInActive = false" :class="{ 'opacity-60': !isSignInActive }" class="py-3 w-1/2 h-full rounded-xl">Sign Up</button>
                        </div>
                      
                        <div class="signin-form" x-show="isSignInActive">
                          <!-- Sign-in form content here -->
                        </div>
                        
                        <div class="signup-form" x-show="!isSignInActive">
                          <!-- Sign-up form content here -->
                        </div>
                      </div>
                    
                    <h2 class="text-indigo-900 dark:text-white text-2xl font-bold mb-3">Welcome to VITALIFE</h2>
                    <div class="flex items-center mb-6 md:mb-12">
                    <p class="mb-0 mr-2 opacity-50">Don't have an account?</p>
                    <a href="#" class="">Create Account</a>
                  </div>
      
                  <form class="">
                    <div class="mb-4">
                      <input
                        type="text"
                        class="w-full bg-blue-50 dark:bg-slate-700 min-h-[48px] leading-10 px-4 p-2 rounded-lg outline-none border border-transparent focus:border-blue-600"
                        id="email"
                        placeholder="Enter Email Address"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="password"
                        class="w-full bg-blue-50 dark:bg-slate-700 min-h-[48px] leading-10 px-4 p-2 rounded-lg outline-none border border-transparent focus:border-blue-600"
                        id="password"
                        placeholder="Enter Password"
                      />
                    </div>
                    <div class="mb-4">
                      <input type="checkbox" class="mr-2" id="remember-me" checked />
                      <label class="font-normal" for="remember-me">Remember me</label>
                    </div>
                    <button class="bg-indigo-900 text-white py-3 px-6 rounded w-full">Log In</button>
                    <button class="hover:text-blue-600 py-2 px-4 rounded-lg w-full">Forget your password?</button>
                    <div class="relative">
                      <hr class="my-8 border-t border-gray-300" />
                      <span
                        class="px-2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white dark:bg-slate-800"
                        >Or</span
                      >
                    </div>
                    <button class="bg-blue-600 text-white py-3 px-6 rounded w-full flex items-center justify-center mt-4">
                      <span class="fab fa-facebook mr-2 text-white"></span>
                      <span class="text-center">Continue with Facebook</span>
                    </button>
                    <button class="bg-red-500 text-white py-3 px-6 rounded w-full flex items-center justify-center mt-4">
                      <span class="fab fa-google mr-2 text-white"></span>
                      <span class="text-center">Continue with Google</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

</body>

</html>