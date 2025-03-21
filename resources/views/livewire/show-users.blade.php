<div>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div
      class=" flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
      <div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
          <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <input name="search" wire:model.live="search" type="text"
            class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Buscar usuario por nombre">
        </div>
      </div>
      @livewire('create-user')
    </div>

    @if ($users->count())
      <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class=" px-6 py-3" wire:click="order('id')">
              <label class="cursor-pointer">ID</label>
            </th>

            <th scope="col" class=" px-6 py-3" wire:click="order('name')">
              <label class="cursor-pointer">Nombre</label>
            </th>

            <th scope="col" class=" px-6 py-3" wire:click="order('ci_card')">
              <label class="cursor-pointer">Cedula</label>
            </th>

            <th scope="col" class="px-6 py-3">
              usuario
            </th>

            <th scope="col" class="px-6 py-3 text-center">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr
              class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">
                {{ $user->id }}
              </td>
              <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">{{ $user->name }}</div>
                  <div class="font-normal text-gray-500">{{ $user->email }}</div>
                </div>
              </th>
              <td class="px-6 py-4">
                {{ $user->ci_card }}
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center">
                  {{ '@' . $user->username }}
                </div>
              </td>
              <td class="flex px-6 py-4 items-center justify-center">
                <button id="id_edit_user" type="button" data_ed={{ $user->id }}
                  class=" flex focus:outline-none text-gray-300 bg-green-800 hover:bg-green-700 font-medium rounded-lg text-sm ed-us px-2 py-1.5 me-2 mb-2"><svg
                    class="w-5 h-5 text-gray-800 dark:text-gray-300" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4" />
                  </svg>
                  Modificar
                </button>
                <button type="button" data_dl={{ $user->id }}
                  class=" flex focus:outline-none text-gray-300 bg-red-900 hover:bg-red-800 font-medium rounded-lg del-us text-sm px-2 py-1.5 me-2 mb-2 dark:bg-red-900 dark:hover:bg-red-700 "><svg
                    class="w-5 h-5 text-gray-800 dark:text-gray-300" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                  </svg>
                  Eliminar
                </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <div
        class="flex items-center px-6 py-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
        role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium ">!No se encontraron resultados.!!</span>
        </div>
      </div>
    @endif

  </div>
</div>
