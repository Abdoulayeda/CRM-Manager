<div>
    <div>
        @if (session()->has('message'))
            <div id="alert" class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-500" role="alert">
                <span class="font-medium">Suppression d'une categorie!</span> 
                {{ session('message') }}       
            </div>
        @endif
      
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr class="bg-slate-700 text-white">
                    <th scope="col" class="px-6 py-3">
                        Numero
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Boutique
                    </th>

                   {{--  <th scope="col" class="px-6 py-3 ">
                        Nom
                    </th> --}}

                    <th scope="col" class="px-6 py-3 ">
                        Téléphone
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Adresse
                    </th>

                    <th colspan="2" class="px-6 py-3 ">
                       Action
                    </th>
                   
                </tr>
            </thead>
    
            <tbody>
                @foreach ($contacts as $key=>$contact)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-slate-950">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $contact->boutique }}
                        </td>

                        
                        <td class="px-6 py-4">
                            {{ $contact->telephone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $contact->adresse }}
                        </td>

                       
                        <td class="px-6 py-4">  
                            <a href="{{ route('commerciale.contact.show', $contact->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                     <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                     <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                              
                              {{-- <button wire:click="edit({{ $categorie->id }})" class="bg-slate-800 px-2 py-1 rounded-lg text-white">Modifier</button> --}}
                        </td>
                        <td class="px-6 py-4 text-red-800">
                         {{--    <form wire:submit.prevent="deleteCategory({{ $categorie->id }})">
                                <button type="submit" class="bg-red-800 px-2 py-1  text-white rounded-lg">Supprimer</button>
                            </form> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                              </svg>
                              
                        </td>
                    </tr>
                  {{--    @if ($isEditing && $editCategoryId == $categorie->id)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 py-2">
                        <td colspan="3" class="px-6 py-2">
                            <form wire:submit.prevent="update">
                                <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 mb-2">
                                   
                                    <input wire:model="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Le nom de la catégorie" required/>
                                    @error('name')
                                        <p class="text-red-800">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="bg-blue-800 px-6 py-2 text-white rounded-lg">Enregistrer</button>
                            </form>
                        </td>
                    </tr>
                @endif  --}}
                @endforeach
            </tbody>
        </table>
    
    <!-- Modal de confirmation -->
    <script>
        // Cacher l'alerte après 5 secondes
     setTimeout(function() {
            var alert = document.querySelector('#alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 2000);
    
    </script>
    
    </div>
    
</div>
