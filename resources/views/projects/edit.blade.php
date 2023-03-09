<x-app-layout>
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible mt-4">
        <strong>{{ session('message') }}Salom</strong> 
        <button type="button" class="close" data-dismiss="alert" onclick="closeF()">
            <svg xmlns="http://www.w3.org/2000/svg"  class="cancel-icon" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
              </svg>
        </button>
    </div>
    @endif
    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6" style="width: 40%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <header>
                    <form class="mt-6 space-y-6" action="{{url('project-update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="name">
                            <label for="name" style="color:#fff; margin-bottom: 30px;" class="label-name">Project name</label> <br>
                            <input name="name" type="text" style="width: 100%; margin:auto; border-radius:10px;" value="{{$data->name}}">
                        </div>
                        <div class="desription" style="margin-top: 30px;">
                            <label for="description" style="color:#fff;" class="label-description">Description</label> <br>
                            <textarea name="description" style="width: 100%;margin:auto;margin-top: 30px; border-radius:10px;">{{$data->description}}</textarea>
                        </div>
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </form>
                </header>
            </div>
        
        </div>
    </div>
    <script>
        closeBtn = document.querySelector('.close');
        alert = document.querySelector('.alert');
        function closeF(){
            alert.style.display = 'none';
        }
    </script>
    
</x-app-layout>