<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Header</title>
    <script src="./script.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="landing.css" />
    <style>
      .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
    <div class="bg-gray-800 text-black sticky top-0">
      <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap py-4 bg-white">
          <div class="flex items-center flex-shrink-0 mr-6">
            <img class="h-8 w-8 mr-2" src="./banner-img.png" alt="Logo" />
            <span class="font-semibold text-xl tracking-tight">Jov Cafe</span>
          </div>
          <div class="block lg:hidden">
            <button
              id="nav-toggle"
              class="flex items-center px-3 py-2 border rounded text-black-200 border-gray-400 hover:border-white"
            >
              <svg
                class="fill-current h-3 w-3"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
              </svg>
            </button>
          </div>
          <div
            id="nav-content"
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-4 lg:mt-0"
          >
            <div class="text-sm lg:flex-grow">
              <a
                href="#home"
                class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4"
                >Home</a
              >
              <a
                href="#about"
                class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4"
                >About</a
              >
              <a
                href="#menu"
                class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4"
                >Menu</a
              >
              <a
                href="#contact"
                class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4"
                >Contacts</a
              >
            </div>
            <a
              href="#"
              class="block mt-4 lg:inline-block lg:mt-0 mr-10 text-black"
            >
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
            <div class="text-sm" onclick="window.location.href='./login.php'">
              <a
                href="#"
                class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4"
              >
                <span class="user_icon"
                  ><i class="fa fa-user" aria-hidden="true"></i
                ></span>
                Login
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <section id="home" class="">
      <div class="center-content h-screen" id="homePage">
        <div id="banner_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="banner_img">
                  <img src="./banner-img.png" alt="Banner Image" />
                </div>
                <div
                  class="text-white mx-4 md:text-black flex flex-col justify-center mt-8 md:mt-0"
                >
                  <h1 class="banner_taital text-4xl font-bold">Jovcafe</h1>
                  <h5 class="tasty_text text-xl font-semibold">
                    The best Cafe ever
                  </h5>
                  <p class="banner_text mt-4">
                    Here, we treat you like kings and queens
                  </p>
                  <div class="btn_main mt-4">
                    <div
                      class="about_bt inline-block px-6 py-2 rounded bg-gray-800 text-white mr-4"
                    >
                      <a href="#about">About Us</a>
                    </div>
                    <div
                      class="callnow_bt inline-block px-6 py-2 rounded bg-red-600 text-white"
                    >
                      <a href="#contact">Contact</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="py-16">
      <div class="about_section bg-gray-100 py-10">
        <div class="container mx-auto">
          <div class="text-center">
            <h1 class="text-3xl font-bold mb-6">About Our Shop</h1>
            <img src="./blog-img1.png" class="inline-block mb-6" />
          </div>
          <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-6 md:mb-0 text-center md:m-4">
              <div class="image_iman">
                <img src="./img-4.png" class="about_img md:mx-auto" />
              </div>
            </div>
            <div class="md:w-1/2 md:pl-8">
              <div class="mr-10">
                <h1 class="text-xl font-bold mb-4 mx-7">Coffee Distribution</h1>
                <p class="m-7">
                  Welcome to Our Shop! We're passionate about bringing you the
                  finest coffee beans from around the world. Our mission is to
                  provide you with a truly exceptional coffee experience, from
                  the moment you take that first sip to the last drop. Whether
                  you're a coffee connoisseur or just starting your coffee
                  journey, we invite you to explore our shop and indulge in the
                  world of coffee like never before. Join us and experience the
                  joy of coffee today!
                </p>
                <div class="readmore_btn">
                  <a
                    href="#"
                    class="text-white bg-gray-800 px-4 py-2 rounded hover:bg-gray-700 ml-7"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="menu" class="py-16 bg-gray-100">
      <div class="container mx-auto px-4">
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold">Our Menu</h2>
          <p class="mt-4 text-gray-600">Explore our delicious offerings</p>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center">
          <div class="md:w-1/2 mr-4 mb-6 md:mb-0 flex flex-col items-center">
            <img
              src="./banner-img.png"
              class="w-32 h-32 rounded-full mb-2"
              alt="Coffee"
            />
            <h3 class="text-xl font-semibold">Coffee</h3>
            <p class="text-gray-700 text-center">
              Amazing cofee is available for $10.
            </p>
          </div>
          <div class="md:w-1/2 mr-4 mb-6 md:mb-0 flex flex-col items-center">
            <img
              src="./tea.jpg"
              class="w-32 h-32 rounded-full mb-2"
              alt="Tea"
            />
            <h3 class="text-xl font-semibold">Tea</h3>
            <p class="text-gray-700 text-center">
              Amazing tea is available for $5.
            </p>
          </div>
          <div class="md:w-1/2 mr-4 mb-6 md:mb-0 flex flex-col items-center">
            <img
              src="./pastries.jpg"
              class="w-32 h-32 rounded-full mb-2"
              alt="Pastries"
            />
            <h3 class="text-xl font-semibold">Pastries</h3>
            <p class="text-gray-700 text-center">
              Amazing pastries is available for $20
            </p>
          </div>
          <div class="md:w-1/2 flex flex-col items-center">
            <img
              src="./sandwich.jpg"
              class="w-32 h-32 rounded-full mb-2"
              alt="Sandwiches"
            />
            <h3 class="text-xl font-semibold">Sandwiches</h3>
            <p class="text-gray-700 text-center">
              Amazing Sandwiches is available for $50
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="py-16 bg-gray-100">
      <div class="container mx-auto px-4">
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold">Contact Us</h2>
          <p class="mt-4 text-gray-600">Get in touch with us</p>
        </div>
        <div class="max-w-lg mx-auto">
          <form
            action="#"
            method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
          >
            <div class="mb-4">
              <label
                for="username"
                class="block text-gray-700 text-sm font-bold mb-2"
                >Username</label
              >
              <input
                type="text"
                id="username"
                name="username"
                placeholder="Your Username"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              />
            </div>
            <div class="mb-4">
              <label
                for="email"
                class="block text-gray-700 text-sm font-bold mb-2"
                >Email</label
              >
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Your Email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              />
            </div>
            <div class="mb-4">
              <label
                for="phone"
                class="block text-gray-700 text-sm font-bold mb-2"
                >Phone</label
              >
              <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Your Phone Number"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              />
            </div>
            <div class="mb-6">
              <label
                for="message"
                class="block text-gray-700 text-sm font-bold mb-2"
                >Message</label
              >
              <textarea
                id="message"
                name="message"
                placeholder="Your Message"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32 resize-none"
              ></textarea>
            </div>
            <div class="flex items-center justify-between">
              <button
                type="submit"
                class="bg-gray-800 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              >
                Send
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer class="bg-gray-800 text-white py-8">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
          <div>
            <p class="text-xl font-bold">Jov Cafe</p>
            <p class="mt-2">123 Main Street, Kigali, Rwanda</p>
            <p class="mt-2">info@jovcafe.com</p>
            <p class="mt-2">+123 456 7890</p>
          </div>
          <div class="flex items-center">
            <a href="#" class="text-gray-300 hover:text-white mx-2">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-white mx-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-white mx-2">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-white mx-2">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <hr class="my-4 border-gray-600" />
        <p class="text-center text-sm">
          &copy; 2024 Jov Cafe. All rights reserved.
        </p>
      </div>
    </footer>

    <script>
      document
        .getElementById("nav-toggle")
        .addEventListener("click", function () {
          var navContent = document.getElementById("nav-content");
          if (navContent.classList.contains("hidden")) {
            navContent.classList.remove("hidden");
          } else {
            navContent.classList.add("hidden");
          }
        });
    </script>
  </body>
</html>
