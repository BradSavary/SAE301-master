<nav class="bg-black">
    <!-- Nav classique -->
    <div
      class="flex items-center justify-between max-w-screen-xl mx-auto p-4"
    >
      <button
      id="burger"
        data-collapse-toggle="mega-menu"
        type="button"
        class="burger inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden z-10"
        aria-controls="mega-menu"
        aria-expanded="false"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="27"
          height="28"
          viewBox="0 0 27 28"
          fill="none"
          class="cursor-pointer"
        >
          <path
            d="M2.95312 6.83887H24.4688M2.95312 14.0107H21.0938M2.95312 21.1826H24.4688"
            stroke="white"
            stroke-width="2.10938"
          />
        </svg>
      </button>
      <a
        href="https://g2esports.com"
        class="flex items-center space-x-3 rtl:space-x-reverse"
      >
        <img
          src="../../../assets/G2-Esports-Logo.webp"
          class="h-12"
          alt="G2 Esports Logo"
        />
      </a>
      <div
        class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse"
      >
        <svg
          id="searchingButton"
          xmlns="http://www.w3.org/2000/svg"
          width="28"
          height="28"
          viewBox="0 0 28 28"
          fill="none"
          class="cursor-pointer"
        >
          <path
            d="M23.4316 23.292L18.3438 18.2295M20.546 12.5679C20.546 14.1182 20.0863 15.6337 19.225 16.9227C18.3637 18.2118 17.1395 19.2164 15.7072 19.8097C14.2749 20.403 12.6989 20.5582 11.1784 20.2558C9.65787 19.9533 8.26119 19.2068 7.16497 18.1105C6.06874 17.0143 5.32221 15.6176 5.01976 14.0971C4.71731 12.5766 4.87254 11.0006 5.46581 9.56829C6.05908 8.136 7.06375 6.91181 8.35278 6.05051C9.6418 5.18921 11.1573 4.72949 12.7076 4.72949C13.7369 4.72949 14.7562 4.93224 15.7072 5.32616C16.6582 5.72008 17.5223 6.29745 18.2502 7.02532C18.9781 7.75318 19.5554 8.61729 19.9494 9.56829C20.3433 10.5193 20.546 11.5386 20.546 12.5679Z"
            stroke="white"
            stroke-width="2.10938"
          />
        </svg>
        <svg id="openPanier" 
          xmlns="http://www.w3.org/2000/svg"
          width="28"
          height="28"
          viewBox="0 0 28 28"
          fill="none"
          class="cursor-pointer"
        >
          <path
            d="M9.78711 8.10449C9.78711 5.10707 11.6223 4.30762 13.9004 4.30762C16.1785 4.30762 18.0137 5.10707 18.0137 8.10449"
            stroke="white"
            stroke-width="2.10938"
          />
          <path
            d="M7.0095 19.0073L7.69007 9.00098H21.1575L21.8381 19.0073C21.8764 19.5696 21.7987 20.1338 21.6099 20.6648C21.4211 21.1959 21.1252 21.6825 20.7405 22.0945C20.3559 22.5065 19.8907 22.835 19.3738 23.0597C18.857 23.2845 18.2994 23.4006 17.7358 23.401H11.1135C10.5497 23.4009 9.992 23.2849 9.47492 23.0603C8.95784 22.8356 8.49244 22.5071 8.10761 22.0951C7.72278 21.6831 7.42673 21.1964 7.23783 20.6652C7.04893 20.1341 6.97121 19.5697 7.0095 19.0073Z"
            stroke="#A7A2A2"
            stroke-width="2.4"
          />
        </svg>
        <img src="../../../assets/flag-eu_50x50.png" alt="EU logo" class="cursor-pointer"/>
      </div>
      <div
        class="items-center w-80 justify-between h-screen md:flex md:h-auto md:order-1 hidden"
      >
        <ul
          class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse"
        >
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0"
              >Jersey</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0"
              >Collabs</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0"
              >Sleeve</a
            >
          </li>
          <li>
            <a
              href="#"
              class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0"
              >Jacket</a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- Menu burger -->
    <div
    id="mega-menu"
    class="flex absolute top-0 left-0 bg-black items-start pt-24 pl-6 w-80 h-screen md:flex md:h-auto md:order-1 -translate-x-full md:top-auto md:left-auto transition ease-in-out duration-300"
  >
    <ul
      class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 "
    >
      <li>
        <a
          href="#"
          class="block py-2 px-3 text-white hover:text-red-600 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0"
          >Jersey</a
        >
      </li>
      <li>
        <a
          href="#"
          class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 hover:text-red-600"
          >Collabs</a
        >
      </li>
      <li>
        <a
          href="#"
          class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 hover:text-red-600"
          >Sleeve</a
        >
      </li>
      <li>
        <a
          href="#"
          class="block py-2 px-3 text-white md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 hover:text-red-600"
          >Jacket</a
        >
      </li>
    </ul>
  </div> 
  <!-- Panier -->
  <div
    id="panierMenu"
    class="hidden flex absolute top-0 right-0 flex-col justify-between pb-8 bg-black pt-8 pl-6 pr-6 w-96 h-screen text-white transition ease-in-out duration-300"
  >
    <div class="flex flex-row items-center justify-between w-full">
      <h2 class="uppercase font-bold text-3xl">
        Cart
      </h2>
      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none" id="closePanier" class="cursor-pointer">
        <path d="M18.4935 2.88083C18.6519 2.72755 18.7782 2.54418 18.8652 2.3414C18.9521 2.13862 18.9979 1.92051 18.9999 1.69978C19.0019 1.47905 18.9601 1.26013 18.8769 1.05579C18.7937 0.851447 18.6707 0.665781 18.5152 0.509622C18.3597 0.353462 18.1747 0.229938 17.9711 0.146255C17.7674 0.0625724 17.5492 0.0204082 17.3292 0.0222215C17.1092 0.0240348 16.8917 0.0697897 16.6895 0.156817C16.4872 0.243844 16.3043 0.3704 16.1514 0.529102L9.50938 7.18974L2.8696 0.529102C2.71788 0.365773 2.53493 0.234772 2.33165 0.143913C2.12837 0.0530535 1.90893 0.00419699 1.68642 0.000258712C1.46391 -0.00367956 1.24289 0.0373812 1.03654 0.120991C0.830189 0.2046 0.642742 0.329045 0.485379 0.486903C0.328015 0.644761 0.203959 0.832795 0.120612 1.03979C0.0372641 1.24679 -0.00366804 1.46851 0.000257902 1.69172C0.00418385 1.91493 0.0528874 2.13505 0.143462 2.33897C0.234037 2.54289 0.364628 2.72642 0.527445 2.87861L7.16281 9.54147L0.523026 16.2021C0.230301 16.5172 0.0709388 16.934 0.0785137 17.3647C0.0860886 17.7954 0.260009 18.2063 0.563634 18.5109C0.867259 18.8155 1.27688 18.9899 1.7062 18.9975C2.13553 19.0051 2.55103 18.8453 2.86518 18.5516L9.50938 11.891L16.1492 18.5538C16.4633 18.8475 16.8788 19.0073 17.3081 18.9997C17.7375 18.9921 18.1471 18.8177 18.4507 18.5131C18.7543 18.2085 18.9283 17.7976 18.9358 17.3669C18.9434 16.9363 18.784 16.5195 18.4913 16.2043L11.856 9.54147L18.4935 2.88083Z" fill="white"/>
      </svg>
    </div>
    <!-- <div>Insérer les obj du panier</div> -->
    <div class="flex flex-col border-t-2 border-white border-solid pt-4">
      <div class="flex flex-row justify-between pb-8">
        <h3 class="uppercase">
          Subtotal
        </h3>
        <p>
          €{{totalprice}}
        </p>
      </div>
      <p class="text-xs text-center pb-3">Shipping, taxes, and discount codes calculated at checkout</p>
      <button class="uppercase bg-red-600 font-medium py-3">Check Out</button>
    </div>
  </div>
  <!-- Recherche -->
  <div id="searchMenu" class=" hidden flex flex-row items-center justify-between pb-8 bg-zinc-900 pt-8 pl-6 pr-6 w-screen text-white transition ease-in-out duration-300 gap-6">
    <div
    class="w-full bg-white flex flex-row justify-between items-center border-solid border-2 border-neutral-600 p-2 text-black"
  >
    <input
      type="text"
      placeholder="Search products here !"
      class="h-full w-full focus:outline-0"
    />
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="26"
      height="26"
      viewBox="0 0 26 26"
      fill="none"
      
    >
      <path
        d="M21.4941 21.5635L16.7832 16.876M18.8223 11.6338C18.8223 13.0692 18.3966 14.4725 17.5991 15.666C16.8016 16.8596 15.6681 17.7898 14.3419 18.3391C13.0157 18.8885 11.5564 19.0322 10.1485 18.7521C8.74065 18.4721 7.44743 17.7809 6.43241 16.7658C5.41738 15.7508 4.72615 14.4576 4.4461 13.0497C4.16606 11.6418 4.30979 10.1825 4.85911 8.85634C5.40844 7.53015 6.33869 6.39664 7.53223 5.59914C8.72577 4.80164 10.129 4.37598 11.5645 4.37598C12.5176 4.37598 13.4613 4.56371 14.3419 4.92844C15.2225 5.29318 16.0226 5.82779 16.6965 6.50174C17.3705 7.17569 17.9051 7.97579 18.2698 8.85634C18.6345 9.7369 18.8223 10.6807 18.8223 11.6338Z"
        stroke="black"
        stroke-width="1.95312"
        stroke-miterlimit="10"
      />
    </svg>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none" id="closeSearch" class="cursor-pointer">
    <path d="M18.4935 2.88083C18.6519 2.72755 18.7782 2.54418 18.8652 2.3414C18.9521 2.13862 18.9979 1.92051 18.9999 1.69978C19.0019 1.47905 18.9601 1.26013 18.8769 1.05579C18.7937 0.851447 18.6707 0.665781 18.5152 0.509622C18.3597 0.353462 18.1747 0.229938 17.9711 0.146255C17.7674 0.0625724 17.5492 0.0204082 17.3292 0.0222215C17.1092 0.0240348 16.8917 0.0697897 16.6895 0.156817C16.4872 0.243844 16.3043 0.3704 16.1514 0.529102L9.50938 7.18974L2.8696 0.529102C2.71788 0.365773 2.53493 0.234772 2.33165 0.143913C2.12837 0.0530535 1.90893 0.00419699 1.68642 0.000258712C1.46391 -0.00367956 1.24289 0.0373812 1.03654 0.120991C0.830189 0.2046 0.642742 0.329045 0.485379 0.486903C0.328015 0.644761 0.203959 0.832795 0.120612 1.03979C0.0372641 1.24679 -0.00366804 1.46851 0.000257902 1.69172C0.00418385 1.91493 0.0528874 2.13505 0.143462 2.33897C0.234037 2.54289 0.364628 2.72642 0.527445 2.87861L7.16281 9.54147L0.523026 16.2021C0.230301 16.5172 0.0709388 16.934 0.0785137 17.3647C0.0860886 17.7954 0.260009 18.2063 0.563634 18.5109C0.867259 18.8155 1.27688 18.9899 1.7062 18.9975C2.13553 19.0051 2.55103 18.8453 2.86518 18.5516L9.50938 11.891L16.1492 18.5538C16.4633 18.8475 16.8788 19.0073 17.3081 18.9997C17.7375 18.9921 18.1471 18.8177 18.4507 18.5131C18.7543 18.2085 18.9283 17.7976 18.9358 17.3669C18.9434 16.9363 18.784 16.5195 18.4913 16.2043L11.856 9.54147L18.4935 2.88083Z" fill="white"/>
  </svg>
  </div>
  </nav>