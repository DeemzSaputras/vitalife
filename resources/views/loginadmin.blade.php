<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

    <section
    class="ezy__signin16 light flex items-center justify-center bg-cover bg-center bg-no-repeat text-white relative overflow-hidden z-[1] py-28 lg:py-48"
    style="background-image: url(https://cdn.easyfrontend.com/pictures/background/background3.jpg)">
    <div
    class="absolute top-0 right-0 left-0 bottom-0 opacity-80 -z-[1]"
    style="background: linear-gradient(to bottom, #005bea, #00c6fb)"></div>
    <div class="container px-4 mx-auto">
        <div class="flex justify-center items-center">
            <div class="w-full md:w-5/12 lg:w-1/4 text-center">
                <img src="https://cdn.easyfrontend.com/pictures/icons/user.png" alt="" class="w-24 h-auto mb-6 mx-auto" />
                <h2 class="text-3xl font-light leading-none mb-12">Unknown</h2>
                <form>
                    <div>
                        <div class="w-full mb-4">
                            <input
                            type="text"
                            class="w-full min-h-[48px] leading-10 bg-white rounded-full px-6 font-bold focus:outline-none border-2 border-transparent focus:border-blue-600 duration-300"
                            id="name"
                            placeholder="Username"/>
                        </div>
                        <div class="w-full mb-4">
                            <input type="password" class="w-full min-h-[48px] leading-10 bg-white rounded-full px-6 font-bold focus:outline-none border-2 border-transparent focus:border-blue-600 duration-300"
                            id="password"placeholder="Password"/>
                        </div>
                        <button type="submit" class="h-12 py-3 px-7 font-semibold text-white rounded-full bg-blue-600 hover:bg-opacity-90 duration-300 w-full">
                            SIGN IN
                        </button>
                    </div>
                    <div class="text-center mt-6 text-lg duration-300 hover:text-blue-600">
                        <a href="">Forget Username / Password ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


</body>
</html>