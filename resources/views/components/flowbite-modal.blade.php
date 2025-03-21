<div><button id="id_add_user" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
    class="flex focus:outline-none text-gray-300 bg-blue-900 hover:bg-blue-800 font-medium rounded-lg text-sm px-2 py-1.5 "><svg
      class="w-5 h-5 text-gray-800 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
      height="24" fill="none" viewBox="0 0 24 24">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
    </svg>
    Agregar nuevo usuario
  </button>
  <!-- Main modal -->
  <div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
        <!-- Modal header -->
        <div
          class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Create New Product
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="crud-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <form  id="id_form_add_user" class="p-4 md:p-5">
          @csrf
          <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-1">
              <label for="id_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                y apellido </label>
              <input type="text" wire:model="name" name="name" id="id_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>
            <div class="col-span-2 sm:col-span-1">
              <label for="id_ci_card"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cedula</label>
              <input type="number" wire:model="ci_card" name="ci_card" id="id_ci_card"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>
            <div class="col-span-2 sm:col-span-1">
              <label for="id_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
              <input wire:model="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500""
                type="email" name="email" id="id_email">
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="id_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
              <input wire:model="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500""
                type="number" name="phone" id="id_phone">
            </div>

            <div class="col-span-1">
              <label for="id_city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad
              </label>
              <input type="text" wire:model="city" name="city" id="id_city"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>

            <div class="col-span-1">
              <label for="id_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion
              </label>
              <input type="text" wire:model="address" name="address" id="id_address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>

            <div class="col-span-2">
              <label for="id_username"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuario</label>
              <input type="text" wire:model="username" name="username" id="id_username"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>

            <div class="col-span-1">
              <label id="label_id_password" for="id_password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
              <input type="password" wire:model="password" name="password" id="id_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>

            <div class="col-span-1">
              <label id="label_id_c_password" for="id_c_password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar
                Contraseña</label>
              <input type="password" name="c_password" id="id_c_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="">
            </div>

          </div>
          <button type="button" wire:click="create" 
            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
            </svg>
            <label id="btn_modal">Registrar nuevo usuario</label>
          </button>
        </form>
      </div>
    </div>
  </di>
</div>
