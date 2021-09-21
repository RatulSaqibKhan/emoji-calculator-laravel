<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>	&#128522; Emoji Calculator</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body class="antialiased">
  <div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
        <h1 class="text-gray-700"><span class="font-big"><i class="uil uil-calculator-alt"></i></span> Emoji Calculator
        </h1>
      </div>

      <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1">
          <div class="p-6">
            <div class="flex items-center">
              <form action="{{ url('/calculate') }}" id="calculatorForm" method="POST" autocomplete="off">
                <div class="grid grid-cols-5 xs:grid-cols-3 gap-2">
                  <div class="form-group flex flex-col justify-center">
                    <input type="text" name="input1" class="form-control text-right" placeholder="Type a Number">
                  </div>
                  <div class="form-group flex justify-center">
                    <select name="operand" class="form-control">
                      <option value="addition">&#128125;</option>
                      <option value="subtraction">&#128128;</option>
                      <option value="multiplication">&#128123;</option>
                      <option value="division">&#128561;</option>
                    </select>
                  </div>
                  <div class="form-group flex flex-col justify-center">
                    <input type="text" name="input2" class="form-control text-right" placeholder="Type a Number">
                  </div>
                  <div class="form-group flex justify-center">
                    <button class="btn form-control">&#61;</button>
                  </div>
                  <div class="form-group flex justify-center">
                    <input type="text" name="result" class="form-control text-right" readonly="readonly" placeholder="Result">
                  </div>
                </div>
              </form>
            </div>

            <div class="mt-8">
              <div class="text-gray-600 dark:text-gray-400 text-sm border-1 padding-1">
                  <code> 	
                    &#128293; This is a simple calculator application based on emojis. &#128293;
                    <br>
                    The operands are used according to the following emojis:
                    <br>
                    &#128125; Addition
                    <br>
                    &#128128; Subtraction
                    <br>
                    &#128123; Multiplication
                    <br>
                    &#128561; Division
                    <br>
                    <i class="uil uil-github-alt"></i> Fork in github: <a target="_blank" href="https://github.com/RatulSaqibKhan/emoji-calculator-laravel">https://github.com/RatulSaqibKhan/emoji-calculator-laravel</a>
                  </code>
              </div>
          </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
          <div class="flex items-center justify-center">
            <span>Made with <i class="uil uil-heart-alt ml-1 mr-1 social-font"></i> by Nazmus Saqib Khan</span>
          </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
          <a href="https://www.linkedin.com/in/md-nazmus-saqib-khan-rsk/" target="_blank" class="social-font ml-1"><i
              class="uil uil-linkedin"></i></a>
          <a href="https://twitter.com/RatulSaqibKhan" target="_blank" class="social-font ml-1"><i
              class="uil uil-twitter"></i></a>
          <a href="https://github.com/RatulSaqibKhan" target="_blank" class="social-font ml-1"><i
              class="uil uil-github"></i></a>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/jquery-3.6.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>