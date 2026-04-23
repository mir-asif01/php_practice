<nav class="bg-gray-800/50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
            class="size-8" />
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="/" aria-current="page"
              class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-950/50' : ''; ?> ?> rounded-md  px-3 py-2 text-sm font-medium text-white">Home</a>
            <a href="/about" aria-current="page"
              class="<?= $_SERVER['REQUEST_URI'] === '/about.php' ? 'bg-gray-950/50' : ''; ?> ?> rounded-md px-3 py-2 text-sm font-medium text-white">About</a>
            <a href="/contact" aria-current="page"
              class="<?= urlIs('/contact.php') ? 'bg-gray-950/50' : ''; ?> ?> rounded-md px-3 py-2 text-sm font-medium text-white">Contact</a>
            <?php if ($_SESSION['user'] ?? false): ?>
              <a href="/notes" aria-current="page"
                class="<?= $_SERVER['REQUEST_URI'] === '/notes.php' ? 'bg-gray-950/50' : ''; ?> ?> rounded-md px-3 py-2 text-sm font-medium text-white">Notes</a>

              <div>
                <form action="/logout" method="POST">
                  <input type="hidden" name="__method" value="DELETE">
                  <button type="submit"
                    class="bg-gray-950 rounded-md px-3 py-2 text-sm font-medium text-white">Logout</button>
                </form>
              </div>
            <?php else: ?>
              <a href="/register" aria-current="page"
                class="<?= urlIs('/register.php') ? 'bg-gray-950/50' : ''; ?> ?> rounded-md px-3 py-2 text-sm font-medium text-white">Register</a>
              <a href="/login" aria-current="page"
                class="<?= urlIs('/login.php') ? 'bg-gray-950/50' : ''; ?> ?> rounded-md px-3 py-2 text-sm font-medium text-white">Login</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    </el-disclosure>
</nav>