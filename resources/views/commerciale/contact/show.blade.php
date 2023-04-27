@extends('master.commerciale')

@section('content')
<div class="p-4 sm:ml-64">
    
   <div class="flex gap-2">
    <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4">
        <!-- Modal toggle -->
        <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Detail du contact
        </button>
    </div>
    <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4">
        <button id="defaultModalButton" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
        Ajouter une action
        </button>
    </div>
   </div>

    {{-- Ajout du modal pour les details du contact. --}}
 @include('modals.contactdetail')  

 @include('modals.addaction')

   @livewire('action-table')
</div>
@endsection