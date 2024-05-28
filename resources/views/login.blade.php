asd
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="container relative bg-white rounded-3xl shadow-xl flex flex-col items-center justify-center h-screen overflow-hidden" id="container">
        <div class="form-container sign-in absolute top-0 left-0 w-full h-full transition-all duration-600 ease-in-out">
            <form class="h-full flex flex-col items-center justify-center">
                <h1 class="text-3xl font-semibold mb-6">Sign In</h1>
                <div class="social-icons flex mb-6">
                    <a href="#" class="icon mr-3"><i class="fa-brands fa-google-plus-g text-2xl"></i></a>
                    <a href="#" class="icon mr-3"><i class="fa-brands fa-facebook-f text-2xl"></i></a>
                    <a href="#" class="icon mr-3"><i class="fa-brands fa-github text-2xl"></i></a>
                    <a href="#" class="icon mr-3"><i class="fa-brands fa-linkedin-in text-2xl"></i></a>
                </div>
                <span class="text-gray-500 mb-6">or use your email password</span>
                <input type="email" placeholder="Email" class="w-full mb-6 bg-gray-200 rounded-lg py-3 px-4 appearance-none focus:outline-none focus:shadow-outline" />
                <input type="password" placeholder="Password" class="w-full mb-6 bg-gray-200 rounded-lg py-3 px-4 appearance-none focus:outline-none focus:shadow-outline" />
                <a href="#" class="text-blue-500 mb-6">Forget Your Password?</a>
                <button class="w-full bg-purple-500 text-white rounded-lg py-3 px-4 hover:bg-purple-600 focus:outline-none focus:shadow-outline">Sign In</button>
            </form>
        </div>
        <div class="toggle-panel absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-center" style="background-image: url(image/human.png);">
            <div class="logo mb-6">VITALIFE</div>
            <h1 class="text-3xl font-semibold mb-6">Hello, Welcome</h1>
            <p class="text-gray-100 mb-6">Hello Healthy teveller friends, register an account then continue travelling</p>
            <button class="hidden bg-white text-purple-500 rounded-lg py-3 px-4 hover:bg-gray-100 focus:outline-none focus:shadow-outline" id="login">Sign In</button>
        </div>
    </div>
    

</body>

</html>