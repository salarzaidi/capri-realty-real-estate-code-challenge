<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $users->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div x-data="init()" class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex  items-center gap-4 mb-4">

                <button
                    type="button"
                    @click="refresh()"
                    class=" inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Refresh
                </button>
            </div>
            <div x-data="refresh()">
            <template x-if="users && !isLoading">
                <table  class="border-collapse table-auto w-full text-sm">
                    <thead>
                    <tr>
                        <template x-for="column in users.headers">
                            <th x-text="column"
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">

                            </th>
                        </template>
                    </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                    <template x-for="row in users.rows">
                        <tr>
                            <template x-for="value in row">
                                <td x-text="value"
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">

                                </td>
                            </template>
                        </tr>
                    </template>
                    </tbody>
                </table>
            </template>
            </div>
                <template x-if="isLoading" >
                    <p class="text-center w-auto">loading...</p>
                </template>



        </div>
    </div>

</x-app-layout>

<script>
    function init() {
        return {
            isLoading:false,
            users: null,
            refresh() {
                this.isLoading = true;
                fetch(`{{route('api-users')}}`)
                    .then(res => res.json())
                    .then(data => {
                        this.isLoading = false;
                        this.users = data;
                    });
            }
        }
    }
</script>
