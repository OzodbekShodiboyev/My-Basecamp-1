<head>
    <link rel="stylesheet" href="addProject.css">
</head>
<x-app-layout>
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible mt-4">
        <strong>{{ session('message') }}</strong> 
        <button type="button" class="close" data-dismiss="alert" onclick="closeF()">
            <svg xmlns="http://www.w3.org/2000/svg"  class="cancel-icon" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
              </svg>
        </button>
    </div>
    @endif
        <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <form class="mt-6 space-y-6" action="{{url('project-save')}}" method="POST">
                            @csrf
                            <div class="name">
                                <label for="name" class="label-name">Project name</label> <br>
                                <input name="name" type="text">
                            </div>
                            <div class="desription">
                                <label for="description" class="label-description">Description</label> <br>
                                <textarea name="description"></textarea>
                            </div>
                            <x-primary-button>{{ __('Add Project') }}</x-primary-button>
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