<x-app-layout>
   <div class="filters flex space-x-6">
       <div class="w-1/3">
          <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
              <option value="category one">Category One</option>
              <option value="category two">Category Two</option>
              <option value="category three">Category Three</option>
              <option value="category four">Category Four</option>
          </select>
       </div>
       <div class="w-1/3">
           <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
               <option value="category one">Filter One</option>
               <option value="category two">Filter Two</option>
               <option value="category three">Filter Three</option>
               <option value="category four">Filter Four</option>
           </select>
       </div>
       <div class="w-2/3 relative">

           <input class="w-full placeholder-gray-900 rounded-xl border-none bg-white px-4 py-2 pl-8" type="search" placeholder="Find an idea">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg  class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
       </div>
   </div>
</x-app-layout>
