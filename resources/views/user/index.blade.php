<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
        </h2>
    </x-slot>



<a href="{{ route('usuarios.create') }}">Crear usuario</a>

    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
        <form action="" class="flex items-center mb-4">
            <div class="relative w-full mr-2">
                <input type="text" class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-4 border-sky-500 rounded-md text-sm focus:border-blue-500" placeholder="Buscar Cliente...">
                <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
            </div>
            <div class="flex items-center mb-4 order-tab">
                <button type="button" data-tab="order" data-tab-page="active" style="
                background: aquamarine;
            " class=" border-solid border-2 border-sky-500 rounded-full bg-gray-600 text-sm font-medium text-gray-700 py-2 px-4 rounded-tl-md rounded-bl-md hover:text-gray900 active">Active</button>
               </div>
        </form>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[540px]">
                <thead>
                    <tr>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">Service</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Price</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Clicks</th>
                        <th class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create landing page</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create landing page</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create landing page</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create landing page</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex items-center">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                                <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create landing page</a>
                            </div>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="flex flex-col mb-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg shadow-2xl ">


                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>Name</span>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>Email</span>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>Title</span>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>Status</span>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>Role</span>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>EDITAR</span>
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex space-x-4 items-center">
                                    <a href="#">
                                        <span>eliminar</span>
                                    </a>
                                </div>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $usuario->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $usuario->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $usuario->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $usuario->status == 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}"> activo </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">admin</td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('usuarios.edit', ['user' => $usuario]) }}">editar</a>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('usuarios.destroy', ['user' => $usuario]) }}">eliminar</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
