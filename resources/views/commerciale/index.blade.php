@extends('master.commerciale')

@section('content')
    <span>Commerciale</span>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2  border-dashed rounded-lg dark:border-gray-700">
           <div class="grid grid-cols-3 gap-4 mb-4">
              <div class="flex items-center justify-center h-24 rounded bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">Nombre de vendeurs</p>
              </div>
              <div class="flex items-center justify-center h-24 rounded bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">Clients</p>
              </div>
              <div class="flex items-center justify-center h-24 rounded bg-gray-800">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">Cours</p>
              </div>
           </div>
        </div>
     </div>
@endsection