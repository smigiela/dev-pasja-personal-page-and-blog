@if (session()->has('message'))
    <div class="text-white px-8 py-4 border-0 rounded relative mb-4 bg-green-400">
          <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell"/>
          </span>
        <span class="inline-block align-middle mr-8">
            <b class="capitalize">{!! session('message') !!}</b>
          </span>
    </div>
@endif

@if (session('error'))
    <div class="text-white px-8 py-4 border-0 rounded relative mb-4 bg-red-600">
          <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell"/>
          </span>
        <span class="inline-block align-middle mr-8">
                <b class="capitalize">{!! session('error') !!}</b>
          </span>
    </div>
@endif

@if (session('errors'))
    <div class="text-white px-8 py-4 border-0 rounded relative mb-4 bg-red-600">
          <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell"/>
          </span>
          <span class="inline-block align-middle mr-8">
              @foreach ($errors->all() as $error)
                  <b class="capitalize">{{ $error }}</b>
              @endforeach
          </span>
    </div>
@endif
