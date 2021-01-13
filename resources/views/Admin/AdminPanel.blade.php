<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"><link rel="stylesheet" href="{{asset('css/adminpanel.css')}}">
    <title>Document</title>
</head>
<body>


<div class="flex text-gray-800 min-h-screen overflow-x-hidden">
    <aside
      class="hidden z-40 top-0 bottom-0 md:top-auto md:bottom-auto md:flex flex-col w-72 bg-white shadow-sm"
    >
      <a href="#" class="flex items-center mx-auto my-12">
        <div class="h-8 w-8 bg-purple-600 mr-3 rounded-full"></div>
        <span class="text-3xl font-semibold italic">Subcash</span>
      </a>
      <a
        href="#"
        class="block text-center text-white text-lg font-semibold bg-purple-600 hover:bg-purple-700 py-3 px-4 mx-8 rounded-lg"
        >Transfer money</a
      >
      <nav class="font-semibold text-gray-600 my-12">
        <ul class="space-y-3">
          <li>
            <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-purple-600">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                />
              </svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-purple-600">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                />
              </svg>
              Cards
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center px-8 py-3 bg-gradient-to-r from-purple-200 text-purple-600 inset-active-link"
            >
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                />
              </svg>
              Subscriptions
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-purple-600">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"
                />
              </svg>
              Files
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-purple-600">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
              History
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-purple-600">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                />
              </svg>
              Calendar
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-8 py-3 bg-gradient-to-r hover:from-purple-200 hover:text-purple-600">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 mr-5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                />
              </svg>
              Settings
            </a>
          </li>
        </ul>
      </nav>
      <div
        class="flex flex-col items-center py-3 px-4 bg-purple-200 bg-opacity-50 rounded-md mt-auto mb-10 mx-8"
      >
        <span class="font-semibold text-gray-900">Start saving!</span>
        <a href="#" class="text-purple-600 font-medium underline"
          >Upgrade to PRO</a
        >
      </div>
    </aside>
    <div class="flex-grow bg-gray-100">
      <header class="mt-12 px-16">
        <div class="flex items-center mb-2">
          <h1 class="text-3xl font-semibold mr-4">Your subscriptions</h1>
          <div class="hidden lg:flex">
            <div
              class="h-10 w-10 flex items-center justify-center bg-white rounded-full shadow"
            >
              <svg
                viewBox="0 0 256 256"
                preserveAspectRatio="xMidYMid"
                class="h-6 w-6"
              >
                <path
                  d="M128 8.5c66 0 119.4 53.4 119.4 119.3S194 247.2 128 247.2 8.6 193.8 8.6 127.9 62 8.5 128 8.5z"
                  fill="#E74D89"
                />
                <path
                  d="M128 255.7c-70.6 0-128-57.3-128-127.8C0 57.3 57.4 0 128 0s128 57.3 128 127.8-57.4 127.9-128 127.9zm107.9-110.4c-3.7-1.2-33.8-10.1-68.1-4.7 14.3 39.2 20.1 71.2 21.2 77.8 24.6-16.5 42.1-42.7 46.9-73.1zm-65.2 83.2c-1.6-9.6-8-43-23.3-82.8-.2.1-.5.2-.7.2-61.7 21.5-83.8 64.2-85.8 68.2 18.5 14.4 41.8 23 67.1 23 15.1.1 29.6-3 42.7-8.6zM46.8 201c2.5-4.2 32.5-53.8 88.9-72.1 1.4-.5 2.9-.9 4.3-1.3-2.7-6.2-5.7-12.4-8.9-18.5-54.6 16.3-107.6 15.6-112.4 15.5 0 1.1-.1 2.2-.1 3.3.1 28.1 10.7 53.7 28.2 73.1zM21 105.6c4.9.1 49.9.3 101.1-13.3C104 60.1 84.4 33.1 81.6 29.2 50.9 43.6 28.1 71.8 21 105.6zm81.4-83.8c3 4 22.9 31 40.8 63.9 38.9-14.6 55.3-36.6 57.3-39.4-19.3-17.1-44.7-27.5-72.5-27.5-8.8 0-17.4 1.1-25.6 3zm110.2 37.1c-2.3 3.1-20.6 26.6-61 43.1 2.5 5.2 5 10.5 7.3 15.8.8 1.9 1.6 3.8 2.4 5.6 36.4-4.6 72.5 2.8 76.1 3.5-.3-25.7-9.5-49.4-24.8-68z"
                  fill="#B2215A"
                />
              </svg>
            </div>
            <div
              class="h-10 w-10 -ml-1 flex items-center justify-center bg-white rounded-full shadow"
            >
              <svg viewBox="0 0.388 121.5 89.612" class="h-6 w-6">
                <defs><path id="a" d="M0 .39h121.5V90H0z" /></defs>
                <clipPath id="b">
                  <use xlink:href="#a" overflow="visible" />
                </clipPath>
                <path
                  d="M121.5 43.195v4c-.038.217-.086.43-.111.646-.207 1.74-.341 3.491-.627 5.218-.934 5.613-2.953 10.83-5.953 15.654-4.556 7.324-10.715 12.909-18.455 16.723a43.169 43.169 0 01-14.236 4.201c-1.1.127-2.199.241-3.299.362H36.135c-.215-.04-.429-.104-.646-.117-4.304-.271-8.445-1.252-12.392-2.979-8.593-3.76-15-9.854-19.194-18.242A35.884 35.884 0 01.358 56.86C.237 55.861.119 54.863 0 53.865v-3.881c.041-.215.104-.43.117-.646.223-3.729.988-7.35 2.335-10.83 3.625-9.364 9.944-16.309 18.924-20.804 4.659-2.333 9.625-3.559 14.819-3.831 2.543-.132 5.084.01 7.612.349.229.031.559-.071.718-.234 3.635-3.713 7.774-6.729 12.441-9.015 4.527-2.217 9.291-3.646 14.306-4.218 1.18-.135 2.363-.246 3.545-.368h3.639c.238.037.477.079.715.107 1.803.21 3.616.342 5.402.641 5.572.935 10.759 2.935 15.559 5.906 7.36 4.556 12.969 10.723 16.801 18.487a43.067 43.067 0 014.205 14.246c.13 1.141.241 2.282.362 3.421M53.565 17.312c.073.096.091.141.122.156a48.613 48.613 0 017.139 4.317c.142.103.494.06.666-.048 6.188-3.921 12.896-5.274 20.102-3.996 7.061 1.252 12.807 4.78 17.197 10.415 4.971 6.377 6.866 13.588 5.494 21.611-.92 5.377-3.074 10.201-6.735 14.242-6.68 7.367-15.045 10.414-24.892 9.124-6.062-.794-11.295-3.409-15.626-7.786-5.559-5.615-11.154-11.193-16.729-16.793-.743-.746-1.57-1.346-2.64-1.477-1.869-.229-3.565.704-4.372 2.383-.72 1.499-.627 3.189.935 4.725 6.215 6.101 12.375 12.258 18.583 18.365a30.005 30.005 0 003.409 2.901c4.535 3.293 9.648 5.114 15.185 5.847 4.346.574 8.658.451 12.937-.511 8.162-1.833 14.923-5.999 20.248-12.427 4.397-5.312 7.056-11.416 7.983-18.269a35.81 35.81 0 00-.332-11.749c-1.235-6.33-3.913-11.994-8.204-16.815C95.848 12.334 85.548 8.23 73.291 9.146c-4.715.352-9.175 1.737-13.372 3.934a35.285 35.285 0 00-6.354 4.232m-2.999 64.176a79.384 79.384 0 01-.504-.471c-2.541-2.399-5.096-4.783-7.607-7.213-.486-.47-.933-.699-1.621-.683-2.543.062-5.088.073-7.594-.493-12.46-2.818-19.695-16.365-15.103-28.285 3.622-9.399 13.649-15.123 23.537-13.358 4.432.791 8.322 2.667 11.515 5.96 3.894 4.02 7.904 7.925 11.84 11.904.896.906 1.925 1.319 3.166 1.142 1.604-.229 2.881-.993 3.461-2.566.568-1.548.293-3.014-.879-4.201-4.131-4.185-8.164-8.475-12.462-12.482-8.336-7.775-18.166-10.087-29.038-6.781-14.623 4.443-23.181 19.543-19.84 34.443C12.482 71.98 24.355 81.508 38.248 81.52c3.879.004 7.759.002 11.638 0 .192 0 .384-.017.68-.032"
                  clip-path="url(#b)"
                  fill="#da1f26"
                />
              </svg>
            </div>
            <div
              class="h-10 w-10 flex -ml-1 items-center justify-center bg-white rounded-full shadow"
            >
              <svg viewBox="0 0 168 168" class="h-6 w-6">
                <path
                  fill="#1ED760"
                  d="M83.996.277C37.747.277.253 37.77.253 84.019c0 46.251 37.494 83.741 83.743 83.741 46.254 0 83.744-37.49 83.744-83.741 0-46.246-37.49-83.738-83.745-83.738l.001-.004zm38.404 120.78a5.217 5.217 0 01-7.18 1.73c-19.662-12.01-44.414-14.73-73.564-8.07a5.222 5.222 0 01-6.249-3.93 5.213 5.213 0 013.926-6.25c31.9-7.291 59.263-4.15 81.337 9.34 2.46 1.51 3.24 4.72 1.73 7.18zm10.25-22.805c-1.89 3.075-5.91 4.045-8.98 2.155-22.51-13.839-56.823-17.846-83.448-9.764-3.453 1.043-7.1-.903-8.148-4.35a6.538 6.538 0 014.354-8.143c30.413-9.228 68.222-4.758 94.072 11.127 3.07 1.89 4.04 5.91 2.15 8.976v-.001zm.88-23.744c-26.99-16.031-71.52-17.505-97.289-9.684-4.138 1.255-8.514-1.081-9.768-5.219a7.835 7.835 0 015.221-9.771c29.581-8.98 78.756-7.245 109.83 11.202a7.823 7.823 0 012.74 10.733c-2.2 3.722-7.02 4.949-10.73 2.739z"
                />
              </svg>
            </div>
            <div
              class="h-10 w-10 flex -ml-1 items-center justify-center bg-white rounded-full shadow"
            >
              <svg viewBox="0 0 122.8 222" class="h-6 w-6">
                <style>
                  .st0 {
                    fill: #b1060f;
                    stroke: #000;
                  }
                </style>
                <g id="layer1" transform="translate(12.495 6.756)">
                  <g id="g4182">
                    <g
                      id="g5747"
                      transform="translate(81.631 113.771) scale(.29074)"
                    >
                      <path
                        id="path4155"
                        class="st0"
                        d="M-52.5-412.3l-.3 168-.3 168-13.8-39v-.1l-17.9 374c17.6 49.6 27 76.1 27.1 76.2.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 8 1 14.8 1.5 15.3 1.1s.6-171.4.5-380.1l-.3-379.4h-149z"
                      />
                      <path
                        id="path4157"
                        class="st0"
                        d="M-322-412.8V-33c0 208.9.2 380 .5 380.3.3.3 13.2-1 28.8-2.7 15.6-1.7 37.1-3.9 47.8-4.8 16.4-1.4 65.6-4.5 71.2-4.6 1.7 0 1.8-8.5 2-160.9l.3-160.9 11.9 33.6c1.8 5.2 2.4 6.8 4.2 11.9l17.9-373.9c-3.8-10.7-1.8-5.1-6.1-17.3-14.6-41.3-27-76.2-27.5-77.8l-1-2.8h-150z"
                      />
                      <path
                        id="path5715"
                        class="st0"
                        d="M-52.5-412.3l-.3 168-.3 168-13.8-39v-.1l-17.9 374c17.6 49.6 27 76.1 27.1 76.2.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 8 1 14.8 1.5 15.3 1.1s.6-171.4.5-380.1l-.3-379.4h-149z"
                      />
                      <path
                        id="path5717"
                        class="st0"
                        d="M-322-412.8V-33c0 208.9.2 380 .5 380.3.3.3 13.2-1 28.8-2.7 15.6-1.7 37.1-3.9 47.8-4.8 16.4-1.4 65.6-4.5 71.2-4.6 1.7 0 1.8-8.5 2-160.9l.3-160.9 11.9 33.6c1.8 5.2 2.4 6.8 4.2 11.9l17.9-373.9c-3.8-10.7-1.8-5.1-6.1-17.3-14.6-41.3-27-76.2-27.5-77.8l-1-2.8h-150z"
                      />
                      <radialGradient
                        id="path5719_1_"
                        cx="18038.016"
                        cy="-146.44"
                        r="368.717"
                        gradientTransform="matrix(.07072 -.02449 -.897 -2.5906 -1526.665 25.194)"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop offset="0" />
                        <stop offset="1" stop-opacity="0" />
                      </radialGradient>
                      <path
                        id="path5719"
                        d="M-322-412.8v213.2l150.2 398.4c0-9.1 0-14.1.1-24.5l.3-160.9 11.9 33.6C-93.5 234.2-58 334.6-57.8 334.8c.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 8 1 14.8 1.5 15.3 1.1.3-.3.5-84.1.5-202.4L-52.7-285l-.1 40.7-.3 168-13.8-39c-13.5-38.1-22.5-63.6-76.8-217-14.6-41.3-27-76.2-27.5-77.8l-1-2.8H-322v.1z"
                        fill="url(#path5719_1_)"
                      />
                      <path
                        id="path5721"
                        d="M-322-412.8l150.5 426.5v-.2l11.9 33.6C-93.5 234.2-58 334.6-57.8 334.8c.1.1 10.1.7 22.2 1.3 36.6 1.8 82 5.7 116.5 10 7.9 1 14.8 1.5 15.2 1.1L-53.1-76.4v.1l-13.8-39c-13.5-38.1-22.5-63.6-76.8-217-14.6-41.3-27-76.2-27.5-77.8l-1-2.8h-74.9l-74.9.1z"
                        fill="#e50914"
                      />
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <div
              class="h-10 w-10 flex -ml-1 items-center justify-center bg-white rounded-full shadow font-semibold text-blue-500"
            >
              +19
            </div>
          </div>
          <div class="ml-auto flex items-center space-x-3">
            <button
              class="p-2 text-gray-600 relative bg-white rounded-full shadow hover:bg-gray-100 hover:text-gray-700"
            >
              <span
                class="absolute top-0 right-0 h-3 w-3 bg-red-500 rounded-full mt-1 mr-2"
              ></span>
              <span
                class="absolute top-0 right-0 h-3 w-3 bg-red-500 rounded-full mt-1 mr-2 animate-ping"
              ></span>
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-6 w-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                />
              </svg>
            </button>
            <button
              class="h-10 w-10 bg-gray-200 border shadow rounded-full overflow-hidden"
            >
              <img
                src="https://tinyfac.es/data/avatars/475605E3-69C5-4D2B-8727-61B7BB8C4699-500w.jpeg"
                class="h-full w-full object-cover"
              />
            </button>
          </div>
        </div>
        <div class="flex space-x-6">
          <div class="font-semibold">
            <span class="text-gray-600 text-sm mr-1">Monthly</span>
            <span class="text-blue-500">$284.34</span>
          </div>
          <div class="font-semibold">
            <span class="text-gray-600 text-sm mr-1">Yearly</span>
            <span class="text-blue-500">$3240.34</span>
          </div>
        </div>
      </header>
      <main class="relative px-16 py-4 space-y-4">
        <div class="flex">
          <div class="relative flex-grow mr-8">
            <span class="absolute top-0 left-0 mt-3 ml-4">
              <svg
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-5 w-5 text-gray-500"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                />
              </svg>
            </span>
            <input
              type="text"
              placeholder="Search"
              class="pl-12 pr-2 py-2 w-full font-medium bg-white border-2 border-transparent focus:outline-none focus:border-purple-600 rounded-lg"
            />
          </div>
          <button
            class="py-2 pl-5 pr-6 mr-3 flex items-center flex-shrink-0 bg-purple-600 rounded-lg text-white text-sm font-semibold hover:bg-purple-700"
          >
            <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 mr-2">
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                clip-rule="evenodd"
              />
            </svg>
            Add new
          </button>
          <button
            class="p-2 bg-purple-600 rounded-lg text-white text-sm font-semibold hover:bg-purple-700"
          >
            <svg
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="h-6 w-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
              />
            </svg>
          </button>
        </div>
        <div class="bg-gray-200 text-center py-64 rounded-lg text-4xl text-gray-500">Content</div>
      </main>
    </div>
  </div>


</body>
</html>
