<header class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex-1 md:flex md:items-center md:gap-12">
        <a class="block text-white text-2xl font-bold" href="#">
          Books Recom
        </a>
      </div>

      <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex items-center gap-6 text-lg">
            <li class="<?= urlIs('/') ? "bg-gray-500 px-2 py-1 rounded-md" :"" ?>">
              <a class="text-white transition" href="/"> Home </a>
            </li>

            <li class="<?= urlIs('/about') ? "bg-gray-500 px-2 py-1 rounded-md" :"" ?>">
              <a class="text-white transition" href="about"> About </a>
            </li>

            <li class="<?= urlIs('/books') ? "bg-gray-500 px-2 py-1 rounded-md" :"" ?>">
              <a class="text-white transition" href="books"> Books </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>