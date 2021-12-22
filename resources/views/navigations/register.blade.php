<div class="flex justify-center sm:my-5 my-2">
    
  @if( $update_info )

  <div class="text-center mt-5">
    <div class="">
      <div class="text-green-700 bg-green-200 px-3 rounded-2xl">Thanks for updating your profile info !</div>

      <div class="my-3">
        <button class="bg-indigo-200 px-3 hover:bg-indigo-300 hover:shadow-lg rounded-2xl text-indigo-700">Modify</button>
      </div>
    </div>
  </div>

  @else

  <form class="w-full max-w-lg" action="{{ route('registerInfoInfo') }}" method="post">
    @csrf
  
      <div class="sm:mb-5 mb-2 text-gray-700 border-b-2 pb-1">
          Please update your profile information
      </div>
  
      <div class="flex flex-wrap -mx-3 text-xs">
          <div class="w-full md:w-1/3 px-3 sm:pb-5 sm:mb-5 mb-2 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                tittle
              </label>
              <div class="relative">
                <select name="title" class="block appearance-none focus:ring-0 focus:border-transparent w-full text-xs h-8 bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option value="Mr">Mr</option>
                  <option value="Dr">Dr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Miss">Miss</option>
                  <option value="Other">Other</option>
                </select>
              </div>
  
              @error('title')
              <p class="text-red-500 text-xs italic pt-1">Optional field.</p>
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
              @enderror
              
          </div>
          
          <div class="w-full md:w-1/3 px-3 sm:mb-5 mb-2 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
              Job title
            </label>
            <input name="job_title" class="appearance-none focus:ring-0 focus:border-transparent block w-full text-xs h-8 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="Dr">
            
            @error('job_title')
              <p class="text-red-500 text-xs italic pt-1">Optional field.</p>
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
            @enderror
          </div>
          
          <div class="w-full md:w-1/3 px-3 sm:mb-5 mb-2 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
              Zip
            </label>
            <input class="appearance-none focus:ring-0 focus:border-transparent block w-full text-xs h-8 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
          </div>
        </div>
  
      <div class="flex flex-wrap -mx-3 sm:mb-5 mb-2">
        <div class="w-full md:w-1/2 px-3 sm:mb-5 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Current status
          </label>
          <input name="status" class="appearance-none focus:ring-0 focus:border-transparent block w-full text-xs bg-gray-200 text-gray-700 border border-red-500 h-8 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Managing Director">
          
          @error('job_title')
              <p class="text-red-500 text-xs italic pt-1">Optional field.</p>
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
              @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 sm:mb-5 mb-2">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Company Name
          </label>
          <input name="company" class="appearance-none focus:ring-0 focus:border-transparent block w-full text-xs bg-gray-200 text-gray-700 border h-8 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="CAG Tower">
          
          @error('company')
              <p class="text-red-500 text-xs italic pt-1">Optional field.</p>
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
              @enderror
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 sm:mb-5 mb-2">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Mobile contacts
          </label>
          <input name="contacts" class="appearance-none focus:ring-0 focus:border-transparent block w-full text-xs bg-gray-200 text-gray-700 h-8 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="+255 123 456 789, +255 987 654 321.">
          <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 sm:mb-5 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
            City
          </label>
          <input Name="city" class="appearance-none focus:ring-0 focus:border-transparent block w-full bg-gray-200 text-xs text-gray-700 border border-gray-200 h-8 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Dar es salaam">
          
          @error('city')
              <p class="text-red-500 text-xs italic pt-1">Optional field.</p>
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
              @enderror
        </div>
        <div class="w-full md:w-1/3 px-3 sm:mb-5 mb-2 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            State
          </label>
          <div class="relative">
            <select name="state" class="block appearance-none focus:ring-0 focus:border-transparent text-xs w-full h-8 bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option value="Tanzania">Tanzania</option>
              <option value="Burundi">Burundi</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Uganda">Uganda</option>
              <option value="Kenya">Kenya</option>
              <option value="Other">Other</option>
            </select>
          </div>
          
          @error('state')
              <p class="text-red-500 text-xs italic pt-1">Optional field.</p>
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
              @enderror
        </div>
        <div class="w-full md:w-1/3 px-3 sm:mb-5 mb-2 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
            Zip
          </label>
          <input class="appearance-none focus:ring-0 focus:border-transparent block w-full h-8 text-xs bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 sm:mb-5">
        <div class="w-full px-3 sm:my-5 mt-4">
          <button class="bg-gray-200 text-sm py-1 mb-3 w-full rounded-lg text-gray-700 hover:bg-gray-300 hover:shawod-lg">Submit</button>       
        </div>
      </div>
    </form>
    
  @endif


</div>